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
        $__internal_0fde9b6335e66dd7aec41dc2799dc1ebbddcf93a13a93774e7010037697de065 = $this->env->getExtension("native_profiler");
        $__internal_0fde9b6335e66dd7aec41dc2799dc1ebbddcf93a13a93774e7010037697de065->enter($__internal_0fde9b6335e66dd7aec41dc2799dc1ebbddcf93a13a93774e7010037697de065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fde9b6335e66dd7aec41dc2799dc1ebbddcf93a13a93774e7010037697de065->leave($__internal_0fde9b6335e66dd7aec41dc2799dc1ebbddcf93a13a93774e7010037697de065_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_66eee97096b5dca37e452b7a7c481ceaee1b67578c11d9ee0923312d65e46efc = $this->env->getExtension("native_profiler");
        $__internal_66eee97096b5dca37e452b7a7c481ceaee1b67578c11d9ee0923312d65e46efc->enter($__internal_66eee97096b5dca37e452b7a7c481ceaee1b67578c11d9ee0923312d65e46efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_66eee97096b5dca37e452b7a7c481ceaee1b67578c11d9ee0923312d65e46efc->leave($__internal_66eee97096b5dca37e452b7a7c481ceaee1b67578c11d9ee0923312d65e46efc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39c58e10b9f580bdaa6cb6ac010a24c24482b96fbf24ed688d44eaaf5ded3d16 = $this->env->getExtension("native_profiler");
        $__internal_39c58e10b9f580bdaa6cb6ac010a24c24482b96fbf24ed688d44eaaf5ded3d16->enter($__internal_39c58e10b9f580bdaa6cb6ac010a24c24482b96fbf24ed688d44eaaf5ded3d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_39c58e10b9f580bdaa6cb6ac010a24c24482b96fbf24ed688d44eaaf5ded3d16->leave($__internal_39c58e10b9f580bdaa6cb6ac010a24c24482b96fbf24ed688d44eaaf5ded3d16_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fd9b52915431432820710c158fd3db9f130f1b959083c2867d40479f8ae37fa = $this->env->getExtension("native_profiler");
        $__internal_9fd9b52915431432820710c158fd3db9f130f1b959083c2867d40479f8ae37fa->enter($__internal_9fd9b52915431432820710c158fd3db9f130f1b959083c2867d40479f8ae37fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9fd9b52915431432820710c158fd3db9f130f1b959083c2867d40479f8ae37fa->leave($__internal_9fd9b52915431432820710c158fd3db9f130f1b959083c2867d40479f8ae37fa_prof);

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
