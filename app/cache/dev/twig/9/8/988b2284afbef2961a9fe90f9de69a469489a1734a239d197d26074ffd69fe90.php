<?php

/* :parts:navbaradmin.html.twig */
class __TwigTemplate_988b2284afbef2961a9fe90f9de69a469489a1734a239d197d26074ffd69fe90 extends Twig_Template
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

<div class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("chaire_accueil_homepage");
        echo "\"><img style=\"width:70px;\" src=\"http://s3.amazonaws.com/foundum-com-uploads/organization_account_image_uploads/6985/images/medium/LogoChaireEEE_newEY-04.png?1384167185\"/></a>
        </div>
        <ul class=\"nav navbar-nav\">

        </ul>
        <ul class=\"nav navbar-nav navbar-right\">

           ";
        // line 19
        echo "        </ul>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return ":parts:navbaradmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 19,  26 => 6,  19 => 1,);
    }
}
