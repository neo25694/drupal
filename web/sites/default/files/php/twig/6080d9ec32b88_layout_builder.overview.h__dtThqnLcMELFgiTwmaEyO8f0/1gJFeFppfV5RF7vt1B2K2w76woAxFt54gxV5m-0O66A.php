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

/* @help_topics/layout_builder.overview.html.twig */
class __TwigTemplate_88077f44fb8d6b56bf8126756121497bda5999048a3eec22a5581dd733897d95 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 9, "trans" => 12];
        $filters = ["escape" => 13];
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
        $context["content_types"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node_type.collection"));
        // line 10
        $context["entities"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "core.content_structure"]));
        // line 11
        $context["blocks"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "block.overview"]));
        // line 12
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 13
        echo t("Configure an entity sub-type to have its fields displayed using a layout (see <a href=\"@entities\">Managing content structure</a> for more on entities and fields).", array("@entities" => ($context["entities"] ?? null), ));
        echo "</p>
<h2>";
        // line 14
        echo t("What are the parts of a layout?", array());
        echo "</h2>
<p>";
        // line 15
        echo t("A layout consists of one or more <em>sections</em>. Each section can have from one to four <em>columns</em>. You can place blocks, including special blocks for the fields on the entity sub-type, in each column of each section (see <a href=\"@blocks\">Managing blocks</a> for more on blocks).", array("@blocks" => ($context["blocks"] ?? null), ));
        echo "</p>
<h2>";
        // line 16
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 18
        echo t("Navigate to the page for managing the entity type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"@content_types\"><em>Content types</em></a>.", array("@content_types" => ($context["content_types"] ?? null), ));
        echo "</li>
  <li>";
        // line 19
        echo t("Find the particular sub-type that you want to create a layout for, and click <em>Manage display</em> in the <em>Operations</em> list.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Under <em>Layout options</em>, check <em>Use Layout Builder</em>. You can also check the box below to allow each entity item to have its layout individually customized (if it is left unchecked, the site will use the same layout for all items of this entity sub-type).", array());
        echo "</li>
  <li>";
        // line 21
        echo t("Click <em>Save</em>. You will be returned to the <em>Manage display</em> page, but you will no longer see the table of fields of the classic display manager.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("Click <em>Manage layout</em> to enter layout management view. A default layout will be set up for you, with a single one-column section containing the fields on your entity sub-type.", array());
        echo "</li>
  <li>";
        // line 23
        echo t("To remove the default section and start from an empty layout, find and click the <em>Remove</em> button for the default section, which looks like an X. Confirm by clicking <em>Remove</em> in the pop-up dialog.", array());
        echo "</li>
  <li>";
        // line 24
        echo t("Add new sections, each with one to four columns, to your layout. For instance, you might want a one-column section at the top, a two-column section in the middle, and then a one-column section at the bottom. To add a section, click <em>Add section</em> and click the desired number of columns. For multi-column sections, set the column width percentages and click <em>Add section</em> in the pop-up dialog.", array());
        echo "</li>
  <li>";
        // line 25
        echo t("In each section, click <em>Add block</em> to add a block. You will see a list of the blocks available on your site, plus a section called <em>Content fields</em> with a block for each field on your content item. Each block can be configured, if desired, with a <em>Title</em>, and for content field blocks, you can also configure the field formatter. Continue to add blocks to your sections until all the desired blocks and fields are displayed.", array());
        echo "</li>
  <li>";
        // line 26
        echo t("Verify your layout. You can check <em>Show content preview</em> to show a preview of what your layout will look like, or uncheck it to see the names of the fields and blocks in each section.", array());
        echo "</li>
  <li>";
        // line 27
        echo t("If needed, reorder the blocks by dragging them to new locations. If you hover over a block, a contextual menu will appear that will let you change the configuration of the block, remove the block, or <em>Move</em> blocks within the section using a more compact interface.", array());
        echo "</li>
  <li>";
        // line 28
        echo t("When you are satisfied with your layout, click <em>Save layout</em>.", array());
        echo "</li>
</ol>

<h2>";
        // line 31
        echo t("Additional resources", array());
        echo "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/layout-builder/creating-layout-defaults\">";
        // line 33
        echo t("Creating layout defaults", array());
        echo "</a></li>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/layout-builder/building-layouts-using-the-layout-builder-ui\">";
        // line 34
        echo t("Building Layouts Using the Layout Builder UI", array());
        echo "</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/layout_builder.overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  134 => 33,  129 => 31,  123 => 28,  119 => 27,  115 => 26,  111 => 25,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  87 => 19,  83 => 18,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  61 => 12,  59 => 11,  57 => 10,  55 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 9 %}{% set content_types = render_var(url('entity.node_type.collection')) %}
{% set entities = render_var(url('help.help_topic', {'id': 'core.content_structure'})) %}
{% set blocks = render_var(url('help.help_topic', {'id': 'block.overview'})) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure an entity sub-type to have its fields displayed using a layout (see <a href=\"{{ entities }}\">Managing content structure</a> for more on entities and fields).{% endtrans %}</p>
<h2>{% trans %}What are the parts of a layout?{% endtrans %}</h2>
<p>{% trans %}A layout consists of one or more <em>sections</em>. Each section can have from one to four <em>columns</em>. You can place blocks, including special blocks for the fields on the entity sub-type, in each column of each section (see <a href=\"{{ blocks }}\">Managing blocks</a> for more on blocks).{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}Navigate to the page for managing the entity type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"{{ content_types }}\"><em>Content types</em></a>.{% endtrans %}</li>
  <li>{% trans %}Find the particular sub-type that you want to create a layout for, and click <em>Manage display</em> in the <em>Operations</em> list.{% endtrans %}</li>
  <li>{% trans %}Under <em>Layout options</em>, check <em>Use Layout Builder</em>. You can also check the box below to allow each entity item to have its layout individually customized (if it is left unchecked, the site will use the same layout for all items of this entity sub-type).{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em>. You will be returned to the <em>Manage display</em> page, but you will no longer see the table of fields of the classic display manager.{% endtrans %}</li>
  <li>{% trans %}Click <em>Manage layout</em> to enter layout management view. A default layout will be set up for you, with a single one-column section containing the fields on your entity sub-type.{% endtrans %}</li>
  <li>{% trans %}To remove the default section and start from an empty layout, find and click the <em>Remove</em> button for the default section, which looks like an X. Confirm by clicking <em>Remove</em> in the pop-up dialog.{% endtrans %}</li>
  <li>{% trans %}Add new sections, each with one to four columns, to your layout. For instance, you might want a one-column section at the top, a two-column section in the middle, and then a one-column section at the bottom. To add a section, click <em>Add section</em> and click the desired number of columns. For multi-column sections, set the column width percentages and click <em>Add section</em> in the pop-up dialog.{% endtrans %}</li>
  <li>{% trans %}In each section, click <em>Add block</em> to add a block. You will see a list of the blocks available on your site, plus a section called <em>Content fields</em> with a block for each field on your content item. Each block can be configured, if desired, with a <em>Title</em>, and for content field blocks, you can also configure the field formatter. Continue to add blocks to your sections until all the desired blocks and fields are displayed.{% endtrans %}</li>
  <li>{% trans %}Verify your layout. You can check <em>Show content preview</em> to show a preview of what your layout will look like, or uncheck it to see the names of the fields and blocks in each section.{% endtrans %}</li>
  <li>{% trans %}If needed, reorder the blocks by dragging them to new locations. If you hover over a block, a contextual menu will appear that will let you change the configuration of the block, remove the block, or <em>Move</em> blocks within the section using a more compact interface.{% endtrans %}</li>
  <li>{% trans %}When you are satisfied with your layout, click <em>Save layout</em>.{% endtrans %}</li>
</ol>

<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/layout-builder/creating-layout-defaults\">{% trans %}Creating layout defaults{% endtrans %}</a></li>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/layout-builder/building-layouts-using-the-layout-builder-ui\">{% trans %}Building Layouts Using the Layout Builder UI{% endtrans %}</a></li>
</ul>", "@help_topics/layout_builder.overview.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/layout_builder.overview.html.twig");
    }
}
