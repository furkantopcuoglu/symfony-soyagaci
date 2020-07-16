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

/* kisi/kisiEkle.html.twig */
class __TwigTemplate_0b4eafea5d5eee464c9cac4a0d9daa85af9673fb7644f07eb17dc472d0e44316 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kisi/kisiEkle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kisi/kisiEkle.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

</head>
<form  action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_person");
        echo "\" method=\"post\" >



    Kişi İsmi
    <input type=\"text\"  name=\"isim\"><br><br>
    Kişi Soyismi
    <input type=\"text\"  name=\"soyisim\"><br><br>
    Cinsiyet Seçiniz
    <select name=\"cinsiyet\">

                <option value=\"Erkek\">Erkek</option>
                <option value=\"Kadın\">Kadın</option>


    </select>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Ürün Ekle</button>

</form>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "kisi/kisiEkle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

</head>
<form  action=\"{{ path('new_person') }}\" method=\"post\" >



    Kişi İsmi
    <input type=\"text\"  name=\"isim\"><br><br>
    Kişi Soyismi
    <input type=\"text\"  name=\"soyisim\"><br><br>
    Cinsiyet Seçiniz
    <select name=\"cinsiyet\">

                <option value=\"Erkek\">Erkek</option>
                <option value=\"Kadın\">Kadın</option>


    </select>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Ürün Ekle</button>

</form>
</html>", "kisi/kisiEkle.html.twig", "C:\\Users\\Furkan\\Desktop\\Denizhan\\Symfony\\Soyağacı Ödev\\newSoyagaci\\templates\\kisi\\kisiEkle.html.twig");
    }
}
