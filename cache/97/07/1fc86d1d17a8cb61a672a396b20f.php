<?php

/* snippets/testimonial2.twig */
class __TwigTemplate_97071fc86d1d17a8cb61a672a396b20f extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "           <!-- Fullwidth Slider -->
            <div class=\"fullwidth-slider owl-carousel bg-dark\" id=\"gallery\">
                
                <!-- Slide Item -->
                <section class=\"page-section bg-scroll bg-dark\" data-background=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["media_path"]) ? $context["media_path"] : null), "html", null, true);
        echo "/custom/20.jpg\">
                  <div style=\"height:400px;\">
                          <div class=\"section-title\">
                                Con le mani..
                            </div>
                        </div>
                </section>
                <!-- End Slide Item -->
                
                <section class=\"page-section bg-scroll bg-dark\" data-background=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["media_path"]) ? $context["media_path"] : null), "html", null, true);
        echo "/custom/21.jpg\">
                   <div style=\"height:400px;\">
                          
                        </div>
                </section>
                <!-- End Slide Item -->
                
                <!-- Slide Item -->
                <section class=\"page-section bg-scroll bg-dark\" data-background=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["media_path"]) ? $context["media_path"] : null), "html", null, true);
        echo "/custom/22.jpg\">
                    <div style=\"height:400px;\">
                          
                        </div>
                </section>
                <!-- End Slide Item -->

                 <!-- Slide Item -->
                <section class=\"page-section bg-scroll\" data-background=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["media_path"]) ? $context["media_path"] : null), "html", null, true);
        echo "/custom/23.jpg\">
                    <div style=\"height:400px;\">
                          
                        </div>
                </section>
                <!-- End Slide Item -->
                
            </div>
            <!-- End Fullwidth Slider -->";
    }

    public function getTemplateName()
    {
        return "snippets/testimonial2.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
