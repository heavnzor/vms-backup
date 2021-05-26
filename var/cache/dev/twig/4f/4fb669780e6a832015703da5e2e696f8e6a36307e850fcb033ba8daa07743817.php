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

/* page/historic.html.twig */
class __TwigTemplate_0c755ef02df2f8cf382511ea447f32e6bcc7dc9780f3048ec11536ecc1f91d91 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/historic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/historic.html.twig"));

        $this->parent = $this->loadTemplate("index.html.twig", "page/historic.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "  <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h2>
  <br>";
        // line 5
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })()), "content", [], "any", false, false, false, 5);
        echo "<br>
  ";
        // line 6
        if (array_key_exists("substances", $context)) {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
                echo "Vous consommez depuis
      ";
                // line 8
                $context["difference"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "createdAt", [], "any", false, false, false, 8), "d-m-Y H:i:s")), "diff", [0 => twig_date_converter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y H:i:s", "Europe/Paris"))], "method", false, false, false, 8);
                // line 9
                echo "      ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "createdAt", [], "any", false, false, false, 9), "d-m-Y H:i:s"), "html", null, true);
                echo "
      ce produit :
      <strong>";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "name", [], "any", false, false, false, 11), "html", null, true);
                echo "</strong>
      donc depuis
      ";
                // line 13
                $context["leftDays"] = twig_get_attribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 13, $this->source); })()), "days", [], "any", false, false, false, 13);
                // line 14
                echo "      ";
                $context["leftHours"] = twig_get_attribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 14, $this->source); })()), "h", [], "any", false, false, false, 14);
                // line 15
                echo "      ";
                $context["leftMinutes"] = twig_get_attribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 15, $this->source); })()), "i", [], "any", false, false, false, 15);
                // line 16
                echo "      ";
                echo twig_escape_filter($this->env, (isset($context["leftDays"]) || array_key_exists("leftDays", $context) ? $context["leftDays"] : (function () { throw new RuntimeError('Variable "leftDays" does not exist.', 16, $this->source); })()), "html", null, true);
                echo "
      jours,
      ";
                // line 18
                echo twig_escape_filter($this->env, (isset($context["leftHours"]) || array_key_exists("leftHours", $context) ? $context["leftHours"] : (function () { throw new RuntimeError('Variable "leftHours" does not exist.', 18, $this->source); })()), "html", null, true);
                echo "
       heures, et
      ";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["leftMinutes"]) || array_key_exists("leftMinutes", $context) ? $context["leftMinutes"] : (function () { throw new RuntimeError('Variable "leftMinutes" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "
      minutes.<br>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        echo "  ";
        if (array_key_exists("user", $context)) {
            // line 28
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "pseudonyme", [], "any", false, false, false, 28), "html", null, true);
            echo ", voici l'historique de vos consommations.

  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/historic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 28,  149 => 27,  139 => 26,  128 => 23,  119 => 20,  114 => 18,  108 => 16,  105 => 15,  102 => 14,  100 => 13,  95 => 11,  89 => 9,  87 => 8,  80 => 7,  78 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}

{% block main %}
  <h2>{{ page.title }}</h2>
  <br>{{page.content|raw }}<br>
  {% if substances is defined %}
    {%for substance in substances %}Vous consommez depuis
      {% set difference = date(substance.createdAt|date('d-m-Y H:i:s')).diff(date('now'|date('d-m-Y H:i:s','Europe/Paris'))) %}
      {{substance.createdAt|date('d-m-Y H:i:s')}}
      ce produit :
      <strong>{{substance.name}}</strong>
      donc depuis
      {% set leftDays = difference.days %}
      {% set leftHours = difference.h %}
      {% set leftMinutes = difference.i %}
      {{leftDays}}
      jours,
      {{leftHours}}
       heures, et
      {{leftMinutes}}
      minutes.<br>
   {%endfor %}
  {% endif %}
{% endblock %}

{%block sidebar %}
  {%if user is defined%}
    {{user.pseudonyme}}, voici l'historique de vos consommations.

  {%endif %}
{%endblock %}
", "page/historic.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/templates/page/historic.html.twig");
    }
}
