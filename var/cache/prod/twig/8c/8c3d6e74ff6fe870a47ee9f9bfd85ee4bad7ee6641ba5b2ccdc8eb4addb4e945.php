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

/* components/header.html.twig */
class __TwigTemplate_4dcf8589cebeb7529891031e89b675df61045b0241c5c451befc449989bf03ae extends Template
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
        $context["size_display_menu"] = "md";
        // line 2
        echo "
<div class=\"app-header\">
  <nav class=\"navbar navbar-light navbar-expand-";
        // line 4
        echo twig_escape_filter($this->env, ($context["size_display_menu"] ?? null), "html", null, true);
        echo " py-lg-4\">
    <div class=\"container py-lg-1\">
      <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">
        ";
        // line 7
        $this->loadTemplate("components/logo.html.twig", "components/header.html.twig", 7)->display($context);
        // line 8
        echo "      </a>

      <button class=\"navbar-toggler ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse order-";
        // line 14
        echo twig_escape_filter($this->env, ($context["size_display_menu"] ?? null), "html", null, true);
        echo "-1\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav ml-auto\">
          ";
        // line 19
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "about", 1 => "team", 2 => "product"]);
        foreach ($context['_seq'] as $context["_key"] => $context["menu_slug"]) {
            // line 20
            echo "            <li class=\"nav-item";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 20), "attributes", [], "any", false, false, false, 20), "get", [0 => "_route"], "method", false, false, false, 20), $context["menu_slug"])) {
                echo " active";
            }
            echo "\">
              <a class=\"nav-link px-2 ml-md-2 ml-lg-4 ml-xl-5\" href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($context["menu_slug"]);
            echo "\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("menu." . $context["menu_slug"]) . ".label")), "html", null, true);
            echo "
                ";
            // line 23
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 23), "attributes", [], "any", false, false, false, 23), "get", [0 => "_route"], "method", false, false, false, 23), $context["menu_slug"])) {
                echo " <span class=\"sr-only\">(current)</span>";
            }
            // line 24
            echo "              </a>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_slug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "          <li class=\"nav-item\">
            <a class=\"nav-link px-2 ml-md-2 ml-lg-4 ml-xl-5\"
              href=\"/build/files/whitepaper.pdf\" target=\"_blank\">
              Whitepaper
            </a>
          </li>
          <li class=\"nav-divider d-md-none\">
            <hr>
          </li>
          ";
        // line 36
        $context["current_url_slug"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 36), "attributes", [], "any", false, false, false, 36), "get", [0 => "_route"], "method", false, false, false, 36);
        // line 37
        echo "          ";
        $context["current_url_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["current_url_slug"] ?? null));
        // line 38
        echo "
          ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "en", 1 => "fr"]);
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 40
            echo "            ";
            $context["url_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["current_url_slug"] ?? null), ["_locale" => $context["lang"]]);
            // line 41
            echo "            <li class=\"nav-item";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 41)) {
                echo " ml-md-2 ml-lg-4 ml-xl-5";
            }
            if (0 === twig_compare(($context["url_path"] ?? null), ($context["current_url_path"] ?? null))) {
                echo " active";
            }
            echo "\">
              ";
            // line 42
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 42), false)) {
                echo "<span class=\"d-none d-md-inline\">&nbsp|</span>";
            }
            // line 43
            echo "              <a class=\"nav-link px-2 px-md-0 py-1 py-md-2 d-inline-block\" href=\"";
            echo twig_escape_filter($this->env, ($context["url_path"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 44
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["lang"]), "html", null, true);
            echo "
              </a>
            </li>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </ul>
      </div>
    </div>
  </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 48,  157 => 44,  152 => 43,  148 => 42,  138 => 41,  135 => 40,  118 => 39,  115 => 38,  112 => 37,  110 => 36,  99 => 27,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  72 => 20,  67 => 19,  62 => 14,  54 => 8,  52 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/header.html.twig", "/home/kargaincxy/kargain_world/www/templates/components/header.html.twig");
    }
}
