<?php

/* {# inline_template_start #}<div class="modal fade" id="{{ field_job_title }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">{{ field_job_description }}</div> */
class __TwigTemplate_3d7caaf37d63f6c6da808505f99434b8b552969290a972eef236e969e2db83b4 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_job_title"]) ? $context["field_job_title"] : null), "html", null, true));
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_job_description"]) ? $context["field_job_description"] : null), "html", null, true));
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"modal fade\" id=\"{{ field_job_title }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">{{ field_job_description }}</div>";
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
        return new Twig_Source("{# inline_template_start #}<div class=\"modal fade\" id=\"{{ field_job_title }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">{{ field_job_description }}</div>", "{# inline_template_start #}<div class=\"modal fade\" id=\"{{ field_job_title }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">{{ field_job_description }}</div>", "");
    }
}
