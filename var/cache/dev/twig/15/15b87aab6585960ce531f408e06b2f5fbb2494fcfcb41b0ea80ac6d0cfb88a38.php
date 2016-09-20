<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6ab4d9693e962c4b1c8b0d52a280883014306b56d7ec0f5d292ed4f5af4aa277 extends Twig_Template
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
        $__internal_bbe1327ef1dd09c54d9705ebad39eb09391e491aad6d8e984786ebf3628eb968 = $this->env->getExtension("native_profiler");
        $__internal_bbe1327ef1dd09c54d9705ebad39eb09391e491aad6d8e984786ebf3628eb968->enter($__internal_bbe1327ef1dd09c54d9705ebad39eb09391e491aad6d8e984786ebf3628eb968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe1327ef1dd09c54d9705ebad39eb09391e491aad6d8e984786ebf3628eb968->leave($__internal_bbe1327ef1dd09c54d9705ebad39eb09391e491aad6d8e984786ebf3628eb968_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29a9523fc5bc96486777f2e1bff2a7c16e54f1e16ae66701abead2354733c9e9 = $this->env->getExtension("native_profiler");
        $__internal_29a9523fc5bc96486777f2e1bff2a7c16e54f1e16ae66701abead2354733c9e9->enter($__internal_29a9523fc5bc96486777f2e1bff2a7c16e54f1e16ae66701abead2354733c9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_29a9523fc5bc96486777f2e1bff2a7c16e54f1e16ae66701abead2354733c9e9->leave($__internal_29a9523fc5bc96486777f2e1bff2a7c16e54f1e16ae66701abead2354733c9e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e066f9d9f370a32a308e25b7914a15495e236508bea08e2e304b8056c544844 = $this->env->getExtension("native_profiler");
        $__internal_2e066f9d9f370a32a308e25b7914a15495e236508bea08e2e304b8056c544844->enter($__internal_2e066f9d9f370a32a308e25b7914a15495e236508bea08e2e304b8056c544844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e066f9d9f370a32a308e25b7914a15495e236508bea08e2e304b8056c544844->leave($__internal_2e066f9d9f370a32a308e25b7914a15495e236508bea08e2e304b8056c544844_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_970fe1717d8066879e8c78833dddbe2ac1646cf96a55ddf97a61ab673600e326 = $this->env->getExtension("native_profiler");
        $__internal_970fe1717d8066879e8c78833dddbe2ac1646cf96a55ddf97a61ab673600e326->enter($__internal_970fe1717d8066879e8c78833dddbe2ac1646cf96a55ddf97a61ab673600e326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_970fe1717d8066879e8c78833dddbe2ac1646cf96a55ddf97a61ab673600e326->leave($__internal_970fe1717d8066879e8c78833dddbe2ac1646cf96a55ddf97a61ab673600e326_prof);

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
