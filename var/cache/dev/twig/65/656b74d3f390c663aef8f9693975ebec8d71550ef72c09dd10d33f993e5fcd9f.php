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

/* pics/icons8-temperature_sensitive.svg */
class __TwigTemplate_c76fcb56b7fb9a844652e2ec9a46ddb23beb1e3a9489dc16d1ebfae002bd063d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pics/icons8-temperature_sensitive.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pics/icons8-temperature_sensitive.svg"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\" fill=\"#000000\"><path d=\"M 25 0 C 20.59375 0 17 3.59375 17 8 L 17 19.1875 L 10.71875 23 L 1 23 C 0.449219 23 0 23.449219 0 24 C 0 24.550781 0.449219 25 1 25 L 11 25 C 11.183594 25 11.375 24.9375 11.53125 24.84375 L 18.5 20.625 C 18.519531 20.617188 18.542969 20.605469 18.5625 20.59375 L 32.5 12.125 C 32.519531 12.117188 32.542969 12.105469 32.5625 12.09375 L 39.28125 8 L 49 8 C 49.554688 8 50 7.550781 50 7 C 50 6.449219 49.554688 6 49 6 L 39 6 C 38.816406 6 38.625 6.0625 38.46875 6.15625 L 33 9.46875 L 33 8 C 33 3.59375 29.40625 0 25 0 Z M 25 2 C 28.324219 2 31 4.675781 31 8 L 31 10.6875 L 19 17.96875 L 19 8 C 19 4.675781 21.675781 2 25 2 Z M 33 14.15625 L 17 23.875 L 17 26.78125 C 13.859375 29.242188 12 33.015625 12 37 C 12 44.167969 17.832031 50 25 50 C 32.167969 50 38 44.167969 38 37 C 38 33.015625 36.140625 29.242188 33 26.78125 Z\" fill=\"#000000\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pics/icons8-temperature_sensitive.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\" fill=\"#000000\"><path d=\"M 25 0 C 20.59375 0 17 3.59375 17 8 L 17 19.1875 L 10.71875 23 L 1 23 C 0.449219 23 0 23.449219 0 24 C 0 24.550781 0.449219 25 1 25 L 11 25 C 11.183594 25 11.375 24.9375 11.53125 24.84375 L 18.5 20.625 C 18.519531 20.617188 18.542969 20.605469 18.5625 20.59375 L 32.5 12.125 C 32.519531 12.117188 32.542969 12.105469 32.5625 12.09375 L 39.28125 8 L 49 8 C 49.554688 8 50 7.550781 50 7 C 50 6.449219 49.554688 6 49 6 L 39 6 C 38.816406 6 38.625 6.0625 38.46875 6.15625 L 33 9.46875 L 33 8 C 33 3.59375 29.40625 0 25 0 Z M 25 2 C 28.324219 2 31 4.675781 31 8 L 31 10.6875 L 19 17.96875 L 19 8 C 19 4.675781 21.675781 2 25 2 Z M 33 14.15625 L 17 23.875 L 17 26.78125 C 13.859375 29.242188 12 33.015625 12 37 C 12 44.167969 17.832031 50 25 50 C 32.167969 50 38 44.167969 38 37 C 38 33.015625 36.140625 29.242188 33 26.78125 Z\" fill=\"#000000\"/></svg>
", "pics/icons8-temperature_sensitive.svg", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/templates/pics/icons8-temperature_sensitive.svg");
    }
}
