<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/reservation_entries/recap.html.twig */
class __TwigTemplate_c10bc43f0f1d0e23615575a49667a9e3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation_entries/recap.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation_entries/recap.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/reservation_entries/recap.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "  <div class=\"row mb-4\">
    <div class=\"col-lg-9 col-9\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-calendar-check\"></i>
        ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recap des reservations"), "html", null, true);
        yield "
      </h1>
    </div>
    <div class=\"col-lg-3 col-3\">
      <div class=\"float-end\"></div>
    </div>
  </div>

  ";
        // line 16
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "get", ["sortable"], "method", false, false, false, 16)) {
            // line 17
            yield "    ";
            yield from $this->loadTemplate("layout/form/search/index.html.twig", "admin/reservation_entries/recap.html.twig", 17)->unwrap()->yield(CoreExtension::merge($context, ["form" =>             // line 18
(isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 18, $this->source); })()), "tableId" => "reservation_entries"]));
            // line 21
            yield "  ";
        }
        // line 22
        yield "
  <table class=\"table table-hover mb-0\">
    <thead>
      <tr>
        <th>#</th>
        <th>Date</th>
        <th>Trajet</th>
        <th>Direction</th>
        <th>Heure</th>
        <th colspan=\"3\">Nombre de réservations</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 35, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 36
            yield "        <tr class=\"mb-0\" data-pkv=\"10\">
          <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
          <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 0, [], "array", false, false, false, 38), "html", null, true);
            yield "</td>
          <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 1, [], "array", false, false, false, 39), "html", null, true);
            yield "</td>
          <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 3, [], "array", false, false, false, 40), "html", null, true);
            yield "</td>
          <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 4, [], "array", false, false, false, 41), "html", null, true);
            yield "</td>
          <td>
            <span class=\"badge rounded-pill bg-success\" role=\"button\" tabindex=\"0\" data-bs-toggle=\"popover\" data-bs-trigger=\"focus\" data-bs-content=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 11, [], "array", false, false, false, 43), "html", null, true);
            yield "\" data-bs-html=\"true\" title=\"affectées\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 10, [], "array", false, false, false, 43), "html", null, true);
            yield "</span>
          </td>
          <td>
            <span class=\"badge rounded-pill bg-danger\" role=\"button\" tabindex=\"0\" data-bs-toggle=\"popover\" data-bs-trigger=\"focus\" data-bs-content=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 9, [], "array", false, false, false, 46), "html", null, true);
            yield "\" data-bs-html=\"true\" title=\"non affectées\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 8, [], "array", false, false, false, 46), "html", null, true);
            yield "</span>
          </td>
          <td>
            <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries", ["date" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 0, [], "array", false, false, false, 49), "zone" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 1, [], "array", false, false, false, 49), "trajet_id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 5, [], "array", false, false, false, 49), "direction" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 3, [], "array", false, false, false, 49), "heure" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 4, [], "array", false, false, false, 49)]), "html", null, true);
            yield "\"> 
              <span class=\"badge rounded-pill bg-primary\" role=\"button\" tabindex=\"0\" data-bs-toggle=\"popover\" data-bs-trigger=\"focus\" data-bs-content=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 7, [], "array", false, false, false, 50), "html", null, true);
            yield "\" data-bs-html=\"true\" title=\"total\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 6, [], "array", false, false, false, 50), "html", null, true);
            yield "</span>
            </a>
            ";
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 8, [], "array", false, false, false, 52) > 0)) {
                // line 53
                yield "              <a href=\"";
                yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 1, [], "array", false, false, false, 53))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries", ["date" => CoreExtension::getAttribute($this->env, $this->source,                 // line 54
$context["reservation"], 0, [], "array", false, false, false, 54), "zone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 55
$context["reservation"], 1, [], "array", false, false, false, 55), "trajet_id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 56
$context["reservation"], 5, [], "array", false, false, false, 56), "direction" => CoreExtension::getAttribute($this->env, $this->source,                 // line 57
$context["reservation"], 3, [], "array", false, false, false, 57), "heure" => CoreExtension::getAttribute($this->env, $this->source,                 // line 58
$context["reservation"], 4, [], "array", false, false, false, 58), "status" => "validée", "create" => "yes"]), "html", null, true)) : ("javascript:void(0);"));
                // line 61
                yield "\"
              ";
                // line 62
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 1, [], "array", false, false, false, 62))) {
                    // line 63
                    yield "                ";
                    $context["simplifiedReservation"] = ["date" => CoreExtension::getAttribute($this->env, $this->source,                     // line 64
$context["reservation"], 0, [], "array", false, false, false, 64), "zone" => CoreExtension::getAttribute($this->env, $this->source,                     // line 65
$context["reservation"], 1, [], "array", false, false, false, 65), "trajet_id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 66
$context["reservation"], 5, [], "array", false, false, false, 66), "direction" => CoreExtension::getAttribute($this->env, $this->source,                     // line 67
$context["reservation"], 3, [], "array", false, false, false, 67), "heure" => CoreExtension::getAttribute($this->env, $this->source,                     // line 68
$context["reservation"], 4, [], "array", false, false, false, 68), "total" => CoreExtension::getAttribute($this->env, $this->source,                     // line 69
$context["reservation"], 6, [], "array", false, false, false, 69), "non_affectees" => CoreExtension::getAttribute($this->env, $this->source,                     // line 70
$context["reservation"], 8, [], "array", false, false, false, 70), "affectees" => CoreExtension::getAttribute($this->env, $this->source,                     // line 71
$context["reservation"], 10, [], "array", false, false, false, 71), "tt" => CoreExtension::getAttribute($this->env, $this->source,                     // line 72
$context["reservation"], 9, [], "array", false, false, false, 72), "idnavette" => CoreExtension::getAttribute($this->env, $this->source,                     // line 73
$context["reservation"], 12, [], "array", false, false, false, 73), "entry" => CoreExtension::getAttribute($this->env, $this->source,                     // line 74
$context["reservation"], 13, [], "array", false, false, false, 74)];
                    // line 76
                    yield "                ";
                    $context["reservationJson"] = json_encode((isset($context["simplifiedReservation"]) || array_key_exists("simplifiedReservation", $context) ? $context["simplifiedReservation"] : (function () { throw new RuntimeError('Variable "simplifiedReservation" does not exist.', 76, $this->source); })()));
                    // line 77
                    yield "                onclick=\"handleNavetteClick(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationJson"]) || array_key_exists("reservationJson", $context) ? $context["reservationJson"] : (function () { throw new RuntimeError('Variable "reservationJson" does not exist.', 77, $this->source); })()), "html", null, true);
                    yield ")\"
              ";
                }
                // line 79
                yield "              >Créer une navette</a>
            ";
            }
            // line 81
            yield "
            ";
            // line 82
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 12, [], "array", false, false, false, 82) > 0)) {
                yield " 
              <a href=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("navettes.details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 12, [], "array", false, false, false, 83)]), "html", null, true);
                yield "\">Détails de la navette</a>
            ";
            }
            // line 85
            yield "          </td>
        </tr>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "    </tbody>
  </table>

  <script type=\"text/javascript\">
async function calculateDistance(point1, point2) {
    const R = 6371;
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

async function getRouteForBatch(points, date) {
    try {
        const locations = points.map(p => `\${p.lat},\${p.lon}`).join('&to=');
        const formattedDate = encodeURIComponent(date);
        
        const url = `https://www.mapquestapi.com/directions/v2/route?key=xAqhkltqZ86gJVxnsrIu9DKLqmYOaXft&from=\${locations}&routeType=fastest&doReverseGeocode=false&timeType=1&date=\${formattedDate}`;
        
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! status: \${response.status}`);
        }
        const data = await response.json();
        
        if (data.info.statuscode !== 0) {
            throw new Error(`MapQuest API error: \${data.info.messages.join(', ')}`);
        }

        return {
            time: data.route.time,
            distance: data.route.distance,
            locations: data.route.locations
        };
    } catch (error) {
        console.error('Error fetching route:', error);
        throw error;
    }
}

async function processBatches(points, date) {
    const batchSize = 10;
    const batches = [];
    
    // Split points into smaller batches
    for (let i = 0; i < points.length; i += batchSize) {
        batches.push(points.slice(i, i + batchSize));
    }
    
    let totalTime = 0;
    let optimizedRoute = [];
    
    for (const batch of batches) {
        try {
            const result = await getRouteForBatch(batch, date);
            totalTime += result.time;
            
            // Add the optimized route points
            for (let i = 0; i < result.locations.length; i++) {
                const location = result.locations[i];
                const originalPoint = batch[i];
                optimizedRoute.push({
                    ...originalPoint,
                    optimizedLat: location.latLng.lat,
                    optimizedLon: location.latLng.lng
                });
            }
        } catch (error) {
            console.error(`Error processing batch: \${error.message}`);
            // Continue with next batch instead of failing completely
            optimizedRoute = optimizedRoute.concat(batch);
        }
    }
    
    return {
        route: optimizedRoute,
        totalTime: totalTime / 60 // Convert to minutes
    };
}

function isUniqueLocation(point, existingPoints) {
    return !existingPoints.some(existing => 
        existing.lat === point.lat && existing.lon === point.lon
    );
}

function splitIntoValidRoutes(points) {
    const routes = [];
    let currentRoute = [];
    let currentTime = 0;
    let processedLocations = [];

    for (const point of points) {
        // Calculate additional time for this point
        const stopTime = isUniqueLocation(point, processedLocations) ? 1 : 0; // 1 minute for unique locations
        const estimatedNewTime = currentTime + stopTime;

        // Check if adding this point would exceed our limits
        if (currentRoute.length >= 22 || estimatedNewTime > 57) {
            if (currentRoute.length > 0) {
                routes.push(currentRoute);
                currentRoute = [];
                currentTime = 0;
                processedLocations = [];
            }
        }

        currentRoute.push(point);
        currentTime += stopTime;
        if (isUniqueLocation(point, processedLocations)) {
            processedLocations.push(point);
        }
    }

    // Add the last route if it has any points
    if (currentRoute.length > 0) {
        routes.push(currentRoute);
    }

    return routes;
}

async function calculateOptimalRoute(points, date) {
    if (points.length <= 2) {
        return { 
            routes: [{
                route: points,
                totalTime: points.length // 1 minute per point
            }],
            totalRoutes: 1
        };
    }

    // Cluster nearby points
    const clusters = [];
    const maxClusterRadius = 2; // 2 km radius

    for (const point of points) {
        let addedToCluster = false;
        
        for (const cluster of clusters) {
            if (calculateDistance(cluster[0], point) <= maxClusterRadius) {
                cluster.push(point);
                addedToCluster = true;
                break;
            }
        }
        
        if (!addedToCluster) {
            clusters.push([point]);
        }
    }

    // Calculate centroids
    const centroids = clusters.map(cluster => {
        const avgLat = cluster.reduce((sum, p) => sum + p.lat, 0) / cluster.length;
        const avgLon = cluster.reduce((sum, p) => sum + p.lon, 0) / cluster.length;
        return { 
            lat: avgLat, 
            lon: avgLon, 
            points: cluster,
            size: cluster.length
        };
    });

    try {
        // Split into valid routes based on constraints
        const routeBatches = splitIntoValidRoutes(centroids);
        const processedRoutes = [];

        for (const batch of routeBatches) {
            const { route: optimizedBatch, totalTime } = await processBatches(batch, date);
            
            // Add stop time for unique locations
            let uniqueLocations = new Set();
            let stopTime = 0;
            optimizedBatch.forEach(point => {
                const locationKey = `\${point.lat},\${point.lon}`;
                if (!uniqueLocations.has(locationKey)) {
                    stopTime += 1; // 1 minute per unique location
                    uniqueLocations.add(locationKey);
                }
            });

            processedRoutes.push({
                route: optimizedBatch,
                totalTime: totalTime + stopTime
            });
        }

        return {
            routes: processedRoutes,
            totalRoutes: processedRoutes.length
        };
    } catch (error) {
        console.error('Error in route optimization:', error);
        throw error;
    }
}

async function handleNavetteClick(reservationJson) {
    try {
        const reservation = reservationJson;
        console.log('Starting reservation processing:', reservation);

        const entries = reservation.entry.map(entry => ({
            id: entry.id,
            lat: entry.pickupLatitude,
            lon: entry.pickupLongitude,
            location: entry.pickupLocation
        }));
        console.log('Mapped entries:', entries);

        const loadingAlert = document.createElement('div');
        loadingAlert.className = 'alert alert-info';
        loadingAlert.textContent = 'Calculating optimal routes...';
        document.body.appendChild(loadingAlert);

        const { routes, totalRoutes } = await calculateOptimalRoute(entries, reservation.date);
        console.log('Calculated routes:', routes);
        console.log('Total routes:', totalRoutes);
        
        loadingAlert.remove();

        // Prepare data for backend
        const requestData = {
            date: reservation.date,
            direction: reservation.direction,
            heure: reservation.heure,
            routes: routes.map(route => ({
                route: route.route,
                totalTime: route.totalTime
            }))
        };
        console.log('Request data being sent to backend:', requestData);

        // Debug request headers
        const headers = {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name=\"csrf-token\"]')?.content || ''
        };
        console.log('Request headers:', headers);

        // Create navettes through API with detailed error logging
        try {
            const createNavettesResponse = await fetch('/admin/create_navettes', {
                method: 'POST',
                headers: headers,
                body: JSON.stringify(requestData)
            });

            console.log('Response status:', createNavettesResponse.status);
            console.log('Response headers:', Array.from(createNavettesResponse.headers.entries()));

            // Try to get response text even if it's an error
            const responseText = await createNavettesResponse.text();
            console.log('Raw response:', responseText);

            if (!createNavettesResponse.ok) {
                throw new Error(`Server error: \${createNavettesResponse.status}\\nResponse: \${responseText}`);
            }

            // Try to parse JSON only if we got here
            const result = JSON.parse(responseText);
            console.log('Parsed response:', result);

            if (result.success) {
                // Show success message
                const successAlert = document.createElement('div');
                successAlert.className = 'alert alert-success';
                let navettesDetails = result.navettes.map((navette, index) => `
                    <h5>Navette \${index + 1}</h5>
                    <p>ID: \${navette.navette_id}</p>
                    <p>Passengers: \${navette.entry_count}</p>
                `).join('');

                successAlert.innerHTML = `
                    <h4>Navettes Created Successfully</h4>
                    <p>Total navettes created: \${result.navettes.length}</p>
                    \${navettesDetails}
                `;
                document.body.appendChild(successAlert);
                
                // Redirect to navettes page after a short delay
                setTimeout(() => {
                    window.location.href = '/admin/navettes';
                }, 3000);
            } else {
                throw new Error('Failed to create navettes: ' + (result.message || 'Unknown error'));
            }
        } catch (fetchError) {
            console.error('Fetch operation details:', {
                error: fetchError,
                requestData: requestData,
                headers: headers
            });
            throw fetchError;
        }
        
    } catch (error) {
        console.error('Detailed error information:', {
            error: error,
            message: error.message,
            stack: error.stack
        });
        
        const errorAlert = document.createElement('div');
        errorAlert.className = 'alert alert-danger';
        errorAlert.textContent = `Error: \${error.message}. Please check console for details.`;
        document.body.appendChild(errorAlert);
        
        setTimeout(() => errorAlert.remove(), 10000);
    }
}



function formatTime(totalTime) {
    const hours = Math.floor(totalTime / 60);
    const minutes = Math.floor(totalTime % 60);
    const seconds = Math.round((totalTime % 1) * 60);
    
    let result = '';
    if (hours > 0) result += `\${hours} hr `;
    if (minutes > 0) result += `\${minutes} min `;
    if (seconds > 0) result += `\${seconds} sec`;
    
    return result.trim() || '0 min';
}
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 426
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 427
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
  ";
        // line 428
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 428, $this->source); })()), "request", [], "any", false, false, false, 428), "get", ["sortable"], "method", false, false, false, 428)) {
            // line 429
            yield "    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/reservation_entries/recap.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  623 => 429,  621 => 428,  616 => 427,  603 => 426,  256 => 88,  240 => 85,  235 => 83,  231 => 82,  228 => 81,  224 => 79,  218 => 77,  215 => 76,  213 => 74,  212 => 73,  211 => 72,  210 => 71,  209 => 70,  208 => 69,  207 => 68,  206 => 67,  205 => 66,  204 => 65,  203 => 64,  201 => 63,  199 => 62,  196 => 61,  194 => 58,  193 => 57,  192 => 56,  191 => 55,  190 => 54,  188 => 53,  186 => 52,  179 => 50,  175 => 49,  167 => 46,  159 => 43,  154 => 41,  150 => 40,  146 => 39,  142 => 38,  138 => 37,  135 => 36,  118 => 35,  103 => 22,  100 => 21,  98 => 18,  96 => 17,  94 => 16,  83 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}
  <div class=\"row mb-4\">
    <div class=\"col-lg-9 col-9\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-calendar-check\"></i>
        {{ \"Recap des reservations\"|trans }}
      </h1>
    </div>
    <div class=\"col-lg-3 col-3\">
      <div class=\"float-end\"></div>
    </div>
  </div>

  {% if not app.request.get('sortable') %}
    {% include \"layout/form/search/index.html.twig\" with { 
      form: search_form,
      tableId: \"reservation_entries\" 
    } %}
  {% endif %}

  <table class=\"table table-hover mb-0\">
    <thead>
      <tr>
        <th>#</th>
        <th>Date</th>
        <th>Trajet</th>
        <th>Direction</th>
        <th>Heure</th>
        <th colspan=\"3\">Nombre de réservations</th>
      </tr>
    </thead>
    <tbody>
      {% for reservation in reservations %}
        <tr class=\"mb-0\" data-pkv=\"10\">
          <td>{{ loop.index }}</td>
          <td>{{ reservation[0] }}</td>
          <td>{{ reservation[1] }}</td>
          <td>{{ reservation[3] }}</td>
          <td>{{ reservation[4] }}</td>
          <td>
            <span class=\"badge rounded-pill bg-success\" role=\"button\" tabindex=\"0\" data-bs-toggle=\"popover\" data-bs-trigger=\"focus\" data-bs-content=\"{{ reservation[11] }}\" data-bs-html=\"true\" title=\"affectées\">{{ reservation[10] }}</span>
          </td>
          <td>
            <span class=\"badge rounded-pill bg-danger\" role=\"button\" tabindex=\"0\" data-bs-toggle=\"popover\" data-bs-trigger=\"focus\" data-bs-content=\"{{ reservation[9] }}\" data-bs-html=\"true\" title=\"non affectées\">{{ reservation[8] }}</span>
          </td>
          <td>
            <a href=\"{{ path('reservation_entries', {'date':reservation[0], 'zone':reservation[1], 'trajet_id':reservation[5], 'direction':reservation[3],'heure':reservation[4]}) }}\"> 
              <span class=\"badge rounded-pill bg-primary\" role=\"button\" tabindex=\"0\" data-bs-toggle=\"popover\" data-bs-trigger=\"focus\" data-bs-content=\"{{ reservation[7] }}\" data-bs-html=\"true\" title=\"total\">{{ reservation[6] }}</span>
            </a>
            {% if reservation[8] > 0 %}
              <a href=\"{{ reservation[1] is not null ? path('reservation_entries', {
                  'date': reservation[0],
                  'zone': reservation[1],
                  'trajet_id': reservation[5],
                  'direction': reservation[3],
                  'heure': reservation[4],
                  'status': 'validée',
                  'create': 'yes'
              }) : 'javascript:void(0);' }}\"
              {% if reservation[1] is null %}
                {% set simplifiedReservation = {
                    'date': reservation[0],
                    'zone': reservation[1],
                    'trajet_id': reservation[5],
                    'direction': reservation[3],
                    'heure': reservation[4],
                    'total': reservation[6],
                    'non_affectees': reservation[8],
                    'affectees': reservation[10],
                    'tt' : reservation[9],
                    'idnavette' : reservation[12],
                    'entry' : reservation[13]
                } %}
                {% set reservationJson = simplifiedReservation|json_encode|raw %}
                onclick=\"handleNavetteClick({{ reservationJson }})\"
              {% endif %}
              >Créer une navette</a>
            {% endif %}

            {% if reservation[12] > 0 %} 
              <a href=\"{{ path('navettes.details', {id: reservation[12]}) }}\">Détails de la navette</a>
            {% endif %}
          </td>
        </tr>
      {% endfor %}
    </tbody>
  </table>

  <script type=\"text/javascript\">
async function calculateDistance(point1, point2) {
    const R = 6371;
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

async function getRouteForBatch(points, date) {
    try {
        const locations = points.map(p => `\${p.lat},\${p.lon}`).join('&to=');
        const formattedDate = encodeURIComponent(date);
        
        const url = `https://www.mapquestapi.com/directions/v2/route?key=xAqhkltqZ86gJVxnsrIu9DKLqmYOaXft&from=\${locations}&routeType=fastest&doReverseGeocode=false&timeType=1&date=\${formattedDate}`;
        
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! status: \${response.status}`);
        }
        const data = await response.json();
        
        if (data.info.statuscode !== 0) {
            throw new Error(`MapQuest API error: \${data.info.messages.join(', ')}`);
        }

        return {
            time: data.route.time,
            distance: data.route.distance,
            locations: data.route.locations
        };
    } catch (error) {
        console.error('Error fetching route:', error);
        throw error;
    }
}

async function processBatches(points, date) {
    const batchSize = 10;
    const batches = [];
    
    // Split points into smaller batches
    for (let i = 0; i < points.length; i += batchSize) {
        batches.push(points.slice(i, i + batchSize));
    }
    
    let totalTime = 0;
    let optimizedRoute = [];
    
    for (const batch of batches) {
        try {
            const result = await getRouteForBatch(batch, date);
            totalTime += result.time;
            
            // Add the optimized route points
            for (let i = 0; i < result.locations.length; i++) {
                const location = result.locations[i];
                const originalPoint = batch[i];
                optimizedRoute.push({
                    ...originalPoint,
                    optimizedLat: location.latLng.lat,
                    optimizedLon: location.latLng.lng
                });
            }
        } catch (error) {
            console.error(`Error processing batch: \${error.message}`);
            // Continue with next batch instead of failing completely
            optimizedRoute = optimizedRoute.concat(batch);
        }
    }
    
    return {
        route: optimizedRoute,
        totalTime: totalTime / 60 // Convert to minutes
    };
}

function isUniqueLocation(point, existingPoints) {
    return !existingPoints.some(existing => 
        existing.lat === point.lat && existing.lon === point.lon
    );
}

function splitIntoValidRoutes(points) {
    const routes = [];
    let currentRoute = [];
    let currentTime = 0;
    let processedLocations = [];

    for (const point of points) {
        // Calculate additional time for this point
        const stopTime = isUniqueLocation(point, processedLocations) ? 1 : 0; // 1 minute for unique locations
        const estimatedNewTime = currentTime + stopTime;

        // Check if adding this point would exceed our limits
        if (currentRoute.length >= 22 || estimatedNewTime > 57) {
            if (currentRoute.length > 0) {
                routes.push(currentRoute);
                currentRoute = [];
                currentTime = 0;
                processedLocations = [];
            }
        }

        currentRoute.push(point);
        currentTime += stopTime;
        if (isUniqueLocation(point, processedLocations)) {
            processedLocations.push(point);
        }
    }

    // Add the last route if it has any points
    if (currentRoute.length > 0) {
        routes.push(currentRoute);
    }

    return routes;
}

async function calculateOptimalRoute(points, date) {
    if (points.length <= 2) {
        return { 
            routes: [{
                route: points,
                totalTime: points.length // 1 minute per point
            }],
            totalRoutes: 1
        };
    }

    // Cluster nearby points
    const clusters = [];
    const maxClusterRadius = 2; // 2 km radius

    for (const point of points) {
        let addedToCluster = false;
        
        for (const cluster of clusters) {
            if (calculateDistance(cluster[0], point) <= maxClusterRadius) {
                cluster.push(point);
                addedToCluster = true;
                break;
            }
        }
        
        if (!addedToCluster) {
            clusters.push([point]);
        }
    }

    // Calculate centroids
    const centroids = clusters.map(cluster => {
        const avgLat = cluster.reduce((sum, p) => sum + p.lat, 0) / cluster.length;
        const avgLon = cluster.reduce((sum, p) => sum + p.lon, 0) / cluster.length;
        return { 
            lat: avgLat, 
            lon: avgLon, 
            points: cluster,
            size: cluster.length
        };
    });

    try {
        // Split into valid routes based on constraints
        const routeBatches = splitIntoValidRoutes(centroids);
        const processedRoutes = [];

        for (const batch of routeBatches) {
            const { route: optimizedBatch, totalTime } = await processBatches(batch, date);
            
            // Add stop time for unique locations
            let uniqueLocations = new Set();
            let stopTime = 0;
            optimizedBatch.forEach(point => {
                const locationKey = `\${point.lat},\${point.lon}`;
                if (!uniqueLocations.has(locationKey)) {
                    stopTime += 1; // 1 minute per unique location
                    uniqueLocations.add(locationKey);
                }
            });

            processedRoutes.push({
                route: optimizedBatch,
                totalTime: totalTime + stopTime
            });
        }

        return {
            routes: processedRoutes,
            totalRoutes: processedRoutes.length
        };
    } catch (error) {
        console.error('Error in route optimization:', error);
        throw error;
    }
}

async function handleNavetteClick(reservationJson) {
    try {
        const reservation = reservationJson;
        console.log('Starting reservation processing:', reservation);

        const entries = reservation.entry.map(entry => ({
            id: entry.id,
            lat: entry.pickupLatitude,
            lon: entry.pickupLongitude,
            location: entry.pickupLocation
        }));
        console.log('Mapped entries:', entries);

        const loadingAlert = document.createElement('div');
        loadingAlert.className = 'alert alert-info';
        loadingAlert.textContent = 'Calculating optimal routes...';
        document.body.appendChild(loadingAlert);

        const { routes, totalRoutes } = await calculateOptimalRoute(entries, reservation.date);
        console.log('Calculated routes:', routes);
        console.log('Total routes:', totalRoutes);
        
        loadingAlert.remove();

        // Prepare data for backend
        const requestData = {
            date: reservation.date,
            direction: reservation.direction,
            heure: reservation.heure,
            routes: routes.map(route => ({
                route: route.route,
                totalTime: route.totalTime
            }))
        };
        console.log('Request data being sent to backend:', requestData);

        // Debug request headers
        const headers = {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name=\"csrf-token\"]')?.content || ''
        };
        console.log('Request headers:', headers);

        // Create navettes through API with detailed error logging
        try {
            const createNavettesResponse = await fetch('/admin/create_navettes', {
                method: 'POST',
                headers: headers,
                body: JSON.stringify(requestData)
            });

            console.log('Response status:', createNavettesResponse.status);
            console.log('Response headers:', Array.from(createNavettesResponse.headers.entries()));

            // Try to get response text even if it's an error
            const responseText = await createNavettesResponse.text();
            console.log('Raw response:', responseText);

            if (!createNavettesResponse.ok) {
                throw new Error(`Server error: \${createNavettesResponse.status}\\nResponse: \${responseText}`);
            }

            // Try to parse JSON only if we got here
            const result = JSON.parse(responseText);
            console.log('Parsed response:', result);

            if (result.success) {
                // Show success message
                const successAlert = document.createElement('div');
                successAlert.className = 'alert alert-success';
                let navettesDetails = result.navettes.map((navette, index) => `
                    <h5>Navette \${index + 1}</h5>
                    <p>ID: \${navette.navette_id}</p>
                    <p>Passengers: \${navette.entry_count}</p>
                `).join('');

                successAlert.innerHTML = `
                    <h4>Navettes Created Successfully</h4>
                    <p>Total navettes created: \${result.navettes.length}</p>
                    \${navettesDetails}
                `;
                document.body.appendChild(successAlert);
                
                // Redirect to navettes page after a short delay
                setTimeout(() => {
                    window.location.href = '/admin/navettes';
                }, 3000);
            } else {
                throw new Error('Failed to create navettes: ' + (result.message || 'Unknown error'));
            }
        } catch (fetchError) {
            console.error('Fetch operation details:', {
                error: fetchError,
                requestData: requestData,
                headers: headers
            });
            throw fetchError;
        }
        
    } catch (error) {
        console.error('Detailed error information:', {
            error: error,
            message: error.message,
            stack: error.stack
        });
        
        const errorAlert = document.createElement('div');
        errorAlert.className = 'alert alert-danger';
        errorAlert.textContent = `Error: \${error.message}. Please check console for details.`;
        document.body.appendChild(errorAlert);
        
        setTimeout(() => errorAlert.remove(), 10000);
    }
}



function formatTime(totalTime) {
    const hours = Math.floor(totalTime / 60);
    const minutes = Math.floor(totalTime % 60);
    const seconds = Math.round((totalTime % 1) * 60);
    
    let result = '';
    if (hours > 0) result += `\${hours} hr `;
    if (minutes > 0) result += `\${minutes} min `;
    if (seconds > 0) result += `\${seconds} sec`;
    
    return result.trim() || '0 min';
}
  </script>
{% endblock %}

{% block footer %}
  {{ parent() }}
  {% if app.request.get('sortable') %}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
  {% endif %}
{% endblock %}", "admin/reservation_entries/recap.html.twig", "C:\\Users\\Hp\\Desktop\\stgj\\templates\\admin\\reservation_entries\\recap.html.twig");
    }
}
