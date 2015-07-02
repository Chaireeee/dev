<?php

/* GenerateurBundle:Page:editstype1.html.twig */
class __TwigTemplate_ec9cdfb1dd23fc8c1a5f75efbe94bf5c6192ef3fc71b3fd8e64c3ec68d01cd24 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "


<a  href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_edit_photo", array("idpicture" => $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "fond", array()), "id", array()), "idpage" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "idslide" => $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()))), "html", null, true);
        echo "\">
    edit fond
</a>
<br>
<a  href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_edit_photo", array("idpicture" => $this->getAttribute($this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "photo", array()), "id", array()), "idpage" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "idslide" => $this->getAttribute((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")), "id", array()))), "html", null, true);
        echo "\">
    edit photo
</a>
<br>
<img style=\"width:250px;\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/img/template/1.jpg"), "html", null, true);
        echo "\">

<style>
    textarea{
        width:400px;
        height:200px;
    }
</style>";
    }

    public function getTemplateName()
    {
        return "GenerateurBundle:Page:editstype1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  32 => 8,  25 => 4,  19 => 1,);
    }
}
