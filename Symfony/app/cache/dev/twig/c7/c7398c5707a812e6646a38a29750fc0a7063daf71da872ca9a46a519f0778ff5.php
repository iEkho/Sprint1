<?php

/* HopitalAdministrationBundle:Default:index.html.twig */
class __TwigTemplate_7f1bb590a78e6fe007c1539aa458d64c63c36155d38a000ea7a3fb3ac858a292 extends Twig_Template
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
        $__internal_29921d88375af727d7b42e19ea1b49ccb745b189352b1aca7ff4516c25606419 = $this->env->getExtension("native_profiler");
        $__internal_29921d88375af727d7b42e19ea1b49ccb745b189352b1aca7ff4516c25606419->enter($__internal_29921d88375af727d7b42e19ea1b49ccb745b189352b1aca7ff4516c25606419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:index.html.twig"));

        // line 1
        echo "<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("hopital_administration_homepage", array());
        echo "\">Accueil</a></li>
<li><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("hopital_administration_patient", array());
        echo "\">Gestion des patients</a></li>
<li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("hopital_administration_sejour", array());
        echo "\">Gestion des séjours</a></li>

";
        
        $__internal_29921d88375af727d7b42e19ea1b49ccb745b189352b1aca7ff4516c25606419->leave($__internal_29921d88375af727d7b42e19ea1b49ccb745b189352b1aca7ff4516c25606419_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:index.html.twig";
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
/* <li><a href="{{path('hopital_administration_homepage',{})}}">Accueil</a></li>*/
/* <li><a href="{{path('hopital_administration_patient',{})}}">Gestion des patients</a></li>*/
/* <li><a href="{{path('hopital_administration_sejour',{})}}">Gestion des séjours</a></li>*/
/* */
/* */
