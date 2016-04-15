<?php

/* home.html.twig */
class __TwigTemplate_9af17c4ab4f1544f7509d9d7da5b05c1f5dfc6c7e6435ce5899fdf396cca1734 extends Twig_Template
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
        $__internal_ef9187b3071ecdcf125e875ef4c9063bdc4518dc8ca5f852a50e1feddd610a8d = $this->env->getExtension("native_profiler");
        $__internal_ef9187b3071ecdcf125e875ef4c9063bdc4518dc8ca5f852a50e1feddd610a8d->enter($__internal_ef9187b3071ecdcf125e875ef4c9063bdc4518dc8ca5f852a50e1feddd610a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "home.html.twig", 1)->display($context);
        // line 2
        echo "<div class=\"container-home\" id=\"home\">
\t<div class=\"content\">
\t\t<div class=\"col-xs-12\">
\t\t  <div class=\"grid\">
\t\t  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) ? $context["recipes"] : $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 7
            echo "\t\t\t  \t\t<div class=\"grid-item\" style=\"height:auto; width: 32%;\">

\t\t\t  \t\t\t<article>
\t\t\t\t\t     \t";
            // line 10
            if ( !(null === $this->getAttribute($context["recipe"], "thumbnail", array()))) {
                // line 11
                echo "\t\t\t\t\t     \t\t<div class=\"recipe-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "title", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t     \t\t<div class=\"discover\">Découvrez la recette</div>
\t\t\t\t\t     \t\t<a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("camille_blog_view", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img 
\t\t\t\t\t\t\t\t\t\t\tstyle=\"width: 100%\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"\" 
\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["recipe"], "thumbnail", array()), "webPath", array())), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t\t\t\talt=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["recipe"], "thumbnail", array()), "alt", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 21
            echo "\t

\t\t\t\t\t\t\t</article>
\t\t\t  \t\t</div>      
\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t    </div>
\t\t\t";
        // line 27
        $this->loadTemplate("pagination.html.twig", "home.html.twig", 27)->display($context);
        // line 28
        echo "\t\t</div>
\t</div>
</div>";
        
        $__internal_ef9187b3071ecdcf125e875ef4c9063bdc4518dc8ca5f852a50e1feddd610a8d->leave($__internal_ef9187b3071ecdcf125e875ef4c9063bdc4518dc8ca5f852a50e1feddd610a8d_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 28,  78 => 27,  75 => 26,  65 => 21,  58 => 18,  54 => 17,  47 => 13,  41 => 11,  39 => 10,  34 => 7,  30 => 6,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* <div class="container-home" id="home">*/
/* 	<div class="content">*/
/* 		<div class="col-xs-12">*/
/* 		  <div class="grid">*/
/* 		  {% for recipe in recipes %}*/
/* 			  		<div class="grid-item" style="height:auto; width: 32%;">*/
/* */
/* 			  			<article>*/
/* 					     	{% if recipe.thumbnail is not null %}*/
/* 					     		<div class="recipe-title">{{ recipe.title }}</div>*/
/* 					     		<div class="discover">Découvrez la recette</div>*/
/* 					     		<a href="{{ path('camille_blog_view', {'id': recipe.id}) }}">*/
/* 										<img */
/* 											style="width: 100%"*/
/* 											class="" */
/* 											src="{{ asset(recipe.thumbnail.webPath) }}" */
/* 											alt="{{ recipe.thumbnail.alt }}"*/
/* 										/>*/
/* 									</a>*/
/* 								{% endif %}	*/
/* */
/* 							</article>*/
/* 			  		</div>      */
/* 			    {% endfor %}*/
/* 		    </div>*/
/* 			{% include 'pagination.html.twig' %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
