<?php

/* welcome/nav.twig */
class __TwigTemplate_c8ab724a23671a0a324817c907daff9a7ae83cf32a7f5d06d0b947d0f9c4b4aa extends Twig_Template
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
    <h1><i class=\"fa fa-dashboard\"></i> Dashboard</h1>
  </div>
  <ul class=\"app-breadcrumb breadcrumb\">
    <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
    <li class=\"breadcrumb-item\">Dashboard</li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "welcome/nav.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
    <h1><i class=\"fa fa-dashboard\"></i> Dashboard</h1>
  </div>
  <ul class=\"app-breadcrumb breadcrumb\">
    <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
    <li class=\"breadcrumb-item\">Dashboard</li>
  </ul>
</div>
", "welcome/nav.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/welcome/nav.twig");
    }
}
