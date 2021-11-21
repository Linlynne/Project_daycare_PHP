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

/* /admin/childrenlist.html.twig */
class __TwigTemplate_b69221ee2db37476ebddb4e61e085ae957d337abaf9261067ab842c7d7c300f1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/master.html.twig", "/admin/childrenlist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Children List";
    }

    // line 5
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$(\".subbutton\").click(function(ev){
            if(!confirm(\"Are you sure you want to delete this child?\")) {
                ev.preventDefault();
                return;
            }
            else{
                \$form.submit();
            }
        });
    });

</script>
        ";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 26
            echo "<h3>Class Name: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "gname", [], "any", false, false, false, 26), "html", null, true);
            echo "</h3>
<h3>Educator: ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "tfname", [], "any", false, false, false, 27), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "tlname", [], "any", false, false, false, 27), "html", null, true);
            echo "</h3>
<table class=\"admintable\">
    <tr><th>Child Name</th><th>gender</th><th>dateOfBirth</th><th>firstSchoolDay</th><th>Parent Name</th><th>Phone Number</th><th>Action</th><th>Growth Curve</th></tr>
    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 31
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, $context["a"], "groupName", [], "any", false, false, false, 31) == twig_get_attribute($this->env, $this->source, $context["g"], "gname", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "        <tr>
            <td>";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "cfname", [], "any", false, false, false, 33), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "clname", [], "any", false, false, false, 33), "html", null, true);
                    echo "</td>
            <td>";
                    // line 34
                    if ((twig_get_attribute($this->env, $this->source, $context["a"], "gender", [], "any", false, false, false, 34) == "F")) {
                        // line 35
                        echo "  <img src=\"/images/female.png\" width=\"30px\"/>
";
                    } else {
                        // line 37
                        echo "   <img src=\"/images/male.png\" width=\"30px\"/>
";
                    }
                    // line 38
                    echo "</td>
            
            <td>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "cdob", [], "any", false, false, false, 40), "html", null, true);
                    echo "</td>
            <td>";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "cfsd", [], "any", false, false, false, 41), "html", null, true);
                    echo "</td>
            <td>";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "pfname", [], "any", false, false, false, 42), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "plname", [], "any", false, false, false, 42), "html", null, true);
                    echo "</td>
            <td>";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "phone", [], "any", false, false, false, 43), "html", null, true);
                    echo "</td>
            <td>
                <form method=\"post\" action=\"/admin/childrenlist/delete/";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 45), "html", null, true);
                    echo "\">
                    <input class=\"subbutton\" type=\"submit\" value=\"Remove\"/>
                </form>
            </td>
            <td>
                <a href=\"/admin/growthchart/";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 50), "html", null, true);
                    echo "\"><img src=\"/images/trend.png\" width=\"30px\"/></a>
            </td>
        </tr>
        ";
                }
                // line 54
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "<div class=\"pageNavigation\">
";
        // line 58
        if (($context["prevNo"] ?? null)) {
            echo "<a href=\"/admin/childrenlist/";
            echo twig_escape_filter($this->env, ($context["prevNo"] ?? null), "html", null, true);
            echo "\"><img src=\"/images/prev.png\" width=\"30\"/></a>";
        }
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["no"]) {
            // line 60
            echo "    ";
            if (($context["no"] == ($context["pageNo"] ?? null))) {
                // line 61
                echo "        ";
                echo twig_escape_filter($this->env, $context["no"], "html", null, true);
                echo "
    ";
            } else {
                // line 63
                echo "    <a id=\"index\" href=\"/admin/childrenlist/";
                echo twig_escape_filter($this->env, $context["no"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["no"], "html", null, true);
                echo "</a>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['no'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        if (($context["nextNo"] ?? null)) {
            echo "<a href=\"/admin/childrenlist/";
            echo twig_escape_filter($this->env, ($context["nextNo"] ?? null), "html", null, true);
            echo "\"><img src=\"/images/next.png\" width=\"30\"/></a>";
        }
        // line 67
        echo "</div>

<p> <a href=\"/admin/\"><img src=\"/images/back.jpg\" width=\"40px\"/></a> </p>

";
    }

    public function getTemplateName()
    {
        return "/admin/childrenlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 67,  213 => 66,  201 => 63,  195 => 61,  192 => 60,  188 => 59,  182 => 58,  179 => 57,  172 => 55,  166 => 54,  159 => 50,  151 => 45,  146 => 43,  140 => 42,  136 => 41,  132 => 40,  128 => 38,  124 => 37,  120 => 35,  118 => 34,  112 => 33,  109 => 32,  106 => 31,  102 => 30,  94 => 27,  89 => 26,  85 => 25,  82 => 24,  78 => 23,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}

{% block title %}Children List{% endblock %}

{% block addHead %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$(\".subbutton\").click(function(ev){
            if(!confirm(\"Are you sure you want to delete this child?\")) {
                ev.preventDefault();
                return;
            }
            else{
                \$form.submit();
            }
        });
    });

</script>
        {% endblock %}

{% block content %}

{% for g in groupList %}
<h3>Class Name: {{g.gname}}</h3>
<h3>Educator: {{g.tfname}} {{g.tlname}}</h3>
<table class=\"admintable\">
    <tr><th>Child Name</th><th>gender</th><th>dateOfBirth</th><th>firstSchoolDay</th><th>Parent Name</th><th>Phone Number</th><th>Action</th><th>Growth Curve</th></tr>
    {% for a in list %}
    {% if a.groupName == g.gname %}
        <tr>
            <td>{{a.cfname}} {{a.clname}}</td>
            <td>{% if a.gender == \"F\" %}
  <img src=\"/images/female.png\" width=\"30px\"/>
{% else %}
   <img src=\"/images/male.png\" width=\"30px\"/>
{% endif %}</td>
            
            <td>{{a.cdob}}</td>
            <td>{{a.cfsd}}</td>
            <td>{{a.pfname}} {{a.plname}}</td>
            <td>{{a.phone}}</td>
            <td>
                <form method=\"post\" action=\"/admin/childrenlist/delete/{{a.id}}\">
                    <input class=\"subbutton\" type=\"submit\" value=\"Remove\"/>
                </form>
            </td>
            <td>
                <a href=\"/admin/growthchart/{{a.id}}\"><img src=\"/images/trend.png\" width=\"30px\"/></a>
            </td>
        </tr>
        {% endif %}
    {% endfor %}
</table>
{% endfor %}
<div class=\"pageNavigation\">
{% if prevNo %}<a href=\"/admin/childrenlist/{{prevNo}}\"><img src=\"/images/prev.png\" width=\"30\"/></a>{% endif %}
{% for no in 1 .. 4 %}
    {% if no == pageNo %}
        {{no}}
    {% else %}
    <a id=\"index\" href=\"/admin/childrenlist/{{no}}\">{{no}}</a>
    {% endif %}
{% endfor %}
{% if nextNo %}<a href=\"/admin/childrenlist/{{nextNo}}\"><img src=\"/images/next.png\" width=\"30\"/></a>{% endif %}
</div>

<p> <a href=\"/admin/\"><img src=\"/images/back.jpg\" width=\"40px\"/></a> </p>

{% endblock %}", "/admin/childrenlist.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\admin\\childrenlist.html.twig");
    }
}
