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
        //////////////////////////////////////////verifying email does not exist
        function checkEmail() {
            var email = \$('input[name=email]').val();
            if (email != '') {
                \$.ajax({
                    url: '/emailexists/' + email
                }).done(function (data) {
                    if (data) {
                        \$(\"#emailalertalreadyexists\").show();
                        \$(\"#everythingelse\").hide();
                    } else {
                        \$(\"#emailalertalreadyexists\").hide();
                    }
                });
            } else {
                \$('#emailalertalreadyexists').hide();
            }
        }


        \$(document).ready(function () {
            ///////////////////////////////////////////////////verify the inputs
            var allGood = true;

            ///////////////////////////////////inviting user to select a country
            \$(\"#countrynotselected\").show();

            //////////////////////////////////////////first submit button hidden
            \$(\"#submit\").hide();

            ///////////////////////////calling verification email does not exist
            //\$('input[name=email]').keyup(function () {
            \$('input[name=email]').blur(function () {
                checkEmail();
            });
            \$('input[name=email]').bind('paste', function () {
                checkEmail();
            });

            ////////////////////////////////////////////////////validating email              
            \$(\"#email\").blur(function () {
                var regexemail = /[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,3}/;
                var email = \$(\"input[name=email]\").val();
                if ((email.length < 10) || (email.length > 250)) {
                    allGood = false;
                    \$(\"#emailalertcharacters\").show();
                    \$(\"#submit\").hide();
                }
                if (!email.match(regexemail)) {
                    allGood = false;
                    \$(\"#emailalertregex\").show();
                } else if ((email.match(regexemail)) &&
                        (email.length >= 10) &&
                        (email.length <= 250)) {
                    allGood = true;
                    \$(\"#emailalertcharacters\").hide();
                    \$(\"#emailalertregex\").hide();
                    \$(\"#submit\").show();
                }
            });

            ///////////////////////////////////////////////validating first name              
            \$(\"#firstname\").blur(function () {
                var regexfirstname = /^[A-Za-z -]+\$/;
                var firstname = \$(\"input[name=firstname]\").val();
                if ((firstname.length < 3) || (firstname.length > 50)) {
                    allGood = false;
                    \$(\"#firstalertcharacters\").show();
                    \$(\"#submit\").hide();
                }
                if (!firstname.match(regexfirstname)) {
                    allGood = false;
                    \$(\"#firstalertregex\").show();
                    \$(\"#submit\").hide();
                } else if ((firstname.match(regexfirstname)) &&
                        (firstname.length >= 3) &&
                        (firstname.length <= 50)) {
                    allGood = true;
                    \$(\"#firstalertcharacters\").hide();
                    \$(\"#firstalertregex\").hide();
                    \$(\"#submit\").show();

                }
            });

            ////////////////////////////////////////////////validating last name             
            \$(\"#lastname\").blur(function () {
                var regexlastname = /^[A-Za-z -]+\$/;
                var lastname = \$(\"input[name=lastname]\").val();
                if ((lastname.length < 3) || (lastname.length > 50)) {
                    allGood = false;
                    \$(\"#lastalertcharacters\").show();
                    \$(\"#submit\").hide();
                }
                if (!lastname.match(regexlastname)) {
                    allGood = false;
                    \$(\"#lastalertregex\").show();
                    \$(\"#submit\").hide();
                } else if ((lastname.match(regexlastname)) &&
                        (lastname.length >= 3) &&
                        (lastname.length <= 50)) {
                    allGood = true;
                    \$(\"#lastalertcharacters\").hide();
                    \$(\"#lastalertregex\").hide();
                    \$(\"#submit\").show();
                }
            });

            //////////////////////////////////////////////////validating country
            \$('#country').blur(function () {
                var country = \$(\"#country\").val();
                if (country == \"\") {
                    allGood = false;
                    \$(\"#countrynotselected\").show();
                    \$(\"#submit\").hide();
                } else {
                    allGood = true;
                    \$(\"#countrynotselected\").hide();
                    \$(\"#submit\").show();
                }
            });

            ////////////////////////////////////////////////validating passwords            
            \$(\"#password\").blur(function () {
                var regexpassword = /(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[-+_!@#\$%^&*()-+=.,?])/;
                var password = \$(\"input[name=password]\").val();
                if ((password.length < 8) || (password.length > 50)) {
                    allGood = false;
                    \$(\"#passwordalertcharacters\").show();
                    \$(\"#submit\").hide();
                }
                if (!password.match(regexpassword)) {
                    allGood = false;
                    \$(\"#passwordalertregex\").show();
                    \$(\"#submit\").hide();
                } else if ((password.match(regexpassword)) &&
                        (password.length >= 8) &&
                        (password.length <= 50)) {
                    allGood = true;
                    \$(\"#passwordalertcharacters\").hide();
                    \$(\"#passwordalertregex\").hide();
                    \$(\"#submit\").show();
                }
            });

            \$(\"#password2\").blur(function () {
                var regexpassword = /(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[-+_!@#\$%^&*()-+=.,?])/;
                var password = \$(\"input[name=password]\").val();
                var password2 = \$(\"input[name=password2]\").val();
                if ((password2.length < 8) || (password2.length > 50)) {
                    allGood = false;
                    \$(\"#password2alertcharacters\").show();
                    \$(\"#submit\").hide();
                }
                if (!password2.match(regexpassword)) {
                    allGood = false;
                    \$(\"#password2alertregex\").show();
                    \$(\"#submit\").hide();
                }
                if (password != password2) {
                    allGood = false;
                    \$(\"#passwordalertdifferent\").show();
                    \$(\"#password2alertdifferent\").show();
                    \$(\"#submit\").hide();
                } else if ((password2.match(regexpassword)) &&
                        (password2.length >= 8) &&
                        (password2.length <= 50) &&
                        (password == password2)) {
                    allGood = true;
                    \$(\"#password2alertcharacters\").hide();
                    \$(\"#password2alertregex\").hide();
                    \$(\"#passwordalertdifferent\").hide();
                    \$(\"#password2alertdifferent\").hide();
                    \$(\"#submit\").show();
                }
            });

            if (!allGood) {
                \$(\"#submit\").hide();
                event.preventDefault();
            } else if (allGood) {
                \$(\"#submit\").show();
            }

            /////////////////////////////////////////////////////Register button
            \$('#registrationForm').submit(function (event) {
                var email = \$(\"input[name=email]\").val();
                var firstname = \$(\"input[name=firstname]\").val();
                var lastname = \$(\"input[name=lastname]\").val();
                var country = \$(\"input[name=country]\").selectedIndex;
                var password = \$(\"input[name=password]\").val();

            });
        });
    </script>
";
    }

    // line 205
    public function block_content($context, array $blocks = array())
    {
        // line 206
        echo "    <div class=\"blueContainer\">
        <br>
        <h1>Register</h1>

        ";
        // line 210
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 211
            echo "            <ul>
                ";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 213
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "            </ul>
        ";
        }
        // line 217
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
            <div class=\"alert alert-danger collapse\" id=\"emailalertcharacters\">
                <strong>Email</strong> must be between 10 and 250 characters long.
            </div>
            <div class=\"alert alert-danger collapse\" id=\"emailalertregex\">
                <strong>Email</strong> must look like a valid email.
            </div>
            <div class=\"alert alert-danger collapse\" id=\"emailalertalreadyexists\">
                <strong>Email</strong> already exists.
                <div>
                    <a href=\"/login\" class=\"btn btn-primary\">Login</a>
                </div>
            </div>

            <div id=\"everythingelse\">
                <!-- First name input -->
                <div class=\"row\" id=\"firstnamerow\">
                    <div class=\"form-group add-on form-group-lg\">
                        <label class=\"control-label col-sm-2\" for=\"firstname\">First name:</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control input-lg\" id=\"firstname\" name=\"firstname\" placeholder=\"Enter first name\" required=\"true\">
                        </div>
                    </div>
                </div>           
                <div class=\"alert alert-danger collapse\" id=\"firstalertcharacters\">
                    <strong>First name</strong> must be between 3 and 50 characters long.
                </div>
                <div class=\"alert alert-danger collapse\" id=\"firstalertregex\">
                    <strong>First name</strong> must consist only of letters (spaces and hyphens are allowed).
                </div>

                <!-- Last name input -->
                <div class=\"row\" id=\"lastnamerow\">
                    <div class=\"form-group add-on form-group-lg\">
                        <label class=\"control-label col-sm-2\" for=\"lastname\">Last name:</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control input-lg\" id=\"lastname\" name=\"lastname\" placeholder=\"Enter last name\" required=\"true\">
                        </div>
                    </div>
                </div>
                <div class=\"alert alert-danger collapse\" id=\"lastalertcharacters\">
                    <strong>Last name</strong> must be between 10 and 250 characters long.
                </div>
                <div class=\"alert alert-danger collapse\" id=\"lastalertregex\">
                    <strong>Last name</strong> must consist only of letters (spaces and hyphens are allowed).
                </div>

                <!-- Country input -->
                <div class=\"row\" id=\"countryrow\">
                    <div class=\"form-group form-group-lg\">
                        <label class=\"control-label col-sm-2\" for=\"country\">Country:</label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control input-lg\" id=\"country\" name=\"country\" required=\"true\">
                                <option value=\"\">Select your country</option>
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
                <div class=\"alert alert-danger collapse\" id=\"countrynotselected\">
                    <strong>Country</strong> must be selected.
                </div>

                <!-- Password input -->
                <div class=\"row\" id=\"passwordrow\">
                    <div class=\"form-group add-on form-group-lg\">
                        <label class=\"control-label col-sm-2\" for=\"password\">Password:</label>
                        <div class=\"col-sm-10\"> 
                            <input type=\"password\" class=\"form-control input-lg\" id=\"password\" name=\"password\" placeholder=\"Enter password\" required=\"true\" data-toggle=\"tooltip\" title=\"Must be between 8 and 50 characters long, with at least one of each: uppercase letter, lowercase letter, number and special character.\">
                        </div>
                    </div>
                </div>
                <div class=\"alert alert-danger collapse\" id=\"passwordalertcharacters\">
                    <strong>Password</strong> must be between 8 and 50 characters long.
                </div>
                <div class=\"alert alert-danger collapse\" id=\"passwordalertregex\">
                    <strong>Password</strong> must contain 1 of each: uppercase, lowercase, digit, special character.
                </div>            

                <!-- Password confirmation input -->
                <div class=\"row\" id=\"password2row\">
                    <div class=\"form-group add-on form-group-lg\">
                        <label class=\"control-label col-sm-2\" for=\"password2\">Password confirmation:</label>
                        <div class=\"col-sm-10\"> 
                            <input type=\"password\" class=\"form-control input-lg\" id=\"password2\" name=\"password2\" placeholder=\"Retype password\" required=\"true\">
                        </div>
                    </div>
                </div>
                <div class=\"alert alert-danger collapse\" id=\"password2alertcharacters\">
                    <strong>Password confirmation</strong> must be between 8 and 50 characters long.
                </div>
                <div class=\"alert alert-danger collapse\" id=\"password2alertregex\">
                    <strong>Password confirmation</strong> must contain 1 of each: uppercase, lowercase, digit, special character.
                </div>
                <div class=\"alert alert-danger collapse\" id=\"password2alertdifferent\">
                    Both <strong>passwords</strong> must be identical.
                </div>

                <!-- Captcha input 
                <div>
                    <img src=\"/captcha.php\">
                </div>
                <div class=\"row\" id=\"captcharow\">
                    <div class=\"form-group add-on form-group-lg\">
                        <label class=\"control-label col-sm-2\" for=\"captcha\"></label>
                        <div class=\"col-sm-10\"> 
                            <input type=\"text\" class=\"form-control input-lg\" id=\"captcha\" name=\"captcha\" placeholder=\"Type what you see\" required=\"true\">
                        </div>
                    </div>
                </div>-->


                <!-- Submit button --> 
                <div class=\"row\" id=\"registerbutton\">
                    <div class=\"form-group\"> 
                        <div class=\"col-sm-offset-2 col-sm-10 text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\" value=\"Register\" id=\"submit\">Register</button>
                            <br><br>
                        </div>
                    </div>
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
        return array (  271 => 217,  267 => 215,  258 => 213,  254 => 212,  251 => 211,  249 => 210,  243 => 206,  240 => 205,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block title %}{{\"Register\"}}{% endblock %}

{% block head %}    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>
        //////////////////////////////////////////verifying email does not exist
        function checkEmail() {
            var email = \$('input[name=email]').val();
            if (email != '') {
                \$.ajax({
                    url: '/emailexists/' + email
                }).done(function (data) {
                    if (data) {
                        \$(\"#emailalertalreadyexists\").show();
                        \$(\"#everythingelse\").hide();
                    } else {
                        \$(\"#emailalertalreadyexists\").hide();
                    }
                });
            } else {
                \$('#emailalertalreadyexists').hide();
            }
        }


        \$(document).ready(function () {
            ///////////////////////////////////////////////////verify the inputs
            var allGood = true;

            ///////////////////////////////////inviting user to select a country
            \$(\"#countrynotselected\").show();

            //////////////////////////////////////////first submit button hidden
            \$(\"#submit\").hide();

            ///////////////////////////calling verification email does not exist
            //\$('input[name=email]').keyup(function () {
            \$('input[name=email]').blur(function () {
                checkEmail();
            });
            \$('input[name=email]').bind('paste', function () {
                checkEmail();
            });

            ////////////////////////////////////////////////////validating email              
            \$(\"#email\").blur(function () {
                var regexemail = /[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,3}/;
                var email = \$(\"input[name=email]\").val();
                if ((email.length < 10) || (email.length > 250)) {
                    allGood = false;
                    \$(\"#emailalertcharacters\").show();
                    \$(\"#submit\").hide();
                }
                if (!email.match(regexemail)) {
                    allGood = false;
                    \$(\"#emailalertregex\").show();
                } else if ((email.match(regexemail)) &&
                        (email.length >= 10) &&
                        (email.length <= 250)) {
                    allGood = true;
                    \$(\"#emailalertcharacters\").hide();
                    \$(\"#emailalertregex\").hide();
                    \$(\"#submit\").show();
                }
            });

            ///////////////////////////////////////////////validating first name              
            \$(\"#firstname\").blur(function () {
                var regexfirstname = /^[A-Za-z -]+\$/;
                var firstname = \$(\"input[name=firstname]\").val();
                if ((firstname.length < 3) || (firstname.length > 50)) {
                    allGood = false;
                    \$(\"#firstalertcharacters\").show();
                    \$(\"#submit\").hide();
                }
                if (!firstname.match(regexfirstname)) {
                    allGood = false;
                    \$(\"#firstalertregex\").show();
                    \$(\"#submit\").hide();
                } else if ((firstname.match(regexfirstname)) &&
                        (firstname.length >= 3) &&
                        (firstname.length <= 50)) {
                    allGood = true;
                    \$(\"#firstalertcharacters\").hide();
                    \$(\"#firstalertregex\").hide();
                    \$(\"#submit\").show();

                }
            });

            ////////////////////////////////////////////////validating last name             
            \$(\"#lastname\").blur(function () {
                var regexlastname = /^[A-Za-z -]+\$/;
                var lastname = \$(\"input[name=lastname]\").val();
                if ((lastname.length < 3) || (lastname.length > 50)) {
                    allGood = false;
                    \$(\"#lastalertcharacters\").show();
                    \$(\"#submit\").hide();
                }
                if (!lastname.match(regexlastname)) {
                    allGood = false;
                    \$(\"#lastalertregex\").show();
                    \$(\"#submit\").hide();
                } else if ((lastname.match(regexlastname)) &&
                        (lastname.length >= 3) &&
                        (lastname.length <= 50)) {
                    allGood = true;
                    \$(\"#lastalertcharacters\").hide();
                    \$(\"#lastalertregex\").hide();
                    \$(\"#submit\").show();
                }
            });

            //////////////////////////////////////////////////validating country
            \$('#country').blur(function () {
                var country = \$(\"#country\").val();
                if (country == \"\") {
                    allGood = false;
                    \$(\"#countrynotselected\").show();
                    \$(\"#submit\").hide();
                } else {
                    allGood = true;
                    \$(\"#countrynotselected\").hide();
                    \$(\"#submit\").show();
                }
            });

            ////////////////////////////////////////////////validating passwords            
            \$(\"#password\").blur(function () {
                var regexpassword = /(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[-+_!@#\$%^&*()-+=.,?])/;
                var password = \$(\"input[name=password]\").val();
                if ((password.length < 8) || (password.length > 50)) {
                    allGood = false;
                    \$(\"#passwordalertcharacters\").show();
                    \$(\"#submit\").hide();
                }
                if (!password.match(regexpassword)) {
                    allGood = false;
                    \$(\"#passwordalertregex\").show();
                    \$(\"#submit\").hide();
                } else if ((password.match(regexpassword)) &&
                        (password.length >= 8) &&
                        (password.length <= 50)) {
                    allGood = true;
                    \$(\"#passwordalertcharacters\").hide();
                    \$(\"#passwordalertregex\").hide();
                    \$(\"#submit\").show();
                }
            });

            \$(\"#password2\").blur(function () {
                var regexpassword = /(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[-+_!@#\$%^&*()-+=.,?])/;
                var password = \$(\"input[name=password]\").val();
                var password2 = \$(\"input[name=password2]\").val();
                if ((password2.length < 8) || (password2.length > 50)) {
                    allGood = false;
                    \$(\"#password2alertcharacters\").show();
                    \$(\"#submit\").hide();
                }
                if (!password2.match(regexpassword)) {
                    allGood = false;
                    \$(\"#password2alertregex\").show();
                    \$(\"#submit\").hide();
                }
                if (password != password2) {
                    allGood = false;
                    \$(\"#passwordalertdifferent\").show();
                    \$(\"#password2alertdifferent\").show();
                    \$(\"#submit\").hide();
                } else if ((password2.match(regexpassword)) &&
                        (password2.length >= 8) &&
                        (password2.length <= 50) &&
                        (password == password2)) {
                    allGood = true;
                    \$(\"#password2alertcharacters\").hide();
                    \$(\"#password2alertregex\").hide();
                    \$(\"#passwordalertdifferent\").hide();
                    \$(\"#password2alertdifferent\").hide();
                    \$(\"#submit\").show();
                }
            });

            if (!allGood) {
                \$(\"#submit\").hide();
                event.preventDefault();
            } else if (allGood) {
                \$(\"#submit\").show();
            }

            /////////////////////////////////////////////////////Register button
            \$('#registrationForm').submit(function (event) {
                var email = \$(\"input[name=email]\").val();
                var firstname = \$(\"input[name=firstname]\").val();
                var lastname = \$(\"input[name=lastname]\").val();
                var country = \$(\"input[name=country]\").selectedIndex;
                var password = \$(\"input[name=password]\").val();

            });
        });
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
            <div class=\"alert alert-danger collapse\" id=\"emailalertcharacters\">
                <strong>Email</strong> must be between 10 and 250 characters long.
            </div>
            <div class=\"alert alert-danger collapse\" id=\"emailalertregex\">
                <strong>Email</strong> must look like a valid email.
            </div>
            <div class=\"alert alert-danger collapse\" id=\"emailalertalreadyexists\">
                <strong>Email</strong> already exists.
                <div>
                    <a href=\"/login\" class=\"btn btn-primary\">Login</a>
                </div>
            </div>

            <div id=\"everythingelse\">
                <!-- First name input -->
                <div class=\"row\" id=\"firstnamerow\">
                    <div class=\"form-group add-on form-group-lg\">
                        <label class=\"control-label col-sm-2\" for=\"firstname\">First name:</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control input-lg\" id=\"firstname\" name=\"firstname\" placeholder=\"Enter first name\" required=\"true\">
                        </div>
                    </div>
                </div>           
                <div class=\"alert alert-danger collapse\" id=\"firstalertcharacters\">
                    <strong>First name</strong> must be between 3 and 50 characters long.
                </div>
                <div class=\"alert alert-danger collapse\" id=\"firstalertregex\">
                    <strong>First name</strong> must consist only of letters (spaces and hyphens are allowed).
                </div>

                <!-- Last name input -->
                <div class=\"row\" id=\"lastnamerow\">
                    <div class=\"form-group add-on form-group-lg\">
                        <label class=\"control-label col-sm-2\" for=\"lastname\">Last name:</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control input-lg\" id=\"lastname\" name=\"lastname\" placeholder=\"Enter last name\" required=\"true\">
                        </div>
                    </div>
                </div>
                <div class=\"alert alert-danger collapse\" id=\"lastalertcharacters\">
                    <strong>Last name</strong> must be between 10 and 250 characters long.
                </div>
                <div class=\"alert alert-danger collapse\" id=\"lastalertregex\">
                    <strong>Last name</strong> must consist only of letters (spaces and hyphens are allowed).
                </div>

                <!-- Country input -->
                <div class=\"row\" id=\"countryrow\">
                    <div class=\"form-group form-group-lg\">
                        <label class=\"control-label col-sm-2\" for=\"country\">Country:</label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control input-lg\" id=\"country\" name=\"country\" required=\"true\">
                                <option value=\"\">Select your country</option>
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
                <div class=\"alert alert-danger collapse\" id=\"countrynotselected\">
                    <strong>Country</strong> must be selected.
                </div>

                <!-- Password input -->
                <div class=\"row\" id=\"passwordrow\">
                    <div class=\"form-group add-on form-group-lg\">
                        <label class=\"control-label col-sm-2\" for=\"password\">Password:</label>
                        <div class=\"col-sm-10\"> 
                            <input type=\"password\" class=\"form-control input-lg\" id=\"password\" name=\"password\" placeholder=\"Enter password\" required=\"true\" data-toggle=\"tooltip\" title=\"Must be between 8 and 50 characters long, with at least one of each: uppercase letter, lowercase letter, number and special character.\">
                        </div>
                    </div>
                </div>
                <div class=\"alert alert-danger collapse\" id=\"passwordalertcharacters\">
                    <strong>Password</strong> must be between 8 and 50 characters long.
                </div>
                <div class=\"alert alert-danger collapse\" id=\"passwordalertregex\">
                    <strong>Password</strong> must contain 1 of each: uppercase, lowercase, digit, special character.
                </div>            

                <!-- Password confirmation input -->
                <div class=\"row\" id=\"password2row\">
                    <div class=\"form-group add-on form-group-lg\">
                        <label class=\"control-label col-sm-2\" for=\"password2\">Password confirmation:</label>
                        <div class=\"col-sm-10\"> 
                            <input type=\"password\" class=\"form-control input-lg\" id=\"password2\" name=\"password2\" placeholder=\"Retype password\" required=\"true\">
                        </div>
                    </div>
                </div>
                <div class=\"alert alert-danger collapse\" id=\"password2alertcharacters\">
                    <strong>Password confirmation</strong> must be between 8 and 50 characters long.
                </div>
                <div class=\"alert alert-danger collapse\" id=\"password2alertregex\">
                    <strong>Password confirmation</strong> must contain 1 of each: uppercase, lowercase, digit, special character.
                </div>
                <div class=\"alert alert-danger collapse\" id=\"password2alertdifferent\">
                    Both <strong>passwords</strong> must be identical.
                </div>

                <!-- Captcha input 
                <div>
                    <img src=\"/captcha.php\">
                </div>
                <div class=\"row\" id=\"captcharow\">
                    <div class=\"form-group add-on form-group-lg\">
                        <label class=\"control-label col-sm-2\" for=\"captcha\"></label>
                        <div class=\"col-sm-10\"> 
                            <input type=\"text\" class=\"form-control input-lg\" id=\"captcha\" name=\"captcha\" placeholder=\"Type what you see\" required=\"true\">
                        </div>
                    </div>
                </div>-->


                <!-- Submit button --> 
                <div class=\"row\" id=\"registerbutton\">
                    <div class=\"form-group\"> 
                        <div class=\"col-sm-offset-2 col-sm-10 text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\" value=\"Register\" id=\"submit\">Register</button>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
{% endblock %}
";
    }
}
