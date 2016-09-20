<?php

/* default/index.html.twig */
class __TwigTemplate_f425ce1e6cd2e741524afb5b02f89d96f1c9ab78f3a19250b7b148204e3abbbb extends Twig_Template
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
        $__internal_efb6c1b247407cca69574a56c565f6d494dd1c69a5f465126ab9bbbe3c220a25 = $this->env->getExtension("native_profiler");
        $__internal_efb6c1b247407cca69574a56c565f6d494dd1c69a5f465126ab9bbbe3c220a25->enter($__internal_efb6c1b247407cca69574a56c565f6d494dd1c69a5f465126ab9bbbe3c220a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb6c1b247407cca69574a56c565f6d494dd1c69a5f465126ab9bbbe3c220a25->leave($__internal_efb6c1b247407cca69574a56c565f6d494dd1c69a5f465126ab9bbbe3c220a25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68126ddc5a243aa8039bba6794ed1edba5f3543de3bda141fd2e92701b4ca608 = $this->env->getExtension("native_profiler");
        $__internal_68126ddc5a243aa8039bba6794ed1edba5f3543de3bda141fd2e92701b4ca608->enter($__internal_68126ddc5a243aa8039bba6794ed1edba5f3543de3bda141fd2e92701b4ca608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_68126ddc5a243aa8039bba6794ed1edba5f3543de3bda141fd2e92701b4ca608->leave($__internal_68126ddc5a243aa8039bba6794ed1edba5f3543de3bda141fd2e92701b4ca608_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_51248ec7497e7ed6fc5b09ca007638278706cd03aa4d89f521ad990b2f61280c = $this->env->getExtension("native_profiler");
        $__internal_51248ec7497e7ed6fc5b09ca007638278706cd03aa4d89f521ad990b2f61280c->enter($__internal_51248ec7497e7ed6fc5b09ca007638278706cd03aa4d89f521ad990b2f61280c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_51248ec7497e7ed6fc5b09ca007638278706cd03aa4d89f521ad990b2f61280c->leave($__internal_51248ec7497e7ed6fc5b09ca007638278706cd03aa4d89f521ad990b2f61280c_prof);

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
