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

/* @help_topics/system.config_basic.html.twig */
class __TwigTemplate_47284903c1eefc112c20cc10d2152a1358c9b125dfd1661514298a99c9d327a1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "trans" => 10];
        $filters = ["escape" => 14];
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
        $context["regional_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.regional_settings"));
        // line 8
        $context["information_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.site_information_settings"));
        // line 9
        $context["datetime_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.date_format.collection"));
        // line 10
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Configure the basic settings of your site, including the site name, slogan, main email address, default time zone, default country, and the date formats to use.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 14
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>System</em> &gt; <em><a href=\"@information_url\">Basic site settings</a></em>.", array("@information_url" => ($context["information_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 15
        echo t("Enter the site name, slogan, and main email address for your site.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Regional and language</em> &gt; <em><a href=\"@regional_url\">Regional settings</a></em>.", array("@regional_url" => ($context["regional_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 18
        echo t("Select the default country and default time zone for your site.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Regional and language</em> &gt; <em><a href=\"@datetime_url\">Date and time formats</a></em>.", array("@datetime_url" => ($context["datetime_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 21
        echo t("Look at the <em>Patterns</em> for the Default long, medium, and short date formats. If any of them does not match the date format you want to use on your site, click <em>Edit</em> in that row to edit the format.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("Adjust the <em>Format string</em> until the <em>Displayed</em> format matches what you want. (Date format strings are composed of PHP date format codes.)", array());
        echo "</li>
  <li>";
        // line 23
        echo t("Click <em>Save format</em>. You should see a message indicating that the format was saved.", array());
        echo "</li>
  <li>";
        // line 24
        echo t("Repeat the previous three steps for any other date formats that need to be changed.", array());
        echo "</li>
</ol>
<h2>";
        // line 26
        echo t("Additional resources", array());
        echo "</h2>
<p>";
        // line 27
        echo t("<a href=\"https://php.net/manual/function.date.php\">PHP date format codes reference</a>", array());
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "@help_topics/system.config_basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 27,  120 => 26,  115 => 24,  111 => 23,  107 => 22,  103 => 21,  99 => 20,  95 => 19,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  70 => 12,  66 => 11,  61 => 10,  59 => 9,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set regional_url = render_var(url('system.regional_settings')) %}
{% set information_url = render_var(url('system.site_information_settings')) %}
{% set datetime_url = render_var(url('entity.date_format.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure the basic settings of your site, including the site name, slogan, main email address, default time zone, default country, and the date formats to use.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>System</em> &gt; <em><a href=\"{{ information_url }}\">Basic site settings</a></em>.{% endtrans %}</li>
  <li>{% trans %}Enter the site name, slogan, and main email address for your site. {% endtrans %}</li>
  <li>{% trans %}Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Regional and language</em> &gt; <em><a href=\"{{ regional_url }}\">Regional settings</a></em>.{% endtrans %}</li>
  <li>{% trans %}Select the default country and default time zone for your site.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Regional and language</em> &gt; <em><a href=\"{{ datetime_url }}\">Date and time formats</a></em>.{% endtrans %}</li>
  <li>{% trans %}Look at the <em>Patterns</em> for the Default long, medium, and short date formats. If any of them does not match the date format you want to use on your site, click <em>Edit</em> in that row to edit the format.{% endtrans %}</li>
  <li>{% trans %}Adjust the <em>Format string</em> until the <em>Displayed</em> format matches what you want. (Date format strings are composed of PHP date format codes.){% endtrans %}</li>
  <li>{% trans %}Click <em>Save format</em>. You should see a message indicating that the format was saved.{% endtrans %}</li>
  <li>{% trans %}Repeat the previous three steps for any other date formats that need to be changed.{% endtrans %}</li>
</ol>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<p>{% trans %}<a href=\"https://php.net/manual/function.date.php\">PHP date format codes reference</a>{% endtrans %}</p>", "@help_topics/system.config_basic.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/system.config_basic.html.twig");
    }
}
