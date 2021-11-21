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

/* educator/educator_board.html.twig */
class __TwigTemplate_c0afa2fe5c8e6473947f0dc096f8e4c83409463377085411a884a1d671c3dae2 extends \Twig\Template
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
        return "educator/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("educator/master.html.twig", "educator/educator_board.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Educator Board";
    }

    // line 3
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo " <link rel=\"stylesheet\" href=\"/css.css\"/>
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
 <script>
    \$(document).ready(function() {
        
        \$(\"#childrenlist1\").click(function(){
            window.location.href=\"/educator/childlist\";
        });
        \$(\"#attendance1\").click(function(){
            window.location.href=\"/educator/child_attendance_detail\";
        });
        \$(\"#waitinglist1\").click(function(){
            window.location.href=\"/educator/childnotes_detail\";
        });
        \$(\"#home1\").click(function(){
            window.location.href=\"/logout\";
        });
    });
 </script>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
<h1 class =\"edu\" onmouseover=\"style.color='yellow'
\"onmouseout=\"style.color='green'\"><img src=\"/images/child.jpg\" width=\"70px\"/>Educator Account</h1>

<div id=\"educatorBoard\">

<button class=\"button1\" id=\"childrenlist1\">Children List(Group)</button>

<button class=\"button1\" id=\"attendance1\">Children Attenance List</button>

<button class=\"button1\" id=\"waitinglist1\">Children Notes List</button>

</div>


<div class = \"pic\"><img src=\"/images/kids.png\" width=\"800\" height=\"250\" /></div>
";
    }

    public function getTemplateName()
    {
        return "educator/educator_board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  82 => 25,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"educator/master.html.twig\" %}
{% block title %}Educator Board{% endblock %}
{% block addHead %}
 <link rel=\"stylesheet\" href=\"/css.css\"/>
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
 <script>
    \$(document).ready(function() {
        
        \$(\"#childrenlist1\").click(function(){
            window.location.href=\"/educator/childlist\";
        });
        \$(\"#attendance1\").click(function(){
            window.location.href=\"/educator/child_attendance_detail\";
        });
        \$(\"#waitinglist1\").click(function(){
            window.location.href=\"/educator/childnotes_detail\";
        });
        \$(\"#home1\").click(function(){
            window.location.href=\"/logout\";
        });
    });
 </script>
{% endblock %}

{% block content %}

<h1 class =\"edu\" onmouseover=\"style.color='yellow'
\"onmouseout=\"style.color='green'\"><img src=\"/images/child.jpg\" width=\"70px\"/>Educator Account</h1>

<div id=\"educatorBoard\">

<button class=\"button1\" id=\"childrenlist1\">Children List(Group)</button>

<button class=\"button1\" id=\"attendance1\">Children Attenance List</button>

<button class=\"button1\" id=\"waitinglist1\">Children Notes List</button>

</div>


<div class = \"pic\"><img src=\"/images/kids.png\" width=\"800\" height=\"250\" /></div>
{% endblock %}", "educator/educator_board.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\educator\\educator_board.html.twig");
    }
}
