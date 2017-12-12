<?php

/* base.html.twig */
class __TwigTemplate_b6d3c60154563c4713f83fd5caa265ff157ea5cfeb0c613374cfaafda437e143 extends Twig_Template
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
        $__internal_031e4a873405aac38bf7420c9488e64dde648c902fe1e972d6a9d7e095fa72ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031e4a873405aac38bf7420c9488e64dde648c902fe1e972d6a9d7e095fa72ce->enter($__internal_031e4a873405aac38bf7420c9488e64dde648c902fe1e972d6a9d7e095fa72ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_031e4a873405aac38bf7420c9488e64dde648c902fe1e972d6a9d7e095fa72ce->leave($__internal_031e4a873405aac38bf7420c9488e64dde648c902fe1e972d6a9d7e095fa72ce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_693eb842f630814c6fb020e7656f0007d456d617f98092a204a8da39f7d84466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693eb842f630814c6fb020e7656f0007d456d617f98092a204a8da39f7d84466->enter($__internal_693eb842f630814c6fb020e7656f0007d456d617f98092a204a8da39f7d84466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hopital";
        
        $__internal_693eb842f630814c6fb020e7656f0007d456d617f98092a204a8da39f7d84466->leave($__internal_693eb842f630814c6fb020e7656f0007d456d617f98092a204a8da39f7d84466_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f4292b2d7240608e0e2a6f4d06e27ef5fb8b497f64a1e21fc2625fd1a2d72ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4292b2d7240608e0e2a6f4d06e27ef5fb8b497f64a1e21fc2625fd1a2d72ed->enter($__internal_4f4292b2d7240608e0e2a6f4d06e27ef5fb8b497f64a1e21fc2625fd1a2d72ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4f4292b2d7240608e0e2a6f4d06e27ef5fb8b497f64a1e21fc2625fd1a2d72ed->leave($__internal_4f4292b2d7240608e0e2a6f4d06e27ef5fb8b497f64a1e21fc2625fd1a2d72ed_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ba080a0499627d738ccc82d58e62f9af11e48155cc4110d15a2e813e7bbb889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba080a0499627d738ccc82d58e62f9af11e48155cc4110d15a2e813e7bbb889->enter($__internal_4ba080a0499627d738ccc82d58e62f9af11e48155cc4110d15a2e813e7bbb889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4ba080a0499627d738ccc82d58e62f9af11e48155cc4110d15a2e813e7bbb889->leave($__internal_4ba080a0499627d738ccc82d58e62f9af11e48155cc4110d15a2e813e7bbb889_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8631d3da37cd9ccf42b0a0a3106367258e5d083ac4cb3d22ae295472506f49c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8631d3da37cd9ccf42b0a0a3106367258e5d083ac4cb3d22ae295472506f49c6->enter($__internal_8631d3da37cd9ccf42b0a0a3106367258e5d083ac4cb3d22ae295472506f49c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8631d3da37cd9ccf42b0a0a3106367258e5d083ac4cb3d22ae295472506f49c6->leave($__internal_8631d3da37cd9ccf42b0a0a3106367258e5d083ac4cb3d22ae295472506f49c6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
