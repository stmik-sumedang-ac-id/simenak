<?php

/* template/login.twig */
class __TwigTemplate_0618d8d8214689bf024732a88245b22e7230c05123c4232da16c2b193d9965d8 extends Twig_Template
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
  <head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1252\">
    
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Dokumentasi Akreditasi STMIK Sumedang\">
    <meta name=\"keywords\" content=\"Dokumen,Borang,akreditasi\">
    <meta name=\"author\" content=\"yysofiyan,Yan Yan Sofiyan, M.Kom\">
    <meta name=\"google-site-verification\" content=\"eXQo33eVYP6uW8MKeQ35RfBBIR6K2x0TzyKIe5MAFL8\" />
    <!-- Google Analytics-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-153676056-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153676056-1');
</script>
    <!-- End-->

    <!-- Main CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url("assets/css/main.css"), "html", null, true);
        echo "\">
    <!-- Font-icon css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <title>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["CI"] ?? null), "db", array()), "get", array(0 => "config"), "method"), "row", array(), "method"), "judul_aplikasi", array()), "html", null, true);
        echo "</title>

    <!-- Favicon -->
    ";
        // line 31
        if (file_exists("uploads/favicon")) {
            // line 32
            echo "      ";
            $context["favicon"] = "uploads/favicon";
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "      ";
            $context["favicon"] = "assets/favicon.png";
            // line 35
            echo "    ";
        }
        // line 36
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
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["CI"] ?? null), "db", array()), "get", array(0 => "config"), "method"), "row", array(), "method"), "judul_aplikasi", array()), "html", null, true);
        echo "</h1>
      </div>
      <div class=\"login-box\">
        <form class=\"login-form\" method=\"post\" action=\"";
        // line 47
        echo twig_escape_filter($this->env, base_url("welcome/login"), "html", null, true);
        echo "\">
          <h3 class=\"login-head\"><i class=\"fa fa-lg fa-fw fa-user\"></i>SIGN IN</h3>
          <div class=\"form-group\">
            <label class=\"control-label\">USERNAME</label>
            <input class=\"form-control\" type=\"text\" required name=\"username\" value=\"";
        // line 51
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
      </br>
      <h10 class=\"control-text\">2019 © BPSI 💙STMIK Sumedang</h10>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, base_url("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, base_url("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, base_url("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, base_url("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 73
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
        // line 89
        echo twig_escape_filter($this->env, base_url("welcome/login"), "html", null, true);
        echo "\",
    type: 'post',
    data: \$('form').serialize(),
    success: function(respone){ 
      respon = JSON.parse(respone);

      if (respon.login == true) {
        window.location = \"";
        // line 96
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
        return array (  166 => 96,  156 => 89,  137 => 73,  133 => 72,  128 => 70,  124 => 69,  120 => 68,  116 => 67,  97 => 51,  90 => 47,  84 => 44,  72 => 36,  69 => 35,  66 => 34,  63 => 33,  60 => 32,  58 => 31,  52 => 28,  46 => 25,  21 => 2,  19 => 1,);
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
  <head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1252\">
    
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Dokumentasi Akreditasi STMIK Sumedang\">
    <meta name=\"keywords\" content=\"Dokumen,Borang,akreditasi\">
    <meta name=\"author\" content=\"yysofiyan,Yan Yan Sofiyan, M.Kom\">
    <meta name=\"google-site-verification\" content=\"eXQo33eVYP6uW8MKeQ35RfBBIR6K2x0TzyKIe5MAFL8\" />
    <!-- Google Analytics-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-153676056-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153676056-1');
</script>
    <!-- End-->

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
      </br>
      <h10 class=\"control-text\">2019 © BPSI 💙STMIK Sumedang</h10>
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
</script>", "template/login.twig", "/home/u7998733/public_html/data/application/views/template/login.twig");
    }
}
