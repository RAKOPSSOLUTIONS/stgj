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

/* @assets/js/webpush-sw.min.js */
class __TwigTemplate_7c442eae9b2ced6041e2bcf7243d0389 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@assets/js/webpush-sw.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@assets/js/webpush-sw.min.js"));

        // line 1
        yield "!function(t){var n={};function e(i){if(n[i])return n[i].exports;var r=n[i]={i:i,l:!1,exports:{}};return t[i].call(r.exports,r,r.exports,e),r.l=!0,r.exports}e.m=t,e.c=n,e.d=function(t,n,i){e.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:i})},e.r=function(t){\"undefined\"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:\"Module\"}),Object.defineProperty(t,\"__esModule\",{value:!0})},e.t=function(t,n){if(1&n&&(t=e(t)),8&n)return t;if(4&n&&\"object\"==typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(e.r(i),Object.defineProperty(i,\"default\",{enumerable:!0,value:t}),2&n&&\"string\"!=typeof t)for(var r in t)e.d(i,r,function(n){return t[n]}.bind(null,r));return i},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,\"a\",n),n},e.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},e.p=\"/\",e(e.s=\"pEEV\")}({pEEV:function(t,n){self.addEventListener(\"push\",function(t){try{var n=t.data.json();t.waitUntil(self.registration.showNotification(n.title||\"\",n.options||{}))}catch(n){try{var e=t.data.text();t.waitUntil(self.registration.showNotification(\"Notification\",{body:e}))}catch(n){t.waitUntil(self.registration.showNotification(\"\"))}}}),self.addEventListener(\"notificationclick\",function(t){t.notification.close();var n=t.notification.data.link||\"\";n.length>0&&t.waitUntil(clients.matchAll({type:\"window\"}).then(function(t){var e=!0,i=!1,r=void 0;try{for(var o,a=t[Symbol.iterator]();!(e=(o=a.next()).done);e=!0){var l=o.value;if(l.url===n&&\"focus\"in l)return l.focus()}}catch(t){i=!0,r=t}finally{try{e||null==a.return||a.return()}finally{if(i)throw r}}if(clients.openWindow)return clients.openWindow(n)}))})}});";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@assets/js/webpush-sw.min.js";
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
        return new Source("!function(t){var n={};function e(i){if(n[i])return n[i].exports;var r=n[i]={i:i,l:!1,exports:{}};return t[i].call(r.exports,r,r.exports,e),r.l=!0,r.exports}e.m=t,e.c=n,e.d=function(t,n,i){e.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:i})},e.r=function(t){\"undefined\"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:\"Module\"}),Object.defineProperty(t,\"__esModule\",{value:!0})},e.t=function(t,n){if(1&n&&(t=e(t)),8&n)return t;if(4&n&&\"object\"==typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(e.r(i),Object.defineProperty(i,\"default\",{enumerable:!0,value:t}),2&n&&\"string\"!=typeof t)for(var r in t)e.d(i,r,function(n){return t[n]}.bind(null,r));return i},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,\"a\",n),n},e.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},e.p=\"/\",e(e.s=\"pEEV\")}({pEEV:function(t,n){self.addEventListener(\"push\",function(t){try{var n=t.data.json();t.waitUntil(self.registration.showNotification(n.title||\"\",n.options||{}))}catch(n){try{var e=t.data.text();t.waitUntil(self.registration.showNotification(\"Notification\",{body:e}))}catch(n){t.waitUntil(self.registration.showNotification(\"\"))}}}),self.addEventListener(\"notificationclick\",function(t){t.notification.close();var n=t.notification.data.link||\"\";n.length>0&&t.waitUntil(clients.matchAll({type:\"window\"}).then(function(t){var e=!0,i=!1,r=void 0;try{for(var o,a=t[Symbol.iterator]();!(e=(o=a.next()).done);e=!0){var l=o.value;if(l.url===n&&\"focus\"in l)return l.focus()}}catch(t){i=!0,r=t}finally{try{e||null==a.return||a.return()}finally{if(i)throw r}}if(clients.openWindow)return clients.openWindow(n)}))})}});", "@assets/js/webpush-sw.min.js", "C:\\Users\\lamfa\\Bureau\\stgja\\public\\assets\\js\\webpush-sw.min.js");
    }
}
