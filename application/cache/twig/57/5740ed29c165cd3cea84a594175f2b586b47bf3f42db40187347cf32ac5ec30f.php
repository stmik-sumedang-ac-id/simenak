<?php

/* error/e404.twig */
class __TwigTemplate_76aa63c29c51af1039dc25aa4f093b08239a751d48fc50f675c6a0cec456b5f5 extends Twig_Template
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
  
  \t    <!-- Favicon -->";
        // line 10
        if (file_exists("uploads/favicon")) {
            // line 11
            $context["favicon"] = "uploads/favicon";
        } else {
            // line 13
            $context["favicon"] = "assets/favicon.png";
        }
        // line 15
        echo "\t    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, ((base_url(($context["favicon"] ?? null)) . "?time=") . ($context["now"] ?? null)), "html", null, true);
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
        return array (  81 => 48,  49 => 19,  44 => 17,  38 => 15,  35 => 13,  32 => 11,  30 => 10,  21 => 2,  19 => 1,);
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
", "error/e404.twig", "/home/u7998733/public_html/data/application/views/error/e404.twig");
    }
}
