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

/* @help_topics/system.theme_uninstall.html.twig */
class __TwigTemplate_c21ddc0f24a7cae5fe74a6a89924c562d5b3cb33f006ece4e30fddfc89c63a91 extends \Twig\Template
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
        echo t("Uninstall a theme that was previously installed, but is no longer being used on the site.", array());
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
        echo t("Locate the theme that you want to uninstall, in the <em>Installed themes</em> section.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("Click the <em>Uninstall</em> link to install the theme. If there is not an <em>Uninstall</em> link, the theme cannot be uninstalled because it is either being used as the site default theme, being used as the <em>Administration theme</em>, or is the base theme for another installed theme.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/system.theme_uninstall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  75 => 13,  71 => 12,  66 => 10,  62 => 9,  57 => 8,  55 => 7,);
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
<p>{% trans %}Uninstall a theme that was previously installed, but is no longer being used on the site.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <a href=\"{{ themes_url }}\"><em>Appearance</em></a>.{% endtrans %}</li>
  <li>{% trans %}Locate the theme that you want to uninstall, in the <em>Installed themes</em> section.{% endtrans %}</li>
  <li>{% trans %}Click the <em>Uninstall</em> link to install the theme. If there is not an <em>Uninstall</em> link, the theme cannot be uninstalled because it is either being used as the site default theme, being used as the <em>Administration theme</em>, or is the base theme for another installed theme.{% endtrans %}</li>
</ol>", "@help_topics/system.theme_uninstall.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/system.theme_uninstall.html.twig");
    }
}
