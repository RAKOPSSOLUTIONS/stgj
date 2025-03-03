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

/* admin/user/location.html.twig */
class __TwigTemplate_71fd6ede64d01b23475c6a0d00c195b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/location.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/location.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/user/location.html.twig", 1);
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
        yield "  
  <div class=\"row mb-4\">
    <div class=\"col-lg-10 col-9\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-geo\"></i>
        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes cordonnées GPS"), "html", null, true);
        yield "
      </h1>
       

     <form action=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.location");
        yield "\" method=\"post\" name=\"location_form\">
      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"adhesion\">latitude</label>
        <input type=\"text\" name=\"latitude\" id=\"latitude\" value=\"\" class=\"form-input\" />
      </div>
      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"adhesion\">longitude</label>
        <input type=\"text\" name=\"longitude\" id=\"longitude\" value=\"\" class=\"form-input\" />
      </div>
      <div class=\"mb-3\">
        <input type=\"submit\" name=\"Valider\" value=\"Valider\" class=\"btn btn-primary\">
      </div>
     </form>
    </div>
<style>
        #location-details {
            background-color: #f4f4f4;
            padding: 15px;
            margin-top: 20px;
        }
        #drag-instructions {
            color: #666;
            font-style: italic;
            margin-top: 10px;
        }
    </style>
    <div id=\"map\"></div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
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

        // line 43
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

<script>

// Check if Geolocation is available
if (\"geolocation\" in navigator) {
  // Request user's location
  navigator.geolocation.getCurrentPosition(
    function(position) {
      // Successfully retrieved location
      const latitude = position.coords.latitude;
      const longitude = position.coords.longitude;
      console.log(\"Latitude:\", latitude);
      console.log(\"Longitude:\", longitude);

      const lat = document.getElementById(\"latitude\");
      lat.value = latitude;
      const long = document.getElementById(\"longitude\");
      long.value = longitude;

      // You can now use latitude and longitude (e.g., send to a server)
    },
    function(error) {
      // Error handling
      switch(error.code) {
        case error.PERMISSION_DENIED:
          alert(\"User denied the request for Geolocation.\");
          break;
        case error.POSITION_UNAVAILABLE:
          alert(\"Location information is unavailable.\");
          break;
        case error.TIMEOUT:
          alert(\"The request to get user location timed out.\");
          break;
        case error.UNKNOWN_ERROR:
          alert(\"An unknown error occurred.\");
          break;
      }
    },
    {
      enableHighAccuracy: true, // Request high accuracy (GPS)
      timeout: 10000,           // Timeout if location is not retrieved in 10 seconds
      maximumAge: 0             // Disable cache to get a fresh location
    }
  );
} else {
  console.error(\"Geolocation is not supported by this browser.\");
}
</script>
 
<script>
        let map;
        let marker;
        let geocoder;
        let autocomplete;

        function initMap() {
            // Initialize map (centered on New York)
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 34.000487, lng: -6.857256 },
                zoom: 15,
                mapTypeControl: true,
                streetViewControl: false,
                fullscreenControl: true
            });

            // Initialize geocoder
            geocoder = new google.maps.Geocoder();

            // Initialize autocomplete
            const input = document.getElementById('address-input');
            autocomplete = new google.maps.places.Autocomplete(input, {
                types: ['geocode'],
                fields: ['geometry', 'formatted_address']
            });

            // Add event listener for place selection
            autocomplete.addListener('place_changed', onPlaceChanged);

            // Add click event for search button
            document.getElementById('search-button').addEventListener('click', onPlaceChanged);

            // Create initial marker (draggable)
            marker = new google.maps.Marker({
                map: map,
                position: map.getCenter(),
                draggable: true,
                animation: google.maps.Animation.DROP
            });

            // Add drag events to marker
            marker.addListener('dragend', updateLocationDetails);
        }

        function onPlaceChanged() {
            const place = autocomplete.getPlace();

            // If no place selected, use input text for geocoding
            if (!place.geometry) {
                geocodeAddress(document.getElementById('address-input').value);
                return;
            }

            // Get location details
            const location = place.geometry.location;
            updateMapAndMarker(location, place.formatted_address);
        }

        function geocodeAddress(address) {
            geocoder.geocode({ address: address }, (results, status) => {
                if (status === 'OK') {
                    const location = results[0].geometry.location;
                    updateMapAndMarker(location, results[0].formatted_address);
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }

        function updateMapAndMarker(location, formattedAddress) {
            // Center map and move marker
            map.setCenter(location);
            map.setZoom(15);

            // Update marker position
            marker.setPosition(location);

            // Update location details
            updateLocationDetails(formattedAddress);
        }

        function updateLocationDetails(formattedAddress) {
            // Get current marker position
            const position = marker.getPosition();
            const lat = position.lat();
            const lng = position.lng();

            // If a formatted address is passed, use it
            if (typeof formattedAddress === 'string') {
                document.getElementById('full-address').textContent = formattedAddress;
            } else {
                // Reverse geocode to get address for dragged marker
                geocoder.geocode({ location: { lat, lng } }, (results, status) => {
                    if (status === 'OK') {
                        document.getElementById('full-address').textContent = 
                            results[0].formatted_address || 'Address not available';
                    }
                });
            }

            // Update coordinates
            document.getElementById('latitude').textContent = lat.toFixed(6);
            document.getElementById('longitude').textContent = lng.toFixed(6);
        }

        // Dynamically load Google Maps script with Places library
        function loadGoogleMapsScript() {
            const script = document.createElement('script');
            script.src = `https://maps.googleapis.com/maps/api/js?key=AIzaSyBmrbaC-lwaxdxlrHq_X51td6YHYztc47g&libraries=places&callback=initMap`;
            script.async = true;
            script.defer = true;
            document.head.appendChild(script);
        }

        // Load the Google Maps script when the page loads
        window.onload = loadGoogleMapsScript;
    </script>
 



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/user/location.html.twig";
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
        return array (  144 => 43,  131 => 42,  91 => 13,  84 => 9,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}
  
  <div class=\"row mb-4\">
    <div class=\"col-lg-10 col-9\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-geo\"></i>
        {{ \"Mes cordonnées GPS\"|trans }}
      </h1>
       

     <form action=\"{{ path('user.location') }}\" method=\"post\" name=\"location_form\">
      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"adhesion\">latitude</label>
        <input type=\"text\" name=\"latitude\" id=\"latitude\" value=\"\" class=\"form-input\" />
      </div>
      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"adhesion\">longitude</label>
        <input type=\"text\" name=\"longitude\" id=\"longitude\" value=\"\" class=\"form-input\" />
      </div>
      <div class=\"mb-3\">
        <input type=\"submit\" name=\"Valider\" value=\"Valider\" class=\"btn btn-primary\">
      </div>
     </form>
    </div>
<style>
        #location-details {
            background-color: #f4f4f4;
            padding: 15px;
            margin-top: 20px;
        }
        #drag-instructions {
            color: #666;
            font-style: italic;
            margin-top: 10px;
        }
    </style>
    <div id=\"map\"></div>

{% endblock %}
{% block footer %}
  {{ parent() }}

<script>

// Check if Geolocation is available
if (\"geolocation\" in navigator) {
  // Request user's location
  navigator.geolocation.getCurrentPosition(
    function(position) {
      // Successfully retrieved location
      const latitude = position.coords.latitude;
      const longitude = position.coords.longitude;
      console.log(\"Latitude:\", latitude);
      console.log(\"Longitude:\", longitude);

      const lat = document.getElementById(\"latitude\");
      lat.value = latitude;
      const long = document.getElementById(\"longitude\");
      long.value = longitude;

      // You can now use latitude and longitude (e.g., send to a server)
    },
    function(error) {
      // Error handling
      switch(error.code) {
        case error.PERMISSION_DENIED:
          alert(\"User denied the request for Geolocation.\");
          break;
        case error.POSITION_UNAVAILABLE:
          alert(\"Location information is unavailable.\");
          break;
        case error.TIMEOUT:
          alert(\"The request to get user location timed out.\");
          break;
        case error.UNKNOWN_ERROR:
          alert(\"An unknown error occurred.\");
          break;
      }
    },
    {
      enableHighAccuracy: true, // Request high accuracy (GPS)
      timeout: 10000,           // Timeout if location is not retrieved in 10 seconds
      maximumAge: 0             // Disable cache to get a fresh location
    }
  );
} else {
  console.error(\"Geolocation is not supported by this browser.\");
}
</script>
 
<script>
        let map;
        let marker;
        let geocoder;
        let autocomplete;

        function initMap() {
            // Initialize map (centered on New York)
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 34.000487, lng: -6.857256 },
                zoom: 15,
                mapTypeControl: true,
                streetViewControl: false,
                fullscreenControl: true
            });

            // Initialize geocoder
            geocoder = new google.maps.Geocoder();

            // Initialize autocomplete
            const input = document.getElementById('address-input');
            autocomplete = new google.maps.places.Autocomplete(input, {
                types: ['geocode'],
                fields: ['geometry', 'formatted_address']
            });

            // Add event listener for place selection
            autocomplete.addListener('place_changed', onPlaceChanged);

            // Add click event for search button
            document.getElementById('search-button').addEventListener('click', onPlaceChanged);

            // Create initial marker (draggable)
            marker = new google.maps.Marker({
                map: map,
                position: map.getCenter(),
                draggable: true,
                animation: google.maps.Animation.DROP
            });

            // Add drag events to marker
            marker.addListener('dragend', updateLocationDetails);
        }

        function onPlaceChanged() {
            const place = autocomplete.getPlace();

            // If no place selected, use input text for geocoding
            if (!place.geometry) {
                geocodeAddress(document.getElementById('address-input').value);
                return;
            }

            // Get location details
            const location = place.geometry.location;
            updateMapAndMarker(location, place.formatted_address);
        }

        function geocodeAddress(address) {
            geocoder.geocode({ address: address }, (results, status) => {
                if (status === 'OK') {
                    const location = results[0].geometry.location;
                    updateMapAndMarker(location, results[0].formatted_address);
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }

        function updateMapAndMarker(location, formattedAddress) {
            // Center map and move marker
            map.setCenter(location);
            map.setZoom(15);

            // Update marker position
            marker.setPosition(location);

            // Update location details
            updateLocationDetails(formattedAddress);
        }

        function updateLocationDetails(formattedAddress) {
            // Get current marker position
            const position = marker.getPosition();
            const lat = position.lat();
            const lng = position.lng();

            // If a formatted address is passed, use it
            if (typeof formattedAddress === 'string') {
                document.getElementById('full-address').textContent = formattedAddress;
            } else {
                // Reverse geocode to get address for dragged marker
                geocoder.geocode({ location: { lat, lng } }, (results, status) => {
                    if (status === 'OK') {
                        document.getElementById('full-address').textContent = 
                            results[0].formatted_address || 'Address not available';
                    }
                });
            }

            // Update coordinates
            document.getElementById('latitude').textContent = lat.toFixed(6);
            document.getElementById('longitude').textContent = lng.toFixed(6);
        }

        // Dynamically load Google Maps script with Places library
        function loadGoogleMapsScript() {
            const script = document.createElement('script');
            script.src = `https://maps.googleapis.com/maps/api/js?key=AIzaSyBmrbaC-lwaxdxlrHq_X51td6YHYztc47g&libraries=places&callback=initMap`;
            script.async = true;
            script.defer = true;
            document.head.appendChild(script);
        }

        // Load the Google Maps script when the page loads
        window.onload = loadGoogleMapsScript;
    </script>
 



{% endblock %}", "admin/user/location.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\admin\\user\\location.html.twig");
    }
}
