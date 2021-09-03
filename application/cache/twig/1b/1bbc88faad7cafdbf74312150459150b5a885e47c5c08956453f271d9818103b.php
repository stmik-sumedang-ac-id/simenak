<?php

/* fakultas/index.twig */
class __TwigTemplate_cb9ebcd7fdcc1baa4fcf541263281a7d8962f495f217079cbf34c9c1a8655cc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.twig", "fakultas/index.twig", 1);
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
        $this->loadTemplate("fakultas/nav.twig", "fakultas/index.twig", 4)->display($context);
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
            <h3 class=\"title\">Data Fakultas</h3>
            <p><a class=\"btn btn-primary icon-btn\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url("fakultas/tambah"), "html", null, true);
        echo "\"><i class=\"fa fa-plus\"></i>Fakultas</a></p>
          </div>
          <table class=\"table table-hover table-bordered datatable\">
            <thead>
              <tr>
                <th>Nama</th>
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

    // line 32
    public function block_js($context, array $blocks = array())
    {
        // line 33
        echo "  <script type=\"text/javascript\">
  var table = \$('.datatable').DataTable( {
      \"processing\": true,
      \"serverSide\": true,
      \"ajax\": {
          \"url\": \"";
        // line 38
        echo twig_escape_filter($this->env, base_url("fakultas/ajax"), "html", null, true);
        echo "\",
          \"type\": \"POST\"
      },
      columnDefs: [
          { targets: [1], orderable: false}
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
        // line 59
        echo twig_escape_filter($this->env, base_url("fakultas/aksi_hapus/"), "html", null, true);
        echo "\" + id,
                  timeout: 5000,
                  success: function() {
                      table.ajax.reload();
                  },
                  error: function(data) {
                      swal('ERROR !!!', 'Tidak dapat menghapus Fakultas. Masih ada Prodi yang terkait dengan Fakultas ini.', 'error');
                      
                      console.log(data)
                  }
              });
          }
      });
  };

  \$('body').tooltip({selector: '[data-toggle=\"tooltip\"]'});
  </script>
";
    }

    public function getTemplateName()
    {
        return "fakultas/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 59,  80 => 38,  73 => 33,  70 => 32,  49 => 14,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
  {% include 'fakultas/nav.twig' %}
{% endblock %}

{% block content %}
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <div class=\"tile-body\">
          <div class=\"tile-title-w-btn\">
            <h3 class=\"title\">Data Fakultas</h3>
            <p><a class=\"btn btn-primary icon-btn\" href=\"{{ base_url('fakultas/tambah') }}\"><i class=\"fa fa-plus\"></i>Fakultas</a></p>
          </div>
          <table class=\"table table-hover table-bordered datatable\">
            <thead>
              <tr>
                <th>Nama</th>
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
          \"url\": \"{{ base_url('fakultas/ajax') }}\",
          \"type\": \"POST\"
      },
      columnDefs: [
          { targets: [1], orderable: false}
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
                  url: \"{{ base_url('fakultas/aksi_hapus/') }}\" + id,
                  timeout: 5000,
                  success: function() {
                      table.ajax.reload();
                  },
                  error: function(data) {
                      swal('ERROR !!!', 'Tidak dapat menghapus Fakultas. Masih ada Prodi yang terkait dengan Fakultas ini.', 'error');
                      
                      console.log(data)
                  }
              });
          }
      });
  };

  \$('body').tooltip({selector: '[data-toggle=\"tooltip\"]'});
  </script>
{% endblock %}", "fakultas/index.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/fakultas/index.twig");
    }
}
