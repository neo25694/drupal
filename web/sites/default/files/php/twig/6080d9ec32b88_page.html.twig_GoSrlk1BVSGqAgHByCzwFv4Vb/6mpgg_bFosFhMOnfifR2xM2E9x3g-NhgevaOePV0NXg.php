<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/umami/templates/layout/page.html.twig */
class __TwigTemplate_f501cb407740d1afc048f42ab5d6d034160d611748eb3673d68b4bf1dcbc13ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 47];
        $filters = ["trim" => 47, "striptags" => 47, "render" => 47, "escape" => 52];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['trim', 'striptags', 'render', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 45
        echo "<div class=\"layout-container\">

  ";
        // line 47
        if (( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "pre_header", []))))) ||  !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(        // line 48
($context["page"] ?? null), "header", []))))))) {
            // line 49
            echo "    <header class=\"layout-header\" role=\"banner\">
      <div class=\"container\">
        ";
            // line 51
            if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "pre_header", [])))))) {
                // line 52
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_header", [])), "html", null, true);
                echo "
        ";
            }
            // line 54
            echo "        ";
            if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "header", [])))))) {
                // line 55
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                echo "
        ";
            }
            // line 57
            echo "      </div>
    </header>
  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 62
            echo "    <div class=\"layout-highlighted\">
      <div class=\"container\">
        ";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 68
        echo "
  ";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "tabs", [])) {
            // line 70
            echo "  <div class=\"layout-tabs\">
    <div class=\"container\">
      ";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "tabs", [])), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 76
        echo "
  ";
        // line 77
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "banner_top", [])))))) {
            // line 78
            echo "    <div class=\"layout-banner-top\">
      ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner_top", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 82
        echo "
  ";
        // line 83
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])))))) {
            // line 84
            echo "  <div class=\"layout-breadcrumbs\">
    <div class=\"container\">
      ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 90
        echo "
  ";
        // line 91
        if ( !($context["node"] ?? null)) {
            // line 92
            echo "    ";
            if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "page_title", [])))))) {
                // line 93
                echo "      <div class=\"layout-page-title\">
        ";
                // line 94
                if (($context["is_front"] ?? null)) {
                    // line 95
                    echo "          <div class=\"is-front container\">
            ";
                    // line 96
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
                    echo "
          </div>
          ";
                } else {
                    // line 99
                    echo "          <div class=\"container\">
            ";
                    // line 100
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
                    echo "
          </div>
        ";
                }
                // line 103
                echo "      </div>
    ";
            }
            // line 105
            echo "  ";
        }
        // line 106
        echo "
  <main role=\"main\" class=\"main container\">

    <div class=\"layout-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 111
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </div>";
        // line 113
        echo "
    ";
        // line 114
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar", [])))))) {
            // line 115
            echo "      <aside class=\"layout-sidebar\" role=\"complementary\">
        ";
            // line 116
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 119
        echo "
  </main>

  ";
        // line 122
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "content_bottom", [])))))) {
            // line 123
            echo "    <div class=\"layout-content-bottom\">
      ";
            // line 124
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 127
        echo "
  ";
        // line 128
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", [])))))) {
            // line 129
            echo "  <div class=\"layout-footer\">
    <footer class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 132
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      </div>
    </footer>
  </div>
  ";
        }
        // line 137
        echo "
  ";
        // line 138
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "bottom", [])))))) {
            // line 139
            echo "    <div class=\"layout-bottom\">
      <div class=\"container\">
        ";
            // line 141
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom", [])), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 145
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/umami/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 145,  256 => 141,  252 => 139,  250 => 138,  247 => 137,  239 => 132,  234 => 129,  232 => 128,  229 => 127,  223 => 124,  220 => 123,  218 => 122,  213 => 119,  207 => 116,  204 => 115,  202 => 114,  199 => 113,  194 => 111,  188 => 106,  185 => 105,  181 => 103,  175 => 100,  172 => 99,  166 => 96,  163 => 95,  161 => 94,  158 => 93,  155 => 92,  153 => 91,  150 => 90,  143 => 86,  139 => 84,  137 => 83,  134 => 82,  128 => 79,  125 => 78,  123 => 77,  120 => 76,  113 => 72,  109 => 70,  107 => 69,  104 => 68,  97 => 64,  93 => 62,  91 => 61,  88 => 60,  83 => 57,  77 => 55,  74 => 54,  68 => 52,  66 => 51,  62 => 49,  60 => 48,  59 => 47,  55 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
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
<div class=\"layout-container\">

  {% if page.pre_header|render|striptags|trim is not empty or
     page.header|render|striptags|trim is not empty %}
    <header class=\"layout-header\" role=\"banner\">
      <div class=\"container\">
        {% if page.pre_header|render|striptags|trim is not empty %}
          {{ page.pre_header }}
        {% endif %}
        {% if page.header|render|striptags|trim is not empty %}
          {{ page.header }}
        {% endif %}
      </div>
    </header>
  {% endif %}

  {% if page.highlighted %}
    <div class=\"layout-highlighted\">
      <div class=\"container\">
        {{ page.highlighted }}
      </div>
    </div>
  {% endif %}

  {% if page.tabs %}
  <div class=\"layout-tabs\">
    <div class=\"container\">
      {{ page.tabs }}
    </div>
  </div>
  {% endif %}

  {% if page.banner_top|render|striptags|trim is not empty %}
    <div class=\"layout-banner-top\">
      {{ page.banner_top }}
    </div>
  {% endif %}

  {% if page.breadcrumbs|render|striptags|trim is not empty %}
  <div class=\"layout-breadcrumbs\">
    <div class=\"container\">
      {{ page.breadcrumbs }}
    </div>
  </div>
  {% endif %}

  {% if not node %}
    {% if page.page_title|render|striptags|trim is not empty %}
      <div class=\"layout-page-title\">
        {% if is_front %}
          <div class=\"is-front container\">
            {{ page.page_title }}
          </div>
          {% else %}
          <div class=\"container\">
            {{ page.page_title }}
          </div>
        {% endif %}
      </div>
    {% endif %}
  {% endif %}

  <main role=\"main\" class=\"main container\">

    <div class=\"layout-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
      {{ page.content }}
    </div>{# /.layout-content #}

    {% if page.sidebar|render|striptags|trim is not empty %}
      <aside class=\"layout-sidebar\" role=\"complementary\">
        {{ page.sidebar }}
      </aside>
    {% endif %}

  </main>

  {% if page.content_bottom|render|striptags|trim is not empty %}
    <div class=\"layout-content-bottom\">
      {{ page.content_bottom }}
    </div>
  {% endif %}

  {% if page.footer|render|striptags|trim is not empty %}
  <div class=\"layout-footer\">
    <footer class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        {{ page.footer }}
      </div>
    </footer>
  </div>
  {% endif %}

  {% if page.bottom|render|striptags|trim is not empty %}
    <div class=\"layout-bottom\">
      <div class=\"container\">
        {{ page.bottom }}
      </div>
    </div>
  {% endif %}

</div>{# /.layout-container #}
", "themes/custom/umami/templates/layout/page.html.twig", "/var/www/html/drupal/web/themes/custom/umami/templates/layout/page.html.twig");
    }
}
