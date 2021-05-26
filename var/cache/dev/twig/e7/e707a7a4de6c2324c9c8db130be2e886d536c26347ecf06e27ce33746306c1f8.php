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
                echo "      <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["substance"], "name", [], "any", false, false, false, 17), "html", null, true);
                echo " :</strong>
      <br>
      ";
                // line 19
                $context["price"] = twig_replace_filter((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 19, $this->source); })()), ["," => "."]);
                // line 20
                echo "      ";
                echo twig_escape_filter($this->env, (isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "
      € par jour. Voyons maintenant si nous multiplions par 7 pour savoir combien vous coûte une semaine ...
      ";
                // line 22
                echo twig_escape_filter($this->env, ((isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 22, $this->source); })()) * 7), "html", null, true);
                echo "€ !<br>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
    <strong>L'addition s'il vous plait !</strong><br>

    ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "€ par jour soit
    ";
            // line 28
            echo twig_escape_filter($this->env, ((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 28, $this->source); })()) * 7), "html", null, true);
            echo "€ par semaine soit
    ";
            // line 29
            echo twig_escape_filter($this->env, ((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 29, $this->source); })()) * 30), "html", null, true);
            echo "€ par mois soit
    ";
            // line 30
            echo twig_escape_filter($this->env, ((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 30, $this->source); })()) * 365), "html", null, true);
            echo "€ par an!
    ";
        }
        // line 32
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "    ";
        if (array_key_exists("user", $context)) {
            // line 36
            echo "      ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "pseudonyme", [], "any", false, false, false, 36), "html", null, true);
            echo ", calculons ensemble combien vous coute toutes les substances que vous consommez.<br><hr><br>Vous savez combien vous fumez exactement ? Indiquez ici le nombre de cigarettes ou de joints que vous fumez par jour:<br><hr><br>
      <form action='calcul' method='post'><input type='number' name=\"number\"><br><br>Joints<br><input type=\"radio\" name='type' value='cannabis'><br><br>Cigarettes<br><input type=\"radio\" name='type' value='tabac'><br><br><input type='submit' class='btn btn-primary' value='calculer'></form><br>
      ";
            // line 38
            if (array_key_exists("conso", $context)) {
                // line 39
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 39, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
                    // line 40
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["substance"], "type", [], "any", false, false, false, 40) === "cigarette")) {
                        // line 41
                        echo "            ";
                        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 41, $this->source); })()) === "tabac")) {
                            // line 42
                            echo "              ";
                            $context["tempprice"] = twig_number_format_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["substance"], "price", [], "any", false, false, false, 42), ["," => "."]), 2, ".");
                            // line 43
                            echo "              Soit un paquet est égal à 20 cigarettes, vous en fumez
              ";
                            // line 44
                            echo twig_escape_filter($this->env, (isset($context["conso"]) || array_key_exists("conso", $context) ? $context["conso"] : (function () { throw new RuntimeError('Variable "conso" does not exist.', 44, $this->source); })()), "html", null, true);
                            echo "
              donc cela vous coûte
              ";
                            // line 46
                            $context["tempprice"] = ((isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 46, $this->source); })()) / 20);
                            // line 47
                            echo "              ";
                            $context["tempprice"] = ((isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 47, $this->source); })()) * (isset($context["conso"]) || array_key_exists("conso", $context) ? $context["conso"] : (function () { throw new RuntimeError('Variable "conso" does not exist.', 47, $this->source); })()));
                            // line 48
                            echo "              ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 48, $this->source); })()), 2, "."), "html", null, true);
                            echo "€ par jour...
              ";
                        }
                        // line 50
                        echo "              ";
                    }
                    // line 51
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["substances"]) || array_key_exists("substances", $context) ? $context["substances"] : (function () { throw new RuntimeError('Variable "substances" does not exist.', 52, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["substance"]) {
                    // line 53
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["substance"], "type", [], "any", false, false, false, 53) === "cannabis")) {
                        // line 54
                        echo "                  ";
                        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 54, $this->source); })()) === "cannabis")) {
                            // line 55
                            echo "                    ";
                            $context["tempprice"] = twig_number_format_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["substance"], "price", [], "any", false, false, false, 55), ["," => "."]), 2, ".");
                            // line 56
                            echo "                    Soit un joint est égal à 0,5 gramme, vous en fumez
                    ";
                            // line 57
                            echo twig_escape_filter($this->env, (isset($context["conso"]) || array_key_exists("conso", $context) ? $context["conso"] : (function () { throw new RuntimeError('Variable "conso" does not exist.', 57, $this->source); })()), "html", null, true);
                            echo "
                    donc cela vous coûte
                    ";
                            // line 59
                            $context["tempprice"] = (((isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 59, $this->source); })()) * (isset($context["conso"]) || array_key_exists("conso", $context) ? $context["conso"] : (function () { throw new RuntimeError('Variable "conso" does not exist.', 59, $this->source); })())) * 0.5);
                            // line 60
                            echo "                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tempprice"]) || array_key_exists("tempprice", $context) ? $context["tempprice"] : (function () { throw new RuntimeError('Variable "tempprice" does not exist.', 60, $this->source); })()), 2, "."), "html", null, true);
                            echo "€ par jour...
                    ";
                        }
                        // line 62
                        echo "                    ";
                    }
                    // line 63
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substance'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "
                    ";
            }
            // line 66
            echo "                    ";
        }
        // line 67
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
        return array (  273 => 67,  270 => 66,  266 => 64,  260 => 63,  257 => 62,  251 => 60,  249 => 59,  244 => 57,  241 => 56,  238 => 55,  235 => 54,  232 => 53,  227 => 52,  221 => 51,  218 => 50,  212 => 48,  209 => 47,  207 => 46,  202 => 44,  199 => 43,  196 => 42,  193 => 41,  190 => 40,  185 => 39,  183 => 38,  177 => 36,  174 => 35,  164 => 34,  154 => 32,  149 => 30,  145 => 29,  141 => 28,  137 => 27,  132 => 24,  124 => 22,  118 => 20,  116 => 19,  110 => 17,  107 => 16,  104 => 15,  100 => 14,  97 => 13,  94 => 12,  91 => 11,  86 => 9,  80 => 7,  78 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
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
      <strong>{{substance.name}} :</strong>
      <br>
      {%set price = price|replace({',': '.'})%}
      {{tempprice}}
      € par jour. Voyons maintenant si nous multiplions par 7 pour savoir combien vous coûte une semaine ...
      {{tempprice * 7 }}€ !<br>
    {%endfor %}

    <strong>L'addition s'il vous plait !</strong><br>

    {{price}}€ par jour soit
    {{price * 7 }}€ par semaine soit
    {{price * 30 }}€ par mois soit
    {{price * 365}}€ par an!
    {%endif%}
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