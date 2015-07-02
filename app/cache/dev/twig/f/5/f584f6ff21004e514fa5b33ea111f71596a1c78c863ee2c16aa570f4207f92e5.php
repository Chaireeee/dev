<?php

/* GenerateurBundle:Page:editpage.html.twig */
class __TwigTemplate_f584f6ff21004e514fa5b33ea111f71596a1c78c863ee2c16aa570f4207f92e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GenerateurBundle:Page:viewpage.html.twig", "GenerateurBundle:Page:editpage.html.twig", 1);
        $this->blocks = array(
            'slide' => array($this, 'block_slide'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GenerateurBundle:Page:viewpage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_slide($context, array $blocks = array())
    {
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : $this->getContext($context, "slides")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 6
            echo "


    <div class=\" row\">
<div style=\"\" class=\"col-md-offset-4 coll-md-2\">

    <div class=\" row\">
        <div class=\"col-md-offset-3 coll-md-6\">
            <a class=\"textcenter\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_monter_slide_from_page", array("idslide" => $this->getAttribute((isset($context["idslide"]) ? $context["idslide"] : $this->getContext($context, "idslide")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "idpage" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
            echo "\">
                <span style=\"font-size: 40px;\" class=\"glyphicon glyphicon-chevron-up\" aria-hidden=\"true\"></span>
            </a>

        </div>
    </div>

    <div class=\" row\">
        <div class=\"col-md-offset-3 coll-md-6\" style=\"padding-top:10px; padding-bottom:10px;\">
            <a style=\" position:relative; right:50px;\" class=\"textcenter\" id=\"remove";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_delete_slide_from_page", array("id" => $this->getAttribute((isset($context["idslide"]) ? $context["idslide"] : $this->getContext($context, "idslide")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "idpage" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
            echo "\">
                <span style=\"font-size: 40px;\" class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
            </a>

            <a class=\"textcenter\"   href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_edit_slide", array("idslide" => $this->getAttribute((isset($context["idslide"]) ? $context["idslide"] : $this->getContext($context, "idslide")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "idpage" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
            echo "\">


                <span style=\"font-size: 40px;\" class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
            </a>
        </div>
    </div>

    <div class=\" row\">
        <div class=\"col-md-offset-3 coll-md-6\">

            <a  href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_descendre_slide_from_page", array("idslide" => $this->getAttribute((isset($context["idslide"]) ? $context["idslide"] : $this->getContext($context, "idslide")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "idpage" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
            echo "\">
                <span  style=\"font-size: 40px;\" class=\"glyphicon glyphicon-chevron-down\" aria-hidden=\"true\"></span>
            </a>


        </div>
    </div>




<script>
    \$('#remove";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "').click(function(data){
        var r=confirm('Etes vous sur de vouloir supprimer cette slide ?')
        if (r==true)
        {
            document.location.href=\$(this).data('href');
        }

    });


</script>





</div>
    </div>


    ";
            // line 70
            echo $context["slide"];
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "

    <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_choose_slide", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
        echo "\">
<div style=\"position:fixed ; right:150px;top:200px; height:100px; width:150px;  background-color:white; border:1px solid grey;\">

    <p class=\" textcenter\" style=\"padding-top:10px;\"><span style=\"font-size:60px; \" class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
        <br>Ajouter une slide</p>

</div>
     </a>





<a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_modify_info_page", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
        echo "\">
    <div style=\"position:fixed ; left:50px;top:100px; height:120px; width:150px;  background-color:white; border:1px solid grey;\">

        <p class=\" textcenter\" style=\"padding-top:10px;\"><span style=\"font-size:60px; \" class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
            <br>Modifier Logo et baseline</p>

    </div>
</a>



<


    ";
    }

    public function getTemplateName()
    {
        return "GenerateurBundle:Page:editpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 87,  151 => 74,  147 => 72,  131 => 70,  108 => 50,  93 => 38,  79 => 27,  70 => 23,  58 => 14,  48 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }
}
