<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_666fa1f54c3788372bda4b41f03578c5379688cd7ad639c13a68efef97994273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 36,  135 => 35,  127 => 32,  124 => 31,  119 => 28,  105 => 27,  99 => 26,  81 => 25,  78 => 24,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  52 => 17,  34 => 16,  31 => 15,  28 => 14,);
    }
}
