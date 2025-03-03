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

/* admin/reclamation/details.html.twig */
class __TwigTemplate_a1aa85fc77788a7c888dd286cd544935 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/details.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/reclamation/details.html.twig", 1);
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
    <div class=\"col-lg-8 col-8\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-question-circle\"></i>
        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Demande"), "html", null, true);
        yield "
      </h1>
    </div>
    <div class=\"col-lg-4 col-4\">
      <div class=\"float-end\">

        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demandes");
        yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-list\"></i>
        <span class=\"d-none d-lg-inline-block\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Liste"), "html", null, true);
        yield "</span>
        </a>

        ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 20, $this->source); })()), "status", [], "any", false, false, false, 20) != "Clôturée")) {
            yield " 

        <a href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande.update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
          <i class=\"bi bi-pencil-square\"></i>
          <span class=\"d-none d-lg-inline-block\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier"), "html", null, true);
            yield "</span>
        </a>

        ";
        }
        // line 28
        yield "
        <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande.create");
        yield "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-plus\"></i>
        <span class=\"d-none d-lg-inline-block\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ajouter"), "html", null, true);
        yield "</span>
        </a>

      </div>
    </div>
  </div>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"4\" class=\"styled-title mb-2\">
      <h3>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informations du demandeur"), "html", null, true);
        yield "</h3>
    </td>
  </tr>
  <tr>
    <td><b>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Société"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 46, $this->source); })()), "societe", [], "any", false, false, false, 46), "html", null, true);
        yield "</td>
    <td><b>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Demandeur"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td><b>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Direction"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "direction", [], "any", false, false, false, 52), "html", null, true);
        yield "</td>
    <td><b>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Poste"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "poste", [], "any", false, false, false, 54), "html", null, true);
        yield "</td>
  </tr>
</table>
<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"4\" class=\"styled-title mb-2\">
      <h3>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informations de la demande"), "html", null, true);
        yield "</h3>
    </td>
  </tr>
  <tr>
    <td><b>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Objet"), "html", null, true);
        yield "</b></td>
    <td colspan=\"3\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 65, $this->source); })()), "title", [], "any", false, false, false, 65), "html", null, true);
        yield "</td>
  </tr>
  <tr>
    <td><b>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Direction"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 69, $this->source); })()), "direction", [], "any", false, false, false, 69), "html", null, true);
        yield "</td>
    <td><b>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nature"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 71, $this->source); })()), "nature", [], "any", false, false, false, 71), "html", null, true);
        yield "</td>
  </tr>

 
  <tr>
  ";
        // line 76
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 76, $this->source); })()), "application", [], "any", false, false, false, 76)) {
            // line 77
            yield "    <td><b>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Application"), "html", null, true);
            yield "</b></td>
    <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 78, $this->source); })()), "application", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
  ";
        }
        // line 80
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 80, $this->source); })()), "module", [], "any", false, false, false, 80)) {
            // line 81
            yield "    <td><b>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module"), "html", null, true);
            yield "</b></td>
    <td>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 82, $this->source); })()), "module", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
  ";
        }
        // line 84
        yield "  </tr>
  

  <tr>
    <td><b>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commentaire"), "html", null, true);
        yield "</b></td>
    <td colspan=\"3\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 89, $this->source); })()), "description", [], "any", false, false, false, 89), "html", null, true);
        yield "</td>
  </tr>
  ";
        // line 91
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 91, $this->source); })()), "attachments", [], "any", false, false, false, 91)) {
            // line 92
            yield "    <tr>
      <td>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attachements"), "html", null, true);
            yield "</td>
      <td colspan=\"3\">
        <ul class=\"list-unstyled m-0 p-0\">
          ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 96, $this->source); })()), "attachments", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 97
                yield "            <li>
              <a target=\"_blank\" href=\"/uploads/";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "path", [], "any", false, false, false, 98), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "name", [], "any", false, false, false, 98), "html", null, true);
                yield "</a>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attachment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "        </ul>
      </td>
    </tr>
  ";
        }
        // line 105
        yield " 
  <tr>
    <td><b>";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date de la demande"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 108, $this->source); })()), "createdAt", [], "any", false, false, false, 108)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 108, $this->source); })()), "createdAt", [], "any", false, false, false, 108), "m/d/Y H:i"), "html", null, true);
        }
        yield "</td>
    <td><b>";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deadline"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 110
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 110, $this->source); })()), "deadline", [], "any", false, false, false, 110)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 110, $this->source); })()), "deadline", [], "any", false, false, false, 110), "m/d/Y H:i"), "html", null, true);
        }
        yield "</td>
  <tr>
    <td><b>";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Statut"), "html", null, true);
        yield "</td>
    <td>";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 113, $this->source); })()), "status", [], "any", false, false, false, 113), "html", null, true);
        yield "</td>
    <td><b>";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date de clôture"), "html", null, true);
        yield "</b></td>
    <td>";
        // line 115
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 115, $this->source); })()), "closedAt", [], "any", false, false, false, 115)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 115, $this->source); })()), "closedAt", [], "any", false, false, false, 115), "m/d/Y H:i"), "html", null, true);
        }
        yield "</td>
  </tr>

  <tr>
    <td><b>";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Durée de traitement"), "html", null, true);
        yield "</td>
    <td>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 120, $this->source); })()), "duration", [], "any", false, false, false, 120), "html", null, true);
        yield " jour(s)</td>
    <td></td>
    <td></td>
  </tr>

  ";
        // line 125
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 125, $this->source); })()), "direction", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125) == 8)) {
            // line 126
            yield "  <tr>
    <td><b>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avancement"), "html", null, true);
            yield "</b></td>
    <td>";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 128, $this->source); })()), "avancement", [], "any", false, false, false, 128), "html", null, true);
            yield "</td>
    <td><b>";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next step"), "html", null, true);
            yield "</b></td>
    <td>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 130, $this->source); })()), "nextStep", [], "any", false, false, false, 130), "html", null, true);
            yield "</td>
  </tr>
  <tr>
    <td><b>";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actif"), "html", null, true);
            yield "</b></td>
    <td>";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\SettingExtension']->getChoiceValueById("actifs", CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 134, $this->source); })()), "getActifId", [], "method", false, false, false, 134)), "html", null, true);
            yield "</td>
    <td><b>";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PU"), "html", null, true);
            yield "</b></td>
    <td>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 136, $this->source); })()), "pu", [], "any", false, false, false, 136), "html", null, true);
            yield "</td>
  </tr>
  <tr>
    <td><b>";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Client"), "html", null, true);
            yield "</b></td>
    <td>";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 140, $this->source); })()), "client", [], "any", false, false, false, 140), "html", null, true);
            yield "</td>
    <td><b>";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Responsable"), "html", null, true);
            yield "</b></td>
    <td>";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 142, $this->source); })()), "responsable", [], "any", false, false, false, 142), "html", null, true);
            yield "</td>
  </tr>
  <tr>
    <td><b>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Externe"), "html", null, true);
            yield "</b></td>
    <td>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 146, $this->source); })()), "externe", [], "any", false, false, false, 146), "html", null, true);
            yield "</td>
    <td><b>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nombre d'heures"), "html", null, true);
            yield "</b></td>
    <td>";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 148, $this->source); })()), "hoursCount", [], "any", false, false, false, 148), "html", null, true);
            yield "</td>
  </tr>
  <tr>
    <td><b>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nombre de pages"), "html", null, true);
            yield "</b></td>
    <td>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 152, $this->source); })()), "pagesCount", [], "any", false, false, false, 152), "html", null, true);
            yield "</td>
  </tr>
 ";
        }
        // line 155
        yield " </table>
<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"2\" class=\"styled-title mb-2\">
      <h3>";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Echanges sur la demande"), "html", null, true);
        yield "</h3>
    </td>
  </tr>
  ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 162, $this->source); })()), "comments", [], "any", false, false, false, 162));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 163
            yield "  <tr>
    <td colspan=\"2\"> 
      ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 165), "html", null, true);
            yield " <br /><b>par</b> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 165), "html", null, true);
            yield " <b>le</b> ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 165)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 165), "m/d/Y H:i"), "html", null, true);
            }
            yield "<br />
      <ul class=\"list-unstyled m-0 p-0\">
          ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "attachments", [], "any", false, false, false, 167));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 168
                yield "            <li>
              <a target=\"_blank\" href=\"/uploads/";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "path", [], "any", false, false, false, 169), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "name", [], "any", false, false, false, 169), "html", null, true);
                yield "</a>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attachment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            yield "        </ul>
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        yield "
</table>
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
        return "admin/reclamation/details.html.twig";
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
        return array (  502 => 176,  493 => 172,  482 => 169,  479 => 168,  475 => 167,  464 => 165,  460 => 163,  456 => 162,  450 => 159,  444 => 155,  438 => 152,  434 => 151,  428 => 148,  424 => 147,  420 => 146,  416 => 145,  410 => 142,  406 => 141,  402 => 140,  398 => 139,  392 => 136,  388 => 135,  384 => 134,  380 => 133,  374 => 130,  370 => 129,  366 => 128,  362 => 127,  359 => 126,  357 => 125,  349 => 120,  345 => 119,  336 => 115,  332 => 114,  328 => 113,  324 => 112,  317 => 110,  313 => 109,  307 => 108,  303 => 107,  299 => 105,  293 => 101,  282 => 98,  279 => 97,  275 => 96,  269 => 93,  266 => 92,  264 => 91,  259 => 89,  255 => 88,  249 => 84,  244 => 82,  239 => 81,  236 => 80,  231 => 78,  226 => 77,  224 => 76,  216 => 71,  212 => 70,  208 => 69,  204 => 68,  198 => 65,  194 => 64,  187 => 60,  178 => 54,  174 => 53,  170 => 52,  166 => 51,  160 => 48,  156 => 47,  152 => 46,  148 => 45,  141 => 41,  128 => 31,  123 => 29,  120 => 28,  113 => 24,  108 => 22,  103 => 20,  97 => 17,  92 => 15,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}

<div class=\"row mb-4\">
    <div class=\"col-lg-8 col-8\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-question-circle\"></i>
        {{ \"Demande\"|trans }}
      </h1>
    </div>
    <div class=\"col-lg-4 col-4\">
      <div class=\"float-end\">

        <a href=\"{{ path('demandes') }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-list\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Liste\"|trans }}</span>
        </a>

        {% if demande.status != 'Clôturée' %} 

        <a href=\"{{ path('demande.update', {id: demande.id}) }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
          <i class=\"bi bi-pencil-square\"></i>
          <span class=\"d-none d-lg-inline-block\">{{ \"Modifier\"|trans }}</span>
        </a>

        {% endif %}

        <a href=\"{{ path('demande.create') }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-plus\"></i>
        <span class=\"d-none d-lg-inline-block\">{{ \"Ajouter\"|trans }}</span>
        </a>

      </div>
    </div>
  </div>

<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"4\" class=\"styled-title mb-2\">
      <h3>{{ \"Informations du demandeur\"|trans }}</h3>
    </td>
  </tr>
  <tr>
    <td><b>{{ \"Société\"|trans }}</b></td>
    <td>{{ demande.societe }}</td>
    <td><b>{{ \"Demandeur\"|trans }}</b></td>
    <td>{{ demande.user }}</td>
  </tr>
  <tr>
    <td><b>{{ \"Direction\"|trans }}</b></td>
    <td>{{ demande.user.direction }}</td>
    <td><b>{{ \"Poste\"|trans }}</b></td>
    <td>{{ demande.user.poste }}</td>
  </tr>
</table>
<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"4\" class=\"styled-title mb-2\">
      <h3>{{ \"Informations de la demande\"|trans }}</h3>
    </td>
  </tr>
  <tr>
    <td><b>{{ \"Objet\"|trans }}</b></td>
    <td colspan=\"3\">{{ demande.title }}</td>
  </tr>
  <tr>
    <td><b>{{ \"Direction\"|trans }}</b></td>
    <td>{{ demande.direction }}</td>
    <td><b>{{ \"Nature\"|trans }}</b></td>
    <td>{{ demande.nature }}</td>
  </tr>

 
  <tr>
  {% if demande.application %}
    <td><b>{{ \"Application\"|trans }}</b></td>
    <td>{{ demande.application }}</td>
  {% endif %}
  {% if demande.module %}
    <td><b>{{ \"Module\"|trans }}</b></td>
    <td>{{ demande.module }}</td>
  {% endif %}
  </tr>
  

  <tr>
    <td><b>{{ \"Commentaire\"|trans }}</b></td>
    <td colspan=\"3\">{{ demande.description }}</td>
  </tr>
  {% if demande.attachments %}
    <tr>
      <td>{{ \"Attachements\"|trans }}</td>
      <td colspan=\"3\">
        <ul class=\"list-unstyled m-0 p-0\">
          {% for attachment in demande.attachments %}
            <li>
              <a target=\"_blank\" href=\"/uploads/{{ attachment.path }}\">{{ attachment.name }}</a>
            </li>
          {% endfor %}
        </ul>
      </td>
    </tr>
  {% endif %}
 
  <tr>
    <td><b>{{ \"Date de la demande\"|trans }}</b></td>
    <td>{% if demande.createdAt %}{{ demande.createdAt|date(\"m/d/Y H:i\") }}{% endif %}</td>
    <td><b>{{ \"Deadline\"|trans }}</b></td>
    <td>{% if demande.deadline %}{{ demande.deadline|date(\"m/d/Y H:i\") }}{% endif %}</td>
  <tr>
    <td><b>{{ \"Statut\"|trans }}</td>
    <td>{{ demande.status }}</td>
    <td><b>{{ \"Date de clôture\"|trans }}</b></td>
    <td>{% if demande.closedAt %}{{ demande.closedAt|date(\"m/d/Y H:i\") }}{% endif %}</td>
  </tr>

  <tr>
    <td><b>{{ \"Durée de traitement\"|trans }}</td>
    <td>{{ demande.duration }} jour(s)</td>
    <td></td>
    <td></td>
  </tr>

  {% if demande.direction.id == 8 %}
  <tr>
    <td><b>{{ \"Avancement\"|trans }}</b></td>
    <td>{{ demande.avancement }}</td>
    <td><b>{{ \"Next step\"|trans }}</b></td>
    <td>{{ demande.nextStep }}</td>
  </tr>
  <tr>
    <td><b>{{ \"Actif\"|trans }}</b></td>
    <td>{{  get_choice_value_by_id('actifs', demande.getActifId())  }}</td>
    <td><b>{{ \"PU\"|trans }}</b></td>
    <td>{{ demande.pu }}</td>
  </tr>
  <tr>
    <td><b>{{ \"Client\"|trans }}</b></td>
    <td>{{ demande.client }}</td>
    <td><b>{{ \"Responsable\"|trans }}</b></td>
    <td>{{ demande.responsable }}</td>
  </tr>
  <tr>
    <td><b>{{ \"Externe\"|trans }}</b></td>
    <td>{{ demande.externe }}</td>
    <td><b>{{ \"Nombre d'heures\"|trans }}</b></td>
    <td>{{ demande.hoursCount }}</td>
  </tr>
  <tr>
    <td><b>{{ \"Nombre de pages\"|trans }}</b></td>
    <td>{{ demande.pagesCount }}</td>
  </tr>
 {% endif %}
 </table>
<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"2\" class=\"styled-title mb-2\">
      <h3>{{ \"Echanges sur la demande\"|trans }}</h3>
    </td>
  </tr>
  {% for comment in demande.comments %}
  <tr>
    <td colspan=\"2\"> 
      {{ comment.comment }} <br /><b>par</b> {{ comment.user }} <b>le</b> {% if comment.createdAt %}{{ comment.createdAt|date(\"m/d/Y H:i\") }}{% endif %}<br />
      <ul class=\"list-unstyled m-0 p-0\">
          {% for attachment in comment.attachments %}
            <li>
              <a target=\"_blank\" href=\"/uploads/{{ attachment.path }}\">{{ attachment.name }}</a>
            </li>
          {% endfor %}
        </ul>
    </td>
  </tr>
  {% endfor %}

</table>
{% endblock %}", "admin/reclamation/details.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\admin\\reclamation\\details.html.twig");
    }
}
