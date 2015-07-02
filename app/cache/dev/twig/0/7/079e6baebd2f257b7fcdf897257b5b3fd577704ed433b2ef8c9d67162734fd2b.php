<?php

/* GenerateurBundle:Slide:viewstype3.html.twig */
class __TwigTemplate_079e6baebd2f257b7fcdf897257b5b3fd577704ed433b2ef8c9d67162734fd2b extends Twig_Template
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

                <div class=\"justify col-md-6 textcenter\">
                    ";
        // line 17
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "texte1", array());
        echo "
                </div>
                <div class=\"justify col-md-6 textcenter\">
                    ";
        // line 20
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "texte2", array());
        echo "
                </div>


            </div>

        </div><br><br>
    </div>



</div><br><br>
</div>

<!-- INTERCAL 3 -->

<div class=\"t";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "\" id=\"t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "\" >

</div>


<style>
    .t";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo " {
        background: url(http://localhost";
        // line 43
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
        return "GenerateurBundle:Slide:viewstype3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 43,  85 => 42,  74 => 36,  55 => 20,  49 => 17,  40 => 11,  34 => 8,  28 => 4,  24 => 2,  19 => 1,);
    }
}
