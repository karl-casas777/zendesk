<?php

/* base.html.twig */
class __TwigTemplate_2972780703143ead95baaa8ae2eeaab0027bfd472ee9f0b35de5cc88006c9712 extends Twig_Template
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
        $__internal_f58befdab8cf34fe14476fe0705c4aae3df082224a0ba675c959d3a075261ded = $this->env->getExtension("native_profiler");
        $__internal_f58befdab8cf34fe14476fe0705c4aae3df082224a0ba675c959d3a075261ded->enter($__internal_f58befdab8cf34fe14476fe0705c4aae3df082224a0ba675c959d3a075261ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f58befdab8cf34fe14476fe0705c4aae3df082224a0ba675c959d3a075261ded->leave($__internal_f58befdab8cf34fe14476fe0705c4aae3df082224a0ba675c959d3a075261ded_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_38cb72b98b07694f27bc054a590a01c930eab3b079277da62439a95f27054b50 = $this->env->getExtension("native_profiler");
        $__internal_38cb72b98b07694f27bc054a590a01c930eab3b079277da62439a95f27054b50->enter($__internal_38cb72b98b07694f27bc054a590a01c930eab3b079277da62439a95f27054b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_38cb72b98b07694f27bc054a590a01c930eab3b079277da62439a95f27054b50->leave($__internal_38cb72b98b07694f27bc054a590a01c930eab3b079277da62439a95f27054b50_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_567e1f25f32e85044f2c0aeee47897b69e8caafc4adb4112f47addaedff3e291 = $this->env->getExtension("native_profiler");
        $__internal_567e1f25f32e85044f2c0aeee47897b69e8caafc4adb4112f47addaedff3e291->enter($__internal_567e1f25f32e85044f2c0aeee47897b69e8caafc4adb4112f47addaedff3e291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_567e1f25f32e85044f2c0aeee47897b69e8caafc4adb4112f47addaedff3e291->leave($__internal_567e1f25f32e85044f2c0aeee47897b69e8caafc4adb4112f47addaedff3e291_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_48f8645296c8fb855704213479cb167effd31c4b268be6f76e23ebb4fa8e063e = $this->env->getExtension("native_profiler");
        $__internal_48f8645296c8fb855704213479cb167effd31c4b268be6f76e23ebb4fa8e063e->enter($__internal_48f8645296c8fb855704213479cb167effd31c4b268be6f76e23ebb4fa8e063e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_48f8645296c8fb855704213479cb167effd31c4b268be6f76e23ebb4fa8e063e->leave($__internal_48f8645296c8fb855704213479cb167effd31c4b268be6f76e23ebb4fa8e063e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fa04317d82ba2c149e5b6a3e7ccce726950a955925409851474a16542399324 = $this->env->getExtension("native_profiler");
        $__internal_3fa04317d82ba2c149e5b6a3e7ccce726950a955925409851474a16542399324->enter($__internal_3fa04317d82ba2c149e5b6a3e7ccce726950a955925409851474a16542399324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "            <script src=\"https://code.jquery.com/jquery-3.1.0.min.js\" integrity=\"sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_3fa04317d82ba2c149e5b6a3e7ccce726950a955925409851474a16542399324->leave($__internal_3fa04317d82ba2c149e5b6a3e7ccce726950a955925409851474a16542399324_prof);

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
