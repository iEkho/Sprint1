<?php

/* HopitalAdministrationBundle:Default:newService.html.twig */
class __TwigTemplate_9e963abcdb798fb982cdbdb40944c20e245f8f47657f6621d0fbb2c40dccd5ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:newService.html.twig", 1);
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
        $__internal_639a2546eaae9d7e2f8731eb640d86770e1a9e1d8a203fbbda60cd35254afc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639a2546eaae9d7e2f8731eb640d86770e1a9e1d8a203fbbda60cd35254afc18->enter($__internal_639a2546eaae9d7e2f8731eb640d86770e1a9e1d8a203fbbda60cd35254afc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:newService.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_639a2546eaae9d7e2f8731eb640d86770e1a9e1d8a203fbbda60cd35254afc18->leave($__internal_639a2546eaae9d7e2f8731eb640d86770e1a9e1d8a203fbbda60cd35254afc18_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_b92988937481a77551e6f10db614ac02d531d7b950051de45f38f724bdfd1b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92988937481a77551e6f10db614ac02d531d7b950051de45f38f724bdfd1b1a->enter($__internal_b92988937481a77551e6f10db614ac02d531d7b950051de45f38f724bdfd1b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Formulaire d'ajout de service</h2>
<form action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_newservice");
        echo "\" method=\"post\">
  ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'widget');
        echo "
</form>
";
        
        $__internal_b92988937481a77551e6f10db614ac02d531d7b950051de45f38f724bdfd1b1a->leave($__internal_b92988937481a77551e6f10db614ac02d531d7b950051de45f38f724bdfd1b1a_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:newService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}
{% block corps %}
<h2>Formulaire d'ajout de service</h2>
<form action=\"{{path('hopital_administration_newservice')}}\" method=\"post\">
  {{form_widget(form)}}
</form>
{% endblock %}
", "HopitalAdministrationBundle:Default:newService.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\src\\Hopital\\AdministrationBundle/Resources/views/Default/newService.html.twig");
    }
}
