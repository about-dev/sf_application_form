<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_afbd7d18579dd69c7e05091939b4be28f8fb2ac6691500388117c44f8f79dd22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\"></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => $_token_)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  34 => 5,  31 => 4,  864 => 492,  861 => 491,  848 => 489,  843 => 488,  839 => 486,  826 => 485,  799 => 479,  796 => 478,  774 => 476,  756 => 475,  751 => 473,  746 => 472,  741 => 471,  736 => 470,  731 => 469,  726 => 468,  721 => 467,  718 => 466,  715 => 465,  697 => 464,  686 => 462,  670 => 456,  663 => 454,  658 => 453,  655 => 452,  653 => 451,  639 => 449,  634 => 446,  600 => 414,  579 => 411,  561 => 410,  558 => 409,  555 => 408,  547 => 406,  541 => 404,  269 => 136,  225 => 94,  208 => 90,  193 => 86,  190 => 85,  186 => 84,  180 => 83,  157 => 75,  154 => 74,  143 => 71,  129 => 61,  121 => 57,  97 => 43,  94 => 42,  41 => 19,  28 => 3,  476 => 141,  469 => 138,  465 => 136,  462 => 135,  453 => 134,  450 => 133,  432 => 129,  420 => 125,  416 => 124,  413 => 123,  409 => 122,  406 => 121,  398 => 119,  391 => 117,  387 => 116,  369 => 112,  357 => 111,  354 => 110,  348 => 109,  344 => 108,  324 => 100,  313 => 96,  298 => 93,  282 => 92,  250 => 80,  237 => 77,  230 => 75,  226 => 74,  206 => 72,  199 => 70,  188 => 68,  174 => 57,  170 => 55,  162 => 51,  155 => 48,  152 => 47,  118 => 33,  103 => 45,  99 => 25,  84 => 19,  64 => 27,  48 => 11,  39 => 7,  209 => 77,  205 => 76,  202 => 75,  183 => 73,  175 => 70,  149 => 73,  134 => 51,  109 => 42,  106 => 41,  100 => 37,  82 => 32,  65 => 23,  27 => 3,  95 => 24,  92 => 32,  86 => 28,  83 => 27,  76 => 24,  438 => 160,  435 => 159,  429 => 128,  426 => 127,  417 => 156,  412 => 155,  408 => 153,  405 => 152,  402 => 120,  399 => 150,  386 => 147,  383 => 146,  380 => 115,  374 => 113,  371 => 140,  367 => 139,  364 => 138,  353 => 131,  346 => 129,  343 => 128,  338 => 125,  325 => 119,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  286 => 101,  283 => 100,  278 => 97,  270 => 93,  264 => 90,  261 => 89,  254 => 86,  243 => 79,  240 => 78,  236 => 77,  233 => 76,  228 => 73,  222 => 93,  215 => 67,  212 => 66,  207 => 63,  201 => 87,  194 => 69,  191 => 56,  184 => 53,  173 => 46,  167 => 54,  164 => 77,  123 => 27,  119 => 48,  116 => 47,  113 => 23,  102 => 20,  85 => 33,  81 => 16,  77 => 33,  50 => 14,  36 => 5,  79 => 25,  74 => 14,  72 => 13,  69 => 12,  66 => 18,  60 => 25,  52 => 13,  47 => 9,  45 => 10,  40 => 6,  37 => 5,  22 => 1,  185 => 58,  177 => 82,  165 => 46,  159 => 45,  148 => 46,  137 => 41,  133 => 40,  120 => 38,  117 => 37,  115 => 36,  110 => 30,  107 => 21,  101 => 29,  90 => 34,  87 => 24,  80 => 34,  70 => 20,  67 => 12,  62 => 16,  57 => 24,  54 => 12,  51 => 22,  44 => 7,  42 => 8,  32 => 6,  29 => 6,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 196,  489 => 195,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  455 => 176,  447 => 172,  439 => 131,  431 => 164,  423 => 126,  415 => 156,  403 => 146,  396 => 149,  392 => 141,  388 => 140,  381 => 137,  377 => 135,  373 => 134,  366 => 131,  362 => 129,  359 => 135,  356 => 127,  350 => 130,  347 => 124,  335 => 122,  332 => 107,  329 => 120,  320 => 98,  317 => 115,  309 => 111,  306 => 110,  300 => 102,  297 => 105,  292 => 98,  285 => 96,  275 => 96,  272 => 93,  267 => 91,  257 => 87,  253 => 85,  249 => 83,  242 => 81,  238 => 79,  234 => 76,  227 => 78,  223 => 73,  219 => 92,  216 => 71,  213 => 70,  210 => 69,  203 => 71,  198 => 58,  195 => 64,  192 => 63,  187 => 74,  182 => 57,  179 => 71,  176 => 47,  169 => 80,  166 => 56,  163 => 55,  160 => 54,  153 => 39,  145 => 45,  140 => 42,  132 => 38,  128 => 37,  125 => 36,  122 => 38,  114 => 52,  111 => 51,  108 => 31,  105 => 31,  98 => 27,  91 => 41,  88 => 40,  78 => 20,  75 => 19,  71 => 30,  68 => 24,  63 => 17,  56 => 16,  46 => 13,  43 => 12,  38 => 7,  35 => 6,  33 => 4,  30 => 3,);
    }
}
