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

/* components/head-favicons.html.twig */
class __TwigTemplate_bd7ba64e241a6fcd9d2174a9a6ece5c8a8508fcfa5c0da1c1a8fb3f3096ea5b0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/head-favicons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/head-favicons.html.twig"));

        // line 1
        echo "<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/build/favicons/apple-touch-icon-57x57.png\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"/build/favicons/apple-touch-icon-60x60.png\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/build/favicons/apple-touch-icon-72x72.png\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/build/favicons/apple-touch-icon-76x76.png\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/build/favicons/apple-touch-icon-114x114.png\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/build/favicons/apple-touch-icon-120x120.png\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/build/favicons/apple-touch-icon-144x144.png\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/build/favicons/apple-touch-icon-152x152.png\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/build/favicons/apple-touch-icon-180x180.png\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
<meta name=\"apple-mobile-web-app-title\" content=\"Kargain World\">
<meta name=\"mobile-web-app-capable\" content=\"yes\">
<meta name=\"theme-color\" content=\"#ffffff\">
<meta name=\"application-name\" content=\"Kargain World\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/build/favicons/favicon-32x32.png\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/build/favicons/favicon-16x16.png\">
<link rel=\"shortcut icon\" href=\"/build/favicons/favicon.ico\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)\" href=\"/build/favicons/apple-touch-startup-image-320x460.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)\" href=\"/build/favicons/apple-touch-startup-image-640x920.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)\" href=\"/build/favicons/apple-touch-startup-image-640x1096.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)\" href=\"/build/favicons/apple-touch-startup-image-750x1294.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 414px) and (device-height: 736px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3)\" href=\"/build/favicons/apple-touch-startup-image-1182x2208.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 414px) and (device-height: 736px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 3)\" href=\"/build/favicons/apple-touch-startup-image-1242x2148.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)\" href=\"/build/favicons/apple-touch-startup-image-748x1024.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)\" href=\"/build/favicons/apple-touch-startup-image-768x1004.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)\" href=\"/build/favicons/apple-touch-startup-image-1496x2048.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)\" href=\"/build/favicons/apple-touch-startup-image-1536x2008.png\">
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/head-favicons.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/build/favicons/apple-touch-icon-57x57.png\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"/build/favicons/apple-touch-icon-60x60.png\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/build/favicons/apple-touch-icon-72x72.png\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/build/favicons/apple-touch-icon-76x76.png\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/build/favicons/apple-touch-icon-114x114.png\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/build/favicons/apple-touch-icon-120x120.png\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/build/favicons/apple-touch-icon-144x144.png\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/build/favicons/apple-touch-icon-152x152.png\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/build/favicons/apple-touch-icon-180x180.png\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
<meta name=\"apple-mobile-web-app-title\" content=\"Kargain World\">
<meta name=\"mobile-web-app-capable\" content=\"yes\">
<meta name=\"theme-color\" content=\"#ffffff\">
<meta name=\"application-name\" content=\"Kargain World\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/build/favicons/favicon-32x32.png\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/build/favicons/favicon-16x16.png\">
<link rel=\"shortcut icon\" href=\"/build/favicons/favicon.ico\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)\" href=\"/build/favicons/apple-touch-startup-image-320x460.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)\" href=\"/build/favicons/apple-touch-startup-image-640x920.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)\" href=\"/build/favicons/apple-touch-startup-image-640x1096.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)\" href=\"/build/favicons/apple-touch-startup-image-750x1294.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 414px) and (device-height: 736px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3)\" href=\"/build/favicons/apple-touch-startup-image-1182x2208.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 414px) and (device-height: 736px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 3)\" href=\"/build/favicons/apple-touch-startup-image-1242x2148.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)\" href=\"/build/favicons/apple-touch-startup-image-748x1024.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)\" href=\"/build/favicons/apple-touch-startup-image-768x1004.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)\" href=\"/build/favicons/apple-touch-startup-image-1496x2048.png\">
<link rel=\"apple-touch-startup-image\" media=\"(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)\" href=\"/build/favicons/apple-touch-startup-image-1536x2008.png\">
", "components/head-favicons.html.twig", "/home/kargaincxy/kargain_world/www/templates/components/head-favicons.html.twig");
    }
}
