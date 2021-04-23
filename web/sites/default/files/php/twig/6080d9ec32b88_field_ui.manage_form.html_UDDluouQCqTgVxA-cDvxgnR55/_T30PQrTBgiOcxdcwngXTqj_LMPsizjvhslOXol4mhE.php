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

/* @help_topics/field_ui.manage_form.html.twig */
class __TwigTemplate_15a727c524ce6a46bb2ec824bc46380f484df3697a1b1865c411699c37307cf1 extends \Twig\Template
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
        $context["content_types"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node_type.collection"));
        // line 10
        $context["content_structure"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "core.content_structure"]));
        // line 11
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 12
        echo t("Configure the <em>widgets</em> used to edit the fields of an entity sub-type, their order on the form, and the widget settings. See <a href=\"@content_structure\">Managing content structure</a> for background information.", array("@content_structure" => ($context["content_structure"] ?? null), ));
        echo "</p>
<h2>";
        // line 13
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 15
        echo t("Navigate to the page for managing the entity type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"@content_types\"><em>Content types</em></a>.", array("@content_types" => ($context["content_types"] ?? null), ));
        echo "</li>
  <li>";
        // line 16
        echo t("Find the particular sub-type that you want to configure the editing form for, and click <em>Manage form display</em> in the <em>Operations</em> list.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Use the drag arrows to order the fields in your preferred order.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Drag any fields that you do not wish to see on the editing form to the <em>Disabled</em> section.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("In the <em>Widget</em> column, select the widget for editing each field.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("After selecting the desired widgets, click the settings gear in each row to change the settings for the widget.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("When you are done making changes, click <em>Save</em>.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("Test the editing form for your entity sub-type by editing or creating an entity. If needed, return to these steps to further refine the form.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/field_ui.manage_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 22,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  68 => 13,  64 => 12,  59 => 11,  57 => 10,  55 => 9,);
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
{% set content_structure = render_var(url('help.help_topic', {'id': 'core.content_structure'})) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure the <em>widgets</em> used to edit the fields of an entity sub-type, their order on the form, and the widget settings. See <a href=\"{{ content_structure }}\">Managing content structure</a> for background information.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}Navigate to the page for managing the entity type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"{{ content_types }}\"><em>Content types</em></a>.{% endtrans %}</li>
  <li>{% trans %}Find the particular sub-type that you want to configure the editing form for, and click <em>Manage form display</em> in the <em>Operations</em> list.{% endtrans %}</li>
  <li>{% trans %}Use the drag arrows to order the fields in your preferred order.{% endtrans %}</li>
  <li>{% trans %}Drag any fields that you do not wish to see on the editing form to the <em>Disabled</em> section.{% endtrans %}</li>
  <li>{% trans %}In the <em>Widget</em> column, select the widget for editing each field.{% endtrans %}</li>
  <li>{% trans %}After selecting the desired widgets, click the settings gear in each row to change the settings for the widget.{% endtrans %}</li>
  <li>{% trans %}When you are done making changes, click <em>Save</em>.{% endtrans %}</li>
  <li>{% trans %}Test the editing form for your entity sub-type by editing or creating an entity. If needed, return to these steps to further refine the form.{% endtrans %}</li>
</ol>", "@help_topics/field_ui.manage_form.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/field_ui.manage_form.html.twig");
    }
}
