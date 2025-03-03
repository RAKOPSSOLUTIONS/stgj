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

/* admin/reclamation/reporting.html.twig */
class __TwigTemplate_6d50a98c5f7bfda313f08c92c8fbd26e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/reporting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/reporting.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/reclamation/reporting.html.twig", 1);
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
        <i class=\"bi bi-clipboard-data\"></i>
        ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Statistiques"), "html", null, true);
        yield "
      </h1>
    </div>
  </div>

  <div class=\"row mt-3\">
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-question-circle fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes demandes"), "html", null, true);
        yield "</span>
          <span class=\"fw-bold fs-3\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count_owned"]) || array_key_exists("count_owned", $context) ? $context["count_owned"] : (function () { throw new RuntimeError('Variable "count_owned" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</span>
        </div>
      </div>
    </div>
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-question-circle fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Demandes en cours"), "html", null, true);
        yield "</span>
          <span class=\"fw-bold fs-3\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count_pending"]) || array_key_exists("count_pending", $context) ? $context["count_pending"] : (function () { throw new RuntimeError('Variable "count_pending" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "</span>
        </div>
      </div>
    </div>
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-question-circle fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Demandes clôturées"), "html", null, true);
        yield "</span>
          <span class=\"fw-bold fs-3\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count_colsed"]) || array_key_exists("count_colsed", $context) ? $context["count_colsed"] : (function () { throw new RuntimeError('Variable "count_colsed" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "</span>
        </div>
      </div>
    </div>
  </div>

  <div class=\"row mt-3\">
    <div class=\"col-md-4 col-12 mb-4 mb-sm-0\">
       <ajax-chart 
        type=\"doughnut\" 
        url=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demandes_per_direction");
        yield "\" 
        class=\"card d-flex justify-content-center align-items-center rounded-0 shadow-sm px-3 pt-2\"
        style=\"height: 420px;\"
      />
    </div>
    <div class=\"col-md-4 col-12 mb-4 mb-sm-0\">
      <ajax-chart 
        type=\"doughnut\" 
        url=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demandes_per_category");
        yield "\" 
        class=\"card d-flex justify-content-center align-items-center rounded-0 shadow-sm px-3 pt-2\"
        style=\"height: 420px;\"
      />
    </div>
    <div class=\"col-md-4 col-12\">
      <ajax-chart 
        type=\"doughnut\" 
        url=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demandes_per_statut");
        yield "\" 
        class=\"card d-flex justify-content-center align-items-center rounded-0 shadow-sm px-3 pt-2\"
        style=\"height: 420px;\"
      />
    </div>
  </div>

  <div class=\"row mt-3\">
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
           <table class=\"table table-bordered\">
             <tr>
               <th>Nature</th>
               <th>Deadline</th>
               <th>Moyenne</th>
               <th>Nombre de demandes</th>
             </tr>
             ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["demandes"]) || array_key_exists("demandes", $context) ? $context["demandes"] : (function () { throw new RuntimeError('Variable "demandes" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 82
            yield "             <tr>
               <td>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "libelle", [], "array", false, false, false, 83), "html", null, true);
            yield " </td>
               <td>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "deadline", [], "array", false, false, false, 84), "html", null, true);
            yield " jours</td>
               <td>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "duration_avg", [], "array", false, false, false, 85), "html", null, true);
            yield " jours</td>
               <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "demandes_count", [], "array", false, false, false, 86), "html", null, true);
            yield "</td>
            </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['demande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "            </table>
        </div>
      </div>
    </div>

  </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
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

        // line 100
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
        return "admin/reclamation/reporting.html.twig";
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
        return array (  246 => 100,  233 => 99,  214 => 89,  205 => 86,  201 => 85,  197 => 84,  193 => 83,  190 => 82,  186 => 81,  165 => 63,  154 => 55,  143 => 47,  130 => 37,  126 => 36,  115 => 28,  111 => 27,  100 => 19,  96 => 18,  83 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-clipboard-data\"></i>
        {{ \"Statistiques\"|trans }}
      </h1>
    </div>
  </div>

  <div class=\"row mt-3\">
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-question-circle fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Mes demandes\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ count_owned }}</span>
        </div>
      </div>
    </div>
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-question-circle fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Demandes en cours\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ count_pending }}</span>
        </div>
      </div>
    </div>
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-question-circle fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Demandes clôturées\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ count_colsed }}</span>
        </div>
      </div>
    </div>
  </div>

  <div class=\"row mt-3\">
    <div class=\"col-md-4 col-12 mb-4 mb-sm-0\">
       <ajax-chart 
        type=\"doughnut\" 
        url=\"{{ path('demandes_per_direction') }}\" 
        class=\"card d-flex justify-content-center align-items-center rounded-0 shadow-sm px-3 pt-2\"
        style=\"height: 420px;\"
      />
    </div>
    <div class=\"col-md-4 col-12 mb-4 mb-sm-0\">
      <ajax-chart 
        type=\"doughnut\" 
        url=\"{{ path('demandes_per_category') }}\" 
        class=\"card d-flex justify-content-center align-items-center rounded-0 shadow-sm px-3 pt-2\"
        style=\"height: 420px;\"
      />
    </div>
    <div class=\"col-md-4 col-12\">
      <ajax-chart 
        type=\"doughnut\" 
        url=\"{{ path('demandes_per_statut') }}\" 
        class=\"card d-flex justify-content-center align-items-center rounded-0 shadow-sm px-3 pt-2\"
        style=\"height: 420px;\"
      />
    </div>
  </div>

  <div class=\"row mt-3\">
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
           <table class=\"table table-bordered\">
             <tr>
               <th>Nature</th>
               <th>Deadline</th>
               <th>Moyenne</th>
               <th>Nombre de demandes</th>
             </tr>
             {% for demande in demandes %}
             <tr>
               <td>{{ demande['libelle'] }} </td>
               <td>{{ demande['deadline'] }} jours</td>
               <td>{{ demande['duration_avg'] }} jours</td>
               <td>{{ demande['demandes_count'] }}</td>
            </tr>
             {% endfor %}
            </table>
        </div>
      </div>
    </div>

  </div>


{% endblock %}

{% block footer %}
  {{ parent() }}
  <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
{% endblock %}
", "admin/reclamation/reporting.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\admin\\reclamation\\reporting.html.twig");
    }
}
