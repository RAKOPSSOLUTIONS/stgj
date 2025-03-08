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

/* admin/reservation_entries/details.html.twig */
class __TwigTemplate_ea0d0c601c1502df53ee9b4326993f37 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation_entries/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation_entries/details.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/reservation_entries/details.html.twig", 1);
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
        <i class=\"bi bi-clock\"></i>
        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réservations"), "html", null, true);
        yield "
      </h1>
    </div>
    <div class=\"col-lg-4 col-4\">
      <div class=\"float-end\">
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries");
        yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-clock\"></i>
        <span class=\"d-none d-lg-inline-block\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Liste des réservation"), "html", null, true);
        yield "</span>
        </a>
        ";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 18, $this->source); })()), "canValidate", [(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })())], "method", false, false, false, 18)) {
            // line 19
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries.update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
          <i class=\"bi bi-pencil-square\"></i>
          <span class=\"d-none d-lg-inline-block\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier"), "html", null, true);
            yield "</span>
        </a>
        ";
        }
        // line 24
        yield "      </div>
    </div>
  </div>
 

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
        yield "</td>
    <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 32, $this->source); })()), "reservationDate", [], "any", false, false, false, 32), "m/d/Y"), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Direction"), "html", null, true);
        yield "</td>
    <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 36, $this->source); })()), "direction", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
  </tr>
  ";
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 38, $this->source); })()), "navette", [], "any", false, false, false, 38)) {
            // line 39
            yield "  <tr>
    <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom du trajet"), "html", null, true);
            yield "</td>
    <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "navette", [], "any", false, false, false, 41), "nomTrajet", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
  </tr>
  ";
        }
        // line 44
        yield "  <tr>
    <td>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pick-up"), "html", null, true);
        yield "</td>
    <td>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "pickupLocation", [], "any", false, false, false, 46), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Drop-off"), "html", null, true);
        yield "</td>
    <td>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 50, $this->source); })()), "dropoffLocation", [], "any", false, false, false, 50), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Heure"), "html", null, true);
        yield "</td>
    <td>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 54, $this->source); })()), "reservationHeure", [], "any", false, false, false, 54), "html", null, true);
        yield "</td>
  </tr>
  ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 56, $this->source); })()), "navette", [], "any", false, false, false, 56) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 56, $this->source); })()), "navette", [], "any", false, false, false, 56), "status", [], "any", false, false, false, 56) == "validée"))) {
            // line 57
            yield "  <tr>
    <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Heure de passage"), "html", null, true);
            yield "</td>
    <td>";
            // line 59
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 59, $this->source); })()), "heurePassage", [], "any", false, false, false, 59)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 59, $this->source); })()), "heurePassage", [], "any", false, false, false, 59), "H:i"), "html", null, true);
                yield " ";
            }
            yield "</td>
  </tr>
   <tr>
    <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Véhicule"), "html", null, true);
            yield "</td>
    <td>";
            // line 63
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 63, $this->source); })()), "navette", [], "any", false, false, false, 63)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 63, $this->source); })()), "navette", [], "any", false, false, false, 63), "vehicule", [], "any", false, false, false, 63), "html", null, true);
                yield " ";
            }
            yield "</td>
  </tr>
   <tr>
    <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chauffeur"), "html", null, true);
            yield "</td>
    <td>";
            // line 67
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 67, $this->source); })()), "navette", [], "any", false, false, false, 67) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 67, $this->source); })()), "navette", [], "any", false, false, false, 67), "vehicule", [], "any", false, false, false, 67))) {
                // line 68
                yield "    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 68, $this->source); })()), "navette", [], "any", false, false, false, 68), "vehicule", [], "any", false, false, false, 68), "user", [], "any", false, false, false, 68), "html", null, true);
                yield "</td>
  </tr>

  <tr>
    <td>";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Téléphone du chauffeur"), "html", null, true);
                yield "</td>
    <td>";
                // line 73
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 73, $this->source); })()), "navette", [], "any", false, false, false, 73) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 73, $this->source); })()), "navette", [], "any", false, false, false, 73), "vehicule", [], "any", false, false, false, 73)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 73, $this->source); })()), "navette", [], "any", false, false, false, 73), "vehicule", [], "any", false, false, false, 73), "user", [], "any", false, false, false, 73))) {
                    // line 74
                    yield "      <a href=\"tel:";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 74, $this->source); })()), "navette", [], "any", false, false, false, 74), "vehicule", [], "any", false, false, false, 74), "user", [], "any", false, false, false, 74), "telephone", [], "any", false, false, false, 74), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 74, $this->source); })()), "navette", [], "any", false, false, false, 74), "vehicule", [], "any", false, false, false, 74), "user", [], "any", false, false, false, 74), "telephone", [], "any", false, false, false, 74), "html", null, true);
                    yield "</a> ";
                }
                yield "</td>
    ";
            }
            // line 75
            yield "</td>
  </tr>

  ";
        }
        // line 79
        yield "</table>
 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
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

        // line 85
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
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
        return "admin/reservation_entries/details.html.twig";
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
        return array (  285 => 85,  272 => 84,  258 => 79,  252 => 75,  242 => 74,  240 => 73,  236 => 72,  228 => 68,  226 => 67,  222 => 66,  213 => 63,  209 => 62,  200 => 59,  196 => 58,  193 => 57,  191 => 56,  186 => 54,  182 => 53,  176 => 50,  172 => 49,  166 => 46,  162 => 45,  159 => 44,  153 => 41,  149 => 40,  146 => 39,  144 => 38,  139 => 36,  135 => 35,  129 => 32,  125 => 31,  116 => 24,  110 => 21,  104 => 19,  102 => 18,  97 => 16,  92 => 14,  84 => 9,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}

<div class=\"row mb-4\">
    <div class=\"col-lg-8 col-8\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-clock\"></i>
        {{ \"Réservations\"|trans }}
      </h1>
    </div>
    <div class=\"col-lg-4 col-4\">
      <div class=\"float-end\">
        <a href=\"{{ path('reservation_entries') }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-clock\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Liste des réservation\"|trans }}</span>
        </a>
        {% if reservation.canValidate(user) %}
        <a href=\"{{ path('reservation_entries.update', {id: reservation.id}) }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
          <i class=\"bi bi-pencil-square\"></i>
          <span class=\"d-none d-lg-inline-block\">{{ \"Modifier\"|trans }}</span>
        </a>
        {% endif %}
      </div>
    </div>
  </div>
 

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td>{{ \"Date\"|trans }}</td>
    <td>{{ reservation.reservationDate|date(\"m/d/Y\") }}</td>
  </tr>
  <tr>
    <td>{{ \"Direction\"|trans }}</td>
    <td>{{ reservation.direction }}</td>
  </tr>
  {% if reservation.navette %}
  <tr>
    <td>{{ \"Nom du trajet\"|trans }}</td>
    <td>{{ reservation.navette.nomTrajet }}</td>
  </tr>
  {% endif %}
  <tr>
    <td>{{ \"Pick-up\"|trans }}</td>
    <td>{{ reservation.pickupLocation }}</td>
  </tr>
  <tr>
    <td>{{ \"Drop-off\"|trans }}</td>
    <td>{{ reservation.dropoffLocation }}</td>
  </tr>
  <tr>
    <td>{{ \"Heure\"|trans }}</td>
    <td>{{ reservation.reservationHeure }}</td>
  </tr>
  {% if reservation.navette and reservation.navette.status == 'validée' %}
  <tr>
    <td>{{ \"Heure de passage\"|trans }}</td>
    <td>{% if reservation.heurePassage %}{{ reservation.heurePassage|date('H:i') }} {% endif %}</td>
  </tr>
   <tr>
    <td>{{ \"Véhicule\"|trans }}</td>
    <td>{% if reservation.navette %}{{ reservation.navette.vehicule }} {% endif %}</td>
  </tr>
   <tr>
    <td>{{ \"Chauffeur\"|trans }}</td>
    <td>{% if reservation.navette and reservation.navette.vehicule %}
    {{ reservation.navette.vehicule.user }}</td>
  </tr>

  <tr>
    <td>{{ \"Téléphone du chauffeur\"|trans }}</td>
    <td>{% if reservation.navette and reservation.navette.vehicule and reservation.navette.vehicule.user %}
      <a href=\"tel:{{reservation.navette.vehicule.user.telephone}}\">{{reservation.navette.vehicule.user.telephone}}</a> {% endif %}</td>
    {% endif %}</td>
  </tr>

  {% endif %}
</table>
 

{% endblock %}

{% block footer %}
  {{ parent() }}

  
{% endblock %}
", "admin/reservation_entries/details.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\reservation_entries\\details.html.twig");
    }
}
