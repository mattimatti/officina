<?php

/* snippets/team.twig */
class __TwigTemplate_f68d42ec6dd18f53485bfae3f3fce6b8 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Team Section -->
            <section class=\"page-section\" id=\"team\">
                <div class=\"container relative\">
                    
                    <!-- Section Headings -->
                    <div class=\"row\">
                        <div class=\"col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2\">
                            <h3 class=\"small-title\">
                                Chi <span class=\"serif\">siamo<span><span class=\"st-point\">?</span>
                            </h3>
                             <div class=\"section-line mt-20 mb-30\"></div>

                            <div class=\"section-heading\">Officina Sartoriale nasce a Pistoia da un'idea dal sarto Nicola Verdiani che insieme a Stefano Meriggi, imprenditore milanese nel campo della moda, hanno deciso di allargare i propri orizzonti sbarcando a Milano.</div>
                            <div class=\"section-line mb-60 mb-xxs-30\"></div>
                        </div>
                    </div>
                    <!-- End Section Headings -->
                    
                    <!-- Team Grid -->
                    <div class=\"team-grid\">
                        <!-- Team Item -->
                        <div class=\"team-item animate-init\" data-anim-type=\"fade-in\" data-anim-delay=\"100\">
                            <div class=\"team-item-image\">
                               <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team1"), "image"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"team-item-detail\">
                                    <h4 class=\"serif\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team1"), "hello"), "html", null, true);
        echo "</h4>
                                   ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team1"), "hellotext"), "html", null, true);
        echo "  
                                </div>
                            </div>
                            <div class=\"team-item-descr\">
                                <div class=\"team-item-name\">
                                    ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team1"), "namesurname"), "html", null, true);
        echo "
                                </div>
                                <div class=\"team-item-role\">
                                     ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team1"), "title"), "html", null, true);
        echo "
                                </div>
                                <div class=\"team-social-links\">
                                     ";
        // line 38
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team1"), "facebook") != "")) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team1"), "facebook"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>";
        }
        // line 39
        echo "                                     ";
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team1"), "twitter") != "")) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team1"), "twitter"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>";
        }
        // line 40
        echo "                                     ";
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team1"), "pinterest") != "")) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team1"), "pinterest"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>";
        }
        // line 41
        echo "                                </div>
                            </div>
                        </div>
                        <!-- End Team Item -->
                        
                        <!-- Team Item -->
                        <div class=\"team-item animate-init\" data-anim-type=\"fade-in\" data-anim-delay=\"200\">
                            <div class=\"team-item-image\">
                                <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team2"), "image"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"team-item-detail\">
                                    <h4 class=\"serif\"> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team2"), "hello"), "html", null, true);
        echo " </h4>
                                   ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team2"), "hellotext"), "html", null, true);
        echo " 
                                </div>
                            </div>
                            <div class=\"team-item-descr\">
                                <div class=\"team-item-name\">
                                   ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team2"), "namesurname"), "html", null, true);
        echo "
                                </div>
                                <div class=\"team-item-role\">
                                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team2"), "title"), "html", null, true);
        echo "
                                </div>
                                <div class=\"team-social-links\">
                                    ";
        // line 63
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team2"), "facebook") != "")) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team2"), "facebook"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>";
        }
        // line 64
        echo "                                     ";
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team2"), "twitter") != "")) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team2"), "twitter"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>";
        }
        // line 65
        echo "                                     ";
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team2"), "pinterest") != "")) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "team2"), "pinterest"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>>";
        }
        // line 66
        echo "                                </div>
                            </div>
                        </div>
                        <!-- End Team Item -->
                        
                        
                        
                    </div>
                    <!-- End Team Grid -->
                    
                </div>
            </section>
            <!-- End Team Section -->";
    }

    public function getTemplateName()
    {
        return "snippets/team.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
