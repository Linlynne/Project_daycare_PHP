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

/* /admin/attendancelist.html.twig */
class __TwigTemplate_714221888abb6c045838ef87670c0ce2414d50b6a6431ff5abea623cdd900226 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("admin/master.html.twig", "/admin/attendancelist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Children Attendance";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h3>Date: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["list"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "date", [], "any", false, false, false, 7), "html", null, true);
        echo "</h3>
<h3>Group: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["list"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "groupName", [], "any", false, false, false, 8), "html", null, true);
        echo "</h3><br/>

<table class=\"admintable\">
    <tr><th>Child Name</th><th>Start Time</th><th>End Time</th><th>Status</th><th>Note</th></tr>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "firstName", [], "any", false, false, false, 14), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "lastName", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "startTime", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "endTime", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
            <td>
            ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, $context["a"], "status", [], "any", false, false, false, 18) == "present")) {
                // line 19
                echo "                <img src=\"/images/daycare.png\" width=\"30\"/>
            ";
            } else {
                // line 21
                echo "                <img src=\"/images/absent.png\" width=\"30\"/>
            ";
            }
            // line 23
            echo "            </td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "note", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>

<p> <a href=\"/admin/attendance\"><img src=\"/images/back.jpg\" width=\"40px\"/></a> </p>

";
    }

    public function getTemplateName()
    {
        return "/admin/attendancelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  107 => 24,  104 => 23,  100 => 21,  96 => 19,  94 => 18,  89 => 16,  85 => 15,  79 => 14,  76 => 13,  72 => 12,  65 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}

{% block title %}Children Attendance{% endblock %}

{% block content %}

<h3>Date: {{list[0].date}}</h3>
<h3>Group: {{list[0].groupName}}</h3><br/>

<table class=\"admintable\">
    <tr><th>Child Name</th><th>Start Time</th><th>End Time</th><th>Status</th><th>Note</th></tr>
    {% for a in list %}
        <tr>
            <td>{{a.firstName}} {{a.lastName}}</td>
            <td>{{a.startTime}}</td>
            <td>{{a.endTime}}</td>
            <td>
            {% if a.status == \"present\" %}
                <img src=\"/images/daycare.png\" width=\"30\"/>
            {% else %}
                <img src=\"/images/absent.png\" width=\"30\"/>
            {% endif %}
            </td>
            <td>{{a.note}}</td>
        </tr>
    {% endfor %}
</table>

<p> <a href=\"/admin/attendance\"><img src=\"/images/back.jpg\" width=\"40px\"/></a> </p>

{% endblock %}", "/admin/attendancelist.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\admin\\attendancelist.html.twig");
    }
}
