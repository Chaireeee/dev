<?php

/* ChaireAccueilBundle:Accompagnement:viewacc.html.twig */
class __TwigTemplate_5b0a619f1b51769dc5b9167680d9dc68961241769b5fcd1fb951e50dbf17628d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "ChaireAccueilBundle:Accompagnement:viewacc.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Evenements";
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->loadTemplate(":parts:navbar.html.twig", "ChaireAccueilBundle:Accompagnement:viewacc.html.twig", 7)->display($context);
        // line 8
        echo "



";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 19
        echo "    <div class=\"row pad\">

        <img id=\"chaireevent\" class=\"img_center\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireevent/images/photoevenement.jpg"), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"row pad\">

        <p class=\"text_center\">

        </p>
    </div>





    <div class=\"container-fluid\">
        <div class=\"row pad\">
            <div class=\"col-md-offset-1 col-md-10\">

                <h4 class=\"text_center blue\">";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("accompagnement.title", array(), "messages");
        echo "</h4>

               ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accompagnement"]) ? $context["accompagnement"] : $this->getContext($context, "accompagnement")));
        foreach ($context['_seq'] as $context["_key"] => $context["acc"]) {
            // line 42
            echo "                    <div class=\"col-md-4\" >

                        ";
            // line 44
            if (((isset($context["loc"]) ? $context["loc"] : $this->getContext($context, "loc")) == "en")) {
                // line 45
                echo "                        <h4 style=\"text-align:center;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acc"], "nameEn", array()), "html", null, true);
                echo "</h4>
                        ";
            } else {
                // line 47
                echo "                            <h4 style=\"text-align:center;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acc"], "nameLg", array()), "html", null, true);
                echo "</h4>
                        ";
            }
            // line 49
            echo "
                        ";
            // line 50
            if (((isset($context["loc"]) ? $context["loc"] : $this->getContext($context, "loc")) == "en")) {
                // line 51
                echo "                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_view_page", array("id" => $this->getAttribute($this->getAttribute($context["acc"], "pageEn", array()), "id", array()))), "html", null, true);
                echo "\">
                            <img style=\"display: block; margin-left: auto; margin-right: auto; width:300px;\" src=";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["acc"], "imageentete", array()), "getWebPath", array(), "method")), "html", null, true);
                echo ">
                        </a>
                        ";
            } else {
                // line 55
                echo "                            <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_view_page", array("id" => $this->getAttribute($this->getAttribute($context["acc"], "page", array()), "id", array()))), "html", null, true);
                echo "\">
                                <img style=\"display: block; margin-left: auto; margin-right: auto; width:300px;\" src=";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["acc"], "imageentete", array()), "getWebPath", array(), "method")), "html", null, true);
                echo ">
                            </a>
                        ";
            }
            // line 59
            echo "
";
            // line 69
            echo "


                    </div>


                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "






            </div>

        </div>
    </div>




    <style>

        #event{
            width:100%;
        }

    </style>

    <script type=\"text/javascript\">
        (function () {
            if(/iPhone|iPod|Android|opera mini|blackberry|palm os|palm|hiptop|avantgo|plucker|xiino|blazer|elaine|iris|3g_t|windows ce|opera mobi|windows ce; smartphone;|windows ce;iemobile/i.test(navigator.userAgent)){
                var question = confirm(\"Voulez-vous consulter la version mobile de ce site ?\")
                if (question){
                    window.location = \"http://adressedelaverisonmobile.com\";
                }
            }
        }());
    </script>







";
    }

    public function getTemplateName()
    {
        return "ChaireAccueilBundle:Accompagnement:viewacc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 76,  138 => 69,  135 => 59,  129 => 56,  124 => 55,  118 => 52,  113 => 51,  111 => 50,  108 => 49,  102 => 47,  96 => 45,  94 => 44,  90 => 42,  86 => 41,  81 => 39,  60 => 21,  56 => 19,  53 => 17,  50 => 16,  42 => 8,  39 => 7,  36 => 6,  30 => 5,  11 => 3,);
    }
}
