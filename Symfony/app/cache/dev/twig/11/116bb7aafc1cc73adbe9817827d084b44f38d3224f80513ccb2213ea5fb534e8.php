<?php

/* HopitalAdministrationBundle:Default:newPatient.html.twig */
class __TwigTemplate_821c5b5a8e1761f1c082c2cc8e20ac879ad368f4c60600d5bb365db67199958b extends Twig_Template
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
        $__internal_d92b0dbb2fc68d1866f7ac05229520750087c5ddfcb4ea6e4af76d32e5bed6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92b0dbb2fc68d1866f7ac05229520750087c5ddfcb4ea6e4af76d32e5bed6b0->enter($__internal_d92b0dbb2fc68d1866f7ac05229520750087c5ddfcb4ea6e4af76d32e5bed6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:newPatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d92b0dbb2fc68d1866f7ac05229520750087c5ddfcb4ea6e4af76d32e5bed6b0->leave($__internal_d92b0dbb2fc68d1866f7ac05229520750087c5ddfcb4ea6e4af76d32e5bed6b0_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_7718e93bfe2c8b6c456d6237eaab56a8482b6f8f5b64386a55e2375d311a3fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7718e93bfe2c8b6c456d6237eaab56a8482b6f8f5b64386a55e2375d311a3fe1->enter($__internal_7718e93bfe2c8b6c456d6237eaab56a8482b6f8f5b64386a55e2375d311a3fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Ajout d'un patient</h2>
<form action=\"\" method=\"post\">
";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'widget');
        echo "
</form>
";
        
        $__internal_7718e93bfe2c8b6c456d6237eaab56a8482b6f8f5b64386a55e2375d311a3fe1->leave($__internal_7718e93bfe2c8b6c456d6237eaab56a8482b6f8f5b64386a55e2375d311a3fe1_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}
{% block corps %}
<h2>Ajout d'un patient</h2>
<form action=\"\" method=\"post\">
{{form_widget(form)}}
</form>
{% endblock %}
", "HopitalAdministrationBundle:Default:newPatient.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\src\\Hopital\\AdministrationBundle/Resources/views/Default/newPatient.html.twig");
    }
}
