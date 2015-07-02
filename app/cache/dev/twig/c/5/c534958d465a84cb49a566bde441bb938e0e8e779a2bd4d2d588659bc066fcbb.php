<?php

/* GenerateurBundle:Slide:viewstype4.html.twig */
class __TwigTemplate_c534958d465a84cb49a566bde441bb938e0e8e779a2bd4d2d588659bc066fcbb extends Twig_Template
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

                <div class=\"justify col-md-4 textcenter\">
                    ";
        // line 17
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "texte1", array());
        echo "
                </div>
                <div class=\"justify col-md-4 textcenter\">
                    ";
        // line 20
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "texte2", array());
        echo "
                </div>
                <div class=\"justify col-md-4 textcenter\">
                    ";
        // line 23
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
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "\" id=\"t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "\" >

</div>


<style>
    .t";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo " {
        background: url(http://localhost";
        // line 46
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
        return "GenerateurBundle:Slide:viewstype4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 46,  91 => 45,  80 => 39,  61 => 23,  55 => 20,  49 => 17,  40 => 11,  34 => 8,  28 => 4,  24 => 2,  19 => 1,);
    }
}
