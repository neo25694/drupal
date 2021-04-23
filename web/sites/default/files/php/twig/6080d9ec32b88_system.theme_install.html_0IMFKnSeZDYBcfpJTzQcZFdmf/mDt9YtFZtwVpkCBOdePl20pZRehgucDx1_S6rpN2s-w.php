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

/* @help_topics/system.theme_install.html.twig */
class __TwigTemplate_b36c94e5fbf9dd097eeccf57e7353d9409777bf1325d0b79f32385e86af65c56 extends \Twig\Template
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
        $context["themes_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.themes_page"));
        // line 8
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 9
        echo t("Install a core theme, or a contributed theme that has already been downloaded. Choose the default themes to use for the site and for administrative pages.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 12
        echo t("In the <em>Manage</em> administrative menu, navigate to <a href=\"@themes_url\"><em>Appearance</em></a>.", array("@themes_url" => ($context["themes_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 13
        echo t("Locate the themes that you want to use as the site default theme and for administrative pages.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("For each of these themes, if the theme is in the <em>Uninstalled themes</em> section, click the <em>Install</em> link to install the theme. Wait for the theme to be installed (translations might be downloaded). You should be returned to the <em>Appearance</em> page.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Locate the theme that you want to be your default theme, which should now be in the <em>Installed themes</em> section. If it is not already labeled as the <em>default theme</em>, click the <em>Set as default</em> link.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("At the bottom of the page, select the <em>Administration theme</em> that you want to use on administrative pages. Click <em>Save configuration</em> if you selected a new theme.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("If you changed the default theme for your site, visit the site home page or another page on the non-administration part of your site and verify that the site is using the new theme. If you changed the administration theme, verify that the new theme is used on administrative pages.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/system.theme_install.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 17,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  66 => 10,  62 => 9,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set themes_url = render_var(url('system.themes_page')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Install a core theme, or a contributed theme that has already been downloaded. Choose the default themes to use for the site and for administrative pages.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <a href=\"{{ themes_url }}\"><em>Appearance</em></a>.{% endtrans %}</li>
  <li>{% trans %}Locate the themes that you want to use as the site default theme and for administrative pages.{% endtrans %}</li>
  <li>{% trans %}For each of these themes, if the theme is in the <em>Uninstalled themes</em> section, click the <em>Install</em> link to install the theme. Wait for the theme to be installed (translations might be downloaded). You should be returned to the <em>Appearance</em> page.{% endtrans %}</li>
  <li>{% trans %}Locate the theme that you want to be your default theme, which should now be in the <em>Installed themes</em> section. If it is not already labeled as the <em>default theme</em>, click the <em>Set as default</em> link.{% endtrans %}</li>
  <li>{% trans %}At the bottom of the page, select the <em>Administration theme</em> that you want to use on administrative pages. Click <em>Save configuration</em> if you selected a new theme.{% endtrans %}</li>
  <li>{% trans %}If you changed the default theme for your site, visit the site home page or another page on the non-administration part of your site and verify that the site is using the new theme. If you changed the administration theme, verify that the new theme is used on administrative pages.{% endtrans %}</li>
</ol>", "@help_topics/system.theme_install.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/system.theme_install.html.twig");
    }
}
