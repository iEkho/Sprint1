<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_53bea7f076505798b3d45b8e6b1c43f34dd01d6e73d20317bc70283766f11cec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64e4938fce6ea098b3d7b7acd1d7600b482b57644755e8d745dddb83512694eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e4938fce6ea098b3d7b7acd1d7600b482b57644755e8d745dddb83512694eb->enter($__internal_64e4938fce6ea098b3d7b7acd1d7600b482b57644755e8d745dddb83512694eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64e4938fce6ea098b3d7b7acd1d7600b482b57644755e8d745dddb83512694eb->leave($__internal_64e4938fce6ea098b3d7b7acd1d7600b482b57644755e8d745dddb83512694eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34646be90d12c74bc2b14321c7d9315ebc9fc5f0fdf4c9c304c846dafc2b032f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34646be90d12c74bc2b14321c7d9315ebc9fc5f0fdf4c9c304c846dafc2b032f->enter($__internal_34646be90d12c74bc2b14321c7d9315ebc9fc5f0fdf4c9c304c846dafc2b032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_34646be90d12c74bc2b14321c7d9315ebc9fc5f0fdf4c9c304c846dafc2b032f->leave($__internal_34646be90d12c74bc2b14321c7d9315ebc9fc5f0fdf4c9c304c846dafc2b032f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a95472126bb792bbca03bf10efc8596ed46591882d69961de24fe02d523b578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a95472126bb792bbca03bf10efc8596ed46591882d69961de24fe02d523b578->enter($__internal_9a95472126bb792bbca03bf10efc8596ed46591882d69961de24fe02d523b578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9a95472126bb792bbca03bf10efc8596ed46591882d69961de24fe02d523b578->leave($__internal_9a95472126bb792bbca03bf10efc8596ed46591882d69961de24fe02d523b578_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e6df58164bfbadcc4e6555c3d7ea43a000e6d7e0d0c37497543161eabe61467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6df58164bfbadcc4e6555c3d7ea43a000e6d7e0d0c37497543161eabe61467->enter($__internal_7e6df58164bfbadcc4e6555c3d7ea43a000e6d7e0d0c37497543161eabe61467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7e6df58164bfbadcc4e6555c3d7ea43a000e6d7e0d0c37497543161eabe61467->leave($__internal_7e6df58164bfbadcc4e6555c3d7ea43a000e6d7e0d0c37497543161eabe61467_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
