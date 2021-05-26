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

/* index2.html.twig */
class __TwigTemplate_f7068ca31ed371bd3548df2e4bca1da83471d9741da2e2e285685efb17ef86a5 extends Template
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
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index2.html.twig"));

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
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <script src=\"\"></script>
    <!--meta properties -->
    <meta name=\"description\" content=\"Aide à la désaccoutumance de substances addictives\"/>
    <!--detailed robots meta https://developers.google.com/search/reference/robots_meta_tag -->
    <meta name=\"robots\" content=\"index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1\"/>
    <link rel=\"canonical\" href=\"\"/>
    <!--open graph meta tags for social sites and search engines-->
    <meta property=\"og:locale\" content=\"fr_FR\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"Aide à la désaccoutumance de substances addictives\"/>
    <meta property=\"og:description\" content=\"Aide à la désaccoutumance de substances addictives\"/>
    <meta property=\"og:url\" content=\"https://viamedo.fr\"/>
    <meta property=\"og:site_name\" content=\"ViaMedo\"/>
    <meta property=\"og:image:width\" content=\"1200\"/>
    <meta property=\"og:image:height\" content=\"660\"/>
    <!--search engine verification-->
    <meta name=\"google-site-verification\" content=\"\"/>

    <script data-ad-client=\"ca-pub-1152024597883583\" async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async=\"async\" src=\"https://www.googletagmanager.com/gtag/js?id=G-CEFC8S5YV4\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  fu  function gtag() {
    dataLayer.push(arguments);
  }
ag('js', new Date());

  gtag('config', 'G-CEFC8S5YV4');
</script>
    <!-- Site favicon icon -->
    <link rel=\"icon\" href=\"../pics/favicon_16.ico\" sizes=\"16x16\"/>
    <link rel=\"icon\" href=\"../pics/favicon.ico\" sizes=\"32x32\"/>
    <!--complete list of meta tags at - https://gist.github.com/lancejpollard/1978404 -->
  </head>
  <body>
  ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "    </body>
  </html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "      ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
      
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <img src=\"../pics/banniere.png\"></div>
        </div>
        <div class=\"row centered\">
          <nav class=\"navbar col-sm-12\" role=\"navigation\">
            <a href=\"page/home\">
              <img src=\"../pics/icons8-home.svg\" width=\"70px\">
              <br>Accueil</a>
            <a href=\"page/infos\">
              <img src=\"../pics/icons8-info.svg\" width=\"70px\">
              <br>Informations</a>
            <a href=\"page/substances\">
              <img src=\"../pics/icons8-temperature_sensitive.svg\" width=\"70px\">
              <br>Substances</a>
            <a href=\"page/videos\">
              <img src=\"../pics/icons8-video.svg\" width=\"70px\">
              <br>Vidéos</a>
            <a href=\"page/tips\">
              <img src=\"../pics/icons8-idea.svg\" width=\"70px\">
              <br>Astuces</a>
            <a href=\"page/stats\">
              <img src=\"../pics/icons8-chart.svg\" width=\"70px\">
              <br>Statistiques</a>
            <a href=\"page/historic\">
              <img src=\"../pics/icons8-historic_ship.svg\" width=\"70px\">
              <br>Historique</a>
            <a href=\"page/money\">
              <img src=\"../pics/icons8-money.svg\" width=\"70px\">
              <br>Dépenses</a>
            <a href=\"page/goals\">
              <img src=\"../pics/icons8-goal.svg\" width=\"70px\">
              <br>Objectifs</a>
            <a href=\"page/services\">
              <img src=\"../pics/icons8-services.svg\" width=\"70px\">
              <br>Services</a>
            <a href=\"page/disconnect\">
              <img src=\"../pics/icons8-disconnected.svg\" width=\"70px\">
              <br>Déconnexion</a>

          </nav>
        </div>

        <div class=\"row\">
          <main class=\"col-sm-6 mx-auto py-5 px-5\">
            ";
        // line 101
        $this->displayBlock('main', $context, $blocks);
        // line 102
        echo "          </main>
          <aside class=\"col-sm-5 px-5 py-5\">
            ";
        // line 104
        $this->displayBlock('sidebar', $context, $blocks);
        echo "</aside>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-12\" style=\"text-align:center;\">Copyright 2021 - Antonu-Maria Mela - <a href=\"http://viamedo.fr/CGV.pdf\" target=\"_blank\">CGV</a></div>
          </div>

        </div>

        <!--[if lt IE 7]> <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"#\">upgrade your browser</a> to improve your experience.</p> 
     <![endif]-->

        <link rel=\"stylesheet\" type=\"text/css\" href=\"/\" media=\"print\"/>
        <script src=\"\" async=\"async\" defer=\"defer\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
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

    // line 104
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
        return "index2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  247 => 104,  229 => 101,  204 => 104,  200 => 102,  198 => 101,  150 => 55,  140 => 54,  126 => 15,  116 => 14,  104 => 119,  102 => 54,  64 => 18,  62 => 14,  47 => 1,);
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
    {% block stylesheets %}
      {{ encore_entry_link_tags('app') }}
      
    {% endblock %}
    <script src=\"\"></script>
    <!--meta properties -->
    <meta name=\"description\" content=\"Aide à la désaccoutumance de substances addictives\"/>
    <!--detailed robots meta https://developers.google.com/search/reference/robots_meta_tag -->
    <meta name=\"robots\" content=\"index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1\"/>
    <link rel=\"canonical\" href=\"\"/>
    <!--open graph meta tags for social sites and search engines-->
    <meta property=\"og:locale\" content=\"fr_FR\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"Aide à la désaccoutumance de substances addictives\"/>
    <meta property=\"og:description\" content=\"Aide à la désaccoutumance de substances addictives\"/>
    <meta property=\"og:url\" content=\"https://viamedo.fr\"/>
    <meta property=\"og:site_name\" content=\"ViaMedo\"/>
    <meta property=\"og:image:width\" content=\"1200\"/>
    <meta property=\"og:image:height\" content=\"660\"/>
    <!--search engine verification-->
    <meta name=\"google-site-verification\" content=\"\"/>

    <script data-ad-client=\"ca-pub-1152024597883583\" async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async=\"async\" src=\"https://www.googletagmanager.com/gtag/js?id=G-CEFC8S5YV4\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  fu  function gtag() {
    dataLayer.push(arguments);
  }
ag('js', new Date());

  gtag('config', 'G-CEFC8S5YV4');
</script>
    <!-- Site favicon icon -->
    <link rel=\"icon\" href=\"../pics/favicon_16.ico\" sizes=\"16x16\"/>
    <link rel=\"icon\" href=\"../pics/favicon.ico\" sizes=\"32x32\"/>
    <!--complete list of meta tags at - https://gist.github.com/lancejpollard/1978404 -->
  </head>
  <body>
  {% block body%}
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <img src=\"../pics/banniere.png\"></div>
        </div>
        <div class=\"row centered\">
          <nav class=\"navbar col-sm-12\" role=\"navigation\">
            <a href=\"page/home\">
              <img src=\"../pics/icons8-home.svg\" width=\"70px\">
              <br>Accueil</a>
            <a href=\"page/infos\">
              <img src=\"../pics/icons8-info.svg\" width=\"70px\">
              <br>Informations</a>
            <a href=\"page/substances\">
              <img src=\"../pics/icons8-temperature_sensitive.svg\" width=\"70px\">
              <br>Substances</a>
            <a href=\"page/videos\">
              <img src=\"../pics/icons8-video.svg\" width=\"70px\">
              <br>Vidéos</a>
            <a href=\"page/tips\">
              <img src=\"../pics/icons8-idea.svg\" width=\"70px\">
              <br>Astuces</a>
            <a href=\"page/stats\">
              <img src=\"../pics/icons8-chart.svg\" width=\"70px\">
              <br>Statistiques</a>
            <a href=\"page/historic\">
              <img src=\"../pics/icons8-historic_ship.svg\" width=\"70px\">
              <br>Historique</a>
            <a href=\"page/money\">
              <img src=\"../pics/icons8-money.svg\" width=\"70px\">
              <br>Dépenses</a>
            <a href=\"page/goals\">
              <img src=\"../pics/icons8-goal.svg\" width=\"70px\">
              <br>Objectifs</a>
            <a href=\"page/services\">
              <img src=\"../pics/icons8-services.svg\" width=\"70px\">
              <br>Services</a>
            <a href=\"page/disconnect\">
              <img src=\"../pics/icons8-disconnected.svg\" width=\"70px\">
              <br>Déconnexion</a>

          </nav>
        </div>

        <div class=\"row\">
          <main class=\"col-sm-6 mx-auto py-5 px-5\">
            {%block main %}{% endblock %}
          </main>
          <aside class=\"col-sm-5 px-5 py-5\">
            {%block sidebar%}{%endblock%}</aside>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-12\" style=\"text-align:center;\">Copyright 2021 - Antonu-Maria Mela - <a href=\"http://viamedo.fr/CGV.pdf\" target=\"_blank\">CGV</a></div>
          </div>

        </div>

        <!--[if lt IE 7]> <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"#\">upgrade your browser</a> to improve your experience.</p> 
     <![endif]-->

        <link rel=\"stylesheet\" type=\"text/css\" href=\"/\" media=\"print\"/>
        <script src=\"\" async=\"async\" defer=\"defer\"></script>
        {%endblock %}
    </body>
  </html>
", "index2.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/templates/index2.html.twig");
    }
}
