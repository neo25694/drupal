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

/* themes/custom/umami/templates/components/navigation/menu--main.html.twig */
class __TwigTemplate_f2fe1bee26266b9f64b27c9fb09f8b8aecc7efbe5bd3dc53f09242827cb575b7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 22, "macro" => 33, "set" => 37, "if" => 47, "for" => 53];
        $filters = ["clean_class" => 38, "escape" => 49];
        $functions = ["link" => 72];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['clean_class', 'escape'],
                ['link']
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
        // line 21
        echo "
";
        // line 22
        $context["menus"] = $this;
        // line 23
        echo "
";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)));
        echo " ";
        // line 32
        echo "
";
    }

    // line 33
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            echo " ";
            // line 34
            echo "  ";
            $context["menus"] = $this;
            // line 35
            echo "  ";
            // line 36
            echo "  ";
            // line 37
            $context["menu_classes"] = [0 => ("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 38
($context["menu_name"] ?? null))))];
            // line 41
            echo "  ";
            // line 42
            echo "  ";
            // line 43
            $context["submenu_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 44
($context["menu_name"] ?? null)))) . "__submenu")];
            // line 47
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 48
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 49
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["menu_classes"] ?? null)], "method"), "setAttribute", [0 => "data-drupal-selector", 1 => "menu-main"], "method")), "html", null, true);
                    echo "> ";
                    // line 50
                    echo "    ";
                } else {
                    // line 51
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["menu_classes"] ?? null)], "method"), "addClass", [0 => ($context["submenu_classes"] ?? null)], "method")), "html", null, true);
                    echo "> ";
                    // line 52
                    echo "    ";
                }
                // line 53
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 54
                    echo "      ";
                    // line 55
                    echo "      ";
                    // line 56
                    $context["item_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 57
($context["menu_name"] ?? null)))) . "__item"), 1 => (($this->getAttribute(                    // line 58
$context["item"], "is_expanded", [])) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null)))) . "__item--expanded")) : ("")), 2 => (($this->getAttribute(                    // line 59
$context["item"], "is_collapsed", [])) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null)))) . "__item--collapsed")) : ("")), 3 => (($this->getAttribute(                    // line 60
$context["item"], "in_active_trail", [])) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null)))) . "__item--active-trail")) : (""))];
                    // line 63
                    echo "      ";
                    // line 64
                    echo "      ";
                    // line 65
                    $context["link_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 66
($context["menu_name"] ?? null)))) . "__link")];
                    // line 69
                    echo "      <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                    echo ">";
                    // line 70
                    echo "        ";
                    // line 71
                    echo "        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 73
$context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 74
$context["item"], "url", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 75
$context["item"], "attributes", []), "removeClass", [0 => ($context["item_classes"] ?? null)], "method"), "addClass", [0 => ($context["link_classes"] ?? null)], "method"))), "html", null, true);
                    // line 77
                    echo "
        ";
                    // line 78
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 79
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)));
                        echo " ";
                        // line 80
                        echo "        ";
                    }
                    // line 81
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/umami/templates/components/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 83,  170 => 81,  167 => 80,  163 => 79,  161 => 78,  158 => 77,  156 => 75,  155 => 74,  154 => 73,  152 => 71,  150 => 70,  146 => 69,  144 => 66,  143 => 65,  141 => 64,  139 => 63,  137 => 60,  136 => 59,  135 => 58,  134 => 57,  133 => 56,  131 => 55,  129 => 54,  124 => 53,  121 => 52,  117 => 51,  114 => 50,  110 => 49,  107 => 48,  104 => 47,  102 => 44,  101 => 43,  99 => 42,  97 => 41,  95 => 38,  94 => 37,  92 => 36,  90 => 35,  87 => 34,  71 => 33,  66 => 32,  63 => 31,  60 => 23,  58 => 22,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display the main menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}

{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/1.x/tags/macro.html

  1. We use menu_name (see above) to create a CSS class name from it.
  See https://www.drupal.org/node/2649076
#}
{{ menus.menu_links(items, attributes, 0, menu_name) }} {# 1. #}

{% macro menu_links(items, attributes, menu_level, menu_name) %} {# 1. #}
  {% import _self as menus %}
  {# 1. #}
  {%
    set menu_classes = [
      'menu-' ~ menu_name|clean_class,
    ]
  %}
  {# 1. #}
  {%
    set submenu_classes = [
      'menu-' ~ menu_name|clean_class ~ '__submenu',
    ]
  %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul{{ attributes.addClass(menu_classes).setAttribute('data-drupal-selector','menu-main') }}> {# 1. #}
    {% else %}
      <ul{{ attributes.removeClass(menu_classes).addClass(submenu_classes) }}> {# 1. #}
    {% endif %}
    {% for item in items %}
      {# 1. #}
      {%
        set item_classes = [
          'menu-' ~ menu_name|clean_class ~ '__item',
          item.is_expanded ? 'menu-' ~ menu_name|clean_class ~ '__item--expanded',
          item.is_collapsed ? 'menu-' ~ menu_name|clean_class ~ '__item--collapsed',
          item.in_active_trail ? 'menu-' ~ menu_name|clean_class ~ '__item--active-trail',
        ]
      %}
      {# 1. #}
      {%
        set link_classes = [
          'menu-' ~ menu_name|clean_class ~ '__link',
        ]
      %}
      <li{{ item.attributes.addClass(item_classes) }}>{# 1. #}
        {# 1. #}
        {{
          link(
            item.title,
            item.url,
            item.attributes.removeClass(item_classes).addClass(link_classes)
          )
        }}
        {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1, menu_name) }} {# 1. #}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "themes/custom/umami/templates/components/navigation/menu--main.html.twig", "/var/www/html/drupal/web/themes/custom/umami/templates/components/navigation/menu--main.html.twig");
    }
}
