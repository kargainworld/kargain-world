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

/* components/forms/newsletter-subscribe.html.twig */
class __TwigTemplate_48438a9348554ce6532ca3b51efbebf0581e0a2323c9bf7120da45276c33408d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/forms/newsletter-subscribe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/forms/newsletter-subscribe.html.twig"));

        // line 1
        echo "<div class=\"app-section app-section--subscribe container\">
  <h4 class=\"-title h3\">";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("section.newsletter.title");
        echo "</h4>

  <form class=\"-form -form--newsletter-subscribe\" action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletter_subscribe");
        echo "\" method=\"post\">
    <div class=\"input-group input-group-lg input-group-pill\">
      <input type=\"email\" class=\"form-control bg-transparent\" name=\"subscribe-email\" placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("section.newsletter.input.label"), "html", null, true);
        echo "\"
        aria-label=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("section.newsletter.input.label"), "html", null, true);
        echo "\" aria-describedby=\"button-addon2\" required=\"required\">
      <div class=\"input-group-append\">
        <button class=\"btn btn-gradient-primary btn-big-icon btn-big-icon--right\" type=\"submit\" id=\"button-addon2\">
          ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("section.newsletter.btn.label"), "html", null, true);
        echo "
          <span class=\"icon icon-arrow-right\"></span>
        </button>
      </div>
    </div>
  </form>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/forms/newsletter-subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  60 => 7,  56 => 6,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"app-section app-section--subscribe container\">
  <h4 class=\"-title h3\">{{ 'section.newsletter.title'|trans|raw }}</h4>

  <form class=\"-form -form--newsletter-subscribe\" action=\"{{ path('newsletter_subscribe') }}\" method=\"post\">
    <div class=\"input-group input-group-lg input-group-pill\">
      <input type=\"email\" class=\"form-control bg-transparent\" name=\"subscribe-email\" placeholder=\"{{ 'section.newsletter.input.label'|trans }}\"
        aria-label=\"{{ 'section.newsletter.input.label'|trans }}\" aria-describedby=\"button-addon2\" required=\"required\">
      <div class=\"input-group-append\">
        <button class=\"btn btn-gradient-primary btn-big-icon btn-big-icon--right\" type=\"submit\" id=\"button-addon2\">
          {{ 'section.newsletter.btn.label'|trans }}
          <span class=\"icon icon-arrow-right\"></span>
        </button>
      </div>
    </div>
  </form>
</div>
", "components/forms/newsletter-subscribe.html.twig", "/home/kargaincxy/kargain_world/www/templates/components/forms/newsletter-subscribe.html.twig");
    }
}
