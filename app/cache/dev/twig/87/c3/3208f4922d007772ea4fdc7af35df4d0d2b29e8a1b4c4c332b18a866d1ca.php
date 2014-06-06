<?php

/* @Security/Collector/security.html.twig */
class __TwigTemplate_87c33208f4922d007772ea4fdc7af35df4d0d2b29e8a1b4c4c332b18a866d1ca extends Twig_Template
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
        // line 4
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "user")) {
            // line 5
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["color_code"] = ((($this->getAttribute($_collector_, "enabled") && $this->getAttribute($_collector_, "authenticated"))) ? ("green") : ("yellow"));
            // line 6
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["authentication_color_code"] = ((($this->getAttribute($_collector_, "enabled") && $this->getAttribute($_collector_, "authenticated"))) ? ("green") : ("red"));
            // line 7
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["authentication_color_text"] = ((($this->getAttribute($_collector_, "enabled") && $this->getAttribute($_collector_, "authenticated"))) ? ("Yes") : ("No"));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["color_code"] = (($this->getAttribute($_collector_, "enabled")) ? ("red") : ("black"));
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "user")) {
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 15
            if (isset($context["color_code"])) { $_color_code_ = $context["color_code"]; } else { $_color_code_ = null; }
            echo twig_escape_filter($this->env, $_color_code_, "html", null, true);
            echo "\">";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "user"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 19
            if (isset($context["authentication_color_code"])) { $_authentication_color_code_ = $context["authentication_color_code"]; } else { $_authentication_color_code_ = null; }
            echo twig_escape_filter($this->env, $_authentication_color_code_, "html", null, true);
            echo "\">";
            if (isset($context["authentication_color_text"])) { $_authentication_color_text_ = $context["authentication_color_text"]; } else { $_authentication_color_text_ = null; }
            echo twig_escape_filter($this->env, $_authentication_color_text_, "html", null, true);
            echo "</span>
            </div>
            ";
            // line 21
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (($this->getAttribute($_collector_, "tokenClass") != null)) {
                // line 22
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token class</b>
                ";
                // line 24
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($_collector_, "tokenClass"));
                echo "
            </div>
            ";
            }
            // line 27
            echo "        ";
        } elseif ($this->getAttribute($_collector_, "enabled")) {
            // line 28
            echo "            You are not authenticated.
        ";
        } else {
            // line 30
            echo "            The security is disabled.
        ";
        }
        // line 32
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        <img width=\"24\" height=\"28\" alt=\"Security\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAC70lEQVR42u2V3UtTYRzHu+mFwCwK+gO6CEryPlg7yiYx50vDqUwjFIZDSYUk2ZTmCysHvg9ZVggOQZiRScsR4VwXTjEwdKZWk8o6gd5UOt0mbev7g/PAkLONIOkiBx+25/v89vuc85zn2Q5Fo9F95UDwnwhS5HK5TyqVRv8m1JN6k+AiC+fn54cwbgFNIrTQ/J9IqDcJJDGBHsgDgYBSq9W6ysvLPf39/SSUUU7zsQ1yc3MjmN90OBzfRkZG1umzQqGIxPSTkIBjgdDkaGNjoza2kcFgUCE/QvMsq6io2PV6vQu1tbV8Xl7etkql2qqvr/+MbDE/Pz8s9OP2Cjhwwmw29+4R3Kec1WZnZ4fn5uamc3Jyttra2qbH8ero6JgdHh5+CvFHq9X6JZHgzODgoCVW0NPTY0N+ltU2Nzdv4GqXsYSrPp+vDw80aLFYxru6uhyQ/rDb7a8TCVJDodB1jUazTVlxcXGQ5/mbyE+z2u7u7veY38BVT3Z2djopm5qa6isrK/tQWVn5qb29fSGR4DC4PDAwMEsZHuArjGnyGKutq6v7ajQaF6urq9/MzMz0QuSemJiwQDwGkR0POhhXgILjNTU1TaWlpTxlOp1uyWQyaUjMajMzM8Nut/tJQUHBOpZppbCwkM/KytrBznuL9xDVxBMo8KXHYnu6qKjIivmrbIy67x6Px4Yd58W672ApfzY0NCyNjo7OZmRkiAv8fr+O47iwmABXtoXaG3uykF6vX7bZbF6cgZWqqiqezYkKcNtmjO+CF2AyhufgjsvlMiU7vXEF+4C4ALf9CwdrlVAqlcFkTdRqdQSHLUDgBEeSCrArAsiGwENs0XfJBE6ncxm1D8Aj/B6tigkkJSUlmxSwLYhMDeRsyyUCd+lHrWxtbe2aTCbbZTn1ZD92F0Cr8GBfgnsgDZwDt8EzMBmHMXBLqD0PDMAh9Gql3iRIESQSIAXp4CRIBZeEjIvDFZAm1J4C6UK9ROiZcvCn/+8FvwHtDdJEaRY+oQAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 35
        if (isset($context["color_code"])) { $_color_code_ = $context["color_code"]; } else { $_color_code_ = null; }
        echo twig_escape_filter($this->env, $_color_code_, "html", null, true);
        echo "\"></span>
        ";
        // line 36
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "user")) {
            echo "<div class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "user"), "html", null, true);
            echo "</div>";
        }
        // line 37
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "    ";
        if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAADqUlEQVR42u2YXUiTYRTHs6wbg4Toru4iI7qIrgoFv3XOj0BRpoE4U5n4AV6UOg0UhhaKwvLCr2ZeTPwIsbL50Yb5Oc0hrFU2WY55sUJB2wK3qbn+J15jvJhvay9S4MWfPe95znme357znPOOHXO73f+FjkD/OdDQ0FBf5DPo6bi4OC0Wch+WaD/a11vQyxR82KJ9vQUN2QvWarUWPE9CY4xeu1yucfqkZ5Ymyd8H0BBvQcM8gqsgAdmgqJaWlgdRUVEOgUBgLy4uHpqamhLDHsHMC8h/PwihUOiuqKhwNTU12eVyuV0mkzkSEhJ2WaBhvoAKIH/Gfi45Ofmj5+KJiYnvYQ+kwmD8BGzI0tLSzfX19ZmJiQlNa2vrbG1traGnp2fObDbPNTY22vkAZQdfjY2NdbJBpqenKWV+BOsZS6qsrLSvra31ZmVlLdFzUlKSDRnZonF0dLQTV2WEfPgGvYmUu9igSL+ITpMNKhKJtm02mzI9Pd2CNNt0Ol2P1Wp9otfrB1Qqlaazs3M4LS3ts8lkGuQb9EZeXt4q6+5tOxwOIeZOskGbm5uNdXV1wzQeGBgYWlhYaKD7nZGRYYJfaUFBwWJ4ePgOxg/xucsn6BW1Wv0Ui/4Cxam8oS8AHWeDjoyMvMzOzjbjNB2wS4uKijRkl0gkeqfTmY5r5ED/dNjtdhmzVyhfoGehXJziDtOkv+P5LnSeINmg/f39zwC1kpqa+hX2O4A2kl2j0SgxV0vjhoYGPb5sH9+p99/Y2IiLiYn5CYq79w22WOjUfqBVVVU6hUIxRWnFPb4Hyfv6+sbb29ubl5eXJR0dHaMGg0GBzsFbMfnV19efEYvFtwGn25sjgJycnOdQJHxOsEGR2q2lpaXHiLNS3y0pKXm1V/2ZmZm6wsLCWap8vtpTRHV19XUs+OWgtwpAPtTU1FyCf7inPTc314gsPAKkiR0THx+/ib76Dmvv8gF6KyUlRUdjLsFvBv5JbDtOdBG9VI6qV7e1tVm6u7st8/Pzc0aj8YVUKl2h4uQDVEIt5E9AqYrhn7ffHNqSKz8/34BTny0rK3uLwvoUGRm5zdsrtKurq436HDQKjR2gYahGqVS2UJwX8h30b3UEygXK/m3K9bvTy1j+QfE26cVcIonGHHAcsfyABqNCV3+z2AUSF5i3sbQf7estaBB0H1J5VPUgVA5dZFTO2MY4xR2rYvYL8hY0gAkKhsI8dA0KJNGYsXGLOzaY2S/g6A+II1CWfgAh4q3QhpOWjAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Security</strong>
</span>
";
    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        // line 49
        echo "    <h2>Security</h2>
    ";
        // line 50
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "user")) {
            // line 51
            echo "        <table>
            <tr>
                <th>Username</th>
                <td>";
            // line 54
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "user"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Authenticated?</th>
                <td>
                    ";
            // line 59
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "authenticated")) {
                // line 60
                echo "                        yes
                    ";
            } else {
                // line 62
                echo "                        no ";
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                if ((!twig_length_filter($this->env, $this->getAttribute($_collector_, "roles")))) {
                    echo "<em>(probably because the user has no roles)</em>";
                }
                // line 63
                echo "                    ";
            }
            // line 64
            echo "                </td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
            // line 68
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($_collector_, "roles")), "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 70
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (($this->getAttribute($_collector_, "tokenClass") != null)) {
                // line 71
                echo "            <tr>
                <th>Token class</th>
                <td>";
                // line 73
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "tokenClass"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            // line 76
            echo "        </table>
    ";
        } elseif ($this->getAttribute($_collector_, "enabled")) {
            // line 78
            echo "        <p>
            <em>No token</em>
        </p>
    ";
        } else {
            // line 82
            echo "        <p>
            <em>The security component is disabled</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 82,  211 => 71,  196 => 64,  171 => 54,  146 => 41,  124 => 35,  104 => 27,  59 => 11,  1168 => 657,  1163 => 656,  1159 => 654,  1154 => 651,  1144 => 648,  1139 => 647,  1136 => 646,  1131 => 645,  1121 => 639,  1111 => 633,  1108 => 632,  1105 => 631,  1102 => 630,  1097 => 627,  1087 => 624,  1082 => 623,  1079 => 622,  1074 => 621,  1064 => 615,  1054 => 609,  1051 => 608,  1048 => 607,  1045 => 606,  1041 => 604,  1037 => 602,  1033 => 600,  1025 => 597,  1017 => 595,  1013 => 593,  1008 => 592,  1002 => 590,  997 => 589,  994 => 588,  989 => 587,  981 => 581,  978 => 580,  973 => 579,  963 => 573,  960 => 572,  957 => 571,  954 => 570,  950 => 568,  946 => 566,  940 => 562,  936 => 560,  929 => 558,  926 => 557,  917 => 552,  911 => 548,  907 => 546,  900 => 544,  897 => 543,  891 => 539,  888 => 538,  883 => 537,  873 => 531,  870 => 530,  867 => 529,  857 => 523,  853 => 521,  846 => 519,  834 => 513,  828 => 509,  824 => 507,  817 => 505,  814 => 504,  805 => 499,  795 => 493,  792 => 492,  789 => 491,  786 => 490,  781 => 487,  773 => 484,  766 => 482,  748 => 480,  745 => 479,  738 => 476,  734 => 474,  722 => 470,  714 => 467,  708 => 465,  705 => 464,  700 => 463,  690 => 457,  680 => 451,  676 => 449,  673 => 448,  669 => 446,  659 => 444,  656 => 443,  651 => 442,  644 => 440,  631 => 439,  619 => 436,  615 => 434,  604 => 432,  599 => 431,  588 => 430,  585 => 429,  581 => 427,  574 => 425,  571 => 424,  565 => 423,  554 => 419,  551 => 418,  546 => 417,  543 => 416,  530 => 415,  305 => 196,  293 => 194,  288 => 193,  260 => 182,  93 => 22,  49 => 8,  34 => 5,  31 => 4,  864 => 528,  861 => 491,  848 => 489,  843 => 518,  839 => 486,  826 => 485,  799 => 479,  796 => 478,  774 => 476,  756 => 475,  751 => 473,  746 => 472,  741 => 477,  736 => 470,  731 => 469,  726 => 472,  721 => 467,  718 => 468,  715 => 465,  697 => 464,  686 => 462,  670 => 456,  663 => 454,  658 => 453,  655 => 452,  653 => 451,  639 => 449,  634 => 446,  600 => 414,  579 => 411,  561 => 421,  558 => 409,  555 => 408,  547 => 406,  541 => 404,  269 => 136,  225 => 94,  208 => 70,  193 => 63,  190 => 85,  186 => 84,  180 => 59,  157 => 48,  154 => 74,  143 => 71,  129 => 36,  121 => 34,  97 => 24,  94 => 42,  41 => 6,  28 => 3,  476 => 141,  469 => 138,  465 => 136,  462 => 135,  453 => 134,  450 => 133,  432 => 129,  420 => 125,  416 => 124,  413 => 123,  409 => 122,  406 => 121,  398 => 119,  391 => 117,  387 => 116,  369 => 112,  357 => 111,  354 => 110,  348 => 109,  344 => 108,  324 => 100,  313 => 200,  298 => 93,  282 => 92,  250 => 80,  237 => 77,  230 => 75,  226 => 78,  206 => 72,  199 => 70,  188 => 68,  174 => 57,  170 => 55,  162 => 51,  155 => 48,  152 => 47,  118 => 33,  103 => 45,  99 => 25,  84 => 19,  64 => 11,  48 => 11,  39 => 7,  209 => 77,  205 => 76,  202 => 68,  183 => 60,  175 => 70,  149 => 42,  134 => 51,  109 => 42,  106 => 41,  100 => 37,  82 => 32,  65 => 23,  27 => 3,  95 => 24,  92 => 32,  86 => 21,  83 => 20,  76 => 24,  438 => 160,  435 => 159,  429 => 128,  426 => 127,  417 => 156,  412 => 155,  408 => 153,  405 => 152,  402 => 120,  399 => 150,  386 => 147,  383 => 146,  380 => 115,  374 => 113,  371 => 140,  367 => 139,  364 => 138,  353 => 131,  346 => 129,  343 => 128,  338 => 125,  325 => 119,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  286 => 101,  283 => 190,  278 => 97,  270 => 93,  264 => 90,  261 => 89,  254 => 86,  243 => 79,  240 => 78,  236 => 77,  233 => 76,  228 => 73,  222 => 76,  215 => 73,  212 => 66,  207 => 63,  201 => 87,  194 => 69,  191 => 56,  184 => 53,  173 => 46,  167 => 54,  164 => 77,  123 => 27,  119 => 48,  116 => 47,  113 => 23,  102 => 20,  85 => 33,  81 => 19,  77 => 33,  50 => 14,  36 => 5,  79 => 25,  74 => 14,  72 => 13,  69 => 12,  66 => 13,  60 => 25,  52 => 9,  47 => 9,  45 => 7,  40 => 6,  37 => 5,  22 => 1,  185 => 58,  177 => 82,  165 => 46,  159 => 45,  148 => 46,  137 => 37,  133 => 40,  120 => 38,  117 => 37,  115 => 32,  110 => 30,  107 => 28,  101 => 27,  90 => 21,  87 => 24,  80 => 34,  70 => 15,  67 => 12,  62 => 12,  57 => 24,  54 => 12,  51 => 22,  44 => 7,  42 => 8,  32 => 5,  29 => 6,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 196,  489 => 195,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  455 => 176,  447 => 172,  439 => 131,  431 => 164,  423 => 126,  415 => 156,  403 => 146,  396 => 149,  392 => 141,  388 => 140,  381 => 137,  377 => 135,  373 => 134,  366 => 131,  362 => 129,  359 => 135,  356 => 127,  350 => 130,  347 => 124,  335 => 122,  332 => 107,  329 => 120,  320 => 98,  317 => 115,  309 => 198,  306 => 110,  300 => 102,  297 => 105,  292 => 98,  285 => 96,  275 => 96,  272 => 188,  267 => 187,  257 => 181,  253 => 85,  249 => 83,  242 => 81,  238 => 79,  234 => 76,  227 => 78,  223 => 73,  219 => 92,  216 => 71,  213 => 70,  210 => 69,  203 => 71,  198 => 58,  195 => 64,  192 => 63,  187 => 62,  182 => 57,  179 => 71,  176 => 47,  169 => 80,  166 => 51,  163 => 50,  160 => 49,  153 => 39,  145 => 45,  140 => 38,  132 => 38,  128 => 37,  125 => 36,  122 => 38,  114 => 52,  111 => 30,  108 => 31,  105 => 31,  98 => 26,  91 => 41,  88 => 40,  78 => 17,  75 => 16,  71 => 30,  68 => 24,  63 => 17,  56 => 10,  46 => 13,  43 => 12,  38 => 7,  35 => 6,  33 => 4,  30 => 3,);
    }
}
