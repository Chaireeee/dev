<?php

/* ChaireTeamBundle:Default:index.html.twig */
class __TwigTemplate_e842e55ba86396aa71ff4336847c7108f98e7479a5f8ba53d3a8288976b30c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ChaireTeamBundle:Default:index.html.twig", 1);
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
        $this->loadTemplate(":parts:navbar.html.twig", "ChaireTeamBundle:Default:index.html.twig", 3)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "

    ";
        // line 11
        echo "    <div class=\"row pad\">

        <img id=\"chaireteam\" class=\"img_center\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireteam/images/photo_page_equipe.jpg"), "html", null, true);
        echo "\"/>


    </div>




<div id=\"anchor\" class=\"row pad\">
</div>








    <div class=\"container-fluid\">
        <div class=\"row pad\">
            <div class=\"col-md-offset-2 col-md-8 \">

                <div  role=\"tabpanel\">

                    <!-- Nav tabs -->
                    <ul class=\"nav nav-tabs colort\" role=\"tablist\" style=\"padding-bottom:30px;\">
                        <li  role=\"presentation\" class=\"active\"><a href=\"#equipe\" aria-controls=\"equipe\" role=\"tab\" data-toggle=\"tab\"> <h2> ChaireEEE
                                Team

                                </h2></a></li>


                        <li  role=\"presentation\"><a href=\"#club\" aria-controls=\"club\" role=\"tab\" data-toggle=\"tab\"><h2>ChaireEEE
                                   Club

                                </h2></a></li>
                        <li  role=\"presentation\"><a href=\"#board\" aria-controls=\"board\" role=\"tab\" data-toggle=\"tab\"><h2> Board

                                </h2> </a>
                        </li>
                        <span class=\"trianglecss\" style=\"right:45%;\"></span>
                    </ul>

                    <!-- Tab panes





                    <!-- Tab panes -->

                    <div class=\"tab-content pad\">


                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"equipe\">
                            <div class=\"row lightgrey\" >
                            ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")));
        foreach ($context['_seq'] as $context["_key"] => $context["mem"]) {
            // line 70
            echo "



                                <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chaire_team_view", array("id" => $this->getAttribute($context["mem"], "id", array()))), "html", null, true);
            echo "\">
                                <div class=\"col-md-4 \">


                                  <img class=\"photo_team img_center\" src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["mem"], "photo", array()), "getWebPath", array(), "method")), "html", null, true);
            echo "\">



                                    <h4 class=\"text_center\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "firstname", array()), "html", null, true);
            echo "</h4>

                                    <p class=\"text_center\">

                                        ";
            // line 86
            if (((isset($context["loc"]) ? $context["loc"] : $this->getContext($context, "loc")) == "en")) {
                // line 87
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "titleEn", array()), "html", null, true);
                echo "
                                    ";
            } else {
                // line 89
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "title", array()), "html", null, true);
                echo "
                                    ";
            }
            // line 91
            echo "

                                        </br>

                                    </p>


                                </div>
                                </a>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "</div>



                        </div>


                        <div role=\"tabpanel\" class=\"tab-pane \" id=\"club\">
                            <div class=\"row lightgrey\" >
                            ";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")));
        foreach ($context['_seq'] as $context["_key"] => $context["mem"]) {
            // line 112
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chaire_team_view", array("id" => $this->getAttribute($context["mem"], "id", array()))), "html", null, true);
            echo "\">
                                    <div class=\"col-md-4 \">


                                        <img class=\"photo_team img_center\" src=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["mem"], "photo", array()), "getWebPath", array(), "method")), "html", null, true);
            echo "\">



                                        <h4 class=\"text_center\">";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "firstname", array()), "html", null, true);
            echo "</h4>

                                        <p class=\"text_center\">

                                            ";
            // line 124
            if (((isset($context["loc"]) ? $context["loc"] : $this->getContext($context, "loc")) == "en")) {
                // line 125
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "titleEn", array()), "html", null, true);
                echo "
                                            ";
            } else {
                // line 127
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "title", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 129
            echo "

                                            </br>

                                        </p>


                                    </div>
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                                </div>


                        </div>

                        <div role=\"tabpanel\" class=\"tab-pane \" id=\"board\">

                            <div class=\"row lightgrey\" >
                            ";
        // line 147
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")));
        foreach ($context['_seq'] as $context["_key"] => $context["mem"]) {
            // line 148
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chaire_team_view", array("id" => $this->getAttribute($context["mem"], "id", array()))), "html", null, true);
            echo "\">
                                    <div class=\"col-md-4 \">


                                        <img class=\"photo_team img_center\" src=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["mem"], "photo", array()), "getWebPath", array(), "method")), "html", null, true);
            echo "\">



                                        <h4 class=\"text_center\">";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "firstname", array()), "html", null, true);
            echo "</h4>

                                        <p class=\"text_center\">

                                            ";
            // line 160
            if (((isset($context["loc"]) ? $context["loc"] : $this->getContext($context, "loc")) == "en")) {
                // line 161
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "titleEn", array()), "html", null, true);
                echo "
                                            ";
            } else {
                // line 163
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "title", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 165
            echo "

                                            </br>

                                        </p>


                                    </div>
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>
    </div>





    <style>





        .trianglecss{
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 50px 100px 50px;
            border-color: transparent transparent #dedfe1 transparent;
            position:relative;
            bottom:-50px;

        }




       .nav > li > a {
           position: relative;
           display: block;
           padding: 10px 15px;
           padding-bottom:0px;
       }

        .nav > li > a:hover {
            position: relative;
            display: block;
            padding: 10px 15px;
            padding-bottom:0px;
        }


       .nav-tabs > li {
           float: left;
           margin-bottom: none;
       }

       .nav > li > a:hover, .nav > li > a:focus {
           text-decoration: none;
           background-color: white;
           border:none;
           margin:none;
       }

        .nav-tabs > li > a{
            border-bottom: 0px;
        }
       .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {

           cursor: default;
           background-color: white;
           border: none;
           margin: Opx;

       }


        li:hover{
            background-color: white;
            margin: Opx;
        }

       li.active a h2{
           border:none;
           color:rgb(48,54,61)
               ;

       }

       .colort h2{

      color: rgb(90,103,117);
       }





div.tab-content.pad{
    background-color: rgb(222,223,225);
    box-shadow: none;
    padding-right:15px;
    padding-left:15px;
}


         .lightgrey{
            background-color: rgb(222,223,225);
             box-shadow: none;

         }

        #chaireteam{
            width:100%;
        }

    </style>

    <script>



        \$('a[href=\"#equipe\"]').click(function (){

            /*
            var style=\$('.trianglecss').attr('style');
            style=style.substr(6,2);
            alert(style);
            */

            \$(\".trianglecss\").animate({right: '45%'});




        });

        \$('a[href=\"#club\"]').click(function (){
            \$(\".trianglecss\").animate({right: '25%'});
            //\$('.trianglecss').attr('style','right:25%;');

        });
        \$('a[href=\"#board\"]').click(function (){
            \$(\".trianglecss\").animate({right: '10%'});
            //\$('.trianglecss').attr('style','right:10%;');

        });

    </script>


";
    }

    public function getTemplateName()
    {
        return "ChaireTeamBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 175,  290 => 165,  284 => 163,  278 => 161,  276 => 160,  267 => 156,  260 => 152,  252 => 148,  248 => 147,  238 => 139,  223 => 129,  217 => 127,  211 => 125,  209 => 124,  200 => 120,  193 => 116,  185 => 112,  181 => 111,  170 => 102,  154 => 91,  148 => 89,  142 => 87,  140 => 86,  131 => 82,  124 => 78,  117 => 74,  111 => 70,  107 => 69,  48 => 13,  44 => 11,  40 => 8,  37 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
