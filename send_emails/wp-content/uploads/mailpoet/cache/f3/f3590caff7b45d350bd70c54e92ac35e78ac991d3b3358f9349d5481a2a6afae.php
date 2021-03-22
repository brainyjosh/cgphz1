<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* subscribers/importExport/import/step_data_manipulation.html */
class __TwigTemplate_65817924c373381e33b4f71347c65560b9b86380c3ac1c92ec6eb81f1598b2ac extends \MailPoetVendor\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"step_data_manipulation\" class=\"mailpoet_hidden\">
  <div class=\"inside\">

    <!-- New segment template -->
    <script id=\"new_segment_template\" type=\"text/x-handlebars-template\">
      <p>
        <label>";
        // line 7
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Name");
        echo ":</label>
        <input id=\"new_segment_name\" type=\"text\" name=\"name\"/>
      </p>
      <p class=\"mailpoet_validation_error\" data-error=\"segment_name_required\">
        ";
        // line 11
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Please specify a name.");
        echo "
      </p>
      <p class=\"mailpoet_validation_error\" data-error=\"segment_name_not_unique\">
        ";
        // line 14
        echo \MailPoetVendor\twig_escape_filter($this->env, sprintf($this->extensions['MailPoet\Twig\I18n']->translate("Another record already exists. Please specify a different \"%1\$s\"."), "name"), "html", null, true);
        echo "
      </p>
      <p>
        <label>";
        // line 17
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Description");
        echo ":</label>
        <br/>
        <textarea id=\"new_segment_description\" cols=\"40\" rows=\"3\" name=\"description\"/>
      </p>

      <hr/>

      <p class=\"mailpoet_align_right\">
        <input type=\"submit\" value=\"";
        // line 25
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Done");
        echo "\" id=\"new_segment_process\"
         class=\"button-primary \"/>
        <input type=\"submit\" value=\"";
        // line 27
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Cancel");
        echo "\" id=\"new_segment_cancel\"
         class=\"button-primary\"/>
      </p>

      </form>
    </script>

    <!-- New custom field logic -->
    ";
        // line 35
        $this->loadTemplate("form/custom_fields_legacy.html", "subscribers/importExport/import/step_data_manipulation.html", 35)->display($context);
        // line 36
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "subscribers/importExport/import/step_data_manipulation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 36,  91 => 35,  80 => 27,  75 => 25,  64 => 17,  58 => 14,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "subscribers/importExport/import/step_data_manipulation.html", "/home/gfmcludd/public_html/send_emails/wp-content/plugins/mailpoet/views/subscribers/importExport/import/step_data_manipulation.html");
    }
}
