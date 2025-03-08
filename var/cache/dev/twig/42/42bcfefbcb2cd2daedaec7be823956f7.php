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

/* layout/front.html.twig */
class __TwigTemplate_7d486278862dc6104abd57f6d14649ba extends Template
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
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/front.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "getLocale", [], "method", false, false, false, 2), "html", null, true);
        yield "\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  ";
        // line 6
        yield from $this->loadTemplate("partials/service-worker-meta.html.twig", "layout/front.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "  <title>";
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
  ";
        // line 8
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 11
        yield "  ";
        $context["route_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "get", ["_route"], "method", false, false, false, 11);
        // line 12
        yield "</head>
<body>
  <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm\" id=\"primary-navbar\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand ms-3 me-5\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" style=\"font-size: 1.5; font-weight: 800; color: #0075b9;\">
        <!--<img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-no-background.png"), "html", null, true);
        yield "\" alt=\"RASD\" class=\"d-inline-block align-text-top\" height=\"60\">-->
        MEDIA MAPS
      </a>
      <button 
        type=\"button\" 
        class=\"navbar-toggler\" 
        data-bs-toggle=\"collapse\" 
        data-bs-target=\"#admin-navbar\" 
        aria-controls=\"admin-navbar\" 
        aria-expanded=\"false\" 
        aria-label=\"Toggle navigation\"
      >
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"admin-navbar\">
        <ul class=\"navbar-nav\">
          <li class=\"d-block d-lg-none mt-1\">
            <hr class=\"dropdown-divider\">
          </li>
          ";
        // line 36
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 73
        yield "      </ul>

      <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 d-lg-block\">
        <li class=\"nav-item dropdown dropdown-account\">
          ";
        // line 77
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)) {
            // line 78
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reporting");
            yield "\" class=\"btn btn-primary rounded-pill px-3 text-white\">
              ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My account"), "html", null, true);
            yield "
            </a>
          ";
        } else {
            // line 82
            yield "            <a href=\"#\" class=\"btn btn-success rounded-pill px-3 text-white\">
              ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Signup"), "html", null, true);
            yield "
            </a>
            <a href=\"";
            // line 85
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\" class=\"btn btn-primary rounded-pill px-3 text-white\">
              ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Login"), "html", null, true);
            yield "
            </a>
          ";
        }
        // line 89
        yield "        </li>
      </ul>
    </div>
  </nav>

  ";
        // line 94
        yield from $this->loadTemplate("partials/sidebar.html.twig", "layout/front.html.twig", 94)->unwrap()->yield($context);
        // line 95
        yield "
  <div class=\"container my-3\">
    <div class=\"row\">
      <div id=\"main\" class=\"col-sm-12\" style=\"min-height:440px\">
        ";
        // line 99
        yield from $this->loadTemplate("layout/alert.html.twig", "layout/front.html.twig", 99)->unwrap()->yield($context);
        // line 100
        yield "        ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 101
        yield "      </div>
    </div>
  </div>

  ";
        // line 105
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 112
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield "RASD";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 37
        yield "          <li class=\"nav-item\">
            <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"nav-link";
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 38, $this->source); })()) == "home")) ? (" active") : (""));
        yield "\">
              ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        yield "\" class=\"nav-link";
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 43, $this->source); })()) == "services")) ? (" active") : (""));
        yield "\">
              ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Features"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        yield "\" class=\"nav-link";
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 48, $this->source); })()) == "services")) ? (" active") : (""));
        yield "\">
              ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Services"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
        yield "\" class=\"nav-link";
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 53, $this->source); })()) == "pricing")) ? (" active") : (""));
        yield "\">
              ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pricing"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customers");
        yield "\" class=\"nav-link";
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 58, $this->source); })()) == "customers")) ? (" active") : (""));
        yield "\">
              ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ressources");
        yield "\" class=\"nav-link";
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 63, $this->source); })()) == "ressources")) ? (" active") : (""));
        yield "\">
              ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ressources"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"nav-link";
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 68, $this->source); })()) == "contact")) ? (" active") : (""));
        yield "\">
              ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact us"), "html", null, true);
        yield "
            </a>
          </li>
           ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
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

    // line 105
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

        // line 106
        yield "    ";
        yield from $this->loadTemplate("block/footer.html.twig", "layout/front.html.twig", 106)->unwrap()->yield($context);
        // line 107
        yield "  
    ";
        // line 108
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
    ";
        // line 109
        yield from $this->loadTemplate("partials/webpush.html.twig", "layout/front.html.twig", 109)->unwrap()->yield($context);
        // line 110
        yield "    ";
        yield from $this->loadTemplate("partials/service-worker-script.html.twig", "layout/front.html.twig", 110)->unwrap()->yield($context);
        // line 111
        yield "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/front.html.twig";
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
        return array (  402 => 111,  399 => 110,  397 => 109,  393 => 108,  390 => 107,  387 => 106,  374 => 105,  352 => 100,  337 => 69,  331 => 68,  324 => 64,  318 => 63,  311 => 59,  305 => 58,  298 => 54,  292 => 53,  285 => 49,  279 => 48,  272 => 44,  266 => 43,  259 => 39,  253 => 38,  250 => 37,  237 => 36,  223 => 9,  210 => 8,  187 => 7,  174 => 112,  172 => 105,  166 => 101,  163 => 100,  161 => 99,  155 => 95,  153 => 94,  146 => 89,  140 => 86,  136 => 85,  131 => 83,  128 => 82,  122 => 79,  117 => 78,  115 => 77,  109 => 73,  107 => 36,  85 => 17,  81 => 16,  75 => 12,  72 => 11,  70 => 8,  65 => 7,  63 => 6,  56 => 2,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.getLocale() }}\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  {% include 'partials/service-worker-meta.html.twig' %}
  <title>{% block title %}RASD{% endblock %}</title>
  {% block head %}
    {{ encore_entry_link_tags('app') }}
  {% endblock %}
  {% set route_name = app.request.get('_route') %}
</head>
<body>
  <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm\" id=\"primary-navbar\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand ms-3 me-5\" href=\"{{  path('home') }}\" style=\"font-size: 1.5; font-weight: 800; color: #0075b9;\">
        <!--<img src=\"{{ asset('assets/img/logo-no-background.png') }}\" alt=\"RASD\" class=\"d-inline-block align-text-top\" height=\"60\">-->
        MEDIA MAPS
      </a>
      <button 
        type=\"button\" 
        class=\"navbar-toggler\" 
        data-bs-toggle=\"collapse\" 
        data-bs-target=\"#admin-navbar\" 
        aria-controls=\"admin-navbar\" 
        aria-expanded=\"false\" 
        aria-label=\"Toggle navigation\"
      >
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"admin-navbar\">
        <ul class=\"navbar-nav\">
          <li class=\"d-block d-lg-none mt-1\">
            <hr class=\"dropdown-divider\">
          </li>
          {% block navbar %}
          <li class=\"nav-item\">
            <a href=\"{{ path('home') }}\" class=\"nav-link{{ route_name == 'home' ? ' active' }}\">
              {{ \"Home\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"{{ path('services') }}\" class=\"nav-link{{ route_name == 'services' ? ' active' }}\">
              {{ \"Features\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"{{ path('services') }}\" class=\"nav-link{{ route_name == 'services' ? ' active' }}\">
              {{ \"Services\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"{{ path('pricing') }}\" class=\"nav-link{{ route_name == 'pricing' ? ' active' }}\">
              {{ \"Pricing\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"{{ path('customers') }}\" class=\"nav-link{{ route_name == 'customers' ? ' active' }}\">
              {{ \"Customers\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"{{ path('ressources') }}\" class=\"nav-link{{ route_name == 'ressources' ? ' active' }}\">
              {{ \"Ressources\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"{{ path('contact') }}\" class=\"nav-link{{ route_name == 'contact' ? ' active' }}\">
              {{ \"Contact us\"|trans }}
            </a>
          </li>
           {% endblock %}
      </ul>

      <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 d-lg-block\">
        <li class=\"nav-item dropdown dropdown-account\">
          {% if app.user %}
            <a href=\"{{ path('reporting') }}\" class=\"btn btn-primary rounded-pill px-3 text-white\">
              {{ \"My account\"|trans }}
            </a>
          {% else %}
            <a href=\"#\" class=\"btn btn-success rounded-pill px-3 text-white\">
              {{ \"Signup\"|trans }}
            </a>
            <a href=\"{{ path('login') }}\" class=\"btn btn-primary rounded-pill px-3 text-white\">
              {{ \"Login\"|trans }}
            </a>
          {% endif %}
        </li>
      </ul>
    </div>
  </nav>

  {% include 'partials/sidebar.html.twig' %}

  <div class=\"container my-3\">
    <div class=\"row\">
      <div id=\"main\" class=\"col-sm-12\" style=\"min-height:440px\">
        {% include 'layout/alert.html.twig' %}
        {% block body %}{% endblock %}
      </div>
    </div>
  </div>

  {% block footer %}
    {% include \"block/footer.html.twig\" %}
  
    {{ encore_entry_script_tags('app') }}
    {% include 'partials/webpush.html.twig' %}
    {% include 'partials/service-worker-script.html.twig' %}
  {% endblock %}
</body>
</html>
", "layout/front.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\layout\\front.html.twig");
    }
}
