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

/* admin/trajet/details.html.twig */
class __TwigTemplate_81dae877a0e2af917c6fb6b1f3f59a0d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trajet/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trajet/details.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/trajet/details.html.twig", 1);
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
    <div class=\"col-lg-6 col-6\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-inbox\"></i>
        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trajet"), "html", null, true);
        yield "
      </h1>
    </div>
    <div class=\"col-lg-6 col-6\">
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dupliquer"), "html", null, true);
        yield "</span>
        </a>

        <ajax-modal url=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajets.pickup", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        yield "\" class=\"add-new\">
          <button class=\"btn btn-outline-primary rounded-0 shadow-none\">
            <i class=\"bi bi-plus\"></i>
            <span class=\"d-none d-lg-inline-block\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ajouter un point de ramassage"), "html", null, true);
        yield "</span>
          </button>
        </ajax-modal>

      </div>
    </div>
  </div>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"4\" class=\"styled-title mb-2\">
      <h3>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informations du trajet"), "html", null, true);
        yield "</h3>
    </td>
  </tr>
  <tr>
    <td><b>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
    <td><b>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Statut"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 46, $this->source); })()), "status", [], "any", false, false, false, 46), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td><b>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Zone"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 50, $this->source); })()), "zone", [], "any", false, false, false, 50), "html", null, true);
        yield "</td>
    <td><b>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Site"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 52, $this->source); })()), "site", [], "any", false, false, false, 52), "html", null, true);
        yield "</td>
  </tr>
</table>
<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"4\" class=\"styled-title mb-2\">
      <h3>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Points de ramassage"), "html", null, true);
        yield "</h3>
    </td>
  </tr>
  <tr>
    <th>Nom</th>
    <th>Latitude</th>
    <th>Longitude</th>
    <th>Statut</th>
  </tr>
  ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pickups"]) || array_key_exists("pickups", $context) ? $context["pickups"] : (function () { throw new RuntimeError('Variable "pickups" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pickup"]) {
            // line 68
            yield "    <tr>
      <td>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pickup"], "name", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
      <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pickup"], "latitude", [], "any", false, false, false, 70), "html", null, true);
            yield "</td>
      <td>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pickup"], "longitude", [], "any", false, false, false, 71), "html", null, true);
            yield "</td>
      <td>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pickup"], "status", [], "any", false, false, false, 72), "html", null, true);
            yield "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pickup'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "
</table>

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
        return "admin/trajet/details.html.twig";
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
        return array (  220 => 75,  211 => 72,  207 => 71,  203 => 70,  199 => 69,  196 => 68,  192 => 67,  180 => 58,  171 => 52,  167 => 51,  163 => 50,  159 => 49,  153 => 46,  149 => 45,  145 => 44,  141 => 43,  134 => 39,  120 => 28,  114 => 25,  108 => 22,  103 => 20,  97 => 17,  92 => 15,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}

<div class=\"row mb-4\">
    <div class=\"col-lg-6 col-6\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-inbox\"></i>
        {{ \"Trajet\"|trans }}
      </h1>
    </div>
    <div class=\"col-lg-6 col-6\">
      <div class=\"float-end\">

        <a href=\"{{ path('trajets') }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-list\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Liste\"|trans }}</span>
        </a>

        <a href=\"{{ path('trajets.clone', {id: trajet.id}) }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-bookmarks\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Dupliquer\"|trans }}</span>
        </a>

        <ajax-modal url=\"{{ path('trajets.pickup', {id: trajet.id}) }}\" class=\"add-new\">
          <button class=\"btn btn-outline-primary rounded-0 shadow-none\">
            <i class=\"bi bi-plus\"></i>
            <span class=\"d-none d-lg-inline-block\">{{ \"Ajouter un point de ramassage\"|trans }}</span>
          </button>
        </ajax-modal>

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
    <td><b>{{ \"Nom\"|trans }}</b></td>
    <td>{{ trajet.name }}</td>
    <td><b>{{ \"Statut\"|trans }}</b></td>
    <td>{{ trajet.status }}</td>
  </tr>
  <tr>
    <td><b>{{ \"Zone\"|trans }}</b></td>
    <td>{{ trajet.zone }}</td>
    <td><b>{{ \"Site\"|trans }}</b></td>
    <td>{{ trajet.site }}</td>
  </tr>
</table>
<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"4\" class=\"styled-title mb-2\">
      <h3>{{ \"Points de ramassage\"|trans }}</h3>
    </td>
  </tr>
  <tr>
    <th>Nom</th>
    <th>Latitude</th>
    <th>Longitude</th>
    <th>Statut</th>
  </tr>
  {% for pickup in pickups %}
    <tr>
      <td>{{ pickup.name }}</td>
      <td>{{ pickup.latitude }}</td>
      <td>{{ pickup.longitude }}</td>
      <td>{{ pickup.status }}</td>
    </tr>
  {% endfor %}

</table>

{% endblock %}", "admin/trajet/details.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\admin\\trajet\\details.html.twig");
    }
}
