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
        $__internal_0f10c18daad575a1afa740182d8dd76b436dc09731c1b638f94867996a3a8a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f10c18daad575a1afa740182d8dd76b436dc09731c1b638f94867996a3a8a56->enter($__internal_0f10c18daad575a1afa740182d8dd76b436dc09731c1b638f94867996a3a8a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f10c18daad575a1afa740182d8dd76b436dc09731c1b638f94867996a3a8a56->leave($__internal_0f10c18daad575a1afa740182d8dd76b436dc09731c1b638f94867996a3a8a56_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf8e2ecae25e0748ed239682b68ab516c26393df6da1f7fd41ced7e8bbc77208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8e2ecae25e0748ed239682b68ab516c26393df6da1f7fd41ced7e8bbc77208->enter($__internal_bf8e2ecae25e0748ed239682b68ab516c26393df6da1f7fd41ced7e8bbc77208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a></li>
                    ";
        } else {
            // line 15
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a></li>
                    ";
        }
        // line 17
        echo "
<div id=\"corps\">
  ";
        // line 19
        $this->displayBlock('corps', $context, $blocks);
        // line 20
        echo "</div>
";
        
        $__internal_bf8e2ecae25e0748ed239682b68ab516c26393df6da1f7fd41ced7e8bbc77208->leave($__internal_bf8e2ecae25e0748ed239682b68ab516c26393df6da1f7fd41ced7e8bbc77208_prof);

    }

    // line 19
    public function block_corps($context, array $blocks = array())
    {
        $__internal_7ccaf8edb927516ca5f9048390bacd3b8918467be6d8eec06363306f18d4b397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ccaf8edb927516ca5f9048390bacd3b8918467be6d8eec06363306f18d4b397->enter($__internal_7ccaf8edb927516ca5f9048390bacd3b8918467be6d8eec06363306f18d4b397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        
        $__internal_7ccaf8edb927516ca5f9048390bacd3b8918467be6d8eec06363306f18d4b397->leave($__internal_7ccaf8edb927516ca5f9048390bacd3b8918467be6d8eec06363306f18d4b397_prof);

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
        return array (  106 => 19,  98 => 20,  96 => 19,  92 => 17,  86 => 15,  80 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
{% if is_granted('ROLE_ADMIN') %}
                        <li><a href=\"{{ path('logout') }}\">Logout</a></li>
                    {% else %}
                        <li><a href=\"{{ path('login') }}\">Login</a></li>
                    {% endif %}

<div id=\"corps\">
  {% block corps %}{% endblock %}
</div>
{% endblock %}
", "HopitalAdministrationBundle:Default:index.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\src\\Hopital\\AdministrationBundle/Resources/views/Default/index.html.twig");
    }
}
