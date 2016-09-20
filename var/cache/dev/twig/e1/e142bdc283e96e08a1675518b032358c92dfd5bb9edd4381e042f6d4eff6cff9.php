<?php

/* base.html.twig */
class __TwigTemplate_de065f6a2dcdf6e79ae2409d58ea0d9a8cb0f96c65b5f3fc9bfbd9a859516252 extends Twig_Template
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
        $__internal_787add5b6af0a5bfa5110f052c3a9922d318fb48b8a1d71c93ba36bd5afaecad = $this->env->getExtension("native_profiler");
        $__internal_787add5b6af0a5bfa5110f052c3a9922d318fb48b8a1d71c93ba36bd5afaecad->enter($__internal_787add5b6af0a5bfa5110f052c3a9922d318fb48b8a1d71c93ba36bd5afaecad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_787add5b6af0a5bfa5110f052c3a9922d318fb48b8a1d71c93ba36bd5afaecad->leave($__internal_787add5b6af0a5bfa5110f052c3a9922d318fb48b8a1d71c93ba36bd5afaecad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_66bcc23708fe26f63af12a64ce5ac6bf6bf178197575e0c8dd95c295de4ff46f = $this->env->getExtension("native_profiler");
        $__internal_66bcc23708fe26f63af12a64ce5ac6bf6bf178197575e0c8dd95c295de4ff46f->enter($__internal_66bcc23708fe26f63af12a64ce5ac6bf6bf178197575e0c8dd95c295de4ff46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_66bcc23708fe26f63af12a64ce5ac6bf6bf178197575e0c8dd95c295de4ff46f->leave($__internal_66bcc23708fe26f63af12a64ce5ac6bf6bf178197575e0c8dd95c295de4ff46f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0be73e9e09d1f492403b0a4ab9ee89ec435930083f5324d878bb88bb34615aab = $this->env->getExtension("native_profiler");
        $__internal_0be73e9e09d1f492403b0a4ab9ee89ec435930083f5324d878bb88bb34615aab->enter($__internal_0be73e9e09d1f492403b0a4ab9ee89ec435930083f5324d878bb88bb34615aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0be73e9e09d1f492403b0a4ab9ee89ec435930083f5324d878bb88bb34615aab->leave($__internal_0be73e9e09d1f492403b0a4ab9ee89ec435930083f5324d878bb88bb34615aab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c95ec1d1b03970030d887b6c6782868e8a6b92556ed7fff1f1162c2616028c7a = $this->env->getExtension("native_profiler");
        $__internal_c95ec1d1b03970030d887b6c6782868e8a6b92556ed7fff1f1162c2616028c7a->enter($__internal_c95ec1d1b03970030d887b6c6782868e8a6b92556ed7fff1f1162c2616028c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c95ec1d1b03970030d887b6c6782868e8a6b92556ed7fff1f1162c2616028c7a->leave($__internal_c95ec1d1b03970030d887b6c6782868e8a6b92556ed7fff1f1162c2616028c7a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_869fec87300e8fcdfa1aae74a2e075722d6ea064b1395d543719f69c23321aa7 = $this->env->getExtension("native_profiler");
        $__internal_869fec87300e8fcdfa1aae74a2e075722d6ea064b1395d543719f69c23321aa7->enter($__internal_869fec87300e8fcdfa1aae74a2e075722d6ea064b1395d543719f69c23321aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "            <script src=\"https://code.jquery.com/jquery-3.1.0.min.js\" integrity=\"sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_869fec87300e8fcdfa1aae74a2e075722d6ea064b1395d543719f69c23321aa7->leave($__internal_869fec87300e8fcdfa1aae74a2e075722d6ea064b1395d543719f69c23321aa7_prof);

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
        return array (  99 => 12,  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 14,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         {% block javascripts %}*/
/*             <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
