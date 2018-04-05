<?php

/* themes/custom/aljabr/templates/layout/page.html.twig */
class __TwigTemplate_07248b352ee48c3da61174b0b4872053f18132adec8a19e52e9ac307d9fc0c1b extends Twig_Template
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
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   pages path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
{#route_name#}
{% if rtl == true %}
  <body class=\"arabic\">
{% else %}
  <body>
{% endif %}

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
\t\t      {% if page.navigation_language.switchthelang %}
                       {{ page.navigation_language.switchthelang }}
              {% endif %}
\t\t\t  
          
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
\t\t  {% if page.navigation_language.sitebranding %}
\t\t\t\t   {{ page.navigation_language.sitebranding }}
\t\t  {% endif %}
\t\t\t
\t\t</div>
\t\t<!-- Al-Jabr logo end -->
\t\t
\t\t<!-- main navigation start -->
\t\t<!-- ar
        <div class=\"menu col-md-9 col-xs-12\">-->
\t\t<div class=\"menu col-md-offset-1 col-md-9 col-xs-12\">
          <div class=\"navContainer\">
            <div class=\"section group\" id=\"menu\">
              {% if page.navigation_language.aljabrmenurtl %}
                       {{ page.navigation_language.aljabrmenurtl }}
              {% endif %}
            </div>
          </div>
        </div>
\t\t<!-- main navigation end -->
        
\t    <!-- social media menu start -->
\t\t<!-- ar 
        <div class=\"top-social col-md-1 col-xs-12\">-->
\t\t<div class=\"top-social col-md-1 col-xs-12\">
              {% if page.navigation_language.socialmediamenu %}
                       {{ page.navigation_language.socialmediamenu }}
              {% endif %}
        </div>
\t\t<!-- social media menu end -->
       
        
      </div>
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.menu-strip --> 
  
</div>

{{ page.content }}

<div class=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
\t
\t  <!--footer menu start-->
      <div class=\"col-md-8 col-xs-12\">
        <div class=\"footer-menu\">
\t\t  {% if page.footer.aljabrfootermenurtl %}
\t\t\t\t   {{ page.footer.aljabrfootermenurtl }}
\t\t  {% endif %}
        </div>
      </div>
\t  <!--footer menu end -->
\t  
      <div class=\"col-md-4 col-xs-12\">
\t\t<!--copyright start -->
        <div class=\"copy-write\"> {{ copyright }} </div>
\t\t<!-- copyright end-->
      </div>
\t  

\t  
    </div>
  </div>
</div>", "themes/custom/aljabr/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\aljabr\\themes\\custom\\aljabr\\templates\\layout\\page.html.twig");
    }
}
