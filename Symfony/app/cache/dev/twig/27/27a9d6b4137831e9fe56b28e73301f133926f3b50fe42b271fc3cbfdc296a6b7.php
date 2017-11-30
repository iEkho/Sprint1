<?php

/* ::base.html.twig */
class __TwigTemplate_989d8d29c1f6cf7778e7d9de6dd879d15b6e5b39d2b17cf807db5fb69c5b8259 extends Twig_Template
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
        $__internal_960356570594c31e8a2cc782bead55ad4f31b597215e2a29c9c0b6464090e551 = $this->env->getExtension("native_profiler");
        $__internal_960356570594c31e8a2cc782bead55ad4f31b597215e2a29c9c0b6464090e551->enter($__internal_960356570594c31e8a2cc782bead55ad4f31b597215e2a29c9c0b6464090e551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_960356570594c31e8a2cc782bead55ad4f31b597215e2a29c9c0b6464090e551->leave($__internal_960356570594c31e8a2cc782bead55ad4f31b597215e2a29c9c0b6464090e551_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c13892c45c849c8e0caf161588e9233f15f8925446c8d8c4d0a0cba38dbc4c42 = $this->env->getExtension("native_profiler");
        $__internal_c13892c45c849c8e0caf161588e9233f15f8925446c8d8c4d0a0cba38dbc4c42->enter($__internal_c13892c45c849c8e0caf161588e9233f15f8925446c8d8c4d0a0cba38dbc4c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hopital";
        
        $__internal_c13892c45c849c8e0caf161588e9233f15f8925446c8d8c4d0a0cba38dbc4c42->leave($__internal_c13892c45c849c8e0caf161588e9233f15f8925446c8d8c4d0a0cba38dbc4c42_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c236509e81e14cf7d8a33de93c5334b51e82ad52bb8cb5dcfff263e2f1d2b3a = $this->env->getExtension("native_profiler");
        $__internal_2c236509e81e14cf7d8a33de93c5334b51e82ad52bb8cb5dcfff263e2f1d2b3a->enter($__internal_2c236509e81e14cf7d8a33de93c5334b51e82ad52bb8cb5dcfff263e2f1d2b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2c236509e81e14cf7d8a33de93c5334b51e82ad52bb8cb5dcfff263e2f1d2b3a->leave($__internal_2c236509e81e14cf7d8a33de93c5334b51e82ad52bb8cb5dcfff263e2f1d2b3a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_97befb87fd9e5f6715e4aeff03671951d16e16d6a28884990bfc65951f243155 = $this->env->getExtension("native_profiler");
        $__internal_97befb87fd9e5f6715e4aeff03671951d16e16d6a28884990bfc65951f243155->enter($__internal_97befb87fd9e5f6715e4aeff03671951d16e16d6a28884990bfc65951f243155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97befb87fd9e5f6715e4aeff03671951d16e16d6a28884990bfc65951f243155->leave($__internal_97befb87fd9e5f6715e4aeff03671951d16e16d6a28884990bfc65951f243155_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10c18da4f5d250099b113fce463e1d4b541465cd8d89eec29d47436ff5c94bf2 = $this->env->getExtension("native_profiler");
        $__internal_10c18da4f5d250099b113fce463e1d4b541465cd8d89eec29d47436ff5c94bf2->enter($__internal_10c18da4f5d250099b113fce463e1d4b541465cd8d89eec29d47436ff5c94bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_10c18da4f5d250099b113fce463e1d4b541465cd8d89eec29d47436ff5c94bf2->leave($__internal_10c18da4f5d250099b113fce463e1d4b541465cd8d89eec29d47436ff5c94bf2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 10,  79 => 9,  68 => 6,  56 => 5,  47 => 11,  44 => 10,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Hopital{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
