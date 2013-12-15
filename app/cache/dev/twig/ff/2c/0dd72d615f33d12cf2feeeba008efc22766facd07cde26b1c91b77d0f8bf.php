<?php

/* AlexPizzaBundle::layout.html.twig */
class __TwigTemplate_ff2c0dd72d615f33d12cf2feeeba008efc22766facd07cde26b1c91b77d0f8bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/alexpizza/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"container\">
            <div id=\"header\">
                <div class=\"content\">
                    <h1><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("pizza");
        echo "\">
                            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/alexpizza/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Alex Pizza Shop\" />                        
                        </a></h1>
                   
                    <div id=\"sub_header\">
                        <div class=\"search\">
                            <h2>Doorzoek Onze Site</h2>
                            <form action=\"\" method=\"get\">
                                <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                                <input type=\"submit\" value=\"search\" />
                                <div class=\"help\">
                                    Geef zoekternen (pizza, extras, levering, map ...)
                                </div>
                            </form>
                        </div>
                    </div>
                     <div id='menu'>
                        <div class=\"menu\">
                            <h2>Menu</h2>
                            <div>
                                ";
        // line 42
        echo $this->env->getExtension('knp_menu')->render("AlexPizzaBundle:Builder:mainMenu");
        echo "
                                
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div id=\"content\">
               ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 52
            echo "                <div class=\"flash_notice\">
                       ";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
               ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 58
            echo "                <div class=\"flash_error\">
                       ";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo " ";
        // line 63
        echo "                <div class=\"content\">
                   ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "                </div>
            </div>

            <div id=\"footer\">
                <div class=\"content\">
                    <span class=\"symfony\">
                        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/alexpizza/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                        powered by <a href=\"http://www.symfony.com/\">
                            <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/alexpizza/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
                        </a>
                    </span>
                    <ul>
                        <li><a href=\"\">Over Ons</a></li>
                        <li><a href=\"\">Levering Map</a></li>
                        <li class=\"last\"><a href=\"\">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "            Alex Pizza Shop
            ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/alexpizza/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
        echo "                   ";
    }

    public function getTemplateName()
    {
        return "AlexPizzaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 65,  188 => 64,  181 => 14,  178 => 13,  171 => 11,  168 => 10,  163 => 6,  160 => 5,  143 => 74,  138 => 72,  130 => 66,  128 => 64,  125 => 63,  123 => 62,  114 => 59,  111 => 58,  107 => 57,  104 => 56,  95 => 53,  92 => 52,  88 => 51,  76 => 42,  54 => 23,  50 => 22,  40 => 16,  37 => 13,  35 => 10,  31 => 8,  29 => 5,  23 => 1,);
    }
}
