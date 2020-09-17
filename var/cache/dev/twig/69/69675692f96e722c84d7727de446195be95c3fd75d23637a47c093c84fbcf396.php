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
class __TwigTemplate_b6af5fe1a564da426bc296d6bbbbadde1cfc038e960f730fb71a956d77cf8ec0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
";
        // line 5
        if (((isset($context["subscribes"]) || array_key_exists("subscribes", $context)) &&  !twig_test_empty((isset($context["subscribes"]) || array_key_exists("subscribes", $context) ? $context["subscribes"] : (function () { throw new RuntimeError('Variable "subscribes" does not exist.', 5, $this->source); })())))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["subscribes"]) || array_key_exists("subscribes", $context) ? $context["subscribes"] : (function () { throw new RuntimeError('Variable "subscribes" does not exist.', 28, $this->source); })()));
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
            if (1 === twig_compare((isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 47, $this->source); })()), 1)) {
                // line 48
                echo "      <nav class=\"mb-0\" aria-label=\"Navigation par numéro de page d'utilisateur\">
        <ul class=\"pagination justify-content-center mb-0\">
          ";
                // line 51
                echo "          ";
                if (1 === twig_compare((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 51, $this->source); })()), 1)) {
                    // line 52
                    echo "          <li class=\"page-item\">
            <a class=\"page-link\" aria-label=\"Précédent\" href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard", ["current_page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 53, $this->source); })()) - 1)]), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 68, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["num_page"]) {
                    // line 69
                    echo "            ";
                    if (0 === twig_compare($context["num_page"], (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 69, $this->source); })()))) {
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
                if (-1 === twig_compare((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 83, $this->source); })()), (isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 83, $this->source); })()))) {
                    // line 84
                    echo "          <li class=\"page-item\">
            <a class=\"page-link\" aria-label=\"Suivant\" href=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard", ["current_page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 85, $this->source); })()) + 1)]), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["nb_subscribes"]) || array_key_exists("nb_subscribes", $context) ? $context["nb_subscribes"] : (function () { throw new RuntimeError('Variable "nb_subscribes" does not exist.', 103, $this->source); })()), "html", null, true);
            echo " inscription";
            if (1 === twig_compare((isset($context["nb_subscribes"]) || array_key_exists("nb_subscribes", $context) ? $context["nb_subscribes"] : (function () { throw new RuntimeError('Variable "nb_subscribes" does not exist.', 103, $this->source); })()), 1)) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  262 => 109,  258 => 107,  247 => 103,  243 => 101,  238 => 98,  229 => 91,  220 => 85,  217 => 84,  214 => 83,  211 => 81,  205 => 80,  198 => 76,  194 => 75,  191 => 74,  185 => 71,  182 => 70,  179 => 69,  174 => 68,  171 => 66,  162 => 59,  153 => 53,  150 => 52,  147 => 51,  143 => 48,  140 => 47,  133 => 41,  120 => 34,  115 => 32,  111 => 31,  107 => 30,  104 => 29,  100 => 28,  80 => 11,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/base.html.twig' %}

{% block body %}
<div class=\"container\">
{% if subscribes is defined and subscribes is not empty %}
  <div class=\"row mb-3\">
    <div class=\"col\">
      <h3>Liste des utilisateur&middot;rice&middot;s inscrit&middot;e&middot;s à la newsletter</h3>
    </div>
    <div class=\"col-12 col-md-auto\">
      <a href=\"{{ path('dashboard_news_subs_download') }}\" class=\"btn btn-primary\">
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
        {% for sub in subscribes %}
          <tr>
            <td class=\"align-middle text-center\" style=\"width: 3rem\">{{ sub.id }}</td>
            <td class=\"align-middle\">{{ sub.email }}</td>
            <td class=\"align-middle text-center\" style=\"width: 7rem\">{{ sub.dateSubscribe|date('Y-m-d') }}</td>
            <td class=\"align-middle text-center\" style=\"width: 6rem\">
              <a href=\"{{ path('dashboard_news_subs_delete', { email: sub.email }) }}\"
                class=\"btn btn-sm btn-danger\">
                Suppr.
              </a>
            </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>

  <div class=\"mt-4\">
    {# Newsletter subscribes pagination #}
    {% if nb_pages > 1 %}
      <nav class=\"mb-0\" aria-label=\"Navigation par numéro de page d'utilisateur\">
        <ul class=\"pagination justify-content-center mb-0\">
          {# Previous button #}
          {% if current_page > 1 %}
          <li class=\"page-item\">
            <a class=\"page-link\" aria-label=\"Précédent\" href=\"{{ path('dashboard', { current_page: (current_page - 1) }) }}\">
              <span aria-hidden=\"true\">&laquo;</span>
              <span class=\"sr-only\">Précédent</span>
            </a>
          </li>
          {% else %}
          <li class=\"page-item disabled\">
            <span class=\"page-link\">
              <span aria-hidden=\"true\">&laquo;</span>
              <span class=\"sr-only\">Précédent</span>
            </span>
          </li>
          {% endif %}

          {# Loop to generate numbers pages #}
          {% for num_page in 1..nb_pages %}
            {% if num_page == current_page %}
            <li class=\"page-item active\">
              <span class=\"page-link\">{{ num_page }}</span>
            </li>
            {% else %}
            <li class=\"page-item\">
              <a class=\"page-link\" href=\"{{ path('dashboard', { current_page: num_page }) }}\">
                {{ num_page }}
              </a>
            </li>
            {% endif %}
          {% endfor %}

          {# Next button #}
          {% if current_page < nb_pages %}
          <li class=\"page-item\">
            <a class=\"page-link\" aria-label=\"Suivant\" href=\"{{ path('dashboard', { current_page: (current_page + 1) }) }}\">
              <span aria-hidden=\"true\">&raquo;</span>
              <span class=\"sr-only\">Suivant</span>
            </a>
          </li>
          {% else %}
          <li class=\"page-item disabled\">
            <span class=\"page-link\">
              <span aria-hidden=\"true\">&raquo;</span>
              <span class=\"sr-only\">Suivant</span>
            </span>
          </li>
          {% endif %}
        </ul>
      </nav>
    {% endif %}

    <div class=\"mt-1 small text-muted text-center\">
      {{ nb_subscribes }} inscription{% if nb_subscribes > 1 %}s{% endif %} à la newsletter.
    </div>
  </div>
{% else %}
  <div class=\"alert alert-dark\">Aucune inscription à la newsletter, pour l'instant.</div>
{% endif %}
</div>
{% endblock %}
", "dashboard/index.html.twig", "/home/kargaincxy/kargain_world/www/templates/dashboard/index.html.twig");
    }
}
