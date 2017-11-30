<?php

/* HopitalAdministrationBundle:Default:modifPatient.html.twig */
class __TwigTemplate_15433a33b5ef9c6875c8c0f1048a8fbc3c647ea67f29756363e8f05ba49ef4a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:modifPatient.html.twig", 1);
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
        $__internal_e28d28617604e9ea6698f5c750117439026c45e4777461b08c1187529d93fa3c = $this->env->getExtension("native_profiler");
        $__internal_e28d28617604e9ea6698f5c750117439026c45e4777461b08c1187529d93fa3c->enter($__internal_e28d28617604e9ea6698f5c750117439026c45e4777461b08c1187529d93fa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:modifPatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e28d28617604e9ea6698f5c750117439026c45e4777461b08c1187529d93fa3c->leave($__internal_e28d28617604e9ea6698f5c750117439026c45e4777461b08c1187529d93fa3c_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_d45a697167d19bff3cfba8b5fb1223e78c458591588a324931be94e55729df1e = $this->env->getExtension("native_profiler");
        $__internal_d45a697167d19bff3cfba8b5fb1223e78c458591588a324931be94e55729df1e->enter($__internal_d45a697167d19bff3cfba8b5fb1223e78c458591588a324931be94e55729df1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Modification d'un patient</h2>
<form action=\"\" method=\"post\">
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>
";
        
        $__internal_d45a697167d19bff3cfba8b5fb1223e78c458591588a324931be94e55729df1e->leave($__internal_d45a697167d19bff3cfba8b5fb1223e78c458591588a324931be94e55729df1e_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:modifPatient.html.twig";
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
/* <h2>Modification d'un patient</h2>*/
/* <form action="" method="post">*/
/* {{form_widget(form)}}*/
/* </form>*/
/* {% endblock %}*/
/* */
