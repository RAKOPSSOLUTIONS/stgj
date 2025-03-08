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

/* admin/reservation/recap.html.twig */
class __TwigTemplate_b1d94b689ddb1239424c69d27301075c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/recap.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/recap.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/reservation/recap.html.twig", 1);
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
        <i class=\"bi bi-calendar-check\"></i>
        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recap des reservations"), "html", null, true);
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
            yield from $this->loadTemplate("partials/export-results.html.twig", "admin/reservation/recap.html.twig", 15)->unwrap()->yield(CoreExtension::merge($context, ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservations.export")]));
            // line 16
            yield "      ";
        } else {
            // line 17
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservations.create");
            yield "\" class=\"add-new\">
          <button class=\"btn btn-outline-primary rounded-0 shadow-none\">
            <i class=\"bi bi-plus\"></i>
            <span class=\"d-none d-lg-inline-block\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ajouter"), "html", null, true);
            yield "</span>
          </button>
        </a>
        ";
        }
        // line 24
        yield "      </div>
    </div>
  </div>

  ";
        // line 28
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", ["sortable"], "method", false, false, false, 28)) {
            // line 29
            yield "    ";
            yield from $this->loadTemplate("layout/form/search/index.html.twig", "admin/reservation/recap.html.twig", 29)->unwrap()->yield(CoreExtension::merge($context, ["form" =>             // line 30
(isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 30, $this->source); })()), "tableId" => "reservations"]));
            // line 33
            yield "  ";
        }
        // line 34
        yield "
  <table class=\"table table-hover mb-0\">
    <thead>
      <tr>
          <th>#</th>
          <th>Date</th>
          <th>Zone</th>
          <th>Trajet</th>
          <th>Direction</th>
          <th>Heure</th>
          <th>Nombre de réservations</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 48, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 49
            yield "      <tr class=\"mb-0\" data-pkv=\"10\">
        <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
        <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 0, [], "array", false, false, false, 51), "html", null, true);
            yield "</td>
        <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 1, [], "array", false, false, false, 52), "html", null, true);
            yield "</td>
        <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 2, [], "array", false, false, false, 53), "html", null, true);
            yield "</td>
        <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 3, [], "array", false, false, false, 54), "html", null, true);
            yield "</td>
        <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 4, [], "array", false, false, false, 55), "html", null, true);
            yield "</td>
        <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], 5, [], "array", false, false, false, 56), "html", null, true);
            yield "</td>
      </tr>
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
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "    </tbody>
  </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 64
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

        // line 65
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
  ";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "get", ["sortable"], "method", false, false, false, 66)) {
            // line 67
            yield "  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
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
        return "admin/reservation/recap.html.twig";
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
        return array (  241 => 67,  239 => 66,  234 => 65,  221 => 64,  207 => 59,  190 => 56,  186 => 55,  182 => 54,  178 => 53,  174 => 52,  170 => 51,  166 => 50,  163 => 49,  146 => 48,  130 => 34,  127 => 33,  125 => 30,  123 => 29,  121 => 28,  115 => 24,  108 => 20,  101 => 17,  98 => 16,  96 => 15,  92 => 14,  84 => 9,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}
  
  <div class=\"row mb-4\">
    <div class=\"col-lg-9 col-9\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-calendar-check\"></i>
        {{ \"Recap des reservations\"|trans }}
      </h1>
    </div>
    <div class=\"col-lg-3 col-3\">
      <div class=\"float-end\">
      {% if is_granted('ROLE_ADMIN') %}   
        {% include \"partials/export-results.html.twig\" with { path: path('reservations.export') } %}
      {% else %}
        <a href=\"{{ path('reservations.create') }}\" class=\"add-new\">
          <button class=\"btn btn-outline-primary rounded-0 shadow-none\">
            <i class=\"bi bi-plus\"></i>
            <span class=\"d-none d-lg-inline-block\">{{ \"Ajouter\"|trans }}</span>
          </button>
        </a>
        {% endif %}
      </div>
    </div>
  </div>

  {% if not app.request.get('sortable') %}
    {% include \"layout/form/search/index.html.twig\" with { 
      form: search_form,
      tableId: \"reservations\" 
    } %}
  {% endif %}

  <table class=\"table table-hover mb-0\">
    <thead>
      <tr>
          <th>#</th>
          <th>Date</th>
          <th>Zone</th>
          <th>Trajet</th>
          <th>Direction</th>
          <th>Heure</th>
          <th>Nombre de réservations</th>
      </tr>
    </thead>
    <tbody>
      {% for reservation in reservations %}
      <tr class=\"mb-0\" data-pkv=\"10\">
        <td>{{ loop.index }}</td>
        <td>{{ reservation[0] }}</td>
        <td>{{ reservation[1] }}</td>
        <td>{{ reservation[2] }}</td>
        <td>{{ reservation[3] }}</td>
        <td>{{ reservation[4] }}</td>
        <td>{{ reservation[5] }}</td>
      </tr>
      {% endfor %}
    </tbody>
  </table>

{% endblock %}

{% block footer %}
  {{ parent() }}
  {% if app.request.get('sortable') %}
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
  {% endif %}
{% endblock %}
", "admin/reservation/recap.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\reservation\\recap.html.twig");
    }
}
