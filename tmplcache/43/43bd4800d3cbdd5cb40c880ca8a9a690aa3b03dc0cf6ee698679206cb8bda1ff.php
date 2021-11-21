<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /admin/growthchart.html.twig */
class __TwigTemplate_f78d2df863ecbd3cf6ca06a7af1a08809baf89501b6f4e32047c27f61d7bb5d9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'addHead' => [$this, 'block_addHead'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/master.html.twig", "/admin/growthchart.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Growth Curve";
    }

    // line 5
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
<h2>Growth Curve</h2>

<h5>Child Name: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["list"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "firstName", [], "any", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["list"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "lastName", [], "any", false, false, false, 13), "html", null, true);
        echo "</h5>

<div id=\"chart\">
    <canvas id=\"myChart\"></canvas>
</div>

<script>

const data = {
  labels: [";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            echo "'";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "noteCreatedTS", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true);
            echo "'";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 22)) {
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
  datasets: [
       {
            label: \"weight(kg)\",
            backgroundColor: \"rgba(30, 144, 255, 0.5)\",
            borderColor: \"rgba(30, 144, 255, 0.5)\",
            data: [";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "weight", [], "any", false, false, false, 28), "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 28)) {
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "]
        },
        {
            label: \"height(cm)\",
            backgroundColor: \"rgba(255,62,150, 0.5)\",
            borderColor: \"rgba(255,62,150, 0.5)\",
            data: [ ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "height", [], "any", false, false, false, 34), "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 34)) {
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ] // [3,3,2,1],   
    }]
};

const config = {
  type: 'line',
  data: data,
  options: {}
};

 const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

<p> <a href=\"/admin/childrenlist\"><img src=\"/images/back.jpg\" width=\"40px\"/></a> </p>
";
    }

    public function getTemplateName()
    {
        return "/admin/growthchart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 34,  129 => 28,  87 => 22,  73 => 13,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}

{% block title %}Growth Curve{% endblock %}

{% block addHead %}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
{% endblock %}

{% block content %}

<h2>Growth Curve</h2>

<h5>Child Name: {{list[0].firstName}} {{list[0].lastName}}</h5>

<div id=\"chart\">
    <canvas id=\"myChart\"></canvas>
</div>

<script>

const data = {
  labels: [{% for val in list %}{{\"\\'\"}}{{val.noteCreatedTS | date('Y-m-d')}}{{\"\\'\"}}{% if not loop.last %},{% endif %}{% endfor %}],
  datasets: [
       {
            label: \"weight(kg)\",
            backgroundColor: \"rgba(30, 144, 255, 0.5)\",
            borderColor: \"rgba(30, 144, 255, 0.5)\",
            data: [{% for val in list %}{{val.weight}}{% if not loop.last %},{% endif %}{% endfor %}]
        },
        {
            label: \"height(cm)\",
            backgroundColor: \"rgba(255,62,150, 0.5)\",
            borderColor: \"rgba(255,62,150, 0.5)\",
            data: [ {% for val in list %}{{val.height}}{% if not loop.last %},{% endif %}{% endfor %} ] // [3,3,2,1],   
    }]
};

const config = {
  type: 'line',
  data: data,
  options: {}
};

 const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

<p> <a href=\"/admin/childrenlist\"><img src=\"/images/back.jpg\" width=\"40px\"/></a> </p>
{% endblock %}", "/admin/growthchart.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\admin\\growthchart.html.twig");
    }
}
