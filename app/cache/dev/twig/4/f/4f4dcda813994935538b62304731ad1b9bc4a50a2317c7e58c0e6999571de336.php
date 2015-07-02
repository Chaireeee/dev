<?php

/* ::layout.html.twig */
class __TwigTemplate_4f4dcda813994935538b62304731ad1b9bc4a50a2317c7e58c0e6999571de336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "





</head>
<nav>
";
        // line 32
        $this->displayBlock('menu', $context, $blocks);
        // line 35
        echo "</nav>

<body >

";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "




</body>
<footer>
    ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "
</footer>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Latest compiled and minified CSS -->

        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo " >


        <!-- href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\"-->
         <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css\">
    ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
    ";
    }

    // line 32
    public function block_menu($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $this->loadTemplate(":parts:navbar.html.twig", "::layout.html.twig", 33)->display($context);
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        echo "        ";
        $this->loadTemplate(":parts:footer.html.twig", "::layout.html.twig", 48)->display($context);
        // line 49
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 49,  135 => 48,  132 => 47,  127 => 39,  122 => 33,  119 => 32,  112 => 20,  109 => 19,  98 => 11,  90 => 7,  87 => 6,  81 => 5,  73 => 50,  71 => 47,  62 => 40,  60 => 39,  54 => 35,  52 => 32,  42 => 24,  40 => 19,  37 => 18,  35 => 6,  31 => 5,  25 => 1,);
    }
}
