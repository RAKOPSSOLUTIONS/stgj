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

/* layout/table/actions.html.twig */
class __TwigTemplate_20d70be7c7def0beeea31f725ae21583 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/actions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/actions.html.twig"));

        // line 1
        yield "<div class=\"btn-group\">
  <button 
    type=\"button\" 
    class=\"btn btn-light btn-sm rounded-0 shadow-none dropdown-toggle\" 
    data-bs-toggle=\"dropdown\" 
    aria-expanded=\"false\"
  >
    <i class=\"bi bi-list\"></i>
  </button>
  <ul class=\"dropdown-menu\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 11, $this->source); })()), "actions", [], "any", false, false, false, 11));
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
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 12
            yield "      <li class=\"action-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 12) == "divider")) ? ("divider") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 12), "html", null, true)));
            yield "\">
        ";
            // line 13
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 13) == "divider")) {
                // line 14
                yield "          ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 14, $this->source); })()), "actions", [], "any", false, false, false, 14)) > CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 14))) {
                    // line 15
                    yield "            <hr class=\"dropdown-divider m-0 my-1\">
          ";
                }
                // line 17
                yield "        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 17) == "link")) {
                // line 18
                yield "          <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "path", [], "any", false, false, false, 18), "html", null, true);
                yield "\" class=\"dropdown-item\" ";
                yield $this->extensions['App\Twig\AttributesExtension']->renderAttributes(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "attrs", [], "any", false, false, false, 18));
                yield ">
            <i class=\"";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 19), "html", null, true);
                yield "\"></i>
            ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 20), "html", null, true);
                yield "
          </a>
        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 22
$context["action"], "type", [], "any", false, false, false, 22) == "modal")) {
                // line 23
                yield "          <ajax-modal 
            url=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "path", [], "any", false, false, false, 24), "html", null, true);
                yield "\"
            ";
                // line 25
                if (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "confirm", [], "any", false, false, false, 25)) {
                    yield "confirm=\"1\"";
                }
                // line 26
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "modal_message", [], "any", false, false, false, 26)) {
                    yield "message=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "modal_message", [], "any", false, false, false, 26)), "html", null, true);
                    yield "\"";
                }
                // line 27
                yield "            ";
                yield $this->extensions['App\Twig\AttributesExtension']->renderAttributes(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "attrs", [], "any", false, false, false, 27));
                yield "
          >
            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
              <i class=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 30), "html", null, true);
                yield "\"></i>
              ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 31), "html", null, true);
                yield "
            </a>
          </ajax-modal>
        ";
            }
            // line 35
            yield "      </li>
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
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "  </ul>
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
        return "layout/table/actions.html.twig";
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
        return array (  163 => 37,  148 => 35,  141 => 31,  137 => 30,  130 => 27,  123 => 26,  119 => 25,  115 => 24,  112 => 23,  110 => 22,  105 => 20,  101 => 19,  94 => 18,  91 => 17,  87 => 15,  84 => 14,  82 => 13,  77 => 12,  60 => 11,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"btn-group\">
  <button 
    type=\"button\" 
    class=\"btn btn-light btn-sm rounded-0 shadow-none dropdown-toggle\" 
    data-bs-toggle=\"dropdown\" 
    aria-expanded=\"false\"
  >
    <i class=\"bi bi-list\"></i>
  </button>
  <ul class=\"dropdown-menu\">
    {% for action in row.actions %}
      <li class=\"action-{{ action.type == 'divider' ? 'divider' : action.name }}\">
        {% if action.type == 'divider' %}
          {% if row.actions|length > loop.index %}
            <hr class=\"dropdown-divider m-0 my-1\">
          {% endif %}
        {% elseif action.type == 'link' %}
          <a href=\"{{ action.path }}\" class=\"dropdown-item\" {{ chm_attributes(action.attrs)|raw }}>
            <i class=\"{{ action.icon }}\"></i>
            {{ action.label }}
          </a>
        {% elseif action.type == 'modal' %}
          <ajax-modal 
            url=\"{{ action.path }}\"
            {% if action.confirm %}confirm=\"1\"{% endif %}
            {% if action.modal_message %}message=\"{{ action.modal_message|trans }}\"{% endif %}
            {{ chm_attributes(action.attrs)|raw }}
          >
            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
              <i class=\"{{ action.icon }}\"></i>
              {{ action.label }}
            </a>
          </ajax-modal>
        {% endif %}
      </li>
    {% endfor %}
  </ul>
</div>
", "layout/table/actions.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\layout\\table\\actions.html.twig");
    }
}
