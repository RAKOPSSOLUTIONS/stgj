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

/* admin/setting/form.html.twig */
class __TwigTemplate_5f2eeda5e3b3c872a8d76f070a7003a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/form.html.twig"));

        // line 1
        $context["field_type"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "field_type", [], "any", false, false, false, 1), "vars", [], "any", false, false, false, 1), "value", [], "any", false, false, false, 1);
        // line 2
        yield "
<style>
\t[data-field-type]:not([data-field-type=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["field_type"]) || array_key_exists("field_type", $context) ? $context["field_type"] : (function () { throw new RuntimeError('Variable "field_type" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\"]) {
\t\tdisplay: none;
\t}
</style>

<ajax-form>
\t";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</h5>
\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fermer"), "html", null, true);
        yield "\"></button>
\t</div>
\t<div class=\"modal-body\">
\t\t";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'widget');
        yield "
\t\t<!-- field types -->
\t\t<label class=\"mb-2\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Valeur"), "html", null, true);
        yield "</label>
\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["label"]) {
            // line 20
            yield "\t\t\t<div class=\"mb-3\" data-field-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "\">
\t\t\t\t";
            // line 21
            if (CoreExtension::inFilter($context["name"], ["choice", "checkbox", "radio"])) {
                // line 22
                yield "\t\t\t\t\t<div class=\"items\">
\t\t\t\t\t\t";
                // line 23
                if (((isset($context["field_type"]) || array_key_exists("field_type", $context) ? $context["field_type"] : (function () { throw new RuntimeError('Variable "field_type" does not exist.', 23, $this->source); })()) == $context["name"])) {
                    // line 24
                    yield "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 24, $this->source); })()));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 25
                        yield "\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"value[";
                        // line 26
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                        yield "][";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "]\" class=\"form-control\" value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "\" data-key=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"input-group-text bg-danger text-white deleteLine\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    yield "\t\t\t\t\t\t";
                }
                // line 33
                yield "\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm addLine\">
\t\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\t\t";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ajouter un élément"), "html", null, true);
                yield "
\t\t\t\t\t</button>
\t\t\t\t";
            } elseif (CoreExtension::inFilter(            // line 38
$context["name"], ["textarea", "json"])) {
                // line 39
                yield "\t\t\t\t\t<textarea name=\"value[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "]\" class=\"form-control\">";
                yield ((((isset($context["field_type"]) || array_key_exists("field_type", $context) ? $context["field_type"] : (function () { throw new RuntimeError('Variable "field_type" does not exist.', 39, $this->source); })()) == $context["name"])) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "value", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "html", null, true)) : (""));
                yield "</textarea>
\t\t\t\t";
            } else {
                // line 41
                yield "\t\t\t\t\t<input type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "\" name=\"value[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "]\" value=\"";
                yield ((((isset($context["field_type"]) || array_key_exists("field_type", $context) ? $context["field_type"] : (function () { throw new RuntimeError('Variable "field_type" does not exist.', 41, $this->source); })()) == $context["name"])) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "value", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41), "html", null, true)) : (""));
                yield "\" class=\"form-control\"/>
\t\t\t\t";
            }
            // line 43
            yield "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "\t</div>
\t<div class=\"modal-footer justify-content-between\">
\t\t<button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" data-bs-dismiss=\"modal\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fermer"), "html", null, true);
        yield "</button>
\t\t<button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\">";
        // line 48
        yield ($context["submit_label"] ?? $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enregistrer"), "html", null, true));
        yield "</button>
\t</div>
\t";
        // line 50
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
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
        return "admin/setting/form.html.twig";
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
        return array (  182 => 50,  177 => 48,  173 => 47,  169 => 45,  162 => 43,  152 => 41,  144 => 39,  142 => 38,  137 => 36,  132 => 33,  129 => 32,  111 => 26,  108 => 25,  103 => 24,  101 => 23,  98 => 22,  96 => 21,  91 => 20,  87 => 19,  83 => 18,  78 => 16,  72 => 13,  68 => 12,  63 => 10,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set field_type = form.field_type.vars.value %}

<style>
\t[data-field-type]:not([data-field-type=\"{{ field_type }}\"]) {
\t\tdisplay: none;
\t}
</style>

<ajax-form>
\t{{ form_start(form) }}
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\">{{ title }}</h5>
\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ \"Fermer\"|trans }}\"></button>
\t</div>
\t<div class=\"modal-body\">
\t\t{{ form_widget(form) }}
\t\t<!-- field types -->
\t\t<label class=\"mb-2\">{{ \"Valeur\"|trans }}</label>
\t\t{% for name,label in types %}
\t\t\t<div class=\"mb-3\" data-field-type=\"{{ name }}\">
\t\t\t\t{% if name in ['choice', 'checkbox', 'radio'] %}
\t\t\t\t\t<div class=\"items\">
\t\t\t\t\t\t{% if field_type == name %}
\t\t\t\t\t\t\t{% for key, value in field_options %}
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"value[{{ name }}][{{ key }}]\" class=\"form-control\" value=\"{{ value }}\" data-key=\"{{ key }}\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"input-group-text bg-danger text-white deleteLine\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm addLine\">
\t\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\t\t{{ \"Ajouter un élément\"|trans }}
\t\t\t\t\t</button>
\t\t\t\t{% elseif name in ['textarea', 'json'] %}
\t\t\t\t\t<textarea name=\"value[{{ name }}]\" class=\"form-control\">{{ field_type == name ? form.value.vars.value : '' }}</textarea>
\t\t\t\t{% else %}
\t\t\t\t\t<input type=\"{{ name }}\" name=\"value[{{ name }}]\" value=\"{{ field_type == name ? form.value.vars.value : '' }}\" class=\"form-control\"/>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endfor %}
\t</div>
\t<div class=\"modal-footer justify-content-between\">
\t\t<button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" data-bs-dismiss=\"modal\">{{ \"Fermer\"|trans }}</button>
\t\t<button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\">{{ submit_label ?? \"Enregistrer\"|trans }}</button>
\t</div>
\t{{ form_end(form) }}
</ajax-form>
", "admin/setting/form.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\admin\\setting\\form.html.twig");
    }
}
