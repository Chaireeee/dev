<?php

/* GenerateurBundle:Page:modifypage.html.twig */
class __TwigTemplate_3020b068530e6c60f4d7810e6747802d1c2c9a86c1e753a0885e9e3f46a8cbad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "GenerateurBundle:Page:modifypage.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->loadTemplate(":parts:navbaradmin.html.twig", "GenerateurBundle:Page:modifypage.html.twig", 3)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "

    <div class=\"container-fluid\">
        <div style=\"padding-top:100px; \" class=\"row \">

            <div class=\"col-md-offset-4 col-md-4\">

                <img class=\"img_center\"  src=\"http://s3.amazonaws.com/foundum-com-uploads/organization_account_image_uploads/6985/images/medium/LogoChaireEEE_newEY-04.png?1384167185\"/>

            </div>

        </div>
        <div class=\"row pad\">

            <div class=\"col-md-offset-3 col-md-6\">
                ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

                <br>
                <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_edit_photo_from_page", array("idpicture" => $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "logo", array()), "id", array()), "idpage" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
        echo "\"> Modifier le logo</a>
                <br>
                <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_edit_photo_from_page", array("idpicture" => $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "homie", array()), "id", array()), "idpage" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
        echo "\"> Modifier background</a>

            </div>



        </div>

        <div class=\"row \">
            <div class=\"col-md-offset-5 col-md-2\">


            </div>

        </div>

    </div>









";
    }

    public function getTemplateName()
    {
        return "GenerateurBundle:Page:modifypage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 28,  63 => 26,  57 => 23,  40 => 8,  37 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
