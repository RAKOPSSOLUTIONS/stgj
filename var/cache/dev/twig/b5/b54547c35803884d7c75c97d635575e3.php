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

/* layout/table/bulk-actions.html.twig */
class __TwigTemplate_fd4b9824ca0094ad5b865c1c01557b20 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/bulk-actions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/bulk-actions.html.twig"));

        // line 1
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "bulk_actions", [], "any", false, false, false, 1))) {
            // line 2
            yield "  <div class=\"input-group-text check-all rounded-0 shadow-none\">
    <input type=\"checkbox\" class=\"cb-check-all form-check-input mt-0 cursor-pointer\">
  </div>
  <select class=\"form-control bulk-actions\">
    <option value=\"\">";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions groupées"), "html", null, true);
            yield "</option>
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "bulk_actions", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 8
                yield "      <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "path", [], "any", false, false, false, 8), "html", null, true);
                yield "\" data-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 8), "html", null, true);
                yield "\">
        ";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 9), "html", null, true);
                yield "
      </option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            yield "  </select>
  <button type=\"button\" class=\"btn btn-outline-secondary rounded-0 shadow-none bulk-apply\">
    ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Appliquer"), "html", null, true);
            yield "
  </button>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/table/bulk-actions.html.twig";
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
        return array (  84 => 14,  80 => 12,  71 => 9,  64 => 8,  60 => 7,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if data.bulk_actions|length %}
  <div class=\"input-group-text check-all rounded-0 shadow-none\">
    <input type=\"checkbox\" class=\"cb-check-all form-check-input mt-0 cursor-pointer\">
  </div>
  <select class=\"form-control bulk-actions\">
    <option value=\"\">{{ \"Actions groupées\"|trans }}</option>
    {% for action in data.bulk_actions %}
      <option value=\"{{ action.path }}\" data-name=\"{{ action.name }}\">
        {{ action.label }}
      </option>
    {% endfor %}
  </select>
  <button type=\"button\" class=\"btn btn-outline-secondary rounded-0 shadow-none bulk-apply\">
    {{ \"Appliquer\"|trans }}
  </button>
{% endif %}", "layout/table/bulk-actions.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\layout\\table\\bulk-actions.html.twig");
    }
}
