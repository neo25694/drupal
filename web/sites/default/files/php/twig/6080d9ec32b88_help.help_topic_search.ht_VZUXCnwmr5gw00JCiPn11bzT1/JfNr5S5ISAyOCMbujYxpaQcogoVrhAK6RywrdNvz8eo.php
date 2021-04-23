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

/* @help_topics/help.help_topic_search.html.twig */
class __TwigTemplate_4df22afdd35b135407cd6915cbd414b6cc0930879206daf246b92501df3fb13d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 9, "trans" => 13];
        $filters = ["escape" => 17];
        $functions = ["render_var" => 9, "url" => 9];

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
        // line 9
        $context["extend_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.modules_list"));
        // line 10
        $context["help_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.main"));
        // line 11
        $context["cache_help"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "system.cache"]));
        // line 12
        $context["cron_help"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "core.cron"]));
        // line 13
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 14
        echo t("Set up your site so that users can search for help.", array());
        echo "</p>
<h2>";
        // line 15
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 17
        echo t("In the <em>Manage</em> administrative menu, navigate to <em><a href=\"@extend_url\">Extend</a></em>. Verify that the Search, Help, Help Topics, and Block modules are installed (or install them if they are not already installed).", array("@extend_url" => ($context["extend_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 18
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Search and metadata</em> &gt; <em>Search pages</em>.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Verify that a Help search page is listed in the <em>Search pages</em> section. If not, add a new page of type <em>Help</em>.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Check the indexing status of the Help search page. If it is not fully indexed, <a href=\"@cron_help\">run Cron</a> until indexing is complete.", array("@cron_help" => ($context["cron_help"] ?? null), ));
        echo "</li>
  <li>";
        // line 21
        echo t("In the future, you can click <em>Rebuild search index</em> on this page, or <a href=\"@cache_help\">clear the site cache</a>, in order to force help topic text to be reindexed for searching. This should be done whenever a module, theme, language, or string translation is updated.", array("@cache_help" => ($context["cache_help"] ?? null), ));
        echo "</li>
  <li>";
        // line 22
        echo t("In the  <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>Block layout</em>.", array());
        echo "</li>
  <li>";
        // line 23
        echo t("Click the link for your administrative theme (such as the core Seven theme), near the top of the page, and verify that there is already a search block for help located in the Help region. If not, follow the steps in the related topic to place the <em>Search form</em> block in the Help region. When configuring the block, choose <em>Help</em> as the search page, and in the <em>Pages</em> tab under <em>Visibility</em>, enter <em>/admin/help</em> to make the search form only visible on the main <em>Help</em> page.", array());
        echo "</li>
  <li>";
        // line 24
        echo t("In the  <em>Manage</em> administrative menu, navigate to <em><a href=\"@help_url\">Help</a></em>. Verify that the search block is visible, and try a search.", array("@help_url" => ($context["help_url"] ?? null), ));
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/help.help_topic_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  101 => 23,  97 => 22,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  72 => 15,  68 => 14,  63 => 13,  61 => 12,  59 => 11,  57 => 10,  55 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 9 %}{% set extend_url = render_var(url('system.modules_list')) %}
{% set help_url = render_var(url('help.main')) %}
{% set cache_help = render_var(url('help.help_topic', {'id': 'system.cache'})) %}
{% set cron_help = render_var(url('help.help_topic', {'id': 'core.cron'})) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Set up your site so that users can search for help.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em><a href=\"{{ extend_url }}\">Extend</a></em>. Verify that the Search, Help, Help Topics, and Block modules are installed (or install them if they are not already installed).{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Search and metadata</em> &gt; <em>Search pages</em>.{% endtrans %}</li>
  <li>{% trans %}Verify that a Help search page is listed in the <em>Search pages</em> section. If not, add a new page of type <em>Help</em>.{% endtrans %}</li>
  <li>{% trans %}Check the indexing status of the Help search page. If it is not fully indexed, <a href=\"{{ cron_help }}\">run Cron</a> until indexing is complete.{% endtrans %}</li>
  <li>{% trans %}In the future, you can click <em>Rebuild search index</em> on this page, or <a href=\"{{ cache_help }}\">clear the site cache</a>, in order to force help topic text to be reindexed for searching. This should be done whenever a module, theme, language, or string translation is updated.{% endtrans %}</li>
  <li>{% trans %}In the  <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>Block layout</em>.{% endtrans %}</li>
  <li>{% trans %}Click the link for your administrative theme (such as the core Seven theme), near the top of the page, and verify that there is already a search block for help located in the Help region. If not, follow the steps in the related topic to place the <em>Search form</em> block in the Help region. When configuring the block, choose <em>Help</em> as the search page, and in the <em>Pages</em> tab under <em>Visibility</em>, enter <em>/admin/help</em> to make the search form only visible on the main <em>Help</em> page.{% endtrans %}</li>
  <li>{% trans %}In the  <em>Manage</em> administrative menu, navigate to <em><a href=\"{{ help_url }}\">Help</a></em>. Verify that the search block is visible, and try a search.{% endtrans %}</li>
</ol>", "@help_topics/help.help_topic_search.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/help.help_topic_search.html.twig");
    }
}
