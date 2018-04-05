<?php

/* core/themes/stable/templates/content-edit/filter-guidelines.html.twig */
class __TwigTemplate_0abb895f9f9d234fabeeff4f276ae416245060bded6bdc1cf4b205532546b944 extends Twig_Template
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

        // line 20
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  <h4>";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["format"]) ? $context["format"] : null), "label", array()), "html", null, true));
        echo "</h4>
  ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["tips"]) ? $context["tips"] : null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/content-edit/filter-guidelines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 22,  48 => 21,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override for guidelines for a text format.
 *
 * Available variables:
 * - format: Contains information about the current text format, including the
 *   following:
 *   - name: The name of the text format, potentially unsafe and needs to be
 *     escaped.
 *   - format: The machine name of the text format, e.g. 'basic_html'.
 * - attributes: HTML attributes for the containing element.
 * - tips: Descriptions and a CSS ID in the form of 'module-name/filter-id'
 *   (only used when 'long' is TRUE) for each filter in one or more text
 *   formats.
 *
 * @see template_preprocess_filter_tips()
 */
#}
<div{{ attributes }}>
  <h4>{{ format.label }}</h4>
  {{ tips }}
</div>
", "core/themes/stable/templates/content-edit/filter-guidelines.html.twig", "C:\\xampp\\htdocs\\aljabr\\core\\themes\\stable\\templates\\content-edit\\filter-guidelines.html.twig");
    }
}
