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

/* page/money.html.twig */
class __TwigTemplate_ede18068bb049ebd18865422da0a2e585c4f01cbc60a67f098227bedea9347df extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/money.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/money.html.twig"));

        $this->parent = $this->loadTemplate("index.html.twig", "page/money.html.twig", 1);
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
        echo "
  ";
        // line 6
        if (array_key_exists("substance", $context)) {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["substance"]) || array_key_exists("substance", $context) ? $context["substance"] : (function () { throw new RuntimeError('Variable "substance" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "
    a bien été supprimé de votre liste,
    ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "pseudonyme", [], "any", false, false, false, 9), "html", null, true);
            echo "
  ";
        }
        // line 11
        echo "  ";
        $context["price"] = 0;
        // line 12
        echo "  ";
        if (array_key_exists("substances", $context)) {
            // line 13
            echo "
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
                // line 15
                echo "      ";
                $context["tempprice"] = twig_number_format_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["substance"], "price", [], "any", false, false, false, 15), ["," => "."]), 2, ".");
                // line 16
                echo "      ";
                $context["price"] = (twig_number_format_filter($this->env, (isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 16, $this->source); })()), 2, ".") + (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 16, $this->source); })()));
                // line 17
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["substance"], "type", [], "any", false, false, false, 17) === "medicament")) {
                    // line 18
                    echo "      ";
                    $context["price"] = ((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 18, $this->source); })()) / 14);
                    // line 19
                    echo "      ";
                    $context["tempprice"] = ((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 19, $this->source); })()) / 14);
                    // line 20
                    echo "
    ";
                }
                // line 22
                echo "      <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "name", [], "any", false, false, false, 22), "html", null, true);
                echo "
        :</strong>
      <br>
      ";
                // line 25
                $context["price"] = twig_replace_filter((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 25, $this->source); })()), ["," => "."]);
                // line 26
                echo "      ";
                echo twig_escape_filter($this->env, (isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 26, $this->source); })()), "html", null, true);
                echo "
      € par jour * . Voyons maintenant si nous multiplions par 7 pour savoir combien vous coûte une semaine ...
      ";
                // line 28
                echo twig_escape_filter($this->env, ((isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 28, $this->source); })()) * 7), "html", null, true);
                echo "€ !<br>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "
    <strong>L'addition s'il vous plait !</strong><br>

    ";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "€ par jour soit
    ";
            // line 34
            echo twig_escape_filter($this->env, ((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 34, $this->source); })()) * 7), "html", null, true);
            echo "€ par semaine soit
    ";
            // line 35
            echo twig_escape_filter($this->env, ((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 35, $this->source); })()) * 30), "html", null, true);
            echo "€ par mois soit
    ";
            // line 36
            echo twig_escape_filter($this->env, ((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 36, $this->source); })()) * 365), "html", null, true);
            echo "€ par an!
    ";
        }
        // line 38
        echo "
    <br><br> * Ces données sont données à titre approximatif, il ne s'agit pas de vos dépenses exactes en la matière, en particulier pour les médicaments.<br>
    En effet, le calcul prend en compte qu'une boite équivaut à une moyenne de 14 comprimés.
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 44
        echo "    ";
        if (array_key_exists("user", $context)) {
            // line 45
            echo "      ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "pseudonyme", [], "any", false, false, false, 45), "html", null, true);
            echo ", calculons ensemble combien vous coute toutes les substances que vous consommez.<br><hr><br>Vous savez combien vous fumez exactement ? Indiquez ici le nombre de cigarettes ou de joints que vous fumez par jour:<br><hr><br>
      <form action='calcul' method='post'><input type='number' name=\"number\"><br><br>Joints<br><input type=\"radio\" name='type' value='cannabis'><br><br>Cigarettes<br><input type=\"radio\" name='type' value='tabac'><br><br><input type='submit' class='btn btn-primary' value='calculer'></form><br>
      ";
            // line 47
            if (array_key_exists("conso", $context)) {
                // line 48
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 48, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
                    // line 49
                    echo "         
            ";
                    // line 50
                    if ((twig_get_attribute($this->env, $this->source, $context["substance"], "type", [], "any", false, false, false, 50) === "cigarette")) {
                        // line 51
                        echo "              ";
                        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 51, $this->source); })()) === "tabac")) {
                            // line 52
                            echo "                ";
                            $context["tempprice"] = twig_number_format_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["substance"], "price", [], "any", false, false, false, 52), ["," => "."]), 2, ".");
                            // line 53
                            echo "                Soit un paquet est égal à 20 cigarettes, vous en fumez
                ";
                            // line 54
                            echo twig_escape_filter($this->env, (isset($context["conso"]) || array_key_exists("conso", $context) ? $context["conso"] : (function () { throw new RuntimeError('Variable "conso" does not exist.', 54, $this->source); })()), "html", null, true);
                            echo "
                donc cela vous coûte
                ";
                            // line 56
                            $context["tempprice"] = ((isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 56, $this->source); })()) / 20);
                            // line 57
                            echo "                ";
                            $context["tempprice"] = ((isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 57, $this->source); })()) * (isset($context["conso"]) || array_key_exists("conso", $context) ? $context["conso"] : (function () { throw new RuntimeError('Variable "conso" does not exist.', 57, $this->source); })()));
                            // line 58
                            echo "                ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 58, $this->source); })()), 2, "."), "html", null, true);
                            echo "€ par jour...
                ";
                        }
                        // line 60
                        echo "                ";
                    }
                    // line 61
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 62, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
                    // line 63
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["substance"], "type", [], "any", false, false, false, 63) === "cannabis")) {
                        // line 64
                        echo "                    ";
                        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 64, $this->source); })()) === "cannabis")) {
                            // line 65
                            echo "                      ";
                            $context["tempprice"] = twig_number_format_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["substance"], "price", [], "any", false, false, false, 65), ["," => "."]), 2, ".");
                            // line 66
                            echo "                      Soit un joint est égal à 0,5 gramme, vous en fumez
                      ";
                            // line 67
                            echo twig_escape_filter($this->env, (isset($context["conso"]) || array_key_exists("conso", $context) ? $context["conso"] : (function () { throw new RuntimeError('Variable "conso" does not exist.', 67, $this->source); })()), "html", null, true);
                            echo "
                      donc cela vous coûte
                      ";
                            // line 69
                            $context["tempprice"] = (((isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 69, $this->source); })()) * (isset($context["conso"]) || array_key_exists("conso", $context) ? $context["conso"] : (function () { throw new RuntimeError('Variable "conso" does not exist.', 69, $this->source); })())) * 0.5);
                            // line 70
                            echo "                      ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 70, $this->source); })()), 2, "."), "html", null, true);
                            echo "€ par jour...
                      ";
                        }
                        // line 72
                        echo "                      ";
                    }
                    // line 73
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "
                      ";
            }
            // line 76
            echo "                      ";
        }
        // line 77
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/money.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 77,  289 => 76,  285 => 74,  279 => 73,  276 => 72,  270 => 70,  268 => 69,  263 => 67,  260 => 66,  257 => 65,  254 => 64,  251 => 63,  246 => 62,  240 => 61,  237 => 60,  231 => 58,  228 => 57,  226 => 56,  221 => 54,  218 => 53,  215 => 52,  212 => 51,  210 => 50,  207 => 49,  202 => 48,  200 => 47,  194 => 45,  191 => 44,  181 => 43,  168 => 38,  163 => 36,  159 => 35,  155 => 34,  151 => 33,  146 => 30,  138 => 28,  132 => 26,  130 => 25,  123 => 22,  119 => 20,  116 => 19,  113 => 18,  110 => 17,  107 => 16,  104 => 15,  100 => 14,  97 => 13,  94 => 12,  91 => 11,  86 => 9,  80 => 7,  78 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}

{% block main %}
  <h2>{{ page.title }}</h2>
  <br>{{page.content|raw}}
  {%if substance is defined %}
    {{substance}}
    a bien été supprimé de votre liste,
    {{user.pseudonyme}}
  {%endif %}
  {%set price = 0%}
  {%if substances is defined %}

    {%for substance in substances%}
      {%set tempprice = substance.price|replace({',': '.'})|number_format(2,'.')%}
      {%set price = tempprice|number_format(2, '.') + price %}
      {%if substance.type is same as 'medicament' %}
      {% set price = price / 14 %}
      {% set tempprice = price / 14 %}

    {%endif%}
      <strong>{{substance.name}}
        :</strong>
      <br>
      {%set price = price|replace({',': '.'})%}
      {{tempprice}}
      € par jour * . Voyons maintenant si nous multiplions par 7 pour savoir combien vous coûte une semaine ...
      {{tempprice * 7 }}€ !<br>
    {%endfor %}

    <strong>L'addition s'il vous plait !</strong><br>

    {{price}}€ par jour soit
    {{price * 7 }}€ par semaine soit
    {{price * 30 }}€ par mois soit
    {{price * 365}}€ par an!
    {%endif%}

    <br><br> * Ces données sont données à titre approximatif, il ne s'agit pas de vos dépenses exactes en la matière, en particulier pour les médicaments.<br>
    En effet, le calcul prend en compte qu'une boite équivaut à une moyenne de 14 comprimés.
  {% endblock %}

  {%block sidebar %}
    {%if user is defined%}
      {{user.pseudonyme}}, calculons ensemble combien vous coute toutes les substances que vous consommez.<br><hr><br>Vous savez combien vous fumez exactement ? Indiquez ici le nombre de cigarettes ou de joints que vous fumez par jour:<br><hr><br>
      <form action='calcul' method='post'><input type='number' name=\"number\"><br><br>Joints<br><input type=\"radio\" name='type' value='cannabis'><br><br>Cigarettes<br><input type=\"radio\" name='type' value='tabac'><br><br><input type='submit' class='btn btn-primary' value='calculer'></form><br>
      {%if conso is defined %}
        {%for substance in substances%}
         
            {%if substance.type is same as 'cigarette'%}
              {%if type is same as 'tabac'%}
                {%set tempprice = substance.price|replace({',': '.'})|number_format(2,'.')%}
                Soit un paquet est égal à 20 cigarettes, vous en fumez
                {{conso}}
                donc cela vous coûte
                {% set tempprice = tempprice / 20%}
                {%set tempprice = tempprice * conso%}
                {{tempprice|number_format(2,'.')}}€ par jour...
                {%endif%}
                {%endif%}
                {%endfor%}
                {%for substance in substances%}
                  {%if substance.type is same as 'cannabis'%}
                    {%if type is same as 'cannabis'%}
                      {%set tempprice = substance.price|replace({',': '.'})|number_format(2,'.')%}
                      Soit un joint est égal à 0,5 gramme, vous en fumez
                      {{conso}}
                      donc cela vous coûte
                      {% set tempprice = tempprice * conso * 0.5 %}
                      {{tempprice|number_format(2,'.')}}€ par jour...
                      {%endif%}
                      {%endif%}
                      {%endfor%}

                      {%endif%}
                      {%endif%}

                    {%endblock %}
", "page/money.html.twig", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/page/money.html.twig");
    }
}
