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

/* aile/aileCocukGuncelle.html.twig */
class __TwigTemplate_d650c231a08d51d5ac5db842f62066470de6b2a5f6802edb8cb9f9c5498ffbe5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aile/aileCocukGuncelle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aile/aileCocukGuncelle.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

</head>

<form  action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_family_child", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
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
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["k"], "id", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 14, $this->source); })()), "birinci", [], "any", false, false, false, 14)))) ? (" Selected") : (""));
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
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["k"], "id", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 21, $this->source); })()), "ikinci", [], "any", false, false, false, 21)))) ? (" Selected") : (""));
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

   Çocuk Durumu Seçiniz
    <select name=\"cocukdurumu\">

            <option value=\"1\" ";
        // line 28
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 28, $this->source); })()), "cocukdurumu", [], "any", false, false, false, 28), 1))) ? (" Selected") : (""));
        echo "> Öz Evladım</option>
            <option value=\"2\" ";
        // line 29
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 29, $this->source); })()), "cocukdurumu", [], "any", false, false, false, 29), 2))) ? (" Selected") : (""));
        echo "> Üvey Evladım</option>

    </select>



    <button type=\"submit\" class=\"btn btn-primary\">Aile Güncelle</button>

</form>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "aile/aileCocukGuncelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 29,  107 => 28,  100 => 23,  87 => 21,  83 => 20,  77 => 16,  64 => 14,  60 => 13,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

</head>

<form  action=\"{{ path('update_family_child', { 'id' : child.id }) }}\" method=\"post\" >


    Birinci Seçiniz
    <select name=\"birinci\">
        {% for k in kisi %}
            <option value=\"{{k.id  }}\" {{ k.id==child.birinci ? ' Selected': '' }}> {{ k.isim }}</option>
        {% endfor %}
    </select>

    İkinci Seçiniz
    <select name=\"ikinci\">
        {% for k in kisi %}
            <option value=\"{{k.id  }}\" {{ k.id==child.ikinci ? ' Selected': '' }}> {{ k.isim }}</option>
        {% endfor %}
    </select>

   Çocuk Durumu Seçiniz
    <select name=\"cocukdurumu\">

            <option value=\"1\" {{ child.cocukdurumu==1 ? ' Selected': '' }}> Öz Evladım</option>
            <option value=\"2\" {{ child.cocukdurumu==2 ? ' Selected': '' }}> Üvey Evladım</option>

    </select>



    <button type=\"submit\" class=\"btn btn-primary\">Aile Güncelle</button>

</form>
</html>", "aile/aileCocukGuncelle.html.twig", "C:\\Users\\Furkan\\Desktop\\Denizhan\\Symfony\\Soyağacı Ödev\\newSoyagaci\\templates\\aile\\aileCocukGuncelle.html.twig");
    }
}
