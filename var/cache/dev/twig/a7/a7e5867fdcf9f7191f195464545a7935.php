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

/* partials/sidebar.html.twig */
class __TwigTemplate_e72a9c674076d75411f99680c5aa964a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        // line 1
        yield "<div class=\"offcanvas offcanvas-start w-100\" tabindex=\"-1\" id=\"sidebar-offcanvas\" aria-labelledby=\"sidebar-offcanvas-label\">
\t<div class=\"offcanvas-header\">
\t\t<h5 class=\"offcanvas-title fw-bold\" id=\"sidebar-offcanvas-label\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Applications"), "html", null, true);
        yield "</h5>
\t\t<button type=\"button\" class=\"btn-close text-reset rounded-0 shadow-none border-0\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t</div>
\t<div class=\"offcanvas-body\">
\t\t<div class=\"container-fluid p-0\">
\t\t\t<div class=\"row\">
\t\t\t\t<h4 class=\"mb-3\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("STJG"), "html", null, true);
        yield "</h4>
            </div>
\t\t</div>
\t</div>
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
        return "partials/sidebar.html.twig";
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
        return array (  61 => 9,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"offcanvas offcanvas-start w-100\" tabindex=\"-1\" id=\"sidebar-offcanvas\" aria-labelledby=\"sidebar-offcanvas-label\">
\t<div class=\"offcanvas-header\">
\t\t<h5 class=\"offcanvas-title fw-bold\" id=\"sidebar-offcanvas-label\">{{ \"Applications\"|trans }}</h5>
\t\t<button type=\"button\" class=\"btn-close text-reset rounded-0 shadow-none border-0\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t</div>
\t<div class=\"offcanvas-body\">
\t\t<div class=\"container-fluid p-0\">
\t\t\t<div class=\"row\">
\t\t\t\t<h4 class=\"mb-3\">{{ \"STJG\"|trans }}</h4>
            </div>
\t\t</div>
\t</div>
</div>
", "partials/sidebar.html.twig", "C:\\Users\\Hp\\Desktop\\stgj\\templates\\partials\\sidebar.html.twig");
    }
}
