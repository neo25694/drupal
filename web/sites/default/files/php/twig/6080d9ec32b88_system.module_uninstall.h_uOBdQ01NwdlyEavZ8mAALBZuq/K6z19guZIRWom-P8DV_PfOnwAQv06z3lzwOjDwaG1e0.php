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

/* @help_topics/system.module_uninstall.html.twig */
class __TwigTemplate_792dfa220bc3e73b7a800bc30046666075df6852f4e6e13c9813b2f489b3358f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "trans" => 9];
        $filters = ["escape" => 10];
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
        $context["uninstall_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.modules_uninstall"));
        // line 9
        $context["maintenance_topic"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "system.maintenance_mode"]));
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Uninstall a module. Your site should be in <a href=\"@maintenance_topic\">maintenance mode</a> when you uninstall modules.", array("@maintenance_topic" => ($context["maintenance_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 11
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 13
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Extend</em> &gt; <a href=\"@uninstall_url\"><em>Uninstall</em></a>.", array("@uninstall_url" => ($context["uninstall_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 14
        echo t("Enter a word from the module name or description into the filter box, to make the list of modules smaller. Locate the module you want to uninstall.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("In the <em>Description</em> column, see if there are reasons that this module cannot be uninstalled. For example, you may have created content using this module (which you would need to delete first), or there may be another module installed that requires this module to be installed (you would need to uninstall the other module first).", array());
        echo "</li>
  <li>";
        // line 16
        echo t("If there are no reasons listed, the module can be uninstalled. Check the box in the <em>Uninstall</em> column, next to the module's name.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Click <em>Uninstall</em> at the bottom of the page. Verify the list of modules to be uninstalled and configuration to be deleted on the confirmation page, and click <em>Uninstall</em>.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Wait for the module to be uninstalled. You should be returned to the <em>Uninstall</em> page with a message saying the module was uninstalled.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/system.module_uninstall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  67 => 11,  63 => 10,  57 => 9,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 8 %}{% set uninstall_url = render_var(url('system.modules_uninstall')) %}
{% set maintenance_topic = render_var(url('help.help_topic', {'id': 'system.maintenance_mode'})) %}<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Uninstall a module. Your site should be in <a href=\"{{ maintenance_topic }}\">maintenance mode</a> when you uninstall modules.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Extend</em> &gt; <a href=\"{{ uninstall_url }}\"><em>Uninstall</em></a>.{% endtrans %}</li>
  <li>{% trans %}Enter a word from the module name or description into the filter box, to make the list of modules smaller. Locate the module you want to uninstall.{% endtrans %}</li>
  <li>{% trans %}In the <em>Description</em> column, see if there are reasons that this module cannot be uninstalled. For example, you may have created content using this module (which you would need to delete first), or there may be another module installed that requires this module to be installed (you would need to uninstall the other module first).{% endtrans %}</li>
  <li>{% trans %}If there are no reasons listed, the module can be uninstalled. Check the box in the <em>Uninstall</em> column, next to the module's name.{% endtrans %}</li>
  <li>{% trans %}Click <em>Uninstall</em> at the bottom of the page. Verify the list of modules to be uninstalled and configuration to be deleted on the confirmation page, and click <em>Uninstall</em>.{% endtrans %}</li>
  <li>{% trans %}Wait for the module to be uninstalled. You should be returned to the <em>Uninstall</em> page with a message saying the module was uninstalled.{% endtrans %}</li>
</ol>", "@help_topics/system.module_uninstall.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/system.module_uninstall.html.twig");
    }
}
