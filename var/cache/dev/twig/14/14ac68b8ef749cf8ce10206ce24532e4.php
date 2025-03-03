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

/* reports/preview.html.twig */
class __TwigTemplate_e3ca003ec34c07bd707c0ff37f65c828 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reports/preview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reports/preview.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>User List</title>
    <style>
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 800px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<!-- Button to Open Modal -->
<button onclick=\"openModal()\">Show User Data</button>

<!-- Modal -->
<div id=\"userModal\" class=\"modal\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeModal()\">&times;</span>
        <h2>User Details</h2>
        <table>
            <thead>
                <tr>
                    <th>Site</th>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Address</th>
                    <th>GPS (Latitude, Longitude)</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Adhesion</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 71
            yield "                    <tr>
                        <td>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "Site", [], "any", false, false, false, 72), "html", null, true);
            yield "</td>
                        <td>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "matricule", [], "any", false, false, false, 73), "html", null, true);
            yield "</td>
                        <td>";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 74), "html", null, true);
            yield "</td>
                        <td>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                        <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "addresse", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                        <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "GPS(latitude, longitude)", [], "array", false, false, false, 77), "html", null, true);
            yield "</td>
                        <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "tel", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                        <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "Email", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                        <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "adhesion", [], "any", false, false, false, 80), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "            </tbody>
        </table>
    </div>
</div>

<script>
    // Function to open the modal
    function openModal() {
        document.getElementById('userModal').style.display = 'block';
    }

    // Function to close the modal
    function closeModal() {
        document.getElementById('userModal').style.display = 'none';
    }

    // Close the modal if the user clicks outside of it
    window.onclick = function(event) {
        const modal = document.getElementById('userModal');
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };
</script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reports/preview.html.twig";
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
        return array (  167 => 83,  158 => 80,  154 => 79,  150 => 78,  146 => 77,  142 => 76,  138 => 75,  134 => 74,  130 => 73,  126 => 72,  123 => 71,  119 => 70,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>User List</title>
    <style>
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 800px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<!-- Button to Open Modal -->
<button onclick=\"openModal()\">Show User Data</button>

<!-- Modal -->
<div id=\"userModal\" class=\"modal\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeModal()\">&times;</span>
        <h2>User Details</h2>
        <table>
            <thead>
                <tr>
                    <th>Site</th>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Address</th>
                    <th>GPS (Latitude, Longitude)</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Adhesion</th>
                </tr>
            </thead>
            <tbody>
                {% for user in users %}
                    <tr>
                        <td>{{ user.Site }}</td>
                        <td>{{ user.matricule }}</td>
                        <td>{{ user.nom }}</td>
                        <td>{{ user.prenom }}</td>
                        <td>{{ user.addresse }}</td>
                        <td>{{ user['GPS(latitude, longitude)'] }}</td>
                        <td>{{ user.tel }}</td>
                        <td>{{ user.Email }}</td>
                        <td>{{ user.adhesion }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>

<script>
    // Function to open the modal
    function openModal() {
        document.getElementById('userModal').style.display = 'block';
    }

    // Function to close the modal
    function closeModal() {
        document.getElementById('userModal').style.display = 'none';
    }

    // Close the modal if the user clicks outside of it
    window.onclick = function(event) {
        const modal = document.getElementById('userModal');
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };
</script>

</body>
</html>", "reports/preview.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\reports\\preview.html.twig");
    }
}
