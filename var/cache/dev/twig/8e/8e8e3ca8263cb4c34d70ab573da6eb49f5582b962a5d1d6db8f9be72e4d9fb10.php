<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_35fa85b95883a779888c9bdffe629c56024f4ad347ce7a092198f91738e51aea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d42812855f356965d3490e1ffcc9b50ca54baf5132f52e60d854c36624bb4a23 = $this->env->getExtension("native_profiler");
        $__internal_d42812855f356965d3490e1ffcc9b50ca54baf5132f52e60d854c36624bb4a23->enter($__internal_d42812855f356965d3490e1ffcc9b50ca54baf5132f52e60d854c36624bb4a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d42812855f356965d3490e1ffcc9b50ca54baf5132f52e60d854c36624bb4a23->leave($__internal_d42812855f356965d3490e1ffcc9b50ca54baf5132f52e60d854c36624bb4a23_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c20307cf7072165b6a159ce50d63ddbc00ce0144b3eba5e8250c345e60eac6e = $this->env->getExtension("native_profiler");
        $__internal_2c20307cf7072165b6a159ce50d63ddbc00ce0144b3eba5e8250c345e60eac6e->enter($__internal_2c20307cf7072165b6a159ce50d63ddbc00ce0144b3eba5e8250c345e60eac6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2c20307cf7072165b6a159ce50d63ddbc00ce0144b3eba5e8250c345e60eac6e->leave($__internal_2c20307cf7072165b6a159ce50d63ddbc00ce0144b3eba5e8250c345e60eac6e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b80aba2b7dca5448b1ffc1fef84213d2157a6c5077515a2292235542d20a5673 = $this->env->getExtension("native_profiler");
        $__internal_b80aba2b7dca5448b1ffc1fef84213d2157a6c5077515a2292235542d20a5673->enter($__internal_b80aba2b7dca5448b1ffc1fef84213d2157a6c5077515a2292235542d20a5673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b80aba2b7dca5448b1ffc1fef84213d2157a6c5077515a2292235542d20a5673->leave($__internal_b80aba2b7dca5448b1ffc1fef84213d2157a6c5077515a2292235542d20a5673_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_870b0cbbf1a979cef8b1362592a3a9f8f8dd2962e3a376c99bce60a259276f1c = $this->env->getExtension("native_profiler");
        $__internal_870b0cbbf1a979cef8b1362592a3a9f8f8dd2962e3a376c99bce60a259276f1c->enter($__internal_870b0cbbf1a979cef8b1362592a3a9f8f8dd2962e3a376c99bce60a259276f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_870b0cbbf1a979cef8b1362592a3a9f8f8dd2962e3a376c99bce60a259276f1c->leave($__internal_870b0cbbf1a979cef8b1362592a3a9f8f8dd2962e3a376c99bce60a259276f1c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
