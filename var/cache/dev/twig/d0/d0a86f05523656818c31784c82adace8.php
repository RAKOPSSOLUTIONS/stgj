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

/* front/security/password-new.html.twig */
class __TwigTemplate_f7c4b9cca22dbbfdde5783419c028470 extends Template
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
        return "layout/auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/password-new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/password-new.html.twig"));

        $this->parent = $this->loadTemplate("layout/auth.html.twig", "front/security/password-new.html.twig", 1);
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
  <section class=\"h-100\">
    <div class=\"container h-100\">
      <div class=\"row justify-content-sm-center h-100\">
        <div class=\"col-sm-6\">
          <div class=\"text-center my-5\">
            <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" height=\"80\">
          </div>
          <div class=\"card shadow-lg\">
            <div class=\"card-body p-5\">
              <h1 class=\"fs-4 card-title fw-bold mb-4\">
                ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réinitialiser le mot de passe"), "html", null, true);
        yield "
              </h1>
              ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["error"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "                <div class=\"bd-callout bd-callout-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "              <form action=\"\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("password_new"), "html", null, true);
        yield "\">
                <div class=\"mb-3\">
                  <label class=\"mb-2 text-muted\" for=\"new_password\">
                    ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nouveau mot de passe"), "html", null, true);
        yield "
                  </label>
                  <input 
                    type=\"password\" 
                    name=\"password\" 
                    autocomplete=\"off\"
                    class=\"form-control\"
                    id=\"new_password\"
                    required 
                  />
                </div>
                <div class=\"mb-3\">
                  <label class=\"mb-2 text-muted\" for=\"new_password_confirm\">
                    ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Répétez le nouveau mot de passe"), "html", null, true);
        yield "
                  </label>
                  <input 
                    type=\"password\" 
                    name=\"confirm\" 
                    autocomplete=\"off\"
                    class=\"form-control\"
                    id=\"new_password_confirm\"
                    required 
                  />
                </div>
                <div class=\"d-grid d-block\">
                  <button type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réinitialiser"), "html", null, true);
        yield "
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class=\"text-center mt-5 mb-5 text-muted\">
            ";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%copy% %year% MADAEF", ["%copy%" => "&copy;", "%year%" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y")]);
        // line 60
        yield "
          </div>
        </div>
      </div>
    </div>
  </section>

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
        return "front/security/password-new.html.twig";
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
        return array (  163 => 60,  161 => 57,  151 => 50,  135 => 37,  119 => 24,  113 => 21,  110 => 20,  101 => 18,  97 => 17,  92 => 15,  84 => 10,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/auth.html.twig' %}

{% block body %}

  <section class=\"h-100\">
    <div class=\"container h-100\">
      <div class=\"row justify-content-sm-center h-100\">
        <div class=\"col-sm-6\">
          <div class=\"text-center my-5\">
            <img src=\"{{ asset('assets/img/logo.png') }}\" height=\"80\">
          </div>
          <div class=\"card shadow-lg\">
            <div class=\"card-body p-5\">
              <h1 class=\"fs-4 card-title fw-bold mb-4\">
                {{ \"Réinitialiser le mot de passe\"|trans }}
              </h1>
              {% for message in app.flashes('error') %}
                <div class=\"bd-callout bd-callout-danger\">{{ message }}</div>
              {% endfor %}
              <form action=\"\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('password_new') }}\">
                <div class=\"mb-3\">
                  <label class=\"mb-2 text-muted\" for=\"new_password\">
                    {{ \"Nouveau mot de passe\"|trans }}
                  </label>
                  <input 
                    type=\"password\" 
                    name=\"password\" 
                    autocomplete=\"off\"
                    class=\"form-control\"
                    id=\"new_password\"
                    required 
                  />
                </div>
                <div class=\"mb-3\">
                  <label class=\"mb-2 text-muted\" for=\"new_password_confirm\">
                    {{ \"Répétez le nouveau mot de passe\"|trans }}
                  </label>
                  <input 
                    type=\"password\" 
                    name=\"confirm\" 
                    autocomplete=\"off\"
                    class=\"form-control\"
                    id=\"new_password_confirm\"
                    required 
                  />
                </div>
                <div class=\"d-grid d-block\">
                  <button type=\"submit\" class=\"btn btn-primary\">
                    {{ \"Réinitialiser\"|trans }}
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class=\"text-center mt-5 mb-5 text-muted\">
            {{ \"%copy% %year% MADAEF\"|trans({
              '%copy%':'&copy;',
              '%year%': \"now\"|date('Y')
            })|raw }}
          </div>
        </div>
      </div>
    </div>
  </section>

{% endblock %}", "front/security/password-new.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\front\\security\\password-new.html.twig");
    }
}
