<?php

/* GenerateurBundle:Slide:viewstype2.html.twig */
class __TwigTemplate_0f123b725dd596ad4191affce7aef87468c98fbaa133afcdb2057cab845b8d14 extends Twig_Template
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
        // line 5
        echo "


<!-- INSCRIPTION GRAND JURY -->
<div class=\"grandjury\" id=\"i";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "\">
    <div class=\"container\">

        <h3 class=\"textcenter\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "name", array()), "html", null, true);
        echo "</h3>
        <div class=\"container\">
            <br><h3 class=\"textcenter\"></h3><br>
            <div class=\"row\">

                <div class=\"justify col-md-12 textcenter\">

                    ";
        // line 19
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "texte", array());
        echo "

                </div>


                <div style=\"padding-top: 40px;\" class=\" col-md-6 textcenter\">
                    <img style=\"\" class=\"img-responsive center-block\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo1", array()), "webPath", array())), "html", null, true);
        echo "\">

                </div>
                <div style=\"padding-top: 40px;\" class=\" col-md-6 textcenter\">
                    <img style=\"\" class=\"img-responsive center-block\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo2", array()), "webPath", array())), "html", null, true);
        echo "\">

                </div>






            </div>

        </div><br><br>
    </div>



</div><br><br>
</div>

<!-- INTERCAL 3 -->

<div class=\"t";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo1", array()), "id", array()), "html", null, true);
        echo "\" id=\"t";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo1", array()), "id", array()), "html", null, true);
        echo "\" >

</div>


<style>
    .t";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo1", array()), "id", array()), "html", null, true);
        echo " {
        background: url(http://localhost";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "fond", array()), "webPath", array())), "html", null, true);
        echo ");
        min-height: 350px;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>";
    }

    public function getTemplateName()
    {
        return "GenerateurBundle:Slide:viewstype2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 57,  92 => 56,  81 => 50,  57 => 29,  50 => 25,  41 => 19,  31 => 12,  25 => 9,  19 => 5,);
    }
}
