<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f8f00ce063f11ab96ce40102e6ad898e3938c840a490b1eb788dd58bf71ec7d2 extends Twig_Template
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
        $__internal_211b67203769d69964849c058639c4ee098ec80ddda3187ce957242889222c91 = $this->env->getExtension("native_profiler");
        $__internal_211b67203769d69964849c058639c4ee098ec80ddda3187ce957242889222c91->enter($__internal_211b67203769d69964849c058639c4ee098ec80ddda3187ce957242889222c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_211b67203769d69964849c058639c4ee098ec80ddda3187ce957242889222c91->leave($__internal_211b67203769d69964849c058639c4ee098ec80ddda3187ce957242889222c91_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ff357ae2d207b54b8104fbdc8a7f04d299b6d5428966ccd033db339739a0aa9 = $this->env->getExtension("native_profiler");
        $__internal_5ff357ae2d207b54b8104fbdc8a7f04d299b6d5428966ccd033db339739a0aa9->enter($__internal_5ff357ae2d207b54b8104fbdc8a7f04d299b6d5428966ccd033db339739a0aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ff357ae2d207b54b8104fbdc8a7f04d299b6d5428966ccd033db339739a0aa9->leave($__internal_5ff357ae2d207b54b8104fbdc8a7f04d299b6d5428966ccd033db339739a0aa9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0659f0a4106cb28d19f8cd8e6b43422d368b978f2233e80c34751724f64990d6 = $this->env->getExtension("native_profiler");
        $__internal_0659f0a4106cb28d19f8cd8e6b43422d368b978f2233e80c34751724f64990d6->enter($__internal_0659f0a4106cb28d19f8cd8e6b43422d368b978f2233e80c34751724f64990d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0659f0a4106cb28d19f8cd8e6b43422d368b978f2233e80c34751724f64990d6->leave($__internal_0659f0a4106cb28d19f8cd8e6b43422d368b978f2233e80c34751724f64990d6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59d35947f55abf44c6f7853d4757c71c2bed188657fbabb0fb36481570d087d9 = $this->env->getExtension("native_profiler");
        $__internal_59d35947f55abf44c6f7853d4757c71c2bed188657fbabb0fb36481570d087d9->enter($__internal_59d35947f55abf44c6f7853d4757c71c2bed188657fbabb0fb36481570d087d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_59d35947f55abf44c6f7853d4757c71c2bed188657fbabb0fb36481570d087d9->leave($__internal_59d35947f55abf44c6f7853d4757c71c2bed188657fbabb0fb36481570d087d9_prof);

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
