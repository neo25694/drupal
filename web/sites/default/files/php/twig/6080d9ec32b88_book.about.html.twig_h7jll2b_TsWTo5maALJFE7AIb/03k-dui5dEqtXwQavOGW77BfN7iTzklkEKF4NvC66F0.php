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

/* @help_topics/book.about.html.twig */
class __TwigTemplate_3e520e97880ae619cfe29784056539e3ddc433ce9a0b20465f62289327bd543a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 5, "trans" => 6];
        $filters = ["escape" => 9];
        $functions = ["render_var" => 5, "url" => 5];

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
        // line 5
        $context["user_topic"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "user.overview"]));
        // line 6
        echo "<h2>";
        echo t("What is a book?", array());
        echo "</h2>
<p>";
        // line 7
        echo t("A book is a structured group of content pages, arranged in a hierarchical structure called a <em>book outline</em>. A book hierarchy can be up to nine levels deep, and a book can include <em>Book page</em> content items or other content items. Every book has a default book-specific navigation block, which contains links that lead to the previous and next pages in the book and to the level above the current page in the book's structure.", array());
        echo "</p>
<h2>";
        // line 8
        echo t("What are the permissions for books?", array());
        echo "</h2>
<p>";
        // line 9
        echo t("The following permissions are needed to create and manage books; see <a href=\"@user_topic\">Managing user accounts and site visitors</a> and its related topics for more about permissions.", array("@user_topic" => ($context["user_topic"] ?? null), ));
        echo "</p>
<dl>
  <dt>";
        // line 11
        echo t("Create new books", array());
        echo "</dt>
  <dd>";
        // line 12
        echo t("Allows users to add new books to the site.", array());
        echo "</dd>
  <dt>";
        // line 13
        echo t("Add content and child pages to books and manage their hierarchies", array());
        echo "</dt>
  <dd>";
        // line 14
        echo t("Allows users to add configured types of content to existing books.", array());
        echo "</dd>
  <dt>";
        // line 15
        echo t("Administer book outlines", array());
        echo "</dt>
  <dd>";
        // line 16
        echo t("Allows users to add <em>any</em> type of content to a book, use the book overview administration page, and rearrange the pages of a book from the book outline page.", array());
        // line 17
        echo "  <dt>";
        echo t("Administer site configuration (in the System module section)", array());
        echo "</dt>
  <dd>";
        // line 18
        echo t("Allows users to do many site configuration tasks, including configuring books. This permission has security implications.", array());
        // line 19
        echo "  </dd>
  <dt>";
        // line 20
        echo t("View printer-friendly books", array());
        echo "</dt>
  <dd>";
        // line 21
        echo t("Allows users to click the <em>printer-friendly version</em> link to generate a printer-friendly display of the page, which includes pages below it in the book outline.", array());
        // line 22
        echo "  </dd>
  <dt>";
        // line 23
        echo t("<em>Book page</em> content permissions (in the Node module section)", array());
        echo "</dt>
  <dd>";
        // line 24
        echo t("Like other content types, the <em>Book page</em> content type has separate permissions for creating, editing, and deleting a user's own and any content items of this type.", array());
        // line 25
        echo "  </dd>
</dl>
<h2>";
        // line 27
        echo t("Managing books", array());
        echo "</h2>
<p>";
        // line 28
        echo t("Book management is handled by the core Book module. The topics listed below will help you create, edit, and configure books.", array());
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "@help_topics/book.about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 28,  126 => 27,  122 => 25,  120 => 24,  116 => 23,  113 => 22,  111 => 21,  107 => 20,  104 => 19,  102 => 18,  97 => 17,  95 => 16,  91 => 15,  87 => 14,  83 => 13,  79 => 12,  75 => 11,  70 => 9,  66 => 8,  62 => 7,  57 => 6,  55 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 5 %}{% set user_topic = render_var(url('help.help_topic', {'id': 'user.overview'})) %}
<h2>{% trans %}What is a book?{% endtrans %}</h2>
<p>{% trans %}A book is a structured group of content pages, arranged in a hierarchical structure called a <em>book outline</em>. A book hierarchy can be up to nine levels deep, and a book can include <em>Book page</em> content items or other content items. Every book has a default book-specific navigation block, which contains links that lead to the previous and next pages in the book and to the level above the current page in the book's structure.{% endtrans %}</p>
<h2>{% trans %}What are the permissions for books?{% endtrans %}</h2>
<p>{% trans %}The following permissions are needed to create and manage books; see <a href=\"{{ user_topic }}\">Managing user accounts and site visitors</a> and its related topics for more about permissions.{% endtrans %}</p>
<dl>
  <dt>{% trans %}Create new books{% endtrans %}</dt>
  <dd>{% trans %}Allows users to add new books to the site.{% endtrans %}</dd>
  <dt>{% trans %}Add content and child pages to books and manage their hierarchies{% endtrans %}</dt>
  <dd>{% trans %}Allows users to add configured types of content to existing books.{% endtrans %}</dd>
  <dt>{% trans %}Administer book outlines{% endtrans %}</dt>
  <dd>{% trans %}Allows users to add <em>any</em> type of content to a book, use the book overview administration page, and rearrange the pages of a book from the book outline page.{% endtrans %}
  <dt>{% trans %}Administer site configuration (in the System module section){% endtrans %}</dt>
  <dd>{% trans %}Allows users to do many site configuration tasks, including configuring books. This permission has security implications.{% endtrans %}
  </dd>
  <dt>{% trans %}View printer-friendly books{% endtrans %}</dt>
  <dd>{% trans %}Allows users to click the <em>printer-friendly version</em> link to generate a printer-friendly display of the page, which includes pages below it in the book outline.{% endtrans %}
  </dd>
  <dt>{% trans %}<em>Book page</em> content permissions (in the Node module section){% endtrans %}</dt>
  <dd>{% trans %}Like other content types, the <em>Book page</em> content type has separate permissions for creating, editing, and deleting a user's own and any content items of this type.{% endtrans %}
  </dd>
</dl>
<h2>{% trans %}Managing books{% endtrans %}</h2>
<p>{% trans %}Book management is handled by the core Book module. The topics listed below will help you create, edit, and configure books.{% endtrans %}</p>", "@help_topics/book.about.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/book.about.html.twig");
    }
}
