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

/* @assets/vendor/datetimepicker/bootstrap-datetimepicker.fr.js */
class __TwigTemplate_4071909d2085e941e8c60f4e602c0953 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@assets/vendor/datetimepicker/bootstrap-datetimepicker.fr.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@assets/vendor/datetimepicker/bootstrap-datetimepicker.fr.js"));

        // line 1
        yield "// moment.js language configuration
// language : french (fr)
// author : John Fischer : https://github.com/jfroffice

(function (factory) {
  if (typeof define === \"function\" && define.amd) {
    define([\"moment\"], factory); // AMD
  } else if (typeof exports === \"object\") {
    module.exports = factory(require(\"../moment\")); // Node
  } else {
    factory(window.moment); // Browser global
  }
})(function (moment) {
  return moment.locale(\"fr\", {
    months:
      \"janvier_février_mars_avril_mai_juin_juillet_août_septembre_octobre_novembre_décembre\".split(
        \"_\"
      ),
    monthsShort:
      \"janv._févr._mars_avr._mai_juin_juil._août_sept._oct._nov._déc.\".split(
        \"_\"
      ),
    weekdays: \"dimanche_lundi_mardi_mercredi_jeudi_vendredi_samedi\".split(\"_\"),
    weekdaysShort: \"dim._lun._mar._mer._jeu._ven._sam.\".split(\"_\"),
    weekdaysMin: \"Di_Lu_Ma_Me_Je_Ve_Sa\".split(\"_\"),
    longDateFormat: {
      LT: \"HH:mm\",
      L: \"DD/MM/YYYY\",
      LL: \"D MMMM YYYY\",
      LLL: \"D MMMM YYYY LT\",
      LLLL: \"dddd D MMMM YYYY LT\",
    },
    calendar: {
      sameDay: \"[Aujourd'hui à] LT\",
      nextDay: \"[Demain à] LT\",
      nextWeek: \"dddd [à] LT\",
      lastDay: \"[Hier à] LT\",
      lastWeek: \"dddd [dernier à] LT\",
      sameElse: \"L\",
    },
    relativeTime: {
      future: \"dans %s\",
      past: \"il y a %s\",
      s: \"quelques secondes\",
      m: \"une minute\",
      mm: \"%d minutes\",
      h: \"une heure\",
      hh: \"%d heures\",
      d: \"un jour\",
      dd: \"%d jours\",
      M: \"un mois\",
      MM: \"%d mois\",
      y: \"un an\",
      yy: \"%d ans\",
    },
    ordinal: function (number) {
      return number + (number === 1 ? \"er\" : \"\");
    },
    week: {
      dow: 1, // Monday is the first day of the week.
      doy: 4, // The week that contains Jan 4th is the first week of the year.
    },
  });
});
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
        return "@assets/vendor/datetimepicker/bootstrap-datetimepicker.fr.js";
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
        return new Source("// moment.js language configuration
// language : french (fr)
// author : John Fischer : https://github.com/jfroffice

(function (factory) {
  if (typeof define === \"function\" && define.amd) {
    define([\"moment\"], factory); // AMD
  } else if (typeof exports === \"object\") {
    module.exports = factory(require(\"../moment\")); // Node
  } else {
    factory(window.moment); // Browser global
  }
})(function (moment) {
  return moment.locale(\"fr\", {
    months:
      \"janvier_février_mars_avril_mai_juin_juillet_août_septembre_octobre_novembre_décembre\".split(
        \"_\"
      ),
    monthsShort:
      \"janv._févr._mars_avr._mai_juin_juil._août_sept._oct._nov._déc.\".split(
        \"_\"
      ),
    weekdays: \"dimanche_lundi_mardi_mercredi_jeudi_vendredi_samedi\".split(\"_\"),
    weekdaysShort: \"dim._lun._mar._mer._jeu._ven._sam.\".split(\"_\"),
    weekdaysMin: \"Di_Lu_Ma_Me_Je_Ve_Sa\".split(\"_\"),
    longDateFormat: {
      LT: \"HH:mm\",
      L: \"DD/MM/YYYY\",
      LL: \"D MMMM YYYY\",
      LLL: \"D MMMM YYYY LT\",
      LLLL: \"dddd D MMMM YYYY LT\",
    },
    calendar: {
      sameDay: \"[Aujourd'hui à] LT\",
      nextDay: \"[Demain à] LT\",
      nextWeek: \"dddd [à] LT\",
      lastDay: \"[Hier à] LT\",
      lastWeek: \"dddd [dernier à] LT\",
      sameElse: \"L\",
    },
    relativeTime: {
      future: \"dans %s\",
      past: \"il y a %s\",
      s: \"quelques secondes\",
      m: \"une minute\",
      mm: \"%d minutes\",
      h: \"une heure\",
      hh: \"%d heures\",
      d: \"un jour\",
      dd: \"%d jours\",
      M: \"un mois\",
      MM: \"%d mois\",
      y: \"un an\",
      yy: \"%d ans\",
    },
    ordinal: function (number) {
      return number + (number === 1 ? \"er\" : \"\");
    },
    week: {
      dow: 1, // Monday is the first day of the week.
      doy: 4, // The week that contains Jan 4th is the first week of the year.
    },
  });
});
", "@assets/vendor/datetimepicker/bootstrap-datetimepicker.fr.js", "C:\\Users\\lamfa\\Bureau\\stgja\\public\\assets\\vendor\\datetimepicker\\bootstrap-datetimepicker.fr.js");
    }
}
