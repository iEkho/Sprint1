<?php

/* HopitalAdministrationBundle:Default:modifChambre.html.twig */
class __TwigTemplate_062eaece94d95c183fb2cb860be455c22061d0a8d61b6bdb53b69adfc0b7afd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:modifChambre.html.twig", 1);
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
        $__internal_54d4439df188763f6f6a2cbcff9039d35928cb1d38fae10ea6e289b954148f14 = $this->env->getExtension("native_profiler");
        $__internal_54d4439df188763f6f6a2cbcff9039d35928cb1d38fae10ea6e289b954148f14->enter($__internal_54d4439df188763f6f6a2cbcff9039d35928cb1d38fae10ea6e289b954148f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:modifChambre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d4439df188763f6f6a2cbcff9039d35928cb1d38fae10ea6e289b954148f14->leave($__internal_54d4439df188763f6f6a2cbcff9039d35928cb1d38fae10ea6e289b954148f14_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_5ac962d06a3aae12654c8076fe4a7c6d7026b8c815c86a4bdfb5ef1b47caea62 = $this->env->getExtension("native_profiler");
        $__internal_5ac962d06a3aae12654c8076fe4a7c6d7026b8c815c86a4bdfb5ef1b47caea62->enter($__internal_5ac962d06a3aae12654c8076fe4a7c6d7026b8c815c86a4bdfb5ef1b47caea62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Modification d'une chambre</h2>
<form action=\"\" method=\"post\">
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>
";
        
        $__internal_5ac962d06a3aae12654c8076fe4a7c6d7026b8c815c86a4bdfb5ef1b47caea62->leave($__internal_5ac962d06a3aae12654c8076fe4a7c6d7026b8c815c86a4bdfb5ef1b47caea62_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:modifChambre.html.twig";
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
/* <h2>Modification d'une chambre</h2>*/
/* <form action="" method="post">*/
/* {{form_widget(form)}}*/
/* </form>*/
/* {% endblock %}*/
/* */
