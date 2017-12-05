<?php

/* HopitalAdministrationBundle:Default:modifPatient.html.twig */
class __TwigTemplate_7e284b38e12d04688c717903b2bfa707d68e015c4c734e1a0441b62bcc42b17f extends Twig_Template
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
        $__internal_98b04dd005c228e0e68a03964fbe0a81ba6fce37eb2f17ac7c2f4d9170b85a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b04dd005c228e0e68a03964fbe0a81ba6fce37eb2f17ac7c2f4d9170b85a45->enter($__internal_98b04dd005c228e0e68a03964fbe0a81ba6fce37eb2f17ac7c2f4d9170b85a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:modifPatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98b04dd005c228e0e68a03964fbe0a81ba6fce37eb2f17ac7c2f4d9170b85a45->leave($__internal_98b04dd005c228e0e68a03964fbe0a81ba6fce37eb2f17ac7c2f4d9170b85a45_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_e2a80f7d231c7400d0bdcea68f47381b0782a23e30aadc38ddea3d0703a13046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a80f7d231c7400d0bdcea68f47381b0782a23e30aadc38ddea3d0703a13046->enter($__internal_e2a80f7d231c7400d0bdcea68f47381b0782a23e30aadc38ddea3d0703a13046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Modification d'un patient</h2>
<form action=\"\" method=\"post\">
";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'widget');
        echo "
</form>
";
        
        $__internal_e2a80f7d231c7400d0bdcea68f47381b0782a23e30aadc38ddea3d0703a13046->leave($__internal_e2a80f7d231c7400d0bdcea68f47381b0782a23e30aadc38ddea3d0703a13046_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}
{% block corps %}
<h2>Modification d'un patient</h2>
<form action=\"\" method=\"post\">
{{form_widget(form)}}
</form>
{% endblock %}
", "HopitalAdministrationBundle:Default:modifPatient.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\src\\Hopital\\AdministrationBundle/Resources/views/Default/modifPatient.html.twig");
    }
}
