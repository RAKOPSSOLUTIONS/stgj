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

/* layout/table/body.html.twig */
class __TwigTemplate_44db8236465a8748c6989586e8e0bd91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/body.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/body.html.twig"));

        // line 1
        yield "<tbody>
  ";
        // line 2
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()), "rows", [], "any", false, false, false, 2))) {
            // line 3
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "rows", [], "any", false, false, false, 3));
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 4
                yield "    <tr class=\"mb-0\" data-pkv=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "pkv", [], "any", false, false, false, 4), "html", null, true);
                yield "\">
      ";
                // line 5
                if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "bulk_actions", [], "any", false, false, false, 5))) {
                    // line 6
                    yield "        <td class=\"col-check-all\">
          <input
            type=\"checkbox\" 
            value=\"";
                    // line 9
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "pkv", [], "any", false, false, false, 9), "html", null, true);
                    yield "\"
            class=\"cb-item form-check-input cursor-pointer\"
          />
        </td> 
      ";
                }
                // line 14
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "columns", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 15
                    yield "        <td data-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 15), "html", null, true);
                    yield "\" class=\"td_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 15), "html", null, true);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["row"], CoreExtension::getAttribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 15), [], "array", false, false, false, 15);
                    yield "</td>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                yield "      ";
                if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["row"], "actions", [], "any", false, false, false, 17))) {
                    // line 18
                    yield "        <td align=\"center\" class=\"actions\" data-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
                    yield "\">
          ";
                    // line 19
                    yield from $this->loadTemplate("layout/table/actions.html.twig", "layout/table/body.html.twig", 19)->unwrap()->yield($context);
                    // line 20
                    yield "        </td>
      ";
                }
                // line 22
                yield "    </tr>
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
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "  ";
        } else {
            // line 25
            yield "  <tr>
    <td colspan=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "columns", [], "any", false, false, false, 26)), "html", null, true);
            yield "\" align=\"center\" class=\"empty\">
      ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucun résultat n'a été trouvé"), "html", null, true);
            yield "
    </td>
  </tr>
  ";
        }
        // line 31
        yield "</tbody>
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
        return "layout/table/body.html.twig";
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
        return array (  155 => 31,  148 => 27,  144 => 26,  141 => 25,  138 => 24,  123 => 22,  119 => 20,  117 => 19,  112 => 18,  109 => 17,  96 => 15,  91 => 14,  83 => 9,  78 => 6,  76 => 5,  71 => 4,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<tbody>
  {% if data.rows|length %}
    {% for row in data.rows %}
    <tr class=\"mb-0\" data-pkv=\"{{ row.pkv }}\">
      {% if data.bulk_actions|length %}
        <td class=\"col-check-all\">
          <input
            type=\"checkbox\" 
            value=\"{{ row.pkv }}\"
            class=\"cb-item form-check-input cursor-pointer\"
          />
        </td> 
      {% endif %}
      {% for column in data.columns %}
        <td data-label=\"{{ column.label }}\" class=\"td_{{ column.name }}\">{{ row[column.name]|raw }}</td>
      {% endfor %}
      {% if row.actions|length %}
        <td align=\"center\" class=\"actions\" data-label=\"{{ \"Actions\"|trans }}\">
          {% include \"layout/table/actions.html.twig\" %}
        </td>
      {% endif %}
    </tr>
    {% endfor %}
  {% else %}
  <tr>
    <td colspan=\"{{ data.columns|length }}\" align=\"center\" class=\"empty\">
      {{ \"Aucun résultat n'a été trouvé\"|trans }}
    </td>
  </tr>
  {% endif %}
</tbody>
", "layout/table/body.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\layout\\table\\body.html.twig");
    }
}
