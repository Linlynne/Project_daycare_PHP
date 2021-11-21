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

/* error_internal.html.twig */
class __TwigTemplate_c580e0d41d947eb8301b6d401950dbb33129cf35eb60be29ff1e7281ad4d7afd extends \Twig\Template
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
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("master.html.twig", "error_internal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Internal error";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<p>We're sorry, we encoutered an internal error. Our team of coding ninjas is already working on a solution.    
     <a href=\"/\">Click to continue</a>. </p>
     <img src=\"/images/ninja.png\" width=\"100\">

";
    }

    public function getTemplateName()
    {
        return "error_internal.html.twig";
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
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Internal error{% endblock %} 

{% block content %}

<p>We're sorry, we encoutered an internal error. Our team of coding ninjas is already working on a solution.    
     <a href=\"/\">Click to continue</a>. </p>
     <img src=\"/images/ninja.png\" width=\"100\">

{% endblock content %}", "error_internal.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\error_internal.html.twig");
    }
}
