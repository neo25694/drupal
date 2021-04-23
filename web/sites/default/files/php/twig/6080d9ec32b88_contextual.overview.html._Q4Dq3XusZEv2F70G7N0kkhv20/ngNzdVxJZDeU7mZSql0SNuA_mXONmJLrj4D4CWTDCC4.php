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

/* @help_topics/contextual.overview.html.twig */
class __TwigTemplate_7fc299c7f33658482d926da11e8d1397ae52696a712eb97ce119c00ffa70b814 extends \Twig\Template
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
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Use contextual links to access administrative tasks without navigating the administrative menu.", array());
        // line 9
        echo "</p>
<h2>";
        // line 10
        echo t("What are contextual links?", array());
        echo "</h2>
<p>";
        // line 11
        echo t("<em>Contextual links</em> give users with the <em>Use contextual links</em> permission quick access to administrative tasks related to areas of non-administrative pages. For example, if a page on your site displays a block, the block would have a contextual link that would allow users with permission to configure the block. If the block contains a menu or a view, it would also have a contextual link for editing the menu links or the view. Clicking a contextual link takes you to the related administrative page directly, without needing to navigate through the administrative menu system.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 14
        echo t("Make sure that the core Contextual Links module is installed, and that you have a role with the <em>Use contextual links</em> permission. Optionally, make sure that a toolbar module is installed (either the core Toolbar module or a contributed module replacement).", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Visit a non-administrative page on your site, such as the home page.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Locate a block or another area on the page that you want to edit or configure.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Make the contextual links button visible by hovering your mouse over that area in the page. In most themes, this button looks like a pencil and is placed in the upper right corner of the page area (upper left for right-to-left languages), and hovering will also temporarily outline the affected area. Alternatively, click the contextual links toggle button on the right end of the toolbar (left end for right-to-left languages), which will make all contextual link buttons on the page visible until it is clicked again.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("While the contextual links button for the area of interest is visible, click the button to display the list of links for that area. Click a link in the list to visit the corresponding administrative page.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Complete your administrative task and save your settings, or cancel the action. You should be returned to the page you started from.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/contextual.overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 19,  94 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  73 => 12,  69 => 11,  65 => 10,  62 => 9,  60 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Use contextual links to access administrative tasks without navigating the administrative menu.{%
  endtrans %}</p>
<h2>{% trans %}What are contextual links?{% endtrans %}</h2>
<p>{% trans %}<em>Contextual links</em> give users with the <em>Use contextual links</em> permission quick access to administrative tasks related to areas of non-administrative pages. For example, if a page on your site displays a block, the block would have a contextual link that would allow users with permission to configure the block. If the block contains a menu or a view, it would also have a contextual link for editing the menu links or the view. Clicking a contextual link takes you to the related administrative page directly, without needing to navigate through the administrative menu system.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}Make sure that the core Contextual Links module is installed, and that you have a role with the <em>Use contextual links</em> permission. Optionally, make sure that a toolbar module is installed (either the core Toolbar module or a contributed module replacement).{% endtrans %}</li>
  <li>{% trans %}Visit a non-administrative page on your site, such as the home page.{% endtrans %}</li>
  <li>{% trans %}Locate a block or another area on the page that you want to edit or configure.{% endtrans %}</li>
  <li>{% trans %}Make the contextual links button visible by hovering your mouse over that area in the page. In most themes, this button looks like a pencil and is placed in the upper right corner of the page area (upper left for right-to-left languages), and hovering will also temporarily outline the affected area. Alternatively, click the contextual links toggle button on the right end of the toolbar (left end for right-to-left languages), which will make all contextual link buttons on the page visible until it is clicked again.{% endtrans %}</li>
  <li>{% trans %}While the contextual links button for the area of interest is visible, click the button to display the list of links for that area. Click a link in the list to visit the corresponding administrative page.{% endtrans %}</li>
  <li>{% trans %}Complete your administrative task and save your settings, or cancel the action. You should be returned to the page you started from.{% endtrans %}</li>
</ol>", "@help_topics/contextual.overview.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/contextual.overview.html.twig");
    }
}
