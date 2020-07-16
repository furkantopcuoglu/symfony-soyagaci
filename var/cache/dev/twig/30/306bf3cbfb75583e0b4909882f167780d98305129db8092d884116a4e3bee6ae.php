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

/* aile/aileCocukEkle.html.twig */
class __TwigTemplate_7f2ce9be3981716c1294bbd8c220c4ffa05d9a65ed8ef43a7bd12f33dbbda366 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aile/aileCocukEkle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aile/aileCocukEkle.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

</head>
<form  action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_family_child");
        echo "\" method=\"post\" >



    Ebeveyn Seçiniz
    <select name=\"birinci\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kisi"]) || array_key_exists("kisi", $context) ? $context["kisi"] : (function () { throw new RuntimeError('Variable "kisi" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 14
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "isim", [], "any", false, false, false, 14), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "soyisim", [], "any", false, false, false, 14), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "

    </select>

    Çocuk Seçiniz
    <select name=\"ikinci\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kisi"]) || array_key_exists("kisi", $context) ? $context["kisi"] : (function () { throw new RuntimeError('Variable "kisi" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 23
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "isim", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "soyisim", [], "any", false, false, false, 23), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "

    </select>

    Çocuk Durumunu Seçiniz
    <select name=\"cocukdurumu\">

            <option value=\"1\">Öz Evladım</option>
            <option value=\"2\">Üvey Evladım</option>

    </select>

    <button type=\"submit\" class=\"btn btn-primary\">Çocuk Ekle</button>

</form>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "aile/aileCocukEkle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  89 => 23,  85 => 22,  77 => 16,  64 => 14,  60 => 13,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

</head>
<form  action=\"{{ path('new_family_child') }}\" method=\"post\" >



    Ebeveyn Seçiniz
    <select name=\"birinci\">
        {% for a in kisi %}
        <option value=\"{{ a.id }}\">{{ a.isim }} {{ a.soyisim }}</option>
        {% endfor %}


    </select>

    Çocuk Seçiniz
    <select name=\"ikinci\">
        {% for a in kisi %}
            <option value=\"{{ a.id }}\">{{ a.isim }} {{ a.soyisim }}</option>
        {% endfor %}


    </select>

    Çocuk Durumunu Seçiniz
    <select name=\"cocukdurumu\">

            <option value=\"1\">Öz Evladım</option>
            <option value=\"2\">Üvey Evladım</option>

    </select>

    <button type=\"submit\" class=\"btn btn-primary\">Çocuk Ekle</button>

</form>
</html>", "aile/aileCocukEkle.html.twig", "C:\\Users\\Furkan\\Desktop\\Denizhan\\Symfony\\Soyağacı Ödev\\newSoyagaci\\templates\\aile\\aileCocukEkle.html.twig");
    }
}
