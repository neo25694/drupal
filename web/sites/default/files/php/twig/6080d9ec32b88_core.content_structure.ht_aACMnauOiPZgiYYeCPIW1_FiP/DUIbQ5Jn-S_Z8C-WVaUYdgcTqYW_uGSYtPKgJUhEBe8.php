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

/* @help_topics/core.content_structure.html.twig */
class __TwigTemplate_da703a96724a2e1880d5d94e29dc1fb69104e5951884e5bdc6b715857c031baa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 5, "trans" => 6];
        $filters = ["escape" => 40];
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
        $context["help_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.main"));
        // line 6
        echo "<h2>";
        echo t("What types of data does a site have?", array());
        echo "</h2>
<p>";
        // line 7
        echo t("There are four main types of data. <em>Content</em> is the information (text, images, etc.) meant to be displayed to web site visitors. <em>Configuration</em> is data that defines how the content is displayed; some configuration (such as field labels) may also be visible to site visitors. <em>State</em> is temporary data about the state of your site, such as the last time the system <em>cron</em> jobs ran. <em>Session</em> is a subset of State information, related to users' interactions with the site, such as site cookies and whether or not they are logged in.", array());
        echo "</p>
<h2>";
        // line 8
        echo t("What is a content entity?", array());
        echo "</h2>
<p>";
        // line 9
        echo t("A <em>content entity</em> (or more commonly, <em>entity</em>) is an item of content data, which can consist of text, HTML markup, images, attached files, and other data. Content entities are grouped into <em>entity types</em>, which have different purposes and are displayed in very different ways on the site. Most entity types are also divided into <em>entity sub-types</em>, which are divisions within an entity type to allow for smaller variations in how the entities are used and displayed. For example, the <em>Content item</em> entity type that stores page-level content is divided into <em>content type</em> sub-types; the <em>Custom block</em> entity type has <em>custom block types</em>; but the <em>User</em> entity type (for user profile information) does not have sub-types.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("What is a field?", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Within entity items, the data is stored in individual <em>fields</em>, each of which holds one type of data, such as formatted or plain text, images or other files, or dates. Fields can be added by an administrator on entity sub-types, so that all entity items of a given entity sub-type have the same collection of fields available, and they can be single-valued or multiple-valued. When you create or edit entity items, you are specifying the values for the fields on the entity item.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("What is a reference field?", array());
        echo "</h2>
<p>";
        // line 13
        echo t("A <em>reference field</em> is a field that stores a relationship between an entity and one or more other entities, which may belong to the same or different entity type. For example, a <em>Content reference</em> field on a content type stores a relationship between one content item and one or more other content items.", array());
        echo "</p>
<h2>";
        // line 14
        echo t("What field types are available?", array());
        echo "</h2>
<p>";
        // line 15
        echo t("The following field types are provided by the core system and core modules (many more are provided by contributed modules):", array());
        echo "</p>
<ul>
  <li>";
        // line 17
        echo t("Boolean, Number (provided by the core system): Stores true/false values and numbers", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Comment (provided by the core Comment module): Allows users to add comments to an entity", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Date, Timestamp (Datetime module): Stores dates and times", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Date range (Datetime range module): Stores time/date periods with a start and and an end", array());
        echo "</li>
  <li>";
        // line 21
        echo t("Email (core system): Stores email addresses", array());
        echo "</li>
  <li>";
        // line 22
        echo t("Link (Link module): Stores URLs and link text", array());
        echo "</li>
  <li>";
        // line 23
        echo t("List (Options module): Stores values chosen from pre-defined lists; the values can be numbers or text", array());
        echo "</li>
  <li>";
        // line 24
        echo t("Reference (core system): Stores entity references", array());
        echo "</li>
  <li>";
        // line 25
        echo t("Telephone (Telephone module): Stores telephone numbers", array());
        echo "</li>
  <li>";
        // line 26
        echo t("Text (Text module): Stores formatted and unformatted text", array());
        echo "</li>
</ul>
<h2>";
        // line 28
        echo t("What is a formatter?", array());
        echo "</h2>
<p>";
        // line 29
        echo t("A <em>formatter</em> is a way to display a field; most field types offer several types of formatters, and most formatters have settings that further define how the field is displayed. It is also possible to completely hide a field from display, and you have the option of showing or hiding the field's label when it is displayed.", array());
        echo "</p>
<h2>";
        // line 30
        echo t("What is a widget?", array());
        echo "</h2>
<p>";
        // line 31
        echo t("A <em>widget</em> is a way to edit a field. Some field types, such as plain text single-line fields, have only one widget available (in this case, a single-line text input field). Other field types offer choices for the widget; for example, single-valued <em>List</em> fields can use a <em>Select</em> or <em>Radio button</em> widget for editing. Many widget types have settings that further define how the field can be edited.", array());
        echo "</p>
<h2>";
        // line 32
        echo t("Managing content structure overview", array());
        echo "</h2>
<p>";
        // line 33
        echo t("Besides the field modules listed in the previous section, there are additional core modules that you can use to manage your content structure:", array());
        echo "</p>
<ul>
  <li>";
        // line 35
        echo t("The core Node, Comment, Custom Block, Custom Menu Links, User, File, Image, Media, Taxonomy, Contact, and Aggregator modules all provide content entity types.", array());
        echo "</li>
  <li>";
        // line 36
        echo t("The core Field UI module provides a user interface for managing fields and their display on entities.", array());
        echo "</li>
  <li>";
        // line 37
        echo t("The core Layout Builder module provides a more flexible user interface for configuring the display of entities.", array());
        echo "</li>
  <li>";
        // line 38
        echo t("The core Filter, RDF, Responsive Image, and Path modules provide settings and display options for entities and fields.", array());
        echo "</li>
</ul>
<p>";
        // line 40
        echo t("Depending on the core and contributed modules that you currently have installed on your site, the related topics below, and other topics listed on the main <a href=\"@help_url\">Help page</a>, will help you with tasks related to content structure.", array("@help_url" => ($context["help_url"] ?? null), ));
        echo "</p>
<h2>";
        // line 41
        echo t("Additional resources", array());
        echo "</h2>
<ul>
  <li>";
        // line 43
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/understanding-data.html\">Concept: Types of Data topic in the User Guide</a>", array());
        echo "</li>
  <li>";
        // line 44
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/planning-chapter.html\">Planning your Site chapter in the User Guide</a>", array());
        echo "</li>
  <li>";
        // line 45
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/structure-reference-fields.html\">Concept: Reference Fields topic in the User Guide</a>", array());
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/core.content_structure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 45,  195 => 44,  191 => 43,  186 => 41,  182 => 40,  177 => 38,  173 => 37,  169 => 36,  165 => 35,  160 => 33,  156 => 32,  152 => 31,  148 => 30,  144 => 29,  140 => 28,  135 => 26,  131 => 25,  127 => 24,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  107 => 19,  103 => 18,  99 => 17,  94 => 15,  90 => 14,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  57 => 6,  55 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 5 %}{% set help_url = render_var(url('help.main')) %}
<h2>{% trans %}What types of data does a site have?{% endtrans %}</h2>
<p>{% trans %}There are four main types of data. <em>Content</em> is the information (text, images, etc.) meant to be displayed to web site visitors. <em>Configuration</em> is data that defines how the content is displayed; some configuration (such as field labels) may also be visible to site visitors. <em>State</em> is temporary data about the state of your site, such as the last time the system <em>cron</em> jobs ran. <em>Session</em> is a subset of State information, related to users' interactions with the site, such as site cookies and whether or not they are logged in.{% endtrans %}</p>
<h2>{% trans %}What is a content entity?{% endtrans %}</h2>
<p>{% trans %}A <em>content entity</em> (or more commonly, <em>entity</em>) is an item of content data, which can consist of text, HTML markup, images, attached files, and other data. Content entities are grouped into <em>entity types</em>, which have different purposes and are displayed in very different ways on the site. Most entity types are also divided into <em>entity sub-types</em>, which are divisions within an entity type to allow for smaller variations in how the entities are used and displayed. For example, the <em>Content item</em> entity type that stores page-level content is divided into <em>content type</em> sub-types; the <em>Custom block</em> entity type has <em>custom block types</em>; but the <em>User</em> entity type (for user profile information) does not have sub-types.{% endtrans %}</p>
<h2>{% trans %}What is a field?{% endtrans %}</h2>
<p>{% trans %}Within entity items, the data is stored in individual <em>fields</em>, each of which holds one type of data, such as formatted or plain text, images or other files, or dates. Fields can be added by an administrator on entity sub-types, so that all entity items of a given entity sub-type have the same collection of fields available, and they can be single-valued or multiple-valued. When you create or edit entity items, you are specifying the values for the fields on the entity item.{% endtrans %}</p>
<h2>{% trans %}What is a reference field?{% endtrans %}</h2>
<p>{% trans %}A <em>reference field</em> is a field that stores a relationship between an entity and one or more other entities, which may belong to the same or different entity type. For example, a <em>Content reference</em> field on a content type stores a relationship between one content item and one or more other content items.{% endtrans %}</p>
<h2>{% trans %}What field types are available?{% endtrans %}</h2>
<p>{% trans %}The following field types are provided by the core system and core modules (many more are provided by contributed modules):{% endtrans %}</p>
<ul>
  <li>{% trans %}Boolean, Number (provided by the core system): Stores true/false values and numbers{% endtrans %}</li>
  <li>{% trans %}Comment (provided by the core Comment module): Allows users to add comments to an entity{% endtrans %}</li>
  <li>{% trans %}Date, Timestamp (Datetime module): Stores dates and times{% endtrans %}</li>
  <li>{% trans %}Date range (Datetime range module): Stores time/date periods with a start and and an end{% endtrans %}</li>
  <li>{% trans %}Email (core system): Stores email addresses{% endtrans %}</li>
  <li>{% trans %}Link (Link module): Stores URLs and link text{% endtrans %}</li>
  <li>{% trans %}List (Options module): Stores values chosen from pre-defined lists; the values can be numbers or text{% endtrans %}</li>
  <li>{% trans %}Reference (core system): Stores entity references{% endtrans %}</li>
  <li>{% trans %}Telephone (Telephone module): Stores telephone numbers{% endtrans %}</li>
  <li>{% trans %}Text (Text module): Stores formatted and unformatted text{% endtrans %}</li>
</ul>
<h2>{% trans %}What is a formatter?{% endtrans %}</h2>
<p>{% trans %}A <em>formatter</em> is a way to display a field; most field types offer several types of formatters, and most formatters have settings that further define how the field is displayed. It is also possible to completely hide a field from display, and you have the option of showing or hiding the field's label when it is displayed.{% endtrans %}</p>
<h2>{% trans %}What is a widget?{% endtrans %}</h2>
<p>{% trans %}A <em>widget</em> is a way to edit a field. Some field types, such as plain text single-line fields, have only one widget available (in this case, a single-line text input field). Other field types offer choices for the widget; for example, single-valued <em>List</em> fields can use a <em>Select</em> or <em>Radio button</em> widget for editing. Many widget types have settings that further define how the field can be edited.{% endtrans %}</p>
<h2>{% trans %}Managing content structure overview{% endtrans %}</h2>
<p>{% trans %}Besides the field modules listed in the previous section, there are additional core modules that you can use to manage your content structure:{% endtrans %}</p>
<ul>
  <li>{% trans %}The core Node, Comment, Custom Block, Custom Menu Links, User, File, Image, Media, Taxonomy, Contact, and Aggregator modules all provide content entity types.{% endtrans %}</li>
  <li>{% trans %}The core Field UI module provides a user interface for managing fields and their display on entities.{% endtrans %}</li>
  <li>{% trans %}The core Layout Builder module provides a more flexible user interface for configuring the display of entities.{% endtrans %}</li>
  <li>{% trans %}The core Filter, RDF, Responsive Image, and Path modules provide settings and display options for entities and fields.{% endtrans %}</li>
</ul>
<p>{% trans %}Depending on the core and contributed modules that you currently have installed on your site, the related topics below, and other topics listed on the main <a href=\"{{ help_url }}\">Help page</a>, will help you with tasks related to content structure.{% endtrans %}</p>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
  <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/understanding-data.html\">Concept: Types of Data topic in the User Guide</a>{% endtrans %}</li>
  <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/planning-chapter.html\">Planning your Site chapter in the User Guide</a>{% endtrans %}</li>
  <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/structure-reference-fields.html\">Concept: Reference Fields topic in the User Guide</a>{% endtrans %}</li>
</ul>", "@help_topics/core.content_structure.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/core.content_structure.html.twig");
    }
}
