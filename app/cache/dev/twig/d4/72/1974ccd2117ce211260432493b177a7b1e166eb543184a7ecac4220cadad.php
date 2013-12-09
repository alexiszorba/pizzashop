<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d4721974ccd2117ce211260432493b177a7b1e166eb543184a7ecac4220cadad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 189,  401 => 172,  373 => 156,  323 => 128,  229 => 85,  306 => 140,  248 => 94,  134 => 54,  399 => 158,  387 => 164,  362 => 141,  359 => 140,  348 => 140,  294 => 111,  276 => 102,  270 => 102,  202 => 73,  170 => 78,  167 => 60,  318 => 144,  316 => 121,  309 => 117,  305 => 115,  284 => 106,  281 => 105,  279 => 104,  237 => 85,  165 => 60,  676 => 401,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 261,  439 => 195,  435 => 258,  429 => 188,  424 => 254,  422 => 184,  383 => 150,  366 => 142,  331 => 187,  298 => 120,  267 => 101,  242 => 112,  232 => 83,  256 => 96,  225 => 89,  213 => 78,  207 => 75,  155 => 55,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  548 => 165,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 157,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  363 => 114,  345 => 135,  328 => 74,  325 => 129,  317 => 70,  303 => 122,  299 => 112,  261 => 50,  253 => 95,  231 => 33,  222 => 81,  210 => 75,  194 => 70,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 404,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 202,  456 => 273,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  371 => 144,  358 => 113,  349 => 103,  342 => 137,  339 => 100,  336 => 99,  329 => 131,  326 => 185,  311 => 89,  297 => 84,  289 => 113,  286 => 112,  263 => 124,  250 => 93,  247 => 66,  236 => 108,  233 => 87,  228 => 83,  200 => 72,  191 => 67,  175 => 65,  146 => 63,  344 => 97,  338 => 135,  335 => 134,  321 => 124,  312 => 124,  292 => 134,  259 => 70,  252 => 68,  215 => 78,  190 => 175,  184 => 47,  181 => 65,  178 => 66,  161 => 63,  90 => 27,  84 => 24,  114 => 46,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  544 => 172,  538 => 319,  536 => 161,  530 => 158,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  480 => 128,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  430 => 137,  426 => 102,  415 => 180,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  382 => 93,  380 => 160,  377 => 147,  374 => 114,  369 => 115,  357 => 139,  333 => 117,  307 => 66,  300 => 121,  291 => 169,  285 => 84,  282 => 79,  275 => 105,  272 => 158,  264 => 72,  226 => 84,  220 => 81,  214 => 98,  205 => 59,  197 => 71,  186 => 62,  172 => 64,  148 => 53,  127 => 63,  367 => 131,  361 => 146,  355 => 143,  352 => 138,  346 => 196,  343 => 91,  340 => 95,  330 => 87,  327 => 86,  320 => 127,  313 => 82,  310 => 81,  302 => 114,  296 => 111,  287 => 72,  283 => 106,  280 => 130,  277 => 78,  271 => 55,  265 => 125,  260 => 123,  249 => 89,  241 => 90,  223 => 58,  216 => 79,  185 => 66,  180 => 120,  174 => 64,  137 => 58,  23 => 1,  77 => 26,  12 => 34,  160 => 75,  152 => 92,  150 => 55,  20 => 1,  118 => 49,  129 => 56,  97 => 63,  70 => 19,  126 => 51,  113 => 48,  104 => 49,  153 => 56,  124 => 31,  110 => 41,  100 => 39,  65 => 29,  34 => 7,  81 => 23,  76 => 25,  58 => 19,  53 => 12,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 267,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 176,  403 => 121,  397 => 131,  394 => 168,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 100,  365 => 115,  351 => 141,  347 => 102,  332 => 75,  324 => 92,  322 => 107,  319 => 71,  315 => 125,  308 => 118,  304 => 174,  295 => 88,  293 => 109,  288 => 107,  278 => 106,  274 => 128,  268 => 126,  262 => 98,  257 => 149,  251 => 86,  245 => 88,  239 => 86,  234 => 84,  218 => 77,  192 => 87,  188 => 68,  177 => 63,  169 => 11,  140 => 58,  132 => 59,  128 => 58,  107 => 41,  61 => 17,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 139,  235 => 83,  230 => 105,  227 => 80,  224 => 102,  221 => 78,  219 => 100,  217 => 79,  208 => 74,  204 => 73,  179 => 14,  159 => 69,  143 => 29,  135 => 69,  119 => 40,  102 => 40,  71 => 30,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 38,  89 => 32,  85 => 34,  75 => 27,  68 => 27,  56 => 22,  87 => 34,  21 => 12,  26 => 12,  93 => 50,  88 => 32,  78 => 27,  46 => 13,  27 => 3,  44 => 11,  31 => 4,  28 => 3,  201 => 72,  196 => 71,  183 => 61,  171 => 63,  166 => 10,  163 => 69,  158 => 62,  156 => 58,  151 => 59,  142 => 50,  138 => 61,  136 => 60,  121 => 50,  117 => 46,  105 => 34,  91 => 33,  62 => 23,  49 => 14,  24 => 7,  25 => 12,  19 => 1,  79 => 31,  72 => 28,  69 => 24,  47 => 18,  40 => 15,  37 => 13,  22 => 3,  246 => 93,  157 => 41,  145 => 52,  139 => 59,  131 => 48,  123 => 42,  120 => 56,  115 => 49,  111 => 47,  108 => 47,  101 => 73,  98 => 35,  96 => 37,  83 => 33,  74 => 30,  66 => 24,  55 => 13,  52 => 12,  50 => 21,  43 => 12,  41 => 9,  35 => 6,  32 => 5,  29 => 5,  209 => 95,  203 => 73,  199 => 80,  193 => 70,  189 => 71,  187 => 86,  182 => 84,  176 => 63,  173 => 62,  168 => 61,  164 => 71,  162 => 59,  154 => 60,  149 => 64,  147 => 54,  144 => 67,  141 => 51,  133 => 49,  130 => 46,  125 => 51,  122 => 44,  116 => 39,  112 => 56,  109 => 55,  106 => 50,  103 => 28,  99 => 31,  95 => 35,  92 => 32,  86 => 28,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 22,  57 => 20,  54 => 20,  51 => 19,  48 => 12,  45 => 9,  42 => 10,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}