<?php

/* themes/custom/aljabr/templates/layout/career.html.twig */
class __TwigTemplate_2f7962629a96e28abacc974ffb2f54c05f258f6167b76adebca3ff15c8d57376 extends Twig_Template
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
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top_block", array()), "html", null, true));
        echo "
                    </div>
                </div><!-- /.red-strip -->
                
                
            </div>
\t\t\t<div class=\"col-md-4\">";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "banner", array()), "html", null, true));
        echo "</div>
        </div>
</div><!-- /.inner-banner -->

<div class=\"inner-content\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-3 col-sm-3 col-xs-12\">

       
\t\t\t\t\t<!-- subscribe mailing list popup : starts -->
\t\t\t\t\t<div class=\"modal fade\" id=\"submit-popup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
\t\t\t\t\t  <div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content offer-model-one\">
\t\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t  <span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t  </div> 
\t\t\t\t\t\t  <div class=\"modal-body career-popup jobs-details\">
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "form_block", array()), "html", null, true));
        echo "
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- pop list : ends -->
                    

<div class=\"clearfix\"></div>

             
            </div>
\t\t\t
\t\t\t
            <div class=\"col-md-8 col-sm-4 col-xs-12\">
                <div class=\"latest-jobs\">
\t\t\t\t
                    ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "table_block", array()), "html", null, true));
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "job_block", array()), "html", null, true));
        echo "
                    
                </div><!-- /.latest-jobs -->
            </div>
            
            
        </div>
        
    </div>

</div><!-- /.inner-content -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/aljabr/templates/layout/career.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 58,  109 => 56,  87 => 37,  61 => 14,  52 => 8,  43 => 1,);
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
\t\t\t<div class=\"col-md-4\">{{ content.banner }}</div>
        </div>
</div><!-- /.inner-banner -->

<div class=\"inner-content\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-3 col-sm-3 col-xs-12\">

       
\t\t\t\t\t<!-- subscribe mailing list popup : starts -->
\t\t\t\t\t<div class=\"modal fade\" id=\"submit-popup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
\t\t\t\t\t  <div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content offer-model-one\">
\t\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t  <span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t  </div> 
\t\t\t\t\t\t  <div class=\"modal-body career-popup jobs-details\">
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t{{ content.form_block }}
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- pop list : ends -->
                    

<div class=\"clearfix\"></div>

             
            </div>
\t\t\t
\t\t\t
            <div class=\"col-md-8 col-sm-4 col-xs-12\">
                <div class=\"latest-jobs\">
\t\t\t\t
                    {{ content.table_block }}
\t\t\t\t\t
\t\t\t\t\t{{ content.job_block }}
                    
                </div><!-- /.latest-jobs -->
            </div>
            
            
        </div>
        
    </div>

</div><!-- /.inner-content -->", "themes/custom/aljabr/templates/layout/career.html.twig", "C:\\xampp\\htdocs\\aljabr\\themes\\custom\\aljabr\\templates\\layout\\career.html.twig");
    }
}
