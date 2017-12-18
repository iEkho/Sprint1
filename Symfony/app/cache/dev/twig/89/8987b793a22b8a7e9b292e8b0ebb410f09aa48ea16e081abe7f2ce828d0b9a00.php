<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a6badf0ac2796bf11d66a51d6bca040529222a11b7af4589c10ee5ee4e6c1b9d extends Twig_Template
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
        $__internal_a22ce411776e267b0ef73253206d09d832598e4705b05ef25bff5bdd433f0caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22ce411776e267b0ef73253206d09d832598e4705b05ef25bff5bdd433f0caf->enter($__internal_a22ce411776e267b0ef73253206d09d832598e4705b05ef25bff5bdd433f0caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a22ce411776e267b0ef73253206d09d832598e4705b05ef25bff5bdd433f0caf->leave($__internal_a22ce411776e267b0ef73253206d09d832598e4705b05ef25bff5bdd433f0caf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ab1cae4e94905c1602c883c7fec36eef10b3be3621d995e68484fa9de0916cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab1cae4e94905c1602c883c7fec36eef10b3be3621d995e68484fa9de0916cd->enter($__internal_4ab1cae4e94905c1602c883c7fec36eef10b3be3621d995e68484fa9de0916cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ab1cae4e94905c1602c883c7fec36eef10b3be3621d995e68484fa9de0916cd->leave($__internal_4ab1cae4e94905c1602c883c7fec36eef10b3be3621d995e68484fa9de0916cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_359a04d848ddd089f589a2724331a3cc1922d4c729ae7737e655c3e083826606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359a04d848ddd089f589a2724331a3cc1922d4c729ae7737e655c3e083826606->enter($__internal_359a04d848ddd089f589a2724331a3cc1922d4c729ae7737e655c3e083826606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_359a04d848ddd089f589a2724331a3cc1922d4c729ae7737e655c3e083826606->leave($__internal_359a04d848ddd089f589a2724331a3cc1922d4c729ae7737e655c3e083826606_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66ac89b243dcdbd0d695ceb145f47784b2661013b6b373ebc0100ae1368fa394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ac89b243dcdbd0d695ceb145f47784b2661013b6b373ebc0100ae1368fa394->enter($__internal_66ac89b243dcdbd0d695ceb145f47784b2661013b6b373ebc0100ae1368fa394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_66ac89b243dcdbd0d695ceb145f47784b2661013b6b373ebc0100ae1368fa394->leave($__internal_66ac89b243dcdbd0d695ceb145f47784b2661013b6b373ebc0100ae1368fa394_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\desprez\\Sprint1\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
