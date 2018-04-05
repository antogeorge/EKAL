<?php

/* themes/custom/aljabr/templates/form/container.html.twig */
class __TwigTemplate_5d257b1a9ca9d48ba963113135b2e13c03d99987a0cb6ee70c338a4c83196163 extends Twig_Template
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
        $tags = array("set" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
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

        // line 23
        $context["classes"] = array(0 => ((        // line 24
(isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("js-form-wrapper") : ("")), 1 => ((        // line 25
(isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("form-wrapper") : ("")));
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/aljabr/templates/form/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 28,  45 => 25,  44 => 24,  43 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/aljabr/templates/form/container.html.twig", "/home/ameencoi/public_html/aljabr.com/themes/custom/aljabr/templates/form/container.html.twig");
    }
}
