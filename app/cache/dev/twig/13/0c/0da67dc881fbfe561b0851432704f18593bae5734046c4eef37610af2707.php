<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_130c0da67dc881fbfe561b0851432704f18593bae5734046c4eef37610af2707 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "format")), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 36,  114 => 44,  572 => 180,  561 => 178,  557 => 177,  549 => 174,  544 => 172,  538 => 170,  536 => 169,  530 => 165,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  504 => 158,  499 => 156,  492 => 154,  487 => 152,  480 => 151,  477 => 150,  474 => 149,  470 => 135,  460 => 132,  457 => 131,  453 => 124,  449 => 123,  446 => 122,  441 => 105,  430 => 103,  426 => 102,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  374 => 81,  369 => 136,  357 => 125,  333 => 117,  307 => 115,  300 => 113,  291 => 109,  285 => 81,  282 => 80,  275 => 77,  272 => 76,  264 => 72,  226 => 67,  220 => 65,  214 => 61,  205 => 59,  197 => 56,  186 => 54,  172 => 52,  148 => 44,  127 => 34,  367 => 131,  361 => 127,  355 => 122,  352 => 121,  346 => 92,  343 => 91,  340 => 90,  330 => 87,  327 => 86,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  296 => 111,  287 => 72,  283 => 70,  280 => 79,  277 => 68,  271 => 66,  265 => 64,  260 => 62,  249 => 70,  241 => 31,  223 => 66,  216 => 25,  185 => 20,  180 => 104,  174 => 53,  137 => 47,  77 => 13,  23 => 11,  84 => 34,  12 => 34,  160 => 48,  152 => 63,  150 => 58,  20 => 11,  118 => 46,  129 => 49,  97 => 31,  70 => 23,  126 => 48,  113 => 48,  104 => 42,  153 => 48,  124 => 43,  110 => 36,  100 => 43,  65 => 29,  34 => 18,  81 => 33,  76 => 34,  58 => 25,  53 => 24,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 158,  450 => 157,  447 => 156,  445 => 155,  440 => 153,  437 => 152,  433 => 151,  423 => 143,  419 => 98,  417 => 140,  412 => 139,  408 => 138,  403 => 135,  397 => 131,  394 => 130,  391 => 129,  389 => 128,  384 => 125,  378 => 121,  375 => 120,  372 => 119,  370 => 100,  365 => 115,  351 => 114,  347 => 118,  332 => 88,  324 => 116,  322 => 107,  319 => 106,  315 => 83,  308 => 100,  304 => 79,  295 => 98,  293 => 75,  288 => 108,  278 => 94,  274 => 93,  268 => 90,  262 => 63,  257 => 61,  251 => 86,  245 => 83,  239 => 82,  234 => 80,  218 => 77,  192 => 55,  188 => 21,  177 => 65,  169 => 51,  140 => 41,  132 => 44,  128 => 44,  107 => 46,  61 => 26,  273 => 96,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 85,  235 => 83,  230 => 79,  227 => 81,  224 => 78,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 72,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 142,  71 => 32,  67 => 30,  63 => 17,  59 => 27,  38 => 14,  94 => 40,  89 => 17,  85 => 37,  75 => 31,  68 => 30,  56 => 25,  87 => 35,  21 => 11,  26 => 14,  93 => 40,  88 => 37,  78 => 32,  46 => 9,  27 => 14,  44 => 21,  31 => 16,  28 => 14,  201 => 57,  196 => 90,  183 => 82,  171 => 61,  166 => 50,  163 => 49,  158 => 67,  156 => 66,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 42,  117 => 45,  105 => 41,  91 => 75,  62 => 28,  49 => 23,  24 => 12,  25 => 13,  19 => 11,  79 => 34,  72 => 30,  69 => 29,  47 => 22,  40 => 19,  37 => 20,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 59,  131 => 45,  123 => 47,  120 => 46,  115 => 40,  111 => 43,  108 => 42,  101 => 39,  98 => 42,  96 => 37,  83 => 15,  74 => 19,  66 => 28,  55 => 24,  52 => 23,  50 => 23,  43 => 26,  41 => 19,  35 => 20,  32 => 16,  29 => 15,  209 => 24,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 70,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 57,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 35,  125 => 40,  122 => 43,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 44,  99 => 38,  95 => 19,  92 => 39,  86 => 65,  82 => 36,  80 => 25,  73 => 27,  64 => 27,  60 => 16,  57 => 15,  54 => 26,  51 => 14,  48 => 22,  45 => 21,  42 => 20,  39 => 18,  36 => 18,  33 => 17,  30 => 15,);
    }
}
