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
        $__internal_f105a16f2f0351e6cd5ac3e49cdd5f93482241d84ec3e053217e8192a0a031a1 = $this->env->getExtension("native_profiler");
        $__internal_f105a16f2f0351e6cd5ac3e49cdd5f93482241d84ec3e053217e8192a0a031a1->enter($__internal_f105a16f2f0351e6cd5ac3e49cdd5f93482241d84ec3e053217e8192a0a031a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f105a16f2f0351e6cd5ac3e49cdd5f93482241d84ec3e053217e8192a0a031a1->leave($__internal_f105a16f2f0351e6cd5ac3e49cdd5f93482241d84ec3e053217e8192a0a031a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a4d7225b09e214cebb34823ea2f8fc3749cd29fa296a8c565aebb8fde0ff9d2 = $this->env->getExtension("native_profiler");
        $__internal_7a4d7225b09e214cebb34823ea2f8fc3749cd29fa296a8c565aebb8fde0ff9d2->enter($__internal_7a4d7225b09e214cebb34823ea2f8fc3749cd29fa296a8c565aebb8fde0ff9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7a4d7225b09e214cebb34823ea2f8fc3749cd29fa296a8c565aebb8fde0ff9d2->leave($__internal_7a4d7225b09e214cebb34823ea2f8fc3749cd29fa296a8c565aebb8fde0ff9d2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a45d90552d234a9a019891d1e99f629818a813677d47e8d95bacc3df6a5bc9db = $this->env->getExtension("native_profiler");
        $__internal_a45d90552d234a9a019891d1e99f629818a813677d47e8d95bacc3df6a5bc9db->enter($__internal_a45d90552d234a9a019891d1e99f629818a813677d47e8d95bacc3df6a5bc9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a45d90552d234a9a019891d1e99f629818a813677d47e8d95bacc3df6a5bc9db->leave($__internal_a45d90552d234a9a019891d1e99f629818a813677d47e8d95bacc3df6a5bc9db_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38421cfb904eaf85ccbb796dd193827cfc491d2e6e1232808f27ef0d7e4d1b7f = $this->env->getExtension("native_profiler");
        $__internal_38421cfb904eaf85ccbb796dd193827cfc491d2e6e1232808f27ef0d7e4d1b7f->enter($__internal_38421cfb904eaf85ccbb796dd193827cfc491d2e6e1232808f27ef0d7e4d1b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_38421cfb904eaf85ccbb796dd193827cfc491d2e6e1232808f27ef0d7e4d1b7f->leave($__internal_38421cfb904eaf85ccbb796dd193827cfc491d2e6e1232808f27ef0d7e4d1b7f_prof);

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
