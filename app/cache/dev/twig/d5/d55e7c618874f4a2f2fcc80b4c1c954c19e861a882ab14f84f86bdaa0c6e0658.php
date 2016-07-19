<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8555b7ec74e697b962e53059fd5502f57852052ce47eaf4baa92faca66268177 extends Twig_Template
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
        $__internal_84b81ee7df77309d6ce94afc60eb90358c718d1bb3b9e2499ded8461ff039ad2 = $this->env->getExtension("native_profiler");
        $__internal_84b81ee7df77309d6ce94afc60eb90358c718d1bb3b9e2499ded8461ff039ad2->enter($__internal_84b81ee7df77309d6ce94afc60eb90358c718d1bb3b9e2499ded8461ff039ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b81ee7df77309d6ce94afc60eb90358c718d1bb3b9e2499ded8461ff039ad2->leave($__internal_84b81ee7df77309d6ce94afc60eb90358c718d1bb3b9e2499ded8461ff039ad2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11101eb3338289f6c9aa61ee1c3d3432ec483f6afa027cde4b402608f6e81241 = $this->env->getExtension("native_profiler");
        $__internal_11101eb3338289f6c9aa61ee1c3d3432ec483f6afa027cde4b402608f6e81241->enter($__internal_11101eb3338289f6c9aa61ee1c3d3432ec483f6afa027cde4b402608f6e81241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_11101eb3338289f6c9aa61ee1c3d3432ec483f6afa027cde4b402608f6e81241->leave($__internal_11101eb3338289f6c9aa61ee1c3d3432ec483f6afa027cde4b402608f6e81241_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_21be26799ce3bd9a29f95345077b0f86583e4a55db2c75315f9af666178f42b5 = $this->env->getExtension("native_profiler");
        $__internal_21be26799ce3bd9a29f95345077b0f86583e4a55db2c75315f9af666178f42b5->enter($__internal_21be26799ce3bd9a29f95345077b0f86583e4a55db2c75315f9af666178f42b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_21be26799ce3bd9a29f95345077b0f86583e4a55db2c75315f9af666178f42b5->leave($__internal_21be26799ce3bd9a29f95345077b0f86583e4a55db2c75315f9af666178f42b5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c566b36427f665facd5c0b464537115af988714300d32c4445a9ab3f0321837 = $this->env->getExtension("native_profiler");
        $__internal_0c566b36427f665facd5c0b464537115af988714300d32c4445a9ab3f0321837->enter($__internal_0c566b36427f665facd5c0b464537115af988714300d32c4445a9ab3f0321837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0c566b36427f665facd5c0b464537115af988714300d32c4445a9ab3f0321837->leave($__internal_0c566b36427f665facd5c0b464537115af988714300d32c4445a9ab3f0321837_prof);

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
