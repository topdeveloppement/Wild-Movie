<?php

/* FrontendBundle:Default:newfilm.html.twig */
class __TwigTemplate_27a6b22d3a5faa4c26b64a9a62ccc648318399b9c30e1fe924cc312b721fdc1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:newfilm.html.twig", 1);
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
        $__internal_f7cdf4f6afee3c6dd9a0d23f8ceff7e6a2371508b7950b1bce96797fd3ba7289 = $this->env->getExtension("native_profiler");
        $__internal_f7cdf4f6afee3c6dd9a0d23f8ceff7e6a2371508b7950b1bce96797fd3ba7289->enter($__internal_f7cdf4f6afee3c6dd9a0d23f8ceff7e6a2371508b7950b1bce96797fd3ba7289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:newfilm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7cdf4f6afee3c6dd9a0d23f8ceff7e6a2371508b7950b1bce96797fd3ba7289->leave($__internal_f7cdf4f6afee3c6dd9a0d23f8ceff7e6a2371508b7950b1bce96797fd3ba7289_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2f09a6c2b082abcff02dfef6ccb4ec8c359c2a9064d4cafbfe2a67ce24989a0 = $this->env->getExtension("native_profiler");
        $__internal_e2f09a6c2b082abcff02dfef6ccb4ec8c359c2a9064d4cafbfe2a67ce24989a0->enter($__internal_e2f09a6c2b082abcff02dfef6ccb4ec8c359c2a9064d4cafbfe2a67ce24989a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>Ajoutez un nouveau film</h1>

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t<input type=\"submit\">
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_e2f09a6c2b082abcff02dfef6ccb4ec8c359c2a9064d4cafbfe2a67ce24989a0->leave($__internal_e2f09a6c2b082abcff02dfef6ccb4ec8c359c2a9064d4cafbfe2a67ce24989a0_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:newfilm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <h1>Ajoutez un nouveau film</h1>*/
/* */
/* {{ form_start(form) }}*/
/* 	{{ form_widget(form) }}*/
/* 	<input type="submit">*/
/* {{ form_end(form) }}*/
/* */
/* {% endblock %} */
