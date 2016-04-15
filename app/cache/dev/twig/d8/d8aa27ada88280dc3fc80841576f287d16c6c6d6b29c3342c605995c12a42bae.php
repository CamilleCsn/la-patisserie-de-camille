<?php

/* header.html.twig */
class __TwigTemplate_f89ba22a39fc79db35bf2607a88a4e0121bf318e4463eb09844e02372a9c0014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54fa6ad0c73268e461af262a89c9fabef8a1906dfd8afebec513c773cd5fd941 = $this->env->getExtension("native_profiler");
        $__internal_54fa6ad0c73268e461af262a89c9fabef8a1906dfd8afebec513c773cd5fd941->enter($__internal_54fa6ad0c73268e461af262a89c9fabef8a1906dfd8afebec513c773cd5fd941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<div class=\"header\"> 
\t<h1 class=\"title-header\"><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("camille_blog_home");
        echo "\">La pâtisserie de Camille</a></h1>

\t";
        // line 4
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 5
            echo "\t\t<div class=\"login\">Vous êtes connecté en admin :)</div>
\t\t<div id=\"toggle\">
\t      <input type=\"checkbox\">
\t      <span></span>
\t      <div class=\"menu\">
\t      \t<ul>
\t      \t\t<li>
\t      \t\t\t<a class=\"add-recipe\" href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("camille_blog_add");
            echo "\">Ajouter une recette</a>
\t      \t\t</li>
\t      \t\t";
            // line 14
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "camille_blog_view")) {
                // line 15
                echo "      \t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("camille_blog_edit", array("id" => $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t    Editer la recette
\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("camille_blog_delete", array("id" => $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t    Supprimer la recette
\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 26
            echo "\t      \t\t<li>
\t      \t\t\t<a class=\"log-out\" href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a>
\t      \t\t</li>
\t      \t</ul>
\t      </div>
\t\t</div>
  ";
        }
        // line 33
        echo "</div>";
        
        $__internal_54fa6ad0c73268e461af262a89c9fabef8a1906dfd8afebec513c773cd5fd941->leave($__internal_54fa6ad0c73268e461af262a89c9fabef8a1906dfd8afebec513c773cd5fd941_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 33,  70 => 27,  67 => 26,  59 => 21,  51 => 16,  48 => 15,  46 => 14,  41 => 12,  32 => 5,  30 => 4,  25 => 2,  22 => 1,);
    }
}
/* <div class="header"> */
/* 	<h1 class="title-header"><a href="{{ path('camille_blog_home') }}">La pâtisserie de Camille</a></h1>*/
/* */
/* 	{% if is_granted('ROLE_ADMIN') %}*/
/* 		<div class="login">Vous êtes connecté en admin :)</div>*/
/* 		<div id="toggle">*/
/* 	      <input type="checkbox">*/
/* 	      <span></span>*/
/* 	      <div class="menu">*/
/* 	      	<ul>*/
/* 	      		<li>*/
/* 	      			<a class="add-recipe" href="{{ path('camille_blog_add') }}">Ajouter une recette</a>*/
/* 	      		</li>*/
/* 	      		{% if app.request.get('_route') == 'camille_blog_view' %}*/
/*       				<li>*/
/* 								<a href="{{ path('camille_blog_edit', {'id': recipe.id}) }}">*/
/* 							    Editer la recette*/
/* 							  </a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="{{ path('camille_blog_delete', {'id': recipe.id}) }}">*/
/* 							    Supprimer la recette*/
/* 							  </a>*/
/* 							</li>*/
/* 						{% endif %}*/
/* 	      		<li>*/
/* 	      			<a class="log-out" href="{{ path('fos_user_security_logout') }}">Se déconnecter</a>*/
/* 	      		</li>*/
/* 	      	</ul>*/
/* 	      </div>*/
/* 		</div>*/
/*   {% endif %}*/
/* </div>*/
