<?php

/* HopitalAdministrationBundle:Default:viewsejour.html.twig */
class __TwigTemplate_bafefc3e8f0d93702cef3d6707193bae9b55fa7b02bfa0b18d14b512c67bb458 extends Twig_Template
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
        $__internal_a1366aa88aaac95fbe62224db7d40b762d61af669bc92594965b03605fc13454 = $this->env->getExtension("native_profiler");
        $__internal_a1366aa88aaac95fbe62224db7d40b762d61af669bc92594965b03605fc13454->enter($__internal_a1366aa88aaac95fbe62224db7d40b762d61af669bc92594965b03605fc13454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:viewsejour.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1366aa88aaac95fbe62224db7d40b762d61af669bc92594965b03605fc13454->leave($__internal_a1366aa88aaac95fbe62224db7d40b762d61af669bc92594965b03605fc13454_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_930711523c700d2f8c46ee8e030eee32abceec208fdcaa5ac61b8a78bd32ced7 = $this->env->getExtension("native_profiler");
        $__internal_930711523c700d2f8c46ee8e030eee32abceec208fdcaa5ac61b8a78bd32ced7->enter($__internal_930711523c700d2f8c46ee8e030eee32abceec208fdcaa5ac61b8a78bd32ced7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Les séjours</h2>
<table>
<tr><th>Patient concerné</th><th>Date de début</th><th>Date de fin</th></tr>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesSejours"]) ? $context["lesSejours"] : $this->getContext($context, "lesSejours")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sejour"]) {
            // line 7
            echo "<tr>
\t<td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sejour"], "getLePatient", array(), "method"), "getNom", array(), "method"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sejour"], "getLePatient", array(), "method"), "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sejour"], "getDateDebut", array(), "method"), "d-m-Y"), "html", null, true);
            echo "</td>
\t<td>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sejour"], "getDateFin", array(), "method"), "d-m-Y"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hopital_administration_modifSejour", array("id" => $this->getAttribute($context["sejour"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Modifier</a></td>
\t<td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hopital_administration_suppSejour", array("id" => $this->getAttribute($context["sejour"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Supprimer</a></td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "<tr><td>Pas de séjours.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sejour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</table>
";
        
        $__internal_930711523c700d2f8c46ee8e030eee32abceec208fdcaa5ac61b8a78bd32ced7->leave($__internal_930711523c700d2f8c46ee8e030eee32abceec208fdcaa5ac61b8a78bd32ced7_prof);

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
        return array (  85 => 17,  78 => 15,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  53 => 8,  50 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}*/
/* {% block corps %}*/
/* <h2>Les séjours</h2>*/
/* <table>*/
/* <tr><th>Patient concerné</th><th>Date de début</th><th>Date de fin</th></tr>*/
/* {% for sejour in lesSejours %}*/
/* <tr>*/
/* 	<td>{{sejour.getLePatient().getNom()}}{{sejour.getLePatient().getPrenom()}}</td>*/
/* 	<td>{{sejour.getDateDebut()|date("d-m-Y")}}</td>*/
/* 	<td>{{sejour.getDateFin()|date("d-m-Y")}}</td>*/
/* 	<td><a href="{{path('hopital_administration_modifSejour',{id:sejour.getId()})}}"> Modifier</a></td>*/
/* 	<td><a href="{{path('hopital_administration_suppSejour',{id:sejour.getId()})}}"> Supprimer</a></td>*/
/* </tr>*/
/* {% else %}*/
/* <tr><td>Pas de séjours.</td></tr>*/
/* {% endfor %}*/
/* </table>*/
/* {% endblock %}*/
/* */
