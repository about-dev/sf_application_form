<?php

/* DemoTestBundle:Default:address.html.twig */
class __TwigTemplate_fdf513fcf9cd99620ae3a898b9af0765d651aac0b1e5962ddb0758eebc6201d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
\t<head>
\t\t<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.8.2.js\"></script>
\t</head>
\t<body>
\t\t<form method=\"post\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("demo_test_add_address");
        echo "\">
\t\t\t<table>
\t\t\t\t";
        // line 9
        echo "\t\t\t\t";
        $this->displayBlock('form_rows', $context, $blocks);
        // line 39
        echo "\t\t\t\t<tr><td colspan=\"2\"><input type=\"submit\" value=\"Save\" /></td></tr>
\t\t\t</table>
\t\t</form>
\t\t<script type=\"text/javascript\">
        \t\$('#address_region').change(function(){
        \t\t\$.ajax({
                    url: \"/localities/\" + \$(this).val(),
                    success: function(response) {
                        if ( response != '' ) {
                            \$(\"#address_locality\").html(response);
                            \$(\"#address_locality\").show();
                            \$(\"#address_locality\").change();
                        }
                    }
                });
        \t});
        </script>
\t</body>
</html>";
    }

    // line 9
    public function block_form_rows($context, array $blocks = array())
    {
        // line 10
        echo "\t\t\t\t\t";
        ob_start();
        // line 11
        echo "\t\t\t\t\t\t";
        if (isset($context["addressForm"])) { $_addressForm_ = $context["addressForm"]; } else { $_addressForm_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_addressForm_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 12
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t";
            // line 14
            echo "\t\t\t\t\t\t\t\t";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if (!twig_in_filter($this->getAttribute($this->getAttribute($_child_, "vars"), "name"), array(0 => "id", 1 => "_token"))) {
                // line 15
                echo "\t\t\t\t\t\t\t\t\t";
                // line 19
                echo "\t\t\t\t\t\t\t\t\t<td>";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'label');
                echo "</td>
\t\t\t\t\t\t\t\t\t";
                // line 20
                echo "   
\t\t\t\t\t\t\t\t\t";
                // line 22
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 25
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget');
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 26
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors')) {
                // line 27
                echo "\t\t\t\t\t\t\t\t\t\t";
                $this->displayBlock('form_errors', $context, $blocks);
                // line 33
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 38
        echo "\t\t\t\t";
    }

    // line 27
    public function block_form_errors($context, array $blocks = array())
    {
        // line 28
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        ob_start();
        // line 29
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 30
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors')), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 32
        echo "\t\t\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "DemoTestBundle:Default:address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 32,  153 => 30,  151 => 29,  148 => 28,  145 => 27,  141 => 38,  138 => 37,  122 => 34,  119 => 33,  116 => 27,  113 => 26,  108 => 25,  104 => 23,  101 => 22,  98 => 20,  92 => 19,  90 => 15,  86 => 14,  83 => 12,  64 => 11,  61 => 10,  58 => 9,  36 => 39,  33 => 9,  28 => 6,  21 => 1,);
    }
}
