<?php

/* ChaireTeamBundle:Team:new.html.twig */
class __TwigTemplate_aa6555f42154cb07566a62803a4d167fb342cc031d888ca72a5c8b513dc1b691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ChaireTeamBundle:Team:new.html.twig", 1);
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
        $this->loadTemplate(":parts:navbaradmin.html.twig", "ChaireTeamBundle:Team:new.html.twig", 3)->display($context);
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
                <h1>Team creation</h1>
                ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "



                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("team");
        echo "\">
                            Back to the list
                        </a>
                    </li>
                </ul>


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
        return "ChaireTeamBundle:Team:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 30,  58 => 24,  40 => 8,  37 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
