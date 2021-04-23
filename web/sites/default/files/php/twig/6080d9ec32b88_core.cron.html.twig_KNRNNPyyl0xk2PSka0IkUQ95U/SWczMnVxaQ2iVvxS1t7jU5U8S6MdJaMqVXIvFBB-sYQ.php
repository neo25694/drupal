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

/* @help_topics/core.cron.html.twig */
class __TwigTemplate_1a37dbd2b8a4d6b2ebe2a9309cc4611bb7a9f5bb1d4bcd5f382fa71ea5fdcdc8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 6, "trans" => 7];
        $filters = ["escape" => 19];
        $functions = ["render_var" => 6, "url" => 6];

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
        // line 6
        $context["cron"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.cron_settings"));
        // line 7
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Configure your system so that cron will run automatically.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("What are cron tasks?", array());
        echo "</h2>
<p>";
        // line 10
        echo t("To ensure that your site and its modules continue to function well, a group of administrative operations should be run periodically. These operations are called <em>cron</em> tasks, and running the tasks is known as <em>running cron</em>. Depending on how often content is updated on your site, you might need to run cron on a schedule ranging from hourly to weekly to keep your site running well.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("What options are available for running cron?", array());
        echo "</h2>
<ul>
  <li>";
        // line 13
        echo t("If the core Automated Cron module is installed, your site will run cron periodically, on a schedule you can configure.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("You can set up a task on your web server to visit the <em> cron URL</em>, which is unique to your site, on a schedule.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("You can also run cron manually, but this is not the recommended way to make sure it is run periodically.", array());
        echo "</li>
</ul>
<h2>";
        // line 17
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 19
        echo t("In the <em>Manage</em> administration menu, navigate to <em>Configuration</em> &gt; <em>System</em> &gt; <a href=\"@cron\"><em>Cron</em></a>. Note the <em>Last run</em> time on the page.", array("@cron" => ($context["cron"] ?? null), ));
        echo "</li>
  <li>";
        // line 20
        echo t("If you want to run cron right now, click <em>Run cron</em> and wait for cron to finish.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("If you have a way to configure tasks on your web server, copy the link where it says <em>To run cron from outside the site, go to</em>. Set up a task to visit that URL on your desired cron schedule, such as once an hour or once a week. (On Linux-like servers, you can use the <em>wget</em> command to visit a URL.) If you configure an outside task, you should uninstall the Automated Cron module.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("If you are not configuring an outside task, and you have the core Automated Cron module installed, select a schedule for automated cron runs in <em>Cron settings</em> &gt; <em>Run cron every</em>. Click <em>Save configuration</em>.", array());
        echo "</li>
</ol>
<h2>";
        // line 24
        echo t("Additional resources", array());
        echo "</h2>
<ul>
    <li>";
        // line 26
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/security-cron-concept.html\">Concept: Cron in the User Guide</a>", array());
        echo "</li>
    <li>";
        // line 27
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/security-cron.html\">Configuring Cron Maintenance Tasks in the User Guide</a>", array());
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/core.cron.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 27,  119 => 26,  114 => 24,  109 => 22,  105 => 21,  101 => 20,  97 => 19,  92 => 17,  87 => 15,  83 => 14,  79 => 13,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  57 => 7,  55 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 6 %}{% set cron = render_var(url('system.cron_settings')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure your system so that cron will run automatically.{% endtrans %}</p>
<h2>{% trans %}What are cron tasks?{% endtrans %}</h2>
<p>{% trans %}To ensure that your site and its modules continue to function well, a group of administrative operations should be run periodically. These operations are called <em>cron</em> tasks, and running the tasks is known as <em>running cron</em>. Depending on how often content is updated on your site, you might need to run cron on a schedule ranging from hourly to weekly to keep your site running well.{% endtrans %}</p>
<h2>{% trans %}What options are available for running cron?{% endtrans %}</h2>
<ul>
  <li>{% trans %}If the core Automated Cron module is installed, your site will run cron periodically, on a schedule you can configure.{% endtrans %}</li>
  <li>{% trans %}You can set up a task on your web server to visit the <em> cron URL</em>, which is unique to your site, on a schedule.{% endtrans %}</li>
  <li>{% trans %}You can also run cron manually, but this is not the recommended way to make sure it is run periodically.{% endtrans %}</li>
</ul>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administration menu, navigate to <em>Configuration</em> &gt; <em>System</em> &gt; <a href=\"{{ cron }}\"><em>Cron</em></a>. Note the <em>Last run</em> time on the page.{% endtrans %}</li>
  <li>{% trans %}If you want to run cron right now, click <em>Run cron</em> and wait for cron to finish.{% endtrans %}</li>
  <li>{% trans %}If you have a way to configure tasks on your web server, copy the link where it says <em>To run cron from outside the site, go to</em>. Set up a task to visit that URL on your desired cron schedule, such as once an hour or once a week. (On Linux-like servers, you can use the <em>wget</em> command to visit a URL.) If you configure an outside task, you should uninstall the Automated Cron module.{% endtrans %}</li>
  <li>{% trans %}If you are not configuring an outside task, and you have the core Automated Cron module installed, select a schedule for automated cron runs in <em>Cron settings</em> &gt; <em>Run cron every</em>. Click <em>Save configuration</em>.{% endtrans %}</li>
</ol>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
    <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/security-cron-concept.html\">Concept: Cron in the User Guide</a>{% endtrans %}</li>
    <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/security-cron.html\">Configuring Cron Maintenance Tasks in the User Guide</a>{% endtrans %}</li>
</ul>", "@help_topics/core.cron.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/core.cron.html.twig");
    }
}
