<?php

/* ::base.html.twig */
class __TwigTemplate_7e97168a575ee041210789bbb305889d304c1b5de72befba4dbb90a23d9b25b5 extends Twig_Template
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
        $__internal_fa70b91ccd43b91cab7f72322fedaeaa7dbcd03f2f2f97743cde5e3dc945d070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa70b91ccd43b91cab7f72322fedaeaa7dbcd03f2f2f97743cde5e3dc945d070->enter($__internal_fa70b91ccd43b91cab7f72322fedaeaa7dbcd03f2f2f97743cde5e3dc945d070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fa70b91ccd43b91cab7f72322fedaeaa7dbcd03f2f2f97743cde5e3dc945d070->leave($__internal_fa70b91ccd43b91cab7f72322fedaeaa7dbcd03f2f2f97743cde5e3dc945d070_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_521f525e57ccfd0359bebafefccc745321f2e0db9b2712ce56c60c68bf48c798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521f525e57ccfd0359bebafefccc745321f2e0db9b2712ce56c60c68bf48c798->enter($__internal_521f525e57ccfd0359bebafefccc745321f2e0db9b2712ce56c60c68bf48c798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hopital";
        
        $__internal_521f525e57ccfd0359bebafefccc745321f2e0db9b2712ce56c60c68bf48c798->leave($__internal_521f525e57ccfd0359bebafefccc745321f2e0db9b2712ce56c60c68bf48c798_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_990ea95e95789c49c1f25f3cca15d14a9c4d4f9db87dd4857b86e62b9f5ad7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990ea95e95789c49c1f25f3cca15d14a9c4d4f9db87dd4857b86e62b9f5ad7be->enter($__internal_990ea95e95789c49c1f25f3cca15d14a9c4d4f9db87dd4857b86e62b9f5ad7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_990ea95e95789c49c1f25f3cca15d14a9c4d4f9db87dd4857b86e62b9f5ad7be->leave($__internal_990ea95e95789c49c1f25f3cca15d14a9c4d4f9db87dd4857b86e62b9f5ad7be_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5cedbc7c3d64e0ec6d84bc104e9165da4ebff6cb5d3c4f00ff7b95202e09ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5cedbc7c3d64e0ec6d84bc104e9165da4ebff6cb5d3c4f00ff7b95202e09ca7->enter($__internal_a5cedbc7c3d64e0ec6d84bc104e9165da4ebff6cb5d3c4f00ff7b95202e09ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a5cedbc7c3d64e0ec6d84bc104e9165da4ebff6cb5d3c4f00ff7b95202e09ca7->leave($__internal_a5cedbc7c3d64e0ec6d84bc104e9165da4ebff6cb5d3c4f00ff7b95202e09ca7_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eccdf789b315e1880847592b294c1334f56f033e73c666b9c6a6eb3315876256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccdf789b315e1880847592b294c1334f56f033e73c666b9c6a6eb3315876256->enter($__internal_eccdf789b315e1880847592b294c1334f56f033e73c666b9c6a6eb3315876256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eccdf789b315e1880847592b294c1334f56f033e73c666b9c6a6eb3315876256->leave($__internal_eccdf789b315e1880847592b294c1334f56f033e73c666b9c6a6eb3315876256_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 10,  79 => 9,  68 => 6,  56 => 5,  47 => 11,  44 => 10,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Hopital{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
