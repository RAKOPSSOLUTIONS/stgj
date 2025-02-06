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

/* reports/list.html.twig */
class __TwigTemplate_19a0799144639af7a40045ba62b2cad1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reports/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reports/list.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "reports/list.html.twig", 1);
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
        yield "<div class=\"row\">
    <div class=\"col-sm-12\">
        <h1 class=\"page-name\">
            <i class=\"bi bi-clipboard-data\"></i>
            ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rapports"), "html", null, true);
        yield "
        </h1>
    </div>
</div>

<div class=\"row mt-3\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 14, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 15
            yield "        <div class=\"col-lg-3 col-md-3 col-sm-6 mb-4\">
            <div class=\"card shadow-sm rounded-0 h-100\">
                <div class=\"card-body d-flex flex-column align-items-center p-3\">
                    <i class=\"bi bi-file-earmark-text fs-1 text-primary mb-2\"></i>
                    <span class=\"fs-6 text-uppercase text-center font-weight-bold\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "label", [], "any", false, false, false, 19), "html", null, true);
            yield "</span>
                    
                    ";
            // line 21
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["report"], "report_category", [], "any", false, false, false, 21) == "date_interval")) {
                // line 22
                yield "                        <form 
                            method=\"get\" 
                            action=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_report", ["reportType" => CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 24)]), "html", null, true);
                yield "\" 
                            target=\"_blank\" 
                            class=\"mt-3 w-100\"
                            aria-label=\"Date interval report form for ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "label", [], "any", false, false, false, 27), "html", null, true);
                yield "\"
                            id=\"reportForm_";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 28), "html", null, true);
                yield "\"
                        >
                            <div class=\"mb-2\">
                                <label for=\"startAt_";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 31), "html", null, true);
                yield "\" class=\"form-label\">Date début:</label>
                                <input 
                                    type=\"date\" 
                                    id=\"startAt_";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 34), "html", null, true);
                yield "\" 
                                    name=\"startAt\" 
                                    class=\"form-control\" 
                                    required 
                                    aria-required=\"true\"
                                >
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"endAt_";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 42), "html", null, true);
                yield "\" class=\"form-label\">Date Fin :</label>
                                <input 
                                    type=\"date\" 
                                    id=\"endAt_";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 45), "html", null, true);
                yield "\" 
                                    name=\"endAt\" 
                                    class=\"form-control\" 
                                    required 
                                    aria-required=\"true\"
                                >
                            </div>
                            <div class=\"d-flex gap-2 w-100\">
                                <button type=\"submit\" class=\"btn btn-primary w-50\">Télécharger</button>
                                <button 
                                    type=\"button\" 
                                    class=\"btn btn-secondary w-50 preview-btn\" 
                                    data-report-type=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 57), "html", null, true);
                yield "\" 
                                    data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#previewModal\"
                                    id=\"previewBtn_";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 60), "html", null, true);
                yield "\"
                                    disabled
                                >
                                    Aperçu
                                </button>
                            </div>
                        </form>

                        <!-- Move the JavaScript inside the loop -->
                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const startAt = document.getElementById('startAt_";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 71), "html", null, true);
                yield "');
                            const endAt = document.getElementById('endAt_";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 72), "html", null, true);
                yield "');
                            const previewBtn = document.getElementById('previewBtn_";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 73), "html", null, true);
                yield "');

                            function checkDates() {
                                if (startAt.value && endAt.value) {
                                    previewBtn.disabled = false;
                                } else {
                                    previewBtn.disabled = true;
                                }
                            }

                            startAt.addEventListener('change', checkDates);
                            endAt.addEventListener('change', checkDates);
                        });
                        </script>
                    ";
            } else {
                // line 88
                yield "                        <div class=\"mt-auto w-100 d-flex gap-2\">
                            <a 
                                href=\"";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_report", ["reportType" => CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 90)]), "html", null, true);
                yield "\" 
                                class=\"btn btn-primary w-50\" 
                                target=\"_blank\" 
                                aria-label=\"Download ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "label", [], "any", false, false, false, 93), "html", null, true);
                yield "\"
                            >
                                Télécharger
                            </a>
                            <button 
                                type=\"button\" 
                                class=\"btn btn-secondary w-50 preview-btn\" 
                                data-report-type=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 100), "html", null, true);
                yield "\" 
                                data-bs-toggle=\"modal\" 
                                data-bs-target=\"#previewModal\"
                            >
                                Aperçu
                            </button>
                        </div>
                    ";
            }
            // line 108
            yield "                </div>
            </div>
        </div>
        
        ";
            // line 112
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 112) % 4) == 0) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 112))) {
                // line 113
                yield "            </div><div class=\"row mt-3\">
        ";
            }
            // line 115
            yield "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "</div>

<!-- Preview Modal -->
<div class=\"modal fade\" id=\"previewModal\" tabindex=\"-1\" aria-labelledby=\"previewModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-fullscreen\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"previewModalLabel\">Aperçu du Rapport</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"report-preview-content\" class=\"text-center\">
                    <p>Chargement...</p>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 139
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

        // line 140
        yield "  ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const previewButtons = document.querySelectorAll('.preview-btn');
        const previewContent = document.getElementById('report-preview-content');

        previewButtons.forEach(button => {
            button.addEventListener('click', () => {
                const reportType = button.getAttribute('data-report-type');

                // Call the preview endpoint via AJAX
                fetch(`/generate-report/\${reportType}?preview=true`)
                    .then(response => response.json())
                    .then(data => {
                        // Render preview content (Example: table of data)
                        let html = '<table class=\"table table-striped\"><thead><tr>';
                        data.headers.forEach(header => {
                            html += `<th>\${header}</th>`;
                        });
                        html += '</tr></thead><tbody>';
                        data.rows.forEach(row => {
                            html += '<tr>';
                            data.headers.forEach(header => {
                                html += `<td>\${row[header.toLowerCase()] || ''}</td>`;
                            });
                            html += '</tr>';
                        });
                        html += '</tbody></table>';
                        previewContent.innerHTML = html;
                    })
                    .catch(error => {
                        previewContent.innerHTML = `<p class=\"text-danger\">Erreur lors du chargement de l'aperçu.</p>`;
                        console.error('Error fetching preview:', error);
                    });
            });
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
        return "reports/list.html.twig";
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
        return array (  328 => 140,  315 => 139,  283 => 116,  269 => 115,  265 => 113,  263 => 112,  257 => 108,  246 => 100,  236 => 93,  230 => 90,  226 => 88,  208 => 73,  204 => 72,  200 => 71,  186 => 60,  180 => 57,  165 => 45,  159 => 42,  148 => 34,  142 => 31,  136 => 28,  132 => 27,  126 => 24,  122 => 22,  120 => 21,  115 => 19,  109 => 15,  92 => 14,  83 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}
<div class=\"row\">
    <div class=\"col-sm-12\">
        <h1 class=\"page-name\">
            <i class=\"bi bi-clipboard-data\"></i>
            {{ \"Rapports\"|trans }}
        </h1>
    </div>
</div>

<div class=\"row mt-3\">
    {% for report in reports %}
        <div class=\"col-lg-3 col-md-3 col-sm-6 mb-4\">
            <div class=\"card shadow-sm rounded-0 h-100\">
                <div class=\"card-body d-flex flex-column align-items-center p-3\">
                    <i class=\"bi bi-file-earmark-text fs-1 text-primary mb-2\"></i>
                    <span class=\"fs-6 text-uppercase text-center font-weight-bold\">{{ report.label }}</span>
                    
                    {% if report.report_category == 'date_interval' %}
                        <form 
                            method=\"get\" 
                            action=\"{{ path('generate_report', { reportType: report.type }) }}\" 
                            target=\"_blank\" 
                            class=\"mt-3 w-100\"
                            aria-label=\"Date interval report form for {{ report.label }}\"
                            id=\"reportForm_{{ report.type }}\"
                        >
                            <div class=\"mb-2\">
                                <label for=\"startAt_{{ report.type }}\" class=\"form-label\">Date début:</label>
                                <input 
                                    type=\"date\" 
                                    id=\"startAt_{{ report.type }}\" 
                                    name=\"startAt\" 
                                    class=\"form-control\" 
                                    required 
                                    aria-required=\"true\"
                                >
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"endAt_{{ report.type }}\" class=\"form-label\">Date Fin :</label>
                                <input 
                                    type=\"date\" 
                                    id=\"endAt_{{ report.type }}\" 
                                    name=\"endAt\" 
                                    class=\"form-control\" 
                                    required 
                                    aria-required=\"true\"
                                >
                            </div>
                            <div class=\"d-flex gap-2 w-100\">
                                <button type=\"submit\" class=\"btn btn-primary w-50\">Télécharger</button>
                                <button 
                                    type=\"button\" 
                                    class=\"btn btn-secondary w-50 preview-btn\" 
                                    data-report-type=\"{{ report.type }}\" 
                                    data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#previewModal\"
                                    id=\"previewBtn_{{ report.type }}\"
                                    disabled
                                >
                                    Aperçu
                                </button>
                            </div>
                        </form>

                        <!-- Move the JavaScript inside the loop -->
                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const startAt = document.getElementById('startAt_{{ report.type }}');
                            const endAt = document.getElementById('endAt_{{ report.type }}');
                            const previewBtn = document.getElementById('previewBtn_{{ report.type }}');

                            function checkDates() {
                                if (startAt.value && endAt.value) {
                                    previewBtn.disabled = false;
                                } else {
                                    previewBtn.disabled = true;
                                }
                            }

                            startAt.addEventListener('change', checkDates);
                            endAt.addEventListener('change', checkDates);
                        });
                        </script>
                    {% else %}
                        <div class=\"mt-auto w-100 d-flex gap-2\">
                            <a 
                                href=\"{{ path('generate_report', { reportType: report.type }) }}\" 
                                class=\"btn btn-primary w-50\" 
                                target=\"_blank\" 
                                aria-label=\"Download {{ report.label }}\"
                            >
                                Télécharger
                            </a>
                            <button 
                                type=\"button\" 
                                class=\"btn btn-secondary w-50 preview-btn\" 
                                data-report-type=\"{{ report.type }}\" 
                                data-bs-toggle=\"modal\" 
                                data-bs-target=\"#previewModal\"
                            >
                                Aperçu
                            </button>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
        
        {% if loop.index % 4 == 0 and not loop.last %}
            </div><div class=\"row mt-3\">
        {% endif %}
    {% endfor %}
</div>

<!-- Preview Modal -->
<div class=\"modal fade\" id=\"previewModal\" tabindex=\"-1\" aria-labelledby=\"previewModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-fullscreen\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"previewModalLabel\">Aperçu du Rapport</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"report-preview-content\" class=\"text-center\">
                    <p>Chargement...</p>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block footer %}
  {{ parent() }}
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const previewButtons = document.querySelectorAll('.preview-btn');
        const previewContent = document.getElementById('report-preview-content');

        previewButtons.forEach(button => {
            button.addEventListener('click', () => {
                const reportType = button.getAttribute('data-report-type');

                // Call the preview endpoint via AJAX
                fetch(`/generate-report/\${reportType}?preview=true`)
                    .then(response => response.json())
                    .then(data => {
                        // Render preview content (Example: table of data)
                        let html = '<table class=\"table table-striped\"><thead><tr>';
                        data.headers.forEach(header => {
                            html += `<th>\${header}</th>`;
                        });
                        html += '</tr></thead><tbody>';
                        data.rows.forEach(row => {
                            html += '<tr>';
                            data.headers.forEach(header => {
                                html += `<td>\${row[header.toLowerCase()] || ''}</td>`;
                            });
                            html += '</tr>';
                        });
                        html += '</tbody></table>';
                        previewContent.innerHTML = html;
                    })
                    .catch(error => {
                        previewContent.innerHTML = `<p class=\"text-danger\">Erreur lors du chargement de l'aperçu.</p>`;
                        console.error('Error fetching preview:', error);
                    });
            });
        });
    });
  </script>
{% endblock %}", "reports/list.html.twig", "C:\\Users\\Hp\\Desktop\\stgj\\templates\\reports\\list.html.twig");
    }
}
