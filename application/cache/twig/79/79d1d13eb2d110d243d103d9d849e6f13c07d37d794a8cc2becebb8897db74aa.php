<?php

/* pengajuan/form.twig */
class __TwigTemplate_f2492a187ed544cc128755d4fb0659dd932ead2cc8e5af1fb8158fe303502f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.twig", "pengajuan/form.twig", 1);
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
        $this->loadTemplate("pengajuan/nav.twig", "pengajuan/form.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <h3 class=\"tile-title\">";
        // line 11
        echo twig_escape_filter($this->env, ucwords(($context["aksi"] ?? null)), "html", null, true);
        echo " Pengajuan</h3>
        <div class=\"tile-body\">
          <form method=\"post\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url(("pengajuan/aksi_" . ($context["aksi"] ?? null))), "html", null, true);
        echo "\">
            
            <input type=\"hidden\" name=\"where[id]\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pengajuan"] ?? null), "id", array()), "html", null, true);
        echo "\">

            <div class=\"form-group\">
              <label class=\"control-label\">Tahun Usulan</label>
              <input class=\"form-control\" type=\"number\" min=\"1900\" max=\"2900\" required placeholder=\"Masukan Tahun Usulan\" name=\"data[tahun_usulan]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pengajuan"] ?? null), "tahun_usulan", array()), "html", null, true);
        echo "\">
            </div>
            
            <div class=\"form-group\">
              <label class=\"control-label\">Standar Akreditasi</label>
              <select class=\"form-control select2\" required name=\"data[versi_id]\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["CI"] ?? null), "db", array()), "get", array(0 => "versi"), "method"), "result", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "                  ";
            if (($this->getAttribute($context["item"], "id", array()) == $this->getAttribute(($context["pengajuan"] ?? null), "versi_id", array()))) {
                // line 27
                echo "                    <option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((($this->getAttribute($context["item"], "nama", array()) . " (") . $this->getAttribute($context["item"], "tahun", array())) . ")"), "html", null, true);
                echo "</option>
                  ";
            } else {
                // line 29
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((($this->getAttribute($context["item"], "nama", array()) . " (") . $this->getAttribute($context["item"], "tahun", array())) . ")"), "html", null, true);
                echo "</option>
                  ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "              </select>
            </div>
            
            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, base_url("pengajuan/crud"), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" style=\"visibility: hidden;\">
            </div>
          </form>
      </div>
    </div>
  </div>
";
    }

    // line 47
    public function block_js($context, array $blocks = array())
    {
        // line 48
        echo "  <script type=\"text/javascript\">
  \$('#simpan').click(function(){
    \$(\"input[type='submit']\").click();
  });

  \$('.select2').select2();
  </script>
";
    }

    public function getTemplateName()
    {
        return "pengajuan/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 48,  121 => 47,  110 => 39,  101 => 32,  95 => 31,  87 => 29,  79 => 27,  76 => 26,  72 => 25,  63 => 19,  56 => 15,  51 => 13,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
        <h3 class=\"tile-title\">{{ ucwords(aksi) }} Pengajuan</h3>
        <div class=\"tile-body\">
          <form method=\"post\" action=\"{{ base_url('pengajuan/aksi_' ~ aksi) }}\">
            
            <input type=\"hidden\" name=\"where[id]\" value=\"{{ pengajuan.id }}\">

            <div class=\"form-group\">
              <label class=\"control-label\">Tahun Usulan</label>
              <input class=\"form-control\" type=\"number\" min=\"1900\" max=\"2900\" required placeholder=\"Masukan Tahun Usulan\" name=\"data[tahun_usulan]\" value=\"{{ pengajuan.tahun_usulan }}\">
            </div>
            
            <div class=\"form-group\">
              <label class=\"control-label\">Standar Akreditasi</label>
              <select class=\"form-control select2\" required name=\"data[versi_id]\">
                {% for item in CI.db.get('versi').result() %}
                  {% if item.id == pengajuan.versi_id %}
                    <option selected value=\"{{ item.id }}\">{{ item.nama ~ ' (' ~ item.tahun ~ ')' }}</option>
                  {% else %}
                    <option value=\"{{ item.id }}\">{{ item.nama ~ ' (' ~ item.tahun ~ ')' }}</option>
                  {% endif %}
                {% endfor %}
              </select>
            </div>
            
            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"{{ base_url('pengajuan/crud') }}\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" style=\"visibility: hidden;\">
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

  \$('.select2').select2();
  </script>
{% endblock %}", "pengajuan/form.twig", "/home/u7998733/public_html/data/application/views/pengajuan/form.twig");
    }
}
