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

/* page/autre-substance.html.twig */
class __TwigTemplate_df7db1ef4d92569cc86d2ee2a2a1ba4bcc19ccb51a96af4c01d5d9c06bfe98d9 extends Template
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
        return "right-sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/autre-substance.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/autre-substance.html.twig"));

        $this->parent = $this->loadTemplate("right-sidebar.html.twig", "page/autre-substance.html.twig", 1);
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
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "<br>
  ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 4, $this->source); })()), "content", [], "any", false, false, false, 4);
        echo "<br><br>
  Vous désirez ajouter autre chose ?
<a href='tabac'>Une marque de cigarettes ?</a>
<a href='cannabis'>Une variété de cannabis ?</a>
<a href='substances'>Ou un médicament ?</a><br><br>
  <form action='autre-substance' method='post'>
      ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["substanceForm"]) || array_key_exists("substanceForm", $context) ? $context["substanceForm"] : (function () { throw new RuntimeError('Variable "substanceForm" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
      ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["substanceForm"]) || array_key_exists("substanceForm", $context) ? $context["substanceForm"] : (function () { throw new RuntimeError('Variable "substanceForm" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), 'label');
        echo "<br>
      ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["substanceForm"]) || array_key_exists("substanceForm", $context) ? $context["substanceForm"] : (function () { throw new RuntimeError('Variable "substanceForm" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'widget');
        echo "<br>
      ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["substanceForm"]) || array_key_exists("substanceForm", $context) ? $context["substanceForm"] : (function () { throw new RuntimeError('Variable "substanceForm" does not exist.', 13, $this->source); })()), "type", [], "any", false, false, false, 13), 'label');
        echo "<br>
      ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["substanceForm"]) || array_key_exists("substanceForm", $context) ? $context["substanceForm"] : (function () { throw new RuntimeError('Variable "substanceForm" does not exist.', 14, $this->source); })()), "type", [], "any", false, false, false, 14), 'widget');
        echo "<br>
      ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["substanceForm"]) || array_key_exists("substanceForm", $context) ? $context["substanceForm"] : (function () { throw new RuntimeError('Variable "substanceForm" does not exist.', 15, $this->source); })()), "quantityType", [], "any", false, false, false, 15), 'label');
        echo "<br>
      ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["substanceForm"]) || array_key_exists("substanceForm", $context) ? $context["substanceForm"] : (function () { throw new RuntimeError('Variable "substanceForm" does not exist.', 16, $this->source); })()), "quantityType", [], "any", false, false, false, 16), 'widget');
        echo "<br>
      ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["substanceForm"]) || array_key_exists("substanceForm", $context) ? $context["substanceForm"] : (function () { throw new RuntimeError('Variable "substanceForm" does not exist.', 17, $this->source); })()), "price", [], "any", false, false, false, 17), 'label');
        echo "<br>
      ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["substanceForm"]) || array_key_exists("substanceForm", $context) ? $context["substanceForm"] : (function () { throw new RuntimeError('Variable "substanceForm" does not exist.', 18, $this->source); })()), "price", [], "any", false, false, false, 18), 'widget');
        echo "<br>
      ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["substanceForm"]) || array_key_exists("substanceForm", $context) ? $context["substanceForm"] : (function () { throw new RuntimeError('Variable "substanceForm" does not exist.', 19, $this->source); })()), "quantity", [], "any", false, false, false, 19), 'label');
        echo "<br>
      ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["substanceForm"]) || array_key_exists("substanceForm", $context) ? $context["substanceForm"] : (function () { throw new RuntimeError('Variable "substanceForm" does not exist.', 20, $this->source); })()), "quantity", [], "any", false, false, false, 20), 'widget');
        echo "<br>
      <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
      ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["substanceForm"]) || array_key_exists("substanceForm", $context) ? $context["substanceForm"] : (function () { throw new RuntimeError('Variable "substanceForm" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
 
      
";
        
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
        echo "<h3>
<em>Actuellement, les produits listés sont :</em></h3>

";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
            // line 31
            echo "  <p class=\"\">
    ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo " 
    ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 33) === true)) {
                echo "<img src='../pics/icons8-happy_skull.svg' width='30px'>";
            }
            echo "<br>
    <a href='add-substance?id=";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "'><img src='../pics/icons8-add2.png' width='30px'></a>
    ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "quantity", [], "any", false, false, false, 35), "html", null, true);
            echo "
    <a href='less-substance?id=";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "'><img src='../pics/icons8-minus.png' width='30px'></a><br>
    <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
    <a href='delete-substance?id=";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "'><img src='../pics/icons8-delete.png' width='30px'></a>
    ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 39) === false)) {
                // line 40
                echo " <br> <span class=\"badge badge-danger\">Considérez vous cette <br> substance comme nocive ?</span> 
     <a href='nocivite-substance?id=";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "'><img src='../pics/icons8-skull_heart.png' width='30px'></a>
     ";
            }
            // line 43
            echo "  </p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/autre-substance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 45,  201 => 43,  196 => 41,  193 => 40,  191 => 39,  187 => 38,  182 => 36,  178 => 35,  174 => 34,  168 => 33,  164 => 32,  161 => 31,  157 => 30,  152 => 27,  142 => 26,  128 => 22,  123 => 20,  119 => 19,  115 => 18,  111 => 17,  107 => 16,  103 => 15,  99 => 14,  95 => 13,  91 => 12,  87 => 11,  83 => 10,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'right-sidebar.html.twig' %}
{%block main %}
  {{page.title}}<br>
  {{page.content|raw}}<br><br>
  Vous désirez ajouter autre chose ?
<a href='tabac'>Une marque de cigarettes ?</a>
<a href='cannabis'>Une variété de cannabis ?</a>
<a href='substances'>Ou un médicament ?</a><br><br>
  <form action='autre-substance' method='post'>
      {{ form_start(substanceForm) }}
      {{ form_label(substanceForm.name) }}<br>
      {{ form_widget(substanceForm.name) }}<br>
      {{ form_label(substanceForm.type) }}<br>
      {{ form_widget(substanceForm.type) }}<br>
      {{ form_label(substanceForm.quantityType) }}<br>
      {{ form_widget(substanceForm.quantityType) }}<br>
      {{ form_label(substanceForm.price) }}<br>
      {{ form_widget(substanceForm.price) }}<br>
      {{ form_label(substanceForm.quantity) }}<br>
      {{ form_widget(substanceForm.quantity) }}<br>
      <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
      {{ form_end(substanceForm) }}
 
      
{%endblock %}
{% block sidebar%}
<h3>
<em>Actuellement, les produits listés sont :</em></h3>

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
  {% endblock %}", "page/autre-substance.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/page/autre-substance.html.twig");
    }
}
