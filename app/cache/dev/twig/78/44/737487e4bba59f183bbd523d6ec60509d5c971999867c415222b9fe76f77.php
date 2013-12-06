<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_7844737487e4bba59f183bbd523d6ec60509d5c971999867c415222b9fe76f77 extends Twig_Template
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
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').replaceWith(html); // replace the html
                Admin.setup_select2(jQuery('#field_container_";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 56
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 64
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 68
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 73
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 77
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 122,  316 => 121,  309 => 117,  305 => 115,  284 => 106,  281 => 105,  279 => 104,  237 => 86,  165 => 59,  676 => 401,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 261,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  422 => 250,  383 => 224,  366 => 210,  331 => 187,  298 => 173,  267 => 156,  242 => 140,  232 => 84,  256 => 96,  225 => 89,  213 => 126,  207 => 83,  155 => 66,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  548 => 165,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 234,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  363 => 114,  345 => 97,  328 => 74,  325 => 73,  317 => 70,  303 => 65,  299 => 112,  261 => 50,  253 => 95,  231 => 33,  222 => 81,  210 => 75,  194 => 87,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 404,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  371 => 113,  358 => 113,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 185,  311 => 89,  297 => 84,  289 => 59,  286 => 80,  263 => 104,  250 => 93,  247 => 66,  236 => 93,  233 => 62,  228 => 83,  200 => 55,  191 => 69,  175 => 76,  146 => 63,  344 => 97,  338 => 76,  335 => 188,  321 => 123,  312 => 177,  292 => 87,  259 => 70,  252 => 68,  215 => 78,  190 => 175,  184 => 47,  181 => 79,  178 => 119,  161 => 70,  90 => 27,  84 => 38,  114 => 71,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  544 => 172,  538 => 319,  536 => 161,  530 => 158,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  480 => 128,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  453 => 136,  449 => 123,  446 => 139,  441 => 105,  430 => 137,  426 => 102,  415 => 247,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  374 => 114,  369 => 115,  357 => 125,  333 => 117,  307 => 66,  300 => 113,  291 => 169,  285 => 84,  282 => 79,  275 => 103,  272 => 158,  264 => 72,  226 => 67,  220 => 80,  214 => 61,  205 => 59,  197 => 70,  186 => 82,  172 => 52,  148 => 63,  127 => 55,  367 => 131,  361 => 208,  355 => 112,  352 => 121,  346 => 196,  343 => 91,  340 => 95,  330 => 87,  327 => 86,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  296 => 111,  287 => 72,  283 => 166,  280 => 82,  277 => 78,  271 => 55,  265 => 99,  260 => 98,  249 => 98,  241 => 95,  223 => 58,  216 => 28,  185 => 68,  180 => 120,  174 => 64,  137 => 58,  23 => 18,  77 => 27,  12 => 34,  160 => 58,  152 => 92,  150 => 55,  20 => 11,  118 => 28,  129 => 24,  97 => 63,  70 => 29,  126 => 51,  113 => 41,  104 => 67,  153 => 56,  124 => 23,  110 => 77,  100 => 36,  65 => 29,  34 => 26,  81 => 26,  76 => 57,  58 => 22,  53 => 23,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 267,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 118,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 100,  365 => 115,  351 => 114,  347 => 102,  332 => 75,  324 => 92,  322 => 107,  319 => 71,  315 => 90,  308 => 100,  304 => 174,  295 => 88,  293 => 109,  288 => 107,  278 => 94,  274 => 77,  268 => 54,  262 => 63,  257 => 149,  251 => 86,  245 => 97,  239 => 94,  234 => 80,  218 => 77,  192 => 55,  188 => 174,  177 => 65,  169 => 73,  140 => 28,  132 => 57,  128 => 47,  107 => 24,  61 => 25,  273 => 96,  269 => 100,  254 => 68,  243 => 89,  240 => 86,  238 => 139,  235 => 83,  230 => 79,  227 => 134,  224 => 78,  221 => 88,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 69,  143 => 29,  135 => 81,  119 => 43,  102 => 37,  71 => 29,  67 => 28,  63 => 50,  59 => 49,  38 => 17,  94 => 38,  89 => 39,  85 => 34,  75 => 31,  68 => 30,  56 => 24,  87 => 17,  21 => 12,  26 => 20,  93 => 68,  88 => 60,  78 => 35,  46 => 35,  27 => 13,  44 => 19,  31 => 22,  28 => 13,  201 => 72,  196 => 52,  183 => 74,  171 => 63,  166 => 100,  163 => 69,  158 => 67,  156 => 57,  151 => 45,  142 => 60,  138 => 50,  136 => 39,  121 => 52,  117 => 47,  105 => 46,  91 => 85,  62 => 28,  49 => 18,  24 => 13,  25 => 12,  19 => 11,  79 => 31,  72 => 56,  69 => 50,  47 => 21,  40 => 19,  37 => 18,  22 => 12,  246 => 69,  157 => 41,  145 => 52,  139 => 31,  131 => 48,  123 => 50,  120 => 46,  115 => 49,  111 => 45,  108 => 39,  101 => 73,  98 => 43,  96 => 40,  83 => 82,  74 => 33,  66 => 23,  55 => 22,  52 => 21,  50 => 20,  43 => 20,  41 => 18,  35 => 16,  32 => 15,  29 => 21,  209 => 24,  203 => 122,  199 => 80,  193 => 51,  189 => 71,  187 => 75,  182 => 70,  176 => 65,  173 => 112,  168 => 60,  164 => 71,  162 => 57,  154 => 66,  149 => 64,  147 => 90,  144 => 62,  141 => 61,  133 => 49,  130 => 56,  125 => 45,  122 => 44,  116 => 43,  112 => 26,  109 => 69,  106 => 35,  103 => 45,  99 => 30,  95 => 42,  92 => 61,  86 => 64,  82 => 33,  80 => 29,  73 => 29,  64 => 184,  60 => 23,  57 => 22,  54 => 14,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 13,  36 => 17,  33 => 16,  30 => 15,);
    }
}
