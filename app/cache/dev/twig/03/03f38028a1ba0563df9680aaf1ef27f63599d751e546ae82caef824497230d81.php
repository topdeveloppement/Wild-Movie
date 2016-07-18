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
        $__internal_739ff0faf42c15c42c0dd99184faecf10fdc33b18c6a975141207ff3e1e602a9 = $this->env->getExtension("native_profiler");
        $__internal_739ff0faf42c15c42c0dd99184faecf10fdc33b18c6a975141207ff3e1e602a9->enter($__internal_739ff0faf42c15c42c0dd99184faecf10fdc33b18c6a975141207ff3e1e602a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_739ff0faf42c15c42c0dd99184faecf10fdc33b18c6a975141207ff3e1e602a9->leave($__internal_739ff0faf42c15c42c0dd99184faecf10fdc33b18c6a975141207ff3e1e602a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cdf50a1dad372c839fbb086dde5a857140094028b73d94503aab96a7b51fdb9e = $this->env->getExtension("native_profiler");
        $__internal_cdf50a1dad372c839fbb086dde5a857140094028b73d94503aab96a7b51fdb9e->enter($__internal_cdf50a1dad372c839fbb086dde5a857140094028b73d94503aab96a7b51fdb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cdf50a1dad372c839fbb086dde5a857140094028b73d94503aab96a7b51fdb9e->leave($__internal_cdf50a1dad372c839fbb086dde5a857140094028b73d94503aab96a7b51fdb9e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_28ba5d1b6d8669eef64ac3a9e07f2c2bb75686104387803c47b2ba8c43c24396 = $this->env->getExtension("native_profiler");
        $__internal_28ba5d1b6d8669eef64ac3a9e07f2c2bb75686104387803c47b2ba8c43c24396->enter($__internal_28ba5d1b6d8669eef64ac3a9e07f2c2bb75686104387803c47b2ba8c43c24396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_28ba5d1b6d8669eef64ac3a9e07f2c2bb75686104387803c47b2ba8c43c24396->leave($__internal_28ba5d1b6d8669eef64ac3a9e07f2c2bb75686104387803c47b2ba8c43c24396_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a3e9c7450aac9cb7a3b4e970ab50ad8672e606540df6ab62b6b9331909c8490 = $this->env->getExtension("native_profiler");
        $__internal_1a3e9c7450aac9cb7a3b4e970ab50ad8672e606540df6ab62b6b9331909c8490->enter($__internal_1a3e9c7450aac9cb7a3b4e970ab50ad8672e606540df6ab62b6b9331909c8490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1a3e9c7450aac9cb7a3b4e970ab50ad8672e606540df6ab62b6b9331909c8490->leave($__internal_1a3e9c7450aac9cb7a3b4e970ab50ad8672e606540df6ab62b6b9331909c8490_prof);

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
