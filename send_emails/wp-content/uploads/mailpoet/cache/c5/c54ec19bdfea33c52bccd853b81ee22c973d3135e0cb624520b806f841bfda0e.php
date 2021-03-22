<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* emails/statsNotification.txt */
class __TwigTemplate_1f1ee907dfdd84e737c0cc0cc2e1e156ea8cbed1d01d6a4078402c0dd5cc9734 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "emails/statsNotificationLayout.txt";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("emails/statsNotificationLayout.txt", "emails/statsNotification.txt", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your stats are in!");
        echo "

";
        // line 6
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
        echo "

";
        // line 8
        if (($context["subscribersLimitReached"] ?? null)) {
            // line 9
            echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_replace_filter($this->env->getExtension('MailPoet\Twig\I18n')->translate("Congratulations, you now have more than [subscribersLimit] subscribers!"), ["[subscribersLimit]" => ($context["subscribersLimit"] ?? null)]), "html", null, true);
            echo "

";
            // line 11
            if (($context["hasValidApiKey"] ?? null)) {
                // line 12
                echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_replace_filter($this->env->getExtension('MailPoet\Twig\I18n')->translate("Your plan is limited to [subscribersLimit] subscribers."), ["[subscribersLimit]" => ($context["subscribersLimit"] ?? null)]), "html", null, true);
                echo "
";
            } else {
                // line 14
                echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_replace_filter($this->env->getExtension('MailPoet\Twig\I18n')->translate("Our free version is limited to [subscribersLimit] subscribers."), ["[subscribersLimit]" => ($context["subscribersLimit"] ?? null)]), "html", null, true);
                echo "
";
            }
            // line 16
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You need to upgrade now to be able to continue using MailPoet.");
            echo "

";
            // line 18
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Upgrade Now");
            echo "
  ";
            // line 19
            echo \MailPoetVendor\twig_escape_filter($this->env, ($context["upgradeNowLink"] ?? null), "html", null, true);
            echo "
";
        }
        // line 21
        echo "
";
        // line 22
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("open rate");
        echo ": ";
        echo number_format_i18n(($context["opened"] ?? null));
        echo "%
  ";
        // line 23
        echo $this->env->getExtension('MailPoet\Twig\Functions')->openedStatsText(($context["opened"] ?? null));
        echo "

";
        // line 25
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("click rate");
        echo ": ";
        echo number_format_i18n(($context["clicked"] ?? null));
        echo "%
  ";
        // line 26
        echo $this->env->getExtension('MailPoet\Twig\Functions')->clickedStatsText(($context["opened"] ?? null));
        echo "

";
        // line 28
        if ((($context["topLinkClicks"] ?? null) > 0)) {
            // line 29
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Most clicked link");
            echo "
  ";
            // line 30
            echo \MailPoetVendor\twig_escape_filter($this->env, ($context["topLink"] ?? null), "html", null, true);
            echo "

  ";
            // line 32
            echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_replace_filter($this->env->getExtension('MailPoet\Twig\I18n')->translate("%s unique clicks"), ["%s" => ($context["topLinkClicks"] ?? null)]), "html", null, true);
            echo "
";
        }
        // line 34
        echo "
";
        // line 35
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("View all stats");
        echo "
  ";
        // line 36
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["linkStats"] ?? null), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "emails/statsNotification.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 36,  129 => 35,  126 => 34,  121 => 32,  116 => 30,  112 => 29,  110 => 28,  105 => 26,  99 => 25,  94 => 23,  88 => 22,  85 => 21,  80 => 19,  76 => 18,  71 => 16,  66 => 14,  61 => 12,  59 => 11,  54 => 9,  52 => 8,  47 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "emails/statsNotification.txt", "/home/gfmcludd/public_html/send_emails/wp-content/plugins/mailpoet/views/emails/statsNotification.txt");
    }
}
