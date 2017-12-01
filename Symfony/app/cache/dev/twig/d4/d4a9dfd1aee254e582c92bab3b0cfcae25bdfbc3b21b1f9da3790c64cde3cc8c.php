<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_66c8e2cd9f4079f2dad0469f9490fcf500e5260d86b4cf1fb4c37609875a2188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72597dcd456e19ba42fa1dd62dc2ad7a0fd42b88c7e7a5d82ab411af1be235fb = $this->env->getExtension("native_profiler");
        $__internal_72597dcd456e19ba42fa1dd62dc2ad7a0fd42b88c7e7a5d82ab411af1be235fb->enter($__internal_72597dcd456e19ba42fa1dd62dc2ad7a0fd42b88c7e7a5d82ab411af1be235fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_72597dcd456e19ba42fa1dd62dc2ad7a0fd42b88c7e7a5d82ab411af1be235fb->leave($__internal_72597dcd456e19ba42fa1dd62dc2ad7a0fd42b88c7e7a5d82ab411af1be235fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
