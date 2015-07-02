<?php

/* GenerateurBundle:Slide:viewstype6.html.twig */
class __TwigTemplate_22d69929850c5d64343e9ceeb6fda163cb2ec20b314e07822c215e331d4318d4 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo " >
<link rel=\"stylesheet\" href=";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/styleonepage.css"), "html", null, true);
        echo " >
";
        // line 4
        echo "


<!-- INSCRIPTION GRAND JURY -->
<div class=\"grandjury\" id=\"i";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "\">
    <div class=\"container\">

        <h3 class=\"textcenter\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "name", array()), "html", null, true);
        echo "</h3>
        <div class=\"container\">
            <br><h3 class=\"textcenter\"></h3><br>
            <div class=\"row\">
                <div  class=\"justify col-md-4 textcenter\">
                    <img class=\"img-responsive center-block\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo1", array()), "webPath", array())), "html", null, true);
        echo "\">
                </div>
                <div  class=\"justify col-md-4 textcenter\">
                    <img class=\"img-responsive center-block\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo2", array()), "webPath", array())), "html", null, true);
        echo "\">
                </div>
                <div  class=\"justify col-md-4 textcenter\">
                    <img class=\"img-responsive center-block\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo3", array()), "webPath", array())), "html", null, true);
        echo "\">
                </div>
                <div style=\"padding-top:40px;\" class=\"justify col-md-4 textcenter\">

                    ";
        // line 26
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "texte1", array());
        echo "
                </div>
                <div style=\"padding-top:40px;\" class=\"justify col-md-4 textcenter\">

                    ";
        // line 30
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "texte2", array());
        echo "
                </div>
                <div style=\"padding-top:40px;\" class=\"justify col-md-4 textcenter\">

                    ";
        // line 34
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "texte3", array());
        echo "
                </div>







            </div>

        </div><br><br>
    </div>



</div><br><br>
</div>

<!-- INTERCAL 3 -->

<div class=\"t";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo1", array()), "id", array()), "html", null, true);
        echo "\" id=\"t";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo1", array()), "id", array()), "html", null, true);
        echo "\" >

</div>


<style>
    .t";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo1", array()), "id", array()), "html", null, true);
        echo " {
        background: url(http://localhost";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "fond", array()), "webPath", array())), "html", null, true);
        echo ");
        min-height: 350px;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "GenerateurBundle:Slide:viewstype6.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 62,  116 => 61,  105 => 55,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  54 => 19,  48 => 16,  40 => 11,  34 => 8,  28 => 4,  24 => 2,  19 => 1,);
    }
}
