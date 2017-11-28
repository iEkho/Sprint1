<?php

/* HopitalAdministrationBundle:Default:patient.html.twig */
class __TwigTemplate_e60094967bcd5e70c4441ba680e8181b7114d6b8ff48c73e39c8c55ac158d34c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1510a620bd27053d50c03ae9637982c2b84f09bc36ff44b889bf4cf6a7b66748 = $this->env->getExtension("native_profiler");
        $__internal_1510a620bd27053d50c03ae9637982c2b84f09bc36ff44b889bf4cf6a7b66748->enter($__internal_1510a620bd27053d50c03ae9637982c2b84f09bc36ff44b889bf4cf6a7b66748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:patient.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_1510a620bd27053d50c03ae9637982c2b84f09bc36ff44b889bf4cf6a7b66748->leave($__internal_1510a620bd27053d50c03ae9637982c2b84f09bc36ff44b889bf4cf6a7b66748_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_73c1a76c905ee57b037ff4d7e6f4e2b1bf6f9c34b0b7acce775925f949d25623 = $this->env->getExtension("native_profiler");
        $__internal_73c1a76c905ee57b037ff4d7e6f4e2b1bf6f9c34b0b7acce775925f949d25623->enter($__internal_73c1a76c905ee57b037ff4d7e6f4e2b1bf6f9c34b0b7acce775925f949d25623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<h2>Les patients</h2>
<table>
<tr><th>Nom</th><th>Prénom</th><th>Date de naissance</th><th>adresse</th><th>Numéro sécu</th><th>mail</th><th>Assurance</th></tr>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesPatients"]) ? $context["lesPatients"] : $this->getContext($context, "lesPatients")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 6
            echo "<tr>
\t<td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "getNom", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["patient"], "getDateNaiss", array(), "method"), "d-m-Y"), "html", null, true);
            echo "</td>
\t<td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "getAdresse", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "getNumSecu", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "getMail", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "getestAssure", array(), "method"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hopital_administration_modifPatient", array("id" => $this->getAttribute($context["patient"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Modifier</a></td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "<tr><td>Pas de patients.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>
";
        
        $__internal_73c1a76c905ee57b037ff4d7e6f4e2b1bf6f9c34b0b7acce775925f949d25623->leave($__internal_73c1a76c905ee57b037ff4d7e6f4e2b1bf6f9c34b0b7acce775925f949d25623_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:patient.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  84 => 17,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  45 => 6,  40 => 5,  35 => 2,  23 => 1,);
    }
}
/* {% block body %}*/
/* <h2>Les patients</h2>*/
/* <table>*/
/* <tr><th>Nom</th><th>Prénom</th><th>Date de naissance</th><th>adresse</th><th>Numéro sécu</th><th>mail</th><th>Assurance</th></tr>*/
/* {% for patient in lesPatients %}*/
/* <tr>*/
/* 	<td>{{patient.getNom()}}</td>*/
/* 	<td>{{patient.getPrenom()}}</td>*/
/* 	<td>{{patient.getDateNaiss()|date("d-m-Y")}}</td>*/
/* 	<td>{{patient.getAdresse()}}</td>*/
/* 	<td>{{patient.getNumSecu()}}</td>*/
/* 	<td>{{patient.getMail()}}</td>*/
/* 	<td>{{patient.getestAssure()}}</td>*/
/* 	<td><a href="{{path('hopital_administration_modifPatient',{id:patient.getId()})}}"> Modifier</a></td>*/
/* </tr>*/
/* {% else %}*/
/* <tr><td>Pas de patients.</td></tr>*/
/* {% endfor %}*/
/* </table>*/
/* {% endblock %}*/
