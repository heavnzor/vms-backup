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

/* page/home.html.twig */
class __TwigTemplate_48a84c4bde84665dd7b1a5e97076ea372e57db187fa31820f48bb846334ccc36 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/home.html.twig"));

        $this->parent = $this->loadTemplate("index.html.twig", "page/home.html.twig", 1);
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
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "content", [], "any", false, false, false, 3);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 6
        echo "
  
  ";
        // line 8
        if (array_key_exists("substances", $context)) {
            echo "<h3>Vous consommez :</h3><br>
";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
                // line 10
                echo "    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "name", [], "any", false, false, false, 10), "html", null, true);
                echo "
         ";
                // line 11
                if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 11) === true)) {
                    echo "<img src='../pics/icons8-happy_skull.svg' width='30px'>";
                }
                echo "<br>

    <a href='add-substance?id=";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo "'><img src='../pics/icons8-add.png' width='30px'></a>
    ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "quantity", [], "any", false, false, false, 14), "html", null, true);
                echo "
    <a href='less-substance?id=";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 15), "html", null, true);
                echo "'><img src='../pics/icons8-minus.png' width='30px'></a><br>
    <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
    <a href='delete-substance?id=";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 17), "html", null, true);
                echo "'><img src='../pics/icons8-delete.png' width='30px'></a>
    ";
                // line 18
                if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 18) === false)) {
                    // line 19
                    echo "<br> <span class=\"badge badge-danger\">Considérez vous cette <br> substance comme nocive ?</span> 
     <a href='nocivite-substance?id=";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 20), "html", null, true);
                    echo "'><img src='../pics/icons8-skull_heart.png' width='30px'></a>
     ";
                }
                // line 22
                echo "  </p>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  
  
  ";
        }
        // line 25
        echo "<br>
  ";
        // line 26
        if (array_key_exists("user", $context)) {
            // line 27
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "pseudonyme", [], "any", false, false, false, 27), "html", null, true);
            echo ", commencez dès à présent à ajouter les substances que vous consommez.

 ";
        } else {
            // line 30
            echo " <p class='alert alert-danger' role='alert'>Bonjour cher inconnu, <a href=\"register\" style=\"color:black !important;\">inscrivez vous</a> ou <a href=\"login\" style=\"color:black !important;\">connectez vous</a> pour avoir accès à toutes les pages.</p>
 ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 30,  160 => 27,  158 => 26,  155 => 25,  150 => 23,  143 => 22,  138 => 20,  135 => 19,  133 => 18,  129 => 17,  124 => 15,  120 => 14,  116 => 13,  109 => 11,  104 => 10,  100 => 9,  96 => 8,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}
{%block main %}
  {{page.content|raw}}
{% endblock %}
{%block sidebar %}

  
  {%if substances is defined %}<h3>Vous consommez :</h3><br>
{%for substance in substances%}
    {{substance.name}}
         {% if substance.nocivity is same as(true) %}<img src='../pics/icons8-happy_skull.svg' width='30px'>{% endif %}<br>

    <a href='add-substance?id={{substance.id}}'><img src='../pics/icons8-add.png' width='30px'></a>
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
  
  {%endif%}<br>
  {%if user is defined%}
 {{user.pseudonyme}}, commencez dès à présent à ajouter les substances que vous consommez.

 {%else %}
 <p class='alert alert-danger' role='alert'>Bonjour cher inconnu, <a href=\"register\" style=\"color:black !important;\">inscrivez vous</a> ou <a href=\"login\" style=\"color:black !important;\">connectez vous</a> pour avoir accès à toutes les pages.</p>
 {%endif%}
{% endblock %}
", "page/home.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/page/home.html.twig");
    }
}
