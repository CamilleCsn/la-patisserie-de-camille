<?php

/* CamilleBlogBundle::layout.html.twig */
class __TwigTemplate_84a725fc55274a7e4c231cf24bd6243eedaef86d882626665141bbc6701a413f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "CamilleBlogBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'camilleblog_body' => array($this, 'block_camilleblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8916758f4cbb68f5be993b0f3f00ccc0f1a16541d10d97cc31d26c937dadec84 = $this->env->getExtension("native_profiler");
        $__internal_8916758f4cbb68f5be993b0f3f00ccc0f1a16541d10d97cc31d26c937dadec84->enter($__internal_8916758f4cbb68f5be993b0f3f00ccc0f1a16541d10d97cc31d26c937dadec84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CamilleBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8916758f4cbb68f5be993b0f3f00ccc0f1a16541d10d97cc31d26c937dadec84->leave($__internal_8916758f4cbb68f5be993b0f3f00ccc0f1a16541d10d97cc31d26c937dadec84_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1239d2593a2f21931637f91a8fac8152cb6d1967a83f379b27f9aaa8cb655134 = $this->env->getExtension("native_profiler");
        $__internal_1239d2593a2f21931637f91a8fac8152cb6d1967a83f379b27f9aaa8cb655134->enter($__internal_1239d2593a2f21931637f91a8fac8152cb6d1967a83f379b27f9aaa8cb655134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Recettes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1239d2593a2f21931637f91a8fac8152cb6d1967a83f379b27f9aaa8cb655134->leave($__internal_1239d2593a2f21931637f91a8fac8152cb6d1967a83f379b27f9aaa8cb655134_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bf8d562da15468eed29ca882b3ea5ab0f913812b5be8fa775860f6e26bf7ecd = $this->env->getExtension("native_profiler");
        $__internal_1bf8d562da15468eed29ca882b3ea5ab0f913812b5be8fa775860f6e26bf7ecd->enter($__internal_1bf8d562da15468eed29ca882b3ea5ab0f913812b5be8fa775860f6e26bf7ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  ";
        // line 9
        echo "  ";
        $this->displayBlock('camilleblog_body', $context, $blocks);
        // line 11
        echo "
";
        
        $__internal_1bf8d562da15468eed29ca882b3ea5ab0f913812b5be8fa775860f6e26bf7ecd->leave($__internal_1bf8d562da15468eed29ca882b3ea5ab0f913812b5be8fa775860f6e26bf7ecd_prof);

    }

    // line 9
    public function block_camilleblog_body($context, array $blocks = array())
    {
        $__internal_1fc8d4565eac98e7107ddaca672a3a4bf5b90954948aab40ee43ebfc2997b79f = $this->env->getExtension("native_profiler");
        $__internal_1fc8d4565eac98e7107ddaca672a3a4bf5b90954948aab40ee43ebfc2997b79f->enter($__internal_1fc8d4565eac98e7107ddaca672a3a4bf5b90954948aab40ee43ebfc2997b79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "camilleblog_body"));

        // line 10
        echo "  ";
        
        $__internal_1fc8d4565eac98e7107ddaca672a3a4bf5b90954948aab40ee43ebfc2997b79f->leave($__internal_1fc8d4565eac98e7107ddaca672a3a4bf5b90954948aab40ee43ebfc2997b79f_prof);

    }

    public function getTemplateName()
    {
        return "CamilleBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  71 => 9,  63 => 11,  60 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Recettes - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {# nouveau bloc que les vues du bundle vont venir remplir #}*/
/*   {% block camilleblog_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
/* */
