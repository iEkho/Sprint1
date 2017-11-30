<?php

/* HopitalAdministrationBundle:Default:newsejour.html.twig */
class __TwigTemplate_c2402e36bcc195a9c2370c53840c5a95df04d84dd00895f05edf8965a3a1eec8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:newsejour.html.twig", 1);
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
        $__internal_a4aecb4b954bde7755ea0a72b760fc8f164972ea9b7b88dcae814c8fd538f68f = $this->env->getExtension("native_profiler");
        $__internal_a4aecb4b954bde7755ea0a72b760fc8f164972ea9b7b88dcae814c8fd538f68f->enter($__internal_a4aecb4b954bde7755ea0a72b760fc8f164972ea9b7b88dcae814c8fd538f68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:newsejour.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4aecb4b954bde7755ea0a72b760fc8f164972ea9b7b88dcae814c8fd538f68f->leave($__internal_a4aecb4b954bde7755ea0a72b760fc8f164972ea9b7b88dcae814c8fd538f68f_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_110d90f06636735239ea8885b2d4779346976ba4f35656ca287ad3f954cd43e7 = $this->env->getExtension("native_profiler");
        $__internal_110d90f06636735239ea8885b2d4779346976ba4f35656ca287ad3f954cd43e7->enter($__internal_110d90f06636735239ea8885b2d4779346976ba4f35656ca287ad3f954cd43e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Formulaire d'ajout de séjour</h2>
<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("hopital_administration_newsejour");
        echo "\" method=\"post\">
  ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>
";
        
        $__internal_110d90f06636735239ea8885b2d4779346976ba4f35656ca287ad3f954cd43e7->leave($__internal_110d90f06636735239ea8885b2d4779346976ba4f35656ca287ad3f954cd43e7_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:newsejour.html.twig";
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
/* <h2>Formulaire d'ajout de séjour</h2>*/
/* <form action="{{path('hopital_administration_newsejour')}}" method="post">*/
/*   {{form_widget(form)}}*/
/* </form>*/
/* {% endblock %}*/
/* */
