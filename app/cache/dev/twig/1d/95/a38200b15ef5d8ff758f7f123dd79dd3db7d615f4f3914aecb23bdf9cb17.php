<?php

/* @Swiftmailer/Collector/swiftmailer.html.twig */
class __TwigTemplate_1d95a38200b15ef5d8ff758f7f123dd79dd3db7d615f4f3914aecb23bdf9cb17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
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
        if ($this->getAttribute($_collector_, "messageCount")) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"23\" height=\"28\" alt=\"Swiftmailer\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAcCAYAAACK7SRjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1MjM0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1MjQ0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMEQ5OTQ5QzQ5OEMxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyMjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpkRnSAAAAJ0SURBVHjaYvz//z8DrQATAw3BqOFYAaO9vT1FBhw4cGCAXA5MipxBQUHT3r17l0AVAxkZ/wkLC89as2ZNIcjlYkALXKnlWqBZTH/+/PEDmQsynLW/v3+NoaHhN2oYDjJn8uTJK4BMNpDhPwsLCwOKiop2+fn5vafEYC8vrw8gc/Lz8wOB3B8gw/nev38vn5WV5eTg4LA/Ly/vESsrK2npmYmJITU19SnQ8L0gc4DxpwgyF2S4EEjB58+f+crLy31YWFjOt7S0XBYUFPxHjMEcHBz/6+rqboqJiZ0qKSnxBpkDlRICGc4MU/j792+2CRMm+L18+fLSxIkTDykoKPzBZ7CoqOi/np6eE8rKylvb29v9fvz4wYEkzYKRzjk5OX/LyMjcnDRpEkjjdisrK6wRraOj8wvokAMLFy788ejRoxcaGhrPCWai4ODgB8DUE3/mzBknYMToASNoMzAfvEVW4+Tk9LmhoWFbTU2NwunTpx2BjiiMjo6+hm4WCzJHUlLyz+vXrxkfP36sDOI/ffpUPikpibe7u3sLsJjQW7VqlSrQxe+Avjmanp7u9PbtWzGQOmCCkARmmu/m5uYfT548yY/V5UpKSl+2b9+uiiz26dMnIWBSDTp27NgdYGrYCIzwE7m5uR4wg2Hg/PnzSsDI/QlKOcjZ3wGUBLm5uf+DwLdv38gub4AG/xcSEvr35s0bZmCB5sgCE/z69SsjyDJKMtG/f/8YQQYD8wkoGf8H51AbG5sH1CpbQBnQ09PzBiiHgoIFFHlBQGwLxLxUMP8dqJgH4k3gIhfIkAKVYkDMTmmhCHIxEL8A4peMo02L4WU4QIABANxZAoDIQDv3AAAAAElFTkSuQmCC\" />
            <span class=\"sf-toolbar-status\">";
            // line 7
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messageCount"), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Messages</b>
                <span>";
            // line 12
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messageCount"), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 14
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "mailers"));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 15
                echo "                <hr>
                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 17
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "</b>
                    <span>";
                // line 18
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messageCount", array(0 => $_name_), "method"), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Is spooled ?</b>
                    <span>";
                // line 22
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo (($this->getAttribute($_collector_, "isSpool", array(0 => $_name_), "method")) ? ("yes") : ("no"));
                echo "</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 27
            echo "        ";
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
            // line 28
            echo "    ";
        }
    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        // line 32
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAAEDElEQVR42u2XWUhUURjHy6isILAebO+lonpJ8qkHM3NFVFxAUVFM0RSXUKnwwdAQn3wQE0MyA1MwBEUQcxvHZTTTHNcZl9DUGqd0JBOzcsZ7+n8XJ0Z0GueOVwg68GfmnLn3O7/7Lee7s4cxZpHq6uos0bb3+Q+6DrG3u7v7RHt7u3tbW9uD5ubm8qamJnlDQ4NKIpG8HhkZOU3X7BYoD9Tb22sjk8mcWltb70ul0pcAegugBfzOjKmzs/MJ7j0kCujw8PBhADkAKAVAz+EZGYA+08bmCN79qdFo7sGmjaWg+wgIIUtoaWl5CqDmxsbGj7SJpYK3uYWFBRnsDmEfWyGg+zs6OkIBNEoGxVB9fT2bnZ1VIHff03xmZuY29rUyF9QWT6sWC5I0OTk5rVAo3unnSqXyEfa1Nhf0Kp5UKRYk8lsDD0oM1/r6+l5h32Pmgl5UqVTP5ubmlEgBHRlCobC8vDzm5eXFHB0dRZWzs/OXsLCwu5SCpkBPo4DaMVRI9rbp6Wk1vnP+/v5kaFfk4eGhAcdJU6Dn+/v7q9aTnpPL5YqVlRV5eXm5Fk+7Gx7lCgsL68Fx2RToWST7C8McQgr8yMrKWkLu/hQz/LDNIZojycnJb8BxwRTocYT8oSEoQs8bSkpK0k5MTGgiIiK4nYYMDg7mcBLIo6OjP9Ec44opUGvIF+eoTg/a1dX1x2BISMgyKncpLS1tbacgU1NT2djY2HxoaOi8fg3jhilQK+gmQvBVD4qQbzDs4+ND6bBWUFCgtRQyJyeHdwSKdcODY9zaTgu9jheMcWOgJFdXV1ZZWclqamp0bm5uQoqGVVRUrFHBuru782tCQC+hW0j/BkpCPlGXIY9wfn5+5hQN5T3dS+cz5btg0DNTU1NFpkBra2tZaWkpy8jIYOPj4ywmJmY7RcMGBwdZZmYmKykpoa7ELPGozeLiYrIetKenZ5OhuLg4ft3T05OfJyQk8LDp6el/LRq6JiUlheb8vXgzY7m5uYJBD0LeeDnRApQ8sKloqK3GxsZuWEPrYzhiWHFx8ZZFMzo6yiIjIw1DTTZ+qNXqMRcXF0GgVpADKltDoCisDcbj4+NZfn7+ll5D9fKeprYbFRXFwsPDWVVV1SodPwEBAVueEtnZ2QNIhTkhoKRrAxhb5WhRURFzcnIyGmIcX9rq6uoPq6urAzqdrresrGwIHtMZux62OOT6AD4FgZ5bXl5+DMhv6P16j/KhCwoK2vHO5O3t/SsxMfG7ENAjkAOUBUkMvMVDiiFKDSGge6Gj0CUoGmffpvwSEfg7dUch/0LtkWcdvr6+a2JDBgYG6tDt6DXPTgjoKegOVAo1QVKR1AgVQ8GQrRDQA+uw9ushuSWSyLYdQRr7K/JP6DcTwr8i7Fj8pwAAAABJRU5ErkJggg==\" alt=\"Configuration\" /></span>
    <strong>E-Mails</strong>
    <span class=\"count\">
        <span>";
        // line 36
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messageCount"), "html", null, true);
        echo "</span>
    </span>
</span>
";
    }

    // line 41
    public function block_panel($context, array $blocks = array())
    {
        // line 42
        echo "    <h2>Messages</h2>

    <table>
        <thead>
            <tr>
                <th scope=\"col\">Mailer</th>
                <th scope=\"col\">Messages</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 52
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "mailers"));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 53
            echo "                <tr>
                    <th>";
            // line 54
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo (($this->getAttribute($_collector_, "isDefaultMailer", array(0 => $_name_), "method")) ? (" (default mailer)") : (""));
            echo "</th>
                    <td>";
            // line 55
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messageCount", array(0 => $_name_), "method"), "html", null, true);
            echo " ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo (($this->getAttribute($_collector_, "isSpool", array(0 => $_name_), "method")) ? ("spooled") : ("sent"));
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>

    ";
        // line 61
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "mailers"));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 62
            echo "        <h3>Mailer <em>";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "</em>";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo (($this->getAttribute($_collector_, "isDefaultMailer", array(0 => $_name_), "method")) ? (" (default mailer)") : (""));
            echo "</h3>

        ";
            // line 64
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if ((!$this->getAttribute($_collector_, "messages", array(0 => $_name_), "method"))) {
                // line 65
                echo "            <p>
                <em>No message sent.</em>
            </p>
        ";
            } else {
                // line 69
                echo "            <ul class=\"alt\">
                ";
                // line 70
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "messages", array(0 => $_name_), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 71
                    echo "                    <li class=\"";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($_loop_, "index")), "html", null, true);
                    echo "\">
                        ";
                    // line 72
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_message_, "headers"), "all"));
                    foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                        // line 73
                        echo "                            <pre>";
                        if (isset($context["header"])) { $_header_ = $context["header"]; } else { $_header_ = null; }
                        echo twig_escape_filter($this->env, $_header_, "html", null, true);
                        echo "</pre>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                        <pre>";
                    // line 76
                    if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    if (($this->getAttribute($_messagePart_, "charset", array(), "any", true, true) && $this->getAttribute($_message_, "charset"))) {
                        // line 77
                        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                        echo twig_escape_filter($this->env, twig_convert_encoding(twig_escape_filter($this->env, $this->getAttribute($_message_, "body"), "html", $this->getAttribute($_message_, "charset")), "UTF-8", $this->getAttribute($_message_, "charset")), "html", null, true);
                    } else {
                        // line 79
                        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_message_, "body"), "html");
                    }
                    // line 81
                    echo "</pre>
                        ";
                    // line 82
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_message_, "children"));
                    foreach ($context['_seq'] as $context["_key"] => $context["messagePart"]) {
                        if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                        if ((($this->getAttribute($_messagePart_, "contentType") == "text/plain") || ($this->getAttribute($_messagePart_, "contentType") == "text/html"))) {
                            // line 83
                            echo "                            <h4>Alternative part</h4>
                            <pre>";
                            // line 85
                            if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                            if ($this->getAttribute($_messagePart_, "charset")) {
                                // line 86
                                if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                                echo twig_escape_filter($this->env, twig_convert_encoding(twig_escape_filter($this->env, $this->getAttribute($_messagePart_, "body"), "html", $this->getAttribute($_messagePart_, "charset")), "UTF-8", $this->getAttribute($_messagePart_, "charset")), "html", null, true);
                            } else {
                                // line 88
                                if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_messagePart_, "body"), "html");
                            }
                            // line 90
                            echo "</pre>
                        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagePart'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "                    </li>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "            </ul>
        ";
            }
            // line 96
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Swiftmailer/Collector/swiftmailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 96,  308 => 94,  281 => 88,  277 => 86,  274 => 85,  271 => 83,  247 => 75,  204 => 69,  178 => 61,  158 => 55,  150 => 54,  147 => 53,  142 => 52,  130 => 42,  127 => 41,  112 => 32,  96 => 25,  232 => 72,  211 => 71,  196 => 64,  171 => 54,  146 => 41,  124 => 35,  104 => 28,  59 => 11,  1168 => 657,  1163 => 656,  1159 => 654,  1154 => 651,  1144 => 648,  1139 => 647,  1136 => 646,  1131 => 645,  1121 => 639,  1111 => 633,  1108 => 632,  1105 => 631,  1102 => 630,  1097 => 627,  1087 => 624,  1082 => 623,  1079 => 622,  1074 => 621,  1064 => 615,  1054 => 609,  1051 => 608,  1048 => 607,  1045 => 606,  1041 => 604,  1037 => 602,  1033 => 600,  1025 => 597,  1017 => 595,  1013 => 593,  1008 => 592,  1002 => 590,  997 => 589,  994 => 588,  989 => 587,  981 => 581,  978 => 580,  973 => 579,  963 => 573,  960 => 572,  957 => 571,  954 => 570,  950 => 568,  946 => 566,  940 => 562,  936 => 560,  929 => 558,  926 => 557,  917 => 552,  911 => 548,  907 => 546,  900 => 544,  897 => 543,  891 => 539,  888 => 538,  883 => 537,  873 => 531,  870 => 530,  867 => 529,  857 => 523,  853 => 521,  846 => 519,  834 => 513,  828 => 509,  824 => 507,  817 => 505,  814 => 504,  805 => 499,  795 => 493,  792 => 492,  789 => 491,  786 => 490,  781 => 487,  773 => 484,  766 => 482,  748 => 480,  745 => 479,  738 => 476,  734 => 474,  722 => 470,  714 => 467,  708 => 465,  705 => 464,  700 => 463,  690 => 457,  680 => 451,  676 => 449,  673 => 448,  669 => 446,  659 => 444,  656 => 443,  651 => 442,  644 => 440,  631 => 439,  619 => 436,  615 => 434,  604 => 432,  599 => 431,  588 => 430,  585 => 429,  581 => 427,  574 => 425,  571 => 424,  565 => 423,  554 => 419,  551 => 418,  546 => 417,  543 => 416,  530 => 415,  305 => 196,  293 => 92,  288 => 193,  260 => 182,  93 => 22,  49 => 9,  34 => 5,  31 => 4,  864 => 528,  861 => 491,  848 => 489,  843 => 518,  839 => 486,  826 => 485,  799 => 479,  796 => 478,  774 => 476,  756 => 475,  751 => 473,  746 => 472,  741 => 477,  736 => 470,  731 => 469,  726 => 472,  721 => 467,  718 => 468,  715 => 465,  697 => 464,  686 => 462,  670 => 456,  663 => 454,  658 => 453,  655 => 452,  653 => 451,  639 => 449,  634 => 446,  600 => 414,  579 => 411,  561 => 421,  558 => 409,  555 => 408,  547 => 406,  541 => 404,  269 => 136,  225 => 94,  208 => 70,  193 => 63,  190 => 85,  186 => 84,  180 => 59,  157 => 48,  154 => 74,  143 => 71,  129 => 36,  121 => 34,  97 => 24,  94 => 42,  41 => 6,  28 => 3,  476 => 141,  469 => 138,  465 => 136,  462 => 135,  453 => 134,  450 => 133,  432 => 129,  420 => 125,  416 => 124,  413 => 123,  409 => 122,  406 => 121,  398 => 119,  391 => 117,  387 => 116,  369 => 112,  357 => 111,  354 => 110,  348 => 109,  344 => 108,  324 => 100,  313 => 200,  298 => 93,  282 => 92,  250 => 80,  237 => 73,  230 => 75,  226 => 71,  206 => 72,  199 => 70,  188 => 68,  174 => 57,  170 => 55,  162 => 51,  155 => 48,  152 => 47,  118 => 36,  103 => 45,  99 => 25,  84 => 19,  64 => 11,  48 => 11,  39 => 7,  209 => 77,  205 => 76,  202 => 68,  183 => 62,  175 => 70,  149 => 42,  134 => 51,  109 => 31,  106 => 41,  100 => 27,  82 => 32,  65 => 23,  27 => 3,  95 => 24,  92 => 32,  86 => 21,  83 => 20,  76 => 18,  438 => 160,  435 => 159,  429 => 128,  426 => 127,  417 => 156,  412 => 155,  408 => 153,  405 => 152,  402 => 120,  399 => 150,  386 => 147,  383 => 146,  380 => 115,  374 => 113,  371 => 140,  367 => 139,  364 => 138,  353 => 131,  346 => 129,  343 => 128,  338 => 125,  325 => 119,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  286 => 101,  283 => 190,  278 => 97,  270 => 93,  264 => 82,  261 => 81,  254 => 86,  243 => 79,  240 => 78,  236 => 77,  233 => 76,  228 => 73,  222 => 76,  215 => 73,  212 => 66,  207 => 70,  201 => 87,  194 => 64,  191 => 56,  184 => 53,  173 => 58,  167 => 54,  164 => 77,  123 => 27,  119 => 48,  116 => 47,  113 => 23,  102 => 20,  85 => 22,  81 => 19,  77 => 33,  50 => 14,  36 => 5,  79 => 25,  74 => 14,  72 => 13,  69 => 12,  66 => 13,  60 => 25,  52 => 10,  47 => 9,  45 => 7,  40 => 6,  37 => 5,  22 => 1,  185 => 58,  177 => 82,  165 => 46,  159 => 45,  148 => 46,  137 => 37,  133 => 40,  120 => 38,  117 => 37,  115 => 32,  110 => 30,  107 => 28,  101 => 27,  90 => 21,  87 => 24,  80 => 34,  70 => 15,  67 => 15,  62 => 14,  57 => 24,  54 => 12,  51 => 22,  44 => 7,  42 => 8,  32 => 5,  29 => 6,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 196,  489 => 195,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  455 => 176,  447 => 172,  439 => 131,  431 => 164,  423 => 126,  415 => 156,  403 => 146,  396 => 149,  392 => 141,  388 => 140,  381 => 137,  377 => 135,  373 => 134,  366 => 131,  362 => 129,  359 => 135,  356 => 127,  350 => 130,  347 => 124,  335 => 122,  332 => 107,  329 => 120,  320 => 98,  317 => 115,  309 => 198,  306 => 110,  300 => 102,  297 => 105,  292 => 98,  285 => 90,  275 => 96,  272 => 188,  267 => 187,  257 => 79,  253 => 77,  249 => 76,  242 => 81,  238 => 79,  234 => 76,  227 => 78,  223 => 73,  219 => 92,  216 => 71,  213 => 70,  210 => 69,  203 => 71,  198 => 65,  195 => 64,  192 => 63,  187 => 62,  182 => 57,  179 => 71,  176 => 47,  169 => 80,  166 => 51,  163 => 50,  160 => 49,  153 => 39,  145 => 45,  140 => 38,  132 => 38,  128 => 37,  125 => 36,  122 => 38,  114 => 52,  111 => 30,  108 => 31,  105 => 31,  98 => 26,  91 => 41,  88 => 40,  78 => 17,  75 => 16,  71 => 17,  68 => 24,  63 => 17,  56 => 12,  46 => 13,  43 => 7,  38 => 7,  35 => 6,  33 => 4,  30 => 3,);
    }
}
