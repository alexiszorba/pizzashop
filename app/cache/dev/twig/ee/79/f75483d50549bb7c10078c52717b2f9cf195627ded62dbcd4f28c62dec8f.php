<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_ee79f75483d50549bb7c10078c52717b2f9cf195627ded62dbcd4f28c62dec8f extends Twig_Template
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
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  349 => 323,  24 => 3,  19 => 1,  249 => 98,  236 => 93,  225 => 89,  183 => 74,  160 => 68,  146 => 63,  137 => 60,  126 => 51,  97 => 39,  77 => 28,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 162,  463 => 160,  454 => 158,  450 => 157,  447 => 156,  445 => 155,  440 => 153,  437 => 152,  433 => 151,  423 => 143,  419 => 141,  417 => 140,  412 => 139,  403 => 135,  397 => 131,  391 => 129,  384 => 125,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  347 => 322,  322 => 107,  319 => 106,  308 => 100,  304 => 99,  295 => 98,  268 => 90,  257 => 87,  251 => 86,  245 => 97,  239 => 94,  234 => 80,  218 => 77,  192 => 75,  177 => 65,  169 => 71,  132 => 51,  128 => 49,  107 => 36,  93 => 38,  273 => 96,  254 => 92,  240 => 86,  238 => 85,  230 => 79,  221 => 88,  219 => 76,  217 => 87,  204 => 72,  179 => 73,  171 => 61,  159 => 61,  138 => 54,  135 => 53,  78 => 21,  71 => 17,  209 => 76,  193 => 73,  149 => 64,  133 => 42,  103 => 32,  95 => 39,  86 => 33,  57 => 11,  48 => 8,  51 => 10,  34 => 4,  31 => 3,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  199 => 80,  196 => 92,  188 => 74,  182 => 70,  173 => 65,  68 => 22,  62 => 27,  28 => 3,  357 => 123,  344 => 321,  341 => 118,  332 => 110,  327 => 114,  324 => 108,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  263 => 104,  258 => 94,  243 => 88,  231 => 83,  224 => 78,  212 => 78,  202 => 94,  190 => 76,  187 => 75,  174 => 65,  143 => 56,  136 => 71,  122 => 43,  117 => 47,  112 => 35,  104 => 32,  85 => 25,  75 => 19,  58 => 25,  44 => 10,  161 => 63,  158 => 67,  154 => 58,  151 => 59,  140 => 55,  125 => 44,  121 => 50,  118 => 49,  100 => 40,  87 => 25,  49 => 14,  46 => 12,  27 => 3,  91 => 27,  88 => 25,  63 => 15,  389 => 128,  386 => 159,  378 => 121,  371 => 156,  367 => 155,  363 => 126,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  309 => 108,  307 => 128,  302 => 281,  296 => 121,  293 => 97,  290 => 119,  288 => 95,  283 => 100,  281 => 114,  276 => 111,  274 => 93,  269 => 94,  265 => 96,  259 => 103,  255 => 93,  253 => 100,  235 => 83,  232 => 88,  227 => 81,  222 => 83,  210 => 77,  208 => 73,  189 => 71,  184 => 63,  175 => 72,  170 => 84,  166 => 70,  163 => 69,  155 => 66,  152 => 65,  144 => 62,  127 => 35,  109 => 44,  94 => 38,  82 => 22,  76 => 28,  61 => 23,  39 => 6,  36 => 7,  79 => 21,  72 => 27,  69 => 26,  54 => 14,  47 => 9,  42 => 11,  40 => 8,  37 => 10,  22 => 2,  164 => 59,  157 => 56,  145 => 74,  139 => 49,  131 => 52,  120 => 31,  115 => 39,  111 => 45,  108 => 47,  106 => 33,  101 => 43,  98 => 31,  92 => 27,  83 => 35,  80 => 29,  74 => 14,  66 => 11,  60 => 13,  55 => 24,  52 => 12,  50 => 10,  41 => 19,  32 => 7,  29 => 3,  462 => 202,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 138,  401 => 172,  394 => 130,  387 => 164,  380 => 158,  373 => 156,  361 => 333,  355 => 150,  351 => 114,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 104,  312 => 109,  303 => 106,  300 => 280,  298 => 120,  289 => 113,  286 => 112,  278 => 94,  275 => 105,  270 => 102,  267 => 101,  262 => 89,  256 => 102,  248 => 97,  246 => 90,  241 => 95,  233 => 87,  229 => 87,  226 => 84,  220 => 81,  216 => 79,  213 => 86,  207 => 83,  203 => 82,  200 => 72,  197 => 79,  194 => 68,  191 => 76,  185 => 74,  181 => 65,  178 => 66,  176 => 64,  172 => 64,  168 => 62,  165 => 83,  162 => 59,  156 => 62,  153 => 77,  150 => 55,  147 => 58,  141 => 61,  134 => 54,  130 => 41,  123 => 50,  119 => 42,  116 => 41,  113 => 48,  105 => 25,  102 => 41,  99 => 31,  96 => 37,  90 => 37,  84 => 40,  81 => 23,  73 => 19,  70 => 15,  67 => 15,  64 => 24,  59 => 22,  53 => 12,  45 => 8,  43 => 12,  38 => 6,  35 => 5,  33 => 6,  30 => 3,);
    }
}
