<?php

/* user/tambah.twig */
class __TwigTemplate_4ce999cf9819fe2f51aff04f416dc304619fed100f15d25df5c610388469d0ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.twig", "user/tambah.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template/template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->loadTemplate("user/nav.twig", "user/tambah.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <h3 class=\"tile-title\">Tambah User</h3>
        <div class=\"tile-body\">
          <form method=\"post\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url("user/aksi_tambah"), "html", null, true);
        echo "\">
            
            <div class=\"form-group\">
              <label class=\"control-label\">Nama</label>
              <input class=\"form-control\" type=\"text\" required placeholder=\"Masukan Nama\" name=\"data[nama]\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Username</label>
              <input class=\"form-control\" type=\"text\" required placeholder=\"Masukan Username\" name=\"data[username]\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Password</label>
              <input class=\"form-control\" type=\"password\" required placeholder=\"Masukan Password\" name=\"data[password]\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Level</label>
              <select id=\"level\" class=\"form-control select2\" required name=\"data[level]\">
                <option value=\"1\">Administrator</option>
                <option value=\"2\">DPM</option>
                <option value=\"3\">Prodi</option>
              </select>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Prodi</label>
              <select id=\"prodi\" class=\"form-control select2\" name=\"data[prodi_id]\">
              </select>
            </div>            

            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, base_url("user"), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" style=\"visibility: hidden;\">
            </div>
          </form>
      </div>
    </div>
  </div>
";
    }

    // line 57
    public function block_js($context, array $blocks = array())
    {
        // line 58
        echo "  <script type=\"text/javascript\">
  \$('#simpan').click(function(){
    \$(\"input[type='submit']\").click();
  });

  \$(\".select2\").select2();

  \$(function() {
    \$(\"#prodi\").prop('disabled', true);

    \$(\"#level\").change(function() {
      if (\$(\"#level\").val() == 3) {
        \$.ajax({
            type: \"get\", 
            url: \"";
        // line 72
        echo twig_escape_filter($this->env, base_url("user/ajax_prodi/"), "html", null, true);
        echo "\",
            timeout: 5000,
            success: function(data) {
                \$(\"#prodi\").html(data);
                \$(\"#prodi\").prop('disabled', false);
                \$(\"#prodi\").prop('required', true);
                
                \$(\"#prodi\").select2();
            },
            error: function(data) {
                swal('ERROR !!!', 'Terjadi Kesalahan !!!', 'error');
                
                console.log(data)
            }
        });
      } else {
        \$(\"#prodi\").prop('disabled', true);
        \$(\"#prodi\").prop('required', false);
        \$(\"#prodi\").html(\"\");
        \$(\"#prodi\").select2();
      }
    });
  });
  </script>
";
    }

    public function getTemplateName()
    {
        return "user/tambah.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 72,  101 => 58,  98 => 57,  87 => 49,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template/template.twig' %}

{% block nav %}
  {% include('user/nav.twig') %}
{% endblock %}

{% block content %}
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <h3 class=\"tile-title\">Tambah User</h3>
        <div class=\"tile-body\">
          <form method=\"post\" action=\"{{ base_url('user/aksi_tambah') }}\">
            
            <div class=\"form-group\">
              <label class=\"control-label\">Nama</label>
              <input class=\"form-control\" type=\"text\" required placeholder=\"Masukan Nama\" name=\"data[nama]\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Username</label>
              <input class=\"form-control\" type=\"text\" required placeholder=\"Masukan Username\" name=\"data[username]\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Password</label>
              <input class=\"form-control\" type=\"password\" required placeholder=\"Masukan Password\" name=\"data[password]\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Level</label>
              <select id=\"level\" class=\"form-control select2\" required name=\"data[level]\">
                <option value=\"1\">Administrator</option>
                <option value=\"2\">DPM</option>
                <option value=\"3\">Prodi</option>
              </select>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Prodi</label>
              <select id=\"prodi\" class=\"form-control select2\" name=\"data[prodi_id]\">
              </select>
            </div>            

            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"{{ base_url('user') }}\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" style=\"visibility: hidden;\">
            </div>
          </form>
      </div>
    </div>
  </div>
{% endblock %}

{% block js %}
  <script type=\"text/javascript\">
  \$('#simpan').click(function(){
    \$(\"input[type='submit']\").click();
  });

  \$(\".select2\").select2();

  \$(function() {
    \$(\"#prodi\").prop('disabled', true);

    \$(\"#level\").change(function() {
      if (\$(\"#level\").val() == 3) {
        \$.ajax({
            type: \"get\", 
            url: \"{{ base_url('user/ajax_prodi/') }}\",
            timeout: 5000,
            success: function(data) {
                \$(\"#prodi\").html(data);
                \$(\"#prodi\").prop('disabled', false);
                \$(\"#prodi\").prop('required', true);
                
                \$(\"#prodi\").select2();
            },
            error: function(data) {
                swal('ERROR !!!', 'Terjadi Kesalahan !!!', 'error');
                
                console.log(data)
            }
        });
      } else {
        \$(\"#prodi\").prop('disabled', true);
        \$(\"#prodi\").prop('required', false);
        \$(\"#prodi\").html(\"\");
        \$(\"#prodi\").select2();
      }
    });
  });
  </script>
{% endblock %}
", "user/tambah.twig", "/Users/yysofiyan/Desktop/Gitlab/borang_stmik/application/views/user/tambah.twig");
    }
}
