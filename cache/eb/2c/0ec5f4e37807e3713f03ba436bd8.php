<?php

/* snippets/concetto.twig */
class __TwigTemplate_eb2c0ec5f4e37807e3713f03ba436bd8 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Concetto Slider -->
            <div class=\"fullwidth-slider owl-carousel bg-dark\" id=\"concetto\">
                
                <!-- Slide Item -->
                <section class=\"page-section bg-scroll bg-light-alfa-90\" data-background=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["media_path"]) ? $context["media_path"] : null), "html", null, true);
        echo "/custom/10.jpg\">
                    <div class=\"container relative\">
                        
                        <div class=\"row\">
                            
                            <div class=\"col-md-6 col-lg-6 mb-sm-40 animate-init\" data-anim-type=\"fade-in-right-big\" data-anim-delay=\"100\">
                                
                                <!-- Definizione Officina -->
                                <div class=\"text\">
                                    <h3><span class=\"uppercase\">Officina</span> <span class=\"serif\">[Of-fi-cì-na]</span></h3>
                                    
                                    
                                    <p>
                                       
<span class=\"serif\">s.f. 1 (lett.)</span> bottega, laboratorio di un artista | <span class=\"serif\">(fig.)</span> ambiente in cui si producono opere artistiche, letterarie, scientifiche; centro di propulsione di attività intellettuali, spirituali.

                                    </p>
                                    
                                  
                                    
                                </div>
                                <!-- End Definizione Officina -->
                                
                            </div>
                            
                            <div class=\"col-md-6 col-lg-6 mb-sm-40 animate-init\" data-anim-type=\"fade-in-left-big\" data-anim-delay=\"100\">
                                
                                <!-- About Project -->
                                <div class=\"text\">
                                    <h3 class=\"uppercase\">sartoriale</h3>
                                   
                                    
                                    <p>
                                       <span class=\"serif\">agg. 1</span> che concerne la sartoria, l'attività dei sarti.
                                    </p>
                                    
                                    
                                </div>
                                <!-- End About Project -->
                                
                            </div>
                            
                        </div> 

                        <div class=\"row hidden\">
                            <div class=\"col-md-12 col-lg-12 mb-sm-60 animate-init\" data-anim-type=\"fade-in-bottom-big\" data-anim-delay=\"100\">
                                <div class=\"section-heading\">
                                L'unione di sostantivo e aggettivo nel marchio %u201COfficinaSartoriale%u201D, rappresentato oggi dai suoi abiti e camicie su misura, è garanzia di competenza e ricerca nel rispetto della tradizione sartoriale italiana.
                                </div> 
                            </div> 
                         </div> 
                          
                    </div>
                </section>
                <!-- End Slide Item -->
                
               
                
            </div>
            <!-- End Concetto Slider -->";
    }

    public function getTemplateName()
    {
        return "snippets/concetto.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
