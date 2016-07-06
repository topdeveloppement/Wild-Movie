<?php

/* ::base.html.twig */
class __TwigTemplate_3adb8efb4ad873a50821f283b6d7a45865f9a50f47c833cce420515f5f61c79a extends Twig_Template
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
        $__internal_92784e7a1a325734936b7992d90a63eda99ae1674b3e1a4b26b490d3f92eb237 = $this->env->getExtension("native_profiler");
        $__internal_92784e7a1a325734936b7992d90a63eda99ae1674b3e1a4b26b490d3f92eb237->enter($__internal_92784e7a1a325734936b7992d90a63eda99ae1674b3e1a4b26b490d3f92eb237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_92784e7a1a325734936b7992d90a63eda99ae1674b3e1a4b26b490d3f92eb237->leave($__internal_92784e7a1a325734936b7992d90a63eda99ae1674b3e1a4b26b490d3f92eb237_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a2b1dbe99d80568192f9d0b7f614d27d1d752ca506ca07b3065a45108fed263 = $this->env->getExtension("native_profiler");
        $__internal_3a2b1dbe99d80568192f9d0b7f614d27d1d752ca506ca07b3065a45108fed263->enter($__internal_3a2b1dbe99d80568192f9d0b7f614d27d1d752ca506ca07b3065a45108fed263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "
        ";
        
        $__internal_3a2b1dbe99d80568192f9d0b7f614d27d1d752ca506ca07b3065a45108fed263->leave($__internal_3a2b1dbe99d80568192f9d0b7f614d27d1d752ca506ca07b3065a45108fed263_prof);

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
