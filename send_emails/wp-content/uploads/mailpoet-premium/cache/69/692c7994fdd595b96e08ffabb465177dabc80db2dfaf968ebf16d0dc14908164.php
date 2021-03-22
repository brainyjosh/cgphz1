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

/* newsletters/campaign_stats.html */
class __TwigTemplate_2236a4b7fe1f57a16eed50448825fec0b5ead06846de827b202c22f6c641e755 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<script type=\"text/javascript\">
  var mailpoet_shortcode_links = ";
        // line 2
        echo json_encode(($context["shortcode_links"] ?? null));
        echo ";
</script>

";
        // line 5
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(["revenueStatsTooltip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Revenues generated by customers who made a purchase within two weeks after they clicked on this email. This is the sum of the order totals including shipping and taxes."), "revenuesStats" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("%1s from %2s orders", "For example: \"£451 from 3 orders\""), "productsSold" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Products Sold"), "nProductsSold" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("%1s products sold", "For example: \"5 products sold\""), "totalNetRevenue" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Total net revenue %1s", "For example: \"Total net revenue £25.32\""), "noClickedLinksFound" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("No clicked links found"), "linkColumn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "uniqueClicksColumn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unique clicks"), "loadingEngagementItems" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Loading data..."), "noEngagementItemsFound" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("No engagement data found"), "subscriberColumn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscriber"), "statusColumn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Status"), "dateAndTimeColumn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Date and time"), "opened" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Opened", "Subscriber engagement status - subscriber opened a newsletter"), "clicked" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Clicked", "Subscriber engagement status - subscriber clicked a newsletter link"), "unsubscribed" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Unsubscribed", "Subscriber engagement status - subscriber unsubscribed from a newsletter"), "unopened" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Unopened", "Subscriber engagement status - subscriber did not open a newsletter"), "createSegment" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Create Segment", "Button label on Subscriber engagement page"), "savingSegment" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Saving..."), "successMessage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Segment \"%s\" created. [link]Create and send an email to it.[/link]"), "segmentExists" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Segment already exists."), "deletedSubscriber" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Deleted subscriber", "A fallback for an email of a deleted subscriber")]);
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "newsletters/campaign_stats.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 28,  39 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "newsletters/campaign_stats.html", "/home/gfmcludd/public_html/send_emails/wp-content/plugins/mailpoet-premium/views/newsletters/campaign_stats.html");
    }
}
