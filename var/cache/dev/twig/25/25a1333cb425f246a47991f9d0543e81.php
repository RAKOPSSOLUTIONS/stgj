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

/* layout/admin.html.twig */
class __TwigTemplate_c5f7a032b892afbfdec6aca37012d3e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/admin.html.twig"));

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
        yield from $this->loadTemplate("partials/service-worker-meta.html.twig", "layout/admin.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "  <title>";
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
  ";
        // line 8
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 11
        yield "
    

</head>
<body class=\"admin-layout\">

  ";
        // line 17
        $context["route_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "get", ["_route"], "method", false, false, false, 17);
        // line 18
        yield "
  <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm\" id=\"primary-navbar\">
    <div class=\"container-fluid\">
      
      <a class=\"navbar-brand ms-3 me-5\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reporting");
        yield "\" style=\"font-size: 1.5; font-weight: 800; color: #0075b9;\">
       <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-stjg.png"), "html", null, true);
        yield "\" alt=\"STJG\" class=\"d-inline-block align-text-top\" height=\"60\">
       
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
        // line 42
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 211
        yield "          ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 212
            yield "          <li class=\"d-block d-lg-none\">
            <hr class=\"dropdown-divider\">
          </li>
          

          <li class=\"nav-item d-block d-lg-none\">
                <a href=\"";
            // line 218
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicules");
            yield "\" class=\"nav-link";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 218, $this->source); })()) == "vehicules")) ? (" active") : (""));
            yield "\">
                 <i class=\"bi bi-truck\"></i>
                 ";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Véhicules"), "html", null, true);
            yield "
                </a>
          </li>

          <li class=\"nav-item  d-block d-lg-none\">
                <a href=\"";
            // line 225
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajets");
            yield "\" class=\"nav-link";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 225, $this->source); })()) == "trajets")) ? (" active") : (""));
            yield "\">
                  <i class=\"bi bi-signpost\"></i>
                  ";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trajets"), "html", null, true);
            yield "
                </a>
          </li>

          <li class=\"nav-item d-block d-lg-none\">
                <a href=\"";
            // line 232
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarifs");
            yield "\" class=\"nav-link";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 232, $this->source); })()) == "tarifs")) ? (" active") : (""));
            yield "\">
                 <i class=\"bi bi-currency-dollar\"></i>
                 ";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tarif"), "html", null, true);
            yield "
                </a>
          </li>

          <li class=\"nav-item  d-block d-lg-none\">
                <a href=\"";
            // line 239
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pickups");
            yield "\" class=\"nav-link";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 239, $this->source); })()) == "pickups")) ? (" active") : (""));
            yield "\">
                  <i class=\"bi bi-pin-map\"></i>
                  ";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Points de ramassage"), "html", null, true);
            yield "
                </a>
          </li>

          <li class=\"nav-item  d-block d-lg-none\">
                <a href=\"";
            // line 246
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shifts");
            yield "\" class=\"nav-link";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 246, $this->source); })()) == "shifts")) ? (" active") : (""));
            yield "\">
                  <i class=\"bi bi-clock\"></i>
                  ";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shifts"), "html", null, true);
            yield "
                </a>
          </li>

          <li class=\"nav-item d-block d-lg-none\">
                <a href=\"";
            // line 253
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
            yield "\" class=\"nav-link";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 253, $this->source); })()) == "users")) ? (" active") : (""));
            yield "\">
                 <i class=\"bi bi-people\"></i>
                 ";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Utilisateurs"), "html", null, true);
            yield "
                </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
                <a href=\"";
            // line 259
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("societes");
            yield "\" class=\"nav-link";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 259, $this->source); })()) == "societes")) ? (" active") : (""));
            yield "\">
                 <i class=\"bi bi-building\"></i>
                 ";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sociétés"), "html", null, true);
            yield "
                </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"";
            // line 265
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mail.history");
            yield "\" class=\"nav-link";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 265, $this->source); })()) == "mail.history")) ? (" active") : (""));
            yield "\">
              <i class=\"bi bi-envelope-open\"></i>
              ";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Emails"), "html", null, true);
            yield "
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"";
            // line 271
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronjobs");
            yield "\" class=\"nav-link";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 271, $this->source); })()) == "cronjobs")) ? (" active") : (""));
            yield "\">
              <i class=\"bi bi-lightning\"></i>
              ";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cron Jobs"), "html", null, true);
            yield "
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"";
            // line 277
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings");
            yield "\" class=\"nav-link";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 277, $this->source); })()) == "settings")) ? (" active") : (""));
            yield "\">
              <i class=\"bi bi-gear\"></i>
              ";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings"), "html", null, true);
            yield "
            </a>
          </li>
          <li class=\"d-block\">
            <hr class=\"dropdown-divider\">
          </li>
          ";
        }
        // line 286
        yield "          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.details", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 287, $this->source); })()), "user", [], "any", false, false, false, 287), "getId", [], "method", false, false, false, 287)]), "html", null, true);
        yield "\" class=\"nav-link\">
              <i class=\"bi bi-person\"></i>
              ";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mon compte"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a class=\"nav-link\" href=\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        yield "\">
              <i class=\"bi bi-box-arrow-left\"></i>
              ";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Se déconnecter"), "html", null, true);
        yield "
            </a>
          </li>
        </ul>
        <!-- user menu -->
        <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 d-none d-lg-block\">
          <li class=\"nav-item dropdown dropdown-account\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"user-account\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              <span class=\"bg-secondary text-white rounded-circle fs-5\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "user", [], "any", false, false, false, 303), "getFullName", [], "method", false, false, false, 303), "html", null, true);
        yield "\" style=\"width: 53px; height: 50px; display: block; text-align: center; padding: 11px 0px;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "user", [], "any", false, false, false, 303), "getShortName", [], "method", false, false, false, 303), "html", null, true);
        yield "</span>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-lg-end\" aria-labelledby=\"user-account\">
              ";
        // line 306
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 307
            yield "              <li>
                <a href=\"";
            // line 308
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("societes");
            yield "\" class=\"dropdown-item";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 308, $this->source); })()) == "societes")) ? (" active") : (""));
            yield "\">
                 <i class=\"bi bi-building\"></i>
                 ";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sociétés"), "html", null, true);
            yield "
                </a>
              </li>
              <li>
                <a href=\"";
            // line 314
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sites");
            yield "\" class=\"dropdown-item";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 314, $this->source); })()) == "sites")) ? (" active") : (""));
            yield "\">
                 <i class=\"bi bi-house\"></i>
                 ";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sites"), "html", null, true);
            yield "
                </a>
              </li>
              <li>
                <a href=\"";
            // line 320
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
            yield "\" class=\"dropdown-item";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 320, $this->source); })()) == "users")) ? (" active") : (""));
            yield "\">
                 <i class=\"bi bi-people\"></i>
                 ";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Utilisateurs"), "html", null, true);
            yield "
                </a>
              </li>
              
             <li>
                <a href=\"";
            // line 327
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicules");
            yield "\" class=\"dropdown-item";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 327, $this->source); })()) == "vehicules")) ? (" active") : (""));
            yield "\">
                 <i class=\"bi bi-truck\"></i>
                 ";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Véhicules"), "html", null, true);
            yield "
                </a>
              </li>
              <li>
                <a href=\"";
            // line 333
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajets");
            yield "\" class=\"dropdown-item";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 333, $this->source); })()) == "trajets")) ? (" active") : (""));
            yield "\">
                  <i class=\"bi bi-signpost\"></i>
                  ";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trajets"), "html", null, true);
            yield "
                </a>
              </li>

              <li>
                <a href=\"";
            // line 340
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarifs");
            yield "\" class=\"dropdown-item";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 340, $this->source); })()) == "tarifs")) ? (" active") : (""));
            yield "\">
                  <i class=\"bi bi-currency-dollar\"></i>
                  ";
            // line 342
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tarif"), "html", null, true);
            yield "
                </a>
              </li>

              <li>
                <a href=\"";
            // line 347
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pickups");
            yield "\" class=\"dropdown-item";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 347, $this->source); })()) == "pickups")) ? (" active") : (""));
            yield "\">
                  <i class=\"bi bi-pin-map\"></i>
                  ";
            // line 349
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pickups"), "html", null, true);
            yield "
                </a>
              </li>

          <li>
                <a href=\"";
            // line 354
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shifts");
            yield "\" class=\"dropdown-item";
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 354, $this->source); })()) == "shifts")) ? (" active") : (""));
            yield "\">
                  <i class=\"bi bi-clock\"></i>
                  ";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shifts"), "html", null, true);
            yield "
                </a>
          </li>
              
              <li>
                <a
                  href=\"";
            // line 362
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mail.history");
            yield "\"
                  class=\"dropdown-item";
            // line 363
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 363, $this->source); })()) == "mail.history")) ? (" active") : (""));
            yield "\"
                >
                  <i class=\"bi bi-envelope-open\"></i>
                  ";
            // line 366
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Emails"), "html", null, true);
            yield "
                </a>
              </li>
              <li>
                <a
                  href=\"";
            // line 371
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronjobs");
            yield "\"
                  class=\"dropdown-item";
            // line 372
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 372, $this->source); })()) == "cronjobs")) ? (" active") : (""));
            yield "\"
                >
                  <i class=\"bi bi-lightning\"></i>
                  ";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cron Jobs"), "html", null, true);
            yield "
                </a>
              </li>
              <li>
                <a
                  href=\"";
            // line 380
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings");
            yield "\"
                  class=\"dropdown-item";
            // line 381
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 381, $this->source); })()) == "settings")) ? (" active") : (""));
            yield "\"
                >
                  <i class=\"bi bi-gear\"></i>
                  ";
            // line 384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings"), "html", null, true);
            yield "
                </a>
              </li>
              <li class=\"d-block\">
                <hr class=\"dropdown-divider\">
              </li>
              ";
        }
        // line 391
        yield "              <li>
                
                <a href=\"";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.details", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "user", [], "any", false, false, false, 393), "getId", [], "method", false, false, false, 393)]), "html", null, true);
        yield "\" class=\"dropdown-item\" >
                <i class=\"bi bi-person\"></i>
                  ";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mon compte"), "html", null, true);
        yield "
                </a>
        
              </li>
              <li>
                <a class=\"dropdown-item\" href=\"";
        // line 400
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        yield "\">
                  <i class=\"bi bi-box-arrow-left\"></i>
                  ";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Se déconneter"), "html", null, true);
        yield "
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  ";
        // line 412
        yield from $this->loadTemplate("partials/sidebar.html.twig", "layout/admin.html.twig", 412)->unwrap()->yield($context);
        // line 413
        yield "
  <div class=\"container-fluid my-4 px-4\">
    ";
        // line 415
        yield from $this->loadTemplate("layout/alert.html.twig", "layout/admin.html.twig", 415)->unwrap()->yield($context);
        // line 416
        yield "    ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 417
        yield "  </div>

  ";
        // line 419
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 424
        yield "
</body>
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

        yield "STJG";
        
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

    // line 42
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

        // line 43
        yield "
        ";
        // line 44
        yield "  
        ";
        // line 45
        if (CoreExtension::inFilter("ROLE_CHAUFFEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "getroles", [], "method", false, false, false, 45))) {
            // line 46
            yield "          <li class=\"nav-item\">
            <a
              href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reporting_trajets");
            yield "\"
              class=\"nav-link";
            // line 49
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 49, $this->source); })()) == "reporting_trajets")) ? (" active") : (""));
            yield "\"
            >
              <i class=\"bi bi-calendar-check\"></i>
                ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trajets"), "html", null, true);
            yield "
            </a>
          </li> 
          <li class=\"nav-item\">
            <a
              href=\"";
            // line 57
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries");
            yield "\"
              class=\"nav-link";
            // line 58
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 58, $this->source); })()) == "reservation_entries")) ? (" active") : (""));
            yield "\"
            >
              <i class=\"bi bi-clock\"></i>
                ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pointage"), "html", null, true);
            yield "
            </a>
          </li>
          <li class=\"nav-item\">
                <a
                  href=\"";
            // line 66
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\"
                  class=\"nav-link";
            // line 67
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 67, $this->source); })()) == "annonces")) ? (" active") : (""));
            yield "\"
                >
                  <i class=\"bi bi-megaphone\"></i>
                  ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annonces"), "html", null, true);
            yield "
                </a>
          </li>

          ";
        }
        // line 75
        yield "          
        ";
        // line 76
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            yield "  
          <li class=\"nav-item\">
            <a
              href=\"";
            // line 79
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservations");
            yield "\"
              class=\"nav-link";
            // line 80
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 80, $this->source); })()) == "reservations")) ? (" active") : (""));
            yield "\"
            >
              <i class=\"bi bi-calendar-check\"></i>
                ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pré-réservations"), "html", null, true);
            yield "
            </a>
          </li>
          <li class=\"nav-item\">
            <a
              href=\"";
            // line 88
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries");
            yield "\"
              class=\"nav-link";
            // line 89
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 89, $this->source); })()) == "reservation_entries")) ? (" active") : (""));
            yield "\"
            >
              <i class=\"bi bi-clock\"></i>
                ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réservations"), "html", null, true);
            yield "
            </a>
          </li>
         ";
        }
        // line 96
        yield "         ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            yield "  
          <li class=\"nav-item\">
            <a
              href=\"";
            // line 99
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("navettes");
            yield "\"
              class=\"nav-link";
            // line 100
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 100, $this->source); })()) == "navettes")) ? (" active") : (""));
            yield "\"
            >
              <i class=\"bi bi-truck\"></i>
                ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Navettes"), "html", null, true);
            yield "
            </a>
          </li>
          <li class=\"nav-item\">
            <a
              href=\"";
            // line 108
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
            yield "\"
              class=\"nav-link";
            // line 109
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 109, $this->source); })()) == "users")) ? (" active") : (""));
            yield "\"
            >
              <i class=\"bi bi-people\"></i>
                ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Utilisateurs"), "html", null, true);
            yield "
            </a>
          </li>

            <li class=\"nav-item\">
            <a
              href=\"";
            // line 118
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reporting");
            yield "\"
              class=\"nav-link";
            // line 119
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 119, $this->source); })()) == "reporting")) ? (" active") : (""));
            yield "\"
            >
              <i class=\"bi bi-people\"></i>
                ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reporting"), "html", null, true);
            yield "
            </a>
          </li>

         <!-- <li class=\"nav-item\">
                <a
                  href=\"";
            // line 128
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamations");
            yield "\"
                  class=\"nav-link";
            // line 129
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 129, $this->source); })()) == "reclamations")) ? (" active") : (""));
            yield "\"
                >
                  <i class=\"bi bi-question-circle\"></i>
                  ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réclamations"), "html", null, true);
            yield "
                </a>
          </li>
          <li class=\"nav-item\">
                <a
                  href=\"";
            // line 137
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\"
                  class=\"nav-link";
            // line 138
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 138, $this->source); })()) == "annonces")) ? (" active") : (""));
            yield "\"
                >
                  <i class=\"bi bi-megaphone\"></i>
                  ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annonces"), "html", null, true);
            yield "
                </a>
          </li>-->


        ";
        }
        // line 147
        yield "


         ";
        // line 150
        if (CoreExtension::inFilter("ROLE_USER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "getroles", [], "method", false, false, false, 150))) {
            // line 151
            yield "        
        <li class=\"nav-item\">
            <a
              href=\"";
            // line 154
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservations");
            yield "\"
              class=\"nav-link";
            // line 155
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 155, $this->source); })()) == "reservations")) ? (" active") : (""));
            yield "\"
            >
              <i class=\"bi bi-calendar-check\"></i>
                ";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pré-réservations"), "html", null, true);
            yield "
            </a>
          </li>
          <li class=\"nav-item\">
            <a
              href=\"";
            // line 163
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries");
            yield "\"
              class=\"nav-link";
            // line 164
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 164, $this->source); })()) == "reservation_entries")) ? (" active") : (""));
            yield "\"
            >
              <i class=\"bi bi-clock\"></i>
                ";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réservations"), "html", null, true);
            yield "
            </a>
          </li>
         <!-- <li class=\"nav-item\">
                <a
                  href=\"";
            // line 172
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamations");
            yield "\"
                  class=\"nav-link";
            // line 173
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 173, $this->source); })()) == "reclamations")) ? (" active") : (""));
            yield "\"
                >
                  <i class=\"bi bi-question-circle\"></i>
                  ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réclamations"), "html", null, true);
            yield "
                </a>
          </li>
          <li class=\"nav-item\">
                <a
                  href=\"";
            // line 181
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\"
                  class=\"nav-link";
            // line 182
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 182, $this->source); })()) == "annonces")) ? (" active") : (""));
            yield "\"
                >
                  <i class=\"bi bi-megaphone\"></i>
                  ";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annonces"), "html", null, true);
            yield "
                </a>
          </li>
          <li class=\"nav-item\">
                <a href=\"tel:0800005991\" onclick=\"return confirm('Etes vous sure de voir déclencher l\\'alerte ?');\"
                  class=\"text-danger nav-link";
            // line 190
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 190, $this->source); })()) == "reclamations")) ? (" active") : (""));
            yield "\"
                >
                  <i class=\"bi bi-phone-vibrate text-danger\"></i>
                  ";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SOS Button"), "html", null, true);
            yield "
                </a>
          </li>-->

        ";
        }
        // line 198
        yield "
        <!--  <li class=\"nav-item\">
            <a
              href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reporting");
        yield "\"
              class=\"nav-link";
        // line 202
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 202, $this->source); })()) == "reporting")) ? (" active") : (""));
        yield "\"
            >
              <i class=\"bi bi-clipboard-data\"></i>
              ";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reporting"), "html", null, true);
        yield "
            </a>
          </li>-->
           
          
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 416
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

    // line 419
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

        // line 420
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
    ";
        // line 421
        yield from $this->loadTemplate("partials/webpush.html.twig", "layout/admin.html.twig", 421)->unwrap()->yield($context);
        // line 422
        yield "    ";
        yield from $this->loadTemplate("partials/service-worker-script.html.twig", "layout/admin.html.twig", 422)->unwrap()->yield($context);
        // line 423
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
        return "layout/admin.html.twig";
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
        return array (  1007 => 423,  1004 => 422,  1002 => 421,  997 => 420,  984 => 419,  962 => 416,  945 => 205,  939 => 202,  935 => 201,  930 => 198,  922 => 193,  916 => 190,  908 => 185,  902 => 182,  898 => 181,  890 => 176,  884 => 173,  880 => 172,  872 => 167,  866 => 164,  862 => 163,  854 => 158,  848 => 155,  844 => 154,  839 => 151,  837 => 150,  832 => 147,  823 => 141,  817 => 138,  813 => 137,  805 => 132,  799 => 129,  795 => 128,  786 => 122,  780 => 119,  776 => 118,  767 => 112,  761 => 109,  757 => 108,  749 => 103,  743 => 100,  739 => 99,  732 => 96,  725 => 92,  719 => 89,  715 => 88,  707 => 83,  701 => 80,  697 => 79,  691 => 76,  688 => 75,  680 => 70,  674 => 67,  670 => 66,  662 => 61,  656 => 58,  652 => 57,  644 => 52,  638 => 49,  634 => 48,  630 => 46,  628 => 45,  625 => 44,  622 => 43,  609 => 42,  595 => 9,  582 => 8,  559 => 7,  545 => 424,  543 => 419,  539 => 417,  536 => 416,  534 => 415,  530 => 413,  528 => 412,  515 => 402,  510 => 400,  502 => 395,  497 => 393,  493 => 391,  483 => 384,  477 => 381,  473 => 380,  465 => 375,  459 => 372,  455 => 371,  447 => 366,  441 => 363,  437 => 362,  428 => 356,  421 => 354,  413 => 349,  406 => 347,  398 => 342,  391 => 340,  383 => 335,  376 => 333,  369 => 329,  362 => 327,  354 => 322,  347 => 320,  340 => 316,  333 => 314,  326 => 310,  319 => 308,  316 => 307,  314 => 306,  306 => 303,  295 => 295,  290 => 293,  283 => 289,  278 => 287,  275 => 286,  265 => 279,  258 => 277,  251 => 273,  244 => 271,  237 => 267,  230 => 265,  223 => 261,  216 => 259,  209 => 255,  202 => 253,  194 => 248,  187 => 246,  179 => 241,  172 => 239,  164 => 234,  157 => 232,  149 => 227,  142 => 225,  134 => 220,  127 => 218,  119 => 212,  116 => 211,  114 => 42,  92 => 23,  88 => 22,  82 => 18,  80 => 17,  72 => 11,  70 => 8,  65 => 7,  63 => 6,  56 => 2,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.getLocale() }}\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  {% include 'partials/service-worker-meta.html.twig' %}
  <title>{% block title %}STJG{% endblock %}</title>
  {% block head %}
    {{ encore_entry_link_tags('app') }}
  {% endblock %}

    

</head>
<body class=\"admin-layout\">

  {% set route_name = app.request.get('_route') %}

  <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm\" id=\"primary-navbar\">
    <div class=\"container-fluid\">
      
      <a class=\"navbar-brand ms-3 me-5\" href=\"{{ path('reporting') }}\" style=\"font-size: 1.5; font-weight: 800; color: #0075b9;\">
       <img src=\"{{ asset('assets/img/logo-stjg.png') }}\" alt=\"STJG\" class=\"d-inline-block align-text-top\" height=\"60\">
       
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

        {# if is_granted('ROLE_CHAUFFEUR') #}  
        {% if 'ROLE_CHAUFFEUR' in app.user.getroles()  %}
          <li class=\"nav-item\">
            <a
              href=\"{{ path('reporting_trajets') }}\"
              class=\"nav-link{{ route_name == 'reporting_trajets' ? ' active' }}\"
            >
              <i class=\"bi bi-calendar-check\"></i>
                {{ \"Trajets\"|trans }}
            </a>
          </li> 
          <li class=\"nav-item\">
            <a
              href=\"{{ path('reservation_entries') }}\"
              class=\"nav-link{{ route_name == 'reservation_entries' ? ' active' }}\"
            >
              <i class=\"bi bi-clock\"></i>
                {{ \"Pointage\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
                <a
                  href=\"{{ path('annonces') }}\"
                  class=\"nav-link{{ route_name == 'annonces' ? ' active' }}\"
                >
                  <i class=\"bi bi-megaphone\"></i>
                  {{ \"Annonces\"|trans }}
                </a>
          </li>

          {% endif %}
          
        {% if is_granted('ROLE_ADMIN') %}  
          <li class=\"nav-item\">
            <a
              href=\"{{ path('reservations') }}\"
              class=\"nav-link{{ route_name == 'reservations' ? ' active' }}\"
            >
              <i class=\"bi bi-calendar-check\"></i>
                {{ \"Pré-réservations\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a
              href=\"{{ path('reservation_entries') }}\"
              class=\"nav-link{{ route_name == 'reservation_entries' ? ' active' }}\"
            >
              <i class=\"bi bi-clock\"></i>
                {{ \"Réservations\"|trans }}
            </a>
          </li>
         {% endif %}
         {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER')  %}  
          <li class=\"nav-item\">
            <a
              href=\"{{ path('navettes') }}\"
              class=\"nav-link{{ route_name == 'navettes' ? ' active' }}\"
            >
              <i class=\"bi bi-truck\"></i>
                {{ \"Navettes\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a
              href=\"{{ path('users') }}\"
              class=\"nav-link{{ route_name == 'users' ? ' active' }}\"
            >
              <i class=\"bi bi-people\"></i>
                {{ \"Utilisateurs\"|trans }}
            </a>
          </li>

            <li class=\"nav-item\">
            <a
              href=\"{{ path('reporting') }}\"
              class=\"nav-link{{ route_name == 'reporting' ? ' active' }}\"
            >
              <i class=\"bi bi-people\"></i>
                {{ \"Reporting\"|trans }}
            </a>
          </li>

         <!-- <li class=\"nav-item\">
                <a
                  href=\"{{ path('reclamations') }}\"
                  class=\"nav-link{{ route_name == 'reclamations' ? ' active' }}\"
                >
                  <i class=\"bi bi-question-circle\"></i>
                  {{ \"Réclamations\"|trans }}
                </a>
          </li>
          <li class=\"nav-item\">
                <a
                  href=\"{{ path('annonces') }}\"
                  class=\"nav-link{{ route_name == 'annonces' ? ' active' }}\"
                >
                  <i class=\"bi bi-megaphone\"></i>
                  {{ \"Annonces\"|trans }}
                </a>
          </li>-->


        {% endif %}



         {% if 'ROLE_USER' in app.user.getroles()  %}
        
        <li class=\"nav-item\">
            <a
              href=\"{{ path('reservations') }}\"
              class=\"nav-link{{ route_name == 'reservations' ? ' active' }}\"
            >
              <i class=\"bi bi-calendar-check\"></i>
                {{ \"Pré-réservations\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a
              href=\"{{ path('reservation_entries') }}\"
              class=\"nav-link{{ route_name == 'reservation_entries' ? ' active' }}\"
            >
              <i class=\"bi bi-clock\"></i>
                {{ \"Réservations\"|trans }}
            </a>
          </li>
         <!-- <li class=\"nav-item\">
                <a
                  href=\"{{ path('reclamations') }}\"
                  class=\"nav-link{{ route_name == 'reclamations' ? ' active' }}\"
                >
                  <i class=\"bi bi-question-circle\"></i>
                  {{ \"Réclamations\"|trans }}
                </a>
          </li>
          <li class=\"nav-item\">
                <a
                  href=\"{{ path('annonces') }}\"
                  class=\"nav-link{{ route_name == 'annonces' ? ' active' }}\"
                >
                  <i class=\"bi bi-megaphone\"></i>
                  {{ \"Annonces\"|trans }}
                </a>
          </li>
          <li class=\"nav-item\">
                <a href=\"tel:0800005991\" onclick=\"return confirm('Etes vous sure de voir déclencher l\\'alerte ?');\"
                  class=\"text-danger nav-link{{ route_name == 'reclamations' ? ' active' }}\"
                >
                  <i class=\"bi bi-phone-vibrate text-danger\"></i>
                  {{ \"SOS Button\"|trans }}
                </a>
          </li>-->

        {% endif %}

        <!--  <li class=\"nav-item\">
            <a
              href=\"{{ path('reporting') }}\"
              class=\"nav-link{{ route_name == 'reporting' ? ' active' }}\"
            >
              <i class=\"bi bi-clipboard-data\"></i>
              {{ \"Reporting\"|trans }}
            </a>
          </li>-->
           
          
          {% endblock %}
          {% if is_granted('ROLE_ADMIN') %}
          <li class=\"d-block d-lg-none\">
            <hr class=\"dropdown-divider\">
          </li>
          

          <li class=\"nav-item d-block d-lg-none\">
                <a href=\"{{ path('vehicules') }}\" class=\"nav-link{{ route_name == 'vehicules' ? ' active' }}\">
                 <i class=\"bi bi-truck\"></i>
                 {{ \"Véhicules\"|trans }}
                </a>
          </li>

          <li class=\"nav-item  d-block d-lg-none\">
                <a href=\"{{ path('trajets') }}\" class=\"nav-link{{ route_name == 'trajets' ? ' active'}}\">
                  <i class=\"bi bi-signpost\"></i>
                  {{ \"Trajets\"|trans }}
                </a>
          </li>

          <li class=\"nav-item d-block d-lg-none\">
                <a href=\"{{ path('tarifs') }}\" class=\"nav-link{{ route_name == 'tarifs' ? ' active' }}\">
                 <i class=\"bi bi-currency-dollar\"></i>
                 {{ \"Tarif\"|trans }}
                </a>
          </li>

          <li class=\"nav-item  d-block d-lg-none\">
                <a href=\"{{ path('pickups') }}\" class=\"nav-link{{ route_name == 'pickups' ? ' active'}}\">
                  <i class=\"bi bi-pin-map\"></i>
                  {{ \"Points de ramassage\"|trans }}
                </a>
          </li>

          <li class=\"nav-item  d-block d-lg-none\">
                <a href=\"{{ path('shifts') }}\" class=\"nav-link{{ route_name == 'shifts' ? ' active'}}\">
                  <i class=\"bi bi-clock\"></i>
                  {{ \"Shifts\"|trans }}
                </a>
          </li>

          <li class=\"nav-item d-block d-lg-none\">
                <a href=\"{{ path('users') }}\" class=\"nav-link{{ route_name == 'users' ? ' active' }}\">
                 <i class=\"bi bi-people\"></i>
                 {{ \"Utilisateurs\"|trans }}
                </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
                <a href=\"{{ path('societes') }}\" class=\"nav-link{{ route_name == 'societes' ? ' active' }}\">
                 <i class=\"bi bi-building\"></i>
                 {{ \"Sociétés\"|trans }}
                </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"{{ path('mail.history') }}\" class=\"nav-link{{ route_name == 'mail.history' ? ' active' }}\">
              <i class=\"bi bi-envelope-open\"></i>
              {{ \"Emails\"|trans }}
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"{{ path('cronjobs') }}\" class=\"nav-link{{ route_name == 'cronjobs' ? ' active' }}\">
              <i class=\"bi bi-lightning\"></i>
              {{ \"Cron Jobs\"|trans }}
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"{{ path('settings') }}\" class=\"nav-link{{ route_name == 'settings' ? ' active' }}\">
              <i class=\"bi bi-gear\"></i>
              {{ \"settings\"|trans }}
            </a>
          </li>
          <li class=\"d-block\">
            <hr class=\"dropdown-divider\">
          </li>
          {% endif %}
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"{{ path('user.details', {id: app.user.getId()}) }}\" class=\"nav-link\">
              <i class=\"bi bi-person\"></i>
              {{ \"Mon compte\"|trans }}
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a class=\"nav-link\" href=\"{{ path('logout') }}\">
              <i class=\"bi bi-box-arrow-left\"></i>
              {{ \"Se déconnecter\"|trans }}
            </a>
          </li>
        </ul>
        <!-- user menu -->
        <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 d-none d-lg-block\">
          <li class=\"nav-item dropdown dropdown-account\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"user-account\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              <span class=\"bg-secondary text-white rounded-circle fs-5\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"{{ app.user.getFullName() }}\" style=\"width: 53px; height: 50px; display: block; text-align: center; padding: 11px 0px;\">{{ app.user.getShortName() }}</span>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-lg-end\" aria-labelledby=\"user-account\">
              {% if is_granted('ROLE_ADMIN') %}
              <li>
                <a href=\"{{ path('societes') }}\" class=\"dropdown-item{{ route_name == 'societes' ? ' active' }}\">
                 <i class=\"bi bi-building\"></i>
                 {{ \"Sociétés\"|trans }}
                </a>
              </li>
              <li>
                <a href=\"{{ path('sites') }}\" class=\"dropdown-item{{ route_name == 'sites' ? ' active' }}\">
                 <i class=\"bi bi-house\"></i>
                 {{ \"Sites\"|trans }}
                </a>
              </li>
              <li>
                <a href=\"{{ path('users') }}\" class=\"dropdown-item{{ route_name == 'users' ? ' active' }}\">
                 <i class=\"bi bi-people\"></i>
                 {{ \"Utilisateurs\"|trans }}
                </a>
              </li>
              
             <li>
                <a href=\"{{ path('vehicules') }}\" class=\"dropdown-item{{ route_name == 'vehicules' ? ' active' }}\">
                 <i class=\"bi bi-truck\"></i>
                 {{ \"Véhicules\"|trans }}
                </a>
              </li>
              <li>
                <a href=\"{{ path('trajets') }}\" class=\"dropdown-item{{ route_name == 'trajets' ? ' active'}}\">
                  <i class=\"bi bi-signpost\"></i>
                  {{ \"Trajets\"|trans }}
                </a>
              </li>

              <li>
                <a href=\"{{ path('tarifs') }}\" class=\"dropdown-item{{ route_name == 'tarifs' ? ' active'}}\">
                  <i class=\"bi bi-currency-dollar\"></i>
                  {{ \"Tarif\"|trans }}
                </a>
              </li>

              <li>
                <a href=\"{{ path('pickups') }}\" class=\"dropdown-item{{ route_name == 'pickups' ? ' active'}}\">
                  <i class=\"bi bi-pin-map\"></i>
                  {{ \"Pickups\"|trans }}
                </a>
              </li>

          <li>
                <a href=\"{{ path('shifts') }}\" class=\"dropdown-item{{ route_name == 'shifts' ? ' active'}}\">
                  <i class=\"bi bi-clock\"></i>
                  {{ \"Shifts\"|trans }}
                </a>
          </li>
              
              <li>
                <a
                  href=\"{{ path('mail.history') }}\"
                  class=\"dropdown-item{{ route_name == 'mail.history' ? ' active' }}\"
                >
                  <i class=\"bi bi-envelope-open\"></i>
                  {{ \"Emails\"|trans }}
                </a>
              </li>
              <li>
                <a
                  href=\"{{ path('cronjobs') }}\"
                  class=\"dropdown-item{{ route_name == 'cronjobs' ? ' active' }}\"
                >
                  <i class=\"bi bi-lightning\"></i>
                  {{ \"Cron Jobs\"|trans }}
                </a>
              </li>
              <li>
                <a
                  href=\"{{ path('settings') }}\"
                  class=\"dropdown-item{{ route_name == 'settings' ? ' active' }}\"
                >
                  <i class=\"bi bi-gear\"></i>
                  {{ \"Settings\"|trans }}
                </a>
              </li>
              <li class=\"d-block\">
                <hr class=\"dropdown-divider\">
              </li>
              {% endif %}
              <li>
                
                <a href=\"{{ path('user.details', {id: app.user.getId()}) }}\" class=\"dropdown-item\" >
                <i class=\"bi bi-person\"></i>
                  {{ \"Mon compte\"|trans }}
                </a>
        
              </li>
              <li>
                <a class=\"dropdown-item\" href=\"{{ path('logout') }}\">
                  <i class=\"bi bi-box-arrow-left\"></i>
                  {{ \"Se déconneter\"|trans }}
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  {% include 'partials/sidebar.html.twig' %}

  <div class=\"container-fluid my-4 px-4\">
    {% include 'layout/alert.html.twig' %}
    {% block body %}{% endblock %}
  </div>

  {% block footer %}
    {{ encore_entry_script_tags('app') }}
    {% include 'partials/webpush.html.twig' %}
    {% include 'partials/service-worker-script.html.twig' %}
  {% endblock %}

</body>
</html>
", "layout/admin.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\layout\\admin.html.twig");
    }
}
