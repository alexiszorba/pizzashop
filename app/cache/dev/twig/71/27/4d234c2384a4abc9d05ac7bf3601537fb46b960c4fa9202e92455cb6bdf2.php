<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_71274d234c2384a4abc9d05ac7bf3601537fb46b960c4fa9202e92455cb6bdf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 140,  399 => 158,  387 => 152,  362 => 141,  359 => 140,  348 => 136,  294 => 111,  276 => 102,  270 => 100,  170 => 78,  167 => 60,  155 => 55,  318 => 144,  316 => 121,  284 => 106,  279 => 104,  256 => 120,  237 => 85,  676 => 401,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 261,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  422 => 250,  383 => 150,  366 => 142,  331 => 187,  298 => 173,  267 => 98,  242 => 112,  232 => 83,  341 => 131,  323 => 125,  309 => 117,  305 => 115,  301 => 117,  281 => 105,  248 => 115,  225 => 87,  213 => 126,  211 => 81,  202 => 73,  165 => 76,  134 => 58,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  548 => 165,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 157,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  363 => 114,  345 => 135,  328 => 74,  325 => 125,  317 => 70,  303 => 139,  299 => 112,  261 => 50,  253 => 95,  231 => 33,  222 => 81,  210 => 75,  194 => 86,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 404,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  371 => 144,  358 => 139,  349 => 103,  342 => 133,  339 => 100,  336 => 99,  329 => 126,  326 => 185,  311 => 89,  297 => 84,  289 => 109,  286 => 132,  263 => 124,  250 => 93,  247 => 66,  236 => 108,  233 => 62,  228 => 83,  200 => 55,  191 => 69,  175 => 76,  146 => 34,  344 => 97,  338 => 130,  335 => 129,  321 => 124,  312 => 142,  292 => 134,  259 => 70,  252 => 68,  215 => 78,  190 => 175,  184 => 47,  181 => 79,  178 => 119,  161 => 70,  90 => 34,  114 => 71,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  544 => 172,  538 => 319,  536 => 161,  530 => 158,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  480 => 128,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  453 => 136,  449 => 123,  446 => 139,  441 => 105,  430 => 137,  426 => 102,  415 => 247,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  382 => 93,  380 => 83,  377 => 147,  374 => 114,  369 => 115,  357 => 139,  333 => 117,  307 => 66,  300 => 138,  291 => 169,  285 => 111,  282 => 79,  275 => 103,  272 => 158,  264 => 72,  226 => 67,  220 => 80,  214 => 98,  205 => 59,  197 => 89,  186 => 81,  172 => 52,  148 => 53,  127 => 32,  367 => 131,  361 => 208,  355 => 112,  352 => 138,  346 => 196,  343 => 132,  340 => 95,  330 => 87,  327 => 126,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  296 => 111,  287 => 72,  283 => 106,  280 => 130,  277 => 109,  271 => 108,  265 => 125,  260 => 123,  249 => 89,  241 => 31,  223 => 58,  216 => 99,  185 => 85,  180 => 120,  174 => 64,  137 => 58,  77 => 27,  23 => 4,  84 => 38,  12 => 34,  160 => 75,  152 => 92,  150 => 64,  20 => 1,  118 => 28,  129 => 56,  97 => 63,  70 => 33,  126 => 55,  113 => 41,  104 => 49,  153 => 71,  124 => 31,  110 => 51,  100 => 27,  65 => 29,  34 => 7,  81 => 24,  76 => 57,  58 => 18,  53 => 10,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 267,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 156,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 100,  365 => 141,  351 => 135,  347 => 134,  332 => 75,  324 => 92,  322 => 107,  319 => 124,  315 => 123,  308 => 118,  304 => 174,  295 => 88,  293 => 109,  288 => 107,  278 => 94,  274 => 128,  268 => 126,  262 => 105,  257 => 149,  251 => 101,  245 => 88,  239 => 86,  234 => 84,  218 => 77,  192 => 87,  188 => 68,  177 => 63,  169 => 73,  140 => 28,  132 => 59,  128 => 58,  107 => 24,  61 => 25,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 139,  235 => 83,  230 => 105,  227 => 80,  224 => 102,  221 => 78,  219 => 100,  217 => 79,  208 => 74,  204 => 73,  179 => 66,  159 => 69,  143 => 59,  135 => 35,  119 => 28,  102 => 39,  71 => 29,  67 => 20,  63 => 24,  59 => 28,  38 => 8,  94 => 35,  89 => 39,  85 => 34,  75 => 39,  68 => 30,  56 => 24,  87 => 25,  21 => 12,  26 => 12,  93 => 29,  88 => 60,  78 => 40,  46 => 14,  27 => 4,  44 => 19,  31 => 6,  28 => 5,  201 => 72,  196 => 71,  183 => 121,  171 => 63,  166 => 100,  163 => 49,  158 => 74,  156 => 67,  151 => 45,  142 => 50,  138 => 61,  136 => 60,  121 => 52,  117 => 50,  105 => 27,  91 => 27,  62 => 19,  49 => 21,  24 => 7,  25 => 12,  19 => 2,  79 => 31,  72 => 21,  69 => 24,  47 => 19,  40 => 11,  37 => 17,  22 => 3,  246 => 99,  157 => 41,  145 => 52,  139 => 59,  131 => 48,  123 => 57,  120 => 56,  115 => 49,  111 => 40,  108 => 47,  101 => 73,  98 => 47,  96 => 40,  83 => 82,  74 => 33,  66 => 25,  55 => 21,  52 => 20,  50 => 10,  43 => 20,  41 => 9,  35 => 16,  32 => 16,  29 => 5,  209 => 95,  203 => 92,  199 => 53,  193 => 70,  189 => 71,  187 => 86,  182 => 84,  176 => 81,  173 => 62,  168 => 60,  164 => 71,  162 => 70,  154 => 66,  149 => 36,  147 => 68,  144 => 67,  141 => 66,  133 => 49,  130 => 46,  125 => 44,  122 => 44,  116 => 45,  112 => 52,  109 => 69,  106 => 40,  103 => 28,  99 => 26,  95 => 42,  92 => 45,  86 => 43,  82 => 33,  80 => 41,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 16,  51 => 24,  48 => 12,  45 => 19,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
