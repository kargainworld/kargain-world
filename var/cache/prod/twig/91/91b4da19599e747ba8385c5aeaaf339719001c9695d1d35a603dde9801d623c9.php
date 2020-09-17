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

/* dashboard/base.html.twig */
class __TwigTemplate_9703409c8288fc2b7e940c241f28df9744cb4d4b4215d8f0c112798518a02cda extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'meta_desc' => [$this, 'block_meta_desc'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'flashes' => [$this, 'block_flashes'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts_defines' => [$this, 'block_javascripts_defines'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        if ( !(isset($context["bg_animated"]) || array_key_exists("bg_animated", $context))) {
            $context["bg_animated"] = false;
        }
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    ";
        // line 10
        echo "    <title>";
        // line 11
        $this->displayBlock('meta_title', $context, $blocks);
        // line 18
        echo "</title>

    ";
        // line 21
        $this->displayBlock('meta_desc', $context, $blocks);
        // line 28
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "robots", [], "any", true, true, false, 28) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "robots", [], "any", false, false, false, 28)))) {
            // line 29
            echo "      <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "robots", [], "any", false, false, false, 29), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 31
            echo "      <meta name=\"robots\" content=\"noindex, nofollow\" />
    ";
        }
        // line 33
        echo "
    ";
        // line 35
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/dashboard.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/google-fonts.css"), "html", null, true);
        echo "\">
    ";
        // line 38
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "  </head>

  <body class=\"app-core app-core--dashboard";
        // line 41
        if ((isset($context["core_class"]) || array_key_exists("core_class", $context))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["core_class"] ?? null), "html", null, true);
        }
        echo "\">
    ";
        // line 43
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "
    <div class=\"app-body";
        // line 68
        if ((isset($context["body_class"]) || array_key_exists("body_class", $context))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["body_class"] ?? null), "html", null, true);
        }
        echo "\">
      ";
        // line 70
        echo "      ";
        $this->displayBlock('flashes', $context, $blocks);
        // line 75
        echo "
      ";
        // line 77
        echo "      ";
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "    </div>

    ";
        // line 81
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "
    ";
        // line 84
        echo "    ";
        $this->displayBlock('javascripts_defines', $context, $blocks);
        // line 85
        echo "
    ";
        // line 87
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/manifest.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/dashboard.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 91
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo "  </body>
</html>
";
    }

    // line 11
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", true, true, false, 12) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", false, false, false, 12)))) {
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
            echo " - Dashboard - Kargain World
      ";
        } else {
            // line 15
            echo "        Dashboard - Kargain World";
        }
    }

    // line 21
    public function block_meta_desc($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        if ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "desc", [], "any", true, true, false, 22) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "desc", [], "any", false, false, false, 22)))) {
            // line 23
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "desc", [], "any", false, false, false, 23), "html", null, true);
            echo "\" />
      ";
        }
    }

    // line 38
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 43
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark mb-4\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">Dashboard</a>
        <!-- <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button> -->

        <div class=\"navbar-nav ml-auto\">
          <a class=\"btn btn-sm btn-warning\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_reset_cache");
        echo "\">
            Ré-initialiser le cache
          </a>
        </div>

        <!-- <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item";
        // line 59
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 59), "attributes", [], "any", false, false, false, 59), "get", [0 => "_route"], "method", false, false, false, 59), "dashboard_newsletter")) {
            echo " active";
        }
        echo "\">
              <a class=\"nav-link\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_newsletter");
        echo "\">Clients</a>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>
    ";
    }

    // line 70
    public function block_flashes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "      <div class=\"container\">
        ";
        // line 72
        $this->loadTemplate("components/flashes.html.twig", "dashboard/base.html.twig", 72)->display($context);
        // line 73
        echo "      </div>
      ";
    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 81
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 84
    public function block_javascripts_defines($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "dashboard/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 91,  273 => 84,  267 => 81,  261 => 77,  256 => 73,  254 => 72,  251 => 71,  247 => 70,  236 => 60,  230 => 59,  220 => 52,  211 => 46,  207 => 44,  203 => 43,  197 => 38,  189 => 23,  187 => 22,  183 => 21,  178 => 15,  173 => 13,  171 => 12,  167 => 11,  161 => 92,  158 => 91,  154 => 89,  150 => 88,  145 => 87,  142 => 85,  139 => 84,  136 => 82,  133 => 81,  129 => 78,  126 => 77,  123 => 75,  120 => 70,  113 => 68,  110 => 67,  107 => 43,  100 => 41,  96 => 39,  93 => 38,  89 => 36,  84 => 35,  81 => 33,  77 => 31,  71 => 29,  68 => 28,  66 => 21,  62 => 18,  60 => 11,  58 => 10,  50 => 3,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/base.html.twig", "/home/kargaincxy/kargain_world/www/templates/dashboard/base.html.twig");
    }
}
