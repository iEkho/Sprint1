<?php

/* HopitalAdministrationBundle:Default:newChambre.html.twig */
class __TwigTemplate_91afbbc69a6caaefb132702587d90a618705b1d6442188e1d10a1bcd79d10b30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:newChambre.html.twig", 1);
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
        $__internal_1744d6bbcbaebe6f9bf061684746d3c756a419cb38a2c6891af117e43decec6a = $this->env->getExtension("native_profiler");
        $__internal_1744d6bbcbaebe6f9bf061684746d3c756a419cb38a2c6891af117e43decec6a->enter($__internal_1744d6bbcbaebe6f9bf061684746d3c756a419cb38a2c6891af117e43decec6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:newChambre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1744d6bbcbaebe6f9bf061684746d3c756a419cb38a2c6891af117e43decec6a->leave($__internal_1744d6bbcbaebe6f9bf061684746d3c756a419cb38a2c6891af117e43decec6a_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_bef6643ea3faee9ed2101b33493308c2d252f527dcdd9cc9c09ec3bac8580f4c = $this->env->getExtension("native_profiler");
        $__internal_bef6643ea3faee9ed2101b33493308c2d252f527dcdd9cc9c09ec3bac8580f4c->enter($__internal_bef6643ea3faee9ed2101b33493308c2d252f527dcdd9cc9c09ec3bac8580f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Formulaire d'ajout de chambre</h2>
<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("hopital_administration_newChambre");
        echo "\" method=\"post\">
  ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>
";
        
        $__internal_bef6643ea3faee9ed2101b33493308c2d252f527dcdd9cc9c09ec3bac8580f4c->leave($__internal_bef6643ea3faee9ed2101b33493308c2d252f527dcdd9cc9c09ec3bac8580f4c_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:newChambre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}*/
/* {% block corps %}*/
/* <h2>Formulaire d'ajout de chambre</h2>*/
/* <form action="{{path('hopital_administration_newChambre')}}" method="post">*/
/*   {{form_widget(form)}}*/
/* </form>*/
/* {% endblock %}*/
/* */
