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

/* /admin/children_attendance.html.twig */
class __TwigTemplate_c627bd444b23d1d5f986b374e1e4b78c56517f4f51e1506c00b345acc2eb6496 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/master.html.twig", "/admin/children_attendance.html.twig", 1);
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
<h3>Children Attendance</h3>

<form class=\"infoform\" method=\"post\" >
    <div class=\"col-25\">
    Group Name:
    </div>
    <div class=\"col-75\">
     <select name=\"group\">
            <option value=\"1\">Babies</option>
            <option value=\"2\">Toddlers</option>
            <option value=\"3\">Big kids</option>
            <option value=\"4\">Preschoolers</option>
            </select><br/>
    </div>
    <div class=\"col-25\">
    Date: 
    </div>
    <div class=\"col-75\">
    <input type=\"date\" name=\"date\"><br/>
    </div>
    <input type=\"submit\" value=\"Submit\">
</form>

<p> <a href=\"/admin/\"><img src=\"/images/back.jpg\" width=\"40px\"/></a> </p>

";
    }

    public function getTemplateName()
    {
        return "/admin/children_attendance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}

{% block title %}Children Attendance{% endblock %}

{% block content %}

<h3>Children Attendance</h3>

<form class=\"infoform\" method=\"post\" >
    <div class=\"col-25\">
    Group Name:
    </div>
    <div class=\"col-75\">
     <select name=\"group\">
            <option value=\"1\">Babies</option>
            <option value=\"2\">Toddlers</option>
            <option value=\"3\">Big kids</option>
            <option value=\"4\">Preschoolers</option>
            </select><br/>
    </div>
    <div class=\"col-25\">
    Date: 
    </div>
    <div class=\"col-75\">
    <input type=\"date\" name=\"date\"><br/>
    </div>
    <input type=\"submit\" value=\"Submit\">
</form>

<p> <a href=\"/admin/\"><img src=\"/images/back.jpg\" width=\"40px\"/></a> </p>

{% endblock %}", "/admin/children_attendance.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\admin\\children_attendance.html.twig");
    }
}
