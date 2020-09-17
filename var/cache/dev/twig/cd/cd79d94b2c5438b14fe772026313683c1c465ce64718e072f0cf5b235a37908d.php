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
class __TwigTemplate_f3a8a39a8fea94da13c2dede0590370dce1dd3d58d59051fd78f42d736509112 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    ";
        // line 4
        if (((isset($context["google_analytics_key"]) || array_key_exists("google_analytics_key", $context)) && 0 !== twig_compare((isset($context["google_analytics_key"]) || array_key_exists("google_analytics_key", $context) ? $context["google_analytics_key"] : (function () { throw new RuntimeError('Variable "google_analytics_key" does not exist.', 4, $this->source); })()), false))) {
            // line 5
            echo "    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create',  '";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["google_analytics_key"]) || array_key_exists("google_analytics_key", $context) ? $context["google_analytics_key"] : (function () { throw new RuntimeError('Variable "google_analytics_key" does not exist.', 12, $this->source); })()), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "robots", [], "any", true, true, false, 44) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 44, $this->source); })()), "robots", [], "any", false, false, false, 44)))) {
            // line 45
            echo "      <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 45, $this->source); })()), "robots", [], "any", false, false, false, 45), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["stylesheets"]) || array_key_exists("stylesheets", $context) ? $context["stylesheets"] : (function () { throw new RuntimeError('Variable "stylesheets" does not exist.', 54, $this->source); })()));
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
            echo twig_escape_filter($this->env, (isset($context["core_class"]) || array_key_exists("core_class", $context) ? $context["core_class"] : (function () { throw new RuntimeError('Variable "core_class" does not exist.', 62, $this->source); })()), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["body_class"]) || array_key_exists("body_class", $context) ? $context["body_class"] : (function () { throw new RuntimeError('Variable "body_class" does not exist.', 68, $this->source); })()), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) || array_key_exists("scripts", $context) ? $context["scripts"] : (function () { throw new RuntimeError('Variable "scripts" does not exist.', 107, $this->source); })()));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_title"));

        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", true, true, false, 25) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25)))) {
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26), "html", null, true);
            echo " - Kargain World";
        } else {
            // line 28
            echo "Kargain World";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_meta_desc($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_desc"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_desc"));

        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "desc", [], "any", true, true, false, 38) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 38, $this->source); })()), "desc", [], "any", false, false, false, 38)))) {
            // line 39
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 39, $this->source); })()), "desc", [], "any", false, false, false, 39), "html", null, true);
            echo "\" />
      ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 65
        echo "      ";
        $this->loadTemplate("components/header.html.twig", "base.html.twig", 65)->display($context);
        // line 66
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_flashes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flashes"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flashes"));

        // line 71
        echo "        <div class=\"app-flashbags container\">";
        $this->loadTemplate("components/flashes.html.twig", "base.html.twig", 71)->display($context);
        echo "</div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 82
        echo "      ";
        $this->loadTemplate("components/footer.html.twig", "base.html.twig", 82)->display($context);
        // line 83
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_javascripts_defines($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_defines"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_defines"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  442 => 113,  424 => 100,  414 => 83,  411 => 82,  401 => 81,  383 => 75,  370 => 71,  360 => 70,  350 => 66,  347 => 65,  337 => 64,  319 => 59,  305 => 39,  303 => 38,  293 => 37,  282 => 28,  278 => 26,  276 => 25,  266 => 24,  254 => 114,  251 => 113,  248 => 111,  245 => 110,  236 => 108,  231 => 107,  229 => 106,  225 => 105,  221 => 104,  216 => 103,  213 => 101,  210 => 100,  193 => 84,  190 => 81,  186 => 78,  184 => 77,  181 => 76,  178 => 75,  175 => 73,  172 => 70,  165 => 68,  162 => 67,  159 => 64,  152 => 62,  148 => 60,  145 => 59,  143 => 58,  140 => 57,  131 => 55,  126 => 54,  124 => 53,  120 => 52,  115 => 51,  112 => 49,  108 => 47,  102 => 45,  99 => 44,  97 => 37,  94 => 35,  91 => 34,  87 => 31,  85 => 24,  83 => 23,  78 => 19,  68 => 12,  59 => 5,  57 => 4,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    {% if google_analytics_key is defined and google_analytics_key != false %}
    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create',  '{{ google_analytics_key }}', 'auto'); // UA-163559523-1
      ga('set',     'anonymizeIp',    true);
      ga('set',     'cookie_expires', 395 * 24 * 60 * 60); // = 13 months.
      ga('send',    'pageview');
    </script>
    <!-- End Google Analytics -->
    {% endif %}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    {# meta.title #}
    <title>
      {%- block meta_title -%}
        {%- if meta.title is defined and meta.title is not empty -%}
            {{ meta.title }} - Kargain World
        {%- else -%}
            Kargain World
        {%- endif -%}
      {%- endblock -%}
    </title>
    
    {# meta.favicons #}
    {% include 'components/head-favicons.html.twig' %}

    {# meta.desc #}
    {%- block meta_desc -%}
      {% if meta.desc is defined and meta.desc is not empty %}
        <meta name=\"description\" content=\"{{ meta.desc }}\" />
      {% endif %}
    {%- endblock -%}

    {# meta.robots #}
    {% if meta.robots is defined and meta.robots is not empty %}
      <meta name=\"robots\" content=\"{{ meta.robots }}\" />
    {% else %}
      <meta name=\"robots\" content=\"noindex, nofollow\" />
    {% endif %}

    {# Stylesheets #}
    <link rel=\"stylesheet\" href=\"{{ asset('build/google-fonts.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/kargain-world.css') }}\">
    {% if stylesheets is defined %}
      {% for stylesheet_url in stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('build/' ~ stylesheet_url) }}\">
      {% endfor %}
    {% endif %}
    {# Custom stylesheets from twig templates #}
    {% block stylesheets %}{% endblock %}
  </head>

  <body class=\"app-core{% if core_class is defined %} {{ core_class }}{% endif %}\">
    {# Header #}
    {% block header %}
      {% include 'components/header.html.twig' %}
    {% endblock %}

    <div id=\"app\" class=\"app-body{% if body_class is defined %} {{ body_class }}{% endif %}\">
      {# Notices/Errors messages from \"flashbag\" #}
      {% block flashes %}
        <div class=\"app-flashbags container\">{% include 'components/flashes.html.twig' %}</div>
      {% endblock %}

      {# Body #}
      {% block body %}{% endblock %}

      {% include 'components/forms/newsletter-subscribe.html.twig' %}
    </div>

    {# Footer #}
    {% block footer %}
      {% include 'components/footer.html.twig' %}
    {% endblock %}

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

    {# Custom javascripts from twig templates #}
    {% block javascripts_defines %}{% endblock %}

    {# Javascripts #}
    <script src=\"{{ asset('build/manifest.js') }}\"></script>
    <script src=\"{{ asset('build/vendors.js') }}\"></script>
    <script src=\"{{ asset('build/kargain-world.js') }}\"></script>
    {% if scripts is defined %}
      {% for script_url in scripts %}
        <script src=\"{{ asset('build/' ~ script_url) }}\"></script>
      {% endfor %}
    {% endif %}

    {# Custom javascripts from twig templates #}
    {% block javascripts %}{% endblock %}
  </body>
</html>
", "base.html.twig", "/home/kargaincxy/kargain_world/www/templates/base.html.twig");
    }
}
