document.addEventListener('DOMContentLoaded', function() {
    const appElement = document.getElementById('app');

    const navette = JSON.parse(appElement.dataset.navette);
    const entries = JSON.parse(appElement.dataset.entries);
    const calculateRouteBtn = document.getElementById('calculateRouteBtn');
    const updateTrafficBtn = document.getElementById('updateTraffic');
    const openGoogleMapsBtn = document.getElementById('openGoogleMapsBtn');

    console.log('Entries:', entries);
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
    const legend = L.control({ position: 'bottomright' });
    legend.onAdd = function(map) {
        const div = L.DomUtil.create('div', 'legend');
        div.innerHTML = `
            <div class="legend-item">
                <span class="legend-color" style="background: #00ff00"></span>Light Traffic
            </div>
            <div class="legend-item">
                <span class="legend-color" style="background: #ffff00"></span>Moderate Traffic
            </div>
            <div class="legend-item">
                <span class="legend-color" style="background: #ff0000"></span>Heavy Traffic
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
    let googleMapsUrl = null;

    // Helper function to generate Google Maps URL
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
            time_limit: 57
        }],
        reservation_entries: entries.map(entry => ({
            id: entry.id,
            pickup_latitude: entry.pickupLatitude,
            pickup_longitude: entry.pickupLongitude,
            pickup_location: entry.pickupLocation,
            dropoffLatitude: entry.dropoffLatitude,
            dropoffLongitude: entry.dropoffLongitude,
            navette_id: entry.navetteId,
            stop_time: parseInt(entry.dureeUp) || 1
        }))
    };

    console.log('Transformed Route Data:', routeData);

    // Function to process entries with unique stop time
    function processEntriesWithUniqueStopTime(entries) {
        const processedEntries = [];
        const locationTracker = new Set();

        entries.forEach(entry => {
            let locationKey;
            if (routeData.navette[0].navette_direction === 'Sortie') {
                locationKey = `${entry.pickup_latitude},${entry.pickup_longitude}`;
            } else {
                locationKey = `${entry.pickup_latitude},${entry.pickup_longitude}`;
            }

            if (!locationTracker.has(locationKey)) {
                processedEntries.push({
                    ...entry,
                    stop_time: entry.stop_time || 1
                });
                locationTracker.add(locationKey);
            } else {
                processedEntries.push({
                    ...entry,
                    stop_time: 0
                });
            }
        });
        console.log(processedEntries);
        return processedEntries;
    }

    // Function to calculate the adjusted date and time for the navette
    function calculerDateNavette(date_navette1, heure_navette1, navette_direction1) {
        const timeParts = heure_navette1.toString().split(':');
        let heures = parseInt(timeParts[0], 10);
        let minutes = parseInt(timeParts[1], 10) || 0;

        if (navette_direction1 === "Entrée") {
            heures -= 1;
            if (heures < 0) {
                heures += 24;
            }
        } else if (navette_direction1 === "Sortie") {
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

    // Function to calculate time buffer based on the time of day
    function calculateTimeBuffer(time) {
        const hour = new Date(time).getHours();
        if (hour === 8 || hour === 17 || hour === 18) {
            return 10; // 10 minutes buffer for 8:00, 17:00, or 18:00
        } else {
            return 5; // 5 minutes buffer for all other times
        }
    }

    // Function to calculate route segment
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

    // Function to calculate distance between two points
    function calculateDistance(point1, point2) {
        const R = 6371; // Earth's radius in kilometers
        const lat1 = point1.lat * Math.PI / 180;
        const lat2 = point2.lat * Math.PI / 180;
        const deltaLat = (point2.lat - point1.lat) * Math.PI / 180;
        const deltaLon = (point2.lon - point1.lon) * Math.PI / 180;

        const a = Math.sin(deltaLat / 2) * Math.sin(deltaLat / 2) +
            Math.cos(lat1) * Math.cos(lat2) *
            Math.sin(deltaLon / 2) * Math.sin(deltaLon / 2);
        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        return R * c;
    }

    // Function to find the farthest point from the end point
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

        if (farthestPoint) {
            farthestPoint.isStop = true;
            farthestPoint.isEnd = false;
        }

        return farthestPoint;
    }

    // Function to format date and time
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

    // Function to update the last update time
    function updateLastUpdateTime() {
        lastUpdateTime = new Date();
        document.getElementById('lastUpdate').innerHTML = `
            <strong>Traffic Data</strong><br>
            <span class="update-time">Last updated: ${formatDateTime(lastUpdateTime)}</span>
        `;
    }

    // Function to calculate the optimal route
    async function findTimeConstrainedRoute(startPoint, endPoint, stops, timeLimit, startTime) {
        let optimizedRoute = [startPoint];
        let currentPoint = startPoint;
        let currentTime = 0;
        let remainingStops = [...stops];

        while (remainingStops.length > 0) {
            let bestNextStop = null;
            let bestStopTime = Infinity;

            // Calculate time to end point
            const timeToEnd = await calculateRouteSegment(
                currentPoint.lat,
                currentPoint.lon,
                endPoint.lat,
                endPoint.lon,
                startTime
            ).then(({ routeData }) => routeData.route.time / 60);

            // Add time buffer
            const timeBuffer = calculateTimeBuffer(startTime);
            const totalTimeToEnd = timeToEnd + timeBuffer;

            // If time to end exceeds limit, break
            if (currentTime + totalTimeToEnd > timeLimit) {
                break;
            }

            // Find the best next stop
            for (let i = 0; i < remainingStops.length; i++) {
                const potentialStop = remainingStops[i];

                // Calculate time to this stop
                const timeToStop = await calculateRouteSegment(
                    currentPoint.lat,
                    currentPoint.lon,
                    potentialStop.lat,
                    potentialStop.lon,
                    startTime
                ).then(({ routeData }) => routeData.route.time / 60);

                // Add time buffer
                const totalTimeToStop = timeToStop + timeBuffer;

                // Calculate time from this stop to end
                const timeFromStopToEnd = await calculateRouteSegment(
                    potentialStop.lat,
                    potentialStop.lon,
                    endPoint.lat,
                    endPoint.lon,
                    startTime
                ).then(({ routeData }) => routeData.route.time / 60);

                // Add time buffer
                const totalTimeFromStopToEnd = timeFromStopToEnd + timeBuffer;

                // Calculate total time
                const totalTime = currentTime + totalTimeToStop + (potentialStop.stopTime || 0) + totalTimeFromStopToEnd;

                // Check if this stop is feasible
                if (totalTime <= timeLimit && totalTimeToStop < bestStopTime) {
                    bestNextStop = potentialStop;
                    bestStopTime = totalTimeToStop;
                }
            }

            // If no feasible stop found, break
            if (!bestNextStop) {
                break;
            }

            // Add the best stop to the route
            currentTime += bestStopTime + (bestNextStop.stopTime || 0);
            currentPoint = bestNextStop;
            optimizedRoute.push(bestNextStop);

            // Remove the selected stop from remaining stops
            remainingStops = remainingStops.filter(stop => stop !== bestNextStop);
        }

        // Add the end point to the route
        optimizedRoute.push(endPoint);

        return optimizedRoute;
    }

    // Function to calculate the route
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
                timeLimit -= 10; // Reduce time limit by 10 minutes for "Sortie"
            }

            let date_navette = await calculerDateNavette(selectedRoute.date_navette, selectedRoute.heure_navette, selectedRoute.navette_direction);

            let endPoint = {
                lat: selectedRoute.navette_direction === "Sortie" ? selectedRoute.pickup_latitude : selectedRoute.dropoff_latitude,
                lon: selectedRoute.navette_direction === "Sortie" ? selectedRoute.pickup_longitude : selectedRoute.dropoff_longitude,
                location: selectedRoute.navette_direction === "Sortie" ? selectedRoute.pickup_location : selectedRoute.dropoff_location,
                isEnd: selectedRoute.navette_direction === "Sortie" ? false : true,
            };

            const processedStops = processEntriesWithUniqueStopTime(
                routeData.reservation_entries.filter(entry => entry.navette_id === selectedRouteId)
            );

            const stops = processedStops.map(stop => ({
                id: stop.id,
                lat: selectedRoute.navette_direction !== "Sortie" ? stop.pickup_latitude : stop.dropoffLatitude,
                lon: selectedRoute.navette_direction !== "Sortie" ? stop.pickup_longitude : stop.dropoffLongitude,
                location: selectedRoute.navette_direction !== "Sortie" ? stop.pickup_location : 'drop off loc',
                stopTime: stop.stop_time,
                isStop: true
            }));

            let startPoint;
            if (selectedRoute.navette_direction === "Sortie") {
                startPoint = {
                    lat: selectedRoute.pickup_latitude,
                    lon: selectedRoute.pickup_longitude,
                    location: selectedRoute.pickup_location,
                    isStart: true,
                };
                endPoint = findFarthestPoint(startPoint, stops);
            } else {
                startPoint = findFarthestPoint(endPoint, stops);
            }

            // Call the findTimeConstrainedRoute function
            const optimizedPoints = await findTimeConstrainedRoute(
                startPoint,
                endPoint,
                stops,
                timeLimit,
                date_navette
            );

            googleMapsUrl = generateGoogleMapsUrl(optimizedPoints);
            openGoogleMapsBtn.style.display = 'inline-block';

            let totalDistance = 0;
            let baseTime = 0;
            let accumulatedTime = 0;
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

            for (let i = 0; i < optimizedPoints.length - 1; i++) {
                const start = optimizedPoints[i];
                const end = optimizedPoints[i + 1];
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
                accumulatedDistance += segmentRoute.route.distance * 1.60934;

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
                            Time from start: ${Math.round(accumulatedTime)} minutes<br>
                            Distance: ${accumulatedDistance.toFixed(2)} km<br>
                            ${start.isStop ? `Stop Duration: ${start.stopTime} minutes<br>` : ''}
                            Remaining time: ${Math.round(timeLimit - accumulatedTime)} minutes
                        `)
                        .addTo(map);

                    markers.push(marker);

                    if (start.isStop) {
                        routeResults.stopsReached++;
                        accumulatedTime += start.stopTime;
                    }
                }

                totalDistance += segmentRoute.route.distance * 1.60934;
            }

            if (selectedRoute.navette_direction !== "Sortie") {
                const endMarker = L.marker([endPoint.lat, endPoint.lon], { icon: startIcon })
                    .bindPopup(`
                        End: ${endPoint.location}<br>
                        Total time: ${Math.round(accumulatedTime)} minutes<br>
                        Total distance: ${totalDistance.toFixed(2)} km<br>
                        ${accumulatedTime <= timeLimit ? '✓ Within time limit' : '⚠️ Exceeds time limit'}
                    `)
                    .addTo(map);
                markers.push(endMarker);
            }

            const bounds = L.latLngBounds(allRouteCoords);
            map.fitBounds(bounds, { padding: [50, 50] });

            updateLastUpdateTime();

            routeResults.totalDistance = totalDistance.toFixed(2);
            routeResults.totalTime = Math.round(accumulatedTime);
            routeResults.withinTimeLimit = accumulatedTime <= timeLimit;
            routeResults.timeExceededBy = Math.max(0, Math.round(accumulatedTime - timeLimit));

            if (selectedRoute.navette_direction === "Entrée") {
                const startTime = new Date(date_navette);
                const timeBuffer = calculateTimeBuffer(selectedRoute.heure_navette);

                if (accumulatedTime < 43) {
                    const difference = 43 - accumulatedTime;
                    startTime.setMinutes(startTime.getMinutes() + difference);
                } else if (accumulatedTime > 43) {
                    const difference = accumulatedTime - 43;
                    startTime.setMinutes(startTime.getMinutes() - difference);
                }

                const adjustedDate = startTime.toLocaleDateString('en-CA');
                const adjustedTime = startTime.toLocaleTimeString('en-GB', { hour: '2-digit', minute: '2-digit', hour12: false });
                date_navette = `${adjustedDate} ${adjustedTime}`;
                routeResults.date = date_navette;
            }

            console.log('Route Analysis Results:', {
                ...routeResults,
                timeAnalysis: {
                    timeLimit: `${timeLimit} minutes`,
                    baseTime: `${Math.round(accumulatedTime)} minutes`,
                    exceedsLimit: accumulatedTime > timeLimit,
                    exceededBy: `${Math.max(0, Math.round(accumulatedTime - timeLimit))} minutes`
                },
                efficiency: {
                    stopsPlanned: stops.length,
                    stopsReached: routeResults.stopsReached,
                    stopsSkipped: stops.length - routeResults.stopsReached,
                    completionRate: `${((routeResults.stopsReached / stops.length) * 100).toFixed(1)}%`
                }
            });

            document.getElementById('result').innerHTML = `
                <div class="route-info">
                    <strong>Route Details:</strong><br>
                    Route: ${selectedRoute.nom_trajet}<br>
                    Date: ${date_navette}<br>
                    Time Limit: ${timeLimit} minutes<br>
                    Total Time: ${Math.round(accumulatedTime)} minutes<br>
                    Time Limit Status: ${accumulatedTime <= timeLimit ? 
                        '<span style="color: green">✓ Within time limit</span>' : 
                        `<span style="color: red">⚠️ Exceeds time limit by ${Math.round(accumulatedTime - timeLimit)} minutes</span>`}<br>
                    Total Distance: ${totalDistance.toFixed(2)} km<br>
                    Stops Reached: ${routeResults.stopsReached - 1} of ${stops.length}<br>
                    Completion Rate: ${(((routeResults.stopsReached - 1) / stops.length) * 100).toFixed(1)}%
                </div>
                <div class="time-comparison">
                    <strong>Time Analysis:</strong><br>
                    Base Route Time: ${Math.round(accumulatedTime)} minutes<br>
                    ${accumulatedTime > timeLimit ? 
                        `<span style="color: red">⚠️ Route exceeds time limit by ${Math.round(accumulatedTime - timeLimit)} minutes</span>` :
                        `<span style="color: green">✓ Route is feasible (${Math.round(timeLimit - accumulatedTime)} minutes under limit)</span>`}
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

    // Function to submit route data
    async function submitRouteData(routeResults, optimizedPoints, navetteId) {
        const entriesData = optimizedPoints
            .filter(point => point.isStop)
            .map((point, index) => ({
                id: point.id,
                duree: Math.round(point.accumulatedTime),
                distance: parseFloat(point.accumulatedDistance.toFixed(2)),
                counter: index + 1
            }));

        const submissionData = {
            entries: entriesData,
            navette: {
                totalTime: Math.round(routeResults.totalTime),
                totalDistance: parseFloat(routeResults.totalDistance),
                starttime: routeResults.date.split(" ")[1]
            }
        };

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

    // Add event listeners
    calculateRouteBtn.addEventListener('click', function() {
        updateTrafficBtn.style.display = 'inline-block';
        calculateRouteBtn.disabled = true;
        calculateRoute();
    });

    updateTrafficBtn.addEventListener('click', calculateRoute);
});