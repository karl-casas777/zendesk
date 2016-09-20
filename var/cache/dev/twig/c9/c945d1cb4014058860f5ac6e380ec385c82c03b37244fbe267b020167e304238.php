<?php

/* tictactoe/index.html.twig */
class __TwigTemplate_b0995ba909c3cd6ebb46b68990bf2970eac4096df7ecff13d2889031eed7740f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tictactoe/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe0bedb0bab3dbb643ee55c177b979e6dd7893966be467acbef07cfe97440827 = $this->env->getExtension("native_profiler");
        $__internal_fe0bedb0bab3dbb643ee55c177b979e6dd7893966be467acbef07cfe97440827->enter($__internal_fe0bedb0bab3dbb643ee55c177b979e6dd7893966be467acbef07cfe97440827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tictactoe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe0bedb0bab3dbb643ee55c177b979e6dd7893966be467acbef07cfe97440827->leave($__internal_fe0bedb0bab3dbb643ee55c177b979e6dd7893966be467acbef07cfe97440827_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c97543b38f855c55d0d8b8c449ff014fd8135bcf856371932b1ae03ff954026b = $this->env->getExtension("native_profiler");
        $__internal_c97543b38f855c55d0d8b8c449ff014fd8135bcf856371932b1ae03ff954026b->enter($__internal_c97543b38f855c55d0d8b8c449ff014fd8135bcf856371932b1ae03ff954026b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style>
        table {
          width: 50%;
        }
        td {
          width: 33.33%;
          position: relative;
        }
        td:after {
          content: '';
          display: block;
          margin-top: 100%;
        }
        td .content {
          text-align: center;
          line-height: 200px;
          font-size: 100px;
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          background: rgba(128, 128, 128, 0.33);
        }
    </style>
";
        
        $__internal_c97543b38f855c55d0d8b8c449ff014fd8135bcf856371932b1ae03ff954026b->leave($__internal_c97543b38f855c55d0d8b8c449ff014fd8135bcf856371932b1ae03ff954026b_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b6dfd2bf1587c8b22e774f15dd9617d5340ae03959caa576265515039c3810a = $this->env->getExtension("native_profiler");
        $__internal_7b6dfd2bf1587c8b22e774f15dd9617d5340ae03959caa576265515039c3810a->enter($__internal_7b6dfd2bf1587c8b22e774f15dd9617d5340ae03959caa576265515039c3810a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "    <div>
        <h3>O first turn</h3>
    </div>
    <table border=\"2\">
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
";
        
        $__internal_7b6dfd2bf1587c8b22e774f15dd9617d5340ae03959caa576265515039c3810a->leave($__internal_7b6dfd2bf1587c8b22e774f15dd9617d5340ae03959caa576265515039c3810a_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c854c90d69adbe8aa3c0568fc0e2b1751751af2a88a45d9c5c3fdd275f16526 = $this->env->getExtension("native_profiler");
        $__internal_9c854c90d69adbe8aa3c0568fc0e2b1751751af2a88a45d9c5c3fdd275f16526->enter($__internal_9c854c90d69adbe8aa3c0568fc0e2b1751751af2a88a45d9c5c3fdd275f16526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"js/tictactoe.js\"></script>
";
        
        $__internal_9c854c90d69adbe8aa3c0568fc0e2b1751751af2a88a45d9c5c3fdd275f16526->leave($__internal_9c854c90d69adbe8aa3c0568fc0e2b1751751af2a88a45d9c5c3fdd275f16526_prof);

    }

    public function getTemplateName()
    {
        return "tictactoe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 54,  107 => 53,  80 => 32,  74 => 31,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         table {*/
/*           width: 50%;*/
/*         }*/
/*         td {*/
/*           width: 33.33%;*/
/*           position: relative;*/
/*         }*/
/*         td:after {*/
/*           content: '';*/
/*           display: block;*/
/*           margin-top: 100%;*/
/*         }*/
/*         td .content {*/
/*           text-align: center;*/
/*           line-height: 200px;*/
/*           font-size: 100px;*/
/*           position: absolute;*/
/*           top: 0;*/
/*           bottom: 0;*/
/*           left: 0;*/
/*           right: 0;*/
/*           background: rgba(128, 128, 128, 0.33);*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         <h3>O first turn</h3>*/
/*     </div>*/
/*     <table border="2">*/
/*         <tr>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*         </tr>*/
/*     </table>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="js/tictactoe.js"></script>*/
/* {% endblock %}*/
