<?php

/* base.html.twig */
class __TwigTemplate_e96230023f77323c953833b64f7390b821c04d90e6d565542b2636326a3ec38c extends Twig_Template
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
        $__internal_2434e207ab96800cb5e206237643ecfc064b0c724d793139edda2149f5f595c6 = $this->env->getExtension("native_profiler");
        $__internal_2434e207ab96800cb5e206237643ecfc064b0c724d793139edda2149f5f595c6->enter($__internal_2434e207ab96800cb5e206237643ecfc064b0c724d793139edda2149f5f595c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Wild-Movie</title>
        
        
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
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
              <button type=\"button\" class=\"btn btn-warning btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
                Voir les instructions
              </button>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              ";
        // line 41
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "                <li><a href=\"#\">Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></li>
              ";
        } else {
            // line 45
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a></li>
                <li><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se connecter</a></li>
              ";
        }
        // line 48
        echo "
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "
      <div class=\"col-md-12 empty\">
      
      </div>

      <div class=\"col-md-12 footer\">
        <h4>Wild-Movie - Projet d'entraînement</h4>
        <h3>Wild Code School 2016</h3>
      </div>



      <!-- Modal -->
      <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
              <h4 class=\"modal-title\" id=\"myModalLabel\">Instructions</h4>
            </div>
            <div class=\"modal-body\">
              <p>Bonjour à toi Wilder !</p>

              <p>Bienvenue dans cet examen BLANC.</p>

              <p>Ce projet va te permettre de t'entraîner à la logique algorythmique ainsi qu'à l'intégration d'une nouvelle fonctionnalitée.</p>

              <p>L'exercice se découpe en 2 parties.</p>

              <p>- l'intégration (HTML / CSS) d'une page \"article\" <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("article_show");
        echo "\"><strong>ici</strong></a></p>
              <p>- l'intégration d'une fonctionnalité de commentaires sur la fiche d'un film (la réponse aux commentaires est falcultative).<strong> Tu devras d'abord ajouter un film dans la BDD <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("admin_film_new");
        echo "\">ici </strong></a> ! </p>

              <p>Bon courage ! </p>
            </div>
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
          </div>
        </div>
      </div>

    </body>
</html>
";
        
        $__internal_2434e207ab96800cb5e206237643ecfc064b0c724d793139edda2149f5f595c6->leave($__internal_2434e207ab96800cb5e206237643ecfc064b0c724d793139edda2149f5f595c6_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_c96c14220147a87acc2f8a5920fc1f78669c626f8459ce8b4dfb1c9abbdcdf0f = $this->env->getExtension("native_profiler");
        $__internal_c96c14220147a87acc2f8a5920fc1f78669c626f8459ce8b4dfb1c9abbdcdf0f->enter($__internal_c96c14220147a87acc2f8a5920fc1f78669c626f8459ce8b4dfb1c9abbdcdf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "
      ";
        
        $__internal_c96c14220147a87acc2f8a5920fc1f78669c626f8459ce8b4dfb1c9abbdcdf0f->leave($__internal_c96c14220147a87acc2f8a5920fc1f78669c626f8459ce8b4dfb1c9abbdcdf0f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 55,  179 => 54,  158 => 89,  154 => 88,  121 => 57,  119 => 54,  111 => 48,  106 => 46,  101 => 45,  96 => 43,  91 => 42,  89 => 41,  61 => 16,  57 => 15,  53 => 14,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>Wild-Movie</title>*/
/*         */
/*         */
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery.js') }}" ></script>*/
/*         <script type="text/javascript" src="{{ asset('js/script.js') }}" ></script>*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}" ></script>*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*     </head>*/
/*     <body>*/
/* */
/*       <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*           <!-- Brand and toggle get grouped for better mobile display -->*/
/*           <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*               <span class="sr-only">Toggle navigation</span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">Wild-Movie</a>*/
/*           </div>*/
/* */
/*           <!-- Collect the nav links, forms, and other content for toggling -->*/
/*           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/*               <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">*/
/*                 Voir les instructions*/
/*               </button>*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*               {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 <li><a href="#">Bonjour {{ app.user.username }}</a></li>*/
/*                 <li><a href="{{ path('fos_user_security_logout')}}">Se déconnecter</a></li>*/
/*               {% else %}*/
/*                 <li><a href="{{ path('fos_user_registration_register')}}">S'enregistrer</a></li>*/
/*                 <li><a href="{{ path('fos_user_security_login')}}">Se connecter</a></li>*/
/*               {% endif %}*/
/* */
/*             </ul>*/
/*           </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*       </nav>*/
/* */
/*       {% block body %}*/
/* */
/*       {% endblock %}*/
/* */
/*       <div class="col-md-12 empty">*/
/*       */
/*       </div>*/
/* */
/*       <div class="col-md-12 footer">*/
/*         <h4>Wild-Movie - Projet d'entraînement</h4>*/
/*         <h3>Wild Code School 2016</h3>*/
/*       </div>*/
/* */
/* */
/* */
/*       <!-- Modal -->*/
/*       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog" role="document">*/
/*           <div class="modal-content">*/
/*             <div class="modal-header">*/
/*               <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                 <span aria-hidden="true">&times;</span>*/
/*               </button>*/
/*               <h4 class="modal-title" id="myModalLabel">Instructions</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*               <p>Bonjour à toi Wilder !</p>*/
/* */
/*               <p>Bienvenue dans cet examen BLANC.</p>*/
/* */
/*               <p>Ce projet va te permettre de t'entraîner à la logique algorythmique ainsi qu'à l'intégration d'une nouvelle fonctionnalitée.</p>*/
/* */
/*               <p>L'exercice se découpe en 2 parties.</p>*/
/* */
/*               <p>- l'intégration (HTML / CSS) d'une page "article" <a href="{{ path('article_show') }}"><strong>ici</strong></a></p>*/
/*               <p>- l'intégration d'une fonctionnalité de commentaires sur la fiche d'un film (la réponse aux commentaires est falcultative).<strong> Tu devras d'abord ajouter un film dans la BDD <a href="{{ path('admin_film_new') }}">ici </strong></a> ! </p>*/
/* */
/*               <p>Bon courage ! </p>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*               <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*     </body>*/
/* </html>*/
/* */
