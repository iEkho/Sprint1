<?php

/* HopitalAdministrationBundle:Default:newsejour.html.twig */
class __TwigTemplate_bfdfd3925959a1323d63c75e4303526e8a12b04225852a85142816c05c137a4e extends Twig_Template
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
        $__internal_6b4552a4a2743168743ff15e1f30636cfd38f3bd7086e1918c9dd06c42f86fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4552a4a2743168743ff15e1f30636cfd38f3bd7086e1918c9dd06c42f86fb1->enter($__internal_6b4552a4a2743168743ff15e1f30636cfd38f3bd7086e1918c9dd06c42f86fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:newsejour.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b4552a4a2743168743ff15e1f30636cfd38f3bd7086e1918c9dd06c42f86fb1->leave($__internal_6b4552a4a2743168743ff15e1f30636cfd38f3bd7086e1918c9dd06c42f86fb1_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_88a6b5a075d6944967861f8fe8d93fddb72c9258bdd4ff9d3a2ebeabdb760ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a6b5a075d6944967861f8fe8d93fddb72c9258bdd4ff9d3a2ebeabdb760ad2->enter($__internal_88a6b5a075d6944967861f8fe8d93fddb72c9258bdd4ff9d3a2ebeabdb760ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Formulaire d'ajout de séjour</h2>
<form action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_newsejour");
        echo "\" method=\"post\">
  ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'widget');
        echo "
</form>
";
        
        $__internal_88a6b5a075d6944967861f8fe8d93fddb72c9258bdd4ff9d3a2ebeabdb760ad2->leave($__internal_88a6b5a075d6944967861f8fe8d93fddb72c9258bdd4ff9d3a2ebeabdb760ad2_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}
{% block corps %}
<h2>Formulaire d'ajout de séjour</h2>
<form action=\"{{path('hopital_administration_newsejour')}}\" method=\"post\">
  {{form_widget(form)}}
</form>
{% endblock %}
", "HopitalAdministrationBundle:Default:newsejour.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\src\\Hopital\\AdministrationBundle/Resources/views/Default/newsejour.html.twig");
    }
}
