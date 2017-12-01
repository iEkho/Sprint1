<?php

/* HopitalAdministrationBundle:Default:chambre.html.twig */
class __TwigTemplate_dcfcc08b2629ad9f4cc3d31dde4e2e0ccaa15aabfadb4fe9374a58e0dbf1d6dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HopitalAdministrationBundle:Default:index.html.twig", "HopitalAdministrationBundle:Default:chambre.html.twig", 1);
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
        $__internal_0d0ea882442314bdbdca35b00909fde3c1c847e1bb3de1bf271590f26719d2f1 = $this->env->getExtension("native_profiler");
        $__internal_0d0ea882442314bdbdca35b00909fde3c1c847e1bb3de1bf271590f26719d2f1->enter($__internal_0d0ea882442314bdbdca35b00909fde3c1c847e1bb3de1bf271590f26719d2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HopitalAdministrationBundle:Default:chambre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d0ea882442314bdbdca35b00909fde3c1c847e1bb3de1bf271590f26719d2f1->leave($__internal_0d0ea882442314bdbdca35b00909fde3c1c847e1bb3de1bf271590f26719d2f1_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_ea812ed3eca8d1462e46ae4229ab0d211c02b3b72d43d1a2b9b183c3b53d1341 = $this->env->getExtension("native_profiler");
        $__internal_ea812ed3eca8d1462e46ae4229ab0d211c02b3b72d43d1a2b9b183c3b53d1341->enter($__internal_ea812ed3eca8d1462e46ae4229ab0d211c02b3b72d43d1a2b9b183c3b53d1341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<h2>Les chambres</h2>
<table>
<tr><th>Chambre</th><th>Service</tr>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesChambres"]) ? $context["lesChambres"] : $this->getContext($context, "lesChambres")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 7
            echo "<tr>
\t<td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["chambre"], "getLibelle", array(), "method"), "html", null, true);
            echo "</td>
\t<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["chambre"], "getLeservice", array(), "method"), "getLibelle", array(), "method"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hopital_administration_modifChambre", array("id" => $this->getAttribute($context["chambre"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Modifier</a></td>
\t<td><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hopital_administration_suppChambre", array("id" => $this->getAttribute($context["chambre"], "getId", array(), "method"))), "html", null, true);
            echo "\"> Supprimer</a></td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "<tr><td>Pas de chambres.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</table>
";
        
        $__internal_ea812ed3eca8d1462e46ae4229ab0d211c02b3b72d43d1a2b9b183c3b53d1341->leave($__internal_ea812ed3eca8d1462e46ae4229ab0d211c02b3b72d43d1a2b9b183c3b53d1341_prof);

    }

    public function getTemplateName()
    {
        return "HopitalAdministrationBundle:Default:chambre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  73 => 14,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  50 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'HopitalAdministrationBundle:Default:index.html.twig' %}*/
/* {% block corps %}*/
/* <h2>Les chambres</h2>*/
/* <table>*/
/* <tr><th>Chambre</th><th>Service</tr>*/
/* {% for chambre in lesChambres %}*/
/* <tr>*/
/* 	<td>{{chambre.getLibelle()}}</td>*/
/* 	<td>{{chambre.getLeservice().getLibelle()}}</td>*/
/* 	<td><a href="{{path('hopital_administration_modifChambre',{id:chambre.getId()})}}"> Modifier</a></td>*/
/* 	<td><a href="{{path('hopital_administration_suppChambre',{id:chambre.getId()})}}"> Supprimer</a></td>*/
/* </tr>*/
/* {% else %}*/
/* <tr><td>Pas de chambres.</td></tr>*/
/* {% endfor %}*/
/* </table>*/
/* {% endblock %}*/
/* */
