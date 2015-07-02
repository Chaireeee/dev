<?php

/* GenerateurBundle:Slide:choose.html.twig */
class __TwigTemplate_c9f552e6415ec9cb1f20ae035615fc10a99ea7352a96ac0342673c73dbb4787d extends Twig_Template
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
        echo "<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\" rel=\"stylesheet\">

<div class=\"row\" style=\"padding-top: 100px;\">
    <div class=\"col-md-offset-2 col-md-8\">
       <div class=\"row\">

           <div class=\"col-md-4\" style=\"padding-top:30px; \">
               <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_add_slide1_to_page", array("idpage" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">
                   <img style=\"width:250px;\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/img/template/1.jpg"), "html", null, true);
        echo "\">
               </a>
           </div>

           <div class=\"col-md-4\" style=\"padding-top:30px; \">
               <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_add_slide2_to_page", array("idpage" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">
               <img style=\"width:250px;\"  src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/img/template/2.jpg"), "html", null, true);
        echo "\">
               </a>
           </div>

           <div class=\"col-md-4\" style=\"padding-top:30px; \">
               <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_add_slide3_to_page", array("idpage" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">
                   <img style=\"width:250px;\"  src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/img/template/3.jpg"), "html", null, true);
        echo "\">
               </a>
           </div>

           <div class=\"col-md-4\" style=\"padding-top:30px; \">
               <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_add_slide4_to_page", array("idpage" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">
                   <img style=\"width:250px;\"  src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/img/template/4.jpg"), "html", null, true);
        echo "\">
               </a>
           </div>

           <div class=\"col-md-4\" style=\"padding-top:30px; \">
               <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_add_slide5_to_page", array("idpage" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">
                   <img style=\"width:250px;\"  src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/img/template/5.jpg"), "html", null, true);
        echo "\">
               </a>
           </div>

           <div class=\"col-md-4\" style=\"padding-top:30px; \">
               <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_add_slide6_to_page", array("idpage" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">
                   <img style=\"width:250px;\"  src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/img/template/6.jpg"), "html", null, true);
        echo "\">
               </a>
           </div>

           <div class=\"col-md-4\" style=\"padding-top:30px; \">
               <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_add_slide7_to_page", array("idpage" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">
                   <img style=\"width:250px;\"  src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/img/template/7.jpg"), "html", null, true);
        echo "\">
               </a>
           </div>

           <div class=\"col-md-4\" style=\"padding-top:30px; \">
               <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_add_slide8_to_page", array("idpage" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">
                   <img style=\"width:250px;\"  src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/img/template/8.jpg"), "html", null, true);
        echo "\">
               </a>
           </div>


       </div>
    </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "GenerateurBundle:Slide:choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 51,  112 => 50,  104 => 45,  100 => 44,  92 => 39,  88 => 38,  80 => 33,  76 => 32,  68 => 27,  64 => 26,  56 => 21,  52 => 20,  44 => 15,  40 => 14,  32 => 9,  28 => 8,  19 => 1,);
    }
}
