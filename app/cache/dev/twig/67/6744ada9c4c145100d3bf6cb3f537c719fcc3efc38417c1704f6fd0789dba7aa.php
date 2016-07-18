<?php

/* FrontendBundle:Default:article.html.twig */
class __TwigTemplate_beeec3eeedc2b2054da273a27c02b04f504d304d38b2b30fd39694cd5610a6e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:article.html.twig", 1);
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
        $__internal_73fed7b1e7cd212b923a94752c053a13e6269a83bc8b9c1563011179a613f927 = $this->env->getExtension("native_profiler");
        $__internal_73fed7b1e7cd212b923a94752c053a13e6269a83bc8b9c1563011179a613f927->enter($__internal_73fed7b1e7cd212b923a94752c053a13e6269a83bc8b9c1563011179a613f927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73fed7b1e7cd212b923a94752c053a13e6269a83bc8b9c1563011179a613f927->leave($__internal_73fed7b1e7cd212b923a94752c053a13e6269a83bc8b9c1563011179a613f927_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_565c04c5208e409a062935edb2216809a210b6483c946871ef8c60e2407b4d3a = $this->env->getExtension("native_profiler");
        $__internal_565c04c5208e409a062935edb2216809a210b6483c946871ef8c60e2407b4d3a->enter($__internal_565c04c5208e409a062935edb2216809a210b6483c946871ef8c60e2407b4d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2> Télécharge cette maquette et intégre ta page ici-même.
\tLe contenu est bien entendu fictif. Ne rentre pas un article en BDD, nous te demandons juste d'intégrer la page. (Le header et le footer sont déjà présent !!!)</h2>

\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/image.png"), "html", null, true);
        echo "\">

";
        
        $__internal_565c04c5208e409a062935edb2216809a210b6483c946871ef8c60e2407b4d3a->leave($__internal_565c04c5208e409a062935edb2216809a210b6483c946871ef8c60e2407b4d3a_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	<h2> Télécharge cette maquette et intégre ta page ici-même.*/
/* 	Le contenu est bien entendu fictif. Ne rentre pas un article en BDD, nous te demandons juste d'intégrer la page. (Le header et le footer sont déjà présent !!!)</h2>*/
/* */
/* 	<img src="{{ asset('img/image.png') }}">*/
/* */
/* {% endblock %}*/
