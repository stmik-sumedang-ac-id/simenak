<?php

/* standar/nav.twig */
class __TwigTemplate_dd15758547fbd4175305c87818ed3e878cdb876bb3bdb7eeba0943ea5ef84800 extends Twig_Template
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
    <h1><i class=\"fa fa-users\"></i> Standar</h1>
  </div>
  <ul class=\"app-breadcrumb breadcrumb\">
    <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
    <li class=\"breadcrumb-item\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["versi"]) ? $context["versi"] : null), "nama", array()) . " (") . $this->getAttribute((isset($context["versi"]) ? $context["versi"] : null), "tahun", array())) . ")"), "html", null, true);
        echo "\" style=\"cursor: pointer;\" onclick=\"window.location = '";
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "versi'\">Standar Akreditasi</li>
    <li class=\"breadcrumb-item\">Standar</li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "standar/nav.twig";
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
    <h1><i class=\"fa fa-users\"></i> Standar</h1>
  </div>
  <ul class=\"app-breadcrumb breadcrumb\">
    <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
    <li class=\"breadcrumb-item\" data-toggle=\"tooltip\" title=\"{{ versi.nama ~ ' (' ~ versi.tahun ~ ')' }}\" style=\"cursor: pointer;\" onclick=\"window.location = '{{ base_url() }}versi'\">Standar Akreditasi</li>
    <li class=\"breadcrumb-item\">Standar</li>
  </ul>
</div>
", "standar/nav.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/standar/nav.twig");
    }
}
