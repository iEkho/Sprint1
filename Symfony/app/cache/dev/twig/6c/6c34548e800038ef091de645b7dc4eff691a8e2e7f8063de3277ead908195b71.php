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
        $__internal_21f54756dcf948eb9ae2c411e547c272f5b65ae39d1c5099edf69999ea52cba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f54756dcf948eb9ae2c411e547c272f5b65ae39d1c5099edf69999ea52cba9->enter($__internal_21f54756dcf948eb9ae2c411e547c272f5b65ae39d1c5099edf69999ea52cba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_21f54756dcf948eb9ae2c411e547c272f5b65ae39d1c5099edf69999ea52cba9->leave($__internal_21f54756dcf948eb9ae2c411e547c272f5b65ae39d1c5099edf69999ea52cba9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_21f880724822b0709733b7ac8096c906ecfd8e28ec5579ef2ca8375dea2db461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f880724822b0709733b7ac8096c906ecfd8e28ec5579ef2ca8375dea2db461->enter($__internal_21f880724822b0709733b7ac8096c906ecfd8e28ec5579ef2ca8375dea2db461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hopital";
        
        $__internal_21f880724822b0709733b7ac8096c906ecfd8e28ec5579ef2ca8375dea2db461->leave($__internal_21f880724822b0709733b7ac8096c906ecfd8e28ec5579ef2ca8375dea2db461_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c724310078a5ac457abb817b0f0fce0699d32aab5c1868d712d5ae549eaf90ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c724310078a5ac457abb817b0f0fce0699d32aab5c1868d712d5ae549eaf90ba->enter($__internal_c724310078a5ac457abb817b0f0fce0699d32aab5c1868d712d5ae549eaf90ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c724310078a5ac457abb817b0f0fce0699d32aab5c1868d712d5ae549eaf90ba->leave($__internal_c724310078a5ac457abb817b0f0fce0699d32aab5c1868d712d5ae549eaf90ba_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e4c4f23d160028b84f16a2535c5776f85716f6f9f104efe162493828b31d7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4c4f23d160028b84f16a2535c5776f85716f6f9f104efe162493828b31d7c2->enter($__internal_5e4c4f23d160028b84f16a2535c5776f85716f6f9f104efe162493828b31d7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5e4c4f23d160028b84f16a2535c5776f85716f6f9f104efe162493828b31d7c2->leave($__internal_5e4c4f23d160028b84f16a2535c5776f85716f6f9f104efe162493828b31d7c2_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4aa447f2bea592249f51860bccc1eb50dde13688bdb359126b314b6a76102ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa447f2bea592249f51860bccc1eb50dde13688bdb359126b314b6a76102ecd->enter($__internal_4aa447f2bea592249f51860bccc1eb50dde13688bdb359126b314b6a76102ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4aa447f2bea592249f51860bccc1eb50dde13688bdb359126b314b6a76102ecd->leave($__internal_4aa447f2bea592249f51860bccc1eb50dde13688bdb359126b314b6a76102ecd_prof);

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
