<?php

/* HopitalAdministrationBundle:Default:patient.html.twig */
class __TwigTemplate_e60094967bcd5e70c4441ba680e8181b7114d6b8ff48c73e39c8c55ac158d34c extends Twig_Template
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
        $__internal_c85c84a7de6bb2c079d63551f66cfe2cb3748664d13608d05e0cb737c2a21764 = $this->env->getExtension("native_profiler");
        $__internal_c85c84a7de6bb2c079d63551f66cfe2cb3748664d13608d05e0cb737c2a21764->enter($__internal_c85c84a7de6bb2c079d63551f66cfe2cb3748664d13608d05e0cb737c2a21764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:patient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c85c84a7de6bb2c079d63551f66cfe2cb3748664d13608d05e0cb737c2a21764->leave($__internal_c85c84a7de6bb2c079d63551f66cfe2cb3748664d13608d05e0cb737c2a21764_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_2816d8d8b52d1741dce3fd8b6d8cffa0c0877e268e551287412dbd4f97803d6b = $this->env->getExtension("native_profiler");
        $__internal_2816d8d8b52d1741dce3fd8b6d8cffa0c0877e268e551287412dbd4f97803d6b->enter($__internal_2816d8d8b52d1741dce3fd8b6d8cffa0c0877e268e551287412dbd4f97803d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Les patients</h2>
<table>
<tr><th>Nom</th><th>Prénom</th><th>Date de naissance</th><th>adresse</th><th>Numéro sécu</th><th>mail</th><th>Assurance</th></tr>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesPatients"]) ? $context["lesPatients"] : $this->getContext($context, "lesPatients")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 7
            echo "<tr>
\t<td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "getNom", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["patient"], "getDateNaiss", array(), "method"), "d-m-Y"), "html", null, true);
            echo "</td>
\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "getAdresse", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "getNumSecu", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "getMail", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "getestAssure", array(), "method"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hopital_administration_modifPatient", array("id" => $this->getAttribute($context["patient"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Modifier</a></td>
\t<td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hopital_administration_suppPatient", array("id" => $this->getAttribute($context["patient"], "getId", array(), "method"))), "html", null, true);
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
        
        $__internal_2816d8d8b52d1741dce3fd8b6d8cffa0c0877e268e551287412dbd4f97803d6b->leave($__internal_2816d8d8b52d1741dce3fd8b6d8cffa0c0877e268e551287412dbd4f97803d6b_prof);

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
}
/* {% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}*/
/* {% block corps %}*/
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
/* 	<td><a href="{{path('hopital_administration_suppPatient',{id:patient.getId()})}}"> Supprimer</a></td>*/
/* </tr>*/
/* {% else %}*/
/* <tr><td>Pas de patients.</td></tr>*/
/* {% endfor %}*/
/* </table>*/
/* {% endblock %}*/
/* */
