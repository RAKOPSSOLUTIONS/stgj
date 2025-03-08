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

/* layout/form.html.twig */
class __TwigTemplate_8a8d3b9858b7fd2cde6841274f85b02f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/form.html.twig"));

        // line 1
        yield "<ajax-form>
\t";
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        yield "
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\">";
        // line 4
        yield ($context["title"] ?? $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Form"), "html", null, true));
        yield "</h5>
\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        yield "\"></button>
\t</div>
\t<div class=\"modal-body\">
\t\t";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'widget');
        yield "
\t</div>
\t<div class=\"modal-footer justify-content-between\">
\t\t<button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x-lg\"></i> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        yield "</button>
\t\t<button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\"><i class=\"bi bi-check2-square\"></i>
\t";
        // line 13
        yield ($context["submit_label"] ?? $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true));
        yield "</button>
\t</div>
\t";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_end');
        yield "
</ajax-form>
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
        return "layout/form.html.twig";
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
        return array (  82 => 15,  77 => 13,  72 => 11,  66 => 8,  60 => 5,  56 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<ajax-form>
\t{{ form_start(form) }}
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\">{{ title ?? \"Form\"|trans }}</h5>
\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ \"Close\"|trans }}\"></button>
\t</div>
\t<div class=\"modal-body\">
\t\t{{ form_widget(form) }}
\t</div>
\t<div class=\"modal-footer justify-content-between\">
\t\t<button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x-lg\"></i> {{ \"Close\"|trans }}</button>
\t\t<button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\"><i class=\"bi bi-check2-square\"></i>
\t{{ submit_label ?? \"Save\"|trans }}</button>
\t</div>
\t{{ form_end(form) }}
</ajax-form>
", "layout/form.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\layout\\form.html.twig");
    }
}
