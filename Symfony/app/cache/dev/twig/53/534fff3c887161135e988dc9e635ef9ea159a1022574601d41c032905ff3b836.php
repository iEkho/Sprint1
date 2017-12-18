<?php

/* HopitalAdministrationBundle:Default:index.html.twig */
class __TwigTemplate_eaffa9ee31718d08f23739a9ea596d7067ce22786673cce80a63e0e7ca2d7efb extends Twig_Template
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
        $__internal_ce9389a592bd9501050e42734c3870eb60d7c00781787aee16b0bcbbacc4b019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9389a592bd9501050e42734c3870eb60d7c00781787aee16b0bcbbacc4b019->enter($__internal_ce9389a592bd9501050e42734c3870eb60d7c00781787aee16b0bcbbacc4b019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce9389a592bd9501050e42734c3870eb60d7c00781787aee16b0bcbbacc4b019->leave($__internal_ce9389a592bd9501050e42734c3870eb60d7c00781787aee16b0bcbbacc4b019_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_175f341db0ad4c6d99a4b7bf80631dfac3a8f8a5b4a607b20c952bc5ee6573a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175f341db0ad4c6d99a4b7bf80631dfac3a8f8a5b4a607b20c952bc5ee6573a6->enter($__internal_175f341db0ad4c6d99a4b7bf80631dfac3a8f8a5b4a607b20c952bc5ee6573a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_175f341db0ad4c6d99a4b7bf80631dfac3a8f8a5b4a607b20c952bc5ee6573a6->leave($__internal_175f341db0ad4c6d99a4b7bf80631dfac3a8f8a5b4a607b20c952bc5ee6573a6_prof);

    }

    // line 19
    public function block_corps($context, array $blocks = array())
    {
        $__internal_27109b481012755c470b7677185e0b594264372bb566352a284e7a261d9b2875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27109b481012755c470b7677185e0b594264372bb566352a284e7a261d9b2875->enter($__internal_27109b481012755c470b7677185e0b594264372bb566352a284e7a261d9b2875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        
        $__internal_27109b481012755c470b7677185e0b594264372bb566352a284e7a261d9b2875->leave($__internal_27109b481012755c470b7677185e0b594264372bb566352a284e7a261d9b2875_prof);

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
", "HopitalAdministrationBundle:Default:index.html.twig", "C:\\wamp64\\www\\desprez\\Sprint1\\Symfony\\src\\Hopital\\AdministrationBundle/Resources/views/Default/index.html.twig");
    }
}
