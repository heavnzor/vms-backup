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

/* index.html.twig */
class __TwigTemplate_36d851d5a55043452dc65af0d3951a99d668f254c7819d11e857245815afbc28 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]> <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]> <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"en-US\">
  <!--<![endif]-->
  <head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>ViaMedo : Beta</title>
    <!-- style and script resources -->
    <script data-ad-client=\"ca-pub-1152024597883583\" async=\"async\" src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async=\"async\" src=\"https://www.googletagmanager.com/gtag/js?id=G-CEFC8S5YV4\"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-CEFC8S5YV4');
    </script>
    ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    <!--meta properties -->
    <meta name=\"description\" content=\"Aide à la désaccoutumance de substances addictives\"/>
    <!--detailed robots meta https://developers.google.com/search/reference/robots_meta_tag -->
    <meta name=\"robots\" content=\"index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1\"/>
    <link rel=\"canonical\" href=\"\"/>
    <!--open graph meta tags for social sites and search engines-->
    <meta property=\"og:locale\" content=\"fr_FR\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"ViaMedo\"/>
    <meta property=\"og:description\" content=\"Aide à la désaccoutumance de substances addictives\"/>
    <meta property=\"og:url\" content=\"https://viamedo.fr\"/>
    <meta property=\"og:site_name\" content=\"ViaMedo\"/>
    <meta property=\"og:image:width\" content=\"1200\"/>
    <meta property=\"og:image:height\" content=\"660\"/>
    <!--search engine verification-->
    <meta name=\"google-site-verification\" content=\"\"/>

    <!--powered by meta-->
    <!-- Site fevicon icons -->
    <link rel=\"icon\" href=\"../pics/favicon_16.ico\" sizes=\"16x16\"/>
    <link rel=\"icon\" href=\"../pics/favicon.ico\" sizes=\"32x32\"/>
    <!--complete list of meta tags at - https://gist.github.com/lancejpollard/1978404 -->
  </head>
  <body>
    ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "            </body>
          </html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 27
        echo "      ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "      ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-11\">
            <img src=\"../pics/banniere.png\"></div>
        </div>
        <div class=\"row  \">
          <div class=\"col-sm 11 \">
            <div class=\"collapse centered\" id=\"navbarToggleExternalContent\">
              <div class=\"bg-dark centered\">
                <span class=\"centered\"><a href=\"home\">
                  <img src=\"../pics/icons8-home.svg\" width=\"70px\">
                  <br>Accueil</a></span>
                <a href=\"infos\">
                  <img src=\"../pics/icons8-info.svg\" width=\"70px\">
                  Informations</a>
                <a href=\"substances\">
                  <img src=\"../pics/icons8-temperature_sensitive.svg\" width=\"70px\">
                  Substances</a>
                <a href=\"videos\">
                  <img src=\"../pics/icons8-video.svg\" width=\"70px\">
                  Vidéos</a>
                <a href=\"tips\">
                  <img src=\"../pics/icons8-idea.svg\" width=\"70px\">
                  Astuces</a>
                <a href=\"stats\">
                  <img src=\"../pics/icons8-chart.svg\" width=\"70px\">
                  Statistiques</a>
                <a href=\"historic\">
                  <img src=\"../pics/icons8-historic_ship.svg\" width=\"70px\">
                 Historique</a>
                <a href=\"money\">
                  <img src=\"../pics/icons8-money.svg\" width=\"70px\">
                  Dépenses</a>
                <a href=\"goals\">
                  <img src=\"../pics/icons8-goal.svg\" width=\"70px\">
                  Objectifs</a>
                <a href=\"services\">
                  <img src=\"../pics/icons8-services.svg\" width=\"70px\">
                  Services</a>
                <a href=\"disconnect\">
                  <img src=\"../pics/icons8-disconnected.svg\" width=\"70px\">
                  Déconnexion</a>
                  </span>
              </div>
            </div>
            <nav class=\"navbar navbar-dark bg-dark col-sm-11\" role=\"navigation\">
              <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></nav>

              <div class=\"row centered\">
                <main class=\"col-sm-6 py-5 px-5\">
                  ";
        // line 108
        $this->displayBlock('main', $context, $blocks);
        // line 109
        echo "                </main>
                <aside class=\"col-sm-5 py-5 px-5\">
                  ";
        // line 111
        $this->displayBlock('sidebar', $context, $blocks);
        echo "</aside>
                </div>

                <div class=\"row\">
                  <div class=\"col-sm-12\" style=\"text-align:center;\">Copyright 2021 - Antonu-Maria Mela -
                    <a href=\"http://viamedo.fr/CGV.pdf\" target=\"_blank\">CGV</a>
                  </div>
                </div>

              </div>

              <!--[if lt IE 7]> <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"#\">upgrade your browser</a> to improve your experience.</p> <![endif]-->

              <link rel=\"stylesheet\" type=\"text/css\" href=\"/\" media=\"print\"/>
              <script src=\"\" async=\"async\" defer=\"defer\"></script>
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  279 => 111,  261 => 108,  235 => 111,  231 => 109,  229 => 108,  176 => 57,  166 => 56,  153 => 30,  143 => 29,  130 => 27,  120 => 26,  108 => 127,  106 => 56,  80 => 32,  77 => 29,  75 => 26,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]> <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]> <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"en-US\">
  <!--<![endif]-->
  <head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>ViaMedo : Beta</title>
    <!-- style and script resources -->
    <script data-ad-client=\"ca-pub-1152024597883583\" async=\"async\" src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async=\"async\" src=\"https://www.googletagmanager.com/gtag/js?id=G-CEFC8S5YV4\"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-CEFC8S5YV4');
    </script>
    {% block stylesheets %}
      {{ encore_entry_link_tags('app') }}
    {% endblock %}
    {% block javascripts %}
      {{ encore_entry_script_tags('app') }}
    {% endblock %}
    <!--meta properties -->
    <meta name=\"description\" content=\"Aide à la désaccoutumance de substances addictives\"/>
    <!--detailed robots meta https://developers.google.com/search/reference/robots_meta_tag -->
    <meta name=\"robots\" content=\"index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1\"/>
    <link rel=\"canonical\" href=\"\"/>
    <!--open graph meta tags for social sites and search engines-->
    <meta property=\"og:locale\" content=\"fr_FR\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"ViaMedo\"/>
    <meta property=\"og:description\" content=\"Aide à la désaccoutumance de substances addictives\"/>
    <meta property=\"og:url\" content=\"https://viamedo.fr\"/>
    <meta property=\"og:site_name\" content=\"ViaMedo\"/>
    <meta property=\"og:image:width\" content=\"1200\"/>
    <meta property=\"og:image:height\" content=\"660\"/>
    <!--search engine verification-->
    <meta name=\"google-site-verification\" content=\"\"/>

    <!--powered by meta-->
    <!-- Site fevicon icons -->
    <link rel=\"icon\" href=\"../pics/favicon_16.ico\" sizes=\"16x16\"/>
    <link rel=\"icon\" href=\"../pics/favicon.ico\" sizes=\"32x32\"/>
    <!--complete list of meta tags at - https://gist.github.com/lancejpollard/1978404 -->
  </head>
  <body>
    {% block body %}
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-11\">
            <img src=\"../pics/banniere.png\"></div>
        </div>
        <div class=\"row  \">
          <div class=\"col-sm 11 \">
            <div class=\"collapse centered\" id=\"navbarToggleExternalContent\">
              <div class=\"bg-dark centered\">
                <span class=\"centered\"><a href=\"home\">
                  <img src=\"../pics/icons8-home.svg\" width=\"70px\">
                  <br>Accueil</a></span>
                <a href=\"infos\">
                  <img src=\"../pics/icons8-info.svg\" width=\"70px\">
                  Informations</a>
                <a href=\"substances\">
                  <img src=\"../pics/icons8-temperature_sensitive.svg\" width=\"70px\">
                  Substances</a>
                <a href=\"videos\">
                  <img src=\"../pics/icons8-video.svg\" width=\"70px\">
                  Vidéos</a>
                <a href=\"tips\">
                  <img src=\"../pics/icons8-idea.svg\" width=\"70px\">
                  Astuces</a>
                <a href=\"stats\">
                  <img src=\"../pics/icons8-chart.svg\" width=\"70px\">
                  Statistiques</a>
                <a href=\"historic\">
                  <img src=\"../pics/icons8-historic_ship.svg\" width=\"70px\">
                 Historique</a>
                <a href=\"money\">
                  <img src=\"../pics/icons8-money.svg\" width=\"70px\">
                  Dépenses</a>
                <a href=\"goals\">
                  <img src=\"../pics/icons8-goal.svg\" width=\"70px\">
                  Objectifs</a>
                <a href=\"services\">
                  <img src=\"../pics/icons8-services.svg\" width=\"70px\">
                  Services</a>
                <a href=\"disconnect\">
                  <img src=\"../pics/icons8-disconnected.svg\" width=\"70px\">
                  Déconnexion</a>
                  </span>
              </div>
            </div>
            <nav class=\"navbar navbar-dark bg-dark col-sm-11\" role=\"navigation\">
              <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></nav>

              <div class=\"row centered\">
                <main class=\"col-sm-6 py-5 px-5\">
                  {%block main %}{% endblock %}
                </main>
                <aside class=\"col-sm-5 py-5 px-5\">
                  {%block sidebar%}{%endblock%}</aside>
                </div>

                <div class=\"row\">
                  <div class=\"col-sm-12\" style=\"text-align:center;\">Copyright 2021 - Antonu-Maria Mela -
                    <a href=\"http://viamedo.fr/CGV.pdf\" target=\"_blank\">CGV</a>
                  </div>
                </div>

              </div>

              <!--[if lt IE 7]> <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"#\">upgrade your browser</a> to improve your experience.</p> <![endif]-->

              <link rel=\"stylesheet\" type=\"text/css\" href=\"/\" media=\"print\"/>
              <script src=\"\" async=\"async\" defer=\"defer\"></script>
              {%endblock%}
            </body>
          </html>
", "index.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/index.html.twig");
    }
}