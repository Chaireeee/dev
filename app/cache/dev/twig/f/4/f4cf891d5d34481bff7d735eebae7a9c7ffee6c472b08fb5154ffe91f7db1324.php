<?php

/* ChaireAdminBundle:Event:viewevent.html.twig */
class __TwigTemplate_f4cf891d5d34481bff7d735eebae7a9c7ffee6c472b08fb5154ffe91f7db1324 extends Twig_Template
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

view event

<table>
    <tr>
        <th>Nom</th>
        <th>Nom Anglais</th>
        <th>Description</th>
        <th>Description En</th>
        <th>Date</th>
        <th>Addresse</th>
        <th>Modifier</th>

        <th>Modifier Page</th>
        <th>Modifier Page En</th>

        <th>Supprimer</th>
    </tr>
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 22
            echo "    <tr>

        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventName", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventNameEn", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo $this->getAttribute($context["event"], "eventDescription", array());
            echo "</td>
        <td>";
            // line 27
            echo $this->getAttribute($context["event"], "eventDescriptionEn", array());
            echo "</td>

        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "eventDate", array()), "Y-m-d"), "html", null, true);
            echo "</td>

        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "eventAddress", array()), "numero", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "eventAddress", array()), "road", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "eventAddress", array()), "postalCode", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "eventAddress", array()), "city", array()), "html", null, true);
            echo "</td>
        <td><a href=";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chaire_admin_modifyEvent", array("id" => $this->getAttribute($context["event"], "Id", array()))), "html", null, true);
            echo "> modifier</a></td>





        ";
            // line 38
            if ( !(null === $this->getAttribute($context["event"], "page", array()))) {
                // line 39
                echo "            <td><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_edit_page", array("id" => $this->getAttribute($this->getAttribute($context["event"], "page", array()), "id", array()))), "html", null, true);
                echo "> modifier page</a></td>
        ";
            } else {
                // line 41
                echo "            <td><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chaire_add_page_to_event", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo ">Ajouter page</a></td>
        ";
            }
            // line 43
            echo "
        ";
            // line 44
            if ( !(null === $this->getAttribute($context["event"], "pageEn", array()))) {
                // line 45
                echo "            <td><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateur_edit_page", array("id" => $this->getAttribute($this->getAttribute($context["event"], "pageEn", array()), "id", array()))), "html", null, true);
                echo "> modifier page</a></td>
            ";
            } else {
                // line 47
                echo "            <td><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chaire_add_page_to_eventEn", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo ">Ajouter page en anglais</a></td>
        ";
            }
            // line 49
            echo "

        <td><a href=";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chaire_admin_deleteEvent", array("id" => $this->getAttribute($context["event"], "Id", array()))), "html", null, true);
            echo "> supprimer</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
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
        return "ChaireAdminBundle:Event:viewevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 54,  125 => 51,  121 => 49,  115 => 47,  109 => 45,  107 => 44,  104 => 43,  98 => 41,  92 => 39,  90 => 38,  81 => 32,  71 => 31,  66 => 29,  61 => 27,  57 => 26,  53 => 25,  49 => 24,  45 => 22,  41 => 21,  19 => 1,);
    }
}
