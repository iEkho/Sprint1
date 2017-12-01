<?php

/* HopitalAdministrationBundle:Default:service.html.twig */
class __TwigTemplate_5f6395a4f3ea9e9e8d130b1ad256fcb2b3def353e795eee353d5117dbe74b250 extends Twig_Template
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
        $__internal_780e989494ed07f243bf7bab17821aaaf72b3b57ccf5d5035f6fa017841ae0bc = $this->env->getExtension("native_profiler");
        $__internal_780e989494ed07f243bf7bab17821aaaf72b3b57ccf5d5035f6fa017841ae0bc->enter($__internal_780e989494ed07f243bf7bab17821aaaf72b3b57ccf5d5035f6fa017841ae0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:service.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_780e989494ed07f243bf7bab17821aaaf72b3b57ccf5d5035f6fa017841ae0bc->leave($__internal_780e989494ed07f243bf7bab17821aaaf72b3b57ccf5d5035f6fa017841ae0bc_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_7a0d5158c8bba0ae456d2fa2dc06e1cae438010111431e8199a9dba81e804b68 = $this->env->getExtension("native_profiler");
        $__internal_7a0d5158c8bba0ae456d2fa2dc06e1cae438010111431e8199a9dba81e804b68->enter($__internal_7a0d5158c8bba0ae456d2fa2dc06e1cae438010111431e8199a9dba81e804b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Les services</h2>
<table>
<tr><th>Service</th></tr>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesServices"]) ? $context["lesServices"] : $this->getContext($context, "lesServices")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 7
            echo "<tr>
\t<td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "getLibelle", array(), "method"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hopital_administration_modifService", array("id" => $this->getAttribute($context["service"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Modifier</a></td>
\t<td><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hopital_administration_suppService", array("id" => $this->getAttribute($context["service"], "getId", array(), "method"))), "html", null, true);
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
        
        $__internal_7a0d5158c8bba0ae456d2fa2dc06e1cae438010111431e8199a9dba81e804b68->leave($__internal_7a0d5158c8bba0ae456d2fa2dc06e1cae438010111431e8199a9dba81e804b68_prof);

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
}
/* {% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}*/
/* {% block corps %}*/
/* <h2>Les services</h2>*/
/* <table>*/
/* <tr><th>Service</th></tr>*/
/* {% for service in lesServices %}*/
/* <tr>*/
/* 	<td>{{service.getLibelle()}}</td>*/
/* 	<td><a href="{{path('hopital_administration_modifService',{id:service.getId()})}}"> Modifier</a></td>*/
/* 	<td><a href="{{path('hopital_administration_suppService',{id:service.getId()})}}"> Supprimer</a></td>*/
/* </tr>*/
/* {% else %}*/
/* <tr><td>Pas de services.</td></tr>*/
/* {% endfor %}*/
/* </table>*/
/* {% endblock %}*/
/* */
