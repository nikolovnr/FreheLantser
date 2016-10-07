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
        echo "    <div class=\"blueContainer\">
        <h1>Register</h1>

        ";
        // line 20
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 21
            echo "            <ul>
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 23
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            </ul>
        ";
        }
        // line 27
        echo "
        <form class=\"form-horizontal\" method=\"POST\">
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"firstname\">First name:</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control input-lg\" id=\"firstname\" placeholder=\"Enter first name\">
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"lastname\">Last name:</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control input-lg\" id=\"lastname\" placeholder=\"Enter last name\">
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"country\">Country:</label>
                <div class=\"col-sm-10\">
                    <select class=\"form-control input-lg\" id=\"country\" name=\"country\">
                        <option>Select your country</option>
                        <option value=\"CAN\">Canada</option> 
                        <option value=\"USA\">United States</option>
                        <optgroup label=\"_____________\">
                            <option value=\"AFG\">Afghanistan</option>
                            <option value=\"ALA\">Åland Islands</option>
                            <option value=\"ALB\">Albania</option>
                            <option value=\"DZA\">Algeria</option>
                            <option value=\"ASM\">American Samoa</option>
                            <option value=\"AND\">Andorra</option>
                            <option value=\"AGO\">Angola</option>
                            <option value=\"AIA\">Anguilla</option>
                            <option value=\"ATA\">Antarctica</option>
                            <option value=\"ATG\">Antigua and Barbuda</option>
                            <option value=\"ARG\">Argentina</option>
                            <option value=\"ARM\">Armenia</option>
                            <option value=\"ABW\">Aruba</option>
                            <option value=\"AUS\">Australia</option>
                            <option value=\"AUT\">Austria</option>
                            <option value=\"AZE\">Azerbaijan</option>
                            <option value=\"BHS\">Bahamas</option>
                            <option value=\"BHR\">Bahrain</option>
                            <option value=\"BGD\">Bangladesh</option>
                            <option value=\"BRB\">Barbados</option>
                            <option value=\"BLR\">Belarus</option>
                            <option value=\"BEL\">Belgium</option>
                            <option value=\"BLZ\">Belize</option>
                            <option value=\"BEN\">Benin</option>
                            <option value=\"BMU\">Bermuda</option>
                            <option value=\"BTN\">Bhutan</option>
                            <option value=\"BOL\">Bolivia, Plurinational State of</option>
                            <option value=\"BES\">Bonaire, Sint Eustatius and Saba</option>
                            <option value=\"BIH\">Bosnia and Herzegovina</option>
                            <option value=\"BWA\">Botswana</option>
                            <option value=\"BVT\">Bouvet Island</option>
                            <option value=\"BRA\">Brazil</option>
                            <option value=\"IOT\">British Indian Ocean Territory</option>
                            <option value=\"BRN\">Brunei Darussalam</option>
                            <option value=\"BGR\">Bulgaria</option>
                            <option value=\"BFA\">Burkina Faso</option>
                            <option value=\"BDI\">Burundi</option>
                            <option value=\"KHM\">Cambodia</option>
                            <option value=\"CMR\">Cameroon</option>
                            <option value=\"CAN\">Canada</option>
                            <option value=\"CPV\">Cape Verde</option>
                            <option value=\"CYM\">Cayman Islands</option>
                            <option value=\"CAF\">Central African Republic</option>
                            <option value=\"TCD\">Chad</option>
                            <option value=\"CHL\">Chile</option>
                            <option value=\"CHN\">China</option>
                            <option value=\"CXR\">Christmas Island</option>
                            <option value=\"CCK\">Cocos (Keeling) Islands</option>
                            <option value=\"COL\">Colombia</option>
                            <option value=\"COM\">Comoros</option>
                            <option value=\"COG\">Congo</option>
                            <option value=\"COD\">Congo, the Democratic Republic of the</option>
                            <option value=\"COK\">Cook Islands</option>
                            <option value=\"CRI\">Costa Rica</option>
                            <option value=\"CIV\">Côte d'Ivoire</option>
                            <option value=\"HRV\">Croatia</option>
                            <option value=\"CUB\">Cuba</option>
                            <option value=\"CUW\">Curaçao</option>
                            <option value=\"CYP\">Cyprus</option>
                            <option value=\"CZE\">Czech Republic</option>
                            <option value=\"DNK\">Denmark</option>
                            <option value=\"DJI\">Djibouti</option>
                            <option value=\"DMA\">Dominica</option>
                            <option value=\"DOM\">Dominican Republic</option>
                            <option value=\"ECU\">Ecuador</option>
                            <option value=\"EGY\">Egypt</option>
                            <option value=\"SLV\">El Salvador</option>
                            <option value=\"GNQ\">Equatorial Guinea</option>
                            <option value=\"ERI\">Eritrea</option>
                            <option value=\"EST\">Estonia</option>
                            <option value=\"ETH\">Ethiopia</option>
                            <option value=\"FLK\">Falkland Islands (Malvinas)</option>
                            <option value=\"FRO\">Faroe Islands</option>
                            <option value=\"FJI\">Fiji</option>
                            <option value=\"FIN\">Finland</option>
                            <option value=\"FRA\">France</option>
                            <option value=\"GUF\">French Guiana</option>
                            <option value=\"PYF\">French Polynesia</option>
                            <option value=\"ATF\">French Southern Territories</option>
                            <option value=\"GAB\">Gabon</option>
                            <option value=\"GMB\">Gambia</option>
                            <option value=\"GEO\">Georgia</option>
                            <option value=\"DEU\">Germany</option>
                            <option value=\"GHA\">Ghana</option>
                            <option value=\"GIB\">Gibraltar</option>
                            <option value=\"GRC\">Greece</option>
                            <option value=\"GRL\">Greenland</option>
                            <option value=\"GRD\">Grenada</option>
                            <option value=\"GLP\">Guadeloupe</option>
                            <option value=\"GUM\">Guam</option>
                            <option value=\"GTM\">Guatemala</option>
                            <option value=\"GGY\">Guernsey</option>
                            <option value=\"GIN\">Guinea</option>
                            <option value=\"GNB\">Guinea-Bissau</option>
                            <option value=\"GUY\">Guyana</option>
                            <option value=\"HTI\">Haiti</option>
                            <option value=\"HMD\">Heard Island and McDonald Islands</option>
                            <option value=\"VAT\">Holy See (Vatican City State)</option>
                            <option value=\"HND\">Honduras</option>
                            <option value=\"HKG\">Hong Kong</option>
                            <option value=\"HUN\">Hungary</option>
                            <option value=\"ISL\">Iceland</option>
                            <option value=\"IND\">India</option>
                            <option value=\"IDN\">Indonesia</option>
                            <option value=\"IRN\">Iran, Islamic Republic of</option>
                            <option value=\"IRQ\">Iraq</option>
                            <option value=\"IRL\">Ireland</option>
                            <option value=\"IMN\">Isle of Man</option>
                            <option value=\"ISR\">Israel</option>
                            <option value=\"ITA\">Italy</option>
                            <option value=\"JAM\">Jamaica</option>
                            <option value=\"JPN\">Japan</option>
                            <option value=\"JEY\">Jersey</option>
                            <option value=\"JOR\">Jordan</option>
                            <option value=\"KAZ\">Kazakhstan</option>
                            <option value=\"KEN\">Kenya</option>
                            <option value=\"KIR\">Kiribati</option>
                            <option value=\"PRK\">Korea, Democratic People's Republic of</option>
                            <option value=\"KOR\">Korea, Republic of</option>
                            <option value=\"KWT\">Kuwait</option>
                            <option value=\"KGZ\">Kyrgyzstan</option>
                            <option value=\"LAO\">Lao People's Democratic Republic</option>
                            <option value=\"LVA\">Latvia</option>
                            <option value=\"LBN\">Lebanon</option>
                            <option value=\"LSO\">Lesotho</option>
                            <option value=\"LBR\">Liberia</option>
                            <option value=\"LBY\">Libya</option>
                            <option value=\"LIE\">Liechtenstein</option>
                            <option value=\"LTU\">Lithuania</option>
                            <option value=\"LUX\">Luxembourg</option>
                            <option value=\"MAC\">Macao</option>
                            <option value=\"MKD\">Macedonia, the former Yugoslav Republic of</option>
                            <option value=\"MDG\">Madagascar</option>
                            <option value=\"MWI\">Malawi</option>
                            <option value=\"MYS\">Malaysia</option>
                            <option value=\"MDV\">Maldives</option>
                            <option value=\"MLI\">Mali</option>
                            <option value=\"MLT\">Malta</option>
                            <option value=\"MHL\">Marshall Islands</option>
                            <option value=\"MTQ\">Martinique</option>
                            <option value=\"MRT\">Mauritania</option>
                            <option value=\"MUS\">Mauritius</option>
                            <option value=\"MYT\">Mayotte</option>
                            <option value=\"MEX\">Mexico</option>
                            <option value=\"FSM\">Micronesia, Federated States of</option>
                            <option value=\"MDA\">Moldova, Republic of</option>
                            <option value=\"MCO\">Monaco</option>
                            <option value=\"MNG\">Mongolia</option>
                            <option value=\"MNE\">Montenegro</option>
                            <option value=\"MSR\">Montserrat</option>
                            <option value=\"MAR\">Morocco</option>
                            <option value=\"MOZ\">Mozambique</option>
                            <option value=\"MMR\">Myanmar</option>
                            <option value=\"NAM\">Namibia</option>
                            <option value=\"NRU\">Nauru</option>
                            <option value=\"NPL\">Nepal</option>
                            <option value=\"NLD\">Netherlands</option>
                            <option value=\"NCL\">New Caledonia</option>
                            <option value=\"NZL\">New Zealand</option>
                            <option value=\"NIC\">Nicaragua</option>
                            <option value=\"NER\">Niger</option>
                            <option value=\"NGA\">Nigeria</option>
                            <option value=\"NIU\">Niue</option>
                            <option value=\"NFK\">Norfolk Island</option>
                            <option value=\"MNP\">Northern Mariana Islands</option>
                            <option value=\"NOR\">Norway</option>
                            <option value=\"OMN\">Oman</option>
                            <option value=\"PAK\">Pakistan</option>
                            <option value=\"PLW\">Palau</option>
                            <option value=\"PSE\">Palestinian Territory, Occupied</option>
                            <option value=\"PAN\">Panama</option>
                            <option value=\"PNG\">Papua New Guinea</option>
                            <option value=\"PRY\">Paraguay</option>
                            <option value=\"PER\">Peru</option>
                            <option value=\"PHL\">Philippines</option>
                            <option value=\"PCN\">Pitcairn</option>
                            <option value=\"POL\">Poland</option>
                            <option value=\"PRT\">Portugal</option>
                            <option value=\"PRI\">Puerto Rico</option>
                            <option value=\"QAT\">Qatar</option>
                            <option value=\"REU\">Réunion</option>
                            <option value=\"ROU\">Romania</option>
                            <option value=\"RUS\">Russian Federation</option>
                            <option value=\"RWA\">Rwanda</option>
                            <option value=\"BLM\">Saint Barthélemy</option>
                            <option value=\"SHN\">Saint Helena, Ascension and Tristan da Cunha</option>
                            <option value=\"KNA\">Saint Kitts and Nevis</option>
                            <option value=\"LCA\">Saint Lucia</option>
                            <option value=\"MAF\">Saint Martin (French part)</option>
                            <option value=\"SPM\">Saint Pierre and Miquelon</option>
                            <option value=\"VCT\">Saint Vincent and the Grenadines</option>
                            <option value=\"WSM\">Samoa</option>
                            <option value=\"SMR\">San Marino</option>
                            <option value=\"STP\">Sao Tome and Principe</option>
                            <option value=\"SAU\">Saudi Arabia</option>
                            <option value=\"SEN\">Senegal</option>
                            <option value=\"SRB\">Serbia</option>
                            <option value=\"SYC\">Seychelles</option>
                            <option value=\"SLE\">Sierra Leone</option>
                            <option value=\"SGP\">Singapore</option>
                            <option value=\"SXM\">Sint Maarten (Dutch part)</option>
                            <option value=\"SVK\">Slovakia</option>
                            <option value=\"SVN\">Slovenia</option>
                            <option value=\"SLB\">Solomon Islands</option>
                            <option value=\"SOM\">Somalia</option>
                            <option value=\"ZAF\">South Africa</option>
                            <option value=\"SGS\">South Georgia and the South Sandwich Islands</option>
                            <option value=\"SSD\">South Sudan</option>
                            <option value=\"ESP\">Spain</option>
                            <option value=\"LKA\">Sri Lanka</option>
                            <option value=\"SDN\">Sudan</option>
                            <option value=\"SUR\">Suriname</option>
                            <option value=\"SJM\">Svalbard and Jan Mayen</option>
                            <option value=\"SWZ\">Swaziland</option>
                            <option value=\"SWE\">Sweden</option>
                            <option value=\"CHE\">Switzerland</option>
                            <option value=\"SYR\">Syrian Arab Republic</option>
                            <option value=\"TWN\">Taiwan, Province of China</option>
                            <option value=\"TJK\">Tajikistan</option>
                            <option value=\"TZA\">Tanzania, United Republic of</option>
                            <option value=\"THA\">Thailand</option>
                            <option value=\"TLS\">Timor-Leste</option>
                            <option value=\"TGO\">Togo</option>
                            <option value=\"TKL\">Tokelau</option>
                            <option value=\"TON\">Tonga</option>
                            <option value=\"TTO\">Trinidad and Tobago</option>
                            <option value=\"TUN\">Tunisia</option>
                            <option value=\"TUR\">Turkey</option>
                            <option value=\"TKM\">Turkmenistan</option>
                            <option value=\"TCA\">Turks and Caicos Islands</option>
                            <option value=\"TUV\">Tuvalu</option>
                            <option value=\"UGA\">Uganda</option>
                            <option value=\"UKR\">Ukraine</option>
                            <option value=\"ARE\">United Arab Emirates</option>
                            <option value=\"GBR\">United Kingdom</option>
                            <option value=\"USA\">United States</option>
                            <option value=\"UMI\">United States Minor Outlying Islands</option>
                            <option value=\"URY\">Uruguay</option>
                            <option value=\"UZB\">Uzbekistan</option>
                            <option value=\"VUT\">Vanuatu</option>
                            <option value=\"VEN\">Venezuela, Bolivarian Republic of</option>
                            <option value=\"VNM\">Viet Nam</option>
                            <option value=\"VGB\">Virgin Islands, British</option>
                            <option value=\"VIR\">Virgin Islands, U.S.</option>
                            <option value=\"WLF\">Wallis and Futuna</option>
                            <option value=\"ESH\">Western Sahara</option>
                            <option value=\"YEM\">Yemen</option>
                            <option value=\"ZMB\">Zambia</option>
                            <option value=\"ZWE\">Zimbabwe</option>
                        </optgroup>
                    </select>
                    </select>
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"username\">Username:</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control input-lg\" id=\"username\" placeholder=\"Enter username\">
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"email\">Email:</label>
                <div class=\"col-sm-10\">
                    <input type=\"email\" class=\"form-control input-lg\" id=\"email\" placeholder=\"Enter email\">
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"password\">Password:</label>
                <div class=\"col-sm-10\"> 
                    <input type=\"password\" class=\"form-control input-lg\" id=\"password\" placeholder=\"Enter password\" data-toggle=\"tooltip\" title=\"Must be between 8 and 50 characters long, with at least one of each: uppercase letter, lowercase letter, number and special character.\">
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"password2\">Password confirmation:</label>
                <div class=\"col-sm-10\"> 
                    <input type=\"password\" class=\"form-control input-lg\" id=\"password2\" placeholder=\"Retype password\">
                </div>
            </div><!--
            <div class=\"form-group\"> 
              <div class=\"col-sm-offset-2 col-sm-10\">
                <div class=\"checkbox\">
                  <label><input type=\"checkbox\"> Remember me</label>
                </div>
              </div>
            </div>-->
            <div class=\"form-group\"> 
                <div class=\"col-sm-offset-2 col-sm-10\">
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
        return array (  81 => 27,  77 => 25,  68 => 23,  64 => 22,  61 => 21,  59 => 20,  54 => 17,  51 => 16,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block title %}{{\"Register\"}}{% endblock %}

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
    <div class=\"blueContainer\">
        <h1>Register</h1>

        {% if errorList %}
            <ul>
                {% for error in errorList %}
                    <li>{{error}}</li>
                    {% endfor %}
            </ul>
        {% endif %}

        <form class=\"form-horizontal\" method=\"POST\">
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"firstname\">First name:</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control input-lg\" id=\"firstname\" placeholder=\"Enter first name\">
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"lastname\">Last name:</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control input-lg\" id=\"lastname\" placeholder=\"Enter last name\">
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"country\">Country:</label>
                <div class=\"col-sm-10\">
                    <select class=\"form-control input-lg\" id=\"country\" name=\"country\">
                        <option>Select your country</option>
                        <option value=\"CAN\">Canada</option> 
                        <option value=\"USA\">United States</option>
                        <optgroup label=\"_____________\">
                            <option value=\"AFG\">Afghanistan</option>
                            <option value=\"ALA\">Åland Islands</option>
                            <option value=\"ALB\">Albania</option>
                            <option value=\"DZA\">Algeria</option>
                            <option value=\"ASM\">American Samoa</option>
                            <option value=\"AND\">Andorra</option>
                            <option value=\"AGO\">Angola</option>
                            <option value=\"AIA\">Anguilla</option>
                            <option value=\"ATA\">Antarctica</option>
                            <option value=\"ATG\">Antigua and Barbuda</option>
                            <option value=\"ARG\">Argentina</option>
                            <option value=\"ARM\">Armenia</option>
                            <option value=\"ABW\">Aruba</option>
                            <option value=\"AUS\">Australia</option>
                            <option value=\"AUT\">Austria</option>
                            <option value=\"AZE\">Azerbaijan</option>
                            <option value=\"BHS\">Bahamas</option>
                            <option value=\"BHR\">Bahrain</option>
                            <option value=\"BGD\">Bangladesh</option>
                            <option value=\"BRB\">Barbados</option>
                            <option value=\"BLR\">Belarus</option>
                            <option value=\"BEL\">Belgium</option>
                            <option value=\"BLZ\">Belize</option>
                            <option value=\"BEN\">Benin</option>
                            <option value=\"BMU\">Bermuda</option>
                            <option value=\"BTN\">Bhutan</option>
                            <option value=\"BOL\">Bolivia, Plurinational State of</option>
                            <option value=\"BES\">Bonaire, Sint Eustatius and Saba</option>
                            <option value=\"BIH\">Bosnia and Herzegovina</option>
                            <option value=\"BWA\">Botswana</option>
                            <option value=\"BVT\">Bouvet Island</option>
                            <option value=\"BRA\">Brazil</option>
                            <option value=\"IOT\">British Indian Ocean Territory</option>
                            <option value=\"BRN\">Brunei Darussalam</option>
                            <option value=\"BGR\">Bulgaria</option>
                            <option value=\"BFA\">Burkina Faso</option>
                            <option value=\"BDI\">Burundi</option>
                            <option value=\"KHM\">Cambodia</option>
                            <option value=\"CMR\">Cameroon</option>
                            <option value=\"CAN\">Canada</option>
                            <option value=\"CPV\">Cape Verde</option>
                            <option value=\"CYM\">Cayman Islands</option>
                            <option value=\"CAF\">Central African Republic</option>
                            <option value=\"TCD\">Chad</option>
                            <option value=\"CHL\">Chile</option>
                            <option value=\"CHN\">China</option>
                            <option value=\"CXR\">Christmas Island</option>
                            <option value=\"CCK\">Cocos (Keeling) Islands</option>
                            <option value=\"COL\">Colombia</option>
                            <option value=\"COM\">Comoros</option>
                            <option value=\"COG\">Congo</option>
                            <option value=\"COD\">Congo, the Democratic Republic of the</option>
                            <option value=\"COK\">Cook Islands</option>
                            <option value=\"CRI\">Costa Rica</option>
                            <option value=\"CIV\">Côte d'Ivoire</option>
                            <option value=\"HRV\">Croatia</option>
                            <option value=\"CUB\">Cuba</option>
                            <option value=\"CUW\">Curaçao</option>
                            <option value=\"CYP\">Cyprus</option>
                            <option value=\"CZE\">Czech Republic</option>
                            <option value=\"DNK\">Denmark</option>
                            <option value=\"DJI\">Djibouti</option>
                            <option value=\"DMA\">Dominica</option>
                            <option value=\"DOM\">Dominican Republic</option>
                            <option value=\"ECU\">Ecuador</option>
                            <option value=\"EGY\">Egypt</option>
                            <option value=\"SLV\">El Salvador</option>
                            <option value=\"GNQ\">Equatorial Guinea</option>
                            <option value=\"ERI\">Eritrea</option>
                            <option value=\"EST\">Estonia</option>
                            <option value=\"ETH\">Ethiopia</option>
                            <option value=\"FLK\">Falkland Islands (Malvinas)</option>
                            <option value=\"FRO\">Faroe Islands</option>
                            <option value=\"FJI\">Fiji</option>
                            <option value=\"FIN\">Finland</option>
                            <option value=\"FRA\">France</option>
                            <option value=\"GUF\">French Guiana</option>
                            <option value=\"PYF\">French Polynesia</option>
                            <option value=\"ATF\">French Southern Territories</option>
                            <option value=\"GAB\">Gabon</option>
                            <option value=\"GMB\">Gambia</option>
                            <option value=\"GEO\">Georgia</option>
                            <option value=\"DEU\">Germany</option>
                            <option value=\"GHA\">Ghana</option>
                            <option value=\"GIB\">Gibraltar</option>
                            <option value=\"GRC\">Greece</option>
                            <option value=\"GRL\">Greenland</option>
                            <option value=\"GRD\">Grenada</option>
                            <option value=\"GLP\">Guadeloupe</option>
                            <option value=\"GUM\">Guam</option>
                            <option value=\"GTM\">Guatemala</option>
                            <option value=\"GGY\">Guernsey</option>
                            <option value=\"GIN\">Guinea</option>
                            <option value=\"GNB\">Guinea-Bissau</option>
                            <option value=\"GUY\">Guyana</option>
                            <option value=\"HTI\">Haiti</option>
                            <option value=\"HMD\">Heard Island and McDonald Islands</option>
                            <option value=\"VAT\">Holy See (Vatican City State)</option>
                            <option value=\"HND\">Honduras</option>
                            <option value=\"HKG\">Hong Kong</option>
                            <option value=\"HUN\">Hungary</option>
                            <option value=\"ISL\">Iceland</option>
                            <option value=\"IND\">India</option>
                            <option value=\"IDN\">Indonesia</option>
                            <option value=\"IRN\">Iran, Islamic Republic of</option>
                            <option value=\"IRQ\">Iraq</option>
                            <option value=\"IRL\">Ireland</option>
                            <option value=\"IMN\">Isle of Man</option>
                            <option value=\"ISR\">Israel</option>
                            <option value=\"ITA\">Italy</option>
                            <option value=\"JAM\">Jamaica</option>
                            <option value=\"JPN\">Japan</option>
                            <option value=\"JEY\">Jersey</option>
                            <option value=\"JOR\">Jordan</option>
                            <option value=\"KAZ\">Kazakhstan</option>
                            <option value=\"KEN\">Kenya</option>
                            <option value=\"KIR\">Kiribati</option>
                            <option value=\"PRK\">Korea, Democratic People's Republic of</option>
                            <option value=\"KOR\">Korea, Republic of</option>
                            <option value=\"KWT\">Kuwait</option>
                            <option value=\"KGZ\">Kyrgyzstan</option>
                            <option value=\"LAO\">Lao People's Democratic Republic</option>
                            <option value=\"LVA\">Latvia</option>
                            <option value=\"LBN\">Lebanon</option>
                            <option value=\"LSO\">Lesotho</option>
                            <option value=\"LBR\">Liberia</option>
                            <option value=\"LBY\">Libya</option>
                            <option value=\"LIE\">Liechtenstein</option>
                            <option value=\"LTU\">Lithuania</option>
                            <option value=\"LUX\">Luxembourg</option>
                            <option value=\"MAC\">Macao</option>
                            <option value=\"MKD\">Macedonia, the former Yugoslav Republic of</option>
                            <option value=\"MDG\">Madagascar</option>
                            <option value=\"MWI\">Malawi</option>
                            <option value=\"MYS\">Malaysia</option>
                            <option value=\"MDV\">Maldives</option>
                            <option value=\"MLI\">Mali</option>
                            <option value=\"MLT\">Malta</option>
                            <option value=\"MHL\">Marshall Islands</option>
                            <option value=\"MTQ\">Martinique</option>
                            <option value=\"MRT\">Mauritania</option>
                            <option value=\"MUS\">Mauritius</option>
                            <option value=\"MYT\">Mayotte</option>
                            <option value=\"MEX\">Mexico</option>
                            <option value=\"FSM\">Micronesia, Federated States of</option>
                            <option value=\"MDA\">Moldova, Republic of</option>
                            <option value=\"MCO\">Monaco</option>
                            <option value=\"MNG\">Mongolia</option>
                            <option value=\"MNE\">Montenegro</option>
                            <option value=\"MSR\">Montserrat</option>
                            <option value=\"MAR\">Morocco</option>
                            <option value=\"MOZ\">Mozambique</option>
                            <option value=\"MMR\">Myanmar</option>
                            <option value=\"NAM\">Namibia</option>
                            <option value=\"NRU\">Nauru</option>
                            <option value=\"NPL\">Nepal</option>
                            <option value=\"NLD\">Netherlands</option>
                            <option value=\"NCL\">New Caledonia</option>
                            <option value=\"NZL\">New Zealand</option>
                            <option value=\"NIC\">Nicaragua</option>
                            <option value=\"NER\">Niger</option>
                            <option value=\"NGA\">Nigeria</option>
                            <option value=\"NIU\">Niue</option>
                            <option value=\"NFK\">Norfolk Island</option>
                            <option value=\"MNP\">Northern Mariana Islands</option>
                            <option value=\"NOR\">Norway</option>
                            <option value=\"OMN\">Oman</option>
                            <option value=\"PAK\">Pakistan</option>
                            <option value=\"PLW\">Palau</option>
                            <option value=\"PSE\">Palestinian Territory, Occupied</option>
                            <option value=\"PAN\">Panama</option>
                            <option value=\"PNG\">Papua New Guinea</option>
                            <option value=\"PRY\">Paraguay</option>
                            <option value=\"PER\">Peru</option>
                            <option value=\"PHL\">Philippines</option>
                            <option value=\"PCN\">Pitcairn</option>
                            <option value=\"POL\">Poland</option>
                            <option value=\"PRT\">Portugal</option>
                            <option value=\"PRI\">Puerto Rico</option>
                            <option value=\"QAT\">Qatar</option>
                            <option value=\"REU\">Réunion</option>
                            <option value=\"ROU\">Romania</option>
                            <option value=\"RUS\">Russian Federation</option>
                            <option value=\"RWA\">Rwanda</option>
                            <option value=\"BLM\">Saint Barthélemy</option>
                            <option value=\"SHN\">Saint Helena, Ascension and Tristan da Cunha</option>
                            <option value=\"KNA\">Saint Kitts and Nevis</option>
                            <option value=\"LCA\">Saint Lucia</option>
                            <option value=\"MAF\">Saint Martin (French part)</option>
                            <option value=\"SPM\">Saint Pierre and Miquelon</option>
                            <option value=\"VCT\">Saint Vincent and the Grenadines</option>
                            <option value=\"WSM\">Samoa</option>
                            <option value=\"SMR\">San Marino</option>
                            <option value=\"STP\">Sao Tome and Principe</option>
                            <option value=\"SAU\">Saudi Arabia</option>
                            <option value=\"SEN\">Senegal</option>
                            <option value=\"SRB\">Serbia</option>
                            <option value=\"SYC\">Seychelles</option>
                            <option value=\"SLE\">Sierra Leone</option>
                            <option value=\"SGP\">Singapore</option>
                            <option value=\"SXM\">Sint Maarten (Dutch part)</option>
                            <option value=\"SVK\">Slovakia</option>
                            <option value=\"SVN\">Slovenia</option>
                            <option value=\"SLB\">Solomon Islands</option>
                            <option value=\"SOM\">Somalia</option>
                            <option value=\"ZAF\">South Africa</option>
                            <option value=\"SGS\">South Georgia and the South Sandwich Islands</option>
                            <option value=\"SSD\">South Sudan</option>
                            <option value=\"ESP\">Spain</option>
                            <option value=\"LKA\">Sri Lanka</option>
                            <option value=\"SDN\">Sudan</option>
                            <option value=\"SUR\">Suriname</option>
                            <option value=\"SJM\">Svalbard and Jan Mayen</option>
                            <option value=\"SWZ\">Swaziland</option>
                            <option value=\"SWE\">Sweden</option>
                            <option value=\"CHE\">Switzerland</option>
                            <option value=\"SYR\">Syrian Arab Republic</option>
                            <option value=\"TWN\">Taiwan, Province of China</option>
                            <option value=\"TJK\">Tajikistan</option>
                            <option value=\"TZA\">Tanzania, United Republic of</option>
                            <option value=\"THA\">Thailand</option>
                            <option value=\"TLS\">Timor-Leste</option>
                            <option value=\"TGO\">Togo</option>
                            <option value=\"TKL\">Tokelau</option>
                            <option value=\"TON\">Tonga</option>
                            <option value=\"TTO\">Trinidad and Tobago</option>
                            <option value=\"TUN\">Tunisia</option>
                            <option value=\"TUR\">Turkey</option>
                            <option value=\"TKM\">Turkmenistan</option>
                            <option value=\"TCA\">Turks and Caicos Islands</option>
                            <option value=\"TUV\">Tuvalu</option>
                            <option value=\"UGA\">Uganda</option>
                            <option value=\"UKR\">Ukraine</option>
                            <option value=\"ARE\">United Arab Emirates</option>
                            <option value=\"GBR\">United Kingdom</option>
                            <option value=\"USA\">United States</option>
                            <option value=\"UMI\">United States Minor Outlying Islands</option>
                            <option value=\"URY\">Uruguay</option>
                            <option value=\"UZB\">Uzbekistan</option>
                            <option value=\"VUT\">Vanuatu</option>
                            <option value=\"VEN\">Venezuela, Bolivarian Republic of</option>
                            <option value=\"VNM\">Viet Nam</option>
                            <option value=\"VGB\">Virgin Islands, British</option>
                            <option value=\"VIR\">Virgin Islands, U.S.</option>
                            <option value=\"WLF\">Wallis and Futuna</option>
                            <option value=\"ESH\">Western Sahara</option>
                            <option value=\"YEM\">Yemen</option>
                            <option value=\"ZMB\">Zambia</option>
                            <option value=\"ZWE\">Zimbabwe</option>
                        </optgroup>
                    </select>
                    </select>
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"username\">Username:</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control input-lg\" id=\"username\" placeholder=\"Enter username\">
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"email\">Email:</label>
                <div class=\"col-sm-10\">
                    <input type=\"email\" class=\"form-control input-lg\" id=\"email\" placeholder=\"Enter email\">
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"password\">Password:</label>
                <div class=\"col-sm-10\"> 
                    <input type=\"password\" class=\"form-control input-lg\" id=\"password\" placeholder=\"Enter password\" data-toggle=\"tooltip\" title=\"Must be between 8 and 50 characters long, with at least one of each: uppercase letter, lowercase letter, number and special character.\">
                </div>
            </div>
            <div class=\"form-group form-group-lg\">
                <label class=\"control-label col-sm-2\" for=\"password2\">Password confirmation:</label>
                <div class=\"col-sm-10\"> 
                    <input type=\"password\" class=\"form-control input-lg\" id=\"password2\" placeholder=\"Retype password\">
                </div>
            </div><!--
            <div class=\"form-group\"> 
              <div class=\"col-sm-offset-2 col-sm-10\">
                <div class=\"checkbox\">
                  <label><input type=\"checkbox\"> Remember me</label>
                </div>
              </div>
            </div>-->
            <div class=\"form-group\"> 
                <div class=\"col-sm-offset-2 col-sm-10\">
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