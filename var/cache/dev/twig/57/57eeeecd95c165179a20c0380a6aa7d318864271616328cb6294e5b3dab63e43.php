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

/* page/pics/icons8-money.svg */
class __TwigTemplate_065abde148765bd2320abb48b3b43df7ea42f75be41fc467b0cf1947df380dee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/pics/icons8-money.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/pics/icons8-money.svg"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\" fill=\"#000000\"><path d=\"M 2.8125 6 C 2.335938 6.089844 1.992188 6.511719 2 7 L 2 31 C 2 31.550781 2.449219 32 3 32 L 47 32 C 47.550781 32 48 31.550781 48 31 L 48 7 C 48 6.449219 47.550781 6 47 6 L 3 6 C 2.96875 6 2.9375 6 2.90625 6 C 2.875 6 2.84375 6 2.8125 6 Z M 4 8 L 10 8 L 10 30 L 4 30 Z M 40 8 L 46 8 L 46 30 L 40 30 Z M 25 11 C 28 11 30.40625 13.199219 30.90625 16 L 31 16 C 33.199219 16 35 17.800781 35 20 C 35 22.199219 33.199219 24 31 24 C 30.398438 24 30 23.601563 30 23 C 30 22.398438 30.398438 22 31 22 C 32.101563 22 33 21.101563 33 20 C 33 18.898438 32.101563 18 31 18 L 30 18 C 29.398438 18 29 17.601563 29 17 C 29 14.800781 27.199219 13 25 13 C 22.800781 13 21 14.800781 21 17 C 21 17.601563 20.601563 18 20 18 L 19 18 C 17.898438 18 17 18.898438 17 20 C 17 21.101563 17.898438 22 19 22 C 19.601563 22 20 22.398438 20 23 C 20 23.601563 19.601563 24 19 24 C 16.800781 24 15 22.199219 15 20 C 15 17.800781 16.800781 16 19 16 L 19.09375 16 C 19.59375 13.199219 22 11 25 11 Z M 2.8125 33 C 2.261719 33.050781 1.855469 33.542969 1.90625 34.09375 C 1.957031 34.644531 2.449219 35.050781 3 35 C 17.480469 35 27.652344 36.484375 34.1875 37.96875 C 40.722656 39.453125 43.5625 40.90625 43.5625 40.90625 C 43.875 41.058594 44.242188 41.039063 44.535156 40.851563 C 44.824219 40.667969 45.003906 40.347656 45 40 L 45 34 C 45.003906 33.640625 44.816406 33.304688 44.503906 33.121094 C 44.191406 32.941406 43.808594 32.941406 43.496094 33.121094 C 43.183594 33.304688 42.996094 33.640625 43 34 L 43 38.5 C 42.027344 38.097656 40.5 37.546875 38 36.875 L 38 33 L 4 33 C 3.660156 33 3.347656 33 3 33 C 2.96875 33 2.9375 33 2.90625 33 C 2.875 33 2.84375 33 2.8125 33 Z M 2.8125 36 C 2.261719 36.050781 1.855469 36.542969 1.90625 37.09375 C 1.957031 37.644531 2.449219 38.050781 3 38 C 16.324219 38 25.699219 40.484375 31.71875 42.9375 C 37.738281 45.390625 40.34375 47.75 40.34375 47.75 C 40.640625 48.007813 41.054688 48.066406 41.414063 47.90625 C 41.769531 47.746094 42 47.390625 42 47 L 42 42 C 42.003906 41.640625 41.816406 41.304688 41.503906 41.121094 C 41.191406 40.941406 40.808594 40.941406 40.496094 41.121094 C 40.183594 41.304688 39.996094 41.640625 40 42 L 40 45.0625 C 39.097656 44.421875 37.816406 43.582031 36 42.65625 L 36 40 C 26.199219 35.699219 4 36 4 36 C 3.664063 35.996094 3.339844 36 3 36 C 2.96875 36 2.9375 36 2.90625 36 C 2.875 36 2.84375 36 2.8125 36 Z\" fill=\"#000000\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "page/pics/icons8-money.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\" fill=\"#000000\"><path d=\"M 2.8125 6 C 2.335938 6.089844 1.992188 6.511719 2 7 L 2 31 C 2 31.550781 2.449219 32 3 32 L 47 32 C 47.550781 32 48 31.550781 48 31 L 48 7 C 48 6.449219 47.550781 6 47 6 L 3 6 C 2.96875 6 2.9375 6 2.90625 6 C 2.875 6 2.84375 6 2.8125 6 Z M 4 8 L 10 8 L 10 30 L 4 30 Z M 40 8 L 46 8 L 46 30 L 40 30 Z M 25 11 C 28 11 30.40625 13.199219 30.90625 16 L 31 16 C 33.199219 16 35 17.800781 35 20 C 35 22.199219 33.199219 24 31 24 C 30.398438 24 30 23.601563 30 23 C 30 22.398438 30.398438 22 31 22 C 32.101563 22 33 21.101563 33 20 C 33 18.898438 32.101563 18 31 18 L 30 18 C 29.398438 18 29 17.601563 29 17 C 29 14.800781 27.199219 13 25 13 C 22.800781 13 21 14.800781 21 17 C 21 17.601563 20.601563 18 20 18 L 19 18 C 17.898438 18 17 18.898438 17 20 C 17 21.101563 17.898438 22 19 22 C 19.601563 22 20 22.398438 20 23 C 20 23.601563 19.601563 24 19 24 C 16.800781 24 15 22.199219 15 20 C 15 17.800781 16.800781 16 19 16 L 19.09375 16 C 19.59375 13.199219 22 11 25 11 Z M 2.8125 33 C 2.261719 33.050781 1.855469 33.542969 1.90625 34.09375 C 1.957031 34.644531 2.449219 35.050781 3 35 C 17.480469 35 27.652344 36.484375 34.1875 37.96875 C 40.722656 39.453125 43.5625 40.90625 43.5625 40.90625 C 43.875 41.058594 44.242188 41.039063 44.535156 40.851563 C 44.824219 40.667969 45.003906 40.347656 45 40 L 45 34 C 45.003906 33.640625 44.816406 33.304688 44.503906 33.121094 C 44.191406 32.941406 43.808594 32.941406 43.496094 33.121094 C 43.183594 33.304688 42.996094 33.640625 43 34 L 43 38.5 C 42.027344 38.097656 40.5 37.546875 38 36.875 L 38 33 L 4 33 C 3.660156 33 3.347656 33 3 33 C 2.96875 33 2.9375 33 2.90625 33 C 2.875 33 2.84375 33 2.8125 33 Z M 2.8125 36 C 2.261719 36.050781 1.855469 36.542969 1.90625 37.09375 C 1.957031 37.644531 2.449219 38.050781 3 38 C 16.324219 38 25.699219 40.484375 31.71875 42.9375 C 37.738281 45.390625 40.34375 47.75 40.34375 47.75 C 40.640625 48.007813 41.054688 48.066406 41.414063 47.90625 C 41.769531 47.746094 42 47.390625 42 47 L 42 42 C 42.003906 41.640625 41.816406 41.304688 41.503906 41.121094 C 41.191406 40.941406 40.808594 40.941406 40.496094 41.121094 C 40.183594 41.304688 39.996094 41.640625 40 42 L 40 45.0625 C 39.097656 44.421875 37.816406 43.582031 36 42.65625 L 36 40 C 26.199219 35.699219 4 36 4 36 C 3.664063 35.996094 3.339844 36 3 36 C 2.96875 36 2.9375 36 2.90625 36 C 2.875 36 2.84375 36 2.8125 36 Z\" fill=\"#000000\"/></svg>
", "page/pics/icons8-money.svg", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/page/pics/icons8-money.svg");
    }
}
