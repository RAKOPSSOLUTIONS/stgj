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

/* admin/reservation_entries/index.html.twig */
class __TwigTemplate_32d4006b5e628db1aa9c9f65cd36790f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation_entries/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation_entries/index.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/reservation_entries/index.html.twig", 1);
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
    <div class=\"col-lg-9 col-9\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-clock\"></i>
        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réservations"), "html", null, true);
        yield "
      </h1>
    </div>
    <div class=\"col-lg-3 col-3\">
      <div class=\"float-end\">
      ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            yield "   
        ";
            // line 15
            yield from $this->loadTemplate("partials/export-results.html.twig", "admin/reservation_entries/index.html.twig", 15)->unwrap()->yield(CoreExtension::merge($context, ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries.export")]));
            // line 16
            yield "
        <a href=\"";
            // line 17
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries.recap");
            yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-list\"></i>
        <span class=\"d-none d-lg-inline-block\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recap des réservations"), "html", null, true);
            yield "</span>
        </a>

      ";
        }
        // line 23
        yield "      </div>
    </div>
  </div>

  ";
        // line 27
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "get", ["sortable"], "method", false, false, false, 27)) {
            // line 28
            yield "    ";
            yield from $this->loadTemplate("layout/form/search/index.html.twig", "admin/reservation_entries/index.html.twig", 28)->unwrap()->yield(CoreExtension::merge($context, ["form" =>             // line 29
(isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 29, $this->source); })()), "tableId" => "reservation_entries"]));
            // line 32
            yield "  ";
        }
        // line 33
        yield "
  <ajax-table id=\"reservation_entries\" url=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries.table");
        yield "\" ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "get", ["sortable"], "method", false, false, false, 34)) {
            yield "sortable=\"reservation_entries\"";
        }
        yield ">
    ";
        // line 35
        yield (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 35, $this->source); })());
        yield "
  </ajax-table>
";
        // line 37
        if (CoreExtension::inFilter("ROLE_CHAUFFEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "getroles", [], "method", false, false, false, 37))) {
            // line 38
            yield "  <div class=\"container\">
        <h1>Scanner le QR Codes</h1>
        <div class=\"section\">
            <div id=\"my-qr-reader\">
            </div>
        </div>
    </div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
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

        // line 49
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
  ";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "get", ["sortable"], "method", false, false, false, 50)) {
            // line 51
            yield "  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
  ";
        }
        // line 54
        yield " ";
        if (CoreExtension::inFilter("ROLE_CHAUFFEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "getroles", [], "method", false, false, false, 54))) {
            // line 55
            yield "  <script src=\"https://unpkg.com/html5-qrcode\"></script>

<script>
function domReady(fn) {
    if (
        document.readyState === \"complete\" ||
        document.readyState === \"interactive\"
    ) {
        setTimeout(fn, 1000);
    } else {
        document.addEventListener(\"DOMContentLoaded\", fn);
    }
}

domReady(function () {

    // If found you qr code
    function onScanSuccess(decodeText, decodeResult) {
        console.log(\"You Qr is : \" + decodeText, decodeResult);
         //var redirect_url = \"https://127.0.0.1:8000/admin/reservation_entries/\" + token + \"/checkin\";
         document.location = decodeText;
    }

    let htmlscanner = new Html5QrcodeScanner(
        \"my-qr-reader\",
        { fps: 10, qrbos: 250 }
    );
    htmlscanner.render(onScanSuccess);
});
</script>
 ";
        }
        // line 86
        yield "  
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
        return "admin/reservation_entries/index.html.twig";
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
        return array (  226 => 86,  193 => 55,  190 => 54,  185 => 51,  183 => 50,  178 => 49,  165 => 48,  146 => 38,  144 => 37,  139 => 35,  131 => 34,  128 => 33,  125 => 32,  123 => 29,  121 => 28,  119 => 27,  113 => 23,  106 => 19,  101 => 17,  98 => 16,  96 => 15,  92 => 14,  84 => 9,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}
  
  <div class=\"row mb-4\">
    <div class=\"col-lg-9 col-9\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-clock\"></i>
        {{ \"Réservations\"|trans }}
      </h1>
    </div>
    <div class=\"col-lg-3 col-3\">
      <div class=\"float-end\">
      {% if is_granted('ROLE_ADMIN') %}   
        {% include \"partials/export-results.html.twig\" with { path: path('reservation_entries.export') } %}

        <a href=\"{{ path('reservation_entries.recap') }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-list\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Recap des réservations\"|trans }}</span>
        </a>

      {% endif %}
      </div>
    </div>
  </div>

  {% if not app.request.get('sortable') %}
    {% include \"layout/form/search/index.html.twig\" with { 
      form: search_form,
      tableId: \"reservation_entries\" 
    } %}
  {% endif %}

  <ajax-table id=\"reservation_entries\" url=\"{{ path('reservation_entries.table') }}\" {% if app.request.get('sortable') %}sortable=\"reservation_entries\"{% endif %}>
    {{ table|raw }}
  </ajax-table>
{% if 'ROLE_CHAUFFEUR' in app.user.getroles()  %}
  <div class=\"container\">
        <h1>Scanner le QR Codes</h1>
        <div class=\"section\">
            <div id=\"my-qr-reader\">
            </div>
        </div>
    </div>
{% endif %}
{% endblock %}

{% block footer %}
  {{ parent() }}
  {% if app.request.get('sortable') %}
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
  {% endif %}
 {% if 'ROLE_CHAUFFEUR' in app.user.getroles()  %}
  <script src=\"https://unpkg.com/html5-qrcode\"></script>

<script>
function domReady(fn) {
    if (
        document.readyState === \"complete\" ||
        document.readyState === \"interactive\"
    ) {
        setTimeout(fn, 1000);
    } else {
        document.addEventListener(\"DOMContentLoaded\", fn);
    }
}

domReady(function () {

    // If found you qr code
    function onScanSuccess(decodeText, decodeResult) {
        console.log(\"You Qr is : \" + decodeText, decodeResult);
         //var redirect_url = \"https://127.0.0.1:8000/admin/reservation_entries/\" + token + \"/checkin\";
         document.location = decodeText;
    }

    let htmlscanner = new Html5QrcodeScanner(
        \"my-qr-reader\",
        { fps: 10, qrbos: 250 }
    );
    htmlscanner.render(onScanSuccess);
});
</script>
 {% endif %}
  
{% endblock %}
", "admin/reservation_entries/index.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\reservation_entries\\index.html.twig");
    }
}
