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

/* partials/webpush.html.twig */
class __TwigTemplate_7cf8e990f257ff89b49ba0fd46bc22fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/webpush.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/webpush.html.twig"));

        // line 1
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1)) {
            // line 2
            yield "<script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/webpush-client.min.js"), "html", null, true);
            yield "\"></script>
<script>
    if (WebPushClientFactory.isSupported()) {
        WebPushClientFactory.create({
            serviceWorkerPath: '";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/webpush-sw.min.js"), "html", null, true);
            yield "',
            serverKey: 'BDMoknezav3-yWOZ4d60vl1rcTCnKwhzVHs0CctZZ4a2IVXehyClDKzHRAzuAYzNBmi3wZMSXctcI8mpIadUk1E',
            subscribeUrl: '/webpush/',
        })
        .then(function(Client) {
            if (!Client.getSubscription()) {
                Client.subscribe()
            }
        });
    }
</script>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/webpush.html.twig";
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
        return array (  58 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if app.user %}
<script src=\"{{ asset('assets/js/webpush-client.min.js') }}\"></script>
<script>
    if (WebPushClientFactory.isSupported()) {
        WebPushClientFactory.create({
            serviceWorkerPath: '{{ asset(\"assets/js/webpush-sw.min.js\") }}',
            serverKey: 'BDMoknezav3-yWOZ4d60vl1rcTCnKwhzVHs0CctZZ4a2IVXehyClDKzHRAzuAYzNBmi3wZMSXctcI8mpIadUk1E',
            subscribeUrl: '/webpush/',
        })
        .then(function(Client) {
            if (!Client.getSubscription()) {
                Client.subscribe()
            }
        });
    }
</script>
{% endif %}", "partials/webpush.html.twig", "C:\\Users\\lamfa\\Bureau\\stgj\\templates\\partials\\webpush.html.twig");
    }
}
