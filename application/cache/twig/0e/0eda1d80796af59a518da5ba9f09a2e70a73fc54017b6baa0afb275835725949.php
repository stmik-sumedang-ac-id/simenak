<?php

/* prodi/nav.twig */
class __TwigTemplate_d6850959ffaad5d0d17813e8a8f29c3c403112cf9fab3cd480db4982810950c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"app-title\">
  <div>
    <h1><i class=\"fa fa-users\"></i> Prodi</h1>
  </div>
  <ul class=\"app-breadcrumb breadcrumb\">
    <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
    <li class=\"breadcrumb-item\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fakultas"]) ? $context["fakultas"] : null), "nama", array()), "html", null, true);
        echo "\" style=\"cursor: pointer;\" onclick=\"window.location = '";
        echo twig_escape_filter($this->env, base_url("fakultas"), "html", null, true);
        echo "'\">Fakultas</li>
    <li class=\"breadcrumb-item\">Prodi</li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "prodi/nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"app-title\">
  <div>
    <h1><i class=\"fa fa-users\"></i> Prodi</h1>
  </div>
  <ul class=\"app-breadcrumb breadcrumb\">
    <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
    <li class=\"breadcrumb-item\" data-toggle=\"tooltip\" title=\"{{ fakultas.nama }}\" style=\"cursor: pointer;\" onclick=\"window.location = '{{ base_url('fakultas') }}'\">Fakultas</li>
    <li class=\"breadcrumb-item\">Prodi</li>
  </ul>
</div>
", "prodi/nav.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/prodi/nav.twig");
    }
}
