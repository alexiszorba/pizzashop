<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_0a1bf187b0359d5a9bf7c2a4e196f3d67a0de73a0367b8099f74e8f5d8ee7628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title"), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "link"), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "description");
            echo "</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                No feeds available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  664 => 218,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  548 => 165,  526 => 157,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 143,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 127,  402 => 170,  396 => 159,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  363 => 114,  345 => 97,  328 => 74,  325 => 73,  317 => 70,  303 => 65,  299 => 64,  261 => 50,  253 => 47,  231 => 33,  222 => 30,  210 => 22,  194 => 177,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 163,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  486 => 145,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  456 => 143,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  371 => 113,  358 => 113,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  311 => 89,  297 => 84,  289 => 59,  286 => 80,  263 => 71,  250 => 67,  247 => 66,  236 => 35,  233 => 62,  228 => 59,  200 => 55,  191 => 50,  175 => 118,  146 => 34,  344 => 97,  338 => 76,  335 => 93,  321 => 91,  312 => 68,  292 => 87,  259 => 70,  252 => 68,  215 => 54,  190 => 175,  184 => 47,  181 => 47,  178 => 119,  161 => 38,  90 => 27,  84 => 16,  114 => 88,  572 => 193,  561 => 174,  557 => 169,  549 => 174,  544 => 172,  538 => 170,  536 => 161,  530 => 158,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  504 => 158,  499 => 156,  492 => 132,  487 => 152,  480 => 128,  477 => 150,  474 => 149,  470 => 135,  460 => 132,  457 => 131,  453 => 136,  449 => 123,  446 => 139,  441 => 105,  430 => 137,  426 => 102,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  374 => 114,  369 => 115,  357 => 125,  333 => 117,  307 => 66,  300 => 113,  291 => 82,  285 => 84,  282 => 79,  275 => 57,  272 => 76,  264 => 72,  226 => 67,  220 => 56,  214 => 61,  205 => 59,  197 => 54,  186 => 54,  172 => 52,  148 => 97,  127 => 34,  367 => 131,  361 => 107,  355 => 112,  352 => 121,  346 => 92,  343 => 91,  340 => 95,  330 => 87,  327 => 86,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  296 => 111,  287 => 72,  283 => 58,  280 => 82,  277 => 78,  271 => 55,  265 => 64,  260 => 62,  249 => 67,  241 => 31,  223 => 58,  216 => 28,  185 => 173,  180 => 120,  174 => 53,  137 => 27,  23 => 13,  77 => 25,  12 => 34,  160 => 48,  152 => 99,  150 => 58,  20 => 11,  118 => 28,  129 => 24,  97 => 87,  70 => 29,  126 => 55,  113 => 46,  104 => 23,  153 => 35,  124 => 23,  110 => 25,  100 => 43,  65 => 5,  34 => 53,  81 => 26,  76 => 13,  58 => 22,  53 => 20,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 155,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 118,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 100,  365 => 115,  351 => 114,  347 => 102,  332 => 75,  324 => 92,  322 => 107,  319 => 71,  315 => 90,  308 => 100,  304 => 79,  295 => 88,  293 => 61,  288 => 85,  278 => 94,  274 => 77,  268 => 54,  262 => 63,  257 => 49,  251 => 86,  245 => 83,  239 => 82,  234 => 80,  218 => 77,  192 => 55,  188 => 174,  177 => 65,  169 => 51,  140 => 28,  132 => 57,  128 => 47,  107 => 24,  61 => 26,  273 => 96,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 36,  235 => 83,  230 => 79,  227 => 32,  224 => 78,  221 => 77,  219 => 29,  217 => 75,  208 => 57,  204 => 72,  179 => 72,  159 => 49,  143 => 29,  135 => 48,  119 => 44,  102 => 17,  71 => 29,  67 => 25,  63 => 22,  59 => 165,  38 => 7,  94 => 86,  89 => 34,  85 => 83,  75 => 31,  68 => 6,  56 => 81,  87 => 17,  21 => 11,  26 => 13,  93 => 39,  88 => 33,  78 => 80,  46 => 19,  27 => 13,  44 => 19,  31 => 17,  28 => 14,  201 => 182,  196 => 52,  183 => 121,  171 => 61,  166 => 110,  163 => 49,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 93,  136 => 39,  121 => 91,  117 => 89,  105 => 44,  91 => 85,  62 => 166,  49 => 18,  24 => 3,  25 => 12,  19 => 11,  79 => 31,  72 => 54,  69 => 53,  47 => 17,  40 => 44,  37 => 12,  22 => 11,  246 => 69,  157 => 41,  145 => 53,  139 => 31,  131 => 25,  123 => 30,  120 => 46,  115 => 27,  111 => 40,  108 => 45,  101 => 37,  98 => 36,  96 => 40,  83 => 82,  74 => 78,  66 => 23,  55 => 21,  52 => 20,  50 => 78,  43 => 15,  41 => 18,  35 => 11,  32 => 12,  29 => 14,  209 => 24,  203 => 278,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 70,  176 => 45,  173 => 112,  168 => 72,  164 => 109,  162 => 57,  154 => 46,  149 => 36,  147 => 46,  144 => 95,  141 => 94,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 26,  109 => 45,  106 => 35,  103 => 38,  99 => 30,  95 => 20,  92 => 19,  86 => 33,  82 => 10,  80 => 9,  73 => 24,  64 => 184,  60 => 23,  57 => 155,  54 => 154,  51 => 19,  48 => 67,  45 => 16,  42 => 13,  39 => 13,  36 => 17,  33 => 16,  30 => 17,);
    }
}
