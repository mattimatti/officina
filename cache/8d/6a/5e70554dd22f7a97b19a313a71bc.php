<?php

/* snippets/contact.twig */
class __TwigTemplate_8d6a5e70554dd22f7a97b19a313a71bc extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "            <!-- Contact Section -->
            <section class=\"page-section bg-scroll bg-dark-alfa-90\" data-background=\"custom/11.jpg\" id=\"contact\">
                <div class=\"container relative\">
                    
                    <div class=\"row\">
                        
                        <!-- Contact Info -->
                        <div class=\"col-md-6\">
                            
                            <!-- Phone -->
                            <div class=\"contact-item contact-item-right mb-40 mb-md-20\">
                                
                                <!-- Icon -->
                                <div class=\"ci-icon\">
                                    <i class=\"fa fa-phone\"></i>
                                </div>
                                
                                <div class=\"ci-title\">Pistoia</div>
                                
                                <div class=\"ci-phone\"><a href=\"tel:";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pistoia"), "phone"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pistoia"), "phone"), "html", null, true);
        echo "</a></div>
                                
                            </div>
                            <!-- End Phone -->
                            
                            <!-- Address -->
                            <div class=\"contact-item contact-item-right mb-40 mb-md-20\">
                                
                                <!-- Icon -->
                                <div class=\"ci-icon\">
                                    <i class=\"fa fa-map-marker\"></i>
                                </div>
                                
                                
                                <div class=\"ci-text\">via Tomba di Catilina, 8 <br/>Pistoia </div>
                                
                            </div>
                            <!-- End Address -->
                            
                            <!-- Email -->
                            <div class=\"contact-item contact-item-right mb-md-40\">
                                
                                <!-- Icon -->
                                <div class=\"ci-icon\">
                                    <a href=\"mailto:";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pistoia"), "email"), "html", null, true);
        echo "\">
                                        <i class=\"fa fa-envelope\"></i>
                                    </a>
                                </div>
                                
                                <div class=\"ci-title\">EMAIL</div>
                                
                                <div class=\"ci-text\"><a href=\"mailto:";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pistoia"), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pistoia"), "email"), "html", null, true);
        echo "</a></div>
                                
                            </div>
                            <!-- End Email -->
                            
                        </div>
                        <!-- End Contact Info -->
                        
                        
                        <div class=\"col-md-6\">
                            
                             <!-- Phone -->
                            <div class=\"contact-item contact-item-left mb-40 mb-md-20\">
                                

                                
                                <div class=\"ci-title\">Milano</div>
                                
                                <div class=\"ci-phone\"><a href=\"tel:";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "milano"), "phone"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "milano"), "phone"), "html", null, true);
        echo "</a></div>
                              
                                <!-- Icon -->
                                <div class=\"ci-icon\">
                                    <i class=\"fa fa-phone\"></i>
                                </div>

                            </div>
                            <!-- End Phone -->
                            
                            <!-- Address -->
                            <div class=\"contact-item contact-item-left mb-40 mb-md-20\">
                                
                                <!-- Icon -->
                                <div class=\"ci-icon\">
                                    <i class=\"fa fa-map-marker\"></i>
                                </div>
                   
                                <div class=\"ci-text\">Foro Buonaparte 54<br/>Milano</div>
                                
                            </div>
                            <!-- End Address -->
                            
                            <!-- Email -->
                            <div class=\"contact-item contact-item-left mb-md-40\">
                                
                                <!-- Icon -->
                                <div class=\"ci-icon\">
                                    <a href=\"mailto:";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "milano"), "email"), "html", null, true);
        echo "\">
                                        <i class=\"fa fa-envelope\"></i>
                                    </a>
                                </div>
                                
                                <div class=\"ci-title\">EMAIL</div>
                                
                                <div class=\"ci-text\"><a href=\"mailto:";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "milano"), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "milano"), "email"), "html", null, true);
        echo "</a></div>
                                
                            </div>
                            <!-- End Email -->
                            
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Contact Section -->";
    }

    public function getTemplateName()
    {
        return "snippets/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
