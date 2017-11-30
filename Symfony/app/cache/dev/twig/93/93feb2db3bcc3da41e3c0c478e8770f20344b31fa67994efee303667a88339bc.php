<?php

/* base.html.twig */
class __TwigTemplate_6d4c392fa86dfb245e18d9ae3c35a3861c0a02bfd8941f34685d7adef509f9e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83be427570558b49b6b99fbc0921d0f50646ef13431ad4ae1ba8e4fae6d987b5 = $this->env->getExtension("native_profiler");
        $__internal_83be427570558b49b6b99fbc0921d0f50646ef13431ad4ae1ba8e4fae6d987b5->enter($__internal_83be427570558b49b6b99fbc0921d0f50646ef13431ad4ae1ba8e4fae6d987b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_83be427570558b49b6b99fbc0921d0f50646ef13431ad4ae1ba8e4fae6d987b5->leave($__internal_83be427570558b49b6b99fbc0921d0f50646ef13431ad4ae1ba8e4fae6d987b5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae659ef9527e6f8efed239857947332c01119415bca553827d39422f552d6110 = $this->env->getExtension("native_profiler");
        $__internal_ae659ef9527e6f8efed239857947332c01119415bca553827d39422f552d6110->enter($__internal_ae659ef9527e6f8efed239857947332c01119415bca553827d39422f552d6110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ae659ef9527e6f8efed239857947332c01119415bca553827d39422f552d6110->leave($__internal_ae659ef9527e6f8efed239857947332c01119415bca553827d39422f552d6110_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9844841559f074cb6b40d603017ad8cb357eef02325579dd400db7496c9653c2 = $this->env->getExtension("native_profiler");
        $__internal_9844841559f074cb6b40d603017ad8cb357eef02325579dd400db7496c9653c2->enter($__internal_9844841559f074cb6b40d603017ad8cb357eef02325579dd400db7496c9653c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9844841559f074cb6b40d603017ad8cb357eef02325579dd400db7496c9653c2->leave($__internal_9844841559f074cb6b40d603017ad8cb357eef02325579dd400db7496c9653c2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_122cd69bb6458258266349fdaef3143af332c1734d517191c2a2632ffff23237 = $this->env->getExtension("native_profiler");
        $__internal_122cd69bb6458258266349fdaef3143af332c1734d517191c2a2632ffff23237->enter($__internal_122cd69bb6458258266349fdaef3143af332c1734d517191c2a2632ffff23237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_122cd69bb6458258266349fdaef3143af332c1734d517191c2a2632ffff23237->leave($__internal_122cd69bb6458258266349fdaef3143af332c1734d517191c2a2632ffff23237_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e643fd991b85c2b8489dd0d99167741f5b073ebcf4c3c5d0abb795e659e9229b = $this->env->getExtension("native_profiler");
        $__internal_e643fd991b85c2b8489dd0d99167741f5b073ebcf4c3c5d0abb795e659e9229b->enter($__internal_e643fd991b85c2b8489dd0d99167741f5b073ebcf4c3c5d0abb795e659e9229b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e643fd991b85c2b8489dd0d99167741f5b073ebcf4c3c5d0abb795e659e9229b->leave($__internal_e643fd991b85c2b8489dd0d99167741f5b073ebcf4c3c5d0abb795e659e9229b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
