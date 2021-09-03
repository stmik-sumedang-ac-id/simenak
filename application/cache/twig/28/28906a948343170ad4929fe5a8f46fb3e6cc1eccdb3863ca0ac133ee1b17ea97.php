<?php

/* pengajuan/detil_crud.twig */
class __TwigTemplate_1893da9977fed6367037c22ab76d8cf7bb005b8a02de7ccea7ac4896b188a6bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.twig", "pengajuan/detil_crud.twig", 1);
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
        $this->loadTemplate("pengajuan/nav.twig", "pengajuan/detil_crud.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <h3 class=\"tile-title\">Detil Pengajuan</h3>
        <div class=\"tile-body\">
          <form method=\"post\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url("pengajuan/aksi_detilpengajuan"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">

          \t<input type=\"hidden\" name=\"last_tab\" value=\"1\">
          \t<input type=\"hidden\" name=\"pengajuan_id\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pengajuan"] ?? null), "id", array()), "html", null, true);
        echo "\">

          \t<!-- Nav tabs -->
          \t<a class=\"btn btn-primary\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url("pengajuan/crud"), "html", null, true);
        echo "\">Kembali</a>
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nav"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "\t\t\t\t\t";
            // line 27
            echo "\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" data-toggle=\"tab\" onclick=\"pilih_tab(";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nomor", array()), "html", null, true);
            echo ")\" href=\"#standar_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nomor", array()), "html", null, true);
            echo "\">Standar ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nomor", array()), "html", null, true);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t</ul>

\t\t\t<!-- Tab panes -->
\t\t\t<div class=\"tab-content\">
\t\t\t  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nav"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "\t\t\t  \t";
            // line 41
            echo "\t\t\t  \t<div class=\"tab-pane container fade\" id=\"standar_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nomor", array()), "html", null, true);
            echo "\">
\t\t\t\t\t
\t\t\t  \t\t<div>
\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"submit\" value=\"Submit\">
\t\t\t\t\t\t<input class=\"btn btn-success pull-right\" type=\"submit\" name=\"submit\" value=\"Submit\">
\t\t\t  \t\t</div>
\t\t\t  \t\t
\t\t\t  \t\t<table class=\"table\">
\t\t\t  \t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Standar</th>
\t\t\t\t\t\t\t\t<th>Substandar</th>
\t\t\t\t\t\t\t\t<th>Butir</th>
\t\t\t\t\t\t\t\t<th>Berkas</th>
\t\t\t\t\t\t\t\t<th>Upload</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["detil"] ?? null), $this->getAttribute($context["item"], "nomor", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                // line 60
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "standar", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
                // line 62
                if ($this->getAttribute($context["item2"], "id_butir", array())) {
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "substandar", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "butir", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "substandar", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 69
                if ($this->getAttribute($context["item2"], "berkas_id", array())) {
                    // line 70
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"hapus('";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "berkas_id", array()), "html", null, true);
                    echo "')\" class=\"fa fa-trash\"></a><a href=\"";
                    echo twig_escape_filter($this->env, base_url(("pengajuan/berkas/" . $this->getAttribute($context["item2"], "berkas_id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "filename", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 74
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "filename", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 76
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 78
                if ($this->getAttribute($context["item2"], "id_butir", array())) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"berkas_butir_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "id_butir", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"berkas_butir[]\" value=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "id_butir", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"berkas_substandar_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "id_substandar", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"berkas_substandar[]\" value=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "id_substandar", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t\t\t\t\t</tbody>
\t\t\t  \t\t</table>

\t\t\t  \t\t<div>
\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"submit\" value=\"Submit\">
\t\t\t\t\t\t<input class=\"btn btn-success pull-right\" type=\"submit\" name=\"submit\" value=\"Submit\">
\t\t\t  \t\t</div>

\t\t\t  \t</div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t</div>

          </form>
      </div>
    </div>
  </div>
";
    }

    // line 106
    public function block_js($context, array $blocks = array())
    {
        // line 107
        echo "\t<script type=\"text/javascript\">
\t// btn hapus
\tfunction hapus(id, standar) {
\t    swal({
\t        title: 'Apakah anda yakin?',
\t        text: \"Data akan dihapus!\",
\t        type: 'warning',
\t        showCancelButton: true,
\t        confirmButtonText: 'Hapus!'
\t    }).then(function(result) {
\t        if (result.value) {
\t            window.location = \"<?php echo base_url('prodi/detail_pengajuan/hapus/'); ?>\" + id + '/' + \$('input[name=last_tab]').val();
\t        }
\t    });
\t};

\t  \$(document).ready(function() {
\t\tvar dTable;
\t \tvar var_last_tab = \"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["CI"] ?? null), "input", array()), "get", array(0 => "tab"), "method"), "html", null, true);
        echo "\";

\t    if (var_last_tab != '') {
\t      \$(\"ul.nav.nav-tabs li a\").eq(0).attr('class','nav-link');
\t      \$(\"ul.nav.nav-tabs li a\").eq(var_last_tab-1).attr('class','nav-link active');
\t      \$(\"#standar_1\").attr('class','tab-pane container');
\t      \$(\"#standar_\"+var_last_tab).attr('class','tab-pane container active');

\t      pilih_tab(var_last_tab);
\t    } else {
\t      // \$(\"ul.nav.nav-tabs li a\").eq(0).attr('class','nav-link');
\t      \$(\"ul.nav.nav-tabs li a\").eq(0).attr('class','nav-link active');
\t      // \$(\"#standar_1\").attr('class','tab-pane');
\t      \$(\"#standar_1\").attr('class','tab-pane container active');

\t      pilih_tab(1);
\t    }

\t  });

\t  function pilih_tab(id) {
\t    \$('input[name=last_tab]').val(id);
\t  }

    \tfunction hapus(id) {
\t      swal({
\t          title: 'Apakah anda yakin?',
\t          text: \"Data akan dihapus!\",
\t          type: 'warning',
\t          showCancelButton: true,
\t          confirmButtonText: 'Hapus!'
\t      }).then(function(result) {
\t          if (result.value) {
\t              window.location = \"";
        // line 158
        echo twig_escape_filter($this->env, base_url("pengajuan/hapus_berkas/"), "html", null, true);
        echo "\" + id + \"/\" + \$(\"input[name=pengajuan_id]\").val() + \"/\" + \$(\"input[name=last_tab]\").val();
\t          }
\t      });
\t  };
\t</script>
";
    }

    public function getTemplateName()
    {
        return "pengajuan/detil_crud.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 158,  256 => 125,  236 => 107,  233 => 106,  223 => 98,  208 => 88,  200 => 85,  195 => 83,  190 => 82,  185 => 80,  180 => 79,  178 => 78,  174 => 76,  168 => 74,  158 => 71,  155 => 70,  153 => 69,  150 => 68,  144 => 66,  139 => 64,  134 => 63,  132 => 62,  128 => 61,  125 => 60,  121 => 59,  99 => 41,  97 => 36,  93 => 35,  87 => 31,  74 => 28,  71 => 27,  69 => 22,  65 => 21,  60 => 19,  54 => 16,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
\t<div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <h3 class=\"tile-title\">Detil Pengajuan</h3>
        <div class=\"tile-body\">
          <form method=\"post\" action=\"{{ base_url('pengajuan/aksi_detilpengajuan') }}\" enctype=\"multipart/form-data\">

          \t<input type=\"hidden\" name=\"last_tab\" value=\"1\">
          \t<input type=\"hidden\" name=\"pengajuan_id\" value=\"{{ pengajuan.id }}\">

          \t<!-- Nav tabs -->
          \t<a class=\"btn btn-primary\" href=\"{{ base_url('pengajuan/crud') }}\">Kembali</a>
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t{% for item in nav %}
\t\t\t\t\t{# {% if item.nomor == 1 %}
\t\t\t\t\t\t{% set status = 'active' %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% set status = null %}
\t\t\t\t\t{% endif %} #}
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" data-toggle=\"tab\" onclick=\"pilih_tab({{ item.nomor }})\" href=\"#standar_{{ item.nomor }}\">Standar {{ item.nomor }}</a>
\t\t\t\t  </li>
\t\t\t\t{% endfor %}
\t\t\t</ul>

\t\t\t<!-- Tab panes -->
\t\t\t<div class=\"tab-content\">
\t\t\t  {% for item in nav %}
\t\t\t  \t{# {% if item.nomor == 1 %}
\t\t\t\t\t{% set status = 'active' %}
\t\t\t\t{% else %}
\t\t\t\t\t{% set status = 'fade' %}
\t\t\t\t{% endif %} #}
\t\t\t  \t<div class=\"tab-pane container fade\" id=\"standar_{{ item.nomor }}\">
\t\t\t\t\t
\t\t\t  \t\t<div>
\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"submit\" value=\"Submit\">
\t\t\t\t\t\t<input class=\"btn btn-success pull-right\" type=\"submit\" name=\"submit\" value=\"Submit\">
\t\t\t  \t\t</div>
\t\t\t  \t\t
\t\t\t  \t\t<table class=\"table\">
\t\t\t  \t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Standar</th>
\t\t\t\t\t\t\t\t<th>Substandar</th>
\t\t\t\t\t\t\t\t<th>Butir</th>
\t\t\t\t\t\t\t\t<th>Berkas</th>
\t\t\t\t\t\t\t\t<th>Upload</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for item2 in detil[item.nomor] %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ item2.standar }}</td>
\t\t\t\t\t\t\t\t\t{% if item2.id_butir %}
\t\t\t\t\t\t\t\t\t\t<td>{{ item2.substandar }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ item2.butir }}</td>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">{{ item2.substandar }}</td>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if item2.berkas_id %}
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"hapus('{{ item2.berkas_id }}')\" class=\"fa fa-trash\"></a><a href=\"{{ base_url('pengajuan/berkas/' ~ item2.berkas_id) }}\">{{ item2.filename }}</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ item2.filename }}</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if item2.id_butir %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"berkas_butir_{{ item2.id_butir }}\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"berkas_butir[]\" value=\"{{ item2.id_butir }}\">
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"berkas_substandar_{{ item2.id_substandar }}\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"berkas_substandar[]\" value=\"{{ item2.id_substandar }}\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t  \t\t</table>

\t\t\t  \t\t<div>
\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"submit\" value=\"Submit\">
\t\t\t\t\t\t<input class=\"btn btn-success pull-right\" type=\"submit\" name=\"submit\" value=\"Submit\">
\t\t\t  \t\t</div>

\t\t\t  \t</div>
\t\t\t  {% endfor %}
\t\t\t</div>

          </form>
      </div>
    </div>
  </div>
{% endblock %}

{% block js %}
\t<script type=\"text/javascript\">
\t// btn hapus
\tfunction hapus(id, standar) {
\t    swal({
\t        title: 'Apakah anda yakin?',
\t        text: \"Data akan dihapus!\",
\t        type: 'warning',
\t        showCancelButton: true,
\t        confirmButtonText: 'Hapus!'
\t    }).then(function(result) {
\t        if (result.value) {
\t            window.location = \"<?php echo base_url('prodi/detail_pengajuan/hapus/'); ?>\" + id + '/' + \$('input[name=last_tab]').val();
\t        }
\t    });
\t};

\t  \$(document).ready(function() {
\t\tvar dTable;
\t \tvar var_last_tab = \"{{ CI.input.get('tab') }}\";

\t    if (var_last_tab != '') {
\t      \$(\"ul.nav.nav-tabs li a\").eq(0).attr('class','nav-link');
\t      \$(\"ul.nav.nav-tabs li a\").eq(var_last_tab-1).attr('class','nav-link active');
\t      \$(\"#standar_1\").attr('class','tab-pane container');
\t      \$(\"#standar_\"+var_last_tab).attr('class','tab-pane container active');

\t      pilih_tab(var_last_tab);
\t    } else {
\t      // \$(\"ul.nav.nav-tabs li a\").eq(0).attr('class','nav-link');
\t      \$(\"ul.nav.nav-tabs li a\").eq(0).attr('class','nav-link active');
\t      // \$(\"#standar_1\").attr('class','tab-pane');
\t      \$(\"#standar_1\").attr('class','tab-pane container active');

\t      pilih_tab(1);
\t    }

\t  });

\t  function pilih_tab(id) {
\t    \$('input[name=last_tab]').val(id);
\t  }

    \tfunction hapus(id) {
\t      swal({
\t          title: 'Apakah anda yakin?',
\t          text: \"Data akan dihapus!\",
\t          type: 'warning',
\t          showCancelButton: true,
\t          confirmButtonText: 'Hapus!'
\t      }).then(function(result) {
\t          if (result.value) {
\t              window.location = \"{{ base_url('pengajuan/hapus_berkas/') }}\" + id + \"/\" + \$(\"input[name=pengajuan_id]\").val() + \"/\" + \$(\"input[name=last_tab]\").val();
\t          }
\t      });
\t  };
\t</script>
{% endblock %}", "pengajuan/detil_crud.twig", "/Users/yysofiyan/Desktop/Gitlab/borang_stmik/application/views/pengajuan/detil_crud.twig");
    }
}
