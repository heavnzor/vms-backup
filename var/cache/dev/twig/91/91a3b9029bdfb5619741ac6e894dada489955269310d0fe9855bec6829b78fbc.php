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

/* page/less-substance.html.twig */
class __TwigTemplate_94c3f1d74ffdab1e1a818f9d8c0455d62841e1443b75a765e5b90b202d762d3f extends Template
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
        return "sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/less-substance.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/less-substance.html.twig"));

        $this->parent = $this->loadTemplate("sidebar.html.twig", "page/less-substance.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "  <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "</h1>
  ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 4, $this->source); })()), "content", [], "any", false, false, false, 4);
        echo "
  ";
        // line 5
        if (array_key_exists("substance", $context)) {
            // line 6
            echo "    La quantité de
    ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["substance"]) || array_key_exists("substance", $context) ? $context["substance"] : (function () { throw new RuntimeError('Variable "substance" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
            echo "
    a été diminué.
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 12
        echo "<h3>
  <em>\"Stay hungry, stay foolish\"</em>- Steve Jobs</h3>
<br>
  Bravo
  ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "pseudonyme", [], "any", false, false, false, 16), "html", null, true);
        echo "
  !
  <br><br>
    <em>Actuellement, les produits listés sont :</em>

  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
            // line 22
            echo "    <p class=\"\">
      ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "
            ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 24) === true)) {
                echo "<img src='../pics/icons8-happy_skull.svg' width='30px'>";
            }
            // line 25
            echo "<br>
      <a href='add-substance?id=";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "'><img src='../pics/icons8-add.png' width='30px'></a>
      ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "quantity", [], "any", false, false, false, 27), "html", null, true);
            echo "
      <a href='less-substance?id=";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "'><img src='../pics/icons8-minus.png' width='30px'></a><br>
      <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
      <a href='delete-substance?id=";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "'><img src='../pics/icons8-delete.png' width='30px'></a>
      ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 31) === false)) {
                // line 32
                echo "<br> <span class=\"badge badge-danger\">Considérez vous cette <br> substance comme nocive ?</span> 
     <a href='nocivite-substance?id=";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "'><img src='../pics/icons8-skull_heart.png' width='30px'></a>
     ";
            }
            // line 35
            echo "      </p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/less-substance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 37,  166 => 35,  161 => 33,  158 => 32,  156 => 31,  152 => 30,  147 => 28,  143 => 27,  139 => 26,  136 => 25,  132 => 24,  128 => 23,  125 => 22,  121 => 21,  113 => 16,  107 => 12,  97 => 11,  83 => 7,  80 => 6,  78 => 5,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'sidebar.html.twig' %}
{%block main %}
  <h1>{{page.title}}</h1>
  {{page.content|raw}}
  {% if substance is defined %}
    La quantité de
    {{substance.name}}
    a été diminué.
  {% endif %}
{% endblock %}
{%block sidebar %}
<h3>
  <em>\"Stay hungry, stay foolish\"</em>- Steve Jobs</h3>
<br>
  Bravo
  {{user.pseudonyme}}
  !
  <br><br>
    <em>Actuellement, les produits listés sont :</em>

  {%for substance in substances%}
    <p class=\"\">
      {{substance.name}}
            {% if substance.nocivity is same as(true) %}<img src='../pics/icons8-happy_skull.svg' width='30px'>{% endif %}
<br>
      <a href='add-substance?id={{substance.id}}'><img src='../pics/icons8-add.png' width='30px'></a>
      {{substance.quantity}}
      <a href='less-substance?id={{substance.id}}'><img src='../pics/icons8-minus.png' width='30px'></a><br>
      <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
      <a href='delete-substance?id={{substance.id}}'><img src='../pics/icons8-delete.png' width='30px'></a>
      {%if substance.nocivity is same as(false)%}
<br> <span class=\"badge badge-danger\">Considérez vous cette <br> substance comme nocive ?</span> 
     <a href='nocivite-substance?id={{substance.id}}'><img src='../pics/icons8-skull_heart.png' width='30px'></a>
     {%endif%}
      </p>
      {%endfor%}
    {% endblock %}
", "page/less-substance.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/page/less-substance.html.twig");
    }
}
