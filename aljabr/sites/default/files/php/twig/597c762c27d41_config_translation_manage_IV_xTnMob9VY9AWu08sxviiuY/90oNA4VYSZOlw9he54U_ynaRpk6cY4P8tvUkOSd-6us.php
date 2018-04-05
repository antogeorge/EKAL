<?php

/* core/themes/stable/templates/admin/config_translation_manage_form_element.html.twig */
class __TwigTemplate_26654b21d79c81b26d651d48928fb3c87cae6229f54a20d66c6b27186bcccba9 extends Twig_Template
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

        // line 14
        echo "<div class=\"translation-set clearfix\">
  <div class=\"layout-column layout-column--half translation-set__source\">
    ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "source", array()), "html", null, true));
        echo "
  </div>
  <div class=\"layout-column layout-column--half translation-set__translated\">
    ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "translation", array()), "html", null, true));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/config_translation_manage_form_element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  47 => 16,  43 => 14,);
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
 * Theme override for a form element in config_translation.
 *
 * Available variables:
 * - element: Array that represents the element shown in the form.
 *   - source: The source of the translation.
 *   - translation: The translation for the target language.
 *
 * @see template_preprocess()
 */
#}
<div class=\"translation-set clearfix\">
  <div class=\"layout-column layout-column--half translation-set__source\">
    {{ element.source }}
  </div>
  <div class=\"layout-column layout-column--half translation-set__translated\">
    {{ element.translation }}
  </div>
</div>
", "core/themes/stable/templates/admin/config_translation_manage_form_element.html.twig", "C:\\xampp\\htdocs\\aljabr\\core\\themes\\stable\\templates\\admin\\config_translation_manage_form_element.html.twig");
    }
}
