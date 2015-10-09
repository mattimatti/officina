<?php

/* snippets/home.twig */
class __TwigTemplate_6be64eb469876e8d058ec2890a1c56f1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <!-- Home Section -->
            <section class=\"home-section bg-dark-alfa-30 parallax-3\" data-background=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["media_path"]) ? $context["media_path"] : null), "html", null, true);
        echo "/custom/bghome.jpg\" id=\"home\">
                <div class=\"js-height-full\">
                    
                    <!-- Home Page Content -->
                    <div class=\"home-content container\">
                        <div class=\"home-text animate-init\" data-anim-type=\"fade-in-right-big\" data-anim-delay=\"100\">
                            <div class=\"container align-left\">
                                
                                <!-- Headings -->
                                
                      
                                <div class=\"hs-line-7\">
                                    <h1>Officina <span class=\"serif\">Sartoriale</span></h1>
                                </div>
                                
                                <div class=\"hs-line-8\">
                                    <h4 class=\"serif\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subheader"), "html", null, true);
        echo "</h4>
                                </div>
                                
                                
                                <!-- End Headings -->
                                
                            </div>
                        </div>
                    </div>
                    <!-- End Home Page Content -->
                    
                    <!-- Scroll Down -->
                    <div class=\"local-scroll\">
                        <a href=\"#concetto\" class=\"scroll-down\"><i class=\"scroll-down-icon\"></i><span>Scoprici</span></a>
                    </div>
                    <!-- End Scroll Down -->
                    
                </div>
            </section>
            <!-- End Home Section -->";
    }

    public function getTemplateName()
    {
        return "snippets/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
