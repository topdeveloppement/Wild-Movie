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
        $__internal_f7253fb86e2667592cbcecb9e130a8d182cecc8e84d4aa3d6c257f75056a3cca = $this->env->getExtension("native_profiler");
        $__internal_f7253fb86e2667592cbcecb9e130a8d182cecc8e84d4aa3d6c257f75056a3cca->enter($__internal_f7253fb86e2667592cbcecb9e130a8d182cecc8e84d4aa3d6c257f75056a3cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7253fb86e2667592cbcecb9e130a8d182cecc8e84d4aa3d6c257f75056a3cca->leave($__internal_f7253fb86e2667592cbcecb9e130a8d182cecc8e84d4aa3d6c257f75056a3cca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_397e0e14b401426f5acd6acdd070f833e5bc17fe6f0ae61bf525132f9ac5faca = $this->env->getExtension("native_profiler");
        $__internal_397e0e14b401426f5acd6acdd070f833e5bc17fe6f0ae61bf525132f9ac5faca->enter($__internal_397e0e14b401426f5acd6acdd070f833e5bc17fe6f0ae61bf525132f9ac5faca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-5 col-md-offset-1 left\">
\t\t\t<img class=\"img-style-3\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("uploads/film/" . $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "folder", array())) . "")), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-5\">

\t\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "titre", array()), "html", null, true);
        echo "</h2>
\t\t\t<hr>
\t\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t
\t\t</div>
\t</div>
\t<div class=\"col-md-10 col-md-offset-1\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Commentaires : </h2>
\t\t\t<hr>

\t\t\t";
        // line 22
        echo "\t\t</div>
\t</div>

";
        
        $__internal_397e0e14b401426f5acd6acdd070f833e5bc17fe6f0ae61bf525132f9ac5faca->leave($__internal_397e0e14b401426f5acd6acdd070f833e5bc17fe6f0ae61bf525132f9ac5faca_prof);

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
        return array (  68 => 22,  56 => 12,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="col-md-12">*/
/* 		<div class="col-md-5 col-md-offset-1 left">*/
/* 			<img class="img-style-3" src="{{ asset('uploads/film/' ~ movie.folder ~ '') }}">*/
/* 		</div>*/
/* 		<div class="col-md-5">*/
/* */
/* 			<h2>{{ movie.titre }}</h2>*/
/* 			<hr>*/
/* 			<p>{{ movie.description }}</p>*/
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-10 col-md-offset-1">*/
/* 		<div class="col-md-12">*/
/* 			<h2>Commentaires : </h2>*/
/* 			<hr>*/
/* */
/* 			{# CODE HERE #}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
