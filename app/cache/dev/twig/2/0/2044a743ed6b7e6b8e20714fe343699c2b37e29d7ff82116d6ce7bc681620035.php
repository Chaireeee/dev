<?php

/* GenerateurBundle:Slide:viewstype5.html.twig */
class __TwigTemplate_2044a743ed6b7e6b8e20714fe343699c2b37e29d7ff82116d6ce7bc681620035 extends Twig_Template
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

                <div class=\" col-md-6 textcenter\">
                    <img class=\"img-responsive center-block\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo1", array()), "webPath", array())), "html", null, true);
        echo "\">

                </div>
                <div class=\" col-md-6 textcenter\">
                    <img class=\"img-responsive center-block\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo2", array()), "webPath", array())), "html", null, true);
        echo "\">
                </div>
                <div style=\"padding-top: 40px\" class=\"justify col-md-6 textcenter\">
                    ";
        // line 24
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "texte1", array());
        echo "

                </div>
                <div style=\"padding-top: 40px\"  class=\"justify col-md-6 textcenter\">
                    ";
        // line 28
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "texte2", array());
        echo "
                </div>


                <br>



            </div>

        </div><br><br>
    </div>



</div><br><br>
</div>

<!-- INTERCAL 3 -->

<div class=\"t";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo1", array()), "id", array()), "html", null, true);
        echo "\" id=\"t";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo1", array()), "id", array()), "html", null, true);
        echo "\" >

</div>


<style>
    .t";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo1", array()), "id", array()), "html", null, true);
        echo " {
        background: url(http://localhost";
        // line 55
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
        return "GenerateurBundle:Slide:viewstype5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 55,  103 => 54,  92 => 48,  69 => 28,  62 => 24,  56 => 21,  49 => 17,  40 => 11,  34 => 8,  28 => 4,  24 => 2,  19 => 1,);
    }
}
