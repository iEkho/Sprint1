<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_192dbbd655bc3e602f94c7aa209bbae5c92a2671f903e16222252bec4c09db74 extends Twig_Template
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
        $__internal_77147c6bb1b9f2543237fed1570c4d952353c17327342545d1854676262ba376 = $this->env->getExtension("native_profiler");
        $__internal_77147c6bb1b9f2543237fed1570c4d952353c17327342545d1854676262ba376->enter($__internal_77147c6bb1b9f2543237fed1570c4d952353c17327342545d1854676262ba376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77147c6bb1b9f2543237fed1570c4d952353c17327342545d1854676262ba376->leave($__internal_77147c6bb1b9f2543237fed1570c4d952353c17327342545d1854676262ba376_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ee320b1a8dea59655758e6c710348c5238cee8d2567c06bbcf1a89fe259ac5d = $this->env->getExtension("native_profiler");
        $__internal_1ee320b1a8dea59655758e6c710348c5238cee8d2567c06bbcf1a89fe259ac5d->enter($__internal_1ee320b1a8dea59655758e6c710348c5238cee8d2567c06bbcf1a89fe259ac5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1ee320b1a8dea59655758e6c710348c5238cee8d2567c06bbcf1a89fe259ac5d->leave($__internal_1ee320b1a8dea59655758e6c710348c5238cee8d2567c06bbcf1a89fe259ac5d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b5cbb4c47b70de66ab800e1fca0f0331166a80face919d4e4df00bda762e06e = $this->env->getExtension("native_profiler");
        $__internal_0b5cbb4c47b70de66ab800e1fca0f0331166a80face919d4e4df00bda762e06e->enter($__internal_0b5cbb4c47b70de66ab800e1fca0f0331166a80face919d4e4df00bda762e06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0b5cbb4c47b70de66ab800e1fca0f0331166a80face919d4e4df00bda762e06e->leave($__internal_0b5cbb4c47b70de66ab800e1fca0f0331166a80face919d4e4df00bda762e06e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ee3ac76caf80e02e24df90a11b992e7156b1fac4c132b7518f564ef6d849acf = $this->env->getExtension("native_profiler");
        $__internal_9ee3ac76caf80e02e24df90a11b992e7156b1fac4c132b7518f564ef6d849acf->enter($__internal_9ee3ac76caf80e02e24df90a11b992e7156b1fac4c132b7518f564ef6d849acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9ee3ac76caf80e02e24df90a11b992e7156b1fac4c132b7518f564ef6d849acf->leave($__internal_9ee3ac76caf80e02e24df90a11b992e7156b1fac4c132b7518f564ef6d849acf_prof);

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
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
