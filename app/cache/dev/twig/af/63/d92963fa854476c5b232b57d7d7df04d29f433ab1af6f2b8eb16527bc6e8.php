<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_af63d92963fa854476c5b232b57d7d7df04d29f433ab1af6f2b8eb16527bc6e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  431 => 189,  401 => 172,  373 => 156,  229 => 85,  207 => 75,  306 => 140,  399 => 158,  387 => 164,  362 => 141,  359 => 140,  348 => 140,  294 => 111,  276 => 102,  270 => 102,  170 => 78,  167 => 60,  155 => 55,  318 => 144,  316 => 121,  284 => 106,  279 => 104,  256 => 96,  237 => 85,  676 => 401,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 261,  439 => 195,  435 => 258,  429 => 188,  424 => 254,  422 => 184,  383 => 150,  366 => 142,  331 => 187,  298 => 120,  267 => 101,  242 => 112,  232 => 83,  341 => 131,  323 => 128,  309 => 117,  305 => 115,  301 => 117,  281 => 105,  248 => 94,  225 => 87,  213 => 78,  211 => 81,  202 => 73,  165 => 60,  134 => 54,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  548 => 165,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 157,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  363 => 114,  345 => 135,  328 => 74,  325 => 129,  317 => 70,  303 => 122,  299 => 112,  261 => 50,  253 => 95,  231 => 33,  222 => 81,  210 => 75,  194 => 70,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 404,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 202,  456 => 273,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  371 => 144,  358 => 139,  349 => 103,  342 => 137,  339 => 100,  336 => 99,  329 => 131,  326 => 185,  311 => 89,  297 => 84,  289 => 113,  286 => 112,  263 => 124,  250 => 93,  247 => 66,  236 => 108,  233 => 87,  228 => 83,  200 => 72,  191 => 67,  175 => 65,  146 => 34,  344 => 97,  338 => 135,  335 => 134,  321 => 124,  312 => 124,  292 => 134,  259 => 70,  252 => 68,  215 => 78,  190 => 175,  184 => 47,  181 => 65,  178 => 66,  161 => 63,  90 => 27,  114 => 46,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  544 => 172,  538 => 319,  536 => 161,  530 => 158,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  480 => 128,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  430 => 137,  426 => 102,  415 => 180,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  382 => 93,  380 => 160,  377 => 147,  374 => 114,  369 => 115,  357 => 139,  333 => 117,  307 => 66,  300 => 121,  291 => 169,  285 => 111,  282 => 79,  275 => 105,  272 => 158,  264 => 72,  226 => 84,  220 => 81,  214 => 98,  205 => 59,  197 => 71,  186 => 62,  172 => 64,  148 => 53,  127 => 63,  367 => 131,  361 => 146,  355 => 143,  352 => 138,  346 => 196,  343 => 132,  340 => 95,  330 => 87,  327 => 126,  320 => 127,  313 => 82,  310 => 81,  302 => 114,  296 => 111,  287 => 72,  283 => 106,  280 => 130,  277 => 109,  271 => 108,  265 => 125,  260 => 123,  249 => 89,  241 => 90,  223 => 58,  216 => 79,  185 => 66,  180 => 120,  174 => 64,  137 => 58,  77 => 26,  23 => 1,  84 => 24,  12 => 34,  160 => 75,  152 => 92,  150 => 55,  20 => 1,  118 => 49,  129 => 56,  97 => 63,  70 => 19,  126 => 55,  113 => 48,  104 => 49,  153 => 56,  124 => 31,  110 => 41,  100 => 39,  65 => 21,  34 => 7,  81 => 23,  76 => 31,  58 => 19,  53 => 12,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 267,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 176,  403 => 121,  397 => 131,  394 => 168,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 100,  365 => 141,  351 => 141,  347 => 134,  332 => 75,  324 => 92,  322 => 107,  319 => 124,  315 => 125,  308 => 118,  304 => 174,  295 => 88,  293 => 109,  288 => 107,  278 => 106,  274 => 128,  268 => 126,  262 => 98,  257 => 149,  251 => 101,  245 => 88,  239 => 86,  234 => 84,  218 => 77,  192 => 87,  188 => 68,  177 => 63,  169 => 11,  140 => 58,  132 => 59,  128 => 58,  107 => 41,  61 => 25,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 139,  235 => 83,  230 => 105,  227 => 80,  224 => 102,  221 => 78,  219 => 100,  217 => 79,  208 => 74,  204 => 73,  179 => 14,  159 => 69,  143 => 59,  135 => 69,  119 => 40,  102 => 40,  71 => 30,  67 => 24,  63 => 25,  59 => 14,  38 => 6,  94 => 38,  89 => 32,  85 => 38,  75 => 27,  68 => 27,  56 => 22,  87 => 34,  21 => 12,  26 => 12,  93 => 50,  88 => 60,  78 => 27,  46 => 13,  27 => 3,  44 => 11,  31 => 4,  28 => 3,  201 => 72,  196 => 71,  183 => 61,  171 => 63,  166 => 10,  163 => 49,  158 => 62,  156 => 58,  151 => 59,  142 => 50,  138 => 61,  136 => 60,  121 => 50,  117 => 46,  105 => 34,  91 => 41,  62 => 23,  49 => 14,  24 => 7,  25 => 12,  19 => 1,  79 => 28,  72 => 28,  69 => 24,  47 => 18,  40 => 15,  37 => 13,  22 => 3,  246 => 93,  157 => 41,  145 => 52,  139 => 59,  131 => 48,  123 => 42,  120 => 56,  115 => 49,  111 => 47,  108 => 47,  101 => 40,  98 => 35,  96 => 37,  83 => 33,  74 => 30,  66 => 24,  55 => 16,  52 => 18,  50 => 21,  43 => 12,  41 => 9,  35 => 6,  32 => 5,  29 => 5,  209 => 95,  203 => 73,  199 => 53,  193 => 70,  189 => 71,  187 => 86,  182 => 84,  176 => 63,  173 => 62,  168 => 61,  164 => 71,  162 => 59,  154 => 60,  149 => 36,  147 => 54,  144 => 67,  141 => 51,  133 => 49,  130 => 46,  125 => 51,  122 => 44,  116 => 39,  112 => 56,  109 => 55,  106 => 50,  103 => 28,  99 => 31,  95 => 35,  92 => 32,  86 => 28,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 22,  57 => 23,  54 => 20,  51 => 19,  48 => 12,  45 => 10,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 3,);
    }
}
