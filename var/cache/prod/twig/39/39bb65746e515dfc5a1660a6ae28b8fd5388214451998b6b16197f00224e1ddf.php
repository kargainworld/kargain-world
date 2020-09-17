<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/logo.html.twig */
class __TwigTemplate_ff3e91238dd78dcf7d53f5a25d3458c77462d3af4d70166a02ade530de71a86e extends Template
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
        $context["logo_text"] = (((isset($context["logo_text"]) || array_key_exists("logo_text", $context))) ? (($context["logo_text"] ?? null)) : ("Kargain World"));
        // line 2
        $context["hide_text"] = (((isset($context["hide_text"]) || array_key_exists("hide_text", $context))) ? (($context["hide_text"] ?? null)) : (false));
        // line 3
        $context["custom_class"] = (((isset($context["custom_class"]) || array_key_exists("custom_class", $context))) ? ((" " . ($context["custom_class"] ?? null))) : (""));
        // line 4
        $context["type_text"] = (((isset($context["type_text"]) || array_key_exists("type_text", $context))) ? (($context["type_text"] ?? null)) : ("sub"));
        // line 5
        echo "
<span class=\"brand-logo";
        // line 6
        echo twig_escape_filter($this->env, ($context["custom_class"] ?? null), "html", null, true);
        echo "\">
  ";
        // line 8
        echo "  ";
        // line 9
        echo "  <img src=\"/build/logo.png\" alt=\"";
        echo twig_escape_filter($this->env, ($context["logo_text"] ?? null), "html", null, true);
        echo "\" class=\"-img\" />
</span>
";
    }

    public function getTemplateName()
    {
        return "components/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  52 => 8,  48 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/logo.html.twig", "/home/kargaincxy/kargain_world/www/templates/components/logo.html.twig");
    }
}
