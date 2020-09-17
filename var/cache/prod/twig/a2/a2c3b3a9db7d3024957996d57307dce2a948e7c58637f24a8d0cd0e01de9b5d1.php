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

/* base.html.twig */
class __TwigTemplate_e613e74138b5f61e7337d07703186f5d14e187738797fa4d689482e0fa2aca17 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    ";
        // line 4
        if (((isset($context["google_analytics_key"]) || array_key_exists("google_analytics_key", $context)) && 0 !== twig_compare(($context["google_analytics_key"] ?? null), false))) {
            // line 5
            echo "    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create',  '";
            // line 12
            echo twig_escape_filter($this->env, ($context["google_analytics_key"] ?? null), "html", null, true);
            echo "', 'auto'); // UA-163559523-1
      ga('set',     'anonymizeIp',    true);
      ga('set',     'cookie_expires', 395 * 24 * 60 * 60); // = 13 months.
      ga('send',    'pageview');
    </script>
    <!-- End Google Analytics -->
    ";
        }
        // line 19
        echo "    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    ";
        // line 23
        echo "    <title>";
        // line 24
        $this->displayBlock('meta_title', $context, $blocks);
        // line 31
        echo "</title>
    
    ";
        // line 34
        echo "    ";
        $this->loadTemplate("components/head-favicons.html.twig", "base.html.twig", 34)->display($context);
        // line 35
        echo "
    ";
        // line 37
        $this->displayBlock('meta_desc', $context, $blocks);
        // line 44
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "robots", [], "any", true, true, false, 44) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "robots", [], "any", false, false, false, 44)))) {
            // line 45
            echo "      <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "robots", [], "any", false, false, false, 45), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 47
            echo "      <meta name=\"robots\" content=\"noindex, nofollow\" />
    ";
        }
        // line 49
        echo "
    ";
        // line 51
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/google-fonts.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/kargain-world.css"), "html", null, true);
        echo "\">
    ";
        // line 53
        if ((isset($context["stylesheets"]) || array_key_exists("stylesheets", $context))) {
            // line 54
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stylesheets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["stylesheet_url"]) {
                // line 55
                echo "        <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/" . $context["stylesheet_url"])), "html", null, true);
                echo "\">
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet_url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "    ";
        }
        // line 58
        echo "    ";
        // line 59
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 60
        echo "  </head>

  <body class=\"app-core";
        // line 62
        if ((isset($context["core_class"]) || array_key_exists("core_class", $context))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["core_class"] ?? null), "html", null, true);
        }
        echo "\">
    ";
        // line 64
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "
    <div id=\"app\" class=\"app-body";
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
        // line 73
        echo "
      ";
        // line 75
        echo "      ";
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "
      ";
        // line 77
        $this->loadTemplate("components/forms/newsletter-subscribe.html.twig", "base.html.twig", 77)->display($context);
        // line 78
        echo "    </div>

    ";
        // line 81
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 84
        echo "
    <div class=\"app-loader\"></div>

    <div class=\"app-background\">
      <div id=\"particles-js\"></div>
    </div>

    <span class=\"viewport-sizes\">
      <span class=\"d-block d-sm-none\" data-viewport-size-slug=\"xs\"></span>
      <span class=\"d-none d-sm-block d-md-none\" data-viewport-size-slug=\"sm\"></span>
      <span class=\"d-none d-md-block d-lg-none\" data-viewport-size-slug=\"md\"></span>
      <span class=\"d-none d-lg-block d-xl-none\" data-viewport-size-slug=\"lg\"></span>
      <span class=\"d-none d-xl-block\" data-viewport-size-slug=\"xl\"></span>
    </span>

    ";
        // line 100
        echo "    ";
        $this->displayBlock('javascripts_defines', $context, $blocks);
        // line 101
        echo "
    ";
        // line 103
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/manifest.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/kargain-world.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 106
        if ((isset($context["scripts"]) || array_key_exists("scripts", $context))) {
            // line 107
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["script_url"]) {
                // line 108
                echo "        <script src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/" . $context["script_url"])), "html", null, true);
                echo "\"></script>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script_url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "    ";
        }
        // line 111
        echo "
    ";
        // line 113
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "  </body>
</html>
";
    }

    // line 24
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", true, true, false, 25) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", false, false, false, 25)))) {
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", false, false, false, 26), "html", null, true);
            echo " - Kargain World";
        } else {
            // line 28
            echo "Kargain World";
        }
    }

    // line 37
    public function block_meta_desc($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "desc", [], "any", true, true, false, 38) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "desc", [], "any", false, false, false, 38)))) {
            // line 39
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "desc", [], "any", false, false, false, 39), "html", null, true);
            echo "\" />
      ";
        }
    }

    // line 59
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 64
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "      ";
        $this->loadTemplate("components/header.html.twig", "base.html.twig", 65)->display($context);
        // line 66
        echo "    ";
    }

    // line 70
    public function block_flashes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "        <div class=\"app-flashbags container\">";
        $this->loadTemplate("components/flashes.html.twig", "base.html.twig", 71)->display($context);
        echo "</div>
      ";
    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 81
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "      ";
        $this->loadTemplate("components/footer.html.twig", "base.html.twig", 82)->display($context);
        // line 83
        echo "    ";
    }

    // line 100
    public function block_javascripts_defines($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 113
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 113,  328 => 100,  324 => 83,  321 => 82,  317 => 81,  311 => 75,  304 => 71,  300 => 70,  296 => 66,  293 => 65,  289 => 64,  283 => 59,  275 => 39,  273 => 38,  269 => 37,  264 => 28,  260 => 26,  258 => 25,  254 => 24,  248 => 114,  245 => 113,  242 => 111,  239 => 110,  230 => 108,  225 => 107,  223 => 106,  219 => 105,  215 => 104,  210 => 103,  207 => 101,  204 => 100,  187 => 84,  184 => 81,  180 => 78,  178 => 77,  175 => 76,  172 => 75,  169 => 73,  166 => 70,  159 => 68,  156 => 67,  153 => 64,  146 => 62,  142 => 60,  139 => 59,  137 => 58,  134 => 57,  125 => 55,  120 => 54,  118 => 53,  114 => 52,  109 => 51,  106 => 49,  102 => 47,  96 => 45,  93 => 44,  91 => 37,  88 => 35,  85 => 34,  81 => 31,  79 => 24,  77 => 23,  72 => 19,  62 => 12,  53 => 5,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/kargaincxy/kargain_world/www/templates/base.html.twig");
    }
}
