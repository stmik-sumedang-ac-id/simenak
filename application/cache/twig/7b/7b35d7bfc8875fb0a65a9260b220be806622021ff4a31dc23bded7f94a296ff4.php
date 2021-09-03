<?php

/* config/index.twig */
class __TwigTemplate_5a945af0fa47e1ffc33c4ac423e0465d44395948e47ac30cf4a4642d481e38ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.twig", "config/index.twig", 1);
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
        $this->loadTemplate("config/nav.twig", "config/index.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, base_url("config/aksi_ubah"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">

  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <div class=\"tile-body\">
          
            <h3 class=\"tile-title\">Aplikasi</h3>
            
            <div class=\"form-group\">
              <label class=\"control-label\">Judul Aplikasi</label>
              <input class=\"form-control\" type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "judul_aplikasi", array()), "html", null, true);
        echo "\" required placeholder=\"Masukan Judul Aplikasi\" name=\"data[judul_aplikasi]\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Judul Menu</label>
              <input class=\"form-control\" type=\"text\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "judul_menu", array()), "html", null, true);
        echo "\" required placeholder=\"Masukan Judul Menu\" name=\"data[judul_menu]\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Favicon</label>
              <input class=\"form-control\" type=\"file\" name=\"favicon\">
            </div>

            </div>
            <div class=\"tile-footer\">
              <button class=\"btn btn-primary simpan\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" style=\"visibility: hidden;\">
            </div>
      </div>
    </div>
  </div>

  </form>
";
    }

    // line 45
    public function block_js($context, array $blocks = array())
    {
        // line 46
        echo "  <script type=\"text/javascript\">

  \$('.simpan').click(function(){
    \$(\"input[type='submit']\").click();
  });

  </script>
";
    }

    public function getTemplateName()
    {
        return "config/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 46,  91 => 45,  79 => 36,  64 => 24,  56 => 19,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
  {% include 'config/nav.twig' %}
{% endblock %}

{% block content %}
  <form method=\"post\" action=\"{{ base_url('config/aksi_ubah') }}\" enctype=\"multipart/form-data\">

  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tile\">
        <div class=\"tile-body\">
          
            <h3 class=\"tile-title\">Aplikasi</h3>
            
            <div class=\"form-group\">
              <label class=\"control-label\">Judul Aplikasi</label>
              <input class=\"form-control\" type=\"text\" value=\"{{ config.judul_aplikasi }}\" required placeholder=\"Masukan Judul Aplikasi\" name=\"data[judul_aplikasi]\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Judul Menu</label>
              <input class=\"form-control\" type=\"text\" value=\"{{ config.judul_menu }}\" required placeholder=\"Masukan Judul Menu\" name=\"data[judul_menu]\">
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\">Favicon</label>
              <input class=\"form-control\" type=\"file\" name=\"favicon\">
            </div>

            </div>
            <div class=\"tile-footer\">
              <button class=\"btn btn-primary simpan\" type=\"button\"><i class=\"fa fa-fw fa-lg fa-check-circle\"></i>Simpan</button>
              &nbsp;&nbsp;&nbsp;
              <a class=\"btn btn-secondary\" href=\"{{ base_url() }}\"><i class=\"fa fa-fw fa-lg fa-times-circle\"></i>Batal</a> <input type=\"submit\" style=\"visibility: hidden;\">
            </div>
      </div>
    </div>
  </div>

  </form>
{% endblock %}

{% block js %}
  <script type=\"text/javascript\">

  \$('.simpan').click(function(){
    \$(\"input[type='submit']\").click();
  });

  </script>
{% endblock %}", "config/index.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/config/index.twig");
    }
}
