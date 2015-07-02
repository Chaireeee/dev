<?php

/* GenerateurBundle:Page:viewpage.html.twig */
class __TwigTemplate_3a976127e6de8addfa06bccc3b0d594088d165ea6dc72345fb134839c73b2bd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'slide' => array($this, 'block_slide'),
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
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</title>

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Latest compiled and minified CSS -->

    <link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo " >
    <link rel=\"stylesheet\" href=";
        // line 15
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
        // line 43
        echo $this->env->getExtension('routing')->getPath("chaire_accueil_homepage");
        echo "\"><img style=\"width:90px;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/logo_chairEEE_header.png"), "html", null, true);
        echo "\" width=\"210\" ></a></li>
                <li><a data-scroll href=\"#top\"><img style=\"max-width:150px; max-height: 50px;\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/generateur/" . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "logo", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "logo", array()), "url", array()))), "html", null, true);
        echo "\"  ></a></li>

            </ul>
            <ul class=\"nav navbar-nav navbar-right\">

                ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ti"]) {
            // line 50
            echo "                    <li><a data-scroll href=\"#i";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["ti"], "html", null, true);
            echo "</a></li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ti'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "


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
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/generateur/" . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "logo", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "logo", array()), "url", array()))), "html", null, true);
        echo "\">

            <p class=\"textcenter\">


            <h3>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</h3>
            <br><br>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "baseline", array()), "html", null, true);
        echo "</p><br>
           ";
        // line 81
        echo "        </div>


    </div>
    <div class=\"col-md-4\"><br><br><br><br><br><br></div>

</div>

";
        // line 89
        $this->displayBlock('slide', $context, $blocks);
        // line 96
        echo "

<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row\"><div class=\"col-md-1\">powered by <a href=\"http://www.chaireeee.eu\" target=\"_blank\"></div><div class=\"col-md-4\"><img src=\"Logo_ChaireEEE_2013-04.png\" class=\"img-responsive\"></a></div><div class=\"col-md-4\"></div>  <div class=\"col-md-3\"> <a href=\"http://www.nrdwnc.fr\"></a>  <a href=\"mailto:edemarolles@escpeurope.eu\">Contact</a> - <a href=\"#\">Back to top</a></div></div>
    </div>
</div>



<style>

    .homie {
        background: url(http://localhost";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/generateur/" . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "homie", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "homie", array()), "url", array()))), "html", null, true);
        echo ");
        min-height: 700px;
        margin-top: -20px;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;

        color: white;
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

    // line 89
    public function block_slide($context, array $blocks = array())
    {
        // line 90
        echo "
";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : $this->getContext($context, "slides")));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 92
            echo "    ";
            echo $context["slide"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
";
    }

    public function getTemplateName()
    {
        return "GenerateurBundle:Page:viewpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 94,  240 => 92,  236 => 91,  233 => 90,  230 => 89,  188 => 109,  173 => 96,  171 => 89,  161 => 81,  157 => 75,  153 => 74,  145 => 69,  126 => 52,  107 => 50,  90 => 49,  82 => 44,  76 => 43,  45 => 15,  41 => 14,  35 => 11,  30 => 9,  20 => 1,);
    }
}
