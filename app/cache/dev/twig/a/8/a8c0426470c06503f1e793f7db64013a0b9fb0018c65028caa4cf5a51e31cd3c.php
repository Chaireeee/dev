<?php

/* ChaireAdminBundle:Event:indexevent.html.twig */
class __TwigTemplate_a8c0426470c06503f1e793f7db64013a0b9fb0018c65028caa4cf5a51e31cd3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ChaireAdminBundle:Event:indexevent.html.twig", 1);
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
        $this->loadTemplate(":parts:navbaradmin.html.twig", "ChaireAdminBundle:Event:indexevent.html.twig", 3)->display($context);
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
        // line 29
        echo $this->env->getExtension('routing')->getPath("chaire_admin_addEvent");
        echo ">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("index.event.add", array(), "messages");
        echo "  </a>
                </div>
            </div>
            <div class=\" text_center col-md-6\">
                <div class=\"adminbutton\">
                    <a href=";
        // line 34
        echo $this->env->getExtension('routing')->getPath("chaire_admin_viewEvent");
        echo ">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("index.event.view", array(), "messages");
        echo "</a>
                </div>
            </div>
            <div class=\" text_center col-md-6\">
                <div class=\"adminbutton\">
                    <a href=";
        // line 39
        echo $this->env->getExtension('routing')->getPath("chaire_admin_addFrise");
        echo ">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("index.event.frise.add", array(), "messages");
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
        return "ChaireAdminBundle:Event:indexevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 39,  73 => 34,  63 => 29,  40 => 8,  37 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
