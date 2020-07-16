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

/* aile/aileCocukListe.html.twig */
class __TwigTemplate_14e0f63a8c170e06c83028457b7b8a2df300b001abe95e5c6c9d2c503f6588b0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aile/aileCocukListe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aile/aileCocukListe.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

</head>
    <table>
       Çocuk Tablosu
        <tr>
            <th>id</th>
            <th>Ebeveyn</th>
            <th>Çocuk</th>

            <th>cocukdurumu</th>
            <th>Güncelle</th>
            <th>Sil</th>
        </tr>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aile"]) || array_key_exists("aile", $context) ? $context["aile"] : (function () { throw new RuntimeError('Variable "aile" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 19
            echo "            <tr>

                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "birinci", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "ikinci", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>

                <td>";
            // line 25
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["a"], "cocukdurumu", [], "any", false, false, false, 25), 1))) {
                echo " Öz Evladım ";
            } else {
                echo " Üvey Evladım ";
            }
            echo "</td>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_family_child", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">Güncelle</a></td>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_family_child", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">Sil</a></td>


            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </table>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "aile/aileCocukListe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  95 => 27,  91 => 26,  83 => 25,  78 => 23,  74 => 22,  70 => 21,  66 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

</head>
    <table>
       Çocuk Tablosu
        <tr>
            <th>id</th>
            <th>Ebeveyn</th>
            <th>Çocuk</th>

            <th>cocukdurumu</th>
            <th>Güncelle</th>
            <th>Sil</th>
        </tr>
        {% for a in aile %}
            <tr>

                <td>{{ a.id }}</td>
                <td>{{ a.birinci }}</td>
                <td>{{ a.ikinci }}</td>

                <td>{% if (a.cocukdurumu==1) %} Öz Evladım {% else %} Üvey Evladım {% endif %}</td>
                <td><a href=\"{{ path('update_family_child',{id: a.id}) }}\">Güncelle</a></td>
                <td><a href=\"{{ path('delete_family_child',{id: a.id}) }}\">Sil</a></td>


            </tr>
        {% endfor %}
    </table>
</html>", "aile/aileCocukListe.html.twig", "C:\\Users\\Furkan\\Desktop\\Denizhan\\Symfony\\Soyağacı Ödev\\newSoyagaci\\templates\\aile\\aileCocukListe.html.twig");
    }
}
