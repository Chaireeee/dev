<?php

/* GenerateurBundle:Slide:viewstype1.html.twig */
class __TwigTemplate_27f14e651a321baf7bd54e73f4b9698c365abda35392007dc655bb3dd01908ed extends Twig_Template
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
    <div class=\"container-fluid\">

        <h3 class=\"textcenter\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "name", array()), "html", null, true);
        echo "</h3>

        <div class=\"container\">
            <br><h3 class=\"textcenter\"></h3><br>
            <div class=\"row\">

                <div class=\"justify col-md-12 textcenter\">

                    ";
        // line 20
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "texte", array());
        echo "

                </div>


                <div style=\"padding-top: 40px;\" class=\"col-md-12 textcenter\">
                    <img style=\"\" class=\"img-responsive center-block\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo", array()), "webPath", array())), "html", null, true);
        echo "\">

                </div>



            </div>

            </div><br><br>
        </div>



    </div><br><br>
</div>

<!-- INTERCAL 3 -->

<div class=\"t";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo", array()), "id", array()), "html", null, true);
        echo "\" id=\"t";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo", array()), "id", array()), "html", null, true);
        echo "\">

</div>


<style>
.t";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo", array()), "id", array()), "html", null, true);
        echo " {
background: url(http://localhost";
        // line 51
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
        return "GenerateurBundle:Slide:viewstype1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 51,  83 => 50,  72 => 44,  51 => 26,  42 => 20,  31 => 12,  25 => 9,  19 => 5,);
    }
}
