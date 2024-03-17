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

/* @LiveComponent/deferred.html.twig */
class __TwigTemplate_4de8108ed5c80df51bef3ae715693876 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'loadingContent' => [$this, 'block_loadingContent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LiveComponent/deferred.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LiveComponent/deferred.html.twig"));

        // line 1
        echo "<";
        echo twig_escape_filter($this->env, (isset($context["loadingTag"]) || array_key_exists("loadingTag", $context) ? $context["loadingTag"] : (function () { throw new RuntimeError('Variable "loadingTag" does not exist.', 1, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        echo " data-action=\"live:connect->live#\$render\">
    ";
        // line 2
        $this->displayBlock('loadingContent', $context, $blocks);
        // line 7
        echo "</";
        echo twig_escape_filter($this->env, (isset($context["loadingTag"]) || array_key_exists("loadingTag", $context) ? $context["loadingTag"] : (function () { throw new RuntimeError('Variable "loadingTag" does not exist.', 7, $this->source); })()), "html", null, true);
        echo ">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_loadingContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "loadingContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "loadingContent"));

        // line 3
        echo "        ";
        if (((isset($context["loadingTemplate"]) || array_key_exists("loadingTemplate", $context) ? $context["loadingTemplate"] : (function () { throw new RuntimeError('Variable "loadingTemplate" does not exist.', 3, $this->source); })()) != null)) {
            // line 4
            echo "            ";
            echo twig_include($this->env, $context, (isset($context["loadingTemplate"]) || array_key_exists("loadingTemplate", $context) ? $context["loadingTemplate"] : (function () { throw new RuntimeError('Variable "loadingTemplate" does not exist.', 4, $this->source); })()));
            echo "
        ";
        }
        // line 6
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@LiveComponent/deferred.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  85 => 6,  79 => 4,  76 => 3,  66 => 2,  53 => 7,  51 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<{{ loadingTag }} {{ attributes }} data-action=\"live:connect->live#\$render\">
    {% block loadingContent %}
        {% if loadingTemplate != null %}
            {{ include(loadingTemplate) }}
        {% endif %}
    {% endblock %}
</{{ loadingTag }}>
", "@LiveComponent/deferred.html.twig", "/Users/rim.ghdas/lingoda-case/vendor/symfony/ux-live-component/templates/deferred.html.twig");
    }
}
