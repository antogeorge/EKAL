<?php

/* {# inline_template_start #}<li><a data-toggle="modal" data-target="#{{ field_job_title }}" href="#">{{ field_job_label__value }}</a></li> */
class __TwigTemplate_9455fca141a6b3a45baf717fbe165c0233f99fb7abd2c8e3d4e3d571b9208566 extends Twig_Template
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
        echo "<li><a data-toggle=\"modal\" data-target=\"#";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_job_title"]) ? $context["field_job_title"] : null), "html", null, true));
        echo "\" href=\"#\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_job_label__value"]) ? $context["field_job_label__value"] : null), "html", null, true));
        echo "</a></li>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<li><a data-toggle=\"modal\" data-target=\"#{{ field_job_title }}\" href=\"#\">{{ field_job_label__value }}</a></li>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}<li><a data-toggle=\"modal\" data-target=\"#{{ field_job_title }}\" href=\"#\">{{ field_job_label__value }}</a></li>", "{# inline_template_start #}<li><a data-toggle=\"modal\" data-target=\"#{{ field_job_title }}\" href=\"#\">{{ field_job_label__value }}</a></li>", "");
    }
}
