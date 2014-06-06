<?php

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_fe7264d42ea0168dbfa430a9a384126616244769468dd764bdab0f7009f223c6 extends Twig_Template
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
        $context["__internal_1d17a1936165b42fe2b8329682203eb0c1c9766c5bc54f5f24a1836be03c3fec"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "data"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"20\" height=\"28\" alt=\"Forms\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcAQMAAABbFA0jAAAABlBMVEUAAAA+Pj4LNneDAAAAAXRSTlMAQObYZgAAACxJREFUCNdjYEACjD8gmP8/A8P7/wVw/IChgOH//w9w/AHKf4CLRlILwkgAANMJMNaUFdtJAAAAAElFTkSuQmCC\"/>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 9
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($this->getAttribute($_collector_, "data"), "nb_errors")) {
                echo "red";
            } else {
                echo "green";
            }
            echo "\">";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($this->getAttribute($_collector_, "data"), "nb_errors")) {
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "data"), "nb_errors"), "html", null, true);
            } else {
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "data"), "forms")), "html", null, true);
            }
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
            // line 13
            echo "    ";
        }
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAbCAYAAAB836/YAAAACXBIWXMAAAsTAAALEwEAmpwYAAAKT2lDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjanVNnVFPpFj333vRCS4iAlEtvUhUIIFJCi4AUkSYqIQkQSoghodkVUcERRUUEG8igiAOOjoCMFVEsDIoK2AfkIaKOg6OIisr74Xuja9a89+bN/rXXPues852zzwfACAyWSDNRNYAMqUIeEeCDx8TG4eQuQIEKJHAAEAizZCFz/SMBAPh+PDwrIsAHvgABeNMLCADATZvAMByH/w/qQplcAYCEAcB0kThLCIAUAEB6jkKmAEBGAYCdmCZTAKAEAGDLY2LjAFAtAGAnf+bTAICd+Jl7AQBblCEVAaCRACATZYhEAGg7AKzPVopFAFgwABRmS8Q5ANgtADBJV2ZIALC3AMDOEAuyAAgMADBRiIUpAAR7AGDIIyN4AISZABRG8lc88SuuEOcqAAB4mbI8uSQ5RYFbCC1xB1dXLh3ozkkXKxQ2YQJhmkAuwnmZGTKBNA/g88wAAKCRFRHgg/P9eM4Ors7ONo62Dl8t6r8G/yJiYuP+5c+rcEAAAOF0ftH+LC+zGoA7BoBt/qIl7gRoXgugdfeLZrIPQLUAoOnaV/Nw+H48PEWhkLnZ2eXk5NhKxEJbYcpXff5nwl/AV/1s+X48/Pf14L7iJIEyXYFHBPjgwsz0TKUcz5IJhGLc5o9H/LcL//wd0yLESWK5WCoU41EScY5EmozzMqUiiUKSKcUl0v9k4t8s+wM+3zUAsGo+AXuRLahdYwP2SycQWHTA4vcAAPK7b8HUKAgDgGiD4c93/+8//UegJQCAZkmScQAAXkQkLlTKsz/HCAAARKCBKrBBG/TBGCzABhzBBdzBC/xgNoRCJMTCQhBCCmSAHHJgKayCQiiGzbAdKmAv1EAdNMBRaIaTcA4uwlW4Dj1wD/phCJ7BKLyBCQRByAgTYSHaiAFiilgjjggXmYX4IcFIBBKLJCDJiBRRIkuRNUgxUopUIFVIHfI9cgI5h1xGupE7yAAygvyGvEcxlIGyUT3UDLVDuag3GoRGogvQZHQxmo8WoJvQcrQaPYw2oefQq2gP2o8+Q8cwwOgYBzPEbDAuxsNCsTgsCZNjy7EirAyrxhqwVqwDu4n1Y8+xdwQSgUXACTYEd0IgYR5BSFhMWE7YSKggHCQ0EdoJNwkDhFHCJyKTqEu0JroR+cQYYjIxh1hILCPWEo8TLxB7iEPENyQSiUMyJ7mQAkmxpFTSEtJG0m5SI+ksqZs0SBojk8naZGuyBzmULCAryIXkneTD5DPkG+Qh8lsKnWJAcaT4U+IoUspqShnlEOU05QZlmDJBVaOaUt2ooVQRNY9aQq2htlKvUYeoEzR1mjnNgxZJS6WtopXTGmgXaPdpr+h0uhHdlR5Ol9BX0svpR+iX6AP0dwwNhhWDx4hnKBmbGAcYZxl3GK+YTKYZ04sZx1QwNzHrmOeZD5lvVVgqtip8FZHKCpVKlSaVGyovVKmqpqreqgtV81XLVI+pXlN9rkZVM1PjqQnUlqtVqp1Q61MbU2epO6iHqmeob1Q/pH5Z/YkGWcNMw09DpFGgsV/jvMYgC2MZs3gsIWsNq4Z1gTXEJrHN2Xx2KruY/R27iz2qqaE5QzNKM1ezUvOUZj8H45hx+Jx0TgnnKKeX836K3hTvKeIpG6Y0TLkxZVxrqpaXllirSKtRq0frvTau7aedpr1Fu1n7gQ5Bx0onXCdHZ4/OBZ3nU9lT3acKpxZNPTr1ri6qa6UbobtEd79up+6Ynr5egJ5Mb6feeb3n+hx9L/1U/W36p/VHDFgGswwkBtsMzhg8xTVxbzwdL8fb8VFDXcNAQ6VhlWGX4YSRudE8o9VGjUYPjGnGXOMk423GbcajJgYmISZLTepN7ppSTbmmKaY7TDtMx83MzaLN1pk1mz0x1zLnm+eb15vft2BaeFostqi2uGVJsuRaplnutrxuhVo5WaVYVVpds0atna0l1rutu6cRp7lOk06rntZnw7Dxtsm2qbcZsOXYBtuutm22fWFnYhdnt8Wuw+6TvZN9un2N/T0HDYfZDqsdWh1+c7RyFDpWOt6azpzuP33F9JbpL2dYzxDP2DPjthPLKcRpnVOb00dnF2e5c4PziIuJS4LLLpc+Lpsbxt3IveRKdPVxXeF60vWdm7Obwu2o26/uNu5p7ofcn8w0nymeWTNz0MPIQ+BR5dE/C5+VMGvfrH5PQ0+BZ7XnIy9jL5FXrdewt6V3qvdh7xc+9j5yn+M+4zw33jLeWV/MN8C3yLfLT8Nvnl+F30N/I/9k/3r/0QCngCUBZwOJgUGBWwL7+Hp8Ib+OPzrbZfay2e1BjKC5QRVBj4KtguXBrSFoyOyQrSH355jOkc5pDoVQfujW0Adh5mGLw34MJ4WHhVeGP45wiFga0TGXNXfR3ENz30T6RJZE3ptnMU85ry1KNSo+qi5qPNo3ujS6P8YuZlnM1VidWElsSxw5LiquNm5svt/87fOH4p3iC+N7F5gvyF1weaHOwvSFpxapLhIsOpZATIhOOJTwQRAqqBaMJfITdyWOCnnCHcJnIi/RNtGI2ENcKh5O8kgqTXqS7JG8NXkkxTOlLOW5hCepkLxMDUzdmzqeFpp2IG0yPTq9MYOSkZBxQqohTZO2Z+pn5mZ2y6xlhbL+xW6Lty8elQfJa7OQrAVZLQq2QqboVFoo1yoHsmdlV2a/zYnKOZarnivN7cyzytuQN5zvn//tEsIS4ZK2pYZLVy0dWOa9rGo5sjxxedsK4xUFK4ZWBqw8uIq2Km3VT6vtV5eufr0mek1rgV7ByoLBtQFr6wtVCuWFfevc1+1dT1gvWd+1YfqGnRs+FYmKrhTbF5cVf9go3HjlG4dvyr+Z3JS0qavEuWTPZtJm6ebeLZ5bDpaql+aXDm4N2dq0Dd9WtO319kXbL5fNKNu7g7ZDuaO/PLi8ZafJzs07P1SkVPRU+lQ27tLdtWHX+G7R7ht7vPY07NXbW7z3/T7JvttVAVVN1WbVZftJ+7P3P66Jqun4lvttXa1ObXHtxwPSA/0HIw6217nU1R3SPVRSj9Yr60cOxx++/p3vdy0NNg1VjZzG4iNwRHnk6fcJ3/ceDTradox7rOEH0x92HWcdL2pCmvKaRptTmvtbYlu6T8w+0dbq3nr8R9sfD5w0PFl5SvNUyWna6YLTk2fyz4ydlZ19fi753GDborZ752PO32oPb++6EHTh0kX/i+c7vDvOXPK4dPKy2+UTV7hXmq86X23qdOo8/pPTT8e7nLuarrlca7nuer21e2b36RueN87d9L158Rb/1tWeOT3dvfN6b/fF9/XfFt1+cif9zsu72Xcn7q28T7xf9EDtQdlD3YfVP1v+3Njv3H9qwHeg89HcR/cGhYPP/pH1jw9DBY+Zj8uGDYbrnjg+OTniP3L96fynQ89kzyaeF/6i/suuFxYvfvjV69fO0ZjRoZfyl5O/bXyl/erA6xmv28bCxh6+yXgzMV70VvvtwXfcdx3vo98PT+R8IH8o/2j5sfVT0Kf7kxmTk/8EA5jz/GMzLdsAAAAgY0hSTQAAeiUAAICDAAD5/wAAgOkAAHUwAADqYAAAOpgAABdvkl/FRgAAAIpJREFUeNrslFEKgDAMQ1PpzrX7n6mF+KMfTjvnnKBgYD+heaQUJjlnRFJVunvpwd0lykyoqIRFXhWoqgSwvkgEwGV2my+CctYgaMumlXu0A6aUmsNHs1oaZiatQDM7BXL4ynelB550cFgDcmRD6eTwsaP0NmQrkP+Vv3vlv+G1hrwDfN8HOxw4DwC6ITLy7UIfRQAAAABJRU5ErkJggg==\" alt=\"\"/></span>
        <strong>Forms</strong>
        ";
        // line 20
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "data"), "forms"))) {
            // line 21
            echo "            <span class=\"count\"><span>";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "data"), "forms")), "html", null, true);
            echo "</span></span>
        ";
        }
        // line 23
        echo "    </span>
";
    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        // line 27
        echo "    <style type=\"text/css\">
    .window {
        /*background: #F6F6F6;*/
        margin: -30px -40px -40px;
    }
    .toggle-icon {
        display: inline-block;
        background: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC\") no-repeat top left #5eb5e0;
    }
    .closed .toggle-icon, .closed.toggle-icon {
        background-position: bottom left;
    }
    .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==\");
    }
    .tree {
        width: 230px;
        padding: 10px;
        font-size: 12px;
        float: left;
    }
    #content .tree h2 {
        font-size: 13px;
        padding: 5px 7px;
        margin: 0;
    }
    .tree li {
        margin: 0;
        padding: 0;
        width: 100%;
    }
    .tree .tree-inner {
        width: 100%;
        padding: 5px 7px 5px 22px;
        border-radius: 6px;
        color: #313131;
        cursor: pointer;
        position: relative;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .tree a {
        text-decoration: none;
    }
    .tree .toggle-button {
        /* provide a bigger clickable area than just 10x10px */
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -8px;
        margin-left: -18px;
    }
    .tree .toggle-icon {
        width: 10px;
        height: 10px;
        /* position the icon in the center of the clickable area */
        margin-left: 3px;
        margin-top: 3px;
        background-size: 10px 20px;
        background-color: #ccc;
    }
    .tree .toggle-icon.empty {
        width: 10px;
        height: 10px;
        position: absolute;
        top: 50%;
        margin-top: -5px;
        margin-left: -15px;
        background-size: 10px 10px;
    }
    .tree ul ul .tree-inner {
        padding-left: 37px;
    }
    .tree ul ul ul .tree-inner {
        padding-left: 52px;
    }
    .tree ul ul ul ul .tree-inner {
        padding-left: 67px;
    }
    .tree ul ul ul ul ul .tree-inner {
        padding-left: 82px;
    }
    .tree .tree-inner:hover {
        background: #dfdfdf;
    }
    .tree .tree-inner.active, .tree .tree-inner.active:hover {
        background: #dfdfdf;
        font-weight: bold;
        color: #313131;
    }
    .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC\");
        background-color: #aaa;
    }
    .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC\");
    }
    .tree-details {
        border-left: 1px solid #dfdfdf;
        background: white;
        margin-left: 250px;
        padding: 30px 40px 40px;
    }
    .tree-details h3 {
        position: relative;
    }
    .tree-details .toggle-icon {
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -9px;
        margin-left: 6px;
    }
    .form-type {
        color: #999999;
    }
    .hidden {
        display: none;
    }
    .badge-error {
        float: right;
        background: #a33;
        color: #fff;
        padding: 1px 4px;
        font-size: 10px;
        font-weight: bold;
        vertical-align: middle;
        border-radius: 6px;
    }
    .errors h3 {
        color: #800;
    }
    .errors th, .errors td {
        border-color: #800;
    }
    .errors th {
        background: #a33;
        color: #fff;
    }
    .errors .toggle-icon {
        background-color: #a33;
    }
    h3 a, h3 a:hover, h3 a:focus {
        color: inherit;
        text-decoration: inherit;
    }
    </style>

    ";
        // line 181
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "data"), "forms"))) {
            // line 182
            echo "        <div class=\"window\">
            <div class=\"tree\">
                <h2>Forms</h2>

                <ul>
                ";
            // line 187
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_collector_, "data"), "forms"));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 188
                echo "                    ";
                if (isset($context["formName"])) { $_formName_ = $context["formName"]; } else { $_formName_ = null; }
                if (isset($context["formData"])) { $_formData_ = $context["formData"]; } else { $_formData_ = null; }
                echo $context["__internal_1d17a1936165b42fe2b8329682203eb0c1c9766c5bc54f5f24a1836be03c3fec"]->getform_tree_entry($_formName_, $_formData_, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                </ul>
            </div>

            ";
            // line 193
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_collector_, "data"), "forms"));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 194
                echo "                ";
                if (isset($context["formName"])) { $_formName_ = $context["formName"]; } else { $_formName_ = null; }
                if (isset($context["formData"])) { $_formData_ = $context["formData"]; } else { $_formData_ = null; }
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo $context["__internal_1d17a1936165b42fe2b8329682203eb0c1c9766c5bc54f5f24a1836be03c3fec"]->getform_tree_details($_formName_, $_formData_, $this->getAttribute($this->getAttribute($_collector_, "data"), "forms_by_hash"));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "        </div>
    ";
        } else {
            // line 198
            echo "        <p><em>No forms were submitted for this request.</em></p>
    ";
        }
        // line 200
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    buttons[i].addEventListener('click', function (e) {
                        toggle(this);

                        e.preventDefault();
                        e.stopPropagation();

                        return false;
                    });

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    tabs[i].addEventListener('click', function (e) {
                        select(this);

                        e.preventDefault();
                        e.stopPropagation();

                        return false;
                    });

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage));

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('a.toggle-button'));
    </script>
";
    }

    // line 415
    public function getform_tree_entry($_name = null, $_data = null, $_expanded = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "data" => $_data,
            "expanded" => $_expanded,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 416
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 417
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
            echo "-details\">
            ";
            // line 418
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ((!twig_test_empty($this->getAttribute($_data_, "children")))) {
                // line 419
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 421
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 423
            echo "            ";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "
            ";
            // line 424
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if (($this->getAttribute($_data_, "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($_data_, "errors")) > 0))) {
                // line 425
                echo "            <div class=\"badge-error\">";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_data_, "errors")), "html", null, true);
                echo "</div>
            ";
            }
            // line 427
            echo "        </div>

        ";
            // line 429
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ((!twig_test_empty($this->getAttribute($_data_, "children")))) {
                // line 430
                echo "            <ul id=\"";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-children\"";
                if (isset($context["expanded"])) { $_expanded_ = $context["expanded"]; } else { $_expanded_ = null; }
                if ((!$_expanded_)) {
                    echo " class=\"hidden\"";
                }
                echo ">
                ";
                // line 431
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "children"));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 432
                    echo "                    ";
                    if (isset($context["childName"])) { $_childName_ = $context["childName"]; } else { $_childName_ = null; }
                    if (isset($context["childData"])) { $_childData_ = $context["childData"]; } else { $_childData_ = null; }
                    echo $this->getAttribute($this, "form_tree_entry", array(0 => $_childName_, 1 => $_childData_, 2 => false), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 434
                echo "            </ul>
        ";
            }
            // line 436
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 439
    public function getform_tree_details($_name = null, $_data = null, $_forms_by_hash = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "data" => $_data,
            "forms_by_hash" => $_forms_by_hash,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 440
            echo "    <div class=\"tree-details\" id=\"";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
            echo "-details\">
        <h2>
            ";
            // line 442
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "
            ";
            // line 443
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "type_class", array(), "any", true, true)) {
                // line 444
                echo "            <span class=\"form-type\">[<abbr title=\"";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "type_class"), "html", null, true);
                echo "\">";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "type"), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 446
            echo "        </h2>

        ";
            // line 448
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if (($this->getAttribute($_data_, "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($_data_, "errors")) > 0))) {
                // line 449
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 451
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors
                    <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 457
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-errors\">
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                ";
                // line 463
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "errors"));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 464
                    echo "                <tr>
                    <td>";
                    // line 465
                    if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message"), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 467
                    if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                    if (isset($context["forms_by_hash"])) { $_forms_by_hash_ = $context["forms_by_hash"]; } else { $_forms_by_hash_ = null; }
                    if (twig_test_empty($this->getAttribute($_error_, "origin"))) {
                        // line 468
                        echo "                            <em>This form.</em>
                        ";
                    } elseif ((!$this->getAttribute($_forms_by_hash_, $this->getAttribute($_error_, "origin"), array(), "array", true, true))) {
                        // line 470
                        echo "                            <em>Unknown.</em>
                        ";
                    } else {
                        // line 472
                        echo "                            ";
                        if (isset($context["forms_by_hash"])) { $_forms_by_hash_ = $context["forms_by_hash"]; } else { $_forms_by_hash_ = null; }
                        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_forms_by_hash_, $this->getAttribute($_error_, "origin"), array(), "array"), "name"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 474
                    echo "                    </td>
                    <td>
                        ";
                    // line 476
                    if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                    if (twig_test_empty($this->getAttribute($_error_, "cause"))) {
                        // line 477
                        echo "                            <em>Unknown.</em>
                        ";
                    } elseif ($this->getAttribute($this->getAttribute($_error_, "cause", array(), "any", false, true), "root", array(), "any", true, true)) {
                        // line 479
                        echo "                            <strong>Constraint Violation</strong><br/>
                            <pre>";
                        // line 480
                        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_error_, "cause"), "root"), "html", null, true);
                        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                        if ((!twig_test_empty($this->getAttribute($this->getAttribute($_error_, "cause"), "path")))) {
                            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                            if ((twig_first($this->env, $this->getAttribute($this->getAttribute($_error_, "cause"), "path")) != "[")) {
                                echo ".";
                            }
                            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_error_, "cause"), "path"), "html", null, true);
                        }
                        echo " = ";
                        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_error_, "cause"), "value"), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 482
                        echo "                            <pre>";
                        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_error_, "cause"), "html", null, true);
                        echo "</pre>
                        ";
                    }
                    // line 484
                    echo "                    </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 487
                echo "            </table>
        </div>
        ";
            }
            // line 490
            echo "
        ";
            // line 491
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "default_data", array(), "any", true, true)) {
                // line 492
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 493
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-default_data\" href=\"#\">
                Default Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 499
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-default_data\">
            <table>
                <tr>
                    <th width=\"180\">Model Format</th>
                    <td>
                        ";
                // line 504
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if ($this->getAttribute($this->getAttribute($_data_, "default_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                    // line 505
                    echo "                            <pre>";
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "default_data"), "model"), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 507
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 509
                echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                // line 513
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "default_data"), "norm"), "html", null, true);
                echo "</pre></td>
                </tr>
                <tr>
                    <th>View Format</th>
                    <td>
                        ";
                // line 518
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if ($this->getAttribute($this->getAttribute($_data_, "default_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                    // line 519
                    echo "                            <pre>";
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "default_data"), "view"), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 521
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 523
                echo "                    </td>
                </tr>
            </table>
        </div>
        ";
            }
            // line 528
            echo "
        ";
            // line 529
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "submitted_data", array(), "any", true, true)) {
                // line 530
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 531
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-submitted_data\" href=\"#\">
                Submitted Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 537
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-submitted_data\">
        ";
                // line 538
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if ($this->getAttribute($this->getAttribute($_data_, "submitted_data", array(), "any", false, true), "norm", array(), "any", true, true)) {
                    // line 539
                    echo "            <table>
                <tr>
                    <th width=\"180\">View Format</th>
                    <td>
                        ";
                    // line 543
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    if ($this->getAttribute($this->getAttribute($_data_, "submitted_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                        // line 544
                        echo "                            <pre>";
                        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "submitted_data"), "view"), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 546
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 548
                    echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                    // line 552
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "submitted_data"), "norm"), "html", null, true);
                    echo "</pre></td>
                </tr>
                <tr>
                    <th>Model Format</th>
                    <td>
                        ";
                    // line 557
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    if ($this->getAttribute($this->getAttribute($_data_, "submitted_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                        // line 558
                        echo "                            <pre>";
                        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "submitted_data"), "model"), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 560
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 562
                    echo "                    </td>
                </tr>
            </table>
        ";
                } else {
                    // line 566
                    echo "            <p><em>This form was not submitted.</em></p>
        ";
                }
                // line 568
                echo "        </div>
        ";
            }
            // line 570
            echo "
        ";
            // line 571
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "passed_options", array(), "any", true, true)) {
                // line 572
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 573
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-passed_options\" href=\"#\">
                Passed Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 579
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-passed_options\">
            ";
                // line 580
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if (twig_length_filter($this->env, $this->getAttribute($_data_, "passed_options"))) {
                    // line 581
                    echo "            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Passed Value</th>
                    <th>Resolved Value</th>
                </tr>
                ";
                    // line 587
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "passed_options"));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 588
                        echo "                <tr>
                    <th>";
                        // line 589
                        if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                        echo twig_escape_filter($this->env, $_option_, "html", null, true);
                        echo "</th>
                    <td><pre>";
                        // line 590
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, $_value_, "html", null, true);
                        echo "</pre></td>
                    <td>
                        ";
                        // line 592
                        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                        if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        if (($this->getAttribute($this->getAttribute($_data_, "resolved_options"), $_option_, array(), "array") === $_value_)) {
                            // line 593
                            echo "                            <em>same as passed value</em>
                        ";
                        } else {
                            // line 595
                            echo "                            <pre>";
                            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "resolved_options"), $_option_, array(), "array"), "html", null, true);
                            echo "</pre>
                        ";
                        }
                        // line 597
                        echo "                    </td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 600
                    echo "            </table>
            ";
                } else {
                    // line 602
                    echo "            <p><em>No options where passed when constructing this form.</em></p>
            ";
                }
                // line 604
                echo "        </div>
        ";
            }
            // line 606
            echo "
        ";
            // line 607
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "resolved_options", array(), "any", true, true)) {
                // line 608
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 609
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-resolved_options\" href=\"#\">
                Resolved Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 615
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-resolved_options\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Value</th>
                </tr>
                ";
                // line 621
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "resolved_options"));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 622
                    echo "                <tr>
                    <th>";
                    // line 623
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    echo twig_escape_filter($this->env, $_option_, "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 624
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 627
                echo "            </table>
        </div>
        ";
            }
            // line 630
            echo "
        ";
            // line 631
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "view_vars", array(), "any", true, true)) {
                // line 632
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 633
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-view_vars\" href=\"#\">
                View Variables
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 639
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
                echo "-view_vars\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Variable</th>
                    <th>Value</th>
                </tr>
                ";
                // line 645
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "view_vars"));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 646
                    echo "                <tr>
                    <th>";
                    // line 647
                    if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                    echo twig_escape_filter($this->env, $_variable_, "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 648
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 651
                echo "            </table>
        </div>
        ";
            }
            // line 654
            echo "    </div>

    ";
            // line 656
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "children"));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 657
                echo "        ";
                if (isset($context["childName"])) { $_childName_ = $context["childName"]; } else { $_childName_ = null; }
                if (isset($context["childData"])) { $_childData_ = $context["childData"]; } else { $_childData_ = null; }
                if (isset($context["forms_by_hash"])) { $_forms_by_hash_ = $context["forms_by_hash"]; } else { $_forms_by_hash_ = null; }
                echo $this->getAttribute($this, "form_tree_details", array(0 => $_childName_, 1 => $_childData_, 2 => $_forms_by_hash_), "method");
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1168 => 657,  1163 => 656,  1159 => 654,  1154 => 651,  1144 => 648,  1139 => 647,  1136 => 646,  1131 => 645,  1121 => 639,  1111 => 633,  1108 => 632,  1105 => 631,  1102 => 630,  1097 => 627,  1087 => 624,  1082 => 623,  1079 => 622,  1074 => 621,  1064 => 615,  1054 => 609,  1051 => 608,  1048 => 607,  1045 => 606,  1041 => 604,  1037 => 602,  1033 => 600,  1025 => 597,  1017 => 595,  1013 => 593,  1008 => 592,  1002 => 590,  997 => 589,  994 => 588,  989 => 587,  981 => 581,  978 => 580,  973 => 579,  963 => 573,  960 => 572,  957 => 571,  954 => 570,  950 => 568,  946 => 566,  940 => 562,  936 => 560,  929 => 558,  926 => 557,  917 => 552,  911 => 548,  907 => 546,  900 => 544,  897 => 543,  891 => 539,  888 => 538,  883 => 537,  873 => 531,  870 => 530,  867 => 529,  857 => 523,  853 => 521,  846 => 519,  834 => 513,  828 => 509,  824 => 507,  817 => 505,  814 => 504,  805 => 499,  795 => 493,  792 => 492,  789 => 491,  786 => 490,  781 => 487,  773 => 484,  766 => 482,  748 => 480,  745 => 479,  738 => 476,  734 => 474,  722 => 470,  714 => 467,  708 => 465,  705 => 464,  700 => 463,  690 => 457,  680 => 451,  676 => 449,  673 => 448,  669 => 446,  659 => 444,  656 => 443,  651 => 442,  644 => 440,  631 => 439,  619 => 436,  615 => 434,  604 => 432,  599 => 431,  588 => 430,  585 => 429,  581 => 427,  574 => 425,  571 => 424,  565 => 423,  554 => 419,  551 => 418,  546 => 417,  543 => 416,  530 => 415,  305 => 196,  293 => 194,  288 => 193,  260 => 182,  93 => 23,  49 => 14,  34 => 5,  31 => 4,  864 => 528,  861 => 491,  848 => 489,  843 => 518,  839 => 486,  826 => 485,  799 => 479,  796 => 478,  774 => 476,  756 => 475,  751 => 473,  746 => 472,  741 => 477,  736 => 470,  731 => 469,  726 => 472,  721 => 467,  718 => 468,  715 => 465,  697 => 464,  686 => 462,  670 => 456,  663 => 454,  658 => 453,  655 => 452,  653 => 451,  639 => 449,  634 => 446,  600 => 414,  579 => 411,  561 => 421,  558 => 409,  555 => 408,  547 => 406,  541 => 404,  269 => 136,  225 => 94,  208 => 90,  193 => 86,  190 => 85,  186 => 84,  180 => 83,  157 => 75,  154 => 74,  143 => 71,  129 => 61,  121 => 57,  97 => 43,  94 => 42,  41 => 19,  28 => 3,  476 => 141,  469 => 138,  465 => 136,  462 => 135,  453 => 134,  450 => 133,  432 => 129,  420 => 125,  416 => 124,  413 => 123,  409 => 122,  406 => 121,  398 => 119,  391 => 117,  387 => 116,  369 => 112,  357 => 111,  354 => 110,  348 => 109,  344 => 108,  324 => 100,  313 => 200,  298 => 93,  282 => 92,  250 => 80,  237 => 77,  230 => 75,  226 => 74,  206 => 72,  199 => 70,  188 => 68,  174 => 57,  170 => 55,  162 => 51,  155 => 48,  152 => 47,  118 => 33,  103 => 45,  99 => 25,  84 => 19,  64 => 11,  48 => 11,  39 => 7,  209 => 77,  205 => 76,  202 => 75,  183 => 73,  175 => 70,  149 => 73,  134 => 51,  109 => 42,  106 => 41,  100 => 37,  82 => 32,  65 => 23,  27 => 3,  95 => 24,  92 => 32,  86 => 21,  83 => 20,  76 => 24,  438 => 160,  435 => 159,  429 => 128,  426 => 127,  417 => 156,  412 => 155,  408 => 153,  405 => 152,  402 => 120,  399 => 150,  386 => 147,  383 => 146,  380 => 115,  374 => 113,  371 => 140,  367 => 139,  364 => 138,  353 => 131,  346 => 129,  343 => 128,  338 => 125,  325 => 119,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  286 => 101,  283 => 190,  278 => 97,  270 => 93,  264 => 90,  261 => 89,  254 => 86,  243 => 79,  240 => 78,  236 => 77,  233 => 76,  228 => 73,  222 => 93,  215 => 67,  212 => 66,  207 => 63,  201 => 87,  194 => 69,  191 => 56,  184 => 53,  173 => 46,  167 => 54,  164 => 77,  123 => 27,  119 => 48,  116 => 47,  113 => 23,  102 => 20,  85 => 33,  81 => 16,  77 => 33,  50 => 14,  36 => 5,  79 => 25,  74 => 14,  72 => 13,  69 => 12,  66 => 18,  60 => 25,  52 => 13,  47 => 9,  45 => 9,  40 => 6,  37 => 5,  22 => 1,  185 => 58,  177 => 82,  165 => 46,  159 => 45,  148 => 46,  137 => 41,  133 => 40,  120 => 38,  117 => 37,  115 => 36,  110 => 30,  107 => 21,  101 => 27,  90 => 34,  87 => 24,  80 => 34,  70 => 13,  67 => 12,  62 => 16,  57 => 24,  54 => 12,  51 => 22,  44 => 7,  42 => 8,  32 => 5,  29 => 6,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 196,  489 => 195,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  455 => 176,  447 => 172,  439 => 131,  431 => 164,  423 => 126,  415 => 156,  403 => 146,  396 => 149,  392 => 141,  388 => 140,  381 => 137,  377 => 135,  373 => 134,  366 => 131,  362 => 129,  359 => 135,  356 => 127,  350 => 130,  347 => 124,  335 => 122,  332 => 107,  329 => 120,  320 => 98,  317 => 115,  309 => 198,  306 => 110,  300 => 102,  297 => 105,  292 => 98,  285 => 96,  275 => 96,  272 => 188,  267 => 187,  257 => 181,  253 => 85,  249 => 83,  242 => 81,  238 => 79,  234 => 76,  227 => 78,  223 => 73,  219 => 92,  216 => 71,  213 => 70,  210 => 69,  203 => 71,  198 => 58,  195 => 64,  192 => 63,  187 => 74,  182 => 57,  179 => 71,  176 => 47,  169 => 80,  166 => 56,  163 => 55,  160 => 54,  153 => 39,  145 => 45,  140 => 42,  132 => 38,  128 => 37,  125 => 36,  122 => 38,  114 => 52,  111 => 51,  108 => 31,  105 => 31,  98 => 26,  91 => 41,  88 => 40,  78 => 17,  75 => 16,  71 => 30,  68 => 24,  63 => 17,  56 => 16,  46 => 13,  43 => 12,  38 => 7,  35 => 6,  33 => 4,  30 => 3,);
    }
}
