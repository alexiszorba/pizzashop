<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_6be90c11c73d413234ff907c7b53623eab95da3e9fc4d2491ad149b69650fe53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_side_menu($context, array $blocks = array())
    {
        if (array_key_exists("action", $context)) {
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
        }
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
    Redefine the content block in your action template

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 59,  152 => 63,  150 => 58,  20 => 1,  118 => 46,  129 => 42,  97 => 31,  70 => 29,  126 => 55,  113 => 46,  104 => 42,  153 => 48,  124 => 49,  110 => 36,  100 => 41,  65 => 26,  34 => 16,  81 => 34,  76 => 32,  58 => 22,  53 => 24,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 162,  463 => 160,  454 => 158,  450 => 157,  447 => 156,  445 => 155,  440 => 153,  437 => 152,  433 => 151,  423 => 143,  419 => 141,  417 => 140,  412 => 139,  408 => 138,  403 => 135,  397 => 131,  394 => 130,  391 => 129,  389 => 128,  384 => 125,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 112,  332 => 110,  324 => 108,  322 => 107,  319 => 106,  315 => 104,  308 => 100,  304 => 99,  295 => 98,  293 => 97,  288 => 95,  278 => 94,  274 => 93,  268 => 90,  262 => 89,  257 => 87,  251 => 86,  245 => 83,  239 => 82,  234 => 80,  218 => 77,  192 => 75,  188 => 74,  177 => 65,  169 => 69,  140 => 53,  132 => 43,  128 => 49,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 83,  230 => 79,  227 => 81,  224 => 78,  221 => 77,  219 => 76,  217 => 75,  208 => 73,  204 => 72,  179 => 72,  159 => 49,  143 => 56,  135 => 48,  119 => 39,  102 => 42,  71 => 32,  67 => 28,  63 => 27,  59 => 14,  38 => 18,  94 => 39,  89 => 37,  85 => 28,  75 => 31,  68 => 31,  56 => 25,  87 => 38,  21 => 2,  26 => 14,  93 => 28,  88 => 37,  78 => 26,  46 => 19,  27 => 14,  44 => 21,  31 => 15,  28 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 54,  136 => 58,  121 => 51,  117 => 50,  105 => 40,  91 => 39,  62 => 25,  49 => 19,  24 => 13,  25 => 3,  19 => 11,  79 => 35,  72 => 30,  69 => 32,  47 => 19,  40 => 8,  37 => 10,  22 => 12,  246 => 90,  157 => 58,  145 => 56,  139 => 59,  131 => 52,  123 => 48,  120 => 48,  115 => 45,  111 => 43,  108 => 42,  101 => 40,  98 => 39,  96 => 19,  83 => 25,  74 => 14,  66 => 30,  55 => 24,  52 => 23,  50 => 23,  43 => 21,  41 => 20,  35 => 5,  32 => 4,  29 => 15,  209 => 76,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 70,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 57,  125 => 40,  122 => 43,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 31,  95 => 40,  92 => 21,  86 => 17,  82 => 36,  80 => 19,  73 => 19,  64 => 17,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 13,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
