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
        echo "<h1>Pizza list</h1>

<table class=\"records_list\">
    
    <tbody>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 12
            echo "        <tr>            
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "naam"), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "omschrijving"), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "basisprijs"), "html", null, true);
            echo "</td>         
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
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
        return array (  72 => 18,  63 => 15,  59 => 14,  55 => 13,  52 => 12,  48 => 11,  41 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
