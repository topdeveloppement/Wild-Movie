<?php

/* ::base.html.twig */
class __TwigTemplate_54c59aae57b1d0d87b762ea6fddfcf892087673caba1ec0dfb51e07b6ff663e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12f0e60a8bba1e7f84cf812398cfb035d297e34c102b33d35e89a866cde2f3ac = $this->env->getExtension("native_profiler");
        $__internal_12f0e60a8bba1e7f84cf812398cfb035d297e34c102b33d35e89a866cde2f3ac->enter($__internal_12f0e60a8bba1e7f84cf812398cfb035d297e34c102b33d35e89a866cde2f3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Wild-Movie</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <scipt type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <scipt type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <scipt type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>

        <nav class=\"navbar navbar-default\">
          <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"#\">Wild-Movie</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Accueil <span class=\"sr-only\">(current)</span></a></li>
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">S'enregistrer</a></li>
                <li><a href=\"#\">Se connecter</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "
        <div class=\"col-md-12 empty\">
        
        </div>

        <div class=\"col-md-12 footer\">
        
        </div>

    </body>
</html>
";
        
        $__internal_12f0e60a8bba1e7f84cf812398cfb035d297e34c102b33d35e89a866cde2f3ac->leave($__internal_12f0e60a8bba1e7f84cf812398cfb035d297e34c102b33d35e89a866cde2f3ac_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_08bbda39db7777e53b7aa0c9ff4e1f8400171d6a9f5f319a0f6410d5df4edc5f = $this->env->getExtension("native_profiler");
        $__internal_08bbda39db7777e53b7aa0c9ff4e1f8400171d6a9f5f319a0f6410d5df4edc5f->enter($__internal_08bbda39db7777e53b7aa0c9ff4e1f8400171d6a9f5f319a0f6410d5df4edc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "
        ";
        
        $__internal_08bbda39db7777e53b7aa0c9ff4e1f8400171d6a9f5f319a0f6410d5df4edc5f->leave($__internal_08bbda39db7777e53b7aa0c9ff4e1f8400171d6a9f5f319a0f6410d5df4edc5f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 42,  103 => 41,  85 => 44,  83 => 41,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>Wild-Movie</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*         <scipt type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>*/
/*         <scipt type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>*/
/*         <scipt type="text/javascript" src="{{ asset('js/script.js') }}"></script>*/
/*     </head>*/
/*     <body>*/
/* */
/*         <nav class="navbar navbar-default">*/
/*           <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*               </button>*/
/*               <a class="navbar-brand" href="#">Wild-Movie</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*               <ul class="nav navbar-nav">*/
/*                 <li class="active"><a href="#">Accueil <span class="sr-only">(current)</span></a></li>*/
/*               </ul>*/
/*               <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="#">S'enregistrer</a></li>*/
/*                 <li><a href="#">Se connecter</a></li>*/
/*               </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*           </div><!-- /.container-fluid -->*/
/*         </nav>*/
/* */
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/* */
/*         <div class="col-md-12 empty">*/
/*         */
/*         </div>*/
/* */
/*         <div class="col-md-12 footer">*/
/*         */
/*         </div>*/
/* */
/*     </body>*/
/* </html>*/
/* */
