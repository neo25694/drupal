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

/* @help_topics/system.maintenance_mode.html.twig */
class __TwigTemplate_3e582ab9107ecac3bb806690f0df33f52d7333bacf2fb7e59936f8927064987e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "trans" => 9];
        $filters = ["escape" => 15];
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
        $context["maintenance_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.site_maintenance_mode"));
        // line 8
        $context["cache_help"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "system.cache"]));
        // line 9
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Put your site in maintenance mode to perform maintenance operations, and then return to normal mode when finished.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("What is maintenance mode?", array());
        echo "</h2>
<p>";
        // line 12
        echo t("When your site is in maintenance mode, most site visitors will see a simple maintenance mode message page, rather than being able to use the full functionality of the site. Users with <em>Use the site in maintenance mode</em> permission who are already logged in will be able to use the full site, and the log in page at <em>/user</em> will also be accessible to anyone.", array());
        echo "</p>
<h2>";
        // line 13
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 15
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <a href=\"@maintenance_url\"><em>Maintenance mode</em></a>.", array("@maintenance_url" => ($context["maintenance_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 16
        echo t("Check <em>Put site into maintenance mode</em>, optionally change the <em>Message to display when in maintenance mode</em>, and click <em>Save configuration</em>. Your site will be in maintenance mode.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Perform your maintenance operations.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em><a href=\"@maintenance_url\">Maintenance mode</a></em>.", array("@maintenance_url" => ($context["maintenance_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 19
        echo t("Uncheck <em>Put site into maintenance mode</em> and click <em>Save configuration</em>. Your site will be back in normal operation mode.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Clear the site cache. See <a href=\"@cache_help\">Clearing the site cache</a> for instructions.", array("@cache_help" => ($context["cache_help"] ?? null), ));
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/system.maintenance_mode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  97 => 19,  93 => 18,  89 => 17,  85 => 16,  81 => 15,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  59 => 9,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set maintenance_url = render_var(url('system.site_maintenance_mode')) %}
{% set cache_help = render_var(url('help.help_topic', {'id': 'system.cache'})) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Put your site in maintenance mode to perform maintenance operations, and then return to normal mode when finished.{% endtrans %}</p>
<h2>{% trans %}What is maintenance mode?{% endtrans %}</h2>
<p>{% trans %}When your site is in maintenance mode, most site visitors will see a simple maintenance mode message page, rather than being able to use the full functionality of the site. Users with <em>Use the site in maintenance mode</em> permission who are already logged in will be able to use the full site, and the log in page at <em>/user</em> will also be accessible to anyone.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <a href=\"{{ maintenance_url }}\"><em>Maintenance mode</em></a>.{% endtrans %}</li>
  <li>{% trans %}Check <em>Put site into maintenance mode</em>, optionally change the <em>Message to display when in maintenance mode</em>, and click <em>Save configuration</em>. Your site will be in maintenance mode.{% endtrans %}</li>
  <li>{% trans %}Perform your maintenance operations.{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em><a href=\"{{ maintenance_url }}\">Maintenance mode</a></em>.{% endtrans %}</li>
  <li>{% trans %}Uncheck <em>Put site into maintenance mode</em> and click <em>Save configuration</em>. Your site will be back in normal operation mode.{% endtrans %}</li>
  <li>{% trans %}Clear the site cache. See <a href=\"{{ cache_help }}\">Clearing the site cache</a> for instructions.{% endtrans %}</li>
</ol>", "@help_topics/system.maintenance_mode.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/system.maintenance_mode.html.twig");
    }
}
