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
    <!-- style and script resources -->    <!-- Global site tag (gtag.js) - Google Analytics -->
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
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    <!--meta properties -->
    <meta name=\"description\" content=\"Sur ViaMedo, on vous fait cette promesse : devenir qui vous voulez être.

Et pour être tout à fait exact : devenir qui vous êtes.

ViaMedo vous permet d'acquérir une conscience parfaite de votre consommation de substances de toute nature.

Comme le disait le docteur Freud, Le moi n'est pas maître dans sa propre maison. \"/>
    <!--detailed robots meta https://developers.google.com/search/reference/robots_meta_tag -->
    <meta name=\"robots\" content=\"index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1\"/>
    <link rel=\"canonical\" href=\"\"/>
    <!--open graph meta tags for social sites and search engines-->
    <meta property=\"og:locale\" content=\"fr_FR\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"Aide à la désaccoutumance de substances addictives\"/>
    <meta property=\"og:description\" content=\"Sur ViaMedo, on vous fait cette promesse : devenir qui vous voulez être.

Et pour être tout à fait exact : devenir qui vous êtes.

ViaMedo vous permet d'acquérir une conscience parfaite de votre consommation de substances de toute nature.

Comme le disait le docteur Freud, Le moi n'est pas maître dans sa propre maison. \"/>
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
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 139
        echo "            </body>
          </html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "      ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "      ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-11\">
            <img src=\"../pics/banniere.png\"></div>
        </div>
        <div class=\"row centered \">
          <div class=\"col-sm 11  \">
            <div class=\"collapse \" id=\"navbarToggleExternalContent\">
              <div class=\"bg-darkless \">
                <a href=\"page/home\">
                  <img src=\"../pics/icons8-home.png\" width=\"30px\">
                  Accueil</a>
                <a href=\"page/infos\">
                  <img src=\"../pics/icons8-info.png\" width=\"30px\">
                  Informations</a>
                <a href=\"page/substances\">
                  <img src=\"../pics/icons8-temperature_sensitive.png\" width=\"30px\">
                  Substances</a>
                <a href=\"page/videos\">
                  <img src=\"../pics/icons8-video.png\" width=\"30px\">
                  Vidéos</a>
                <a href=\"page/tips\">
                  <img src=\"../pics/icons8-idea.png\" width=\"30px\">
                  Astuces</a>
                <a href=\"page/stats\">
                  <img src=\"../pics/icons8-chart.png\" width=\"30px\">
                  Statistiques</a>
                <a href=\"page/historic\">
                  <img src=\"../pics/icons8-historic_ship.png\" width=\"30px\">
                 Historique</a>
                <a href=\"page/money\">
                  <img src=\"../pics/icons8-money.png\" width=\"30px\">
                  Dépenses</a>
                <a href=\"page/goals\">
                  <img src=\"../pics/icons8-goal.png\" width=\"30px\">
                  Objectifs</a>
                <a href=\"page/partenaires\">
                  <img src=\"../pics/icons8-handshake.png\" width=\"30
px\">
                  Partenaires</a>
               
          
              </div>
            </div>
            <nav class=\"navbar navbar-dark bg-dark col-sm-11\" role=\"navigation\">
              <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span></nav>

              <div class=\"row centered\">
                <main class=\"col-sm-6 py-5 px-5\">
                  ";
        // line 117
        $this->displayBlock('main', $context, $blocks);
        // line 118
        echo "                </main>
                <aside class=\"col-sm-5 py-5 px-5\">
                  ";
        // line 120
        $this->displayBlock('sidebar', $context, $blocks);
        // line 121
        echo "                  ";
        if (array_key_exists("user", $context)) {
            echo "<br><br>
                <a  class='alert alert-danger' style=\"text-align:right;\" href='disconnect'>Déconnexion</a><br><br>
                ";
        }
        // line 123
        echo "</aside>
                </div>

                <div class=\"row\">
                  <div class=\"col-sm-12\" style=\"text-align:center;\">Copyright 2021 - Antonu-Maria Mela -
                    <a href=\"page/http://viamedo.fr/CGV.pdf\" target=\"_blank\">CGV</a>
                  </div>
                </div>

              </div>

              <!--[if lt IE 7]> <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"page/#\">upgrade your browser</a> to improve your experience.</p> <![endif]-->

              <link rel=\"stylesheet\" type=\"text/css\" href=\"/\" media=\"print\"/>
              <script src=\"\" async=\"async\" defer=\"defer\"></script>
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
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

    // line 120
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
        return array (  296 => 120,  278 => 117,  253 => 123,  246 => 121,  244 => 120,  240 => 118,  238 => 117,  186 => 67,  176 => 66,  163 => 28,  153 => 27,  140 => 25,  130 => 24,  118 => 139,  116 => 66,  78 => 30,  75 => 27,  73 => 24,  48 => 1,);
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
    <!-- style and script resources -->    <!-- Global site tag (gtag.js) - Google Analytics -->
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
    <meta name=\"description\" content=\"Sur ViaMedo, on vous fait cette promesse : devenir qui vous voulez être.

Et pour être tout à fait exact : devenir qui vous êtes.

ViaMedo vous permet d'acquérir une conscience parfaite de votre consommation de substances de toute nature.

Comme le disait le docteur Freud, Le moi n'est pas maître dans sa propre maison. \"/>
    <!--detailed robots meta https://developers.google.com/search/reference/robots_meta_tag -->
    <meta name=\"robots\" content=\"index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1\"/>
    <link rel=\"canonical\" href=\"\"/>
    <!--open graph meta tags for social sites and search engines-->
    <meta property=\"og:locale\" content=\"fr_FR\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"Aide à la désaccoutumance de substances addictives\"/>
    <meta property=\"og:description\" content=\"Sur ViaMedo, on vous fait cette promesse : devenir qui vous voulez être.

Et pour être tout à fait exact : devenir qui vous êtes.

ViaMedo vous permet d'acquérir une conscience parfaite de votre consommation de substances de toute nature.

Comme le disait le docteur Freud, Le moi n'est pas maître dans sa propre maison. \"/>
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
        <div class=\"row centered \">
          <div class=\"col-sm 11  \">
            <div class=\"collapse \" id=\"navbarToggleExternalContent\">
              <div class=\"bg-darkless \">
                <a href=\"page/home\">
                  <img src=\"../pics/icons8-home.png\" width=\"30px\">
                  Accueil</a>
                <a href=\"page/infos\">
                  <img src=\"../pics/icons8-info.png\" width=\"30px\">
                  Informations</a>
                <a href=\"page/substances\">
                  <img src=\"../pics/icons8-temperature_sensitive.png\" width=\"30px\">
                  Substances</a>
                <a href=\"page/videos\">
                  <img src=\"../pics/icons8-video.png\" width=\"30px\">
                  Vidéos</a>
                <a href=\"page/tips\">
                  <img src=\"../pics/icons8-idea.png\" width=\"30px\">
                  Astuces</a>
                <a href=\"page/stats\">
                  <img src=\"../pics/icons8-chart.png\" width=\"30px\">
                  Statistiques</a>
                <a href=\"page/historic\">
                  <img src=\"../pics/icons8-historic_ship.png\" width=\"30px\">
                 Historique</a>
                <a href=\"page/money\">
                  <img src=\"../pics/icons8-money.png\" width=\"30px\">
                  Dépenses</a>
                <a href=\"page/goals\">
                  <img src=\"../pics/icons8-goal.png\" width=\"30px\">
                  Objectifs</a>
                <a href=\"page/partenaires\">
                  <img src=\"../pics/icons8-handshake.png\" width=\"30
px\">
                  Partenaires</a>
               
          
              </div>
            </div>
            <nav class=\"navbar navbar-dark bg-dark col-sm-11\" role=\"navigation\">
              <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span></nav>

              <div class=\"row centered\">
                <main class=\"col-sm-6 py-5 px-5\">
                  {%block main %}{% endblock %}
                </main>
                <aside class=\"col-sm-5 py-5 px-5\">
                  {%block sidebar%}{%endblock%}
                  {%if user is defined%}<br><br>
                <a  class='alert alert-danger' style=\"text-align:right;\" href='disconnect'>Déconnexion</a><br><br>
                {%endif%}</aside>
                </div>

                <div class=\"row\">
                  <div class=\"col-sm-12\" style=\"text-align:center;\">Copyright 2021 - Antonu-Maria Mela -
                    <a href=\"page/http://viamedo.fr/CGV.pdf\" target=\"_blank\">CGV</a>
                  </div>
                </div>

              </div>

              <!--[if lt IE 7]> <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"page/#\">upgrade your browser</a> to improve your experience.</p> <![endif]-->

              <link rel=\"stylesheet\" type=\"text/css\" href=\"/\" media=\"print\"/>
              <script src=\"\" async=\"async\" defer=\"defer\"></script>
              {%endblock%}
            </body>
          </html>
", "index2.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/index2.html.twig");
    }
}
