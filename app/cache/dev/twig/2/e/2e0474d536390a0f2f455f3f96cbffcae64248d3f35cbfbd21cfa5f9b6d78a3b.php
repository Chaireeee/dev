<?php

/* ChaireTeamBundle:Default:viewteammember.html.twig */
class __TwigTemplate_2e0474d536390a0f2f455f3f96cbffcae64248d3f35cbfbd21cfa5f9b6d78a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ChaireTeamBundle:Default:viewteammember.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->loadTemplate(":parts:navbar.html.twig", "ChaireTeamBundle:Default:viewteammember.html.twig", 3)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "


    <div class=\"container-fluid\">
        <div class=\"row pad\">
            <div class=\"col-md-offset-2 col-md-8 \">

                <img class=\"photo_team img_center\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "photo", array()), "getWebPath", array(), "method")), "html", null, true);
        echo "\">
                <h4 class=\"text_center\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname", array()), "html", null, true);
        echo "</h4>
                <h4 class=\"text_center blue\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "title", array()), "html", null, true);
        echo "</h4>

                <p class=\"text_center\">


                    ";
        // line 22
        echo $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "bio", array());
        echo "

                </p>
            </div>
        </div>

        <div class=\"row pad\">

            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "twitter", array()), "html", null, true);
        echo "\">
            <div class=\"col-md-offset-5 col-md-1 \">
                <img class=\"photo_team_member img_center\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireteam/images/twitterbio.png"), "html", null, true);
        echo "\">

            </div>
            </a>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "linkedin", array()), "html", null, true);
        echo "\">
            <div class=\" col-md-1 \">

                <img class=\"photo_team_member img_center\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireteam/images/linkedinbio.jpg"), "html", null, true);
        echo "\">
            </div>
            </a>
        </div>


        <div class=\"row pad\">
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("chaire_team_homepage");
        echo "#anchor\"><h4 class=\"text_center blue\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("viewteammenber.getback", array(), "messages");
        // line 47
        echo "</h4></a>
        </div>


    </div>
    </div>

    <style>
        .photo_team_member{

        }
    </style>


";
    }

    public function getTemplateName()
    {
        return "ChaireTeamBundle:Default:viewteammember.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 47,  106 => 46,  96 => 39,  90 => 36,  83 => 32,  78 => 30,  67 => 22,  59 => 17,  53 => 16,  49 => 15,  40 => 8,  37 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
