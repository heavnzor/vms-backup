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
\t\t\t\t\t\t\t\t\tEt pour être tout à fait exact : devenir qui vous êtes.
\t\t\t\t\t\t\t\t\tViaMedo vous permet d'acquérir une conscience parfaite de votre consommation de substances de toute nature.
\t\t\t\t\t\t\t\t\tComme le disait le docteur Freud, Le moi n'est pas maître dans sa propre maison. \"/>
\t\t<meta name=\"robots\" content=\"index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1\"/>

\t\t<link rel=\"icon\" href=\"../pics/favicon.ico\" sizes=\"32x32\"/>

\t</head>

\t<body class=\"is-preload\">
\t\t";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 222
        echo "\t</body>
</html>
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

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "\t\t\t<script src=\"https://consent.cookiefirst.com/banner.js\" data-cookiefirst-key=\"32dc3080-1fd3-4c62-b58d-c0575164da94\"></script>


\t\t\t<div
\t\t\t\tid=\"page-wrapper\">
\t\t\t\t<!-- Header -->
\t\t\t\t<div
\t\t\t\t\tid=\"header\">
\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t<h1 style=\"font-family: 'Sacramento', cursive !important;\">
\t\t\t\t\t\t<a href=\"home\" id=\"logo\" style=\"font-size: 65px !important;\">

\t\t\t\t\t\t\tViaMedo
\t\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t\tVotre moi idéal à portée de main</em>
\t\t\t\t\t\t</a>
\t\t\t\t\t</h1>
\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t<li ";
        // line 51
        if (array_key_exists("slug", $context)) {
            echo " ";
            if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 51, $this->source); })()) === "home")) {
                echo " class=\"current\" ";
            }
            echo " ";
        }
        echo ">
\t\t\t\t\t\t\t\t<a href=\"home\">
\t\t\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li ";
        // line 56
        if (array_key_exists("slug", $context)) {
            echo " ";
            if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 56, $this->source); })()) === "infos")) {
                echo " class=\"current\" ";
            }
            echo " ";
        }
        echo ">

\t\t\t\t\t\t\t\t<a href=\"infos\">

\t\t\t\t\t\t\t\t\tInformations
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li ";
        // line 63
        if (array_key_exists("slug", $context)) {
            echo " ";
            if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 63, $this->source); })()) === "substances")) {
                echo " class=\"current\" ";
            }
            echo " ";
        }
        echo ">

\t\t\t\t\t\t\t\t<a href=\"substances\">

\t\t\t\t\t\t\t\t\tSubstances
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li ";
        // line 70
        if (array_key_exists("slug", $context)) {
            echo " ";
            if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 70, $this->source); })()) === "videos")) {
                echo " class=\"current\" ";
            }
            echo " ";
        }
        echo ">
\t\t\t\t\t\t\t\t<a href=\"videos\">

\t\t\t\t\t\t\t\t\tVidéos
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li ";
        // line 76
        if (array_key_exists("slug", $context)) {
            echo " ";
            if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 76, $this->source); })()) === "tips")) {
                echo " class=\"current\" ";
            }
            echo " ";
        }
        echo ">
\t\t\t\t\t\t\t\t<a href=\"tips\">

\t\t\t\t\t\t\t\t\tAstuces
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li ";
        // line 82
        if (array_key_exists("slug", $context)) {
            echo " ";
            if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 82, $this->source); })()) === "stats")) {
                echo " class=\"current\" ";
            }
            echo " ";
        }
        echo ">
\t\t\t\t\t\t\t\t<a href=\"stats\">

\t\t\t\t\t\t\t\t\tStatistiques
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li ";
        // line 88
        if (array_key_exists("slug", $context)) {
            echo " ";
            if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 88, $this->source); })()) === "historic")) {
                echo " class=\"current\" ";
            }
            echo " ";
        }
        echo ">
\t\t\t\t\t\t\t\t<a href=\"historic\">

\t\t\t\t\t\t\t\t\tHistorique
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li ";
        // line 94
        if (array_key_exists("slug", $context)) {
            echo " ";
            if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 94, $this->source); })()) === "money")) {
                echo " class=\"current\" ";
            }
            echo " ";
        }
        echo ">
\t\t\t\t\t\t\t\t<a href=\"money\">

\t\t\t\t\t\t\t\t\tDépenses
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li ";
        // line 100
        if (array_key_exists("slug", $context)) {
            echo " ";
            if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 100, $this->source); })()) === "goals")) {
                echo " class=\"current\" ";
            }
            echo " ";
        }
        echo ">
\t\t\t\t\t\t\t\t<a href=\"goals\">

\t\t\t\t\t\t\t\t\tObjectifs
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li ";
        // line 106
        if (array_key_exists("slug", $context)) {
            echo " ";
            if (((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 106, $this->source); })()) === "partenaires")) {
                echo " class=\"current\" ";
            }
            echo " ";
        }
        echo ">
\t\t\t\t\t\t\t\t<a href=\"partenaires\">

\t\t\t\t\t\t\t\t\tPartenaires
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><img src=\"../pics/icone.png\" width=\"50px\" style=\"margin-left: '50px';\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<!-- Banner -->
\t\t\t\t<section id=\"banner\">
\t\t\t\t\t<header>


\t\t\t\t\t\t<h2 class=\"h2\" style=\"font-family: Source Sans Pro, sans-serif;\">Votre nouvelle vie commence maintenant
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<a href=\"#knowMore\" class=\"button\">En savoir plus</a>

\t\t\t\t\t</header>
\t\t\t\t</section>
\t\t\t\t<!-- Gigantic Heading -->
\t\t\t\t<section class=\"wrapper style2\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<header class=\"major\" id=\"knowMore\">
\t\t\t\t\t\t\t";
        // line 132
        $this->displayBlock('main', $context, $blocks);
        // line 133
        echo "\t\t\t\t\t\t</header>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<!-- Gigantic Heading -->
\t\t\t\t<section class=\"wrapper style2\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t";
        // line 140
        $this->displayBlock('sidebar', $context, $blocks);
        // line 141
        echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</header>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<!-- Footer -->
\t\t\t\t<div id=\"footer\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<section class=\"col-3 col-6-narrower col-12-mobilep\">
\t\t\t\t\t\t\t\t<h3>Quelques liens utiles</h3>
\t\t\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href='mailto:webmaster@viamedo.fr'>Contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://www.viamedo.fr/cgv.pdf\" target=\"_blank\">Confidentialité</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://viamedo.fr/cookies.html\" target=\"_blank\">Cookies</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://viamedo.fr/mentionlegales.html\" target=\"_blank\">Mentions légales</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-3 col-6-narrower col-12-mobilep\">
\t\t\t\t\t\t\t\t<h3>Autres liens utiles</h3>
\t\t\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://viamedo.fr/register/\">Inscription</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://viamedo.fr/login/\">Connexion</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://viamedo.fr/reset-password\">Réinitialisez votre password</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://viamedo.fr/logout\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Icons -->
\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/ViaMedo-102753971946564\" class=\"icon brands fa-facebook-f\">

\t\t\t\t\t\t\t\t<span class=\"label\">Facebook</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.linkedin.com/in/anto-mela/\" class=\"icon brands fa-linkedin-in\">
\t\t\t\t\t\t\t\t<span class=\"label\">LinkedIn</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.patreon.com/viamedo\" class=\"icon brands fa-patreon\">
\t\t\t\t\t\t\t\t<span class=\"label\">Patreon</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Copyright -->
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t<li>&copy; 2021 - Antonu-Maria MELA. All rights reserved</li>
\t\t\t\t\t\t\t<li>Design:
\t\t\t\t\t\t\t\t<a href=\"http://html5up.net\" target=\"_blank\">HTML5 UP</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
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

    // line 140
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
        return array (  464 => 140,  446 => 132,  356 => 141,  354 => 140,  345 => 133,  343 => 132,  308 => 106,  293 => 100,  278 => 94,  263 => 88,  248 => 82,  233 => 76,  218 => 70,  202 => 63,  186 => 56,  172 => 51,  149 => 30,  139 => 29,  126 => 16,  116 => 15,  103 => 13,  93 => 12,  81 => 222,  79 => 29,  66 => 18,  63 => 15,  61 => 12,  48 => 1,);
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
\t\t\t\t\t\t\t\t\tEt pour être tout à fait exact : devenir qui vous êtes.
\t\t\t\t\t\t\t\t\tViaMedo vous permet d'acquérir une conscience parfaite de votre consommation de substances de toute nature.
\t\t\t\t\t\t\t\t\tComme le disait le docteur Freud, Le moi n'est pas maître dans sa propre maison. \"/>
\t\t<meta name=\"robots\" content=\"index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1\"/>

\t\t<link rel=\"icon\" href=\"../pics/favicon.ico\" sizes=\"32x32\"/>

\t</head>

\t<body class=\"is-preload\">
\t\t{% block body %}
\t\t\t<script src=\"https://consent.cookiefirst.com/banner.js\" data-cookiefirst-key=\"32dc3080-1fd3-4c62-b58d-c0575164da94\"></script>


\t\t\t<div
\t\t\t\tid=\"page-wrapper\">
\t\t\t\t<!-- Header -->
\t\t\t\t<div
\t\t\t\t\tid=\"header\">
\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t<h1 style=\"font-family: 'Sacramento', cursive !important;\">
\t\t\t\t\t\t<a href=\"home\" id=\"logo\" style=\"font-size: 65px !important;\">

\t\t\t\t\t\t\tViaMedo
\t\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t\tVotre moi idéal à portée de main</em>
\t\t\t\t\t\t</a>
\t\t\t\t\t</h1>
\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t<li {% if slug is defined %} {% if slug is same as('home') %} class=\"current\" {% endif %} {% endif %}>
\t\t\t\t\t\t\t\t<a href=\"home\">
\t\t\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li {% if slug is defined %} {% if slug is same as('infos') %} class=\"current\" {% endif %} {% endif %}>

\t\t\t\t\t\t\t\t<a href=\"infos\">

\t\t\t\t\t\t\t\t\tInformations
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li {% if slug is defined %} {% if slug is same as('substances') %} class=\"current\" {% endif %} {% endif %}>

\t\t\t\t\t\t\t\t<a href=\"substances\">

\t\t\t\t\t\t\t\t\tSubstances
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li {% if slug is defined %} {% if slug is same as('videos') %} class=\"current\" {% endif %} {% endif %}>
\t\t\t\t\t\t\t\t<a href=\"videos\">

\t\t\t\t\t\t\t\t\tVidéos
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li {% if slug is defined %} {% if slug is same as('tips') %} class=\"current\" {% endif %} {% endif %}>
\t\t\t\t\t\t\t\t<a href=\"tips\">

\t\t\t\t\t\t\t\t\tAstuces
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li {% if slug is defined %} {% if slug is same as('stats') %} class=\"current\" {% endif %} {% endif %}>
\t\t\t\t\t\t\t\t<a href=\"stats\">

\t\t\t\t\t\t\t\t\tStatistiques
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li {% if slug is defined %} {% if slug is same as('historic') %} class=\"current\" {% endif %} {% endif %}>
\t\t\t\t\t\t\t\t<a href=\"historic\">

\t\t\t\t\t\t\t\t\tHistorique
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li {% if slug is defined %} {% if slug is same as('money') %} class=\"current\" {% endif %} {% endif %}>
\t\t\t\t\t\t\t\t<a href=\"money\">

\t\t\t\t\t\t\t\t\tDépenses
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li {% if slug is defined %} {% if slug is same as('goals') %} class=\"current\" {% endif %} {% endif %}>
\t\t\t\t\t\t\t\t<a href=\"goals\">

\t\t\t\t\t\t\t\t\tObjectifs
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li {% if slug is defined %} {% if slug is same as('partenaires') %} class=\"current\" {% endif %} {% endif %}>
\t\t\t\t\t\t\t\t<a href=\"partenaires\">

\t\t\t\t\t\t\t\t\tPartenaires
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><img src=\"../pics/icone.png\" width=\"50px\" style=\"margin-left: '50px';\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<!-- Banner -->
\t\t\t\t<section id=\"banner\">
\t\t\t\t\t<header>


\t\t\t\t\t\t<h2 class=\"h2\" style=\"font-family: Source Sans Pro, sans-serif;\">Votre nouvelle vie commence maintenant
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<a href=\"#knowMore\" class=\"button\">En savoir plus</a>

\t\t\t\t\t</header>
\t\t\t\t</section>
\t\t\t\t<!-- Gigantic Heading -->
\t\t\t\t<section class=\"wrapper style2\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<header class=\"major\" id=\"knowMore\">
\t\t\t\t\t\t\t{% block main %}{% endblock %}
\t\t\t\t\t\t</header>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<!-- Gigantic Heading -->
\t\t\t\t<section class=\"wrapper style2\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t{% block sidebar %}{% endblock %}
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</header>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<!-- Footer -->
\t\t\t\t<div id=\"footer\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<section class=\"col-3 col-6-narrower col-12-mobilep\">
\t\t\t\t\t\t\t\t<h3>Quelques liens utiles</h3>
\t\t\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href='mailto:webmaster@viamedo.fr'>Contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://www.viamedo.fr/cgv.pdf\" target=\"_blank\">Confidentialité</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://viamedo.fr/cookies.html\" target=\"_blank\">Cookies</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://viamedo.fr/mentionlegales.html\" target=\"_blank\">Mentions légales</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-3 col-6-narrower col-12-mobilep\">
\t\t\t\t\t\t\t\t<h3>Autres liens utiles</h3>
\t\t\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://viamedo.fr/register/\">Inscription</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://viamedo.fr/login/\">Connexion</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://viamedo.fr/reset-password\">Réinitialisez votre password</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://viamedo.fr/logout\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Icons -->
\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/ViaMedo-102753971946564\" class=\"icon brands fa-facebook-f\">

\t\t\t\t\t\t\t\t<span class=\"label\">Facebook</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.linkedin.com/in/anto-mela/\" class=\"icon brands fa-linkedin-in\">
\t\t\t\t\t\t\t\t<span class=\"label\">LinkedIn</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.patreon.com/viamedo\" class=\"icon brands fa-patreon\">
\t\t\t\t\t\t\t\t<span class=\"label\">Patreon</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Copyright -->
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t<li>&copy; 2021 - Antonu-Maria MELA. All rights reserved</li>
\t\t\t\t\t\t\t<li>Design:
\t\t\t\t\t\t\t\t<a href=\"http://html5up.net\" target=\"_blank\">HTML5 UP</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t{% endblock %}
\t</body>
</html>
", "index.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/index.html.twig");
    }
}
