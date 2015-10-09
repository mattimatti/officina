<?php

/* index.twig */
class __TwigTemplate_a6a69d8bd616348face630898803f79b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/theme.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "            ";
        $this->env->loadTemplate("snippets/home.twig")->display($context);
        // line 5
        echo "            ";
        $this->env->loadTemplate("snippets/navigation.twig")->display($context);
        // line 6
        echo "            ";
        $this->env->loadTemplate("snippets/concetto.twig")->display($context);
        // line 7
        echo "            ";
        $this->env->loadTemplate("snippets/concetticarousel.twig")->display($context);
        // line 8
        echo "            ";
        $this->env->loadTemplate("snippets/processo.twig")->display($context);
        // line 9
        echo "            ";
        $this->env->loadTemplate("snippets/team.twig")->display($context);
        // line 10
        echo "            ";
        $this->env->loadTemplate("snippets/galleria1.twig")->display($context);
        // line 11
        echo "            ";
        $this->env->loadTemplate("snippets/testimonial.twig")->display($context);
        // line 12
        echo "            ";
        $this->env->loadTemplate("snippets/testimonial2.twig")->display($context);
        // line 13
        echo "            ";
        // line 14
        echo "            ";
        $this->env->loadTemplate("snippets/bottommenu.twig")->display($context);
        // line 15
        echo "            ";
        $this->env->loadTemplate("snippets/contact.twig")->display($context);
        // line 16
        echo "            ";
        $this->env->loadTemplate("snippets/googlemaps.twig")->display($context);
        // line 17
        echo "            ";
        $this->env->loadTemplate("snippets/footer.twig")->display($context);
        // line 18
        echo "            ";
        $this->env->loadTemplate("snippets/worksexpander.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
