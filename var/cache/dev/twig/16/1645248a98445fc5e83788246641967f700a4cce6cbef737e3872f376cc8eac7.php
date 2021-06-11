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

/* page/cigarette.html.twig */
class __TwigTemplate_8ff558fc5e1b407a1928c4d98f5d9478bda4462481312226b659a80fac8a78de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/cigarette.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/cigarette.html.twig"));

        $this->parent = $this->loadTemplate("sidebar.html.twig", "page/cigarette.html.twig", 1);
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
        if (array_key_exists("value", $context)) {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                // line 8
                echo "      <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "marque", [], "any", false, false, false, 8), "html", null, true);
                echo ":<br></strong>
      <form action='register-cigarette' method='post'>
     Prix (par paquet) : <input type=\"text\" name=\"price\" value=\"8,50\">
     <input type=\"hidden\" name=\"type\" value=\"cigarette\">
        <input type=\"hidden\" name=\"marque\" value=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "marque", [], "any", false, false, false, 12), "html", null, true);
                echo "\">
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
      </form>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  ";
        }
        // line 17
        echo "  ";
        if (array_key_exists("cigaretteForm", $context)) {
            // line 18
            echo "    Vous désirez ajouter autre chose ?
<a href='autre-substance'>Une substance personnalisée ?</a>
<a href='cannabis'>Une variété de cannabis ?</a>
<a href='substances'>Ou un médicament ?</a><br><br>
   <form action='tabac' method='post'>
    ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cigaretteForm"]) || array_key_exists("cigaretteForm", $context) ? $context["cigaretteForm"] : (function () { throw new RuntimeError('Variable "cigaretteForm" does not exist.', 23, $this->source); })()), "marque", [], "any", false, false, false, 23), 'row');
            echo "
    <button type=\"submit\" class=\"btn btn-primary\">Chercher</button>
    ";
            // line 25
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cigaretteForm"]) || array_key_exists("cigaretteForm", $context) ? $context["cigaretteForm"] : (function () { throw new RuntimeError('Variable "cigaretteForm" does not exist.', 25, $this->source); })()), 'form_end');
            echo "
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 30
        echo "  ";
        if (array_key_exists("val", $context)) {
            // line 31
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "pseudonyme", [], "any", false, false, false, 31), "html", null, true);
            echo "
    nous avons ajouté la marque que vous fumez : 
    ";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["val"]) || array_key_exists("val", $context) ? $context["val"] : (function () { throw new RuntimeError('Variable "val" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "
    aux substances que vous consommez.
    ";
        } else {
            // line 36
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "pseudonyme", [], "any", false, false, false, 36), "html", null, true);
            echo " cherchons ensemble la marque que vous fumez.
    ";
        }
        // line 38
        echo "    <br><br>
    <em>Actuellement, les produits listés sont :</em>

      ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
            // line 42
            echo "      <p class=\"\">
        ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo "
        ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 44) === true)) {
                echo "<img src='../pics/icons8-happy_skull.svg' width='30px'>";
            }
            echo "<br>
        <a href='add-substance?id=";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "'><img src='../pics/icons8-add2.png' width='30px'></a>
        ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "quantity", [], "any", false, false, false, 46), "html", null, true);
            echo "
        <a href='less-substance?id=";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "'><img src='../pics/icons8-minus.png' width='30px'></a><br>
        <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
      <a href='delete-substance?id=";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "'><img src='../pics/icons8-delete.png' width='30px'></a>
      ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 50) === false)) {
                // line 51
                echo " <br> <span class=\"badge badge-danger\">Considérez vous cette <br> substance comme nocive ?</span> 
     <a href='nocivite-substance?id=";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 52), "html", null, true);
                echo "'><img src='../pics/icons8-skull_heart.png' width='30px'></a>
     ";
            }
            // line 54
            echo "    </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/cigarette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 56,  214 => 54,  209 => 52,  206 => 51,  204 => 50,  200 => 49,  195 => 47,  191 => 46,  187 => 45,  181 => 44,  177 => 43,  174 => 42,  170 => 41,  165 => 38,  159 => 36,  153 => 33,  147 => 31,  144 => 30,  134 => 29,  121 => 25,  116 => 23,  109 => 18,  106 => 17,  103 => 16,  93 => 12,  85 => 8,  80 => 7,  78 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'sidebar.html.twig' %}

{% block main %}
  <h2>{{ page.title }}</h2>
  <br>{{page.content|raw }}<br>
  {% if value is defined %}
    {%for val in value %}
      <strong>{{val.marque}}:<br></strong>
      <form action='register-cigarette' method='post'>
     Prix (par paquet) : <input type=\"text\" name=\"price\" value=\"8,50\">
     <input type=\"hidden\" name=\"type\" value=\"cigarette\">
        <input type=\"hidden\" name=\"marque\" value=\"{{val.marque}}\">
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
      </form>
    {%endfor %}
  {% endif %}
  {%if cigaretteForm is defined %}
    Vous désirez ajouter autre chose ?
<a href='autre-substance'>Une substance personnalisée ?</a>
<a href='cannabis'>Une variété de cannabis ?</a>
<a href='substances'>Ou un médicament ?</a><br><br>
   <form action='tabac' method='post'>
    {{ form_row(cigaretteForm.marque) }}
    <button type=\"submit\" class=\"btn btn-primary\">Chercher</button>
    {{ form_end(cigaretteForm) }}
  {% endif %}
{% endblock %}

{%block sidebar %}
  {%if val is defined%}
    {{user.pseudonyme}}
    nous avons ajouté la marque que vous fumez : 
    {{val}}
    aux substances que vous consommez.
    {%else%}
    {{user.pseudonyme}} cherchons ensemble la marque que vous fumez.
    {%endif%}
    <br><br>
    <em>Actuellement, les produits listés sont :</em>

      {%for substance in substances%}
      <p class=\"\">
        {{substance.name}}
        {% if substance.nocivity is same as(true) %}<img src='../pics/icons8-happy_skull.svg' width='30px'>{% endif %}<br>
        <a href='add-substance?id={{substance.id}}'><img src='../pics/icons8-add2.png' width='30px'></a>
        {{substance.quantity}}
        <a href='less-substance?id={{substance.id}}'><img src='../pics/icons8-minus.png' width='30px'></a><br>
        <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
      <a href='delete-substance?id={{substance.id}}'><img src='../pics/icons8-delete.png' width='30px'></a>
      {%if substance.nocivity is same as(false) %}
 <br> <span class=\"badge badge-danger\">Considérez vous cette <br> substance comme nocive ?</span> 
     <a href='nocivite-substance?id={{substance.id}}'><img src='../pics/icons8-skull_heart.png' width='30px'></a>
     {%endif%}
    </p>
    {%endfor%}
  {%endblock %}
", "page/cigarette.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/page/cigarette.html.twig");
    }
}
