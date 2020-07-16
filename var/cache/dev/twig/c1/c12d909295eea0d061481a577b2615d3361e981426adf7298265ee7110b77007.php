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

/* home.html.twig */
class __TwigTemplate_e128251f07b45e338dc03c2361b5b9bf30df2424ab22b5389436247869e31cef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Symfony Soyağacı</title>
</head>
<body>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sorgu"]) || array_key_exists("sorgu", $context) ? $context["sorgu"] : (function () { throw new RuntimeError('Variable "sorgu" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 9
            echo "
    <b style=\"font: bold;font-size: 25px\"> <b style=\"color: darkblue\">1. Ebeveyn </b> <b style=\"color: black\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "birinci_isim", [], "any", false, false, false, 10), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "birinci_soyisim", [], "any", false, false, false, 10), "html", null, true);
            echo " <b style=\"color: #C82829\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "birinci_cinsiyet", [], "any", false, false, false, 10), "html", null, true);
            echo " </b></b> <b style=\"color: darkblue\">2. Ebeveyn </b> <b style=\"color: black\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "ikinci_isim", [], "any", false, false, false, 10), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "ikinci_soyisim", [], "any", false, false, false, 10), "html", null, true);
            echo " <b style=\"color: #C82829\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "ikinci_cinsiyet", [], "any", false, false, false, 10), "html", null, true);
            echo " </b> </b> <br> </b>


    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["sorguter"]) || array_key_exists("sorguter", $context) ? $context["sorguter"] : (function () { throw new RuntimeError('Variable "sorguter" does not exist.', 13, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 14
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sorguter"]) || array_key_exists("sorguter", $context) ? $context["sorguter"] : (function () { throw new RuntimeError('Variable "sorguter" does not exist.', 14, $this->source); })()), $context["i"], [], "array", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["keyter"]) {
                    // line 15
                    echo "
            ";
                    // line 16
                    if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["keyter"], "birinci_id", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, $context["key"], "birinci_id", [], "any", false, false, false, 16))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["keyter"], "birinci_id", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, $context["key"], "ikinci_id", [], "any", false, false, false, 16))))) {
                        // line 17
                        echo "                <a style=\"padding-left: 40px;\">  <b style=\"color: #C82829\">Çocuk İsmi=</b> <b style=\"color: #F5871F\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["keyter"], "isim", [], "any", false, false, false, 17), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["keyter"], "soyisim", [], "any", false, false, false, 17), "html", null, true);
                        echo " <b style=\"color: #C82829\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["keyter"], "cinsiyet", [], "any", false, false, false, 17), "html", null, true);
                        echo " </b> </b> <b style=\"color: #8959A8\"> Çocuk Durumu=</b>
                    ";
                        // line 18
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["keyter"], "cocukdurumu", [], "any", false, false, false, 18), 1))) {
                            // line 19
                            echo "                        <b style=\"color: cadetblue\">Öz Çocuk </b>
                    ";
                        } else {
                            // line 21
                            echo "                        <b style=\"color: #B0413E\">Evlatlık Çocuk </b>
                    ";
                        }
                        // line 23
                        echo "                </a>
                <br>
            ";
                    }
                    // line 26
                    echo "

        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 32,  127 => 30,  121 => 29,  113 => 26,  108 => 23,  104 => 21,  100 => 19,  98 => 18,  89 => 17,  87 => 16,  84 => 15,  79 => 14,  75 => 13,  59 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Symfony Soyağacı</title>
</head>
<body>
{% for key in sorgu %}

    <b style=\"font: bold;font-size: 25px\"> <b style=\"color: darkblue\">1. Ebeveyn </b> <b style=\"color: black\">{{ key.birinci_isim}} {{ key.birinci_soyisim}} <b style=\"color: #C82829\">{{ key.birinci_cinsiyet }} </b></b> <b style=\"color: darkblue\">2. Ebeveyn </b> <b style=\"color: black\">{{ key.ikinci_isim}} {{ key.ikinci_soyisim}} <b style=\"color: #C82829\">{{ key.ikinci_cinsiyet}} </b> </b> <br> </b>


    {% for i in 0..sorguter|length-1 %}
        {% for keyter in sorguter[i] %}

            {% if( (keyter.birinci_id == key.birinci_id) or (keyter.birinci_id == key.ikinci_id) ) %}
                <a style=\"padding-left: 40px;\">  <b style=\"color: #C82829\">Çocuk İsmi=</b> <b style=\"color: #F5871F\">{{ keyter.isim }} {{ keyter.soyisim }} <b style=\"color: #C82829\">{{ keyter.cinsiyet}} </b> </b> <b style=\"color: #8959A8\"> Çocuk Durumu=</b>
                    {% if keyter.cocukdurumu == 1 %}
                        <b style=\"color: cadetblue\">Öz Çocuk </b>
                    {% else %}
                        <b style=\"color: #B0413E\">Evlatlık Çocuk </b>
                    {% endif %}
                </a>
                <br>
            {% endif %}


        {% endfor %}
    {% endfor %}

{% endfor %}


</body>
</html>", "home.html.twig", "C:\\Users\\Furkan\\Desktop\\Denizhan\\Symfony\\Soyağacı Ödev\\newSoyagaci\\templates\\home.html.twig");
    }
}
