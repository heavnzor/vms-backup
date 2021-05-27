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

/* page/show.html.twig */
class __TwigTemplate_70c1f8dcd85d1f1e5b88c4b503f43bee02f7c22af608a1906c560c50db429577 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/show.html.twig"));

        $this->parent = $this->loadTemplate("index.html.twig", "page/show.html.twig", 1);
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
        echo "  <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "</h2>
  <br>";
        // line 4
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 4, $this->source); })()), "content", [], "any", false, false, false, 4);
        echo "<br><br>
  ";
        // line 5
        if (array_key_exists("value", $context)) {
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                // line 7
                echo "      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "medicament", [], "any", false, false, false, 7), "html", null, true);
                echo "<br>
      <form action='register-substance' method='post'>
        <input type=\"hidden\" name=\"price\" value=\"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "prix", [], "any", false, false, false, 9), "html", null, true);
                echo "\">
        <input type=\"hidden\" name=\"medicament\" value=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "medicament", [], "any", false, false, false, 10), "html", null, true);
                echo "\">
        <input type=\"hidden\" name=\"type\" value=\"medicament\">
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
      </form>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  ";
        }
        // line 16
        echo "Vous désirez ajouter autre chose qu'un médicament ? <a href='tabac'>Une marque de cigarettes ?</a> <a href='cannabis'>Une variété de cannabis ?</a> <a href='autre-substance'>ou une toute autre substance ?</a>
  ";
        // line 17
        if (array_key_exists("medicamentForm", $context)) {
            // line 18
            echo "  
    <form action='substances' method='post'>
    ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["medicamentForm"]) || array_key_exists("medicamentForm", $context) ? $context["medicamentForm"] : (function () { throw new RuntimeError('Variable "medicamentForm" does not exist.', 20, $this->source); })()), "medicament", [], "any", false, false, false, 20), 'row');
            echo "
    <button type=\"submit\" class=\"btn btn-primary\">Chercher</button>
    ";
            // line 22
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["medicamentForm"]) || array_key_exists("medicamentForm", $context) ? $context["medicamentForm"] : (function () { throw new RuntimeError('Variable "medicamentForm" does not exist.', 22, $this->source); })()), 'form_end');
            echo "
  ";
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "pseudonyme", [], "any", false, false, false, 27), "html", null, true);
        echo ", cherchons ensemble dès à présent les substances que vous consommez au quotidien.<br><br>

  <br>


<h3>Actuellement, les produits listés sont :</h3

";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
            // line 35
            echo "  <p class=\"\">
    ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo " 
";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 37) === true)) {
                echo "<img src='../pics/icons8-happy_skull.svg' width='30px'>";
            }
            echo "<br>
    <a href=\"add-substance?id=";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\"><img src='../pics/icons8-add.svg' width='30px'></a>
    ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "quantity", [], "any", false, false, false, 39), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "quantityType", [], "any", false, false, false, 39), "html", null, true);
            echo " 
    <a href='less-substance?id=";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "'><img src='../pics/icons8-minus.svg' width='30px'></a><br>
    <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
    <a href='delete-substance?id=";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "'><img src='../pics/icons8-delete.svg' width='30px'></a>
    ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 43) === false)) {
                // line 44
                echo "     <br><span class=\"badge badge-danger\">Considérez vous cette substance<br> comme nocive ?</span> 
     <a href='nocivite-substance?id=";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "'><img src='../pics/icons8-skull_heart.svg' width='30px'></a>
     ";
            }
            // line 47
            echo "     
  </p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 50,  203 => 47,  198 => 45,  195 => 44,  193 => 43,  189 => 42,  184 => 40,  178 => 39,  174 => 38,  168 => 37,  164 => 36,  161 => 35,  157 => 34,  146 => 27,  136 => 26,  123 => 22,  118 => 20,  114 => 18,  112 => 17,  109 => 16,  106 => 15,  95 => 10,  91 => 9,  85 => 7,  80 => 6,  78 => 5,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}
{% block main %}
  <h2>{{ page.title }}</h2>
  <br>{{page.content|raw}}<br><br>
  {% if value is defined %}
    {%for val in value %}
      {{val.medicament}}<br>
      <form action='register-substance' method='post'>
        <input type=\"hidden\" name=\"price\" value=\"{{val.prix}}\">
        <input type=\"hidden\" name=\"medicament\" value=\"{{val.medicament}}\">
        <input type=\"hidden\" name=\"type\" value=\"medicament\">
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
      </form>
    {%endfor %}
  {% endif %}
Vous désirez ajouter autre chose qu'un médicament ? <a href='tabac'>Une marque de cigarettes ?</a> <a href='cannabis'>Une variété de cannabis ?</a> <a href='autre-substance'>ou une toute autre substance ?</a>
  {%if medicamentForm is defined %}
  
    <form action='substances' method='post'>
    {{ form_row(medicamentForm.medicament) }}
    <button type=\"submit\" class=\"btn btn-primary\">Chercher</button>
    {{ form_end(medicamentForm) }}
  {% endif %}
{% endblock %}

{%block sidebar %}
  {{user.pseudonyme}}, cherchons ensemble dès à présent les substances que vous consommez au quotidien.<br><br>

  <br>


<h3>Actuellement, les produits listés sont :</h3

{%for substance in substances%}
  <p class=\"\">
    {{substance.name}} 
{% if substance.nocivity is same as(true) %}<img src='../pics/icons8-happy_skull.svg' width='30px'>{% endif %}<br>
    <a href=\"add-substance?id={{substance.id}}\"><img src='../pics/icons8-add.svg' width='30px'></a>
    {{substance.quantity}} {{substance.quantityType}} 
    <a href='less-substance?id={{substance.id}}'><img src='../pics/icons8-minus.svg' width='30px'></a><br>
    <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
    <a href='delete-substance?id={{substance.id}}'><img src='../pics/icons8-delete.svg' width='30px'></a>
    {%if substance.nocivity is same as(false) %}
     <br><span class=\"badge badge-danger\">Considérez vous cette substance<br> comme nocive ?</span> 
     <a href='nocivite-substance?id={{substance.id}}'><img src='../pics/icons8-skull_heart.svg' width='30px'></a>
     {%endif%}
     
  </p>
  {%endfor%}
  {%endblock %}
", "page/show.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/page/show.html.twig");
    }
}
