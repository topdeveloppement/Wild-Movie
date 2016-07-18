<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8833153ccf1eb1170be1662352b35b8f1789ec54c4ead542f894b3f3c650be93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d5b5202bb0df658bcb3e52f311ad931f998bf1cb6ee010d8624e83447ac8561 = $this->env->getExtension("native_profiler");
        $__internal_8d5b5202bb0df658bcb3e52f311ad931f998bf1cb6ee010d8624e83447ac8561->enter($__internal_8d5b5202bb0df658bcb3e52f311ad931f998bf1cb6ee010d8624e83447ac8561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d5b5202bb0df658bcb3e52f311ad931f998bf1cb6ee010d8624e83447ac8561->leave($__internal_8d5b5202bb0df658bcb3e52f311ad931f998bf1cb6ee010d8624e83447ac8561_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_757234e73303ac25978c8354e7d7e8dc700691758552a50a22694e7a53413694 = $this->env->getExtension("native_profiler");
        $__internal_757234e73303ac25978c8354e7d7e8dc700691758552a50a22694e7a53413694->enter($__internal_757234e73303ac25978c8354e7d7e8dc700691758552a50a22694e7a53413694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_757234e73303ac25978c8354e7d7e8dc700691758552a50a22694e7a53413694->leave($__internal_757234e73303ac25978c8354e7d7e8dc700691758552a50a22694e7a53413694_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
