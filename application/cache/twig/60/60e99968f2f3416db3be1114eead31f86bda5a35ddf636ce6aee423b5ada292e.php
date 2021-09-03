<?php

/* versi/form.twig */
class __TwigTemplate_73f68d556f2f1b9fc66576a477f9def60f8778a95cedb6e61d46790babdc778a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.twig", "versi/form.twig", 1);
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
        $this->loadTemplate("versi/nav.twig", "versi/form.twig", 4)->display($context);
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
        echo " Standar Akreditasi</h3>
        <div class=\"tile-body\">
          <form method=\"post\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url(("versi/aksi_" . ($context["aksi"] ?? null))), "html", null, true);
        echo "\">
            
            <input type=\"hidden\" name=\"where[id]\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["versi"] ?? null), "id", array()), "html", null, true);
        echo "\">

            <div class=\"form-group\">
              <label class=\"control-label\">Nama</label>
              <input class=\"form-control\" type=\"text\" required placeholder=\"Masukan Nama\" name=\"data[nama]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["versi"] ?? null), "nama", array()), "html", null, true);
        echo "\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Tahun</label>
              <input class=\"form-control\" type=\"number\" min=\"1900\" max=\"2900\" required placeholder=\"Masukan Tahun\" name=\"data[tahun]\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["versi"] ?? null), "tahun", array()), "html", null, true);
        echo "\">
            </div>
            
            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, base_url("versi"), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" style=\"visibility: hidden;\">
            </div>
          </form>
      </div>
    </div>
  </div>
";
    }

    // line 39
    public function block_js($context, array $blocks = array())
    {
        // line 40
        echo "  <script type=\"text/javascript\">
  \$('#simpan').click(function(){
    \$(\"input[type='submit']\").click();
  });

  </script>
";
    }

    public function getTemplateName()
    {
        return "versi/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 40,  92 => 39,  81 => 31,  71 => 24,  63 => 19,  56 => 15,  51 => 13,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
  {% include 'versi/nav.twig' %}
{% endblock %}

{% block content %}
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <h3 class=\"tile-title\">{{ ucwords(aksi) }} Standar Akreditasi</h3>
        <div class=\"tile-body\">
          <form method=\"post\" action=\"{{ base_url('versi/aksi_' ~ aksi) }}\">
            
            <input type=\"hidden\" name=\"where[id]\" value=\"{{ versi.id }}\">

            <div class=\"form-group\">
              <label class=\"control-label\">Nama</label>
              <input class=\"form-control\" type=\"text\" required placeholder=\"Masukan Nama\" name=\"data[nama]\" value=\"{{ versi.nama }}\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Tahun</label>
              <input class=\"form-control\" type=\"number\" min=\"1900\" max=\"2900\" required placeholder=\"Masukan Tahun\" name=\"data[tahun]\" value=\"{{ versi.tahun }}\">
            </div>
            
            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"{{ base_url('versi') }}\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" style=\"visibility: hidden;\">
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

  </script>
{% endblock %}", "versi/form.twig", "/home/u7998733/public_html/data/application/views/versi/form.twig");
    }
}
