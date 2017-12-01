<?php

/* HopitalAdministrationBundle:Default:index.html.twig */
class __TwigTemplate_7f1bb590a78e6fe007c1539aa458d64c63c36155d38a000ea7a3fb3ac858a292 extends Twig_Template
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
        $__internal_ea8092255fb39276b3576ded8f6d1bbf3f8ed258b7152cf7f98c1b99ced31161 = $this->env->getExtension("native_profiler");
        $__internal_ea8092255fb39276b3576ded8f6d1bbf3f8ed258b7152cf7f98c1b99ced31161->enter($__internal_ea8092255fb39276b3576ded8f6d1bbf3f8ed258b7152cf7f98c1b99ced31161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea8092255fb39276b3576ded8f6d1bbf3f8ed258b7152cf7f98c1b99ced31161->leave($__internal_ea8092255fb39276b3576ded8f6d1bbf3f8ed258b7152cf7f98c1b99ced31161_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d15fe620ccd9bb54e30986af50028f106eafb994c29f7ae9d4db4f5633730e2 = $this->env->getExtension("native_profiler");
        $__internal_4d15fe620ccd9bb54e30986af50028f106eafb994c29f7ae9d4db4f5633730e2->enter($__internal_4d15fe620ccd9bb54e30986af50028f106eafb994c29f7ae9d4db4f5633730e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("hopital_administration_homepage", array());
        echo "\">Accueil</a></li>
<li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("hopital_administration_viewPatient", array());
        echo "\">Gestion des patients</a></li>
<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("hopital_administration_viewsejour", array());
        echo "\">Gestion des séjours</a></li>
<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("hopital_administration_viewChambre", array());
        echo "\">Gestion des chambres</a></li>
<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("hopital_administration_viewService", array());
        echo "\">Gestion des services</a></li>
<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("hopital_administration_newpatient", array());
        echo "\">Nouveau patient</a></li>
<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("hopital_administration_newsejour", array());
        echo "\">Nouveau séjour</a></li>
<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("hopital_administration_newservice", array());
        echo "\">Nouveau service</a></li>
<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("hopital_administration_newChambre", array());
        echo "\">Nouvelle chambre</a></li>

<div id=\"corps\">
  ";
        // line 14
        $this->displayBlock('corps', $context, $blocks);
        // line 15
        echo "</div>
";
        
        $__internal_4d15fe620ccd9bb54e30986af50028f106eafb994c29f7ae9d4db4f5633730e2->leave($__internal_4d15fe620ccd9bb54e30986af50028f106eafb994c29f7ae9d4db4f5633730e2_prof);

    }

    // line 14
    public function block_corps($context, array $blocks = array())
    {
        $__internal_9bb9b8fceaf0f0ead6d915045e47a63a4f7243e895af81fc8b5df93d0bd6c68e = $this->env->getExtension("native_profiler");
        $__internal_9bb9b8fceaf0f0ead6d915045e47a63a4f7243e895af81fc8b5df93d0bd6c68e->enter($__internal_9bb9b8fceaf0f0ead6d915045e47a63a4f7243e895af81fc8b5df93d0bd6c68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        
        $__internal_9bb9b8fceaf0f0ead6d915045e47a63a4f7243e895af81fc8b5df93d0bd6c68e->leave($__internal_9bb9b8fceaf0f0ead6d915045e47a63a4f7243e895af81fc8b5df93d0bd6c68e_prof);

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
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* <li><a href="{{path('hopital_administration_homepage',{})}}">Accueil</a></li>*/
/* <li><a href="{{path('hopital_administration_viewPatient',{})}}">Gestion des patients</a></li>*/
/* <li><a href="{{path('hopital_administration_viewsejour',{})}}">Gestion des séjours</a></li>*/
/* <li><a href="{{path('hopital_administration_viewChambre',{})}}">Gestion des chambres</a></li>*/
/* <li><a href="{{path('hopital_administration_viewService',{})}}">Gestion des services</a></li>*/
/* <li><a href="{{path('hopital_administration_newpatient',{})}}">Nouveau patient</a></li>*/
/* <li><a href="{{path('hopital_administration_newsejour',{})}}">Nouveau séjour</a></li>*/
/* <li><a href="{{path('hopital_administration_newservice',{})}}">Nouveau service</a></li>*/
/* <li><a href="{{path('hopital_administration_newChambre',{})}}">Nouvelle chambre</a></li>*/
/* */
/* <div id="corps">*/
/*   {% block corps %}{% endblock %}*/
/* </div>*/
/* {% endblock %}*/
/* */
