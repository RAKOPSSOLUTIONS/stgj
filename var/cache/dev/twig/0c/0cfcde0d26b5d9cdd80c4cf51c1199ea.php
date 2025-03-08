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

/* emails/password-reset.html.twig */
class __TwigTemplate_4232564612de8797bc5e24902b713885 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout/email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/password-reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/password-reset.html.twig"));

        $this->parent = $this->loadTemplate("layout/email.html.twig", "emails/password-reset.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Réinitialiser le mot de passe";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<container>  
  <row>
    <columns>
      <center>
        <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-stjg.png")), "html", null, true);
        yield "\" width=\"216\" height=\"135\" alt=\"STJG TOUR\"/>
      </center>
    </columns>
  </row>  
  <row>
    <p>Bonjour,</p>
    <p>Une réinitialisation du mot de passe a été demandée pour le compte suivant: <b>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_email"]) || array_key_exists("user_email", $context) ? $context["user_email"] : (function () { throw new RuntimeError('Variable "user_email" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "</b></p>
    <p>S'il s'agit d'une erreur, ignorez simplement cet e-mail et rien ne se passera.</p>
    <p>Pour réinitialiser votre mot de passe, visitez le lien suivant:<br><a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reset_link"]) || array_key_exists("reset_link", $context) ? $context["reset_link"] : (function () { throw new RuntimeError('Variable "reset_link" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\"><b>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reset_link"]) || array_key_exists("reset_link", $context) ? $context["reset_link"] : (function () { throw new RuntimeError('Variable "reset_link" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</b></a></p>
    <p>Cordialement</p>
  </row>
</container>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 25
        yield "<row>
<columns small=\"12\" large=\"12\">
<center>
  <small><a href=\"http://www.stjg.ma\">www.stjg.ma</a></small> 
  <small style=\"color:#000\"> | </small>
  <small><a href=\"mailto:contact@stjg.ma\">contact@stjg.ma</a></small> 
  <small style=\"color:#000\"> | </small>
  <small><a href=\"tel:05377-71355\">05377-71355</a></small> 
</center>
</columns>
</row>
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
        return "emails/password-reset.html.twig";
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
        return array (  152 => 25,  139 => 24,  121 => 18,  116 => 16,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/email.html.twig' %}

{% block title %}Réinitialiser le mot de passe{% endblock %}

{% block body %}
<container>  
  <row>
    <columns>
      <center>
        <img src=\"{{ absolute_url(asset('assets/img/logo-stjg.png')) }}\" width=\"216\" height=\"135\" alt=\"STJG TOUR\"/>
      </center>
    </columns>
  </row>  
  <row>
    <p>Bonjour,</p>
    <p>Une réinitialisation du mot de passe a été demandée pour le compte suivant: <b>{{ user_email }}</b></p>
    <p>S'il s'agit d'une erreur, ignorez simplement cet e-mail et rien ne se passera.</p>
    <p>Pour réinitialiser votre mot de passe, visitez le lien suivant:<br><a href=\"{{ reset_link }}\"><b>{{ reset_link }}</b></a></p>
    <p>Cordialement</p>
  </row>
</container>
{% endblock %}

{% block footer %}
<row>
<columns small=\"12\" large=\"12\">
<center>
  <small><a href=\"http://www.stjg.ma\">www.stjg.ma</a></small> 
  <small style=\"color:#000\"> | </small>
  <small><a href=\"mailto:contact@stjg.ma\">contact@stjg.ma</a></small> 
  <small style=\"color:#000\"> | </small>
  <small><a href=\"tel:05377-71355\">05377-71355</a></small> 
</center>
</columns>
</row>
{% endblock %}", "emails/password-reset.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\emails\\password-reset.html.twig");
    }
}
