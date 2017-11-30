<?php

/* HopitalAdministrationBundle:Default:newPatient.html.twig */
class __TwigTemplate_5c603570f0a172b7fec304da244946569f5112f4630ce2e776d2fc99b268d960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:newPatient.html.twig", 1);
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
        $__internal_125678298402eb006551337203ef206b1c3304d7db0bad9c5407b44b026b9323 = $this->env->getExtension("native_profiler");
        $__internal_125678298402eb006551337203ef206b1c3304d7db0bad9c5407b44b026b9323->enter($__internal_125678298402eb006551337203ef206b1c3304d7db0bad9c5407b44b026b9323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:newPatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_125678298402eb006551337203ef206b1c3304d7db0bad9c5407b44b026b9323->leave($__internal_125678298402eb006551337203ef206b1c3304d7db0bad9c5407b44b026b9323_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_c12756f803c01a068141700b026b4552821435a6b1f9c2c9510a21f30db61f95 = $this->env->getExtension("native_profiler");
        $__internal_c12756f803c01a068141700b026b4552821435a6b1f9c2c9510a21f30db61f95->enter($__internal_c12756f803c01a068141700b026b4552821435a6b1f9c2c9510a21f30db61f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Ajout d'un patient</h2>
<form action=\"\" method=\"post\">
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>
";
        
        $__internal_c12756f803c01a068141700b026b4552821435a6b1f9c2c9510a21f30db61f95->leave($__internal_c12756f803c01a068141700b026b4552821435a6b1f9c2c9510a21f30db61f95_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:newPatient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}*/
/* {% block corps %}*/
/* <h2>Ajout d'un patient</h2>*/
/* <form action="" method="post">*/
/* {{form_widget(form)}}*/
/* </form>*/
/* {% endblock %}*/
/* */
