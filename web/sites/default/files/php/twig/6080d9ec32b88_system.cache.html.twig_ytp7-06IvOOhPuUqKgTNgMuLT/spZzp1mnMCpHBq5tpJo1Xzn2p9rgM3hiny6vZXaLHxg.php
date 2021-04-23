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

/* @help_topics/system.cache.html.twig */
class __TwigTemplate_194ddc5d2f3e3e571e7ba1aa05fe0b2acdbf4dd40ef8890ba7fd19eee2aac22c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 6, "trans" => 7];
        $filters = ["escape" => 13];
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
        $context["performance_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.performance_settings"));
        // line 7
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Clear the data in the site cache.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("What is the cache?", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Some of the calculations that are done when your site loads a page take a long time to run. To save time when these calculations would need to be done again, their results can be <em>cached</em> in your site's database. There are internal mechanisms to <em>clear</em> cached data when the conditions or assumptions that went into the calculation have changed, but you can also clear cached data manually. When your site is misbehaving, a good first step is to clear the cache and see if the problem goes away.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 13
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em><a href=\"@performance_url\"><em>Performance</em></a></em>.", array("@performance_url" => ($context["performance_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 14
        echo t("Click <em>Clear all caches</em>. Your site's cached data will be cleared.", array());
        echo "</li>
</ol>
<h2>";
        // line 16
        echo t("Additional resources", array());
        echo "</h2>
<ul>
    <li>";
        // line 18
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/prevent-cache.html\">Concept: Cache in the User Guide</a>", array());
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/system.cache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 18,  88 => 16,  83 => 14,  79 => 13,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  57 => 7,  55 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 6 %}{% set performance_url = render_var(url('system.performance_settings')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Clear the data in the site cache.{% endtrans %}</p>
<h2>{% trans %}What is the cache?{% endtrans %}</h2>
<p>{% trans %}Some of the calculations that are done when your site loads a page take a long time to run. To save time when these calculations would need to be done again, their results can be <em>cached</em> in your site's database. There are internal mechanisms to <em>clear</em> cached data when the conditions or assumptions that went into the calculation have changed, but you can also clear cached data manually. When your site is misbehaving, a good first step is to clear the cache and see if the problem goes away.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em><a href=\"{{ performance_url }}\"><em>Performance</em></a></em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Clear all caches</em>. Your site's cached data will be cleared.{% endtrans %}</li>
</ol>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
    <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/prevent-cache.html\">Concept: Cache in the User Guide</a>{% endtrans %}</li>
</ul>", "@help_topics/system.cache.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/system.cache.html.twig");
    }
}
