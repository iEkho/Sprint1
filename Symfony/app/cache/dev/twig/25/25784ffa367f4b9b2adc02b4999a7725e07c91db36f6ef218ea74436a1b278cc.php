<?php

/* HopitalAdministrationBundle:Default:chambre.html.twig */
class __TwigTemplate_e5067c2e934118460413ead6a24589550877062791697c3b238ae2b286266f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:chambre.html.twig", 1);
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
        $__internal_ab6b8d81a01176e2c525aead2170379696735189a2196d6df8bbfa72499f5fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6b8d81a01176e2c525aead2170379696735189a2196d6df8bbfa72499f5fe2->enter($__internal_ab6b8d81a01176e2c525aead2170379696735189a2196d6df8bbfa72499f5fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:chambre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab6b8d81a01176e2c525aead2170379696735189a2196d6df8bbfa72499f5fe2->leave($__internal_ab6b8d81a01176e2c525aead2170379696735189a2196d6df8bbfa72499f5fe2_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_83512ffaefc46e8ab8db04deab15153b395fd2cec0a5806182e9f8df98f3ce63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83512ffaefc46e8ab8db04deab15153b395fd2cec0a5806182e9f8df98f3ce63->enter($__internal_83512ffaefc46e8ab8db04deab15153b395fd2cec0a5806182e9f8df98f3ce63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Les chambres</h2>
<table>
<tr><th>Chambre</th><th>Service</tr>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesChambres"]) || array_key_exists("lesChambres", $context) ? $context["lesChambres"] : (function () { throw new Twig_Error_Runtime('Variable "lesChambres" does not exist.', 6, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 7
            echo "<tr>
\t<td>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["chambre"], "getLibelle", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["chambre"], "getLeservice", array(), "method"), "getLibelle", array(), "method"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_modifChambre", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["chambre"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Modifier</a></td>
\t<td><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_suppChambre", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["chambre"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Supprimer</a></td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "<tr><td>Pas de chambres.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</table>
";
        
        $__internal_83512ffaefc46e8ab8db04deab15153b395fd2cec0a5806182e9f8df98f3ce63->leave($__internal_83512ffaefc46e8ab8db04deab15153b395fd2cec0a5806182e9f8df98f3ce63_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:chambre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  73 => 14,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  50 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}
{% block corps %}
<h2>Les chambres</h2>
<table>
<tr><th>Chambre</th><th>Service</tr>
{% for chambre in lesChambres %}
<tr>
\t<td>{{chambre.getLibelle()}}</td>
\t<td>{{chambre.getLeservice().getLibelle()}}</td>
\t<td><a href=\"{{path('hopital_administration_modifChambre',{id:chambre.getId()})}}\"> Modifier</a></td>
\t<td><a href=\"{{path('hopital_administration_suppChambre',{id:chambre.getId()})}}\"> Supprimer</a></td>
</tr>
{% else %}
<tr><td>Pas de chambres.</td></tr>
{% endfor %}
</table>
{% endblock %}
", "HopitalAdministrationBundle:Default:chambre.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\src\\Hopital\\AdministrationBundle/Resources/views/Default/chambre.html.twig");
    }
}
