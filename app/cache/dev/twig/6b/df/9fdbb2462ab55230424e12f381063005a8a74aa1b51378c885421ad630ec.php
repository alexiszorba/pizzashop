<?php

/* AlexPizzaBundle:Pizza:show.html.twig */
class __TwigTemplate_6bdf9fdbb2462ab55230424e12f381063005a8a74aa1b51378c885421ad630ec extends Twig_Template
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
        echo "<h1>Pizza</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Naam</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "naam"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Omschrijving</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "omschrijving"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Basisprijs</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "basisprijs"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Extras</th>
                <td>
                ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "extras"));
        foreach ($context['_seq'] as $context["_key"] => $context["extras"]) {
            // line 30
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["extras"]) ? $context["extras"] : $this->getContext($context, "extras")), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extras'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " 
                </td>
            </tr>
        </tbody>
    </table>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("pizza");
        echo "\">
                Back to the list
            </a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pizza_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                Edit
            </a>
        </li>
        <li>";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "AlexPizzaBundle:Pizza:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 48,  109 => 44,  101 => 39,  91 => 31,  82 => 30,  78 => 29,  70 => 24,  63 => 20,  56 => 16,  49 => 12,  41 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
