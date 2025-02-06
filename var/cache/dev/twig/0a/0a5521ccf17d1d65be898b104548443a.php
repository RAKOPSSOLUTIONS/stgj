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

/* layout/form/search/index.html.twig */
class __TwigTemplate_2a74266602264d820b8fee9a2c6611ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/form/search/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/form/search/index.html.twig"));

        // line 1
        yield "<div class=\"accordion rounded-0 mb-4\" id=\"search-accordion\">
  <div class=\"accordion-item bg-white rounded-0\">
    <h5 class=\"accordion-header\" id=\"search-heading\" title=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click to show/hide the form"), "html", null, true);
        yield "\">
      <button class=\"accordion-button collapsed rounded-0 shadow-none bg-white text-uppercase text-muted m-0 fs-5\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#search-collapse\" aria-expanded=\"false\" aria-controls=\"search-collapse\">
        <i class=\"bi-search me-1\"></i>
        ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recherche"), "html", null, true);
        yield "
      </button>
    </h5>
    <div id=\"search-collapse\" class=\"accordion-collapse collapse show\" aria-labelledby=\"search-heading\" data-bs-parent=\"#search-accordion\">
      <div class=\"accordion-body pt-1\">
        <search-form table=\"";
        // line 11
        yield ($context["tableId"] ?? "");
        yield "\">
          ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        yield "
          ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'widget');
        yield "
          <button type=\"reset\" class=\"btn btn-outline-danger btn-reset rounded-0 shadow-none mt-2\">
            ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
        yield "
          </button>
          <button class=\"btn btn-outline-primary btn-search float-end rounded-0 shadow-none mt-2\">
            ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "
          </button>
          ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        yield "
        </search-form>
      </div>
    </div>
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
        return "layout/form/search/index.html.twig";
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
        return array (  90 => 20,  85 => 18,  79 => 15,  74 => 13,  70 => 12,  66 => 11,  58 => 6,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"accordion rounded-0 mb-4\" id=\"search-accordion\">
  <div class=\"accordion-item bg-white rounded-0\">
    <h5 class=\"accordion-header\" id=\"search-heading\" title=\"{{ \"Click to show/hide the form\"|trans }}\">
      <button class=\"accordion-button collapsed rounded-0 shadow-none bg-white text-uppercase text-muted m-0 fs-5\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#search-collapse\" aria-expanded=\"false\" aria-controls=\"search-collapse\">
        <i class=\"bi-search me-1\"></i>
        {{ \"Recherche\"|trans }}
      </button>
    </h5>
    <div id=\"search-collapse\" class=\"accordion-collapse collapse show\" aria-labelledby=\"search-heading\" data-bs-parent=\"#search-accordion\">
      <div class=\"accordion-body pt-1\">
        <search-form table=\"{{ tableId ?? '' }}\">
          {{ form_start(form) }}
          {{ form_widget(form) }}
          <button type=\"reset\" class=\"btn btn-outline-danger btn-reset rounded-0 shadow-none mt-2\">
            {{ \"Reset\"|trans }}
          </button>
          <button class=\"btn btn-outline-primary btn-search float-end rounded-0 shadow-none mt-2\">
            {{ \"Search\"|trans }}
          </button>
          {{ form_end(form) }}
        </search-form>
      </div>
    </div>
  </div>
</div>", "layout/form/search/index.html.twig", "C:\\Users\\Hp\\Desktop\\stgj\\templates\\layout\\form\\search\\index.html.twig");
    }
}
