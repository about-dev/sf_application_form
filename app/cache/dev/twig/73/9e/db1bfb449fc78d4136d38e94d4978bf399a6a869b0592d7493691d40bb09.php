<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_739edb1bfb449fc78d4136d38e94d4978bf399a6a869b0592d7493691d40bb09 extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
        if (("normal" != $_position_)) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "\" class=\"sf-minitoolbar\">
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 7
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 8
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 11
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 12
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\" />
        </a>
    </div>
    <style>
        ";
            // line 22
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => $_position_, "floatable" => true)));
            // line 23
            echo "    </style>
    <div id=\"sfToolbarClearer-";
            // line 24
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "\" style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $_token_, "html", null, true);
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 28
        if (isset($context["templates"])) { $_templates_ = $context["templates"]; } else { $_templates_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_templates_);
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_template_, "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute($_profile_, "getcollector", array(0 => $_name_), "method"), "profiler_url" => $_profiler_url_, "token" => $this->getAttribute($_profile_, "token"), "name" => $_name_)), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 38
        if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
        if (("normal" != $_position_)) {
            // line 39
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 43
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \"></a>
    ";
        }
        // line 47
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,  549 => 162,  538 => 158,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  466 => 131,  460 => 130,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  355 => 95,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  189 => 61,  138 => 44,  131 => 42,  58 => 10,  312 => 96,  308 => 94,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  247 => 70,  204 => 69,  178 => 61,  158 => 56,  150 => 54,  147 => 51,  142 => 52,  130 => 42,  127 => 41,  112 => 32,  96 => 25,  232 => 72,  211 => 71,  196 => 64,  171 => 54,  146 => 41,  124 => 47,  104 => 37,  59 => 11,  1168 => 657,  1163 => 656,  1159 => 654,  1154 => 651,  1144 => 648,  1139 => 647,  1136 => 646,  1131 => 645,  1121 => 639,  1111 => 633,  1108 => 632,  1105 => 631,  1102 => 630,  1097 => 627,  1087 => 624,  1082 => 623,  1079 => 622,  1074 => 621,  1064 => 615,  1054 => 609,  1051 => 608,  1048 => 607,  1045 => 606,  1041 => 604,  1037 => 602,  1033 => 600,  1025 => 597,  1017 => 595,  1013 => 593,  1008 => 592,  1002 => 590,  997 => 589,  994 => 588,  989 => 587,  981 => 581,  978 => 580,  973 => 579,  963 => 573,  960 => 572,  957 => 571,  954 => 570,  950 => 568,  946 => 566,  940 => 562,  936 => 560,  929 => 558,  926 => 557,  917 => 552,  911 => 548,  907 => 546,  900 => 544,  897 => 543,  891 => 539,  888 => 538,  883 => 537,  873 => 531,  870 => 530,  867 => 529,  857 => 523,  853 => 521,  846 => 519,  834 => 513,  828 => 509,  824 => 507,  817 => 505,  814 => 504,  805 => 499,  795 => 493,  792 => 492,  789 => 491,  786 => 490,  781 => 487,  773 => 484,  766 => 482,  748 => 480,  745 => 479,  738 => 476,  734 => 474,  722 => 470,  714 => 467,  708 => 465,  705 => 464,  700 => 463,  690 => 457,  680 => 451,  676 => 449,  673 => 448,  669 => 446,  659 => 444,  656 => 443,  651 => 442,  644 => 440,  631 => 439,  619 => 436,  615 => 434,  604 => 432,  599 => 431,  588 => 430,  585 => 429,  581 => 427,  574 => 425,  571 => 424,  565 => 423,  554 => 419,  551 => 418,  546 => 417,  543 => 161,  530 => 155,  305 => 196,  293 => 92,  288 => 193,  260 => 182,  93 => 22,  49 => 9,  34 => 7,  31 => 4,  864 => 528,  861 => 491,  848 => 489,  843 => 518,  839 => 486,  826 => 485,  799 => 479,  796 => 478,  774 => 476,  756 => 475,  751 => 473,  746 => 472,  741 => 477,  736 => 470,  731 => 469,  726 => 472,  721 => 467,  718 => 468,  715 => 465,  697 => 464,  686 => 462,  670 => 456,  663 => 454,  658 => 453,  655 => 452,  653 => 451,  639 => 449,  634 => 446,  600 => 414,  579 => 411,  561 => 421,  558 => 409,  555 => 408,  547 => 406,  541 => 404,  269 => 136,  225 => 94,  208 => 70,  193 => 63,  190 => 85,  186 => 60,  180 => 59,  157 => 48,  154 => 74,  143 => 49,  129 => 36,  121 => 34,  97 => 35,  94 => 42,  41 => 6,  28 => 3,  476 => 141,  469 => 132,  465 => 136,  462 => 135,  453 => 134,  450 => 126,  432 => 129,  420 => 111,  416 => 110,  413 => 109,  409 => 122,  406 => 121,  398 => 119,  391 => 117,  387 => 116,  369 => 112,  357 => 111,  354 => 110,  348 => 91,  344 => 90,  324 => 100,  313 => 200,  298 => 93,  282 => 92,  250 => 80,  237 => 73,  230 => 75,  226 => 71,  206 => 72,  199 => 70,  188 => 68,  174 => 57,  170 => 55,  162 => 58,  155 => 55,  152 => 47,  118 => 36,  103 => 45,  99 => 25,  84 => 21,  64 => 11,  48 => 7,  39 => 8,  209 => 77,  205 => 76,  202 => 68,  183 => 62,  175 => 70,  149 => 42,  134 => 43,  109 => 31,  106 => 41,  100 => 27,  82 => 32,  65 => 22,  27 => 3,  95 => 24,  92 => 25,  86 => 21,  83 => 20,  76 => 17,  438 => 160,  435 => 159,  429 => 116,  426 => 127,  417 => 156,  412 => 155,  408 => 106,  405 => 152,  402 => 120,  399 => 150,  386 => 147,  383 => 146,  380 => 115,  374 => 113,  371 => 140,  367 => 139,  364 => 138,  353 => 131,  346 => 129,  343 => 128,  338 => 125,  325 => 119,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  286 => 101,  283 => 190,  278 => 97,  270 => 93,  264 => 74,  261 => 81,  254 => 86,  243 => 79,  240 => 78,  236 => 77,  233 => 76,  228 => 73,  222 => 76,  215 => 73,  212 => 66,  207 => 70,  201 => 66,  194 => 64,  191 => 56,  184 => 53,  173 => 58,  167 => 54,  164 => 77,  123 => 27,  119 => 48,  116 => 43,  113 => 23,  102 => 28,  85 => 28,  81 => 19,  77 => 26,  50 => 14,  36 => 5,  79 => 25,  74 => 14,  72 => 15,  69 => 14,  66 => 13,  60 => 25,  52 => 10,  47 => 9,  45 => 7,  40 => 6,  37 => 5,  22 => 2,  185 => 58,  177 => 82,  165 => 46,  159 => 45,  148 => 46,  137 => 37,  133 => 40,  120 => 38,  117 => 36,  115 => 32,  110 => 39,  107 => 38,  101 => 27,  90 => 29,  87 => 24,  80 => 27,  70 => 15,  67 => 15,  62 => 11,  57 => 24,  54 => 12,  51 => 12,  44 => 7,  42 => 8,  32 => 4,  29 => 3,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 196,  489 => 195,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  455 => 129,  447 => 172,  439 => 131,  431 => 164,  423 => 112,  415 => 156,  403 => 146,  396 => 149,  392 => 141,  388 => 140,  381 => 137,  377 => 135,  373 => 134,  366 => 131,  362 => 98,  359 => 97,  356 => 127,  350 => 130,  347 => 124,  335 => 122,  332 => 107,  329 => 120,  320 => 98,  317 => 115,  309 => 198,  306 => 110,  300 => 102,  297 => 105,  292 => 98,  285 => 90,  275 => 96,  272 => 188,  267 => 187,  257 => 79,  253 => 77,  249 => 76,  242 => 81,  238 => 79,  234 => 76,  227 => 78,  223 => 73,  219 => 67,  216 => 71,  213 => 70,  210 => 69,  203 => 71,  198 => 65,  195 => 65,  192 => 63,  187 => 62,  182 => 57,  179 => 71,  176 => 47,  169 => 80,  166 => 51,  163 => 50,  160 => 49,  153 => 39,  145 => 45,  140 => 38,  132 => 38,  128 => 37,  125 => 36,  122 => 37,  114 => 52,  111 => 32,  108 => 31,  105 => 31,  98 => 26,  91 => 41,  88 => 40,  78 => 17,  75 => 16,  71 => 24,  68 => 23,  63 => 17,  56 => 12,  46 => 11,  43 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
