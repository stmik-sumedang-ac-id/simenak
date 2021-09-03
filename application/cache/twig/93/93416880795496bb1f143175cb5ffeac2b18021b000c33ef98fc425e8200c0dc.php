<?php

/* error/e404.twig */
class __TwigTemplate_04f547ef79488006a551cbf3c24384293fee7056fa8dc67a4b8430ac9268efe2 extends Twig_Template
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
        $context["now"] = date("YmdHis");
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\" >

<head>
  <meta charset=\"UTF-8\">
  <title>404 Page Not Found</title>
  
  \t    <!-- Favicon -->
\t    ";
        // line 10
        if (file_exists("uploads/favicon")) {
            // line 11
            echo "\t      ";
            $context["favicon"] = "uploads/favicon";
            // line 12
            echo "\t    ";
        } else {
            // line 13
            echo "\t      ";
            $context["favicon"] = "assets/favicon.png";
            // line 14
            echo "\t    ";
        }
        // line 15
        echo "\t    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, ((base_url((isset($context["favicon"]) ? $context["favicon"] : null)) . "?time=") . (isset($context["now"]) ? $context["now"] : null)), "html", null, true);
        echo "\"/>

      <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url("assets/404/css/bootstrap.min.css"), "html", null, true);
        echo "\">

      <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url("assets/404/css/style.css"), "html", null, true);
        echo "\">

  
</head>

<body>

  <link href='https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption' rel='stylesheet' type='text/css'>
<body>

        <!-- Error Page -->
            <div class=\"error\">
                <div class=\"container-floud\">
                    <div class=\"col-xs-12 ground-color text-center\">
                        <div class=\"container-error-404\">
                            <div class=\"clip\"><div class=\"shadow\"><span class=\"digit thirdDigit\"></span></div></div>
                            <div class=\"clip\"><div class=\"shadow\"><span class=\"digit secondDigit\"></span></div></div>
                            <div class=\"clip\"><div class=\"shadow\"><span class=\"digit firstDigit\"></span></div></div>
                            <div class=\"msg\">OH!<span class=\"triangle\"></span></div>
                        </div>
                        <h2 class=\"h1\">Sorry! Page not found</h2>
                    </div>
                </div>
            </div>
        <!-- Error Page -->
</body>
  
  

    <script  src=\"";
        // line 48
        echo twig_escape_filter($this->env, base_url("assets/404/js/index.js"), "html", null, true);
        echo "\"></script>




</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "error/e404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 48,  56 => 19,  51 => 17,  45 => 15,  42 => 14,  39 => 13,  36 => 12,  33 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set now = date('YmdHis') %}
<!DOCTYPE html>
<html lang=\"en\" >

<head>
  <meta charset=\"UTF-8\">
  <title>404 Page Not Found</title>
  
  \t    <!-- Favicon -->
\t    {% if file_exists('uploads/favicon') %}
\t      {% set favicon = 'uploads/favicon' %}
\t    {% else %}
\t      {% set favicon = 'assets/favicon.png' %}
\t    {% endif %}
\t    <link rel=\"shortcut icon\" href=\"{{ base_url(favicon) ~ '?time=' ~ now }}\"/>

      <link rel=\"stylesheet\" href=\"{{ base_url('assets/404/css/bootstrap.min.css') }}\">

      <link rel=\"stylesheet\" href=\"{{ base_url('assets/404/css/style.css') }}\">

  
</head>

<body>

  <link href='https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption' rel='stylesheet' type='text/css'>
<body>

        <!-- Error Page -->
            <div class=\"error\">
                <div class=\"container-floud\">
                    <div class=\"col-xs-12 ground-color text-center\">
                        <div class=\"container-error-404\">
                            <div class=\"clip\"><div class=\"shadow\"><span class=\"digit thirdDigit\"></span></div></div>
                            <div class=\"clip\"><div class=\"shadow\"><span class=\"digit secondDigit\"></span></div></div>
                            <div class=\"clip\"><div class=\"shadow\"><span class=\"digit firstDigit\"></span></div></div>
                            <div class=\"msg\">OH!<span class=\"triangle\"></span></div>
                        </div>
                        <h2 class=\"h1\">Sorry! Page not found</h2>
                    </div>
                </div>
            </div>
        <!-- Error Page -->
</body>
  
  

    <script  src=\"{{ base_url('assets/404/js/index.js') }}\"></script>




</body>

</html>
", "error/e404.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/error/e404.twig");
    }
}
