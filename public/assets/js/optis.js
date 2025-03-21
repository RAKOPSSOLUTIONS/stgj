



document.addEventListener('DOMContentLoaded', function() {
    const appElement = document.getElementById('app');

    const navette = JSON.parse(appElement.dataset.navette);
    const entries = JSON.parse(appElement.dataset.entries);
    const calculateRouteBtn = document.getElementById('calculateRouteBtn');
    const updateTrafficBtn = document.getElementById('updateTraffic');
    const openGoogleMapsBtn = document.getElementById('openGoogleMapsBtn'); 

    console.log('Entriesaaa:', entries);
    console.log('Navette:', navette);



// Initialize map
      const startIcon = L.icon({
        iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png',
        iconRetinaUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon-2x.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });

 

    const map = L.map('map').setView([34.020882, -6.84165], 7);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);
    
    // Add legend
// Update the legend to show the new traffic classifications
const legend = L.control({ position: 'bottomright' });
legend.onAdd = function(map) {
    const div = L.DomUtil.create('div', 'legend');
    div.innerHTML = `
        <div class="legend-item">
            <span class="legend-color" style="background: #ffff00"></span>Normal Traffic (+5 min)
        </div>
        <div class="legend-item">
            <span class="legend-color" style="background: #ff0000"></span>Rush Hour Traffic (+10 min)
        </div>
        <div class="legend-item">
            <span class="legend-color" style="background: purple"></span>Stop Point
        </div>
    `;
    return div;
};
    legend.addTo(map);

    // Initialize variables
    let markers = [];
    let routeSegments = [];
    let lastUpdateTime = null;



    
    function generateGoogleMapsUrl(optimizedPoints) {
        const baseUrl = 'https://www.google.com/maps/dir/';
        const coordinates = optimizedPoints.map(point => `${point.lat},${point.lon}`).join('/');
        const fullUrl = `${baseUrl}${coordinates}/@${optimizedPoints[0].lat},${optimizedPoints[0].lon},12z/data=!3m1!4b1!4m2!4m1!3e0?entry=ttu&g_ep=EgoyMDI1MDEyNi4wIKXMDSoASAFQAw%3D%3D`;
        return fullUrl;
    }

    // Function to handle opening Google Maps
    function openGoogleMaps() {
        if (googleMapsUrl) {
            window.open(googleMapsUrl, '_blank');
        } else {
            alert('No route calculated yet.');
        }
    }

    // Add event listener for the Google Maps button
    openGoogleMapsBtn.addEventListener('click', openGoogleMaps);
    


    // Transform the data format
let routeData = {
    navette: [{
        id: navette.id,
        pickup_latitude: navette.pickupLatitude,
        pickup_longitude: navette.pickupLongitude,
        dropoff_latitude: navette.dropoffLatitude,
        dropoff_longitude: navette.dropoffLongitude,
        pickup_location: navette.pickupLocation,
        dropoff_location: navette.dropoffLocation,
        nom_trajet: navette.nomTrajet,
        date_navette: navette.dateNavette,
        heure_navette: navette.heureNavette,
        navette_direction: navette.direction,
        // Calculate time limit in minutes


        
        time_limit: 57
    }],
    
    reservation_entries: entries.map(entry => ({
        id : entry.id,
        pickup_latitude: entry.pickupLatitude,
        pickup_longitude: entry.pickupLongitude,
        pickup_location: entry.pickupLocation,
        dropoffLatitude : entry.dropoffLatitude ,
        dropoffLongitude : entry.dropoffLongitude,
        navette_id: entry.navetteId,
        // Ensure stop_time is a number, default to 1 if not provided
        stop_time: parseInt(entry.dureeUp) || 1
    }))
};

// Log the transformed data to verify
console.log('Transformed Route Data:', routeData);


function processEntriesWithUniqueStopTime(entries) {
    const processedEntries = [];
    const locationTracker = new Set(); // Track locations that have already been processed

    entries.forEach(entry => {
        let locationKey ;
        if(routeData.navette[0].navette_direction === 'Sortie'){
            locationKey = `${entry.pickup_latitude},${entry.pickup_longitude}`;
        }else{
            locationKey = `${entry.pickup_latitude},${entry.pickup_longitude}`;
        }
        

        if (!locationTracker.has(locationKey)) {
            // First occurrence of this location, keep the stop_time as is
            processedEntries.push({
                ...entry,
                stop_time: entry.stop_time || 1 // Ensure stop_time is set
            });
            locationTracker.add(locationKey); // Mark this location as processed
        } else {
            // Subsequent occurrences of this location, set stop_time to 0
            processedEntries.push({
                ...entry,
                stop_time: 0 // Set stop_time to 0 for duplicates
            });
        }
    });
    console.log(processedEntries)
    return processedEntries;
}


function calculerDateNavette(date_navette1, heure_navette1, navette_direction1) {
    // Split the time into hours and minutes
    const timeParts = heure_navette1.toString().split(':');
    let heures = parseInt(timeParts[0], 10);
    let minutes = parseInt(timeParts[1], 10) || 0;

    if (navette_direction1 === "Entrée") {
        // Subtract 1 hour
        heures -= 1;
        if (heures < 0) {
            heures += 24; // Handle underflow (e.g., if heures was 0, it becomes 23)
        }
    
        // Add 10 minutes
        heures = heures % 24; // Ensure heures stays within 0-23 range
    }else if (navette_direction1 === "Sortie") {
        // Add 10 minutes to the start time
        minutes += 10;
        if (minutes >= 60) {
            heures += Math.floor(minutes / 60);
            minutes = minutes % 60;
        }
        heures = heures % 24;
    }

    const heureFormattee = `${heures.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;
    return `${date_navette1} ${heureFormattee}`;
}








async function calculateTimeWithTraffic(currentPoint, nextPoint, date) {
    const { routeData, shapeData } = await calculateRouteSegment(
        currentPoint.lat,
        currentPoint.lon,
        nextPoint.lat,
        nextPoint.lon,
        date
    );

    // Get base time in minutes
    const baseTime = routeData.route.time / 60; 
    
    return baseTime; // Return just the base time, we'll add traffic time separately
}

async function findTimeConstrainedRoute(startPoint, endPoint, stops, timeLimit, startTime) {
let optimizedRoute = [startPoint];
let currentPoint = startPoint;
let currentTime = 0;
let remainingStops = [...stops];

while (remainingStops.length > 0) {
    let bestNextStop = null;
    let bestStopTime = Infinity;
    let shouldGoToEnd = false;
    
    // First, check time to end point with traffic
    const timeToEndWithTraffic = await calculateTimeWithTraffic(currentPoint, endPoint, startTime);
    
    // If time to end would exceed limit, go directly to end
    if (currentTime + timeToEndWithTraffic > timeLimit) {
        shouldGoToEnd = true;
        break;
    }
    
    // Try each remaining stop
    for (let i = 0; i < remainingStops.length; i++) {
        const potentialStop = remainingStops[i];
        
        // Calculate time to this stop with traffic
        const timeToStopWithTraffic = await calculateTimeWithTraffic(
            currentPoint,
            potentialStop,
            startTime
        );
        
        // Calculate time from this stop to end with traffic
        const timeFromStopToEndWithTraffic = await calculateTimeWithTraffic(
            potentialStop,
            endPoint,
            startTime
        );
        
        const stopDuration = potentialStop.stopTime || 0;
        const totalTimeWithTraffic = currentTime + timeToStopWithTraffic + stopDuration + timeFromStopToEndWithTraffic;
        
        // Check if this stop is feasible within time limit
        if (totalTimeWithTraffic <= timeLimit && timeToStopWithTraffic < bestStopTime) {
            bestNextStop = potentialStop;
            bestStopTime = timeToStopWithTraffic;
        }
    }
    
    // If no feasible next stop found, go to end
    if (!bestNextStop) {
        shouldGoToEnd = true;
        break;
    }
    
    // Add best stop to route
    currentTime += bestStopTime + (bestNextStop.stopTime || 0);
    currentPoint = bestNextStop;
    optimizedRoute.push(bestNextStop);
    remainingStops = remainingStops.filter(stop => stop !== bestNextStop);
}

// Add end point
optimizedRoute.push(endPoint);
return optimizedRoute;
}



    function formatDateTime(date) {
        return new Intl.DateTimeFormat('en-US', {
            year: 'numeric',
            month: 'short',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
        }).format(date);
    }

    function formatTime(minutes) {
        const hours = Math.floor(minutes / 60);
        const mins = Math.round(minutes % 60);
        return `${hours}:${mins.toString().padStart(2, '0')}`;
    }

    function calculateArrivalTime(startTime, travelMinutes) {
        const arrivalTime = new Date(startTime);
        arrivalTime.setMinutes(arrivalTime.getMinutes() + travelMinutes);
        return arrivalTime.toLocaleTimeString('en-US', { 
            hour: '2-digit', 
            minute: '2-digit'
        });
    }

    function updateLastUpdateTime() {
        lastUpdateTime = new Date();
        document.getElementById('lastUpdate').innerHTML = `
            <strong>Traffic Data</strong><br>
            <span class="update-time">Last updated: ${formatDateTime(lastUpdateTime)}</span>
        `;
    }

    async function calculateRouteSegment(startLat, startLon, endLat, endLon, date_navette) {
        const start = `${startLat},${startLon}`;
        const end = `${endLat},${endLon}`;

        const formattedDate = encodeURIComponent(date_navette);
        const routeUrl = `https://www.mapquestapi.com/directions/v2/route?key=CuZK1UDkQKkiiQOArmVsBJttIvCup0FB&from=${start}&to=${end}&routeType=fastest&doReverseGeocode=false&timeType=1&date=${formattedDate}`;
        const routeResponse = await fetch(routeUrl);
        const routeData = await routeResponse.json();

        if (!routeData.route) {
            throw new Error('No route found');
        }

        const sessionId = routeData.route.sessionId;
        const shapeUrl = `https://www.mapquestapi.com/directions/v2/routeshape?key=CuZK1UDkQKkiiQOArmVsBJttIvCup0FB&sessionId=${sessionId}&fullShape=true`;
        const shapeResponse = await fetch(shapeUrl);
        const shapeData = await shapeResponse.json();

        return {
            routeData,
            shapeData
        };
    }
    function calculateDistance(point1, point2) {
const R = 6371; // Earth's radius in kilometers
const lat1 = point1.lat * Math.PI / 180;
const lat2 = point2.lat * Math.PI / 180;
const deltaLat = (point2.lat - point1.lat) * Math.PI / 180;
const deltaLon = (point2.lon - point1.lon) * Math.PI / 180;

const a = Math.sin(deltaLat/2) * Math.sin(deltaLat/2) +
    Math.cos(lat1) * Math.cos(lat2) *
    Math.sin(deltaLon/2) * Math.sin(deltaLon/2);
const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
return R * c;
}

function findOptimalRoute(startPoint, endPoint, stops, timeLimit) {
const allPoints = [startPoint, ...stops];
let bestRoute = [];
let shortestDistance = Infinity;
let bestTotalTime = Infinity;

function estimateTime(point1, point2) {
    const distance = calculateDistance(point1, point2);
    // Estimate time in minutes (assuming average speed of 40 km/h)
    return (distance / 40) * 60;
}

function permute(arr, start, end, currentTime) {
    if (start === end) {
        let totalTime = 0;
        let currentPoint = startPoint;
        let isValidRoute = true;
        let routePoints = [startPoint, ...arr];

        // Calculate cumulative time including stops and travel
        for (let i = 0; i < routePoints.length; i++) {
            // Add travel time to next point
            if (i > 0) {
                totalTime += estimateTime(currentPoint, routePoints[i]);
            }

            // Add stop time if it's a stop point
            if (routePoints[i].isStop) {
                totalTime += routePoints[i].stopTime;
            }

            // Check if we exceed time limit
            if (totalTime > timeLimit) {
                isValidRoute = false;
                break;
            }

            currentPoint = routePoints[i];
        }

        // Add time to reach end point
        totalTime += estimateTime(currentPoint, endPoint);

        if (isValidRoute && totalTime <= timeLimit && totalTime < bestTotalTime) {
            bestTotalTime = totalTime;
            bestRoute = [...arr];
        }
    } else {
        for (let i = start; i < end; i++) {
            [arr[start], arr[i]] = [arr[i], arr[start]];
            permute([...arr], start + 1, end, currentTime);
        }
    }
}

if (stops.length > 0) {
    permute(stops, 0, stops.length, 0);
}

return bestRoute.length > 0 ? [startPoint, ...bestRoute, endPoint] : [startPoint, endPoint];
}

async function calculateRoute() {
    // Clear previous markers and route segments
    markers.forEach(marker => map.removeLayer(marker));
    markers = [];
    routeSegments.forEach(segment => map.removeLayer(segment));
    routeSegments = [];

    try {
        const selectedRouteId = routeData.navette[0].id;
        const selectedRoute = routeData.navette[0];
        let timeLimit = selectedRoute.time_limit;

 if (selectedRoute.navette_direction === "Sortie") {
            timeLimit -= 10; // Reduce time limit by 10 minutes for "Entrée"
        }


        let date_navette = await calculerDateNavette(selectedRoute.date_navette, selectedRoute.heure_navette, selectedRoute.navette_direction);
        
        const dateObj = new Date(date_navette);
        const hour = dateObj.getHours();
        
        // Fixed traffic delay in minutes
        const trafficDelay = (hour === 8 || hour === 17 || hour === 18) ? 10 : 5;
        const trafficStatus = (hour === 8 || hour === 17 || hour === 18) ? 'Rush Hour Traffic (+10 min)' : 'Normal Traffic (+5 min)';
        const trafficColor = (hour === 8 || hour === 17 || hour === 18) ? '#ff0000' : '#ffff00';

        let endPoint = {
            lat:  selectedRoute.navette_direction === "Sortie" ? selectedRoute.pickup_latitude : selectedRoute.dropoff_latitude,
            lon:  selectedRoute.navette_direction === "Sortie" ?  selectedRoute.pickup_longitude : selectedRoute.dropoff_longitude,
            location: selectedRoute.navette_direction === "Sortie"  ? selectedRoute.pickup_location :selectedRoute.dropoff_location,
            isEnd: selectedRoute.navette_direction === "Sortie"  ? false : true,
        };
        console.log("endpoint",endPoint)
        const processedStops = processEntriesWithUniqueStopTime(
            routeData.reservation_entries.filter(entry => entry.navette_id === selectedRouteId)
        );
        
        const stops = processedStops.map(stop => ({
            id: stop.id,
            lat: selectedRoute.navette_direction !== "Sortie" ? stop.pickup_latitude : stop.dropoffLatitude,
            lon: selectedRoute.navette_direction !== "Sortie" ? stop.pickup_longitude : stop.dropoffLongitude,
            location: selectedRoute.navette_direction !== "Sortie" ? stop.pickup_location : 'drop off loc',
            stopTime: stop.stop_time, // Use the processed stop_time
            isStop: true
        }));

        function findFarthestPoint(endPoint, stops) {
            let farthestPoint = null;
            let maxDistance = -1;

            for (const stop of stops) {
                const distance = calculateDistance(endPoint, stop);
                if (distance > maxDistance) {
                    maxDistance = distance;
                    farthestPoint = stop;
                }
            }

            // Mark the farthest point with isStart = true
            if (farthestPoint) {
                farthestPoint.isStop =  true;
                farthestPoint.isEnd =  false;
            }

            return farthestPoint;
        }
        let startPoint;
        if( selectedRoute.navette_direction === "Sortie"){
             startPoint = {
                lat:  selectedRoute.pickup_latitude,
                lon:  selectedRoute.pickup_longitude,
                location: selectedRoute.pickup_location,
                isStart: true,
            }
            endPoint = findFarthestPoint(startPoint, stops)
        }else{
         startPoint =  findFarthestPoint(endPoint, stops);
        }
        const optimizedPoints = await findTimeConstrainedRoute(
            startPoint,
            endPoint,
            stops,
            timeLimit,
            date_navette
        );
        googleMapsUrl = generateGoogleMapsUrl(optimizedPoints);

        // Show the Google Maps button
        openGoogleMapsBtn.style.display = 'inline-block';


        let totalDistance = 0;
        let baseTime = 0;
        let totalTrafficTime = 0;
        let accumulatedTime = 0;
        let accumulatedTrafficTime = trafficDelay; 
        let accumulatedDistance = 0;
        let allRouteCoords = [];
        let routeResults = {
            routeName: selectedRoute.nom_trajet,
            date: date_navette,
            timeLimit: timeLimit,
            stopsPlanned: stops.length,
            stopsReached: 0,
            points: []
        };

        // Process each segment of the route
        for (let i = 0; i < optimizedPoints.length - 1; i++) {
            const start = optimizedPoints[i];
            const end = optimizedPoints[i + 1];
            console.log(start , end)
            const { routeData: segmentRoute, shapeData } = await calculateRouteSegment(
                start.lat,
                start.lon,
                end.lat,
                end.lon,
                date_navette
            );

            const routeCoords = [];
            const shapePoints = shapeData.route.shape.shapePoints;
            for (let j = 0; j < shapePoints.length; j += 2) {
                routeCoords.push([shapePoints[j], shapePoints[j + 1]]);
            }
            allRouteCoords = [...allRouteCoords, ...routeCoords];

            const segmentBaseTime = segmentRoute.route.time / 60;
            baseTime += segmentBaseTime;
            accumulatedTime += segmentBaseTime;
            accumulatedTrafficTime += segmentBaseTime; // Add base time to traffic time (which already includes the delay)
            accumulatedDistance += segmentRoute.route.distance * 1.60934;

            start.accumulatedTrafficTime = accumulatedTrafficTime;
            start.accumulatedDistance = accumulatedDistance;

            if (start.isStart || start.isStop) {
                const counter = start.isStop ? routeResults.stopsReached + 1 : 0;

                const markerIcon = start.isStop
                    ? L.divIcon({
                        className: 'number-icon',
                        html: `<div style="background-color: rgba(255, 255, 255, 0.8); 
                                            border-radius: 50%; 
                                            width: 30px; 
                                            height: 30px; 
                                            display: flex; 
                                            align-items: center; 
                                            justify-content: center; 
                                            font-size: 14px; 
                                            font-weight: bold; 
                                            text-align: center; 
                                            color: black;" class="marker-number">${counter - 1}</div>`,
                        iconSize: [30, 30],
                        iconAnchor: [15, 15]
                    })
                    : startIcon;

                const marker = L.marker([start.lat, start.lon], { icon: markerIcon })
                    .bindPopup(`
                        ${start.isStart ? 'Start' : 'Stop'}: ${start.location}<br>
                        Time from start (No Traffic): ${Math.round(accumulatedTime)} minutes<br>
                        Time from start (With Traffic): ${Math.round(accumulatedTrafficTime)} minutes<br>
                        Distance: ${accumulatedDistance.toFixed(2)} km<br>
                        ${start.isStop ? `Stop Duration: ${start.stopTime} minutes<br>` : ''}
                        Remaining time: ${Math.round(timeLimit - accumulatedTime)} minutes
                    `)
                    .addTo(map);

                markers.push(marker);

                if (start.isStop) {
                    routeResults.stopsReached++;
                    accumulatedTime += start.stopTime;
                    accumulatedTrafficTime += start.stopTime;
                }
            }

            

            // Calculate traffic impact
            for (let j = 0; j < routeCoords.length - 1; j++) {
                const segment = L.polyline([routeCoords[j], routeCoords[j + 1]], {
                    color: accumulatedTime > timeLimit ? '#ff0000' : trafficColor,
                    weight: 4,
                    opacity: 0.7
                })
                .bindPopup(`
                    ${trafficStatus}<br>
                    Time from start (No Traffic): ${Math.round(accumulatedTime)} min<br>
                    Time from start (With Traffic): ${Math.round(accumulatedTrafficTime)} min<br>
                    Distance: ${accumulatedDistance.toFixed(2)} km
                `)
                .addTo(map);

                routeSegments.push(segment);
            }
        

            totalDistance += segmentRoute.route.distance * 1.60934;
        }
        if(selectedRoute.navette_direction !== "Sortie"){
        const endMarker = L.marker([endPoint.lat, endPoint.lon], { icon: startIcon })
            .bindPopup(`
                End: ${endPoint.location}<br>
                Total time (No Traffic): ${Math.round(accumulatedTime)} minutes<br>
                Total time (With Traffic): ${Math.round(accumulatedTrafficTime)} minutes<br>
                Total distance: ${totalDistance.toFixed(2)} km<br>
                ${accumulatedTime <= timeLimit ? '✓ Within time limit' : '⚠️ Exceeds time limit'}
            `)
            .addTo(map);
        markers.push(endMarker);
        }
        // Add end marker


        // Update map bounds
        const bounds = L.latLngBounds(allRouteCoords);
        map.fitBounds(bounds, { padding: [50, 50] });

        // Update last update time
        updateLastUpdateTime();

        // Final route results
        routeResults.totalDistance = totalDistance.toFixed(2);
        routeResults.totalTimeNoTraffic = Math.round(accumulatedTime);
        routeResults.totalTimeWithTraffic = Math.round(accumulatedTrafficTime);
        routeResults.withinTimeLimit = accumulatedTime <= timeLimit;
        routeResults.withinTimeLimitWithTraffic = accumulatedTrafficTime <= timeLimit;
        routeResults.timeExceededBy = Math.max(0, Math.round(accumulatedTrafficTime - timeLimit));

        // Adjust start time if direction is "Entrée" and duration is less than 43 minutes
        if (selectedRoute.navette_direction === "Entrée") {
            const startTime = new Date(date_navette); // Parse the original date_navette
        
            if (accumulatedTrafficTime < 43) {
                const difference = 43 - accumulatedTrafficTime; // Calculate the difference
                startTime.setMinutes(startTime.getMinutes() + difference); // Move start time forward
                console.log(`Adjusted start time forward by ${difference} minutes.`);
            } else if (accumulatedTrafficTime > 43) {
                const difference = accumulatedTrafficTime - 43; // Calculate the excess time
                startTime.setMinutes(startTime.getMinutes() - difference); // Move start time backward
                console.log(`Adjusted start time backward by ${difference} minutes.`);
            }
        
            // Format the adjusted time back to the original format (e.g., "YYYY-MM-DD HH:mm")
            const adjustedDate = startTime.toLocaleDateString('en-CA'); // YYYY-MM-DD
            const adjustedTime = startTime.toLocaleTimeString('en-GB', { hour: '2-digit', minute: '2-digit', hour12: false }); // HH:mm
            date_navette = `${adjustedDate} ${adjustedTime}`; // Combine date and time
            routeResults.date = date_navette
            console.log(`Final adjusted start time: ${date_navette}`);
        }
        

        // Console log detailed results
        console.log('Route Analysis Resultsaa:', {
            ...routeResults,
            timeAnalysis: {
                timeLimit: `${timeLimit} minutes`,
                baseTime: `${Math.round(accumulatedTime)} minutes`,
                trafficTime: `${Math.round(accumulatedTrafficTime)} minutes`,
                exceedsLimit: accumulatedTrafficTime > timeLimit,
                exceededBy: `${Math.max(0, Math.round(accumulatedTrafficTime - timeLimit))} minutes`
            },
            efficiency: {
                stopsPlanned: stops.length,
                stopsReached: routeResults.stopsReached,
                stopsSkipped: stops.length - routeResults.stopsReached,
                completionRate: `${((routeResults.stopsReached / stops.length) * 100).toFixed(1)}%`
            }
        });

        // Update results display
        document.getElementById('result').innerHTML = `
            <div class="route-info">
                <strong>Route Details:</strong><br>
                Route: ${selectedRoute.nom_trajet}<br>
                Date: ${date_navette}<br>
                Time Limit: ${timeLimit} minutes<br>
                Total Time (No Traffic): ${Math.round(accumulatedTime)} minutes<br>
                Total Time (With Traffic): ${Math.round(accumulatedTrafficTime)} minutes<br>
                Fixed Traffic Delay: ${trafficDelay} minutes (${trafficStatus})<br>
                Time Limit Status: ${accumulatedTrafficTime <= timeLimit ? 
                    '<span style="color: green">✓ Within time limit</span>' : 
                    `<span style="color: red">⚠️ Exceeds time limit by ${Math.round(accumulatedTrafficTime - timeLimit)} minutes</span>`}<br>
                Total Distance: ${totalDistance.toFixed(2)} km<br>
                Stops Reached: ${routeResults.stopsReached - 1} of ${stops.length}<br>
                Completion Rate: ${(((routeResults.stopsReached - 1) / stops.length) * 100).toFixed(1)}%
            </div>
            <div class="time-comparison">
                <strong>Time Analysis:</strong><br>
                Base Route Time: ${Math.round(accumulatedTime)} minutes<br>
                Traffic Delay: ${trafficDelay} minutes<br>
                ${accumulatedTrafficTime > timeLimit ? 
                    `<span style="color: red">⚠️ Route exceeds time limit by ${Math.round(accumulatedTrafficTime - timeLimit)} minutes with traffic</span>` :
                    `<span style="color: green">✓ Route is feasible even with traffic (${Math.round(timeLimit - accumulatedTrafficTime)} minutes under limit)</span>`}
            </div>
        `;

        await submitRouteData(
            routeResults,
            optimizedPoints,
            routeData.navette[0].id
        );

    } catch (error) {
        console.error('Error calculating route:', error);
        document.getElementById('result').innerHTML = `
            <div class="route-info" style="color: red;">
                An error occurred while calculating the route: ${error.message}<br>
                Please try again or contact support if the problem persists.
            </div>
        `;
    }
}
    // Add event listeners
    async function submitRouteData(routeResults, optimizedPoints, navetteId) {
        // Prepare entries data
        const entriesData = optimizedPoints

        .filter(point => point.isStop)
        .map((point, index) => ({
            id: point.id,
            duree: Math.round(point.accumulatedTrafficTime),
            distance: parseFloat(point.accumulatedDistance.toFixed(2)),
            counter: index + 1  // Add the counter (index + 1 for 1-based count)
        }));
    
    console.log(entriesData);
    
        // Prepare the submission data
        const submissionData = {
            entries: entriesData,
            navette: {
                totalTime: Math.round(routeResults.totalTimeWithTraffic),
                totalDistance: parseFloat(routeResults.totalDistance),
                starttime : routeResults.date.split(" ")[1]
            }
        };
        console.log(submissionData)
        try {
            const response = await fetch(`/admin/navettes/${navetteId}/reserver`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(submissionData)
            });
        
            if (!response.ok) {
                const errorBody = await response.text();
                console.log('Response body:', errorBody);
                throw new Error(`HTTP error! status: ${response.status}`);
            }
        
            const result = await response.json();
            if (result.status === 'success') {
                console.log('Route data successfully saved');
            }
        } catch (error) {
            console.error('Error submitting route data:', error);
        }
        
    }
    
    calculateRouteBtn.addEventListener('click', function() {
        // Show the update traffic button
        updateTrafficBtn.style.display = 'inline-block';
        // Disable the calculate route button
        calculateRouteBtn.disabled = true;
        // Initialize the route calculation
        calculateRoute();
    });

    // Modify the update traffic button click handler
    updateTrafficBtn.addEventListener('click', calculateRoute);
});