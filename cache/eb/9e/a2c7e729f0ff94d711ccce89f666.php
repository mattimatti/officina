<?php

/* snippets/galleria1.twig */
class __TwigTemplate_eb9ea2c7e729f0ff94d711ccce89f666 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Fullwidth Slider -->
            <div class=\"fullwidth-slider owl-carousel bg-dark\">
                
                <!-- Slide Item -->
                <section class=\"page-section bg-scroll bg-dark-alfa-50\" data-background=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["media_path"]) ? $context["media_path"] : null), "html", null, true);
        echo "/custom/10.jpg\">
                    <div class=\"container relative\">
                        <div class=\"align-center animate-init\" data-anim-type=\"bounce-in\" data-anim-delay=\"100\">
                           
                            <div class=\"sub-heading\">
                                Mauris vel velit molestie pellentesque
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Slide Item -->
                
                <section class=\"page-section bg-scroll bg-dark-alfa-50\" data-background=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["media_path"]) ? $context["media_path"] : null), "html", null, true);
        echo "/custom/11.jpg\">
                    <div class=\"container relative\">
                        <div class=\"align-center\">
                            <div class=\"sub-heading\">
                               Donec rutrum, tortor ut elementum venenatis. 
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Slide Item -->
                
                <!-- Slide Item -->
                <section class=\"page-section bg-scroll bg-dark-alfa-50\" data-background=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["media_path"]) ? $context["media_path"] : null), "html", null, true);
        echo "/custom/12.jpg\">
                    <div class=\"container relative\">
                        <div class=\"align-center\">
                            <div class=\"sub-heading\">
                               Phasellus facilisis mauris vel velit molestie pellentesque
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Slide Item -->
                
            </div>
            <!-- End Fullwidth Slider -->";
    }

    public function getTemplateName()
    {
        return "snippets/galleria1.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
