<?php

/* snippets/footer.twig */
class __TwigTemplate_b4d85e35fe26911683d4dcdc9c1f61d8 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "            <!-- Foter -->
            <footer class=\"small-section bg-dark footer\">
                <div class=\"container animate-init\" data-anim-type=\"bounce-in-up\" data-anim-delay=\"0\">
                    
                    <!-- Footer Text -->
                    <div class=\"footer-text\">
                        
                         <!-- Copyright -->
                        <div class=\"footer-copy\">
                            <a href=\"javascript:;\" target=\"_blank\">&copy; OfficinaSartoriale All rights reserved <span class=\"number\">2009-2015</span></a>.
                        </div>
                        <!-- End Copyright -->
                        
                        <div class=\"footer-made\">
                            ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "datifiscali"), "html", null, true);
        echo "
                        </div>
                        
                    </div>
                    <!-- End Footer Text -->
                    
                    <!-- Social Links -->
                    <div class=\"footer-social-links\">
                        <div class=\"social-links tooltip-bot\">
                            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "facebookpage"), "html", null, true);
        echo "\" title=\"Facebook\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                            <!--<a href=\"#\" title=\"Twitter\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\" title=\"Google+\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a>
                            <a href=\"#\" title=\"LinkedIn+\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                            <a href=\"#\" title=\"Pinterest\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>
                            <a href=\"#\" title=\"E-mail\" target=\"_blank\"><i class=\"fa fa-envelope\"></i></a>-->
                        </div>
                    </div>
                    <!-- End Social Links -->                    
                 
                 </div>
            </footer>
            <!-- End Foter -->";
    }

    public function getTemplateName()
    {
        return "snippets/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
