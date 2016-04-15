<?php

/* CamilleBlogBundle:Recipes:view.html.twig */
class __TwigTemplate_db649f6bbabb1466f9bbf5d9b035f731790e30edfc87301d87c347628b7b83ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CamilleBlogBundle::layout.html.twig", "CamilleBlogBundle:Recipes:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'camilleblog_body' => array($this, 'block_camilleblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CamilleBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fbc72460a36e50c28e5a34c9f3c2b499e39d81eb3fe04ba63ce7e81212fc423 = $this->env->getExtension("native_profiler");
        $__internal_5fbc72460a36e50c28e5a34c9f3c2b499e39d81eb3fe04ba63ce7e81212fc423->enter($__internal_5fbc72460a36e50c28e5a34c9f3c2b499e39d81eb3fe04ba63ce7e81212fc423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CamilleBlogBundle:Recipes:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fbc72460a36e50c28e5a34c9f3c2b499e39d81eb3fe04ba63ce7e81212fc423->leave($__internal_5fbc72460a36e50c28e5a34c9f3c2b499e39d81eb3fe04ba63ce7e81212fc423_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d33e4a51e3ddc14baa61c5d0382e17ef6a4bc956b49c9de918acb0810943220 = $this->env->getExtension("native_profiler");
        $__internal_7d33e4a51e3ddc14baa61c5d0382e17ef6a4bc956b49c9de918acb0810943220->enter($__internal_7d33e4a51e3ddc14baa61c5d0382e17ef6a4bc956b49c9de918acb0810943220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7d33e4a51e3ddc14baa61c5d0382e17ef6a4bc956b49c9de918acb0810943220->leave($__internal_7d33e4a51e3ddc14baa61c5d0382e17ef6a4bc956b49c9de918acb0810943220_prof);

    }

    // line 7
    public function block_camilleblog_body($context, array $blocks = array())
    {
        $__internal_691af985409e3bbdea9d1bcb1e7d73fe168200689eae0b418642cc8b8d99be49 = $this->env->getExtension("native_profiler");
        $__internal_691af985409e3bbdea9d1bcb1e7d73fe168200689eae0b418642cc8b8d99be49->enter($__internal_691af985409e3bbdea9d1bcb1e7d73fe168200689eae0b418642cc8b8d99be49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "camilleblog_body"));

        // line 8
        echo "
\t";
        // line 9
        $this->loadTemplate("header.html.twig", "CamilleBlogBundle:Recipes:view.html.twig", 9)->display($context);
        // line 10
        echo "
\t";
        // line 11
        if ( !(null === $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "thumbnail", array()))) {
            // line 12
            echo "\t\t<div class=\"img-holder\" data-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "thumbnail", array()), "webPath", array())), "html", null, true);
            echo "\"></div>
\t";
        }
        // line 14
        echo "
\t<section class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h2 class=\"recipe-title\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "title", array()), "html", null, true);
        echo "</h2>
\t\t\t</div>

\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"author-date\">Par ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"ingredients\">
\t\t\t\t\t<div>Ingrédients : </div>
\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "ingredients", array()), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"recipe-content\">
\t\t\t\t\t";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "content", array()), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>
\t\t<div class=\"row container-images\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["imageLenght"]) ? $context["imageLenght"] : $this->getContext($context, "imageLenght"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            echo "\t\t\t\t\t";
            if (($this->getAttribute((isset($context["portraitImages"]) ? $context["portraitImages"] : null), $context["i"], array(), "array", true, true) &&  !(null === $this->getAttribute((isset($context["portraitImages"]) ? $context["portraitImages"] : $this->getContext($context, "portraitImages")), $context["i"], array(), "array")))) {
                // line 41
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["portraitImages"]) ? $context["portraitImages"] : $this->getContext($context, "portraitImages")), $context["i"], array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 42
                    echo "\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["img"], "webPath", array())), "html", null, true);
                    echo "\" class=\"image image-portrait\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t\t";
            if (($this->getAttribute((isset($context["landscapeImages"]) ? $context["landscapeImages"] : null), $context["i"], array(), "array", true, true) &&  !(null === $this->getAttribute((isset($context["landscapeImages"]) ? $context["landscapeImages"] : $this->getContext($context, "landscapeImages")), $context["i"], array(), "array")))) {
                // line 46
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["landscapeImages"]) ? $context["landscapeImages"] : $this->getContext($context, "landscapeImages")), $context["i"], array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 47
                    echo "\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["img"], "webPath", array())), "html", null, true);
                    echo "\" class=\"image image-landscape\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t</div>
\t\t</div>

\t</section>

\t<a href=\"#\" class=\"scrollup\">Scroll</a>\t
  
";
        
        $__internal_691af985409e3bbdea9d1bcb1e7d73fe168200689eae0b418642cc8b8d99be49->leave($__internal_691af985409e3bbdea9d1bcb1e7d73fe168200689eae0b418642cc8b8d99be49_prof);

    }

    public function getTemplateName()
    {
        return "CamilleBlogBundle:Recipes:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 51,  158 => 50,  155 => 49,  146 => 47,  141 => 46,  138 => 45,  135 => 44,  126 => 42,  121 => 41,  118 => 40,  114 => 39,  104 => 32,  95 => 26,  87 => 23,  80 => 19,  73 => 14,  67 => 12,  65 => 11,  62 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "CamilleBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block camilleblog_body %}*/
/* */
/* 	{% include 'header.html.twig' %}*/
/* */
/* 	{% if recipe.thumbnail is not null %}*/
/* 		<div class="img-holder" data-image="{{ asset(recipe.thumbnail.webPath) }}"></div>*/
/* 	{% endif	 %}*/
/* */
/* 	<section class="container">*/
/* 		<div class="row">*/
/* */
/* 			<div class="col-xs-12">*/
/* 				<h2 class="recipe-title">{{ recipe.title }}</h2>*/
/* 			</div>*/
/* */
/* 			<div class="col-xs-6">*/
/* 				<div class="author-date">Par {{ recipe.author }}, le {{ recipe.date|date('d/m/Y') }}</div>*/
/* 				<div class="ingredients">*/
/* 					<div>Ingrédients : </div>*/
/* 					{{ recipe.ingredients }}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="col-xs-6">*/
/* 				<div class="recipe-content">*/
/* 					{{ recipe.content }}*/
/* 				</div>*/
/* 			</div>*/
/* 		*/
/* 		</div>*/
/* 		<div class="row container-images">*/
/* 			<div class="col-xs-12">*/
/* 				{% for i in 0..imageLenght %}*/
/* 					{% if portraitImages[i] is defined and portraitImages[i] is not null %}*/
/* 						{% for img in portraitImages[i] %}*/
/* 							<img src="{{asset(img.webPath)}}" class="image image-portrait" />*/
/* 						{% endfor %}*/
/* 					{% endif %}*/
/* 					{% if landscapeImages[i] is defined and landscapeImages[i] is not null %}*/
/* 						{% for img in landscapeImages[i] %}*/
/* 							<img src="{{asset(img.webPath)}}" class="image image-landscape" />*/
/* 						{% endfor %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</section>*/
/* */
/* 	<a href="#" class="scrollup">Scroll</a>	*/
/*   */
/* {% endblock %}*/
