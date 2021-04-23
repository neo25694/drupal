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

/* @help_topics/field_ui.reference_field.html.twig */
class __TwigTemplate_6131608b9b80f0c5cdebc67e59e7fdc63247801b7f6b3f372c63d97d4ce5a44a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 9, "trans" => 11];
        $filters = ["escape" => 12];
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
        $context["content_structure"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "core.content_structure"]));
        // line 10
        $context["content_types"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node_type.collection"));
        // line 11
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 12
        echo t("Add an entity reference field to an entity sub-type; see <a href=\"@content_structure\">Managing content structure</a> for more information on entities and reference fields.", array("@content_structure" => ($context["content_structure"] ?? null), ));
        echo "</p>
<h2>";
        // line 13
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 15
        echo t("Navigate to the page for managing the entity sub-type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"@content_types\"><em>Content types</em></a>.", array("@content_types" => ($context["content_types"] ?? null), ));
        echo "</li>
  <li>";
        // line 16
        echo t("Find the particular sub-type that you want to add the field to, and click <em>Manage fields</em>.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Click <em>Add field</em>.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("In <em>Add a new field</em>, select the type of reference field you want to add. The <em>Reference</em> section of the select list shows the most common types of reference field; choose <em>Other...</em> if the entity type you want to reference is not listed.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("The <em>Label</em> field should now be visible; enter a label for the field, which is used as the field label for both content editing and content display.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Click <em>Save and continue</em>.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("On the next screen, verify that the type of entity you want to reference is shown in <em>Type of item to reference</em>, or select it if not. Enter a value for <em>Allowed number of values</em>. You can limit the field to one value per entity item, a set number of values, or set it to have unlimited values. Click <em>Save field settings</em>.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("On the next screen, optionally edit the settings for <em>Label</em>, <em>Help text</em> (text to be displayed below the field on the content editing page), and <em>Required field</em> (to make it so a value must be entered in order to save the content when editing).", array());
        echo "</li>
  <li>";
        // line 23
        echo t("In the <em>Reference type</em> section, you will usually want to limit the entity sub-types that can be referenced; for example, if you are creating a <em>Content</em> reference, you can check one or two <em>Content type</em> choices. The choices will be easier for content editors to scan if you also choose a sort value (normally the entity title or label field).", array());
        echo "</li>
  <li>";
        // line 24
        echo t("Click <em>Save settings</em>. You should be returned to the <em>Manage fields</em> page, with your new field in the list.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/field_ui.reference_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 24,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  68 => 13,  64 => 12,  59 => 11,  57 => 10,  55 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 9 %}{% set content_structure = render_var(url('help.help_topic', {'id': 'core.content_structure'})) %}
{% set content_types = render_var(url('entity.node_type.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Add an entity reference field to an entity sub-type; see <a href=\"{{ content_structure}}\">Managing content structure</a> for more information on entities and reference fields.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}Navigate to the page for managing the entity sub-type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"{{ content_types }}\"><em>Content types</em></a>.{% endtrans %}</li>
  <li>{% trans %}Find the particular sub-type that you want to add the field to, and click <em>Manage fields</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add field</em>.{% endtrans %}</li>
  <li>{% trans %}In <em>Add a new field</em>, select the type of reference field you want to add. The <em>Reference</em> section of the select list shows the most common types of reference field; choose <em>Other...</em> if the entity type you want to reference is not listed.{% endtrans %}</li>
  <li>{% trans %}The <em>Label</em> field should now be visible; enter a label for the field, which is used as the field label for both content editing and content display.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save and continue</em>.{% endtrans %}</li>
  <li>{% trans %}On the next screen, verify that the type of entity you want to reference is shown in <em>Type of item to reference</em>, or select it if not. Enter a value for <em>Allowed number of values</em>. You can limit the field to one value per entity item, a set number of values, or set it to have unlimited values. Click <em>Save field settings</em>.{% endtrans %}</li>
  <li>{% trans %}On the next screen, optionally edit the settings for <em>Label</em>, <em>Help text</em> (text to be displayed below the field on the content editing page), and <em>Required field</em> (to make it so a value must be entered in order to save the content when editing).{% endtrans %}</li>
  <li>{% trans %}In the <em>Reference type</em> section, you will usually want to limit the entity sub-types that can be referenced; for example, if you are creating a <em>Content</em> reference, you can check one or two <em>Content type</em> choices. The choices will be easier for content editors to scan if you also choose a sort value (normally the entity title or label field).{% endtrans %}</li>
  <li>{% trans %}Click <em>Save settings</em>. You should be returned to the <em>Manage fields</em> page, with your new field in the list.{% endtrans %}</li>
</ol>", "@help_topics/field_ui.reference_field.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/field_ui.reference_field.html.twig");
    }
}
