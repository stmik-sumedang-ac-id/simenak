<?php

/* template/menu_dpm.twig */
class __TwigTemplate_7d93221028a1cde8d5af46ce6d1ead3c7b6f88e8caf7f7a377110bdaa5ced652 extends Twig_Template
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
        echo twig_escape_filter($this->env, base_url("fakultas"), "html", null, true);
        echo "\"><i class=\"app-menu__icon fa fa-users\"></i><span class=\"app-menu__label\">Fakultas</span></a></li>

<li><a class=\"app-menu__item\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, base_url("versi"), "html", null, true);
        echo "\"><i class=\"app-menu__icon fa fa-gears\"></i><span class=\"app-menu__label\">Standar Akreditasi</span></a></li>

<li><a class=\"app-menu__item\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url("pengajuan/r"), "html", null, true);
        echo "\"><i class=\"app-menu__icon fa fa-users\"></i><span class=\"app-menu__label\">Pengajuan</span></a></li>";
    }

    public function getTemplateName()
    {
        return "template/menu_dpm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  30 => 5,  25 => 3,  19 => 1,);
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

<li><a class=\"app-menu__item\" href=\"{{ base_url('fakultas') }}\"><i class=\"app-menu__icon fa fa-users\"></i><span class=\"app-menu__label\">Fakultas</span></a></li>

<li><a class=\"app-menu__item\" href=\"{{ base_url('versi') }}\"><i class=\"app-menu__icon fa fa-gears\"></i><span class=\"app-menu__label\">Standar Akreditasi</span></a></li>

<li><a class=\"app-menu__item\" href=\"{{ base_url('pengajuan/r') }}\"><i class=\"app-menu__icon fa fa-users\"></i><span class=\"app-menu__label\">Pengajuan</span></a></li>", "template/menu_dpm.twig", "/home/u7998733/public_html/data/application/views/template/menu_dpm.twig");
    }
}
