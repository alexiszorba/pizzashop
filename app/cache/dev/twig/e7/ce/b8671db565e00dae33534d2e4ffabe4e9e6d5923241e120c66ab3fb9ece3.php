<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_e7ceb8671db565e00dae33534d2e4ffabe4e9e6d5923241e120c66ab3fb9ece3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
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
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 17
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "edit", 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) {
                    // line 18
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 20
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 22
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo ", ";
                }
                // line 23
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 26
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo ", ";
                }
                // line 27
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
    }

    // line 31
    public function block_relation_link($context, array $blocks = array())
    {
        // line 32
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        echo "</a>";
    }

    // line 35
    public function block_relation_value($context, array $blocks = array())
    {
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 73,  406 => 158,  401 => 156,  373 => 142,  364 => 139,  359 => 138,  290 => 106,  244 => 85,  198 => 69,  195 => 68,  155 => 53,  318 => 122,  316 => 121,  284 => 106,  279 => 104,  256 => 89,  237 => 86,  676 => 401,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 261,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  422 => 250,  383 => 224,  366 => 140,  331 => 187,  298 => 173,  267 => 94,  242 => 140,  232 => 84,  341 => 131,  323 => 125,  309 => 117,  305 => 115,  301 => 111,  281 => 105,  248 => 100,  225 => 77,  213 => 126,  211 => 81,  202 => 77,  165 => 71,  134 => 58,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  548 => 165,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 234,  393 => 158,  390 => 150,  381 => 121,  376 => 119,  363 => 114,  345 => 97,  328 => 124,  325 => 73,  317 => 70,  303 => 65,  299 => 112,  261 => 91,  253 => 95,  231 => 33,  222 => 81,  210 => 75,  194 => 86,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 404,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  371 => 113,  358 => 139,  349 => 133,  342 => 129,  339 => 100,  336 => 126,  329 => 95,  326 => 185,  311 => 89,  297 => 84,  289 => 112,  286 => 80,  263 => 71,  250 => 93,  247 => 66,  236 => 35,  233 => 62,  228 => 78,  200 => 70,  191 => 69,  175 => 76,  146 => 49,  344 => 97,  338 => 130,  335 => 188,  321 => 123,  312 => 177,  292 => 87,  259 => 70,  252 => 88,  215 => 74,  190 => 175,  184 => 63,  181 => 79,  178 => 119,  161 => 70,  90 => 27,  114 => 71,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  544 => 172,  538 => 319,  536 => 161,  530 => 158,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  480 => 128,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  453 => 136,  449 => 123,  446 => 139,  441 => 105,  430 => 137,  426 => 102,  415 => 247,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  374 => 114,  369 => 141,  357 => 125,  333 => 117,  307 => 66,  300 => 113,  291 => 169,  285 => 111,  282 => 79,  275 => 103,  272 => 158,  264 => 72,  226 => 67,  220 => 80,  214 => 61,  205 => 59,  197 => 70,  186 => 81,  172 => 52,  148 => 63,  127 => 32,  367 => 131,  361 => 208,  355 => 136,  352 => 135,  346 => 196,  343 => 132,  340 => 95,  330 => 87,  327 => 126,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  296 => 109,  287 => 72,  283 => 102,  280 => 101,  277 => 100,  271 => 108,  265 => 99,  260 => 98,  249 => 67,  241 => 84,  223 => 58,  216 => 28,  185 => 68,  180 => 62,  174 => 60,  137 => 46,  77 => 27,  23 => 18,  84 => 38,  12 => 34,  160 => 69,  152 => 92,  150 => 64,  20 => 11,  118 => 28,  129 => 56,  97 => 63,  70 => 23,  126 => 42,  113 => 41,  104 => 67,  153 => 56,  124 => 31,  110 => 77,  100 => 36,  65 => 29,  34 => 16,  81 => 25,  76 => 57,  58 => 22,  53 => 10,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 267,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 157,  397 => 131,  394 => 152,  391 => 129,  389 => 128,  384 => 147,  378 => 144,  375 => 120,  372 => 119,  370 => 100,  365 => 141,  351 => 135,  347 => 134,  332 => 125,  324 => 92,  322 => 107,  319 => 124,  315 => 118,  308 => 100,  304 => 174,  295 => 88,  293 => 109,  288 => 107,  278 => 94,  274 => 98,  268 => 107,  262 => 105,  257 => 149,  251 => 101,  245 => 83,  239 => 83,  234 => 80,  218 => 77,  192 => 65,  188 => 174,  177 => 61,  169 => 57,  140 => 28,  132 => 57,  128 => 47,  107 => 24,  61 => 25,  273 => 96,  269 => 100,  254 => 102,  243 => 89,  240 => 86,  238 => 139,  235 => 83,  230 => 79,  227 => 134,  224 => 78,  221 => 75,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 69,  143 => 48,  135 => 35,  119 => 28,  102 => 38,  71 => 29,  67 => 27,  63 => 50,  59 => 23,  38 => 17,  94 => 35,  89 => 39,  85 => 34,  75 => 31,  68 => 30,  56 => 24,  87 => 33,  21 => 12,  26 => 13,  93 => 34,  88 => 60,  78 => 24,  46 => 35,  27 => 13,  44 => 19,  31 => 15,  28 => 14,  201 => 72,  196 => 52,  183 => 121,  171 => 63,  166 => 100,  163 => 49,  158 => 62,  156 => 67,  151 => 45,  142 => 60,  138 => 36,  136 => 39,  121 => 52,  117 => 50,  105 => 27,  91 => 34,  62 => 28,  49 => 20,  24 => 13,  25 => 12,  19 => 11,  79 => 31,  72 => 56,  69 => 50,  47 => 19,  40 => 19,  37 => 18,  22 => 12,  246 => 86,  157 => 41,  145 => 52,  139 => 59,  131 => 48,  123 => 53,  120 => 46,  115 => 49,  111 => 40,  108 => 47,  101 => 73,  98 => 43,  96 => 40,  83 => 82,  74 => 33,  66 => 23,  55 => 22,  52 => 17,  50 => 20,  43 => 18,  41 => 18,  35 => 16,  32 => 15,  29 => 21,  209 => 73,  203 => 71,  199 => 53,  193 => 51,  189 => 64,  187 => 49,  182 => 79,  176 => 76,  173 => 112,  168 => 60,  164 => 71,  162 => 70,  154 => 66,  149 => 50,  147 => 90,  144 => 61,  141 => 94,  133 => 49,  130 => 56,  125 => 45,  122 => 44,  116 => 45,  112 => 48,  109 => 40,  106 => 35,  103 => 45,  99 => 26,  95 => 42,  92 => 61,  86 => 64,  82 => 33,  80 => 9,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 16,  30 => 15,);
    }
}
