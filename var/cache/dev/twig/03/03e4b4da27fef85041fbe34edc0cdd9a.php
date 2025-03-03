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

/* @assets/css/email.css */
class __TwigTemplate_7b4bf3207c87cd77a81d29cd5786da3d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@assets/css/email.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@assets/css/email.css"));

        // line 1
        yield "body {
  margin: 0;
  padding: 0;
  background-color: #f3f3f3;
  font-family: \"Raleway\", Helvetica, Arial, sans-serif !important;
}
h2 {
  background-color: #264459;
  color: #ffffff;
  font-weight: normal;
}
hr {
  border: none;
  border-top: 3px solid #264459;
  margin: 20px;
}
.welcome {
  background-color: #264459;
}
.bottom {
  background-color: #efefee;
}
.logo {
  width: 100%;
}
.text-center {
  text-align: center;
}
table.button a {
  background-color: #264459;
}
table.button table td {
  background-color: #264459;
  border: 2px solid #264459;
}
.btn-primary {
  color: #fff;
  background-color: #00447a;
  border-color: #00447a;
}
.btn-primary:hover {
  background-color: #477626;
  border-color: #477626;
  box-shadow: 0 0 0 0.25rem #477626;
}
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
        return "@assets/css/email.css";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("body {
  margin: 0;
  padding: 0;
  background-color: #f3f3f3;
  font-family: \"Raleway\", Helvetica, Arial, sans-serif !important;
}
h2 {
  background-color: #264459;
  color: #ffffff;
  font-weight: normal;
}
hr {
  border: none;
  border-top: 3px solid #264459;
  margin: 20px;
}
.welcome {
  background-color: #264459;
}
.bottom {
  background-color: #efefee;
}
.logo {
  width: 100%;
}
.text-center {
  text-align: center;
}
table.button a {
  background-color: #264459;
}
table.button table td {
  background-color: #264459;
  border: 2px solid #264459;
}
.btn-primary {
  color: #fff;
  background-color: #00447a;
  border-color: #00447a;
}
.btn-primary:hover {
  background-color: #477626;
  border-color: #477626;
  box-shadow: 0 0 0 0.25rem #477626;
}
", "@assets/css/email.css", "C:\\Users\\lamfa\\Bureau\\stgj\\public\\assets\\css\\email.css");
    }
}
