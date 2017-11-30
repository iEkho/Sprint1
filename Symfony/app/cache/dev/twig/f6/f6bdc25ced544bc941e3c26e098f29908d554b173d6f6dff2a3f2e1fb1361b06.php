<?php

/* HopitalAdministrationBundle:Default:index.html.twig */
class __TwigTemplate_2eb0b544204b5906668cfc06884d6b49bb986fe4e7fb1567042bbe883e50ce24 extends Twig_Template
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
        $__internal_8d4c848ed0ddce77bc4143ee17b70414f7f0b2126f7e40d9569aca36e7bd201c = $this->env->getExtension("native_profiler");
        $__internal_8d4c848ed0ddce77bc4143ee17b70414f7f0b2126f7e40d9569aca36e7bd201c->enter($__internal_8d4c848ed0ddce77bc4143ee17b70414f7f0b2126f7e40d9569aca36e7bd201c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d4c848ed0ddce77bc4143ee17b70414f7f0b2126f7e40d9569aca36e7bd201c->leave($__internal_8d4c848ed0ddce77bc4143ee17b70414f7f0b2126f7e40d9569aca36e7bd201c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_acf09c11c96b2da051a986e1beda782df0dc94d1eb30957d04f3e741070f8a1d = $this->env->getExtension("native_profiler");
        $__internal_acf09c11c96b2da051a986e1beda782df0dc94d1eb30957d04f3e741070f8a1d->enter($__internal_acf09c11c96b2da051a986e1beda782df0dc94d1eb30957d04f3e741070f8a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("hopital_administration_newpatient", array());
        echo "\">Nouveau patient</a></li>
<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("hopital_administration_newsejour", array());
        echo "\">Nouveau séjour</a></li>
<div id=\"corps\">
  ";
        // line 9
        $this->displayBlock('corps', $context, $blocks);
        // line 10
        echo "</div>
";
        
        $__internal_acf09c11c96b2da051a986e1beda782df0dc94d1eb30957d04f3e741070f8a1d->leave($__internal_acf09c11c96b2da051a986e1beda782df0dc94d1eb30957d04f3e741070f8a1d_prof);

    }

    // line 9
    public function block_corps($context, array $blocks = array())
    {
        $__internal_82d57c19a82b93f1bf4f6a40be94c60becb8e460c00ccb1d66c70429572e923e = $this->env->getExtension("native_profiler");
        $__internal_82d57c19a82b93f1bf4f6a40be94c60becb8e460c00ccb1d66c70429572e923e->enter($__internal_82d57c19a82b93f1bf4f6a40be94c60becb8e460c00ccb1d66c70429572e923e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        
        $__internal_82d57c19a82b93f1bf4f6a40be94c60becb8e460c00ccb1d66c70429572e923e->leave($__internal_82d57c19a82b93f1bf4f6a40be94c60becb8e460c00ccb1d66c70429572e923e_prof);

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
        return array (  73 => 9,  65 => 10,  63 => 9,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* <li><a href="{{path('hopital_administration_homepage',{})}}">Accueil</a></li>*/
/* <li><a href="{{path('hopital_administration_viewPatient',{})}}">Gestion des patients</a></li>*/
/* <li><a href="{{path('hopital_administration_viewsejour',{})}}">Gestion des séjours</a></li>*/
/* <li><a href="{{path('hopital_administration_newpatient',{})}}">Nouveau patient</a></li>*/
/* <li><a href="{{path('hopital_administration_newsejour',{})}}">Nouveau séjour</a></li>*/
/* <div id="corps">*/
/*   {% block corps %}{% endblock %}*/
/* </div>*/
/* {% endblock %}*/
/* */
