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

/* @help_topics/block_content.type.html.twig */
class __TwigTemplate_91b42239773c41f26aa986d2edb584f34eed314d00a3e0b69973e4e2bbb27df7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 12, "trans" => 13];
        $filters = ["escape" => 17];
        $functions = ["render_var" => 12, "url" => 12];

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
        // line 12
        $context["types_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.block_content_type.collection"));
        // line 13
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 14
        echo t("Define a custom block type and its fields.", array());
        echo "</p>
<h2>";
        // line 15
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 17
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>Block layout</em> &gt; <em>Custom block library</em> &gt; <a href=\"@types_url\"><em>Block types</em></a>.", array("@types_url" => ($context["types_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 18
        echo t("Click  <em>Add custom block type</em>.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Enter a label for this block type (shown in the administrative interface). Optionally, edit the automatically-generated machine name or the description.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Click <em>Save</em>. You will be returned to the <em>Block types</em> page.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("Click <em>Manage fields</em> in the row of your new block type, and add the desired fields to your block type.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("Optionally, click <em>Manage form display</em> or <em>Manage display</em> to change the editing form or field display for your block type.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/block_content.type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  66 => 15,  62 => 14,  57 => 13,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 12 %}{% set types_url = render_var(url('entity.block_content_type.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Define a custom block type and its fields.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>Block layout</em> &gt; <em>Custom block library</em> &gt; <a href=\"{{ types_url }}\"><em>Block types</em></a>.{% endtrans %}</li>
  <li>{% trans %}Click  <em>Add custom block type</em>.{% endtrans %}</li>
  <li>{% trans %}Enter a label for this block type (shown in the administrative interface). Optionally, edit the automatically-generated machine name or the description.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em>. You will be returned to the <em>Block types</em> page.{% endtrans %}</li>
  <li>{% trans %}Click <em>Manage fields</em> in the row of your new block type, and add the desired fields to your block type.{% endtrans %}</li>
  <li>{% trans %}Optionally, click <em>Manage form display</em> or <em>Manage display</em> to change the editing form or field display for your block type.{% endtrans %}</li>
</ol>", "@help_topics/block_content.type.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/block_content.type.html.twig");
    }
}
