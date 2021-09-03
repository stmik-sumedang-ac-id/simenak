<?php

/* template/template.twig */
class __TwigTemplate_80de381be1eac1d24ea13b1a61774c9fbea486be883d5719492af9f537f6c324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["now"] = date("YmdHis");
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Main CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, base_url("assets/css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url("assets/css/daterangepicker.css"), "html", null, true);
        echo "\">
    <!-- Font-icon css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <title>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["CI"]) ? $context["CI"] : null), "db", array()), "get", array(0 => "config"), "method"), "row", array(), "method"), "judul_aplikasi", array()), "html", null, true);
        echo "</title>

    <!-- Favicon -->
    ";
        // line 16
        if (file_exists("uploads/favicon")) {
            // line 17
            echo "      ";
            $context["favicon"] = "uploads/favicon";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "      ";
            $context["favicon"] = "assets/favicon.png";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, ((base_url((isset($context["favicon"]) ? $context["favicon"] : null)) . "?time=") . (isset($context["now"]) ? $context["now"] : null)), "html", null, true);
        echo "\"/>
  </head>
  <body class=\"app sidebar-mini rtl\">
    <!-- Navbar-->
    <header class=\"app-header\"><a class=\"app-header__logo\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["CI"]) ? $context["CI"] : null), "db", array()), "get", array(0 => "config"), "method"), "row", array(), "method"), "judul_menu", array()), "html", null, true);
        echo "</a>
      <!-- Sidebar toggle button--><a class=\"app-sidebar__toggle\" href=\"#\" data-toggle=\"sidebar\" aria-label=\"Hide Sidebar\"></a>
      <!-- Navbar Right Menu-->
      <ul class=\"app-nav\">
        <!-- User Menu-->
        <li class=\"dropdown\"><a class=\"app-nav__item\" href=\"#\" data-toggle=\"dropdown\" aria-label=\"Open Profile Menu\"><i class=\"fa fa-user fa-lg\"></i></a>
          <ul class=\"dropdown-menu settings-menu dropdown-menu-right\">
            <li><a class=\"dropdown-item\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, base_url("profil"), "html", null, true);
        echo "\"><i class=\"fa fa-user fa-lg\"></i> Profile</a></li>
            <li><a class=\"dropdown-item\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, base_url("logout"), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out fa-lg\"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class=\"app-sidebar__overlay\" data-toggle=\"sidebar\"></div>
    <aside class=\"app-sidebar\">
      <!-- User Image -->
      ";
        // line 42
        if (file_exists(("uploads/userimage/" . $this->getAttribute($this->getAttribute((isset($context["CI"]) ? $context["CI"] : null), "session", array()), "id", array())))) {
            // line 43
            echo "        ";
            $context["userimage"] = ("uploads/userimage/" . $this->getAttribute($this->getAttribute((isset($context["CI"]) ? $context["CI"] : null), "session", array()), "id", array()));
            // line 44
            echo "      ";
        } else {
            // line 45
            echo "        ";
            $context["userimage"] = "assets/user.png";
            // line 46
            echo "      ";
        }
        // line 47
        echo "
      <div class=\"app-sidebar__user\"><img class=\"app-sidebar__user-avatar\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, ((base_url((isset($context["userimage"]) ? $context["userimage"] : null)) . "?time=") . (isset($context["now"]) ? $context["now"] : null)), "html", null, true);
        echo "\" alt=\"User Image\">
        <div>
          <p class=\"app-sidebar__user-name\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["CI"]) ? $context["CI"] : null), "session", array()), "nama", array()), "html", null, true);
        echo "</p>
          <p class=\"app-sidebar__user-designation\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["CI"]) ? $context["CI"] : null), "session", array()), "username", array()), "html", null, true);
        echo "</p>
        </div>
      </div>
      <ul class=\"app-menu\">
        
        ";
        // line 56
        if (($this->getAttribute($this->getAttribute((isset($context["CI"]) ? $context["CI"] : null), "session", array()), "level", array()) == 1)) {
            // line 57
            echo "          ";
            echo twig_include($this->env, $context, "template/menu_admin.twig");
            echo "
        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 58
(isset($context["CI"]) ? $context["CI"] : null), "session", array()), "level", array()) == 2)) {
            // line 59
            echo "          ";
            echo twig_include($this->env, $context, "template/menu_dpm.twig");
            echo "
        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 60
(isset($context["CI"]) ? $context["CI"] : null), "session", array()), "level", array()) == 3)) {
            // line 61
            echo "          ";
            echo twig_include($this->env, $context, "template/menu_prodi.twig");
            echo "
        ";
        }
        // line 63
        echo "
      </ul>
    </aside>
    <main class=\"app-content\">
      ";
        // line 67
        $this->displayBlock('nav', $context, $blocks);
        // line 68
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "    </main>
    <!-- Start JS -->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, base_url("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, base_url("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, base_url("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, base_url("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/bootstrap-notify.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/chart.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/sweetalert2.all.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, base_url("assets/js/plugins/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- End JS -->

    <!-- JS Manual -->
    ";
        // line 94
        $this->displayBlock('js', $context, $blocks);
        // line 95
        echo "
  </body>
</html>";
    }

    // line 67
    public function block_nav($context, array $blocks = array())
    {
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
    }

    // line 94
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "template/template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 94,  263 => 68,  258 => 67,  252 => 95,  250 => 94,  243 => 90,  239 => 89,  235 => 88,  231 => 87,  227 => 86,  223 => 85,  219 => 84,  215 => 83,  211 => 82,  207 => 81,  203 => 80,  199 => 79,  195 => 78,  191 => 77,  187 => 76,  182 => 74,  178 => 73,  174 => 72,  170 => 71,  166 => 69,  163 => 68,  161 => 67,  155 => 63,  149 => 61,  147 => 60,  142 => 59,  140 => 58,  135 => 57,  133 => 56,  125 => 51,  121 => 50,  116 => 48,  113 => 47,  110 => 46,  107 => 45,  104 => 44,  101 => 43,  99 => 42,  87 => 33,  83 => 32,  71 => 25,  63 => 21,  60 => 20,  57 => 19,  54 => 18,  51 => 17,  49 => 16,  43 => 13,  37 => 10,  33 => 9,  24 => 2,  22 => 1,);
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
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Main CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url('assets/css/main.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url('assets/css/daterangepicker.css') }}\">
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
  <body class=\"app sidebar-mini rtl\">
    <!-- Navbar-->
    <header class=\"app-header\"><a class=\"app-header__logo\" href=\"{{ base_url() }}\">{{ CI.db.get('config').row().judul_menu }}</a>
      <!-- Sidebar toggle button--><a class=\"app-sidebar__toggle\" href=\"#\" data-toggle=\"sidebar\" aria-label=\"Hide Sidebar\"></a>
      <!-- Navbar Right Menu-->
      <ul class=\"app-nav\">
        <!-- User Menu-->
        <li class=\"dropdown\"><a class=\"app-nav__item\" href=\"#\" data-toggle=\"dropdown\" aria-label=\"Open Profile Menu\"><i class=\"fa fa-user fa-lg\"></i></a>
          <ul class=\"dropdown-menu settings-menu dropdown-menu-right\">
            <li><a class=\"dropdown-item\" href=\"{{ base_url('profil') }}\"><i class=\"fa fa-user fa-lg\"></i> Profile</a></li>
            <li><a class=\"dropdown-item\" href=\"{{ base_url('logout') }}\"><i class=\"fa fa-sign-out fa-lg\"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class=\"app-sidebar__overlay\" data-toggle=\"sidebar\"></div>
    <aside class=\"app-sidebar\">
      <!-- User Image -->
      {% if file_exists('uploads/userimage/' ~ CI.session.id) %}
        {% set userimage = 'uploads/userimage/' ~ CI.session.id %}
      {% else %}
        {% set userimage = 'assets/user.png' %}
      {% endif %}

      <div class=\"app-sidebar__user\"><img class=\"app-sidebar__user-avatar\" src=\"{{ base_url(userimage) ~ '?time=' ~ now }}\" alt=\"User Image\">
        <div>
          <p class=\"app-sidebar__user-name\">{{ CI.session.nama }}</p>
          <p class=\"app-sidebar__user-designation\">{{ CI.session.username }}</p>
        </div>
      </div>
      <ul class=\"app-menu\">
        
        {% if CI.session.level == 1 %}
          {{ include('template/menu_admin.twig') }}
        {% elseif CI.session.level == 2 %}
          {{ include('template/menu_dpm.twig') }}
        {% elseif CI.session.level == 3 %}
          {{ include('template/menu_prodi.twig') }}
        {% endif %}

      </ul>
    </aside>
    <main class=\"app-content\">
      {% block nav %}{% endblock %}
      {% block content %}{% endblock %}
    </main>
    <!-- Start JS -->
    <script src=\"{{ base_url('assets/js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ base_url('assets/js/popper.min.js') }}\"></script>
    <script src=\"{{ base_url('assets/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ base_url('assets/js/main.js') }}\"></script>
    
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/bootstrap-datepicker.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/bootstrap-notify.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/chart.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/moment.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/fullcalendar.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/jquery.vmap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/jquery.vmap.sampledata.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/jquery.vmap.world.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/jquery-ui.custom.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/pace.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/select2.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/sweetalert2.all.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/dataTables.bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url('assets/js/plugins/daterangepicker.js') }}\"></script>
    <!-- End JS -->

    <!-- JS Manual -->
    {% block js %}{% endblock %}

  </body>
</html>", "template/template.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/template/template.twig");
    }
}
