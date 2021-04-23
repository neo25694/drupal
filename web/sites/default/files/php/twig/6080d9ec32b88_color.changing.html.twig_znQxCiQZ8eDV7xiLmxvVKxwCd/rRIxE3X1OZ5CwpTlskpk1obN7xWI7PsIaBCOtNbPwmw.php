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

/* @help_topics/color.changing.html.twig */
class __TwigTemplate_f5f521f81c61ad7eb104ccd3eb40173f49bff2a047bea43965e1d90e057e9e1e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 6, "trans" => 7];
        $filters = ["escape" => 11];
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
        $context["appearance"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.themes_page"));
        // line 7
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Change the colors for links, backgrounds, and text in a theme that supports the Color module. Color-specific stylesheets will be generated and saved; you will need to follow these steps again to regenerate the stylesheets if you make any changes to the base stylesheets of your theme.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 11
        echo t("In the Manage administrative menu, navigate to <a href=\"@appearance\">Appearance</a>.", array("@appearance" => ($context["appearance"] ?? null), ));
        echo "</li>
  <li>";
        // line 12
        echo t("Click the <em>Settings</em> link for the theme you want to change the colors of.", array());
        echo "</li>
  <li>";
        // line 13
        echo t("In the <em>Color scheme</em> section, choose new colors for the backgrounds, text, and links that your theme defines colors for. However, if you do not see color settings, then your theme does not support the Color module.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("Click <em>Save configuration</em>. Color-specific stylesheets will be generated and saved in the file system.", array());
        echo "</li>
</ol>

<h2>";
        // line 17
        echo t("Additional resources", array());
        echo "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/color/overview\">";
        // line 19
        echo t("Color module overview", array());
        echo "</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/color.changing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  89 => 17,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  66 => 9,  62 => 8,  57 => 7,  55 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 6 %}{% set appearance = render_var(url('system.themes_page')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Change the colors for links, backgrounds, and text in a theme that supports the Color module. Color-specific stylesheets will be generated and saved; you will need to follow these steps again to regenerate the stylesheets if you make any changes to the base stylesheets of your theme.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the Manage administrative menu, navigate to <a href=\"{{ appearance }}\">Appearance</a>.{% endtrans %}</li>
  <li>{% trans %}Click the <em>Settings</em> link for the theme you want to change the colors of.{% endtrans %}</li>
  <li>{% trans %}In the <em>Color scheme</em> section, choose new colors for the backgrounds, text, and links that your theme defines colors for. However, if you do not see color settings, then your theme does not support the Color module.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save configuration</em>. Color-specific stylesheets will be generated and saved in the file system.{% endtrans %}</li>
</ol>

<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/color/overview\">{% trans %}Color module overview{% endtrans %}</a></li>
</ul>", "@help_topics/color.changing.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/color.changing.html.twig");
    }
}
