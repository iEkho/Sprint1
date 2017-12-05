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
        $__internal_c623ad3940450f31aeab85e09607e9e248e721f7e6703972f5f36faaeb990eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c623ad3940450f31aeab85e09607e9e248e721f7e6703972f5f36faaeb990eaf->enter($__internal_c623ad3940450f31aeab85e09607e9e248e721f7e6703972f5f36faaeb990eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c623ad3940450f31aeab85e09607e9e248e721f7e6703972f5f36faaeb990eaf->leave($__internal_c623ad3940450f31aeab85e09607e9e248e721f7e6703972f5f36faaeb990eaf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8f2d4de11e27a62770a48c8c37e1b6469bbfbff26b5544e6dc0daa3209370f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2d4de11e27a62770a48c8c37e1b6469bbfbff26b5544e6dc0daa3209370f37->enter($__internal_8f2d4de11e27a62770a48c8c37e1b6469bbfbff26b5544e6dc0daa3209370f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8f2d4de11e27a62770a48c8c37e1b6469bbfbff26b5544e6dc0daa3209370f37->leave($__internal_8f2d4de11e27a62770a48c8c37e1b6469bbfbff26b5544e6dc0daa3209370f37_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ccedf1d1f39e870bca52b21b1d1e7dfeea760e32d9f50b10d6eea2d91e1b5f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccedf1d1f39e870bca52b21b1d1e7dfeea760e32d9f50b10d6eea2d91e1b5f83->enter($__internal_ccedf1d1f39e870bca52b21b1d1e7dfeea760e32d9f50b10d6eea2d91e1b5f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ccedf1d1f39e870bca52b21b1d1e7dfeea760e32d9f50b10d6eea2d91e1b5f83->leave($__internal_ccedf1d1f39e870bca52b21b1d1e7dfeea760e32d9f50b10d6eea2d91e1b5f83_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0ff76d6b869d50876fa809db53a3296ab2d7d1c21ac862318dfb6eb8c06bc4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ff76d6b869d50876fa809db53a3296ab2d7d1c21ac862318dfb6eb8c06bc4a->enter($__internal_f0ff76d6b869d50876fa809db53a3296ab2d7d1c21ac862318dfb6eb8c06bc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f0ff76d6b869d50876fa809db53a3296ab2d7d1c21ac862318dfb6eb8c06bc4a->leave($__internal_f0ff76d6b869d50876fa809db53a3296ab2d7d1c21ac862318dfb6eb8c06bc4a_prof);

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
