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

/* page/temoignages.html.twig */
class __TwigTemplate_c54bfdbb6614e709e4bdbd6ff1bbab4cc7a852e7d5bfa2bf1bef6eceefd93be9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/temoignages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/temoignages.html.twig"));

        $this->parent = $this->loadTemplate("index.html.twig", "page/temoignages.html.twig", 1);
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
        if (array_key_exists("commentForm", $context)) {
            // line 7
            echo "    Vous désirez nous dire un petit mot ? Avec grand plaisir, n'hésitez pas !
    <form action='temoignages' method='post'>
      ";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), 'row');
            echo "<br>
      ";
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 10, $this->source); })()), "message", [], "any", false, false, false, 10), 'row');
            echo "<br><br>
      <button type=\"submit\" class=\"btn btn-primary\">Envoyer !</button>
      ";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 12, $this->source); })()), 'form_end');
            echo "
      Ils nous ont déjà écrit : 
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 15
                echo "      <em>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, false, 15), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 15), "html", null, true);
                echo "</em>
      <br>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "message", [], "any", false, false, false, 16), "html", null, true);
                echo "</br>
       Date : ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 17), "html", null, true);
                echo "<br><br>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      ";
        } else {
            // line 20
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 21
                echo "      <em>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, false, 21), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 21), "html", null, true);
                echo "</em>
      <br>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "message", [], "any", false, false, false, 22), "html", null, true);
                echo "</br>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "  ";
        
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
        echo "    ";
        if (array_key_exists("comment", $context)) {
            // line 29
            echo "      ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "pseudonyme", [], "any", false, false, false, 29), "html", null, true);
            echo "
      nous avons ajouté le commentaire que vous nous avez écrit :
      ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 31, $this->source); })()), "message", [], "any", false, false, false, 31), "html", null, true);
            echo "
      ";
        } else {
            // line 33
            echo "      ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "pseudonyme", [], "any", false, false, false, 33), "html", null, true);
            echo ", un petit message ça fait toujours plaisir à recevoir alors allez-y :-)
    ";
        }
        // line 35
        echo "    <br><br>
    <em>Actuellement, vos produits listés sont :</em>

    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
            // line 39
            echo "      <p class=\"\">
        ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "
        ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 41) === true)) {
                echo "<img src='../pics/icons8-happy_skull.svg' width='30px'>";
            }
            echo "<br>

        <a href='add-substance?id=";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "'><img src='../pics/icons8-add.svg' width='30px'></a>
        ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "quantity", [], "any", false, false, false, 44), "html", null, true);
            echo "
        <a href='less-substance?id=";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "'><img src='../pics/icons8-minus.svg' width='30px'></a><br>
        <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
        <a href='delete-substance?id=";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "'><img src='../pics/icons8-delete.svg' width='30px'></a>
        ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 48) === false)) {
                // line 49
                echo "          <br>
          <span class=\"badge badge-danger\">Considérez vous cette
            <br>
            substance comme nocive ?</span>
          <a href='nocivite-substance?id=";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "'><img src='../pics/icons8-skull_heart.svg' width='30px'></a>
          ";
            }
            // line 55
            echo "        </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/temoignages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 57,  240 => 55,  235 => 53,  229 => 49,  227 => 48,  223 => 47,  218 => 45,  214 => 44,  210 => 43,  203 => 41,  199 => 40,  196 => 39,  192 => 38,  187 => 35,  181 => 33,  176 => 31,  170 => 29,  167 => 28,  157 => 27,  147 => 25,  144 => 24,  136 => 22,  129 => 21,  124 => 20,  121 => 19,  113 => 17,  109 => 16,  102 => 15,  98 => 14,  93 => 12,  88 => 10,  84 => 9,  80 => 7,  78 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}

{% block main %}
  <h2>{{ page.title }}</h2>
  <br>{{page.content|raw }}<br><br>
  {%if commentForm is defined %}
    Vous désirez nous dire un petit mot ? Avec grand plaisir, n'hésitez pas !
    <form action='temoignages' method='post'>
      {{ form_row(commentForm.title) }}<br>
      {{ form_row(commentForm.message) }}<br><br>
      <button type=\"submit\" class=\"btn btn-primary\">Envoyer !</button>
      {{ form_end(commentForm) }}
      Ils nous ont déjà écrit : 
        {%for comment in comments %}
      <em>{{comment.title}} - {{comment.user}}</em>
      <br>{{comment.message}}</br>
       Date : {{comment.createdAt}}<br><br>
       {%endfor %}
      {%else%}
      {%for comment in comments %}
      <em>{{comment.title}} - {{comment.user}}</em>
      <br>{{comment.message}}</br>
       {%endfor %}
    {% endif %}
  {% endblock %}

  {%block sidebar %}
    {%if comment is defined%}
      {{user.pseudonyme}}
      nous avons ajouté le commentaire que vous nous avez écrit :
      {{comment.message}}
      {%else%}
      {{user.pseudonyme}}, un petit message ça fait toujours plaisir à recevoir alors allez-y :-)
    {%endif %}
    <br><br>
    <em>Actuellement, vos produits listés sont :</em>

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
          <br>
          <span class=\"badge badge-danger\">Considérez vous cette
            <br>
            substance comme nocive ?</span>
          <a href='nocivite-substance?id={{substance.id}}'><img src='../pics/icons8-skull_heart.svg' width='30px'></a>
          {%endif%}
        </p>
        {%endfor%}
      {%endblock %}
", "page/temoignages.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/page/temoignages.html.twig");
    }
}
