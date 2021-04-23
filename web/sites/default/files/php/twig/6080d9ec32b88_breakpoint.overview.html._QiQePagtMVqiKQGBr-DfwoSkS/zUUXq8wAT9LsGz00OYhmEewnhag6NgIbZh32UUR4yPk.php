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

/* @help_topics/breakpoint.overview.html.twig */
class __TwigTemplate_af3034b35ead753cd89765b77e32b578e6a52581a17e93b49e3ae22310059ca6 extends \Twig\Template
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
        echo t("What are breakpoints?", array());
        echo "</h2>
<p>";
        // line 7
        echo t("Breakpoints are the point at which your site's content will respond to provide the user with the best possible layout to consume the information. A breakpoint separates the height or width of viewports (screens, printers, and other media output types) into steps. For instance, a width breakpoint of 40em creates two steps: one for widths up to 40em and one for widths above 40em. Breakpoints can be used to define when layouts should shift from one form to another, when images should be resized, and other changes that need to respond to changes in viewport height or width.", array());
        echo "</p>
<h2>";
        // line 8
        echo t("What are media queries?", array());
        echo "</h2>
<p>";
        // line 9
        echo t("Media  queries are a formal way to encode breakpoints. For instance, a width breakpoint at 40em would be written as the media query \"(min-width: 40em)\". Breakpoints are really just media queries with some additional meta-data, such as a name and multiplier information.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("What are resolution multipliers?", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Resolution multipliers are a measure of the viewport's device resolution, defined to be the ratio between the physical pixel size of the active device and the <a href=\"http://en.wikipedia.org/wiki/Device_independent_pixel\">device-independent pixel</a> size. The Breakpoint module defines multipliers of 1, 1.5, and 2; when defining breakpoints, modules and themes can define which multipliers apply to each breakpoint.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("What is a breakpoint group?", array());
        echo "</h2>
<p>";
        // line 13
        echo t("Breakpoints can be organized into groups. Modules and themes should use groups to separate out breakpoints that are meant to be used for different purposes, such as breakpoints for layouts or breakpoints for image sizing.", array());
        echo "</p>
<h2>";
        // line 14
        echo t("Managing breakpoints and breakpoint groups overview", array());
        echo "</h2>
<p>";
        // line 15
        echo t("The <em>Breakpoint</em> module allows you to define breakpoints and breakpoint groups in YAML files. Modules and themes can use the API provided by the <em>Breakpoint</em> module to define breakpoints and breakpoint groups, and to assign resolution multipliers to breakpoints.", array());
        // line 16
        echo "</p>
<h2>";
        // line 17
        echo t("Additional resources", array());
        echo "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/documentation/modules/breakpoint\">";
        // line 19
        echo t("Working with breakpoints in Drupal 8", array());
        echo "</a></li>
  <li><a href=\"http://www.w3.org/TR/css3-mediaqueries/\">";
        // line 20
        echo t("W3C standards for media queries", array());
        echo "</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/breakpoint.overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  102 => 19,  97 => 17,  94 => 16,  92 => 15,  88 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  55 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 6 %}<h2>{% trans %}What are breakpoints?{% endtrans %}</h2>
<p>{% trans %}Breakpoints are the point at which your site's content will respond to provide the user with the best possible layout to consume the information. A breakpoint separates the height or width of viewports (screens, printers, and other media output types) into steps. For instance, a width breakpoint of 40em creates two steps: one for widths up to 40em and one for widths above 40em. Breakpoints can be used to define when layouts should shift from one form to another, when images should be resized, and other changes that need to respond to changes in viewport height or width.{% endtrans %}</p>
<h2>{% trans %}What are media queries?{% endtrans %}</h2>
<p>{% trans %}Media  queries are a formal way to encode breakpoints. For instance, a width breakpoint at 40em would be written as the media query \"(min-width: 40em)\". Breakpoints are really just media queries with some additional meta-data, such as a name and multiplier information.{% endtrans %}</p>
<h2>{% trans %}What are resolution multipliers?{% endtrans %}</h2>
<p>{% trans %}Resolution multipliers are a measure of the viewport's device resolution, defined to be the ratio between the physical pixel size of the active device and the <a href=\"http://en.wikipedia.org/wiki/Device_independent_pixel\">device-independent pixel</a> size. The Breakpoint module defines multipliers of 1, 1.5, and 2; when defining breakpoints, modules and themes can define which multipliers apply to each breakpoint.{% endtrans %}</p>
<h2>{% trans %}What is a breakpoint group?{% endtrans %}</h2>
<p>{% trans %}Breakpoints can be organized into groups. Modules and themes should use groups to separate out breakpoints that are meant to be used for different purposes, such as breakpoints for layouts or breakpoints for image sizing.{% endtrans %}</p>
<h2>{% trans %}Managing breakpoints and breakpoint groups overview{% endtrans %}</h2>
<p>{% trans %}The <em>Breakpoint</em> module allows you to define breakpoints and breakpoint groups in YAML files. Modules and themes can use the API provided by the <em>Breakpoint</em> module to define breakpoints and breakpoint groups, and to assign resolution multipliers to breakpoints.{% endtrans %}
</p>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
  <li><a href=\"https://www.drupal.org/documentation/modules/breakpoint\">{% trans %}Working with breakpoints in Drupal 8{% endtrans %}</a></li>
  <li><a href=\"http://www.w3.org/TR/css3-mediaqueries/\">{% trans %}W3C standards for media queries{% endtrans %}</a></li>
</ul>", "@help_topics/breakpoint.overview.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/breakpoint.overview.html.twig");
    }
}
