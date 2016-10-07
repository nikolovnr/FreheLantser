<?php

/* master.html.twig */
class __TwigTemplate_6507eef089410e554b0c88ae100188c291182b04a084868f77c75c3149738588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">        
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"Find freelancers and freelance jobs on FreheLantser - the world's smallest online IT workplace.\">
        <meta name=\"author\" content=\"Nathalie Desrosiers &  Nikolay Nikolov\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"../../../styles.css\" />         
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>   
        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>        
        ";
        // line 14
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
        <!-- *************************************************************** -->
        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" id=\"navigation\">
            <div class=\"container whiteContainer\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type =\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <img src=\"/images/logo.png\" alt=\"FreheLantser logo\" width=\"100\">
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <h2>Where freelancers and employers meet</h2>
                        </li>
                        <li>
                            <a href=\"#\"><span class=\"glyphicon glyphicon-eye-open\"></span>&nbsp;Browse</a>
                        </li>
                        <li>
                            <a href=\"#\"><span class=\"glyphicon glyphicon-question-sign\"></span>&nbsp;How it works</a>
                        </li>
                        <li>
                            <a href=\"/register\"><span class=\"glyphicon glyphicon-pencil\"></span>&nbsp;Sign up</a>
                        </li>
                        <li>
                            <a href=\"/login\"><span class=\"glyphicon glyphicon-log-in\"></span>&nbsp;Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- *************************************************************** -->
        <!-- Main content -->
        <div id=\"blueContainer\">
            <br><br><br><br>
            <div id=\"container\" class=\"container text-center\">";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        echo "</div>            
        </div> 
        <!-- *************************************************************** -->                
        <!-- Footer -->
        <div >
            <div id=\"footer\"></div>
            <div class=\"container-fluid text-center whiteContainer\">
                                       
                <footer>
                    <hr> 
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <p>Copyright &copy 2016 by <a href=\"http://www.frehelantser.ipd8.info\">Nathalie Desrosiers &  Nikolay Nikolov</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->            
<!--<script src=\"../../../bootstrap/js/jquery.js\"></script>-->
<!-- Bootstrap core Javascript -->
<!-- <script src=\"../../../bootstrap/js/bootstrap.min.js\"></script>-->
<!-- Or maybe these links as well -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js\" integrity=\"sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js\" integrity=\"sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\" integrity=\"sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU\" crossorigin=\"anonymous\"></script>
</body>
</html> 
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        // line 15
        echo "        ";
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 58,  129 => 15,  126 => 14,  121 => 13,  86 => 58,  42 => 16,  40 => 14,  36 => 13,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">        
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"Find freelancers and freelance jobs on FreheLantser - the world's smallest online IT workplace.\">
        <meta name=\"author\" content=\"Nathalie Desrosiers &  Nikolay Nikolov\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"../../../styles.css\" />         
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>   
        <title>{% block title %}{% endblock %}</title>        
        {% block head %}
        {% endblock %}
    </head>
    <body>
        <!-- *************************************************************** -->
        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" id=\"navigation\">
            <div class=\"container whiteContainer\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type =\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <img src=\"/images/logo.png\" alt=\"FreheLantser logo\" width=\"100\">
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <h2>Where freelancers and employers meet</h2>
                        </li>
                        <li>
                            <a href=\"#\"><span class=\"glyphicon glyphicon-eye-open\"></span>&nbsp;Browse</a>
                        </li>
                        <li>
                            <a href=\"#\"><span class=\"glyphicon glyphicon-question-sign\"></span>&nbsp;How it works</a>
                        </li>
                        <li>
                            <a href=\"/register\"><span class=\"glyphicon glyphicon-pencil\"></span>&nbsp;Sign up</a>
                        </li>
                        <li>
                            <a href=\"/login\"><span class=\"glyphicon glyphicon-log-in\"></span>&nbsp;Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- *************************************************************** -->
        <!-- Main content -->
        <div id=\"blueContainer\">
            <br><br><br><br>
            <div id=\"container\" class=\"container text-center\">{% block content %}{% endblock %}</div>            
        </div> 
        <!-- *************************************************************** -->                
        <!-- Footer -->
        <div >
            <div id=\"footer\"></div>
            <div class=\"container-fluid text-center whiteContainer\">
                                       
                <footer>
                    <hr> 
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <p>Copyright &copy 2016 by <a href=\"http://www.frehelantser.ipd8.info\">Nathalie Desrosiers &  Nikolay Nikolov</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->            
<!--<script src=\"../../../bootstrap/js/jquery.js\"></script>-->
<!-- Bootstrap core Javascript -->
<!-- <script src=\"../../../bootstrap/js/bootstrap.min.js\"></script>-->
<!-- Or maybe these links as well -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js\" integrity=\"sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js\" integrity=\"sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\" integrity=\"sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU\" crossorigin=\"anonymous\"></script>
</body>
</html> 
";
    }
}
