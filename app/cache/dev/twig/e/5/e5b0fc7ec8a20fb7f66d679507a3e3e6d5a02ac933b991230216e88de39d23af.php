<?php

/* GenerateurBundle:Slide:viewstype7.html.twig */
class __TwigTemplate_e5b0fc7ec8a20fb7f66d679507a3e3e6d5a02ac933b991230216e88de39d23af extends Twig_Template
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


        <div class=\"container-fluid\">

            <h3 class=\"textcenter\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "name", array()), "html", null, true);
        echo "</h3>

            <div class=\"container\">
                <br><h3 class=\"textcenter\"></h3><br>
                <div class=\"row\">


                    <div  class=\"justify col-md-12 textcenter\">


                       ";
        // line 24
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "event", array());
        echo "
                    </div>

                    <div style=\"padding-top: 40px;\" class=\"justify col-md-12 textcenter\">



                    </div>


                    <div style=\"padding-top: 40px;\" class=\"col-md-12 textcenter\">
                        <img style=\"\" class=\"img-responsive center-block\" src=\"\">

                    </div>



                </div>

            </div><br><br>
        </div>



    </div><br><br>



</div>

<script>
    \$('#video";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "').attr('src',\$('#video";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "').attr('src').replace('watch?v=','embed/'));
</script>

<!-- INTERCAL 3 -->

<div class=\"t";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "\" id=\"t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "\" >

</div>


<style>
    .t";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo " {
        background: url(http://localhost";
        // line 67
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
        return "GenerateurBundle:Slide:viewstype7.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 67,  111 => 66,  100 => 60,  90 => 55,  56 => 24,  43 => 14,  34 => 8,  28 => 4,  24 => 2,  19 => 1,);
    }
}
