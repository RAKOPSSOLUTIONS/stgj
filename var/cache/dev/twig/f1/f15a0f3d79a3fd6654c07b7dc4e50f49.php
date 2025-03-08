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

/* @Httplug/stack.html.twig */
class __TwigTemplate_f1d147ecff7125b03f07901bb316f98b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/stack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/stack.html.twig"));

        // line 1
        yield "<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 1, $this->source); })()), "clientSlug", [], "any", false, false, false, 1), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "-details\">
    <div>
        ";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 3, $this->source); })()), "failed", [], "any", false, false, false, 3)) {
            // line 4
            yield "            <span class=\"httplug-stack-failed\">✘</span>
        ";
        } else {
            // line 6
            yield "            <span class=\"httplug-stack-success\">✔</span>
        ";
        }
        // line 8
        yield "        <span class=\"label httplug-method httplug-method-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 8, $this->source); })()), "requestMethod", [], "any", false, false, false, 8)), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 8, $this->source); })()), "requestMethod", [], "any", false, false, false, 8), "html", null, true);
        yield "</span>
    </div>
    ";
        // line 10
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "        <div class=\"label httplug-stack-header-target\">
            <span class=\"httplug-scheme\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 12, $this->source); })()), "requestScheme", [], "any", false, false, false, 12), "html", null, true);
            yield "://</span>
            <span class=\"httplug-host\">";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 13, $this->source); })()), "requestHost", [], "any", false, false, false, 13), "html", null, true);
            yield "</span>
            ";
            // line 14
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 14, $this->source); })()), "requestPort", [], "any", false, false, false, 14), [null, 80, 443])) {
                // line 15
                yield "                <span class=\"httplug-port\">:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 15, $this->source); })()), "requestPort", [], "any", false, false, false, 15), "html", null, true);
                yield "</span>
            ";
            }
            // line 17
            yield "            <span class=\"httplug-target\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((is_string($_v1 = ((CoreExtension::getAttribute($this->env, $this->source, ($context["stack"] ?? null), "requestTarget", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stack"] ?? null), "requestTarget", [], "any", false, false, false, 17), "/")) : ("/"))) && is_string($_v2 = "/") && str_starts_with($_v1, $_v2))) ? ("") : ("/")) . CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 17, $this->source); })()), "requestTarget", [], "any", false, false, false, 17)), "html", null, true);
            yield "</span>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        // line 20
        yield "    <div>
        <span class=\"label httplug-duration\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 21, $this->source); })()), "duration", [], "any", false, false, false, 21)), "html", null, true);
        yield " ms</span>
        ";
        // line 22
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 22, $this->source); })()), "responseCode", [], "any", false, false, false, 22) >= 400) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 22, $this->source); })()), "responseCode", [], "any", false, false, false, 22) <= 599))) {
            // line 23
            yield "            <span class=\"label status-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 23, $this->source); })()), "responseCode", [], "any", false, false, false, 23), "html", null, true);
            yield "</span>
        ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 24, $this->source); })()), "responseCode", [], "any", false, false, false, 24) >= 300) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 24, $this->source); })()), "responseCode", [], "any", false, false, false, 24) <= 399))) {
            // line 25
            yield "            <span class=\"label status-warning\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 25, $this->source); })()), "responseCode", [], "any", false, false, false, 25), "html", null, true);
            yield "</span>
        ";
        } else {
            // line 27
            yield "            <span class=\"label status-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 27, $this->source); })()), "responseCode", [], "any", false, false, false, 27), "html", null, true);
            yield "</span>
        ";
        }
        // line 29
        yield "    </div>
</div>
<div id=\"httplug-";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 31, $this->source); })()), "clientSlug", [], "any", false, false, false, 31), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 34, $this->source); })()), "curlCommand", [], "any", false, false, false, 34), "html", null, true);
        yield "\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 37, $this->source); })()), "clientSlug", [], "any", false, false, false, 37), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 38, $this->source); })()), "clientSlug", [], "any", false, false, false, 38), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            ";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 42, $this->source); })()), "clientRequest", [], "any", false, false, false, 42), "capturedBodyLength" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 42, $this->source); })()), "capturedBodyLength", [], "any", false, false, false, 42), "header" => "Request"], false);
        yield "
        </div>
        <div class=\"httplug-message card\">
            ";
        // line 45
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 45, $this->source); })()), "clientResponse", [], "any", false, false, false, 45), "capturedBodyLength" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 45, $this->source); })()), "capturedBodyLength", [], "any", false, false, false, 45), "header" => "Response"], false);
        yield "
        </div>
    </div>
    ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 48, $this->source); })()), "profiles", [], "any", false, false, false, 48)) {
            // line 49
            yield "        <div id=\"httplug-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 49, $this->source); })()), "clientSlug", [], "any", false, false, false, 49), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })()), "html", null, true);
            yield "-stack\" class=\"httplug-hidden card\">
            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 50, $this->source); })()), "profiles", [], "any", false, false, false, 50));
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
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 51
                yield "                <h3 class=\"httplug-plugin-name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "plugin", [], "any", false, false, false, 51), "html", null, true);
                yield "</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        ";
                // line 54
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "request", [], "any", false, false, false, 54), "capturedBodyLength" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "capturedBodyLength", [], "any", false, false, false, 54), "header" => "Request"], false);
                yield "
                    </div>
                    <div class=\"httplug-message\">
                        ";
                // line 57
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "response", [], "any", false, false, false, 57), "capturedBodyLength" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "capturedBodyLength", [], "any", false, false, false, 57), "header" => "Response"], false);
                yield "
                    </div>
                </div>
                ";
                // line 60
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 60)) {
                    // line 61
                    yield "                    <hr />
                ";
                }
                // line 63
                yield "            ";
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
            unset($context['_seq'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "        </div>
    ";
        }
        // line 66
        yield "</div>
";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "childrenStacks", [(isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 67, $this->source); })())], "method", false, false, false, 67));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 68
            yield "    <div class=\"httplug-stack\">
        ";
            // line 69
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Httplug/stack.html.twig", ["collector" =>             // line 70
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "client" =>             // line 71
(isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 71, $this->source); })()), "stack" =>             // line 72
$context["child"], "id" => ((            // line 73
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 73, $this->source); })()) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 73))], false);
            // line 74
            yield "
    </div>
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
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Httplug/stack.html.twig";
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
        return array (  276 => 74,  274 => 73,  273 => 72,  272 => 71,  271 => 70,  270 => 69,  267 => 68,  250 => 67,  247 => 66,  243 => 64,  229 => 63,  225 => 61,  223 => 60,  217 => 57,  211 => 54,  204 => 51,  187 => 50,  180 => 49,  178 => 48,  172 => 45,  166 => 42,  157 => 38,  151 => 37,  145 => 34,  137 => 31,  133 => 29,  127 => 27,  121 => 25,  119 => 24,  114 => 23,  112 => 22,  108 => 21,  105 => 20,  103 => 10,  95 => 17,  89 => 15,  87 => 14,  83 => 13,  79 => 12,  76 => 11,  74 => 10,  66 => 8,  62 => 6,  58 => 4,  56 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-{{ stack.clientSlug }}-{{ id }}-details\">
    <div>
        {% if stack.failed %}
            <span class=\"httplug-stack-failed\">✘</span>
        {% else %}
            <span class=\"httplug-stack-success\">✔</span>
        {% endif %}
        <span class=\"label httplug-method httplug-method-{{ stack.requestMethod|lower }}\">{{ stack.requestMethod }}</span>
    </div>
    {% apply spaceless %}
        <div class=\"label httplug-stack-header-target\">
            <span class=\"httplug-scheme\">{{ stack.requestScheme }}://</span>
            <span class=\"httplug-host\">{{ stack.requestHost }}</span>
            {% if stack.requestPort not in [null, 80, 443] %}
                <span class=\"httplug-port\">:{{ stack.requestPort }}</span>
            {% endif %}
            <span class=\"httplug-target\">{{ (stack.requestTarget|default('/') starts with '/' ? '' : '/')  ~ stack.requestTarget }}</span>
        </div>
    {% endapply %}
    <div>
        <span class=\"label httplug-duration\">{{ stack.duration|number_format }} ms</span>
        {% if stack.responseCode >= 400 and stack.responseCode <= 599 %}
            <span class=\"label status-error\">{{ stack.responseCode }}</span>
        {% elseif stack.responseCode >= 300 and stack.responseCode <= 399 %}
            <span class=\"label status-warning\">{{ stack.responseCode }}</span>
        {% else %}
            <span class=\"label status-success\">{{ stack.responseCode }}</span>
        {% endif %}
    </div>
</div>
<div id=\"httplug-{{ stack.clientSlug }}-{{ id }}-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"{{ stack.curlCommand }}\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-{{ stack.clientSlug }}-{{ id }}-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-{{ stack.clientSlug }}-{{ id }}-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            {{ include('@Httplug/http_message.html.twig', { data: stack.clientRequest, capturedBodyLength: collector.capturedBodyLength, header: 'Request' }, with_context=false) }}
        </div>
        <div class=\"httplug-message card\">
            {{ include('@Httplug/http_message.html.twig', { data: stack.clientResponse, capturedBodyLength: collector.capturedBodyLength, header: 'Response' }, with_context=false) }}
        </div>
    </div>
    {% if stack.profiles %}
        <div id=\"httplug-{{ stack.clientSlug }}-{{ id }}-stack\" class=\"httplug-hidden card\">
            {% for profile in stack.profiles %}
                <h3 class=\"httplug-plugin-name\">{{ profile.plugin }}</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        {{ include('@Httplug/http_message.html.twig', { data: profile.request, capturedBodyLength: collector.capturedBodyLength, header: 'Request' }, with_context=false) }}
                    </div>
                    <div class=\"httplug-message\">
                        {{ include('@Httplug/http_message.html.twig', { data: profile.response, capturedBodyLength: collector.capturedBodyLength, header: 'Response' }, with_context=false) }}
                    </div>
                </div>
                {% if not loop.last %}
                    <hr />
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}
</div>
{% for child in collector.childrenStacks(stack) %}
    <div class=\"httplug-stack\">
        {{ include('@Httplug/stack.html.twig', {
            'collector': collector,
            'client': client,
            'stack': child,
            'id': id ~ '-' ~ loop.index
        }, with_context=false) }}
    </div>
{% endfor %}
", "@Httplug/stack.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\vendor\\php-http\\httplug-bundle\\src\\Resources\\views\\stack.html.twig");
    }
}
