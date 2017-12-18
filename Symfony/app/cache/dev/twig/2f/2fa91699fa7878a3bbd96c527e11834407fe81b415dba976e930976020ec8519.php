<?php

/* base.html.twig */
class __TwigTemplate_0e1fc4ed9898c1d2cd4685aac74fb77d03683d64d2537d1a276abfe7d6b65256 extends Twig_Template
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
        $__internal_af3f3b26d86b9cadd9db7fa8e2cb5319df40dac8cd0584b87f775d8bfc1a8b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3f3b26d86b9cadd9db7fa8e2cb5319df40dac8cd0584b87f775d8bfc1a8b51->enter($__internal_af3f3b26d86b9cadd9db7fa8e2cb5319df40dac8cd0584b87f775d8bfc1a8b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_af3f3b26d86b9cadd9db7fa8e2cb5319df40dac8cd0584b87f775d8bfc1a8b51->leave($__internal_af3f3b26d86b9cadd9db7fa8e2cb5319df40dac8cd0584b87f775d8bfc1a8b51_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_388a4e10eea848f812459b7751f07ebb2b292fb5eaff52ad2d25fb797686033c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388a4e10eea848f812459b7751f07ebb2b292fb5eaff52ad2d25fb797686033c->enter($__internal_388a4e10eea848f812459b7751f07ebb2b292fb5eaff52ad2d25fb797686033c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hopital";
        
        $__internal_388a4e10eea848f812459b7751f07ebb2b292fb5eaff52ad2d25fb797686033c->leave($__internal_388a4e10eea848f812459b7751f07ebb2b292fb5eaff52ad2d25fb797686033c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d1c20e2efbb19c90a704ff544c402fa6c95a8666c8a27643ed54b0021026ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1c20e2efbb19c90a704ff544c402fa6c95a8666c8a27643ed54b0021026ade->enter($__internal_2d1c20e2efbb19c90a704ff544c402fa6c95a8666c8a27643ed54b0021026ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2d1c20e2efbb19c90a704ff544c402fa6c95a8666c8a27643ed54b0021026ade->leave($__internal_2d1c20e2efbb19c90a704ff544c402fa6c95a8666c8a27643ed54b0021026ade_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6857656039824dcacbce65a898c945d427dc77c70b41f9985133d553a70bc6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6857656039824dcacbce65a898c945d427dc77c70b41f9985133d553a70bc6e->enter($__internal_c6857656039824dcacbce65a898c945d427dc77c70b41f9985133d553a70bc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c6857656039824dcacbce65a898c945d427dc77c70b41f9985133d553a70bc6e->leave($__internal_c6857656039824dcacbce65a898c945d427dc77c70b41f9985133d553a70bc6e_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f0a087c251394c993b222ab35dc921d274adb263f435d0b62f7d8b4fd29c016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0a087c251394c993b222ab35dc921d274adb263f435d0b62f7d8b4fd29c016->enter($__internal_5f0a087c251394c993b222ab35dc921d274adb263f435d0b62f7d8b4fd29c016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f0a087c251394c993b222ab35dc921d274adb263f435d0b62f7d8b4fd29c016->leave($__internal_5f0a087c251394c993b222ab35dc921d274adb263f435d0b62f7d8b4fd29c016_prof);

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
", "base.html.twig", "C:\\wamp64\\www\\desprez\\Sprint1\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
