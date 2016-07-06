<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c54f550d70f53688a8dc4212494f020031dc427a530f319b951ae2d781c9a69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa94896509ee4efe5f5ab6631abb9e944e00ab036bc2cdc46e8f9508f2274f64 = $this->env->getExtension("native_profiler");
        $__internal_fa94896509ee4efe5f5ab6631abb9e944e00ab036bc2cdc46e8f9508f2274f64->enter($__internal_fa94896509ee4efe5f5ab6631abb9e944e00ab036bc2cdc46e8f9508f2274f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa94896509ee4efe5f5ab6631abb9e944e00ab036bc2cdc46e8f9508f2274f64->leave($__internal_fa94896509ee4efe5f5ab6631abb9e944e00ab036bc2cdc46e8f9508f2274f64_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d6fe5ebd8de286454a41cf67fd7118f0fe15328e7bfe5b3f03d17abb70767d97 = $this->env->getExtension("native_profiler");
        $__internal_d6fe5ebd8de286454a41cf67fd7118f0fe15328e7bfe5b3f03d17abb70767d97->enter($__internal_d6fe5ebd8de286454a41cf67fd7118f0fe15328e7bfe5b3f03d17abb70767d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d6fe5ebd8de286454a41cf67fd7118f0fe15328e7bfe5b3f03d17abb70767d97->leave($__internal_d6fe5ebd8de286454a41cf67fd7118f0fe15328e7bfe5b3f03d17abb70767d97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71f1421c4bfd65e70a0795c695b8b9d612ec81308af5eaf93923fd1a309ef01c = $this->env->getExtension("native_profiler");
        $__internal_71f1421c4bfd65e70a0795c695b8b9d612ec81308af5eaf93923fd1a309ef01c->enter($__internal_71f1421c4bfd65e70a0795c695b8b9d612ec81308af5eaf93923fd1a309ef01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_71f1421c4bfd65e70a0795c695b8b9d612ec81308af5eaf93923fd1a309ef01c->leave($__internal_71f1421c4bfd65e70a0795c695b8b9d612ec81308af5eaf93923fd1a309ef01c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fad91d5aee3bfec1d39fc183eaaff0c8d9865f1ee9f5ec4b73055e0de506477d = $this->env->getExtension("native_profiler");
        $__internal_fad91d5aee3bfec1d39fc183eaaff0c8d9865f1ee9f5ec4b73055e0de506477d->enter($__internal_fad91d5aee3bfec1d39fc183eaaff0c8d9865f1ee9f5ec4b73055e0de506477d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fad91d5aee3bfec1d39fc183eaaff0c8d9865f1ee9f5ec4b73055e0de506477d->leave($__internal_fad91d5aee3bfec1d39fc183eaaff0c8d9865f1ee9f5ec4b73055e0de506477d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
