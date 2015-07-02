<?php

/* ChaireAccueilBundle:Newsletter:newsletter.html.twig */
class __TwigTemplate_3c84e14956058ef3f14043cdb556ba43100693548d0a2b9d8b910ad0dc7baba4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ChaireAccueilBundle:Newsletter:newsletter.html.twig", 1);
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
        $this->loadTemplate(":parts:navbar.html.twig", "ChaireAccueilBundle:Newsletter:newsletter.html.twig", 3)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "





<div class=\"container-fluid\">
    <div class=\"row pad\">
       <div class=\"col-md-6\">
           <img class=\"img_nl img_center\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chaireaccueil/images/imageNL.png"), "html", null, true);
        echo "\">
       </div>
        <div class=\"col-md-6\">
            <h3 class=\"titres\" >";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("welcome.newsletter.title", array(), "messages");
        echo "</h3>
            <p class=\"text_news\" >";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("welcome.newsletter.title.desc", array(), "messages");
        echo " </p>


            <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("add_to_mailjet");
        echo "\" method=\"post\">

                <div class=\"row pad\">
                    <div class=\"form-group\">
                        <label  for=\"text\" class=\"col-lg-4 control-label\">";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("welcome.newsletter.enteremail", array(), "messages");
        echo " </label>
                        <div class=\"col-lg-4\">
                            <input type=\"text\" name=\"email\" class=\"form-control emailnews\" >
                        </div>
                    </div>
                </div>

<div class=\" row\">
    <div class=\"col-lg-4\">

    </div>
    <div class=\"col-lg-6\">
        <div class=\"row\" style=\"padding-top: 15px;\">
            <div class=\"form-group \">

                </li><div class=\"col-lg-12\">
                    <input  type=\"radio\" name=\"who\" value=\"1\" checked>&nbsp;&nbsp; ";
        // line 44
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.entrepreneur", array(), "messages");
        // line 45
        echo "                </div>

                <div class=\"col-lg-12\">
                    <input  type=\"radio\" name=\"who\" value=\"2\" checked>&nbsp;&nbsp; ";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.investor", array(), "messages");
        // line 49
        echo "                </div>
                <div class=\"col-lg-12\">
                    <input  type=\"radio\" name=\"who\" value=\"3\" checked>&nbsp;&nbsp; ";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.student", array(), "messages");
        // line 52
        echo "                </div>
                <div class=\"col-lg-12\">
                    <input  type=\"radio\" name=\"who\" value=\"4\" checked>&nbsp;&nbsp; ";
        // line 54
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.corporate", array(), "messages");
        // line 55
        echo "                </div>
                <div class=\"col-lg-12\">
                    <input  type=\"radio\" name=\"who\" value=\"5\" checked>&nbsp;&nbsp; ";
        // line 57
        echo $this->env->getExtension('translator')->getTranslator()->trans("footer.presse", array(), "messages");
        // line 58
        echo "                </div>


            </div>
        </div>
    </div>

</div>



                <div class=\"row pad\">


                        <div class=\"col-lg-offset-4 col-lg-4\">
                            <button  class=\"button  img_center\">Envoyer</button>
                        </div>

                </div>





            </form>



            <h3 class=\"titres\">";
        // line 86
        echo $this->env->getExtension('translator')->getTranslator()->trans("welcome.newsletter.promesse.title", array(), "messages");
        echo "</h3>
           <p class=\"text_news\"> ";
        // line 87
        echo $this->env->getExtension('translator')->getTranslator()->trans("welcome.newsletter.promesse", array(), "messages");
        echo "</p>

        </div>
    </div>
</div>



    ";
        // line 137
        echo "
    <style>
        .img_nl{
            width:60%;
        }

        .titres{
            font-size:30px;
        }

        .text_news{
            font-size:20px;
        }

        .emailnews{

            border:4px solid rgb(48,54,61);
        }


        .button{
            background-color:  rgb(48,54,61);
            border-radius:0px;
            border: 4px solid rgb(48,54,61);
            color:white;
            height:40px;
            font-size:20px;
            padding-right:60px;
            padding-left:60px;

        }

        .button:hover{
            background-color: white;
            border-radius:0px;
            border: 4px solid rgb(48,54,61);
            color:black;
            height:40px;
            font-size:20px;
        }


    </style>

    <script>

        function validateEmail(email) {
            var re = /^([\\w-]+(?:\\.[\\w-]+)*)@((?:[\\w-]+\\.)*\\w[\\w-]{0,66})\\.([a-z]{2,6}(?:\\.[a-z]{2})?)\$/i;
            return re.test(email);
        }


        \$('#send').click(function(){



            if (validateEmail(\$('#email').val()))
            {
                alert( \$('#select').val());
            }

        });


        \$.ajax({
            type: \"POST\",
            url: \"https://api.mailjet.com/v3/REST/contactslist\" ,
            data: {
                Name: \"test3\"
            },
            dataType: \"json\",
            beforeSend: function (xhr) {
                \$('.waitCodePromo').removeClass('hide');
            },
            success: function (data) {
                //callback(data);
                alert('data');
            },
            error: function (resultat, statut, erreur) {
                console.log(\"erreur\");
            }
        });



    </script>

";
    }

    public function getTemplateName()
    {
        return "ChaireAccueilBundle:Newsletter:newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 137,  154 => 87,  150 => 86,  120 => 58,  118 => 57,  114 => 55,  112 => 54,  108 => 52,  106 => 51,  102 => 49,  100 => 48,  95 => 45,  93 => 44,  74 => 28,  67 => 24,  61 => 21,  57 => 20,  51 => 17,  40 => 8,  37 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
