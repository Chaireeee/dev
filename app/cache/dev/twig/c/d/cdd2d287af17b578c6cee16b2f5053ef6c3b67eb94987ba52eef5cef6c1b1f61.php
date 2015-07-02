<?php

/* ChaireTeamBundle:Team:index.html.twig */
class __TwigTemplate_cdd2d287af17b578c6cee16b2f5053ef6c3b67eb94987ba52eef5cef6c1b1f61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ChaireTeamBundle:Team:index.html.twig", 1);
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
        echo "<h1>Team list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Firstname</th>
                <th>Title</th>
                <th>Titleen</th>
                <th>Bio</th>
                <th>Bioen</th>
                <th>Twitter</th>
                <th>Linkedin</th>
                <th>Category</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titleEn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "bio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "bioEn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "twitter", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "linkedin", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "category", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 48
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("team_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "ChaireTeamBundle:Team:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  123 => 48,  111 => 42,  105 => 39,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  70 => 28,  66 => 27,  60 => 26,  57 => 25,  53 => 24,  31 => 4,  28 => 3,  11 => 1,);
    }
}
