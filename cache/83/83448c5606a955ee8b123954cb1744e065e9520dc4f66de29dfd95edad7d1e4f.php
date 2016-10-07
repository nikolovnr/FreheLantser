<?php

/* login.html.twig */
class __TwigTemplate_21913e670b88381bf7fe815e8bf6677d746b409a35d321c5035a7579ae9a0db0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "login.html.twig", 1);
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
        echo "Login";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        echo "    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('input[name=email]').keyup(function () {
                \$('#result').load('/emailexists/' + \$(this).val());
            });
        });
    </script>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"container-fluid blueContainer\">
        <br>
        <h1>Login</h1>

        ";
        // line 21
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 22
            echo "            <ul>
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 24
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </ul>
        ";
        }
        // line 28
        echo "
        <form class=\"form-horizontal\" method=\"POST\"> 
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"username\">Username:</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control input-lg\" name=\"username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "username", array()), "html", null, true);
        echo "\" placeholder=\"Enter username\">
                </div>
            </div> 
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"password\">Password:</label>
                <div class=\"col-sm-10\"> 
                    <input type=\"password\" class=\"form-control input-lg\" name=\"password\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "password", array()), "html", null, true);
        echo "\" placeholder=\"Enter password\" data-toggle=\"tooltip\" title=\"Must be between 8 and 50 characters long, with at least one of each: uppercase letter, lowercase letter, number and special character.\">
                </div>
            </div>   
            <div class=\"form-group\"> 
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-primary\" value=\"Login\">Login</button>
                    
                </div>
               
            </div>
                <br> 
        </form>
        <br>
    </div>
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
        return array (  98 => 39,  89 => 33,  82 => 28,  78 => 26,  69 => 24,  65 => 23,  62 => 22,  60 => 21,  54 => 17,  51 => 16,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block title %}{{\"Login\"}}{% endblock %}

{% block head %}    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('input[name=email]').keyup(function () {
                \$('#result').load('/emailexists/' + \$(this).val());
            });
        });
    </script>
{% endblock %}

{% block content %}
    <div class=\"container-fluid blueContainer\">
        <br>
        <h1>Login</h1>

        {% if errorList %}
            <ul>
                {% for error in errorList %}
                    <li>{{error}}</li>
                    {% endfor %}
            </ul>
        {% endif %}

        <form class=\"form-horizontal\" method=\"POST\"> 
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"username\">Username:</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control input-lg\" name=\"username\" value=\"{{v.username}}\" placeholder=\"Enter username\">
                </div>
            </div> 
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"password\">Password:</label>
                <div class=\"col-sm-10\"> 
                    <input type=\"password\" class=\"form-control input-lg\" name=\"password\" value=\"{{v.password}}\" placeholder=\"Enter password\" data-toggle=\"tooltip\" title=\"Must be between 8 and 50 characters long, with at least one of each: uppercase letter, lowercase letter, number and special character.\">
                </div>
            </div>   
            <div class=\"form-group\"> 
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-primary\" value=\"Login\">Login</button>
                    
                </div>
               
            </div>
                <br> 
        </form>
        <br>
    </div>
{% endblock %}";
    }
}
