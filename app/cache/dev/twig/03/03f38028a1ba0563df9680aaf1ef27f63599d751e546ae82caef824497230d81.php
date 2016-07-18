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
        $__internal_034c13001dd53b725a1c0dd312270165a6683c2d2746f813b94d47848822b5bd = $this->env->getExtension("native_profiler");
        $__internal_034c13001dd53b725a1c0dd312270165a6683c2d2746f813b94d47848822b5bd->enter($__internal_034c13001dd53b725a1c0dd312270165a6683c2d2746f813b94d47848822b5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_034c13001dd53b725a1c0dd312270165a6683c2d2746f813b94d47848822b5bd->leave($__internal_034c13001dd53b725a1c0dd312270165a6683c2d2746f813b94d47848822b5bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2fbee52c635e7d3a29acb7fd7d826ee19b51e888d43671900d61bcff3817d24d = $this->env->getExtension("native_profiler");
        $__internal_2fbee52c635e7d3a29acb7fd7d826ee19b51e888d43671900d61bcff3817d24d->enter($__internal_2fbee52c635e7d3a29acb7fd7d826ee19b51e888d43671900d61bcff3817d24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2fbee52c635e7d3a29acb7fd7d826ee19b51e888d43671900d61bcff3817d24d->leave($__internal_2fbee52c635e7d3a29acb7fd7d826ee19b51e888d43671900d61bcff3817d24d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3840aa6826244833796bcef551a80fdd900b4253b163f2e896d4fa60bed1789 = $this->env->getExtension("native_profiler");
        $__internal_d3840aa6826244833796bcef551a80fdd900b4253b163f2e896d4fa60bed1789->enter($__internal_d3840aa6826244833796bcef551a80fdd900b4253b163f2e896d4fa60bed1789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d3840aa6826244833796bcef551a80fdd900b4253b163f2e896d4fa60bed1789->leave($__internal_d3840aa6826244833796bcef551a80fdd900b4253b163f2e896d4fa60bed1789_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2280c8d42ef577cacea41ba747ab49835ec4ad618d776a80bb88161eb69b8378 = $this->env->getExtension("native_profiler");
        $__internal_2280c8d42ef577cacea41ba747ab49835ec4ad618d776a80bb88161eb69b8378->enter($__internal_2280c8d42ef577cacea41ba747ab49835ec4ad618d776a80bb88161eb69b8378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2280c8d42ef577cacea41ba747ab49835ec4ad618d776a80bb88161eb69b8378->leave($__internal_2280c8d42ef577cacea41ba747ab49835ec4ad618d776a80bb88161eb69b8378_prof);

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
