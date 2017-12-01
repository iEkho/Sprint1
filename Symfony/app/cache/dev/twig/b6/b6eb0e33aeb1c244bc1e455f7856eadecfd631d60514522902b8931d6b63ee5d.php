<?php

/* HopitalAdministrationBundle:Default:modifSejour.html.twig */
class __TwigTemplate_d21168cbece6d2fc40eb22b149a3c9479089f18f3fc17a96804ccc392c0cc6b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:modifSejour.html.twig", 1);
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
        $__internal_3ce6584a8ab74688e3be2dcfaf2381a59e6a2d07feba934b7a93f7a0475d338b = $this->env->getExtension("native_profiler");
        $__internal_3ce6584a8ab74688e3be2dcfaf2381a59e6a2d07feba934b7a93f7a0475d338b->enter($__internal_3ce6584a8ab74688e3be2dcfaf2381a59e6a2d07feba934b7a93f7a0475d338b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:modifSejour.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ce6584a8ab74688e3be2dcfaf2381a59e6a2d07feba934b7a93f7a0475d338b->leave($__internal_3ce6584a8ab74688e3be2dcfaf2381a59e6a2d07feba934b7a93f7a0475d338b_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_2094e4681603ec7b90bd7d3d7ac8d4628e0b899ffbea6978435a5dd4d644ab81 = $this->env->getExtension("native_profiler");
        $__internal_2094e4681603ec7b90bd7d3d7ac8d4628e0b899ffbea6978435a5dd4d644ab81->enter($__internal_2094e4681603ec7b90bd7d3d7ac8d4628e0b899ffbea6978435a5dd4d644ab81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Modification d'un séjour</h2>
<form action=\"\" method=\"post\">
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>
";
        
        $__internal_2094e4681603ec7b90bd7d3d7ac8d4628e0b899ffbea6978435a5dd4d644ab81->leave($__internal_2094e4681603ec7b90bd7d3d7ac8d4628e0b899ffbea6978435a5dd4d644ab81_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:modifSejour.html.twig";
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
/* <h2>Modification d'un séjour</h2>*/
/* <form action="" method="post">*/
/* {{form_widget(form)}}*/
/* </form>*/
/* {% endblock %}*/
/* */
