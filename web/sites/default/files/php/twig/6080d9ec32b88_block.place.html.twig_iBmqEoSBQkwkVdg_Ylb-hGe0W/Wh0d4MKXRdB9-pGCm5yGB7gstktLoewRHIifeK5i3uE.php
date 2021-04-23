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

/* @help_topics/block.place.html.twig */
class __TwigTemplate_9f480c072a25fdce21837612fb8a7aab0842d917c76b850bd3a586520d0b6a6b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "trans" => 9];
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
        $context["layout_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("block.admin_display"));
        // line 8
        $context["configure"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "block.configure"]));
        // line 9
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Place a block into a theme's region.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 13
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"@layout_url\"><em>Block layout</em></a>.", array("@layout_url" => ($context["layout_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 14
        echo t("Click the name of the theme that you want to place the block in.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Optionally, click <em>Demonstrate block regions</em> to see the regions of the theme.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Find the region where you want the block, and click <em>Place block</em> in that region. A modal dialog will pop up.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Find the block you want to place and click <em>Place block</em>. A <em>Configure block</em> modal dialog will pop up.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Configure the block and click <em>Save block</em>; see <a href=\"@configure\">Configuring a previously-placed block</a> for configuration details.", array("@configure" => ($context["configure"] ?? null), ));
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/block.place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 18,  89 => 17,  85 => 16,  81 => 15,  77 => 14,  73 => 13,  68 => 11,  64 => 10,  59 => 9,  57 => 8,  55 => 7,);
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
{% set configure = render_var(url('help.help_topic', {'id': 'block.configure'})) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Place a block into a theme's region. {% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"{{ layout_url }}\"><em>Block layout</em></a>.{% endtrans %}</li>
  <li>{% trans %}Click the name of the theme that you want to place the block in.{% endtrans %}</li>
  <li>{% trans %}Optionally, click <em>Demonstrate block regions</em> to see the regions of the theme.{% endtrans %}</li>
  <li>{% trans %}Find the region where you want the block, and click <em>Place block</em> in that region. A modal dialog will pop up.{% endtrans %}</li>
  <li>{% trans %}Find the block you want to place and click <em>Place block</em>. A <em>Configure block</em> modal dialog will pop up.{% endtrans %}</li>
  <li>{% trans %}Configure the block and click <em>Save block</em>; see <a href=\"{{ configure }}\">Configuring a previously-placed block</a> for configuration details.{% endtrans %}</li>
</ol>", "@help_topics/block.place.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/block.place.html.twig");
    }
}
