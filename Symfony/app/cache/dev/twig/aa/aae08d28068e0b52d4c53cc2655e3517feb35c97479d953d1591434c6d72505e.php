<?php

/* HopitalAdministrationBundle:Default:service.html.twig */
class __TwigTemplate_b747a82851e1bef0220047c7df863847a26c2fd487de6e040d9564779e322460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:service.html.twig", 1);
        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HopitalAdministrationBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbb25379f60e9790cb29a1af9a4c187a00ac3e6a252a35cccfebdf4b1f5da768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb25379f60e9790cb29a1af9a4c187a00ac3e6a252a35cccfebdf4b1f5da768->enter($__internal_fbb25379f60e9790cb29a1af9a4c187a00ac3e6a252a35cccfebdf4b1f5da768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:service.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbb25379f60e9790cb29a1af9a4c187a00ac3e6a252a35cccfebdf4b1f5da768->leave($__internal_fbb25379f60e9790cb29a1af9a4c187a00ac3e6a252a35cccfebdf4b1f5da768_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_90208b8c44e3d733b28055417c5f968c2bad6b2c40f406240d774670817c809b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90208b8c44e3d733b28055417c5f968c2bad6b2c40f406240d774670817c809b->enter($__internal_90208b8c44e3d733b28055417c5f968c2bad6b2c40f406240d774670817c809b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Les services</h2>
<table>
<tr><th>Service</th></tr>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesServices"]) || array_key_exists("lesServices", $context) ? $context["lesServices"] : (function () { throw new Twig_Error_Runtime('Variable "lesServices" does not exist.', 6, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 7
            echo "<tr>
\t<td>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "getLibelle", array(), "method"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_modifService", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Modifier</a></td>
\t<td><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_suppService", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Supprimer</a></td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "<tr><td>Pas de services.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</table>
";
        
        $__internal_90208b8c44e3d733b28055417c5f968c2bad6b2c40f406240d774670817c809b->leave($__internal_90208b8c44e3d733b28055417c5f968c2bad6b2c40f406240d774670817c809b_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  69 => 13,  61 => 10,  57 => 9,  53 => 8,  50 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}
{% block corps %}
<h2>Les services</h2>
<table>
<tr><th>Service</th></tr>
{% for service in lesServices %}
<tr>
\t<td>{{service.getLibelle()}}</td>
\t<td><a href=\"{{path('hopital_administration_modifService',{id:service.getId()})}}\"> Modifier</a></td>
\t<td><a href=\"{{path('hopital_administration_suppService',{id:service.getId()})}}\"> Supprimer</a></td>
</tr>
{% else %}
<tr><td>Pas de services.</td></tr>
{% endfor %}
</table>
{% endblock %}
", "HopitalAdministrationBundle:Default:service.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\src\\Hopital\\AdministrationBundle/Resources/views/Default/service.html.twig");
    }
}
