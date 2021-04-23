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

/* @help_topics/shortcut.overview.html.twig */
class __TwigTemplate_402868ac387cc681fb919e91a847285af7d06601b0468b7b1d7f0dfb2b316a10 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 6];
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
        // line 6
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 7
        echo t("Create, view, and use a set of shortcuts to access administrative pages.", array());
        echo "</p>
<h2>";
        // line 8
        echo t("What are shortcuts?", array());
        echo "</h2>
<p>";
        // line 9
        echo t("<em>Shortcuts</em> are quick links to administrative pages; they are managed by the core Shortcut module. A site can have one or more <em>shortcut sets</em>, which can be shared by one or more users (by default, there is only one set shared by all users); each set contains a limited number of shortcuts. Users need <em>Use shortcuts</em> permission to view shortcuts; <em>Edit current shortcut set</em> permission to add, delete, or edit the shortcuts in the set assigned to them; and <em>Select any shortcut set</em> permission to select a different shortcut set when editing their user profile. There is also an <em>Administer shortcuts</em> permission, which allows an administrator to do any of these actions, as well as select shortcut sets for other users.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 12
        echo t("Make sure that the core Shortcut module is enabled, and that you have a role with <em>Edit current shortcut set</em> or <em>Administer shortcuts</em> permission. Also, make sure that a toolbar module is installed (either the core Toolbar module or a contributed module replacement).", array());
        echo "</li>
  <li>";
        // line 13
        echo t("Navigate to an administrative page that you want in your shortcut list.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("Click the shortcut link to add the page to your shortcut list -- in the core Seven administrative theme, the link looks like a star, and is displayed next to the page title. However, if the page is already in your shortcut set, clicking the shortcut link will remove it from your shortcut set.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Repeat until all the desired links have been added to your shortcut set.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Click <em>Shortcuts</em> in the toolbar to display your shortcuts, and verify that the list is complete.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Optionally, click <em>Edit shortcuts</em> at the right end of the shortcut list (left end in right-to-left languages), to remove links or change their order.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Click any link in the shortcut bar to go directly to the administrative page.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/shortcut.overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 18,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  55 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 6 %}<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Create, view, and use a set of shortcuts to access administrative pages.{% endtrans %}</p>
<h2>{% trans %}What are shortcuts?{% endtrans %}</h2>
<p>{% trans %}<em>Shortcuts</em> are quick links to administrative pages; they are managed by the core Shortcut module. A site can have one or more <em>shortcut sets</em>, which can be shared by one or more users (by default, there is only one set shared by all users); each set contains a limited number of shortcuts. Users need <em>Use shortcuts</em> permission to view shortcuts; <em>Edit current shortcut set</em> permission to add, delete, or edit the shortcuts in the set assigned to them; and <em>Select any shortcut set</em> permission to select a different shortcut set when editing their user profile. There is also an <em>Administer shortcuts</em> permission, which allows an administrator to do any of these actions, as well as select shortcut sets for other users.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}Make sure that the core Shortcut module is enabled, and that you have a role with <em>Edit current shortcut set</em> or <em>Administer shortcuts</em> permission. Also, make sure that a toolbar module is installed (either the core Toolbar module or a contributed module replacement).{% endtrans %}</li>
  <li>{% trans %}Navigate to an administrative page that you want in your shortcut list.{% endtrans %}</li>
  <li>{% trans %}Click the shortcut link to add the page to your shortcut list -- in the core Seven administrative theme, the link looks like a star, and is displayed next to the page title. However, if the page is already in your shortcut set, clicking the shortcut link will remove it from your shortcut set.{% endtrans %}</li>
  <li>{% trans %}Repeat until all the desired links have been added to your shortcut set.{% endtrans %}</li>
  <li>{% trans %}Click <em>Shortcuts</em> in the toolbar to display your shortcuts, and verify that the list is complete.{% endtrans %}</li>
  <li>{% trans %}Optionally, click <em>Edit shortcuts</em> at the right end of the shortcut list (left end in right-to-left languages), to remove links or change their order.{% endtrans %}</li>
  <li>{% trans %}Click any link in the shortcut bar to go directly to the administrative page.{% endtrans %}</li>
</ol>", "@help_topics/shortcut.overview.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/shortcut.overview.html.twig");
    }
}
