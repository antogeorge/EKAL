<?php

/* themes/custom/aljabr/templates/layout/social.html.twig */
class __TwigTemplate_f4f2b2046e0bbfa0b3a07ccfe4c1d6b01743138c974879d6bb834672b687e69c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"inner-content\">
    <div class=\"inner-banner\">
        <div class=\"row\">
            
            <div class=\"col-md-8\">
                
                <div class=\"red-strip\">
                    <div class=\"col-md-11 col-md-offset-1\">
                        ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top_block", array()), "html", null, true));
        echo "
                    </div>
                </div><!-- /.red-strip -->
                
                <div class=\"white-strip\">
                    <div class=\"col-md-11 col-md-offset-1\">
                        ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "middle_block", array()), "html", null, true));
        echo "
                        
                    </div>
                </div><!-- /.white-strip -->
\t\t\t\t
\t\t\t\t<div class=\"white-strip\">
                    <div class=\"col-md-11 col-md-offset-1\">
                        
                        ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bottom_block", array()), "html", null, true));
        echo "
                        
                    </div>
                </div><!-- /.white-strip -->
\t\t\t\t
            </div>
\t\t\t<div class=\"col-md-4\">";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "banner", array()), "html", null, true));
        echo "</div>
        </div>
    </div><!-- /.inner-banner -->
    


</div><!-- /.inner-content -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/aljabr/templates/layout/social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  73 => 23,  62 => 15,  53 => 9,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"inner-content\">
    <div class=\"inner-banner\">
        <div class=\"row\">
            
            <div class=\"col-md-8\">
                
                <div class=\"red-strip\">
                    <div class=\"col-md-11 col-md-offset-1\">
                        {{ content.top_block }}
                    </div>
                </div><!-- /.red-strip -->
                
                <div class=\"white-strip\">
                    <div class=\"col-md-11 col-md-offset-1\">
                        {{ content.middle_block }}
                        
                    </div>
                </div><!-- /.white-strip -->
\t\t\t\t
\t\t\t\t<div class=\"white-strip\">
                    <div class=\"col-md-11 col-md-offset-1\">
                        
                        {{ content.bottom_block }}
                        
                    </div>
                </div><!-- /.white-strip -->
\t\t\t\t
            </div>
\t\t\t<div class=\"col-md-4\">{{ content.banner }}</div>
        </div>
    </div><!-- /.inner-banner -->
    


</div><!-- /.inner-content -->", "themes/custom/aljabr/templates/layout/social.html.twig", "C:\\xampp\\htdocs\\aljabr\\themes\\custom\\aljabr\\templates\\layout\\social.html.twig");
    }
}
