<?php

/* ::layout.html.twig */
class __TwigTemplate_191c593021aa28f27a60a2690dd56db3f6a21cbf09333df64b98f7e593e7a3be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c076d67c49ea12996e3610294ae5daf9971ffed8cfd6027d6ba3cebca5eb91d = $this->env->getExtension("native_profiler");
        $__internal_8c076d67c49ea12996e3610294ae5daf9971ffed8cfd6027d6ba3cebca5eb91d->enter($__internal_8c076d67c49ea12996e3610294ae5daf9971ffed8cfd6027d6ba3cebca5eb91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "</head>
<body>

\t";
        // line 22
        echo "
\t\t";
        // line 29
        echo "\t\t";
        // line 42
        echo "\t\t\t";
        // line 43
        echo "\t\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "\t\t\t";
        // line 46
        echo "\t\t</div>

\t\t";
        // line 49
        echo "\t\t
\t</div>

\t";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "
</body>
</html>";
        
        $__internal_8c076d67c49ea12996e3610294ae5daf9971ffed8cfd6027d6ba3cebca5eb91d->leave($__internal_8c076d67c49ea12996e3610294ae5daf9971ffed8cfd6027d6ba3cebca5eb91d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f6686029b33f2d8e68f20323030942e12eaf1e3e707e48bbca916c344fd7943 = $this->env->getExtension("native_profiler");
        $__internal_6f6686029b33f2d8e68f20323030942e12eaf1e3e707e48bbca916c344fd7943->enter($__internal_6f6686029b33f2d8e68f20323030942e12eaf1e3e707e48bbca916c344fd7943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " La pâtisserie de Camille ";
        
        $__internal_6f6686029b33f2d8e68f20323030942e12eaf1e3e707e48bbca916c344fd7943->leave($__internal_6f6686029b33f2d8e68f20323030942e12eaf1e3e707e48bbca916c344fd7943_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b43387745cf407bb3924131cb91e4175bd3b762cacc33f50f8da4b22444ccbd0 = $this->env->getExtension("native_profiler");
        $__internal_b43387745cf407bb3924131cb91e4175bd3b762cacc33f50f8da4b22444ccbd0->enter($__internal_b43387745cf407bb3924131cb91e4175bd3b762cacc33f50f8da4b22444ccbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/web/assets/css/bootstrap-material-design.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/web/assets/css/ripples.min.css\">

\t\t<link rel=\"stylesheet\" href=\"/web/assets/css/styles.css\">
\t\t<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>

  ";
        
        $__internal_b43387745cf407bb3924131cb91e4175bd3b762cacc33f50f8da4b22444ccbd0->leave($__internal_b43387745cf407bb3924131cb91e4175bd3b762cacc33f50f8da4b22444ccbd0_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_a124405c8798bce5ac61f984e19309fad43e75196c9b7f282aefde8364939279 = $this->env->getExtension("native_profiler");
        $__internal_a124405c8798bce5ac61f984e19309fad43e75196c9b7f282aefde8364939279->enter($__internal_a124405c8798bce5ac61f984e19309fad43e75196c9b7f282aefde8364939279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "\t\t\t\t";
        
        $__internal_a124405c8798bce5ac61f984e19309fad43e75196c9b7f282aefde8364939279->leave($__internal_a124405c8798bce5ac61f984e19309fad43e75196c9b7f282aefde8364939279_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da41534b5a5fcbf5b482b6ae34d1231623138a147a241415423fa634ef25eb50 = $this->env->getExtension("native_profiler");
        $__internal_da41534b5a5fcbf5b482b6ae34d1231623138a147a241415423fa634ef25eb50->enter($__internal_da41534b5a5fcbf5b482b6ae34d1231623138a147a241415423fa634ef25eb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "\t    <script src=\"https://cdn.jsdelivr.net/vivus/0.2.3/vivus.min.js\"></script>
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js\"></script>
\t    <script src=\"https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js\"></script>
\t    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
\t    <script src=\"/web/assets/scripts/jquery.infinitescroll.js\"></script>
\t    <script src=\"/web/assets/scripts/material.min.js\"></script>
\t    <script src=\"/web/assets/scripts/ripples.min.js\"></script>
\t    <script src=\"https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js\"></script>
\t    <script src=\"https://rawgithub.com/pederan/Parallax-ImageScroll/master/jquery.imageScroll.min.js\" type=\"text/javascript\"></script>

\t    <script>
\t    \t\$.material.init();
\t    </script>
\t    <script type=\"text/javascript\" src=\"/web/assets/scripts/scripts.js\"></script>
\t";
        
        $__internal_da41534b5a5fcbf5b482b6ae34d1231623138a147a241415423fa634ef25eb50->leave($__internal_da41534b5a5fcbf5b482b6ae34d1231623138a147a241415423fa634ef25eb50_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  123 => 52,  116 => 44,  110 => 43,  96 => 10,  90 => 9,  78 => 7,  69 => 68,  67 => 52,  62 => 49,  58 => 46,  56 => 45,  53 => 43,  51 => 42,  49 => 29,  46 => 22,  41 => 18,  39 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* 	<meta charset="UTF-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/* 	<title>{% block title %} La pâtisserie de Camille {% endblock %}</title>*/
/* */
/* 	{% block stylesheets %}*/
/* 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* 		<link rel="stylesheet" href="/web/assets/css/bootstrap-material-design.min.css">*/
/* 		<link rel="stylesheet" href="/web/assets/css/ripples.min.css">*/
/* */
/* 		<link rel="stylesheet" href="/web/assets/css/styles.css">*/
/* 		<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>*/
/* */
/*   {% endblock %}*/
/* </head>*/
/* <body>*/
/* */
/* 	{# <div class="container"> #}*/
/* */
/* 		{# <div class="jumbotron" id="header">*/
/* 			<h1>La pâtisserie de Camille</h1>*/
/* 			<p>*/
/* 				Miam miam!*/
/* 			</p>*/
/* 		</div> #}*/
/* 		{# <div class="row"> #}*/
/* {# 			<div id="menu" class="col-md-3">*/
/* 				<h3>Les recettes</h3>*/
/* 				<ul class="nav nav-pills nav-stacked">*/
/* 				  <li><a href="{{ path('camille_blog_home') }}">Accueil</a></li>*/
/* 				  {% if is_granted('ROLE_ADMIN') %}*/
/* 				  	<li><a href="{{ path('camille_blog_add') }}">Ajouter une recette</a></li>*/
/* 				  {% endif %}*/
/* 				</ul>*/
/* */
/* 				<h4>Dernières recettes</h4>*/
/* 				{{ render(controller("CamilleBlogBundle:Recipes:menu", {'limit': 3})) }}*/
/* 			</div> #}*/
/* 			{# <div id="content" class="col-md-12"> #}*/
/* 				{% block body %}*/
/* 				{% endblock %}*/
/* 			{# </div> #}*/
/* 		</div>*/
/* */
/* 		{# {% include 'CamilleBlogBundle:home.html.twig' %} #}*/
/* 		*/
/* 	</div>*/
/* */
/* 	{% block javascripts %}*/
/* 	    <script src="https://cdn.jsdelivr.net/vivus/0.2.3/vivus.min.js"></script>*/
/* 	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>*/
/* 	    <script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>*/
/* 	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* 	    <script src="/web/assets/scripts/jquery.infinitescroll.js"></script>*/
/* 	    <script src="/web/assets/scripts/material.min.js"></script>*/
/* 	    <script src="/web/assets/scripts/ripples.min.js"></script>*/
/* 	    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>*/
/* 	    <script src="https://rawgithub.com/pederan/Parallax-ImageScroll/master/jquery.imageScroll.min.js" type="text/javascript"></script>*/
/* */
/* 	    <script>*/
/* 	    	$.material.init();*/
/* 	    </script>*/
/* 	    <script type="text/javascript" src="/web/assets/scripts/scripts.js"></script>*/
/* 	{% endblock %}*/
/* */
/* </body>*/
/* </html>*/
