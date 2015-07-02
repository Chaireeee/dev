<?php

/* :parts:navbar.html.twig */
class __TwigTemplate_f1cdcf13b5bf912446631bfbbc9bb2b7572aa0f7da0c0df323a60fb688e61ac0 extends Twig_Template
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
        echo "
";
        // line 5
        echo "    <div class=\"red navigation\">

        ";
        // line 37
        echo "       ";
        // line 38
        echo "        <p class=\"text_right\">
            <a class=\"text\"   href=";
        // line 39
        echo $this->env->getExtension('routing')->getPath("chaire_event_homepage");
        echo ">
                    <img  class=\"img_center petitcarre\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/carre_campus_header.png"), "html", null, true);
        echo "\"/>
            </a>

            <a class=\"text\"    href=";
        // line 43
        echo $this->env->getExtension('routing')->getPath("chaire_event_homepage");
        echo ">
                    <img  class=\"img_center petitcarre\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/carre_campus_header.png"), "html", null, true);
        echo "\"/>
            </a>

            <a class=\"text\"    href=";
        // line 47
        echo $this->env->getExtension('routing')->getPath("chaire_event_homepage");
        echo ">
                    <img  class=\"img_center petitcarre\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/carre_campus_header.png"), "html", null, true);
        echo "\"/>
            </a>

            <a class=\"text\"   href=";
        // line 51
        echo $this->env->getExtension('routing')->getPath("chaire_event_homepage");
        echo ">
                    <img  class=\"img_center petitcarre\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/carre_campus_header.png"), "html", null, true);
        echo "\"/>
            </a>

            <a class=\"text\" style=\"margin-right:15px;\"  href=";
        // line 55
        echo $this->env->getExtension('routing')->getPath("chaire_event_homepage");
        echo ">
                    <img  class=\"img_center petitcarre\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/carre_campus_header.png"), "html", null, true);
        echo "\"/>
            </a>



            <a class=\"text barside ";
        // line 61
        if (((isset($context["page_active"]) ? $context["page_active"] : $this->getContext($context, "page_active")) == 1)) {
            echo " page_actif ";
        }
        echo " \" id=\"event\"  href=";
        echo $this->env->getExtension('routing')->getPath("chaire_event_homepage");
        echo ">Evenements</a>
            <img  class=\"img_center barre\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/petitcarre.png"), "html", null, true);
        echo "\"/>
            <a class=\"text barside ";
        // line 63
        if (((isset($context["page_active"]) ? $context["page_active"] : $this->getContext($context, "page_active")) == 3)) {
            echo " page_actif ";
        }
        echo " \" id=\"formation\" href=";
        echo $this->env->getExtension('routing')->getPath("chaire_formation_homepage");
        echo ">Formation</a>
            <img  class=\"img_center barre\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/petitcarre.png"), "html", null, true);
        echo "\"/>
            <a class=\" ";
        // line 65
        if (((isset($context["page_active"]) ? $context["page_active"] : $this->getContext($context, "page_active")) == 4)) {
            echo " page_actif ";
        }
        echo "text barside\" id=\"accompagnement\" href=";
        echo $this->env->getExtension('routing')->getPath("accompagnement");
        echo ">Accompagnement</a>

            <img  class=\"img_center barre\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/petitcarre.png"), "html", null, true);
        echo "\"/>

            <a class=\"text barside ";
        // line 69
        if (((isset($context["page_active"]) ? $context["page_active"] : $this->getContext($context, "page_active")) == 2)) {
            echo " page_actif ";
        }
        echo " \" id=\"team\" href=";
        echo $this->env->getExtension('routing')->getPath("chaire_team_homepage");
        echo ">ChaireEEE team</a>
            <img  class=\"img_center barre\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/petitcarre.png"), "html", null, true);
        echo "\"/>

            <a class=\"text barside\" id=\"team\" href=";
        // line 72
        echo $this->env->getExtension('routing')->getPath("chaire_team_homepage");
        echo ">Recherche</a>
            <img  class=\"img_center barre\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/petitcarre.png"), "html", null, true);
        echo "\"/>

            <a class=\"text barside\" id=\"team\" href=";
        // line 75
        echo $this->env->getExtension('routing')->getUrl("chaire_accueil_homepage", array("_locale" => "fr"));
        echo ">fr</a>

            <a class=\"text barside\" id=\"team\" href=";
        // line 77
        echo $this->env->getExtension('routing')->getUrl("chaire_accueil_homepage", array("_locale" => "en"));
        echo ">en</a>

        </p>
    </div>




";
        // line 86
        echo "<div id=\"firstelement\" class=\"row \">
    <div class=\" col-md-offset-4 col-md-4\">
        <a    href=";
        // line 88
        echo $this->env->getExtension('routing')->getPath("chaire_accueil_homepage");
        echo ">
        <img id=\"chaire_logo\" class=\"img_center\"
             src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/logo_chairEEE_header.png"), "html", null, true);
        echo "\"/>
            </a>

    </div>
</div>


<style>

    .barre {
        width: 3px;
        height: 25px;
        display: inline-block;
        position:relative;
        top:-5px;

    }

    .barside{
        padding-right:10px;
        padding-left:10px;
    }

    #firstelement{
        padding-top:70px;

    }
    .navigation{
        padding-top:10px;
        width:100%;
        height:70px;
        position:fixed;
        background-color: white;
        z-index: 4;
    }

    .text_right{
        text-align:right;
    }




    .text{
        font-size: 25px;
        color:rgb(59,92,163);
    }

    .text:hover{
        font-size: 25px;
        color:lightgrey;
        text-decoration:none;
    }

    #chaire_logo{
        width:250px;
    }

    .petitcarre{
        width:20px;
        display: inline-block;
    }

/*
    .navbar-default .navbar-nav > li > a {
        color:rgb(6,38,94);
        font-weight: bold;
    }


*/

</style>




















";
    }

    public function getTemplateName()
    {
        return ":parts:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 90,  163 => 88,  159 => 86,  148 => 77,  143 => 75,  138 => 73,  134 => 72,  129 => 70,  121 => 69,  116 => 67,  107 => 65,  103 => 64,  95 => 63,  91 => 62,  83 => 61,  75 => 56,  71 => 55,  65 => 52,  61 => 51,  55 => 48,  51 => 47,  45 => 44,  41 => 43,  35 => 40,  31 => 39,  28 => 38,  26 => 37,  22 => 5,  19 => 1,);
    }
}
