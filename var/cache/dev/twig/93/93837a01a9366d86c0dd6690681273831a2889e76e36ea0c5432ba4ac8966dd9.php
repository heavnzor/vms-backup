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
\t<html
\tclass=\"no-js\" lang=\"en-US\"> <!--<![endif]-->
\t<head>

\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>ViaMedo : Beta</title>
\t\t<!-- style and script resources -->
\t\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t\t<script async=\"async\" src=\"https://www.googletagmanager.com/gtag/js?id=G-CEFC8S5YV4\"></script>
\t\t<script>
\t\t\twindow.dataLayer = window.dataLayer || [];
function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-CEFC8S5YV4');
\t\t</script>
\t\t";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "\t\t<!--meta properties -->
\t\t<meta
\t\tname=\"description\" content=\"Sur ViaMedo, on vous fait cette promesse : devenir qui vous voulez être.
\t\t\t
\t\t\tEt pour être tout à fait exact : devenir qui vous êtes.
\t\t\t
\t\t\tViaMedo vous permet d'acquérir une conscience parfaite de votre consommation de substances de toute nature.
\t\t\t
\t\t\tComme le disait le docteur Freud, Le moi n'est pas maître dans sa propre maison. \"/>
\t\t<!--detailed robots meta https://developers.google.com/search/reference/robots_meta_tag -->
\t\t<meta name=\"robots\" content=\"index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1\"/>
\t\t<link
\t\trel=\"canonical\" href=\"\"/>
\t\t<!--open graph meta tags for social sites and search engines-->
\t\t<meta property=\"og:locale\" content=\"fr_FR\"/>
\t\t<meta property=\"og:type\" content=\"website\"/>
\t\t<meta property=\"og:title\" content=\"Aide à la désaccoutumance de substances addictives\"/>
\t\t<meta property=\"og:description\" content=\"Sur ViaMedo, on vous fait cette promesse : devenir qui vous voulez être.
\t\t\t
\t\t\tEt pour être tout à fait exact : devenir qui vous êtes.
\t\t\t
\t\t\tViaMedo vous permet d'acquérir une conscience parfaite de votre consommation de substances de toute nature.
\t\t\t
\t\t\tComme le disait le docteur Freud, Le moi n'est pas maître dans sa propre maison. \"/>
\t\t<meta property=\"og:url\" content=\"https://viamedo.fr\"/>
\t\t<meta property=\"og:site_name\" content=\"ViaMedo\"/>
\t\t<meta property=\"og:image:width\" content=\"1200\"/>
\t\t<meta
\t\tproperty=\"og:image:height\" content=\"660\"/>
\t\t<!--search engine verification-->
\t\t<meta name=\"google-site-verification\" content=\"\"/>

\t\t<!--powered by meta-->
\t\t<!-- Site fevicon icons -->
\t\t<link rel=\"icon\" href=\"../pics/favicon_16.ico\" sizes=\"16x16\"/> <link
\t\trel=\"icon\" href=\"../pics/favicon.ico\" sizes=\"32x32\"/>
\t<!--complete list of meta tags at - https://gist.github.com/lancejpollard/1978404 -->
\t</head>
\t<body>
\t\t";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 149
        echo "\t\t\t\t\t\t</body>
\t\t\t\t\t</html>
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
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
        
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
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-11\">
\t\t\t\t\t<img src=\"../pics/banniere.png\"></div>
\t\t\t</div>
\t\t\t<div class=\"row centered \">
\t\t\t\t<div class=\"col-sm 11  \">
\t\t\t\t\t<div class=\"collapse \" id=\"navbarToggleExternalContent\">
\t\t\t\t\t\t<div class=\"bg-darkless \">
\t\t\t\t\t\t\t<a href=\"home\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-home.png\" width=\"30px\">
\t\t\t\t\t\t\t\tAccueil</a>
\t\t\t\t\t\t\t<a href=\"infos\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-info.png\" width=\"30px\">
\t\t\t\t\t\t\t\tInformations</a>
\t\t\t\t\t\t\t<a href=\"substances\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-temperature_sensitive.png\" width=\"30px\">
\t\t\t\t\t\t\t\tSubstances</a>
\t\t\t\t\t\t\t<a href=\"videos\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-video.png\" width=\"30px\">
\t\t\t\t\t\t\t\tVidéos</a>
\t\t\t\t\t\t\t<a href=\"tips\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-idea.png\" width=\"30px\">
\t\t\t\t\t\t\t\tAstuces</a>
\t\t\t\t\t\t\t<a href=\"stats\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-chart.png\" width=\"30px\">
\t\t\t\t\t\t\t\tStatistiques</a>
\t\t\t\t\t\t\t<a href=\"historic\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-historic_ship.png\" width=\"30px\">
\t\t\t\t\t\t\t\tHistorique</a>
\t\t\t\t\t\t\t<a href=\"money\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-money.png\" width=\"30px\">
\t\t\t\t\t\t\t\tDépenses</a>
\t\t\t\t\t\t\t<a href=\"goals\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-goal.png\" width=\"30px\">
\t\t\t\t\t\t\t\tObjectifs</a>
\t\t\t\t\t\t\t<a href=\"partenaires\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-handshake.png\" width=\"30px\">
\t\t\t\t\t\t\t\tPartenaires</a>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<nav class=\"navbar navbar-dark bg-dark col-sm-11\" role=\"navigation\">
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"row centered\">
\t\t\t\t\t\t\t<main class=\"col-sm-6 py-5 px-5\"> ";
        // line 120
        $this->displayBlock('main', $context, $blocks);
        // line 121
        echo "\t\t\t\t\t\t\t\t</main>
\t\t\t\t\t\t\t\t<aside class=\"col-sm-5 py-5 px-5\">

\t\t\t\t\t\t\t\t\t";
        // line 124
        $this->displayBlock('sidebar', $context, $blocks);
        // line 125
        echo "\t\t\t\t\t\t\t\t\t";
        if (array_key_exists("user", $context)) {
            echo "<br><br>
\t\t\t\t\t\t\t\t\t\t<a class='alert alert-danger' style=\"text-align:right;\" href='disconnect'>Déconnexion</a>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 127
        echo "</aside>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\" style=\"text-align:center !important;\">Copyright 2021 - <a href='mailto:webmaster@viamedo.fr'>Antonu-Maria Mela</a> -
\t\t\t\t\t\t\t\t\t\t<a href=\"cookies\">Politique en matière de Cookies</a>
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t<a href=\"http://viamedo.fr/cgv.pdf\" target=\"_blank\">CGV</a>
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/ViaMedo-102753971946564\" target='_blank'><img src=\"../pics/icons8-facebook.png\" width=\"30px\"></a>
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t<a href='https://www.patreon.com/viamedo' target='_blank'><img src=\"../pics/icons8-patreon.png \" width=\"30px\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!--[if lt IE 7]> <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"#\">upgrade your browser</a> to improve your experience.</p> <![endif]-->

\t\t\t\t\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/\" media=\"print\"/>
\t\t\t\t\t\t\t<script src=\"\" async=\"async\" defer=\"defer\"></script>
\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 120
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

    // line 124
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
        return array (  306 => 124,  288 => 120,  257 => 127,  250 => 125,  248 => 124,  243 => 121,  241 => 120,  191 => 72,  181 => 71,  168 => 30,  158 => 29,  145 => 27,  135 => 26,  123 => 149,  121 => 71,  80 => 32,  77 => 29,  75 => 26,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]> <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]> <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
\t<html
\tclass=\"no-js\" lang=\"en-US\"> <!--<![endif]-->
\t<head>

\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>ViaMedo : Beta</title>
\t\t<!-- style and script resources -->
\t\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t\t<script async=\"async\" src=\"https://www.googletagmanager.com/gtag/js?id=G-CEFC8S5YV4\"></script>
\t\t<script>
\t\t\twindow.dataLayer = window.dataLayer || [];
function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-CEFC8S5YV4');
\t\t</script>
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app')}}
\t\t{% endblock %}
\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t{% endblock %}
\t\t<!--meta properties -->
\t\t<meta
\t\tname=\"description\" content=\"Sur ViaMedo, on vous fait cette promesse : devenir qui vous voulez être.
\t\t\t
\t\t\tEt pour être tout à fait exact : devenir qui vous êtes.
\t\t\t
\t\t\tViaMedo vous permet d'acquérir une conscience parfaite de votre consommation de substances de toute nature.
\t\t\t
\t\t\tComme le disait le docteur Freud, Le moi n'est pas maître dans sa propre maison. \"/>
\t\t<!--detailed robots meta https://developers.google.com/search/reference/robots_meta_tag -->
\t\t<meta name=\"robots\" content=\"index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1\"/>
\t\t<link
\t\trel=\"canonical\" href=\"\"/>
\t\t<!--open graph meta tags for social sites and search engines-->
\t\t<meta property=\"og:locale\" content=\"fr_FR\"/>
\t\t<meta property=\"og:type\" content=\"website\"/>
\t\t<meta property=\"og:title\" content=\"Aide à la désaccoutumance de substances addictives\"/>
\t\t<meta property=\"og:description\" content=\"Sur ViaMedo, on vous fait cette promesse : devenir qui vous voulez être.
\t\t\t
\t\t\tEt pour être tout à fait exact : devenir qui vous êtes.
\t\t\t
\t\t\tViaMedo vous permet d'acquérir une conscience parfaite de votre consommation de substances de toute nature.
\t\t\t
\t\t\tComme le disait le docteur Freud, Le moi n'est pas maître dans sa propre maison. \"/>
\t\t<meta property=\"og:url\" content=\"https://viamedo.fr\"/>
\t\t<meta property=\"og:site_name\" content=\"ViaMedo\"/>
\t\t<meta property=\"og:image:width\" content=\"1200\"/>
\t\t<meta
\t\tproperty=\"og:image:height\" content=\"660\"/>
\t\t<!--search engine verification-->
\t\t<meta name=\"google-site-verification\" content=\"\"/>

\t\t<!--powered by meta-->
\t\t<!-- Site fevicon icons -->
\t\t<link rel=\"icon\" href=\"../pics/favicon_16.ico\" sizes=\"16x16\"/> <link
\t\trel=\"icon\" href=\"../pics/favicon.ico\" sizes=\"32x32\"/>
\t<!--complete list of meta tags at - https://gist.github.com/lancejpollard/1978404 -->
\t</head>
\t<body>
\t\t{% block body %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-11\">
\t\t\t\t\t<img src=\"../pics/banniere.png\"></div>
\t\t\t</div>
\t\t\t<div class=\"row centered \">
\t\t\t\t<div class=\"col-sm 11  \">
\t\t\t\t\t<div class=\"collapse \" id=\"navbarToggleExternalContent\">
\t\t\t\t\t\t<div class=\"bg-darkless \">
\t\t\t\t\t\t\t<a href=\"home\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-home.png\" width=\"30px\">
\t\t\t\t\t\t\t\tAccueil</a>
\t\t\t\t\t\t\t<a href=\"infos\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-info.png\" width=\"30px\">
\t\t\t\t\t\t\t\tInformations</a>
\t\t\t\t\t\t\t<a href=\"substances\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-temperature_sensitive.png\" width=\"30px\">
\t\t\t\t\t\t\t\tSubstances</a>
\t\t\t\t\t\t\t<a href=\"videos\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-video.png\" width=\"30px\">
\t\t\t\t\t\t\t\tVidéos</a>
\t\t\t\t\t\t\t<a href=\"tips\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-idea.png\" width=\"30px\">
\t\t\t\t\t\t\t\tAstuces</a>
\t\t\t\t\t\t\t<a href=\"stats\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-chart.png\" width=\"30px\">
\t\t\t\t\t\t\t\tStatistiques</a>
\t\t\t\t\t\t\t<a href=\"historic\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-historic_ship.png\" width=\"30px\">
\t\t\t\t\t\t\t\tHistorique</a>
\t\t\t\t\t\t\t<a href=\"money\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-money.png\" width=\"30px\">
\t\t\t\t\t\t\t\tDépenses</a>
\t\t\t\t\t\t\t<a href=\"goals\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-goal.png\" width=\"30px\">
\t\t\t\t\t\t\t\tObjectifs</a>
\t\t\t\t\t\t\t<a href=\"partenaires\">
\t\t\t\t\t\t\t\t<img src=\"../pics/icons8-handshake.png\" width=\"30px\">
\t\t\t\t\t\t\t\tPartenaires</a>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<nav class=\"navbar navbar-dark bg-dark col-sm-11\" role=\"navigation\">
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"row centered\">
\t\t\t\t\t\t\t<main class=\"col-sm-6 py-5 px-5\"> {%block main %}{% endblock %}
\t\t\t\t\t\t\t\t</main>
\t\t\t\t\t\t\t\t<aside class=\"col-sm-5 py-5 px-5\">

\t\t\t\t\t\t\t\t\t{%block sidebar%}{%endblock%}
\t\t\t\t\t\t\t\t\t{%if user is defined%}<br><br>
\t\t\t\t\t\t\t\t\t\t<a class='alert alert-danger' style=\"text-align:right;\" href='disconnect'>Déconnexion</a>
\t\t\t\t\t\t\t\t\t\t{%endif%}</aside>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\" style=\"text-align:center !important;\">Copyright 2021 - <a href='mailto:webmaster@viamedo.fr'>Antonu-Maria Mela</a> -
\t\t\t\t\t\t\t\t\t\t<a href=\"cookies\">Politique en matière de Cookies</a>
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t<a href=\"http://viamedo.fr/cgv.pdf\" target=\"_blank\">CGV</a>
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/ViaMedo-102753971946564\" target='_blank'><img src=\"../pics/icons8-facebook.png\" width=\"30px\"></a>
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t<a href='https://www.patreon.com/viamedo' target='_blank'><img src=\"../pics/icons8-patreon.png \" width=\"30px\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!--[if lt IE 7]> <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"#\">upgrade your browser</a> to improve your experience.</p> <![endif]-->

\t\t\t\t\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/\" media=\"print\"/>
\t\t\t\t\t\t\t<script src=\"\" async=\"async\" defer=\"defer\"></script>
\t\t\t\t\t\t\t{%endblock%}
\t\t\t\t\t\t</body>
\t\t\t\t\t</html>
", "index.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/index.html.twig");
    }
}
