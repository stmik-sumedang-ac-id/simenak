<?php

/* profil/index.twig */
class __TwigTemplate_0e2c022c89eae947db4c6b543624bc5f26ef97a6aef66c2aa9c0126975b0d846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.twig", "profil/index.twig", 1);
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
        $this->loadTemplate("profil/nav.twig", "profil/index.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <h3 class=\"tile-title\">Ubah Profil</h3>
        <div class=\"tile-body\">
          <form id=\"form_ubah\" method=\"post\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url("profil/aksi_ubah"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
            
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
              <input class=\"form-control\" required readonly type=\"text\" placeholder=\"Masukan Username\" name=\"data[username]\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "\">
            </div>
            
            <div class=\"form-group\">
              <label class=\"control-label\">Level</label>
              ";
        // line 29
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level", array()) == 1)) {
            // line 30
            echo "                ";
            $context["level"] = "Administrator";
            // line 31
            echo "              ";
        } elseif (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level", array()) == 2)) {
            // line 32
            echo "                ";
            $context["level"] = "DPM";
            // line 33
            echo "              ";
        } else {
            // line 34
            echo "                ";
            $context["level"] = (("Prodi (" . $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "prodi", array())) . ")");
            // line 35
            echo "              ";
        }
        // line 36
        echo "              <input class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["level"]) ? $context["level"] : null), "html", null, true);
        echo "\" readonly>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Foto</label>
              <input class=\"form-control\" type=\"file\" name=\"foto\">
            </div>

            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan_ubah\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
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
        // line 58
        echo twig_escape_filter($this->env, base_url("profil/aksi_ubah_password"), "html", null, true);
        echo "\">
            
            <input type=\"hidden\" name=\"where[id]\" value=\"";
        // line 60
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
        // line 76
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" id=\"submit_ubah_password\" style=\"visibility: hidden;\">
            </div>
          </form>
      </div>
    </div>
  </div>
";
    }

    // line 84
    public function block_js($context, array $blocks = array())
    {
        // line 85
        echo "  <script type=\"text/javascript\">
  \$('#simpan_ubah').click(function(){
    \$(\"#submit_ubah\").click();
  });

  \$('#simpan_ubah_password').click(function(){
    \$(\"#submit_ubah_password\").click();
  });

  \$('.select2').select2();

  \$('#form_ubah_password').submit(function() {
    if (\$(\"#password\").val() != \$(\"#password2\").val()) {
      swal(\"Error !!!\", \"Password Tidak Sama !!!\", \"error\");
      return false;
    } else {
      \$(\"#form_ubah_password\").submit();      
    }
  });
  </script>
";
    }

    public function getTemplateName()
    {
        return "profil/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 85,  160 => 84,  149 => 76,  130 => 60,  125 => 58,  112 => 48,  96 => 36,  93 => 35,  90 => 34,  87 => 33,  84 => 32,  81 => 31,  78 => 30,  76 => 29,  68 => 24,  60 => 19,  53 => 15,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
  {% include 'profil/nav.twig' %}
{% endblock %}

{% block content %}
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <h3 class=\"tile-title\">Ubah Profil</h3>
        <div class=\"tile-body\">
          <form id=\"form_ubah\" method=\"post\" action=\"{{ base_url('profil/aksi_ubah') }}\" enctype=\"multipart/form-data\">
            
            <input type=\"hidden\" name=\"where[id]\" value=\"{{ user.id }}\">

            <div class=\"form-group\">
              <label class=\"control-label\">Nama</label>
              <input class=\"form-control\" required type=\"text\" placeholder=\"Masukan Nama\" name=\"data[nama]\" value=\"{{ user.nama }}\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Username</label>
              <input class=\"form-control\" required readonly type=\"text\" placeholder=\"Masukan Username\" name=\"data[username]\" value=\"{{ user.username }}\">
            </div>
            
            <div class=\"form-group\">
              <label class=\"control-label\">Level</label>
              {% if user.level == 1 %}
                {% set level = 'Administrator' %}
              {% elseif user.level == 2 %}
                {% set level = 'DPM' %}
              {% else %}
                {% set level = 'Prodi (' ~ addon.prodi ~ ')' %}
              {% endif %}
              <input class=\"form-control\" value=\"{{ level }}\" readonly>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Foto</label>
              <input class=\"form-control\" type=\"file\" name=\"foto\">
            </div>

            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan_ubah\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"{{ base_url() }}\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" id=\"submit_ubah\" style=\"visibility: hidden;\">
            </div>
          </form>
      </div>
    </div>

    <div class=\"col-md-12\">
      <div class=\"tile\">
        <h3 class=\"tile-title\">Ubah Password</h3>
        <div class=\"tile-body\">
          <form id=\"form_ubah_password\" method=\"post\" action=\"{{ base_url('profil/aksi_ubah_password') }}\">
            
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
              <a class=\"btn btn-secondary\" href=\"{{ base_url() }}\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" id=\"submit_ubah_password\" style=\"visibility: hidden;\">
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

  \$('.select2').select2();

  \$('#form_ubah_password').submit(function() {
    if (\$(\"#password\").val() != \$(\"#password2\").val()) {
      swal(\"Error !!!\", \"Password Tidak Sama !!!\", \"error\");
      return false;
    } else {
      \$(\"#form_ubah_password\").submit();      
    }
  });
  </script>
{% endblock %}", "profil/index.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/profil/index.twig");
    }
}
