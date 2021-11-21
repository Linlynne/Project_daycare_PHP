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

/* login.html.twig */
class __TwigTemplate_5a32a4155ecf9a36b51389a688ab5dfb9a363f462300befe5d7f7b5e78437a2f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Login";
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
<form class=\"infoform\" method=\"post\">
    <div class=\"col-25\">
    Email
    </div>
    <div class=\"col-75\">
     <input type=\"email\" name=\"email\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "\"><br/>
     </div>
    <div class=\"col-25\">
    Role
    </div>
    <div class=\"col-75\">
     <select name=\"role\">
            <option value=\"parent\">Parent</option>
            <option value=\"educator\">Educator</option>
            <option value=\"admin\">Manager</option>
            </select><br/>
    </div>
    <div class=\"col-25\">
    Password
    </div> 
    <div class=\"col-75\">
    <input type=\"password\" name=\"password\"><br/>
    </div>
    <input type=\"submit\" value=\"Login\">
</form>

<p>no account? <a href=\"/createaccount\">Register Here!</a></p>


";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  83 => 14,  79 => 12,  70 => 10,  66 => 9,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Login{% endblock %}

{% block content %}

{% if errorList %}
    <ul class=\"errorlist\">
    {% for error in errorList %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% endif %}

<form class=\"infoform\" method=\"post\">
    <div class=\"col-25\">
    Email
    </div>
    <div class=\"col-75\">
     <input type=\"email\" name=\"email\" value=\"{{v.email}}\"><br/>
     </div>
    <div class=\"col-25\">
    Role
    </div>
    <div class=\"col-75\">
     <select name=\"role\">
            <option value=\"parent\">Parent</option>
            <option value=\"educator\">Educator</option>
            <option value=\"admin\">Manager</option>
            </select><br/>
    </div>
    <div class=\"col-25\">
    Password
    </div> 
    <div class=\"col-75\">
    <input type=\"password\" name=\"password\"><br/>
    </div>
    <input type=\"submit\" value=\"Login\">
</form>

<p>no account? <a href=\"/createaccount\">Register Here!</a></p>


{% endblock content %}", "login.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\login.html.twig");
    }
}
