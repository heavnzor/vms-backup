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

/* page/goals.html.twig */
class __TwigTemplate_95597121ea78a380bdaee1c4323aacbfb6f336f23ae657463584d18a3dbdf743 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/goals.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/goals.html.twig"));

        $this->parent = $this->loadTemplate("sidebar.html.twig", "page/goals.html.twig", 1);
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
  <h3>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "pseudonyme", [], "any", false, false, false, 7), "html", null, true);
        echo "
    , petit rappel sur vos consommations actuelles :
</h3><br><br>
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
            // line 11
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "
  ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 12) === true)) {
                echo "<img src='../pics/icons8-happy_skull.svg' width='30px'>";
            }
            echo "<br>

    <a href='add-substance?id=";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "'><img src='../pics/icons8-add.png' width='30px'></a>
  ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "quantity", [], "any", false, false, false, 15), "html", null, true);
            echo "
  <a href='less-substance?id=";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "'><img src='../pics/icons8-minus.png' width='30px'></a><br>
  <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
  <a href='delete-substance?id=";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "'><img src='../pics/icons8-delete.png' width='30px'></a>
  ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 19) === false)) {
                // line 20
                echo "    <br>
    <span class=\"badge badge-danger\">Considérez vous cette
      <br>
      substance comme nocive ?</span>
    <a href='nocivite-substance?id=";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "'><img src='../pics/icons8-skull_heart.png' width='30px'></a>
    ";
            }
            // line 26
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/goals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 28,  147 => 26,  142 => 24,  136 => 20,  134 => 19,  130 => 18,  125 => 16,  121 => 15,  117 => 14,  110 => 12,  105 => 11,  101 => 10,  95 => 7,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'sidebar.html.twig' %}
{%block main %}
  {{page.content|raw}}
{% endblock %}
{%block sidebar %}

  <h3>{{ user.pseudonyme}}
    , petit rappel sur vos consommations actuelles :
</h3><br><br>
{%for substance in substances%}
  {{substance.name}}
  {% if substance.nocivity is same as(true) %}<img src='../pics/icons8-happy_skull.svg' width='30px'>{% endif %}<br>

    <a href='add-substance?id={{substance.id}}'><img src='../pics/icons8-add.png' width='30px'></a>
  {{substance.quantity}}
  <a href='less-substance?id={{substance.id}}'><img src='../pics/icons8-minus.png' width='30px'></a><br>
  <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
  <a href='delete-substance?id={{substance.id}}'><img src='../pics/icons8-delete.png' width='30px'></a>
  {%if substance.nocivity is same as(false) %}
    <br>
    <span class=\"badge badge-danger\">Considérez vous cette
      <br>
      substance comme nocive ?</span>
    <a href='nocivite-substance?id={{substance.id}}'><img src='../pics/icons8-skull_heart.png' width='30px'></a>
    {%endif%}
</p>
    {%endfor%}
 {%endblock %}
", "page/goals.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/page/goals.html.twig");
    }
}
