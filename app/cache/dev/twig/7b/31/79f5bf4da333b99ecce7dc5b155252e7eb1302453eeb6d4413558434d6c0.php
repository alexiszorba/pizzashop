<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_7b3179f5bf4da333b99ecce7dc5b155252e7eb1302453eeb6d4413558434d6c0 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 327,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  746 => 478,  710 => 475,  698 => 471,  694 => 470,  682 => 467,  679 => 466,  660 => 464,  649 => 462,  634 => 456,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  334 => 141,  290 => 119,  353 => 328,  258 => 94,  255 => 101,  212 => 78,  431 => 189,  401 => 172,  373 => 156,  229 => 87,  207 => 75,  306 => 286,  399 => 158,  387 => 164,  362 => 141,  359 => 140,  348 => 140,  294 => 111,  276 => 111,  270 => 102,  170 => 84,  167 => 60,  155 => 47,  318 => 111,  316 => 121,  284 => 106,  279 => 104,  256 => 96,  237 => 85,  676 => 401,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 454,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 414,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 261,  439 => 195,  435 => 258,  429 => 188,  424 => 254,  422 => 184,  383 => 150,  366 => 142,  331 => 140,  298 => 120,  267 => 101,  242 => 112,  232 => 88,  341 => 118,  323 => 128,  309 => 129,  305 => 115,  301 => 117,  281 => 114,  248 => 97,  225 => 87,  213 => 78,  211 => 81,  202 => 94,  165 => 83,  134 => 39,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 479,  740 => 188,  735 => 187,  730 => 186,  727 => 476,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 473,  699 => 235,  693 => 232,  690 => 469,  688 => 230,  683 => 227,  677 => 465,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  548 => 165,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 157,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  363 => 153,  345 => 147,  328 => 139,  325 => 129,  317 => 70,  303 => 106,  299 => 112,  261 => 50,  253 => 100,  231 => 83,  222 => 83,  210 => 77,  194 => 68,  713 => 270,  707 => 211,  704 => 210,  702 => 472,  696 => 206,  686 => 468,  681 => 404,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 202,  456 => 273,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  371 => 156,  358 => 151,  349 => 103,  342 => 137,  339 => 100,  336 => 99,  329 => 131,  326 => 138,  311 => 89,  297 => 104,  289 => 113,  286 => 112,  263 => 95,  250 => 93,  247 => 66,  236 => 108,  233 => 87,  228 => 83,  200 => 72,  191 => 67,  175 => 58,  146 => 34,  344 => 119,  338 => 135,  335 => 134,  321 => 135,  312 => 130,  292 => 134,  259 => 103,  252 => 68,  215 => 78,  190 => 76,  184 => 63,  181 => 65,  178 => 59,  161 => 63,  90 => 37,  114 => 46,  572 => 193,  561 => 174,  557 => 330,  549 => 411,  544 => 172,  538 => 319,  536 => 161,  530 => 158,  521 => 162,  517 => 404,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  480 => 128,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  430 => 137,  426 => 102,  415 => 180,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  388 => 124,  386 => 159,  382 => 93,  380 => 158,  377 => 147,  374 => 114,  369 => 115,  357 => 123,  333 => 117,  307 => 128,  300 => 105,  291 => 102,  285 => 111,  282 => 79,  275 => 105,  272 => 158,  264 => 72,  226 => 84,  220 => 81,  214 => 98,  205 => 59,  197 => 69,  186 => 62,  172 => 57,  148 => 53,  127 => 35,  367 => 339,  361 => 152,  355 => 329,  352 => 138,  346 => 196,  343 => 146,  340 => 145,  330 => 87,  327 => 114,  320 => 127,  313 => 82,  310 => 81,  302 => 125,  296 => 121,  287 => 72,  283 => 115,  280 => 130,  277 => 109,  271 => 108,  265 => 105,  260 => 123,  249 => 89,  241 => 93,  223 => 58,  216 => 79,  185 => 74,  180 => 120,  174 => 65,  137 => 58,  77 => 25,  23 => 1,  84 => 27,  12 => 34,  160 => 75,  152 => 46,  150 => 55,  20 => 1,  118 => 49,  129 => 56,  97 => 63,  70 => 26,  126 => 55,  113 => 40,  104 => 37,  153 => 77,  124 => 31,  110 => 41,  100 => 36,  65 => 22,  34 => 5,  81 => 23,  76 => 28,  58 => 18,  53 => 17,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 267,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 176,  403 => 121,  397 => 131,  394 => 168,  391 => 129,  389 => 160,  384 => 122,  378 => 157,  375 => 120,  372 => 119,  370 => 100,  365 => 141,  351 => 120,  347 => 134,  332 => 116,  324 => 113,  322 => 107,  319 => 124,  315 => 131,  308 => 287,  304 => 174,  295 => 88,  293 => 120,  288 => 118,  278 => 98,  274 => 110,  268 => 126,  262 => 98,  257 => 149,  251 => 101,  245 => 88,  239 => 86,  234 => 84,  218 => 77,  192 => 87,  188 => 90,  177 => 63,  169 => 11,  140 => 58,  132 => 59,  128 => 58,  107 => 41,  61 => 23,  273 => 101,  269 => 107,  254 => 91,  243 => 92,  240 => 86,  238 => 139,  235 => 89,  230 => 105,  227 => 86,  224 => 81,  221 => 78,  219 => 100,  217 => 79,  208 => 76,  204 => 73,  179 => 14,  159 => 69,  143 => 51,  135 => 69,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  38 => 6,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 25,  78 => 18,  46 => 14,  27 => 7,  44 => 11,  31 => 8,  28 => 6,  201 => 72,  196 => 92,  183 => 61,  171 => 63,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 50,  138 => 61,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 21,  49 => 14,  24 => 2,  25 => 12,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 41,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 49,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 30,  74 => 30,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 95,  203 => 73,  199 => 93,  193 => 70,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 71,  162 => 59,  154 => 60,  149 => 36,  147 => 75,  144 => 42,  141 => 73,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 28,  99 => 23,  95 => 39,  92 => 28,  86 => 28,  82 => 19,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
