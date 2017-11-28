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
        $__internal_237d6d22c87103f3d5d731d01f52a5d920d0cfd79a1b1c800893f6689ef01b2f = $this->env->getExtension("native_profiler");
        $__internal_237d6d22c87103f3d5d731d01f52a5d920d0cfd79a1b1c800893f6689ef01b2f->enter($__internal_237d6d22c87103f3d5d731d01f52a5d920d0cfd79a1b1c800893f6689ef01b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_237d6d22c87103f3d5d731d01f52a5d920d0cfd79a1b1c800893f6689ef01b2f->leave($__internal_237d6d22c87103f3d5d731d01f52a5d920d0cfd79a1b1c800893f6689ef01b2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac782a092ec02668f4dc490089a2825ba2bbe475533b19b4e9b5bfee1a138a66 = $this->env->getExtension("native_profiler");
        $__internal_ac782a092ec02668f4dc490089a2825ba2bbe475533b19b4e9b5bfee1a138a66->enter($__internal_ac782a092ec02668f4dc490089a2825ba2bbe475533b19b4e9b5bfee1a138a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ac782a092ec02668f4dc490089a2825ba2bbe475533b19b4e9b5bfee1a138a66->leave($__internal_ac782a092ec02668f4dc490089a2825ba2bbe475533b19b4e9b5bfee1a138a66_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c7bd062732da0e252c4480743b382027d7a14c98c0e5592959d4cf4a5abcc09 = $this->env->getExtension("native_profiler");
        $__internal_7c7bd062732da0e252c4480743b382027d7a14c98c0e5592959d4cf4a5abcc09->enter($__internal_7c7bd062732da0e252c4480743b382027d7a14c98c0e5592959d4cf4a5abcc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7c7bd062732da0e252c4480743b382027d7a14c98c0e5592959d4cf4a5abcc09->leave($__internal_7c7bd062732da0e252c4480743b382027d7a14c98c0e5592959d4cf4a5abcc09_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd3564ee9719b500599392705088eaab4422e20aa771de933c6503c41f8f7623 = $this->env->getExtension("native_profiler");
        $__internal_bd3564ee9719b500599392705088eaab4422e20aa771de933c6503c41f8f7623->enter($__internal_bd3564ee9719b500599392705088eaab4422e20aa771de933c6503c41f8f7623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bd3564ee9719b500599392705088eaab4422e20aa771de933c6503c41f8f7623->leave($__internal_bd3564ee9719b500599392705088eaab4422e20aa771de933c6503c41f8f7623_prof);

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
