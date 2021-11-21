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

/* /admin/waitinglist.html.twig */
class __TwigTemplate_d610591247dbff0846de16ce354e91d0cce1713b79852239f769087e00353008 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/master.html.twig", "/admin/waitinglist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Waitinglist";
    }

    // line 5
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$(\".wadd\").click(function(ev){
            if(!confirm(\"Are you sure you want to add this child into daycare?\")) {
                ev.preventDefault();
                return;
            }else{
                \$form.submit();
            }
        });
        \$(\".wdelete\").click(function(ev){
            if(!confirm(\"Are you sure you want to delete this child?\")) {
                ev.preventDefault();
                return;
            }else{
                \$form.submit();
            }
        });
    });

</script>
 ";
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "
<table class=\"admintable\">
    <tr><th>ID</th><th>Child Name</th><th>Gender</th><th>Date of Birth</th><th>Has Siblings</th><th>Parent Name</th><th>Phone Number</th><th>Email</th><th>Actions</th></tr>
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 35
            echo "        <tr>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "cfname", [], "any", false, false, false, 37), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "clname", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "gender", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dateOfBirth", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "hasSibling", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "pfname", [], "any", false, false, false, 41), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "plname", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "phoneNumber", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "email", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
            <td><form class=\"wadd\" method=\"post\" action=\"/admin/waitinglist/add/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">
                    <input type=\"submit\" value=\"ADD\">
                </form>
                <form class=\"wdelete\" method=\"post\" action=\"/admin/waitinglist/delete/";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\">
                    <input type=\"submit\" value=\"Remove\">
                </form>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</table>

<p> <a href=\"/admin/\"><img src=\"/images/back.jpg\" width=\"40px\"/></a> </p>

";
    }

    public function getTemplateName()
    {
        return "/admin/waitinglist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  143 => 47,  137 => 44,  133 => 43,  129 => 42,  123 => 41,  119 => 40,  115 => 39,  111 => 38,  105 => 37,  101 => 36,  98 => 35,  94 => 34,  89 => 31,  85 => 30,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}

{% block title %}Waitinglist{% endblock %}

{% block addHead %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$(\".wadd\").click(function(ev){
            if(!confirm(\"Are you sure you want to add this child into daycare?\")) {
                ev.preventDefault();
                return;
            }else{
                \$form.submit();
            }
        });
        \$(\".wdelete\").click(function(ev){
            if(!confirm(\"Are you sure you want to delete this child?\")) {
                ev.preventDefault();
                return;
            }else{
                \$form.submit();
            }
        });
    });

</script>
 {% endblock %}

{% block content %}

<table class=\"admintable\">
    <tr><th>ID</th><th>Child Name</th><th>Gender</th><th>Date of Birth</th><th>Has Siblings</th><th>Parent Name</th><th>Phone Number</th><th>Email</th><th>Actions</th></tr>
    {% for a in list %}
        <tr>
            <td>{{a.id}}</td>
            <td>{{a.cfname}} {{a.clname}}</td>
            <td>{{a.gender}}</td>
            <td>{{a.dateOfBirth}}</td>
            <td>{{a.hasSibling}}</td>
            <td>{{a.pfname}} {{a.plname}}</td>
            <td>{{a.phoneNumber}}</td>
            <td>{{a.email}}</td>
            <td><form class=\"wadd\" method=\"post\" action=\"/admin/waitinglist/add/{{a.id}}\">
                    <input type=\"submit\" value=\"ADD\">
                </form>
                <form class=\"wdelete\" method=\"post\" action=\"/admin/waitinglist/delete/{{a.id}}\">
                    <input type=\"submit\" value=\"Remove\">
                </form>
            </td>
        </tr>
    {% endfor %}
</table>

<p> <a href=\"/admin/\"><img src=\"/images/back.jpg\" width=\"40px\"/></a> </p>

{% endblock %}", "/admin/waitinglist.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\admin\\waitinglist.html.twig");
    }
}
