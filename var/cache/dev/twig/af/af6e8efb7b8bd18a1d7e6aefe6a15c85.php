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

/* layout/table/index.html.twig */
class __TwigTemplate_4f03e48c06b362fbde93c7168071f62e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/index.html.twig"));

        // line 1
        yield "<div class=\"card rounded-0 border-bottom-0\">
\t<table class=\"table table-hover mb-0\">
\t\t";
        // line 3
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "rows", [], "any", false, false, false, 3))) {
            // line 4
            yield "\t\t\t";
            yield from $this->loadTemplate("layout/table/head.html.twig", "layout/table/index.html.twig", 4)->unwrap()->yield($context);
            // line 5
            yield "\t\t";
        }
        // line 6
        yield "\t\t";
        yield from $this->loadTemplate("layout/table/body.html.twig", "layout/table/index.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "\t</table>
</div>
";
        // line 9
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "rows", [], "any", false, false, false, 9))) {
            // line 10
            yield "\t";
            yield from $this->loadTemplate("layout/table/bottom.html.twig", "layout/table/index.html.twig", 10)->unwrap()->yield($context);
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
        return "layout/table/index.html.twig";
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
        return array (  69 => 10,  67 => 9,  63 => 7,  60 => 6,  57 => 5,  54 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card rounded-0 border-bottom-0\">
\t<table class=\"table table-hover mb-0\">
\t\t{% if data.rows|length %}
\t\t\t{% include \"layout/table/head.html.twig\" %}
\t\t{% endif %}
\t\t{% include \"layout/table/body.html.twig\" %}
\t</table>
</div>
{% if data.rows|length %}
\t{% include \"layout/table/bottom.html.twig\" %}
{% endif %}
", "layout/table/index.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\layout\\table\\index.html.twig");
    }
}
