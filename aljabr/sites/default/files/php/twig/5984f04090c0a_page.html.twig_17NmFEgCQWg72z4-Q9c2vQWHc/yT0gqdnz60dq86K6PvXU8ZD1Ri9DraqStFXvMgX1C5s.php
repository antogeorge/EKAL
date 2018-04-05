<?php

/* themes/custom/aljabr/templates/layout/page.html.twig */
class __TwigTemplate_e4596dd5b5c91b8ba29e374a6bf691db45791206938c75f2b7e9ce7855f8d36c extends Twig_Template
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
        $tags = array("if" => 49);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 49
        if (((isset($context["rtl"]) ? $context["rtl"] : null) == true)) {
            // line 50
            echo "  <body class=\"arabic\">
";
        } else {
            // line 52
            echo "  <body>
";
        }
        // line 54
        echo "
<div class=\"header\">
  <div class=\"top-strip\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-xs-12\"> 
          
          <!-- Single button -->
\t\t   <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span class=\"caret\"></span> Contact us  </button>
                <ul class=\"dropdown-menu\" id=\"red-dropdown-menu\">
                    <li><a href=\"#\"> <p><span> الادارة العامة: </span>• <br> مبنى بوابة الاعمال<br>   طريق الملك فهد - الدمام </p></a></li>
                    <li><a href=\"#\"> <p><span> اتصل بنا: •<br>  920005772</span></p> </a></li>
                    <li><a href=\"#\"> <p><span> اشترك في النشرة البريدية</span>•</p> </a></li>
                    <li><a href=\"#\"> <p><span> الشكاوى</span>•</p> </a></li>

                </ul>
            </div>
\t\t      ";
        // line 72
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "switchthelang", array())) {
            // line 73
            echo "                       ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "switchthelang", array()), "html", null, true));
            echo "
              ";
        }
        // line 75
        echo "\t\t\t  
          
          <!--/. language --> 
        </div>
      </div>
    </div>
  </div>
  <!-- /.top-strip -->
  
  <div class=\"menu-strip\">
    <div class=\"container\">
      <div class=\"row\">
\t  
\t  \t<!-- Al-Jabr logo start -->
\t\t<!-- ar
        <div class=\"logo col-md-2 col-xs-12\"> -->
\t\t<div class=\"logo col-md-1 col-xs-12\">
\t\t  ";
        // line 92
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "sitebranding", array())) {
            // line 93
            echo "\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "sitebranding", array()), "html", null, true));
            echo "
\t\t  ";
        }
        // line 95
        echo "\t\t\t
\t\t</div>
\t\t<!-- Al-Jabr logo end -->
\t\t
\t\t<!-- main navigation start -->
\t\t<!-- ar
        <div class=\"menu col-md-9 col-xs-12\">-->
\t\t<div class=\"menu col-md-offset-1 col-md-9 col-xs-12\">
          <div class=\"navContainer\">
            <div class=\"section group\" id=\"menu\">
              ";
        // line 105
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "aljabrmenurtl", array())) {
            // line 106
            echo "                       ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "aljabrmenurtl", array()), "html", null, true));
            echo "
              ";
        }
        // line 108
        echo "            </div>
          </div>
        </div>
\t\t<!-- main navigation end -->
        
\t    <!-- social media menu start -->
\t\t<!-- ar 
        <div class=\"top-social col-md-1 col-xs-12\">-->
\t\t<div class=\"top-social col-md-1 col-xs-12\">
              ";
        // line 117
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "socialmediamenu", array())) {
            // line 118
            echo "                       ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "socialmediamenu", array()), "html", null, true));
            echo "
              ";
        }
        // line 120
        echo "        </div>
\t\t<!-- social media menu end -->
       
        
      </div>
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.menu-strip --> 
  
</div>

";
        // line 133
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

<div class=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
\t
\t  <!--footer menu start-->
      <div class=\"col-md-8 col-xs-12\">
        <div class=\"footer-menu\">
\t\t  ";
        // line 142
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "aljabrfootermenurtl", array())) {
            // line 143
            echo "\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "aljabrfootermenurtl", array()), "html", null, true));
            echo "
\t\t  ";
        }
        // line 145
        echo "        </div>
      </div>
\t  <!--footer menu end -->
\t  
      <div class=\"col-md-4 col-xs-12\">
\t\t<!--copyright start -->
        <div class=\"copy-write\"> ";
        // line 151
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["copyright"]) ? $context["copyright"] : null), "html", null, true));
        echo " </div>
\t\t<!-- copyright end-->
      </div>
\t  

\t  
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/aljabr/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 151,  182 => 145,  176 => 143,  174 => 142,  162 => 133,  147 => 120,  141 => 118,  139 => 117,  128 => 108,  122 => 106,  120 => 105,  108 => 95,  102 => 93,  100 => 92,  81 => 75,  75 => 73,  73 => 72,  53 => 54,  49 => 52,  45 => 50,  43 => 49,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/aljabr/templates/layout/page.html.twig", "/home/ameencoi/public_html/aljabr.com/themes/custom/aljabr/templates/layout/page.html.twig");
    }
}
