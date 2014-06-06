<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_c873fd6dff99d4a99c9d7c0ab71f673af3847b28d4380bbfbaa49fc83d8b0e36 extends Twig_Template
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
        // line 3
        $context["logger"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ((($this->getAttribute($_collector_, "counterrors") || $this->getAttribute($_collector_, "countdeprecations")) || $this->getAttribute($_collector_, "countscreams"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\" />
            ";
            // line 9
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "counterrors")) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } elseif ($this->getAttribute($_collector_, "countdeprecations")) {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["error_count"] = (($this->getAttribute($_collector_, "counterrors") + $this->getAttribute($_collector_, "countdeprecations")) + $this->getAttribute($_collector_, "countscreams"));
            // line 15
            echo "            <span class=\"sf-toolbar-status";
            if (array_key_exists("status_color", $context)) {
                echo " sf-toolbar-status-";
                if (isset($context["status_color"])) { $_status_color_ = $context["status_color"]; } else { $_status_color_ = null; }
                echo twig_escape_filter($this->env, $_status_color_, "html", null, true);
            }
            echo "\">";
            if (isset($context["error_count"])) { $_error_count_ = $context["error_count"]; } else { $_error_count_ = null; }
            echo twig_escape_filter($this->env, $_error_count_, "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "counterrors")) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "counterrors"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "countdeprecations")) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "countdeprecations"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "countscreams")) {
                // line 31
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Silenced Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status\">";
                // line 33
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "countscreams"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 36
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 37
            echo "        ";
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
            // line 38
            echo "    ";
        }
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\"></span>
    <strong>Logs</strong>
    ";
        // line 45
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ((($this->getAttribute($_collector_, "counterrors") || $this->getAttribute($_collector_, "countdeprecations")) || $this->getAttribute($_collector_, "countscreams"))) {
            // line 46
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["error_count"] = (($this->getAttribute($_collector_, "counterrors") + $this->getAttribute($_collector_, "countdeprecations")) + $this->getAttribute($_collector_, "countscreams"));
            // line 47
            echo "        <span class=\"count\">
            <span>";
            // line 48
            if (isset($context["error_count"])) { $_error_count_ = $context["error_count"]; } else { $_error_count_ = null; }
            echo twig_escape_filter($this->env, $_error_count_, "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 51
        echo "</span>
";
    }

    // line 54
    public function block_panel($context, array $blocks = array())
    {
        // line 55
        echo "    <h2>Logs</h2>

    ";
        // line 57
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["priority"] = $this->getAttribute($this->getAttribute($_request_, "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 58
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Min. Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 68
        echo "                        ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "priorities"));
        foreach ($context['_seq'] as $context["value"] => $context["level"]) {
            // line 69
            echo "                            ";
            if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (((!$_priority_) && ($_value_ > 100))) {
                // line 70
                echo "                                ";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                $context["priority"] = $_value_;
                // line 71
                echo "                            ";
            }
            // line 72
            echo "                            <option value=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
            echo ((($_value_ == $_priority_)) ? (" selected") : (""));
            echo ">";
            if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_level_, "name"), "html", null, true);
            echo " (";
            if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_level_, "count"), "html", null, true);
            echo ")</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "countdeprecations")) {
            // line 75
            echo "                            ";
            if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
            if ((!$_priority_)) {
                // line 76
                echo "                                ";
                $context["priority"] = "-100";
                // line 77
                echo "                            ";
            }
            // line 78
            echo "                            <option value=\"-100\"";
            if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
            echo ((("-100" == $_priority_)) ? (" selected") : (""));
            echo ">DEPRECATION only (";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "countdeprecations"), "html", null, true);
            echo ")</option>
                        ";
        }
        // line 80
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 89
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "logs")) {
            // line 90
            echo "        <ul class=\"alt\">
            ";
            // line 91
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (((($_priority_ >= 0) && ($this->getAttribute($_log_, "priority") >= $_priority_)) || (($_priority_ < 0) && ((($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "type"), 0)) : (0)) == $_priority_)))) {
                    // line 92
                    echo "                <li class=\"";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($_loop_, "index")), "html", null, true);
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    if (($this->getAttribute($_log_, "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute($_log_, "priority") >= 300)) {
                        echo " warning";
                    }
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    if ($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "scream", array(), "any", true, true)) {
                        echo " scream";
                    }
                    echo "\">
                    ";
                    // line 93
                    if (isset($context["logger"])) { $_logger_ = $context["logger"]; } else { $_logger_ = null; }
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo $_logger_->getdisplay_message($this->getAttribute($_loop_, "index"), $_log_);
                    echo "
                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 96
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        </ul>
    ";
        } else {
            // line 100
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 107
    public function getdisplay_message($_log_index = null, $_log = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $_log_index,
            "log" => $_log,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 108
            echo "    ";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if ((twig_constant("Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler::TYPE_DEPRECATION") == (($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "type"), 0)) : (0)))) {
                // line 109
                echo "        DEPRECATION -  ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
                echo "
        ";
                // line 110
                if (isset($context["log_index"])) { $_log_index_ = $context["log_index"]; } else { $_log_index_ = null; }
                $context["id"] = ("sf-call-stack-" . $_log_index_);
                // line 111
                echo "        <a href=\"#\" onclick=\"Sfjs.toggle('";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "', document.getElementById('";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-on'), document.getElementById('";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-off')); return false;\">
            <img class=\"toggle\" id=\"";
                // line 112
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
            <img class=\"toggle\" id=\"";
                // line 113
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
        </a>
        ";
                // line 115
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_log_, "context"), "stack"));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
                    if (($_index_ > 1)) {
                        // line 116
                        echo "            ";
                        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
                        if (($_index_ == 2)) {
                            // line 117
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                            echo twig_escape_filter($this->env, $_id_, "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 119
                        echo "            ";
                        if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                        if ($this->getAttribute($_call_, "class", array(), "any", true, true)) {
                            // line 120
                            echo "                ";
                            if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute($_call_, "class")) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute($_call_, "function")));
                            // line 121
                            echo "            ";
                        } elseif ($this->getAttribute($_call_, "function", array(), "any", true, true)) {
                            // line 122
                            echo "                ";
                            if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute($_call_, "function"));
                            // line 123
                            echo "            ";
                        } elseif ($this->getAttribute($_call_, "file", array(), "any", true, true)) {
                            // line 124
                            echo "                ";
                            if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                            $context["from"] = $this->getAttribute($_call_, "file");
                            // line 125
                            echo "            ";
                        } else {
                            // line 126
                            echo "                ";
                            $context["from"] = "-";
                            // line 127
                            echo "            ";
                        }
                        // line 128
                        echo "
            <li>Called from ";
                        // line 129
                        if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                        if (isset($context["from"])) { $_from_ = $context["from"]; } else { $_from_ = null; }
                        echo ((($this->getAttribute($_call_, "file", array(), "any", true, true) && $this->getAttribute($_call_, "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute($_call_, "file"), $this->getAttribute($_call_, "line"), $_from_)) : ($_from_));
                        echo "</li>

            ";
                        // line 131
                        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
                        if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                        echo ((($_index_ == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_log_, "context"), "stack")) - 1))) ? ("</ul>") : (""));
                        echo "
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "    ";
            } else {
                // line 134
                echo "        ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "priorityName"), "html", null, true);
                echo " - ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
                echo "
        ";
                // line 135
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (($this->getAttribute($_log_, "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($_log_, "context"))))) {
                    // line 136
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 138
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($_log_, "context"), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 141
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 141,  469 => 138,  465 => 136,  462 => 135,  453 => 134,  450 => 133,  432 => 129,  420 => 125,  416 => 124,  413 => 123,  409 => 122,  406 => 121,  398 => 119,  391 => 117,  387 => 116,  369 => 112,  357 => 111,  354 => 110,  348 => 109,  344 => 108,  324 => 100,  313 => 96,  298 => 93,  282 => 92,  250 => 80,  237 => 77,  230 => 75,  226 => 74,  206 => 72,  199 => 70,  188 => 68,  174 => 57,  170 => 55,  162 => 51,  155 => 48,  152 => 47,  118 => 33,  103 => 27,  99 => 25,  84 => 19,  64 => 15,  48 => 10,  39 => 7,  209 => 77,  205 => 76,  202 => 75,  183 => 73,  175 => 70,  149 => 56,  134 => 51,  109 => 42,  106 => 41,  100 => 37,  82 => 32,  65 => 23,  27 => 3,  95 => 24,  92 => 32,  86 => 28,  83 => 27,  76 => 24,  438 => 160,  435 => 159,  429 => 128,  426 => 127,  417 => 156,  412 => 155,  408 => 153,  405 => 152,  402 => 120,  399 => 150,  386 => 147,  383 => 146,  380 => 115,  374 => 113,  371 => 140,  367 => 139,  364 => 138,  353 => 131,  346 => 129,  343 => 128,  338 => 125,  325 => 119,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  286 => 101,  283 => 100,  278 => 97,  270 => 93,  264 => 90,  261 => 89,  254 => 86,  243 => 79,  240 => 78,  236 => 77,  233 => 76,  228 => 73,  222 => 69,  215 => 67,  212 => 66,  207 => 63,  201 => 59,  194 => 69,  191 => 56,  184 => 53,  173 => 46,  167 => 54,  164 => 69,  123 => 27,  119 => 48,  116 => 47,  113 => 23,  102 => 20,  85 => 33,  81 => 16,  77 => 17,  50 => 14,  36 => 5,  79 => 25,  74 => 14,  72 => 13,  69 => 12,  66 => 18,  60 => 14,  52 => 21,  47 => 9,  45 => 9,  40 => 6,  37 => 5,  22 => 1,  185 => 58,  177 => 58,  165 => 46,  159 => 45,  148 => 46,  137 => 41,  133 => 40,  120 => 38,  117 => 37,  115 => 36,  110 => 30,  107 => 21,  101 => 29,  90 => 34,  87 => 24,  80 => 18,  70 => 20,  67 => 12,  62 => 18,  57 => 13,  54 => 12,  51 => 11,  44 => 7,  42 => 8,  32 => 5,  29 => 6,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 196,  489 => 195,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  455 => 176,  447 => 172,  439 => 131,  431 => 164,  423 => 126,  415 => 156,  403 => 146,  396 => 149,  392 => 141,  388 => 140,  381 => 137,  377 => 135,  373 => 134,  366 => 131,  362 => 129,  359 => 135,  356 => 127,  350 => 130,  347 => 124,  335 => 122,  332 => 107,  329 => 120,  320 => 98,  317 => 115,  309 => 111,  306 => 110,  300 => 102,  297 => 105,  292 => 98,  285 => 96,  275 => 96,  272 => 93,  267 => 91,  257 => 87,  253 => 85,  249 => 83,  242 => 81,  238 => 79,  234 => 76,  227 => 78,  223 => 73,  219 => 68,  216 => 71,  213 => 70,  210 => 69,  203 => 71,  198 => 58,  195 => 64,  192 => 63,  187 => 74,  182 => 57,  179 => 71,  176 => 47,  169 => 58,  166 => 56,  163 => 55,  160 => 54,  153 => 39,  145 => 45,  140 => 42,  132 => 38,  128 => 37,  125 => 36,  122 => 38,  114 => 31,  111 => 33,  108 => 31,  105 => 31,  98 => 27,  91 => 19,  88 => 21,  78 => 20,  75 => 19,  71 => 18,  68 => 24,  63 => 17,  56 => 16,  46 => 13,  43 => 12,  38 => 6,  35 => 6,  33 => 4,  30 => 3,);
    }
}
