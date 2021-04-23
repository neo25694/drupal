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

/* @help_topics/field_ui.add_field.html.twig */
class __TwigTemplate_af1fae7a391aa894936f8fa1c88a20337abb4dbfa3e8f05abd507e14dcc48134 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "trans" => 10];
        $filters = ["escape" => 11];
        $functions = ["render_var" => 8, "url" => 8];

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
        // line 8
        $context["content_types"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node_type.collection"));
        // line 9
        $context["content_structure"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "core.content_structure"]));
        // line 10
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Add a field to an entity sub-type; see <a href=\"@content_structure\">Managing content structure</a> for an overview of entity types and sub-types.", array("@content_structure" => ($context["content_structure"] ?? null), ));
        echo "</p>
<h2>";
        // line 12
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 14
        echo t("Navigate to the page for managing the entity sub-type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"@content_types\"><em>Content types</em></a>.", array("@content_types" => ($context["content_types"] ?? null), ));
        echo "</li>
  <li>";
        // line 15
        echo t("Find the particular sub-type that you want to add the field to, and click <em>Manage fields</em>.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Click <em>Add field</em>.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("In <em>Add a new field</em>, select the type of field you want to add; see <a href=\"@content_structure\">Managing content structure</a> for an overview of field types.", array("@content_structure" => ($context["content_structure"] ?? null), ));
        echo "</li>
  <li>";
        // line 18
        echo t("The <em>Label</em> field should now be visible; enter a label for the field, which is used as the field label for both content editing and content display.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Click <em>Save and continue</em>.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("On the next screen, enter a value for <em>Allowed number of values</em>. You can limit the field to one value per entity item, a set number of values, or set it to have unlimited values. Click <em>Save field settings</em>.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("On the next screen, optionally edit the settings for the field, which vary depending on what field type you are creating. For all fields, you can edit the <em>Label</em>, <em>Help text</em> (text to be displayed below the field on the content editing page), and <em>Required field</em> (to make it so a value must be entered in order to save the content when editing). You can also configure a default value for the field.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("Click <em>Save settings</em>. You should be returned to the <em>Manage fields</em> page, with your new field in the list.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/field_ui.add_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 22,  101 => 21,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  68 => 12,  64 => 11,  59 => 10,  57 => 9,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 8 %}{% set content_types = render_var(url('entity.node_type.collection')) %}
{% set content_structure = render_var(url('help.help_topic', {'id': 'core.content_structure'})) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Add a field to an entity sub-type; see <a href=\"{{ content_structure }}\">Managing content structure</a> for an overview of entity types and sub-types.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}Navigate to the page for managing the entity sub-type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"{{ content_types }}\"><em>Content types</em></a>.{% endtrans %}</li>
  <li>{% trans %}Find the particular sub-type that you want to add the field to, and click <em>Manage fields</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add field</em>.{% endtrans %}</li>
  <li>{% trans %}In <em>Add a new field</em>, select the type of field you want to add; see <a href=\"{{ content_structure }}\">Managing content structure</a> for an overview of field types.{% endtrans %}</li>
  <li>{% trans %}The <em>Label</em> field should now be visible; enter a label for the field, which is used as the field label for both content editing and content display.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save and continue</em>.{% endtrans %}</li>
  <li>{% trans %}On the next screen, enter a value for <em>Allowed number of values</em>. You can limit the field to one value per entity item, a set number of values, or set it to have unlimited values. Click <em>Save field settings</em>.{% endtrans %}</li>
  <li>{% trans %}On the next screen, optionally edit the settings for the field, which vary depending on what field type you are creating. For all fields, you can edit the <em>Label</em>, <em>Help text</em> (text to be displayed below the field on the content editing page), and <em>Required field</em> (to make it so a value must be entered in order to save the content when editing). You can also configure a default value for the field.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save settings</em>. You should be returned to the <em>Manage fields</em> page, with your new field in the list.{% endtrans %}</li>
</ol>", "@help_topics/field_ui.add_field.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/field_ui.add_field.html.twig");
    }
}
