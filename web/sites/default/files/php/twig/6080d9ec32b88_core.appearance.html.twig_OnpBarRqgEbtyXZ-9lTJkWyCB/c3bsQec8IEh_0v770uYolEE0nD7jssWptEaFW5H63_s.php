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

/* @help_topics/core.appearance.html.twig */
class __TwigTemplate_0c27d9a8bd15b26e3215867c1f6ea560c602e082e7b334fe73e356c3eac52ba6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "trans" => 8];
        $filters = ["escape" => 13];
        $functions = ["render_var" => 7, "url" => 7];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'url']
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
        // line 7
        $context["entities"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "core.content_structure"]));
        // line 8
        echo "<h2>";
        echo t("What is a theme?", array());
        echo "</h2>
<p>";
        // line 9
        echo t("A <em>theme</em> is a set of files that define the visual look and feel of your site. The core software and modules that run on your site determine which content (including HTML text and other data stored in the database, uploaded images, and any other asset files) is displayed on the pages of your site. The theme determines the HTML markup and CSS styling that wraps the content. Several basic themes are supplied with the core software; additional <em>contributed themes</em> can be downloaded separately from the <a href=\"https://www.drupal.org/project/project_theme\">Download &amp; Extend page on drupal.org</a>, or you can create your own theme.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("What is a base theme?", array());
        echo "</h2>
<p>";
        // line 11
        echo t("A base theme is a theme that is not meant to be used directly on a site, but instead acts as a scaffolding for building other themes. The core Classy theme is one example; other base themes can be downloaded from the <a href=\"https://www.drupal.org/project/project_theme\">Download &amp; Extend page on drupal.org</a>.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("What is a layout?", array());
        echo "</h2>
<p>";
        // line 13
        echo t("A <em>layout</em> is a template that defines where blocks and other pieces of content should be displayed. The core Layout Discovery module allows modules and themes to register layouts, and the core Layout Builder module provides a visual interface for placing fields and blocks in layouts for entity sub-types and individual entity items (see <a href=\"@entities\">Managing content structure</a> for more on entities and fields).", array("@entities" => ($context["entities"] ?? null), ));
        echo "</p>
<h2>";
        // line 14
        echo t("Changing site appearance overview", array());
        echo "</h2>
<p>";
        // line 15
        echo t("The main way to change the overall appearance of your site is to switch the default theme. You can also change the color palette of some themes, if the core Color module is installed and the theme supports it; some themes also have other settings. The core Layout Builder and Layout Discovery modules allow you to define layouts for your site's content, and the core Breakpoint module helps themes change appearance for different-sized devices. See the related topics listed below for specific tasks.", array());
        echo "</p>
<h2>";
        // line 16
        echo t("Additional resources", array());
        echo "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/extend-chapter.html\">";
        // line 18
        echo t("Extending and Customizing Your Site chapter in the User Guide", array());
        echo "</a></li>
  <li><a href=\"https://www.drupal.org/docs/8/theming\">";
        // line 19
        echo t("Theming Drupal 8", array());
        echo "</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/core.appearance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 19,  95 => 18,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set entities = render_var(url('help.help_topic', {'id': 'core.content_structure'})) %}
<h2>{% trans %}What is a theme?{% endtrans %}</h2>
<p>{% trans %}A <em>theme</em> is a set of files that define the visual look and feel of your site. The core software and modules that run on your site determine which content (including HTML text and other data stored in the database, uploaded images, and any other asset files) is displayed on the pages of your site. The theme determines the HTML markup and CSS styling that wraps the content. Several basic themes are supplied with the core software; additional <em>contributed themes</em> can be downloaded separately from the <a href=\"https://www.drupal.org/project/project_theme\">Download &amp; Extend page on drupal.org</a>, or you can create your own theme.{% endtrans %}</p>
<h2>{% trans %}What is a base theme?{% endtrans %}</h2>
<p>{% trans %}A base theme is a theme that is not meant to be used directly on a site, but instead acts as a scaffolding for building other themes. The core Classy theme is one example; other base themes can be downloaded from the <a href=\"https://www.drupal.org/project/project_theme\">Download &amp; Extend page on drupal.org</a>.{% endtrans %}</p>
<h2>{% trans %}What is a layout?{% endtrans %}</h2>
<p>{% trans %}A <em>layout</em> is a template that defines where blocks and other pieces of content should be displayed. The core Layout Discovery module allows modules and themes to register layouts, and the core Layout Builder module provides a visual interface for placing fields and blocks in layouts for entity sub-types and individual entity items (see <a href=\"{{ entities }}\">Managing content structure</a> for more on entities and fields).{% endtrans %}</p>
<h2>{% trans %}Changing site appearance overview{% endtrans %}</h2>
<p>{% trans %}The main way to change the overall appearance of your site is to switch the default theme. You can also change the color palette of some themes, if the core Color module is installed and the theme supports it; some themes also have other settings. The core Layout Builder and Layout Discovery modules allow you to define layouts for your site's content, and the core Breakpoint module helps themes change appearance for different-sized devices. See the related topics listed below for specific tasks.{% endtrans %}</p>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/extend-chapter.html\">{% trans %}Extending and Customizing Your Site chapter in the User Guide{% endtrans %}</a></li>
  <li><a href=\"https://www.drupal.org/docs/8/theming\">{% trans %}Theming Drupal 8{% endtrans %}</a></li>
</ul>", "@help_topics/core.appearance.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/core.appearance.html.twig");
    }
}
