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
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start');
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
        yield ">
          ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "trajet_entree", [], "any", false, false, false, 51), 'row');
        yield "
        </div>
        <div id=\"div_pickup_entree\" ";
        // line 53
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 53, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 53, $this->source); })()), "isHomePickup", [], "any", false, false, false, 53))) {
            yield "style=\"display:none;\" ";
        }
        yield ">
          ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "pickup_entree", [], "any", false, false, false, 54), 'row');
        yield "
        </div>
        <div id=\"div_adresse_entree\" ";
        // line 56
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), "isHomePickup", [], "any", false, false, false, 56) != 1))) {
            yield "style=\"display:none;\" ";
        }
        yield ">
          ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "adresse_entree", [], "any", false, false, false, 57), 'row');
        yield "
        </div>
        ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "repere_entree", [], "any", true, true, false, 59)) {
            yield " 
          ";
            // line 60
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "repere_entree", [], "any", false, false, false, 60), 'row');
            yield "
        ";
        }
        // line 62
        yield "      </div>
      
      <div class=\"col-sm-6\">
        <h3 class=\"btn btn-danger text-withe\">SORTIE</h3> 
        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "dates_sortie", [], "any", false, false, false, 66), 'row');
        yield "
        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "shift_sortie", [], "any", false, false, false, 67), 'row');
        yield " 
        <div id=\"div_trajet_sortie\" ";
        // line 68
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 68, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 68, $this->source); })()), "isHomePickup", [], "any", false, false, false, 68))) {
            yield "style=\"display:none\" ";
        }
        yield ">
          ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "trajet_sortie", [], "any", false, false, false, 69), 'row');
        yield "
        </div>
        <div id=\"div_pickup_sortie\" ";
        // line 71
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 71, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 71, $this->source); })()), "isHomePickup", [], "any", false, false, false, 71))) {
            yield "style=\"display:none\" ";
        }
        yield ">
          ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "pickup_sortie", [], "any", false, false, false, 72), 'row');
        yield "
        </div>
        <div id=\"div_adresse_sortie\" ";
        // line 74
        if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 74, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 74, $this->source); })()), "isHomePickup", [], "any", false, false, false, 74) != 1))) {
            yield "style=\"display:none;\" ";
        }
        yield ">
          ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "adresse_sortie", [], "any", false, false, false, 75), 'row');
        yield "
        </div>
        ";
        // line 77
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "repere_sortie", [], "any", true, true, false, 77)) {
            yield " 
          ";
            // line 78
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "repere_sortie", [], "any", false, false, false, 78), 'row');
            yield "
        ";
        }
        // line 80
        yield "      </div>
    </div>
    
    <hr class=\"border-2 border-top border-secondary\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" onclick=\"history.go(-1);\">
      <i class=\"bi bi-x-lg\"></i>
      ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annuler"), "html", null, true);
        yield "
    </button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\">
      <i class=\"bi bi-check2-square\"></i>
      ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enregistrer"), "html", null, true);
        yield "
    </button>

    ";
        // line 93
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        yield "
  </ajax-form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 98
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

        // line 99
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\" type=\"text/javascript\"></script>
 
  <script>
  document.querySelector(\"ajax-form\").addEventListener(\"ajax.form.success\", function() {
    setTimeout(function() {
      window.location.href = '";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservations");
        yield "'
    }, 1000)
  })
  </script>

  <script>
  console.log(\"aaa\")
  \$(document).ready(function() {
    // Initialize validation states


const disabledDates = ";
        // line 117
        yield json_encode((isset($context["disabledDates"]) || array_key_exists("disabledDates", $context) ? $context["disabledDates"] : (function () { throw new RuntimeError('Variable "disabledDates" does not exist.', 117, $this->source); })()));
        yield ";
  console.log(disabledDates)
  // Disable checkboxes for the specified dates
  function disableWeekendCheckboxes() {
    // Process all entree date inputs
    for (let i = 0; i <= 6; i++) {
      const entrieCheckbox = document.getElementById('reservation_dates_entree_' + i);
      if (entrieCheckbox) {
        const dateValue = entrieCheckbox.value;
        if (disabledDates.includes(dateValue)) {
          entrieCheckbox.disabled = true;
          entrieCheckbox.checked = false;
          const label = entrieCheckbox.closest('label');
          if (label) {
            label.style.opacity = '0.5';
            label.title = 'Reservations not available for weekends and Mondays after Friday 1 PM';
          }
        }
      }
    }
    
    // Process all sortie date inputs
    for (let i = 0; i <= 6; i++) {
      const sortieCheckbox = document.getElementById('reservation_dates_sortie_' + i);
      if (sortieCheckbox) {
        const dateValue = sortieCheckbox.value;
        if (disabledDates.includes(dateValue)) {
          sortieCheckbox.disabled = true;
          sortieCheckbox.checked = false;
          const label = sortieCheckbox.closest('label');
          if (label) {
            label.style.opacity = '0.5';
            label.title = 'Reservations not available for weekends and Mondays after Friday 1 PM';
          }
        }
      }
    }
  }
  
  // Run the function on page load
  disableWeekendCheckboxes();



    let entreeSelected = false;
    let sortieSelected = false;
    
    
    // Function to update required fields based on selection state and visibility
    function updateRequiredFields() {
      // Check shift values
      let shiftEntree = \$('#reservation_shift_entree').val();
      let shiftSortie = \$('#reservation_shift_sortie').val();
      
      // Set required for visible entree fields
      if (entreeSelected) {
        \$('#reservation_shift_entree').attr('required', 'required');
        
        if (shiftEntree) {
          if (shiftEntree < 8 || shiftEntree > 20) {
            // Only address is required, trajet/pickup are not
            \$('#reservation_adresse_entree').attr('required', 'required');
            \$('#reservation_trajet_entree, #reservation_pickup_entree').removeAttr('required');
          } else {
            // Only trajet/pickup are required, address is not
            \$('#reservation_trajet_entree, #reservation_pickup_entree').attr('required', 'required');
            \$('#reservation_adresse_entree').removeAttr('required');
          }
        } else {
          // If no shift selected yet, make all potentially visible
          \$('#reservation_adresse_entree, #reservation_trajet_entree, #reservation_pickup_entree').attr('required', 'required');
        }
      } else if (!sortieSelected) {
        // Neither entree nor sortie selected, all fields required
        \$('#reservation_shift_entree').attr('required', 'required');
        if (shiftEntree) {
          if (shiftEntree < 8 || shiftEntree > 20) {
            \$('#reservation_adresse_entree').attr('required', 'required');
            \$('#reservation_trajet_entree, #reservation_pickup_entree').removeAttr('required');
          } else {
            \$('#reservation_trajet_entree, #reservation_pickup_entree').attr('required', 'required');
            \$('#reservation_adresse_entree').removeAttr('required');
          }
        } else {
          \$('#reservation_adresse_entree, #reservation_trajet_entree, #reservation_pickup_entree').attr('required', 'required');
        }
      } else {
        // Only sortie selected, entree not required
        \$('#reservation_shift_entree, #reservation_trajet_entree, #reservation_pickup_entree, #reservation_adresse_entree').removeAttr('required');
      }
      
      // Set required for visible sortie fields
      if (sortieSelected) {
        \$('#reservation_shift_sortie').attr('required', 'required');
        
        if (shiftSortie) {
          if (shiftSortie < 8 || shiftSortie > 20) {
            // Only address is required, trajet/pickup are not
            \$('#reservation_adresse_sortie').attr('required', 'required');
            \$('#reservation_trajet_sortie, #reservation_pickup_sortie').removeAttr('required');
          } else {
            // Only trajet/pickup are required, address is not
            \$('#reservation_trajet_sortie, #reservation_pickup_sortie').attr('required', 'required');
            \$('#reservation_adresse_sortie').removeAttr('required');
          }
        } else {
          // If no shift selected yet, make all potentially visible
          \$('#reservation_adresse_sortie, #reservation_trajet_sortie, #reservation_pickup_sortie').attr('required', 'required');
        }
      } else if (!entreeSelected) {
        // Neither sortie nor entree selected, all fields required
        \$('#reservation_shift_sortie').attr('required', 'required');
        if (shiftSortie) {
          if (shiftSortie < 8 || shiftSortie > 20) {
            \$('#reservation_adresse_sortie').attr('required', 'required');
            \$('#reservation_trajet_sortie, #reservation_pickup_sortie').removeAttr('required');
          } else {
            \$('#reservation_trajet_sortie, #reservation_pickup_sortie').attr('required', 'required');
            \$('#reservation_adresse_sortie').removeAttr('required');
          }
        } else {
          \$('#reservation_adresse_sortie, #reservation_trajet_sortie, #reservation_pickup_sortie').attr('required', 'required');
        }
      } else {
        // Only entree selected, sortie not required
        \$('#reservation_shift_sortie, #reservation_trajet_sortie, #reservation_pickup_sortie, #reservation_adresse_sortie').removeAttr('required');
      }
    }
    
    // Check if any entree date is selected
    function checkEntreeDates() {
      for (let i = 0; i <= 6; i++) {
        if (\$('#reservation_dates_entree_' + i).is(':checked')) {
          return true;
        }
      }
      return false;
    }
    
    // Check if any sortie date is selected
    function checkSortieDates() {
      for (let i = 0; i <= 6; i++) {
        if (\$('#reservation_dates_sortie_' + i).is(':checked')) {
          return true;
        }
      }
      return false;
    }
    
    // Event listener for entree date changes
    for (let i = 0; i <= 6; i++) {
      \$('#reservation_dates_entree_' + i).change(function() {
        \$('#reservation_shift_entree').prop('disabled', false);
        entreeSelected = checkEntreeDates();
        updateRequiredFields();
      });
    }
    
    // Event listener for sortie date changes
    for (let i = 0; i <= 6; i++) {
      \$('#reservation_dates_sortie_' + i).change(function() {
        \$('#reservation_shift_sortie').prop('disabled', false);
        sortieSelected = checkSortieDates();
        updateRequiredFields();
      });
    }
    
    // Update validation on page load
    entreeSelected = checkEntreeDates();
    sortieSelected = checkSortieDates();
    updateRequiredFields();
    
    // Toggle fields based on shift selection for entree
    \$('#reservation_shift_entree').change(function() {
      let shift_entree = \$(this).val();
      if (shift_entree < 8 || shift_entree > 20) {
        // Show address field, hide trajet/pickup
        \$('#div_trajet_entree').hide();
        \$('#div_pickup_entree').hide();
        \$('#div_adresse_entree').show();
        
        // Update required attributes - only adresse is required
        if (entreeSelected || !sortieSelected) {
          \$('#reservation_adresse_entree').attr('required', 'required');
          \$('#reservation_trajet_entree, #reservation_pickup_entree').removeAttr('required');
        }
      } else {
        // Show trajet/pickup fields, hide address
        \$('#div_trajet_entree').show();
        \$('#div_pickup_entree').show();
        \$('#div_adresse_entree').hide();
        
        // Update required attributes - only trajet/pickup are required
        if (entreeSelected || !sortieSelected) {
          \$('#reservation_trajet_entree, #reservation_pickup_entree').attr('required', 'required');
          \$('#reservation_adresse_entree').removeAttr('required');
        }
      }
      updateRequiredFields();
    });
    
    // Toggle fields based on shift selection for sortie
    \$('#reservation_shift_sortie').change(function() {
      let shift_sortie = \$(this).val();
      if (shift_sortie < 8 || shift_sortie > 20) {
        // Show address field, hide trajet/pickup
        \$('#div_trajet_sortie').hide();
        \$('#div_pickup_sortie').hide();
        \$('#div_adresse_sortie').show();
        
        // Update required attributes - only adresse is required
        if (sortieSelected || !entreeSelected) {
          \$('#reservation_adresse_sortie').attr('required', 'required');
          \$('#reservation_trajet_sortie, #reservation_pickup_sortie').removeAttr('required');
        }
      } else {
        // Show trajet/pickup fields, hide address
        \$('#div_trajet_sortie').show();
        \$('#div_pickup_sortie').show();
        \$('#div_adresse_sortie').hide();
        
        // Update required attributes - only trajet/pickup are required
        if (sortieSelected || !entreeSelected) {
          \$('#reservation_trajet_sortie, #reservation_pickup_sortie').attr('required', 'required');
          \$('#reservation_adresse_sortie').removeAttr('required');
        }
      }
      updateRequiredFields();
    });
    
    // Update pickup options based on trajet selection for entree
    \$('#reservation_trajet_entree').change(function() {
      let trajet_id = \$(this).val();
      var selectElement = document.getElementById('reservation_pickup_entree');
      var options = selectElement.options;
      
      for (var i = 0; i < options.length; i++) {
        var option = options[i];
        var customAttribute = option.getAttribute('data-trajet') ? parseInt(option.getAttribute('data-trajet')) : 0;
        
        if (customAttribute == trajet_id) {
          \$(option).css(\"display\", \"block\");
        } else {
          \$(option).css(\"display\", \"none\");
        }
      }
    });
    
    // Update pickup options based on trajet selection for sortie
    \$('#reservation_trajet_sortie').change(function() {
      let trajet_id = \$(this).val();
      var selectElement = document.getElementById('reservation_pickup_sortie');
      var options = selectElement.options;
      
      for (var i = 0; i < options.length; i++) {
        var option = options[i];
        var customAttribute = option.getAttribute('data-trajet') ? parseInt(option.getAttribute('data-trajet')) : 0;
        
        if (customAttribute == trajet_id) {
          \$(option).css(\"display\", \"block\");
        } else {
          \$(option).css(\"display\", \"none\");
        }
      }
    });
    
    // Form submission validation
    \$('form').submit(function(e) {
      // Check if at least one date is selected
      if (!entreeSelected && !sortieSelected) {
        alert('Please select at least one date for entree or sortie');
        e.preventDefault();
        return false;
      }
      
      // Validate entree fields if entree date is selected
      if (entreeSelected) {
        let shiftEntree = \$('#reservation_shift_entree').val();
        if (!shiftEntree) {
          alert('Please select a shift for entree');
          e.preventDefault();
          return false;
        }
        
        if (shiftEntree >= 8 && shiftEntree <= 20) {
          let trajetEntree = \$('#reservation_trajet_entree').val();
          let pickupEntree = \$('#reservation_pickup_entree').val();
          
          if (!trajetEntree) {
            alert('Please select a trajet for entree');
            e.preventDefault();
            return false;
          }
          
          if (!pickupEntree) {
            alert('Please select a pickup for entree');
            e.preventDefault();
            return false;
          }
        } else {
          let adresseEntree = \$('#reservation_adresse_entree').val();
          if (!adresseEntree) {
            alert('Please enter an address for entree');
            e.preventDefault();
            return false;
          }
        }
      }
      
      // Validate sortie fields if sortie date is selected
      if (sortieSelected) {
        let shiftSortie = \$('#reservation_shift_sortie').val();
        if (!shiftSortie) {
          alert('Please select a shift for sortie');
          e.preventDefault();
          return false;
        }
        
        if (shiftSortie >= 8 && shiftSortie <= 20) {
          let trajetSortie = \$('#reservation_trajet_sortie').val();
          let pickupSortie = \$('#reservation_pickup_sortie').val();
          
          if (!trajetSortie) {
            alert('Please select a trajet for sortie');
            e.preventDefault();
            return false;
          }
          
          if (!pickupSortie) {
            alert('Please select a pickup for sortie');
            e.preventDefault();
            return false;
          }
        } else {
          let adresseSortie = \$('#reservation_adresse_sortie').val();
          if (!adresseSortie) {
            alert('Please enter an address for sortie');
            e.preventDefault();
            return false;
          }
        }
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
        return array (  317 => 117,  303 => 106,  292 => 99,  279 => 98,  264 => 93,  258 => 90,  251 => 86,  243 => 80,  238 => 78,  234 => 77,  229 => 75,  223 => 74,  218 => 72,  212 => 71,  207 => 69,  201 => 68,  197 => 67,  193 => 66,  187 => 62,  182 => 60,  178 => 59,  173 => 57,  167 => 56,  162 => 54,  156 => 53,  151 => 51,  145 => 50,  141 => 49,  137 => 48,  129 => 43,  96 => 12,  90 => 10,  84 => 8,  82 => 7,  77 => 4,  64 => 3,  41 => 1,);
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
        <div id=\"div_trajet_entree\" {% if entity and entity.isHomePickup %}style=\"display:none;\" {% endif %}>
          {{ form_row(form.trajet_entree) }}
        </div>
        <div id=\"div_pickup_entree\" {% if entity and entity.isHomePickup %}style=\"display:none;\" {% endif %}>
          {{ form_row(form.pickup_entree) }}
        </div>
        <div id=\"div_adresse_entree\" {% if entity and entity.isHomePickup!=1 %}style=\"display:none;\" {% endif %}>
          {{ form_row(form.adresse_entree) }}
        </div>
        {% if form.repere_entree is defined %} 
          {{ form_row(form.repere_entree) }}
        {% endif %}
      </div>
      
      <div class=\"col-sm-6\">
        <h3 class=\"btn btn-danger text-withe\">SORTIE</h3> 
        {{ form_row(form.dates_sortie) }}
        {{ form_row(form.shift_sortie) }} 
        <div id=\"div_trajet_sortie\" {% if entity and entity.isHomePickup %}style=\"display:none\" {% endif %}>
          {{ form_row(form.trajet_sortie) }}
        </div>
        <div id=\"div_pickup_sortie\" {% if entity and entity.isHomePickup %}style=\"display:none\" {% endif %}>
          {{ form_row(form.pickup_sortie) }}
        </div>
        <div id=\"div_adresse_sortie\" {% if entity and entity.isHomePickup!=1 %}style=\"display:none;\" {% endif %}>
          {{ form_row(form.adresse_sortie) }}
        </div>
        {% if form.repere_sortie is defined %} 
          {{ form_row(form.repere_sortie) }}
        {% endif %}
      </div>
    </div>
    
    <hr class=\"border-2 border-top border-secondary\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" onclick=\"history.go(-1);\">
      <i class=\"bi bi-x-lg\"></i>
      {{ \"Annuler\"|trans }}
    </button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\">
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
  console.log(\"aaa\")
  \$(document).ready(function() {
    // Initialize validation states


const disabledDates = {{ disabledDates|json_encode|raw }};
  console.log(disabledDates)
  // Disable checkboxes for the specified dates
  function disableWeekendCheckboxes() {
    // Process all entree date inputs
    for (let i = 0; i <= 6; i++) {
      const entrieCheckbox = document.getElementById('reservation_dates_entree_' + i);
      if (entrieCheckbox) {
        const dateValue = entrieCheckbox.value;
        if (disabledDates.includes(dateValue)) {
          entrieCheckbox.disabled = true;
          entrieCheckbox.checked = false;
          const label = entrieCheckbox.closest('label');
          if (label) {
            label.style.opacity = '0.5';
            label.title = 'Reservations not available for weekends and Mondays after Friday 1 PM';
          }
        }
      }
    }
    
    // Process all sortie date inputs
    for (let i = 0; i <= 6; i++) {
      const sortieCheckbox = document.getElementById('reservation_dates_sortie_' + i);
      if (sortieCheckbox) {
        const dateValue = sortieCheckbox.value;
        if (disabledDates.includes(dateValue)) {
          sortieCheckbox.disabled = true;
          sortieCheckbox.checked = false;
          const label = sortieCheckbox.closest('label');
          if (label) {
            label.style.opacity = '0.5';
            label.title = 'Reservations not available for weekends and Mondays after Friday 1 PM';
          }
        }
      }
    }
  }
  
  // Run the function on page load
  disableWeekendCheckboxes();



    let entreeSelected = false;
    let sortieSelected = false;
    
    
    // Function to update required fields based on selection state and visibility
    function updateRequiredFields() {
      // Check shift values
      let shiftEntree = \$('#reservation_shift_entree').val();
      let shiftSortie = \$('#reservation_shift_sortie').val();
      
      // Set required for visible entree fields
      if (entreeSelected) {
        \$('#reservation_shift_entree').attr('required', 'required');
        
        if (shiftEntree) {
          if (shiftEntree < 8 || shiftEntree > 20) {
            // Only address is required, trajet/pickup are not
            \$('#reservation_adresse_entree').attr('required', 'required');
            \$('#reservation_trajet_entree, #reservation_pickup_entree').removeAttr('required');
          } else {
            // Only trajet/pickup are required, address is not
            \$('#reservation_trajet_entree, #reservation_pickup_entree').attr('required', 'required');
            \$('#reservation_adresse_entree').removeAttr('required');
          }
        } else {
          // If no shift selected yet, make all potentially visible
          \$('#reservation_adresse_entree, #reservation_trajet_entree, #reservation_pickup_entree').attr('required', 'required');
        }
      } else if (!sortieSelected) {
        // Neither entree nor sortie selected, all fields required
        \$('#reservation_shift_entree').attr('required', 'required');
        if (shiftEntree) {
          if (shiftEntree < 8 || shiftEntree > 20) {
            \$('#reservation_adresse_entree').attr('required', 'required');
            \$('#reservation_trajet_entree, #reservation_pickup_entree').removeAttr('required');
          } else {
            \$('#reservation_trajet_entree, #reservation_pickup_entree').attr('required', 'required');
            \$('#reservation_adresse_entree').removeAttr('required');
          }
        } else {
          \$('#reservation_adresse_entree, #reservation_trajet_entree, #reservation_pickup_entree').attr('required', 'required');
        }
      } else {
        // Only sortie selected, entree not required
        \$('#reservation_shift_entree, #reservation_trajet_entree, #reservation_pickup_entree, #reservation_adresse_entree').removeAttr('required');
      }
      
      // Set required for visible sortie fields
      if (sortieSelected) {
        \$('#reservation_shift_sortie').attr('required', 'required');
        
        if (shiftSortie) {
          if (shiftSortie < 8 || shiftSortie > 20) {
            // Only address is required, trajet/pickup are not
            \$('#reservation_adresse_sortie').attr('required', 'required');
            \$('#reservation_trajet_sortie, #reservation_pickup_sortie').removeAttr('required');
          } else {
            // Only trajet/pickup are required, address is not
            \$('#reservation_trajet_sortie, #reservation_pickup_sortie').attr('required', 'required');
            \$('#reservation_adresse_sortie').removeAttr('required');
          }
        } else {
          // If no shift selected yet, make all potentially visible
          \$('#reservation_adresse_sortie, #reservation_trajet_sortie, #reservation_pickup_sortie').attr('required', 'required');
        }
      } else if (!entreeSelected) {
        // Neither sortie nor entree selected, all fields required
        \$('#reservation_shift_sortie').attr('required', 'required');
        if (shiftSortie) {
          if (shiftSortie < 8 || shiftSortie > 20) {
            \$('#reservation_adresse_sortie').attr('required', 'required');
            \$('#reservation_trajet_sortie, #reservation_pickup_sortie').removeAttr('required');
          } else {
            \$('#reservation_trajet_sortie, #reservation_pickup_sortie').attr('required', 'required');
            \$('#reservation_adresse_sortie').removeAttr('required');
          }
        } else {
          \$('#reservation_adresse_sortie, #reservation_trajet_sortie, #reservation_pickup_sortie').attr('required', 'required');
        }
      } else {
        // Only entree selected, sortie not required
        \$('#reservation_shift_sortie, #reservation_trajet_sortie, #reservation_pickup_sortie, #reservation_adresse_sortie').removeAttr('required');
      }
    }
    
    // Check if any entree date is selected
    function checkEntreeDates() {
      for (let i = 0; i <= 6; i++) {
        if (\$('#reservation_dates_entree_' + i).is(':checked')) {
          return true;
        }
      }
      return false;
    }
    
    // Check if any sortie date is selected
    function checkSortieDates() {
      for (let i = 0; i <= 6; i++) {
        if (\$('#reservation_dates_sortie_' + i).is(':checked')) {
          return true;
        }
      }
      return false;
    }
    
    // Event listener for entree date changes
    for (let i = 0; i <= 6; i++) {
      \$('#reservation_dates_entree_' + i).change(function() {
        \$('#reservation_shift_entree').prop('disabled', false);
        entreeSelected = checkEntreeDates();
        updateRequiredFields();
      });
    }
    
    // Event listener for sortie date changes
    for (let i = 0; i <= 6; i++) {
      \$('#reservation_dates_sortie_' + i).change(function() {
        \$('#reservation_shift_sortie').prop('disabled', false);
        sortieSelected = checkSortieDates();
        updateRequiredFields();
      });
    }
    
    // Update validation on page load
    entreeSelected = checkEntreeDates();
    sortieSelected = checkSortieDates();
    updateRequiredFields();
    
    // Toggle fields based on shift selection for entree
    \$('#reservation_shift_entree').change(function() {
      let shift_entree = \$(this).val();
      if (shift_entree < 8 || shift_entree > 20) {
        // Show address field, hide trajet/pickup
        \$('#div_trajet_entree').hide();
        \$('#div_pickup_entree').hide();
        \$('#div_adresse_entree').show();
        
        // Update required attributes - only adresse is required
        if (entreeSelected || !sortieSelected) {
          \$('#reservation_adresse_entree').attr('required', 'required');
          \$('#reservation_trajet_entree, #reservation_pickup_entree').removeAttr('required');
        }
      } else {
        // Show trajet/pickup fields, hide address
        \$('#div_trajet_entree').show();
        \$('#div_pickup_entree').show();
        \$('#div_adresse_entree').hide();
        
        // Update required attributes - only trajet/pickup are required
        if (entreeSelected || !sortieSelected) {
          \$('#reservation_trajet_entree, #reservation_pickup_entree').attr('required', 'required');
          \$('#reservation_adresse_entree').removeAttr('required');
        }
      }
      updateRequiredFields();
    });
    
    // Toggle fields based on shift selection for sortie
    \$('#reservation_shift_sortie').change(function() {
      let shift_sortie = \$(this).val();
      if (shift_sortie < 8 || shift_sortie > 20) {
        // Show address field, hide trajet/pickup
        \$('#div_trajet_sortie').hide();
        \$('#div_pickup_sortie').hide();
        \$('#div_adresse_sortie').show();
        
        // Update required attributes - only adresse is required
        if (sortieSelected || !entreeSelected) {
          \$('#reservation_adresse_sortie').attr('required', 'required');
          \$('#reservation_trajet_sortie, #reservation_pickup_sortie').removeAttr('required');
        }
      } else {
        // Show trajet/pickup fields, hide address
        \$('#div_trajet_sortie').show();
        \$('#div_pickup_sortie').show();
        \$('#div_adresse_sortie').hide();
        
        // Update required attributes - only trajet/pickup are required
        if (sortieSelected || !entreeSelected) {
          \$('#reservation_trajet_sortie, #reservation_pickup_sortie').attr('required', 'required');
          \$('#reservation_adresse_sortie').removeAttr('required');
        }
      }
      updateRequiredFields();
    });
    
    // Update pickup options based on trajet selection for entree
    \$('#reservation_trajet_entree').change(function() {
      let trajet_id = \$(this).val();
      var selectElement = document.getElementById('reservation_pickup_entree');
      var options = selectElement.options;
      
      for (var i = 0; i < options.length; i++) {
        var option = options[i];
        var customAttribute = option.getAttribute('data-trajet') ? parseInt(option.getAttribute('data-trajet')) : 0;
        
        if (customAttribute == trajet_id) {
          \$(option).css(\"display\", \"block\");
        } else {
          \$(option).css(\"display\", \"none\");
        }
      }
    });
    
    // Update pickup options based on trajet selection for sortie
    \$('#reservation_trajet_sortie').change(function() {
      let trajet_id = \$(this).val();
      var selectElement = document.getElementById('reservation_pickup_sortie');
      var options = selectElement.options;
      
      for (var i = 0; i < options.length; i++) {
        var option = options[i];
        var customAttribute = option.getAttribute('data-trajet') ? parseInt(option.getAttribute('data-trajet')) : 0;
        
        if (customAttribute == trajet_id) {
          \$(option).css(\"display\", \"block\");
        } else {
          \$(option).css(\"display\", \"none\");
        }
      }
    });
    
    // Form submission validation
    \$('form').submit(function(e) {
      // Check if at least one date is selected
      if (!entreeSelected && !sortieSelected) {
        alert('Please select at least one date for entree or sortie');
        e.preventDefault();
        return false;
      }
      
      // Validate entree fields if entree date is selected
      if (entreeSelected) {
        let shiftEntree = \$('#reservation_shift_entree').val();
        if (!shiftEntree) {
          alert('Please select a shift for entree');
          e.preventDefault();
          return false;
        }
        
        if (shiftEntree >= 8 && shiftEntree <= 20) {
          let trajetEntree = \$('#reservation_trajet_entree').val();
          let pickupEntree = \$('#reservation_pickup_entree').val();
          
          if (!trajetEntree) {
            alert('Please select a trajet for entree');
            e.preventDefault();
            return false;
          }
          
          if (!pickupEntree) {
            alert('Please select a pickup for entree');
            e.preventDefault();
            return false;
          }
        } else {
          let adresseEntree = \$('#reservation_adresse_entree').val();
          if (!adresseEntree) {
            alert('Please enter an address for entree');
            e.preventDefault();
            return false;
          }
        }
      }
      
      // Validate sortie fields if sortie date is selected
      if (sortieSelected) {
        let shiftSortie = \$('#reservation_shift_sortie').val();
        if (!shiftSortie) {
          alert('Please select a shift for sortie');
          e.preventDefault();
          return false;
        }
        
        if (shiftSortie >= 8 && shiftSortie <= 20) {
          let trajetSortie = \$('#reservation_trajet_sortie').val();
          let pickupSortie = \$('#reservation_pickup_sortie').val();
          
          if (!trajetSortie) {
            alert('Please select a trajet for sortie');
            e.preventDefault();
            return false;
          }
          
          if (!pickupSortie) {
            alert('Please select a pickup for sortie');
            e.preventDefault();
            return false;
          }
        } else {
          let adresseSortie = \$('#reservation_adresse_sortie').val();
          if (!adresseSortie) {
            alert('Please enter an address for sortie');
            e.preventDefault();
            return false;
          }
        }
      }
    });
  });
  </script>
{% endblock %}", "admin/reservation/form.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\reservation\\form.html.twig");
    }
}
