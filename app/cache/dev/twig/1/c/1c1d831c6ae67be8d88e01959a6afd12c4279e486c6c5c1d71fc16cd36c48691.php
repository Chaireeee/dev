<?php

/* :parts:footer.html.twig */
class __TwigTemplate_1c1d831c6ae67be8d88e01959a6afd12c4279e486c6c5c1d71fc16cd36c48691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row footer\">
    <div class=\"col-md-offset-1 col-md-10\">

        <div class=\"row pad \">
            <div class=\"col-md-offset-2 col-md-8\">
                <p class=\"text_center\" style=\"font-size: 24px; \">";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.dontmiss", array(), "messages");
        echo "</p>

                <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("add_to_mailjet");
        echo "\" method=\"post\">

                    <div class=\"row pad\">


                        <div class=\"col-lg-6\" class=\"test\">
                            <input type=\"text\" name=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Votre Adresse E-mail\">
                        </div>

                        <div class=\"col-lg-6\">
                            <button id=\"send\"
                                    class=\"pull-right btn btn-block text_center\">";
        // line 20
        echo "                                <span style=\"position:relative; bottom:4px;\">Get on the ship</span></button>
                        </div>

                    </div>

                    <div class=\"row\" style=\"padding-top: 15px;\">
                        <div class=\"form-group \">

                            <div class=\"col-lg-offset-1 col-lg-2\">
                                <input type=\"radio\" name=\"who\" value=\"1\" checked>&nbsp;&nbsp; ";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.entrepreneur", array(), "messages");
        // line 31
        echo "                            </div>
                            <div class=\"col-lg-2\">
                                <input type=\"radio\" name=\"who\" value=\"2\" checked>&nbsp;&nbsp; ";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.investor", array(), "messages");
        // line 35
        echo "                            </div>
                            <div class=\"col-lg-2\">
                                <input type=\"radio\" name=\"who\" value=\"3\" checked>&nbsp;&nbsp; ";
        // line 37
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.student", array(), "messages");
        // line 39
        echo "                            </div>
                            <div class=\"col-lg-2\">
                                <input type=\"radio\" name=\"who\" value=\"4\" checked>&nbsp;&nbsp; ";
        // line 41
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.corporate", array(), "messages");
        // line 43
        echo "                            </div>
                            <div class=\"col-lg-2\">
                                <input type=\"radio\" name=\"who\" value=\"5\" checked>&nbsp;&nbsp; ";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.presse", array(), "messages");
        // line 47
        echo "                            </div>


                        </div>
                    </div>


                    ";
        // line 68
        echo "

                </form>

            </div>
        </div>

        <div class=\"row pad \">
            <div class=\"col-md-offset-3 col-md-6\">
                <div class=\"row\">
                    <div class=\"col-lg-offset-1 col-lg-2\">
                        <a href=\"";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.facebook", array(), "messages");
        echo "\">
                            <img class=\"img_center social\"
                                 src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/facebook.png"), "html", null, true);
        echo "\"/>
                            ";
        // line 83
        echo "                        </a>
                    </div>
                    <div class=\"col-lg-2\">
                        <a href=\"";
        // line 86
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.twitter", array(), "messages");
        echo "\">
                            <img class=\"img_center social\"
                                 src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/twitter.png"), "html", null, true);
        echo "\"/>
                        </a>
                    </div>
                    <div class=\"col-lg-2\">
                        <a href=\"";
        // line 92
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.email", array(), "messages");
        echo "\">
                            <img class=\"img_center social\"
                                 src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/email.png"), "html", null, true);
        echo "\"/>
                        </a>
                    </div>
                    <div class=\"col-lg-2\">
                        <a href=\"";
        // line 98
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.youtube", array(), "messages");
        echo "\">
                            <img class=\"img_center social\"
                                 src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/youtube.png"), "html", null, true);
        echo "\"/>
                        </a>
                    </div>
                    <div class=\"col-lg-2\">
                        <a href=\"";
        // line 104
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.medium", array(), "messages");
        echo "\">
                            <img class=\"img_center social\"
                                 src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/medium.png"), "html", null, true);
        echo "\"/>
                        </a>
                    </div>

                </div>

            </div>
        </div>
        <div class=\"row pad \">
            <div class=\"col-md-offset-2 col-md-8\">
                <p class=\"text_center text_footer\"> ";
        // line 116
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.discover", array(), "messages");
        echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                    <a href=\"www.google.fr/paris\" class=\"bold_white\"> PARIS </a>-
                    <a href=\"www.google.fr/paris\" class=\"bold_white\"> MADRID </a>-
                    <a href=\"www.google.fr/paris\" class=\"bold_white\"> BERLIN </a>-
                    <a href=\"www.google.fr/paris\" class=\"bold_white\"> LONDRES </a>-
                    <a href=\"www.google.fr/paris\" class=\"bold_white\"> TURIN</a>
                </p>

            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-offset-1 col-md-10\">
                <p class=\"text_center\">ChaireEEE 2015 - All rights reserved
                </p>
            </div>
        </div>

    </div>

</div>

";
    }

    public function getTemplateName()
    {
        return ":parts:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 116,  159 => 106,  154 => 104,  147 => 100,  142 => 98,  135 => 94,  130 => 92,  123 => 88,  118 => 86,  113 => 83,  109 => 81,  104 => 79,  91 => 68,  82 => 47,  80 => 45,  76 => 43,  74 => 41,  70 => 39,  68 => 37,  64 => 35,  62 => 33,  58 => 31,  56 => 29,  45 => 20,  31 => 8,  26 => 6,  19 => 1,);
    }
}
