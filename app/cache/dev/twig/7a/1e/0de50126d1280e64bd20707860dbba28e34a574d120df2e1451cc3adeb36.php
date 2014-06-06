<?php

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_7a1e0de50126d1280e64bd20707860dbba28e34a574d120df2e1451cc3adeb36 extends Twig_Template
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
        ob_start();
        // line 5
        echo "        ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($this->getAttribute($_collector_, "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 6
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getAttribute($_collector_, "controller"), "file"), $this->getAttribute($this->getAttribute($_collector_, "controller"), "line"));
            // line 7
            echo "            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getAttribute($_collector_, "controller"), "class"));
            echo "</span>
            <span class=\"sf-toolbar-info-method\" onclick=\"";
            // line 8
            if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
            if ($_link_) {
                echo "window.location='";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $_link_, "js"), "html", null, true);
                echo "';window.event.stopPropagation();return false;";
            }
            echo "\">
                ";
            // line 9
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "controller"), "method"), "html", null, true);
            echo "
            </span>
        ";
        } else {
            // line 12
            echo "            <span class=\"sf-toolbar-info-class\">";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "controller"), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context["request_status_code_color"] = (((400 > $this->getAttribute($_collector_, "statuscode"))) ? ((((200 == $this->getAttribute($_collector_, "statuscode"))) ? ("green") : ("yellow"))) : ("red"));
        // line 16
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context["request_route"] = (($this->getAttribute($_collector_, "route")) ? ($this->getAttribute($_collector_, "route")) : ("NONE"));
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <img width=\"28\" height=\"28\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 19
        if (isset($context["request_status_code_color"])) { $_request_status_code_color_ = $context["request_status_code_color"]; } else { $_request_status_code_color_ = null; }
        echo twig_escape_filter($this->env, $_request_status_code_color_, "html", null, true);
        echo "\" title=\"";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "statustext"), "html", null, true);
        echo "\">";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "statuscode"), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
        // line 20
        if (isset($context["request_handler"])) { $_request_handler_ = $context["request_handler"]; } else { $_request_handler_ = null; }
        echo twig_escape_filter($this->env, $_request_handler_, "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>";
        // line 21
        if (isset($context["request_route"])) { $_request_route_ = $context["request_route"]; } else { $_request_route_ = null; }
        echo twig_escape_filter($this->env, $_request_route_, "html", null, true);
        echo "</i></span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        ob_start();
        // line 25
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Status</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 27
        if (isset($context["request_status_code_color"])) { $_request_status_code_color_ = $context["request_status_code_color"]; } else { $_request_status_code_color_ = null; }
        echo twig_escape_filter($this->env, $_request_status_code_color_, "html", null, true);
        echo "\">";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "statuscode"), "html", null, true);
        echo "</span> ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "statustext"), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                ";
        // line 31
        if (isset($context["request_handler"])) { $_request_handler_ = $context["request_handler"]; } else { $_request_handler_ = null; }
        echo twig_escape_filter($this->env, $_request_handler_, "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 35
        if (isset($context["request_route"])) { $_request_route_ = $context["request_route"]; } else { $_request_route_ = null; }
        echo twig_escape_filter($this->env, $_request_route_, "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 39
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "sessionmetadata"))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 42
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "    ";
        if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
    }

    // line 46
    public function block_menu($context, array $blocks = array())
    {
        // line 47
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAcCAQAAACn1QXuAAAD2UlEQVR42p2Ve0zTVxTHKS4+KCBqNomCClgEJJAYkznQQIFaWltAiigsxGUgMy6b45HWV4UKUoP1yaMS0DqniVpngKlEMoMzW2Z0QTf4Ax/bdCzFCpQWq60U+Xp/baG/EoGf3vPH7/b3PffTc++55/w8xg+wji4W3ImDw4S3DgSD5fGhA+wcbRxclqsB+30RnmWcda1JPWn1poj8e3TYlvb/l6edTdSLWvYHgcUIdSwiuduxOOdu/n90WF7350648J+a0ClxYNWECglgahP+OyUOPpm34sDMNt6Ez+QwjniAKSzFgKWTw6L33x/3/yMHzU09l/XKlykj7krlXURNDlsEaVm/a8Fh48trUEEKGY4Zb5SaXUpZH4oROAlKvjijPu9GQfcY6jkOQoBlWIgARCAVVbtNo1rxky9/lqiV/hMmQfwXfRtZQxYVVoItC5aUpO8rDIcvYvUNqcN0n7TfJkyC+5lUdYIH9hlOkn3bCWbVCoJLLX9C9+FZEcoIpj2HYHh9XT92ZbUEFl7XSvfhD2EVI5imFh/DX948+lvWhgAEHL3kBrNhNSOYvImCdSgEb+wbGrmjomCFv46DrWn6hN+2QY6ZDYH8Tt6Dv+c4Yfn9bofbN8ABG/xHjYcMKmNHC0Tw/XOF0Ez3+VaH2BMZ1Ezclaynnm1x8LTDBo7U65Tm0tejrltPwwvzIcQO7EIKFsB3c8uoprAqzZruwQpE1cnpeMVxxZLNc8mFQQy2W9Tb+1xSplbjD18EEvM7sjTjuksp6rXVDBeVN29s5ztjFY1VSILpfJAHZiFkG1lAtyTD+gvZsix5emPSC3flm6v3JGvfxNvn+8zDt/HLFR3XUYI6RFPltERkYFro4j6Itdd5JB6JzaaGBAKUFtorpOsHRNoLveAxU1jRQ6xFQbaVNNFBpICN6YjZ00UpN0swj4KFPK/MtTJBffXKoETk3mouiYw7cmoLpsGzNVFkth+NpTKWgnkjof9MnjOflRYqsy4rfV1udebZatIgHhyB0XmylsyL2VXJjtQReMNWe9uGH5JN3ytMubY6HS7J9HSYTI/L1c9ybQoTQfEwG2HN52p7KixuEQ91PH5wEYkE5sRxUYJaFCCr4g+6o+o2slEMNVHjCYqF+RBjJ87m0OI/2YnvwMVCgnLi2AjCcgQgpGen1Mh1bATSgV4pghGISKKyqT6Gj+CHRUj/grT66sGOp7tIjOpmhGEGqYLxA174DOW4gjZiP6EMn2LWO7pz+O8N2nYcQhGq7v+ITZg3wYcPPghFDKibGUNm3u/qq5hL1PWIxgJEIRZBmE69fQsyes/JMSWb+gAAAABJRU5ErkJggg==\" alt=\"Request\"></span>
    <strong>Request</strong>
</span>
";
    }

    // line 53
    public function block_panel($context, array $blocks = array())
    {
        // line 54
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 56
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "requestquery"), "all"))) {
            // line 57
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "requestquery")));
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "        <p>
            <em>No GET parameters</em>
        </p>
    ";
        }
        // line 63
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 66
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "requestrequest"), "all"))) {
            // line 67
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "requestrequest")));
            // line 68
            echo "    ";
        } else {
            // line 69
            echo "        <p>
            <em>No POST parameters</em>
        </p>
    ";
        }
        // line 73
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 76
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "requestattributes"), "all"))) {
            // line 77
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "requestattributes")));
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "        <p>
            <em>No attributes</em>
        </p>
    ";
        }
        // line 83
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 86
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "requestcookies"), "all"))) {
            // line 87
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "requestcookies")));
            // line 88
            echo "    ";
        } else {
            // line 89
            echo "        <p>
            <em>No cookies</em>
        </p>
    ";
        }
        // line 93
        echo "
    <h2>Request Headers</h2>

    ";
        // line 96
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "requestheaders")));
        // line 97
        echo "
    <h2>Request Content</h2>

    ";
        // line 100
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (($this->getAttribute($_collector_, "content") == false)) {
            // line 101
            echo "        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    ";
        } elseif ($this->getAttribute($_collector_, "content")) {
            // line 103
            echo "        <pre>";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "content"), "html", null, true);
            echo "</pre>
    ";
        } else {
            // line 105
            echo "        <p><em>No content</em></p>
    ";
        }
        // line 107
        echo "
    <h2>Request Server Parameters</h2>

    ";
        // line 110
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "requestserver")));
        // line 111
        echo "
    <h2>Response Headers</h2>

    ";
        // line 114
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "responseheaders")));
        // line 115
        echo "
    <h2>Session Metadata</h2>

    ";
        // line 118
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "sessionmetadata"))) {
            // line 119
            echo "    ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute($_collector_, "sessionmetadata")));
            // line 120
            echo "    ";
        } else {
            // line 121
            echo "    <p>
        <em>No session metadata</em>
    </p>
    ";
        }
        // line 125
        echo "
    <h2>Session Attributes</h2>

    ";
        // line 128
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "sessionattributes"))) {
            // line 129
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute($_collector_, "sessionattributes")));
            // line 130
            echo "    ";
        } else {
            // line 131
            echo "        <p>
            <em>No session attributes</em>
        </p>
    ";
        }
        // line 135
        echo "
    <h2>Flashes</h2>

    ";
        // line 138
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "flashes"))) {
            // line 139
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute($_collector_, "flashes")));
            // line 140
            echo "    ";
        } else {
            // line 141
            echo "        <p>
            <em>No flashes</em>
        </p>
    ";
        }
        // line 145
        echo "
    ";
        // line 146
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "parent")) {
            // line 147
            echo "        <h2><a href=\"";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute($_profile_, "parent"), "token"))), "html", null, true);
            echo "\">Parent request: ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_profile_, "parent"), "token"), "html", null, true);
            echo "</a></h2>

        ";
            // line 149
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute($_profile_, "parent"), "getcollector", array(0 => "request"), "method"), "requestattributes")));
            // line 150
            echo "    ";
        }
        // line 151
        echo "
    ";
        // line 152
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_profile_, "children"))) {
            // line 153
            echo "        <h2>Sub requests</h2>

        ";
            // line 155
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_profile_, "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 156
                echo "            <h3><a href=\"";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($_child_, "token"))), "html", null, true);
                echo "\">";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_child_, "token"), "html", null, true);
                echo "</a></h3>
            ";
                // line 157
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute($_child_, "getcollector", array(0 => "request"), "method"), "requestattributes")));
                // line 158
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "    ";
        }
        // line 160
        echo "
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 160,  435 => 159,  429 => 158,  426 => 157,  417 => 156,  412 => 155,  408 => 153,  405 => 152,  402 => 151,  399 => 150,  386 => 147,  383 => 146,  380 => 145,  374 => 141,  371 => 140,  367 => 139,  364 => 138,  353 => 131,  346 => 129,  343 => 128,  338 => 125,  325 => 119,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  286 => 101,  283 => 100,  278 => 97,  270 => 93,  264 => 89,  261 => 88,  254 => 86,  243 => 79,  240 => 78,  236 => 77,  233 => 76,  228 => 73,  222 => 69,  215 => 67,  212 => 66,  207 => 63,  201 => 59,  194 => 57,  191 => 56,  184 => 53,  173 => 46,  167 => 43,  164 => 42,  123 => 27,  119 => 25,  116 => 24,  113 => 23,  102 => 20,  85 => 17,  81 => 16,  77 => 15,  50 => 8,  36 => 5,  79 => 21,  74 => 14,  72 => 13,  69 => 12,  66 => 11,  60 => 9,  52 => 21,  47 => 18,  45 => 17,  40 => 6,  37 => 10,  22 => 1,  185 => 58,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  137 => 31,  133 => 40,  120 => 38,  117 => 37,  115 => 36,  110 => 33,  107 => 21,  101 => 29,  90 => 25,  87 => 24,  80 => 22,  70 => 20,  67 => 12,  62 => 18,  57 => 16,  54 => 22,  51 => 14,  44 => 7,  42 => 16,  32 => 4,  29 => 6,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 196,  489 => 195,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  455 => 176,  447 => 172,  439 => 168,  431 => 164,  423 => 160,  415 => 156,  403 => 146,  396 => 149,  392 => 141,  388 => 140,  381 => 137,  377 => 135,  373 => 134,  366 => 131,  362 => 129,  359 => 135,  356 => 127,  350 => 130,  347 => 124,  335 => 122,  332 => 121,  329 => 120,  320 => 113,  317 => 115,  309 => 111,  306 => 110,  300 => 102,  297 => 105,  292 => 98,  285 => 96,  275 => 96,  272 => 93,  267 => 32,  257 => 87,  253 => 85,  249 => 83,  242 => 81,  238 => 79,  234 => 78,  227 => 75,  223 => 73,  219 => 68,  216 => 71,  213 => 70,  210 => 69,  203 => 66,  198 => 58,  195 => 64,  192 => 63,  187 => 54,  182 => 57,  179 => 60,  176 => 47,  169 => 58,  166 => 56,  163 => 55,  160 => 54,  153 => 39,  145 => 35,  140 => 46,  132 => 42,  128 => 40,  125 => 39,  122 => 38,  114 => 34,  111 => 33,  108 => 31,  105 => 31,  98 => 27,  91 => 19,  88 => 18,  78 => 20,  75 => 19,  71 => 18,  68 => 17,  63 => 14,  56 => 12,  46 => 10,  43 => 9,  38 => 6,  35 => 9,  33 => 4,  30 => 3,);
    }
}
