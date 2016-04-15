<?php

/* CamilleBlogBundle:Recipes:index.html.twig */
class __TwigTemplate_7927c1bb5c4257bf43291ba8b5315d602f77be013216c16910d714ede0a81e96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CamilleBlogBundle::layout.html.twig", "CamilleBlogBundle:Recipes:index.html.twig", 1);
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
        $__internal_0c5658162323fb1768b9c8aac1dc63314356ee800fd1380f2fcfaebd6b228d7f = $this->env->getExtension("native_profiler");
        $__internal_0c5658162323fb1768b9c8aac1dc63314356ee800fd1380f2fcfaebd6b228d7f->enter($__internal_0c5658162323fb1768b9c8aac1dc63314356ee800fd1380f2fcfaebd6b228d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CamilleBlogBundle:Recipes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c5658162323fb1768b9c8aac1dc63314356ee800fd1380f2fcfaebd6b228d7f->leave($__internal_0c5658162323fb1768b9c8aac1dc63314356ee800fd1380f2fcfaebd6b228d7f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1401d6d347ab79b4f2a83725f9725fa7d61782dd3da37f486a52a114dbf1e699 = $this->env->getExtension("native_profiler");
        $__internal_1401d6d347ab79b4f2a83725f9725fa7d61782dd3da37f486a52a114dbf1e699->enter($__internal_1401d6d347ab79b4f2a83725f9725fa7d61782dd3da37f486a52a114dbf1e699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1401d6d347ab79b4f2a83725f9725fa7d61782dd3da37f486a52a114dbf1e699->leave($__internal_1401d6d347ab79b4f2a83725f9725fa7d61782dd3da37f486a52a114dbf1e699_prof);

    }

    // line 7
    public function block_camilleblog_body($context, array $blocks = array())
    {
        $__internal_1217d46051d48c1ace4a777878298b143db50531d25a6f3ef8a87f2ee8407db9 = $this->env->getExtension("native_profiler");
        $__internal_1217d46051d48c1ace4a777878298b143db50531d25a6f3ef8a87f2ee8407db9->enter($__internal_1217d46051d48c1ace4a777878298b143db50531d25a6f3ef8a87f2ee8407db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "camilleblog_body"));

        // line 8
        echo "
\t";
        // line 9
        $this->loadTemplate("welcome.html.twig", "CamilleBlogBundle:Recipes:index.html.twig", 9)->display($context);
        // line 10
        echo "
\t";
        // line 12
        echo "
";
        // line 18
        echo "
";
        // line 39
        echo "
\t";
        // line 40
        $this->loadTemplate("home.html.twig", "CamilleBlogBundle:Recipes:index.html.twig", 40)->display($context);
        // line 41
        echo "
";
        
        $__internal_1217d46051d48c1ace4a777878298b143db50531d25a6f3ef8a87f2ee8407db9->leave($__internal_1217d46051d48c1ace4a777878298b143db50531d25a6f3ef8a87f2ee8407db9_prof);

    }

    public function getTemplateName()
    {
        return "CamilleBlogBundle:Recipes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 41,  74 => 40,  71 => 39,  68 => 18,  65 => 12,  62 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/* 	{% include 'welcome.html.twig' %}*/
/* */
/* 	{# <h2>Liste des recettes</h2> #}*/
/* */
/* {# 	{% for flash_message in app.session.flashbag.get('notice') %}*/
/* 	    <div class="alert alert-info">*/
/* 	        {{ flash_message }}*/
/* 	    </div>*/
/* 	{% endfor %} #}*/
/* */
/* {# 	<ul>*/
/* 		{% for recipe in listRecipes %}*/
/* 			<li>*/
/* 				<a href="{{ path('camille_blog_view', {'id': recipe.id}) }}">*/
/* 					{{ recipe.title }}*/
/* 				</a>*/
/* 				par {{ recipe.author }},*/
/* 				le {{ recipe.date|date('d/m/Y') }}*/
/* 				{% if recipe.thumbnail is not null %}*/
/* 					<img */
/* 						class="thumbnail" */
/* 						src="{{ asset(recipe.thumbnail.webPath) }}" */
/* 						alt="{{ recipe.thumbnail.alt }}"*/
/* 					/>*/
/* 				{% endif %}		*/
/* 			</li>*/
/* 		{% else %}*/
/* 			<li>Pas encore de recettes</li>*/
/* 		{% endfor %}*/
/* 	</ul> #}*/
/* */
/* 	{% include 'home.html.twig' %}*/
/* */
/* {% endblock %}*/
