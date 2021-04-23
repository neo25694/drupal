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

/* @help_topics/system.reports.html.twig */
class __TwigTemplate_8e60c4ac04634aaea43b68c2cfc3d6aa19091b0c6548f93677899532815ba35d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "trans" => 9];
        $filters = ["escape" => 13];
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
        $context["status_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.status"));
        // line 9
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Run reports to learn about the status and health of your site.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 13
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <a href=\"@status_url\"><em>Status report</em></a> to see a report that summarizes the health and status of your site. If there are any warnings or errors, you will need to fix them.", array("@status_url" => ($context["status_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 14
        echo t("If you have the core Database Logging module installed, in the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>Recent log messages</em> to see a report of the error and informational messages your site has generated. You can filter the report by <em>Severity</em> to see only the most critical messages, if desired.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("If you have the core Update Manager module installed, in the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>Available updates</em> to see a report of the updates that are available for your site software. If <em>Last checked</em> is far in the past, click <em>Check manually</em> to update the report. Scan the report; if Drupal core or any modules or themes have security updates available, you should update them as soon as possible.", array());
        echo "</li>
</ol>
<h2>";
        // line 17
        echo t("Additional resources", array());
        echo "</h2>
<ul>
    <li>";
        // line 19
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/security-chapter.html\">Security and Maintenance chapter in the User Guide</a>, which includes information on how to update your site's core software, modules, and themes", array());
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/system.reports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  84 => 17,  79 => 15,  75 => 14,  71 => 13,  66 => 11,  62 => 10,  57 => 9,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 8 %}{% set status_url = render_var(url('system.status')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Run reports to learn about the status and health of your site.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <a href=\"{{ status_url }}\"><em>Status report</em></a> to see a report that summarizes the health and status of your site. If there are any warnings or errors, you will need to fix them.{% endtrans %}</li>
  <li>{% trans %}If you have the core Database Logging module installed, in the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>Recent log messages</em> to see a report of the error and informational messages your site has generated. You can filter the report by <em>Severity</em> to see only the most critical messages, if desired.{% endtrans %}</li>
  <li>{% trans %}If you have the core Update Manager module installed, in the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>Available updates</em> to see a report of the updates that are available for your site software. If <em>Last checked</em> is far in the past, click <em>Check manually</em> to update the report. Scan the report; if Drupal core or any modules or themes have security updates available, you should update them as soon as possible.{% endtrans %}</li>
</ol>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
    <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/security-chapter.html\">Security and Maintenance chapter in the User Guide</a>, which includes information on how to update your site's core software, modules, and themes{% endtrans %}</li>
</ul>", "@help_topics/system.reports.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/system.reports.html.twig");
    }
}
