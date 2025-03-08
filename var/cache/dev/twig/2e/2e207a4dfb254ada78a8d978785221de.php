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

/* admin/reservation_entries/form.html.twig */
class __TwigTemplate_aa077ec2cc1e91819f3f4d771bee291d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation_entries/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation_entries/form.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/reservation_entries/form.html.twig", 1);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nouvelle réservation"), "html", null, true);
            yield "
    ";
        } else {
            // line 10
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Editer une réservation"), "html", null, true);
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

    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "reservation_heure", [], "any", false, false, false, 44), 'row');
        yield "


    <div id=\"div_trajet_entree\" ";
        // line 47
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 47, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 47, $this->source); })()), "isHomePickup", [], "any", false, false, false, 47))) {
            yield "style=\"display:none;\" ";
        }
        yield ">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "trajet", [], "any", false, false, false, 47), 'row');
        yield "</div>
    <div id=\"div_pickup_entree\" ";
        // line 48
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 48, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 48, $this->source); })()), "isHomePickup", [], "any", false, false, false, 48))) {
            yield "style=\"display:none;\" ";
        }
        yield ">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "pickup", [], "any", false, false, false, 48), 'row');
        yield "</div>
    <div id=\"div_adresse_entree\" ";
        // line 49
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "isHomePickup", [], "any", false, false, false, 49) != 1))) {
            yield "style=\"display:none;\" ";
        }
        yield ">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "adresse", [], "any", false, false, false, 49), 'row');
        yield "</div>
     
      ";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dureeUp", [], "any", true, true, false, 51)) {
            yield " ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "dureeUp", [], "any", false, false, false, 51), 'row');
        }
        // line 52
        yield "       ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heure_passage", [], "any", true, true, false, 52)) {
            yield " ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "heure_passage", [], "any", false, false, false, 52), 'row');
        }
        // line 53
        yield "
<hr class=\"border-2 border-top border-secondary\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" onclick=\"history.go(-1);\">
      <i class=\"bi bi-x-lg\"></i>
      ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annuler"), "html", null, true);
        yield "
    </button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none  \">
      <i class=\"bi bi-check2-square\"></i>
      ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enregistrer"), "html", null, true);
        yield "
    </button>

";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
        yield "
</ajax-form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
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

        // line 70
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\" type=\"text/javascript\"></script>
   
 
  <script>
  document.querySelector(\"ajax-form\").addEventListener(\"ajax.form.success\", function() {
    setTimeout(function() {
      window.location.href = '";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_entries");
        yield "'
    }, 1000)
  })
  </script>

    <script>

  \$('#reservation_entries_reservation_heure').change(function() {
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

    


   
</script>

<script>
  \$('#reservation_entries_trajet').change(function() {
    let trajet_id = \$(this).val();
    console.log(trajet_id);


    var selectElement = document.getElementById('reservation_entries_pickup');
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

  <script>
  \$('#reservation_trajet_entree').change(function() {

  let trajet = \$(this).val();
  console.log(trajet);

  \$(\"#reservation_pickup_entree > option\").each(function() {
    let pickup = \$(this).val();

    //ajax call

    if ( \$(this).attr('data-site') == category && \$(this).attr('data-direction') == direction ){
     \$(this).css(\"display\", \"block\");
    }
    else {
     \$(this).css(\"display\", \"none\");
    }
  }); 

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
        return "admin/reservation_entries/form.html.twig";
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
        return array (  234 => 78,  222 => 70,  209 => 69,  194 => 64,  188 => 61,  181 => 57,  175 => 53,  169 => 52,  164 => 51,  155 => 49,  147 => 48,  139 => 47,  133 => 44,  128 => 42,  96 => 12,  90 => 10,  84 => 8,  82 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}

  <h1 class=\"page-name\">
    <i class=\"bi bi-calendar-check\"></i>
    {% if not entity|length %}
      {{ \"Nouvelle réservation\"|trans }}
    {% else %}
      {{ \"Editer une réservation\"|trans }}
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

    {{ form_row(form.reservation_heure) }}


    <div id=\"div_trajet_entree\" {% if entity and entity.isHomePickup %}style=\"display:none;\" {% endif %}>{{ form_row(form.trajet) }}</div>
    <div id=\"div_pickup_entree\" {% if entity and entity.isHomePickup %}style=\"display:none;\" {% endif %}>{{ form_row(form.pickup) }}</div>
    <div id=\"div_adresse_entree\" {% if entity and entity.isHomePickup!=1 %}style=\"display:none;\" {% endif %}>{{ form_row(form.adresse) }}</div>
     
      {% if form.dureeUp is defined %} {{ form_row(form.dureeUp) }}{% endif %}
       {% if form.heure_passage is defined %} {{ form_row(form.heure_passage) }}{% endif %}

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
      window.location.href = '{{ path(\"reservation_entries\") }}'
    }, 1000)
  })
  </script>

    <script>

  \$('#reservation_entries_reservation_heure').change(function() {
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

    


   
</script>

<script>
  \$('#reservation_entries_trajet').change(function() {
    let trajet_id = \$(this).val();
    console.log(trajet_id);


    var selectElement = document.getElementById('reservation_entries_pickup');
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

  <script>
  \$('#reservation_trajet_entree').change(function() {

  let trajet = \$(this).val();
  console.log(trajet);

  \$(\"#reservation_pickup_entree > option\").each(function() {
    let pickup = \$(this).val();

    //ajax call

    if ( \$(this).attr('data-site') == category && \$(this).attr('data-direction') == direction ){
     \$(this).css(\"display\", \"block\");
    }
    else {
     \$(this).css(\"display\", \"none\");
    }
  }); 

   }); 
</script>

{% endblock %}
", "admin/reservation_entries/form.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\reservation_entries\\form.html.twig");
    }
}
