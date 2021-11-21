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

/* parent/master.html.twig */
class __TwigTemplate_31404fde714ea6b698c94708474916db4c4a321af743fef6211fc531865d927f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'addHead' => [$this, 'block_addHead'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
    <script src=\"https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>
    <script> tinymce.init({ selector: 'textarea[name=content]'  });  </script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" />
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <link rel=\"shortcut icon\" href=\"images/daycare.png\"/>
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald|Noto+Sans\">
    <link rel=\"stylesheet\" href=\"/style.css\"/>
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo " - ABC Daycare</title>
        ";
        // line 13
        $this->displayBlock('addHead', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 18
        echo "    <div class= \"headerColor sticky-top\">
        <div class=\"container headerColor\">
            <nav class=\"navbar navbar-expand-lg navbar-light\">

            <a class=\"navbar-brand\" href=\"/\">
                <img src=\"/images/logo.png\" class=\"ml-auto headerLogo\" alt=\"Responsive image\">
            </a>

            <button class=\"navbar-toggler collapsed navDropdown\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-angle-double-down\"></i>
            </button>

            <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\"><a href=\"/\" class=\"nav-link\"><h2 class=\"headerText\">Home</h2></a></li>
                <li class=\"nav-item\"><a href=\"/\" class=\"nav-link\"><h2 class=\"headerText\">Curriculum</h2></a></li>
                <li class=\"nav-item\"><a href=\"/\" class=\"nav-link\"><h2 class=\"headerText\">Classrooms</h2></a></li>
                <li class=\"nav-item\"><a href=\"/\" class=\"nav-link\"><h2 class=\"headerText\">Nutrition</h2></a></li>
                <li class=\"nav-item\"><a href=\"/\" class=\"nav-link\"><h2 class=\"headerText\">Calendar</h2></a></li>
                <li class=\"nav-item\"><a href=\"/logout\" class=\"nav-link\"><h2 class=\"headerText\">Logout</h2></a></li>
                </ul>
            </div>

            </nav>
        </div>
    </div>

    ";
        // line 51
        echo "



        <div id=\"centeredContent\">
        ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "        </div>

<!-- Footer -->
<footer class=\"text-center text-lg-start bg-light text-muted\">
  <!-- Section: Social media -->
  <section
    class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\"
  >
    <!-- Left -->
    <div class=\"me-5 d-none d-lg-block\">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-facebook-f\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-twitter\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-google\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-instagram\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-linkedin\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-github\"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class=\"\">
    <div class=\"container text-center text-md-start mt-5\">
      <!-- Grid row -->
      <div class=\"row mt-3\">
        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
          <!-- Content -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            <i class=\"fas fa-gem me-3\"></i>ABC Daycare
          </h6>
          <p>
            <strong>Hours:</strong></br>
            Mon. 7:30 - 18:00</br>
            Tue. 7:30 - 18:00</br>
            Wed. 7:30 - 18:00</br>
            Thu. 7:30 - 18:00</br>
            Fri. 7:30 - 18:00</br>
            Sat. Closed</br>
            Sun. Closed
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Groups
          </h6>
          <p>
            <a href=\"#!\" class=\"text-reset\">Babies</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Toddlers</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Big kids</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Preschoolers</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Useful links
          </h6>
          <p>
            <a href=\"#!\" class=\"text-reset\">Curriculum</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Classrooms</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Nutrition</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Calendar</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Contact
          </h6>
          <p><i class=\"fas fa-home me-3\"></i> 4176-4178, 4180 Grand Blvd., Montréal, QC H4B 2X4</p>
          <p>
            <i class=\"fas fa-envelope me-3\"></i>
            contact@abcdaycare.com
          </p>
          <p><i class=\"fas fa-phone me-3\"></i> + 01 514 555 5555</p>
          <p><i class=\"fas fa-print me-3\"></i> + 01 514 666 6666</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
    © 2021 Copyright:
    <a class=\"text-reset fw-bold\" href=\"#\">abcdaycare.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    ";
        // line 192
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    </body>
</html>";
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 13
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        ";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "parent/master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  259 => 56,  255 => 14,  251 => 13,  245 => 12,  237 => 192,  101 => 57,  99 => 56,  92 => 51,  63 => 18,  59 => 15,  57 => 13,  53 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
    <script src=\"https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>
    <script> tinymce.init({ selector: 'textarea[name=content]'  });  </script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" />
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <link rel=\"shortcut icon\" href=\"images/daycare.png\"/>
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald|Noto+Sans\">
    <link rel=\"stylesheet\" href=\"/style.css\"/>
    <title>{% block title %}{% endblock %} - ABC Daycare</title>
        {% block addHead %}
        {% endblock %}
    </head>
    <body>
        {# header #}
    <div class= \"headerColor sticky-top\">
        <div class=\"container headerColor\">
            <nav class=\"navbar navbar-expand-lg navbar-light\">

            <a class=\"navbar-brand\" href=\"/\">
                <img src=\"/images/logo.png\" class=\"ml-auto headerLogo\" alt=\"Responsive image\">
            </a>

            <button class=\"navbar-toggler collapsed navDropdown\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-angle-double-down\"></i>
            </button>

            <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\"><a href=\"/\" class=\"nav-link\"><h2 class=\"headerText\">Home</h2></a></li>
                <li class=\"nav-item\"><a href=\"/\" class=\"nav-link\"><h2 class=\"headerText\">Curriculum</h2></a></li>
                <li class=\"nav-item\"><a href=\"/\" class=\"nav-link\"><h2 class=\"headerText\">Classrooms</h2></a></li>
                <li class=\"nav-item\"><a href=\"/\" class=\"nav-link\"><h2 class=\"headerText\">Nutrition</h2></a></li>
                <li class=\"nav-item\"><a href=\"/\" class=\"nav-link\"><h2 class=\"headerText\">Calendar</h2></a></li>
                <li class=\"nav-item\"><a href=\"/logout\" class=\"nav-link\"><h2 class=\"headerText\">Logout</h2></a></li>
                </ul>
            </div>

            </nav>
        </div>
    </div>

    {# <div class=\"container\">
        <nav class=\"navbar navbar-inverse fixed-bottom text-center\">
        <h6 class=\"text-dark text-center\">&copy; Copyright 2011 by <a href=\"http://daycare/\">you</a>.</h6>
        
        </nav>
    </div> #}




        <div id=\"centeredContent\">
        {% block content %}{% endblock %}
        </div>

<!-- Footer -->
<footer class=\"text-center text-lg-start bg-light text-muted\">
  <!-- Section: Social media -->
  <section
    class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\"
  >
    <!-- Left -->
    <div class=\"me-5 d-none d-lg-block\">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-facebook-f\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-twitter\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-google\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-instagram\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-linkedin\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-github\"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class=\"\">
    <div class=\"container text-center text-md-start mt-5\">
      <!-- Grid row -->
      <div class=\"row mt-3\">
        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
          <!-- Content -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            <i class=\"fas fa-gem me-3\"></i>ABC Daycare
          </h6>
          <p>
            <strong>Hours:</strong></br>
            Mon. 7:30 - 18:00</br>
            Tue. 7:30 - 18:00</br>
            Wed. 7:30 - 18:00</br>
            Thu. 7:30 - 18:00</br>
            Fri. 7:30 - 18:00</br>
            Sat. Closed</br>
            Sun. Closed
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Groups
          </h6>
          <p>
            <a href=\"#!\" class=\"text-reset\">Babies</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Toddlers</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Big kids</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Preschoolers</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Useful links
          </h6>
          <p>
            <a href=\"#!\" class=\"text-reset\">Curriculum</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Classrooms</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Nutrition</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Calendar</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Contact
          </h6>
          <p><i class=\"fas fa-home me-3\"></i> 4176-4178, 4180 Grand Blvd., Montréal, QC H4B 2X4</p>
          <p>
            <i class=\"fas fa-envelope me-3\"></i>
            contact@abcdaycare.com
          </p>
          <p><i class=\"fas fa-phone me-3\"></i> + 01 514 555 5555</p>
          <p><i class=\"fas fa-print me-3\"></i> + 01 514 666 6666</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
    © 2021 Copyright:
    <a class=\"text-reset fw-bold\" href=\"#\">abcdaycare.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    {# scripts #}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    </body>
</html>", "parent/master.html.twig", "C:\\xampp\\htdocs\\daycare\\templates\\parent\\master.html.twig");
    }
}
