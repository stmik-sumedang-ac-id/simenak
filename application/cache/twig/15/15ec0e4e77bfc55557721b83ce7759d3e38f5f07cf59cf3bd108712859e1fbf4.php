<?php

/* butir/index.twig */
class __TwigTemplate_e1d4c0af1d705e84cc3ca2c75a5887c827ad856faa3e690e6fbf0de25a93fed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.twig", "butir/index.twig", 1);
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
        $this->loadTemplate("butir/nav.twig", "butir/index.twig", 4)->display($context);
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
            <h3 class=\"title\">Data Butir</h3>
            <p><a class=\"btn btn-primary icon-btn\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url(("butir/tambah/" . $this->getAttribute(($context["substandar"] ?? null), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-plus\"></i>Butir</a></p>
          </div>
          <table class=\"table table-hover table-bordered datatable\">
            <thead>
              <tr>
                <th>Nomor</th>
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

    // line 33
    public function block_js($context, array $blocks = array())
    {
        // line 34
        echo "  <script type=\"text/javascript\">
  var table = \$('.datatable').DataTable( {
      \"processing\": true,
      \"serverSide\": true,
      \"ajax\": {
          \"url\": \"";
        // line 39
        echo twig_escape_filter($this->env, base_url(("butir/ajax/" . $this->getAttribute(($context["substandar"] ?? null), "id", array()))), "html", null, true);
        echo "\",
          \"type\": \"POST\"
      },
      columnDefs: [
          { targets: [2], orderable: false}
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
        // line 60
        echo twig_escape_filter($this->env, base_url("butir/aksi_hapus/"), "html", null, true);
        echo "\" + id,
                  timeout: 5000,
                  success: function() {
                      table.ajax.reload();
                  },
                  error: function(data) {
                      swal('ERROR !!!', 'Tidak dapat menghapus Butir. Masih ada Berkas yang terkait dengan Butir ini.', 'error');
                      
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
        return "butir/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 60,  81 => 39,  74 => 34,  71 => 33,  49 => 14,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
  {% include 'butir/nav.twig' %}
{% endblock %}

{% block content %}
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <div class=\"tile-body\">
          <div class=\"tile-title-w-btn\">
            <h3 class=\"title\">Data Butir</h3>
            <p><a class=\"btn btn-primary icon-btn\" href=\"{{ base_url('butir/tambah/' ~ substandar.id) }}\"><i class=\"fa fa-plus\"></i>Butir</a></p>
          </div>
          <table class=\"table table-hover table-bordered datatable\">
            <thead>
              <tr>
                <th>Nomor</th>
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
          \"url\": \"{{ base_url('butir/ajax/' ~ substandar.id) }}\",
          \"type\": \"POST\"
      },
      columnDefs: [
          { targets: [2], orderable: false}
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
                  url: \"{{ base_url('butir/aksi_hapus/') }}\" + id,
                  timeout: 5000,
                  success: function() {
                      table.ajax.reload();
                  },
                  error: function(data) {
                      swal('ERROR !!!', 'Tidak dapat menghapus Butir. Masih ada Berkas yang terkait dengan Butir ini.', 'error');
                      
                      console.log(data)
                  }
              });
          }
      });
  };

  \$('body').tooltip({selector: '[data-toggle=\"tooltip\"]'});
  </script>
{% endblock %}", "butir/index.twig", "/home/u7998733/public_html/data/application/views/butir/index.twig");
    }
}
