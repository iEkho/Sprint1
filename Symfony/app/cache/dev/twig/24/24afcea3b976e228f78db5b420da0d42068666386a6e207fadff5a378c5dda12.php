<?php

/* ::base.html.twig */
class __TwigTemplate_6f5db2fe5767b58a283b6d7c3b7c727750becde6fc21256d2adc4767860cb65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26d407efa575c7fc7978909cbb7ebfbc7f3962fadf536b1e3761f72bbce7c4fa = $this->env->getExtension("native_profiler");
        $__internal_26d407efa575c7fc7978909cbb7ebfbc7f3962fadf536b1e3761f72bbce7c4fa->enter($__internal_26d407efa575c7fc7978909cbb7ebfbc7f3962fadf536b1e3761f72bbce7c4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_26d407efa575c7fc7978909cbb7ebfbc7f3962fadf536b1e3761f72bbce7c4fa->leave($__internal_26d407efa575c7fc7978909cbb7ebfbc7f3962fadf536b1e3761f72bbce7c4fa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a272b4cdca3164699bbde7add45cd300ea2dfd0638709ec07b366e69e715303 = $this->env->getExtension("native_profiler");
        $__internal_7a272b4cdca3164699bbde7add45cd300ea2dfd0638709ec07b366e69e715303->enter($__internal_7a272b4cdca3164699bbde7add45cd300ea2dfd0638709ec07b366e69e715303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hopital";
        
        $__internal_7a272b4cdca3164699bbde7add45cd300ea2dfd0638709ec07b366e69e715303->leave($__internal_7a272b4cdca3164699bbde7add45cd300ea2dfd0638709ec07b366e69e715303_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d6443737376a9b0f8c89c55a2ab26183964303b2b0a6af6f562cce443e85ef7 = $this->env->getExtension("native_profiler");
        $__internal_5d6443737376a9b0f8c89c55a2ab26183964303b2b0a6af6f562cce443e85ef7->enter($__internal_5d6443737376a9b0f8c89c55a2ab26183964303b2b0a6af6f562cce443e85ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5d6443737376a9b0f8c89c55a2ab26183964303b2b0a6af6f562cce443e85ef7->leave($__internal_5d6443737376a9b0f8c89c55a2ab26183964303b2b0a6af6f562cce443e85ef7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_af578d7d90983a93cdb668d6e6181cfaaf8ba6cf7bb8a0c81ea113ced75e0dba = $this->env->getExtension("native_profiler");
        $__internal_af578d7d90983a93cdb668d6e6181cfaaf8ba6cf7bb8a0c81ea113ced75e0dba->enter($__internal_af578d7d90983a93cdb668d6e6181cfaaf8ba6cf7bb8a0c81ea113ced75e0dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_af578d7d90983a93cdb668d6e6181cfaaf8ba6cf7bb8a0c81ea113ced75e0dba->leave($__internal_af578d7d90983a93cdb668d6e6181cfaaf8ba6cf7bb8a0c81ea113ced75e0dba_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4626af58fff65f9bf6f014edb08d921c08f8731a8e7968044b5b4644ee929703 = $this->env->getExtension("native_profiler");
        $__internal_4626af58fff65f9bf6f014edb08d921c08f8731a8e7968044b5b4644ee929703->enter($__internal_4626af58fff65f9bf6f014edb08d921c08f8731a8e7968044b5b4644ee929703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4626af58fff65f9bf6f014edb08d921c08f8731a8e7968044b5b4644ee929703->leave($__internal_4626af58fff65f9bf6f014edb08d921c08f8731a8e7968044b5b4644ee929703_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 10,  79 => 9,  68 => 6,  56 => 5,  47 => 11,  44 => 10,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Hopital{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
