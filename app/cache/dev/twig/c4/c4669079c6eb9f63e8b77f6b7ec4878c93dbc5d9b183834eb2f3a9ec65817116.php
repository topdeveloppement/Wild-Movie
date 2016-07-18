<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_dc5460406a45846f6e64d83986e0267b3f388d148404d71c7a0ba5fa2358b397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_20454a11c5b2bf759e05fd47ea0ebab221eb5690f33109eb03db09c24b3ba849 = $this->env->getExtension("native_profiler");
        $__internal_20454a11c5b2bf759e05fd47ea0ebab221eb5690f33109eb03db09c24b3ba849->enter($__internal_20454a11c5b2bf759e05fd47ea0ebab221eb5690f33109eb03db09c24b3ba849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20454a11c5b2bf759e05fd47ea0ebab221eb5690f33109eb03db09c24b3ba849->leave($__internal_20454a11c5b2bf759e05fd47ea0ebab221eb5690f33109eb03db09c24b3ba849_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0403538c18d26a5790c410abe3564e173a996c141997e94b9d979aeb7dec8807 = $this->env->getExtension("native_profiler");
        $__internal_0403538c18d26a5790c410abe3564e173a996c141997e94b9d979aeb7dec8807->enter($__internal_0403538c18d26a5790c410abe3564e173a996c141997e94b9d979aeb7dec8807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0403538c18d26a5790c410abe3564e173a996c141997e94b9d979aeb7dec8807->leave($__internal_0403538c18d26a5790c410abe3564e173a996c141997e94b9d979aeb7dec8807_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_320efc217b1ab6f52e86109fff900ea21e4be2fcde8a98ac4bd8a0627ed8f475 = $this->env->getExtension("native_profiler");
        $__internal_320efc217b1ab6f52e86109fff900ea21e4be2fcde8a98ac4bd8a0627ed8f475->enter($__internal_320efc217b1ab6f52e86109fff900ea21e4be2fcde8a98ac4bd8a0627ed8f475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_320efc217b1ab6f52e86109fff900ea21e4be2fcde8a98ac4bd8a0627ed8f475->leave($__internal_320efc217b1ab6f52e86109fff900ea21e4be2fcde8a98ac4bd8a0627ed8f475_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63d01a41e3a94f7c6bc0de4621c89aef8d06b71da6674b6013a77b8b7f607590 = $this->env->getExtension("native_profiler");
        $__internal_63d01a41e3a94f7c6bc0de4621c89aef8d06b71da6674b6013a77b8b7f607590->enter($__internal_63d01a41e3a94f7c6bc0de4621c89aef8d06b71da6674b6013a77b8b7f607590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_63d01a41e3a94f7c6bc0de4621c89aef8d06b71da6674b6013a77b8b7f607590->leave($__internal_63d01a41e3a94f7c6bc0de4621c89aef8d06b71da6674b6013a77b8b7f607590_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
