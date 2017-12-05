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
        $__internal_7c412d59bcf95e057001630fb3f6c7f818dd618132c64a17ee48b626bb2da1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c412d59bcf95e057001630fb3f6c7f818dd618132c64a17ee48b626bb2da1e8->enter($__internal_7c412d59bcf95e057001630fb3f6c7f818dd618132c64a17ee48b626bb2da1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:viewsejour.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c412d59bcf95e057001630fb3f6c7f818dd618132c64a17ee48b626bb2da1e8->leave($__internal_7c412d59bcf95e057001630fb3f6c7f818dd618132c64a17ee48b626bb2da1e8_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_5ff6a1c3bb552f7eea7cfbe3e144ef9bb29f43921b58aa8a1385341c475c4da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff6a1c3bb552f7eea7cfbe3e144ef9bb29f43921b58aa8a1385341c475c4da8->enter($__internal_5ff6a1c3bb552f7eea7cfbe3e144ef9bb29f43921b58aa8a1385341c475c4da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

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
        
        $__internal_5ff6a1c3bb552f7eea7cfbe3e144ef9bb29f43921b58aa8a1385341c475c4da8->leave($__internal_5ff6a1c3bb552f7eea7cfbe3e144ef9bb29f43921b58aa8a1385341c475c4da8_prof);

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
        return array (  93 => 19,  86 => 17,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  53 => 8,  50 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
\t<td>{{sejour.getLePatient().getNom()}}{{sejour.getLePatient().getPrenom()}}</td>
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
