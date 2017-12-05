<?php

/* HopitalAdministrationBundle:Default:viewsejour.html.twig */
class __TwigTemplate_f6270b12ab18edae9836e832328a19d67dcabe622809b89f61eef99458572a0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:viewsejour.html.twig", 1);
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
        $__internal_9c478d62812ec5f7788e23b39d6eecadaaf8fa7f87c32d80c2fdb3008a0e7877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c478d62812ec5f7788e23b39d6eecadaaf8fa7f87c32d80c2fdb3008a0e7877->enter($__internal_9c478d62812ec5f7788e23b39d6eecadaaf8fa7f87c32d80c2fdb3008a0e7877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:viewsejour.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c478d62812ec5f7788e23b39d6eecadaaf8fa7f87c32d80c2fdb3008a0e7877->leave($__internal_9c478d62812ec5f7788e23b39d6eecadaaf8fa7f87c32d80c2fdb3008a0e7877_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_c2cf96bbb2300df994b04a3d9342da0ccf1127216c45bf16746b3e463ed84ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2cf96bbb2300df994b04a3d9342da0ccf1127216c45bf16746b3e463ed84ffb->enter($__internal_c2cf96bbb2300df994b04a3d9342da0ccf1127216c45bf16746b3e463ed84ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Les séjours</h2>
<table>
<tr><th>Patient concerné</th><th>Date de début</th><th>Date de fin</th><th>Chambre</th><th>Numéro de lit</th></tr>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesSejours"]) || array_key_exists("lesSejours", $context) ? $context["lesSejours"] : (function () { throw new Twig_Error_Runtime('Variable "lesSejours" does not exist.', 6, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sejour"]) {
            // line 7
            echo "<tr>
\t<td>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sejour"], "getLePatient", array(), "method"), "getNom", array(), "method"), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sejour"], "getLePatient", array(), "method"), "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sejour"], "getDateDebut", array(), "method"), "d-m-Y"), "html", null, true);
            echo "</td>
\t<td>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sejour"], "getDateFin", array(), "method"), "d-m-Y"), "html", null, true);
            echo "</td>
\t<td>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sejour"], "getLachambre", array(), "method"), "getLibelle", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sejour"], "getNumLit", array(), "method"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_modifSejour", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["sejour"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Modifier</a></td>
\t<td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_suppSejour", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["sejour"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Supprimer</a></td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "<tr><td>Pas de séjours.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sejour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>
";
        
        $__internal_c2cf96bbb2300df994b04a3d9342da0ccf1127216c45bf16746b3e463ed84ffb->leave($__internal_c2cf96bbb2300df994b04a3d9342da0ccf1127216c45bf16746b3e463ed84ffb_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:viewsejour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  87 => 17,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  53 => 8,  50 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}
{% block corps %}
<h2>Les séjours</h2>
<table>
<tr><th>Patient concerné</th><th>Date de début</th><th>Date de fin</th><th>Chambre</th><th>Numéro de lit</th></tr>
{% for sejour in lesSejours %}
<tr>
\t<td>{{sejour.getLePatient().getNom()}}&nbsp;{{sejour.getLePatient().getPrenom()}}</td>
\t<td>{{sejour.getDateDebut()|date(\"d-m-Y\")}}</td>
\t<td>{{sejour.getDateFin()|date(\"d-m-Y\")}}</td>
\t<td>{{sejour.getLachambre().getLibelle()}}</td>
\t<td>{{sejour.getNumLit()}}</td>
\t<td><a href=\"{{path('hopital_administration_modifSejour',{id:sejour.getId()})}}\"> Modifier</a></td>
\t<td><a href=\"{{path('hopital_administration_suppSejour',{id:sejour.getId()})}}\"> Supprimer</a></td>
</tr>
{% else %}
<tr><td>Pas de séjours.</td></tr>
{% endfor %}
</table>
{% endblock %}
", "HopitalAdministrationBundle:Default:viewsejour.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\src\\Hopital\\AdministrationBundle/Resources/views/Default/viewsejour.html.twig");
    }
}
