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

/* admin/navette/details.html.twig */
class __TwigTemplate_8c6acbf9314aa571d8744f666c8a700a extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/navette/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/navette/details.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/navette/details.html.twig", 1);
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
        yield "    <style>
         
        #map {
            height: 500px;
            width: 100%;
            margin-top: 20px;
            border: 2px solid #ccc;
        }

        #panel {
            background: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1;
            max-height: calc(100vh - 40px);
            overflow: scroll;
            margin-top: 20px;
        }

        #total-duration {
            font-weight: bold;
            margin-top: 10px;
            color: #333;
        }
    </style> 
<div class=\"row mb-4\">
    <div class=\"col-lg-8 col-8\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-truck\"></i>
        ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Navette"), "html", null, true);
        yield "
      </h1>
    </div>
    <div class=\"col-lg-4 col-4\">
      <div class=\"float-end\">

        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("navettes");
        yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-list\"></i>
        <span class=\"d-none d-lg-inline-block\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Liste"), "html", null, true);
        yield "</span>
        </a>
";
        // line 44
        if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "getroles", [], "method", false, false, false, 44))) {
            // line 45
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("navettes.clone", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-bookmarks\"></i>
        <span class=\"d-none d-lg-inline-block\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dupliquer"), "html", null, true);
            yield "</span>
        </a>

        <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("navettes.reset", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
          <i class=\"bi bi-clock\"></i>
          <span class=\"d-none d-lg-inline-block\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
            yield "</span>
        </a>

";
        }
        // line 56
        yield "        
 

      </div>
    </div>
  </div>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"4\" class=\"styled-title mb-2\">
      <h3>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informations sur la navette"), "html", null, true);
        yield "</h3>
    </td>
  </tr>
  <tr>
    <td><b>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 71, $this->source); })()), "dateNavette", [], "any", false, false, false, 71)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 71, $this->source); })()), "dateNavette", [], "any", false, false, false, 71), "d-m-Y"), "html", null, true);
            yield " ";
        }
        yield "</td>
    <td><b>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Heure"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 73, $this->source); })()), "heureNavette", [], "any", false, false, false, 73), "html", null, true);
        yield " </td>
  </tr>
  <tr>
    <td><b>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start at"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 77
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 77, $this->source); })()), "startAt", [], "any", false, false, false, 77)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 77, $this->source); })()), "startAt", [], "any", false, false, false, 77), "d-m-Y H:i:s"), "html", null, true);
            yield " ";
        }
        yield "</td>
    <td><b>";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("End at"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 79
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 79, $this->source); })()), "endAt", [], "any", false, false, false, 79)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 79, $this->source); })()), "endAt", [], "any", false, false, false, 79), "d-m-Y H:i:s"), "html", null, true);
            yield " ";
        }
        yield " </td>
  </tr>
  <tr>
    <td><b>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zone"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 83, $this->source); })()), "zone", [], "any", false, false, false, 83), "html", null, true);
        yield "</td>
    <td><b>";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Direction"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 85, $this->source); })()), "direction", [], "any", false, false, false, 85), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td><b>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trajet"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 89, $this->source); })()), "nomTrajet", [], "any", false, false, false, 89), "html", null, true);
        yield "</td>
    <td><b>";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Statut"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 91, $this->source); })()), "status", [], "any", false, false, false, 91), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td><b>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Véhicule"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 95, $this->source); })()), "vehicule", [], "any", false, false, false, 95), "html", null, true);
        yield "</td>
    <td><b>";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chauffeur"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 97
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 97, $this->source); })()), "vehicule", [], "any", false, false, false, 97)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 97, $this->source); })()), "vehicule", [], "any", false, false, false, 97), "user", [], "any", false, false, false, 97), "html", null, true);
            yield " ";
        }
        yield "</td>
  </tr>
  <tr>
    <td><b>";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pick-up"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 101, $this->source); })()), "pickupLocation", [], "any", false, false, false, 101), "html", null, true);
        yield "</td>
    <td><b>";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Drop-off"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 103, $this->source); })()), "dropoffLocation", [], "any", false, false, false, 103), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td><b>";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Distance"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 107, $this->source); })()), "distance", [], "any", false, false, false, 107), "html", null, true);
        yield "</td>
    <td><b>";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Durée"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 109, $this->source); })()), "duree", [], "any", false, false, false, 109), "html", null, true);
        yield "</td>
  </tr>

   <tr>
    <td><b>";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commentaire"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 114, $this->source); })()), "comment", [], "any", false, false, false, 114), "html", null, true);
        yield "</td>
    <td></td>
    <td></td>
  </tr>
  
</table>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"6\" class=\"styled-title mb-2\">
      <h3>";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Passagers affectés à cette navette"), "html", null, true);
        yield "</h3>
    </td>
  </tr>
  <form name=\"update_navette\" action=\"\">

  <tr>
    <th>Matricule</th>
    <th>Nom</th>
    <th>Pick-up</th>
    <th>Drop-off</th>
    <th>Heure de passage</th>
    <th>Actions</th>
  </tr>

   ";
        // line 138
        $context["items"] = [];
        // line 139
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 139, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 140
            yield "     ";
            $context["key"] = (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "pickupLatitude", [], "any", false, false, false, 140) . CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "pickupLongitude", [], "any", false, false, false, 140));
            // line 141
            yield "
    <input type=\"hidden\" name=\"id[]\" id=\"id[]\" value=\"\" />
    <input type=\"hidden\" name=\"lat[]\" id=\"lat[]\" value=\"\" />
    <input type=\"hidden\" name=\"lng[]\" id=\"lng[]\" value=\"\" />
    <input type=\"hidden\" name=\"distance\" id=\"distance\" value=\"\" />
    <input type=\"hidden\" name=\"duration\" id=\"duration\" value=\"\" />

    <tr>
      <td>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 149), "matricule", [], "any", false, false, false, 149), "html", null, true);
            yield "</td>
      <td>";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 150), "html", null, true);
            yield "</td>
      <td>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "pickupLocation", [], "any", false, false, false, 151), "html", null, true);
            yield "</td>
      <td>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "DropoffLocation", [], "any", false, false, false, 152), "html", null, true);
            yield "</td>
      <td>";
            // line 153
            if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "heurePassage", [], "any", false, false, false, 153)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "heurePassage", [], "any", false, false, false, 153), "H:i"), "html", null, true);
                yield " ";
            }
            yield "</td>
      <td>

      <a href=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries.update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 156)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
          <i class=\"bi bi-pencil-square\"></i> Modifier</a>

      <a href=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("navettes.detach", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159), "entry_id" => CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 159)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
          <i class=\"bi bi-trash\"></i> Supprimer</a></td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "    <tr>
      <td>
</table>

<table class=\"table table-hover table-basic mb-0\" id=\"unaffected-passengers\">
  <tr>
    <td colspan=\"8\" class=\"styled-title mb-2\">
      <h3>";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Passagers non affectés à cette navette"), "html", null, true);
        yield "</h3>
    </td>
  </tr>
  <tr>
    <th style=\"width: 30px\">
      <input type=\"checkbox\" class=\"select-all form-check-input\" style=\"width: 16px; height: 16px;\">
    </th>
    <th>Matricule</th>
    <th>Nom</th>
    <th>Pick-up</th>
    <th>Drop-off</th>
    <th>distance</th>
    <th>Navette</th>
    <th>Actions</th>
  </tr>
  ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["unaffected_entries"]) || array_key_exists("unaffected_entries", $context) ? $context["unaffected_entries"] : (function () { throw new RuntimeError('Variable "unaffected_entries" does not exist.', 185, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 186
            yield "    <tr>
      <td>
        <input type=\"checkbox\" class=\"entry-select form-check-input\" data-entry-id=\"";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 188), "html", null, true);
            yield "\" style=\"width: 16px; height: 16px;\">
      </td>
      <td>";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 190), "matricule", [], "any", false, false, false, 190), "html", null, true);
            yield "</td>
      <td>";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 191), "html", null, true);
            yield "</td>
      <td>";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "pickupLocation", [], "any", false, false, false, 192), "html", null, true);
            yield "</td>
      <td>";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "DropoffLocation", [], "any", false, false, false, 193), "html", null, true);
            yield "</td>
      <td>";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "distance", [], "any", false, false, false, 194), "html", null, true);
            yield " km</td>
      <td>";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "navette", [], "any", false, false, false, 195), "html", null, true);
            yield "</td>
      <td>
        <a href=\"";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("navettes.add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 197, $this->source); })()), "id", [], "any", false, false, false, 197), "entry_id" => CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 197)]), "html", null, true);
            yield "\" 
           class=\"btn btn-outline-primary rounded-0 shadow-none single-add\">
          <i class=\"bi bi-plus\"></i> Ajouter
        </a>
      </td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        yield "</table>

<div class=\"bulk-actions-footer d-none mt-3\">
  <div class=\"d-flex justify-content-between align-items-center bg-light p-3 border\">
    <div class=\"selected-count\">
      <span class=\"count-number\">0</span> éléments sélectionnés
    </div>
    <div>
      <button class=\"btn btn-outline-primary rounded-0 shadow-none bulk-add\">
        <i class=\"bi bi-plus\"></i> Ajouter la sélection
      </button>
    </div>
  </div>
</div>

<style>
.bulk-actions-footer {
  transition: all 0.3s ease;
}
.bulk-actions-footer.d-none {
  opacity: 0;
  pointer-events: none;
  transform: translateY(-10px);
}
.bulk-actions-footer:not(.d-none) {
  opacity: 1;
  transform: translateY(0);
}
.form-check-input {
  cursor: pointer;
}
th:first-child, td:first-child {
  width: 30px;
  padding-left: 1rem !important;
  padding-right: 0.5rem !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const table = document.getElementById('unaffected-passengers');
  const selectAll = table.querySelector('.select-all');
  const bulkActions = document.querySelector('.bulk-actions-footer');
  const bulkAddBtn = document.querySelector('.bulk-add');
  const checkboxes = table.querySelectorAll('.entry-select');
  const selectedCount = document.querySelector('.selected-count .count-number');
  
  // Handle select all checkbox
  selectAll.addEventListener('change', function() {
    checkboxes.forEach(checkbox => {
      checkbox.checked = this.checked;
    });
    updateBulkActionsVisibility();
  });

  // Handle individual checkboxes
  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
      updateSelectAllState();
      updateBulkActionsVisibility();
    });
  });

  // Handle bulk add button
  bulkAddBtn.addEventListener('click', function() {
    const selectedIds = Array.from(checkboxes)
      .filter(cb => cb.checked)
      .map(cb => cb.dataset.entryId);

    if (selectedIds.length > 0) {
      const url = \"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("navettes.bulk_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["navette"]) || array_key_exists("navette", $context) ? $context["navette"] : (function () { throw new RuntimeError('Variable "navette" does not exist.', 274, $this->source); })()), "id", [], "any", false, false, false, 274)]), "html", null, true);
        yield "\";
      
      fetch(url, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': '";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("bulk_add"), "html", null, true);
        yield "'
        },
        body: JSON.stringify({ entryIds: selectedIds })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          window.location.reload();
        } else {
          alert('Error: ' + (data.error || 'Unknown error occurred'));
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while processing your request');
      });
    }
  });

  function updateSelectAllState() {
    const checkedCount = Array.from(checkboxes).filter(cb => cb.checked).length;
    selectAll.checked = checkedCount === checkboxes.length;
    selectAll.indeterminate = checkedCount > 0 && checkedCount < checkboxes.length;
  }

  function updateBulkActionsVisibility() {
    const checkedCount = Array.from(checkboxes).filter(cb => cb.checked).length;
    selectedCount.textContent = checkedCount;
    bulkActions.classList.toggle('d-none', checkedCount === 0);
  }
});
</script>
 
<div class=\"row\">

  <div class=\"col-lg-12 col-12\">

  <table class=\"table table-hover table-basic mb-0\">
<tr>
    <td colspan=\"7\" class=\"styled-title mb-2\">
      <h3>";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Calculateur d'itinéraire de véhicule avec trafic et arrêts"), "html", null, true);
        yield "</h3>
    </td>
  </tr>
</table>
    <br>


<button id=\"calculateRouteBtn\" class=\"btn btn-primary\">";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Calculer l'itinéraire et synchroniser les informations."), "html", null, true);
        yield "</button>
<button id=\"updateTraffic\" class=\"btn btn-primary\" style=\"display: none;\">Mettre à jour les données de trafic.</button>
<button id=\"openGoogleMapsBtn\" class=\"btn btn-primary\" style=\"display: none;\">Open in Google Maps</button>



    <div id=\"lastUpdate\"></div>
    <div id=\"result\"></div>
    <div id=\"map\"></div>

  <!-- Include Leaflet CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css\" />

    <!-- Include Leaflet JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js\"></script>

";
        // line 343
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 362
        yield "



  </div>
</div>
 


<script>




 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 343
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 344
        yield "    ";
        // line 345
        yield "    <div id=\"app\" 
         data-navette=\"";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["navetteData"]) || array_key_exists("navetteData", $context) ? $context["navetteData"] : (function () { throw new RuntimeError('Variable "navetteData" does not exist.', 346, $this->source); })())), "html_attr");
        yield "\"
         data-entries=\"";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["entriesData"]) || array_key_exists("entriesData", $context) ? $context["entriesData"] : (function () { throw new RuntimeError('Variable "entriesData" does not exist.', 347, $this->source); })()), function ($__entry__) use ($context, $macros) { $context["entry"] = $__entry__; return ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 348
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 348, $this->source); })()), "id", [], "any", false, false, false, 348), "pickupLatitude" => CoreExtension::getAttribute($this->env, $this->source,         // line 349
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 349, $this->source); })()), "pickupLatitude", [], "any", false, false, false, 349), "pickupLongitude" => CoreExtension::getAttribute($this->env, $this->source,         // line 350
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 350, $this->source); })()), "pickupLongitude", [], "any", false, false, false, 350), "pickupLocation" => CoreExtension::getAttribute($this->env, $this->source,         // line 351
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 351, $this->source); })()), "pickupLocation", [], "any", false, false, false, 351), "dropoffLatitude" => CoreExtension::getAttribute($this->env, $this->source,         // line 352
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 352, $this->source); })()), "dropoffLatitude", [], "any", false, false, false, 352), "dropoffLongitude" => CoreExtension::getAttribute($this->env, $this->source,         // line 353
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 353, $this->source); })()), "dropoffLongitude", [], "any", false, false, false, 353), "navetteId" => CoreExtension::getAttribute($this->env, $this->source,         // line 354
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 354, $this->source); })()), "navetteId", [], "any", false, false, false, 354), "dureeUp" => CoreExtension::getAttribute($this->env, $this->source,         // line 355
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 355, $this->source); })()), "dureeUp", [], "any", false, false, false, 355)]; })), "html_attr");
        // line 356
        yield "\"
    </div>

    ";
        // line 360
        yield "   <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/optis.js"), "html", null, true);
        yield "?v=2.0.2\"></script>
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
        return "admin/navette/details.html.twig";
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
        return array (  704 => 360,  699 => 356,  697 => 355,  696 => 354,  695 => 353,  694 => 352,  693 => 351,  692 => 350,  691 => 349,  690 => 348,  689 => 347,  685 => 346,  682 => 345,  680 => 344,  667 => 343,  641 => 362,  639 => 343,  620 => 327,  610 => 320,  567 => 280,  558 => 274,  486 => 204,  473 => 197,  468 => 195,  464 => 194,  460 => 193,  456 => 192,  452 => 191,  448 => 190,  443 => 188,  439 => 186,  435 => 185,  417 => 170,  408 => 163,  398 => 159,  392 => 156,  383 => 153,  379 => 152,  375 => 151,  371 => 150,  367 => 149,  357 => 141,  354 => 140,  349 => 139,  347 => 138,  330 => 124,  317 => 114,  313 => 113,  306 => 109,  302 => 108,  298 => 107,  294 => 106,  288 => 103,  284 => 102,  280 => 101,  276 => 100,  266 => 97,  262 => 96,  258 => 95,  254 => 94,  248 => 91,  244 => 90,  240 => 89,  236 => 88,  230 => 85,  226 => 84,  222 => 83,  218 => 82,  209 => 79,  205 => 78,  198 => 77,  194 => 76,  188 => 73,  184 => 72,  177 => 71,  173 => 70,  166 => 66,  154 => 56,  147 => 52,  142 => 50,  136 => 47,  130 => 45,  128 => 44,  123 => 42,  118 => 40,  109 => 34,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}
    <style>
         
        #map {
            height: 500px;
            width: 100%;
            margin-top: 20px;
            border: 2px solid #ccc;
        }

        #panel {
            background: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1;
            max-height: calc(100vh - 40px);
            overflow: scroll;
            margin-top: 20px;
        }

        #total-duration {
            font-weight: bold;
            margin-top: 10px;
            color: #333;
        }
    </style> 
<div class=\"row mb-4\">
    <div class=\"col-lg-8 col-8\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-truck\"></i>
        {{ \"Navette\"|trans }}
      </h1>
    </div>
    <div class=\"col-lg-4 col-4\">
      <div class=\"float-end\">

        <a href=\"{{ path('navettes') }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-list\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Liste\"|trans }}</span>
        </a>
{% if 'ROLE_ADMIN' in app.user.getroles()  %}
        <a href=\"{{ path('navettes.clone', {id: navette.id}) }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-bookmarks\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Dupliquer\"|trans }}</span>
        </a>

        <a href=\"{{ path('navettes.reset', {id: navette.id}) }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
          <i class=\"bi bi-clock\"></i>
          <span class=\"d-none d-lg-inline-block\">{{ \"Reset\"|trans }}</span>
        </a>

{% endif %}
        
 

      </div>
    </div>
  </div>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"4\" class=\"styled-title mb-2\">
      <h3>{{ \"Informations sur la navette\"|trans }}</h3>
    </td>
  </tr>
  <tr>
    <td><b>{{ \"Date\"|trans }}</b></td>
    <td>{% if navette.dateNavette %}{{ navette.dateNavette|date(\"d-m-Y\") }} {% endif %}</td>
    <td><b>{{ \"Heure\"|trans }}</b></td>
    <td>{{ navette.heureNavette }} </td>
  </tr>
  <tr>
    <td><b>{{ \"Start at\"|trans }}</b></td>
    <td>{% if navette.startAt %}{{ navette.startAt|date(\"d-m-Y H:i:s\") }} {% endif %}</td>
    <td><b>{{ \"End at\"|trans }}</b></td>
    <td>{% if navette.endAt %}{{ navette.endAt|date(\"d-m-Y H:i:s\") }} {% endif %} </td>
  </tr>
  <tr>
    <td><b>{{ \"zone\"|trans }}</b></td>
    <td>{{ navette.zone }}</td>
    <td><b>{{ \"Direction\"|trans }}</b></td>
    <td>{{ navette.direction }}</td>
  </tr>
  <tr>
    <td><b>{{ \"Trajet\"|trans }}</b></td>
    <td>{{ navette.nomTrajet }}</td>
    <td><b>{{ \"Statut\"|trans }}</b></td>
    <td>{{ navette.status }}</td>
  </tr>
  <tr>
    <td><b>{{ \"Véhicule\"|trans }}</b></td>
    <td>{{ navette.vehicule }}</td>
    <td><b>{{ \"Chauffeur\"|trans }}</b></td>
    <td>{% if navette.vehicule %} {{ navette.vehicule.user }} {% endif %}</td>
  </tr>
  <tr>
    <td><b>{{ \"Pick-up\"|trans }}</b></td>
    <td>{{ navette.pickupLocation }}</td>
    <td><b>{{ \"Drop-off\"|trans }}</b></td>
    <td>{{ navette.dropoffLocation }}</td>
  </tr>
  <tr>
    <td><b>{{ \"Distance\"|trans }}</b></td>
    <td>{{ navette.distance }}</td>
    <td><b>{{ \"Durée\"|trans }}</b></td>
    <td>{{ navette.duree }}</td>
  </tr>

   <tr>
    <td><b>{{ \"Commentaire\"|trans }}</b></td>
    <td>{{ navette.comment }}</td>
    <td></td>
    <td></td>
  </tr>
  
</table>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"6\" class=\"styled-title mb-2\">
      <h3>{{ \"Passagers affectés à cette navette\"|trans }}</h3>
    </td>
  </tr>
  <form name=\"update_navette\" action=\"\">

  <tr>
    <th>Matricule</th>
    <th>Nom</th>
    <th>Pick-up</th>
    <th>Drop-off</th>
    <th>Heure de passage</th>
    <th>Actions</th>
  </tr>

   {% set items = [] %}
  {% for entry in entries %}
     {% set key = entry.pickupLatitude ~  entry.pickupLongitude %}

    <input type=\"hidden\" name=\"id[]\" id=\"id[]\" value=\"\" />
    <input type=\"hidden\" name=\"lat[]\" id=\"lat[]\" value=\"\" />
    <input type=\"hidden\" name=\"lng[]\" id=\"lng[]\" value=\"\" />
    <input type=\"hidden\" name=\"distance\" id=\"distance\" value=\"\" />
    <input type=\"hidden\" name=\"duration\" id=\"duration\" value=\"\" />

    <tr>
      <td>{{ entry.user.matricule }}</td>
      <td>{{ entry.user }}</td>
      <td>{{ entry.pickupLocation }}</td>
      <td>{{ entry.DropoffLocation }}</td>
      <td>{% if entry.heurePassage %}{{ entry.heurePassage|date('H:i') }} {% endif %}</td>
      <td>

      <a href=\"{{ path('reservation_entries.update', {id: entry.id}) }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
          <i class=\"bi bi-pencil-square\"></i> Modifier</a>

      <a href=\"{{ path('navettes.detach', {id: navette.id, entry_id: entry.id}) }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
          <i class=\"bi bi-trash\"></i> Supprimer</a></td>
    </tr>
  {% endfor %}
    <tr>
      <td>
</table>

<table class=\"table table-hover table-basic mb-0\" id=\"unaffected-passengers\">
  <tr>
    <td colspan=\"8\" class=\"styled-title mb-2\">
      <h3>{{ \"Passagers non affectés à cette navette\"|trans }}</h3>
    </td>
  </tr>
  <tr>
    <th style=\"width: 30px\">
      <input type=\"checkbox\" class=\"select-all form-check-input\" style=\"width: 16px; height: 16px;\">
    </th>
    <th>Matricule</th>
    <th>Nom</th>
    <th>Pick-up</th>
    <th>Drop-off</th>
    <th>distance</th>
    <th>Navette</th>
    <th>Actions</th>
  </tr>
  {% for entry in unaffected_entries %}
    <tr>
      <td>
        <input type=\"checkbox\" class=\"entry-select form-check-input\" data-entry-id=\"{{ entry.id }}\" style=\"width: 16px; height: 16px;\">
      </td>
      <td>{{ entry.user.matricule }}</td>
      <td>{{ entry.user }}</td>
      <td>{{ entry.pickupLocation }}</td>
      <td>{{ entry.DropoffLocation }}</td>
      <td>{{ entry.distance }} km</td>
      <td>{{ entry.navette }}</td>
      <td>
        <a href=\"{{ path('navettes.add', {id: navette.id, entry_id: entry.id}) }}\" 
           class=\"btn btn-outline-primary rounded-0 shadow-none single-add\">
          <i class=\"bi bi-plus\"></i> Ajouter
        </a>
      </td>
    </tr>
  {% endfor %}
</table>

<div class=\"bulk-actions-footer d-none mt-3\">
  <div class=\"d-flex justify-content-between align-items-center bg-light p-3 border\">
    <div class=\"selected-count\">
      <span class=\"count-number\">0</span> éléments sélectionnés
    </div>
    <div>
      <button class=\"btn btn-outline-primary rounded-0 shadow-none bulk-add\">
        <i class=\"bi bi-plus\"></i> Ajouter la sélection
      </button>
    </div>
  </div>
</div>

<style>
.bulk-actions-footer {
  transition: all 0.3s ease;
}
.bulk-actions-footer.d-none {
  opacity: 0;
  pointer-events: none;
  transform: translateY(-10px);
}
.bulk-actions-footer:not(.d-none) {
  opacity: 1;
  transform: translateY(0);
}
.form-check-input {
  cursor: pointer;
}
th:first-child, td:first-child {
  width: 30px;
  padding-left: 1rem !important;
  padding-right: 0.5rem !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const table = document.getElementById('unaffected-passengers');
  const selectAll = table.querySelector('.select-all');
  const bulkActions = document.querySelector('.bulk-actions-footer');
  const bulkAddBtn = document.querySelector('.bulk-add');
  const checkboxes = table.querySelectorAll('.entry-select');
  const selectedCount = document.querySelector('.selected-count .count-number');
  
  // Handle select all checkbox
  selectAll.addEventListener('change', function() {
    checkboxes.forEach(checkbox => {
      checkbox.checked = this.checked;
    });
    updateBulkActionsVisibility();
  });

  // Handle individual checkboxes
  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
      updateSelectAllState();
      updateBulkActionsVisibility();
    });
  });

  // Handle bulk add button
  bulkAddBtn.addEventListener('click', function() {
    const selectedIds = Array.from(checkboxes)
      .filter(cb => cb.checked)
      .map(cb => cb.dataset.entryId);

    if (selectedIds.length > 0) {
      const url = \"{{ path('navettes.bulk_add', {id: navette.id}) }}\";
      
      fetch(url, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token('bulk_add') }}'
        },
        body: JSON.stringify({ entryIds: selectedIds })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          window.location.reload();
        } else {
          alert('Error: ' + (data.error || 'Unknown error occurred'));
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while processing your request');
      });
    }
  });

  function updateSelectAllState() {
    const checkedCount = Array.from(checkboxes).filter(cb => cb.checked).length;
    selectAll.checked = checkedCount === checkboxes.length;
    selectAll.indeterminate = checkedCount > 0 && checkedCount < checkboxes.length;
  }

  function updateBulkActionsVisibility() {
    const checkedCount = Array.from(checkboxes).filter(cb => cb.checked).length;
    selectedCount.textContent = checkedCount;
    bulkActions.classList.toggle('d-none', checkedCount === 0);
  }
});
</script>
 
<div class=\"row\">

  <div class=\"col-lg-12 col-12\">

  <table class=\"table table-hover table-basic mb-0\">
<tr>
    <td colspan=\"7\" class=\"styled-title mb-2\">
      <h3>{{ \"Calculateur d'itinéraire de véhicule avec trafic et arrêts\"|trans }}</h3>
    </td>
  </tr>
</table>
    <br>


<button id=\"calculateRouteBtn\" class=\"btn btn-primary\">{{ \"Calculer l'itinéraire et synchroniser les informations.\"|trans }}</button>
<button id=\"updateTraffic\" class=\"btn btn-primary\" style=\"display: none;\">Mettre à jour les données de trafic.</button>
<button id=\"openGoogleMapsBtn\" class=\"btn btn-primary\" style=\"display: none;\">Open in Google Maps</button>



    <div id=\"lastUpdate\"></div>
    <div id=\"result\"></div>
    <div id=\"map\"></div>

  <!-- Include Leaflet CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css\" />

    <!-- Include Leaflet JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js\"></script>

{% block javascripts %}
    {# Method 1: Data attributes #}
    <div id=\"app\" 
         data-navette=\"{{ navetteData|json_encode|e('html_attr') }}\"
         data-entries=\"{{ entriesData|map(entry => {
    'id': entry.id,
    'pickupLatitude': entry.pickupLatitude,
    'pickupLongitude': entry.pickupLongitude,
    'pickupLocation': entry.pickupLocation,
    'dropoffLatitude': entry.dropoffLatitude,
    'dropoffLongitude': entry.dropoffLongitude,
    'navetteId': entry.navetteId,
    'dureeUp': entry.dureeUp
})|json_encode|e('html_attr') }}\"
    </div>

    {# Include your JavaScript file #}
   <script src=\"{{ asset('assets/js/optis.js') }}?v=2.0.2\"></script>
{% endblock %}




  </div>
</div>
 


<script>




 
{% endblock %}












", "admin/navette/details.html.twig", "C:\\Users\\Hp\\Desktop\\stgj\\templates\\admin\\navette\\details.html.twig");
    }
}
