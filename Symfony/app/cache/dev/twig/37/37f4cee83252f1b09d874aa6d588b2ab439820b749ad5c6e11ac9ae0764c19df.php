<?php

/* ::base.html.twig */
class __TwigTemplate_e2855cadc6dfd05786dd8897211ac508b01c7287207051c62788de0055fc82fb extends Twig_Template
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
        $__internal_64f9e2ca8ce173a30dc224e4a5b954c08f66b6a5762c8073d5b0ffe84e63b4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f9e2ca8ce173a30dc224e4a5b954c08f66b6a5762c8073d5b0ffe84e63b4bf->enter($__internal_64f9e2ca8ce173a30dc224e4a5b954c08f66b6a5762c8073d5b0ffe84e63b4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_64f9e2ca8ce173a30dc224e4a5b954c08f66b6a5762c8073d5b0ffe84e63b4bf->leave($__internal_64f9e2ca8ce173a30dc224e4a5b954c08f66b6a5762c8073d5b0ffe84e63b4bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78ab31db8104f91db23d8b0890dac6f737cfcbcc6670ebcfe8ea040c8b476d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ab31db8104f91db23d8b0890dac6f737cfcbcc6670ebcfe8ea040c8b476d1c->enter($__internal_78ab31db8104f91db23d8b0890dac6f737cfcbcc6670ebcfe8ea040c8b476d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hopital";
        
        $__internal_78ab31db8104f91db23d8b0890dac6f737cfcbcc6670ebcfe8ea040c8b476d1c->leave($__internal_78ab31db8104f91db23d8b0890dac6f737cfcbcc6670ebcfe8ea040c8b476d1c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1a5d37aeab4ebb1044a402d87436782bb9850089262855926c508a49b0ee903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a5d37aeab4ebb1044a402d87436782bb9850089262855926c508a49b0ee903->enter($__internal_a1a5d37aeab4ebb1044a402d87436782bb9850089262855926c508a49b0ee903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a1a5d37aeab4ebb1044a402d87436782bb9850089262855926c508a49b0ee903->leave($__internal_a1a5d37aeab4ebb1044a402d87436782bb9850089262855926c508a49b0ee903_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d719e33f0bc1b993a6561c9be96c686e5f68233525654ecb87e55eea9d62eaa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d719e33f0bc1b993a6561c9be96c686e5f68233525654ecb87e55eea9d62eaa3->enter($__internal_d719e33f0bc1b993a6561c9be96c686e5f68233525654ecb87e55eea9d62eaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d719e33f0bc1b993a6561c9be96c686e5f68233525654ecb87e55eea9d62eaa3->leave($__internal_d719e33f0bc1b993a6561c9be96c686e5f68233525654ecb87e55eea9d62eaa3_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b157dea8e525e8e62dc558ba8d1176f0262e8f7ce294140e38355681ae9f0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b157dea8e525e8e62dc558ba8d1176f0262e8f7ce294140e38355681ae9f0cb->enter($__internal_9b157dea8e525e8e62dc558ba8d1176f0262e8f7ce294140e38355681ae9f0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9b157dea8e525e8e62dc558ba8d1176f0262e8f7ce294140e38355681ae9f0cb->leave($__internal_9b157dea8e525e8e62dc558ba8d1176f0262e8f7ce294140e38355681ae9f0cb_prof);

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
", "::base.html.twig", "C:\\wamp64\\www\\desprez\\Sprint1\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
