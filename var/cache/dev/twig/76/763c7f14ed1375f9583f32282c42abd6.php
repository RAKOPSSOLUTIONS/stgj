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

/* layout/form/type/ajax-upload.html.twig */
class __TwigTemplate_b77cba0e1133debb3d90e8f4cc324274 extends Template
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
            'ajax_upload_widget' => [$this, 'block_ajax_upload_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/form/type/ajax-upload.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/form/type/ajax-upload.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('ajax_upload_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ajax_upload_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ajax_upload_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ajax_upload_widget"));

        // line 2
        yield "  <ajax-upload 
    name=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        yield "\"
    min=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "min", [], "any", false, false, false, 4), "html", null, true);
        yield "\" 
    max=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "max", [], "any", false, false, false, 5), "html", null, true);
        yield "\" 
    path=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "path", [], "any", false, false, false, 6), "html", null, true);
        yield "\"
  >
    <div class=\"row\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "files", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 10
            yield "      <div class=\"col-sm-3 col-6 ps-1 mb-3 file-item\">
        <div class=\"card\">
          <a href=\"/uploads/";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 12), "html", null, true);
            yield "\" target=\"_blank\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "name", [], "any", false, false, false, 12), "html", null, true);
            yield "\">
            ";
            // line 13
            $context["extension"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 13), ".")));
            // line 14
            yield "            ";
            if (CoreExtension::inFilter((isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 14, $this->source); })()), ["jpeg", "jpg", "png", "gif"])) {
                // line 15
                yield "              <img src=\"/uploads/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 15), "html", null, true);
                yield "\" class=\"img-fluid\">
            ";
            } elseif (CoreExtension::inFilter(            // line 16
(isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 16, $this->source); })()), ["doc", "docx"])) {
                // line 17
                yield "              <i class=\"bi bi-file-word\"></i>
            ";
            } elseif (CoreExtension::inFilter(            // line 18
(isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 18, $this->source); })()), ["xls", "xlsx"])) {
                // line 19
                yield "              <i class=\"bi bi-file-excel\"></i>
            ";
            } elseif ((            // line 20
(isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 20, $this->source); })()) == "pdf")) {
                // line 21
                yield "              <i class=\"bi bi-file-pdf\"></i>
            ";
            } else {
                // line 23
                yield "              <i class=\"bi bi-file-richtext\"></i>
            ";
            }
            // line 25
            yield "          </a>
          <i class=\"bi bi-x-circle file-delete\"></i>
          <input type=\"hidden\" name=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            yield "[]\" value='";
            yield json_encode($context["file"]);
            yield "' />
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
      <div 
        class=\"col-sm-3 col-6 ps-1 mb-3 file-add\"
        ";
        // line 34
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "max", [], "any", false, false, false, 34) > 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "files", [], "any", false, false, false, 34)) >= CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "max", [], "any", false, false, false, 34)))) {
            yield "style=\"display:none;\"";
        }
        // line 35
        yield "      >
        <div class=\"card h-100\">
          <label class=\"btn h-100\" title=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sélectionner un fichier"), "html", null, true);
        yield "\">
            <input type=\"file\" accept=\".";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["extensions"]) || array_key_exists("extensions", $context) ? $context["extensions"] : (function () { throw new RuntimeError('Variable "extensions" does not exist.', 38, $this->source); })()), ",."), "html", null, true);
        yield "\" hidden />
            <i class=\"bi bi-plus\"></i>
            <span class=\"spinner-border\"></span>
          </label>
        </div>
      </div>
    </div>
  </ajax-upload>
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
        return "layout/form/type/ajax-upload.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  170 => 38,  166 => 37,  162 => 35,  158 => 34,  153 => 31,  141 => 27,  137 => 25,  133 => 23,  129 => 21,  127 => 20,  124 => 19,  122 => 18,  119 => 17,  117 => 16,  112 => 15,  109 => 14,  107 => 13,  101 => 12,  97 => 10,  93 => 9,  87 => 6,  83 => 5,  79 => 4,  75 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block ajax_upload_widget %}
  <ajax-upload 
    name=\"{{ form.vars.name }}\"
    min=\"{{ form.vars.min }}\" 
    max=\"{{ form.vars.max }}\" 
    path=\"{{ form.vars.path }}\"
  >
    <div class=\"row\">
      {% for file in form.vars.files %}
      <div class=\"col-sm-3 col-6 ps-1 mb-3 file-item\">
        <div class=\"card\">
          <a href=\"/uploads/{{ file.path }}\" target=\"_blank\" title=\"{{ file.name }}\">
            {% set extension = file.path|split('.')|last|lower %}
            {% if extension in ['jpeg', 'jpg', 'png', 'gif'] %}
              <img src=\"/uploads/{{ file.path }}\" class=\"img-fluid\">
            {% elseif extension in ['doc', 'docx'] %}
              <i class=\"bi bi-file-word\"></i>
            {% elseif extension in ['xls', 'xlsx'] %}
              <i class=\"bi bi-file-excel\"></i>
            {% elseif extension == \"pdf\" %}
              <i class=\"bi bi-file-pdf\"></i>
            {% else %}
              <i class=\"bi bi-file-richtext\"></i>
            {% endif %}
          </a>
          <i class=\"bi bi-x-circle file-delete\"></i>
          <input type=\"hidden\" name=\"{{ form.vars.name }}[]\" value='{{ file|json_encode|raw }}' />
        </div>
      </div>
      {% endfor %}

      <div 
        class=\"col-sm-3 col-6 ps-1 mb-3 file-add\"
        {% if form.vars.max > 0 and form.vars.files|length >= form.vars.max %}style=\"display:none;\"{% endif %}
      >
        <div class=\"card h-100\">
          <label class=\"btn h-100\" title=\"{{ \"Sélectionner un fichier\"|trans }}\">
            <input type=\"file\" accept=\".{{ extensions|join(',.') }}\" hidden />
            <i class=\"bi bi-plus\"></i>
            <span class=\"spinner-border\"></span>
          </label>
        </div>
      </div>
    </div>
  </ajax-upload>
{% endblock %}", "layout/form/type/ajax-upload.html.twig", "C:\\Users\\Hp\\Desktop\\stgj\\templates\\layout\\form\\type\\ajax-upload.html.twig");
    }
}
