<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_0852c355a5859d090d3762396cc9d0fc907db8f052d6b7aa78128481527da9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 131,  323 => 125,  309 => 120,  305 => 119,  301 => 117,  281 => 110,  248 => 100,  225 => 87,  213 => 82,  211 => 81,  202 => 77,  165 => 64,  134 => 56,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  664 => 218,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  548 => 165,  526 => 157,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 143,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 127,  402 => 170,  396 => 159,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  363 => 114,  345 => 97,  328 => 74,  325 => 73,  317 => 70,  303 => 65,  299 => 116,  261 => 50,  253 => 47,  231 => 33,  222 => 30,  210 => 22,  194 => 177,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 163,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  486 => 145,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  456 => 143,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  371 => 113,  358 => 139,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  311 => 89,  297 => 84,  289 => 112,  286 => 80,  263 => 71,  250 => 67,  247 => 66,  236 => 35,  233 => 62,  228 => 88,  200 => 55,  191 => 50,  175 => 118,  146 => 34,  344 => 97,  338 => 130,  335 => 93,  321 => 91,  312 => 68,  292 => 87,  259 => 70,  252 => 68,  215 => 54,  190 => 175,  184 => 47,  181 => 47,  178 => 119,  161 => 38,  90 => 27,  114 => 88,  572 => 193,  561 => 174,  557 => 169,  549 => 174,  544 => 172,  538 => 170,  536 => 161,  530 => 158,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  504 => 158,  499 => 156,  492 => 132,  487 => 152,  480 => 128,  477 => 150,  474 => 149,  470 => 135,  460 => 132,  457 => 131,  453 => 136,  449 => 123,  446 => 139,  441 => 105,  430 => 137,  426 => 102,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  374 => 114,  369 => 115,  357 => 125,  333 => 117,  307 => 66,  300 => 113,  291 => 82,  285 => 111,  282 => 79,  275 => 57,  272 => 76,  264 => 72,  226 => 67,  220 => 56,  214 => 61,  205 => 59,  197 => 74,  186 => 54,  172 => 52,  148 => 60,  127 => 54,  367 => 131,  361 => 107,  355 => 112,  352 => 121,  346 => 92,  343 => 132,  340 => 95,  330 => 87,  327 => 126,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  296 => 111,  287 => 72,  283 => 58,  280 => 82,  277 => 109,  271 => 108,  265 => 106,  260 => 104,  249 => 67,  241 => 31,  223 => 58,  216 => 28,  185 => 173,  180 => 120,  174 => 67,  137 => 27,  77 => 27,  23 => 13,  84 => 16,  12 => 34,  160 => 48,  152 => 99,  150 => 58,  20 => 11,  118 => 28,  129 => 24,  97 => 87,  70 => 23,  126 => 55,  113 => 44,  104 => 23,  153 => 35,  124 => 23,  110 => 25,  100 => 43,  65 => 5,  34 => 4,  81 => 26,  76 => 13,  58 => 22,  53 => 10,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 155,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 118,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 100,  365 => 141,  351 => 135,  347 => 134,  332 => 75,  324 => 92,  322 => 107,  319 => 124,  315 => 123,  308 => 100,  304 => 79,  295 => 88,  293 => 113,  288 => 85,  278 => 94,  274 => 77,  268 => 107,  262 => 105,  257 => 103,  251 => 101,  245 => 83,  239 => 97,  234 => 80,  218 => 77,  192 => 55,  188 => 174,  177 => 65,  169 => 66,  140 => 28,  132 => 57,  128 => 47,  107 => 24,  61 => 26,  273 => 96,  269 => 75,  254 => 102,  243 => 98,  240 => 86,  238 => 36,  235 => 83,  230 => 79,  227 => 32,  224 => 78,  221 => 77,  219 => 84,  217 => 75,  208 => 57,  204 => 78,  179 => 72,  159 => 49,  143 => 59,  135 => 48,  119 => 44,  102 => 17,  71 => 29,  67 => 19,  63 => 22,  59 => 23,  38 => 17,  94 => 35,  89 => 34,  85 => 30,  75 => 31,  68 => 6,  56 => 81,  87 => 17,  21 => 11,  26 => 14,  93 => 39,  88 => 33,  78 => 80,  46 => 19,  27 => 13,  44 => 19,  31 => 14,  28 => 13,  201 => 182,  196 => 52,  183 => 121,  171 => 61,  166 => 110,  163 => 49,  158 => 62,  156 => 36,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  121 => 91,  117 => 89,  105 => 39,  91 => 34,  62 => 24,  49 => 9,  24 => 3,  25 => 12,  19 => 11,  79 => 31,  72 => 54,  69 => 53,  47 => 17,  40 => 19,  37 => 18,  22 => 11,  246 => 99,  157 => 41,  145 => 53,  139 => 31,  131 => 55,  123 => 30,  120 => 46,  115 => 27,  111 => 40,  108 => 45,  101 => 37,  98 => 37,  96 => 40,  83 => 82,  74 => 23,  66 => 23,  55 => 22,  52 => 20,  50 => 22,  43 => 15,  41 => 18,  35 => 11,  32 => 16,  29 => 15,  209 => 24,  203 => 278,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 69,  176 => 45,  173 => 112,  168 => 72,  164 => 109,  162 => 57,  154 => 46,  149 => 36,  147 => 46,  144 => 95,  141 => 94,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 45,  112 => 26,  109 => 45,  106 => 35,  103 => 38,  99 => 30,  95 => 20,  92 => 19,  86 => 33,  82 => 28,  80 => 9,  73 => 24,  64 => 184,  60 => 15,  57 => 155,  54 => 154,  51 => 19,  48 => 67,  45 => 19,  42 => 18,  39 => 13,  36 => 17,  33 => 16,  30 => 17,);
    }
}
