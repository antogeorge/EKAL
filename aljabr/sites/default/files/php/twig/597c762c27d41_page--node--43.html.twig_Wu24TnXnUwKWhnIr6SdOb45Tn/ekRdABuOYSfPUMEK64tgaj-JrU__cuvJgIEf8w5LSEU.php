<?php

/* themes/custom/aljabr/templates/layout/page--node--43.html.twig */
class __TwigTemplate_452f011e2401ff14c056dbd67ea5b8b93431edc88e8ec67b234f1b672e8f032c extends Twig_Template
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
        $tags = array("if" => 48);
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

        // line 48
        if (((isset($context["rtl"]) ? $context["rtl"] : null) == true)) {
            // line 49
            echo "  <body class=\"terms-arabic\">
";
        } else {
            // line 51
            echo "  <body class=\"terms-english\">
";
        }
        // line 53
        echo "


  <div id=\"preloader\">
    <div class=\"sk-spinner sk-spinner-wave\"> 

      ";
        // line 59
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 60
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo " <br>
      ";
        }
        // line 62
        echo "
      <div class=\"sk-rect1\"></div>
      <div class=\"sk-rect2\"></div>
      <div class=\"sk-rect3\"></div>
      <div class=\"sk-rect4\"></div>
      <div class=\"sk-rect5\"></div>
    </div>
  </div>



    <section class=\"conten-section\">

    <div class=\"container\">

            <div class=\"site-content\">

            ";
        // line 79
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 80
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
            ";
        }
        // line 82
        echo "
          </div>
      </div>
       <div class=\"clear\"></div>
  </section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/aljabr/templates/layout/page--node--43.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 82,  90 => 80,  88 => 79,  69 => 62,  63 => 60,  61 => 59,  53 => 53,  49 => 51,  45 => 49,  43 => 48,);
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
{% if rtl == true %}
  <body class=\"terms-arabic\">
{% else %}
  <body class=\"terms-english\">
{% endif %}



  <div id=\"preloader\">
    <div class=\"sk-spinner sk-spinner-wave\"> 

      {% if page.header %}
        {{ page.header }} <br>
      {% endif %}

      <div class=\"sk-rect1\"></div>
      <div class=\"sk-rect2\"></div>
      <div class=\"sk-rect3\"></div>
      <div class=\"sk-rect4\"></div>
      <div class=\"sk-rect5\"></div>
    </div>
  </div>



    <section class=\"conten-section\">

    <div class=\"container\">

            <div class=\"site-content\">

            {% if page.content %}
              {{ page.content }}
            {% endif %}

          </div>
      </div>
       <div class=\"clear\"></div>
  </section>", "themes/custom/aljabr/templates/layout/page--node--43.html.twig", "C:\\xampp\\htdocs\\aljabr\\themes\\custom\\aljabr\\templates\\layout\\page--node--43.html.twig");
    }
}
