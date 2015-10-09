<?php

/* layouts/theme.twig */
class __TwigTemplate_a8cd556ae0976eb86f2822ee64925fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Officina Sartoriale</title>

        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta charset=\"utf-8\">
       
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

        ";
        // line 13
        $this->env->loadTemplate("snippets/favicons.twig")->display($context);
        // line 14
        echo "        ";
        $this->env->loadTemplate("snippets/css.twig")->display($context);
        // line 15
        echo "        
    </head>
    <body class=\"appear-animate\">
        
        ";
        // line 19
        $this->env->loadTemplate("snippets/loader.twig")->display($context);
        // line 20
        echo "        
        <!-- Page Wrap -->
        <div class=\"page\" id=\"top\">
        
            ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "   
            
        </div>
        <!-- End Page Wrap --> 
        
        ";
        // line 31
        $this->env->loadTemplate("snippets/javascripts.twig")->display($context);
        // line 32
        echo "
    </body>
</html>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "          
            ";
    }

    public function getTemplateName()
    {
        return "layouts/theme.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
