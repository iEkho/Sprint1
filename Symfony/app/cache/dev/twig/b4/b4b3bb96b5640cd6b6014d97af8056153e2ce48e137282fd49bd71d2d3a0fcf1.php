<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b02056fc7951c22d5d3c92d1e7bc992949c913cdc1185f2789bfcdc18c3711eb extends Twig_Template
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
        $__internal_c6db1a2737ebd6ddab80fca0612747625aceceb6429f0868e38a804f69e772d0 = $this->env->getExtension("native_profiler");
        $__internal_c6db1a2737ebd6ddab80fca0612747625aceceb6429f0868e38a804f69e772d0->enter($__internal_c6db1a2737ebd6ddab80fca0612747625aceceb6429f0868e38a804f69e772d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6db1a2737ebd6ddab80fca0612747625aceceb6429f0868e38a804f69e772d0->leave($__internal_c6db1a2737ebd6ddab80fca0612747625aceceb6429f0868e38a804f69e772d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5894285b081b5e4d1c8a4a6998746a90425637e540706d0f77b8500ed9112452 = $this->env->getExtension("native_profiler");
        $__internal_5894285b081b5e4d1c8a4a6998746a90425637e540706d0f77b8500ed9112452->enter($__internal_5894285b081b5e4d1c8a4a6998746a90425637e540706d0f77b8500ed9112452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5894285b081b5e4d1c8a4a6998746a90425637e540706d0f77b8500ed9112452->leave($__internal_5894285b081b5e4d1c8a4a6998746a90425637e540706d0f77b8500ed9112452_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5abcaa692749b79a08bf98033bb24d0265ac602d08a60c946cdb2f94f1b6a04 = $this->env->getExtension("native_profiler");
        $__internal_c5abcaa692749b79a08bf98033bb24d0265ac602d08a60c946cdb2f94f1b6a04->enter($__internal_c5abcaa692749b79a08bf98033bb24d0265ac602d08a60c946cdb2f94f1b6a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c5abcaa692749b79a08bf98033bb24d0265ac602d08a60c946cdb2f94f1b6a04->leave($__internal_c5abcaa692749b79a08bf98033bb24d0265ac602d08a60c946cdb2f94f1b6a04_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a65465b3c98fb5988ac98ee25cf1cf97190e7d007a74dd2529582e0ba939ffd = $this->env->getExtension("native_profiler");
        $__internal_3a65465b3c98fb5988ac98ee25cf1cf97190e7d007a74dd2529582e0ba939ffd->enter($__internal_3a65465b3c98fb5988ac98ee25cf1cf97190e7d007a74dd2529582e0ba939ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3a65465b3c98fb5988ac98ee25cf1cf97190e7d007a74dd2529582e0ba939ffd->leave($__internal_3a65465b3c98fb5988ac98ee25cf1cf97190e7d007a74dd2529582e0ba939ffd_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
