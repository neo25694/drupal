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

/* @help_topics/tour.overview.html.twig */
class __TwigTemplate_b509e55999a640bde0fe6f08849862f1959b3c18e3b0669fc098d8cac6e2e0ac extends \Twig\Template
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
        echo t("Take a tour of an administrative page.", array());
        echo "</p>
<h2>";
        // line 8
        echo t("What are tours?", array());
        echo "</h2>
<p>";
        // line 9
        echo t("The core Tour module provides users with <em>tours</em>, which are guided tours of the administrative interface. Each tour starts on a particular administrative page, and consists of one or more <em>tips</em> that highlight elements of the page, guide you through a workflow, or explain key concepts. Users need <em>Access tour</em> permission to view tours, and JavaScript must be enabled in their browsers.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 12
        echo t("Make sure that the core Tour module is installed, and that you have a role with the <em>Access tour</em> permission. Also, make sure that a toolbar module is installed (either the core Toolbar module or a contributed module replacement).", array());
        echo "</li>
  <li>";
        // line 13
        echo t("Visit an administrative page that has a tour, such as the edit view page provided by the core Views UI module.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("Click the <em>Tour</em> button at the right end of the toolbar (left end for right-to-left languages). The first tip of the tour should appear.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Click the <em>Next</em> button to advance to the next tip, and <em>End tour</em> at the end to close the tour.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/tour.overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 15,  85 => 14,  81 => 13,  77 => 12,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  55 => 6,);
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
<p>{% trans %}Take a tour of an administrative page.{% endtrans %}</p>
<h2>{% trans %}What are tours?{% endtrans %}</h2>
<p>{% trans %}The core Tour module provides users with <em>tours</em>, which are guided tours of the administrative interface. Each tour starts on a particular administrative page, and consists of one or more <em>tips</em> that highlight elements of the page, guide you through a workflow, or explain key concepts. Users need <em>Access tour</em> permission to view tours, and JavaScript must be enabled in their browsers.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}Make sure that the core Tour module is installed, and that you have a role with the <em>Access tour</em> permission. Also, make sure that a toolbar module is installed (either the core Toolbar module or a contributed module replacement).{% endtrans %}</li>
  <li>{% trans %}Visit an administrative page that has a tour, such as the edit view page provided by the core Views UI module.{% endtrans %}</li>
  <li>{% trans %}Click the <em>Tour</em> button at the right end of the toolbar (left end for right-to-left languages). The first tip of the tour should appear.{% endtrans %}</li>
  <li>{% trans %}Click the <em>Next</em> button to advance to the next tip, and <em>End tour</em> at the end to close the tour.{% endtrans %}</li>
</ol>", "@help_topics/tour.overview.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/tour.overview.html.twig");
    }
}
