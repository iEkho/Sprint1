<?php

/* HopitalAdministrationBundle:Default:base.html.twig */
class __TwigTemplate_33fce79a41df9d563a5a6564c30db83ede61798fbcab3d126f993844345ec6f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7480f08032d74b9dfbb90a67dbab943517d52e735e4ed986c117fd2c8eecaec2 = $this->env->getExtension("native_profiler");
        $__internal_7480f08032d74b9dfbb90a67dbab943517d52e735e4ed986c117fd2c8eecaec2->enter($__internal_7480f08032d74b9dfbb90a67dbab943517d52e735e4ed986c117fd2c8eecaec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:base.html.twig"));

        // line 1
        echo "\t<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("hopital_administration_accueil", array());
        echo "\">Accueil</a></li>
\t<li><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("hopital_administration_patient", array());
        echo "\">Les patients</a></li>
\t<li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("maison_ligues_ping_pong_sejours", array());
        echo "\">Les séjours</a></li>
";
        
        $__internal_7480f08032d74b9dfbb90a67dbab943517d52e735e4ed986c117fd2c8eecaec2->leave($__internal_7480f08032d74b9dfbb90a67dbab943517d52e735e4ed986c117fd2c8eecaec2_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* 	<li><a href="{{path('hopital_administration_accueil',{})}}">Accueil</a></li>*/
/* 	<li><a href="{{path('hopital_administration_patient',{})}}">Les patients</a></li>*/
/* 	<li><a href="{{path('maison_ligues_ping_pong_sejours',{})}}">Les séjours</a></li>*/
/* */
