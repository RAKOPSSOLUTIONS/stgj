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

/* layout/modal/index.html.twig */
class __TwigTemplate_f27b5472d593367ec5440693492f7f0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/modal/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/modal/index.html.twig"));

        // line 1
        if (array_key_exists("title", $context)) {
            // line 2
            yield "  <div class=\"modal-header\">
    <h5 class=\"modal-title text-uppercase\">";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
            yield "</h5>
    <button 
      type=\"button\" 
      class=\"btn-close\" 
      data-bs-dismiss=\"modal\" 
      aria-label=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
            yield "\"
    ></button>
  </div>
";
        }
        // line 12
        if (array_key_exists("body", $context)) {
            // line 13
            yield "  <div class=\"modal-body\">
    ";
            // line 14
            yield (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 14, $this->source); })());
            yield "
  </div>
";
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
        return "layout/modal/index.html.twig";
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
        return array (  73 => 14,  70 => 13,  68 => 12,  61 => 8,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if title is defined %}
  <div class=\"modal-header\">
    <h5 class=\"modal-title text-uppercase\">{{ title }}</h5>
    <button 
      type=\"button\" 
      class=\"btn-close\" 
      data-bs-dismiss=\"modal\" 
      aria-label=\"{{ \"Close\"|trans }}\"
    ></button>
  </div>
{% endif %}
{% if body is defined %}
  <div class=\"modal-body\">
    {{ body|raw }}
  </div>
{% endif %}", "layout/modal/index.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\layout\\modal\\index.html.twig");
    }
}
