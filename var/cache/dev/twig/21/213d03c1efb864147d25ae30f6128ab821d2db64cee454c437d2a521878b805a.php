<?php

/* tictactoe/index.html.twig */
class __TwigTemplate_6001b7227a41a428c20677f759b9f120ced044686b8702f47bbb3713b901af36 extends Twig_Template
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
        $__internal_78163380b78322eeba0be527a5004ca311a2691904bfb62cf3c018f8683bb325 = $this->env->getExtension("native_profiler");
        $__internal_78163380b78322eeba0be527a5004ca311a2691904bfb62cf3c018f8683bb325->enter($__internal_78163380b78322eeba0be527a5004ca311a2691904bfb62cf3c018f8683bb325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tictactoe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78163380b78322eeba0be527a5004ca311a2691904bfb62cf3c018f8683bb325->leave($__internal_78163380b78322eeba0be527a5004ca311a2691904bfb62cf3c018f8683bb325_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_131093532ddf2a4698e090cd400276acb5fb056414d0ac679cb01fb3f09f7838 = $this->env->getExtension("native_profiler");
        $__internal_131093532ddf2a4698e090cd400276acb5fb056414d0ac679cb01fb3f09f7838->enter($__internal_131093532ddf2a4698e090cd400276acb5fb056414d0ac679cb01fb3f09f7838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_131093532ddf2a4698e090cd400276acb5fb056414d0ac679cb01fb3f09f7838->leave($__internal_131093532ddf2a4698e090cd400276acb5fb056414d0ac679cb01fb3f09f7838_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_d064a1d7d09f62235946e05573c754384291efc97b0c355dc1e43ac9ceaa5bdc = $this->env->getExtension("native_profiler");
        $__internal_d064a1d7d09f62235946e05573c754384291efc97b0c355dc1e43ac9ceaa5bdc->enter($__internal_d064a1d7d09f62235946e05573c754384291efc97b0c355dc1e43ac9ceaa5bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d064a1d7d09f62235946e05573c754384291efc97b0c355dc1e43ac9ceaa5bdc->leave($__internal_d064a1d7d09f62235946e05573c754384291efc97b0c355dc1e43ac9ceaa5bdc_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad6525d8b91bd381b9d819e9510f093c8f26c549dd2e43b7ea359f79cd88ffdb = $this->env->getExtension("native_profiler");
        $__internal_ad6525d8b91bd381b9d819e9510f093c8f26c549dd2e43b7ea359f79cd88ffdb->enter($__internal_ad6525d8b91bd381b9d819e9510f093c8f26c549dd2e43b7ea359f79cd88ffdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"js/tictactoe.js\"></script>
";
        
        $__internal_ad6525d8b91bd381b9d819e9510f093c8f26c549dd2e43b7ea359f79cd88ffdb->leave($__internal_ad6525d8b91bd381b9d819e9510f093c8f26c549dd2e43b7ea359f79cd88ffdb_prof);

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
