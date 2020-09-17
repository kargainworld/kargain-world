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
class __TwigTemplate_bf0deadd7de66433024e76ecd74c22d501c2c6c594f225f259bdeaf1f6bc844b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/logo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/logo.html.twig"));

        // line 1
        $context["logo_text"] = (((isset($context["logo_text"]) || array_key_exists("logo_text", $context))) ? ((isset($context["logo_text"]) || array_key_exists("logo_text", $context) ? $context["logo_text"] : (function () { throw new RuntimeError('Variable "logo_text" does not exist.', 1, $this->source); })())) : ("Kargain World"));
        // line 2
        $context["hide_text"] = (((isset($context["hide_text"]) || array_key_exists("hide_text", $context))) ? ((isset($context["hide_text"]) || array_key_exists("hide_text", $context) ? $context["hide_text"] : (function () { throw new RuntimeError('Variable "hide_text" does not exist.', 2, $this->source); })())) : (false));
        // line 3
        $context["custom_class"] = (((isset($context["custom_class"]) || array_key_exists("custom_class", $context))) ? ((" " . (isset($context["custom_class"]) || array_key_exists("custom_class", $context) ? $context["custom_class"] : (function () { throw new RuntimeError('Variable "custom_class" does not exist.', 3, $this->source); })()))) : (""));
        // line 4
        $context["type_text"] = (((isset($context["type_text"]) || array_key_exists("type_text", $context))) ? ((isset($context["type_text"]) || array_key_exists("type_text", $context) ? $context["type_text"] : (function () { throw new RuntimeError('Variable "type_text" does not exist.', 4, $this->source); })())) : ("sub"));
        // line 5
        echo "
<span class=\"brand-logo";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["custom_class"]) || array_key_exists("custom_class", $context) ? $context["custom_class"] : (function () { throw new RuntimeError('Variable "custom_class" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">
  ";
        // line 8
        echo "  ";
        // line 9
        echo "  <img src=\"/build/logo.png\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["logo_text"]) || array_key_exists("logo_text", $context) ? $context["logo_text"] : (function () { throw new RuntimeError('Variable "logo_text" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" class=\"-img\" />
</span>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  60 => 9,  58 => 8,  54 => 6,  51 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set logo_text = (logo_text is defined) ? logo_text : 'Kargain World' %}
{% set hide_text = (hide_text is defined) ? hide_text : false %}
{% set custom_class = (custom_class is defined) ? ' ' ~ custom_class : '' %}
{% set type_text  = (type_text is defined) ? type_text : 'sub' %}

<span class=\"brand-logo{{ custom_class }}\">
  {# <span class=\"-text -text-{{ type_text }}\">{{ logo_text }}</span> #}
  {# SVG Logo #}
  <img src=\"/build/logo.png\" alt=\"{{ logo_text }}\" class=\"-img\" />
</span>
", "components/logo.html.twig", "/home/kargaincxy/kargain_world/www/templates/components/logo.html.twig");
    }
}
