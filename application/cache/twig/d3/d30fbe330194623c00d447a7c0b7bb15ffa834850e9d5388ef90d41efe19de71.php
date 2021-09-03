<?php

/* fakultas/form.twig */
class __TwigTemplate_b4ea6635615ce884e2a50a9fa40a9d0497889afeeb21fddd51263742fa466d38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.twig", "fakultas/form.twig", 1);
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
        $this->loadTemplate("fakultas/nav.twig", "fakultas/form.twig", 4)->display($context);
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
        echo twig_escape_filter($this->env, ucwords((isset($context["aksi"]) ? $context["aksi"] : null)), "html", null, true);
        echo " Fakultas</h3>
        <div class=\"tile-body\">
          <form method=\"post\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url(("fakultas/aksi_" . (isset($context["aksi"]) ? $context["aksi"] : null))), "html", null, true);
        echo "\">
            
            <input type=\"hidden\" name=\"where[id]\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fakultas"]) ? $context["fakultas"] : null), "id", array()), "html", null, true);
        echo "\">

            <div class=\"form-group\">
              <label class=\"control-label\">Nama</label>
              <input class=\"form-control\" type=\"text\" required placeholder=\"Masukan Nama\" name=\"data[nama]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fakultas"]) ? $context["fakultas"] : null), "nama", array()), "html", null, true);
        echo "\">
            </div>
            
            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, base_url("fakultas"), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" style=\"visibility: hidden;\">
            </div>
          </form>
      </div>
    </div>
  </div>
";
    }

    // line 34
    public function block_js($context, array $blocks = array())
    {
        // line 35
        echo "  <script type=\"text/javascript\">
  \$('#simpan').click(function(){
    \$(\"input[type='submit']\").click();
  });

  </script>
";
    }

    public function getTemplateName()
    {
        return "fakultas/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 35,  84 => 34,  73 => 26,  63 => 19,  56 => 15,  51 => 13,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
        <h3 class=\"tile-title\">{{ ucwords(aksi) }} Fakultas</h3>
        <div class=\"tile-body\">
          <form method=\"post\" action=\"{{ base_url('fakultas/aksi_' ~ aksi) }}\">
            
            <input type=\"hidden\" name=\"where[id]\" value=\"{{ fakultas.id }}\">

            <div class=\"form-group\">
              <label class=\"control-label\">Nama</label>
              <input class=\"form-control\" type=\"text\" required placeholder=\"Masukan Nama\" name=\"data[nama]\" value=\"{{ fakultas.nama }}\">
            </div>
            
            </div>
            <div class=\"tile-footer\">
              <button id=\"simpan\" class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"{{ base_url('fakultas') }}\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" style=\"visibility: hidden;\">
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
{% endblock %}", "fakultas/form.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/fakultas/form.twig");
    }
}
