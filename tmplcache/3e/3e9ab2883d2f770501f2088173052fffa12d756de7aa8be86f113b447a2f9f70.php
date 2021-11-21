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

/* /admin/manager_board.html.twig */
class __TwigTemplate_07ee0d9de57c1a77919e1e0e94fc6f348b2de0969f0e9d97f34692ad33f6f438 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/master.html.twig", "/admin/manager_board.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Admin Board";
    }

    // line 5
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo " <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
 <script>
    \$(document).ready(function() {
        \$(\"#userlist\").click(function(){
            window.location.href=\"/admin/userlist\";
        });
        \$(\"#childrenlist\").click(function(){
            window.location.href=\"/admin/childrenlist\";
        });
        \$(\"#attendance\").click(function(){
            window.location.href=\"/admin/attendance\";
        });
        \$(\"#waitinglist\").click(function(){
            window.location.href=\"/admin/waitinglist\";
        });
        \$(\"#groupchart\").click(function(){
            window.location.href=\"/admin/groupchart\";
        });
        \$(\"#userlist1\").click(function(){
            window.location.href=\"/userlist.html\";
        });
    });
 </script>
";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "
<h2>Manager Account</h2><br/><br/>

<div id=\"adminBoard\">

<button class=\"button\" id=\"userlist\">User List</button>

<button class=\"button\" id=\"childrenlist\">Children List</button>

<button class=\"button\" id=\"attendance\">Children Attendance</button>

<button class=\"button\" id=\"waitinglist\">Waitinglist</button>

<button class=\"button\" id=\"groupchart\">Group Chart</button>

<button class=\"button\" id=\"userlist1\">User List (1st version)</button>

</div>

";
    }

    public function getTemplateName()
    {
        return "/admin/manager_board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  86 => 31,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}

{% block title %}Admin Board{% endblock %}

 {% block addHead %}
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
 <script>
    \$(document).ready(function() {
        \$(\"#userlist\").click(function(){
            window.location.href=\"/admin/userlist\";
        });
        \$(\"#childrenlist\").click(function(){
            window.location.href=\"/admin/childrenlist\";
        });
        \$(\"#attendance\").click(function(){
            window.location.href=\"/admin/attendance\";
        });
        \$(\"#waitinglist\").click(function(){
            window.location.href=\"/admin/waitinglist\";
        });
        \$(\"#groupchart\").click(function(){
            window.location.href=\"/admin/groupchart\";
        });
        \$(\"#userlist1\").click(function(){
            window.location.href=\"/userlist.html\";
        });
    });
 </script>
{% endblock %}

{% block content %}

<h2>Manager Account</h2><br/><br/>

<div id=\"adminBoard\">

<button class=\"button\" id=\"userlist\">User List</button>

<button class=\"button\" id=\"childrenlist\">Children List</button>

<button class=\"button\" id=\"attendance\">Children Attendance</button>

<button class=\"button\" id=\"waitinglist\">Waitinglist</button>

<button class=\"button\" id=\"groupchart\">Group Chart</button>

<button class=\"button\" id=\"userlist1\">User List (1st version)</button>

</div>

{% endblock %}", "/admin/manager_board.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\admin\\manager_board.html.twig");
    }
}
