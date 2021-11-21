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

/* /educator/child_attendance_detail.html.twig */
class __TwigTemplate_8ff76ddcc83acae0822ac01f7a0a09a8d5e1c0b90ccf449f339c442046f4fe45 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("educator/master.html.twig", "/educator/child_attendance_detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<a class=\"herf\" href=\"/educator/childlist\"><img src=\"/images/back.jpg\" width=\"40px\"/></a><br>
<h1 class=\"edu\"onmouseover=\"style.color='yellow'
\"onmouseout=\"style.color='green'\" ><img src=\"/images/child.jpg\" width=\"70px\"/>Children Attendance List</h1>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ajaxError(function() {
        alert(\"AJAX error\");
    });
    \$(document).ready(function() {
            \$.ajax({
                url: '/educator/child_attendance_detail_json',
                type: 'GET',
                //data: josnString,
                dataType: 'json'
            }).done(function (attendanceList) {
                alert(\"Records were fetched\");
                refreshUserList(attendanceList);
        });
    });

    function refreshUserList(attendanceList) {

        var tbody = '<tr>  <th class=\"th1\"> First name</th> <th class= \"th1\">Last Name</th> <th class =\"th1\">Date</th> <th class= \"th1\">Start Time</th> <th class = \"th1\">End Time</th> <th class = \"th1\">Staus</th> <th class =\"th1\">Note</th> </tr>';
        for (var i = 0; i < attendanceList.length; i++) {
            var attendance = attendanceList[i];
            tbody += '<td class = \"th\">' + attendance.firstName + '</td>';
            tbody += '<td class = \"th\">' + attendance.lastName + '</td>';
            tbody += '<td class = \"th\">' + attendance.date + '</td>';
            tbody += '<td class = \"th\">' + attendance.startTime + '</td>';
            tbody += '<td class = \"th\">' + attendance.endTime + '</td>';
            tbody += '<td class = \"th\">' + attendance.status + '</td>';
            tbody += '<td class = \"th\">' + attendance.note + '</td>';
            tbody += '</tr>';
        }
        \$(\"#attendanceList\").html(tbody);
            
    }
</script>

<table class=\"admintable1\" id=\"attendanceList\">

</table>

<div class = \"pic\"><img src=\"/images/kids.png\" width=\"800\" height=\"250\" /></div>

";
    }

    public function getTemplateName()
    {
        return "/educator/child_attendance_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"educator/master.html.twig\" %}
{% block content %}
<a class=\"herf\" href=\"/educator/childlist\"><img src=\"/images/back.jpg\" width=\"40px\"/></a><br>
<h1 class=\"edu\"onmouseover=\"style.color='yellow'
\"onmouseout=\"style.color='green'\" ><img src=\"/images/child.jpg\" width=\"70px\"/>Children Attendance List</h1>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ajaxError(function() {
        alert(\"AJAX error\");
    });
    \$(document).ready(function() {
            \$.ajax({
                url: '/educator/child_attendance_detail_json',
                type: 'GET',
                //data: josnString,
                dataType: 'json'
            }).done(function (attendanceList) {
                alert(\"Records were fetched\");
                refreshUserList(attendanceList);
        });
    });

    function refreshUserList(attendanceList) {

        var tbody = '<tr>  <th class=\"th1\"> First name</th> <th class= \"th1\">Last Name</th> <th class =\"th1\">Date</th> <th class= \"th1\">Start Time</th> <th class = \"th1\">End Time</th> <th class = \"th1\">Staus</th> <th class =\"th1\">Note</th> </tr>';
        for (var i = 0; i < attendanceList.length; i++) {
            var attendance = attendanceList[i];
            tbody += '<td class = \"th\">' + attendance.firstName + '</td>';
            tbody += '<td class = \"th\">' + attendance.lastName + '</td>';
            tbody += '<td class = \"th\">' + attendance.date + '</td>';
            tbody += '<td class = \"th\">' + attendance.startTime + '</td>';
            tbody += '<td class = \"th\">' + attendance.endTime + '</td>';
            tbody += '<td class = \"th\">' + attendance.status + '</td>';
            tbody += '<td class = \"th\">' + attendance.note + '</td>';
            tbody += '</tr>';
        }
        \$(\"#attendanceList\").html(tbody);
            
    }
</script>

<table class=\"admintable1\" id=\"attendanceList\">

</table>

<div class = \"pic\"><img src=\"/images/kids.png\" width=\"800\" height=\"250\" /></div>

{% endblock content %}", "/educator/child_attendance_detail.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\educator\\child_attendance_detail.html.twig");
    }
}
