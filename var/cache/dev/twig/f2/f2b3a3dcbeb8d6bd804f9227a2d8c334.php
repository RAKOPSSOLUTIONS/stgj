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

/* admin/vehicule/form.html.twig */
class __TwigTemplate_54c5674e1b424996fdea227b2de94e01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/vehicule/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/vehicule/form.html.twig"));

        // line 1
        yield "<div class=\"styled-title mb-3\">
\t<h3>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informations générales"), "html", null, true);
        yield "</h3>
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "modele", [], "any", false, false, false, 6), 'row');
        yield "
\t</div>
\t<div class=\"col\">
\t\t";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "seats", [], "any", false, false, false, 9), 'row');
        yield "
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "type_id", [], "any", false, false, false, 14), 'row');
        yield "
\t</div>
\t<div class=\"col\">
\t\t";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "type_moteur_id", [], "any", false, false, false, 17), 'row');
        yield "
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "groupe_id", [], "any", false, false, false, 22), 'row');
        yield "
\t</div>
\t<div class=\"col\">
\t\t";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "date_circulation", [], "any", false, false, false, 25), 'row');
        yield "
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "kilometrage", [], "any", false, false, false, 30), 'row');
        yield "
\t</div>
\t<div class=\"col\">
\t\t";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "immatriculation", [], "any", false, false, false, 33), 'row');
        yield "
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "date_exp_inscription", [], "any", false, false, false, 38), 'row');
        yield "
\t</div>
\t<div class=\"col\">
\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "numero_chassis", [], "any", false, false, false, 41), 'row');
        yield "
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "en_service", [], "any", false, false, false, 46), 'row');
        yield "
\t</div>
\t<div class=\"col\">
\t\t";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), 'row');
        yield "
\t</div>
</div>
<div class=\"styled-title mb-3\">
\t<h3>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Photos"), "html", null, true);
        yield "</h3>
</div>
";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "images", [], "any", false, false, false, 55), 'row');
        yield "
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
        return "admin/vehicule/form.html.twig";
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
        return array (  146 => 55,  141 => 53,  134 => 49,  128 => 46,  120 => 41,  114 => 38,  106 => 33,  100 => 30,  92 => 25,  86 => 22,  78 => 17,  72 => 14,  64 => 9,  58 => 6,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"styled-title mb-3\">
\t<h3>{{ \"Informations générales\"|trans }}</h3>
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t{{ form_row(form.modele) }}
\t</div>
\t<div class=\"col\">
\t\t{{ form_row(form.seats) }}
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t{{ form_row(form.type_id) }}
\t</div>
\t<div class=\"col\">
\t\t{{ form_row(form.type_moteur_id) }}
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t{{ form_row(form.groupe_id) }}
\t</div>
\t<div class=\"col\">
\t\t{{ form_row(form.date_circulation) }}
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t{{ form_row(form.kilometrage) }}
\t</div>
\t<div class=\"col\">
\t\t{{ form_row(form.immatriculation) }}
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t{{ form_row(form.date_exp_inscription) }}
\t</div>
\t<div class=\"col\">
\t\t{{ form_row(form.numero_chassis) }}
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t{{ form_row(form.en_service) }}
\t</div>
\t<div class=\"col\">
\t\t{{ form_row(form.user) }}
\t</div>
</div>
<div class=\"styled-title mb-3\">
\t<h3>{{ \"Photos\"|trans }}</h3>
</div>
{{ form_row(form.images) }}
", "admin/vehicule/form.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\admin\\vehicule\\form.html.twig");
    }
}
