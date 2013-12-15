<?php

/* AlexPizzaBundle:Pizza:index.html.twig */
class __TwigTemplate_ea6c140f1b6f0c0482b3b4c3beff19a6d0a3b49a7598e3764497da78bf8224dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AlexPizzaBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AlexPizzaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Onze Pizza's</h1>

<table class=\"records_list\">

    <tbody>
        <tr>
            <th></th>
            <th></th>
            <th style=\"color:#BF011D;text-align:center;\">Basis Prijs</th>            
        </tr>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "        
        <tr> 
            <td style=\"color:#BF011D;text-align:left;font-size: 24px;width: 305px;height: 35px;\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "naam"), "html", null, true);
            echo "</td>
            <td style=\"color:blue;text-align:left;font-size: 12px;\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "omschrijving"), "html", null, true);
            echo "</td>
            <td style=\"color:#BF011D;text-align:left;font-size: 24px;width: 95px;\">€ ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "basisprijs"), "html", null, true);
            echo "</td>         
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </tbody>
</table>


    ";
    }

    public function getTemplateName()
    {
        return "AlexPizzaBundle:Pizza:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  68 => 20,  64 => 19,  60 => 18,  53 => 16,  41 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
