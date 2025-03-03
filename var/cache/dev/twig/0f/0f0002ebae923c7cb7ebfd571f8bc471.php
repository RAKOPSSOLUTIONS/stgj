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

/* admin/societe/details.html.twig */
class __TwigTemplate_cccb4c8632d4594e6ffb5219fb4eb7d9 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/societe/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/societe/details.html.twig"));

        // line 1
        yield "<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td>";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo"), "html", null, true);
        yield "</td>
    <td><img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 4, $this->source); })()), "image", [], "any", false, false, false, 4)), "html", null, true);
        yield "\" class=\"d-inline-block align-text-top\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield "\" height=\"60\" /></td>
  </tr>
  <tr>
    <td>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom"), "html", null, true);
        yield "</td>
    <td>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Téléphone"), "html", null, true);
        yield "</td>
    <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 12, $this->source); })()), "telephone", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</td>
    <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adresse"), "html", null, true);
        yield "</td>
    <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 20, $this->source); })()), "adress", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type de réservation"), "html", null, true);
        yield "</td>
    <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 24, $this->source); })()), "typeReservation", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Délai de réservation"), "html", null, true);
        yield "</td>
    <td>";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 28, $this->source); })()), "deadline", [], "any", false, false, false, 28)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 28, $this->source); })()), "deadline", [], "any", false, false, false, 28), "H:i"), "html", null, true);
        }
        yield "</td>
  </tr>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/societe/details.html.twig";
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
        return array (  118 => 28,  114 => 27,  108 => 24,  104 => 23,  98 => 20,  94 => 19,  88 => 16,  84 => 15,  78 => 12,  74 => 11,  68 => 8,  64 => 7,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td>{{ \"Logo\"|trans }}</td>
    <td><img src=\"{{ asset(societe.image) }}\" class=\"d-inline-block align-text-top\" alt=\"{{ societe.name }}\" height=\"60\" /></td>
  </tr>
  <tr>
    <td>{{ \"Nom\"|trans }}</td>
    <td>{{ societe.name }}</td>
  </tr>
  <tr>
    <td>{{ \"Téléphone\"|trans }}</td>
    <td>{{ societe.telephone }}</td>
  </tr>
  <tr>
    <td>{{ \"Email\"|trans }}</td>
    <td>{{ societe.email }}</td>
  </tr>
  <tr>
    <td>{{ \"Adresse\"|trans }}</td>
    <td>{{ societe.adress }}</td>
  </tr>
  <tr>
    <td>{{ \"Type de réservation\"|trans }}</td>
    <td>{{ societe.typeReservation }}</td>
  </tr>
  <tr>
    <td>{{ \"Délai de réservation\"|trans }}</td>
    <td>{% if societe.deadline %}{{ societe.deadline|date(\"H:i\") }}{% endif %}</td>
  </tr>
</table>", "admin/societe/details.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\admin\\societe\\details.html.twig");
    }
}
