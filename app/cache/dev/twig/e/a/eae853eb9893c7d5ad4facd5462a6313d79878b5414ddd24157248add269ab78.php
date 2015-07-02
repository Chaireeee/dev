<?php

/* ChaireFormationBundle:Default:viewformation.html.twig */
class __TwigTemplate_eae853eb9893c7d5ad4facd5462a6313d79878b5414ddd24157248add269ab78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 52, array(), "array"), "html", null, true);
        // line 8
        echo "\">
    <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 53, array(), "array"), "html", null, true);
        echo "\">
    <title> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 0, array(), "array"), "html", null, true);
        echo "</title>

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Latest compiled and minified CSS -->

    <link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo " >


    <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/styleonepage.css"), "html", null, true);
        echo " >




        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<div class=\"navbar  navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">


        </div>
        <div class=\"navbar-collapse navbar-default collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a data-scroll href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("chaire_accueil_homepage");
        echo "\"><img style=\"width:90px;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/logo_chairEEE_header.png"), "html", null, true);
        echo "\" width=\"210\" ></a></li>
                <li><a data-scroll href=\"#top\"><img style=\"width:150px;\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "logopage", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "logopage", array()), "url", array()))), "html", null, true);
        echo "\" width=\"210\" ></a></li>

            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a data-scroll href=\"#pourqui\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 1, array(), "array"), "html", null, true);
        echo "</a></li>

                <li><a data-scroll href=\"#intercalprogramme\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 2, array(), "array"), "html", null, true);
        echo "</a></li>
                <li><a data-scroll href=\"#intercalpourquoi\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 3, array(), "array"), "html", null, true);
        echo "</a></li>
                <li><a data-scroll href=\"#apply\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 4, array(), "array"), "html", null, true);
        echo "</a></li>
                <li><a data-scroll href=\"#info\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 5, array(), "array"), "html", null, true);
        echo "</a></li>

                <!-- <li><a href=\"http://www.made-in-escpeurope.eu/EN\"><button type=\"button\" class=\"btn btn-default btn-xs\">In english</button></a></li> -->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<!-- HOME SCREEN -->
<div class=\"homie\" id=\"top\">
    <!--  <a data-scroll href=\"#intercalgrandjury\"><img class=\"img-responsive reza\" src=\"MadeInreza-27.png\" width=\"120\"></a> -->
    <div class=\"row\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4 textcenter whitetext\">
            <p><br><br><br><br><br><br><br>
                <img class=\" img_center img-responsive img-front\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "logoblanc", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "logoblanc", array()), "url", array()))), "html", null, true);
        echo "\">

            <p class=\"textcenter\">


            <h3>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 6, array(), "array"), "html", null, true);
        echo "</h3>
            <br>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 7, array(), "array"), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 8, array(), "array"), "html", null, true);
        echo "</p><br>
            <a data-scroll href=\"#apply\">
                <button type=\"button\" class=\"btn btn-default btn-md \">";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 9, array(), "array"), "html", null, true);
        echo "</button>
            </a>
        </div>


    </div>
    <div class=\"col-md-4\"><br><br><br><br><br><br></div>

</div>



<!-- CONCEPT -->
<div class=\"pourqui\" id=\"pourqui\">
    <div class=\"container\">
        <div class=\"row\">

        </div>

        <div class=\"row\">
            <div class=\"container\">
                <br><br>
                <div class=\"col-md-12\">
                    <img class=\"img-responsive \" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pourqui", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pourqui", array()), "url", array()))), "html", null, true);
        echo "\">

                </div>
                <h3>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 10, array(), "array"), "html", null, true);
        echo "</h3>
                <br>
                <ul>
                    ";
        // line 109
        if (($this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 44, array(), "array") != "OPTIONE.list1")) {
            echo "<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 44, array(), "array"), "html", null, true);
            echo " </li>";
        }
        // line 110
        echo "                    ";
        if (($this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 45, array(), "array") != "OPTIONE.list2")) {
            echo "<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 45, array(), "array"), "html", null, true);
            echo " </li>";
        }
        // line 111
        echo "                    ";
        if (($this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 46, array(), "array") != "OPTIONE.list3")) {
            echo "<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 46, array(), "array"), "html", null, true);
            echo " </li>";
        }
        // line 112
        echo "                    ";
        if (($this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 47, array(), "array") != "OPTIONE.list4")) {
            echo "<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 47, array(), "array"), "html", null, true);
            echo " </li>";
        }
        // line 113
        echo "                    ";
        if (($this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 48, array(), "array") != "OPTIONE.list5")) {
            echo "<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 48, array(), "array"), "html", null, true);
            echo " </li>";
        }
        // line 114
        echo "                    ";
        if (($this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 49, array(), "array") != "OPTIONE.list6")) {
            echo "<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 49, array(), "array"), "html", null, true);
            echo " </li>";
        }
        // line 115
        echo "                    ";
        if (($this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 50, array(), "array") != "OPTIONE.list7")) {
            echo "<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 50, array(), "array"), "html", null, true);
            echo " </li>";
        }
        // line 116
        echo "                    ";
        if (($this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 51, array(), "array") != "OPTIONE.list8")) {
            echo "<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 51, array(), "array"), "html", null, true);
            echo " </li>";
        }
        // line 117
        echo "

                </ul>
                <p class=\"textcenter\">
                    ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 11, array(), "array"), "html", null, true);
        echo "
                    <br><strong>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 12, array(), "array"), "html", null, true);
        echo "</strong>

                </p>
                <br><br>
            </div>
        </div>
    </div>


</div>






<!-- INTERCAL 3-5 -->

<div class=\"intercalprogramme\" id=\"intercalprogramme\">

</div>

<!-- Atelier -->
<div class=\"grandjury\" id=\"grandjury\">
    <div class=\"container\">
        <div class=\"container\">
            <br><br>
            <h3 class=\"textcenter\">";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 13, array(), "array"), "html", null, true);
        echo "</h3>
            <br>
            <p class=\"textcenter\">";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 14, array(), "array"), "html", null, true);
        echo "<br> <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 15, array(), "array"), "html", null, true);
        echo "</strong><br><br>
                <a href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "syllabus", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "syllabus", array()), "url", array()))), "html", null, true);
        echo "\" ><button type=\"button\" class=\"btn btn-default btn-xs\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 16, array(), "array"), "html", null, true);
        echo "</button></a>
                <br><br><span class=\"glyphicon glyphicon-chevron-down\"></span>

            </p>
            <h3 class=\"textcenter\">";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 17, array(), "array"), "html", null, true);
        echo "</h3>
            <br>
            <div class=\"row\">
                <div class=\"col-md-1\"></div>
                <div class=\"col-md-2\">
                    <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pointprogramme1", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pointprogramme1", array()), "url", array()))), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
                <div class=\"col-md-2\">
                    <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pointprogramme2", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pointprogramme2", array()), "url", array()))), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
                <div class=\"col-md-2\">
                    <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pointprogramme3", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pointprogramme3", array()), "url", array()))), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
                <div class=\"col-md-2\">
                    <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pointprogramme4", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pointprogramme4", array()), "url", array()))), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
                <div class=\"col-md-2\">
                    <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pointprogramme5", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pointprogramme5", array()), "url", array()))), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
                <div class=\"col-md-1\"></div>
            </div>
            <br><br><p class=\"textcenter\"><span class=\"glyphicon glyphicon-chevron-down\"></span></p><br>
            <div class=\"row\">
                <h3 class=\"textcenter\">";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 18, array(), "array"), "html", null, true);
        echo "</h3>
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <img class=\"img-responsive\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "intensiteprogramme", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "intensiteprogramme", array()), "url", array()))), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-3\"></div>
            </div><br>
        </div>


    </div>
</div>




<!-- INTERCAL 3 -->

<div class=\"intercalpourquoi\" id=\"intercalpourquoi\">

</div>

<!-- INSCRIPTION GRAND JURY -->
<div class=\"grandjury\" id=\"grandjury\">
    <div class=\"container\">

        <div class=\"container\">
            <br><h3 class=\"textcenter\">";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 19, array(), "array"), "html", null, true);
        echo "</h3><br>
            <div class=\"row\">
                <div class=\"col-md-1\"></div>
                <div class=\"col-md-5 textcenter\">
                    <img class=\"img-responsive center-block\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pourquoi1", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pourquoi1", array()), "url", array()))), "html", null, true);
        echo "\">
                    <h4> ";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 20, array(), "array"), "html", null, true);
        echo "</h4><br>
                    <p>";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 21, array(), "array"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-md-5 textcenter\">
                    <img class=\"img-responsive center-block\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pourquoi2", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pourquoi2", array()), "url", array()))), "html", null, true);
        echo "\">
                    <h4> ";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 22, array(), "array"), "html", null, true);
        echo "</h4><br>
                    <p>";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 23, array(), "array"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-md-1\"></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-1\"></div>
                <div class=\"col-md-5 textcenter\">
                    <img class=\"img-responsive center-block\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pourquoi3", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pourquoi3", array()), "url", array()))), "html", null, true);
        echo "\">
                    <h4> ";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 24, array(), "array"), "html", null, true);
        echo "</h4><br>
                    <p>";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 25, array(), "array"), "html", null, true);
        echo "</p>

                </div>
                <div class=\"col-md-5 textcenter\">
                    <img class=\"img-responsive center-block\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pourquoi4", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "pourquoi4", array()), "url", array()))), "html", null, true);
        echo "\">
                    <h4> ";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 26, array(), "array"), "html", null, true);
        echo "</h4><br>
                    <p>";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 27, array(), "array"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-md-1\"></div>
            </div><br><br>
        </div>



    </div><br><br>
</div>



<!-- INTERCAL 4 -->



<div class=\"intercalapply\" id=\"apply\" name=\"apply\">
    <div class=\"container\" style=\"padding-top: 70px; padding-bottom: 70px;\">
        <div class=\"jumbotron\" style=\"background-color: white;\">
            <h3 class=\"textcenter\">";
        // line 252
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 28, array(), "array"), "html", null, true);
        echo "</h3><br>
            <a href=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 55, array(), "array"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "inscription1", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "inscription1", array()), "url", array()))), "html", null, true);
        echo "\" class=\"img-responsive\"></a>
            <img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "inscription2", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "inscription2", array()), "url", array()))), "html", null, true);
        echo "\" class=\"img-responsive\">
        </div>
    </div>

</div>



<!-- Map // INFOS PRATIQUES -->
<div class=\"info\" id=\"info\">
    <div class=\"row\">

        <div class=\"container\">
            <br><br>
            <h3 class=\"textcenter\">";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 29, array(), "array"), "html", null, true);
        echo "</h3>
            <br>

            <table class=\"table\">
                <tbody>
                <tr>



                    <td><h3>";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 30, array(), "array"), "html", null, true);
        echo "</h3></td>
                    <td><strong>";
        // line 278
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 31, array(), "array"), "html", null, true);
        echo "</strong><br> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 32, array(), "array"), "html", null, true);
        echo "
                    </td>
                    <td></td>
                    <td><strong>";
        // line 281
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 33, array(), "array"), "html", null, true);
        echo "i</strong>,<br> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 34, array(), "array"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><h3>";
        // line 284
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 35, array(), "array"), "html", null, true);
        echo "</h3>
                    </td>
                    <td>";
        // line 286
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 36, array(), "array"), "html", null, true);
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 56, array(), "array"), "html", null, true);
        echo "\" target=\"_blank\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Logo_ChaireEEE_2013-04.png"), "html", null, true);
        echo "\" width=\"400\"></a><small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 37, array(), "array"), "html", null, true);
        echo "</small>
                    </td>
                </tr>
                <tr>
                    <td><h3>";
        // line 290
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 38, array(), "array"), "html", null, true);
        echo "</h3>
                    </td>
                    <td><address>";
        // line 292
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 39, array(), "array"), "html", null, true);
        echo "<br> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 40, array(), "array"), "html", null, true);
        echo "<br> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 41, array(), "array"), "html", null, true);
        echo " <a href=\"mailto:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 42, array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 42, array(), "array"), "html", null, true);
        echo "</a> <br>  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 43, array(), "array"), "html", null, true);
        echo "</address>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>


    </div>
</div>

<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row\"><div class=\"col-md-1\">powered by <a href=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 56, array(), "array"), "html", null, true);
        echo "\" target=\"_blank\"></div><div class=\"col-md-4\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Logo_ChaireEEE_2013-04.png"), "html", null, true);
        echo "\" class=\"img-responsive\"></a></div><div class=\"col-md-4\"></div>  <div class=\"col-md-3\"> <a href=\"http://www.nrdwnc.fr\"></a>  <a href=\"mailto:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), 42, array(), "array"), "html", null, true);
        echo "\">Contact</a> - <a href=\"#\">Back to top</a></div></div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/smooth-scroll.js\"></script>

<script>
    smoothScroll.init();
</script>



</body>
</html>




<style>

    .homie {
        background: url(http://localhost";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fondaccueil", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fondaccueil", array()), "url", array()))), "html", null, true);
        echo ");
        min-height: 700px;
        margin-top: -20px;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;

        color: white;
    }


    .intercalprogramme {
        background: url(http://localhost";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fond1", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fond1", array()), "url", array()))), "html", null, true);
        echo ");
        min-height: 350px;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        color: black;
        text-align: center;
    }



    .intercalpourquoi {
        background: url(http://localhost";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fond2", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fond2", array()), "url", array()))), "html", null, true);
        echo ");
        min-height: 350px;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .intercalapply {
        background: url(http://localhost";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fond3", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fond3", array()), "url", array()))), "html", null, true);
        echo ");
        min-height: 300px;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        color: black;
        text-align: center;
    }



    .whitetext h5{
        color:white;
        font-size:18px;
    }

    .navbar
    {
        background-color:white;
    }
    .navbar-default
    {
        background-color:white;
        box-shadow: none;
        background-image: none;
    }

    /* texte navbar */
    .navbar-default .navbar-nav > li > a {
        font-size:17px;
    }

    .img-front{
        max-height: 100%;
         width:150px;
    }


</style>";
    }

    public function getTemplateName()
    {
        return "ChaireFormationBundle:Default:viewformation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 365,  636 => 356,  620 => 343,  605 => 331,  572 => 305,  546 => 292,  541 => 290,  528 => 286,  523 => 284,  515 => 281,  507 => 278,  503 => 277,  491 => 268,  474 => 254,  468 => 253,  464 => 252,  441 => 232,  437 => 231,  433 => 230,  426 => 226,  422 => 225,  418 => 224,  408 => 217,  404 => 216,  400 => 215,  394 => 212,  390 => 211,  386 => 210,  379 => 206,  352 => 182,  346 => 179,  337 => 173,  331 => 170,  325 => 167,  319 => 164,  313 => 161,  305 => 156,  296 => 152,  290 => 151,  285 => 149,  255 => 122,  251 => 121,  245 => 117,  238 => 116,  231 => 115,  224 => 114,  217 => 113,  210 => 112,  203 => 111,  196 => 110,  190 => 109,  184 => 106,  178 => 103,  152 => 80,  145 => 78,  141 => 77,  133 => 72,  114 => 56,  110 => 55,  106 => 54,  102 => 53,  97 => 51,  90 => 47,  84 => 46,  53 => 18,  47 => 15,  41 => 12,  36 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
