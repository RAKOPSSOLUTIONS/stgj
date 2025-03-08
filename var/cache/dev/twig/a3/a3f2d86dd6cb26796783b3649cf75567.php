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

/* admin/navette/checkin.html.twig */
class __TwigTemplate_2d9d05a41d59f519346bfd8854ecb757 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/navette/checkin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/navette/checkin.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/navette/checkin.html.twig", 1);
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
    <div class=\"col-lg-8 col-8\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-inbox\"></i>
        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trajet"), "html", null, true);
        yield "
      </h1>
    </div>
    <div class=\"col-lg-4 col-4\">
      <div class=\"float-end\">

        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajets");
        yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-list\"></i>
        <span class=\"d-none d-lg-inline-block\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Liste"), "html", null, true);
        yield "</span>
        </a>

        <a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajets.clone", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-bookmarks\"></i>
        <span class=\"d-none d-lg-inline-block\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Checkin"), "html", null, true);
        yield "</span>
        </a>

        

      </div>
    </div>
  </div>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"4\" class=\"styled-title mb-2\">
      <h3>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informations du trajet"), "html", null, true);
        yield "</h3>
    </td>
  </tr>
  <tr>
    <td><b>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Site"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 39, $this->source); })()), "site", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
    <td><b>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td><b>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Direction"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 45, $this->source); })()), "direction", [], "any", false, false, false, 45), "html", null, true);
        yield "</td>
    <td><b>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Poste"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 47, $this->source); })()), "zone", [], "any", false, false, false, 47), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td><b>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Véhicule"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 51, $this->source); })()), "vehicule", [], "any", false, false, false, 51), "html", null, true);
        yield "</td>
    <td><b>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chauffeur"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td><b>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Heure de départ"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 57
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 57, $this->source); })()), "heure", [], "any", false, false, false, 57))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 57, $this->source); })()), "heure", [], "any", false, false, false, 57), "html", null, true);
            yield " ";
        }
        yield "</td>
    <td><b>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Photo"), "html", null, true);
        yield "</b></td>
    <td><img src=\"/uploads/trajets/";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 59, $this->source); })()), "fichier", [], "any", false, false, false, 59), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), "html", null, true);
        yield "\" /></td>
  </tr>
</table>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"5\" class=\"styled-title mb-2\">
      <h3>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Passagers"), "html", null, true);
        yield "</h3>
    </td>
  </tr>
  <tr>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Téléphone</th>
    <th>Point de ramassage</th>
    <th>Statut</th>
  ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 76
            yield "    <tr>
      <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 77), "nom", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
      <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 78), "prenom", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
      <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 79), "telephone", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
      <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "pickup", [], "any", false, false, false, 80), "html", null, true);
            yield "</td>
      <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "status", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "
</table>

<div class=\"container\">
        <h1>Scan QR Codes</h1>
        <div class=\"section\">
            <div id=\"my-qr-reader\">
            </div>
        </div>
    </div>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
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

        // line 101
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
 ";
        // line 102
        if (CoreExtension::inFilter("ROLE_CHAUFFEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "getroles", [], "method", false, false, false, 102))) {
            // line 103
            yield "<script src=\"https://unpkg.com/html5-qrcode\"></script>

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/navette/checkin.html.twig";
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
        return array (  301 => 103,  299 => 102,  294 => 101,  281 => 100,  256 => 84,  247 => 81,  243 => 80,  239 => 79,  235 => 78,  231 => 77,  228 => 76,  224 => 75,  212 => 66,  200 => 59,  196 => 58,  189 => 57,  185 => 56,  179 => 53,  175 => 52,  171 => 51,  167 => 50,  161 => 47,  157 => 46,  153 => 45,  149 => 44,  143 => 41,  139 => 40,  135 => 39,  131 => 38,  124 => 34,  109 => 22,  104 => 20,  98 => 17,  93 => 15,  84 => 9,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}

<div class=\"row mb-4\">
    <div class=\"col-lg-8 col-8\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-inbox\"></i>
        {{ \"Trajet\"|trans }}
      </h1>
    </div>
    <div class=\"col-lg-4 col-4\">
      <div class=\"float-end\">

        <a href=\"{{ path('trajets') }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-list\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Liste\"|trans }}</span>
        </a>

        <a href=\"{{ path('trajets.clone', {id: trajet.id}) }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-bookmarks\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Checkin\"|trans }}</span>
        </a>

        

      </div>
    </div>
  </div>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"4\" class=\"styled-title mb-2\">
      <h3>{{ \"Informations du trajet\"|trans }}</h3>
    </td>
  </tr>
  <tr>
    <td><b>{{ \"Site\"|trans }}</b></td>
    <td>{{ trajet.site }}</td>
    <td><b>{{ \"Nom\"|trans }}</b></td>
    <td>{{ trajet.name }}</td>
  </tr>
  <tr>
    <td><b>{{ \"Direction\"|trans }}</b></td>
    <td>{{ trajet.direction }}</td>
    <td><b>{{ \"Poste\"|trans }}</b></td>
    <td>{{ trajet.zone }}</td>
  </tr>
  <tr>
    <td><b>{{ \"Véhicule\"|trans }}</b></td>
    <td>{{ trajet.vehicule }}</td>
    <td><b>{{ \"Chauffeur\"|trans }}</b></td>
    <td>{{ trajet.user }}</td>
  </tr>
  <tr>
    <td><b>{{ \"Heure de départ\"|trans }}</b></td>
    <td>{% if trajet.heure is not empty  %}{{ trajet.heure }} {% endif %}</td>
    <td><b>{{ \"Photo\"|trans }}</b></td>
    <td><img src=\"/uploads/trajets/{{ trajet.fichier }}\" alt=\"{{ trajet.name }}\" /></td>
  </tr>
</table>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"5\" class=\"styled-title mb-2\">
      <h3>{{ \"Passagers\"|trans }}</h3>
    </td>
  </tr>
  <tr>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Téléphone</th>
    <th>Point de ramassage</th>
    <th>Statut</th>
  {% for entry in entries %}
    <tr>
      <td>{{ entry.user.nom }}</td>
      <td>{{ entry.user.prenom }}</td>
      <td>{{ entry.user.telephone }}</td>
      <td>{{ entry.pickup }}</td>
      <td>{{ entry.status }}</td>
    </tr>
  {% endfor %}

</table>

<div class=\"container\">
        <h1>Scan QR Codes</h1>
        <div class=\"section\">
            <div id=\"my-qr-reader\">
            </div>
        </div>
    </div>




{% endblock %}

{% block footer %}
  {{ parent() }}
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
    }

    let htmlscanner = new Html5QrcodeScanner(
        \"my-qr-reader\",
        { fps: 10, qrbos: 250 }
    );
    htmlscanner.render(onScanSuccess);
});
</script>
{% endif %}
{% endblock %}", "admin/navette/checkin.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\navette\\checkin.html.twig");
    }
}
