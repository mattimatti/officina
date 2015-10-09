<?php

/* snippets/css.twig */
class __TwigTemplate_10cbf4efd1657ca653c3b2955af82370 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["assets_path"]) ? $context["assets_path"] : null), "html", null, true);
        echo "/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["assets_path"]) ? $context["assets_path"] : null), "html", null, true);
        echo "/css/style.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["assets_path"]) ? $context["assets_path"] : null), "html", null, true);
        echo "/css/style-responsive.css\">

        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["assets_path"]) ? $context["assets_path"] : null), "html", null, true);
        echo "/css/animate.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["assets_path"]) ? $context["assets_path"] : null), "html", null, true);
        echo "/css/animations.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["assets_path"]) ? $context["assets_path"] : null), "html", null, true);
        echo "/css/vertical-rhythm.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["assets_path"]) ? $context["assets_path"] : null), "html", null, true);
        echo "/css/owl.carousel.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["assets_path"]) ? $context["assets_path"] : null), "html", null, true);
        echo "/css/magnific-popup.css\">        

        
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["assets_path"]) ? $context["assets_path"] : null), "html", null, true);
        echo "/css/colors/green.css\">";
    }

    public function getTemplateName()
    {
        return "snippets/css.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
