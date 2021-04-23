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

/* @help_topics/ban.banning_ips.html.twig */
class __TwigTemplate_010b1bffb8ae2c6054bf0c0e29e5970fb756f9872973a19e052fb63efe3e6fff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 6, "trans" => 7];
        $filters = ["escape" => 11];
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
        $context["ban"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("ban.admin_page"));
        // line 7
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Ban visitors from one or more IP addresses from accessing and viewing your site.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 11
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>People</em> &gt; <a href=\"@ban\"><em>IP address bans</em></a>", array("@ban" => ($context["ban"] ?? null), ));
        echo "</li>
  <li>";
        // line 12
        echo t("Enter an <em>IP address</em> and click <em>Add</em>.", array());
        echo "</li>
  <li>";
        // line 13
        echo t("You should see the IP address you entered listed under <em>Banned IP addresses</em>. Repeat the above steps to ban additional IP addresses.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/ban.banning_ips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  75 => 12,  71 => 11,  66 => 9,  62 => 8,  57 => 7,  55 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 6 %}{% set ban = render_var(url('ban.admin_page')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Ban visitors from one or more IP addresses from accessing and viewing your site.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>People</em> &gt; <a href=\"{{ ban }}\"><em>IP address bans</em></a>{% endtrans %}</li>
  <li>{% trans %}Enter an <em>IP address</em> and click <em>Add</em>.{% endtrans %}</li>
  <li>{% trans %}You should see the IP address you entered listed under <em>Banned IP addresses</em>. Repeat the above steps to ban additional IP addresses.{% endtrans %}</li>
</ol>", "@help_topics/ban.banning_ips.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/ban.banning_ips.html.twig");
    }
}
