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
        $__internal_f6a9690bc431f99990f67e4ca3738a87ed7c32fac19e2604210434da69fe1ffe = $this->env->getExtension("native_profiler");
        $__internal_f6a9690bc431f99990f67e4ca3738a87ed7c32fac19e2604210434da69fe1ffe->enter($__internal_f6a9690bc431f99990f67e4ca3738a87ed7c32fac19e2604210434da69fe1ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6a9690bc431f99990f67e4ca3738a87ed7c32fac19e2604210434da69fe1ffe->leave($__internal_f6a9690bc431f99990f67e4ca3738a87ed7c32fac19e2604210434da69fe1ffe_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_90325c942f0a76f8d64a0f560c8e932bc7d7be50cbb9dec5ca73d9cbf7e33186 = $this->env->getExtension("native_profiler");
        $__internal_90325c942f0a76f8d64a0f560c8e932bc7d7be50cbb9dec5ca73d9cbf7e33186->enter($__internal_90325c942f0a76f8d64a0f560c8e932bc7d7be50cbb9dec5ca73d9cbf7e33186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90325c942f0a76f8d64a0f560c8e932bc7d7be50cbb9dec5ca73d9cbf7e33186->leave($__internal_90325c942f0a76f8d64a0f560c8e932bc7d7be50cbb9dec5ca73d9cbf7e33186_prof);

    }

    // line 9
    public function block_corps($context, array $blocks = array())
    {
        $__internal_644ba2b82125793f6d37538e2ac84eb10b0ada6ebfe97c3ec3152520b8b75b3f = $this->env->getExtension("native_profiler");
        $__internal_644ba2b82125793f6d37538e2ac84eb10b0ada6ebfe97c3ec3152520b8b75b3f->enter($__internal_644ba2b82125793f6d37538e2ac84eb10b0ada6ebfe97c3ec3152520b8b75b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        
        $__internal_644ba2b82125793f6d37538e2ac84eb10b0ada6ebfe97c3ec3152520b8b75b3f->leave($__internal_644ba2b82125793f6d37538e2ac84eb10b0ada6ebfe97c3ec3152520b8b75b3f_prof);

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
