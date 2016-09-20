<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_89d9c43761ff7d16e721cc518c62f1db100c9a622a1de859da6f10b86e684a23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36be3c11c288676199746fa0e5978e236ffc2f3a5974e91115d37b8ce2da9cbc = $this->env->getExtension("native_profiler");
        $__internal_36be3c11c288676199746fa0e5978e236ffc2f3a5974e91115d37b8ce2da9cbc->enter($__internal_36be3c11c288676199746fa0e5978e236ffc2f3a5974e91115d37b8ce2da9cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36be3c11c288676199746fa0e5978e236ffc2f3a5974e91115d37b8ce2da9cbc->leave($__internal_36be3c11c288676199746fa0e5978e236ffc2f3a5974e91115d37b8ce2da9cbc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_44b3ba246091056ae8fe68569a1dc2d64d061d1234ff570588cabe06dcb6f3cc = $this->env->getExtension("native_profiler");
        $__internal_44b3ba246091056ae8fe68569a1dc2d64d061d1234ff570588cabe06dcb6f3cc->enter($__internal_44b3ba246091056ae8fe68569a1dc2d64d061d1234ff570588cabe06dcb6f3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_44b3ba246091056ae8fe68569a1dc2d64d061d1234ff570588cabe06dcb6f3cc->leave($__internal_44b3ba246091056ae8fe68569a1dc2d64d061d1234ff570588cabe06dcb6f3cc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_584556b0ba90345c6ef115b1d17397d13ad4b2fb2031eaf477d78bbe7c4fe4d1 = $this->env->getExtension("native_profiler");
        $__internal_584556b0ba90345c6ef115b1d17397d13ad4b2fb2031eaf477d78bbe7c4fe4d1->enter($__internal_584556b0ba90345c6ef115b1d17397d13ad4b2fb2031eaf477d78bbe7c4fe4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_584556b0ba90345c6ef115b1d17397d13ad4b2fb2031eaf477d78bbe7c4fe4d1->leave($__internal_584556b0ba90345c6ef115b1d17397d13ad4b2fb2031eaf477d78bbe7c4fe4d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7da36a45a5fb0253af453f0115a2bad419fc9099e1aa8dedeef80fe48487d824 = $this->env->getExtension("native_profiler");
        $__internal_7da36a45a5fb0253af453f0115a2bad419fc9099e1aa8dedeef80fe48487d824->enter($__internal_7da36a45a5fb0253af453f0115a2bad419fc9099e1aa8dedeef80fe48487d824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7da36a45a5fb0253af453f0115a2bad419fc9099e1aa8dedeef80fe48487d824->leave($__internal_7da36a45a5fb0253af453f0115a2bad419fc9099e1aa8dedeef80fe48487d824_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
