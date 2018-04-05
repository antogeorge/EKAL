<?php

/* themes/custom/aljabr/templates/form/form--aljabr-mail.html.twig */
class __TwigTemplate_46f6667b3da2a87447f72161f0d67693f9e26c69f2652f00ef32e36319b50660 extends Twig_Template
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["subscribemail_header"]) ? $context["subscribemail_header"] : null), "html", null, true));
        echo "</h3>
<div class=\"career-box\">
<p> ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["subscribemail_body"]) ? $context["subscribemail_body"] : null), "html", null, true));
        echo "</p>

                    
<a href=\"#\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModalLong\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["subscribemail_button"]) ? $context["subscribemail_button"] : null), "html", null, true));
        echo "</a>            
       
<!-- subscribe mailing list popup : starts -->
<div class=\"modal fade\" id=\"exampleModalLong\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content offer-model-one\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["subscribemail_form_header"]) ? $context["subscribemail_form_header"] : null), "html", null, true));
        echo "</h5>
        
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div> 
      <div class=\"modal-body\">
         <div class=\"row\">
                  <div class=\"col-md-12\"><p> ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["subscribemail_form_body"]) ? $context["subscribemail_form_body"] : null), "html", null, true));
        echo " </p></div>
              </div>
\t\t\t  
\t\t\t<div data-alerts=\"alerts\"></div>
\t\t\t<form";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo " class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["form_class"]) ? $context["form_class"] : null), "html", null, true));
        echo "\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
\t\t\t\t</div>
\t\t\t</form>
      </div>
      
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/aljabr/templates/form/form--aljabr-mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  83 => 25,  76 => 21,  65 => 13,  55 => 6,  49 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/aljabr/templates/form/form--aljabr-mail.html.twig", "/home/ameencoi/public_html/aljabr.com/themes/custom/aljabr/templates/form/form--aljabr-mail.html.twig");
    }
}
