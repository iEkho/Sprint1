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
        $__internal_c6da116bcb29105fd722182c84d3a0c3b4868a414a0893047981b79e30f3ca61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6da116bcb29105fd722182c84d3a0c3b4868a414a0893047981b79e30f3ca61->enter($__internal_c6da116bcb29105fd722182c84d3a0c3b4868a414a0893047981b79e30f3ca61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c6da116bcb29105fd722182c84d3a0c3b4868a414a0893047981b79e30f3ca61->leave($__internal_c6da116bcb29105fd722182c84d3a0c3b4868a414a0893047981b79e30f3ca61_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_516fa731907fa2a62c5c61027a827a9f4bf2c83d8e8a11890313b7fa2d10a358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516fa731907fa2a62c5c61027a827a9f4bf2c83d8e8a11890313b7fa2d10a358->enter($__internal_516fa731907fa2a62c5c61027a827a9f4bf2c83d8e8a11890313b7fa2d10a358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hopital";
        
        $__internal_516fa731907fa2a62c5c61027a827a9f4bf2c83d8e8a11890313b7fa2d10a358->leave($__internal_516fa731907fa2a62c5c61027a827a9f4bf2c83d8e8a11890313b7fa2d10a358_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7fde47a15e1cff2919d3913008cad9ad8324aef98bf36005c6c2f8ec3818607f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fde47a15e1cff2919d3913008cad9ad8324aef98bf36005c6c2f8ec3818607f->enter($__internal_7fde47a15e1cff2919d3913008cad9ad8324aef98bf36005c6c2f8ec3818607f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7fde47a15e1cff2919d3913008cad9ad8324aef98bf36005c6c2f8ec3818607f->leave($__internal_7fde47a15e1cff2919d3913008cad9ad8324aef98bf36005c6c2f8ec3818607f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_26c833ef7fb72453a9a9cccaa476ba70cc2e3ed031187ddc7b2fbc36484d2b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c833ef7fb72453a9a9cccaa476ba70cc2e3ed031187ddc7b2fbc36484d2b42->enter($__internal_26c833ef7fb72453a9a9cccaa476ba70cc2e3ed031187ddc7b2fbc36484d2b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26c833ef7fb72453a9a9cccaa476ba70cc2e3ed031187ddc7b2fbc36484d2b42->leave($__internal_26c833ef7fb72453a9a9cccaa476ba70cc2e3ed031187ddc7b2fbc36484d2b42_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8f984997a8a2ab38db1892a4f0f593311e8469fb41460b507547e5b9a026c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f984997a8a2ab38db1892a4f0f593311e8469fb41460b507547e5b9a026c51->enter($__internal_e8f984997a8a2ab38db1892a4f0f593311e8469fb41460b507547e5b9a026c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e8f984997a8a2ab38db1892a4f0f593311e8469fb41460b507547e5b9a026c51->leave($__internal_e8f984997a8a2ab38db1892a4f0f593311e8469fb41460b507547e5b9a026c51_prof);

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
