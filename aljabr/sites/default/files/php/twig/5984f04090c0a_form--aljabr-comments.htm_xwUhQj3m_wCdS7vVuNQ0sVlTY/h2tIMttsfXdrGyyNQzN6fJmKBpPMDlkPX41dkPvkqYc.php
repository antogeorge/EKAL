<?php

/* themes/custom/aljabr/templates/form/form--aljabr-comments.html.twig */
class __TwigTemplate_ea85ee45bad7419e71b944142f498ac36c94e496de4bbcb5c53925029adc1cea extends Twig_Template
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
        echo "<h3>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["comments_header"]) ? $context["comments_header"] : null), "html", null, true));
        echo "</h3>
<div class=\"career-box\">
\t<p>";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["comments_body"]) ? $context["comments_body"] : null), "html", null, true));
        echo "</p>
                    
<a href=\"#\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleComments\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["comments_button"]) ? $context["comments_button"] : null), "html", null, true));
        echo "</a>

<div class=\"modal fade\" id=\"exampleComments\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content offer-model-one\">
\t
<div class=\"modal-header\">
\t<h5 class=\"modal-title\" id=\"exampleModalLongTitle\">";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["comments_form_header"]) ? $context["comments_form_header"] : null), "html", null, true));
        echo "</h5>
\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t<span aria-hidden=\"true\">&times;</span>
\t</button>
</div> 
\t  
<div class=\"modal-body\">
<div class=\"row\">
  <div class=\"col-md-12\"><p> ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["comments_form_body"]) ? $context["comments_form_body"] : null), "html", null, true));
        echo " </p></div>
</div>
<!--<div data-alerts=\"alerts\"  data-fade=\"18000\"></div>-->
<div data-alerts=\"alerts\"></div>
<form";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo " class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["form_class"]) ? $context["form_class"] : null), "html", null, true));
        echo "\">
\t<div class=\"row\">
\t\t";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
\t</div>
</form>
</div>
    </div>
  </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/aljabr/templates/form/form--aljabr-comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  82 => 24,  75 => 20,  64 => 12,  54 => 5,  49 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/aljabr/templates/form/form--aljabr-comments.html.twig", "/home/ameencoi/public_html/aljabr.com/themes/custom/aljabr/templates/form/form--aljabr-comments.html.twig");
    }
}
