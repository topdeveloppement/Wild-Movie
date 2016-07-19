<?php

/* film/one.html.twig */
class __TwigTemplate_091af65e07f2b3e019971b4bcfc988f99ea54245426ca25a8cba70d64a3960b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "film/one.html.twig", 1);
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
        $__internal_73400e559df41f1b6c6cc08d985b6f036784cb77c1b0ebfe067df1e05f824e36 = $this->env->getExtension("native_profiler");
        $__internal_73400e559df41f1b6c6cc08d985b6f036784cb77c1b0ebfe067df1e05f824e36->enter($__internal_73400e559df41f1b6c6cc08d985b6f036784cb77c1b0ebfe067df1e05f824e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73400e559df41f1b6c6cc08d985b6f036784cb77c1b0ebfe067df1e05f824e36->leave($__internal_73400e559df41f1b6c6cc08d985b6f036784cb77c1b0ebfe067df1e05f824e36_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e59db49cb112e31266b0a329695f96bdbeab7966e9d9bdb72a633e12e38f620 = $this->env->getExtension("native_profiler");
        $__internal_4e59db49cb112e31266b0a329695f96bdbeab7966e9d9bdb72a633e12e38f620->enter($__internal_4e59db49cb112e31266b0a329695f96bdbeab7966e9d9bdb72a633e12e38f620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"row marg-row\">
\t<div class=\"col-lg-3\">

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("filmpost")));
        echo "
\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "post", array()), 'label');
        echo "
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "post", array()), 'widget');
        echo "
\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'label');
        echo "
\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'widget');
        echo "
\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t</div>
\t<div class=\"col-lg-6\">
\t\t<div class=\"panel panel-default bg-panel-mv\">
\t    \t<div class=\"panel-heading text-center title-com\">
\t        \t<h3 class=\"marg-row\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "titre", array()), "html", null, true);
        echo "</h3>
\t    \t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<img style=\"max-width: 100%;\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/film/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "folder", array()), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    <ul class=\"info-bull\">
\t\t\t    <li>
\t\t\t        <div class=\"info-bull-panel bg-panel-wh\">
\t\t\t            <div class=\"info-bull-body\">
\t\t\t                <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t            </div>
\t\t\t            <div class=\"date-info\">
\t\t\t            </div>
\t\t\t        </div>
\t\t\t    </li>
\t\t\t    </ul>
\t\t\t</div>
\t\t</div>  
\t</div>
\t<div class=\"col-lg-3\">
\t
\t</div>
</div>\t
";
        
        $__internal_4e59db49cb112e31266b0a329695f96bdbeab7966e9d9bdb72a633e12e38f620->leave($__internal_4e59db49cb112e31266b0a329695f96bdbeab7966e9d9bdb72a633e12e38f620_prof);

    }

    public function getTemplateName()
    {
        return "film/one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  92 => 23,  86 => 20,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="row marg-row">*/
/* 	<div class="col-lg-3">*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('filmpost')}) }}*/
/* 	{{ form_label(form.title) }}*/
/* 	{{ form_widget(form.title) }}*/
/* 	{{ form_label(form.post) }}*/
/* 	{{ form_widget(form.post) }}*/
/* 	{{ form_label(form.auteur) }}*/
/* 	{{ form_widget(form.auteur) }}*/
/* 	{{ form_widget(form.submit)}}*/
/* {{ form_end(form) }}*/
/* */
/* 	</div>*/
/* 	<div class="col-lg-6">*/
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
/* 		</div>  */
/* 	</div>*/
/* 	<div class="col-lg-3">*/
/* 	*/
/* 	</div>*/
/* </div>	*/
/* {% endblock body %}*/
