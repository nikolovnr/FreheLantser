<?php

/* index.html.twig */
class __TwigTemplate_0332183e9d45b3daac036740c3b01486b5ca4fd2bd580f8eb15b57a46a552ff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        echo "    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <!-- No script. Nothing to do nor validate. This page is for introduction only. -->
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <!-- ******************************************************************* -->
    <!-- Container (Services Section) -->
    <div id=\"services\" class=\"container-fluid text-center blueContainer\">
        <br>
        ";
        // line 15
        if ((isset($context["sessionUser"]) ? $context["sessionUser"] : null)) {
            // line 16
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
            echo "
        ";
        }
        // line 18
        echo "        <h2>Work with the perfect team members</h2>
        <br>
        <div class=\"row slideanim\">
            <div class=\"col-sm-4\">
                <img src=\"/images/web_developers.png\" alt=\"Web developers logo\" height=\"100\">
                <h4>WEB DEVELOPERS</h4>      
            </div>
            <div class=\"col-sm-4\">
                <img src=\"/images/mobile_developers.png\" alt=\"Mobile developers logo\" height=\"100\">
                <h4>MOBILE DEVELOPERS</h4>
            </div>
            <div class=\"col-sm-4\">
                <img src=\"/images/desktop_app_developers.png\" alt=\"Desktop app developers logo\" height=\"100\">
                <h4>DESKTOP APP DEVELOPERS</h4>
            </div>
        </div>
        <br><br>
        <div class=\"row slideanim\">
            <div class=\"col-sm-4\">
                <img src=\"/images/software_engineers.png\" alt=\"Software enginers logo\" height=\"100\">
                <h4>SOFTWARE ENGINEERS</h4>
            </div>
            <div class=\"col-sm-4\">
                <img src=\"/images/product_managers.png\" alt=\"Product managers logo\" height=\"100\">
                <h4>PRODUCT MANAGERS</h4>
            </div>
            <div class=\"col-sm-4\">
                <img src=\"/images/software_qa_testers.png\" alt=\"Software quality assurance testers logo\" height=\"100\">
                <h4>SOFTWARE QA TESTERS</h4>
            </div>
        </div>
        <br><br>
    </div>
    <!-- ******************************************************************* -->
    <!-- Container (Browsing Section) -->
    <div id=\"webdevelopersbrowser\" class=\"container-fluid text-center whiteContainer\" >
        <br><br>
        <h2>BROWSE OUR HIGHEST RATED WEB DEVELOPERS</h2> 
        <br>
        <div class=\"row slideanim\">
            <div class=\"col-md-4\">
                <a href=\"neil.jpg\" class=\"thumbnail\">
                    <p>Neil de Grasse-Tyson</p>
                    <img src=\"/images/neil.jpg\" alt=\"Neil de Grasse-Tyson\" style=\"width:150px;height:150px\">
                </a>
            </div>
            <div class=\"col-md-4\">
                <a href=\"rowan-atkinson.jpg\" class=\"thumbnail\">
                    <p>Rowan Atkinson</p>
                    <img src=\"/images/rowan-atkinson.jpg\" alt=\"Rowan Atkinson\" style=\"width:150px;height:150px\">
                </a>
            </div>
            <div class=\"col-md-4\">
                <a href=\"Al-Gore.jpg\" class=\"thumbnail\">
                    <p>Al Gore</p>
                    <img src=\"/images/Al-Gore.jpg\" alt=\"Al Gore\" style=\"width:150px;height:150px\">
                </a>
            </div>
        </div>
        <br><br>
    </div>
    <!-- ******************************************************************* -->
    <!-- Comments -->  
    <div id=\"theCarousel\" class=\"carousel slide text-center blueContainer\" data-ride=\"carousel\">
        <br><br>
        <h2>What our customers say</h2>
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#theCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#theCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#theCarousel\" data-slide-to=\"2\"></li>
        </ol>\t
        <br><br>
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"item active\">
                <h4>\"I love working with FreheLantser. The team is always nice and responsive.\"<br><span style=\"font-style:normal;\">Michel Caron, President, OS4 Techno</span></h4>
            </div>
            <div class=\"item\">
                <h4>\"I hope I can continue to collaborate with you for years to come.\"<br><span style=\"font-style:normal;\">Alex Langelier, IT Engineer</span></h4>
            </div>
            <div class=\"item\">
                <h4>\"FreheLantser is a great company to work with. I encourage my students to register with you guys.\"<br><span style=\"font-style:normal;\">Gregory Prokopski, Phd, beloved teacher</span></h4>
            </div>
            <br><br><br>
        </div>    
        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#theCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#theCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  56 => 16,  54 => 15,  48 => 11,  45 => 10,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block title %}{{\"Home\"}}{% endblock %}

{% block head %}    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <!-- No script. Nothing to do nor validate. This page is for introduction only. -->
{% endblock %}

{% block content %}
    <!-- ******************************************************************* -->
    <!-- Container (Services Section) -->
    <div id=\"services\" class=\"container-fluid text-center blueContainer\">
        <br>
        {% if sessionUser %}
            {{username}}
        {% endif %}
        <h2>Work with the perfect team members</h2>
        <br>
        <div class=\"row slideanim\">
            <div class=\"col-sm-4\">
                <img src=\"/images/web_developers.png\" alt=\"Web developers logo\" height=\"100\">
                <h4>WEB DEVELOPERS</h4>      
            </div>
            <div class=\"col-sm-4\">
                <img src=\"/images/mobile_developers.png\" alt=\"Mobile developers logo\" height=\"100\">
                <h4>MOBILE DEVELOPERS</h4>
            </div>
            <div class=\"col-sm-4\">
                <img src=\"/images/desktop_app_developers.png\" alt=\"Desktop app developers logo\" height=\"100\">
                <h4>DESKTOP APP DEVELOPERS</h4>
            </div>
        </div>
        <br><br>
        <div class=\"row slideanim\">
            <div class=\"col-sm-4\">
                <img src=\"/images/software_engineers.png\" alt=\"Software enginers logo\" height=\"100\">
                <h4>SOFTWARE ENGINEERS</h4>
            </div>
            <div class=\"col-sm-4\">
                <img src=\"/images/product_managers.png\" alt=\"Product managers logo\" height=\"100\">
                <h4>PRODUCT MANAGERS</h4>
            </div>
            <div class=\"col-sm-4\">
                <img src=\"/images/software_qa_testers.png\" alt=\"Software quality assurance testers logo\" height=\"100\">
                <h4>SOFTWARE QA TESTERS</h4>
            </div>
        </div>
        <br><br>
    </div>
    <!-- ******************************************************************* -->
    <!-- Container (Browsing Section) -->
    <div id=\"webdevelopersbrowser\" class=\"container-fluid text-center whiteContainer\" >
        <br><br>
        <h2>BROWSE OUR HIGHEST RATED WEB DEVELOPERS</h2> 
        <br>
        <div class=\"row slideanim\">
            <div class=\"col-md-4\">
                <a href=\"neil.jpg\" class=\"thumbnail\">
                    <p>Neil de Grasse-Tyson</p>
                    <img src=\"/images/neil.jpg\" alt=\"Neil de Grasse-Tyson\" style=\"width:150px;height:150px\">
                </a>
            </div>
            <div class=\"col-md-4\">
                <a href=\"rowan-atkinson.jpg\" class=\"thumbnail\">
                    <p>Rowan Atkinson</p>
                    <img src=\"/images/rowan-atkinson.jpg\" alt=\"Rowan Atkinson\" style=\"width:150px;height:150px\">
                </a>
            </div>
            <div class=\"col-md-4\">
                <a href=\"Al-Gore.jpg\" class=\"thumbnail\">
                    <p>Al Gore</p>
                    <img src=\"/images/Al-Gore.jpg\" alt=\"Al Gore\" style=\"width:150px;height:150px\">
                </a>
            </div>
        </div>
        <br><br>
    </div>
    <!-- ******************************************************************* -->
    <!-- Comments -->  
    <div id=\"theCarousel\" class=\"carousel slide text-center blueContainer\" data-ride=\"carousel\">
        <br><br>
        <h2>What our customers say</h2>
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#theCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#theCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#theCarousel\" data-slide-to=\"2\"></li>
        </ol>\t
        <br><br>
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"item active\">
                <h4>\"I love working with FreheLantser. The team is always nice and responsive.\"<br><span style=\"font-style:normal;\">Michel Caron, President, OS4 Techno</span></h4>
            </div>
            <div class=\"item\">
                <h4>\"I hope I can continue to collaborate with you for years to come.\"<br><span style=\"font-style:normal;\">Alex Langelier, IT Engineer</span></h4>
            </div>
            <div class=\"item\">
                <h4>\"FreheLantser is a great company to work with. I encourage my students to register with you guys.\"<br><span style=\"font-style:normal;\">Gregory Prokopski, Phd, beloved teacher</span></h4>
            </div>
            <br><br><br>
        </div>    
        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#theCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#theCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</div>
</div>
{% endblock %}";
    }
}
