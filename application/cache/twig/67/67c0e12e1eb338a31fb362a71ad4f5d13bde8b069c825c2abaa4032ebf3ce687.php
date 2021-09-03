<?php

/* template/login.twig */
class __TwigTemplate_78b8adbf8c91139f71921cf90e1d441d36415706d40ec8d20674fcaff47c7558 extends Twig_Template
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
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Main CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, base_url("assets/css/main.css"), "html", null, true);
        echo "\">
    <!-- Font-icon css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <title>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["CI"] ?? null), "db", array()), "get", array(0 => "config"), "method"), "row", array(), "method"), "judul_aplikasi", array()), "html", null, true);
        echo "</title>

    <!-- Favicon -->
    ";
        // line 15
        if (file_exists("uploads/favicon")) {
            // line 16
            echo "      ";
            $context["favicon"] = "uploads/favicon";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "      ";
            $context["favicon"] = "assets/favicon.png";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, ((base_url(($context["favicon"] ?? null)) . "?time=") . ($context["now"] ?? null)), "html", null, true);
        echo "\"/>
  </head>
  <body>
    <section class=\"material-half-bg\">
      <div class=\"cover\"></div>
    </section>
    <section class=\"login-content\">
      <div class=\"logo\">
        <h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["CI"] ?? null), "db", array()), "get", array(0 => "config"), "method"), "row", array(), "method"), "judul_aplikasi", array()), "html", null, true);
        echo "</h1>
      </div>
      <div class=\"login-box\">
        <form class=\"login-form\" method=\"post\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, base_url("welcome/login"), "html", null, true);
        echo "\">
          <h3 class=\"login-head\"><i class=\"fa fa-lg fa-fw fa-user\"></i>SIGN IN</h3>
          <div class=\"form-group\">
            <label class=\"control-label\">USERNAME</label>
            <input class=\"form-control\" type=\"text\" required name=\"username\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flashdata"] ?? null), "username", array(), "array"), "html", null, true);
        echo "\" placeholder=\"Username\" autofocus>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\">PASSWORD</label>
            <input class=\"form-control\" type=\"password\" required name=\"password\" placeholder=\"Password\">
          </div>
          <br>
          <div class=\"form-group btn-container\">
            <button class=\"btn btn-primary btn-block\"><i class=\"fa fa-sign-in fa-lg fa-fw\"></i>SIGN IN</button>
          </div>
        </form>
      </div>
      <h10 class=\"control-text\">2019 © Bagian Sistem Informasi - STMIK Sumedang</h10>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, base_url("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, base_url("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, base_url("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, base_url("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/sweetalert2.all.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
      // Login Page Flipbox control
      \$('.login-content [data-toggle=\"flip\"]').click(function() {
      \t\$('.login-box').toggleClass('flipped');
      \treturn false;
      });
    </script>
  </body>
</html>

<script type=\"text/javascript\">
\$('form').submit(function(e) {
  e.preventDefault();
  
  \$.ajax({
    url: \"";
        // line 72
        echo twig_escape_filter($this->env, base_url("welcome/login"), "html", null, true);
        echo "\",
    type: 'post',
    data: \$('form').serialize(),
    success: function(respone){ 
      respon = JSON.parse(respone);

      if (respon.login == true) {
        window.location = \"";
        // line 79
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\";
      } else {
        swal(respon.header, respon.pesan, respon.status);
      }
    },
    error: function(respone){
      swal('ERROR !!!', 'Ada Kesalahan !!!', 'error');
    }
  });
});
</script>";
    }

    public function getTemplateName()
    {
        return "template/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 79,  139 => 72,  120 => 56,  116 => 55,  111 => 53,  107 => 52,  103 => 51,  99 => 50,  81 => 35,  74 => 31,  68 => 28,  56 => 20,  53 => 19,  50 => 18,  47 => 17,  44 => 16,  42 => 15,  36 => 12,  30 => 9,  21 => 2,  19 => 1,);
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
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Main CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url('assets/css/main.css') }}\">
    <!-- Font-icon css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <title>{{ CI.db.get('config').row().judul_aplikasi }}</title>

    <!-- Favicon -->
    {% if file_exists('uploads/favicon') %}
      {% set favicon = 'uploads/favicon' %}
    {% else %}
      {% set favicon = 'assets/favicon.png' %}
    {% endif %}
    <link rel=\"shortcut icon\" href=\"{{ base_url(favicon) ~ '?time=' ~ now }}\"/>
  </head>
  <body>
    <section class=\"material-half-bg\">
      <div class=\"cover\"></div>
    </section>
    <section class=\"login-content\">
      <div class=\"logo\">
        <h1>{{ CI.db.get('config').row().judul_aplikasi }}</h1>
      </div>
      <div class=\"login-box\">
        <form class=\"login-form\" method=\"post\" action=\"{{ base_url('welcome/login') }}\">
          <h3 class=\"login-head\"><i class=\"fa fa-lg fa-fw fa-user\"></i>SIGN IN</h3>
          <div class=\"form-group\">
            <label class=\"control-label\">USERNAME</label>
            <input class=\"form-control\" type=\"text\" required name=\"username\" value=\"{{ flashdata['username'] }}\" placeholder=\"Username\" autofocus>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\">PASSWORD</label>
            <input class=\"form-control\" type=\"password\" required name=\"password\" placeholder=\"Password\">
          </div>
          <br>
          <div class=\"form-group btn-container\">
            <button class=\"btn btn-primary btn-block\"><i class=\"fa fa-sign-in fa-lg fa-fw\"></i>SIGN IN</button>
          </div>
        </form>
      </div>
      <h10 class=\"control-text\">2019 © Bagian Sistem Informasi - STMIK Sumedang</h10>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src=\"{{ base_url(\"assets/js/jquery-3.2.1.min.js\") }}\"></script>
    <script src=\"{{ base_url(\"assets/js/popper.min.js\") }}\"></script>
    <script src=\"{{ base_url(\"assets/js/bootstrap.min.js\") }}\"></script>
    <script src=\"{{ base_url(\"assets/js/main.js\") }}\"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src=\"{{ base_url(\"assets/js/plugins/pace.min.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/sweetalert2.all.min.js') }}\"></script>
    <script type=\"text/javascript\">
      // Login Page Flipbox control
      \$('.login-content [data-toggle=\"flip\"]').click(function() {
      \t\$('.login-box').toggleClass('flipped');
      \treturn false;
      });
    </script>
  </body>
</html>

<script type=\"text/javascript\">
\$('form').submit(function(e) {
  e.preventDefault();
  
  \$.ajax({
    url: \"{{ base_url('welcome/login') }}\",
    type: 'post',
    data: \$('form').serialize(),
    success: function(respone){ 
      respon = JSON.parse(respone);

      if (respon.login == true) {
        window.location = \"{{ base_url() }}\";
      } else {
        swal(respon.header, respon.pesan, respon.status);
      }
    },
    error: function(respone){
      swal('ERROR !!!', 'Ada Kesalahan !!!', 'error');
    }
  });
});
</script>", "template/login.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/template/login.twig");
    }
}
