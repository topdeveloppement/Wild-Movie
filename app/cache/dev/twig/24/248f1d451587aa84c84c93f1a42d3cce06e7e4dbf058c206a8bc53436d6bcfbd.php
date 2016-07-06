<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_7ba4f4b8994048eca373fef4df246b294b35e8f92c413e096354328e38aea15d extends Twig_Template
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
        $__internal_7d11da79aeb0c7c419dcf0fa4a2069b297e6e15eacdb1921ae783f87029b40e5 = $this->env->getExtension("native_profiler");
        $__internal_7d11da79aeb0c7c419dcf0fa4a2069b297e6e15eacdb1921ae783f87029b40e5->enter($__internal_7d11da79aeb0c7c419dcf0fa4a2069b297e6e15eacdb1921ae783f87029b40e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d11da79aeb0c7c419dcf0fa4a2069b297e6e15eacdb1921ae783f87029b40e5->leave($__internal_7d11da79aeb0c7c419dcf0fa4a2069b297e6e15eacdb1921ae783f87029b40e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2256665606ed51c48ddce628968d736c6ceb15b81a86446dd8c8ff92eca5ec9d = $this->env->getExtension("native_profiler");
        $__internal_2256665606ed51c48ddce628968d736c6ceb15b81a86446dd8c8ff92eca5ec9d->enter($__internal_2256665606ed51c48ddce628968d736c6ceb15b81a86446dd8c8ff92eca5ec9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

\t\t<div class=\"col-md-4\">
\t\t\t<img class=\"card-img-top img-style-2\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/film1.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<img class=\"card-img-top img-style-2\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/film2.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<img class=\"card-img-top img-style-2\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/film3.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<img class=\"card-img-top img-style-3\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/film4.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<img class=\"card-img-top img-style-3\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/film5.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<img class=\"card-img-top img-style-3\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/film6.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
\t\t</div>
\t\t

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

\t<div class=\"col-md-12 empty\"></div>
\t<div class=\"ad-div col-md-10 col-md-offset-1\">
\t\t<h2>Restez informé des prochaines sorties !</h2>
\t</div>
\t<div class=\"col-md-12 empty\"></div>

\t<div class=\"col-md-10 col-md-offset-1 news-div\">
\t\t<input class=\"news-input\" placeholder=\"Saisissez votre adresse E-Mail ...\" type=\"text\">
\t\t<input class=\"btn btn-success news-input-2\" value=\"Envoyer !\" type=\"text\">
\t</div>

";
        
        $__internal_2256665606ed51c48ddce628968d736c6ceb15b81a86446dd8c8ff92eca5ec9d->leave($__internal_2256665606ed51c48ddce628968d736c6ceb15b81a86446dd8c8ff92eca5ec9d_prof);

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
        return array (  115 => 56,  109 => 53,  103 => 50,  97 => 47,  91 => 44,  85 => 41,  61 => 20,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
/* 		<div class="col-md-4">*/
/* 			<img class="card-img-top img-style-2" src="{{ asset('img/film1.jpg') }}" alt="Card image cap">*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<img class="card-img-top img-style-2" src="{{ asset('img/film2.jpg') }}" alt="Card image cap">*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<img class="card-img-top img-style-2" src="{{ asset('img/film3.jpg') }}" alt="Card image cap">*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<img class="card-img-top img-style-3" src="{{ asset('img/film4.jpg') }}" alt="Card image cap">*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<img class="card-img-top img-style-3" src="{{ asset('img/film5.jpg') }}" alt="Card image cap">*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<img class="card-img-top img-style-3" src="{{ asset('img/film6.jpg') }}" alt="Card image cap">*/
/* 		</div>*/
/* 		*/
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
/* 	<div class="col-md-12 empty"></div>*/
/* 	<div class="ad-div col-md-10 col-md-offset-1">*/
/* 		<h2>Restez informé des prochaines sorties !</h2>*/
/* 	</div>*/
/* 	<div class="col-md-12 empty"></div>*/
/* */
/* 	<div class="col-md-10 col-md-offset-1 news-div">*/
/* 		<input class="news-input" placeholder="Saisissez votre adresse E-Mail ..." type="text">*/
/* 		<input class="btn btn-success news-input-2" value="Envoyer !" type="text">*/
/* 	</div>*/
/* */
/* {% endblock %}*/
