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

/* layout/modal/form.html.twig */
class __TwigTemplate_62d79d871ad286f501c7fb97634189c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/modal/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/modal/form.html.twig"));

        // line 1
        yield "<ajax-form>
  ";
        // line 2
        if (array_key_exists("form", $context)) {
            // line 3
            yield "    ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
            yield "
  ";
        } else {
            // line 5
            yield "    <form action=\"";
            yield ((array_key_exists("form_action", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form_action"]) || array_key_exists("form_action", $context) ? $context["form_action"] : (function () { throw new RuntimeError('Variable "form_action" does not exist.', 5, $this->source); })()), "html", null, true)) : (""));
            yield "\" method=\"post\">
  ";
        }
        // line 7
        yield "  <div class=\"modal-header\">
    <h5 class=\"modal-title text-uppercase\">";
        // line 8
        yield ($context["title"] ?? $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sans titre"), "html", null, true));
        yield "</h5>
    <button type=\"button\" class=\"btn-close rounded-0 shadow-none\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        yield "\"></button>
  </div>
  <div class=\"modal-body\">
    ";
        // line 12
        yield ((array_key_exists("body", $context)) ? ((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 12, $this->source); })())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'widget')));
        yield "
  </div>
  <div class=\"modal-footer justify-content-between\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x-lg\"></i> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        yield "</button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\"><i class=\"bi bi-check2-square\"></i>
  ";
        // line 17
        yield ($context["submit_label"] ?? $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true));
        yield "</button>
  </div>
  ";
        // line 19
        if (array_key_exists("form", $context)) {
            // line 20
            yield "    ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
            yield "
  ";
        } else {
            // line 22
            yield "    </form>
  ";
        }
        // line 24
        yield "</ajax-form>
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
        return "layout/modal/form.html.twig";
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
        return array (  106 => 24,  102 => 22,  96 => 20,  94 => 19,  89 => 17,  84 => 15,  78 => 12,  72 => 9,  68 => 8,  65 => 7,  59 => 5,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<ajax-form>
  {% if form is defined %}
    {{ form_start(form) }}
  {% else %}
    <form action=\"{{ form_action is defined ? form_action : '' }}\" method=\"post\">
  {% endif %}
  <div class=\"modal-header\">
    <h5 class=\"modal-title text-uppercase\">{{ title ?? \"Sans titre\"|trans }}</h5>
    <button type=\"button\" class=\"btn-close rounded-0 shadow-none\" data-bs-dismiss=\"modal\" aria-label=\"{{ \"Close\"|trans }}\"></button>
  </div>
  <div class=\"modal-body\">
    {{ body is defined ? body|raw : form_widget(form) }}
  </div>
  <div class=\"modal-footer justify-content-between\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x-lg\"></i> {{ \"Close\"|trans }}</button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\"><i class=\"bi bi-check2-square\"></i>
  {{ submit_label ?? \"Save\"|trans }}</button>
  </div>
  {% if form is defined %}
    {{ form_end(form) }}
  {% else %}
    </form>
  {% endif %}
</ajax-form>
", "layout/modal/form.html.twig", "C:\\Users\\Hp\\Desktop\\stgj\\templates\\layout\\modal\\form.html.twig");
    }
}
