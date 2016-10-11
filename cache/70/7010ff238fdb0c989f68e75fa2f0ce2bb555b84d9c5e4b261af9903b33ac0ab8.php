<?php

/* register.html.twig */
class __TwigTemplate_30424c6afa5b528cc0568d53a800d3f397b19dbc0c2cc4510b434db999c5e495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "register.html.twig", 1);
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
        echo "Register";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        echo "    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>
        //\$(document).ready(function () {
            
            //this come from Slimshop
        function checkEmail() {
            var email = \$('input[name=email]').val();
            if (email != '') {
                //\$('#result').load('/emailexists/' + email);
                // NOTE: .load is actually .ajax call like below
                \$.ajax({
                    url: '/emailexists/' + email
                }).done(function (data) {
                    \$(\"#result\").html(data);
                });                
            } else {
                \$('#result').html(\"\");
            }
        }
        
        \$(document).ready(function() {
            \$('input[name=email]').keyup(function() {
                checkEmail();
            });
            \$('input[name=email]').bind('paste', function() {
                checkEmail();
            });
        //});//end of Slimshop import
            
            
            
            //these don't work
            \$(\"#firstname\").blur(function () {
                var firstname = \$(\"input[name=firstname]\").val();
                if ((firstname.length < 3) || (firstname.length > 50)) {
                    allGood = false;
                    alert(\"Handler for .blur() called.\");
                    \$(\"#firstalertcharacters\").show();
                }
            });

            \$('#registrationForm').submit(function (event) {
                var email = \$(\"input[name=email]\").val();
                var firstname = \$(\"input[name=firstname]\").val();
                var lastname = \$(\"input[name=lastname]\").val();
                var country = \$(\"input[name=country]\").selectedIndex;
                //var username = \$(\"input[name=username]\").val();
                var password = \$(\"input[name=password]\").val();
                var password2 = \$(\"input[name=password2]\").val();

                ////////////////////////////////////////////Firstname & Lastname
                firstname = firstname.substring(0, 1).toUpperCase() + firstname.substring(1).toLowerCase();
                firstname = firstname.substring(0, 1).toUpperCase() + firstname.substring(1).toLowerCase();

                ///////////////////////////////////////////////verify the inputs
                var allGood = true;
                var regexemail = /[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,3}/;
                var regexname = /[A-Za-z -]{3,50}/;
                var regexpassword = /(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[-+_!@#\$%^&*()-+=.,?])/;
                ////////////////////////////////////////////////validating email
                if ((email.length < 10) || (email.length > 250)) {
                    allGood = false;
                }
                if (!regexemail.test(email)) {
                    allGood = false;
                }

                ///////////////////////////////////////////validating first name
                if ((firstname.length < 3) || (firstname.length > 50)) {
                    allGood = false;
                }
                if (!regexname.match(firstname)) {
                    allGood = false;
                }

                ////////////////////////////////////////////validating last name
                if ((lastname.length < 3) || (lastname.length > 50)) {
                    allGood = false;
                }
                if (!regexname.match(lastname)) {
                    allGood = false;
                }

                //////////////////////////////////////////////validating country
                if (country.selectedIndex == 0) {
                    allGood = false;
                }

                /////////////////////////////////////////////validating username
                if ((username.length < 3) || (username.length > 50)) {
                    allGood = false;
                }
                if (!regexname.match(username)) {
                    allGood = false;
                }

                ////////////////////////////////////////////validating passwords
                if ((password.length < 8) || (password.length > 50)) {
                    allGood = false;
                }
                if (!regexpassword.test(password)) {
                    allGood = false;
                }
                if (password != password2) {
                    allGood = false;
                }
            });

            if (!allGood) {
                event.preventDefault();
            }
        });
        //});
    </script>
";
    }

    // line 122
    public function block_content($context, array $blocks = array())
    {
        // line 123
        echo "    <div class=\"blueContainer\">
        <br>
        <h1>Register</h1>

        ";
        // line 127
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 128
            echo "            <ul>
                ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 130
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "            </ul>
        ";
        }
        // line 134
        echo "
        <form class=\"form-horizontal\" id=\"registrationForm\" method=\"POST\" action=\"\">




            <!-- Email input -->   
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"email\">Email:</label>
                    <div class=\"col-sm-10\">
                        <input type=\"email\" class=\"form-control input-lg\" id=\"email\" name=\"email\" placeholder=\"Enter email\" required=\"true\">
                    </div>
                </div>
            </div> 
            <span id=\"result\"></span>




            <!-- First name input -->
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"firstname\">First name:</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control input-lg\" id=\"firstname\" name=\"firstname\" placeholder=\"Enter first name\" required=\"true\">
                    </div>
                </div>
            </div>
            <!--<div class=\"alert alert-info\">
                <strong>First name</strong> must be between 3 and 50 characters and consisting only of letters (spaces and hyphens are allowed).
            </div>-->
            <div class=\"alert alert-danger collapse\" id=\"firstalertcharacters\">
                <strong>First name</strong> must be between 3 and 50 characters long.
            </div>
            <div class=\"alert alert-danger collapse\" id=\"firstalertregex\">
                <strong>First name</strong> must consist only of letters (spaces and hyphens are allowed).
            </div>

            <!-- Username input -->
            <div class=\"row\">
                <div class=\"form-group form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"username\">Username</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control input-lg\" id=\"username\" name=\"username\" placeholder=\"Username\" required=\"true\"/>
                    </div>
                </div>
            </div>


            <!-- First name input --><!--
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"firstname\">First name:</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control input-lg\" id=\"firstname\" name=\"firstname\" placeholder=\"Enter first name\" required=\"true\">
                    </div>
                </div>
            </div> -->
            <!-- Last name input -->
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"lastname\">Last name:</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control input-lg\" id=\"lastname\" name=\"lastname\" placeholder=\"Enter last name\" required=\"true\">
                    </div>
                </div>
            </div>
            <!-- Country input -->
            <div class=\"row\">
                <div class=\"form-group form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"country\">Country:</label>
                    <div class=\"col-sm-10\">
                        <select class=\"form-control input-lg\" id=\"country\" name=\"country\" required=\"true\">
                            <option value=\"0\">Select your country</option>
                            <option value=\"Canada\">Canada</option> 
                            <option value=\"USA\">United States</option>
                            <optgroup label=\"_____________\">
                                <option value=\"Afghanistan\">Afghanistan</option>
                                <option value=\"Albania\">Albania</option>
                                <option value=\"Algeria\">Algeria</option>
                                <option value=\"American Samoa\">American Samoa</option>
                                <option value=\"Andorra\">Andorra</option>
                                <option value=\"Angola\">Angola</option>
                                <option value=\"Anguilla\">Anguilla</option>
                                <option value=\"Antigua &amp; Barbuda\">Antigua &amp; Barbuda</option>
                                <option value=\"Argentina\">Argentina</option>
                                <option value=\"Armenia\">Armenia</option>
                                <option value=\"Aruba\">Aruba</option>
                                <option value=\"Australia\">Australia</option>
                                <option value=\"Austria\">Austria</option>
                                <option value=\"Azerbaijan\">Azerbaijan</option>
                                <option value=\"Bahamas\">Bahamas</option>
                                <option value=\"Bahrain\">Bahrain</option>
                                <option value=\"Bangladesh\">Bangladesh</option>
                                <option value=\"Barbados\">Barbados</option>
                                <option value=\"Belarus\">Belarus</option>
                                <option value=\"Belgium\">Belgium</option>
                                <option value=\"Belize\">Belize</option>
                                <option value=\"Benin\">Benin</option>
                                <option value=\"Bermuda\">Bermuda</option>
                                <option value=\"Bhutan\">Bhutan</option>
                                <option value=\"Bolivia\">Bolivia</option>
                                <option value=\"Bonaire\">Bonaire</option>
                                <option value=\"Bosnia &amp; Herzegovina\">Bosnia &amp; Herzegovina</option>
                                <option value=\"Botswana\">Botswana</option>
                                <option value=\"Brazil\">Brazil</option>
                                <option value=\"British Indian Ocean Territories\">British Indian Ocean Territories</option>
                                <option value=\"Brunei\">Brunei</option>
                                <option value=\"Bulgaria\">Bulgaria</option>
                                <option value=\"Burkina Faso\">Burkina Faso</option>
                                <option value=\"Burundi\">Burundi</option>
                                <option value=\"Cambodia\">Cambodia</option>
                                <option value=\"Cameroon\">Cameroon</option>
                                <option value=\"Canada\">Canada</option>
                                <option value=\"Canary Islands\">Canary Islands</option>
                                <option value=\"Cape Verde\">Cape Verde</option>
                                <option value=\"Cayman Islands\">Cayman Islands</option>
                                <option value=\"Central African Republic\">Central African Republic</option>
                                <option value=\"Chad\">Chad</option>
                                <option value=\"Channel Islands\">Channel Islands</option>
                                <option value=\"Chile\">Chile</option>
                                <option value=\"China\">China</option>
                                <option value=\"Christmas Island\">Christmas Island</option>
                                <option value=\"Cocos Island\">Cocos Island</option>
                                <option value=\"Colombia\">Colombia</option>
                                <option value=\"Comoros\">Comoros</option>
                                <option value=\"Congo\">Congo</option>
                                <option value=\"Cook Islands\">Cook Islands</option>
                                <option value=\"Costa Rica\">Costa Rica</option>
                                <option value=\"Cote d&apos;Ivoire\">Cote d&apos;Ivoire</option>
                                <option value=\"Croatia\">Croatia</option>
                                <option value=\"Cuba\">Cuba</option>
                                <option value=\"Curaco\">Curacao</option>
                                <option value=\"Cyprus\">Cyprus</option>
                                <option value=\"Czech Republic\">Czech Republic</option>
                                <option value=\"Denmark\">Denmark</option>
                                <option value=\"Djibouti\">Djibouti</option>
                                <option value=\"Dominica\">Dominica</option>
                                <option value=\"Dominican Republic\">Dominican Republic</option>
                                <option value=\"East Timor\">East Timor</option>
                                <option value=\"Ecuador\">Ecuador</option>
                                <option value=\"Egypt\">Egypt</option>
                                <option value=\"El Salvador\">El Salvador</option>
                                <option value=\"Equatorial Guinea\">Equatorial Guinea</option>
                                <option value=\"Eritrea\">Eritrea</option>
                                <option value=\"Estonia\">Estonia</option>
                                <option value=\"Ethiopia\">Ethiopia</option>
                                <option value=\"Falkland Islands\">Falkland Islands</option>
                                <option value=\"Faroe Islands\">Faroe Islands</option>
                                <option value=\"Fiji\">Fiji</option>
                                <option value=\"Finland\">Finland</option>
                                <option value=\"France\">France</option>
                                <option value=\"French Guiana\">French Guiana</option>
                                <option value=\"French Polynesia\">French Polynesia</option>
                                <option value=\"French Southern Territories\">French Southern Territories</option>
                                <option value=\"Gabon\">Gabon</option>
                                <option value=\"Gambia\">Gambia</option>
                                <option value=\"Georgia\">Georgia</option>
                                <option value=\"Germany\">Germany</option>
                                <option value=\"Ghana\">Ghana</option>
                                <option value=\"Gibraltar\">Gibraltar</option>
                                <option value=\"Great Britain\">Great Britain</option>
                                <option value=\"Greece\">Greece</option>
                                <option value=\"Greenland\">Greenland</option>
                                <option value=\"Grenada\">Grenada</option>
                                <option value=\"Guadeloupe\">Guadeloupe</option>
                                <option value=\"Guam\">Guam</option>
                                <option value=\"Guatemala\">Guatemala</option>
                                <option value=\"Guinea\">Guinea</option>
                                <option value=\"Guyana\">Guyana</option>
                                <option value=\"Haiti\">Haiti</option>
                                <option value=\"Hawaii\">Hawaii</option>
                                <option value=\"Honduras\">Honduras</option>
                                <option value=\"Hong Kong\">Hong Kong</option>
                                <option value=\"Hungary\">Hungary</option>
                                <option value=\"Iceland\">Iceland</option>
                                <option value=\"India\">India</option>
                                <option value=\"Indonesia\">Indonesia</option>
                                <option value=\"Iran\">Iran</option>
                                <option value=\"Iraq\">Iraq</option>
                                <option value=\"Ireland\">Ireland</option>
                                <option value=\"Isle of Man\">Isle of Man</option>
                                <option value=\"Israel\">Israel</option>
                                <option value=\"Italy\">Italy</option>
                                <option value=\"Jamaica\">Jamaica</option>
                                <option value=\"Japan\">Japan</option>
                                <option value=\"Jordan\">Jordan</option>
                                <option value=\"Kazakhstan\">Kazakhstan</option>
                                <option value=\"Kenya\">Kenya</option>
                                <option value=\"Kiribati\">Kiribati</option>
                                <option value=\"Korea North\">Korea North</option>
                                <option value=\"Korea South\">Korea South</option>
                                <option value=\"Kuwait\">Kuwait</option>
                                <option value=\"Kyrgyzstan\">Kyrgyzstan</option>
                                <option value=\"Laos\">Laos</option>
                                <option value=\"Latvia\">Latvia</option>
                                <option value=\"Lebanon\">Lebanon</option>
                                <option value=\"Lesotho\">Lesotho</option>
                                <option value=\"Liberia\">Liberia</option>
                                <option value=\"Libya\">Libya</option>
                                <option value=\"Liechtenstein\">Liechtenstein</option>
                                <option value=\"Lithuania\">Lithuania</option>
                                <option value=\"Luxembourg\">Luxembourg</option>
                                <option value=\"Macau\">Macau</option>
                                <option value=\"Macedonia\">Macedonia</option>
                                <option value=\"Madagascar\">Madagascar</option>
                                <option value=\"Malaysia\">Malaysia</option>
                                <option value=\"Malawi\">Malawi</option>
                                <option value=\"Maldives\">Maldives</option>
                                <option value=\"Mali\">Mali</option>
                                <option value=\"Malta\">Malta</option>
                                <option value=\"Marshall Islands\">Marshall Islands</option>
                                <option value=\"Martinique\">Martinique</option>
                                <option value=\"Mauritania\">Mauritania</option>
                                <option value=\"Mauritius\">Mauritius</option>
                                <option value=\"Mayotte\">Mayotte</option>
                                <option value=\"Mexico\">Mexico</option>
                                <option value=\"Midway Islands\">Midway Islands</option>
                                <option value=\"Moldova\">Moldova</option>
                                <option value=\"Monaco\">Monaco</option>
                                <option value=\"Mongolia\">Mongolia</option>
                                <option value=\"Montserrat\">Montserrat</option>
                                <option value=\"Morocco\">Morocco</option>
                                <option value=\"Mozambique\">Mozambique</option>
                                <option value=\"Myanmar\">Myanmar</option>
                                <option value=\"Nambia\">Nambia</option>
                                <option value=\"Nauru\">Nauru</option>
                                <option value=\"Nepal\">Nepal</option>
                                <option value=\"Netherland Antilles\">Netherland Antilles</option>
                                <option value=\"Netherlands\">Netherlands (Holland, Europe)</option>
                                <option value=\"Nevis\">Nevis</option>
                                <option value=\"New Caledonia\">New Caledonia</option>
                                <option value=\"New Zealand\">New Zealand</option>
                                <option value=\"Nicaragua\">Nicaragua</option>
                                <option value=\"Niger\">Niger</option>
                                <option value=\"Nigeria\">Nigeria</option>
                                <option value=\"Niue\">Niue</option>
                                <option value=\"Norfolk Island\">Norfolk Island</option>
                                <option value=\"Norway\">Norway</option>
                                <option value=\"Oman\">Oman</option>
                                <option value=\"Pakistan\">Pakistan</option>
                                <option value=\"Palau Island\">Palau Island</option>
                                <option value=\"Palestine\">Palestine</option>
                                <option value=\"Panama\">Panama</option>
                                <option value=\"Papua New Guinea\">Papua New Guinea</option>
                                <option value=\"Paraguay\">Paraguay</option>
                                <option value=\"Peru\">Peru</option>
                                <option value=\"Phillipines\">Philippines</option>
                                <option value=\"Pitcairn Island\">Pitcairn Island</option>
                                <option value=\"Poland\">Poland</option>
                                <option value=\"Portugal\">Portugal</option>
                                <option value=\"Puerto Rico\">Puerto Rico</option>
                                <option value=\"Qatar\">Qatar</option>
                                <option value=\"Republic of Montenegro\">Republic of Montenegro</option>
                                <option value=\"Republic of Serbia\">Republic of Serbia</option>
                                <option value=\"Reunion\">Reunion</option>
                                <option value=\"Romania\">Romania</option>
                                <option value=\"Russia\">Russia</option>
                                <option value=\"Rwanda\">Rwanda</option>
                                <option value=\"St Barthelemy\">St Barthelemy</option>
                                <option value=\"St Eustatius\">St Eustatius</option>
                                <option value=\"St Helena\">St Helena</option>
                                <option value=\"St Kitts-Nevis\">St Kitts-Nevis</option>
                                <option value=\"St Lucia\">St Lucia</option>
                                <option value=\"St Maarten\">St Maarten</option>
                                <option value=\"St Pierre &amp; Miquelon\">St Pierre &amp; Miquelon</option>
                                <option value=\"St Vincent &amp; Grenadines\">St Vincent &amp; Grenadines</option>
                                <option value=\"Saipan\">Saipan</option>
                                <option value=\"Samoa\">Samoa</option>
                                <option value=\"Samoa American\">Samoa American</option>
                                <option value=\"San Marino\">San Marino</option>
                                <option value=\"Sao Tome &amp; Principe\">Sao Tome &amp; Principe</option>
                                <option value=\"Saudi Arabia\">Saudi Arabia</option>
                                <option value=\"Senegal\">Senegal</option>
                                <option value=\"Serbia\">Serbia</option>
                                <option value=\"Seychelles\">Seychelles</option>
                                <option value=\"Sierra Leone\">Sierra Leone</option>
                                <option value=\"Singapore\">Singapore</option>
                                <option value=\"Slovakia\">Slovakia</option>
                                <option value=\"Slovenia\">Slovenia</option>
                                <option value=\"Solomon Islands\">Solomon Islands</option>
                                <option value=\"Somalia\">Somalia</option>
                                <option value=\"South Africa\">South Africa</option>
                                <option value=\"Spain\">Spain</option>
                                <option value=\"Sri Lanka\">Sri Lanka</option>
                                <option value=\"Sudan\">Sudan</option>
                                <option value=\"Suriname\">Suriname</option>
                                <option value=\"Swaziland\">Swaziland</option>
                                <option value=\"Sweden\">Sweden</option>
                                <option value=\"Switzerland\">Switzerland</option>
                                <option value=\"Syria\">Syria</option>
                                <option value=\"Tahiti\">Tahiti</option>
                                <option value=\"Taiwan\">Taiwan</option>
                                <option value=\"Tajikistan\">Tajikistan</option>
                                <option value=\"Tanzania\">Tanzania</option>
                                <option value=\"Thailand\">Thailand</option>
                                <option value=\"Tibet\">Tibet</option>
                                <option value=\"Togo\">Togo</option>
                                <option value=\"Tokelau\">Tokelau</option>
                                <option value=\"Tonga\">Tonga</option>
                                <option value=\"Trinidad &amp; Tobago\">Trinidad &amp; Tobago</option>
                                <option value=\"Tunisia\">Tunisia</option>
                                <option value=\"Turkey\">Turkey</option>
                                <option value=\"Turkmenistan\">Turkmenistan</option>
                                <option value=\"Turks &amp; Caicos Is\">Turks &amp; Caicos Is</option>
                                <option value=\"Tuvalu\">Tuvalu</option>
                                <option value=\"Uganda\">Uganda</option>
                                <option value=\"Ukraine\">Ukraine</option>
                                <option value=\"United Arab Erimates\">United Arab Emirates</option>
                                <option value=\"United Kingdom\">United Kingdom</option>
                                <option value=\"USA\">United States of America</option>
                                <option value=\"Uraguay\">Uruguay</option>
                                <option value=\"Uzbekistan\">Uzbekistan</option>
                                <option value=\"Vanuatu\">Vanuatu</option>
                                <option value=\"Vatican City State\">Vatican City State</option>
                                <option value=\"Venezuela\">Venezuela</option>
                                <option value=\"Vietnam\">Vietnam</option>
                                <option value=\"Virgin Islands (Brit)\">Virgin Islands (Brit)</option>
                                <option value=\"Virgin Islands (USA)\">Virgin Islands (USA)</option>
                                <option value=\"Wake Island\">Wake Island</option>
                                <option value=\"Wallis &amp; Futana Islands\">Wallis &amp; Futana Islands</option>
                                <option value=\"Yemen\">Yemen</option>
                                <option value=\"Zaire\">Zaire</option>
                                <option value=\"Zambia\">Zambia</option>
                                <option value=\"Zimbabwe\">Zimbabwe</option>
                            </optgroup>
                        </select>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Username input -->
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"username\">Username:</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control input-lg\" id=\"username\" name=\"username\" placeholder=\"Enter username\" required=\"true\">
                    </div>
                </div> 
            </div>
            <!-- Password input -->
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"password\">Password:</label>
                    <div class=\"col-sm-10\"> 
                        <input type=\"password\" class=\"form-control input-lg\" id=\"password\" name=\"password\" placeholder=\"Enter password\" required=\"true\" data-toggle=\"tooltip\" title=\"Must be between 8 and 50 characters long, with at least one of each: uppercase letter, lowercase letter, number and special character.\">
                    </div>
                </div>
            </div>
            <!-- Password confirmation input -->
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"password2\">Password confirmation:</label>
                    <div class=\"col-sm-10\"> 
                        <input type=\"password\" class=\"form-control input-lg\" id=\"password2\" name=\"password2\" placeholder=\"Retype password\" required=\"true\">
                    </div>
                </div>
            </div><!--  I'm keeping it in case 'I'm a freelancer' 'I'm a hirer'...
               <div class=\"form-group\"> 
                  <div class=\"col-sm-offset-2 col-sm-10\">
                    <div class=\"checkbox\">
                      <label><input type=\"checkbox\"> Remember me</label>
                    </div>
                  </div>
                </div>-->
            <!-- Submit button --> 
            <div class=\"row\">
                <div class=\"form-group\"> 
                    <div class=\"col-sm-offset-2 col-sm-10 text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\" value=\"Register\">Register</button>
                        <br><br>
                    </div>
                </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 134,  184 => 132,  175 => 130,  171 => 129,  168 => 128,  166 => 127,  160 => 123,  157 => 122,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block title %}{{\"Register\"}}{% endblock %}

{% block head %}    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>
        //\$(document).ready(function () {
            
            //this come from Slimshop
        function checkEmail() {
            var email = \$('input[name=email]').val();
            if (email != '') {
                //\$('#result').load('/emailexists/' + email);
                // NOTE: .load is actually .ajax call like below
                \$.ajax({
                    url: '/emailexists/' + email
                }).done(function (data) {
                    \$(\"#result\").html(data);
                });                
            } else {
                \$('#result').html(\"\");
            }
        }
        
        \$(document).ready(function() {
            \$('input[name=email]').keyup(function() {
                checkEmail();
            });
            \$('input[name=email]').bind('paste', function() {
                checkEmail();
            });
        //});//end of Slimshop import
            
            
            
            //these don't work
            \$(\"#firstname\").blur(function () {
                var firstname = \$(\"input[name=firstname]\").val();
                if ((firstname.length < 3) || (firstname.length > 50)) {
                    allGood = false;
                    alert(\"Handler for .blur() called.\");
                    \$(\"#firstalertcharacters\").show();
                }
            });

            \$('#registrationForm').submit(function (event) {
                var email = \$(\"input[name=email]\").val();
                var firstname = \$(\"input[name=firstname]\").val();
                var lastname = \$(\"input[name=lastname]\").val();
                var country = \$(\"input[name=country]\").selectedIndex;
                //var username = \$(\"input[name=username]\").val();
                var password = \$(\"input[name=password]\").val();
                var password2 = \$(\"input[name=password2]\").val();

                ////////////////////////////////////////////Firstname & Lastname
                firstname = firstname.substring(0, 1).toUpperCase() + firstname.substring(1).toLowerCase();
                firstname = firstname.substring(0, 1).toUpperCase() + firstname.substring(1).toLowerCase();

                ///////////////////////////////////////////////verify the inputs
                var allGood = true;
                var regexemail = /[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,3}/;
                var regexname = /[A-Za-z -]{3,50}/;
                var regexpassword = /(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[-+_!@#\$%^&*()-+=.,?])/;
                ////////////////////////////////////////////////validating email
                if ((email.length < 10) || (email.length > 250)) {
                    allGood = false;
                }
                if (!regexemail.test(email)) {
                    allGood = false;
                }

                ///////////////////////////////////////////validating first name
                if ((firstname.length < 3) || (firstname.length > 50)) {
                    allGood = false;
                }
                if (!regexname.match(firstname)) {
                    allGood = false;
                }

                ////////////////////////////////////////////validating last name
                if ((lastname.length < 3) || (lastname.length > 50)) {
                    allGood = false;
                }
                if (!regexname.match(lastname)) {
                    allGood = false;
                }

                //////////////////////////////////////////////validating country
                if (country.selectedIndex == 0) {
                    allGood = false;
                }

                /////////////////////////////////////////////validating username
                if ((username.length < 3) || (username.length > 50)) {
                    allGood = false;
                }
                if (!regexname.match(username)) {
                    allGood = false;
                }

                ////////////////////////////////////////////validating passwords
                if ((password.length < 8) || (password.length > 50)) {
                    allGood = false;
                }
                if (!regexpassword.test(password)) {
                    allGood = false;
                }
                if (password != password2) {
                    allGood = false;
                }
            });

            if (!allGood) {
                event.preventDefault();
            }
        });
        //});
    </script>
{% endblock %}  

{% block content %}
    <div class=\"blueContainer\">
        <br>
        <h1>Register</h1>

        {% if errorList %}
            <ul>
                {% for error in errorList %}
                    <li>{{error}}</li>
                    {% endfor %}
            </ul>
        {% endif %}

        <form class=\"form-horizontal\" id=\"registrationForm\" method=\"POST\" action=\"\">




            <!-- Email input -->   
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"email\">Email:</label>
                    <div class=\"col-sm-10\">
                        <input type=\"email\" class=\"form-control input-lg\" id=\"email\" name=\"email\" placeholder=\"Enter email\" required=\"true\">
                    </div>
                </div>
            </div> 
            <span id=\"result\"></span>




            <!-- First name input -->
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"firstname\">First name:</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control input-lg\" id=\"firstname\" name=\"firstname\" placeholder=\"Enter first name\" required=\"true\">
                    </div>
                </div>
            </div>
            <!--<div class=\"alert alert-info\">
                <strong>First name</strong> must be between 3 and 50 characters and consisting only of letters (spaces and hyphens are allowed).
            </div>-->
            <div class=\"alert alert-danger collapse\" id=\"firstalertcharacters\">
                <strong>First name</strong> must be between 3 and 50 characters long.
            </div>
            <div class=\"alert alert-danger collapse\" id=\"firstalertregex\">
                <strong>First name</strong> must consist only of letters (spaces and hyphens are allowed).
            </div>

            <!-- Username input -->
            <div class=\"row\">
                <div class=\"form-group form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"username\">Username</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control input-lg\" id=\"username\" name=\"username\" placeholder=\"Username\" required=\"true\"/>
                    </div>
                </div>
            </div>


            <!-- First name input --><!--
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"firstname\">First name:</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control input-lg\" id=\"firstname\" name=\"firstname\" placeholder=\"Enter first name\" required=\"true\">
                    </div>
                </div>
            </div> -->
            <!-- Last name input -->
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"lastname\">Last name:</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control input-lg\" id=\"lastname\" name=\"lastname\" placeholder=\"Enter last name\" required=\"true\">
                    </div>
                </div>
            </div>
            <!-- Country input -->
            <div class=\"row\">
                <div class=\"form-group form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"country\">Country:</label>
                    <div class=\"col-sm-10\">
                        <select class=\"form-control input-lg\" id=\"country\" name=\"country\" required=\"true\">
                            <option value=\"0\">Select your country</option>
                            <option value=\"Canada\">Canada</option> 
                            <option value=\"USA\">United States</option>
                            <optgroup label=\"_____________\">
                                <option value=\"Afghanistan\">Afghanistan</option>
                                <option value=\"Albania\">Albania</option>
                                <option value=\"Algeria\">Algeria</option>
                                <option value=\"American Samoa\">American Samoa</option>
                                <option value=\"Andorra\">Andorra</option>
                                <option value=\"Angola\">Angola</option>
                                <option value=\"Anguilla\">Anguilla</option>
                                <option value=\"Antigua &amp; Barbuda\">Antigua &amp; Barbuda</option>
                                <option value=\"Argentina\">Argentina</option>
                                <option value=\"Armenia\">Armenia</option>
                                <option value=\"Aruba\">Aruba</option>
                                <option value=\"Australia\">Australia</option>
                                <option value=\"Austria\">Austria</option>
                                <option value=\"Azerbaijan\">Azerbaijan</option>
                                <option value=\"Bahamas\">Bahamas</option>
                                <option value=\"Bahrain\">Bahrain</option>
                                <option value=\"Bangladesh\">Bangladesh</option>
                                <option value=\"Barbados\">Barbados</option>
                                <option value=\"Belarus\">Belarus</option>
                                <option value=\"Belgium\">Belgium</option>
                                <option value=\"Belize\">Belize</option>
                                <option value=\"Benin\">Benin</option>
                                <option value=\"Bermuda\">Bermuda</option>
                                <option value=\"Bhutan\">Bhutan</option>
                                <option value=\"Bolivia\">Bolivia</option>
                                <option value=\"Bonaire\">Bonaire</option>
                                <option value=\"Bosnia &amp; Herzegovina\">Bosnia &amp; Herzegovina</option>
                                <option value=\"Botswana\">Botswana</option>
                                <option value=\"Brazil\">Brazil</option>
                                <option value=\"British Indian Ocean Territories\">British Indian Ocean Territories</option>
                                <option value=\"Brunei\">Brunei</option>
                                <option value=\"Bulgaria\">Bulgaria</option>
                                <option value=\"Burkina Faso\">Burkina Faso</option>
                                <option value=\"Burundi\">Burundi</option>
                                <option value=\"Cambodia\">Cambodia</option>
                                <option value=\"Cameroon\">Cameroon</option>
                                <option value=\"Canada\">Canada</option>
                                <option value=\"Canary Islands\">Canary Islands</option>
                                <option value=\"Cape Verde\">Cape Verde</option>
                                <option value=\"Cayman Islands\">Cayman Islands</option>
                                <option value=\"Central African Republic\">Central African Republic</option>
                                <option value=\"Chad\">Chad</option>
                                <option value=\"Channel Islands\">Channel Islands</option>
                                <option value=\"Chile\">Chile</option>
                                <option value=\"China\">China</option>
                                <option value=\"Christmas Island\">Christmas Island</option>
                                <option value=\"Cocos Island\">Cocos Island</option>
                                <option value=\"Colombia\">Colombia</option>
                                <option value=\"Comoros\">Comoros</option>
                                <option value=\"Congo\">Congo</option>
                                <option value=\"Cook Islands\">Cook Islands</option>
                                <option value=\"Costa Rica\">Costa Rica</option>
                                <option value=\"Cote d&apos;Ivoire\">Cote d&apos;Ivoire</option>
                                <option value=\"Croatia\">Croatia</option>
                                <option value=\"Cuba\">Cuba</option>
                                <option value=\"Curaco\">Curacao</option>
                                <option value=\"Cyprus\">Cyprus</option>
                                <option value=\"Czech Republic\">Czech Republic</option>
                                <option value=\"Denmark\">Denmark</option>
                                <option value=\"Djibouti\">Djibouti</option>
                                <option value=\"Dominica\">Dominica</option>
                                <option value=\"Dominican Republic\">Dominican Republic</option>
                                <option value=\"East Timor\">East Timor</option>
                                <option value=\"Ecuador\">Ecuador</option>
                                <option value=\"Egypt\">Egypt</option>
                                <option value=\"El Salvador\">El Salvador</option>
                                <option value=\"Equatorial Guinea\">Equatorial Guinea</option>
                                <option value=\"Eritrea\">Eritrea</option>
                                <option value=\"Estonia\">Estonia</option>
                                <option value=\"Ethiopia\">Ethiopia</option>
                                <option value=\"Falkland Islands\">Falkland Islands</option>
                                <option value=\"Faroe Islands\">Faroe Islands</option>
                                <option value=\"Fiji\">Fiji</option>
                                <option value=\"Finland\">Finland</option>
                                <option value=\"France\">France</option>
                                <option value=\"French Guiana\">French Guiana</option>
                                <option value=\"French Polynesia\">French Polynesia</option>
                                <option value=\"French Southern Territories\">French Southern Territories</option>
                                <option value=\"Gabon\">Gabon</option>
                                <option value=\"Gambia\">Gambia</option>
                                <option value=\"Georgia\">Georgia</option>
                                <option value=\"Germany\">Germany</option>
                                <option value=\"Ghana\">Ghana</option>
                                <option value=\"Gibraltar\">Gibraltar</option>
                                <option value=\"Great Britain\">Great Britain</option>
                                <option value=\"Greece\">Greece</option>
                                <option value=\"Greenland\">Greenland</option>
                                <option value=\"Grenada\">Grenada</option>
                                <option value=\"Guadeloupe\">Guadeloupe</option>
                                <option value=\"Guam\">Guam</option>
                                <option value=\"Guatemala\">Guatemala</option>
                                <option value=\"Guinea\">Guinea</option>
                                <option value=\"Guyana\">Guyana</option>
                                <option value=\"Haiti\">Haiti</option>
                                <option value=\"Hawaii\">Hawaii</option>
                                <option value=\"Honduras\">Honduras</option>
                                <option value=\"Hong Kong\">Hong Kong</option>
                                <option value=\"Hungary\">Hungary</option>
                                <option value=\"Iceland\">Iceland</option>
                                <option value=\"India\">India</option>
                                <option value=\"Indonesia\">Indonesia</option>
                                <option value=\"Iran\">Iran</option>
                                <option value=\"Iraq\">Iraq</option>
                                <option value=\"Ireland\">Ireland</option>
                                <option value=\"Isle of Man\">Isle of Man</option>
                                <option value=\"Israel\">Israel</option>
                                <option value=\"Italy\">Italy</option>
                                <option value=\"Jamaica\">Jamaica</option>
                                <option value=\"Japan\">Japan</option>
                                <option value=\"Jordan\">Jordan</option>
                                <option value=\"Kazakhstan\">Kazakhstan</option>
                                <option value=\"Kenya\">Kenya</option>
                                <option value=\"Kiribati\">Kiribati</option>
                                <option value=\"Korea North\">Korea North</option>
                                <option value=\"Korea South\">Korea South</option>
                                <option value=\"Kuwait\">Kuwait</option>
                                <option value=\"Kyrgyzstan\">Kyrgyzstan</option>
                                <option value=\"Laos\">Laos</option>
                                <option value=\"Latvia\">Latvia</option>
                                <option value=\"Lebanon\">Lebanon</option>
                                <option value=\"Lesotho\">Lesotho</option>
                                <option value=\"Liberia\">Liberia</option>
                                <option value=\"Libya\">Libya</option>
                                <option value=\"Liechtenstein\">Liechtenstein</option>
                                <option value=\"Lithuania\">Lithuania</option>
                                <option value=\"Luxembourg\">Luxembourg</option>
                                <option value=\"Macau\">Macau</option>
                                <option value=\"Macedonia\">Macedonia</option>
                                <option value=\"Madagascar\">Madagascar</option>
                                <option value=\"Malaysia\">Malaysia</option>
                                <option value=\"Malawi\">Malawi</option>
                                <option value=\"Maldives\">Maldives</option>
                                <option value=\"Mali\">Mali</option>
                                <option value=\"Malta\">Malta</option>
                                <option value=\"Marshall Islands\">Marshall Islands</option>
                                <option value=\"Martinique\">Martinique</option>
                                <option value=\"Mauritania\">Mauritania</option>
                                <option value=\"Mauritius\">Mauritius</option>
                                <option value=\"Mayotte\">Mayotte</option>
                                <option value=\"Mexico\">Mexico</option>
                                <option value=\"Midway Islands\">Midway Islands</option>
                                <option value=\"Moldova\">Moldova</option>
                                <option value=\"Monaco\">Monaco</option>
                                <option value=\"Mongolia\">Mongolia</option>
                                <option value=\"Montserrat\">Montserrat</option>
                                <option value=\"Morocco\">Morocco</option>
                                <option value=\"Mozambique\">Mozambique</option>
                                <option value=\"Myanmar\">Myanmar</option>
                                <option value=\"Nambia\">Nambia</option>
                                <option value=\"Nauru\">Nauru</option>
                                <option value=\"Nepal\">Nepal</option>
                                <option value=\"Netherland Antilles\">Netherland Antilles</option>
                                <option value=\"Netherlands\">Netherlands (Holland, Europe)</option>
                                <option value=\"Nevis\">Nevis</option>
                                <option value=\"New Caledonia\">New Caledonia</option>
                                <option value=\"New Zealand\">New Zealand</option>
                                <option value=\"Nicaragua\">Nicaragua</option>
                                <option value=\"Niger\">Niger</option>
                                <option value=\"Nigeria\">Nigeria</option>
                                <option value=\"Niue\">Niue</option>
                                <option value=\"Norfolk Island\">Norfolk Island</option>
                                <option value=\"Norway\">Norway</option>
                                <option value=\"Oman\">Oman</option>
                                <option value=\"Pakistan\">Pakistan</option>
                                <option value=\"Palau Island\">Palau Island</option>
                                <option value=\"Palestine\">Palestine</option>
                                <option value=\"Panama\">Panama</option>
                                <option value=\"Papua New Guinea\">Papua New Guinea</option>
                                <option value=\"Paraguay\">Paraguay</option>
                                <option value=\"Peru\">Peru</option>
                                <option value=\"Phillipines\">Philippines</option>
                                <option value=\"Pitcairn Island\">Pitcairn Island</option>
                                <option value=\"Poland\">Poland</option>
                                <option value=\"Portugal\">Portugal</option>
                                <option value=\"Puerto Rico\">Puerto Rico</option>
                                <option value=\"Qatar\">Qatar</option>
                                <option value=\"Republic of Montenegro\">Republic of Montenegro</option>
                                <option value=\"Republic of Serbia\">Republic of Serbia</option>
                                <option value=\"Reunion\">Reunion</option>
                                <option value=\"Romania\">Romania</option>
                                <option value=\"Russia\">Russia</option>
                                <option value=\"Rwanda\">Rwanda</option>
                                <option value=\"St Barthelemy\">St Barthelemy</option>
                                <option value=\"St Eustatius\">St Eustatius</option>
                                <option value=\"St Helena\">St Helena</option>
                                <option value=\"St Kitts-Nevis\">St Kitts-Nevis</option>
                                <option value=\"St Lucia\">St Lucia</option>
                                <option value=\"St Maarten\">St Maarten</option>
                                <option value=\"St Pierre &amp; Miquelon\">St Pierre &amp; Miquelon</option>
                                <option value=\"St Vincent &amp; Grenadines\">St Vincent &amp; Grenadines</option>
                                <option value=\"Saipan\">Saipan</option>
                                <option value=\"Samoa\">Samoa</option>
                                <option value=\"Samoa American\">Samoa American</option>
                                <option value=\"San Marino\">San Marino</option>
                                <option value=\"Sao Tome &amp; Principe\">Sao Tome &amp; Principe</option>
                                <option value=\"Saudi Arabia\">Saudi Arabia</option>
                                <option value=\"Senegal\">Senegal</option>
                                <option value=\"Serbia\">Serbia</option>
                                <option value=\"Seychelles\">Seychelles</option>
                                <option value=\"Sierra Leone\">Sierra Leone</option>
                                <option value=\"Singapore\">Singapore</option>
                                <option value=\"Slovakia\">Slovakia</option>
                                <option value=\"Slovenia\">Slovenia</option>
                                <option value=\"Solomon Islands\">Solomon Islands</option>
                                <option value=\"Somalia\">Somalia</option>
                                <option value=\"South Africa\">South Africa</option>
                                <option value=\"Spain\">Spain</option>
                                <option value=\"Sri Lanka\">Sri Lanka</option>
                                <option value=\"Sudan\">Sudan</option>
                                <option value=\"Suriname\">Suriname</option>
                                <option value=\"Swaziland\">Swaziland</option>
                                <option value=\"Sweden\">Sweden</option>
                                <option value=\"Switzerland\">Switzerland</option>
                                <option value=\"Syria\">Syria</option>
                                <option value=\"Tahiti\">Tahiti</option>
                                <option value=\"Taiwan\">Taiwan</option>
                                <option value=\"Tajikistan\">Tajikistan</option>
                                <option value=\"Tanzania\">Tanzania</option>
                                <option value=\"Thailand\">Thailand</option>
                                <option value=\"Tibet\">Tibet</option>
                                <option value=\"Togo\">Togo</option>
                                <option value=\"Tokelau\">Tokelau</option>
                                <option value=\"Tonga\">Tonga</option>
                                <option value=\"Trinidad &amp; Tobago\">Trinidad &amp; Tobago</option>
                                <option value=\"Tunisia\">Tunisia</option>
                                <option value=\"Turkey\">Turkey</option>
                                <option value=\"Turkmenistan\">Turkmenistan</option>
                                <option value=\"Turks &amp; Caicos Is\">Turks &amp; Caicos Is</option>
                                <option value=\"Tuvalu\">Tuvalu</option>
                                <option value=\"Uganda\">Uganda</option>
                                <option value=\"Ukraine\">Ukraine</option>
                                <option value=\"United Arab Erimates\">United Arab Emirates</option>
                                <option value=\"United Kingdom\">United Kingdom</option>
                                <option value=\"USA\">United States of America</option>
                                <option value=\"Uraguay\">Uruguay</option>
                                <option value=\"Uzbekistan\">Uzbekistan</option>
                                <option value=\"Vanuatu\">Vanuatu</option>
                                <option value=\"Vatican City State\">Vatican City State</option>
                                <option value=\"Venezuela\">Venezuela</option>
                                <option value=\"Vietnam\">Vietnam</option>
                                <option value=\"Virgin Islands (Brit)\">Virgin Islands (Brit)</option>
                                <option value=\"Virgin Islands (USA)\">Virgin Islands (USA)</option>
                                <option value=\"Wake Island\">Wake Island</option>
                                <option value=\"Wallis &amp; Futana Islands\">Wallis &amp; Futana Islands</option>
                                <option value=\"Yemen\">Yemen</option>
                                <option value=\"Zaire\">Zaire</option>
                                <option value=\"Zambia\">Zambia</option>
                                <option value=\"Zimbabwe\">Zimbabwe</option>
                            </optgroup>
                        </select>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Username input -->
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"username\">Username:</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control input-lg\" id=\"username\" name=\"username\" placeholder=\"Enter username\" required=\"true\">
                    </div>
                </div> 
            </div>
            <!-- Password input -->
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"password\">Password:</label>
                    <div class=\"col-sm-10\"> 
                        <input type=\"password\" class=\"form-control input-lg\" id=\"password\" name=\"password\" placeholder=\"Enter password\" required=\"true\" data-toggle=\"tooltip\" title=\"Must be between 8 and 50 characters long, with at least one of each: uppercase letter, lowercase letter, number and special character.\">
                    </div>
                </div>
            </div>
            <!-- Password confirmation input -->
            <div class=\"row\">
                <div class=\"form-group add-on form-group-lg\">
                    <label class=\"control-label col-sm-2\" for=\"password2\">Password confirmation:</label>
                    <div class=\"col-sm-10\"> 
                        <input type=\"password\" class=\"form-control input-lg\" id=\"password2\" name=\"password2\" placeholder=\"Retype password\" required=\"true\">
                    </div>
                </div>
            </div><!--  I'm keeping it in case 'I'm a freelancer' 'I'm a hirer'...
               <div class=\"form-group\"> 
                  <div class=\"col-sm-offset-2 col-sm-10\">
                    <div class=\"checkbox\">
                      <label><input type=\"checkbox\"> Remember me</label>
                    </div>
                  </div>
                </div>-->
            <!-- Submit button --> 
            <div class=\"row\">
                <div class=\"form-group\"> 
                    <div class=\"col-sm-offset-2 col-sm-10 text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\" value=\"Register\">Register</button>
                        <br><br>
                    </div>
                </div>
        </form>
    </div>
{% endblock %}
";
    }
}
