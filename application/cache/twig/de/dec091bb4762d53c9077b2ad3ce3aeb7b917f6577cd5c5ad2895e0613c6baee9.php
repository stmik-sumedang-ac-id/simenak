<?php

/* versi/nav.twig */
class __TwigTemplate_1da0d4f63b080f1cd910fc8c127bb3a9eab4fe77ff5783286d20daffb026955b extends Twig_Template
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
    <h1><i class=\"fa fa-users\"></i> Standar Akreditasi</h1>
  </div>
  <ul class=\"app-breadcrumb breadcrumb\">
    <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
    <li class=\"breadcrumb-item\">Standar Akreditasi</li>
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "versi/nav.twig";
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
    <h1><i class=\"fa fa-users\"></i> Standar Akreditasi</h1>
  </div>
  <ul class=\"app-breadcrumb breadcrumb\">
    <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
    <li class=\"breadcrumb-item\">Standar Akreditasi</li>
  </ul>
</div>", "versi/nav.twig", "/Users/yysofiyan/Desktop/Gitlab/ta_borang/application/views/versi/nav.twig");
    }
}
