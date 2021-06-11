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
        return "sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/temoignages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/temoignages.html.twig"));

        $this->parent = $this->loadTemplate("sidebar.html.twig", "page/temoignages.html.twig", 1);
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
        if (array_key_exists("user", $context)) {
            // line 7
            echo "    ";
            if (((isset($context["moreThanOne"]) || array_key_exists("moreThanOne", $context) ? $context["moreThanOne"] : (function () { throw new RuntimeError('Variable "moreThanOne" does not exist.', 7, $this->source); })()) === true)) {
                // line 8
                echo "      Merci pour votre commentaire
      ";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "pseudonyme", [], "any", false, false, false, 9), "html", null, true);
                echo ", le nombre de commentaire autorisé par utilisateur est de : 1, si vous voulez nous en dire plus écrivez nous un
      <a href='mailto:webmaster@viamedo.fr'>e-mail</a>
      ";
            } else {
                // line 12
                echo "      ";
                if (array_key_exists("commentForm", $context)) {
                    // line 13
                    echo "        Vous désirez nous dire un petit mot ? Avec grand plaisir, n'hésitez pas !<br><br>

        <form action='temoignages' method='post'>
          ";
                    // line 16
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), 'label');
                    echo "<br>
          ";
                    // line 17
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), 'widget');
                    echo "<br>
          ";
                    // line 18
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 18, $this->source); })()), "message", [], "any", false, false, false, 18), 'label');
                    echo "<br>
          ";
                    // line 19
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 19, $this->source); })()), "message", [], "any", false, false, false, 19), 'widget');
                    echo "<br><br>
          <button type=\"submit\" class=\"btn btn-primary\">Envoyer !</button>
          ";
                    // line 21
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 21, $this->source); })()), 'form_end');
                    echo "<br><br>
        ";
                }
                // line 23
                echo "      ";
            }
            // line 24
            echo "      ";
            if (array_key_exists("comment", $context)) {
                // line 25
                echo "        ";
                if (((isset($context["moreThanOne"]) || array_key_exists("moreThanOne", $context) ? $context["moreThanOne"] : (function () { throw new RuntimeError('Variable "moreThanOne" does not exist.', 25, $this->source); })()) === false)) {
                    // line 26
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "pseudonyme", [], "any", false, false, false, 26), "html", null, true);
                    echo "
          nous avons ajouté le commentaire que vous nous avez écrit :
          ";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 28, $this->source); })()), "message", [], "any", false, false, false, 28), "html", null, true);
                    echo "
          ";
                }
                // line 30
                echo "        ";
            }
            // line 31
            echo "      ";
        }
        // line 32
        echo "      <h3>Ils nous ont déjà écrit :
      </h3>
      ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 35
            echo "        <em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "
          -
          ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 37), "html", null, true);
            echo "</em>
        <br>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "message", [], "any", false, false, false, 38), "html", null, true);
            echo "</br>
        Date :
        ";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 40), "d-m-Y H:i:s"), "html", null, true);
            echo "<br><br>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 46
        echo "      ";
        if (array_key_exists("user", $context)) {
            // line 47
            echo "        <h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "pseudonyme", [], "any", false, false, false, 47), "html", null, true);
            echo "
          , petit rappel sur vos consommations actuelles :
        </h3><br><br>
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
                // line 51
                echo "          ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "name", [], "any", false, false, false, 51), "html", null, true);
                echo "
          ";
                // line 52
                if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 52) === true)) {
                    echo "<img src='../pics/icons8-happy_skull.svg' width='30px'>";
                }
                echo "<br>

          <a href='add-substance?id=";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 54), "html", null, true);
                echo "'><img src='../pics/icons8-add2.png' width='30px'></a>
          ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "quantity", [], "any", false, false, false, 55), "html", null, true);
                echo "
          <a href='less-substance?id=";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 56), "html", null, true);
                echo "'><img src='../pics/icons8-minus.png' width='30px'></a><br>
          <span class=\"badge badge-danger\">Voulez-vous le supprimer ?</span>
          <a href='delete-substance?id=";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 58), "html", null, true);
                echo "'><img src='../pics/icons8-delete.png' width='30px'></a>
          ";
                // line 59
                if ((twig_get_attribute($this->env, $this->source, $context["substance"], "nocivity", [], "any", false, false, false, 59) === false)) {
                    // line 60
                    echo "            <br>
            <span class=\"badge badge-danger\">Considérez vous cette
              <br>
              substance comme nocive ?</span>
            <a href='nocivite-substance?id=";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "id", [], "any", false, false, false, 64), "html", null, true);
                    echo "'><img src='../pics/icons8-skull_heart.png' width='30px'></a>
            ";
                }
                // line 66
                echo "          </p>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
          ";
        } else {
            // line 70
            echo "          <p class='alert alert-danger' role='alert'>Bonjour sombre inconnu,
            <a href=\"register\" style=\"color:black !important;\">inscrivez vous</a>
            ou
            <a href=\"login\" style=\"color:black !important;\">connectez vous</a>
            pour avoir accès à toutes les pages.</p>
          ";
        }
        // line 76
        echo "        ";
        
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
        return array (  275 => 76,  267 => 70,  263 => 68,  256 => 66,  251 => 64,  245 => 60,  243 => 59,  239 => 58,  234 => 56,  230 => 55,  226 => 54,  219 => 52,  214 => 51,  210 => 50,  203 => 47,  200 => 46,  190 => 45,  179 => 42,  171 => 40,  166 => 38,  162 => 37,  156 => 35,  152 => 34,  148 => 32,  145 => 31,  142 => 30,  137 => 28,  131 => 26,  128 => 25,  125 => 24,  122 => 23,  117 => 21,  112 => 19,  108 => 18,  104 => 17,  100 => 16,  95 => 13,  92 => 12,  86 => 9,  83 => 8,  80 => 7,  78 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'sidebar.html.twig' %}

{% block main %}
  <h2>{{ page.title }}</h2>
  <br>{{page.content|raw }}<br><br>
  {%if user is defined%}
    {%if moreThanOne is same as(true) %}
      Merci pour votre commentaire
      {{user.pseudonyme}}, le nombre de commentaire autorisé par utilisateur est de : 1, si vous voulez nous en dire plus écrivez nous un
      <a href='mailto:webmaster@viamedo.fr'>e-mail</a>
      {%else%}
      {%if commentForm is defined %}
        Vous désirez nous dire un petit mot ? Avec grand plaisir, n'hésitez pas !<br><br>

        <form action='temoignages' method='post'>
          {{ form_label(commentForm.title) }}<br>
          {{ form_widget(commentForm.title) }}<br>
          {{ form_label(commentForm.message) }}<br>
          {{ form_widget(commentForm.message) }}<br><br>
          <button type=\"submit\" class=\"btn btn-primary\">Envoyer !</button>
          {{ form_end(commentForm) }}<br><br>
        {% endif %}
      {% endif %}
      {%if comment is defined%}
        {% if moreThanOne is same as(false)%}
          {{user.pseudonyme}}
          nous avons ajouté le commentaire que vous nous avez écrit :
          {{comment.message}}
          {%endif%}
        {%endif %}
      {%endif %}
      <h3>Ils nous ont déjà écrit :
      </h3>
      {%for comment in comments %}
        <em>{{comment.title}}
          -
          {{comment.author}}</em>
        <br>{{comment.message}}</br>
        Date :
        {{comment.createdAt|date('d-m-Y H:i:s')}}<br><br>
      {%endfor %}

    {% endblock %}

    {%block sidebar %}
      {%if user is defined%}
        <h3>{{ user.pseudonyme}}
          , petit rappel sur vos consommations actuelles :
        </h3><br><br>
        {%for substance in substances%}
          {{substance.name}}
          {% if substance.nocivity is same as(true) %}<img src='../pics/icons8-happy_skull.svg' width='30px'>{% endif %}<br>

          <a href='add-substance?id={{substance.id}}'><img src='../pics/icons8-add2.png' width='30px'></a>
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

          {%else%}
          <p class='alert alert-danger' role='alert'>Bonjour sombre inconnu,
            <a href=\"register\" style=\"color:black !important;\">inscrivez vous</a>
            ou
            <a href=\"login\" style=\"color:black !important;\">connectez vous</a>
            pour avoir accès à toutes les pages.</p>
          {%endif%}
        {%endblock %}
", "page/temoignages.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/page/temoignages.html.twig");
    }
}
