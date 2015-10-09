<?php

/* snippets/testimonial.twig */
class __TwigTemplate_69a331ff71098b9b6f459a67548e1a1e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "testimonial1"), "text") != "")) {
            // line 2
            echo "           <!-- Testimonial Section -->
            <section class=\"small-section\">
                <div class=\"container relative\">                    
                    
                    <div class=\"row\">
                        <div class=\"col-md-8 col-md-offset-2\">
                            
                          
                            <!-- Section Title -->
                            <h3 class=\"small-title\"><span class=\"serif\">Dicono di</span> noi:</h3>
                            
                            <div class=\"section-line mt-20 mb-30\"></div>
                            
                             ";
            // line 15
            if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "testimonial1"), "text") != "")) {
                // line 16
                echo "                            <!-- Slider -->
                            <div class=\"single-carousel black owl-carousel\">
                                
                                <!-- Slider Item -->
                                <div>
                                    <blockquote class=\"testimonial\">
                                       ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "testimonial1"), "text"), "html", null, true);
                echo "
                                    </blockquote>
                                    
                                    <!-- Author -->
                                    <div class=\"testimonial-author\">
                                         ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "testimonial1"), "referrer"), "html", null, true);
                echo "
                                    </div>
                                </div>
                                <!-- End Slider Item -->
                                
                                 ";
            }
            // line 33
            echo "                                
                                
                                 ";
            // line 35
            if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "testimonial2"), "text") != "")) {
                // line 36
                echo "                                <!-- Slider Item -->
                                <div>
                                    <blockquote class=\"testimonial\">
                                        ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "testimonial2"), "text"), "html", null, true);
                echo "
                                    </blockquote>
                                    
                                    <!-- Author -->
                                    <div class=\"testimonial-author\">
                                        ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "testimonial2"), "referrer"), "html", null, true);
                echo "
                                    </div>
                                </div>
                                <!-- End Slider Item -->
                                
                                 ";
            }
            // line 50
            echo "                                
                                   ";
            // line 51
            if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "testimonial3"), "text") != "")) {
                // line 52
                echo "                                <!-- Slider Item -->
                                <div>
                                    <blockquote class=\"testimonial\">
                                        ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "testimonial3"), "text"), "html", null, true);
                echo "
                                    </blockquote>
                                    
                                    <!-- Author -->
                                    <div class=\"testimonial-author\">
                                        ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "testimonial3"), "referrer"), "html", null, true);
                echo "
                                    </div>
                                </div>
                                <!-- End Slider Item -->
                                 ";
            }
            // line 65
            echo "                                
                            </div>
                            <!-- Ent Slider -->
                            
                        </div>
                    </div>                    
                    
                </div>
            </section>
            <!-- End Testimonial Section -->
            ";
        }
    }

    public function getTemplateName()
    {
        return "snippets/testimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
