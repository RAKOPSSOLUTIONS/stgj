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

/* admin/user/adhesion.html.twig */
class __TwigTemplate_2a3d0e76c5d84aba588dc8754f552f9e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/adhesion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/adhesion.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/user/adhesion.html.twig", 1);
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
    <div class=\"col-lg-10 col-9\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-people\"></i>
        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adhésion"), "html", null, true);
        yield "
      </h1>
      Contenu  de la charte d’utilisation

     <form action=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.adhesion");
        yield "\" method=\"post\" name=\"adhesion_form\">
      <div class=\"mb-3\">
      <label class=\"form-label\" for=\"user_adhesion\">
        <input type=\"checkbox\" name=\"adhesion\" id=\"user_adhesion\" value=\"1\" ";
        // line 16
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "adhesion", [], "any", false, false, false, 16) == 1)) {
            yield " checked=\"checked\"";
        }
        yield "> J'ai lu et j'accepte la charte 
      </label>
      </div>
      <div class=\"mb-3\">
        <input type=\"submit\" name=\"Valider\" value=\"Valider\" class=\"btn btn-primary\">
        <a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.details", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\" class=\"btn btn-danger\">Annuler</a>
      </div>

      <p><b>Pour activer votre adhésion, merci de cocher la case « J’ai lu et j’accepte la charte »</b></p>
      <p><b>Pour annuler votre adhésion, merci de décocher la case « J’ai lu et j’accepte la charte » puis cliquer sur valider</b></p>


     </form>
    </div>

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
        return "admin/user/adhesion.html.twig";
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
        return array (  106 => 21,  96 => 16,  90 => 13,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}
  
  <div class=\"row mb-4\">
    <div class=\"col-lg-10 col-9\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-people\"></i>
        {{ \"Adhésion\"|trans }}
      </h1>
      Contenu  de la charte d’utilisation

     <form action=\"{{ path('user.adhesion') }}\" method=\"post\" name=\"adhesion_form\">
      <div class=\"mb-3\">
      <label class=\"form-label\" for=\"user_adhesion\">
        <input type=\"checkbox\" name=\"adhesion\" id=\"user_adhesion\" value=\"1\" {% if user.adhesion==1 %} checked=\"checked\"{% endif %}> J'ai lu et j'accepte la charte 
      </label>
      </div>
      <div class=\"mb-3\">
        <input type=\"submit\" name=\"Valider\" value=\"Valider\" class=\"btn btn-primary\">
        <a href=\"{{ path('user.details', {id : user.id }) }}\" class=\"btn btn-danger\">Annuler</a>
      </div>

      <p><b>Pour activer votre adhésion, merci de cocher la case « J’ai lu et j’accepte la charte »</b></p>
      <p><b>Pour annuler votre adhésion, merci de décocher la case « J’ai lu et j’accepte la charte » puis cliquer sur valider</b></p>


     </form>
    </div>

{% endblock %}", "admin/user/adhesion.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\user\\adhesion.html.twig");
    }
}
