<?php

/* FrontendBundle:Default:show.html.twig */
class __TwigTemplate_f6a317ca4f97d8c494e75dc23948c17c289d2c3b02778a235969fb62a10ef4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33689f3961ee318a59d99aeb61c844c934a43d892b7547ac7f9ee3630576c227 = $this->env->getExtension("native_profiler");
        $__internal_33689f3961ee318a59d99aeb61c844c934a43d892b7547ac7f9ee3630576c227->enter($__internal_33689f3961ee318a59d99aeb61c844c934a43d892b7547ac7f9ee3630576c227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33689f3961ee318a59d99aeb61c844c934a43d892b7547ac7f9ee3630576c227->leave($__internal_33689f3961ee318a59d99aeb61c844c934a43d892b7547ac7f9ee3630576c227_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5db13cfe1ee424ad119d2096102fe29076e0d4b06c9980917b2fd50121f8211c = $this->env->getExtension("native_profiler");
        $__internal_5db13cfe1ee424ad119d2096102fe29076e0d4b06c9980917b2fd50121f8211c->enter($__internal_5db13cfe1ee424ad119d2096102fe29076e0d4b06c9980917b2fd50121f8211c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"col-md-5 col-md-offset-1\">
\t\t<div class=\"col-md-12\">
\t\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("uploads/film/" . $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "folder", array())) . "")), "html", null, true);
        echo "\">
\t\t</div>
\t</div>
\t<div class=\"col-md-5\">

\t\t<h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "titre", array()), "html", null, true);
        echo "</h1>
\t\t<hr>
\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t
\t</div>

";
        
        $__internal_5db13cfe1ee424ad119d2096102fe29076e0d4b06c9980917b2fd50121f8211c->leave($__internal_5db13cfe1ee424ad119d2096102fe29076e0d4b06c9980917b2fd50121f8211c_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	<div class="col-md-5 col-md-offset-1">*/
/* 		<div class="col-md-12">*/
/* 			<img src="{{ asset('uploads/film/' ~ movie.folder ~ '') }}">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-5">*/
/* */
/* 		<h1>{{ movie.titre }}</h1>*/
/* 		<hr>*/
/* 		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>*/
/* 		*/
/* 	</div>*/
/* */
/* {% endblock %}*/
