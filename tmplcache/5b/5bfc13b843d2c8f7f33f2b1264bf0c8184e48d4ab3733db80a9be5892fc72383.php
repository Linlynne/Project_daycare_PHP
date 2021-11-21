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

/* /educator/noteHistory.html.twig */
class __TwigTemplate_27270bf1de375fbfad4ccbec6e90860669b0943b520db25ec871871f94ef6f15 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("educator/master.html.twig", "/educator/noteHistory.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<a class=\"herf\" href=\"/educator/childlist\"> <img src=\"/images/back.jpg\" width=\"40px\"/></a>
<h1 class=\"edu\" onmouseover=\"style.color='yellow'
\"onmouseout=\"style.color='green'\"><img src=\"/images/child.jpg\" width=\"70px\"/>Child Note List</h1>

<a class=\"herf3\" href=\"/educator/addchildnotes?childId=";
        // line 8
        echo twig_escape_filter($this->env, ($context["childId"] ?? null), "html", null, true);
        echo "\"><img src=\"/images/note.jpg\" width=\"60px\"/></a> </p>
<h5  class\"date\">Date: ";
        // line 9
        echo twig_escape_filter($this->env, ($context["today"] ?? null), "html", null, true);
        echo "<h5><br>

<table class=\"admintable1\">
    <tr> <th>First Name:";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "firstName", [], "any", false, false, false, 12), "html", null, true);
        echo "</th>
    <th>Last Name:";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "lastName", [], "any", false, false, false, 13), "html", null, true);
        echo "</td></tr>
    <tr>  <th  class=\"th\">Photo</th> <th  class=\"th\">Height(cm)</th><th class=\"th\">Weight(kg)</th> <th  class=\"th\">Skill</th><th class=\"th\">Notes</th> <th class=\"th\">Record Date</th> <th class=\"th\">Edit</th><th class=\"th\">Remove</th></tr>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 16
            echo "        <tr>
           <td class=\"th1\" ><img src=\"../";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "photoFilePath", [], "any", false, false, false, 17), "html", null, true);
            echo "\" width=\"150\" hight=\"100\" alt=\"notepic\"></td>

            <td  class=\"th\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "height", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
            <td class=\"th\" >";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "weight", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
            <td  class=\"th\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "skills", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
            <td  class=\"th1\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "note", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
             <td  class=\"th\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "noteCreatedTS", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td ><a class=\"herf1\" href=\"/educator/note_edit?noteId=";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\"><img src=\"/images/pencil.png\" width=\"30px\"/> </a></td>
           <td> <a class=\"herf2\" href=\"/educator/note_remove?noteId=";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "&childId=";
            echo twig_escape_filter($this->env, ($context["childId"] ?? null), "html", null, true);
            echo "\"><img src=\"/images/remove-friend.png\" width=\"30px\"/></a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</table>
<div class = \"pic\"><img src=\"/images/kids.png\" width=\"800\" height=\"250\" /></div>
";
    }

    public function getTemplateName()
    {
        return "/educator/noteHistory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 28,  111 => 25,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  87 => 19,  82 => 17,  79 => 16,  75 => 15,  70 => 13,  66 => 12,  60 => 9,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"educator/master.html.twig\" %}

{% block content %}
<a class=\"herf\" href=\"/educator/childlist\"> <img src=\"/images/back.jpg\" width=\"40px\"/></a>
<h1 class=\"edu\" onmouseover=\"style.color='yellow'
\"onmouseout=\"style.color='green'\"><img src=\"/images/child.jpg\" width=\"70px\"/>Child Note List</h1>

<a class=\"herf3\" href=\"/educator/addchildnotes?childId={{childId}}\"><img src=\"/images/note.jpg\" width=\"60px\"/></a> </p>
<h5  class\"date\">Date: {{today}}<h5><br>

<table class=\"admintable1\">
    <tr> <th>First Name:{{child.firstName}}</th>
    <th>Last Name:{{child.lastName}}</td></tr>
    <tr>  <th  class=\"th\">Photo</th> <th  class=\"th\">Height(cm)</th><th class=\"th\">Weight(kg)</th> <th  class=\"th\">Skill</th><th class=\"th\">Notes</th> <th class=\"th\">Record Date</th> <th class=\"th\">Edit</th><th class=\"th\">Remove</th></tr>
    {% for a in list %}
        <tr>
           <td class=\"th1\" ><img src=\"../{{a.photoFilePath}}\" width=\"150\" hight=\"100\" alt=\"notepic\"></td>

            <td  class=\"th\">{{a.height}}</td>
            <td class=\"th\" >{{a.weight}}</td>
            <td  class=\"th\">{{a.skills}}</td>
            <td  class=\"th1\">{{a.note}}</td>
             <td  class=\"th\">{{a.noteCreatedTS}}</td>
            <td ><a class=\"herf1\" href=\"/educator/note_edit?noteId={{a.id}}\"><img src=\"/images/pencil.png\" width=\"30px\"/> </a></td>
           <td> <a class=\"herf2\" href=\"/educator/note_remove?noteId={{a.id}}&childId={{childId}}\"><img src=\"/images/remove-friend.png\" width=\"30px\"/></a></td>
        </tr>
    {% endfor %}
</table>
<div class = \"pic\"><img src=\"/images/kids.png\" width=\"800\" height=\"250\" /></div>
{% endblock content %}
", "/educator/noteHistory.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\educator\\noteHistory.html.twig");
    }
}
