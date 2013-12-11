<?php

/* AlexPizzaBundle:User:new.html.twig */
class __TwigTemplate_cda09ef04380264da91a8c97543672166e0b19aa5268e1a800d4b271e6ccdc13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AlexPizzaBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 140,  170 => 78,  406 => 158,  401 => 156,  373 => 142,  364 => 139,  359 => 138,  290 => 106,  244 => 85,  198 => 69,  195 => 68,  155 => 53,  318 => 144,  316 => 121,  284 => 106,  279 => 104,  256 => 120,  237 => 86,  676 => 401,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 261,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  422 => 250,  383 => 224,  366 => 140,  331 => 187,  298 => 173,  267 => 94,  242 => 112,  232 => 84,  341 => 131,  323 => 125,  309 => 117,  305 => 115,  301 => 111,  281 => 105,  248 => 115,  225 => 77,  213 => 126,  211 => 81,  202 => 77,  165 => 76,  134 => 58,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  548 => 165,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 234,  393 => 158,  390 => 150,  381 => 121,  376 => 119,  363 => 114,  345 => 97,  328 => 124,  325 => 73,  317 => 70,  303 => 139,  299 => 112,  261 => 91,  253 => 95,  231 => 33,  222 => 81,  210 => 75,  194 => 86,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 404,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  371 => 113,  358 => 139,  349 => 133,  342 => 129,  339 => 100,  336 => 126,  329 => 95,  326 => 185,  311 => 89,  297 => 84,  289 => 112,  286 => 132,  263 => 124,  250 => 93,  247 => 66,  236 => 108,  233 => 62,  228 => 78,  200 => 70,  191 => 69,  175 => 76,  146 => 49,  344 => 97,  338 => 130,  335 => 188,  321 => 123,  312 => 142,  292 => 134,  259 => 70,  252 => 88,  215 => 74,  190 => 175,  184 => 63,  181 => 79,  178 => 119,  161 => 6,  90 => 49,  114 => 46,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  544 => 172,  538 => 319,  536 => 161,  530 => 158,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  480 => 128,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  453 => 136,  449 => 123,  446 => 139,  441 => 105,  430 => 137,  426 => 102,  415 => 247,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  374 => 114,  369 => 141,  357 => 125,  333 => 117,  307 => 66,  300 => 138,  291 => 169,  285 => 111,  282 => 79,  275 => 103,  272 => 158,  264 => 72,  226 => 67,  220 => 80,  214 => 98,  205 => 59,  197 => 89,  186 => 62,  172 => 52,  148 => 63,  127 => 63,  367 => 131,  361 => 208,  355 => 136,  352 => 135,  346 => 196,  343 => 132,  340 => 95,  330 => 87,  327 => 126,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  296 => 109,  287 => 72,  283 => 102,  280 => 130,  277 => 100,  271 => 108,  265 => 125,  260 => 123,  249 => 67,  241 => 84,  223 => 58,  216 => 99,  185 => 85,  180 => 62,  174 => 60,  137 => 46,  77 => 26,  23 => 1,  84 => 38,  12 => 34,  160 => 75,  152 => 92,  150 => 64,  20 => 1,  118 => 28,  129 => 56,  97 => 63,  70 => 25,  126 => 42,  113 => 41,  104 => 49,  153 => 71,  124 => 31,  110 => 41,  100 => 37,  65 => 21,  34 => 7,  81 => 29,  76 => 26,  58 => 19,  53 => 21,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 267,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 157,  397 => 131,  394 => 152,  391 => 129,  389 => 128,  384 => 147,  378 => 144,  375 => 120,  372 => 119,  370 => 100,  365 => 141,  351 => 135,  347 => 134,  332 => 125,  324 => 92,  322 => 107,  319 => 124,  315 => 118,  308 => 100,  304 => 174,  295 => 88,  293 => 109,  288 => 107,  278 => 94,  274 => 128,  268 => 126,  262 => 105,  257 => 149,  251 => 101,  245 => 83,  239 => 83,  234 => 80,  218 => 77,  192 => 87,  188 => 174,  177 => 61,  169 => 11,  140 => 71,  132 => 59,  128 => 58,  107 => 41,  61 => 25,  273 => 96,  269 => 100,  254 => 102,  243 => 89,  240 => 86,  238 => 139,  235 => 83,  230 => 105,  227 => 134,  224 => 102,  221 => 75,  219 => 100,  217 => 79,  208 => 124,  204 => 73,  179 => 14,  159 => 69,  143 => 48,  135 => 69,  119 => 48,  102 => 53,  71 => 30,  67 => 26,  63 => 25,  59 => 20,  38 => 8,  94 => 38,  89 => 32,  85 => 38,  75 => 27,  68 => 27,  56 => 22,  87 => 33,  21 => 12,  26 => 12,  93 => 50,  88 => 60,  78 => 27,  46 => 14,  27 => 5,  44 => 11,  31 => 4,  28 => 3,  201 => 72,  196 => 52,  183 => 61,  171 => 63,  166 => 10,  163 => 49,  158 => 5,  156 => 67,  151 => 45,  142 => 60,  138 => 61,  136 => 60,  121 => 59,  117 => 46,  105 => 54,  91 => 37,  62 => 23,  49 => 20,  24 => 7,  25 => 12,  19 => 1,  79 => 28,  72 => 28,  69 => 24,  47 => 18,  40 => 15,  37 => 13,  22 => 3,  246 => 86,  157 => 41,  145 => 52,  139 => 59,  131 => 48,  123 => 57,  120 => 56,  115 => 49,  111 => 40,  108 => 47,  101 => 40,  98 => 35,  96 => 40,  83 => 29,  74 => 26,  66 => 24,  55 => 14,  52 => 18,  50 => 21,  43 => 12,  41 => 9,  35 => 6,  32 => 16,  29 => 5,  209 => 95,  203 => 92,  199 => 53,  193 => 51,  189 => 64,  187 => 86,  182 => 84,  176 => 13,  173 => 112,  168 => 60,  164 => 71,  162 => 70,  154 => 66,  149 => 50,  147 => 68,  144 => 67,  141 => 66,  133 => 49,  130 => 56,  125 => 61,  122 => 44,  116 => 45,  112 => 56,  109 => 55,  106 => 46,  103 => 28,  99 => 42,  95 => 35,  92 => 32,  86 => 28,  82 => 28,  80 => 33,  73 => 25,  64 => 22,  60 => 22,  57 => 23,  54 => 20,  51 => 19,  48 => 12,  45 => 16,  42 => 10,  39 => 10,  36 => 7,  33 => 6,  30 => 2,);
    }
}
