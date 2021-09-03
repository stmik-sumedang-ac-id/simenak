<?php

/* user/ubah.twig */
class __TwigTemplate_95e15da3559b6a17a397303c9668e0f442ad58e9d3fa436fdd25e1d4fc6e4ab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.twig", "user/ubah.twig", 1);
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
        $this->loadTemplate("user/nav.twig", "user/ubah.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <h3 class=\"tile-title\">Ubah User</h3>
        <div class=\"tile-body\">
          <form id=\"form_ubah\" method=\"post\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url("user/aksi_ubah"), "html", null, true);
        echo "\">
            
            <input type=\"hidden\" name=\"where[id]\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">

            <div class=\"form-group\">
              <label class=\"control-label\">Nama</label>
              <input class=\"form-control\" required type=\"text\" placeholder=\"Masukan Nama\" name=\"data[nama]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nama", array()), "html", null, true);
        echo "\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Username</label>
              <input class=\"form-control\" required type=\"text\" placeholder=\"Masukan Username\" name=\"data[username]\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Level</label>
              <select id=\"level\" class=\"form-control select2\" required name=\"data[level]\">
                <option ";
        // line 30
        echo ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level", array()) == "1")) ? ("selected") : (null));
        echo " value=\"1\">Administrator</option>
                <option ";
        // line 31
        echo ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level", array()) == "2")) ? ("selected") : (null));
        echo " value=\"2\">DPM</option>
                <option ";
        // line 32
        echo ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level", array()) == "3")) ? ("selected") : (null));
        echo " value=\"3\">Prodi</option>
              </select>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Prodi</label>
              <select id=\"prodi\" class=\"form-control select2\" name=\"data[prodi_id]\">
              </select>
            </div>            

            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan_ubah\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, base_url("user"), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" id=\"submit_ubah\" style=\"visibility: hidden;\">
            </div>
          </form>
      </div>
    </div>

    <div class=\"col-md-12\">
      <div class=\"tile\">
        <h3 class=\"tile-title\">Ubah Password</h3>
        <div class=\"tile-body\">
          <form id=\"form_ubah_password\" method=\"post\" action=\"";
        // line 56
        echo twig_escape_filter($this->env, base_url("user/aksi_ubah_password"), "html", null, true);
        echo "\">
            
            <input type=\"hidden\" name=\"where[id]\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">

            <div class=\"form-group\">
              <label class=\"control-label\">Password</label>
              <input class=\"form-control\" id=\"password\" required type=\"password\" placeholder=\"Masukan Password\" name=\"data[password]\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Ulangi Password</label>
              <input class=\"form-control\" id=\"password2\" required type=\"password\" placeholder=\"Ulangi Password\">
            </div>

            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan_ubah_password\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, base_url("user"), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" id=\"submit_ubah_password\" style=\"visibility: hidden;\">
            </div>
          </form>
      </div>
    </div>
  </div>
";
    }

    // line 82
    public function block_js($context, array $blocks = array())
    {
        // line 83
        echo "  <script type=\"text/javascript\">
  \$('#simpan_ubah').click(function(){
    \$(\"#submit_ubah\").click();
  });

  \$('#simpan_ubah_password').click(function(){
    \$(\"#submit_ubah_password\").click();
  });

  \$('#form_ubah_password').submit(function() {
    if (\$(\"#password\").val() != \$(\"#password2\").val()) {
      swal(\"Error !!!\", \"Password Tidak Sama !!!\", \"error\");
      return false;
    } else {
      \$(\"#form_ubah_password\").submit();      
    }
  });

  \$(function() {
    \$(\".select2\").select2();

    \$(\"#prodi\").prop('disabled', true);

    \$(\"#level\").change(function() {
      ganti();
    });

    ganti('";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "prodi_id", array()), "html", null, true);
        echo "');
  });

  function ganti(isi) {
      if (\$(\"#level\").val() == 3) {
        \$.ajax({
            type: \"get\", 
            url: \"";
        // line 117
        echo twig_escape_filter($this->env, base_url("user/ajax_prodi/"), "html", null, true);
        echo "\",
            timeout: 5000,
            success: function(data) {
                \$(\"#prodi\").html(data);
                \$(\"#prodi\").prop('disabled', false);
                \$(\"#prodi\").prop('required', true);
                
                if (isi != '') {
                  \$(\"#prodi\").val(isi);
                }

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
    }
  </script>
";
    }

    public function getTemplateName()
    {
        return "user/ubah.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 117,  182 => 110,  153 => 83,  150 => 82,  139 => 74,  120 => 58,  115 => 56,  102 => 46,  85 => 32,  81 => 31,  77 => 30,  68 => 24,  60 => 19,  53 => 15,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
        <h3 class=\"tile-title\">Ubah User</h3>
        <div class=\"tile-body\">
          <form id=\"form_ubah\" method=\"post\" action=\"{{ base_url('user/aksi_ubah') }}\">
            
            <input type=\"hidden\" name=\"where[id]\" value=\"{{ user.id }}\">

            <div class=\"form-group\">
              <label class=\"control-label\">Nama</label>
              <input class=\"form-control\" required type=\"text\" placeholder=\"Masukan Nama\" name=\"data[nama]\" value=\"{{ user.nama }}\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Username</label>
              <input class=\"form-control\" required type=\"text\" placeholder=\"Masukan Username\" name=\"data[username]\" value=\"{{ user.username }}\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Level</label>
              <select id=\"level\" class=\"form-control select2\" required name=\"data[level]\">
                <option {{ user.level == '1' ? 'selected' : null }} value=\"1\">Administrator</option>
                <option {{ user.level == '2' ? 'selected' : null }} value=\"2\">DPM</option>
                <option {{ user.level == '3' ? 'selected' : null }} value=\"3\">Prodi</option>
              </select>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Prodi</label>
              <select id=\"prodi\" class=\"form-control select2\" name=\"data[prodi_id]\">
              </select>
            </div>            

            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan_ubah\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"{{ base_url('user') }}\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" id=\"submit_ubah\" style=\"visibility: hidden;\">
            </div>
          </form>
      </div>
    </div>

    <div class=\"col-md-12\">
      <div class=\"tile\">
        <h3 class=\"tile-title\">Ubah Password</h3>
        <div class=\"tile-body\">
          <form id=\"form_ubah_password\" method=\"post\" action=\"{{ base_url('user/aksi_ubah_password') }}\">
            
            <input type=\"hidden\" name=\"where[id]\" value=\"{{ user.id }}\">

            <div class=\"form-group\">
              <label class=\"control-label\">Password</label>
              <input class=\"form-control\" id=\"password\" required type=\"password\" placeholder=\"Masukan Password\" name=\"data[password]\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Ulangi Password</label>
              <input class=\"form-control\" id=\"password2\" required type=\"password\" placeholder=\"Ulangi Password\">
            </div>

            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan_ubah_password\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"{{ base_url('user') }}\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" id=\"submit_ubah_password\" style=\"visibility: hidden;\">
            </div>
          </form>
      </div>
    </div>
  </div>
{% endblock %}

{% block js %}
  <script type=\"text/javascript\">
  \$('#simpan_ubah').click(function(){
    \$(\"#submit_ubah\").click();
  });

  \$('#simpan_ubah_password').click(function(){
    \$(\"#submit_ubah_password\").click();
  });

  \$('#form_ubah_password').submit(function() {
    if (\$(\"#password\").val() != \$(\"#password2\").val()) {
      swal(\"Error !!!\", \"Password Tidak Sama !!!\", \"error\");
      return false;
    } else {
      \$(\"#form_ubah_password\").submit();      
    }
  });

  \$(function() {
    \$(\".select2\").select2();

    \$(\"#prodi\").prop('disabled', true);

    \$(\"#level\").change(function() {
      ganti();
    });

    ganti('{{ user.prodi_id }}');
  });

  function ganti(isi) {
      if (\$(\"#level\").val() == 3) {
        \$.ajax({
            type: \"get\", 
            url: \"{{ base_url('user/ajax_prodi/') }}\",
            timeout: 5000,
            success: function(data) {
                \$(\"#prodi\").html(data);
                \$(\"#prodi\").prop('disabled', false);
                \$(\"#prodi\").prop('required', true);
                
                if (isi != '') {
                  \$(\"#prodi\").val(isi);
                }

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
    }
  </script>
{% endblock %}", "user/ubah.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/user/ubah.twig");
    }
}
