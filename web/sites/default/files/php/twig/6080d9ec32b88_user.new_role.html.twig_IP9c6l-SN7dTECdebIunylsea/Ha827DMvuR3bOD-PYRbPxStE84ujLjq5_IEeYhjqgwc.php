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

/* @help_topics/user.new_role.html.twig */
class __TwigTemplate_a22a91cacfc5b3be91d0afbcbda9a396f663cc5607ba041240a3621c326a3f76 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "trans" => 8];
        $filters = ["escape" => 12];
        $functions = ["render_var" => 7, "url" => 7];

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
        // line 7
        $context["roles_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.user_role.collection"));
        // line 8
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 9
        echo t("Create a new role.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 12
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>People</em> &gt; <a href=\"@roles_url\"><em>Roles</em></a>.", array("@roles_url" => ($context["roles_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 13
        echo t("Click <em>Add role</em>.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("Enter the desired <em>Role name</em>. If desired, click <em>Edit</em> to change the <em>Machine name</em> for the role.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Click <em>Save</em>. You should be returned to the <em>Roles</em> page and your new role should be in the role list.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/user.new_role.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 15,  79 => 14,  75 => 13,  71 => 12,  66 => 10,  62 => 9,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set roles_url = render_var(url('entity.user_role.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Create a new role.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>People</em> &gt; <a href=\"{{ roles_url}}\"><em>Roles</em></a>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add role</em>.{% endtrans %}</li>
  <li>{% trans %}Enter the desired <em>Role name</em>. If desired, click <em>Edit</em> to change the <em>Machine name</em> for the role.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em>. You should be returned to the <em>Roles</em> page and your new role should be in the role list.{% endtrans %}</li>
</ol>", "@help_topics/user.new_role.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/user.new_role.html.twig");
    }
}
