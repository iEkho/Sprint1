<?php

/* HopitalAdministrationBundle:Default:newsejour.html.twig */
class __TwigTemplate_23d16f1da92c71468c3a6d7cf685b1ec0a1e360541603957d66d3ac5c9578f35 extends Twig_Template
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
        $__internal_5782e5d06cdaa64eb4d624b407f926299277481596e5ec323c9824119ac42601 = $this->env->getExtension("native_profiler");
        $__internal_5782e5d06cdaa64eb4d624b407f926299277481596e5ec323c9824119ac42601->enter($__internal_5782e5d06cdaa64eb4d624b407f926299277481596e5ec323c9824119ac42601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:newsejour.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5782e5d06cdaa64eb4d624b407f926299277481596e5ec323c9824119ac42601->leave($__internal_5782e5d06cdaa64eb4d624b407f926299277481596e5ec323c9824119ac42601_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_0c3f1484d845c1fddef53c872c262ab95a43ea952f245e673f369eaeeeb8ad85 = $this->env->getExtension("native_profiler");
        $__internal_0c3f1484d845c1fddef53c872c262ab95a43ea952f245e673f369eaeeeb8ad85->enter($__internal_0c3f1484d845c1fddef53c872c262ab95a43ea952f245e673f369eaeeeb8ad85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

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
        
        $__internal_0c3f1484d845c1fddef53c872c262ab95a43ea952f245e673f369eaeeeb8ad85->leave($__internal_0c3f1484d845c1fddef53c872c262ab95a43ea952f245e673f369eaeeeb8ad85_prof);

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
