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

/* pics/icons8-signin.svg */
class __TwigTemplate_8a14a4334800b948800fcae5a82b4e22850e7135a8887439f7388c4baeb32347 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pics/icons8-signin.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pics/icons8-signin.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M12 3A9 9 0 1 0 12 21A9 9 0 1 0 12 3Z\" opacity=\".3\"/><path d=\"M11 2.7H13V9H11zM16 9L12 13 8 9z\"/><path d=\"M12,22C6.5,22,2,17.5,2,12S6.5,2,12,2s10,4.5,10,10S17.5,22,12,22z M12,4c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8S16.4,4,12,4 z\"/></svg>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pics/icons8-signin.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M12 3A9 9 0 1 0 12 21A9 9 0 1 0 12 3Z\" opacity=\".3\"/><path d=\"M11 2.7H13V9H11zM16 9L12 13 8 9z\"/><path d=\"M12,22C6.5,22,2,17.5,2,12S6.5,2,12,2s10,4.5,10,10S17.5,22,12,22z M12,4c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8S16.4,4,12,4 z\"/></svg>", "pics/icons8-signin.svg", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/templates/pics/icons8-signin.svg");
    }
}
