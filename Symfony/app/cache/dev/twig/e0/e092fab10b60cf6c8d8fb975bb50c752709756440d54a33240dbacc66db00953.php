<?php

/* HopitalAdministrationBundle:Security:login.html.twig */
class __TwigTemplate_75c1e13f8e935f7a8489ff740ce556ad83e8e05dcea6ce72e1d27bfc776c6121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Security:login.html.twig", 1);
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
        $__internal_5714fc565fa255c310e84fc5f91306b04a79bdeb99792f1d5e1ede1977283d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5714fc565fa255c310e84fc5f91306b04a79bdeb99792f1d5e1ede1977283d78->enter($__internal_5714fc565fa255c310e84fc5f91306b04a79bdeb99792f1d5e1ede1977283d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5714fc565fa255c310e84fc5f91306b04a79bdeb99792f1d5e1ede1977283d78->leave($__internal_5714fc565fa255c310e84fc5f91306b04a79bdeb99792f1d5e1ede1977283d78_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_cdb1a999329e5da53882e748eed068d96ac6998db1056a0299335ca27877a635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb1a999329e5da53882e748eed068d96ac6998db1056a0299335ca27877a635->enter($__internal_cdb1a999329e5da53882e748eed068d96ac6998db1056a0299335ca27877a635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "        <div>";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
            echo "</div>
    ";
        }
        // line 6
        echo "
    <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <button type=\"submit\">login</button>
    </form>

";
        
        $__internal_cdb1a999329e5da53882e748eed068d96ac6998db1056a0299335ca27877a635->leave($__internal_cdb1a999329e5da53882e748eed068d96ac6998db1056a0299335ca27877a635_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}
{% block corps %}
    {% if error %}
        <div>{{ error }}</div>
    {% endif %}

    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <button type=\"submit\">login</button>
    </form>

{% endblock %}
", "HopitalAdministrationBundle:Security:login.html.twig", "C:\\wamp64\\www\\desprez\\Symfony\\src\\Hopital\\AdministrationBundle/Resources/views/Security/login.html.twig");
    }
}
