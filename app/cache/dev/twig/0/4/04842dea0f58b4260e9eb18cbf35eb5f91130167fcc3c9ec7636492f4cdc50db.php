<?php

/* ChaireAccueilBundle:Accompagnement:index.html.twig */
class __TwigTemplate_04842dea0f58b4260e9eb18cbf35eb5f91130167fcc3c9ec7636492f4cdc50db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ChaireAccueilBundle:Accompagnement:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Accompagnement list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.accompagnement.id", array(), "messages");
        echo "</th>
                <th>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.accompagnement.namenlg", array(), "messages");
        echo "</th>
                <th>";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.accompagnement.nameen", array(), "messages");
        echo "</th>
                <th>";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.accompagnement.baselinenlg", array(), "messages");
        echo "</th>
                <th>";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.accompagnement.baselineenglish", array(), "messages");
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accompagnement_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nameLg", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nameEn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "baselineLg", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "baselineEn", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accompagnement_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accompagnement_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("accompagnement_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "ChaireAccueilBundle:Accompagnement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  112 => 37,  100 => 31,  94 => 28,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  69 => 20,  66 => 19,  62 => 18,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
