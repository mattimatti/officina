<?php

/* snippets/navigation.twig */
class __TwigTemplate_55611f3f73e453508a368e876c482d67 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "            <!-- Navigation panel -->
            <div class=\"nav-bar-compact clearfix\">
                
                <!-- Logo ( * your text or image into link tag *) -->
                <div class=\"nbc-logo-wrap local-scroll\">
                    <a href=\"#top\" class=\"nbc-logo\">
                        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["media_path"]) ? $context["media_path"] : null), "html", null, true);
        echo "/custom/logo.jpg\" width=\"80\" height=\"27\" alt=\"\" />
                    </a>
                </div>
                
                <!-- Menu Button -->
                <div class=\"nbc-menu-button\">
                    <i class=\"nbc-menu-icon\"></i>
                </div>
                
                <!-- Menu Links -->
                <nav class=\"nbc-menu-wrap\">
                    <ul class=\"nbc-menu-links local-scroll\">
                        <li>
                            <a href=\"#home\">Home</a>
                        </li>
                        <li>
                            <a href=\"#concetto\">Concetto</a>
                        </li>
                        <li>
                            <a href=\"#processo\">Processo</a>
                        </li>
                        <li>
                            <a href=\"#team\">Chi siamo</a>
                        </li>
                        <li>
                            <a href=\"#gallery\">Con le mani</a>
                        </li>
                        <li>
                            <a href=\"#contact\">contatti</a>
                        </li>
                   
                    </ul>
                    
                    <!-- Social Links -->
                    <div class=\"nbc-social-links\">
                        <a href=\"https://www.facebook.com/officinasartoriale\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                        <!--<a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>-->
                    </div>
                    <!-- End Social Links -->
                    
                </nav>
            </div>
            <!-- End Navigation panel -->";
    }

    public function getTemplateName()
    {
        return "snippets/navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
