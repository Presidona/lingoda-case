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

/* debug/source_code.html.twig */
class __TwigTemplate_af75d05d2e6b698f11fe29c4ae547b77 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "debug/source_code.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "debug/source_code.html.twig"));

        // line 1
        echo "<div class=\"section source-code\">
    <p>
        ";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.show_code");
        echo "
    </p>

    <button type=\"button\" class=\"btn btn-secondary py-3 btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#sourceCodeModal\">
      <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show_code"), "html", null, true);
        echo "
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\"><i class=\"fa fa-code\" aria-hidden=\"true\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.source_code"), "html", null, true);
        echo "</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close"), "html", null, true);
        echo "\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"controller-tab\" data-toggle=\"tab\" href=\"#controller-code\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\" target=\"_blank\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.controller_code"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"template-tab\" data-toggle=\"tab\" href=\"#template-code\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\" target=\"_blank\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.twig_template_code"), "html", null, true);
        echo "</a>
                        </li>
                    </ul>

                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane show active\" id=\"controller-code\" role=\"tabpanel\" aria-labelledby=\"controller-tab\">
                            ";
        // line 32
        if ((isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "                                <p class=\"file-link\">";
            echo $this->extensions['App\Twig\SourceCodeExtension']->linkSourceFile($this->env, twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 33, $this->source); })()), "file_path", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 33, $this->source); })()), "starting_line", [], "any", false, false, false, 33));
            echo "</p>
                                <pre><code class=\"php\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 34, $this->source); })()), "source_code", [], "any", false, false, false, 34), "html", null, true);
            echo "</code></pre>
                            ";
        } else {
            // line 36
            echo "                                <pre><code>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not_available"), "html", null, true);
            echo "</code></pre>
                            ";
        }
        // line 38
        echo "                        </div>

                        <div class=\"tab-pane\" id=\"template-code\" role=\"tabpanel\" aria-labelledby=\"template-tab\">
                            <p class=\"file-link\">";
        // line 41
        echo $this->extensions['App\Twig\SourceCodeExtension']->linkSourceFile($this->env, twig_get_attribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 41, $this->source); })()), "file_path", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 41, $this->source); })()), "starting_line", [], "any", false, false, false, 41));
        echo "</p>
                            <pre><code class=\"twig\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 42, $this->source); })()), "source_code", [], "any", false, false, false, 42), "html", null, true);
        echo "</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "debug/source_code.html.twig";
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
        return array (  121 => 42,  117 => 41,  112 => 38,  106 => 36,  101 => 34,  96 => 33,  94 => 32,  85 => 26,  79 => 23,  68 => 15,  64 => 14,  54 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section source-code\">
    <p>
        {{ 'help.show_code'|trans|raw }}
    </p>

    <button type=\"button\" class=\"btn btn-secondary py-3 btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#sourceCodeModal\">
      <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> {{ 'action.show_code'|trans }}
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\"><i class=\"fa fa-code\" aria-hidden=\"true\"></i> {{ 'title.source_code'|trans }}</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"{{ 'action.close'|trans }}\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"controller-tab\" data-toggle=\"tab\" href=\"#controller-code\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\" target=\"_blank\">{{ 'title.controller_code'|trans }}</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"template-tab\" data-toggle=\"tab\" href=\"#template-code\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\" target=\"_blank\">{{ 'title.twig_template_code'|trans }}</a>
                        </li>
                    </ul>

                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane show active\" id=\"controller-code\" role=\"tabpanel\" aria-labelledby=\"controller-tab\">
                            {% if controller %}
                                <p class=\"file-link\">{{ link_source_file(controller.file_path, controller.starting_line) }}</p>
                                <pre><code class=\"php\">{{ controller.source_code }}</code></pre>
                            {% else %}
                                <pre><code>{{ 'not_available'|trans }}</code></pre>
                            {% endif %}
                        </div>

                        <div class=\"tab-pane\" id=\"template-code\" role=\"tabpanel\" aria-labelledby=\"template-tab\">
                            <p class=\"file-link\">{{ link_source_file(template.file_path, template.starting_line) }}</p>
                            <pre><code class=\"twig\">{{ template.source_code }}</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "debug/source_code.html.twig", "/Users/rim.ghdas/lingoda-case/templates/debug/source_code.html.twig");
    }
}
