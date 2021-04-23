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

/* @help_topics/block.configure.html.twig */
class __TwigTemplate_6b87097bb4754cd0463518aa9293ce6cfe0224a02da08d9a29020803e51935f5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "trans" => 8];
        $filters = ["escape" => 12];
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
        $context["layout_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("block.admin_display"));
        // line 8
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 9
        echo t("Configure the settings of a block that was previously placed in a region of a theme.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 12
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"@layout_url\"><em>Block layout</em></a>.", array("@layout_url" => ($context["layout_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 13
        echo t("Click the name of the theme that contains the block.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("Optionally, click <em>Demonstrate block regions</em> to see the regions of the theme.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("If you only want to change the region where a block is located, or the ordering of blocks within a region, drag blocks to their desired positions and click <em>Save blocks</em>.", array());
        echo "</li>
<li>";
        // line 16
        echo t("If you want to change additional settings, find the region where the block you want to update is currently located, and click <em>Configure</em> in the line of the block description.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Edit the block's settings. The available settings vary depending on the module that provides the block, but for all blocks you can change:", array());
        // line 18
        echo "    <ul>
      <li>";
        // line 19
        echo t("<em>Block title</em>: The heading for the block on your site -- for some blocks, you will need to check the <em>Override title</em> checkbox in order to enter a title", array());
        echo "</li>
      <li>";
        // line 20
        echo t("<em>Display title</em>: Check the box if you want the title displayed", array());
        echo "</li>
      <li>";
        // line 21
        echo t("<em>Visibility</em>: Add conditions for when the block should be displayed", array());
        echo "</li>
      <li>";
        // line 22
        echo t("<em>Region</em>: Change the theme region the block is displayed in", array());
        echo "</li>
    </ul>
  </li>
  <li>";
        // line 25
        echo t("Click <em>Save block</em>.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/block.configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  93 => 18,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  66 => 10,  62 => 9,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set layout_url = render_var(url('block.admin_display')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure the settings of a block that was previously placed in a region of a theme.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"{{ layout_url }}\"><em>Block layout</em></a>.{% endtrans %}</li>
  <li>{% trans %}Click the name of the theme that contains the block.{% endtrans %}</li>
  <li>{% trans %}Optionally, click <em>Demonstrate block regions</em> to see the regions of the theme.{% endtrans %}</li>
  <li>{% trans %}If you only want to change the region where a block is located, or the ordering of blocks within a region, drag blocks to their desired positions and click <em>Save blocks</em>.{% endtrans %}</li>
<li>{% trans %}If you want to change additional settings, find the region where the block you want to update is currently located, and click <em>Configure</em> in the line of the block description.{% endtrans %}</li>
  <li>{% trans %}Edit the block's settings. The available settings vary depending on the module that provides the block, but for all blocks you can change:{% endtrans %}
    <ul>
      <li>{% trans %}<em>Block title</em>: The heading for the block on your site -- for some blocks, you will need to check the <em>Override title</em> checkbox in order to enter a title{% endtrans %}</li>
      <li>{% trans %}<em>Display title</em>: Check the box if you want the title displayed{% endtrans %}</li>
      <li>{% trans %}<em>Visibility</em>: Add conditions for when the block should be displayed{% endtrans %}</li>
      <li>{% trans %}<em>Region</em>: Change the theme region the block is displayed in{% endtrans %}</li>
    </ul>
  </li>
  <li>{% trans %}Click <em>Save block</em>.{% endtrans %}</li>
</ol>", "@help_topics/block.configure.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/block.configure.html.twig");
    }
}
