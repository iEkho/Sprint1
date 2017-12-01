<?php

/* HopitalAdministrationBundle:Default:newPatient.html.twig */
class __TwigTemplate_fd48a261030d73c19ed1d3a22b33d6f2af68934276bfaff8e1eb707b5a3a4eb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:newPatient.html.twig", 1);
        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HopitalAdministrationBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b6f3a3c85f662f302cf63dbaabc4880e45d2bab91a05631afce41ebc13d65c0 = $this->env->getExtension("native_profiler");
        $__internal_1b6f3a3c85f662f302cf63dbaabc4880e45d2bab91a05631afce41ebc13d65c0->enter($__internal_1b6f3a3c85f662f302cf63dbaabc4880e45d2bab91a05631afce41ebc13d65c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:newPatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b6f3a3c85f662f302cf63dbaabc4880e45d2bab91a05631afce41ebc13d65c0->leave($__internal_1b6f3a3c85f662f302cf63dbaabc4880e45d2bab91a05631afce41ebc13d65c0_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_f7657822db6d90a81ffbf61b0f8777e8d46b05f6134cf80c6c08b2e7b8361a7a = $this->env->getExtension("native_profiler");
        $__internal_f7657822db6d90a81ffbf61b0f8777e8d46b05f6134cf80c6c08b2e7b8361a7a->enter($__internal_f7657822db6d90a81ffbf61b0f8777e8d46b05f6134cf80c6c08b2e7b8361a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Ajout d'un patient</h2>
<form action=\"\" method=\"post\">
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>
";
        
        $__internal_f7657822db6d90a81ffbf61b0f8777e8d46b05f6134cf80c6c08b2e7b8361a7a->leave($__internal_f7657822db6d90a81ffbf61b0f8777e8d46b05f6134cf80c6c08b2e7b8361a7a_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:newPatient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}*/
/* {% block corps %}*/
/* <h2>Ajout d'un patient</h2>*/
/* <form action="" method="post">*/
/* {{form_widget(form)}}*/
/* </form>*/
/* {% endblock %}*/
/* */
