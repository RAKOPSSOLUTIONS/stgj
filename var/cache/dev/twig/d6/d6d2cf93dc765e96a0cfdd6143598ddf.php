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

/* admin/reportings/index.html.twig */
class __TwigTemplate_278c8ea13dd94e7ae350a5bfb5feec33 extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "layout/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reportings/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reportings/index.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/reportings/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        if (CoreExtension::inFilter("ROLE_CHAUFFEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "getroles", [], "method", false, false, false, 5))) {
            // line 6
            yield "
<div class=\"row mt-3\">

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
        <i class=\"bi bi-signpost fs-1\"></i>
        <span class=\"fs-4 text-uppercase text-center\"><a href=\"";
            // line 13
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reporting_trajets");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trajets"), "html", null, true);
            yield "</a></span>
      </div>
    </div>
  </div>

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
        <i class=\"bi bi-clock fs-1\"></i>
        <span class=\"fs-4 text-uppercase text-center\"><a href=\"";
            // line 22
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pointage"), "html", null, true);
            yield "</a></span>
      </div>
    </div>
  </div>

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
        <i class=\"bi bi-megaphone fs-1\"></i>
        <span class=\"fs-4 text-uppercase text-center\"><a href=\"";
            // line 31
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annonces"), "html", null, true);
            yield "</a></span>
      </div>
    </div>
  </div>

</div>

";
        } else {
            // line 39
            yield "<div class=\"row\">
  <div class=\"col-sm-12\">
    <h1 class=\"page-name\">
      <i class=\"bi bi-clipboard-data\"></i>
      ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reporting"), "html", null, true);
            yield "
    </h1>
  </div>
</div>

 <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
 <div class=\"card-body d-flex flex-column align-items-center\">

<form method=\"get\" action=\"\" class=\"row mb-3\">
  <div class=\"col-md-6\">
    <label for=\"startDate\" class=\"form-label\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date de début"), "html", null, true);
            yield "</label>
    <input type=\"date\" id=\"startDate\" name=\"startDate\" class=\"form-control\">
  </div>
  <div class=\"col-md-6\">
    <label for=\"endDate\" class=\"form-label\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date de fin"), "html", null, true);
            yield "</label>
    <input type=\"date\" id=\"endDate\" name=\"endDate\" class=\"form-control\">
  </div>
</form>

<div class=\"row mt-3\">

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
       
        <span class=\"fs-5 text-uppercase text-center\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Historique des inscrits"), "html", null, true);
            yield "</span>
  
      </div>
    </div>
  </div>

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
    
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"";
            // line 79
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Historique des désinscrits"), "html", null, true);
            yield "</a>
        </span>
      </div>
    </div>
  </div>


  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
      
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"";
            // line 91
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Planning journalier"), "html", null, true);
            yield "</a>
        </span>
      </div>
    </div>
  </div>


  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
    
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"";
            // line 103
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamations");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Planning journalier Réel"), "html", null, true);
            yield "</a>
        </span>
      </div>
    </div>
  </div>



  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
      
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"";
            // line 116
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pointage des navettes"), "html", null, true);
            yield "</a>
        </span>
      </div>
    </div>
  </div>


  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
      
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"";
            // line 128
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pointage des navettes annulées"), "html", null, true);
            yield "</a>
        </span>
      </div>
    </div>
  </div>

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
  
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"";
            // line 139
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Planning des circuits journalier"), "html", null, true);
            yield "</a>
        </span>
      </div>
    </div>
  </div>




</div>



";
        }
        // line 153
        yield "
</div>











 <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
 <div class=\"card-body d-flex flex-column align-items-center\">



<div class=\"row mt-3\">

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
       
        <span class=\"fs-5 text-uppercase text-center\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Base de l'effectif"), "html", null, true);
        yield "</span>
    
      </div>
    </div>
  </div>

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
    
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Base des adhérents "), "html", null, true);
        yield "</a>
        </span>
      </div>
    </div>
  </div>


  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
      
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"";
        // line 200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tranches horaires actives "), "html", null, true);
        yield "</a>
        </span>
      </div>
    </div>
  </div>


  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
    
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"";
        // line 212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamations");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Zones et points d’arrêt actives"), "html", null, true);
        yield "</a>
        </span>
      </div>
    </div>
  </div>


 




</div>



</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 233
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

        // line 234
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
  <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
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
        return "admin/reportings/index.html.twig";
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
        return array (  407 => 234,  394 => 233,  361 => 212,  344 => 200,  327 => 188,  313 => 177,  287 => 153,  268 => 139,  252 => 128,  235 => 116,  217 => 103,  200 => 91,  183 => 79,  169 => 68,  155 => 57,  148 => 53,  135 => 43,  129 => 39,  116 => 31,  102 => 22,  88 => 13,  79 => 6,  77 => 5,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'layout/admin.html.twig' %}

{% block body %}
{% if 'ROLE_CHAUFFEUR' in app.user.getroles() %}

<div class=\"row mt-3\">

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
        <i class=\"bi bi-signpost fs-1\"></i>
        <span class=\"fs-4 text-uppercase text-center\"><a href=\"{{ path('reporting_trajets') }}\">{{ \"Trajets\"|trans }}</a></span>
      </div>
    </div>
  </div>

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
        <i class=\"bi bi-clock fs-1\"></i>
        <span class=\"fs-4 text-uppercase text-center\"><a href=\"{{ path('reservation_entries') }}\">{{ \"Pointage\"|trans }}</a></span>
      </div>
    </div>
  </div>

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
        <i class=\"bi bi-megaphone fs-1\"></i>
        <span class=\"fs-4 text-uppercase text-center\"><a href=\"{{ path('annonces') }}\">{{ \"Annonces\"|trans }}</a></span>
      </div>
    </div>
  </div>

</div>

{% else %}
<div class=\"row\">
  <div class=\"col-sm-12\">
    <h1 class=\"page-name\">
      <i class=\"bi bi-clipboard-data\"></i>
      {{ \"Reporting\"|trans }}
    </h1>
  </div>
</div>

 <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
 <div class=\"card-body d-flex flex-column align-items-center\">

<form method=\"get\" action=\"\" class=\"row mb-3\">
  <div class=\"col-md-6\">
    <label for=\"startDate\" class=\"form-label\">{{ \"Date de début\"|trans }}</label>
    <input type=\"date\" id=\"startDate\" name=\"startDate\" class=\"form-control\">
  </div>
  <div class=\"col-md-6\">
    <label for=\"endDate\" class=\"form-label\">{{ \"Date de fin\"|trans }}</label>
    <input type=\"date\" id=\"endDate\" name=\"endDate\" class=\"form-control\">
  </div>
</form>

<div class=\"row mt-3\">

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
       
        <span class=\"fs-5 text-uppercase text-center\">{{ \"Historique des inscrits\"|trans }}</span>
  
      </div>
    </div>
  </div>

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
    
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"{{ path('reservation_entries') }}\">{{ \"Historique des désinscrits\"|trans }}</a>
        </span>
      </div>
    </div>
  </div>


  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
      
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"{{ path('reservation_entries') }}\">{{ \"Planning journalier\"|trans }}</a>
        </span>
      </div>
    </div>
  </div>


  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
    
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"{{ path('reclamations') }}\">{{ \"Planning journalier Réel\"|trans }}</a>
        </span>
      </div>
    </div>
  </div>



  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
      
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"{{ path('annonces') }}\">{{ \"Pointage des navettes\"|trans }}</a>
        </span>
      </div>
    </div>
  </div>


  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
      
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"{{ path('annonces') }}\">{{ \"Pointage des navettes annulées\"|trans }}</a>
        </span>
      </div>
    </div>
  </div>

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
  
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"{{ path('annonces') }}\">{{ \"Planning des circuits journalier\"|trans }}</a>
        </span>
      </div>
    </div>
  </div>




</div>



{% endif %}

</div>











 <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
 <div class=\"card-body d-flex flex-column align-items-center\">



<div class=\"row mt-3\">

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
       
        <span class=\"fs-5 text-uppercase text-center\">{{ \"Base de l'effectif\"|trans }}</span>
    
      </div>
    </div>
  </div>

  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
    
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"{{ path('reservation_entries') }}\">{{ \"Base des adhérents \"|trans }}</a>
        </span>
      </div>
    </div>
  </div>


  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
      
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"{{ path('reservation_entries') }}\">{{ \"Tranches horaires actives \"|trans }}</a>
        </span>
      </div>
    </div>
  </div>


  <div class=\"col\">
    <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
    
        <span class=\"fs-5 text-uppercase text-center\">
          <a href=\"{{ path('reclamations') }}\">{{ \"Zones et points d’arrêt actives\"|trans }}</a>
        </span>
      </div>
    </div>
  </div>


 




</div>



</div>


{% endblock %}

{% block footer %}
  {{ parent() }}
  <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
{% endblock %}
", "admin/reportings/index.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\reportings\\index.html.twig");
    }
}
