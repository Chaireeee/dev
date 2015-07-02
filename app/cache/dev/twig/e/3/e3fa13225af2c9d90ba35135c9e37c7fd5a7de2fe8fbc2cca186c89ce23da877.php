<?php

/* ChaireAdminBundle:Formation:viewFormation.html.twig */
class __TwigTemplate_e3fa13225af2c9d90ba35135c9e37c7fd5a7de2fe8fbc2cca186c89ce23da877 extends Twig_Template
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
        echo "</br>
</br>



<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("chaire_admin_addFormation");
        echo "\">add a formation</a>

<h2>view event</h2>

<table>
    <tr>

        <th>Name</th>
        <th>concept</th>


        <th>student ecp</th>
        <th>student exte</th>
        <th>executive</th>


        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 26
            echo "    <tr>

        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "name", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "concept", array()), "html", null, true);
            echo "</td>


        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "studentescp", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "studentexte", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "executive", array()), "html", null, true);
            echo "</td>

        <td><a href=";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chaire_admin_modifyFormation", array("id" => $this->getAttribute($context["formation"], "Id", array()))), "html", null, true);
            echo "> modifier</a></td>
        <td><a href=";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chaire_admin_deleteFormation", array("id" => $this->getAttribute($context["formation"], "Id", array()))), "html", null, true);
            echo "> supprimer</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "


    <STYLE type=\"text/css\">
        table
        {
            border-collapse: collapse; /* Les bordures du tableau seront collées (plus joli) */
        }
        td
        {
            border: 1px solid black;
        }
    </STYLE>
";
    }

    public function getTemplateName()
    {
        return "ChaireAdminBundle:Formation:viewFormation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 40,  83 => 37,  79 => 36,  74 => 34,  70 => 33,  66 => 32,  60 => 29,  56 => 28,  52 => 26,  48 => 25,  26 => 6,  19 => 1,);
    }
}
