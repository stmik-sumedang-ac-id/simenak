<?php

/* template/menu_prodi.twig */
class __TwigTemplate_fbb9125fdea5dcfbda9688c0b56e474464ea1e369384e172efd09841c2a20cd1 extends Twig_Template
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
        echo "<li><a class=\"app-menu__item\" href=\"";
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\"><i class=\"app-menu__icon fa fa-dashboard\"></i><span class=\"app-menu__label\">Dashboard</span></a></li>

<li><a class=\"app-menu__item\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, base_url("pengajuan/crud"), "html", null, true);
        echo "\"><i class=\"app-menu__icon fa fa-users\"></i><span class=\"app-menu__label\">Pengajuan</span></a></li>";
    }

    public function getTemplateName()
    {
        return "template/menu_prodi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li><a class=\"app-menu__item\" href=\"{{ base_url() }}\"><i class=\"app-menu__icon fa fa-dashboard\"></i><span class=\"app-menu__label\">Dashboard</span></a></li>

<li><a class=\"app-menu__item\" href=\"{{ base_url('pengajuan/crud') }}\"><i class=\"app-menu__icon fa fa-users\"></i><span class=\"app-menu__label\">Pengajuan</span></a></li>", "template/menu_prodi.twig", "/home/u7998733/public_html/data/application/views/template/menu_prodi.twig");
    }
}
