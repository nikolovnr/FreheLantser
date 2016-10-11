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

    </script>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <script>
        //////////////////////////////////////////////////////////Facebook login
        // This is called with the results from from FB.getLoginStatus().
        function statusChangeCallback(response) {
            console.log('statusChangeCallback');
            console.log(response);
            // The response object is returned with a status field that lets the
            // app know the current login status of the person.
            // Full docs on the response object can be found in the documentation
            // for FB.getLoginStatus().
            if (response.status === 'connected') {
                // Logged into your app and Facebook.
                testAPI();
            } else if (response.status === 'not_authorized') {
                // The person is logged into Facebook, but not your app.
                document.getElementById('status').innerHTML = 'Please log ' +
                        'into this app.';
            } else {
                // The person is not logged into Facebook, so we're not sure if
                // they are logged into this app or not.
                document.getElementById('status').innerHTML = 'Please log ' +
                        'into Facebook.';
            }
        }

        // This function is called when someone finishes with the Login
        // Button.  See the onlogin handler attached to it in the sample
        // code below.
        function checkLoginState() {
            FB.getLoginStatus(function (response) {
                statusChangeCallback(response);
            });
        }

        window.fbAsyncInit = function () {
            FB.init({
                appId: '{598013790384556}',
                cookie: true, // enable cookies to allow the server to access 
                // the session
                xfbml: true, // parse social plugins on this page
                version: 'v2.5' // use graph api version 2.5
            });

            // Now that we've initialized the JavaScript SDK, we call 
            // FB.getLoginStatus().  This function gets the state of the
            // person visiting this page and can return one of three states to
            // the callback you provide.  They can be:
            //
            // 1. Logged into your app ('connected')
            // 2. Logged into Facebook, but not your app ('not_authorized')
            // 3. Not logged into Facebook and can't tell if they are logged into
            //    your app or not.
            //
            // These three cases are handled in the callback function.

            FB.getLoginStatus(function (response) {
                statusChangeCallback(response);
            });

        };

        // Load the SDK asynchronously
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/en_US/sdk.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        // Here we run a very simple test of the Graph API after login is
        // successful.  See statusChangeCallback() for when this call is made.
        function testAPI() {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me', function (response) {
                console.log('Successful login for: ' + response.name);
                document.getElementById('status').innerHTML =
                        'Thanks for logging in, ' + response.name + '!';
            });
        }
        ///////////////////////////////////////////////////////////Regular Login
    </script>
    <div class=\"container-fluid blueContainer\">
        <br>
        <h1>Login</h1>

        ";
        // line 101
        if ((isset($context["loginFailed"]) ? $context["loginFailed"] : null)) {
            // line 102
            echo "            <p>Invalid username or password</p>
        ";
        }
        // line 104
        echo "


        <form class=\"form-horizontal\" method=\"POST\" id=\"loginform\">            
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"email\">Email:</label>
                <div class=\"col-sm-9\">
                    <input type=\"email\" class=\"form-control input-lg\" id=\"email\" name=\"email\" placeholder=\"Enter email\" required=\"true\">                   
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"password\">Password:</label>
                <div class=\"col-sm-9\"> 
                    <input type=\"password\" class=\"form-control input-lg\" name=\"password\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "password", array()), "html", null, true);
        echo "\" placeholder=\"Enter password\" data-toggle=\"tooltip\" title=\"Must be between 8 and 50 characters long, with at least one of each: uppercase letter, lowercase letter, number and special character.\">
                </div>
            </div>   
            <div class=\"form-group\"> 
                <div class=\"col-sm-5 text-center\">
                    <button type=\"submit\" class=\"btn btn-primary\" value=\"Login\">Login</button>
                </div>
            </div>
            <div>    
                <div class=\"fb-login-button\" data-max-rows=\"1\" data-size=\"xlarge\" data-show-faces=\"false\" data-auto-logout-link=\"false\"></div>
            </div>

            <div id=\"status\">
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
        return array (  161 => 117,  146 => 104,  142 => 102,  140 => 101,  50 => 13,  47 => 12,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block title %}{{\"Login\"}}{% endblock %}

{% block head %}    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>

    </script>
{% endblock %}

{% block content %}
    <script>
        //////////////////////////////////////////////////////////Facebook login
        // This is called with the results from from FB.getLoginStatus().
        function statusChangeCallback(response) {
            console.log('statusChangeCallback');
            console.log(response);
            // The response object is returned with a status field that lets the
            // app know the current login status of the person.
            // Full docs on the response object can be found in the documentation
            // for FB.getLoginStatus().
            if (response.status === 'connected') {
                // Logged into your app and Facebook.
                testAPI();
            } else if (response.status === 'not_authorized') {
                // The person is logged into Facebook, but not your app.
                document.getElementById('status').innerHTML = 'Please log ' +
                        'into this app.';
            } else {
                // The person is not logged into Facebook, so we're not sure if
                // they are logged into this app or not.
                document.getElementById('status').innerHTML = 'Please log ' +
                        'into Facebook.';
            }
        }

        // This function is called when someone finishes with the Login
        // Button.  See the onlogin handler attached to it in the sample
        // code below.
        function checkLoginState() {
            FB.getLoginStatus(function (response) {
                statusChangeCallback(response);
            });
        }

        window.fbAsyncInit = function () {
            FB.init({
                appId: '{598013790384556}',
                cookie: true, // enable cookies to allow the server to access 
                // the session
                xfbml: true, // parse social plugins on this page
                version: 'v2.5' // use graph api version 2.5
            });

            // Now that we've initialized the JavaScript SDK, we call 
            // FB.getLoginStatus().  This function gets the state of the
            // person visiting this page and can return one of three states to
            // the callback you provide.  They can be:
            //
            // 1. Logged into your app ('connected')
            // 2. Logged into Facebook, but not your app ('not_authorized')
            // 3. Not logged into Facebook and can't tell if they are logged into
            //    your app or not.
            //
            // These three cases are handled in the callback function.

            FB.getLoginStatus(function (response) {
                statusChangeCallback(response);
            });

        };

        // Load the SDK asynchronously
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/en_US/sdk.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        // Here we run a very simple test of the Graph API after login is
        // successful.  See statusChangeCallback() for when this call is made.
        function testAPI() {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me', function (response) {
                console.log('Successful login for: ' + response.name);
                document.getElementById('status').innerHTML =
                        'Thanks for logging in, ' + response.name + '!';
            });
        }
        ///////////////////////////////////////////////////////////Regular Login
    </script>
    <div class=\"container-fluid blueContainer\">
        <br>
        <h1>Login</h1>

        {% if loginFailed %}
            <p>Invalid username or password</p>
        {% endif %}



        <form class=\"form-horizontal\" method=\"POST\" id=\"loginform\">            
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"email\">Email:</label>
                <div class=\"col-sm-9\">
                    <input type=\"email\" class=\"form-control input-lg\" id=\"email\" name=\"email\" placeholder=\"Enter email\" required=\"true\">                   
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"password\">Password:</label>
                <div class=\"col-sm-9\"> 
                    <input type=\"password\" class=\"form-control input-lg\" name=\"password\" value=\"{{v.password}}\" placeholder=\"Enter password\" data-toggle=\"tooltip\" title=\"Must be between 8 and 50 characters long, with at least one of each: uppercase letter, lowercase letter, number and special character.\">
                </div>
            </div>   
            <div class=\"form-group\"> 
                <div class=\"col-sm-5 text-center\">
                    <button type=\"submit\" class=\"btn btn-primary\" value=\"Login\">Login</button>
                </div>
            </div>
            <div>    
                <div class=\"fb-login-button\" data-max-rows=\"1\" data-size=\"xlarge\" data-show-faces=\"false\" data-auto-logout-link=\"false\"></div>
            </div>

            <div id=\"status\">
            </div>
            <br> 
        </form>
        <br>
    </div>
{% endblock %}";
    }
}
