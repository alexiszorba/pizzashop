<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_9ac3eaa148fd3f494c75b83af8c95060b1bb99a44f1de9f96a70404c2a044160 extends Twig_Template
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
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 27,  54 => 26,  38 => 18,  33 => 16,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  464 => 71,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  385 => 41,  371 => 35,  368 => 34,  366 => 33,  363 => 32,  350 => 26,  342 => 23,  337 => 22,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  281 => 388,  278 => 387,  276 => 381,  273 => 380,  271 => 374,  266 => 366,  263 => 365,  260 => 363,  258 => 354,  255 => 353,  253 => 342,  250 => 341,  248 => 336,  245 => 335,  240 => 326,  238 => 312,  235 => 311,  233 => 304,  230 => 303,  225 => 298,  222 => 297,  217 => 289,  212 => 279,  210 => 270,  207 => 269,  204 => 267,  202 => 266,  194 => 248,  191 => 246,  189 => 240,  179 => 224,  171 => 216,  164 => 203,  159 => 196,  149 => 182,  146 => 181,  144 => 176,  141 => 175,  139 => 169,  134 => 161,  126 => 147,  114 => 111,  111 => 110,  109 => 105,  106 => 104,  104 => 90,  101 => 89,  94 => 57,  89 => 47,  84 => 41,  79 => 32,  76 => 31,  74 => 20,  71 => 19,  69 => 13,  64 => 3,  61 => 2,  344 => 24,  340 => 95,  338 => 94,  335 => 21,  321 => 92,  315 => 90,  312 => 89,  295 => 88,  292 => 87,  277 => 81,  268 => 373,  259 => 70,  254 => 69,  252 => 68,  227 => 301,  215 => 280,  199 => 265,  196 => 52,  193 => 51,  190 => 50,  187 => 49,  184 => 233,  181 => 232,  178 => 46,  176 => 223,  173 => 44,  161 => 202,  158 => 37,  156 => 195,  153 => 35,  143 => 29,  137 => 27,  131 => 160,  129 => 148,  124 => 132,  121 => 131,  118 => 21,  112 => 19,  110 => 18,  82 => 10,  80 => 9,  60 => 3,  48 => 67,  99 => 68,  90 => 27,  77 => 8,  66 => 12,  63 => 4,  58 => 19,  55 => 18,  42 => 64,  39 => 12,  30 => 17,  27 => 14,  25 => 12,  24 => 13,  67 => 19,  53 => 80,  49 => 17,  32 => 35,  52 => 17,  47 => 25,  41 => 23,  35 => 22,  23 => 12,  20 => 11,  34 => 41,  31 => 16,  29 => 34,  26 => 14,  22 => 12,  19 => 11,  572 => 180,  561 => 178,  557 => 96,  549 => 174,  544 => 172,  538 => 170,  536 => 169,  530 => 165,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  504 => 158,  499 => 156,  492 => 154,  487 => 152,  480 => 75,  477 => 150,  474 => 149,  470 => 73,  467 => 72,  463 => 133,  460 => 132,  457 => 131,  453 => 124,  449 => 123,  446 => 122,  441 => 105,  430 => 103,  426 => 58,  419 => 98,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  388 => 42,  386 => 95,  382 => 93,  380 => 83,  377 => 37,  374 => 36,  369 => 136,  367 => 131,  361 => 127,  357 => 125,  355 => 27,  352 => 121,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  302 => 114,  300 => 113,  296 => 111,  291 => 109,  288 => 4,  285 => 3,  282 => 83,  280 => 82,  275 => 77,  272 => 76,  269 => 75,  264 => 72,  249 => 67,  246 => 69,  243 => 327,  226 => 67,  223 => 66,  220 => 290,  214 => 61,  208 => 60,  205 => 59,  201 => 57,  197 => 249,  192 => 55,  186 => 239,  174 => 217,  172 => 52,  169 => 210,  166 => 209,  163 => 49,  160 => 48,  157 => 47,  154 => 189,  151 => 188,  148 => 44,  145 => 43,  142 => 42,  140 => 28,  136 => 168,  130 => 35,  127 => 34,  123 => 33,  119 => 117,  116 => 116,  108 => 144,  105 => 143,  102 => 17,  98 => 15,  96 => 67,  93 => 138,  91 => 56,  88 => 12,  86 => 46,  83 => 64,  81 => 40,  78 => 29,  73 => 7,  68 => 30,  65 => 5,  62 => 24,  59 => 23,  56 => 81,  50 => 25,  45 => 66,  43 => 21,  40 => 44,  37 => 43,);
    }
}
