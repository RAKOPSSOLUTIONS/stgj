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

/* admin/user/details.html.twig */
class __TwigTemplate_ab6c000e0a6fc5c4559c92fc59c520c3 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/details.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/user/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "
<div class=\"row mb-4\">
    <div class=\"col-lg-8 col-8\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-person\"></i>
        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mon compte"), "html", null, true);
        yield "
      </h1>
    </div>
    <div class=\"col-lg-4 col-4\">
      <div class=\"float-end\">

      ";
        // line 15
        if (CoreExtension::inFilter("ROLE_MANAGER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "getroles", [], "method", false, false, false, 15))) {
            // line 16
            yield "       <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-pencil-square\"></i>
        <span class=\"d-none d-lg-inline-block\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier mes informations"), "html", null, true);
            yield "</span>
        </a>
      ";
        }
        // line 21
        yield "      ";
        if (CoreExtension::inFilter("ROLE_USER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "getroles", [], "method", false, false, false, 21))) {
            // line 22
            yield "       <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-pencil-square\"></i>
        <span class=\"d-none d-lg-inline-block\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier mes informations"), "html", null, true);
            yield "</span>
        </a>

         <a href=\"";
            // line 27
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.adhesion");
            yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-bookmark-check\"></i>
        <span class=\"d-none d-lg-inline-block\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adhésion"), "html", null, true);
            yield "</span>
        </a>        
      ";
        }
        // line 32
        yield "      </div>
    </div>
  </div>

  <div class=\"row mb-4\">
    <div class=\"col-6\">
      ";
        // line 38
        if ((CoreExtension::inFilter("ROLE_USER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "getroles", [], "method", false, false, false, 38)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "uid", [], "any", false, false, false, 38))) {
            // line 39
            yield "      <table class=\"table table-hover table-basic mb-0\">
        <tr>
          <td class=\"font-weight-bold\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Qrcode"), "html", null, true);
            yield "</td>
          <td><img src=\"/uploads/users";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "uid", [], "any", false, false, false, 42)), "html", null, true);
            yield ".png\" class=\"d-inline-block align-text-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "uid", [], "any", false, false, false, 42), "html", null, true);
            yield "\" height=\"160\" /></td>
        </tr>
      </table>
  ";
        }
        // line 46
        yield "    </div>
    <div class=\"col-6\">
      <table class=\"table table-hover table-basic mb-0\">
        <tr>
          <td class=\"font-weight-bold\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Société"), "html", null, true);
        yield "</td>
          <td>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "societe", [], "any", false, false, false, 51), "html", null, true);
        yield "</td>
        </tr>
        ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "matricule", [], "any", false, false, false, 53)) {
            // line 54
            yield "        <tr>
          <td class=\"font-weight-bold\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Matricule"), "html", null, true);
            yield "</td>
          <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "matricule", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
        </tr>
        ";
        }
        // line 59
        yield "        <tr>
          <td class=\"font-weight-bold\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom"), "html", null, true);
        yield "</td>
          <td>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "prenom", [], "any", false, false, false, 61), "html", null, true);
        yield "</td>
        </tr>
        <tr>
          <td class=\"font-weight-bold\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prénom"), "html", null, true);
        yield "</td>
          <td>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "nom", [], "any", false, false, false, 65), "html", null, true);
        yield "</td>
        </tr>
      </table>
    </div>
  </div>
<table class=\"table table-hover table-basic mb-0\">
   
 
  <tr>
    <td>";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Site"), "html", null, true);
        yield "</td>
    <td>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "site", [], "any", false, false, false, 75), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td>";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</td>
    <td>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "email", [], "any", false, false, false, 79), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Téléphone"), "html", null, true);
        yield "</td>
    <td>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "telephone", [], "any", false, false, false, 83), "html", null, true);
        yield "</td>
  </tr>
  ";
        // line 85
        if (CoreExtension::inFilter("ROLE_USER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "getroles", [], "method", false, false, false, 85))) {
            // line 86
            yield "  <tr>
    <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adresse"), "html", null, true);
            yield "</td>
    <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "adresse", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
  </tr>
  <tr>
    <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Latitude"), "html", null, true);
            yield "</td>
    <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "latitude", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
  </tr>
  <tr>
    <td>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Longitude"), "html", null, true);
            yield "</td>
    <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "longitude", [], "any", false, false, false, 96), "html", null, true);
            yield "</td>
  </tr>
  <tr>
    <td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nombre de mise à jour"), "html", null, true);
            yield "</td>
    <td>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "updatesCount", [], "any", false, false, false, 100), "html", null, true);
            yield "</td>
  </tr>

  ";
            // line 103
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 103, $this->source); })()), "societe", [], "any", false, false, false, 103) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 103, $this->source); })()), "societe", [], "any", false, false, false, 103), "adhesion", [], "any", false, false, false, 103))) {
                // line 104
                yield "  <tr>
    <td>";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adhérant"), "html", null, true);
                yield "</td>
    <td>";
                // line 106
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "adhesion", [], "any", false, false, false, 106) == 1)) ? ("oui") : ("non"));
                yield "</td>
  </tr>
  ";
            }
            // line 109
            yield "   ";
        }
        // line 110
        yield "</table>

  
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
        return "admin/user/details.html.twig";
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
        return array (  310 => 110,  307 => 109,  301 => 106,  297 => 105,  294 => 104,  292 => 103,  286 => 100,  282 => 99,  276 => 96,  272 => 95,  266 => 92,  262 => 91,  256 => 88,  252 => 87,  249 => 86,  247 => 85,  242 => 83,  238 => 82,  232 => 79,  228 => 78,  222 => 75,  218 => 74,  206 => 65,  202 => 64,  196 => 61,  192 => 60,  189 => 59,  183 => 56,  179 => 55,  176 => 54,  174 => 53,  169 => 51,  165 => 50,  159 => 46,  150 => 42,  146 => 41,  142 => 39,  140 => 38,  132 => 32,  126 => 29,  121 => 27,  115 => 24,  109 => 22,  106 => 21,  100 => 18,  94 => 16,  92 => 15,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}

<div class=\"row mb-4\">
    <div class=\"col-lg-8 col-8\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-person\"></i>
        {{ \"Mon compte\"|trans }}
      </h1>
    </div>
    <div class=\"col-lg-4 col-4\">
      <div class=\"float-end\">

      {% if 'ROLE_MANAGER' in app.user.getroles()  %}
       <a href=\"{{ path('user.update', {id: user.id}) }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-pencil-square\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Modifier mes informations\"|trans }}</span>
        </a>
      {% endif %}
      {% if 'ROLE_USER' in app.user.getroles()  %}
       <a href=\"{{ path('user.update', {id: user.id}) }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-pencil-square\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Modifier mes informations\"|trans }}</span>
        </a>

         <a href=\"{{ path('user.adhesion') }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-bookmark-check\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Adhésion\"|trans }}</span>
        </a>        
      {% endif %}
      </div>
    </div>
  </div>

  <div class=\"row mb-4\">
    <div class=\"col-6\">
      {% if 'ROLE_USER' in app.user.getroles() and user.uid  %}
      <table class=\"table table-hover table-basic mb-0\">
        <tr>
          <td class=\"font-weight-bold\">{{ \"Qrcode\"|trans }}</td>
          <td><img src=\"/uploads/users{{ asset(user.uid) }}.png\" class=\"d-inline-block align-text-top\" alt=\"{{ user.uid }}\" height=\"160\" /></td>
        </tr>
      </table>
  {% endif %}
    </div>
    <div class=\"col-6\">
      <table class=\"table table-hover table-basic mb-0\">
        <tr>
          <td class=\"font-weight-bold\">{{ \"Société\"|trans }}</td>
          <td>{{ user.societe }}</td>
        </tr>
        {% if user.matricule %}
        <tr>
          <td class=\"font-weight-bold\">{{ \"Matricule\"|trans }}</td>
          <td>{{ user.matricule }}</td>
        </tr>
        {% endif %}
        <tr>
          <td class=\"font-weight-bold\">{{ \"Nom\"|trans }}</td>
          <td>{{ user.prenom }}</td>
        </tr>
        <tr>
          <td class=\"font-weight-bold\">{{ \"Prénom\"|trans }}</td>
          <td>{{ user.nom }}</td>
        </tr>
      </table>
    </div>
  </div>
<table class=\"table table-hover table-basic mb-0\">
   
 
  <tr>
    <td>{{ \"Site\"|trans }}</td>
    <td>{{ user.site }}</td>
  </tr>
  <tr>
    <td>{{ \"Email\"|trans }}</td>
    <td>{{ user.email }}</td>
  </tr>
  <tr>
    <td>{{ \"Téléphone\"|trans }}</td>
    <td>{{ user.telephone }}</td>
  </tr>
  {% if 'ROLE_USER' in app.user.getroles()  %}
  <tr>
    <td>{{ \"Adresse\"|trans }}</td>
    <td>{{ user.adresse }}</td>
  </tr>
  <tr>
    <td>{{ \"Latitude\"|trans }}</td>
    <td>{{ user.latitude }}</td>
  </tr>
  <tr>
    <td>{{ \"Longitude\"|trans }}</td>
    <td>{{ user.longitude }}</td>
  </tr>
  <tr>
    <td>{{ \"Nombre de mise à jour\"|trans }}</td>
    <td>{{ user.updatesCount }}</td>
  </tr>

  {% if user.societe and user.societe.adhesion %}
  <tr>
    <td>{{ \"Adhérant\"|trans }}</td>
    <td>{{ user.adhesion == 1 ? 'oui' : 'non' }}</td>
  </tr>
  {% endif %}
   {% endif %}
</table>

  
{% endblock %}", "admin/user/details.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\user\\details.html.twig");
    }
}
