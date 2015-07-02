<?php

/* ChaireEventBundle:Default:event.html.twig */
class __TwigTemplate_ad68da83059bec0706596871123558f9fb4e2c670e8adaa201cb1bffa1497f2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ChaireEventBundle:Default:event.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Evenements";
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->loadTemplate(":parts:navbar.html.twig", "ChaireEventBundle:Default:event.html.twig", 5)->display($context);
        // line 6
        echo "



";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
    ";
        // line 17
        echo "<div class=\"row pad\">

    <img id=\"chaireevent\" class=\"img_center\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireevent/images/photoevenement.jpg"), "html", null, true);
        echo "\"/>
</div>

    <div class=\"row pad\">

       <p class=\"text_center\">
           ";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("event.textprincipal", array(), "messages");
        // line 26
        echo "       </p>
    </div>





    <div class=\"container-fluid\">
        <div class=\"row pad\">
            <div class=\"col-md-offset-1 col-md-10\">

                <h4 class=\"text_center blue\">";
        // line 37
        echo $this->env->getExtension('translator')->getTranslator()->trans("event.tocome", array(), "messages");
        echo "</h4>

                ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["event_futur"]) ? $context["event_futur"] : $this->getContext($context, "event_futur")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 40
            echo "                    <div class=\"col-md-4\">

                        ";
            // line 42
            if (((isset($context["loc"]) ? $context["loc"] : $this->getContext($context, "loc")) == "en")) {
                // line 43
                echo "                            <h4 style=\"text-align:center;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventNameEn", array()), "html", null, true);
                echo "</h4>
                        ";
            } else {
                // line 45
                echo "                            <h4 style=\"text-align:center;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventName", array()), "html", null, true);
                echo "</h4>
                        ";
            }
            // line 47
            echo "
                        ";
            // line 48
            if (((isset($context["loc"]) ? $context["loc"] : $this->getContext($context, "loc")) == "en")) {
                // line 49
                echo "                        ";
                if ( !(null === $this->getAttribute($context["event"], "pageEn", array()))) {
                    // line 50
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_view_page", array("id" => $this->getAttribute($this->getAttribute($context["event"], "pageEn", array()), "id", array()))), "html", null, true);
                    echo "\">
                            ";
                } else {
                    // line 52
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_view_page", array("id" => $this->getAttribute($this->getAttribute($context["event"], "page", array()), "id", array()))), "html", null, true);
                    echo "\">
                                ";
                }
                // line 54
                echo "                                ";
            } else {
                // line 55
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_view_page", array("id" => $this->getAttribute($this->getAttribute($context["event"], "page", array()), "id", array()))), "html", null, true);
                echo "\">
                                    ";
            }
            // line 57
            echo "
                                    <img class=\"img_center\" style=\" width:250px;\" src=";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["event"], "Logo", array()), "getWebPath", array(), "method")), "html", null, true);
            echo ">
                                </a>

                                <p style=\"text-align:center;\">
                                    ";
            // line 62
            if (((isset($context["loc"]) ? $context["loc"] : $this->getContext($context, "loc")) == "en")) {
                // line 63
                echo "                                <h4 style=\"text-align:center;\">";
                echo $this->getAttribute($context["event"], "eventDescriptionEn", array());
                echo "</h4>
                            ";
            } else {
                // line 65
                echo "                                <h4 style=\"text-align:center;\">";
                echo $this->getAttribute($context["event"], "eventDescription", array());
                echo "</h4>
                                ";
            }
            // line 67
            echo "
                                </p>
                                ";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "eventDate", array()), "m/d/Y G:i"), "html", null, true);
            echo "
                                <br>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "eventAddress", array()), "numero", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "eventAddress", array()), "road", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "eventAddress", array()), "postalcode", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "eventAddress", array()), "city", array()), "html", null, true);
            echo "




                    </div>


                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "









            </div>



            <div class=\"row pad\">
                <div class=\"col-md-offset-1 col-md-10\">

            <h4 class=\"text_center blue\">";
        // line 96
        echo $this->env->getExtension('translator')->getTranslator()->trans("event.passed", array(), "messages");
        echo "</h4>

            ";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["event_passe"]) ? $context["event_passe"] : $this->getContext($context, "event_passe")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 99
            echo "                <div class=\"col-md-4\">

                    ";
            // line 101
            if (((isset($context["loc"]) ? $context["loc"] : $this->getContext($context, "loc")) == "en")) {
                // line 102
                echo "                        <h4 style=\"text-align:center;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventNameEn", array()), "html", null, true);
                echo "</h4>
                    ";
            } else {
                // line 104
                echo "                        <h4 style=\"text-align:center;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventName", array()), "html", null, true);
                echo "</h4>
                    ";
            }
            // line 106
            echo "
                    ";
            // line 107
            if (((isset($context["loc"]) ? $context["loc"] : $this->getContext($context, "loc")) == "en")) {
                // line 108
                echo "                        ";
                if ( !(null === $this->getAttribute($context["event"], "pageEn", array()))) {
                    // line 109
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_view_page", array("id" => $this->getAttribute($this->getAttribute($context["event"], "pageEn", array()), "id", array()))), "html", null, true);
                    echo "\">
                        ";
                } else {
                    // line 111
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_view_page", array("id" => $this->getAttribute($this->getAttribute($context["event"], "page", array()), "id", array()))), "html", null, true);
                    echo "\">
                        ";
                }
                // line 113
                echo "                    ";
            } else {
                // line 114
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_view_page", array("id" => $this->getAttribute($this->getAttribute($context["event"], "page", array()), "id", array()))), "html", null, true);
                echo "\">
                    ";
            }
            // line 116
            echo "
                    <img class=\"img_center\" style=\" width:250px;\" src=";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["event"], "Logo", array()), "getWebPath", array(), "method")), "html", null, true);
            echo ">
                    </a>

                    <p style=\"text-align:center;\">
                        ";
            // line 121
            if (((isset($context["loc"]) ? $context["loc"] : $this->getContext($context, "loc")) == "en")) {
                // line 122
                echo "                    <h4 style=\"text-align:center;\">";
                echo $this->getAttribute($context["event"], "eventDescriptionEn", array());
                echo "</h4>
                ";
            } else {
                // line 124
                echo "                    <h4 style=\"text-align:center;\">";
                echo $this->getAttribute($context["event"], "eventDescription", array());
                echo "</h4>
                    ";
            }
            // line 126
            echo "
                    </p>
                    ";
            // line 128
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "eventDate", array()), "m/d/Y G:i"), "html", null, true);
            echo "
                    <br>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "eventAddress", array()), "numero", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "eventAddress", array()), "road", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "eventAddress", array()), "postalcode", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "eventAddress", array()), "city", array()), "html", null, true);
            echo "




                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "
                    </div></div>


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
        return "ChaireEventBundle:Default:event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 137,  300 => 129,  296 => 128,  292 => 126,  286 => 124,  280 => 122,  278 => 121,  271 => 117,  268 => 116,  262 => 114,  259 => 113,  253 => 111,  247 => 109,  244 => 108,  242 => 107,  239 => 106,  233 => 104,  227 => 102,  225 => 101,  221 => 99,  217 => 98,  212 => 96,  193 => 79,  172 => 70,  168 => 69,  164 => 67,  158 => 65,  152 => 63,  150 => 62,  143 => 58,  140 => 57,  134 => 55,  131 => 54,  125 => 52,  119 => 50,  116 => 49,  114 => 48,  111 => 47,  105 => 45,  99 => 43,  97 => 42,  93 => 40,  89 => 39,  84 => 37,  71 => 26,  69 => 25,  60 => 19,  56 => 17,  53 => 15,  50 => 14,  42 => 6,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
