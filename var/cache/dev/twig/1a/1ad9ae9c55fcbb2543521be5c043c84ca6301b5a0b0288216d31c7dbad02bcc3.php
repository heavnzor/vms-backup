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

/* pics/icons8-chart.svg */
class __TwigTemplate_3a48c084896d6b080927afe5563c5d820023ef444b98de2d0468dd12d5773b2f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pics/icons8-chart.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pics/icons8-chart.svg"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\" fill=\"#000000\"><path d=\"M 48.898438 13.5 C 46.601563 7.800781 42.199219 3.398438 36.5 1.101563 C 36.199219 1 36 1 35.699219 1.101563 C 35.5 1.199219 35.300781 1.398438 35.199219 1.601563 L 34.199219 3.898438 C 31.699219 2.800781 29 2.199219 26.199219 2 C 26.101563 2 26.101563 2 26 2 C 26 2 25.898438 2 25.898438 2 C 25.601563 2 25.300781 2 25 2 C 12.300781 2 2 12.300781 2 25 C 2 25.300781 2 25.601563 2 25.898438 C 2 25.898438 2 26 2 26 C 2 26.101563 2 26.101563 2 26.101563 C 2.601563 38.300781 12.699219 48 25 48 C 31 48 36.398438 45.699219 40.5 41.898438 L 23.601563 25 L 4 25 C 4 13.398438 13.398438 4 25 4 L 25 23.601563 L 41.898438 40.5 C 45.699219 36.398438 48 31 48 25 C 48 21.800781 47.300781 18.699219 46.101563 15.800781 L 48.398438 14.800781 C 48.601563 14.699219 48.800781 14.5 48.898438 14.300781 C 49 14 49 13.800781 48.898438 13.5 Z M 44.300781 14.300781 C 44.300781 14.398438 44.300781 14.300781 44.300781 14.300781 C 44.300781 14.398438 44.300781 14.398438 44.300781 14.300781 L 29.5 20.398438 L 36.601563 3.300781 C 41 5.398438 44.601563 8.898438 46.601563 13.300781 Z\" fill=\"#000000\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pics/icons8-chart.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\" fill=\"#000000\"><path d=\"M 48.898438 13.5 C 46.601563 7.800781 42.199219 3.398438 36.5 1.101563 C 36.199219 1 36 1 35.699219 1.101563 C 35.5 1.199219 35.300781 1.398438 35.199219 1.601563 L 34.199219 3.898438 C 31.699219 2.800781 29 2.199219 26.199219 2 C 26.101563 2 26.101563 2 26 2 C 26 2 25.898438 2 25.898438 2 C 25.601563 2 25.300781 2 25 2 C 12.300781 2 2 12.300781 2 25 C 2 25.300781 2 25.601563 2 25.898438 C 2 25.898438 2 26 2 26 C 2 26.101563 2 26.101563 2 26.101563 C 2.601563 38.300781 12.699219 48 25 48 C 31 48 36.398438 45.699219 40.5 41.898438 L 23.601563 25 L 4 25 C 4 13.398438 13.398438 4 25 4 L 25 23.601563 L 41.898438 40.5 C 45.699219 36.398438 48 31 48 25 C 48 21.800781 47.300781 18.699219 46.101563 15.800781 L 48.398438 14.800781 C 48.601563 14.699219 48.800781 14.5 48.898438 14.300781 C 49 14 49 13.800781 48.898438 13.5 Z M 44.300781 14.300781 C 44.300781 14.398438 44.300781 14.300781 44.300781 14.300781 C 44.300781 14.398438 44.300781 14.398438 44.300781 14.300781 L 29.5 20.398438 L 36.601563 3.300781 C 41 5.398438 44.601563 8.898438 46.601563 13.300781 Z\" fill=\"#000000\"/></svg>
", "pics/icons8-chart.svg", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/templates/pics/icons8-chart.svg");
    }
}
