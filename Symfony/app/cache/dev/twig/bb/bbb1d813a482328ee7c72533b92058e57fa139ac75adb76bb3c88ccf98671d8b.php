<?php

/* HopitalAdministrationBundle:Default:newChambre.html.twig */
class __TwigTemplate_701b008b7de245538d612c55bb5eb329e60552cdd06251a8df152509bd0b41bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:newChambre.html.twig", 1);
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
        $__internal_e08747f5681955bed9c321cfb742781077c56f8ddffc467cb4e3256de9555cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08747f5681955bed9c321cfb742781077c56f8ddffc467cb4e3256de9555cfd->enter($__internal_e08747f5681955bed9c321cfb742781077c56f8ddffc467cb4e3256de9555cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:newChambre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e08747f5681955bed9c321cfb742781077c56f8ddffc467cb4e3256de9555cfd->leave($__internal_e08747f5681955bed9c321cfb742781077c56f8ddffc467cb4e3256de9555cfd_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_717af85d51251a06492c4db5900684794a8f1308f8184e36b9d9425de61a0d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717af85d51251a06492c4db5900684794a8f1308f8184e36b9d9425de61a0d94->enter($__internal_717af85d51251a06492c4db5900684794a8f1308f8184e36b9d9425de61a0d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Formulaire d'ajout de chambre</h2>
<form action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hopital_administration_newChambre");
        echo "\" method=\"post\">
  ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'widget');
        echo "
</form>
";
        
        $__internal_717af85d51251a06492c4db5900684794a8f1308f8184e36b9d9425de61a0d94->leave($__internal_717af85d51251a06492c4db5900684794a8f1308f8184e36b9d9425de61a0d94_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:newChambre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}
{% block corps %}
<h2>Formulaire d'ajout de chambre</h2>
<form action=\"{{path('hopital_administration_newChambre')}}\" method=\"post\">
  {{form_widget(form)}}
</form>
{% endblock %}
", "HopitalAdministrationBundle:Default:newChambre.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\src\\Hopital\\AdministrationBundle/Resources/views/Default/newChambre.html.twig");
    }
}
