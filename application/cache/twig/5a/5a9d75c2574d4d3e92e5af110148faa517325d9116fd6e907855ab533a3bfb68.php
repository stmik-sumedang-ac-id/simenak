<?php

/* pengajuan/r.twig */
class __TwigTemplate_7d5901368ddec4c1b498b69bf81b84abdc57da202629c57997f4b3852feb0e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.twig", "pengajuan/r.twig", 1);
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
        $this->loadTemplate("pengajuan/nav.twig", "pengajuan/r.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <div class=\"tile-body\">
          <div class=\"tile-title-w-btn\">
            <h3 class=\"title\">Data Pengajuan</h3>
          </div>
          <table class=\"table table-hover table-bordered datatable\">
            <thead>
              <tr>
                <th>Prodi</th>
                <th>Tanggal Pengajuan</th>
                <th>Tahun Usulan</th>
                <th>Standar Akreditasi</th>
                <th>Persentase</th>
                <th>Proses</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>

    </div>
  </div>
";
    }

    // line 35
    public function block_js($context, array $blocks = array())
    {
        // line 36
        echo "  <script type=\"text/javascript\">
  var table = \$('.datatable').DataTable( {
      \"processing\": true,
      \"serverSide\": true,
      \"ajax\": {
          \"url\": \"";
        // line 41
        echo twig_escape_filter($this->env, base_url("pengajuan/ajax_r/"), "html", null, true);
        echo "\",
          \"type\": \"POST\"
      },
      columnDefs: [
          { targets: [3, 4, 5], orderable: false}
      ],
      \"scrollX\": true,
      \"autoWidth\": false,
  });

  function hapus(id) {
      swal({
          title: 'Apakah anda yakin?',
          text: \"Data akan dihapus!\",
          type: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Hapus!'
      }).then(function(result) {
          if (result.value) {
              \$.ajax({
                  type: \"get\", 
                  url: \"";
        // line 62
        echo twig_escape_filter($this->env, base_url("pengajuan/aksi_hapus/"), "html", null, true);
        echo "\" + id,
                  timeout: 5000,
                  success: function() {
                      table.ajax.reload();
                  },
                  error: function(data) {
                      swal('ERROR !!!', 'Terjadi Kesalahan !!!', 'error');
                      
                      console.log(data)
                  }
              });
          }
      });
  };

  function unduh(id) {
      \$.ajax({
          type: \"get\", 
          url: \"";
        // line 80
        echo twig_escape_filter($this->env, base_url("pengajuan/ajax_cek_berkas/"), "html", null, true);
        echo "\" + id,
          timeout: 5000,
          success: function(data) {
              if (data == '0') {
                swal('ERROR !!!', 'Belum ada berkas !!!', 'error');
              } else {
                // swal('gak error', 'gak error', 'gak error');
                window.location = \"";
        // line 87
        echo twig_escape_filter($this->env, base_url("pengajuan/berkas_batch/"), "html", null, true);
        echo "\" + id;
              }
          },
          error: function(data) {
              swal('ERROR !!!', 'Terjadi Kesalahan !!!', 'error');
              
              console.log(data)
          }
      });
  };

  \$('body').tooltip({selector: '[data-toggle=\"tooltip\"]'});
  </script>
";
    }

    public function getTemplateName()
    {
        return "pengajuan/r.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 87,  125 => 80,  104 => 62,  80 => 41,  73 => 36,  70 => 35,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
  {% include 'pengajuan/nav.twig' %}
{% endblock %}

{% block content %}
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <div class=\"tile-body\">
          <div class=\"tile-title-w-btn\">
            <h3 class=\"title\">Data Pengajuan</h3>
          </div>
          <table class=\"table table-hover table-bordered datatable\">
            <thead>
              <tr>
                <th>Prodi</th>
                <th>Tanggal Pengajuan</th>
                <th>Tahun Usulan</th>
                <th>Standar Akreditasi</th>
                <th>Persentase</th>
                <th>Proses</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>

    </div>
  </div>
{% endblock %}

{% block js %}
  <script type=\"text/javascript\">
  var table = \$('.datatable').DataTable( {
      \"processing\": true,
      \"serverSide\": true,
      \"ajax\": {
          \"url\": \"{{ base_url('pengajuan/ajax_r/') }}\",
          \"type\": \"POST\"
      },
      columnDefs: [
          { targets: [3, 4, 5], orderable: false}
      ],
      \"scrollX\": true,
      \"autoWidth\": false,
  });

  function hapus(id) {
      swal({
          title: 'Apakah anda yakin?',
          text: \"Data akan dihapus!\",
          type: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Hapus!'
      }).then(function(result) {
          if (result.value) {
              \$.ajax({
                  type: \"get\", 
                  url: \"{{ base_url('pengajuan/aksi_hapus/') }}\" + id,
                  timeout: 5000,
                  success: function() {
                      table.ajax.reload();
                  },
                  error: function(data) {
                      swal('ERROR !!!', 'Terjadi Kesalahan !!!', 'error');
                      
                      console.log(data)
                  }
              });
          }
      });
  };

  function unduh(id) {
      \$.ajax({
          type: \"get\", 
          url: \"{{ base_url('pengajuan/ajax_cek_berkas/') }}\" + id,
          timeout: 5000,
          success: function(data) {
              if (data == '0') {
                swal('ERROR !!!', 'Belum ada berkas !!!', 'error');
              } else {
                // swal('gak error', 'gak error', 'gak error');
                window.location = \"{{ base_url('pengajuan/berkas_batch/') }}\" + id;
              }
          },
          error: function(data) {
              swal('ERROR !!!', 'Terjadi Kesalahan !!!', 'error');
              
              console.log(data)
          }
      });
  };

  \$('body').tooltip({selector: '[data-toggle=\"tooltip\"]'});
  </script>
{% endblock %}", "pengajuan/r.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/pengajuan/r.twig");
    }
}
