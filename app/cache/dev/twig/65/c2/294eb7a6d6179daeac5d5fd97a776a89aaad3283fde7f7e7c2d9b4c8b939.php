<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_65c2294eb7a6d6179daeac5d5fd97a776a89aaad3283fde7f7e7c2d9b4c8b939 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 16,  27 => 14,  30 => 15,  24 => 13,  22 => 12,  19 => 11,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  830 => 198,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  801 => 185,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  712 => 150,  710 => 149,  697 => 141,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  678 => 133,  675 => 132,  662 => 125,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  593 => 105,  564 => 99,  555 => 95,  550 => 94,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  470 => 73,  464 => 71,  461 => 70,  442 => 62,  433 => 60,  426 => 58,  405 => 49,  385 => 41,  368 => 34,  366 => 33,  350 => 26,  344 => 24,  337 => 22,  335 => 21,  316 => 16,  308 => 13,  290 => 5,  288 => 4,  285 => 3,  281 => 388,  278 => 387,  276 => 381,  273 => 380,  266 => 366,  258 => 354,  255 => 353,  245 => 335,  240 => 326,  235 => 311,  225 => 298,  220 => 290,  217 => 289,  215 => 280,  212 => 279,  207 => 269,  204 => 267,  202 => 266,  199 => 265,  189 => 240,  186 => 239,  181 => 232,  179 => 224,  171 => 216,  161 => 202,  159 => 196,  156 => 195,  154 => 189,  151 => 188,  134 => 161,  129 => 148,  126 => 147,  119 => 117,  116 => 116,  111 => 110,  109 => 105,  106 => 104,  99 => 68,  96 => 67,  89 => 47,  71 => 19,  66 => 12,  61 => 2,  707 => 148,  704 => 210,  696 => 140,  686 => 205,  681 => 203,  666 => 126,  663 => 199,  635 => 117,  618 => 190,  602 => 185,  596 => 106,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 93,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  492 => 132,  480 => 75,  473 => 150,  467 => 72,  456 => 68,  451 => 141,  446 => 139,  430 => 137,  423 => 57,  409 => 124,  403 => 48,  398 => 119,  394 => 118,  377 => 37,  374 => 36,  371 => 35,  349 => 103,  347 => 102,  342 => 23,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  324 => 92,  321 => 91,  311 => 14,  297 => 84,  291 => 82,  282 => 79,  272 => 76,  269 => 75,  250 => 341,  247 => 66,  243 => 327,  233 => 304,  228 => 59,  208 => 57,  200 => 55,  191 => 246,  184 => 233,  157 => 41,  149 => 182,  146 => 181,  139 => 169,  118 => 28,  107 => 24,  95 => 20,  90 => 18,  76 => 31,  64 => 3,  57 => 27,  52 => 113,  44 => 74,  42 => 62,  34 => 53,  318 => 144,  306 => 140,  300 => 138,  292 => 134,  286 => 80,  274 => 77,  263 => 365,  256 => 120,  248 => 336,  242 => 112,  230 => 303,  224 => 102,  214 => 98,  197 => 249,  187 => 86,  182 => 84,  170 => 78,  165 => 76,  158 => 74,  153 => 71,  147 => 68,  136 => 168,  132 => 59,  123 => 30,  120 => 56,  112 => 26,  110 => 25,  104 => 90,  86 => 46,  80 => 41,  62 => 166,  54 => 26,  38 => 18,  836 => 271,  833 => 199,  828 => 197,  821 => 261,  815 => 258,  811 => 256,  809 => 189,  806 => 254,  800 => 252,  798 => 184,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 170,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 162,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 151,  713 => 214,  708 => 267,  706 => 237,  702 => 209,  699 => 142,  693 => 232,  690 => 231,  688 => 230,  683 => 135,  677 => 224,  674 => 223,  672 => 222,  669 => 201,  664 => 218,  658 => 124,  655 => 194,  652 => 193,  638 => 118,  632 => 211,  627 => 208,  621 => 206,  613 => 188,  611 => 203,  608 => 187,  605 => 186,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 101,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 96,  548 => 165,  542 => 172,  539 => 171,  536 => 170,  530 => 168,  526 => 157,  523 => 156,  517 => 155,  512 => 84,  506 => 151,  498 => 134,  495 => 148,  491 => 147,  486 => 130,  483 => 129,  481 => 143,  478 => 74,  475 => 141,  468 => 140,  465 => 147,  462 => 146,  459 => 69,  453 => 142,  450 => 64,  447 => 134,  444 => 132,  437 => 61,  434 => 130,  428 => 59,  425 => 135,  420 => 127,  417 => 126,  414 => 52,  408 => 50,  402 => 170,  400 => 47,  396 => 159,  393 => 158,  390 => 43,  388 => 42,  384 => 116,  381 => 121,  376 => 119,  369 => 115,  363 => 32,  358 => 106,  345 => 97,  338 => 76,  328 => 74,  325 => 73,  319 => 90,  317 => 70,  312 => 142,  307 => 87,  303 => 139,  299 => 8,  289 => 81,  275 => 57,  268 => 373,  261 => 50,  253 => 342,  238 => 312,  236 => 63,  231 => 33,  227 => 301,  222 => 297,  219 => 100,  210 => 270,  203 => 56,  201 => 182,  194 => 248,  190 => 175,  183 => 121,  178 => 45,  175 => 43,  173 => 42,  152 => 38,  148 => 97,  144 => 176,  141 => 175,  138 => 61,  117 => 89,  114 => 111,  97 => 87,  94 => 57,  91 => 56,  85 => 83,  72 => 199,  69 => 13,  58 => 22,  55 => 21,  51 => 24,  45 => 16,  43 => 21,  41 => 14,  39 => 61,  370 => 100,  367 => 99,  361 => 107,  355 => 27,  352 => 94,  346 => 92,  343 => 91,  340 => 90,  332 => 20,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 15,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 6,  287 => 72,  283 => 58,  280 => 130,  277 => 78,  271 => 374,  265 => 125,  262 => 63,  260 => 363,  257 => 49,  254 => 68,  249 => 55,  246 => 54,  241 => 31,  223 => 58,  216 => 99,  209 => 95,  192 => 87,  188 => 174,  185 => 85,  180 => 120,  176 => 223,  174 => 217,  169 => 210,  166 => 209,  164 => 203,  160 => 75,  143 => 48,  137 => 47,  131 => 160,  128 => 58,  124 => 132,  121 => 131,  115 => 27,  113 => 39,  100 => 36,  83 => 82,  79 => 32,  77 => 20,  74 => 20,  68 => 30,  65 => 15,  63 => 14,  60 => 13,  56 => 12,  49 => 112,  46 => 21,  40 => 6,  37 => 54,  35 => 16,  32 => 13,  29 => 11,  23 => 1,  101 => 89,  98 => 21,  92 => 19,  87 => 17,  84 => 41,  81 => 40,  78 => 40,  75 => 39,  73 => 24,  70 => 33,  67 => 185,  59 => 165,  53 => 20,  50 => 25,  47 => 75,  12 => 34,);
    }
}
