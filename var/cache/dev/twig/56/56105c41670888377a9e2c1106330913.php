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

/* admin/user/form.html.twig */
class __TwigTemplate_d62d99b0cf7dd8e415bffb465480543b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/form.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/user/form.html.twig", 1);
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
  <h1 class=\"page-name\">
    <i class=\"bi bi-person\"></i>
    ";
        // line 7
        if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()))) {
            // line 8
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nouveau utilisateur"), "html", null, true);
            yield "
    ";
        } else {
            // line 10
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })())), "html", null, true);
            yield "
    ";
        }
        // line 12
        yield "  </h1>
<br />
<style>
  .port-title {
    background-color: #6c757d !important;
  }
  fieldset .col-form-label {
    margin-bottom: 8px;
  }
  .card-entry fieldset {
    margin-bottom: 0px !important;
  }
  .delete-entry {
    right: 15px;
  }
  .entries {
    counter-reset: compagne_counter;
  }
  .compagne-counter:before {
    counter-increment: compagne_counter;
    content: counter(compagne_counter);
    position: absolute;
    top: 5px;
    right: 45px;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--color-primary);
  }
</style>

<style>
        
        #map {
            height: 500px;
            width: 100%;
            margin-top: 20px;
            border: 2px solid #ccc;
        }
        .input-container {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        input {
            flex-grow: 1;
            padding: 10px;
        }
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
 <ajax-form>
 ";
        // line 71
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_start');
        yield "

 
    ";
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "site", [], "any", true, true, false, 74)) {
            yield "  ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "site", [], "any", false, false, false, 74), 'row');
            yield " ";
        }
        // line 75
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", true, true, false, 75)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "nom", [], "any", false, false, false, 75), 'row');
            yield " ";
        }
        // line 76
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", true, true, false, 76)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "prenom", [], "any", false, false, false, 76), 'row');
            yield "  ";
        }
        // line 77
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "matricule", [], "any", true, true, false, 77)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "matricule", [], "any", false, false, false, 77), 'row');
            yield "  ";
        }
        // line 78
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", true, true, false, 78)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "email", [], "any", false, false, false, 78), 'row');
            yield "  ";
        }
        // line 79
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", true, true, false, 79)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "telephone", [], "any", false, false, false, 79), 'row');
            yield "  ";
        }
        // line 80
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", true, true, false, 80)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "adresse", [], "any", false, false, false, 80), 'row');
            yield "  ";
        }
        // line 81
        yield "
    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "latitude", [], "any", false, false, false, 82), 'row');
        yield " 
    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "longitude", [], "any", false, false, false, 83), 'row');
        yield "

    ";
        // line 85
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "projet", [], "any", true, true, false, 85)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "projet", [], "any", false, false, false, 85), 'row');
            yield "  ";
        }
        // line 86
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", true, true, false, 86)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "password", [], "any", false, false, false, 86), 'row');
            yield "  ";
        }
        // line 87
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "confirm_password", [], "any", true, true, false, 87)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "confirm_password", [], "any", false, false, false, 87), 'row');
            yield "  ";
        }
        // line 88
        yield "
    <div class=\"input-container\">
        <input 
            type=\"text\" 
            id=\"address-input\" 
            placeholder=\"Entrez une adresse\"
        >
        <button id=\"search-button\" class=\"btn btn-primary\">Rechercher</button>
    </div>

    <div id=\"drag-instructions\">
        Merci de sélectionner les cordonnées GPS de votre domicile sur la carte, afin de les utiliser comme base lors de la planification votre transport.
    </div>

    <div id=\"map\"></div>

    <!-- prettier-ignore -->
    <script>(g=>{var h,a,k,p=\"The Google Maps JavaScript API\",c=\"google\",l=\"importLibrary\",q=\"__ib__\",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement(\"script\"));e.set(\"libraries\",[...r]+\"\");for(k in g)e.set(k.replace(/[A-Z]/g,t=>\"_\"+t[0].toLowerCase()),g[k]);e.set(\"callback\",c+\".maps.\"+q);a.src=`https://maps.\${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+\" could not load.\"));a.nonce=m.querySelector(\"script[nonce]\")?.nonce||\"\";m.head.append(a)}));d[l]?console.warn(p+\" only loads once. Ignoring:\",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: \"AIzaSyBmrbaC-lwaxdxlrHq_X51td6YHYztc47g\", v: \"weekly\"});</script>

    <div id=\"location-details\" style=\"display: none;\">
        <h3>Détails de l'emplacement:</h3>
        <p>Adresse: <span id=\"full-address\">-</span></p>
        <p>Latitude: <span id=\"latitude\">-</span></p>
        <p>Longitude: <span id=\"longitude\">-</span></p>
    </div>

<hr class=\"border-2 border-top border-secondary\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" onclick=\"history.go(-1);\">
      <i class=\"bi bi-x-lg\"></i>
      ";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annuler"), "html", null, true);
        yield "
    </button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none  \">
      <i class=\"bi bi-check2-square\"></i>
      ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enregistrer"), "html", null, true);
        yield "
    </button>

";
        // line 125
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), 'form_end');
        yield "
</ajax-form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 130
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

        // line 131
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\" type=\"text/javascript\"></script>
   
 
  <script>
  document.querySelector(\"ajax-form\").addEventListener(\"ajax.form.success\", function() {
    setTimeout(function() {
      window.location.href = '";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.details", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 139, $this->source); })()), "id", [], "any", false, false, false, 139)]), "html", null, true);
        yield "'
    }, 1000)
  })
  </script>

  <script type=\"text/javascript\">
    var latitude = ";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["latitude"]) || array_key_exists("latitude", $context) ? $context["latitude"] : (function () { throw new RuntimeError('Variable "latitude" does not exist.', 145, $this->source); })()), "html", null, true);
        yield ";
    var longitude = ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["longitude"]) || array_key_exists("longitude", $context) ? $context["longitude"] : (function () { throw new RuntimeError('Variable "longitude" does not exist.', 146, $this->source); })()), "html", null, true);
        yield ";
    var center = { lat: latitude, lng: longitude };
  </script>

  <script>
        let map;
        let marker;
        let geocoder;
        let autocomplete;

        function initMap() {
            // Initialize map (centered on New York)
            map = new google.maps.Map(document.getElementById('map'), {
                center: center,
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
            
            //map listner

            
 


            map.addListener('click', (e) => {
        const the_click =  { lat: e.latLng.lat(), lng: e.latLng.lng()};
        //this.handleMapClick(the_click);
        marker.setPosition(e.latLng);

        document.getElementById('user_latitude').value = e.latLng.lat().toFixed(6);
        document.getElementById('user_longitude').value = e.latLng.lng().toFixed(6);

        geocoder.geocode({
    'latLng': e.latLng
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[0]) {
        document.getElementById('user_adresse').value = results[0].formatted_address;
      }
    }
  });

      });

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
                        document.getElementById('full-address').textContent = results[0].formatted_address || 'Address not available';

                        document.getElementById('user_adresse').value = results[0].formatted_address || 'Address not available';
                    }
                });
            }

            // Update coordinates
            document.getElementById('latitude').textContent = lat.toFixed(6);
            document.getElementById('longitude').textContent = lng.toFixed(6);

            document.getElementById('user_latitude').value = lat.toFixed(6);
            document.getElementById('user_longitude').value = lng.toFixed(6);

            


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



  </body>

   


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
        return "admin/user/form.html.twig";
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
        return array (  332 => 146,  328 => 145,  319 => 139,  307 => 131,  294 => 130,  279 => 125,  273 => 122,  266 => 118,  234 => 88,  228 => 87,  222 => 86,  217 => 85,  212 => 83,  208 => 82,  205 => 81,  199 => 80,  193 => 79,  187 => 78,  181 => 77,  175 => 76,  169 => 75,  163 => 74,  157 => 71,  96 => 12,  90 => 10,  84 => 8,  82 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}

  <h1 class=\"page-name\">
    <i class=\"bi bi-person\"></i>
    {% if not entity|length %}
      {{ \"Nouveau utilisateur\"|trans }}
    {% else %}
      {{ title|trans }}
    {% endif %}
  </h1>
<br />
<style>
  .port-title {
    background-color: #6c757d !important;
  }
  fieldset .col-form-label {
    margin-bottom: 8px;
  }
  .card-entry fieldset {
    margin-bottom: 0px !important;
  }
  .delete-entry {
    right: 15px;
  }
  .entries {
    counter-reset: compagne_counter;
  }
  .compagne-counter:before {
    counter-increment: compagne_counter;
    content: counter(compagne_counter);
    position: absolute;
    top: 5px;
    right: 45px;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--color-primary);
  }
</style>

<style>
        
        #map {
            height: 500px;
            width: 100%;
            margin-top: 20px;
            border: 2px solid #ccc;
        }
        .input-container {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        input {
            flex-grow: 1;
            padding: 10px;
        }
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
 <ajax-form>
 {{ form_start(form) }}

 
    {% if form.site is defined %}  {{ form_row(form.site) }} {% endif %}
    {% if form.nom is defined %}{{ form_row(form.nom) }} {% endif %}
    {% if form.prenom is defined %}{{ form_row(form.prenom) }}  {% endif %}
    {% if form.matricule is defined %}{{ form_row(form.matricule) }}  {% endif %}
    {% if form.email is defined %}{{ form_row(form.email) }}  {% endif %}
    {% if form.telephone is defined %}{{ form_row(form.telephone) }}  {% endif %}
    {% if form.adresse is defined %}{{ form_row(form.adresse) }}  {% endif %}

    {{ form_row(form.latitude) }} 
    {{ form_row(form.longitude) }}

    {% if form.projet is defined %}{{ form_row(form.projet) }}  {% endif %}
    {% if form.password is defined %}{{ form_row(form.password) }}  {% endif %}
    {% if form.confirm_password is defined %}{{ form_row(form.confirm_password) }}  {% endif %}

    <div class=\"input-container\">
        <input 
            type=\"text\" 
            id=\"address-input\" 
            placeholder=\"Entrez une adresse\"
        >
        <button id=\"search-button\" class=\"btn btn-primary\">Rechercher</button>
    </div>

    <div id=\"drag-instructions\">
        Merci de sélectionner les cordonnées GPS de votre domicile sur la carte, afin de les utiliser comme base lors de la planification votre transport.
    </div>

    <div id=\"map\"></div>

    <!-- prettier-ignore -->
    <script>(g=>{var h,a,k,p=\"The Google Maps JavaScript API\",c=\"google\",l=\"importLibrary\",q=\"__ib__\",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement(\"script\"));e.set(\"libraries\",[...r]+\"\");for(k in g)e.set(k.replace(/[A-Z]/g,t=>\"_\"+t[0].toLowerCase()),g[k]);e.set(\"callback\",c+\".maps.\"+q);a.src=`https://maps.\${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+\" could not load.\"));a.nonce=m.querySelector(\"script[nonce]\")?.nonce||\"\";m.head.append(a)}));d[l]?console.warn(p+\" only loads once. Ignoring:\",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: \"AIzaSyBmrbaC-lwaxdxlrHq_X51td6YHYztc47g\", v: \"weekly\"});</script>

    <div id=\"location-details\" style=\"display: none;\">
        <h3>Détails de l'emplacement:</h3>
        <p>Adresse: <span id=\"full-address\">-</span></p>
        <p>Latitude: <span id=\"latitude\">-</span></p>
        <p>Longitude: <span id=\"longitude\">-</span></p>
    </div>

<hr class=\"border-2 border-top border-secondary\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" onclick=\"history.go(-1);\">
      <i class=\"bi bi-x-lg\"></i>
      {{ \"Annuler\"|trans }}
    </button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none  \">
      <i class=\"bi bi-check2-square\"></i>
      {{ \"Enregistrer\"|trans }}
    </button>

{{ form_end(form) }}
</ajax-form>

{% endblock %}

{% block footer %}
  {{ parent() }}
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\" type=\"text/javascript\"></script>
   
 
  <script>
  document.querySelector(\"ajax-form\").addEventListener(\"ajax.form.success\", function() {
    setTimeout(function() {
      window.location.href = '{{ path(\"user.details\", {id : entity.id }) }}'
    }, 1000)
  })
  </script>

  <script type=\"text/javascript\">
    var latitude = {{ latitude }};
    var longitude = {{ longitude }};
    var center = { lat: latitude, lng: longitude };
  </script>

  <script>
        let map;
        let marker;
        let geocoder;
        let autocomplete;

        function initMap() {
            // Initialize map (centered on New York)
            map = new google.maps.Map(document.getElementById('map'), {
                center: center,
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
            
            //map listner

            
 


            map.addListener('click', (e) => {
        const the_click =  { lat: e.latLng.lat(), lng: e.latLng.lng()};
        //this.handleMapClick(the_click);
        marker.setPosition(e.latLng);

        document.getElementById('user_latitude').value = e.latLng.lat().toFixed(6);
        document.getElementById('user_longitude').value = e.latLng.lng().toFixed(6);

        geocoder.geocode({
    'latLng': e.latLng
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[0]) {
        document.getElementById('user_adresse').value = results[0].formatted_address;
      }
    }
  });

      });

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
                        document.getElementById('full-address').textContent = results[0].formatted_address || 'Address not available';

                        document.getElementById('user_adresse').value = results[0].formatted_address || 'Address not available';
                    }
                });
            }

            // Update coordinates
            document.getElementById('latitude').textContent = lat.toFixed(6);
            document.getElementById('longitude').textContent = lng.toFixed(6);

            document.getElementById('user_latitude').value = lat.toFixed(6);
            document.getElementById('user_longitude').value = lng.toFixed(6);

            


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



  </body>

   


{% endblock %}
", "admin/user/form.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\user\\form.html.twig");
    }
}
