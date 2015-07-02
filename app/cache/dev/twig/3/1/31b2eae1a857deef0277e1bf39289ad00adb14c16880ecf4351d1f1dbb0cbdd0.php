<?php

/* GenerateurBundle:Slide:viewstype8.html.twig */
class __TwigTemplate_31b2eae1a857deef0277e1bf39289ad00adb14c16880ecf4351d1f1dbb0cbdd0 extends Twig_Template
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


                        <iframe class=\"center-block\"  id=\"video";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "\" width=\"1000px\" height=\"600px\"  src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "url", array()), "html", null, true);
        echo "\" frameborder=\"0\" allowfullscreen></iframe>

                    </div>

                    <div style=\"padding-top: 40px;\" class=\"justify col-md-12 textcenter\">

                        ";
        // line 30
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "texte1", array());
        echo "

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
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "').attr('src',\$('#video";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "').attr('src').replace('watch?v=','embed/'));
</script>

<!-- INTERCAL 3 -->

<div class=\"t";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "\" id=\"t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo "\" >

</div>


<style>
    .t";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()), "html", null, true);
        echo " {
        background: url(http://localhost";
        // line 68
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
        return "GenerateurBundle:Slide:viewstype8.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 68,  117 => 67,  106 => 61,  96 => 56,  67 => 30,  56 => 24,  43 => 14,  34 => 8,  28 => 4,  24 => 2,  19 => 1,);
    }
}
