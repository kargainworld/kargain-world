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
class __TwigTemplate_71c6848525a13430b14db316937e8e5052b466ea6f9cdbf6c26af019250860b9 extends Template
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
        return array (  60 => 10,  54 => 7,  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/newsletter-subscribe.html.twig", "/home/kargaincxy/kargain_world/www/templates/components/forms/newsletter-subscribe.html.twig");
    }
}
