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

/* @help_topics/user.overview.html.twig */
class __TwigTemplate_d0543d9d46090094e681d8c7cce2d6f3752c3ed6f2d83262c91364c9805c8d2c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 5];
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
        // line 5
        echo "<h2>";
        echo t("What is a user?", array());
        echo "</h2>
<p>";
        // line 6
        echo t("A user is anyone accessing or viewing your site. <em>Anonymous</em> users are users who are not logged in, and <em>Authenticated</em> users are users who are logged in.", array());
        echo "</p>
<h2>";
        // line 7
        echo t("What is a role?", array());
        echo "</h2>
<p>";
        // line 8
        echo t("<em>Roles</em> are used to group and classify users; each user can be assigned one or more roles. There are also special roles for all anonymous and all authenticated users.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("What is a permission?", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Granting a <em>permission</em> to a role allows users who have been assigned that role to perform an action on the site, such as viewing content, editing or creating  a particular type of content, administering settings for a particular module, or using a particular function of the site (such as search).", array());
        echo "</p>
<h2>";
        // line 11
        echo t("Overview of managing user accounts and visitors", array());
        echo "</h2>
<p>";
        // line 12
        echo t("The core User module allows users to register, log in, and log out, and administrators to manage user roles and permissions. The core Ban module allows administrators to ban certain IP addresses from accessing the site. Depending on which modules you have installed on your site, the related topics below will help you with tasks related to managing user accounts and visitors.", array());
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "@help_topics/user.overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  55 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 5 %}<h2>{% trans %}What is a user?{% endtrans %}</h2>
<p>{% trans %}A user is anyone accessing or viewing your site. <em>Anonymous</em> users are users who are not logged in, and <em>Authenticated</em> users are users who are logged in.{% endtrans %}</p>
<h2>{% trans %}What is a role?{% endtrans %}</h2>
<p>{% trans %}<em>Roles</em> are used to group and classify users; each user can be assigned one or more roles. There are also special roles for all anonymous and all authenticated users.{% endtrans %}</p>
<h2>{% trans %}What is a permission?{% endtrans %}</h2>
<p>{% trans %}Granting a <em>permission</em> to a role allows users who have been assigned that role to perform an action on the site, such as viewing content, editing or creating  a particular type of content, administering settings for a particular module, or using a particular function of the site (such as search).{% endtrans %}</p>
<h2>{% trans %}Overview of managing user accounts and visitors{% endtrans %}</h2>
<p>{% trans %}The core User module allows users to register, log in, and log out, and administrators to manage user roles and permissions. The core Ban module allows administrators to ban certain IP addresses from accessing the site. Depending on which modules you have installed on your site, the related topics below will help you with tasks related to managing user accounts and visitors.{% endtrans %}</p>", "@help_topics/user.overview.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/user.overview.html.twig");
    }
}
