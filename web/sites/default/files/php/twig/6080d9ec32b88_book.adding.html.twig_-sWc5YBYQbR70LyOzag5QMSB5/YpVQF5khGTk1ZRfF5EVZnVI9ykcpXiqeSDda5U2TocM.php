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

/* @help_topics/book.adding.html.twig */
class __TwigTemplate_cc840f4fa649be4a2c1c21bf1263be161c1551970221c033107c71c5efa12c6c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 9, "trans" => 11];
        $filters = ["escape" => 15];
        $functions = ["render_var" => 9, "url" => 9];

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
        // line 9
        $context["node_add"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("node.add_page"));
        // line 10
        $context["config"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "book.configuring"]));
        // line 11
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 12
        echo t("Add a page to an existing book.", array());
        echo "</p>
<h2>";
        // line 13
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 15
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Content</em> &gt; <a href=\"@node_add\"><em>Add content</em></a> &gt; <em>Book page</em>. If you have configured additional content types that can be added to books, you can substitute a different content type for <em>Book page</em> (see the <a href=\"@config\">Configuring books</a> topic for more information).", array("@node_add" => ($context["node_add"] ?? null), "@config" => ($context["config"] ?? null), ));
        echo "</li>
  <li>";
        // line 16
        echo t("Enter a title for the page and some text for the body of the page.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("In the vertical tabs area, click <em>Book Outline</em>. Select the book you want to add the page to in the <em>Book</em> select list. If you want to insert this page into the book hierarchy, also select the desired parent page in the <em>Parent item</em> select list.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Select the desired weight for the page in the <em>Weight</em> select list (pages with the same parent item are ordered from lowest to highest weight).", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Click <em>Save</em> to add the page to the book.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/book.adding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  68 => 13,  64 => 12,  59 => 11,  57 => 10,  55 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 9 %}{% set node_add = render_var(url('node.add_page')) %}
{% set config = render_var(url('help.help_topic', {'id': 'book.configuring'})) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Add a page to an existing book.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Content</em> &gt; <a href=\"{{ node_add }}\"><em>Add content</em></a> &gt; <em>Book page</em>. If you have configured additional content types that can be added to books, you can substitute a different content type for <em>Book page</em> (see the <a href=\"{{ config }}\">Configuring books</a> topic for more information).{% endtrans %}</li>
  <li>{% trans %}Enter a title for the page and some text for the body of the page.{% endtrans %}</li>
  <li>{% trans %}In the vertical tabs area, click <em>Book Outline</em>. Select the book you want to add the page to in the <em>Book</em> select list. If you want to insert this page into the book hierarchy, also select the desired parent page in the <em>Parent item</em> select list.{% endtrans %}</li>
  <li>{% trans %}Select the desired weight for the page in the <em>Weight</em> select list (pages with the same parent item are ordered from lowest to highest weight).{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em> to add the page to the book.{% endtrans %}</li>
</ol>", "@help_topics/book.adding.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/book.adding.html.twig");
    }
}
