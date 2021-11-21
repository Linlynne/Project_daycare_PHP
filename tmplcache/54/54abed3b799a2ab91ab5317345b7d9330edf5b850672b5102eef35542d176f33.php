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

/* userinfo.html.twig */
class __TwigTemplate_73aed613531d2574ab4cd0dae5efccf6fe40d26535bbf904f11aee6265c4dda3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "userinfo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 7
        if (($context["errorList"] ?? null)) {
            // line 8
            echo "    <ul class=\"errorlist\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "        <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
";
        }
        // line 14
        echo "
<h3>User info:</h3>

<form class=\"infoform\" method=\"post\">
    <div class=\"col-25\">
    First Name
    </div>
    <div class=\"col-75\">
     <input type=\"text\" name=\"fname\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "fname", [], "any", false, false, false, 22), "html", null, true);
        echo "\"><br/>
     </div>
    <div class=\"col-25\">
    Last Name 
    </div>
    <div class=\"col-75\">
    <input type=\"text\" name=\"lname\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "lname", [], "any", false, false, false, 28), "html", null, true);
        echo "\"><br/>
    </div>
    <div class=\"col-25\">
    Gender
    </div>
    <div class=\"col-75\"> 
     <select name=\"gender\">
            <option value=\"F\">Female</option>
            <option value=\"M\">Male</option>
            </select><br/>
    </div>
    <div class=\"col-25\">
    Phone Number
    </div>
    <div class=\"col-75\">
     <input type=\"text\" name=\"phone\" placeholder=\"888-888-8888\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "phone", [], "any", false, false, false, 43), "html", null, true);
        echo "\"><br/>
     </div>
    <div class=\"col-25\">
    Address 
    </div>
    <div class=\"col-75\">
    <input type=\"text\" name=\"address\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "address", [], "any", false, false, false, 49), "html", null, true);
        echo "\"><br/>
    </div>
    <input type=\"submit\" value=\"Submit\">
</form>


";
    }

    public function getTemplateName()
    {
        return "userinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 49,  120 => 43,  102 => 28,  93 => 22,  83 => 14,  79 => 12,  70 => 10,  66 => 9,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Register{% endblock %}

{% block content %}

{% if errorList %}
    <ul class=\"errorlist\">
    {% for error in errorList %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% endif %}

<h3>User info:</h3>

<form class=\"infoform\" method=\"post\">
    <div class=\"col-25\">
    First Name
    </div>
    <div class=\"col-75\">
     <input type=\"text\" name=\"fname\" value=\"{{v.fname}}\"><br/>
     </div>
    <div class=\"col-25\">
    Last Name 
    </div>
    <div class=\"col-75\">
    <input type=\"text\" name=\"lname\" value=\"{{v.lname}}\"><br/>
    </div>
    <div class=\"col-25\">
    Gender
    </div>
    <div class=\"col-75\"> 
     <select name=\"gender\">
            <option value=\"F\">Female</option>
            <option value=\"M\">Male</option>
            </select><br/>
    </div>
    <div class=\"col-25\">
    Phone Number
    </div>
    <div class=\"col-75\">
     <input type=\"text\" name=\"phone\" placeholder=\"888-888-8888\" value=\"{{v.phone}}\"><br/>
     </div>
    <div class=\"col-25\">
    Address 
    </div>
    <div class=\"col-75\">
    <input type=\"text\" name=\"address\" value=\"{{v.address}}\"><br/>
    </div>
    <input type=\"submit\" value=\"Submit\">
</form>


{% endblock content %}", "userinfo.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\userinfo.html.twig");
    }
}
