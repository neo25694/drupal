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

/* @help_topics/core.ui_components.html.twig */
class __TwigTemplate_12f265d0b9eb781e61816cb848f7b548b356e8fbc489576364b2ff6464e41bf5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 7];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
                []
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
        echo "<h2>";
        echo t("Administrative interface overview", array());
        echo "</h2>
<p>";
        // line 8
        echo t("The administrative interface has several components:", array());
        echo "</p>
<ul>
  <li>";
        // line 10
        echo t("Accessibility features, to enable all users to perform administrative tasks.", array());
        echo "</li>
  <li>";
        // line 11
        echo t("A menu system, which you can navigate to find pages for administrative tasks. The core Toolbar module displays this menu on the top or left side of the page (right side in right-to-left languages). There are also contributed module replacements for the core Toolbar module, with additional features, such as the <a href=\"https://www.drupal.org/project/admin_toolbar\">Admin Toolbar module</a>.", array());
        echo "</li>
  <li>";
        // line 12
        echo t("The core Shortcuts module enhances the toolbar with a configurable list of links to commonly-used tasks.", array());
        echo "</li>
  <li>";
        // line 13
        echo t("If you install the core Contextual Links module, non-administrative pages will contain links leading to related administrative tasks.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("The core Help module displays help topics, and provides a Help block that can be placed on administrative pages to provide an overview of their functionality.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("The core Tour module allows modules to provide interactive tours of administrative pages for more detailed help.", array());
        echo "</li>
</ul>

<p>";
        // line 18
        echo t("See the related topics listed below for specific tasks.", array());
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "@help_topics/core.ui_components.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 18,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  60 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}<h2>{% trans %}Administrative interface overview{% endtrans %}</h2>
<p>{% trans %}The administrative interface has several components:{% endtrans %}</p>
<ul>
  <li>{% trans %}Accessibility features, to enable all users to perform administrative tasks.{% endtrans %}</li>
  <li>{% trans %}A menu system, which you can navigate to find pages for administrative tasks. The core Toolbar module displays this menu on the top or left side of the page (right side in right-to-left languages). There are also contributed module replacements for the core Toolbar module, with additional features, such as the <a href=\"https://www.drupal.org/project/admin_toolbar\">Admin Toolbar module</a>.{% endtrans %}</li>
  <li>{% trans %}The core Shortcuts module enhances the toolbar with a configurable list of links to commonly-used tasks.{% endtrans %}</li>
  <li>{% trans %}If you install the core Contextual Links module, non-administrative pages will contain links leading to related administrative tasks.{% endtrans %}</li>
  <li>{% trans %}The core Help module displays help topics, and provides a Help block that can be placed on administrative pages to provide an overview of their functionality.{% endtrans %}</li>
  <li>{% trans %}The core Tour module allows modules to provide interactive tours of administrative pages for more detailed help.{% endtrans %}</li>
</ul>

<p>{% trans %}See the related topics listed below for specific tasks.{% endtrans %}</p>", "@help_topics/core.ui_components.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/core.ui_components.html.twig");
    }
}
