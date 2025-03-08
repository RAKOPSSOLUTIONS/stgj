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

/* front/security/login.html.twig */
class __TwigTemplate_c3a07e04e272eabdf1c4c483b4cf58d3 extends Template
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
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout/auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/login.html.twig"));

        $this->parent = $this->loadTemplate("layout/auth.html.twig", "front/security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "\t";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
\t<style>
\t\tbody {
\t\t\tmargin: 0;
\t\t\theight: 100vh;
\t\t\toverflow-x: hidden;
\t\t\tbackground-size: cover;
\t\t\tbackground-position: center;
\t\t\tbackground: var(--color-primary) url(";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hello.jpg"), "html", null, true);
        yield ") top right no-repeat;
\t\t}
\t\t.login-form {
\t\t\tbackground-color: #fff;
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tright: 0;
\t\t\theight: 100%;
\t\t\twidth: 100%;
\t\t\tmax-width: 570px;
\t\t}
\t\t.divider p {
\t\t\tcolor: var(--color-secondary);
\t\t}
\t\t.divider:after,
\t\t.divider:before {
\t\t\tcontent: \"\";
\t\t\tflex: 1;
\t\t\theight: 1px;
\t\t\tbackground: var(--color-secondary);
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
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

        // line 37
        yield "\t<div class=\"login-form d-flex align-items-center\">
\t\t<div class=\"card border-0 w-100 px-4\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"text-center my-5\">
\t\t\t\t\t<a href=\"#\" style=\"font-size: 1.5; font-weight: 800; color: #0075b9;\"><img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-stjg.png"), "html", null, true);
        yield "\" alt=\"STJG\" class=\"d-inline-block align-text-top\" height=\"60\"></a>
<br />
\t\t\t\t\t <h3>Connexion</h3>
\t\t\t\t</div>
\t\t\t\t";
        // line 45
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })())) {
            // line 46
            yield "\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageKey", [], "any", false, false, false, 47), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageData", [], "any", false, false, false, 47)), "html", null, true);
            yield "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 50
        yield "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "flashes", ["error"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 51
            yield "\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t<ul class=\"list-unstyled m-0 p-0\">
\t\t\t\t\t\t\t<li>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "\t\t\t\t 
\t\t\t\t<form action=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" method=\"post\">
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label class=\"mb-2 text-muted\" for=\"username_or_email\">
\t\t\t\t\t\t\t";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email ou matricule"), "html", null, true);
        yield "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"text\" name=\"username_or_email\" value=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username_or_email"]) || array_key_exists("username_or_email", $context) ? $context["username_or_email"] : (function () { throw new RuntimeError('Variable "username_or_email" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control\" autofocus required/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<div class=\"mb-2 w-100\">
\t\t\t\t\t\t\t<label class=\"text-muted\" for=\"password\">
\t\t\t\t\t\t\t\t";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"password\" name=\"password\" autocomplete=\"off\" class=\"form-control\" required/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-4 text-center\">
\t\t\t\t\t\t<ajax-modal url=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("password.reset");
        yield "\" width=\"400\" class=\"text-muted cursor-pointer mb-4 mb-sm-0 mt-0 mt-sm-2 d-block d-sm-inline-block float-none float-sm-start\">
\t\t\t\t\t\t\t";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mot de passe oublié"), "html", null, true);
        yield "
\t\t\t\t\t\t</ajax-modal>
\t\t\t\t\t\t<a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        yield "\" class=\"text-muted cursor-pointer mb-4 mb-sm-0 mt-0 mt-sm-2 d-block d-sm-inline-block \">S'enregistrer</a>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary rounded-pill px-5 text-white float-none float-sm-end\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Se connecter"), "html", null, true);
        yield "</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t
\t\t\t</div>

\t\t</div>
\t</div>
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
        return "front/security/login.html.twig";
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
        return array (  227 => 79,  223 => 78,  218 => 76,  214 => 75,  205 => 69,  197 => 64,  192 => 62,  186 => 59,  182 => 58,  179 => 57,  169 => 53,  165 => 51,  160 => 50,  154 => 47,  151 => 46,  149 => 45,  142 => 41,  136 => 37,  123 => 36,  89 => 12,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/auth.html.twig' %}

{% block head %}
\t{{ parent() }}
\t<style>
\t\tbody {
\t\t\tmargin: 0;
\t\t\theight: 100vh;
\t\t\toverflow-x: hidden;
\t\t\tbackground-size: cover;
\t\t\tbackground-position: center;
\t\t\tbackground: var(--color-primary) url({{ asset('assets/img/hello.jpg') }}) top right no-repeat;
\t\t}
\t\t.login-form {
\t\t\tbackground-color: #fff;
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tright: 0;
\t\t\theight: 100%;
\t\t\twidth: 100%;
\t\t\tmax-width: 570px;
\t\t}
\t\t.divider p {
\t\t\tcolor: var(--color-secondary);
\t\t}
\t\t.divider:after,
\t\t.divider:before {
\t\t\tcontent: \"\";
\t\t\tflex: 1;
\t\t\theight: 1px;
\t\t\tbackground: var(--color-secondary);
\t\t}
\t</style>
{% endblock %}

{% block body %}
\t<div class=\"login-form d-flex align-items-center\">
\t\t<div class=\"card border-0 w-100 px-4\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"text-center my-5\">
\t\t\t\t\t<a href=\"#\" style=\"font-size: 1.5; font-weight: 800; color: #0075b9;\"><img src=\"{{ asset('assets/img/logo-stjg.png') }}\" alt=\"STJG\" class=\"d-inline-block align-text-top\" height=\"60\"></a>
<br />
\t\t\t\t\t <h3>Connexion</h3>
\t\t\t\t</div>
\t\t\t\t{% if error %}
\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t{{ error.messageKey|trans(error.messageData) }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% for message in app.flashes('error') %}
\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t<ul class=\"list-unstyled m-0 p-0\">
\t\t\t\t\t\t\t<li>{{ message }}</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t 
\t\t\t\t<form action=\"{{ path('login') }}\" method=\"post\">
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label class=\"mb-2 text-muted\" for=\"username_or_email\">
\t\t\t\t\t\t\t{{ \"Email ou matricule\"|trans }}
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"text\" name=\"username_or_email\" value=\"{{ username_or_email }}\" class=\"form-control\" autofocus required/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<div class=\"mb-2 w-100\">
\t\t\t\t\t\t\t<label class=\"text-muted\" for=\"password\">
\t\t\t\t\t\t\t\t{{ \"Password\"|trans }}
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"password\" name=\"password\" autocomplete=\"off\" class=\"form-control\" required/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-4 text-center\">
\t\t\t\t\t\t<ajax-modal url=\"{{ path('password.reset') }}\" width=\"400\" class=\"text-muted cursor-pointer mb-4 mb-sm-0 mt-0 mt-sm-2 d-block d-sm-inline-block float-none float-sm-start\">
\t\t\t\t\t\t\t{{ \"Mot de passe oublié\"|trans }}
\t\t\t\t\t\t</ajax-modal>
\t\t\t\t\t\t<a href=\"{{ path('signup') }}\" class=\"text-muted cursor-pointer mb-4 mb-sm-0 mt-0 mt-sm-2 d-block d-sm-inline-block \">S'enregistrer</a>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary rounded-pill px-5 text-white float-none float-sm-end\">{{ \"Se connecter\"|trans }}</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t
\t\t\t</div>

\t\t</div>
\t</div>
{% endblock %}
", "front/security/login.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\front\\security\\login.html.twig");
    }
}
