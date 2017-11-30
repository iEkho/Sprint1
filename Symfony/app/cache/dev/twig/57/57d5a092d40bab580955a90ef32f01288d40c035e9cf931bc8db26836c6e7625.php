<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5bcd12406957bb399c3a8ec5e1948acd7a42c36aaa673e4e05f68d6ee2a848ef extends Twig_Template
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
        $__internal_eaa057c46b60f043ed6468a37fd7e607c865f911a1f4ca2effb12d64b6b0bb72 = $this->env->getExtension("native_profiler");
        $__internal_eaa057c46b60f043ed6468a37fd7e607c865f911a1f4ca2effb12d64b6b0bb72->enter($__internal_eaa057c46b60f043ed6468a37fd7e607c865f911a1f4ca2effb12d64b6b0bb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa057c46b60f043ed6468a37fd7e607c865f911a1f4ca2effb12d64b6b0bb72->leave($__internal_eaa057c46b60f043ed6468a37fd7e607c865f911a1f4ca2effb12d64b6b0bb72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_99fe15882c1d635d12823250b73514c4025b0535c4968850b26948f7f1c0056d = $this->env->getExtension("native_profiler");
        $__internal_99fe15882c1d635d12823250b73514c4025b0535c4968850b26948f7f1c0056d->enter($__internal_99fe15882c1d635d12823250b73514c4025b0535c4968850b26948f7f1c0056d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_99fe15882c1d635d12823250b73514c4025b0535c4968850b26948f7f1c0056d->leave($__internal_99fe15882c1d635d12823250b73514c4025b0535c4968850b26948f7f1c0056d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ee7ec2385f6ca9979a04efe4fe710a4636d3832d020a2b81e5aacfdbab3ca14 = $this->env->getExtension("native_profiler");
        $__internal_9ee7ec2385f6ca9979a04efe4fe710a4636d3832d020a2b81e5aacfdbab3ca14->enter($__internal_9ee7ec2385f6ca9979a04efe4fe710a4636d3832d020a2b81e5aacfdbab3ca14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ee7ec2385f6ca9979a04efe4fe710a4636d3832d020a2b81e5aacfdbab3ca14->leave($__internal_9ee7ec2385f6ca9979a04efe4fe710a4636d3832d020a2b81e5aacfdbab3ca14_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8d72830f4caba94c4c2cdcf1e4e851b40334778e7142bb331b0380db0d3c97c = $this->env->getExtension("native_profiler");
        $__internal_e8d72830f4caba94c4c2cdcf1e4e851b40334778e7142bb331b0380db0d3c97c->enter($__internal_e8d72830f4caba94c4c2cdcf1e4e851b40334778e7142bb331b0380db0d3c97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e8d72830f4caba94c4c2cdcf1e4e851b40334778e7142bb331b0380db0d3c97c->leave($__internal_e8d72830f4caba94c4c2cdcf1e4e851b40334778e7142bb331b0380db0d3c97c_prof);

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
