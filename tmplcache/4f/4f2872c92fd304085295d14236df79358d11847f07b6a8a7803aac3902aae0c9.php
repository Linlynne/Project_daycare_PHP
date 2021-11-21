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

/* /educator/childnotes_detail.html.twig */
class __TwigTemplate_7b7b279eb5264fa59d9712265a6298a859f8b1e1dcd130fd48ae49d2c539ca83 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "educator/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("educator/master.html.twig", "/educator/childnotes_detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<a  class=\"herf\" href=\"/educator/childlist\"><img src=\"/images/back.jpg\" width=\"40px\"/></a>
<h1 class=\"edu\"onmouseover=\"style.color='yellow'
\"onmouseout=\"style.color='green'\" ><img src=\"/images/child.jpg\" width=\"70px\"/> Children Note List</h1>


<table class=\"admintable1\">
    <tr> <th class= \"th1\">First Name </th> <th class= \"th1\">Last Name</th> <th class= \"th\">Photo</th> <th class= \"th\">Height(cm)</th> <th class= \"th\" >Weight(kg)</th> <th class= \"th\">Skill</th> <th class= \"th\">Notes</th> <th class= \"th\">Record Date</th></tr>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 12
            echo "        <tr>
            <td class= \"th\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "firstName", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
            <td class= \"th\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "lastName", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
            <td class= \"th1\"><img src=\"../";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "photoFilePath", [], "any", false, false, false, 15), "html", null, true);
            echo "\" width=\"150\" height=\"120\"></td>
            <td class= \"th\" >";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "height", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
            <td class= \"th\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "weight", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
            <td class= \"th\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "skills", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
            <td  class= \"th1\"> ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "note", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
             <td class= \"th1\" >";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "noteCreatedTS", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
           
            
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>
<div class = \"pic\"><img src=\"/images/kids.png\" width=\"800\" height=\"250\" /></div>
";
    }

    public function getTemplateName()
    {
        return "/educator/childnotes_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  63 => 12,  59 => 11,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"educator/master.html.twig\" %}

{% block content %}
<a  class=\"herf\" href=\"/educator/childlist\"><img src=\"/images/back.jpg\" width=\"40px\"/></a>
<h1 class=\"edu\"onmouseover=\"style.color='yellow'
\"onmouseout=\"style.color='green'\" ><img src=\"/images/child.jpg\" width=\"70px\"/> Children Note List</h1>


<table class=\"admintable1\">
    <tr> <th class= \"th1\">First Name </th> <th class= \"th1\">Last Name</th> <th class= \"th\">Photo</th> <th class= \"th\">Height(cm)</th> <th class= \"th\" >Weight(kg)</th> <th class= \"th\">Skill</th> <th class= \"th\">Notes</th> <th class= \"th\">Record Date</th></tr>
    {% for a in list %}
        <tr>
            <td class= \"th\">{{a.firstName}}</td>
            <td class= \"th\">{{a.lastName}}</td>
            <td class= \"th1\"><img src=\"../{{a.photoFilePath}}\" width=\"150\" height=\"120\"></td>
            <td class= \"th\" >{{a.height}}</td>
            <td class= \"th\">{{a.weight}}</td>
            <td class= \"th\">{{a.skills}}</td>
            <td  class= \"th1\"> {{a.note}}</td>
             <td class= \"th1\" >{{a.noteCreatedTS}}</td>
           
            
        </tr>
    {% endfor %}
</table>
<div class = \"pic\"><img src=\"/images/kids.png\" width=\"800\" height=\"250\" /></div>
{% endblock content %}
", "/educator/childnotes_detail.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\educator\\childnotes_detail.html.twig");
    }
}
