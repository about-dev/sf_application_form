<?php

/* @WebProfiler/Profiler/base.html.twig */
class __TwigTemplate_9f07db8104df6a4a932080c393193dc2761d77b1d3d556b80d811ef0a7a62ba5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"robots\" content=\"noindex,nofollow\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/ico;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABMLAAATCwAAAAAAAAAAAAAAAAAAAAAAADIvMQAyLzEIMi8xSzEuMKoyLzHkMi8x/TIvMf0yLzHlMi8xrDIvMU4yLzEJMi8xAAAAAAAAAAAAAAAAADIvMQAyLzEYMS4wkTMwMu45Njj/MS4w/zEuMP8yLzH/Mi8x/zIvMf8yLzHvMi8xlDIvMRkyLzEAAAAAADIvMQAyLzEXMS4wrTk2OPyVk5T7kI6P/nl3ef8+Oz3/MS4w/zIvMf8yLzH/Mi8x/zIvMf4yLzGxMi8xGjIvMQAyLzEGMi8xkDEuMP4/PD79wcDA+oB+gP6Ni4z/paOk/zk2OP8xLjD/Mi8x/zIvMf8yLzH/Mi8x/zIvMZQyLzEIMi8xSTIvMewyLzH/MS4w/z06PP81MjT+TktN/93c3f97eXv/MC0v/zIvMf8yLzH/Mi8x/zIvMf8yLzHuMi8xTzIvMaUyLzH/Mi8x/0lHSf9kYmP/XFpb/zs4Ov/DwsL+ycjI/zs4Ov8xLjD/Mi8x/zIvMf8yLzH/Mi8x/zIvMawyLzHfMC0v/1tYWv+opqf/YV5g/8bFxf96eHn+m5qb/u7u7v9WVFX/MC0v/zIvMf8yLzH/Mi8x/zIvMf8yLzHkMi8x+jAtL/9iYGH/mZiZ/2dlZv/p6On/oJ+g/np4ev/6+vr/dXN1/y0qLP8xLjD/Mi8x/zIvMf8yLzH/Mi8x/DIvMfoyLzH/MzAy/0A+QP7JyMj85eXl/1tYWv9XVVf/8fDx/6qpqv9ZV1j/Q0BC/zIvMf8yLzH/Mi8x/zIvMfwyLzHeMi8x/zEuMP8/PD762dnZ9JWTlP81MjT/ZmRm/+Dg4P/DwsP/YV5g/6Wkpf9BPkD/MS4w/zIvMf8yLzHjMi8xozIvMf8yLzH/Mi8x/nZ0dv2amJn4dXN0+V5bXf+Pjo//0tLS/0hFR/9vbG7/Ozg6/zEuMP8yLzH/Mi8xqTIvMUcyLzHrMi8x/zIvMf8xLjD/Ozg6/Do3OfwwLS//REFD/728vP9nZWb/TktN/4mIif05Nzn/Mi8x7jMwMkwyLzEGMi8xjDIvMf4yLzH/Mi8x/zIvMf8yLzH/Mi8x/zAtL/9XVFb/goGC+Hx6e+6qqanwOzg6/DMwMpJDQEIIMi8xADIvMRUyLzGrMi8x/jIvMf8yLzH/Mi8x/zIvMf8yLzH/MS4w/zg2N/xBPkD3OTY4/DIvMa8yLzEYMi8xAAAAAAAyLzEAMi8xGDIvMY0yLzHqMi8x/zIvMf8yLzH/Mi8x/zIvMf8yLzH/MS4w7DEuMJEyLzEaMi8xAAAAAAAAAAAAAAAAADIvMQAyLzEGMi8xQzIvMZ4yLzHdMi8x+jIvMfoyLzHeMi8xoDIvMUUyLzEGMi8xAAAAAAAAAAAA4AcAAMADAACAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIABAADAAwAA4AcAAA==\">
        <style>
            ";
        // line 9
        $this->env->loadTemplate("@WebProfiler/Profiler/body.css.twig")->display($context);
        // line 10
        echo "        </style>
        ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo "        <style>
            ";
        // line 17
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => "top", "floatable" => false)));
        // line 18
        echo "        </style>
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Profiler";
    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        // line 12
        echo "            <style>
                ";
        // line 13
        $this->env->loadTemplate("@WebProfiler/Profiler/profiler.css.twig")->display($context);
        // line 14
        echo "            </style>
        ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  74 => 14,  72 => 13,  69 => 12,  66 => 11,  60 => 6,  52 => 21,  47 => 18,  45 => 17,  40 => 11,  37 => 10,  22 => 1,  185 => 58,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  137 => 41,  133 => 40,  120 => 38,  117 => 37,  115 => 36,  110 => 33,  107 => 32,  101 => 29,  90 => 25,  87 => 24,  80 => 22,  70 => 20,  67 => 19,  62 => 18,  57 => 16,  54 => 22,  51 => 14,  44 => 9,  42 => 16,  32 => 4,  29 => 6,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 196,  489 => 195,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  455 => 176,  447 => 172,  439 => 168,  431 => 164,  423 => 160,  415 => 156,  403 => 146,  396 => 143,  392 => 141,  388 => 140,  381 => 137,  377 => 135,  373 => 134,  366 => 131,  362 => 129,  359 => 128,  356 => 127,  350 => 125,  347 => 124,  335 => 122,  332 => 121,  329 => 120,  320 => 113,  317 => 112,  309 => 106,  306 => 105,  300 => 102,  297 => 101,  292 => 98,  285 => 96,  275 => 94,  272 => 93,  267 => 32,  257 => 87,  253 => 85,  249 => 84,  242 => 81,  238 => 79,  234 => 78,  227 => 75,  223 => 73,  219 => 72,  216 => 71,  213 => 70,  210 => 69,  203 => 66,  198 => 65,  195 => 64,  192 => 63,  187 => 62,  182 => 57,  179 => 60,  176 => 59,  169 => 58,  166 => 56,  163 => 55,  160 => 54,  153 => 51,  145 => 47,  140 => 46,  132 => 42,  128 => 40,  125 => 39,  122 => 38,  114 => 34,  111 => 33,  108 => 31,  105 => 31,  98 => 27,  91 => 24,  88 => 23,  78 => 20,  75 => 19,  71 => 18,  68 => 17,  63 => 14,  56 => 12,  46 => 10,  43 => 9,  38 => 6,  35 => 9,  33 => 4,  30 => 3,);
    }
}
