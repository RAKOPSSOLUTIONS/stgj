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

/* admin/vehicule/details.html.twig */
class __TwigTemplate_c24380736cddcb660316abf5a2a82998 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/vehicule/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/vehicule/details.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/vehicule/details.html.twig", 1);
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
        <i class=\"bi bi-truck\"></i>
        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Véhicule"), "html", null, true);
        yield "
      </h1>
    </div>
    <div class=\"col-lg-4 col-4\">
      <div class=\"float-end\">

        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicules");
        yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-list\"></i>
        <span class=\"d-none d-lg-inline-block\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Liste des vehicules"), "html", null, true);
        yield "</span>
        </a>

        <a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule.update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
          <i class=\"bi bi-pencil-square\"></i>
          <span class=\"d-none d-lg-inline-block\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier"), "html", null, true);
        yield "</span>
        </a>

        <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule.create");
        yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-plus\"></i>
        <span class=\"d-none d-lg-inline-block\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ajouter"), "html", null, true);
        yield "</span>
        </a>

      </div>
    </div>
  </div>

<table class=\"table table-hover table-basic mb-0\">
    <tr>
      <td colspan=\"4\" class=\"styled-title mb-2\">
        <h3>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Information sur le véhicule : "), "html", null, true);
        yield "</h3>
      </td>
    </tr>
\t<tr>
\t\t<td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Marque"), "html", null, true);
        yield "</td>
\t\t<td>";
        // line 42
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 42, $this->source); })()), "marqueId", [], "any", false, false, false, 42), Twig\Extension\CoreExtension::keys((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 42, $this->source); })())))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 42, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 42, $this->source); })()), "marqueId", [], "any", false, false, false, 42), [], "array", false, false, false, 42), "html", null, true);
            yield " ";
        }
        yield "</td>
\t\t<td>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modèle"), "html", null, true);
        yield "</td>
\t\t<td>";
        // line 44
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 44, $this->source); })()), "modeleId", [], "any", false, false, false, 44), Twig\Extension\CoreExtension::keys((isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new RuntimeError('Variable "modeles" does not exist.', 44, $this->source); })())))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new RuntimeError('Variable "modeles" does not exist.', 44, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 44, $this->source); })()), "modeleId", [], "any", false, false, false, 44), [], "array", false, false, false, 44), "html", null, true);
            yield " ";
        }
        yield "</td>
\t</tr>
\t
\t<tr>
\t\t<td>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "</td>
\t\t<td>";
        // line 49
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 49, $this->source); })()), "typeId", [], "any", false, false, false, 49), Twig\Extension\CoreExtension::keys((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 49, $this->source); })())))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 49, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 49, $this->source); })()), "typeId", [], "any", false, false, false, 49), [], "array", false, false, false, 49), "html", null, true);
            yield " ";
        }
        yield "</td>
\t\t<td>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type de moteur"), "html", null, true);
        yield "</td>
\t\t<td>";
        // line 51
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 51, $this->source); })()), "typeMoteurId", [], "any", false, false, false, 51), Twig\Extension\CoreExtension::keys((isset($context["type_moteurs"]) || array_key_exists("type_moteurs", $context) ? $context["type_moteurs"] : (function () { throw new RuntimeError('Variable "type_moteurs" does not exist.', 51, $this->source); })())))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["type_moteurs"]) || array_key_exists("type_moteurs", $context) ? $context["type_moteurs"] : (function () { throw new RuntimeError('Variable "type_moteurs" does not exist.', 51, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 51, $this->source); })()), "typeMoteurId", [], "any", false, false, false, 51), [], "array", false, false, false, 51), "html", null, true);
            yield " ";
        }
        yield "</td>
\t</tr>

\t<tr>
\t\t<td>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Etat physique du véhicule"), "html", null, true);
        yield "</td>
\t\t<td>";
        // line 56
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 56, $this->source); })()), "groupeId", [], "any", false, false, false, 56), Twig\Extension\CoreExtension::keys((isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 56, $this->source); })())))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 56, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 56, $this->source); })()), "groupeId", [], "any", false, false, false, 56), [], "array", false, false, false, 56), "html", null, true);
            yield " ";
        }
        yield "</td>
\t\t<td>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date de mise en circulation"), "html", null, true);
        yield "</td>
\t\t<td>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 58, $this->source); })()), "dateCirculation", [], "any", false, false, false, 58), "m/d/Y"), "html", null, true);
        yield "</td>
\t</tr>

\t<tr>
\t\t<td>";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Kilométrage de départ"), "html", null, true);
        yield "</td>
\t\t<td>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 63, $this->source); })()), "kilometrage", [], "any", false, false, false, 63), "html", null, true);
        yield "</td>
\t\t<td>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Plaque d'immatriculation"), "html", null, true);
        yield "</td>
\t\t<td>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 65, $this->source); })()), "immatriculation", [], "any", false, false, false, 65), "html", null, true);
        yield "</td>
\t</tr>

\t<tr>
\t\t<td>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date d’acquisition"), "html", null, true);
        yield "</td>
\t\t<td>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 70, $this->source); })()), "dateCirculation", [], "any", false, false, false, 70), "m/d/Y"), "html", null, true);
        yield "</td>
\t\t<td>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Numéro de châssis"), "html", null, true);
        yield "</td>
\t\t<td>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 72, $this->source); })()), "numeroChassis", [], "any", false, false, false, 72), "html", null, true);
        yield "</td>
\t</tr>

\t
\t<tr>
\t\t<td>";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("En services ?"), "html", null, true);
        yield "</td>
\t\t<td>";
        // line 78
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 78, $this->source); })()), "enService", [], "any", false, false, false, 78) == 1)) ? ("Oui") : ("Non"));
        yield "</td>
\t\t<td></td>
\t\t<td></td>
    </tr>

</table>


  <div class=\"styled-title mb-2 mt-2\">
    <h3>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Affectations"), "html", null, true);
        yield "</h3>
  </div> 


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
        return "admin/vehicule/details.html.twig";
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
        return array (  271 => 87,  259 => 78,  255 => 77,  247 => 72,  243 => 71,  239 => 70,  235 => 69,  228 => 65,  224 => 64,  220 => 63,  216 => 62,  209 => 58,  205 => 57,  197 => 56,  193 => 55,  182 => 51,  178 => 50,  170 => 49,  166 => 48,  155 => 44,  151 => 43,  143 => 42,  139 => 41,  132 => 37,  119 => 27,  114 => 25,  108 => 22,  103 => 20,  97 => 17,  92 => 15,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}

<div class=\"row mb-4\">
    <div class=\"col-lg-8 col-8\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-truck\"></i>
        {{ \"Véhicule\"|trans }}
      </h1>
    </div>
    <div class=\"col-lg-4 col-4\">
      <div class=\"float-end\">

        <a href=\"{{ path('vehicules') }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-list\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Liste des vehicules\"|trans }}</span>
        </a>

        <a href=\"{{ path('vehicule.update', {id: vehicule.id}) }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
          <i class=\"bi bi-pencil-square\"></i>
          <span class=\"d-none d-lg-inline-block\">{{ \"Modifier\"|trans }}</span>
        </a>

        <a href=\"{{ path('vehicule.create') }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-plus\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Ajouter\"|trans }}</span>
        </a>

      </div>
    </div>
  </div>

<table class=\"table table-hover table-basic mb-0\">
    <tr>
      <td colspan=\"4\" class=\"styled-title mb-2\">
        <h3>{{ \"Information sur le véhicule : \"|trans }}</h3>
      </td>
    </tr>
\t<tr>
\t\t<td>{{ \"Marque\"|trans }}</td>
\t\t<td>{% if vehicule.marqueId in marques|keys %} {{ marques[vehicule.marqueId] }} {% endif %}</td>
\t\t<td>{{ \"Modèle\"|trans }}</td>
\t\t<td>{% if vehicule.modeleId in modeles|keys %} {{ modeles[vehicule.modeleId] }} {% endif %}</td>
\t</tr>
\t
\t<tr>
\t\t<td>{{ \"Type\"|trans }}</td>
\t\t<td>{% if vehicule.typeId in types|keys %} {{ types[vehicule.typeId] }} {% endif %}</td>
\t\t<td>{{ \"Type de moteur\"|trans }}</td>
\t\t<td>{% if vehicule.typeMoteurId in type_moteurs|keys %} {{ type_moteurs[vehicule.typeMoteurId] }} {% endif %}</td>
\t</tr>

\t<tr>
\t\t<td>{{ \"Etat physique du véhicule\"|trans }}</td>
\t\t<td>{% if vehicule.groupeId in groupes|keys %} {{ groupes[vehicule.groupeId] }} {% endif %}</td>
\t\t<td>{{ \"Date de mise en circulation\"|trans }}</td>
\t\t<td>{{ vehicule.dateCirculation|date(\"m/d/Y\") }}</td>
\t</tr>

\t<tr>
\t\t<td>{{ \"Kilométrage de départ\"|trans }}</td>
\t\t<td>{{ vehicule.kilometrage }}</td>
\t\t<td>{{ \"Plaque d'immatriculation\"|trans }}</td>
\t\t<td>{{ vehicule.immatriculation }}</td>
\t</tr>

\t<tr>
\t\t<td>{{ \"Date d’acquisition\"|trans }}</td>
\t\t<td>{{ vehicule.dateCirculation|date(\"m/d/Y\") }}</td>
\t\t<td>{{ \"Numéro de châssis\"|trans }}</td>
\t\t<td>{{ vehicule.numeroChassis }}</td>
\t</tr>

\t
\t<tr>
\t\t<td>{{ \"En services ?\"|trans }}</td>
\t\t<td>{{ vehicule.enService==1 ? 'Oui' : 'Non' }}</td>
\t\t<td></td>
\t\t<td></td>
    </tr>

</table>


  <div class=\"styled-title mb-2 mt-2\">
    <h3>{{ \"Affectations\"|trans }}</h3>
  </div> 


{% endblock %}", "admin/vehicule/details.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\vehicule\\details.html.twig");
    }
}
