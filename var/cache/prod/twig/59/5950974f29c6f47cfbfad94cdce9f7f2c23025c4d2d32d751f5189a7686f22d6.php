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

/* dashboard/index.html.twig */
class __TwigTemplate_7e94a0db39a6f685e2492373b8455a7205eef62d14401197b93a0c1426b5ea2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("dashboard/base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container\">
";
        // line 5
        if (((isset($context["subscribes"]) || array_key_exists("subscribes", $context)) &&  !twig_test_empty(($context["subscribes"] ?? null)))) {
            // line 6
            echo "  <div class=\"row mb-3\">
    <div class=\"col\">
      <h3>Liste des utilisateur&middot;rice&middot;s inscrit&middot;e&middot;s à la newsletter</h3>
    </div>
    <div class=\"col-12 col-md-auto\">
      <a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_news_subs_download");
            echo "\" class=\"btn btn-primary\">
        Télécharger les emails
      </a>
    </div>
  </div>

  <div class=\"table-responsive table-bordered\">
    <table class=\"table table-striped mb-0\">
      <thead>
        <tr>
          <th class=\"text-center\">#</th>
          <th>Email</th>
          <th class=\"text-center\">Date</th>
          <th class=\"text-center\"></th>
        </tr>
      </thead>
      <tbody>
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscribes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 29
                echo "          <tr>
            <td class=\"align-middle text-center\" style=\"width: 3rem\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
            <td class=\"align-middle\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "email", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
            <td class=\"align-middle text-center\" style=\"width: 7rem\">";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "dateSubscribe", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true);
                echo "</td>
            <td class=\"align-middle text-center\" style=\"width: 6rem\">
              <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_news_subs_delete", ["email" => twig_get_attribute($this->env, $this->source, $context["sub"], "email", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\"
                class=\"btn btn-sm btn-danger\">
                Suppr.
              </a>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "      </tbody>
    </table>
  </div>

  <div class=\"mt-4\">
    ";
            // line 47
            echo "    ";
            if (1 === twig_compare(($context["nb_pages"] ?? null), 1)) {
                // line 48
                echo "      <nav class=\"mb-0\" aria-label=\"Navigation par numéro de page d'utilisateur\">
        <ul class=\"pagination justify-content-center mb-0\">
          ";
                // line 51
                echo "          ";
                if (1 === twig_compare(($context["current_page"] ?? null), 1)) {
                    // line 52
                    echo "          <li class=\"page-item\">
            <a class=\"page-link\" aria-label=\"Précédent\" href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard", ["current_page" => (($context["current_page"] ?? null) - 1)]), "html", null, true);
                    echo "\">
              <span aria-hidden=\"true\">&laquo;</span>
              <span class=\"sr-only\">Précédent</span>
            </a>
          </li>
          ";
                } else {
                    // line 59
                    echo "          <li class=\"page-item disabled\">
            <span class=\"page-link\">
              <span aria-hidden=\"true\">&laquo;</span>
              <span class=\"sr-only\">Précédent</span>
            </span>
          </li>
          ";
                }
                // line 66
                echo "
          ";
                // line 68
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["nb_pages"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["num_page"]) {
                    // line 69
                    echo "            ";
                    if (0 === twig_compare($context["num_page"], ($context["current_page"] ?? null))) {
                        // line 70
                        echo "            <li class=\"page-item active\">
              <span class=\"page-link\">";
                        // line 71
                        echo twig_escape_filter($this->env, $context["num_page"], "html", null, true);
                        echo "</span>
            </li>
            ";
                    } else {
                        // line 74
                        echo "            <li class=\"page-item\">
              <a class=\"page-link\" href=\"";
                        // line 75
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard", ["current_page" => $context["num_page"]]), "html", null, true);
                        echo "\">
                ";
                        // line 76
                        echo twig_escape_filter($this->env, $context["num_page"], "html", null, true);
                        echo "
              </a>
            </li>
            ";
                    }
                    // line 80
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num_page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "
          ";
                // line 83
                echo "          ";
                if (-1 === twig_compare(($context["current_page"] ?? null), ($context["nb_pages"] ?? null))) {
                    // line 84
                    echo "          <li class=\"page-item\">
            <a class=\"page-link\" aria-label=\"Suivant\" href=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard", ["current_page" => (($context["current_page"] ?? null) + 1)]), "html", null, true);
                    echo "\">
              <span aria-hidden=\"true\">&raquo;</span>
              <span class=\"sr-only\">Suivant</span>
            </a>
          </li>
          ";
                } else {
                    // line 91
                    echo "          <li class=\"page-item disabled\">
            <span class=\"page-link\">
              <span aria-hidden=\"true\">&raquo;</span>
              <span class=\"sr-only\">Suivant</span>
            </span>
          </li>
          ";
                }
                // line 98
                echo "        </ul>
      </nav>
    ";
            }
            // line 101
            echo "
    <div class=\"mt-1 small text-muted text-center\">
      ";
            // line 103
            echo twig_escape_filter($this->env, ($context["nb_subscribes"] ?? null), "html", null, true);
            echo " inscription";
            if (1 === twig_compare(($context["nb_subscribes"] ?? null), 1)) {
                echo "s";
            }
            echo " à la newsletter.
    </div>
  </div>
";
        } else {
            // line 107
            echo "  <div class=\"alert alert-dark\">Aucune inscription à la newsletter, pour l'instant.</div>
";
        }
        // line 109
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 109,  240 => 107,  229 => 103,  225 => 101,  220 => 98,  211 => 91,  202 => 85,  199 => 84,  196 => 83,  193 => 81,  187 => 80,  180 => 76,  176 => 75,  173 => 74,  167 => 71,  164 => 70,  161 => 69,  156 => 68,  153 => 66,  144 => 59,  135 => 53,  132 => 52,  129 => 51,  125 => 48,  122 => 47,  115 => 41,  102 => 34,  97 => 32,  93 => 31,  89 => 30,  86 => 29,  82 => 28,  62 => 11,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/index.html.twig", "/home/kargaincxy/kargain_world/www/templates/dashboard/index.html.twig");
    }
}
