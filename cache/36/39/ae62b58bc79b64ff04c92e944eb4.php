<?php

/* snippets/concetticarousel.twig */
class __TwigTemplate_3639ae62b58bc79b64ff04c92e944eb4 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "             <!-- Concetto Section -->
            <section class=\"page-section bg-scroll\" data-background=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["media_path"]) ? $context["media_path"] : null), "html", null, true);
        echo "/custom/17.jpg\">
                <div class=\"container relative\">
                    
                    <!-- Features Grid -->
                    <div class=\"item-carousel owl-carousel animate-init\" data-anim-type=\"bounce-in-right-large\" data-anim-delay=\"200\">
                        
                        <!-- Features Item -->
                        <div class=\"features-item\">

                            <div class=\"features-title\">
                                100% FILIERA ITALIANA
                            </div>
                            <div class=\"features-descr\">
                                Non servono etichette
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class=\"features-item\">

                            <div class=\"features-title\">
                                 SENZA INTERMEDIARI
                            </div>
                            <div class=\"features-descr\">
                                Siamo noi e i nostri artigiani
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class=\"features-item\">

                            <div class=\"features-title\">
                               KILOMETRO ZERO
                            </div>
                            <div class=\"features-descr\">
                                Creati nel nostro bel paese
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                       
                        
                    </div>
                    <!-- Features Grid -->
                </div>
            </section>
            <!-- Concetto Section -->";
    }

    public function getTemplateName()
    {
        return "snippets/concetticarousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
