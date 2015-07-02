<?php

/* ChaireAdminBundle:Default:index.html.twig */
class __TwigTemplate_06efc7626268d1842ccfb96b31224e25a66f0b3053bf9ec9c88c8b3489fa8d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ChaireAdminBundle:Default:index.html.twig", 1);
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
        $this->loadTemplate(":parts:navbaradmin.html.twig", "ChaireAdminBundle:Default:index.html.twig", 3)->display($context);
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

            <div class=\"text_center col-md-6\">
                <div class=\"adminbutton\">
                <a href=";
        // line 24
        echo $this->env->getExtension('routing')->getPath("chaire_admin_indexEvent");
        echo ">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.addevent", array(), "messages");
        echo "  </a>
                </div>
            </div>
            <div class=\" text_center col-md-6\">
                <div class=\"adminbutton\">
                <a href=";
        // line 29
        echo $this->env->getExtension('routing')->getPath("formation");
        echo ">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.addformation", array(), "messages");
        echo "</a>
                </div>
            </div>
            <div class=\" text_center col-md-6\">
                <div class=\"adminbutton\">
                <a href=";
        // line 34
        echo $this->env->getExtension('routing')->getPath("team");
        echo ">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.addteammember", array(), "messages");
        echo "</a>
                </div>
            </div>
            <div class=\" text_center col-md-6\">
                <div class=\"adminbutton\">
                <a href=";
        // line 39
        echo $this->env->getExtension('routing')->getPath("accompagnement");
        echo ">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.addaccompagnement", array(), "messages");
        echo "</a>
                </div>

            </div>

        </div>
    </div>


<style>
    .adminbutton{
             background-color: rgb(47,76,143);
             padding-right: 30px;
             padding-bottom: 30px;
             margin-bottom: 30px;
             border:solid 3px rgb(47,76,143);
         }

    .adminbutton a{
            color:white;
    }

    .adminbutton:hover{
        background-color: white;
        border:solid 3px rgb(47,76,143);
        padding-right: 30px;
        padding-bottom: 30px;
        margin-bottom: 30px;
    }
    .adminbutton:hover a {
        color:rgb(47,76,143);
    }

</style>






";
    }

    public function getTemplateName()
    {
        return "ChaireAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 39,  78 => 34,  68 => 29,  58 => 24,  40 => 8,  37 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
