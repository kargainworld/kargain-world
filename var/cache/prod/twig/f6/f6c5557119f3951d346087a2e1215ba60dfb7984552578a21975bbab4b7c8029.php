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

/* components/text-and-image.html.twig */
class __TwigTemplate_557bec5bb172beb96c0b0b5c4954ed3a1b43b710d04a66c86acae9fe3c10a2a2 extends Template
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
        if (((isset($context["text"]) || array_key_exists("text", $context)) && (isset($context["img"]) || array_key_exists("img", $context)))) {
            // line 2
            $context["has_title"] = ((isset($context["title"]) || array_key_exists("title", $context)) &&  !twig_test_empty(($context["title"] ?? null)));
            // line 3
            echo "<div class=\"app-section app-section--text-and-image";
            if ((isset($context["slug"]) || array_key_exists("slug", $context))) {
                echo " app-section--";
                echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
            }
            if ((isset($context["section_class"]) || array_key_exists("section_class", $context))) {
                echo " ";
                echo twig_escape_filter($this->env, ($context["section_class"] ?? null), "html", null, true);
            }
            echo " container\">
  <div class=\"row row-title\">
    <div class=\"col-12 col-md-6\">
      ";
            // line 6
            if ((($context["has_title"] ?? null) &&  !(isset($context["title_in_panel"]) || array_key_exists("title_in_panel", $context)))) {
                // line 7
                echo "        <h3 class=\"-title display-6 no-border\">";
                echo ($context["title"] ?? null);
                echo "</h3>
      ";
            }
            // line 9
            echo "    </div>
  </div>
  <div class=\"row row-content align-items-";
            // line 11
            if ((isset($context["valign"]) || array_key_exists("valign", $context))) {
                echo twig_escape_filter($this->env, ($context["valign"] ?? null), "html", null, true);
            } else {
                echo "center";
            }
            echo "\">
    <div class=\"col-12 col-md-6 col-text\">
      <div class=\"panel panel--classic\">
        ";
            // line 14
            if ((($context["has_title"] ?? null) && ((isset($context["title_in_panel"]) || array_key_exists("title_in_panel", $context)) && 0 === twig_compare(($context["title_in_panel"] ?? null), true)))) {
                // line 15
                echo "          <h3 class=\"-title h5\">";
                echo ($context["title"] ?? null);
                echo "</h3>
        ";
            }
            // line 17
            echo "
        <hr class=\"mini mt-0 mb-4 ml-0\">

        <div class=\"-text\">";
            // line 20
            echo ($context["text"] ?? null);
            echo "</div>
        ";
            // line 21
            if (((isset($context["list"]) || array_key_exists("list", $context)) &&  !twig_test_empty(($context["list"] ?? null)))) {
                // line 22
                echo "          <ul class=\"-list text-secondary\">
            ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 24
                    echo "              <li>
                ";
                    // line 25
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", true, true, false, 25)) {
                        // line 26
                        echo "                  <span class=\"-item-icon icon-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 26), "html", null, true);
                        echo "\"></span>
                ";
                    }
                    // line 28
                    echo "                <span class=\"-item-text\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 28), "html", null, true);
                    echo "</span>
              </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "          </ul>
        ";
            }
            // line 33
            echo "        ";
            if (((isset($context["actions"]) || array_key_exists("actions", $context)) &&  !twig_test_empty(($context["actions"] ?? null)))) {
                // line 34
                echo "        <div class=\"-actions\">
          ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 36
                    echo "            <a class=\"btn btn-xl btn-pill btn-gradient-primary btn-big-icon btn-big-icon--right";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 36), false)) {
                        echo " mb-2";
                    }
                    echo "\"
              href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "link", [], "any", false, false, false, 37), "html", null, true);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["action"], "target", [], "any", true, true, false, 37)) {
                        echo " target=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "target", [], "any", false, false, false, 37), "html", null, true);
                        echo "\"";
                    }
                    echo " >
              ";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 38), "html", null, true);
                    echo "
              <span class=\"icon icon-arrow-right\"></span>
            </a>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "        </div>
        ";
            }
            // line 44
            echo "      </div>
    </div>
    <div class=\"col-12 col-md-6 col-image text-center mt-5 mt-md-0";
            // line 46
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "position", [], "any", false, false, false, 46), "left")) {
                echo " order-md-first";
            }
            echo "\">
      <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "source", [], "any", false, false, false, 47), "html", null, true);
            echo "\" class=\"img-fluid\">
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "components/text-and-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 47,  194 => 46,  190 => 44,  186 => 42,  168 => 38,  158 => 37,  151 => 36,  134 => 35,  131 => 34,  128 => 33,  124 => 31,  114 => 28,  108 => 26,  106 => 25,  103 => 24,  99 => 23,  96 => 22,  94 => 21,  90 => 20,  85 => 17,  79 => 15,  77 => 14,  67 => 11,  63 => 9,  57 => 7,  55 => 6,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/text-and-image.html.twig", "/home/kargaincxy/kargain_world/www/templates/components/text-and-image.html.twig");
    }
}
