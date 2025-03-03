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

/* layout/table/bottom.html.twig */
class __TwigTemplate_f78710621fd337592751b8f007f06a02 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/bottom.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/bottom.html.twig"));

        // line 1
        yield "<div class=\"row table-bottom mt-3\">
  <div class=\"col-md-6 mb-3 mb-lg-0\">
    <div class=\"input-group m-0\">
      ";
        // line 4
        yield from $this->loadTemplate("layout/table/bulk-actions.html.twig", "layout/table/bottom.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "      <select class=\"form-control perpage\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Éléments par page"), "html", null, true);
        yield "\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "perpages", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["perpage"]) {
            // line 7
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["perpage"], "html", null, true);
            yield "\" ";
            yield ((($context["perpage"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "perpage", [], "any", false, false, false, 7))) ? ("selected") : (""));
            yield ">
            ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["perpage"], "html", null, true);
            yield "
          </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['perpage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "      </select>
      <button type=\"button\" class=\"btn btn-outline-secondary rounded-0 shadow-none btn-loading\">
        <span class=\"spinner-border spinner-border-sm\"></span>
      </button>
    </div>
  </div>
  <div class=\"col-md-6\">
    ";
        // line 18
        yield from $this->loadTemplate("layout/table/pagination.html.twig", "layout/table/bottom.html.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/table/bottom.html.twig";
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
        return array (  91 => 19,  89 => 18,  80 => 11,  71 => 8,  64 => 7,  60 => 6,  55 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row table-bottom mt-3\">
  <div class=\"col-md-6 mb-3 mb-lg-0\">
    <div class=\"input-group m-0\">
      {% include \"layout/table/bulk-actions.html.twig\" %}
      <select class=\"form-control perpage\" title=\"{{ \"Éléments par page\"|trans }}\">
        {% for perpage in data.perpages %}
          <option value=\"{{ perpage }}\" {{ perpage == data.perpage ? 'selected' : '' }}>
            {{ perpage }}
          </option>
        {% endfor %}
      </select>
      <button type=\"button\" class=\"btn btn-outline-secondary rounded-0 shadow-none btn-loading\">
        <span class=\"spinner-border spinner-border-sm\"></span>
      </button>
    </div>
  </div>
  <div class=\"col-md-6\">
    {% include \"layout/table/pagination.html.twig\" %}
  </div>
</div>
", "layout/table/bottom.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\layout\\table\\bottom.html.twig");
    }
}
