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

/* kisi/kisiGuncelle.html.twig */
class __TwigTemplate_97e20e117b00463ebd4569899f17bba5fddfbc2a05e70c31663bddfccb4cb25f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kisi/kisiGuncelle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kisi/kisiGuncelle.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

</head>

<form  action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_person", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\" method=\"post\" >


    Kişi İsmi
    <input type=\"text\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 12, $this->source); })()), "isim", [], "any", false, false, false, 12), "html", null, true);
        echo "\"  name=\"isim\"><br><br>
    Kişi Soyismi
    <input type=\"text\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 14, $this->source); })()), "soyisim", [], "any", false, false, false, 14), "html", null, true);
        echo "\"  name=\"soyisim\"><br><br>
    Cinsiyet Seçiniz
    <select name=\"cinsiyet\">

                <option value=\"Erkek\">Erkek</option>
                <option value=\"Kadın\">Kadın</option>


    </select>
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">Kişi Güncelle</button>

</form>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "kisi/kisiGuncelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  59 => 12,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

</head>

<form  action=\"{{ path('update_person', { 'id' : person.id }) }}\" method=\"post\" >


    Kişi İsmi
    <input type=\"text\" value=\"{{ person.isim }}\"  name=\"isim\"><br><br>
    Kişi Soyismi
    <input type=\"text\" value=\"{{ person.soyisim }}\"  name=\"soyisim\"><br><br>
    Cinsiyet Seçiniz
    <select name=\"cinsiyet\">

                <option value=\"Erkek\">Erkek</option>
                <option value=\"Kadın\">Kadın</option>


    </select>
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">Kişi Güncelle</button>

</form>
</html>", "kisi/kisiGuncelle.html.twig", "C:\\Users\\Furkan\\Desktop\\Denizhan\\Symfony\\Soyağacı Ödev\\newSoyagaci\\templates\\kisi\\kisiGuncelle.html.twig");
    }
}
