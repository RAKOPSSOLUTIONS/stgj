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

/* admin/reservation/details.html.twig */
class __TwigTemplate_b422944130ec5959be30bd1acfb41ddd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/details.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/reservation/details.html.twig", 1);
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
<h6 class=\"styled-title mb-2 text-white\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "html", null, true);
        yield "</h6>
<div class=\"row\">
  <div class=\"col-sm-6\">
<h3 class=\"btn btn-danger\">ENTREE</h3>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Zone"), "html", null, true);
        yield "</td>
    <td>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 13, $this->source); })()), "zone", [], "any", false, false, false, 13), "html", null, true);
        yield "</td>
  </tr>
  ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 15, $this->source); })()), "trajetEntree", [], "any", false, false, false, 15)) {
            // line 16
            yield "  <tr>
    <td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom du trajet"), "html", null, true);
            yield "</td>
    <td>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 18, $this->source); })()), "trajetEntree", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
  </tr>
  ";
        }
        // line 21
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 21, $this->source); })()), "pickupEntree", [], "any", false, false, false, 21)) {
            // line 22
            yield "  <tr>
    <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Point de ramassage"), "html", null, true);
            yield "</td>
    <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 24, $this->source); })()), "pickupEntree", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
  </tr>
  ";
        }
        // line 26
        yield " 
  <tr>
    <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Heure d'entrée"), "html", null, true);
        yield "</td>
    <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 29, $this->source); })()), "shiftEntree", [], "any", false, false, false, 29), "html", null, true);
        yield "H</td>
  </tr>
  ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 31, $this->source); })()), "adresseEntree", [], "any", false, false, false, 31)) {
            // line 32
            yield "  <tr>
    <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adresse du domicile"), "html", null, true);
            yield "</td>
    <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "adresseEntree", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
  </tr>
  ";
        }
        // line 37
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 37, $this->source); })()), "repereEntree", [], "any", false, false, false, 37)) {
            // line 38
            yield "  <tr>
    <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Point de repère le plus proche"), "html", null, true);
            yield "</td>
    <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 40, $this->source); })()), "repereEntree", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
  </tr>
  ";
        }
        // line 43
        yield "  <tr>
    <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dates nécessitant le transport en entrée"), "html", null, true);
        yield "</td>
    <td><ul>
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "getDatesEntree", [], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 47
            yield "      <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["date"], "html", null, true);
            yield "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['date'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "</ul>
    </td>
  </tr>
   
</table>
</div>
<div class=\"col-sm-6\">
<h3 class=\"btn btn-danger\">SORTIE</h3>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Zone"), "html", null, true);
        yield "</td>
    <td>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 60, $this->source); })()), "zone", [], "any", false, false, false, 60), "html", null, true);
        yield "</td>
  </tr>
  ";
        // line 62
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 62, $this->source); })()), "trajetSortie", [], "any", false, false, false, 62)) {
            // line 63
            yield "  <tr>
    <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trajet de sortie"), "html", null, true);
            yield "</td>
    <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 65, $this->source); })()), "trajetSortie", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
  </tr>
  ";
        }
        // line 68
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 68, $this->source); })()), "pickupSortie", [], "any", false, false, false, 68)) {
            // line 69
            yield "  <tr>
    <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Point de ramassage"), "html", null, true);
            yield "</td>
    <td>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 71, $this->source); })()), "pickupSortie", [], "any", false, false, false, 71), "html", null, true);
            yield "</td>
  </tr>
  ";
        }
        // line 74
        yield "  <tr>
    <td>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Heure de sortie"), "html", null, true);
        yield "</td>
    <td>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 76, $this->source); })()), "shiftSortie", [], "any", false, false, false, 76), "html", null, true);
        yield "H</td>
  </tr>
  ";
        // line 78
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 78, $this->source); })()), "adresseSortie", [], "any", false, false, false, 78)) {
            // line 79
            yield "  <tr>
    <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adresse du domicile"), "html", null, true);
            yield "</td>
    <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 81, $this->source); })()), "adresseSortie", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
  </tr>
  ";
        }
        // line 84
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 84, $this->source); })()), "repereSortie", [], "any", false, false, false, 84)) {
            // line 85
            yield "  <tr>
    <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Point de repère le plus proche"), "html", null, true);
            yield "</td>
    <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 87, $this->source); })()), "repereSortie", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
  </tr>
  ";
        }
        // line 90
        yield "  <tr>
    <td>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dates nécessitant le transport en sortie"), "html", null, true);
        yield "</td>
    <td><ul>
    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 93, $this->source); })()), "getDatesSortie", [], "method", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 94
            yield "      <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["date"], "html", null, true);
            yield "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['date'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "</ul>
    </td>
  </tr>
 

</table>
</div>
</div>

 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 108
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

        // line 109
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
        return "admin/reservation/details.html.twig";
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
        return array (  347 => 109,  334 => 108,  312 => 95,  303 => 94,  299 => 93,  294 => 91,  291 => 90,  285 => 87,  281 => 86,  278 => 85,  275 => 84,  269 => 81,  265 => 80,  262 => 79,  260 => 78,  255 => 76,  251 => 75,  248 => 74,  242 => 71,  238 => 70,  235 => 69,  232 => 68,  226 => 65,  222 => 64,  219 => 63,  217 => 62,  212 => 60,  208 => 59,  195 => 48,  186 => 47,  182 => 46,  177 => 44,  174 => 43,  168 => 40,  164 => 39,  161 => 38,  158 => 37,  152 => 34,  148 => 33,  145 => 32,  143 => 31,  138 => 29,  134 => 28,  130 => 26,  124 => 24,  120 => 23,  117 => 22,  114 => 21,  108 => 18,  104 => 17,  101 => 16,  99 => 15,  94 => 13,  90 => 12,  80 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}

<h6 class=\"styled-title mb-2 text-white\">{{ reservation.user }}</h6>
<div class=\"row\">
  <div class=\"col-sm-6\">
<h3 class=\"btn btn-danger\">ENTREE</h3>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td>{{ \"Zone\"|trans }}</td>
    <td>{{ reservation.zone }}</td>
  </tr>
  {% if reservation.trajetEntree %}
  <tr>
    <td>{{ \"Nom du trajet\"|trans }}</td>
    <td>{{ reservation.trajetEntree }}</td>
  </tr>
  {% endif %}
  {% if reservation.pickupEntree %}
  <tr>
    <td>{{ \"Point de ramassage\"|trans }}</td>
    <td>{{ reservation.pickupEntree }}</td>
  </tr>
  {% endif %} 
  <tr>
    <td>{{ \"Heure d'entrée\"|trans }}</td>
    <td>{{ reservation.shiftEntree }}H</td>
  </tr>
  {% if reservation.adresseEntree %}
  <tr>
    <td>{{ \"Adresse du domicile\"|trans }}</td>
    <td>{{ reservation.adresseEntree }}</td>
  </tr>
  {% endif %}
  {% if reservation.repereEntree %}
  <tr>
    <td>{{ \"Point de repère le plus proche\"|trans }}</td>
    <td>{{ reservation.repereEntree }}</td>
  </tr>
  {% endif %}
  <tr>
    <td>{{ \"Dates nécessitant le transport en entrée\"|trans }}</td>
    <td><ul>
    {% for date in reservation.getDatesEntree() %}
      <li>{{ date }}</li>
    {% endfor %}</ul>
    </td>
  </tr>
   
</table>
</div>
<div class=\"col-sm-6\">
<h3 class=\"btn btn-danger\">SORTIE</h3>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td>{{ \"Zone\"|trans }}</td>
    <td>{{ reservation.zone }}</td>
  </tr>
  {% if reservation.trajetSortie %}
  <tr>
    <td>{{ \"Trajet de sortie\"|trans }}</td>
    <td>{{ reservation.trajetSortie }}</td>
  </tr>
  {% endif %}
  {% if reservation.pickupSortie %}
  <tr>
    <td>{{ \"Point de ramassage\"|trans }}</td>
    <td>{{ reservation.pickupSortie }}</td>
  </tr>
  {% endif %}
  <tr>
    <td>{{ \"Heure de sortie\"|trans }}</td>
    <td>{{ reservation.shiftSortie }}H</td>
  </tr>
  {% if reservation.adresseSortie %}
  <tr>
    <td>{{ \"Adresse du domicile\"|trans }}</td>
    <td>{{ reservation.adresseSortie }}</td>
  </tr>
  {% endif %}
  {% if reservation.repereSortie %}
  <tr>
    <td>{{ \"Point de repère le plus proche\"|trans }}</td>
    <td>{{ reservation.repereSortie }}</td>
  </tr>
  {% endif %}
  <tr>
    <td>{{ \"Dates nécessitant le transport en sortie\"|trans }}</td>
    <td><ul>
    {% for date in reservation.getDatesSortie() %}
      <li>{{ date }}</li>
    {% endfor %}</ul>
    </td>
  </tr>
 

</table>
</div>
</div>

 

{% endblock %}

{% block footer %}
  {{ parent() }}

  
{% endblock %}
", "admin/reservation/details.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\reservation\\details.html.twig");
    }
}
