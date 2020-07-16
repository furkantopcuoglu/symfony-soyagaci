<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* aile/aileGuncelle.html.twig */
class __TwigTemplate_2f8baf960b248e646eed1c142657e9278dabdab236e949062da640b645750c20 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aile/aileGuncelle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aile/aileGuncelle.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

</head>

<form  action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_family", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["aile"]) || array_key_exists("aile", $context) ? $context["aile"] : (function () { throw new RuntimeError('Variable "aile" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\" method=\"post\" >


    Birinci Seçiniz
    <select name=\"birinci\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kisi"]) || array_key_exists("kisi", $context) ? $context["kisi"] : (function () { throw new RuntimeError('Variable "kisi" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 14
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\" ";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["k"], "id", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["aile"]) || array_key_exists("aile", $context) ? $context["aile"] : (function () { throw new RuntimeError('Variable "aile" does not exist.', 14, $this->source); })()), "birinci", [], "any", false, false, false, 14)))) ? (" Selected") : (""));
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "isim", [], "any", false, false, false, 14), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </select>

    İkinci Seçiniz
    <select name=\"ikinci\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kisi"]) || array_key_exists("kisi", $context) ? $context["kisi"] : (function () { throw new RuntimeError('Variable "kisi" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 21
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" ";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["k"], "id", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["aile"]) || array_key_exists("aile", $context) ? $context["aile"] : (function () { throw new RuntimeError('Variable "aile" does not exist.', 21, $this->source); })()), "ikinci", [], "any", false, false, false, 21)))) ? (" Selected") : (""));
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "isim", [], "any", false, false, false, 21), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </select>



    <button type=\"submit\" class=\"btn btn-primary\">Aile Güncelle</button>

</form>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "aile/aileGuncelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  87 => 21,  83 => 20,  77 => 16,  64 => 14,  60 => 13,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

</head>

<form  action=\"{{ path('update_family', { 'id' : aile.id }) }}\" method=\"post\" >


    Birinci Seçiniz
    <select name=\"birinci\">
        {% for k in kisi %}
            <option value=\"{{k.id  }}\" {{ k.id==aile.birinci ? ' Selected': '' }}> {{ k.isim }}</option>
        {% endfor %}
    </select>

    İkinci Seçiniz
    <select name=\"ikinci\">
        {% for k in kisi %}
            <option value=\"{{k.id  }}\" {{ k.id==aile.ikinci ? ' Selected': '' }}> {{ k.isim }}</option>
        {% endfor %}
    </select>



    <button type=\"submit\" class=\"btn btn-primary\">Aile Güncelle</button>

</form>
</html>", "aile/aileGuncelle.html.twig", "C:\\Users\\Furkan\\Desktop\\Denizhan\\Symfony\\Soyağacı Ödev\\newSoyagaci\\templates\\aile\\aileGuncelle.html.twig");
    }
}
