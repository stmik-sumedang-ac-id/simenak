<?php

/* pengajuan/detil_r.twig */
class __TwigTemplate_8abd223052d4955ec701a81e87b8ee89cc57d667ea8824bd30807d15af5463dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.twig", "pengajuan/detil_r.twig", 1);
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
        $this->loadTemplate("pengajuan/nav.twig", "pengajuan/detil_r.twig", 4)->display($context);
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
        echo twig_escape_filter($this->env, base_url("pengajuan/r"), "html", null, true);
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
\t\t\t  \t\t<table class=\"table\">
\t\t\t  \t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Standar</th>
\t\t\t\t\t\t\t\t<th>Substandar</th>
\t\t\t\t\t\t\t\t<th>Butir</th>
\t\t\t\t\t\t\t\t<th>Berkas</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["detil"] ?? null), $this->getAttribute($context["item"], "nomor", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                // line 55
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "standar", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
                // line 57
                if ($this->getAttribute($context["item2"], "id_butir", array())) {
                    // line 58
                    echo "\t\t\t\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "substandar", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "butir", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "substandar", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 64
                if ($this->getAttribute($context["item2"], "berkas_id", array())) {
                    // line 65
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, base_url(("pengajuan/berkas/" . $this->getAttribute($context["item2"], "berkas_id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "filename", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "filename", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t\t\t</tbody>
\t\t\t  \t\t</table>

\t\t\t  \t</div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t</div>

          </form>
      </div>
    </div>
  </div>
";
    }

    // line 85
    public function block_js($context, array $blocks = array())
    {
        // line 86
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
        // line 104
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
\t</script>
";
    }

    public function getTemplateName()
    {
        return "pengajuan/detil_r.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 104,  195 => 86,  192 => 85,  182 => 77,  172 => 72,  164 => 69,  158 => 67,  150 => 65,  148 => 64,  145 => 63,  139 => 61,  134 => 59,  129 => 58,  127 => 57,  123 => 56,  120 => 55,  116 => 54,  99 => 41,  97 => 36,  93 => 35,  87 => 31,  74 => 28,  71 => 27,  69 => 22,  65 => 21,  60 => 19,  54 => 16,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
          \t<a class=\"btn btn-primary\" href=\"{{ base_url('pengajuan/r') }}\">Kembali</a>
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
\t\t\t  \t\t<table class=\"table\">
\t\t\t  \t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Standar</th>
\t\t\t\t\t\t\t\t<th>Substandar</th>
\t\t\t\t\t\t\t\t<th>Butir</th>
\t\t\t\t\t\t\t\t<th>Berkas</th>
\t\t\t\t\t\t\t\t
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
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url('pengajuan/berkas/' ~ item2.berkas_id) }}\">{{ item2.filename }}</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ item2.filename }}</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t  \t\t</table>

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
\t</script>
{% endblock %}", "pengajuan/detil_r.twig", "/home/u7998733/public_html/data/application/views/pengajuan/detil_r.twig");
    }
}
