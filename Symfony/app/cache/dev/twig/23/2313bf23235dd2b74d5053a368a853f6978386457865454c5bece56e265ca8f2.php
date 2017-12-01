<?php

/* HopitalAdministrationBundle:Default:newService.html.twig */
class __TwigTemplate_75f4854a4ab7975debfd89758b151c4c5bc3d5aa17d3a2806d052763769ea401 extends Twig_Template
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
        $__internal_e15e06a29bace89b1d440585833d6a5a698513bb2b9748955727d0b6abf0fdde = $this->env->getExtension("native_profiler");
        $__internal_e15e06a29bace89b1d440585833d6a5a698513bb2b9748955727d0b6abf0fdde->enter($__internal_e15e06a29bace89b1d440585833d6a5a698513bb2b9748955727d0b6abf0fdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:newService.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e15e06a29bace89b1d440585833d6a5a698513bb2b9748955727d0b6abf0fdde->leave($__internal_e15e06a29bace89b1d440585833d6a5a698513bb2b9748955727d0b6abf0fdde_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_52c3e80f77b0fabafc37e0deae87bd658f0c191668f5033386678ee922f8d62d = $this->env->getExtension("native_profiler");
        $__internal_52c3e80f77b0fabafc37e0deae87bd658f0c191668f5033386678ee922f8d62d->enter($__internal_52c3e80f77b0fabafc37e0deae87bd658f0c191668f5033386678ee922f8d62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Formulaire d'ajout de service</h2>
<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("hopital_administration_newservice");
        echo "\" method=\"post\">
  ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>
";
        
        $__internal_52c3e80f77b0fabafc37e0deae87bd658f0c191668f5033386678ee922f8d62d->leave($__internal_52c3e80f77b0fabafc37e0deae87bd658f0c191668f5033386678ee922f8d62d_prof);

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
}
/* {% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}*/
/* {% block corps %}*/
/* <h2>Formulaire d'ajout de service</h2>*/
/* <form action="{{path('hopital_administration_newservice')}}" method="post">*/
/*   {{form_widget(form)}}*/
/* </form>*/
/* {% endblock %}*/
/* */
