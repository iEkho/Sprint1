<?php

/* HopitalAdministrationBundle:Default:index.html.twig */
class __TwigTemplate_4df5ef9105be42d84b0bb80986652a98dffdb9561ad291e8ba350affb6d1c99c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "HopitalAdministrationBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a28487a261b49a5612d676bf8825f19548d65bfcc0a57497e87f1a31053e4a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28487a261b49a5612d676bf8825f19548d65bfcc0a57497e87f1a31053e4a32->enter($__internal_a28487a261b49a5612d676bf8825f19548d65bfcc0a57497e87f1a31053e4a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a28487a261b49a5612d676bf8825f19548d65bfcc0a57497e87f1a31053e4a32->leave($__internal_a28487a261b49a5612d676bf8825f19548d65bfcc0a57497e87f1a31053e4a32_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bdee984478ebe744e3736f1c0ffb625a414794441eb339f918c0231a2e87d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdee984478ebe744e3736f1c0ffb625a414794441eb339f918c0231a2e87d1d->enter($__internal_1bdee984478ebe744e3736f1c0ffb625a414794441eb339f918c0231a2e87d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_homepage", array());
        echo "\">Accueil</a></li>
<li><a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_viewPatient", array());
        echo "\">Gestion des patients</a></li>
<li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_viewsejour", array());
        echo "\">Gestion des séjours</a></li>
<li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_viewChambre", array());
        echo "\">Gestion des chambres</a></li>
<li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_viewService", array());
        echo "\">Gestion des services</a></li>
<li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_newpatient", array());
        echo "\">Nouveau patient</a></li>
<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_newsejour", array());
        echo "\">Nouveau séjour</a></li>
<li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_newservice", array());
        echo "\">Nouveau service</a></li>
<li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_newChambre", array());
        echo "\">Nouvelle chambre</a></li>

<div id=\"corps\">
  ";
        // line 14
        $this->displayBlock('corps', $context, $blocks);
        // line 15
        echo "</div>
";
        
        $__internal_1bdee984478ebe744e3736f1c0ffb625a414794441eb339f918c0231a2e87d1d->leave($__internal_1bdee984478ebe744e3736f1c0ffb625a414794441eb339f918c0231a2e87d1d_prof);

    }

    // line 14
    public function block_corps($context, array $blocks = array())
    {
        $__internal_9eb8583da4f76a3265ffe5755dcccb351713474ced6cbb14787a9e6099530cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb8583da4f76a3265ffe5755dcccb351713474ced6cbb14787a9e6099530cc3->enter($__internal_9eb8583da4f76a3265ffe5755dcccb351713474ced6cbb14787a9e6099530cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        
        $__internal_9eb8583da4f76a3265ffe5755dcccb351713474ced6cbb14787a9e6099530cc3->leave($__internal_9eb8583da4f76a3265ffe5755dcccb351713474ced6cbb14787a9e6099530cc3_prof);

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
        return array (  90 => 14,  82 => 15,  80 => 14,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}
<li><a href=\"{{path('hopital_administration_homepage',{})}}\">Accueil</a></li>
<li><a href=\"{{path('hopital_administration_viewPatient',{})}}\">Gestion des patients</a></li>
<li><a href=\"{{path('hopital_administration_viewsejour',{})}}\">Gestion des séjours</a></li>
<li><a href=\"{{path('hopital_administration_viewChambre',{})}}\">Gestion des chambres</a></li>
<li><a href=\"{{path('hopital_administration_viewService',{})}}\">Gestion des services</a></li>
<li><a href=\"{{path('hopital_administration_newpatient',{})}}\">Nouveau patient</a></li>
<li><a href=\"{{path('hopital_administration_newsejour',{})}}\">Nouveau séjour</a></li>
<li><a href=\"{{path('hopital_administration_newservice',{})}}\">Nouveau service</a></li>
<li><a href=\"{{path('hopital_administration_newChambre',{})}}\">Nouvelle chambre</a></li>

<div id=\"corps\">
  {% block corps %}{% endblock %}
</div>
{% endblock %}
", "HopitalAdministrationBundle:Default:index.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\src\\Hopital\\AdministrationBundle/Resources/views/Default/index.html.twig");
    }
}
