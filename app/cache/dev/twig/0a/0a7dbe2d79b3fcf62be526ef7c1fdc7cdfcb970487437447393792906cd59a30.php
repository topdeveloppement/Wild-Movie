<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_95087a14a59350cdc3d68e3b9f8765cb11b5f1a1fe8a24e1fa3eb1b99fffb21e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:index.html.twig", 1);
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
        $__internal_488853d1a6f8262e1609dda7bcb0670aad21abbdbd67a783189781c814c641fb = $this->env->getExtension("native_profiler");
        $__internal_488853d1a6f8262e1609dda7bcb0670aad21abbdbd67a783189781c814c641fb->enter($__internal_488853d1a6f8262e1609dda7bcb0670aad21abbdbd67a783189781c814c641fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_488853d1a6f8262e1609dda7bcb0670aad21abbdbd67a783189781c814c641fb->leave($__internal_488853d1a6f8262e1609dda7bcb0670aad21abbdbd67a783189781c814c641fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bea1699d52c91589593c8d3100f7a56b13616cdb6e43d0339e5c7adea710b4a = $this->env->getExtension("native_profiler");
        $__internal_9bea1699d52c91589593c8d3100f7a56b13616cdb6e43d0339e5c7adea710b4a->enter($__internal_9bea1699d52c91589593c8d3100f7a56b13616cdb6e43d0339e5c7adea710b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"col-md-10 col-md-offset-1\">
\t\t<div id=\"myCarousel\" class=\"carousel slide main-carousel\" data-ride=\"carousel\">
\t\t  <!-- Indicators -->
\t\t  <ol class=\"carousel-indicators\">
\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t  </ol>

\t\t  <!-- Wrapper for slides -->
\t\t  <div class=\"carousel-inner\" role=\"listbox\">
\t\t    <div class=\"item active\">
\t\t      <img class=\"img-style-1\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/photo1.jpg"), "html", null, true);
        echo "\" alt=\"Chania\">
\t\t    </div>

\t\t    <div class=\"item\">
\t\t      <img style=\"max-height:300px;\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/photo1.jpg"), "html", null, true);
        echo "\" alt=\"Flower\">
\t\t    </div>
\t\t  </div>

\t\t  <!-- Left and right controls -->
\t\t  <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t    <span class=\"sr-only\">Previous</span>
\t\t  </a>
\t\t  <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t    <span class=\"sr-only\">Next</span>
\t\t  </a>
\t\t</div>
\t</div>

\t<div class=\"col-md-5 col-md-offset-1\">
\t\t<h3>Les films à l'affiche !</h3>
\t\t<hr>

\t\t";
        // line 40
        $context["compteur"] = 0;
        // line 41
        echo "
\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 43
            echo "\t\t\t";
            if (((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) != 5)) {
                // line 44
                echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_show", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
                echo "\"><img class=\"card-img-top img-style-2\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("uploads/film/" . $this->getAttribute($context["movie"], "folder", array())) . "")), "html", null, true);
                echo "\" alt=\"film\">
\t\t\t\t</div>
\t\t\t\t";
                // line 47
                $context["compteur"] = ((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) + 1);
                // line 48
                echo "\t\t\t";
            }
            // line 49
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
\t</div>

\t<div class=\"col-md-5\">
\t\t<h3>Derniers articles</h3>
\t\t<hr>
\t\t
\t\t<div class=\"col-md-12 article-style-1\">
\t\t\t<p><strong>Décès de l’homme qui connaissait le mec qui était le cousin du type qui était pote avec Jean Dujardin...</strong></h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
\t\t</div>
\t\t<div class=\"col-md-12 article-style-2\">
\t\t\t<p><strong>Un chaton aurait trouvé refuge dans la gorge du chanteur Garou depuis 1983...</strong></h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
\t\t</div>
\t\t<div class=\"col-md-12 article-style-2\">
\t\t\t<p><strong>Fabrice Luchini sombre dans la dépression après avoir commis une faute de liaison...</strong></h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
\t\t</div>
\t\t<div class=\"col-md-12 article-style-2\">
\t\t\t<p><strong>Kanye West frappe une jeune fan qui ne chante pas assez fort à son goût...</strong></h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
\t\t</div>
\t\t
\t</div>

";
        
        $__internal_9bea1699d52c91589593c8d3100f7a56b13616cdb6e43d0339e5c7adea710b4a->leave($__internal_9bea1699d52c91589593c8d3100f7a56b13616cdb6e43d0339e5c7adea710b4a_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 51,  111 => 49,  108 => 48,  106 => 47,  99 => 45,  96 => 44,  93 => 43,  89 => 42,  86 => 41,  84 => 40,  61 => 20,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	<div class="col-md-10 col-md-offset-1">*/
/* 		<div id="myCarousel" class="carousel slide main-carousel" data-ride="carousel">*/
/* 		  <!-- Indicators -->*/
/* 		  <ol class="carousel-indicators">*/
/* 		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/* 		    <li data-target="#myCarousel" data-slide-to="1"></li>*/
/* 		  </ol>*/
/* */
/* 		  <!-- Wrapper for slides -->*/
/* 		  <div class="carousel-inner" role="listbox">*/
/* 		    <div class="item active">*/
/* 		      <img class="img-style-1" src="{{ asset('img/photo1.jpg') }}" alt="Chania">*/
/* 		    </div>*/
/* */
/* 		    <div class="item">*/
/* 		      <img style="max-height:300px;" src="{{ asset('img/photo1.jpg') }}" alt="Flower">*/
/* 		    </div>*/
/* 		  </div>*/
/* */
/* 		  <!-- Left and right controls -->*/
/* 		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/* 		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/* 		    <span class="sr-only">Previous</span>*/
/* 		  </a>*/
/* 		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/* 		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/* 		    <span class="sr-only">Next</span>*/
/* 		  </a>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="col-md-5 col-md-offset-1">*/
/* 		<h3>Les films à l'affiche !</h3>*/
/* 		<hr>*/
/* */
/* 		{% set compteur = 0 %}*/
/* */
/* 		{% for movie in movies %}*/
/* 			{% if compteur != 5 %}*/
/* 				<div class="col-md-4">*/
/* 					<a href="{{ path('film_show', {'id': movie.id}) }}"><img class="card-img-top img-style-2" src="{{ asset('uploads/film/' ~ movie.folder ~ '') }}" alt="film">*/
/* 				</div>*/
/* 				{% set compteur = compteur + 1 %}*/
/* 			{% endif %}*/
/* */
/* 		{% endfor %}*/
/* */
/* 	</div>*/
/* */
/* 	<div class="col-md-5">*/
/* 		<h3>Derniers articles</h3>*/
/* 		<hr>*/
/* 		*/
/* 		<div class="col-md-12 article-style-1">*/
/* 			<p><strong>Décès de l’homme qui connaissait le mec qui était le cousin du type qui était pote avec Jean Dujardin...</strong></h3>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>*/
/* 		</div>*/
/* 		<div class="col-md-12 article-style-2">*/
/* 			<p><strong>Un chaton aurait trouvé refuge dans la gorge du chanteur Garou depuis 1983...</strong></h3>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>*/
/* 		</div>*/
/* 		<div class="col-md-12 article-style-2">*/
/* 			<p><strong>Fabrice Luchini sombre dans la dépression après avoir commis une faute de liaison...</strong></h3>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>*/
/* 		</div>*/
/* 		<div class="col-md-12 article-style-2">*/
/* 			<p><strong>Kanye West frappe une jeune fan qui ne chante pas assez fort à son goût...</strong></h3>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* */
/* {% endblock %}*/
