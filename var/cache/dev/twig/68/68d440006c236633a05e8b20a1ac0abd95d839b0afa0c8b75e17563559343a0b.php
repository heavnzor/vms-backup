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

/* page/cannabis.html.twig */
class __TwigTemplate_71258ff9c82aef5f7bde44eb554ad7562f7331c0718db738f112593d45abf11d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/cannabis.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/cannabis.html.twig"));

        $this->parent = $this->loadTemplate("index.html.twig", "page/cannabis.html.twig", 1);
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
        echo "<br><br>
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "variete", [], "any", false, false, false, 8), "html", null, true);
                echo " <br>Effets : </strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "effets", [], "any", false, false, false, 8), "html", null, true);
                echo "
      <form action='register-cannabis' method='post'>
     Prix (par gramme) : <input type=\"text\" name=\"price\" value=\"12,50\">
     <input type=\"hidden\" name=\"type\" value=\"cannabis\">
        <input type=\"hidden\" name=\"variete\" value=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "variete", [], "any", false, false, false, 12), "html", null, true);
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
        if (array_key_exists("cannabisForm", $context)) {
            // line 18
            echo "    Vous désirez ajouter autre chose ? <a href='tabac'>Une marque de cigarettes ?</a> <a href='substances'>Un médicament ?</a> <a href='autre-substance'>Ou une toute autre substance ?</a><br><br>
    <form action='cannabis' method='post'>
";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cannabisForm"]) || array_key_exists("cannabisForm", $context) ? $context["cannabisForm"] : (function () { throw new RuntimeError('Variable "cannabisForm" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'label');
            echo "<br>
";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cannabisForm"]) || array_key_exists("cannabisForm", $context) ? $context["cannabisForm"] : (function () { throw new RuntimeError('Variable "cannabisForm" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'widget');
            echo "<br><br>
    <button type=\"submit\" class=\"btn btn-primary\">Chercher</button>
    ";
            // line 23
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cannabisForm"]) || array_key_exists("cannabisForm", $context) ? $context["cannabisForm"] : (function () { throw new RuntimeError('Variable "cannabisForm" does not exist.', 23, $this->source); })()), 'form_end');
            echo "
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "  ";
        if (array_key_exists("val", $context)) {
            // line 29
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "pseudonyme", [], "any", false, false, false, 29), "html", null, true);
            echo "
    nous avons ajouté la variété que vous fumez :
    ";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["val"]) || array_key_exists("val", $context) ? $context["val"] : (function () { throw new RuntimeError('Variable "val" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "
    aux substances que vous consommez.
    ";
        } else {
            // line 34
            echo "    Cherchons ensemble la variété que vous fumez 
";
        }
        // line 36
        echo "<br><br>
<em>Actuellement, les produits listés sont :</em>

";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
            // line 40
            echo "  <p class=\"\">
    ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "
    ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 42) === true)) {
                echo "<img src='../pics/icons8-happy_skull.svg' width='30px'>";
            }
            echo "<br>

    <a href='add-substance?id=";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "'><img src='../pics/icons8-add.svg' width='30px'></a>
    ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "quantity", [], "any", false, false, false, 45), "html", null, true);
            echo "
    <a href='less-substance?id=";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "'><img src='../pics/icons8-minus.svg' width='30px'></a><br>
    <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
    <a href='delete-substance?id=";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "'><img src='../pics/icons8-delete.svg' width='30px'></a>
    ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 49) === false)) {
                // line 50
                echo " <br> <span class=\"badge badge-danger\">Considérez vous cette <br> substance comme nocive ?</span> 
     <a href='nocivite-substance?id=";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 51), "html", null, true);
                echo "'><img src='../pics/icons8-skull_heart.svg' width='30px'></a>
     ";
            }
            // line 53
            echo "  </p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/cannabis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 55,  216 => 53,  211 => 51,  208 => 50,  206 => 49,  202 => 48,  197 => 46,  193 => 45,  189 => 44,  182 => 42,  178 => 41,  175 => 40,  171 => 39,  166 => 36,  162 => 34,  156 => 31,  150 => 29,  147 => 28,  137 => 27,  124 => 23,  119 => 21,  115 => 20,  111 => 18,  108 => 17,  105 => 16,  95 => 12,  85 => 8,  80 => 7,  78 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}

{% block main %}
  <h2>{{ page.title }}</h2>
  <br>{{page.content|raw }}<br><br>
  {% if value is defined %}
    {%for val in value %}
      <strong>{{val.variete}} <br>Effets : </strong>{{val.effets}}
      <form action='register-cannabis' method='post'>
     Prix (par gramme) : <input type=\"text\" name=\"price\" value=\"12,50\">
     <input type=\"hidden\" name=\"type\" value=\"cannabis\">
        <input type=\"hidden\" name=\"variete\" value=\"{{val.variete}}\">
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
      </form>
    {%endfor %}
  {% endif %}
  {%if cannabisForm is defined %}
    Vous désirez ajouter autre chose ? <a href='tabac'>Une marque de cigarettes ?</a> <a href='substances'>Un médicament ?</a> <a href='autre-substance'>Ou une toute autre substance ?</a><br><br>
    <form action='cannabis' method='post'>
{{ form_label(cannabisForm.description) }}<br>
{{ form_widget(cannabisForm.description) }}<br><br>
    <button type=\"submit\" class=\"btn btn-primary\">Chercher</button>
    {{ form_end(cannabisForm) }}
  {% endif %}
{% endblock %}

{%block sidebar %}
  {%if val is defined%}
    {{user.pseudonyme}}
    nous avons ajouté la variété que vous fumez :
    {{val}}
    aux substances que vous consommez.
    {%else%}
    Cherchons ensemble la variété que vous fumez 
{%endif %}
<br><br>
<em>Actuellement, les produits listés sont :</em>

{%for substance in substances%}
  <p class=\"\">
    {{substance.name}}
    {% if substance.nocivity is same as(true) %}<img src='../pics/icons8-happy_skull.svg' width='30px'>{% endif %}<br>

    <a href='add-substance?id={{substance.id}}'><img src='../pics/icons8-add.svg' width='30px'></a>
    {{substance.quantity}}
    <a href='less-substance?id={{substance.id}}'><img src='../pics/icons8-minus.svg' width='30px'></a><br>
    <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
    <a href='delete-substance?id={{substance.id}}'><img src='../pics/icons8-delete.svg' width='30px'></a>
    {%if substance.nocivity is same as(false) %}
 <br> <span class=\"badge badge-danger\">Considérez vous cette <br> substance comme nocive ?</span> 
     <a href='nocivite-substance?id={{substance.id}}'><img src='../pics/icons8-skull_heart.svg' width='30px'></a>
     {%endif%}
  </p>
  {%endfor%}
  {%endblock %}
", "page/cannabis.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/page/cannabis.html.twig");
    }
}
