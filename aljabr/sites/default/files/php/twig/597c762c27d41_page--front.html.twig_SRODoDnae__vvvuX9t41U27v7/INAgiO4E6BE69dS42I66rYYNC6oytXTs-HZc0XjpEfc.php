<?php

/* themes/custom/aljabr/templates/layout/page--front.html.twig */
class __TwigTemplate_61feb9a678438b7190a6cf10c01e610f5c6b617a4356d232b7b5dbb88c23cb47 extends Twig_Template
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
        $tags = array("if" => 47, "set" => 194);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
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

        // line 46
        echo "
";
        // line 47
        if (((isset($context["rtl"]) ? $context["rtl"] : null) == true)) {
            // line 48
            echo "  <body class=\"arabic\">
";
        } else {
            // line 50
            echo "  <body>
";
        }
        // line 52
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
        // line 70
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "switchthelang", array())) {
            // line 71
            echo "                       ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "switchthelang", array()), "html", null, true));
            echo "
              ";
        }
        // line 73
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
        // line 90
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "sitebranding", array())) {
            // line 91
            echo "\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "sitebranding", array()), "html", null, true));
            echo "
\t\t  ";
        }
        // line 93
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
        // line 103
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "aljabrmenurtl", array())) {
            // line 104
            echo "                       ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "aljabrmenurtl", array()), "html", null, true));
            echo "
              ";
        }
        // line 106
        echo "            </div>
          </div>
        </div>
\t\t<!-- main navigation end -->
        
\t    <!-- social media menu start -->
\t\t<!-- ar 
        <div class=\"top-social col-md-1 col-xs-12\">-->
\t\t<div class=\"top-social col-md-1 col-xs-12\">
              ";
        // line 115
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "socialmediamenu", array())) {
            // line 116
            echo "                       ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_language", array()), "socialmediamenu", array()), "html", null, true));
            echo "
              ";
        }
        // line 118
        echo "        </div>
\t\t<!-- social media menu end -->
       
        
      </div>
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.menu-strip --> 
  
</div>
<!-- /.header -->

<div id=\"banner\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
\t  <!-- Banner start -->
        <div class=\"banner\">
\t\t  ";
        // line 138
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "views_block__home_page_banner_block_1", array())) {
            // line 139
            echo "\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "views_block__home_page_banner_block_1", array()), "html", null, true));
            echo "
\t\t  ";
        }
        // line 141
        echo "        </div>
\t\t<!-- Banner end -->
        <!-- banner : ends --> 
        
      </div>
    </div>
  </div>
</div>
<!-- /.banner -->
<div class=\"page-content\">
  <div class=\"hm-strip\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 col-xs-12\" id=\"new-form\">
\t\t  ";
        // line 155
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "installmentcalculatorformblock", array())) {
            // line 156
            echo "\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "installmentcalculatorformblock", array()), "html", null, true));
            echo "
\t\t  ";
        }
        // line 158
        echo "        </div>
        <div class=\"col-md-4 col-xs-12\">
          <div class=\"hm-pic-box\"> 
\t\t  <!-- finance calculator image start -->
\t\t  ";
        // line 162
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "financecalculatorimage", array())) {
            // line 163
            echo "\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "financecalculatorimage", array()), "html", null, true));
            echo "
\t\t  ";
        }
        // line 165
        echo "\t\t  <!-- finance calculator image end -->
\t\t  <span>
            <h1> ";
        // line 167
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["finance_calculator_heading"]) ? $context["finance_calculator_heading"] : null), "html", null, true));
        echo " </h1>
            <p> ";
        // line 168
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["finance_calculator_description"]) ? $context["finance_calculator_description"] : null), "html", null, true));
        echo " </p>
          </span> </div>
          <!-- /.hm-pic-box --> 
          
        </div>
      
    
  <!-- /.hm-strip one -->
  
  <div class=\"hm-strip\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4 col-xs-12\">
          <div class=\"hm-red-box\"> 
\t\t  
\t\t  <!-- apply funding image start -->
\t\t  ";
        // line 184
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "applyfundingimage", array())) {
            // line 185
            echo "\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "applyfundingimage", array()), "html", null, true));
            echo "
\t\t  ";
        }
        // line 187
        echo "\t\t  <!-- apply funding image end -->
\t\t  
            <div class=\"hm-box-fixer\">
              <h1> ";
        // line 190
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["apply_funding_headline"]) ? $context["apply_funding_headline"] : null), "html", null, true));
        echo " </h1>
              <p> ";
        // line 191
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["apply_funding_description"]) ? $context["apply_funding_description"] : null), "html", null, true));
        echo " </p>
\t\t\t  
\t\t\t\t";
        // line 193
        if (((isset($context["rtl"]) ? $context["rtl"] : null) == true)) {
            // line 194
            echo "\t\t\t\t ";
            $context["url"] = (isset($context["apply_funding_button_url"]) ? $context["apply_funding_button_url"] : null);
            // line 195
            echo "\t\t\t\t";
        } else {
            // line 196
            echo "\t\t\t\t  ";
            $context["url"] = ("en/" . (isset($context["apply_funding_button_url"]) ? $context["apply_funding_button_url"] : null));
            // line 197
            echo "\t\t\t\t";
        }
        // line 198
        echo "
              <a href=\"";
        // line 199
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
        echo "\"> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["apply_funding_button"]) ? $context["apply_funding_button"] : null), "html", null, true));
        echo " </a> </div>
          </div>
        </div>
        <div class=\"col-md-8\">
          <div class=\"row\">
            <div class=\"col-md-6 col-xs-12\">
              <div class=\"hm-gray-box\"> 
\t\t\t  
\t\t\t  <!--image start -->
\t\t\t  ";
        // line 208
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "homepagecontentslider", array())) {
            // line 209
            echo "\t\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "homepagecontentslider", array()), "html", null, true));
            echo "
\t\t\t  ";
        }
        // line 211
        echo "\t\t\t  <!--image end -->
\t\t\t  
                <div class=\"hm-box-fixer\">
                  <div class=\"hm-content-slider\">
\t\t\t\t\t  <!--slider start -->
\t\t\t\t\t  ";
        // line 216
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "views_block__home_page_small_slider_view_block_1", array())) {
            // line 217
            echo "\t\t\t\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "views_block__home_page_small_slider_view_block_1", array()), "html", null, true));
            echo "
\t\t\t\t\t  ";
        }
        // line 219
        echo "\t\t\t\t\t  <!--slider end -->
                  </div>
                  <!-- /.hm-content-slider --> 
                </div>
              </div>
              <!-- /.content-slider --> 
            </div>
            <div class=\"col-md-6 col-xs-12\">
              <div class=\"hm-pic-box\">
\t\t\t  
\t\t\t  <!-- required documents image start -->
\t\t\t  ";
        // line 230
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "requireddocumentsimage", array())) {
            // line 231
            echo "\t\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "requireddocumentsimage", array()), "html", null, true));
            echo "
\t\t\t  ";
        }
        // line 233
        echo "\t\t\t  <!-- required documents image end -->
\t\t\t  
\t\t\t  <span>
                <h1> ";
        // line 236
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["required_documents_headline"]) ? $context["required_documents_headline"] : null), "html", null, true));
        echo " </h1>
                <p> ";
        // line 237
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["required_documents_description"]) ? $context["required_documents_description"] : null), "html", null, true));
        echo " </p>
                </span> </div>
              <!-- /.hm-pic-box --> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.hm-strip two-->
  <div class=\"hm-strip\">
    <div class=\"container\">
      <div class=\"hm-map-strip\">
        <div class=\"row\">
          <div class=\"hm-map col-md-8\"> 
\t\t\t  
\t\t\t  <!-- branches map image start -->
\t\t\t  ";
        // line 255
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "googlemapimage", array())) {
            // line 256
            echo "\t\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "googlemapimage", array()), "html", null, true));
            echo "
\t\t\t  ";
        }
        // line 258
        echo "\t\t\t  <!-- branches map image end -->
\t\t\t  
\t\t\t  ";
        // line 260
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "contactblockhome", array())) {
            // line 261
            echo "\t\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "contactblockhome", array()), "html", null, true));
            echo "
\t\t\t  ";
        }
        // line 262
        echo " 
\t\t\t  
\t\t  </div>
          <!-- /.hm-map -->
          <div class=\"hm-map-side col-md-4\">
\t\t\t  
\t\t\t  <!-- branches background image start -->
\t\t\t  ";
        // line 269
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "aljabrbranchesbackgroundimage", array())) {
            // line 270
            echo "\t\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "aljabrbranchesbackgroundimage", array()), "html", null, true));
            echo "
\t\t\t  ";
        }
        // line 272
        echo "\t\t\t  <!-- branches background image end -->\t\t 
\t\t\t  
\t\t <span>
            <h1> ";
        // line 275
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["aljabr_branches_heading"]) ? $context["aljabr_branches_heading"] : null), "html", null, true));
        echo " </h1>
            <p> ";
        // line 276
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["aljabr_branches_description"]) ? $context["aljabr_branches_description"] : null), "html", null, true));
        echo "</p>
            </span> </div>
        </div>
      </div>
      <!-- /.hm-map-strip --> 
      
    </div>
  </div>
  <!-- /.hm-strip three--> 
  </div>
  </div>
 </div>
</div>
<!-- /.page-content -->

<div class=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
\t
\t  <!--footer menu start-->
      <div class=\"col-md-8 col-xs-12\">
        <div class=\"footer-menu\">
\t\t  ";
        // line 298
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "aljabrfootermenurtl", array())) {
            // line 299
            echo "\t\t\t\t   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "aljabrfootermenurtl", array()), "html", null, true));
            echo "
\t\t  ";
        }
        // line 301
        echo "        </div>
      </div>
\t  <!--footer menu end -->
\t  
      <div class=\"col-md-4 col-xs-12\">
\t\t<!--copyright start -->
        <div class=\"copy-write\"> ";
        // line 307
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
        return "themes/custom/aljabr/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 307,  451 => 301,  445 => 299,  443 => 298,  418 => 276,  414 => 275,  409 => 272,  403 => 270,  401 => 269,  392 => 262,  386 => 261,  384 => 260,  380 => 258,  374 => 256,  372 => 255,  351 => 237,  347 => 236,  342 => 233,  336 => 231,  334 => 230,  321 => 219,  315 => 217,  313 => 216,  306 => 211,  300 => 209,  298 => 208,  284 => 199,  281 => 198,  278 => 197,  275 => 196,  272 => 195,  269 => 194,  267 => 193,  262 => 191,  258 => 190,  253 => 187,  247 => 185,  245 => 184,  226 => 168,  222 => 167,  218 => 165,  212 => 163,  210 => 162,  204 => 158,  198 => 156,  196 => 155,  180 => 141,  174 => 139,  172 => 138,  150 => 118,  144 => 116,  142 => 115,  131 => 106,  125 => 104,  123 => 103,  111 => 93,  105 => 91,  103 => 90,  84 => 73,  78 => 71,  76 => 70,  56 => 52,  52 => 50,  48 => 48,  46 => 47,  43 => 46,);
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
 * Theme override to display a single page.
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
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
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
 */
#}

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
<!-- /.header -->

<div id=\"banner\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
\t  <!-- Banner start -->
        <div class=\"banner\">
\t\t  {% if page.header.views_block__home_page_banner_block_1 %}
\t\t\t\t   {{ page.header.views_block__home_page_banner_block_1 }}
\t\t  {% endif %}
        </div>
\t\t<!-- Banner end -->
        <!-- banner : ends --> 
        
      </div>
    </div>
  </div>
</div>
<!-- /.banner -->
<div class=\"page-content\">
  <div class=\"hm-strip\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 col-xs-12\" id=\"new-form\">
\t\t  {% if page.content.installmentcalculatorformblock %}
\t\t\t\t   {{ page.content.installmentcalculatorformblock }}
\t\t  {% endif %}
        </div>
        <div class=\"col-md-4 col-xs-12\">
          <div class=\"hm-pic-box\"> 
\t\t  <!-- finance calculator image start -->
\t\t  {% if page.content.financecalculatorimage %}
\t\t\t\t   {{ page.content.financecalculatorimage }}
\t\t  {% endif %}
\t\t  <!-- finance calculator image end -->
\t\t  <span>
            <h1> {{ finance_calculator_heading }} </h1>
            <p> {{ finance_calculator_description }} </p>
          </span> </div>
          <!-- /.hm-pic-box --> 
          
        </div>
      
    
  <!-- /.hm-strip one -->
  
  <div class=\"hm-strip\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4 col-xs-12\">
          <div class=\"hm-red-box\"> 
\t\t  
\t\t  <!-- apply funding image start -->
\t\t  {% if page.content.applyfundingimage %}
\t\t\t\t   {{ page.content.applyfundingimage }}
\t\t  {% endif %}
\t\t  <!-- apply funding image end -->
\t\t  
            <div class=\"hm-box-fixer\">
              <h1> {{ apply_funding_headline }} </h1>
              <p> {{ apply_funding_description }} </p>
\t\t\t  
\t\t\t\t{% if rtl == true %}
\t\t\t\t {% set url =  apply_funding_button_url %}
\t\t\t\t{% else %}
\t\t\t\t  {% set url = 'en/' ~ apply_funding_button_url %}
\t\t\t\t{% endif %}

              <a href=\"{{ url }}\"> {{ apply_funding_button }} </a> </div>
          </div>
        </div>
        <div class=\"col-md-8\">
          <div class=\"row\">
            <div class=\"col-md-6 col-xs-12\">
              <div class=\"hm-gray-box\"> 
\t\t\t  
\t\t\t  <!--image start -->
\t\t\t  {% if page.content.homepagecontentslider %}
\t\t\t\t\t   {{ page.content.homepagecontentslider }}
\t\t\t  {% endif %}
\t\t\t  <!--image end -->
\t\t\t  
                <div class=\"hm-box-fixer\">
                  <div class=\"hm-content-slider\">
\t\t\t\t\t  <!--slider start -->
\t\t\t\t\t  {% if page.content.views_block__home_page_small_slider_view_block_1 %}
\t\t\t\t\t\t\t   {{ page.content.views_block__home_page_small_slider_view_block_1 }}
\t\t\t\t\t  {% endif %}
\t\t\t\t\t  <!--slider end -->
                  </div>
                  <!-- /.hm-content-slider --> 
                </div>
              </div>
              <!-- /.content-slider --> 
            </div>
            <div class=\"col-md-6 col-xs-12\">
              <div class=\"hm-pic-box\">
\t\t\t  
\t\t\t  <!-- required documents image start -->
\t\t\t  {% if page.content.requireddocumentsimage %}
\t\t\t\t\t   {{ page.content.requireddocumentsimage }}
\t\t\t  {% endif %}
\t\t\t  <!-- required documents image end -->
\t\t\t  
\t\t\t  <span>
                <h1> {{ required_documents_headline }} </h1>
                <p> {{ required_documents_description }} </p>
                </span> </div>
              <!-- /.hm-pic-box --> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.hm-strip two-->
  <div class=\"hm-strip\">
    <div class=\"container\">
      <div class=\"hm-map-strip\">
        <div class=\"row\">
          <div class=\"hm-map col-md-8\"> 
\t\t\t  
\t\t\t  <!-- branches map image start -->
\t\t\t  {% if page.content.googlemapimage %}
\t\t\t\t\t   {{ page.content.googlemapimage }}
\t\t\t  {% endif %}
\t\t\t  <!-- branches map image end -->
\t\t\t  
\t\t\t  {% if page.content.contactblockhome %}
\t\t\t\t\t   {{ page.content.contactblockhome }}
\t\t\t  {% endif %} 
\t\t\t  
\t\t  </div>
          <!-- /.hm-map -->
          <div class=\"hm-map-side col-md-4\">
\t\t\t  
\t\t\t  <!-- branches background image start -->
\t\t\t  {% if page.content.aljabrbranchesbackgroundimage %}
\t\t\t\t\t   {{ page.content.aljabrbranchesbackgroundimage }}
\t\t\t  {% endif %}
\t\t\t  <!-- branches background image end -->\t\t 
\t\t\t  
\t\t <span>
            <h1> {{ aljabr_branches_heading }} </h1>
            <p> {{ aljabr_branches_description }}</p>
            </span> </div>
        </div>
      </div>
      <!-- /.hm-map-strip --> 
      
    </div>
  </div>
  <!-- /.hm-strip three--> 
  </div>
  </div>
 </div>
</div>
<!-- /.page-content -->

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
</div>", "themes/custom/aljabr/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\aljabr\\themes\\custom\\aljabr\\templates\\layout\\page--front.html.twig");
    }
}
