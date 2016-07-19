<?php

/* film/index.html.twig */
class __TwigTemplate_5f382e58d163f39c6a479b3f843c38a1f7c26ef0b5eafb07a380cc43102835a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "film/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba2705a56dae31a7562a3b3619a98ef48ed7a07b7c1d966066a079b1e7648be1 = $this->env->getExtension("native_profiler");
        $__internal_ba2705a56dae31a7562a3b3619a98ef48ed7a07b7c1d966066a079b1e7648be1->enter($__internal_ba2705a56dae31a7562a3b3619a98ef48ed7a07b7c1d966066a079b1e7648be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba2705a56dae31a7562a3b3619a98ef48ed7a07b7c1d966066a079b1e7648be1->leave($__internal_ba2705a56dae31a7562a3b3619a98ef48ed7a07b7c1d966066a079b1e7648be1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6c6d26108f0771d2fd2bd4f138ad1aa89a38d4b30035df766e361807de78e37 = $this->env->getExtension("native_profiler");
        $__internal_b6c6d26108f0771d2fd2bd4f138ad1aa89a38d4b30035df766e361807de78e37->enter($__internal_b6c6d26108f0771d2fd2bd4f138ad1aa89a38d4b30035df766e361807de78e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"row marg-row\">
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $context["film"]));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 5
            echo "\t<div class=\"col-lg-3\">
\t\t<div class=\"panel panel-default bg-panel-mv\">
\t    \t<div class=\"panel-heading text-center title-com\">
\t        \t<h3 class=\"marg-row\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</h3>
\t    \t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<img style=\"max-width: 100%;\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/film/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "folder", array()), "html", null, true);
            echo "\" alt=\"\">
\t\t\t    <ul class=\"info-bull\">
\t\t\t    <li>
\t\t\t        <div class=\"info-bull-panel bg-panel-wh\">
\t\t\t            <div class=\"info-bull-body\">
\t\t\t                <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t            </div>
\t\t\t            <div class=\"date-info\">
\t\t\t            </div>
\t\t\t        </div>
\t\t\t    </li>
\t\t\t    </ul>
\t\t\t</div>
\t\t\t
\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("onefilm", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">Voir les commentaires</a>
\t\t\t<a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("filmpost");
            echo "\">Poster un Commentaires</a>
\t\t\t<br> 
\t\t</div> 
\t</div>
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</div>\t
";
        
        $__internal_b6c6d26108f0771d2fd2bd4f138ad1aa89a38d4b30035df766e361807de78e37->leave($__internal_b6c6d26108f0771d2fd2bd4f138ad1aa89a38d4b30035df766e361807de78e37_prof);

    }

    public function getTemplateName()
    {
        return "film/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  83 => 26,  79 => 25,  67 => 16,  58 => 11,  52 => 8,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="row marg-row">*/
/* 	{% for film in film |reverse %}*/
/* 	<div class="col-lg-3">*/
/* 		<div class="panel panel-default bg-panel-mv">*/
/* 	    	<div class="panel-heading text-center title-com">*/
/* 	        	<h3 class="marg-row">{{ film.titre }}</h3>*/
/* 	    	</div>*/
/* 			<div class="panel-body">*/
/* 				<img style="max-width: 100%;" src="{{ asset('uploads/film/')}}{{ film.folder }}" alt="">*/
/* 			    <ul class="info-bull">*/
/* 			    <li>*/
/* 			        <div class="info-bull-panel bg-panel-wh">*/
/* 			            <div class="info-bull-body">*/
/* 			                <p>{{ film.description }}</p>*/
/* 			            </div>*/
/* 			            <div class="date-info">*/
/* 			            </div>*/
/* 			        </div>*/
/* 			    </li>*/
/* 			    </ul>*/
/* 			</div>*/
/* 			*/
/* 			<a href="{{ path('onefilm',{id: film.id}) }}">Voir les commentaires</a>*/
/* 			<a href="{{ path('filmpost') }}">Poster un Commentaires</a>*/
/* 			<br> */
/* 		</div> */
/* 	</div>*/
/* 	 {% endfor %}*/
/* </div>	*/
/* {% endblock body %}*/
