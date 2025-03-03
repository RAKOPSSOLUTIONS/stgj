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

/* admin/reservation/form.html.twig */
class __TwigTemplate_dbdf8e7ed6e55e90f15c6f78b3ed6f36 extends Template
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
        // line 1
        return "layout/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/form.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/reservation/form.html.twig", 1);
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
  <h1 class=\"page-name\">
    <i class=\"bi bi-calendar-check\"></i>
    ";
        // line 7
        if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()))) {
            // line 8
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nouvelle pré-réservation"), "html", null, true);
            yield "
    ";
        } else {
            // line 10
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Editer une pré-réservation"), "html", null, true);
            yield "
    ";
        }
        // line 12
        yield "  </h1>
<br />
<style>
  .port-title {
    background-color: #6c757d !important;
  }
  fieldset .col-form-label {
    margin-bottom: 8px;
  }
  .card-entry fieldset {
    margin-bottom: 0px !important;
  }
  .delete-entry {
    right: 15px;
  }
  .entries {
    counter-reset: compagne_counter;
  }
  .compagne-counter:before {
    counter-increment: compagne_counter;
    content: counter(compagne_counter);
    position: absolute;
    top: 5px;
    right: 45px;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--color-primary);
  }
</style>
 <ajax-form>
 ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start');
        yield "

    
<div class=\"row\">
  <div class=\"col-sm-6\">
    <h3 class=\"btn btn-danger text-withe\">ENTREE</h3> 
    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "dates_entree", [], "any", false, false, false, 48), 'row');
        yield "
    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "shift_entree", [], "any", false, false, false, 49), 'row');
        yield " 
    <div id=\"div_trajet_entree\" ";
        // line 50
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()), "isHomePickup", [], "any", false, false, false, 50))) {
            yield "style=\"display:none;\" ";
        }
        yield ">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "trajet_entree", [], "any", false, false, false, 50), 'row');
        yield "</div>
    <div id=\"div_pickup_entree\" ";
        // line 51
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 51, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 51, $this->source); })()), "isHomePickup", [], "any", false, false, false, 51))) {
            yield "style=\"display:none;\" ";
        }
        yield ">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "pickup_entree", [], "any", false, false, false, 51), 'row');
        yield "</div>
    <div id=\"div_adresse_entree\" ";
        // line 52
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })()), "isHomePickup", [], "any", false, false, false, 52) != 1))) {
            yield "style=\"display:none;\" ";
        }
        yield ">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "adresse_entree", [], "any", false, false, false, 52), 'row');
        yield "</div>
    ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "repere_entree", [], "any", true, true, false, 53)) {
            yield " ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "repere_entree", [], "any", false, false, false, 53), 'row');
        }
        // line 54
        yield "    

  </div>
  <div class=\"col-sm-6\">
    <h3 class=\"btn btn-danger text-withe\">SORTIE</h3> 
     ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "dates_sortie", [], "any", false, false, false, 59), 'row');
        yield "
     ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "shift_sortie", [], "any", false, false, false, 60), 'row');
        yield " 
    <div id=\"div_trajet_sortie\" ";
        // line 61
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 61, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 61, $this->source); })()), "isHomePickup", [], "any", false, false, false, 61))) {
            yield "style=\"display:none\" ";
        }
        yield ">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "trajet_sortie", [], "any", false, false, false, 61), 'row');
        yield " </div>
    <div id=\"div_pickup_sortie\" ";
        // line 62
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 62, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 62, $this->source); })()), "isHomePickup", [], "any", false, false, false, 62))) {
            yield "style=\"display:none\" ";
        }
        yield ">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "pickup_sortie", [], "any", false, false, false, 62), 'row');
        yield " </div>
    <div id=\"div_adresse_sortie\" ";
        // line 63
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })()), "isHomePickup", [], "any", false, false, false, 63) != 1))) {
            yield "style=\"display:none;\" ";
        }
        yield ">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "adresse_sortie", [], "any", false, false, false, 63), 'row');
        yield "</div>
    ";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "repere_sortie", [], "any", true, true, false, 64)) {
            yield " ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "repere_sortie", [], "any", false, false, false, 64), 'row');
        }
        // line 65
        yield "   
  </div>
</div>
    
<hr class=\"border-2 border-top border-secondary\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" onclick=\"history.go(-1);\">
      <i class=\"bi bi-x-lg\"></i>
      ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annuler"), "html", null, true);
        yield "
    </button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none  \">
      <i class=\"bi bi-check2-square\"></i>
      ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enregistrer"), "html", null, true);
        yield "
    </button>

";
        // line 79
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        yield "
</ajax-form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
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

        // line 85
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\" type=\"text/javascript\"></script>
 
 
  <script>
  document.querySelector(\"ajax-form\").addEventListener(\"ajax.form.success\", function() {
    setTimeout(function() {
      window.location.href = '";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservations");
        yield "'
    }, 1000)
  })
  </script>

  <script>

  \$('#reservation_shift_entree').change(function() {
    let shift_entree = \$(this).val();
    console.log(shift_entree);
    if ( shift_entree < 8 || shift_entree > 20 ){
      console.log('show adresse and hide trajet');
      \$('#div_trajet_entree').hide();
      \$('#div_pickup_entree').hide();
      \$('#div_adresse_entree').show();
    }
    else{
      console.log('show trajet and hide adress');
      \$('#div_trajet_entree').show();
      \$('#div_pickup_entree').show();
      \$('#div_adresse_entree').hide();
    }
   }); 

   \$('#reservation_shift_sortie').change(function() {
    let shift_sortie = \$(this).val();
    console.log(shift_sortie);
    if ( shift_sortie < 8 || shift_sortie > 20 ){
      console.log('show adresse and hide trajet');
      \$('#div_trajet_sortie').hide();
      \$('#div_pickup_sortie').hide();
      \$('#div_adresse_sortie').show();
    }
    else{
      console.log('show trajet and hide adress');
      \$('#div_trajet_sortie').show();
      \$('#div_pickup_sortie').show();
      \$('#div_adresse_sortie').hide();
    }
   }); 


   
</script>
 
<script>


//var array = document.getElementsByTagName(\"input\");

 if ( \$('#reservation_dates_entree_0') ){
   \$('#reservation_dates_entree_0').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_entree_1') ){
   \$('#reservation_dates_entree_1').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_entree_2') ){
   \$('#reservation_dates_entree_2').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_entree_3') ){
   \$('#reservation_dates_entree_3').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_entree_4') ){
   \$('#reservation_dates_entree_4').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_entree_5') ){
   \$('#reservation_dates_entree_5').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_entree_6') ){
   \$('#reservation_dates_entree_6').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_0') ){
   \$('#reservation_dates_sortie_0').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_1') ){
   \$('#reservation_dates_sortie_1').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_2') ){
   \$('#reservation_dates_sortie_2').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_3') ){
   \$('#reservation_dates_sortie_3').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_4') ){
   \$('#reservation_dates_sortie_4').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_5') ){
   \$('#reservation_dates_sortie_5').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_6') ){
   \$('#reservation_dates_sortie_6').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }
 


  \$('#reservation_trajet_entree').change(function() {
    let trajet_id = \$(this).val();
    console.log(trajet_id);


    var selectElement = document.getElementById('reservation_pickup_entree');
    var options = selectElement.options;

    for (var i = 0; i < options.length; i++) {
      var option = options[i];
      var customAttribute = option.getAttribute('data-trajet') ? parseInt(option.getAttribute('data-trajet')) : 0;
      console.log('Option value:', option.value, 'Custom Attribute:', customAttribute);
      if ( customAttribute == trajet_id ){
       \$(option).css(\"display\", \"block\");
      }
      else {
       \$(option).css(\"display\", \"none\");
      }
    }
   }); 

   \$('#reservation_trajet_sortie').change(function() {
    let trajet_id = \$(this).val();
    console.log(trajet_id);

    var selectElement = document.getElementById('reservation_pickup_sortie');
    var options = selectElement.options;

    for (var i = 0; i < options.length; i++) {
      var option = options[i];
      var customAttribute = option.getAttribute('data-trajet') ? parseInt(option.getAttribute('data-trajet')) : 0;
      console.log('Option value:', option.value, 'Custom Attribute:', customAttribute);
      if ( customAttribute == trajet_id ){
       \$(option).css(\"display\", \"block\");
      }
      else {
       \$(option).css(\"display\", \"none\");
      }
    }
   }); 
</script>

 

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
        return "admin/reservation/form.html.twig";
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
        return array (  280 => 93,  268 => 85,  255 => 84,  240 => 79,  234 => 76,  227 => 72,  218 => 65,  213 => 64,  205 => 63,  197 => 62,  189 => 61,  185 => 60,  181 => 59,  174 => 54,  169 => 53,  161 => 52,  153 => 51,  145 => 50,  141 => 49,  137 => 48,  128 => 42,  96 => 12,  90 => 10,  84 => 8,  82 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}

  <h1 class=\"page-name\">
    <i class=\"bi bi-calendar-check\"></i>
    {% if not entity|length %}
      {{ \"Nouvelle pré-réservation\"|trans }}
    {% else %}
      {{ \"Editer une pré-réservation\"|trans }}
    {% endif %}
  </h1>
<br />
<style>
  .port-title {
    background-color: #6c757d !important;
  }
  fieldset .col-form-label {
    margin-bottom: 8px;
  }
  .card-entry fieldset {
    margin-bottom: 0px !important;
  }
  .delete-entry {
    right: 15px;
  }
  .entries {
    counter-reset: compagne_counter;
  }
  .compagne-counter:before {
    counter-increment: compagne_counter;
    content: counter(compagne_counter);
    position: absolute;
    top: 5px;
    right: 45px;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--color-primary);
  }
</style>
 <ajax-form>
 {{ form_start(form) }}

    
<div class=\"row\">
  <div class=\"col-sm-6\">
    <h3 class=\"btn btn-danger text-withe\">ENTREE</h3> 
    {{ form_row(form.dates_entree) }}
    {{ form_row(form.shift_entree) }} 
    <div id=\"div_trajet_entree\" {% if entity and entity.isHomePickup %}style=\"display:none;\" {% endif %}>{{ form_row(form.trajet_entree) }}</div>
    <div id=\"div_pickup_entree\" {% if entity and entity.isHomePickup %}style=\"display:none;\" {% endif %}>{{ form_row(form.pickup_entree) }}</div>
    <div id=\"div_adresse_entree\" {% if entity and entity.isHomePickup!=1 %}style=\"display:none;\" {% endif %}>{{ form_row(form.adresse_entree) }}</div>
    {% if form.repere_entree is defined %} {{ form_row(form.repere_entree) }}{% endif %}
    

  </div>
  <div class=\"col-sm-6\">
    <h3 class=\"btn btn-danger text-withe\">SORTIE</h3> 
     {{ form_row(form.dates_sortie) }}
     {{ form_row(form.shift_sortie) }} 
    <div id=\"div_trajet_sortie\" {% if entity and entity.isHomePickup %}style=\"display:none\" {% endif %}>{{ form_row(form.trajet_sortie) }} </div>
    <div id=\"div_pickup_sortie\" {% if entity and entity.isHomePickup %}style=\"display:none\" {% endif %}>{{ form_row(form.pickup_sortie) }} </div>
    <div id=\"div_adresse_sortie\" {% if entity and entity.isHomePickup!=1 %}style=\"display:none;\" {% endif %}>{{ form_row(form.adresse_sortie) }}</div>
    {% if form.repere_sortie is defined %} {{ form_row(form.repere_sortie) }}{% endif %}
   
  </div>
</div>
    
<hr class=\"border-2 border-top border-secondary\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" onclick=\"history.go(-1);\">
      <i class=\"bi bi-x-lg\"></i>
      {{ \"Annuler\"|trans }}
    </button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none  \">
      <i class=\"bi bi-check2-square\"></i>
      {{ \"Enregistrer\"|trans }}
    </button>

{{ form_end(form) }}
</ajax-form>

{% endblock %}

{% block footer %}
  {{ parent() }}
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\" type=\"text/javascript\"></script>
 
 
  <script>
  document.querySelector(\"ajax-form\").addEventListener(\"ajax.form.success\", function() {
    setTimeout(function() {
      window.location.href = '{{ path(\"reservations\") }}'
    }, 1000)
  })
  </script>

  <script>

  \$('#reservation_shift_entree').change(function() {
    let shift_entree = \$(this).val();
    console.log(shift_entree);
    if ( shift_entree < 8 || shift_entree > 20 ){
      console.log('show adresse and hide trajet');
      \$('#div_trajet_entree').hide();
      \$('#div_pickup_entree').hide();
      \$('#div_adresse_entree').show();
    }
    else{
      console.log('show trajet and hide adress');
      \$('#div_trajet_entree').show();
      \$('#div_pickup_entree').show();
      \$('#div_adresse_entree').hide();
    }
   }); 

   \$('#reservation_shift_sortie').change(function() {
    let shift_sortie = \$(this).val();
    console.log(shift_sortie);
    if ( shift_sortie < 8 || shift_sortie > 20 ){
      console.log('show adresse and hide trajet');
      \$('#div_trajet_sortie').hide();
      \$('#div_pickup_sortie').hide();
      \$('#div_adresse_sortie').show();
    }
    else{
      console.log('show trajet and hide adress');
      \$('#div_trajet_sortie').show();
      \$('#div_pickup_sortie').show();
      \$('#div_adresse_sortie').hide();
    }
   }); 


   
</script>
 
<script>


//var array = document.getElementsByTagName(\"input\");

 if ( \$('#reservation_dates_entree_0') ){
   \$('#reservation_dates_entree_0').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_entree_1') ){
   \$('#reservation_dates_entree_1').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_entree_2') ){
   \$('#reservation_dates_entree_2').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_entree_3') ){
   \$('#reservation_dates_entree_3').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_entree_4') ){
   \$('#reservation_dates_entree_4').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_entree_5') ){
   \$('#reservation_dates_entree_5').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_entree_6') ){
   \$('#reservation_dates_entree_6').change(function() {
     \$('#reservation_shift_entree').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_0') ){
   \$('#reservation_dates_sortie_0').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_1') ){
   \$('#reservation_dates_sortie_1').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_2') ){
   \$('#reservation_dates_sortie_2').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_3') ){
   \$('#reservation_dates_sortie_3').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_4') ){
   \$('#reservation_dates_sortie_4').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_5') ){
   \$('#reservation_dates_sortie_5').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }

 if ( \$('#reservation_dates_sortie_6') ){
   \$('#reservation_dates_sortie_6').change(function() {
     \$('#reservation_shift_sortie').prop('disabled', false);
   }); 
 }
 


  \$('#reservation_trajet_entree').change(function() {
    let trajet_id = \$(this).val();
    console.log(trajet_id);


    var selectElement = document.getElementById('reservation_pickup_entree');
    var options = selectElement.options;

    for (var i = 0; i < options.length; i++) {
      var option = options[i];
      var customAttribute = option.getAttribute('data-trajet') ? parseInt(option.getAttribute('data-trajet')) : 0;
      console.log('Option value:', option.value, 'Custom Attribute:', customAttribute);
      if ( customAttribute == trajet_id ){
       \$(option).css(\"display\", \"block\");
      }
      else {
       \$(option).css(\"display\", \"none\");
      }
    }
   }); 

   \$('#reservation_trajet_sortie').change(function() {
    let trajet_id = \$(this).val();
    console.log(trajet_id);

    var selectElement = document.getElementById('reservation_pickup_sortie');
    var options = selectElement.options;

    for (var i = 0; i < options.length; i++) {
      var option = options[i];
      var customAttribute = option.getAttribute('data-trajet') ? parseInt(option.getAttribute('data-trajet')) : 0;
      console.log('Option value:', option.value, 'Custom Attribute:', customAttribute);
      if ( customAttribute == trajet_id ){
       \$(option).css(\"display\", \"block\");
      }
      else {
       \$(option).css(\"display\", \"none\");
      }
    }
   }); 
</script>

 

{% endblock %}
", "admin/reservation/form.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\admin\\reservation\\form.html.twig");
    }
}
