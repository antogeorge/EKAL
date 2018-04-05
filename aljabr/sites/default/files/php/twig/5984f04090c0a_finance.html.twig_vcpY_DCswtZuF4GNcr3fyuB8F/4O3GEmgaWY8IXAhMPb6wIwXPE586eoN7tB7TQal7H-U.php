<?php

/* themes/custom/aljabr/templates/layout/finance.html.twig */
class __TwigTemplate_821e8c9b7a29d58d9b381c81c7555dad7ec8744dfcc61b37b87c2838a1732dbc extends Twig_Template
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
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top_block", array()), "html", null, true));
        echo "
                </div>
            </div><!-- /.red-strip -->


        </div>
\t\t<div class=\"col-md-4\">";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "banner", array()), "html", null, true));
        echo "</div>
    </div>
</div><!-- /.inner-banner -->
<div class=\"inner-content\" style=\"padding-top:0;\">
\t";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "form_block", array()), "html", null, true));
        echo "
    
</div><!-- /.inner-content -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/aljabr/templates/layout/finance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  60 => 13,  51 => 7,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/aljabr/templates/layout/finance.html.twig", "/home/ameencoi/public_html/aljabr.com/themes/custom/aljabr/templates/layout/finance.html.twig");
    }
}
