<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1f53af8e2f776ae5c13c44a6c2f2c9c55b821b23736c491cc7f018e4cca6ea2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af29b75fc3f024343a9eaf428ff93827127ade4713cc894447aa81beb84d2194 = $this->env->getExtension("native_profiler");
        $__internal_af29b75fc3f024343a9eaf428ff93827127ade4713cc894447aa81beb84d2194->enter($__internal_af29b75fc3f024343a9eaf428ff93827127ade4713cc894447aa81beb84d2194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af29b75fc3f024343a9eaf428ff93827127ade4713cc894447aa81beb84d2194->leave($__internal_af29b75fc3f024343a9eaf428ff93827127ade4713cc894447aa81beb84d2194_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3dd51591c3baa03d46c84124828c2603104870f245092a2dae4d497dd8f6bc63 = $this->env->getExtension("native_profiler");
        $__internal_3dd51591c3baa03d46c84124828c2603104870f245092a2dae4d497dd8f6bc63->enter($__internal_3dd51591c3baa03d46c84124828c2603104870f245092a2dae4d497dd8f6bc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3dd51591c3baa03d46c84124828c2603104870f245092a2dae4d497dd8f6bc63->leave($__internal_3dd51591c3baa03d46c84124828c2603104870f245092a2dae4d497dd8f6bc63_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_076fd049ae6d1a04c631e59d6bda8e3cb6261ff8eae8a5fcf7fd28966e5dc8be = $this->env->getExtension("native_profiler");
        $__internal_076fd049ae6d1a04c631e59d6bda8e3cb6261ff8eae8a5fcf7fd28966e5dc8be->enter($__internal_076fd049ae6d1a04c631e59d6bda8e3cb6261ff8eae8a5fcf7fd28966e5dc8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_076fd049ae6d1a04c631e59d6bda8e3cb6261ff8eae8a5fcf7fd28966e5dc8be->leave($__internal_076fd049ae6d1a04c631e59d6bda8e3cb6261ff8eae8a5fcf7fd28966e5dc8be_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dc993c26e34acf1bb1101956a65a23f5d8505d2c00b1ccf842897e64e8ed297 = $this->env->getExtension("native_profiler");
        $__internal_2dc993c26e34acf1bb1101956a65a23f5d8505d2c00b1ccf842897e64e8ed297->enter($__internal_2dc993c26e34acf1bb1101956a65a23f5d8505d2c00b1ccf842897e64e8ed297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2dc993c26e34acf1bb1101956a65a23f5d8505d2c00b1ccf842897e64e8ed297->leave($__internal_2dc993c26e34acf1bb1101956a65a23f5d8505d2c00b1ccf842897e64e8ed297_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
