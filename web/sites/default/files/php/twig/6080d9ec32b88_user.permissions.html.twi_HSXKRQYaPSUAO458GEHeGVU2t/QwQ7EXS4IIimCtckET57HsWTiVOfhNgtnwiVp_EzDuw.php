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

/* @help_topics/user.permissions.html.twig */
class __TwigTemplate_a0eadda3ffeea181930b5405e8607ab1732a7a2253b8237b61d3cd0377a7aa5f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "trans" => 9];
        $filters = ["escape" => 13];
        $functions = ["render_var" => 8, "url" => 8];

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
        // line 8
        $context["permissions_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("user.admin_permissions"));
        // line 9
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Modify the permissions for an existing role.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 13
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>People</em> &gt; <a href=\"@permissions_url\"><em>Permissions</em></a>.", array("@permissions_url" => ($context["permissions_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 14
        echo t("Review the permissions for the role, paying particular attention to the permissions marked with <em>Warning: Give to trusted roles only; this permission has security implications.</em> Uncheck permissions that this role should not have, in the row of the permission and the column of the role; check permissions that this role should have.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Click <em>Save permissions</em>.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/user.permissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  75 => 14,  71 => 13,  66 => 11,  62 => 10,  57 => 9,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 8 %}{% set permissions_url = render_var(url('user.admin_permissions')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Modify the permissions for an existing role.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>People</em> &gt; <a href=\"{{ permissions_url}}\"><em>Permissions</em></a>.{% endtrans %}</li>
  <li>{% trans %}Review the permissions for the role, paying particular attention to the permissions marked with <em>Warning: Give to trusted roles only; this permission has security implications.</em> Uncheck permissions that this role should not have, in the row of the permission and the column of the role; check permissions that this role should have.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save permissions</em>.{% endtrans %}</li>
</ol>", "@help_topics/user.permissions.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/user.permissions.html.twig");
    }
}
