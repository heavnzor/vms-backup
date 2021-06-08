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
        echo "<!DOCTYPE HTML>
<!--
\tArcana by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
\t<head>
\t\t<title>ViaMedo : Aide à la désaccoutumance de substances addictives</title>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
\t\t";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "\t\t<meta name=\"description\" content=\"Sur ViaMedo, on vous fait cette promesse : devenir qui vous voulez être.
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEt pour être tout à fait exact : devenir qui vous êtes.
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tViaMedo vous permet d'acquérir une conscience parfaite de votre consommation de substances de toute nature.
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tComme le disait le docteur Freud, Le moi n'est pas maître dans sa propre maison. \"/>
\t\t<meta name=\"robots\" content=\"index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1\"/>

\t\t<link rel=\"icon\" href=\"../pics/favicon_16.ico\" sizes=\"16x16\"/>
\t\t<link rel=\"icon\" href=\"../pics/favicon.ico\" sizes=\"32x32\"/>

\t</head>
\t";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 205
        echo "</body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "\t\t<body class=\"is-preload\">
\t\t\t<div
\t\t\t\tid=\"page-wrapper\">
\t\t\t\t<!-- Header -->
\t\t\t\t<div
\t\t\t\t\tid=\"header\">
\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t<h1 style=\"font-family: Sacramento, cursive;\">
\t\t\t\t\t\t<a href=\"home\" id=\"logo\" style=\"font-size: 40px;\">
\t\t\t\t\t\t\tViaMedo
\t\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t\tVotre moi idéal à portée de main</em>
\t\t\t\t\t\t</a>
\t\t\t\t\t</h1>
\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li ";
        // line 49
        if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 49, $this->source); })()) === "home")) {
            echo " class=\"current\" ";
        }
        echo ">

\t\t\t\t\t\t\t<a href=\"page/home\">
\t\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li ";
        // line 55
        if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 55, $this->source); })()) === "infos")) {
            echo " class=\"current\" ";
        }
        echo ">

\t\t\t\t\t\t\t<a href=\"page/infos\">

\t\t\t\t\t\t\t\tInformations
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li ";
        // line 62
        if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 62, $this->source); })()) === "substances")) {
            echo " class=\"current\" ";
        }
        echo ">

\t\t\t\t\t\t\t<a href=\"page/substances\">

\t\t\t\t\t\t\t\tSubstances
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li ";
        // line 69
        if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 69, $this->source); })()) === "videos")) {
            echo " class=\"current\" ";
        }
        echo ">

\t\t\t\t\t\t\t<a href=\"page/videos\">

\t\t\t\t\t\t\t\tVidéos
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li ";
        // line 76
        if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 76, $this->source); })()) === "tips")) {
            echo " class=\"current\" ";
        }
        echo ">

\t\t\t\t\t\t\t<a href=\"page/tips\">

\t\t\t\t\t\t\t\tAstuces
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li ";
        // line 83
        if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 83, $this->source); })()) === "stats")) {
            echo " class=\"current\" ";
        }
        echo ">

\t\t\t\t\t\t\t<a href=\"page/stats\">

\t\t\t\t\t\t\t\tStatistiques
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li ";
        // line 90
        if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 90, $this->source); })()) === "historic")) {
            echo " class=\"current\" ";
        }
        echo ">

\t\t\t\t\t\t\t<a href=\"page/historic\">

\t\t\t\t\t\t\t\tHistorique
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li ";
        // line 97
        if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 97, $this->source); })()) === "money")) {
            echo " class=\"current\" ";
        }
        echo ">

\t\t\t\t\t\t\t<a href=\"page/money\">

\t\t\t\t\t\t\t\tDépenses
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li ";
        // line 104
        if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 104, $this->source); })()) === "goals")) {
            echo " class=\"current\" ";
        }
        echo ">

\t\t\t\t\t\t\t<a href=\"page/goals\" >

\t\t\t\t\t\t\t\tObjectifs
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li ";
        // line 111
        if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 111, $this->source); })()) === "partenaires")) {
            echo " class=\"current\" ";
        }
        echo ">

<a href=\"page/partenaires\" >

\t\t\t\t\t\t\t\tPartenaires
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src=\"../pics/icone.png\" width=\"50px\">
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<!-- Banner -->
\t\t\t<section id=\"banner\">
\t\t\t\t<header>


\t\t\t\t\t<h2>ViaMedo:
\t\t\t\t\t\t<em>Votre nouvelle vie commence maintenant</em>
\t\t\t\t\t</h2>
\t\t\t\t\t<a href=\"#knowMore\" class=\"button\">En savoir plus</a>


\t\t\t\t</header>
\t\t\t</section>
\t\t\t<!-- Gigantic Heading -->
\t\t\t<section class=\"wrapper style2\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\" id=\"knowMore\">
\t\t\t\t\t\t";
        // line 141
        $this->displayBlock('main', $context, $blocks);
        // line 142
        echo "\t\t\t\t\t</header>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Gigantic Heading -->
\t\t\t<section class=\"wrapper style2\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t";
        // line 149
        $this->displayBlock('sidebar', $context, $blocks);
        // line 150
        echo "\t\t\t\t\t</header>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<!-- Footer -->
\t\t\t<div id=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<section class=\"col-3 col-6-narrower col-12-mobilep\">
\t\t\t\t\t\t\t<h3>Quelques liens utiles :</h3>
\t\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href='mailto:webmaster@viamedo.fr'>Contact</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"http://www.viamedo.fr/cgv.pdf\">Confidentialité</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"http://viamedo.fr/cookies.html\">Cookies</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Icons -->
\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.facebook.com/ViaMedo-102753971946564\" class=\"icon brands fa-facebook-f\">

\t\t\t\t\t\t\t<span class=\"label\">Facebook</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.linkedin.com/in/anto-mela/\" class=\"icon brands fa-linkedin-in\">
\t\t\t\t\t\t\t<span class=\"label\">LinkedIn</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.patreon.com/viamedo\" class=\"icon brands fa-patreon\">
\t\t\t\t\t\t\t<span class=\"label\">Patreon</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- Copyright -->
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t<li>&copy; 2021 - Antonu-Maria MELA. All rights reserved</li>
\t\t\t\t\t\t<li>Design:
\t\t\t\t\t\t\t<a href=\"http://html5up.net\">HTML5 UP</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</body>
\t</html>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
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

    // line 149
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
        return array (  407 => 149,  389 => 141,  324 => 150,  322 => 149,  313 => 142,  311 => 141,  276 => 111,  264 => 104,  252 => 97,  240 => 90,  228 => 83,  216 => 76,  204 => 69,  192 => 62,  180 => 55,  169 => 49,  150 => 32,  140 => 31,  127 => 16,  117 => 15,  104 => 13,  94 => 12,  83 => 205,  81 => 31,  66 => 18,  63 => 15,  61 => 12,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<!--
\tArcana by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
\t<head>
\t\t<title>ViaMedo : Aide à la désaccoutumance de substances addictives</title>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app')}}
\t\t{% endblock %}
\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t{% endblock %}
\t\t<meta name=\"description\" content=\"Sur ViaMedo, on vous fait cette promesse : devenir qui vous voulez être.
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEt pour être tout à fait exact : devenir qui vous êtes.
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tViaMedo vous permet d'acquérir une conscience parfaite de votre consommation de substances de toute nature.
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tComme le disait le docteur Freud, Le moi n'est pas maître dans sa propre maison. \"/>
\t\t<meta name=\"robots\" content=\"index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1\"/>

\t\t<link rel=\"icon\" href=\"../pics/favicon_16.ico\" sizes=\"16x16\"/>
\t\t<link rel=\"icon\" href=\"../pics/favicon.ico\" sizes=\"32x32\"/>

\t</head>
\t{% block body %}
\t\t<body class=\"is-preload\">
\t\t\t<div
\t\t\t\tid=\"page-wrapper\">
\t\t\t\t<!-- Header -->
\t\t\t\t<div
\t\t\t\t\tid=\"header\">
\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t<h1 style=\"font-family: Sacramento, cursive;\">
\t\t\t\t\t\t<a href=\"home\" id=\"logo\" style=\"font-size: 40px;\">
\t\t\t\t\t\t\tViaMedo
\t\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t\tVotre moi idéal à portée de main</em>
\t\t\t\t\t\t</a>
\t\t\t\t\t</h1>
\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li {% if slug is same as('home') %} class=\"current\" {% endif %}>

\t\t\t\t\t\t\t<a href=\"page/home\">
\t\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li {% if slug is same as('infos') %} class=\"current\" {% endif %}>

\t\t\t\t\t\t\t<a href=\"page/infos\">

\t\t\t\t\t\t\t\tInformations
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li {% if slug is same as('substances') %} class=\"current\" {% endif %}>

\t\t\t\t\t\t\t<a href=\"page/substances\">

\t\t\t\t\t\t\t\tSubstances
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li {% if slug is same as('videos') %} class=\"current\" {% endif %}>

\t\t\t\t\t\t\t<a href=\"page/videos\">

\t\t\t\t\t\t\t\tVidéos
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li {% if slug is same as('tips') %} class=\"current\" {% endif %}>

\t\t\t\t\t\t\t<a href=\"page/tips\">

\t\t\t\t\t\t\t\tAstuces
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li {% if slug is same as('stats') %} class=\"current\" {% endif %}>

\t\t\t\t\t\t\t<a href=\"page/stats\">

\t\t\t\t\t\t\t\tStatistiques
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li {% if slug is same as('historic') %} class=\"current\" {% endif %}>

\t\t\t\t\t\t\t<a href=\"page/historic\">

\t\t\t\t\t\t\t\tHistorique
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li {% if slug is same as('money') %} class=\"current\" {% endif %}>

\t\t\t\t\t\t\t<a href=\"page/money\">

\t\t\t\t\t\t\t\tDépenses
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li {% if slug is same as('goals') %} class=\"current\" {% endif %}>

\t\t\t\t\t\t\t<a href=\"page/goals\" >

\t\t\t\t\t\t\t\tObjectifs
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li {% if slug is same as('partenaires') %} class=\"current\" {% endif %}>

<a href=\"page/partenaires\" >

\t\t\t\t\t\t\t\tPartenaires
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src=\"../pics/icone.png\" width=\"50px\">
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<!-- Banner -->
\t\t\t<section id=\"banner\">
\t\t\t\t<header>


\t\t\t\t\t<h2>ViaMedo:
\t\t\t\t\t\t<em>Votre nouvelle vie commence maintenant</em>
\t\t\t\t\t</h2>
\t\t\t\t\t<a href=\"#knowMore\" class=\"button\">En savoir plus</a>


\t\t\t\t</header>
\t\t\t</section>
\t\t\t<!-- Gigantic Heading -->
\t\t\t<section class=\"wrapper style2\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\" id=\"knowMore\">
\t\t\t\t\t\t{% block main %}{% endblock %}
\t\t\t\t\t</header>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Gigantic Heading -->
\t\t\t<section class=\"wrapper style2\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t{% block sidebar %}{% endblock %}
\t\t\t\t\t</header>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<!-- Footer -->
\t\t\t<div id=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<section class=\"col-3 col-6-narrower col-12-mobilep\">
\t\t\t\t\t\t\t<h3>Quelques liens utiles :</h3>
\t\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href='mailto:webmaster@viamedo.fr'>Contact</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"http://www.viamedo.fr/cgv.pdf\">Confidentialité</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"http://viamedo.fr/cookies.html\">Cookies</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Icons -->
\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.facebook.com/ViaMedo-102753971946564\" class=\"icon brands fa-facebook-f\">

\t\t\t\t\t\t\t<span class=\"label\">Facebook</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.linkedin.com/in/anto-mela/\" class=\"icon brands fa-linkedin-in\">
\t\t\t\t\t\t\t<span class=\"label\">LinkedIn</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.patreon.com/viamedo\" class=\"icon brands fa-patreon\">
\t\t\t\t\t\t\t<span class=\"label\">Patreon</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- Copyright -->
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t<li>&copy; 2021 - Antonu-Maria MELA. All rights reserved</li>
\t\t\t\t\t\t<li>Design:
\t\t\t\t\t\t\t<a href=\"http://html5up.net\">HTML5 UP</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</body>
\t</html>
</div>{% endblock %}</body></html>
", "index2.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/index2.html.twig");
    }
}
