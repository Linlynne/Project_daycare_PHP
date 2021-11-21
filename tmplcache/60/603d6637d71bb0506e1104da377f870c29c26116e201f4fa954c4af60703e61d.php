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

/* admin/error_access_denied.html.twig */
class __TwigTemplate_5bafdaef1ab2af7e8b32f9c1b4e605f3d0b7d41b8d779cae37eb3bed1c288f86 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/error_access_denied.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Access denied";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<p>Access denied<img src=\"/images/stop.png\" width=30px /></p>   
<p>Access denied. You must be logged in as adminstrator to access this page.</p> 
<a href=\"/\">Click to continue</a>. </p>

";
    }

    public function getTemplateName()
    {
        return "admin/error_access_denied.html.twig";
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

{% block title %}Access denied{% endblock %} 

{% block content %}

<p>Access denied<img src=\"/images/stop.png\" width=30px /></p>   
<p>Access denied. You must be logged in as adminstrator to access this page.</p> 
<a href=\"/\">Click to continue</a>. </p>

{% endblock content %}", "admin/error_access_denied.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\admin\\error_access_denied.html.twig");
    }
}
