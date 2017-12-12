<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf6a421da1652586a12aaa46422295061fe7c6b166d8f99b6e3bf47e77243bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78bd156326d0abb0bc95dab823232315ef0332255e7ec346a93e92bc2af07f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bd156326d0abb0bc95dab823232315ef0332255e7ec346a93e92bc2af07f41->enter($__internal_78bd156326d0abb0bc95dab823232315ef0332255e7ec346a93e92bc2af07f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78bd156326d0abb0bc95dab823232315ef0332255e7ec346a93e92bc2af07f41->leave($__internal_78bd156326d0abb0bc95dab823232315ef0332255e7ec346a93e92bc2af07f41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9da9747ab258a0ab4fb46d7ee4eb6c401ecb92057b7b9c677044b82f1c04dabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da9747ab258a0ab4fb46d7ee4eb6c401ecb92057b7b9c677044b82f1c04dabe->enter($__internal_9da9747ab258a0ab4fb46d7ee4eb6c401ecb92057b7b9c677044b82f1c04dabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9da9747ab258a0ab4fb46d7ee4eb6c401ecb92057b7b9c677044b82f1c04dabe->leave($__internal_9da9747ab258a0ab4fb46d7ee4eb6c401ecb92057b7b9c677044b82f1c04dabe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f751ffb16dbf58673e5ad458a2aba526c960b33bd17ff4cda3657c49a4e37def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f751ffb16dbf58673e5ad458a2aba526c960b33bd17ff4cda3657c49a4e37def->enter($__internal_f751ffb16dbf58673e5ad458a2aba526c960b33bd17ff4cda3657c49a4e37def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f751ffb16dbf58673e5ad458a2aba526c960b33bd17ff4cda3657c49a4e37def->leave($__internal_f751ffb16dbf58673e5ad458a2aba526c960b33bd17ff4cda3657c49a4e37def_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9089ccf09b6a651a5e11a4cb1ba4ed2d5659106a1b21a414f70d7c312eac3f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9089ccf09b6a651a5e11a4cb1ba4ed2d5659106a1b21a414f70d7c312eac3f06->enter($__internal_9089ccf09b6a651a5e11a4cb1ba4ed2d5659106a1b21a414f70d7c312eac3f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9089ccf09b6a651a5e11a4cb1ba4ed2d5659106a1b21a414f70d7c312eac3f06->leave($__internal_9089ccf09b6a651a5e11a4cb1ba4ed2d5659106a1b21a414f70d7c312eac3f06_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
