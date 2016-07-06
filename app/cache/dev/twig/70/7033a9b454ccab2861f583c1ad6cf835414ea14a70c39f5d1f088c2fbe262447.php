<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_25d1684b7b8d69f5d57379a3b9cd2848e0c5e9efab7713503771d36ae5eaa1a9 extends Twig_Template
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
        $__internal_e31256d49c069227d7fc406291b104189d9e2305541fba3a9944e7146e0a94f9 = $this->env->getExtension("native_profiler");
        $__internal_e31256d49c069227d7fc406291b104189d9e2305541fba3a9944e7146e0a94f9->enter($__internal_e31256d49c069227d7fc406291b104189d9e2305541fba3a9944e7146e0a94f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e31256d49c069227d7fc406291b104189d9e2305541fba3a9944e7146e0a94f9->leave($__internal_e31256d49c069227d7fc406291b104189d9e2305541fba3a9944e7146e0a94f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08a9f2c39c2abf883b262ab600c98594772e31386057157946621b354379bbd6 = $this->env->getExtension("native_profiler");
        $__internal_08a9f2c39c2abf883b262ab600c98594772e31386057157946621b354379bbd6->enter($__internal_08a9f2c39c2abf883b262ab600c98594772e31386057157946621b354379bbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_08a9f2c39c2abf883b262ab600c98594772e31386057157946621b354379bbd6->leave($__internal_08a9f2c39c2abf883b262ab600c98594772e31386057157946621b354379bbd6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_626283cec7d32922c7911de745324084bcca0deef6a6b2f2ffa54fb8470ae068 = $this->env->getExtension("native_profiler");
        $__internal_626283cec7d32922c7911de745324084bcca0deef6a6b2f2ffa54fb8470ae068->enter($__internal_626283cec7d32922c7911de745324084bcca0deef6a6b2f2ffa54fb8470ae068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_626283cec7d32922c7911de745324084bcca0deef6a6b2f2ffa54fb8470ae068->leave($__internal_626283cec7d32922c7911de745324084bcca0deef6a6b2f2ffa54fb8470ae068_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_063a82ed0b7061ed0141c7946a14799e980203cb2ff38d56909e675b187a13d1 = $this->env->getExtension("native_profiler");
        $__internal_063a82ed0b7061ed0141c7946a14799e980203cb2ff38d56909e675b187a13d1->enter($__internal_063a82ed0b7061ed0141c7946a14799e980203cb2ff38d56909e675b187a13d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_063a82ed0b7061ed0141c7946a14799e980203cb2ff38d56909e675b187a13d1->leave($__internal_063a82ed0b7061ed0141c7946a14799e980203cb2ff38d56909e675b187a13d1_prof);

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
