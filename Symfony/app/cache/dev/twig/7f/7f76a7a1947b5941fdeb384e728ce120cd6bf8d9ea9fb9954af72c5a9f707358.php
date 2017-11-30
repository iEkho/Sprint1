<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_17b5a051a2b5015a34ae77842c6419077dd2505c0ca87a16133df8d8f1d03931 extends Twig_Template
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
        $__internal_491fe81fb780e8ddd842b118ad786e0aafc206c0bb3ad67862e72904c2c1442a = $this->env->getExtension("native_profiler");
        $__internal_491fe81fb780e8ddd842b118ad786e0aafc206c0bb3ad67862e72904c2c1442a->enter($__internal_491fe81fb780e8ddd842b118ad786e0aafc206c0bb3ad67862e72904c2c1442a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_491fe81fb780e8ddd842b118ad786e0aafc206c0bb3ad67862e72904c2c1442a->leave($__internal_491fe81fb780e8ddd842b118ad786e0aafc206c0bb3ad67862e72904c2c1442a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4761d75d83e490bbcdb31a3a15dcd8507a1bc5b8ef93c28d07594a1e6e5c478 = $this->env->getExtension("native_profiler");
        $__internal_f4761d75d83e490bbcdb31a3a15dcd8507a1bc5b8ef93c28d07594a1e6e5c478->enter($__internal_f4761d75d83e490bbcdb31a3a15dcd8507a1bc5b8ef93c28d07594a1e6e5c478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f4761d75d83e490bbcdb31a3a15dcd8507a1bc5b8ef93c28d07594a1e6e5c478->leave($__internal_f4761d75d83e490bbcdb31a3a15dcd8507a1bc5b8ef93c28d07594a1e6e5c478_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6842e3b2efdaf73bd04d7ec2f462253568afed8e4b92c3197c4baff7acc8372c = $this->env->getExtension("native_profiler");
        $__internal_6842e3b2efdaf73bd04d7ec2f462253568afed8e4b92c3197c4baff7acc8372c->enter($__internal_6842e3b2efdaf73bd04d7ec2f462253568afed8e4b92c3197c4baff7acc8372c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6842e3b2efdaf73bd04d7ec2f462253568afed8e4b92c3197c4baff7acc8372c->leave($__internal_6842e3b2efdaf73bd04d7ec2f462253568afed8e4b92c3197c4baff7acc8372c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_506914b071c30a4ff05770ad49ed9fd3906cde6c1614900bc9dcd081c7c61b3a = $this->env->getExtension("native_profiler");
        $__internal_506914b071c30a4ff05770ad49ed9fd3906cde6c1614900bc9dcd081c7c61b3a->enter($__internal_506914b071c30a4ff05770ad49ed9fd3906cde6c1614900bc9dcd081c7c61b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_506914b071c30a4ff05770ad49ed9fd3906cde6c1614900bc9dcd081c7c61b3a->leave($__internal_506914b071c30a4ff05770ad49ed9fd3906cde6c1614900bc9dcd081c7c61b3a_prof);

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
