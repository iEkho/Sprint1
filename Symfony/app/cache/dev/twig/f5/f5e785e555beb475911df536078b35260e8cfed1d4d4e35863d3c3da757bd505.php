<?php

/* base.html.twig */
class __TwigTemplate_894cd1cde62b9e805c24c80691e4e3172c8558d8e8ec4e8024ef26fcc6d87cc9 extends Twig_Template
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
        $__internal_03701a22d39214a29ce37e76e89147a00901fd6878b83239e7c579fdb2b11d16 = $this->env->getExtension("native_profiler");
        $__internal_03701a22d39214a29ce37e76e89147a00901fd6878b83239e7c579fdb2b11d16->enter($__internal_03701a22d39214a29ce37e76e89147a00901fd6878b83239e7c579fdb2b11d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_03701a22d39214a29ce37e76e89147a00901fd6878b83239e7c579fdb2b11d16->leave($__internal_03701a22d39214a29ce37e76e89147a00901fd6878b83239e7c579fdb2b11d16_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb7adf9f600ea16471126e61ef255fca324ef20211cdee0d366302901894d38e = $this->env->getExtension("native_profiler");
        $__internal_cb7adf9f600ea16471126e61ef255fca324ef20211cdee0d366302901894d38e->enter($__internal_cb7adf9f600ea16471126e61ef255fca324ef20211cdee0d366302901894d38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cb7adf9f600ea16471126e61ef255fca324ef20211cdee0d366302901894d38e->leave($__internal_cb7adf9f600ea16471126e61ef255fca324ef20211cdee0d366302901894d38e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4db5d1d2ae707408ddd359cee503e55250711ce55fdebf673ee601f1d7a6c918 = $this->env->getExtension("native_profiler");
        $__internal_4db5d1d2ae707408ddd359cee503e55250711ce55fdebf673ee601f1d7a6c918->enter($__internal_4db5d1d2ae707408ddd359cee503e55250711ce55fdebf673ee601f1d7a6c918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4db5d1d2ae707408ddd359cee503e55250711ce55fdebf673ee601f1d7a6c918->leave($__internal_4db5d1d2ae707408ddd359cee503e55250711ce55fdebf673ee601f1d7a6c918_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1bce12d0322b2d404d185bc73d901f7e1a99da03f0be60f1bab83c3f2d5de5d = $this->env->getExtension("native_profiler");
        $__internal_a1bce12d0322b2d404d185bc73d901f7e1a99da03f0be60f1bab83c3f2d5de5d->enter($__internal_a1bce12d0322b2d404d185bc73d901f7e1a99da03f0be60f1bab83c3f2d5de5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a1bce12d0322b2d404d185bc73d901f7e1a99da03f0be60f1bab83c3f2d5de5d->leave($__internal_a1bce12d0322b2d404d185bc73d901f7e1a99da03f0be60f1bab83c3f2d5de5d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d28dd96530b9ce00ea89ec855c8d944ccb09176934169b93b8bc0bdaa71660ba = $this->env->getExtension("native_profiler");
        $__internal_d28dd96530b9ce00ea89ec855c8d944ccb09176934169b93b8bc0bdaa71660ba->enter($__internal_d28dd96530b9ce00ea89ec855c8d944ccb09176934169b93b8bc0bdaa71660ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d28dd96530b9ce00ea89ec855c8d944ccb09176934169b93b8bc0bdaa71660ba->leave($__internal_d28dd96530b9ce00ea89ec855c8d944ccb09176934169b93b8bc0bdaa71660ba_prof);

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
