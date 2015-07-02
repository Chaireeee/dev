<?php

/* ChaireAccueilBundle:Default:index.html.twig */
class __TwigTemplate_07525ef1ebdadf1eadde926b56033a71953509cd200b2b9838e577f3296b9849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ChaireAccueilBundle:Default:index.html.twig", 1);
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
        $this->loadTemplate(":parts:navbaraccueil.html.twig", "ChaireAccueilBundle:Default:index.html.twig", 3)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "

    <div class=\"container-fluid\">
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"row pad\">
        <div class=\"col-xs-offset-4 col-xs-4\">
        <div class=\"alert alert-success\" role=\"alert\">

            <div class=\"flash-notice\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>

        </div>
        </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            echo "        <div class=\"row pad\">
            <div class=\"col-xs-offset-4 col-xs-4\">
                <div class=\"alert alert-danger\" role=\"alert\">

                        <div class=\"flash-notice\">
                            ";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>

                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        // line 38
        echo "        <div   class=\"row pad\">

                <div style=\"position:relative;\">
            <img id=\"manifesto\" class=\"img_center\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/image_video_manifesto.jpg"), "html", null, true);
        echo "\"/>

            <img id=\"youtube\"  data-toggle=\"modal\" data-target=\"#myModal\"  src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/bouton_youtube_video.png"), "html", null, true);
        echo "\"/>
            </div>
        </div>

        ";
        // line 48
        echo "        <div class=\"row pad\">
            <div class=\"col-md-offset-4 col-md-4\">
                <h2 class=\"text_center\">
                 ------- ";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("welcome.ourActivities", array(), "messages");
        echo " -------
                </h2>
            </div>
        </div>

        ";
        // line 57
        echo "        <div class=\"row \">

            <div class=\"col-md-offset-3 col-md-6\">
                <div class=\"row\">
                    <div class=\" col-md-6\">
                        <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("chaire_event_homepage");
        echo "\">
                        <img class=\"img_center activite\"
                             src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/image_evenements.png"), "html", null, true);
        echo "\"/>
                        </a>
                    </div>
                    <div class=\" col-md-6\">
                        <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("chaire_formation_homepage");
        echo "\">
                        <img class=\"img_center activite\"
                             src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/image_formations.png"), "html", null, true);
        echo "\"/>
                        </a>
                    </div>
                    <div class=\" col-md-6\">
                        <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("chaire_event_homepage");
        echo "\">
                        <img class=\"img_center activite\"
                             src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/image_accompagnement.png"), "html", null, true);
        echo "\"/>
                        </a>
                    </div>
                    <div class=\" col-md-6\">
                        <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("chaire_event_homepage");
        echo "\">
                        <img class=\"img_center activite\"
                             src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/image_recherche.png"), "html", null, true);
        echo "\"/>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        ";
        // line 91
        echo "        <div class=\"row pad\">
            <div class=\"col-md-offset-4 col-md-4\">
                <h2 class=\"text_center\">
                    <span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"> ";
        // line 94
        echo $this->env->getExtension('translator')->getTranslator()->trans("welcome.now", array(), "messages");
        echo "  -------
                </h2>
            </div>
        </div>

        ";
        // line 100
        echo "        <div class=\"row pad\">

            <div class=\"col-md-offset-2 col-md-8\">
                <div class=\"row\">
                    ";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["highlights"]) ? $context["highlights"] : $this->getContext($context, "highlights")));
        foreach ($context['_seq'] as $context["_key"] => $context["highlight"]) {
            // line 105
            echo "
                        <div class=\" col-md-4\">
                            <img class=\"img_center highlight_img\"
                                 src=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/img/highlight/" . $this->getAttribute($context["highlight"], "photolink", array()))), "html", null, true);
            echo "\"/>
                            <h3 class=\"text_center\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["highlight"], "title", array()), "html", null, true);
            echo " </h3>
                           <p class=\"text_center med-blue  baseline\"> ";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["highlight"], "baseline", array()), "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['highlight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "





                </div>
            </div>

        </div>



        ";
        // line 127
        echo "        <div class=\"row pad\">
            <div class=\"col-md-offset-4 col-md-4\">
                <h2 class=\"text_center\">

                </h2>
            </div>
        </div>


    </div>






    <!-- Modal Video -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">

                    <button id=\"close_video\" type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">";
        // line 149
        echo $this->env->getExtension('translator')->getTranslator()->trans("welcome.close", array(), "messages");
        echo " <span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\"></h4>
                    </br>
                </div>
                <div class=\"modal-body\">
                    <iframe id=\"video_youtube\" width=\"100%\" height=\"600\" src=\"\" frameborder=\"0\" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>





    <script>
//alert(\$( window ).width());


        \$('#youtube').click(function(){
                    \$('#video_youtube').attr('src','https://www.youtube.com/embed/ZmeC0SgouWc?autoplay=1');
                } );

        \$('#close_video').click(function(){
             \$('#video_youtube').attr('src','');
} );

    </script>


    <style>

 .line-abs{
     width:50px;
     border-top:1px solid black ;


}

        .baseline{
            font-size:18px;
        }


    </style>

";
    }

    public function getTemplateName()
    {
        return "ChaireAccueilBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 149,  245 => 127,  230 => 113,  221 => 110,  217 => 109,  213 => 108,  208 => 105,  204 => 104,  198 => 100,  190 => 94,  185 => 91,  174 => 82,  169 => 80,  162 => 76,  157 => 74,  150 => 70,  145 => 68,  138 => 64,  133 => 62,  126 => 57,  118 => 51,  113 => 48,  106 => 43,  101 => 41,  96 => 38,  94 => 37,  81 => 30,  74 => 25,  69 => 24,  56 => 17,  49 => 12,  45 => 11,  40 => 8,  37 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
