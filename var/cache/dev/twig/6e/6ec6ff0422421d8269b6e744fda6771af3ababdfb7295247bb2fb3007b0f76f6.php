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
class __TwigTemplate_0f503e0a7ef987e016bcfba21bb42c55383e23db72c103c02c8be7d71fcebece extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/base.html.twig"));

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
        if ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "robots", [], "any", true, true, false, 28) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 28, $this->source); })()), "robots", [], "any", false, false, false, 28)))) {
            // line 29
            echo "      <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 29, $this->source); })()), "robots", [], "any", false, false, false, 29), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["core_class"]) || array_key_exists("core_class", $context) ? $context["core_class"] : (function () { throw new RuntimeError('Variable "core_class" does not exist.', 41, $this->source); })()), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["body_class"]) || array_key_exists("body_class", $context) ? $context["body_class"] : (function () { throw new RuntimeError('Variable "body_class" does not exist.', 68, $this->source); })()), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_title"));

        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", true, true, false, 12) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12)))) {
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
            echo " - Dashboard - Kargain World
      ";
        } else {
            // line 15
            echo "        Dashboard - Kargain World";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_meta_desc($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_desc"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_desc"));

        // line 22
        if ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "desc", [], "any", true, true, false, 22) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 22, $this->source); })()), "desc", [], "any", false, false, false, 22)))) {
            // line 23
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 23, $this->source); })()), "desc", [], "any", false, false, false, 23), "html", null, true);
            echo "\" />
      ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
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

    // line 43
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "    <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark mb-4\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">Dashboard</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

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
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "attributes", [], "any", false, false, false, 59), "get", [0 => "_route"], "method", false, false, false, 59), "dashboard_newsletter")) {
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
        echo "      <div class=\"container\">
        ";
        // line 72
        $this->loadTemplate("components/flashes.html.twig", "dashboard/base.html.twig", 72)->display($context);
        // line 73
        echo "      </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
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

    // line 91
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
        return "dashboard/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 91,  369 => 84,  351 => 81,  333 => 77,  322 => 73,  320 => 72,  317 => 71,  307 => 70,  290 => 60,  284 => 59,  274 => 52,  265 => 46,  261 => 44,  251 => 43,  233 => 38,  219 => 23,  217 => 22,  207 => 21,  196 => 15,  191 => 13,  189 => 12,  179 => 11,  167 => 92,  164 => 91,  160 => 89,  156 => 88,  151 => 87,  148 => 85,  145 => 84,  142 => 82,  139 => 81,  135 => 78,  132 => 77,  129 => 75,  126 => 70,  119 => 68,  116 => 67,  113 => 43,  106 => 41,  102 => 39,  99 => 38,  95 => 36,  90 => 35,  87 => 33,  83 => 31,  77 => 29,  74 => 28,  72 => 21,  68 => 18,  66 => 11,  64 => 10,  56 => 3,  52 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# default twig values #}
{% if bg_animated is not defined %}{% set bg_animated = false %}{% endif %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    {# meta.title #}
    <title>
    {%- block meta_title -%}
      {%- if meta.title is defined and meta.title is not empty -%}
        {{ meta.title }} - Dashboard - Kargain World
      {% else %}
        Dashboard - Kargain World
      {%- endif -%}
    {%- endblock -%}
    </title>

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

    {# Base stylesheets #}
    <link rel=\"stylesheet\" href=\"{{ asset('build/dashboard.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/google-fonts.css') }}\">
    {# Custom stylesheets from twig templates #}
    {% block stylesheets %}{% endblock %}
  </head>

  <body class=\"app-core app-core--dashboard{% if core_class is defined %} {{ core_class }}{% endif %}\">
    {# Header #}
    {% block header %}
    <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark mb-4\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('dashboard') }}\">Dashboard</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"navbar-nav ml-auto\">
          <a class=\"btn btn-sm btn-warning\" href=\"{{ path('dashboard_reset_cache') }}\">
            Ré-initialiser le cache
          </a>
        </div>

        <!-- <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item{% if app.request.attributes.get('_route') == 'dashboard_newsletter' %} active{% endif %}\">
              <a class=\"nav-link\" href=\"{{ path('dashboard_newsletter') }}\">Clients</a>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>
    {% endblock %}

    <div class=\"app-body{% if body_class is defined %} {{ body_class }}{% endif %}\">
      {# Notices/Errors messages from \"flashbag\" #}
      {% block flashes %}
      <div class=\"container\">
        {% include 'components/flashes.html.twig' %}
      </div>
      {% endblock %}

      {# Body #}
      {% block body %}{% endblock %}
    </div>

    {# Footer #}
    {% block footer %}{% endblock %}

    {# Custom javascripts from twig templates #}
    {% block javascripts_defines %}{% endblock %}

    {# Base javascripts #}
    <script src=\"{{ asset('build/manifest.js') }}\"></script>
    <script src=\"{{ asset('build/vendors.js') }}\"></script>
    <script src=\"{{ asset('build/dashboard.js') }}\"></script>
    {# Custom javascripts from twig templates #}
    {% block javascripts %}{% endblock %}
  </body>
</html>
", "dashboard/base.html.twig", "/home/kargaincxy/kargain_world/www/templates/dashboard/base.html.twig");
    }
}
