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

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_e26e278c1a6f60ca214b3f2d017a3aab extends Template
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
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "getLocale", [], "method", false, false, false, 2), "html", null, true);
        yield "\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
  ";
        // line 7
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 17
        yield "</head>
<body>

  <div class=\"container pt-5\">
    <div class=\"row pt-5\">
      <div class=\"col-sm-6 offset-sm-3\">
        <div class=\"status-code\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "</div>
        <div class=\"status-text\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 24, $this->source); })())), "html", null, true);
        yield "</div>
        ";
        // line 25
        if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 25, $this->source); })()) == 404)) {
            // line 26
            yield "          <div class=\"exception-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Désolé, nous n'avons pas pu trouver cette page"), "html", null, true);
            yield "</div>
        ";
        } elseif ((        // line 27
(isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 27, $this->source); })()) == 403)) {
            // line 28
            yield "          <div class=\"exception-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Vous n'êtes pas autorisé à accéder à cette page"), "html", null, true);
            yield "</div>
        ";
        } else {
            // line 30
            yield "          <div class=\"exception-message\">Un erreur est survenu <span style=\"display:none; isibility:hidden\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 30, $this->source); })()), "message", [], "any", false, false, false, 30)), "html", null, true);
            yield "</span></div>
        ";
        }
        // line 32
        yield "      </div>
    </div>
    <div class=\"row mt-4\">
      <div class=\"col-sm-2 offset-sm-4\">
        <a href=\"#\" class=\"btn btn-outline-secondary rounded-0 shadow-none d-block\" onclick=\"history.go(-1);\">
          <i class=\"bi bi-arrow-left\"></i>
          ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Retour"), "html", null, true);
        yield "
        </a>
      </div>
      <div class=\"col-sm-2 pl-0 pl-xs-15\">
        <a href=\"mailto:contact@218labs.ma\" class=\"btn btn-outline-primary rounded-0 shadow-none d-block\">
          <i class=\"bi bi-envelope\"></i>
          ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contactez-nous"), "html", null, true);
        yield "
        </a>
      </div>
    </row>
\t</div> 

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "MADAEF - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 6, $this->source); })())), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 8
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    <style>
      body { background: #f1f4f9; font-family: arial; }
      .status-code { font-size: 12rem; line-height: 12rem; text-align: center; color: #777; }
      .status-text { font-size: 2rem; color: #777; text-align: center; text-transform: uppercase; }
      .exception-message { font-size: 1rem; color: #777; text-align: center; }
      .copyright { width: 100%; text-align: center; color: #777; font-size: 12px; }
\t  </style>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Twig/Exception/error.html.twig";
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
        return array (  177 => 8,  164 => 7,  140 => 6,  120 => 44,  111 => 38,  103 => 32,  97 => 30,  91 => 28,  89 => 27,  84 => 26,  82 => 25,  78 => 24,  74 => 23,  66 => 17,  64 => 7,  60 => 6,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.getLocale() }}\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>{% block title %}MADAEF - {{ status_text|trans }}{% endblock %}</title>
  {% block head %}
    {{ encore_entry_link_tags('app') }}
    <style>
      body { background: #f1f4f9; font-family: arial; }
      .status-code { font-size: 12rem; line-height: 12rem; text-align: center; color: #777; }
      .status-text { font-size: 2rem; color: #777; text-align: center; text-transform: uppercase; }
      .exception-message { font-size: 1rem; color: #777; text-align: center; }
      .copyright { width: 100%; text-align: center; color: #777; font-size: 12px; }
\t  </style>
  {% endblock %}
</head>
<body>

  <div class=\"container pt-5\">
    <div class=\"row pt-5\">
      <div class=\"col-sm-6 offset-sm-3\">
        <div class=\"status-code\">{{ status_code }}</div>
        <div class=\"status-text\">{{ status_text|trans }}</div>
        {% if status_code == 404 %}
          <div class=\"exception-message\">{{ \"Désolé, nous n'avons pas pu trouver cette page\"|trans }}</div>
        {% elseif status_code == 403 %}
          <div class=\"exception-message\">{{ \"Vous n'êtes pas autorisé à accéder à cette page\"|trans }}</div>
        {% else %}
          <div class=\"exception-message\">Un erreur est survenu <span style=\"display:none; isibility:hidden\">{{ exception.message|trans }}</span></div>
        {% endif %}
      </div>
    </div>
    <div class=\"row mt-4\">
      <div class=\"col-sm-2 offset-sm-4\">
        <a href=\"#\" class=\"btn btn-outline-secondary rounded-0 shadow-none d-block\" onclick=\"history.go(-1);\">
          <i class=\"bi bi-arrow-left\"></i>
          {{ \"Retour\"|trans }}
        </a>
      </div>
      <div class=\"col-sm-2 pl-0 pl-xs-15\">
        <a href=\"mailto:contact@218labs.ma\" class=\"btn btn-outline-primary rounded-0 shadow-none d-block\">
          <i class=\"bi bi-envelope\"></i>
          {{ \"Contactez-nous\"|trans }}
        </a>
      </div>
    </row>
\t</div> 

</body>
</html>
", "@Twig/Exception/error.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\bundles\\TwigBundle\\Exception\\error.html.twig");
    }
}
