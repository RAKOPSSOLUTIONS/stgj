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

/* layout/table/pagination.html.twig */
class __TwigTemplate_dc698992c1bd2bd8293659da5f4a72b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/pagination.html.twig"));

        // line 1
        yield "<div class=\"d-flex float-start float-md-end\">
  <div class=\"me-2 align-self-center\">
    ";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%total% entrées", ["%total%" => (("<span class=\"chm-table-total\">" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "count", [], "any", false, false, false, 3)) . "</span>")]);
        yield "
  </div>
  <div class=\"input-group w-auto m-0\">
    <button 
      type=\"button\" 
      title=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Précédente"), "html", null, true);
        yield "\"  
      class=\"btn btn-outline-secondary rounded-0 shadow-none prev-page\"
      ";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "page", [], "any", false, false, false, 10) == 1)) {
            yield "disabled";
        }
        // line 11
        yield "    >
      <i class=\"bi bi-arrow-left\"></i>
    </button>
    <input 
      type=\"text\" 
      max=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "pages", [], "any", false, false, false, 16), "html", null, true);
        yield "\" 
      value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "page", [], "any", false, false, false, 17), "html", null, true);
        yield "\" 
      class=\"form-control page-number\"
      title=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page (%page%/%pages%)", ["%page%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "page", [], "any", false, false, false, 19), "%pages%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "pages", [], "any", false, false, false, 19)]), "html", null, true);
        yield "\" 
    />
    <button 
      type=\"button\" 
      class=\"btn btn-outline-secondary rounded-0 shadow-none border-start-0 next-page\"
      ";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "page", [], "any", false, false, false, 24) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "pages", [], "any", false, false, false, 24))) {
            yield "disabled";
        }
        // line 25
        yield "      title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suivante"), "html", null, true);
        yield "\"
    >
      <i class=\"bi bi-arrow-right\"></i>
    </button>
  </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/table/pagination.html.twig";
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
        return array (  97 => 25,  93 => 24,  85 => 19,  80 => 17,  76 => 16,  69 => 11,  65 => 10,  60 => 8,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"d-flex float-start float-md-end\">
  <div class=\"me-2 align-self-center\">
    {{ \"%total% entrées\"|trans({'%total%': '<span class=\"chm-table-total\">' ~ data.count ~ '</span>'})|raw }}
  </div>
  <div class=\"input-group w-auto m-0\">
    <button 
      type=\"button\" 
      title=\"{{ \"Précédente\"|trans }}\"  
      class=\"btn btn-outline-secondary rounded-0 shadow-none prev-page\"
      {% if data.page == 1 %}disabled{% endif %}
    >
      <i class=\"bi bi-arrow-left\"></i>
    </button>
    <input 
      type=\"text\" 
      max=\"{{ data.pages }}\" 
      value=\"{{ data.page }}\" 
      class=\"form-control page-number\"
      title=\"{{ \"Page (%page%/%pages%)\"|trans({'%page%': data.page, '%pages%': data.pages}) }}\" 
    />
    <button 
      type=\"button\" 
      class=\"btn btn-outline-secondary rounded-0 shadow-none border-start-0 next-page\"
      {% if data.page == data.pages %}disabled{% endif %}
      title=\"{{ \"Suivante\"|trans }}\"
    >
      <i class=\"bi bi-arrow-right\"></i>
    </button>
  </div>
</div>", "layout/table/pagination.html.twig", "C:\\Users\\Hp\\Desktop\\stgj\\templates\\layout\\table\\pagination.html.twig");
    }
}
