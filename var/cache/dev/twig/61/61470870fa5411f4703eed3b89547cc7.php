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

/* block/footer.html.twig */
class __TwigTemplate_bd7d15863f111ebf27691adb714acd4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "block/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "block/footer.html.twig"));

        // line 1
        yield "<div class=\"footer row bg-primary p-5\">
  <h3 class=\" text-center text-white p-3\">MEDIA MAPS</h3>

  <div class=\"col-12 col-md-12 text-center mb-3\">
\t\t\t\t<ul class=\"list-inline mt-3 mt-md-0 mb-0\">
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"Instagram\" class=\"text-white fs-4 me-2\"><i class=\"bi-instagram\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"Facebook\" class=\"text-white fs-4 me-2\"><i class=\"bi-facebook\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"Twitter\" class=\"text-white fs-4 me-2\"><i class=\"bi-twitter\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"LinkedIn\" class=\"text-white fs-4\"><i class=\"bi-linkedin\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
  </div>


  <ul class=\"text-center list-inline text-white\">
  
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"text-white\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Data protection"), "html", null, true);
        yield "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"text-white\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Terms and conditions"), "html", null, true);
        yield "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"text-white\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Legal Notice"), "html", null, true);
        yield "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"text-white\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("How does it works ?"), "html", null, true);
        yield "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"text-white\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Press area"), "html", null, true);
        yield "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"text-white\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Affiliate program"), "html", null, true);
        yield "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"text-white\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Client Support"), "html", null, true);
        yield "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"text-white\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Newsletter"), "html", null, true);
        yield "</a>
    </li>
  </ul>
</div>
<style>
 .footer a{text-decoration:none;}
</style>



";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "block/footer.html.twig";
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
        return array (  130 => 46,  122 => 43,  114 => 40,  106 => 37,  98 => 34,  90 => 31,  82 => 28,  74 => 25,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"footer row bg-primary p-5\">
  <h3 class=\" text-center text-white p-3\">MEDIA MAPS</h3>

  <div class=\"col-12 col-md-12 text-center mb-3\">
\t\t\t\t<ul class=\"list-inline mt-3 mt-md-0 mb-0\">
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"Instagram\" class=\"text-white fs-4 me-2\"><i class=\"bi-instagram\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"Facebook\" class=\"text-white fs-4 me-2\"><i class=\"bi-facebook\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"Twitter\" class=\"text-white fs-4 me-2\"><i class=\"bi-twitter\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"LinkedIn\" class=\"text-white fs-4\"><i class=\"bi-linkedin\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
  </div>


  <ul class=\"text-center list-inline text-white\">
  
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Data protection\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Terms and conditions\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Legal Notice\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"How does it works ?\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Press area\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Affiliate program\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Client Support\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Newsletter\"|trans }}</a>
    </li>
  </ul>
</div>
<style>
 .footer a{text-decoration:none;}
</style>



", "block/footer.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\block\\footer.html.twig");
    }
}
