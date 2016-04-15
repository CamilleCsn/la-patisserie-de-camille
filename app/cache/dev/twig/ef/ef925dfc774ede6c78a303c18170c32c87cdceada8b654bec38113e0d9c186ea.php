<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1765b404869643f07960acceae7425198024ae5d88c95755ca091a3bd83e32a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c095243a76acaf110217d7c14e12a7bbb81f7c10a2b2bea5cdec7b5b3758439 = $this->env->getExtension("native_profiler");
        $__internal_2c095243a76acaf110217d7c14e12a7bbb81f7c10a2b2bea5cdec7b5b3758439->enter($__internal_2c095243a76acaf110217d7c14e12a7bbb81f7c10a2b2bea5cdec7b5b3758439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c095243a76acaf110217d7c14e12a7bbb81f7c10a2b2bea5cdec7b5b3758439->leave($__internal_2c095243a76acaf110217d7c14e12a7bbb81f7c10a2b2bea5cdec7b5b3758439_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_881a7be8b3bdea30b1037de22ae1a736bdc8ac462ecde6cce6180fd8d22c0068 = $this->env->getExtension("native_profiler");
        $__internal_881a7be8b3bdea30b1037de22ae1a736bdc8ac462ecde6cce6180fd8d22c0068->enter($__internal_881a7be8b3bdea30b1037de22ae1a736bdc8ac462ecde6cce6180fd8d22c0068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_881a7be8b3bdea30b1037de22ae1a736bdc8ac462ecde6cce6180fd8d22c0068->leave($__internal_881a7be8b3bdea30b1037de22ae1a736bdc8ac462ecde6cce6180fd8d22c0068_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cf80cceb615261d0e25a79d9bd30c678505da674a870325ec3c76e6082e67f7 = $this->env->getExtension("native_profiler");
        $__internal_6cf80cceb615261d0e25a79d9bd30c678505da674a870325ec3c76e6082e67f7->enter($__internal_6cf80cceb615261d0e25a79d9bd30c678505da674a870325ec3c76e6082e67f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6cf80cceb615261d0e25a79d9bd30c678505da674a870325ec3c76e6082e67f7->leave($__internal_6cf80cceb615261d0e25a79d9bd30c678505da674a870325ec3c76e6082e67f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8f49bb38f9bde5a377681fb9dc56917854c4d39ed3bf001474b69c9b9ccd9f5 = $this->env->getExtension("native_profiler");
        $__internal_e8f49bb38f9bde5a377681fb9dc56917854c4d39ed3bf001474b69c9b9ccd9f5->enter($__internal_e8f49bb38f9bde5a377681fb9dc56917854c4d39ed3bf001474b69c9b9ccd9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e8f49bb38f9bde5a377681fb9dc56917854c4d39ed3bf001474b69c9b9ccd9f5->leave($__internal_e8f49bb38f9bde5a377681fb9dc56917854c4d39ed3bf001474b69c9b9ccd9f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
