<?php

/* ChaireFormationBundle:Default:index.html.twig */
class __TwigTemplate_081f61a493224f212e9bbcc10475f2deab79cc0fd06864418561de9200bf2f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ChaireFormationBundle:Default:index.html.twig", 1);
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
        $this->loadTemplate(":parts:navbar.html.twig", "ChaireFormationBundle:Default:index.html.twig", 3)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "


    ";
        // line 12
        echo "    <div class=\"row pad\">

        <img id=\"chaireformation\" class=\"img_center\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireformation/images/photo.jpg"), "html", null, true);
        echo "\"/>


    </div>




    <div class=\"container-fluid\">
        <div class=\"row pad\">


            <div class=\"col-md-offset-2 col-md-8\">
                <p>
                    ";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("formation.textprincipal", array(), "messages");
        // line 29
        echo "                </p>

            </div>

            <div class=\"col-md-offset-2 col-md-8\">
               <div class=\"row pad\">
                   <div id=\"studentescp\" class=\"col-md-4\">
                       <img  class=\"img_menu img_center\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireformation/images/student_escp.png"), "html", null, true);
        echo "\"/>
                       <h4 class=\"text_center\">";
        // line 37
        echo $this->env->getExtension('translator')->getTranslator()->trans("formation.studentescp", array(), "messages");
        echo "</h4>
                   </div>
                   <div id=\"student\" class=\"col-md-4\">
                       <img  class=\"img_menu img_center\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireformation/images/etudiants.png"), "html", null, true);
        echo "\"/>
                       <h4  class=\"text_center\">";
        // line 41
        echo $this->env->getExtension('translator')->getTranslator()->trans("formation.student", array(), "messages");
        echo "</h4>
                   </div>
                   <div id=\"manager\" class=\"col-md-4\">
                       <img  class=\"img_menu img_center\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireformation/images/managers.png"), "html", null, true);
        echo "\"/>
                       <h4  class=\"text_center\">";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("formation.managers", array(), "messages");
        echo "</h4>
                   </div>

               </div>

            </div>

            <div class=\"col-md-offset-2 col-md-8\">
                ";
        // line 54
        echo "                <div id=\"tabstudentescp\" class=\"row pad\" >


                    ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["studentescp"]) ? $context["studentescp"] : $this->getContext($context, "studentescp")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 58
            echo "                        <div class=\"col-md-4\">

                            <h4 style=\"text-align:center;\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "name", array()), "html", null, true);
            echo "</h4>
                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chaire_formation_id", array("id" => $this->getAttribute($context["form"], "id", array()))), "html", null, true);
            echo "\"><img style=\" width:250px;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/img/" . $this->getAttribute($this->getAttribute($context["form"], "photo", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute($context["form"], "photo", array()), "url", array()))), "html", null, true);
            echo "\"></a>
                            <p style=\"text-align:center;\">
                                ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "concept", array()), "html", null, true);
            echo "

                            </p>




                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
                </div>
                ";
        // line 75
        echo "                <div id=\"tabstudent\" style=\"display:none;\" class=\"row pad\">
                    ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["studentexte"]) ? $context["studentexte"] : $this->getContext($context, "studentexte")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 77
            echo "                        <div class=\"col-md-4\">

                            <h4 style=\"text-align:center;\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "name", array()), "html", null, true);
            echo "</h4>
                            <img style=\" width:250px;\" src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . $this->getAttribute($context["form"], "photolink", array()))), "html", null, true);
            echo "\">
                            <p style=\"text-align:center;\">
                                ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "concept", array()), "html", null, true);
            echo "

                            </p>




                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "

                </div>

                ";
        // line 96
        echo "                <div id=\"tabmanager\" style=\"display:none;\" class=\"row pad\">
                    ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["executive"]) ? $context["executive"] : $this->getContext($context, "executive")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 98
            echo "                        <div class=\"col-md-4\">

                            <h4 style=\"text-align:center;\">";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "name", array()), "html", null, true);
            echo "</h4>
                            <img style=\" width:250px;\" src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . $this->getAttribute($context["form"], "photolink", array()))), "html", null, true);
            echo "\">
                            <p style=\"text-align:center;\">
                                ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "concept", array()), "html", null, true);
            echo "

                            </p>




                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "

                </div>
            </div>









";
        // line 209
        echo "
        </div>
    </div>


    <script>


\$('#studentescp').click(function (){
    \$('#tabstudentescp').attr('style',' ');
    \$('#tabstudent').attr('style','display:none; ');
    \$('#tabmanager').attr('style','display:none; ');
});

\$('#student').click(function (){
    \$('#tabstudentescp').attr('style','display:none; ');
    \$('#tabstudent').attr('style',' ');
    \$('#tabmanager').attr('style','display:none; ');
});

\$('#manager').click(function (){
    \$('#tabstudentescp').attr('style','display:none; ');
    \$('#tabstudent').attr('style','display:none; ');
    \$('#tabmanager').attr('style',' ');
});



    </script>

    <style>
        .img_menu{
            width:40%;
        }

        .chaireformation{
            width:100%;
        }
    </style>



";
    }

    public function getTemplateName()
    {
        return "ChaireFormationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 209,  231 => 112,  216 => 103,  211 => 101,  207 => 100,  203 => 98,  199 => 97,  196 => 96,  190 => 91,  175 => 82,  170 => 80,  166 => 79,  162 => 77,  158 => 76,  155 => 75,  151 => 72,  136 => 63,  129 => 61,  125 => 60,  121 => 58,  117 => 57,  112 => 54,  101 => 45,  97 => 44,  91 => 41,  87 => 40,  81 => 37,  77 => 36,  68 => 29,  66 => 28,  49 => 14,  45 => 12,  40 => 8,  37 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
