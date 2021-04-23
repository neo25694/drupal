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

/* @help_topics/system.config_error.html.twig */
class __TwigTemplate_1dcef0d5f3b79495c991cb64594220d266172c5713845746ed412b76dc3523f1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "trans" => 9];
        $filters = ["escape" => 18];
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
        $context["log_settings_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.logging_settings"));
        // line 8
        $context["information_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.site_information_settings"));
        // line 9
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Set up your site to respond appropriately to site errors, including 403 and 404 page responses.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("What are 403 and 404 responses?", array());
        echo "</h2>
<p>";
        // line 12
        echo t("When a user visits a web page, the web server sends a response code in addition to the page content. A normal, non-error response has code 200. If the page does not exist on the site, the response code is 404. If the page exists, but the user is not authorized to visit the page, the response code is 403. The core software provides default responses for both 403 and 404 codes, but if you prefer, you can create your own pages for each.", array());
        echo "</p>
<h2>";
        // line 13
        echo t("What other errors can occur?", array());
        echo "</h2>
<p>";
        // line 14
        echo t("Under some situations, your site can generate error messages. These can be due to user errors (such as entering invalid values in a form, or incorrect configuration), PHP runtime errors, or software bugs. Some errors may result in a <em>white screen of death</em> (a totally blank web page response); less drastic errors will generate error messages. You can configure what happens when an error message is generated.", array());
        echo "</p>
<h2>";
        // line 15
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 17
        echo t("If desired, create pages to use for 403 and 404 responses. Note the URLs for these pages.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>System</em> &gt; <em><a href=\"@information_url\">Basic site settings</a></em>.", array("@information_url" => ($context["information_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 19
        echo t("In the <em>Error pages</em> section, enter the URL for your 403/403 pages, starting after the site home page URL. For example, if your site URL is <em>https://example.com</em> and your 404 page is <em>https://example.com/not-found</em>, you would enter <em>/not-found</em>.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em><a href=\"@log_settings_url\">Logging and errors</a></em>.", array("@log_settings_url" => ($context["log_settings_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 22
        echo t("For a production site, select <em>None</em> under <em>Error messages to display</em>. For a site that is in development, select one of the other options, so that you are more aware of the errors the site is generating.", array());
        echo "</li>
  <li>";
        // line 23
        echo t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/system.config_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 23,  109 => 22,  105 => 21,  101 => 20,  97 => 19,  93 => 18,  89 => 17,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  59 => 9,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set log_settings_url = render_var(url('system.logging_settings')) %}
{% set information_url = render_var(url('system.site_information_settings')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Set up your site to respond appropriately to site errors, including 403 and 404 page responses.{% endtrans %}</p>
<h2>{% trans %}What are 403 and 404 responses?{% endtrans %}</h2>
<p>{% trans %}When a user visits a web page, the web server sends a response code in addition to the page content. A normal, non-error response has code 200. If the page does not exist on the site, the response code is 404. If the page exists, but the user is not authorized to visit the page, the response code is 403. The core software provides default responses for both 403 and 404 codes, but if you prefer, you can create your own pages for each.{% endtrans %}</p>
<h2>{% trans %}What other errors can occur?{% endtrans %}</h2>
<p>{% trans %}Under some situations, your site can generate error messages. These can be due to user errors (such as entering invalid values in a form, or incorrect configuration), PHP runtime errors, or software bugs. Some errors may result in a <em>white screen of death</em> (a totally blank web page response); less drastic errors will generate error messages. You can configure what happens when an error message is generated.{% endtrans %}</p>
<h2>{% trans %}Steps {% endtrans %}</h2>
<ol>
  <li>{% trans %}If desired, create pages to use for 403 and 404 responses. Note the URLs for these pages.{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>System</em> &gt; <em><a href=\"{{ information_url }}\">Basic site settings</a></em>.{% endtrans %}</li>
  <li>{% trans %}In the <em>Error pages</em> section, enter the URL for your 403/403 pages, starting after the site home page URL. For example, if your site URL is <em>https://example.com</em> and your 404 page is <em>https://example.com/not-found</em>, you would enter <em>/not-found</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em><a href=\"{{ log_settings_url }}\">Logging and errors</a></em>.{% endtrans %}</li>
  <li>{% trans %}For a production site, select <em>None</em> under <em>Error messages to display</em>. For a site that is in development, select one of the other options, so that you are more aware of the errors the site is generating.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.{% endtrans %}</li>
</ol>", "@help_topics/system.config_error.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/system.config_error.html.twig");
    }
}
