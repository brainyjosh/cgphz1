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

/* emails/statsNotificationLayout.html */
class __TwigTemplate_1ceb517ae0016d57a53dc11ef4bea403e482aef474e09c3d05854f49ecd9e38c extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<html lang=\"en\" style=\"margin:0;padding:0\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
  <meta name=\"format-detection\" content=\"telephone=no\" />
  <title>";
        // line 7
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
        echo "</title>
  <style type=\"text/css\"> @media screen and (max-width: 480px) {
    .mailpoet_button {width:100% !important;}
  }
  @media screen and (max-width: 599px) {
    .mailpoet_header {
      padding: 10px 20px;
    }
    .mailpoet_button {
      width: 100% !important;
      padding: 5px 0 !important;
      box-sizing:border-box !important;
    }
    div, .mailpoet_cols-two {
      max-width: 100% !important;
    }
  }
  </style>

</head>
<body leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"margin:0;padding:0;background-color:#f0f0f0\">
<table class=\"mailpoet_template\" border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing:0;mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse\">
  <tbody>
  <tr>
    ";
        // line 31
        if ((isset($context["preheader"]) || array_key_exists("preheader", $context))) {
            // line 32
            echo "      <td class=\"mailpoet_preheader\" style=\"-webkit-text-size-adjust:none;font-size:1px;line-height:1px;color:#ffffff;border-collapse:collapse;display:none;visibility:hidden;mso-hide:all;max-height:0;max-width:0;opacity:0;overflow:hidden\" height=\"1\">
    ";
            // line 33
            echo \MailPoetVendor\twig_escape_filter($this->env, ($context["preheader"] ?? null), "html", null, true);
            echo "
  </td>
    ";
        }
        // line 36
        echo "  </tr>
  <tr>
    <td align=\"center\" class=\"mailpoet-wrapper\" valign=\"top\" style=\"border-collapse:collapse;background-color:#f0f0f0\"><!--[if mso]>
      <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"
             width=\"660\">
        <tr>
          <td class=\"mailpoet_content-wrapper\" align=\"center\" valign=\"top\" width=\"660\">
      <![endif]--><table class=\"mailpoet_content-wrapper\" border=\"0\" width=\"660\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing:0;mso-table-lspace:0;mso-table-rspace:0;max-width:660px;width:100%;border-collapse:collapse;background-color:#ffffff\">
        <tbody>

        ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "
        <tr>
          <td class=\"mailpoet_content-cols-two\" align=\"left\" style=\"border-collapse:collapse;background-color:#fe5301\" bgcolor=\"#fe5301\">
            <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing:0;mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse\">
              <tbody>
              <tr>
                <td align=\"center\" style=\"font-size:0;border-collapse:collapse\"><!--[if mso]>
                  <table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">
                    <tbody>
                    <tr>
                      <td width=\"330\" valign=\"top\">
                  <![endif]--><div style=\"display:inline-block; max-width:330px; vertical-align:top; width:100%;\">
                    <table width=\"330\" class=\"mailpoet_cols-two\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"left\" style=\"width:100%;max-width:330px;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0;table-layout:fixed;margin-left:auto;margin-right:auto;padding-left:0;padding-right:0;border-collapse:collapse\">
                      <tbody>
                      <tr>
                        <td class=\"mailpoet_spacer\" bgcolor=\"#fe5301\" height=\"24\" valign=\"top\" style=\"border-collapse:collapse\"></td>
                      </tr>
                      <tr>
                        <td class=\"mailpoet_image mailpoet_padded_vertical mailpoet_padded_side\" align=\"left\" valign=\"top\" style=\"border-collapse:collapse;padding-bottom:20px;padding-left:20px;padding-right:20px\">
                          <img src=\"http://newsletters.mailpoet.com/wp-content/uploads/2018/10/new_logo_white-300x95.png\" width=\"130\" alt=\"new_logo_white\" style=\"height:auto;max-width:100%;-ms-interpolation-mode:bicubic;border:0;display:block;outline:none;text-align:center\" />
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div><!--[if mso]>
                  </td>
                  <td width=\"330\" valign=\"top\">
                  <![endif]--><div style=\"display:inline-block; max-width:330px; vertical-align:top; width:100%;\">
                    <table width=\"330\" class=\"mailpoet_cols-two\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"left\" style=\"width:100%;max-width:330px;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0;table-layout:fixed;margin-left:auto;margin-right:auto;padding-left:0;padding-right:0;border-collapse:collapse\">
                      <tbody>
                      <tr>
                        <td class=\"mailpoet_spacer\" bgcolor=\"#fe5301\" height=\"20\" valign=\"top\" style=\"border-collapse:collapse\"></td>
                      </tr>
                      <tr>
                        <td class=\"mailpoet_text mailpoet_padded_vertical mailpoet_padded_side\" valign=\"top\" style=\"word-break:break-word;word-wrap:break-word;padding-top:0;border-collapse:collapse;padding-bottom:20px;padding-left:20px;padding-right:20px\">
                          <table style=\"border-spacing:0;mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse\" width=\"100%\" cellpadding=\"0\">
                            <tr>
                              <td class=\"mailpoet_paragraph\" style=\"word-break:break-word;word-wrap:break-word;text-align:right;border-collapse:collapse;color:#000000;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:16px;line-height:25.6px\">
                                <span style=\"color: #ffffff;\">
                                  <a href=\"https://www.mailpoet.com/how-to-improve-open-rates/\" title=\"";
        // line 86
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("How to Improve Open and Click Rates");
        echo "\" style=\"color:#fff;text-decoration:underline\">
                                    ";
        // line 87
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("How to improve my open rate?");
        echo "
                                  </a>
                                </span>
                              </td>
                            </tr></table>
                          <table style=\"border-spacing:0;mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse\" width=\"100%\" cellpadding=\"0\">
                            <tr>
                              <td class=\"mailpoet_paragraph\" style=\"word-break:break-word;word-wrap:break-word;text-align:right;border-collapse:collapse;color:#000000;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:16px;line-height:25.6px\">
                                <span style=\"color: #ffffff;\"><a href=\"https://www.mailpoet.com/how-to-improve-click-rates/\" title=\"";
        // line 95
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("How to Improve Open and Click Rates");
        echo "\" style=\"color:#fff;text-decoration:underline\">
                                  ";
        // line 96
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("And my click rate?");
        echo "
                                </a></span>
                              </td>
                            </tr></table>
                          <table style=\"border-spacing:0;mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse\" width=\"100%\" cellpadding=\"0\">
                            <tr>
                              <td class=\"mailpoet_paragraph\" style=\"word-break:break-word;word-wrap:break-word;text-align:right;border-collapse:collapse;color:#000000;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:16px;line-height:25.6px\">
                                <a href=\"";
        // line 103
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["linkSettings"] ?? null), "html", null, true);
        echo "\" style=\"color:#fff;text-decoration:underline\">
                                  ";
        // line 104
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Disable these emails");
        echo "
                                </a>
                              </td>
                            </tr></table>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div><!--[if mso]>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  <![endif]--></td>
              </tr>
              </tbody>
            </table>
          </td>
        </tr>
        </tbody>
      </table><!--[if mso]>
      </td>
      </tr>
      </table>
      <![endif]--></td>
  </tr>
  </tbody>
</table>
</body>
</html>

";
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "emails/statsNotificationLayout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 46,  165 => 104,  161 => 103,  151 => 96,  147 => 95,  136 => 87,  132 => 86,  91 => 47,  89 => 46,  77 => 36,  71 => 33,  68 => 32,  66 => 31,  39 => 7,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "emails/statsNotificationLayout.html", "/home/gfmcludd/public_html/send_emails/wp-content/plugins/mailpoet/views/emails/statsNotificationLayout.html");
    }
}