<?php

/* HopitalAdministrationBundle:Default:modifPatient.html.twig */
class __TwigTemplate_223d1314e0b7b0949dadb38a5446afc65a78ddd3338935e0cac12e45002088f4 extends Twig_Template
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
        $__internal_4e9a4b5312b2ed8fb60aed478dd6ec6b9b7b4cdb4e3fe3e7deb778149d9728bf = $this->env->getExtension("native_profiler");
        $__internal_4e9a4b5312b2ed8fb60aed478dd6ec6b9b7b4cdb4e3fe3e7deb778149d9728bf->enter($__internal_4e9a4b5312b2ed8fb60aed478dd6ec6b9b7b4cdb4e3fe3e7deb778149d9728bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:modifPatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e9a4b5312b2ed8fb60aed478dd6ec6b9b7b4cdb4e3fe3e7deb778149d9728bf->leave($__internal_4e9a4b5312b2ed8fb60aed478dd6ec6b9b7b4cdb4e3fe3e7deb778149d9728bf_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_0c59b8bf139b1241dbdad2e3c908cfe436208d80624e659af3857aceb0d5a7d5 = $this->env->getExtension("native_profiler");
        $__internal_0c59b8bf139b1241dbdad2e3c908cfe436208d80624e659af3857aceb0d5a7d5->enter($__internal_0c59b8bf139b1241dbdad2e3c908cfe436208d80624e659af3857aceb0d5a7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Modification d'un patient</h2>
<form action=\"\" method=\"post\">
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>
";
        
        $__internal_0c59b8bf139b1241dbdad2e3c908cfe436208d80624e659af3857aceb0d5a7d5->leave($__internal_0c59b8bf139b1241dbdad2e3c908cfe436208d80624e659af3857aceb0d5a7d5_prof);

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
