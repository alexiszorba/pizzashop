<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_cf8856c7bff99078e258705e7829df060f33a8cef86fa4d207b0003444392ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"sonata-ba-delete\">
        <h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_batch_confirmation", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

        ";
        // line 27
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "all_elements")) {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        ";
        } else {
            // line 30
            echo "            ";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx")), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx"))), "SonataAdminBundle");
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        <div class=\"well well-small form-actions\">
            <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters"))), "method"), "html", null, true);
        echo "\" method=\"POST\" >
                <input type=\"hidden\" name=\"confirmation\" value=\"ok\" />
                <input type=\"hidden\" name=\"data\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        echo "\" />
                <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div style=\"display: none\">
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </div>

                <button type=\"submit\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i> ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                ";
        // line 45
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 46
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                    <a class=\"btn btn-success\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                        <i class=\"icon-th-list icon-white\"></i> ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 52
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  572 => 180,  561 => 178,  557 => 177,  549 => 174,  544 => 172,  538 => 170,  536 => 169,  530 => 165,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  504 => 158,  499 => 156,  492 => 154,  487 => 152,  480 => 151,  477 => 150,  474 => 149,  470 => 135,  460 => 132,  457 => 131,  453 => 124,  449 => 123,  446 => 122,  441 => 105,  430 => 103,  426 => 102,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  374 => 81,  369 => 136,  357 => 125,  333 => 117,  307 => 115,  300 => 113,  291 => 109,  285 => 81,  282 => 80,  275 => 77,  272 => 76,  264 => 72,  226 => 67,  220 => 65,  214 => 61,  205 => 59,  197 => 56,  186 => 54,  172 => 52,  148 => 44,  127 => 34,  367 => 131,  361 => 127,  355 => 122,  352 => 121,  346 => 92,  343 => 91,  340 => 90,  330 => 87,  327 => 86,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  296 => 111,  287 => 72,  283 => 70,  280 => 79,  277 => 68,  271 => 66,  265 => 64,  260 => 62,  249 => 70,  241 => 31,  223 => 66,  216 => 25,  185 => 20,  180 => 104,  174 => 53,  137 => 47,  77 => 13,  23 => 11,  84 => 36,  12 => 34,  160 => 48,  152 => 63,  150 => 58,  20 => 11,  118 => 46,  129 => 42,  97 => 31,  70 => 23,  126 => 55,  113 => 48,  104 => 42,  153 => 48,  124 => 43,  110 => 36,  100 => 43,  65 => 25,  34 => 16,  81 => 30,  76 => 32,  58 => 22,  53 => 24,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 158,  450 => 157,  447 => 156,  445 => 155,  440 => 153,  437 => 152,  433 => 151,  423 => 143,  419 => 98,  417 => 140,  412 => 139,  408 => 138,  403 => 135,  397 => 131,  394 => 130,  391 => 129,  389 => 128,  384 => 125,  378 => 121,  375 => 120,  372 => 119,  370 => 100,  365 => 115,  351 => 114,  347 => 118,  332 => 88,  324 => 116,  322 => 107,  319 => 106,  315 => 83,  308 => 100,  304 => 79,  295 => 98,  293 => 75,  288 => 108,  278 => 94,  274 => 93,  268 => 90,  262 => 63,  257 => 61,  251 => 86,  245 => 83,  239 => 82,  234 => 80,  218 => 77,  192 => 55,  188 => 21,  177 => 65,  169 => 51,  140 => 41,  132 => 44,  128 => 44,  107 => 46,  61 => 27,  273 => 96,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 85,  235 => 83,  230 => 79,  227 => 81,  224 => 78,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 72,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 142,  71 => 30,  67 => 30,  63 => 28,  59 => 26,  38 => 14,  94 => 40,  89 => 17,  85 => 37,  75 => 32,  68 => 26,  56 => 25,  87 => 29,  21 => 11,  26 => 12,  93 => 138,  88 => 37,  78 => 29,  46 => 9,  27 => 14,  44 => 21,  31 => 15,  28 => 14,  201 => 57,  196 => 90,  183 => 82,  171 => 61,  166 => 50,  163 => 49,  158 => 67,  156 => 66,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 42,  117 => 49,  105 => 45,  91 => 75,  62 => 27,  49 => 23,  24 => 12,  25 => 13,  19 => 11,  79 => 34,  72 => 31,  69 => 30,  47 => 22,  40 => 13,  37 => 18,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 59,  131 => 45,  123 => 52,  120 => 48,  115 => 40,  111 => 30,  108 => 144,  101 => 37,  98 => 140,  96 => 139,  83 => 15,  74 => 19,  66 => 28,  55 => 25,  52 => 24,  50 => 23,  43 => 20,  41 => 19,  35 => 20,  32 => 3,  29 => 14,  209 => 24,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 70,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 57,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 35,  125 => 40,  122 => 43,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 23,  95 => 19,  92 => 39,  86 => 65,  82 => 36,  80 => 14,  73 => 27,  64 => 17,  60 => 19,  57 => 26,  54 => 26,  51 => 29,  48 => 15,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
