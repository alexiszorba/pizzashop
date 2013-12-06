<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_396895ca89612aaf4fce72768b3fde735346963599fe77cfe36edaea8caa7fb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
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
        ob_start();
        // line 16
        if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 17
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                // line 18
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "value" => 0, "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <span class=\"label label-success\">";
                // line 19
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                echo "</span>
        </a>
    ";
            } else {
                // line 22
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "value" => 1, "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <span class=\"label label-important\">";
                // line 23
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                echo "</span>
        </a>
    ";
            }
        } else {
            // line 27
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                // line 28
                echo "        <span class=\"label label-success\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                echo "</span>
    ";
            } else {
                // line 30
                echo "        <span class=\"label label-important\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                echo "</span>
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 18,  33 => 17,  52 => 23,  23 => 12,  20 => 11,  34 => 16,  31 => 16,  29 => 15,  26 => 14,  22 => 12,  19 => 11,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  713 => 270,  708 => 267,  706 => 237,  702 => 236,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  669 => 221,  664 => 218,  658 => 216,  655 => 215,  652 => 214,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  613 => 204,  611 => 203,  608 => 202,  605 => 201,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  548 => 165,  542 => 163,  539 => 162,  526 => 157,  523 => 156,  512 => 152,  506 => 151,  498 => 149,  495 => 148,  491 => 147,  486 => 145,  483 => 144,  481 => 143,  478 => 142,  475 => 141,  468 => 140,  465 => 139,  462 => 138,  459 => 137,  450 => 135,  447 => 134,  444 => 132,  437 => 131,  434 => 130,  428 => 129,  425 => 128,  420 => 127,  417 => 126,  414 => 125,  408 => 124,  402 => 170,  400 => 161,  396 => 159,  393 => 158,  390 => 125,  384 => 122,  381 => 121,  376 => 119,  363 => 114,  358 => 113,  345 => 97,  338 => 76,  332 => 75,  328 => 74,  325 => 73,  319 => 71,  317 => 70,  312 => 68,  303 => 65,  299 => 64,  293 => 61,  289 => 59,  283 => 58,  271 => 55,  268 => 54,  261 => 50,  257 => 49,  253 => 47,  238 => 36,  236 => 35,  231 => 33,  227 => 32,  222 => 30,  219 => 29,  216 => 28,  210 => 22,  203 => 278,  194 => 177,  190 => 175,  188 => 174,  185 => 173,  183 => 121,  180 => 120,  178 => 119,  175 => 118,  173 => 112,  164 => 109,  152 => 99,  144 => 95,  141 => 94,  138 => 93,  121 => 91,  117 => 89,  114 => 88,  97 => 87,  94 => 86,  85 => 83,  74 => 78,  72 => 54,  69 => 53,  67 => 28,  58 => 22,  55 => 21,  53 => 20,  51 => 19,  49 => 18,  47 => 22,  41 => 19,  39 => 13,  35 => 20,  572 => 193,  561 => 174,  557 => 169,  549 => 174,  544 => 172,  538 => 170,  536 => 161,  530 => 158,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  504 => 158,  499 => 156,  492 => 154,  487 => 152,  480 => 151,  477 => 150,  474 => 149,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  457 => 131,  453 => 136,  449 => 123,  446 => 122,  441 => 105,  430 => 103,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  374 => 81,  369 => 115,  367 => 131,  361 => 127,  357 => 125,  355 => 112,  352 => 121,  347 => 118,  333 => 117,  324 => 116,  307 => 66,  302 => 114,  300 => 113,  296 => 111,  291 => 109,  288 => 108,  285 => 81,  282 => 80,  280 => 79,  275 => 57,  272 => 76,  269 => 75,  264 => 72,  249 => 70,  246 => 69,  243 => 68,  226 => 67,  223 => 66,  220 => 65,  214 => 61,  208 => 60,  205 => 59,  201 => 182,  197 => 56,  192 => 55,  186 => 54,  174 => 53,  172 => 52,  169 => 51,  166 => 110,  163 => 49,  160 => 48,  157 => 47,  154 => 46,  151 => 45,  148 => 97,  145 => 43,  142 => 42,  140 => 41,  136 => 39,  130 => 35,  127 => 34,  123 => 33,  119 => 31,  116 => 30,  108 => 144,  105 => 143,  102 => 142,  98 => 140,  96 => 139,  93 => 138,  91 => 85,  88 => 74,  86 => 65,  83 => 82,  81 => 30,  78 => 80,  73 => 27,  68 => 30,  65 => 25,  62 => 28,  59 => 27,  56 => 22,  50 => 20,  45 => 16,  43 => 15,  40 => 15,  37 => 21,);
    }
}
