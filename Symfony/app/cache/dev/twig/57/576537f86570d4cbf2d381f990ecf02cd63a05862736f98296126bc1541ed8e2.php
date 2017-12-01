<?php

/* HopitalAdministrationBundle:Default:modifService.html.twig */
class __TwigTemplate_3e257965c39dc501a733e9d97d3164b35c0ad80c661878f6ce06305e82458ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:modifService.html.twig", 1);
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
        $__internal_9295ea224e091879becf54181eda0728f80ec7f7f72d08c3b836bdf254ac599e = $this->env->getExtension("native_profiler");
        $__internal_9295ea224e091879becf54181eda0728f80ec7f7f72d08c3b836bdf254ac599e->enter($__internal_9295ea224e091879becf54181eda0728f80ec7f7f72d08c3b836bdf254ac599e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:modifService.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9295ea224e091879becf54181eda0728f80ec7f7f72d08c3b836bdf254ac599e->leave($__internal_9295ea224e091879becf54181eda0728f80ec7f7f72d08c3b836bdf254ac599e_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_1871b3a15c91cb04a1f28da6b039ac2e07e28ad58f7a2b11ebc6a2b8917d2ac4 = $this->env->getExtension("native_profiler");
        $__internal_1871b3a15c91cb04a1f28da6b039ac2e07e28ad58f7a2b11ebc6a2b8917d2ac4->enter($__internal_1871b3a15c91cb04a1f28da6b039ac2e07e28ad58f7a2b11ebc6a2b8917d2ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Modification d'un service</h2>
<form action=\"\" method=\"post\">
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>
";
        
        $__internal_1871b3a15c91cb04a1f28da6b039ac2e07e28ad58f7a2b11ebc6a2b8917d2ac4->leave($__internal_1871b3a15c91cb04a1f28da6b039ac2e07e28ad58f7a2b11ebc6a2b8917d2ac4_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:modifService.html.twig";
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
/* <h2>Modification d'un service</h2>*/
/* <form action="" method="post">*/
/* {{form_widget(form)}}*/
/* </form>*/
/* {% endblock %}*/
/* */
