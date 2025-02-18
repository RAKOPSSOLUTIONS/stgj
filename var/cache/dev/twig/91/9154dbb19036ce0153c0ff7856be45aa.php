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

/* front/security/signup.html.twig */
class __TwigTemplate_b0e0ee518533ad7abb5805723876dd78 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/signup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/signup.html.twig"));

        $this->parent = $this->loadTemplate("layout/auth.html.twig", "front/security/signup.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/190325-rental-cars-cs-229p.webp"), "html", null, true);
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
\t\t\t\t\t<img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-stjg.png"), "html", null, true);
        yield "\" alt=\"STJG\" class=\"d-inline-block align-text-top\" height=\"60\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t <h3>Inscription</h3>

\t\t    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "flashes", ["success"], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 47
            yield "            <div class=\"alert alert-success\">
                ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "
    ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), 'form_start');
        yield "


        <div class=\"row\">
\t\t      <div class=\"col\"> ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "site", [], "any", false, false, false, 56), 'row');
        yield " </div>
\t\t      <div class=\"col\"> ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "matricule", [], "any", false, false, false, 57), 'row');
        yield " </div>
        </div>
        <div class=\"row\">
          <div class=\"col\"> ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), 'row');
        yield "</div>
          <div class=\"col\"> ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "prenom", [], "any", false, false, false, 61), 'row');
        yield "</div>
        </div>
        <div class=\"row\">
          <div class=\"col\"> ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "telephone", [], "any", false, false, false, 64), 'row');
        yield "</div>
          <div class=\"col\"> ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'row');
        yield "</div>
        </div>

        <div class=\"row\">
          <div class=\"col\"> ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "adresse", [], "any", false, false, false, 69), 'row');
        yield "</div>
        </div>

        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "password", [], "any", false, false, false, 72), 'row', ["label" => "Mot de passe"]);
        // line 74
        yield "
        ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "confirm_password", [], "any", false, false, false, 75), 'row');
        yield "

        <button type=\"submit\" class=\"btn btn-primary px-5 text-white float-none float-sm-end\">S'inscrire</button>

        <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" class=\"btn btn-primary\">
              ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Se connecter"), "html", null, true);
        yield "
            </a>
        ";
        // line 82
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), 'form_end');
        yield "


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
        return "front/security/signup.html.twig";
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
        return array (  234 => 82,  229 => 80,  225 => 79,  218 => 75,  215 => 74,  213 => 72,  207 => 69,  200 => 65,  196 => 64,  190 => 61,  186 => 60,  180 => 57,  176 => 56,  169 => 52,  166 => 51,  157 => 48,  154 => 47,  150 => 46,  142 => 41,  136 => 37,  123 => 36,  89 => 12,  77 => 4,  64 => 3,  41 => 1,);
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
\t\t\tbackground: var(--color-primary) url({{ asset('assets/img/190325-rental-cars-cs-229p.webp') }}) top right no-repeat;
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
\t\t\t\t\t<img src=\"{{ asset('assets/img/logo-stjg.png') }}\" alt=\"STJG\" class=\"d-inline-block align-text-top\" height=\"60\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t <h3>Inscription</h3>

\t\t    {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}

    {{ form_start(registrationForm) }}


        <div class=\"row\">
\t\t      <div class=\"col\"> {{ form_row(registrationForm.site) }} </div>
\t\t      <div class=\"col\"> {{ form_row(registrationForm.matricule) }} </div>
        </div>
        <div class=\"row\">
          <div class=\"col\"> {{ form_row(registrationForm.nom) }}</div>
          <div class=\"col\"> {{ form_row(registrationForm.prenom) }}</div>
        </div>
        <div class=\"row\">
          <div class=\"col\"> {{ form_row(registrationForm.telephone) }}</div>
          <div class=\"col\"> {{ form_row(registrationForm.email) }}</div>
        </div>

        <div class=\"row\">
          <div class=\"col\"> {{ form_row(registrationForm.adresse) }}</div>
        </div>

        {{ form_row(registrationForm.password, {
            label: 'Mot de passe'
        }) }}
        {{ form_row(registrationForm.confirm_password) }}

        <button type=\"submit\" class=\"btn btn-primary px-5 text-white float-none float-sm-end\">S'inscrire</button>

        <a href=\"{{ path('login') }}\" class=\"btn btn-primary\">
              {{ \"Se connecter\"|trans }}
            </a>
        {{ form_end(registrationForm) }}


\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "front/security/signup.html.twig", "C:\\Users\\Hp\\Desktop\\stgj\\templates\\front\\security\\signup.html.twig");
    }
}
