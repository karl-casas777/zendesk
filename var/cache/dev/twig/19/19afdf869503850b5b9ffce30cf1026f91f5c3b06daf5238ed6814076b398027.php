<?php

/* default/index.html.twig */
class __TwigTemplate_d631c7dd608e792a2105ad2c331b38bdf6d19175316123917a57adc5551ae002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae632f6a80f11f8eb9f118b9fdb04728efbebdbcaacc50b7d72d985b181239c6 = $this->env->getExtension("native_profiler");
        $__internal_ae632f6a80f11f8eb9f118b9fdb04728efbebdbcaacc50b7d72d985b181239c6->enter($__internal_ae632f6a80f11f8eb9f118b9fdb04728efbebdbcaacc50b7d72d985b181239c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae632f6a80f11f8eb9f118b9fdb04728efbebdbcaacc50b7d72d985b181239c6->leave($__internal_ae632f6a80f11f8eb9f118b9fdb04728efbebdbcaacc50b7d72d985b181239c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5cecede330684848b64e6349adf9b83ea0732e24cc5d54d495f6ccb0150a46d = $this->env->getExtension("native_profiler");
        $__internal_a5cecede330684848b64e6349adf9b83ea0732e24cc5d54d495f6ccb0150a46d->enter($__internal_a5cecede330684848b64e6349adf9b83ea0732e24cc5d54d495f6ccb0150a46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1>Karl Casas - Technical Exam</h1>
            </div>
            <div>
                <h4>Olympics API</h4>
                <ul>
                    <li>
                        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("olympics_previous_games");
        echo "\">Previous Games</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("olympics_current_games");
        echo "\">Current Games</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("olympics_next_games");
        echo "\">Next Games</a>
                    </li>
                </ul>
            </div>
            <div>
                <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("tictactoe");
        echo "\">
                    <h4>TicTacToe Game</h4>
                </a>
            </div>
        </div>
    </div>
";
        
        $__internal_a5cecede330684848b64e6349adf9b83ea0732e24cc5d54d495f6ccb0150a46d->leave($__internal_a5cecede330684848b64e6349adf9b83ea0732e24cc5d54d495f6ccb0150a46d_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6fad71667c636f4225319fd07a0c946057e960c71e1e5525162d0dd13578bc3f = $this->env->getExtension("native_profiler");
        $__internal_6fad71667c636f4225319fd07a0c946057e960c71e1e5525162d0dd13578bc3f->enter($__internal_6fad71667c636f4225319fd07a0c946057e960c71e1e5525162d0dd13578bc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 33
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_6fad71667c636f4225319fd07a0c946057e960c71e1e5525162d0dd13578bc3f->leave($__internal_6fad71667c636f4225319fd07a0c946057e960c71e1e5525162d0dd13578bc3f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  86 => 32,  72 => 24,  64 => 19,  58 => 16,  52 => 13,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/*                 <h1>Karl Casas - Technical Exam</h1>*/
/*             </div>*/
/*             <div>*/
/*                 <h4>Olympics API</h4>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ url('olympics_previous_games') }}">Previous Games</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ url('olympics_current_games') }}">Current Games</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ url('olympics_next_games') }}">Next Games</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div>*/
/*                 <a href="{{ url('tictactoe') }}">*/
/*                     <h4>TicTacToe Game</h4>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*     #container { padding: 2em; }*/
/*     #welcome, #status { margin-bottom: 2em; }*/
/*     #welcome h1 span { display: block; font-size: 75%; }*/
/*     #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*     #icon-book { display: none; }*/
/* */
/*     @media (min-width: 768px) {*/
/*         #wrapper { width: 80%; margin: 2em auto; }*/
/*         #icon-book { display: inline-block; }*/
/*         #status a, #next a { display: block; }*/
/* */
/*         @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
