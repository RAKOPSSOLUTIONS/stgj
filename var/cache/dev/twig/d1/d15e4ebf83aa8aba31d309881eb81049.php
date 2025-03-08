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

/* admin/reportings/map.html.twig */
class __TwigTemplate_70ac9533b4d16e53e5350e4650e86742 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reportings/map.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reportings/map.html.twig"));

        // line 1
        yield "<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 600px
}
</style>

<!-- Resources -->
<script src=\"https://cdn.amcharts.com/lib/5/index.js\"></script>
<script src=\"https://cdn.amcharts.com/lib/5/map.js\"></script>
<script src=\"https://cdn.amcharts.com/lib/5/geodata/worldLow.js\"></script>
<script src=\"https://cdn.amcharts.com/lib/5/themes/Animated.js\"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

var data = [
  {
    id: \"US\",
    name: \"United States\",
    value: 100
  }, {
    id: \"GB\",
    name: \"United Kingdom\",
    value: 100
  }, {
    id: \"CN\",
    name: \"China\",
    value: 100
  }, {
    id: \"IN\",
    name: \"India\",
    value: 100
  }, {
    id: \"AU\",
    name: \"Australia\",
    value: 100
  }, {
    id: \"CA\",
    name: \"Canada\",
    value: 100
  }, {
    id: \"BR\",
    name: \"Brasil\",
    value: 100
  }, {
    id: \"ZA\",
    name: \"South Africa\",
    value: 100
  }
];

var root = am5.Root.new(\"chartdiv\");
root.setThemes([am5themes_Animated.new(root)]);

var chart = root.container.children.push(am5map.MapChart.new(root, {}));

var polygonSeries = chart.series.push(
  am5map.MapPolygonSeries.new(root, {
    geoJSON: am5geodata_worldLow,
    exclude: [\"AQ\"]
  })
);

var bubbleSeries = chart.series.push(
  am5map.MapPointSeries.new(root, {
    valueField: \"value\",
    calculateAggregates: true,
    polygonIdField: \"id\"
  })
);

var circleTemplate = am5.Template.new({});

bubbleSeries.bullets.push(function(root, series, dataItem) {
  var container = am5.Container.new(root, {});

  var circle = container.children.push(
    am5.Circle.new(root, {
      radius: 20,
      fillOpacity: 0.7,
      fill: am5.color(0xff0000),
      cursorOverStyle: \"pointer\",
      tooltipText: `{name}: [bold]{value}[/]`
    }, circleTemplate)
  );

  var countryLabel = container.children.push(
    am5.Label.new(root, {
      text: \"{name}\",
      paddingLeft: 5,
      populateText: true,
      fontWeight: \"bold\",
      fontSize: 13,
      centerY: am5.p50
    })
  );

  circle.on(\"radius\", function(radius) {
    countryLabel.set(\"x\", radius);
  })

  return am5.Bullet.new(root, {
    sprite: container,
    dynamic: true
  });
});

bubbleSeries.bullets.push(function(root, series, dataItem) {
  return am5.Bullet.new(root, {
    sprite: am5.Label.new(root, {
      text: \"{value.formatNumber('#.')}\",
      fill: am5.color(0xffffff),
      populateText: true,
      centerX: am5.p50,
      centerY: am5.p50,
      textAlign: \"center\"
    }),
    dynamic: true
  });
});



// minValue and maxValue must be set for the animations to work
bubbleSeries.set(\"heatRules\", [
  {
    target: circleTemplate,
    dataField: \"value\",
    min: 10,
    max: 50,
    minValue: 0,
    maxValue: 100,
    key: \"radius\"
  }
]);

bubbleSeries.data.setAll(data);

updateData();
setInterval(function() {
  updateData();
}, 2000)

function updateData() {
  for (var i = 0; i < bubbleSeries.dataItems.length; i++) {
    bubbleSeries.data.setIndex(i, { value: Math.round(Math.random() * 100), id: data[i].id, name: data[i].name })
  }
}


}); // end am5.ready()
</script>

<!-- HTML -->
<div id=\"chartdiv\"></div>

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
        return "admin/reportings/map.html.twig";
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
        return new Source("<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 600px
}
</style>

<!-- Resources -->
<script src=\"https://cdn.amcharts.com/lib/5/index.js\"></script>
<script src=\"https://cdn.amcharts.com/lib/5/map.js\"></script>
<script src=\"https://cdn.amcharts.com/lib/5/geodata/worldLow.js\"></script>
<script src=\"https://cdn.amcharts.com/lib/5/themes/Animated.js\"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

var data = [
  {
    id: \"US\",
    name: \"United States\",
    value: 100
  }, {
    id: \"GB\",
    name: \"United Kingdom\",
    value: 100
  }, {
    id: \"CN\",
    name: \"China\",
    value: 100
  }, {
    id: \"IN\",
    name: \"India\",
    value: 100
  }, {
    id: \"AU\",
    name: \"Australia\",
    value: 100
  }, {
    id: \"CA\",
    name: \"Canada\",
    value: 100
  }, {
    id: \"BR\",
    name: \"Brasil\",
    value: 100
  }, {
    id: \"ZA\",
    name: \"South Africa\",
    value: 100
  }
];

var root = am5.Root.new(\"chartdiv\");
root.setThemes([am5themes_Animated.new(root)]);

var chart = root.container.children.push(am5map.MapChart.new(root, {}));

var polygonSeries = chart.series.push(
  am5map.MapPolygonSeries.new(root, {
    geoJSON: am5geodata_worldLow,
    exclude: [\"AQ\"]
  })
);

var bubbleSeries = chart.series.push(
  am5map.MapPointSeries.new(root, {
    valueField: \"value\",
    calculateAggregates: true,
    polygonIdField: \"id\"
  })
);

var circleTemplate = am5.Template.new({});

bubbleSeries.bullets.push(function(root, series, dataItem) {
  var container = am5.Container.new(root, {});

  var circle = container.children.push(
    am5.Circle.new(root, {
      radius: 20,
      fillOpacity: 0.7,
      fill: am5.color(0xff0000),
      cursorOverStyle: \"pointer\",
      tooltipText: `{name}: [bold]{value}[/]`
    }, circleTemplate)
  );

  var countryLabel = container.children.push(
    am5.Label.new(root, {
      text: \"{name}\",
      paddingLeft: 5,
      populateText: true,
      fontWeight: \"bold\",
      fontSize: 13,
      centerY: am5.p50
    })
  );

  circle.on(\"radius\", function(radius) {
    countryLabel.set(\"x\", radius);
  })

  return am5.Bullet.new(root, {
    sprite: container,
    dynamic: true
  });
});

bubbleSeries.bullets.push(function(root, series, dataItem) {
  return am5.Bullet.new(root, {
    sprite: am5.Label.new(root, {
      text: \"{value.formatNumber('#.')}\",
      fill: am5.color(0xffffff),
      populateText: true,
      centerX: am5.p50,
      centerY: am5.p50,
      textAlign: \"center\"
    }),
    dynamic: true
  });
});



// minValue and maxValue must be set for the animations to work
bubbleSeries.set(\"heatRules\", [
  {
    target: circleTemplate,
    dataField: \"value\",
    min: 10,
    max: 50,
    minValue: 0,
    maxValue: 100,
    key: \"radius\"
  }
]);

bubbleSeries.data.setAll(data);

updateData();
setInterval(function() {
  updateData();
}, 2000)

function updateData() {
  for (var i = 0; i < bubbleSeries.dataItems.length; i++) {
    bubbleSeries.data.setIndex(i, { value: Math.round(Math.random() * 100), id: data[i].id, name: data[i].name })
  }
}


}); // end am5.ready()
</script>

<!-- HTML -->
<div id=\"chartdiv\"></div>

", "admin/reportings/map.html.twig", "C:\\Users\\lamfa\\Bureau\\stgja\\templates\\admin\\reportings\\map.html.twig");
    }
}
