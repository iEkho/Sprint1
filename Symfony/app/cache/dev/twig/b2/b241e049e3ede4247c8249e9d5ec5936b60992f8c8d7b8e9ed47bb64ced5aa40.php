<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5c6e622120cb9acee6208ccb6adf0eac4968c76e122886dd430abc5d0942bfff extends Twig_Template
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
        $__internal_7f77e2cb2fa481ff335b2ac55f2e2b7f8fc19a628503f8b7425f2266a118f131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f77e2cb2fa481ff335b2ac55f2e2b7f8fc19a628503f8b7425f2266a118f131->enter($__internal_7f77e2cb2fa481ff335b2ac55f2e2b7f8fc19a628503f8b7425f2266a118f131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f77e2cb2fa481ff335b2ac55f2e2b7f8fc19a628503f8b7425f2266a118f131->leave($__internal_7f77e2cb2fa481ff335b2ac55f2e2b7f8fc19a628503f8b7425f2266a118f131_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b34b2749d66addb45cd745d0eb79171f89ba3c2a9c9e2c0237cf9021c236d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b34b2749d66addb45cd745d0eb79171f89ba3c2a9c9e2c0237cf9021c236d45->enter($__internal_2b34b2749d66addb45cd745d0eb79171f89ba3c2a9c9e2c0237cf9021c236d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2b34b2749d66addb45cd745d0eb79171f89ba3c2a9c9e2c0237cf9021c236d45->leave($__internal_2b34b2749d66addb45cd745d0eb79171f89ba3c2a9c9e2c0237cf9021c236d45_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b41ee62f9a9243cc0154c0e41cbbcbfa2aca1736b87ae9312ad025ce40382a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41ee62f9a9243cc0154c0e41cbbcbfa2aca1736b87ae9312ad025ce40382a6d->enter($__internal_b41ee62f9a9243cc0154c0e41cbbcbfa2aca1736b87ae9312ad025ce40382a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b41ee62f9a9243cc0154c0e41cbbcbfa2aca1736b87ae9312ad025ce40382a6d->leave($__internal_b41ee62f9a9243cc0154c0e41cbbcbfa2aca1736b87ae9312ad025ce40382a6d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c41511485a2c2a4f05cc54cbd7654e3593498f6a2ec8ce64a0a823c4968b1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c41511485a2c2a4f05cc54cbd7654e3593498f6a2ec8ce64a0a823c4968b1df->enter($__internal_3c41511485a2c2a4f05cc54cbd7654e3593498f6a2ec8ce64a0a823c4968b1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3c41511485a2c2a4f05cc54cbd7654e3593498f6a2ec8ce64a0a823c4968b1df->leave($__internal_3c41511485a2c2a4f05cc54cbd7654e3593498f6a2ec8ce64a0a823c4968b1df_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\desprez\\Sprint1\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
