<?php

/* profil/nav.twig */
class __TwigTemplate_f5c42dc3a268503de504995b98a396ea458105dc7238fad66a9aa5661f7bdc4f extends Twig_Template
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
    <h1><i class=\"fa fa-user\"></i> Profil</h1>
  </div>
  <ul class=\"app-breadcrumb breadcrumb\">
    <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
    <li class=\"breadcrumb-item\">Profil</li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "profil/nav.twig";
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
    <h1><i class=\"fa fa-user\"></i> Profil</h1>
  </div>
  <ul class=\"app-breadcrumb breadcrumb\">
    <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
    <li class=\"breadcrumb-item\">Profil</li>
  </ul>
</div>
", "profil/nav.twig", "/Users/yysofiyan/Desktop/Gitlab/borang_stmik/application/views/profil/nav.twig");
    }
}
