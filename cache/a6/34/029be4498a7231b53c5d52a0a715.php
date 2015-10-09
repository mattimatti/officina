<?php

/* snippets/favicons.twig */
class __TwigTemplate_a634029be4498a7231b53c5d52a0a715 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "        <!-- Favicons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["assets_path"]) ? $context["assets_path"] : null), "html", null, true);
        echo "/images/favicon.png\">
        <link rel=\"apple-touch-icon\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["assets_path"]) ? $context["assets_path"] : null), "html", null, true);
        echo "/images/apple-touch-icon.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["assets_path"]) ? $context["assets_path"] : null), "html", null, true);
        echo "/images/apple-touch-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["assets_path"]) ? $context["assets_path"] : null), "html", null, true);
        echo "/images/apple-touch-icon-114x114.png\">";
    }

    public function getTemplateName()
    {
        return "snippets/favicons.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
