<?php

/* HopitalAdministrationBundle:Default:patient.html.twig */
class __TwigTemplate_21add7cc97e457ae0b630f82c7ccbf4a0765c66288110024c0dddf6fbd50f365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:patient.html.twig", 1);
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
        $__internal_b1065657ac748f416e9a44a306d1ef2e0002ffb26243f1a0bbf747bced53db06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1065657ac748f416e9a44a306d1ef2e0002ffb26243f1a0bbf747bced53db06->enter($__internal_b1065657ac748f416e9a44a306d1ef2e0002ffb26243f1a0bbf747bced53db06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:patient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1065657ac748f416e9a44a306d1ef2e0002ffb26243f1a0bbf747bced53db06->leave($__internal_b1065657ac748f416e9a44a306d1ef2e0002ffb26243f1a0bbf747bced53db06_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_2bdc9ed976caa2c0596ee87986b7f8d43ef04699b675ab86292d2926d6f63b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdc9ed976caa2c0596ee87986b7f8d43ef04699b675ab86292d2926d6f63b3f->enter($__internal_2bdc9ed976caa2c0596ee87986b7f8d43ef04699b675ab86292d2926d6f63b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Les patients</h2>
<table>
<tr><th>Nom</th><th>Prénom</th><th>Date de naissance</th><th>adresse</th><th>Numéro sécurité sociale</th><th>mail</th><th>Assurance</th></tr>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesPatients"]) || array_key_exists("lesPatients", $context) ? $context["lesPatients"] : (function () { throw new Twig_Error_Runtime('Variable "lesPatients" does not exist.', 6, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 7
            echo "<tr>
\t<td>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["patient"], "getNom", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["patient"], "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["patient"], "getDateNaiss", array(), "method"), "d-m-Y"), "html", null, true);
            echo "</td>
\t<td>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["patient"], "getAdresse", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["patient"], "getNumSecu", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["patient"], "getMail", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["patient"], "getestAssure", array(), "method"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_modifPatient", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["patient"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Modifier</a></td>
\t<td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_suppPatient", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["patient"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Supprimer</a></td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "<tr><td>Pas de patients.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>
";
        
        $__internal_2bdc9ed976caa2c0596ee87986b7f8d43ef04699b675ab86292d2926d6f63b3f->leave($__internal_2bdc9ed976caa2c0596ee87986b7f8d43ef04699b675ab86292d2926d6f63b3f_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:patient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 21,  93 => 19,  85 => 16,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  50 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}
{% block corps %}
<h2>Les patients</h2>
<table>
<tr><th>Nom</th><th>Prénom</th><th>Date de naissance</th><th>adresse</th><th>Numéro sécurité sociale</th><th>mail</th><th>Assurance</th></tr>
{% for patient in lesPatients %}
<tr>
\t<td>{{patient.getNom()}}</td>
\t<td>{{patient.getPrenom()}}</td>
\t<td>{{patient.getDateNaiss()|date(\"d-m-Y\")}}</td>
\t<td>{{patient.getAdresse()}}</td>
\t<td>{{patient.getNumSecu()}}</td>
\t<td>{{patient.getMail()}}</td>
\t<td>{{patient.getestAssure()}}</td>
\t<td><a href=\"{{path('hopital_administration_modifPatient',{id:patient.getId()})}}\"> Modifier</a></td>
\t<td><a href=\"{{path('hopital_administration_suppPatient',{id:patient.getId()})}}\"> Supprimer</a></td>
</tr>
{% else %}
<tr><td>Pas de patients.</td></tr>
{% endfor %}
</table>
{% endblock %}
", "HopitalAdministrationBundle:Default:patient.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\src\\Hopital\\AdministrationBundle/Resources/views/Default/patient.html.twig");
    }
}
