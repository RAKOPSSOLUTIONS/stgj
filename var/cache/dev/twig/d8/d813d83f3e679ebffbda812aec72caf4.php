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

/* partials/export-results.html.twig */
class __TwigTemplate_eeda81f9a546d0243043d05813b1c915 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/export-results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/export-results.html.twig"));

        // line 1
        yield "<div class=\"dropdown d-inline\">
\t 
\t\t
\t\t<a class=\"btn btn-outline-primary rounded-0 shadow-none\" href=\"javascript:void()\" onclick=\"window.open('";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "' + (location.search ? location.search + '&format=xlsx' : '?format=xlsx'))\"><i class=\"bi bi-file-earmark-spreadsheet\"></i><span class=\"d-none d-lg-inline-block\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Exporter"), "html", null, true);
        yield "</span></a>
\t 
\t<!--<ul class=\"dropdown-menu\" aria-labelledby=\"export-results\">
\t\t<li>
\t\t\t<a class=\"dropdown-item\" href=\"javascript:void()\" onclick=\"window.open('";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "' + (location.search ? location.search + '&format=pdf' : '?format=pdf'))\">
\t\t\t\t<i class=\"bi bi-file-pdf\"></i>
\t\t\t\t";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Format PDF"), "html", null, true);
        yield "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"dropdown-item\" href=\"javascript:void()\" onclick=\"window.open('";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "' + (location.search ? location.search + '&format=xlsx' : '?format=xlsx'))\">
\t\t\t\t<i class=\"bi bi-file-earmark-spreadsheet\"></i>
\t\t\t\t";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Format Excel"), "html", null, true);
        yield "
\t\t\t</a>
\t\t</li>
\t</ul>-->
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
        return "partials/export-results.html.twig";
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
        return array (  79 => 16,  74 => 14,  67 => 10,  62 => 8,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"dropdown d-inline\">
\t 
\t\t
\t\t<a class=\"btn btn-outline-primary rounded-0 shadow-none\" href=\"javascript:void()\" onclick=\"window.open('{{ path }}' + (location.search ? location.search + '&format=xlsx' : '?format=xlsx'))\"><i class=\"bi bi-file-earmark-spreadsheet\"></i><span class=\"d-none d-lg-inline-block\">{{ \"Exporter\"|trans }}</span></a>
\t 
\t<!--<ul class=\"dropdown-menu\" aria-labelledby=\"export-results\">
\t\t<li>
\t\t\t<a class=\"dropdown-item\" href=\"javascript:void()\" onclick=\"window.open('{{ path }}' + (location.search ? location.search + '&format=pdf' : '?format=pdf'))\">
\t\t\t\t<i class=\"bi bi-file-pdf\"></i>
\t\t\t\t{{ \"Format PDF\"|trans }}
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"dropdown-item\" href=\"javascript:void()\" onclick=\"window.open('{{ path }}' + (location.search ? location.search + '&format=xlsx' : '?format=xlsx'))\">
\t\t\t\t<i class=\"bi bi-file-earmark-spreadsheet\"></i>
\t\t\t\t{{ \"Format Excel\"|trans }}
\t\t\t</a>
\t\t</li>
\t</ul>-->
</div>
", "partials/export-results.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\partials\\export-results.html.twig");
    }
}
