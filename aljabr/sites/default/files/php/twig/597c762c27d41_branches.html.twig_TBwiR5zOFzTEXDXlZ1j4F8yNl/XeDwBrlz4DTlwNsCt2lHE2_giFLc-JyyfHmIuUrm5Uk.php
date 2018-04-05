<?php

/* themes/custom/aljabr/templates/layout/branches.html.twig */
class __TwigTemplate_2a486d9b2761c8bf726199e9ffc40628f17de41bdf2872aacfa29bb911f5413f extends Twig_Template
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
        echo "<div class=\"inner-banner red-strip\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                
            <div class=\"red-strip career\">
                    <div class=\"col-md-11 col-md-offset-1\">
                        ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top_block", array()), "html", null, true));
        echo "
                    </div>
                </div><!-- /.red-strip -->
                
                
            </div>
\t\t\t
            <div class=\"col-md-4\"> ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "banner", array()), "html", null, true));
        echo " </div>

        </div>
    </div><!-- /.inner-banner -->
    <div class=\"inner-content\" style=\"padding-top:0;\">
    <div class=\"map\">
\t\t<div id=\"map\"></div>

        <div class=\"map-info\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-4 col-xs-8 hm-map\">
                        <span> 
                            
\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "branches_form", array()), "html", null, true));
        echo "
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t</span> 
\t\t\t\t\t</div>
                </div>
            </div>
        </div><!-- /.map-info -->
    </div><!-- /.map -->
    
    
    
    <div class=\"container\">
        <div class=\"row\">
\t\t

\t\t\t
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contact_text", array()), "html", null, true));
        echo "
            </div>
            
            
        </div>
        
    </div>

</div><!-- /.inner-content -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/aljabr/templates/layout/branches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 46,  78 => 28,  61 => 14,  51 => 7,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"inner-banner red-strip\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                
            <div class=\"red-strip career\">
                    <div class=\"col-md-11 col-md-offset-1\">
                        {{ content.top_block }}
                    </div>
                </div><!-- /.red-strip -->
                
                
            </div>
\t\t\t
            <div class=\"col-md-4\"> {{ content.banner }} </div>

        </div>
    </div><!-- /.inner-banner -->
    <div class=\"inner-content\" style=\"padding-top:0;\">
    <div class=\"map\">
\t\t<div id=\"map\"></div>

        <div class=\"map-info\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-4 col-xs-8 hm-map\">
                        <span> 
                            
\t\t\t\t\t\t\t{{ content.branches_form }}
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t</span> 
\t\t\t\t\t</div>
                </div>
            </div>
        </div><!-- /.map-info -->
    </div><!-- /.map -->
    
    
    
    <div class=\"container\">
        <div class=\"row\">
\t\t

\t\t\t
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t{{ content.contact_text }}
            </div>
            
            
        </div>
        
    </div>

</div><!-- /.inner-content -->", "themes/custom/aljabr/templates/layout/branches.html.twig", "C:\\xampp\\htdocs\\aljabr\\themes\\custom\\aljabr\\templates\\layout\\branches.html.twig");
    }
}
