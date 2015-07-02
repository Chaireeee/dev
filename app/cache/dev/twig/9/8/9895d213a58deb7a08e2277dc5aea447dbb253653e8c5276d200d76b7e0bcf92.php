<?php

/* GenerateurBundle:Page:addpage.html.twig */
class __TwigTemplate_9895d213a58deb7a08e2277dc5aea447dbb253653e8c5276d200d76b7e0bcf92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "GenerateurBundle:Page:addpage.html.twig", 1);
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
        $this->loadTemplate(":parts:navbaradmin.html.twig", "GenerateurBundle:Page:addpage.html.twig", 3)->display($context);
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
                <h4 class=\"text_center\">";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("page.form.add.title", array(), "messages");
        echo "</h4>

                <p class=\"text_center\">
                    ";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("page.form.add.descr", array(), "messages");
        // line 27
        echo "                </p>
                <br>
                <br>

                ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "



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
        return "GenerateurBundle:Page:addpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 31,  65 => 27,  63 => 26,  57 => 23,  40 => 8,  37 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
