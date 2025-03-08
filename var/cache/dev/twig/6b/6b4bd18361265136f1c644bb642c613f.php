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

/* admin/category/form.html.twig */
class __TwigTemplate_448c2803d1f8466a786ac8bc09aff661 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/form.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/category/form.html.twig", 1);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nouvelle option"), "html", null, true);
            yield "
    ";
        } else {
            // line 10
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Editer une option"), "html", null, true);
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
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), 'row');
        yield "
    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "site", [], "any", false, false, false, 46), 'row');
        yield "
    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "direction", [], "any", false, false, false, 47), 'row');
        yield "
    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "category", [], "any", false, false, false, 48), 'row');
        yield "
    <div class=\"col\">
        <div class=\"mb-3\">
          <label class=\"form-label\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trajet"), "html", null, true);
        yield "</label>
          <select id=\"trajet\" name=\"trajet\" class=\"trajet form-select\">
            <option value=\"\" class=\"prompt\">Sélectionner un trajet</option>
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 55
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "name", [], "any", false, false, false, 55), "html", null, true);
            yield "\" data-site=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "site", [], "any", false, false, false, 55), "html", null, true);
            yield "\" data-direction=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "direction", [], "any", false, false, false, 55), "html", null, true);
            yield "\" ";
            yield ((((isset($context["current_trajet"]) || array_key_exists("current_trajet", $context) ? $context["current_trajet"] : (function () { throw new RuntimeError('Variable "current_trajet" does not exist.', 55, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "name", [], "any", false, false, false, 55))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "name", [], "any", false, false, false, 55), "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trajet'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "          </select>
        </div>
      </div>

    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "status", [], "any", false, false, false, 61), 'row');
        yield "



<hr class=\"border-2 border-top border-secondary\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" onclick=\"history.go(-1);\">
      <i class=\"bi bi-x-lg\"></i>
      ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annuler"), "html", null, true);
        yield "
    </button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none  \">
      <i class=\"bi bi-check2-square\"></i>
      ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enregistrer"), "html", null, true);
        yield "
    </button>

";
        // line 75
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        yield "
</ajax-form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
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

        // line 81
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\" type=\"text/javascript\"></script>
   
 
  <script>
  document.querySelector(\"ajax-form\").addEventListener(\"ajax.form.success\", function() {
    setTimeout(function() {
      window.location.href = '";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        yield "'
    }, 1000)
  })
  </script>

  <script>

  \$('#category_site').change(function() {

  let category = \$(this).val();
  let direction = \$('#category_direction').val();

  \$(\"#trajet > option\").each(function() {
    if ( \$(this).attr('data-site') == category && \$(this).attr('data-direction') == direction ){
     \$(this).css(\"display\", \"block\");
    }
    else {
     \$(this).css(\"display\", \"none\");
    }
  }); 

   }); 

  \$('#category_direction').change(function() {

  let direction = \$(this).val();
  let category = \$('#category_site').val();

  \$(\"#trajet > option\").each(function() {
    if ( \$(this).attr('data-direction') == direction && \$(this).attr('data-site') == category ){
     \$(this).css(\"display\", \"block\");
    }
    else{
     \$(this).css(\"display\", \"none\");
    }
    //check site 
    if ( \$(this).attr('data-site') == category && \$(this).attr('data-direction') == direction  ){
     \$(this).css(\"display\", \"block\");
    }
    else{
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
        return "admin/category/form.html.twig";
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
        return array (  248 => 89,  236 => 81,  223 => 80,  208 => 75,  202 => 72,  195 => 68,  185 => 61,  179 => 57,  162 => 55,  158 => 54,  152 => 51,  146 => 48,  142 => 47,  138 => 46,  134 => 45,  128 => 42,  96 => 12,  90 => 10,  84 => 8,  82 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}

  <h1 class=\"page-name\">
    <i class=\"bi bi-calendar-check\"></i>
    {% if not entity|length %}
      {{ \"Nouvelle option\"|trans }}
    {% else %}
      {{ \"Editer une option\"|trans }}
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

 
    {{ form_row(form.name) }}
    {{ form_row(form.site) }}
    {{ form_row(form.direction) }}
    {{ form_row(form.category) }}
    <div class=\"col\">
        <div class=\"mb-3\">
          <label class=\"form-label\">{{ \"Trajet\"|trans }}</label>
          <select id=\"trajet\" name=\"trajet\" class=\"trajet form-select\">
            <option value=\"\" class=\"prompt\">Sélectionner un trajet</option>
            {% for trajet in trajets %}
            <option value=\"{{ trajet.name }}\" data-site=\"{{ trajet.site }}\" data-direction=\"{{ trajet.direction }}\" {{ current_trajet==trajet.name ? 'selected' : '' }}>{{ trajet.name }}</option>
            {% endfor %}
          </select>
        </div>
      </div>

    {{ form_row(form.status) }}



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
      window.location.href = '{{ path(\"categories\") }}'
    }, 1000)
  })
  </script>

  <script>

  \$('#category_site').change(function() {

  let category = \$(this).val();
  let direction = \$('#category_direction').val();

  \$(\"#trajet > option\").each(function() {
    if ( \$(this).attr('data-site') == category && \$(this).attr('data-direction') == direction ){
     \$(this).css(\"display\", \"block\");
    }
    else {
     \$(this).css(\"display\", \"none\");
    }
  }); 

   }); 

  \$('#category_direction').change(function() {

  let direction = \$(this).val();
  let category = \$('#category_site').val();

  \$(\"#trajet > option\").each(function() {
    if ( \$(this).attr('data-direction') == direction && \$(this).attr('data-site') == category ){
     \$(this).css(\"display\", \"block\");
    }
    else{
     \$(this).css(\"display\", \"none\");
    }
    //check site 
    if ( \$(this).attr('data-site') == category && \$(this).attr('data-direction') == direction  ){
     \$(this).css(\"display\", \"block\");
    }
    else{
     \$(this).css(\"display\", \"none\");
    }
  }); 

   

  }); 



  

  </script>

{% endblock %}
", "admin/category/form.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\category\\form.html.twig");
    }
}
