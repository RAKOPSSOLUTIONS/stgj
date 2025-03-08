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

/* admin/reportings/trajets.html.twig */
class __TwigTemplate_0da80807b772fd99fc8721ff5ae57cef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reportings/trajets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reportings/trajets.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/reportings/trajets.html.twig", 1);
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
        yield "  <div class=\"row\">
    <div class=\"col-sm-12\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-signpost\"></i>
        ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trajets"), "html", null, true);
        yield "
      </h1>
    </div>
  </div>

  

  <div class=\"row mt-3\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 16, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 17
            yield "    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-calendar-check fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center fw-bold\"><a href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries", ["trajet_id" => CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "name", [], "any", false, false, false, 21), "html", null, true);
            yield "</a></span>
          <span class=\"fs-5\"><b>Véhicule</b> : ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "vehicule", [], "any", false, false, false, 22), "html", null, true);
            yield "</span>
          <span class=\"fs-5\"><b>Direction</b> : ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "direction", [], "any", false, false, false, 23), "html", null, true);
            yield "</span>
          <span class=\"fs-5\"><b>Heure de départ</b> : ";
            // line 24
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "heure", [], "any", false, false, false, 24))) ? ("") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "heure", [], "any", false, false, false, 24), "H:i"), "html", null, true)));
            yield "</span>
          <span class=\"fs-5\"><b>Points de ramassage</b> : ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "pickups", [], "any", false, false, false, 25)), "html", null, true);
            yield "</span>
          <div class=\"row mt-3\">
            <div class=\"col\"><a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries", ["trajet_id" => CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Pointage</a></div>
            <div class=\"col\"><a href=\"\" class=\"btn btn-danger\">Terminer</a></div>
          </div>
        </div>
      </div>
    </div>
 
    ";
            // line 34
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34) == 3)) {
                yield " </div><div class=\"row mt-3\"> ";
            }
            // line 35
            yield "
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
        unset($context['_seq'], $context['_key'], $context['trajet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "     
  </div>



   

   


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
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

        // line 50
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
  <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
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
        return "admin/reportings/trajets.html.twig";
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
        return array (  203 => 50,  190 => 49,  169 => 37,  154 => 35,  150 => 34,  140 => 27,  135 => 25,  131 => 24,  127 => 23,  123 => 22,  117 => 21,  111 => 17,  94 => 16,  83 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-signpost\"></i>
        {{ \"Trajets\"|trans }}
      </h1>
    </div>
  </div>

  

  <div class=\"row mt-3\">
    {% for trajet in trajets %}
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-calendar-check fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center fw-bold\"><a href=\"{{ path('reservation_entries', {'trajet_id':trajet.id}) }}\">{{ trajet.name }}</a></span>
          <span class=\"fs-5\"><b>Véhicule</b> : {{ trajet.vehicule }}</span>
          <span class=\"fs-5\"><b>Direction</b> : {{ trajet.direction }}</span>
          <span class=\"fs-5\"><b>Heure de départ</b> : {{ trajet.heure is empty ? '' : trajet.heure|date(\"H:i\") }}</span>
          <span class=\"fs-5\"><b>Points de ramassage</b> : {{ trajet.pickups|length }}</span>
          <div class=\"row mt-3\">
            <div class=\"col\"><a href=\"{{ path('reservation_entries', {'trajet_id':trajet.id}) }}\" class=\"btn btn-primary\">Pointage</a></div>
            <div class=\"col\"><a href=\"\" class=\"btn btn-danger\">Terminer</a></div>
          </div>
        </div>
      </div>
    </div>
 
    {% if loop.index == 3 %} </div><div class=\"row mt-3\"> {% endif %}

    {% endfor %}
     
  </div>



   

   


{% endblock %}

{% block footer %}
  {{ parent() }}
  <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
{% endblock %}
", "admin/reportings/trajets.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\reportings\\trajets.html.twig");
    }
}
