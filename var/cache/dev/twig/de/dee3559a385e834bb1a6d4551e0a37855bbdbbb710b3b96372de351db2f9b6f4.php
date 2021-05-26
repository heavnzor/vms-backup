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

/* pics/icons8-happy_skull.svg */
class __TwigTemplate_d1580b98e77f0cce3e1ca45be1b1e382294a6053a839193fa8782e09dfab79fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pics/icons8-happy_skull.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pics/icons8-happy_skull.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"Layer_1\" x=\"0\" y=\"0\" version=\"1.1\" viewBox=\"0 0 128 128\" xml:space=\"preserve\"><path fill=\"#f9aaf9\" d=\"M35,124c3.9,0,7-3.1,7-7c0,3.9,3.1,7,7,7s7-3.1,7-7c0,3.9,3.1,7,7,7s7-3.1,7-7c0,3.9,3.1,7,7,7s7-3.1,7-7v-14\tc22.8-4.6,40-24.8,40-49v0c0-27.6-22.4-50-50-50H54C26.4,4,4,26.4,4,54v0c0,18.1,9.6,33.9,24,42.7V117C28,120.9,31.1,124,35,124z\"/><path fill=\"#3532c1\" d=\"M68.5,34.4c4.1,0,7.5,3.4,7.5,7.5c0-4.1,3.4-7.5,7.5-7.5s7.5,3.4,7.5,7.5c0,8.3-10.5,16.9-15,16.9\ts-15-8.6-15-16.9C61,37.8,64.4,34.4,68.5,34.4z M21,41.9c0-4.1,3.4-7.5,7.5-7.5s7.5,3.4,7.5,7.5c0-4.1,3.4-7.5,7.5-7.5\ts7.5,3.4,7.5,7.5c0,8.3-10.5,16.9-15,16.9S21,50.2,21,41.9z\"/><path fill=\"#3532c1\" d=\"M106.5,71c0.9,1.4,0.6,3.2-0.7,4.2c-5.6,3.9-12,6.2-18.7,6.7V92c0,1.7-1.3,3-3,3s-3-1.3-3-3V79c0-1.7,1.3-3,3-3\tc6.6,0,12.9-2,18.3-5.8C103.6,69.3,105.5,69.6,106.5,71z M53,64c0-1.7,1.3-3,3-3s3,1.3,3,3v23c0,1.7-1.3,3-3,3s-3-1.3-3-3V64z\"/></svg>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pics/icons8-happy_skull.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"Layer_1\" x=\"0\" y=\"0\" version=\"1.1\" viewBox=\"0 0 128 128\" xml:space=\"preserve\"><path fill=\"#f9aaf9\" d=\"M35,124c3.9,0,7-3.1,7-7c0,3.9,3.1,7,7,7s7-3.1,7-7c0,3.9,3.1,7,7,7s7-3.1,7-7c0,3.9,3.1,7,7,7s7-3.1,7-7v-14\tc22.8-4.6,40-24.8,40-49v0c0-27.6-22.4-50-50-50H54C26.4,4,4,26.4,4,54v0c0,18.1,9.6,33.9,24,42.7V117C28,120.9,31.1,124,35,124z\"/><path fill=\"#3532c1\" d=\"M68.5,34.4c4.1,0,7.5,3.4,7.5,7.5c0-4.1,3.4-7.5,7.5-7.5s7.5,3.4,7.5,7.5c0,8.3-10.5,16.9-15,16.9\ts-15-8.6-15-16.9C61,37.8,64.4,34.4,68.5,34.4z M21,41.9c0-4.1,3.4-7.5,7.5-7.5s7.5,3.4,7.5,7.5c0-4.1,3.4-7.5,7.5-7.5\ts7.5,3.4,7.5,7.5c0,8.3-10.5,16.9-15,16.9S21,50.2,21,41.9z\"/><path fill=\"#3532c1\" d=\"M106.5,71c0.9,1.4,0.6,3.2-0.7,4.2c-5.6,3.9-12,6.2-18.7,6.7V92c0,1.7-1.3,3-3,3s-3-1.3-3-3V79c0-1.7,1.3-3,3-3\tc6.6,0,12.9-2,18.3-5.8C103.6,69.3,105.5,69.6,106.5,71z M53,64c0-1.7,1.3-3,3-3s3,1.3,3,3v23c0,1.7-1.3,3-3,3s-3-1.3-3-3V64z\"/></svg>", "pics/icons8-happy_skull.svg", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/pics/icons8-happy_skull.svg");
    }
}
