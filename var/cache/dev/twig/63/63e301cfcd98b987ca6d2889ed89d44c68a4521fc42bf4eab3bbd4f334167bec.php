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

/* pics/icons8-video.svg */
class __TwigTemplate_3cae6c3da3cb0efba7c7e2fd52d70265dc849545e6e9cd695787518a37d44e4f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pics/icons8-video.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pics/icons8-video.svg"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\" fill=\"#000000\"><path d=\"M 2 4 C 1.448 4 1 4.448 1 5 L 1 45 C 1 45.552 1.448 46 2 46 L 48 46 C 48.552 46 49 45.552 49 45 L 49 5 C 49 4.448 48.552 4 48 4 L 2 4 z M 3 6 L 6 6 L 6 9 L 3 9 L 3 6 z M 8 6 L 12 6 L 12 9 L 8 9 L 8 6 z M 14 6 L 18 6 L 18 9 L 14 9 L 14 6 z M 20 6 L 24 6 L 24 9 L 20 9 L 20 6 z M 26 6 L 30 6 L 30 9 L 26 9 L 26 6 z M 32 6 L 36 6 L 36 9 L 32 9 L 32 6 z M 38 6 L 42 6 L 42 9 L 38 9 L 38 6 z M 44 6 L 47 6 L 47 9 L 44 9 L 44 6 z M 21 19 L 31 25 L 21 31 L 21 19 z M 3 41 L 6 41 L 6 44 L 3 44 L 3 41 z M 8 41 L 12 41 L 12 44 L 8 44 L 8 41 z M 14 41 L 18 41 L 18 44 L 14 44 L 14 41 z M 20 41 L 24 41 L 24 44 L 20 44 L 20 41 z M 26 41 L 30 41 L 30 44 L 26 44 L 26 41 z M 32 41 L 36 41 L 36 44 L 32 44 L 32 41 z M 38 41 L 42 41 L 42 44 L 38 44 L 38 41 z M 44 41 L 47 41 L 47 44 L 44 44 L 44 41 z\" fill=\"#000000\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pics/icons8-video.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\" fill=\"#000000\"><path d=\"M 2 4 C 1.448 4 1 4.448 1 5 L 1 45 C 1 45.552 1.448 46 2 46 L 48 46 C 48.552 46 49 45.552 49 45 L 49 5 C 49 4.448 48.552 4 48 4 L 2 4 z M 3 6 L 6 6 L 6 9 L 3 9 L 3 6 z M 8 6 L 12 6 L 12 9 L 8 9 L 8 6 z M 14 6 L 18 6 L 18 9 L 14 9 L 14 6 z M 20 6 L 24 6 L 24 9 L 20 9 L 20 6 z M 26 6 L 30 6 L 30 9 L 26 9 L 26 6 z M 32 6 L 36 6 L 36 9 L 32 9 L 32 6 z M 38 6 L 42 6 L 42 9 L 38 9 L 38 6 z M 44 6 L 47 6 L 47 9 L 44 9 L 44 6 z M 21 19 L 31 25 L 21 31 L 21 19 z M 3 41 L 6 41 L 6 44 L 3 44 L 3 41 z M 8 41 L 12 41 L 12 44 L 8 44 L 8 41 z M 14 41 L 18 41 L 18 44 L 14 44 L 14 41 z M 20 41 L 24 41 L 24 44 L 20 44 L 20 41 z M 26 41 L 30 41 L 30 44 L 26 44 L 26 41 z M 32 41 L 36 41 L 36 44 L 32 44 L 32 41 z M 38 41 L 42 41 L 42 44 L 38 44 L 38 41 z M 44 41 L 47 41 L 47 44 L 44 44 L 44 41 z\" fill=\"#000000\"/></svg>
", "pics/icons8-video.svg", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/templates/pics/icons8-video.svg");
    }
}
