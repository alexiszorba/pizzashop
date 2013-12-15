<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_ce4f5834691e24c21d96a0ffa97d31a5ace96e13471ed89e69a07c9ef40a8b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : null), "count" => (isset($context["count"]) ? $context["count"] : null))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : null))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  830 => 198,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  801 => 185,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  712 => 150,  697 => 141,  695 => 139,  689 => 137,  680 => 134,  678 => 133,  675 => 132,  662 => 125,  640 => 119,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  593 => 105,  564 => 99,  555 => 95,  524 => 90,  515 => 85,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  464 => 71,  461 => 70,  442 => 62,  405 => 49,  385 => 41,  368 => 34,  337 => 22,  266 => 366,  350 => 26,  810 => 492,  807 => 491,  796 => 183,  792 => 488,  788 => 486,  775 => 485,  746 => 161,  710 => 149,  698 => 471,  694 => 138,  682 => 467,  679 => 466,  660 => 464,  649 => 122,  634 => 456,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  532 => 410,  529 => 92,  527 => 91,  522 => 406,  334 => 141,  276 => 381,  353 => 328,  258 => 354,  255 => 353,  212 => 279,  431 => 189,  387 => 164,  348 => 140,  270 => 102,  229 => 87,  207 => 269,  167 => 10,  306 => 286,  170 => 84,  406 => 158,  401 => 172,  373 => 156,  364 => 139,  359 => 138,  290 => 5,  244 => 85,  198 => 69,  195 => 68,  155 => 47,  318 => 111,  316 => 16,  284 => 106,  279 => 104,  256 => 96,  237 => 86,  676 => 401,  659 => 392,  654 => 123,  650 => 388,  643 => 120,  639 => 380,  633 => 377,  629 => 454,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 414,  550 => 94,  531 => 312,  518 => 307,  514 => 306,  509 => 83,  466 => 280,  452 => 272,  443 => 261,  439 => 195,  435 => 258,  429 => 188,  424 => 254,  422 => 184,  383 => 224,  366 => 33,  331 => 140,  298 => 120,  267 => 101,  242 => 112,  232 => 88,  341 => 118,  323 => 128,  309 => 129,  305 => 115,  301 => 111,  281 => 388,  248 => 336,  225 => 298,  213 => 78,  211 => 81,  202 => 266,  165 => 83,  134 => 161,  836 => 271,  833 => 199,  828 => 197,  821 => 261,  815 => 258,  811 => 256,  809 => 189,  806 => 254,  800 => 252,  798 => 184,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 170,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 162,  740 => 188,  735 => 187,  730 => 186,  727 => 476,  722 => 184,  719 => 183,  715 => 151,  708 => 267,  706 => 473,  699 => 142,  693 => 232,  690 => 469,  688 => 230,  683 => 135,  677 => 465,  674 => 397,  672 => 222,  664 => 394,  658 => 124,  638 => 118,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 101,  569 => 183,  566 => 182,  548 => 165,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  478 => 74,  475 => 141,  468 => 140,  459 => 69,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 234,  393 => 158,  390 => 43,  381 => 121,  376 => 119,  363 => 32,  345 => 147,  328 => 139,  325 => 129,  317 => 70,  303 => 106,  299 => 8,  261 => 91,  253 => 342,  231 => 83,  222 => 297,  210 => 270,  194 => 248,  713 => 270,  707 => 148,  704 => 210,  702 => 472,  696 => 140,  686 => 468,  681 => 404,  669 => 221,  666 => 126,  663 => 199,  655 => 215,  652 => 214,  635 => 117,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 106,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 93,  542 => 321,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  512 => 84,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 202,  456 => 68,  451 => 141,  428 => 59,  425 => 128,  414 => 52,  409 => 124,  400 => 47,  398 => 119,  371 => 35,  358 => 151,  349 => 133,  342 => 23,  339 => 100,  336 => 126,  329 => 131,  326 => 138,  311 => 14,  297 => 104,  289 => 113,  286 => 112,  263 => 365,  250 => 341,  247 => 66,  236 => 108,  233 => 304,  228 => 78,  200 => 72,  191 => 246,  175 => 58,  146 => 181,  344 => 24,  338 => 135,  335 => 21,  321 => 135,  312 => 130,  292 => 134,  259 => 103,  252 => 88,  215 => 280,  190 => 76,  184 => 233,  181 => 232,  178 => 59,  161 => 202,  90 => 27,  114 => 111,  572 => 193,  561 => 174,  557 => 96,  549 => 411,  544 => 172,  538 => 319,  536 => 161,  530 => 158,  521 => 162,  517 => 404,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  480 => 75,  477 => 150,  474 => 285,  470 => 73,  460 => 132,  457 => 131,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  430 => 137,  426 => 58,  415 => 180,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  388 => 42,  386 => 159,  382 => 93,  380 => 158,  377 => 37,  374 => 36,  369 => 141,  357 => 123,  333 => 117,  307 => 128,  300 => 105,  291 => 102,  285 => 3,  282 => 79,  275 => 105,  272 => 158,  264 => 72,  226 => 84,  220 => 290,  214 => 98,  205 => 59,  197 => 249,  186 => 239,  172 => 57,  148 => 63,  127 => 35,  367 => 339,  361 => 152,  355 => 27,  352 => 135,  346 => 196,  343 => 146,  340 => 145,  330 => 87,  327 => 114,  320 => 127,  313 => 15,  310 => 81,  302 => 125,  296 => 121,  287 => 72,  283 => 115,  280 => 130,  277 => 100,  271 => 374,  265 => 105,  260 => 363,  249 => 67,  241 => 93,  223 => 58,  216 => 79,  185 => 74,  180 => 14,  174 => 217,  137 => 71,  77 => 25,  23 => 1,  84 => 41,  12 => 34,  160 => 75,  152 => 46,  150 => 55,  20 => 1,  118 => 49,  129 => 148,  97 => 63,  70 => 19,  126 => 147,  113 => 40,  104 => 90,  153 => 77,  124 => 132,  110 => 38,  100 => 36,  65 => 17,  34 => 4,  81 => 40,  76 => 31,  58 => 15,  53 => 11,  490 => 77,  484 => 170,  479 => 167,  471 => 164,  467 => 72,  463 => 133,  454 => 158,  450 => 64,  447 => 134,  445 => 267,  440 => 153,  437 => 61,  433 => 60,  423 => 57,  419 => 98,  417 => 126,  412 => 139,  408 => 50,  403 => 48,  397 => 131,  394 => 168,  391 => 129,  389 => 160,  384 => 147,  378 => 157,  375 => 120,  372 => 119,  370 => 100,  365 => 141,  351 => 120,  347 => 134,  332 => 20,  324 => 113,  322 => 107,  319 => 124,  315 => 131,  308 => 13,  304 => 174,  295 => 88,  293 => 6,  288 => 4,  278 => 387,  274 => 110,  268 => 373,  262 => 98,  257 => 149,  251 => 101,  245 => 335,  239 => 83,  234 => 80,  218 => 77,  192 => 87,  188 => 90,  177 => 13,  169 => 210,  140 => 58,  132 => 59,  128 => 58,  107 => 37,  61 => 2,  273 => 380,  269 => 107,  254 => 102,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 75,  219 => 100,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 35,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 17,  38 => 6,  94 => 57,  89 => 47,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 72,  196 => 92,  183 => 121,  171 => 216,  166 => 209,  163 => 82,  158 => 80,  156 => 195,  151 => 188,  142 => 73,  138 => 61,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  24 => 2,  25 => 12,  19 => 1,  79 => 32,  72 => 21,  69 => 13,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 41,  145 => 74,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 95,  203 => 73,  199 => 265,  193 => 51,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 175,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 55,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
