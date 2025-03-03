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

/* layout/email.html.twig */
class __TwigTemplate_4e64c51347456f280369d7c0f403ca82 extends Template
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
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/email.html.twig"));

        // line 1
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "    <style type=\"text/css\">
        body, html, .body {
            background: #f3f3f3 !important;
        }
        .container.header, .container.footer {
            background: #000;color: #FFF; padding-top:15px;
        }
        .container.footer a{color: #FFF !important}
        h4{color:#00447a}
        .register a {background-color:#000;}
        .register td{border:2px solid #00447a !important; background:none !important}
    </style>
    <container class=\"header\">
        <row>
            <columns>
                <h1 class=\"text-center\" style=\"color: #FFF; padding-top:20px\">";
            // line 17
            yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
            yield "</h1>
            </columns>
        </row>
    </container>

    <container class=\"body-border\">
        <row>
            <columns>
                <spacer size=\"32\"></spacer>
                ";
            // line 26
            yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
            // line 27
            yield "            </columns>
        </row>
    </container>

    <container class=\"footer\">
        <row>
            <columns>
                <p class=\"text-center\" style=\"color: #FFF; padding-top:20px\">";
            // line 34
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
            yield "</p>
            </columns>
        </row>
    </container>

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        yield Twig\Extra\CssInliner\CssInlinerExtension::inlineCss(Twig\Extra\Inky\InkyExtension::inky($_v0), Twig\Extension\CoreExtension::source($this->env, "@assets/css/foundation-emails.css"), Twig\Extension\CoreExtension::source($this->env, "@assets/css/foundation.css"));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 34
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/email.html.twig";
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
        return array (  158 => 34,  136 => 26,  114 => 17,  103 => 1,  93 => 34,  84 => 27,  82 => 26,  70 => 17,  53 => 2,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% apply inky_to_html|inline_css(source('@assets/css/foundation-emails.css'), source('@assets/css/foundation.css')) %}
    <style type=\"text/css\">
        body, html, .body {
            background: #f3f3f3 !important;
        }
        .container.header, .container.footer {
            background: #000;color: #FFF; padding-top:15px;
        }
        .container.footer a{color: #FFF !important}
        h4{color:#00447a}
        .register a {background-color:#000;}
        .register td{border:2px solid #00447a !important; background:none !important}
    </style>
    <container class=\"header\">
        <row>
            <columns>
                <h1 class=\"text-center\" style=\"color: #FFF; padding-top:20px\">{% block title %}{% endblock %}</h1>
            </columns>
        </row>
    </container>

    <container class=\"body-border\">
        <row>
            <columns>
                <spacer size=\"32\"></spacer>
                {% block body %}{% endblock %}
            </columns>
        </row>
    </container>

    <container class=\"footer\">
        <row>
            <columns>
                <p class=\"text-center\" style=\"color: #FFF; padding-top:20px\">{% block footer %}{% endblock %}</p>
            </columns>
        </row>
    </container>

{% endapply %}
", "layout/email.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\layout\\email.html.twig");
    }
}
