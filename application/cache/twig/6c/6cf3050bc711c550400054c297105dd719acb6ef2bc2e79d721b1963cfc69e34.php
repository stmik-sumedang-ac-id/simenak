<?php

/* welcome/index_r.twig */
class __TwigTemplate_f76dc71cafe87144c1b584882fbff58d903e3b1b9619b76db58b0eddf796ee10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.twig", "welcome/index_r.twig", 1);
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
        echo "\t";
        $this->loadTemplate("welcome/nav.twig", "welcome/index_r.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"row\">
\t  <div class=\"col-md-12 col-lg-3\">
\t    <div class=\"widget-small info coloured-icon\"><i class=\"icon fa fa-table fa-3x\"></i>
\t      <div class=\"info\">
\t        <h4>Jumlah Pengajuan</h4>
\t        <p><b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "jumlah_pengajuan", array()), "html", null, true);
        echo "</b></p>
\t      </div>
\t    </div>
\t  </div>
\t  <div class=\"col-md-12 col-lg-3\">
\t    <div class=\"widget-small primary coloured-icon\"><i class=\"icon fa fa-check fa-3x\"></i>
\t      <div class=\"info\">
\t        <h4>Pengajuan Selesai</h4>
\t        <p><b>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "jumlah_pengajuan_selesai", array()), "html", null, true);
        echo "</b></p>
\t      </div>
\t    </div>
\t  </div>
\t  <div class=\"col-md-12 col-lg-3\">
\t    <div class=\"widget-small warning coloured-icon\"><i class=\"icon fa fa-clock-o fa-3x\"></i>
\t      <div class=\"info\">
\t        <h4>Pengajuan Proses</h4>
\t        <p><b>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "jumlah_pengajuan_proses", array()), "html", null, true);
        echo "</b></p>
\t      </div>
\t    </div>
\t  </div>
\t  <div class=\"col-md-12 col-lg-3\">
\t    <div class=\"widget-small info coloured-icon\"><i class=\"icon fa fa-calendar fa-3x\"></i>
\t      <div class=\"info\">
\t        <h4>Tanggal</h4>
\t        <p><b>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["CI"]) ? $context["CI"] : null), "pustaka", array()), "tanggal_indo_string", array(0 => date("Y-m-d")), "method"), "html", null, true);
        echo "</b></p>
\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<div class=\"row\">
\t  <div class=\"col-md-12\">
\t    <div class=\"tile\">
\t      <h3 class=\"tile-title\">Grafik Pengajuan Akreditasi</h3>
\t      <div class=\"embed-responsive embed-responsive-16by9\">
\t        <canvas class=\"embed-responsive-item\" id=\"pieChartDemo\"></canvas>
\t      </div>
\t    </div>
\t  </div>
\t</div>
";
    }

    // line 54
    public function block_js($context, array $blocks = array())
    {
        // line 55
        echo "<script type=\"text/javascript\">
var pdata = [
      \t{
      \t\tvalue: ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "jumlah_pengajuan_selesai", array()), "html", null, true);
        echo ",
      \t\tcolor: \"#46BFBD\",
      \t\thighlight: \"#5AD3D1\",
      \t\tlabel: \"Pengajuan Selesai\"
      \t},
      \t{
      \t\tvalue: ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "jumlah_pengajuan_proses", array()), "html", null, true);
        echo ",
      \t\tcolor: \"#FDB45C\",
      \t\thighlight: \"#FFC870\",
      \t\tlabel: \"Pengajuan Proses\"
      \t}
      ];

var ctxp = \$(\"#pieChartDemo\").get(0).getContext(\"2d\");
var pieChart = new Chart(ctxp).Pie(pdata);
</script>
";
    }

    public function getTemplateName()
    {
        return "welcome/index_r.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 64,  109 => 58,  104 => 55,  101 => 54,  81 => 37,  70 => 29,  59 => 21,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
\t{% include 'welcome/nav.twig' %}
{% endblock %}

{% block content %}
\t<div class=\"row\">
\t  <div class=\"col-md-12 col-lg-3\">
\t    <div class=\"widget-small info coloured-icon\"><i class=\"icon fa fa-table fa-3x\"></i>
\t      <div class=\"info\">
\t        <h4>Jumlah Pengajuan</h4>
\t        <p><b>{{ progress.jumlah_pengajuan }}</b></p>
\t      </div>
\t    </div>
\t  </div>
\t  <div class=\"col-md-12 col-lg-3\">
\t    <div class=\"widget-small primary coloured-icon\"><i class=\"icon fa fa-check fa-3x\"></i>
\t      <div class=\"info\">
\t        <h4>Pengajuan Selesai</h4>
\t        <p><b>{{ progress.jumlah_pengajuan_selesai }}</b></p>
\t      </div>
\t    </div>
\t  </div>
\t  <div class=\"col-md-12 col-lg-3\">
\t    <div class=\"widget-small warning coloured-icon\"><i class=\"icon fa fa-clock-o fa-3x\"></i>
\t      <div class=\"info\">
\t        <h4>Pengajuan Proses</h4>
\t        <p><b>{{ progress.jumlah_pengajuan_proses }}</b></p>
\t      </div>
\t    </div>
\t  </div>
\t  <div class=\"col-md-12 col-lg-3\">
\t    <div class=\"widget-small info coloured-icon\"><i class=\"icon fa fa-calendar fa-3x\"></i>
\t      <div class=\"info\">
\t        <h4>Tanggal</h4>
\t        <p><b>{{ CI.pustaka.tanggal_indo_string(date('Y-m-d')) }}</b></p>
\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<div class=\"row\">
\t  <div class=\"col-md-12\">
\t    <div class=\"tile\">
\t      <h3 class=\"tile-title\">Grafik Pengajuan Akreditasi</h3>
\t      <div class=\"embed-responsive embed-responsive-16by9\">
\t        <canvas class=\"embed-responsive-item\" id=\"pieChartDemo\"></canvas>
\t      </div>
\t    </div>
\t  </div>
\t</div>
{% endblock %}

{% block js %}
<script type=\"text/javascript\">
var pdata = [
      \t{
      \t\tvalue: {{ progress.jumlah_pengajuan_selesai }},
      \t\tcolor: \"#46BFBD\",
      \t\thighlight: \"#5AD3D1\",
      \t\tlabel: \"Pengajuan Selesai\"
      \t},
      \t{
      \t\tvalue: {{ progress.jumlah_pengajuan_proses }},
      \t\tcolor: \"#FDB45C\",
      \t\thighlight: \"#FFC870\",
      \t\tlabel: \"Pengajuan Proses\"
      \t}
      ];

var ctxp = \$(\"#pieChartDemo\").get(0).getContext(\"2d\");
var pieChart = new Chart(ctxp).Pie(pdata);
</script>
{% endblock %}", "welcome/index_r.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/welcome/index_r.twig");
    }
}
