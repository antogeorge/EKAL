<?php

/* themes/custom/aljabr/templates/layout/offer.html.twig */
class __TwigTemplate_1a10bd6914fdd1e2776a7eaf2a66db06d086558379fb6e027d03dcdfe04303b1 extends Twig_Template
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
                
                <div class=\"red-strip\">
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
            
            <div class=\"col-md-8 col-sm-4 col-xs-12 offers-slider\">
                <div id=\"offers\">
                    ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slider_block", array()), "html", null, true));
        echo "
                    
                </div><!-- /.latest-jobs -->
            </div>
\t\t\t
\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-12\">
\t\t\t\t
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comments_form_block", array()), "html", null, true));
        echo "
\t\t\t\t
\t\t\t\t";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subscribe_mail_block", array()), "html", null, true));
        echo "

<!-- subscribe mailing list : ends -->
                    
                    
                    
                </div><!-- /.career-box -->
            </div>
\t\t\t
\t\t\t ";
        // line 43
        echo "        </div>
    </div>

</div><!-- /.inner-content -->
";
    }

    public function getTemplateName()
    {
        return "themes/custom/aljabr/templates/layout/offer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 43,  89 => 33,  84 => 31,  74 => 24,  61 => 14,  52 => 8,  43 => 1,);
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
                
                <div class=\"red-strip\">
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
            
            <div class=\"col-md-8 col-sm-4 col-xs-12 offers-slider\">
                <div id=\"offers\">
                    {{ content.slider_block }}
                    
                </div><!-- /.latest-jobs -->
            </div>
\t\t\t
\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-12\">
\t\t\t\t
\t\t\t\t{{ content.comments_form_block }}
\t\t\t\t
\t\t\t\t{{ content.subscribe_mail_block }}

<!-- subscribe mailing list : ends -->
                    
                    
                    
                </div><!-- /.career-box -->
            </div>
\t\t\t
\t\t\t {# content.side_block #}
        </div>
    </div>

</div><!-- /.inner-content -->
", "themes/custom/aljabr/templates/layout/offer.html.twig", "C:\\xampp\\htdocs\\aljabr\\themes\\custom\\aljabr\\templates\\layout\\offer.html.twig");
    }
}
