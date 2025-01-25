<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* components/navigation/main-nav.html.twig */
class __TwigTemplate_f3cc17e0457a2c0b2f9a34ff692f2105 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<nav class=\"bg-blue-900 text-white shadow-lg py-3\" 
     x-data=\"{ isOpen: false }\">
    <div class=\"container mx-auto px-4\">
        <div class=\"flex justify-between items-center h-16\">
            ";
        // line 7
        yield "            <a href=\"/\" 
               class=\"p-2 rounded-md\"
               aria-label=\"Accueil - ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "logo", [], "any", false, false, false, 9), "alt", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
                <picture>
                    <source srcset=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "logo", [], "any", false, false, false, 11), "svg", [], "any", false, false, false, 11), "html", null, true);
        yield "\" type=\"image/svg+xml\">
                    <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "logo", [], "any", false, false, false, 12), "png", [], "any", false, false, false, 12), "html", null, true);
        yield "\" 
                         alt=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "logo", [], "any", false, false, false, 13), "alt", [], "any", false, false, false, 13), "html", null, true);
        yield "\"
                         class=\"h-10 w-auto\">
                </picture>
            </a>
            
            ";
        // line 19
        yield "            <button @click=\"isOpen = !isOpen\" 
                    class=\"md:hidden p-2 rounded-md hover:bg-blue-800\"
                    aria-controls=\"mobile-menu\"
                    aria-label=\"Menu principal\">
                <i class=\"fas fa-bars text-2xl\"></i>
            </button>

            ";
        // line 27
        yield "            <div class=\"hidden md:flex items-center space-x-2\">
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "items", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 29), "html", null, true);
            yield "\" 
                       class=\"px-4 py-2 rounded-md ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "highlight", [], "any", false, false, false, 30)) {
                yield "bg-yellow-500 text-blue-900 hover:bg-yellow-400 font-bold";
            } else {
                yield "text-white hover:bg-blue-800";
            }
            yield "\"
                       ";
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "external", [], "any", false, false, false, 31)) {
                // line 32
                yield "                           target=\"_blank\" 
                           rel=\"noopener noreferrer\"
                       ";
            }
            // line 34
            yield ">
                        <i class=\"fas fa-";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 35), "html", null, true);
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "highlight", [], "any", false, false, false, 35)) {
                yield "text-blue-900";
            } else {
                yield "text-yellow-400";
            }
            yield " mr-2\"></i>
                        <span>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "            </div>
        </div>

        ";
        // line 43
        yield "        <div id=\"mobile-menu\" 
             class=\"md:hidden\"
             x-show=\"isOpen\"
             @click.away=\"isOpen = false\">
            <div class=\"py-2 space-y-1\">
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "items", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 49), "html", null, true);
            yield "\" 
                       class=\"block px-4 py-2 rounded-md ";
            // line 50
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "highlight", [], "any", false, false, false, 50)) {
                yield "bg-yellow-500 text-blue-900 hover:bg-yellow-400 font-bold";
            } else {
                yield "text-white hover:bg-blue-800";
            }
            yield "\"
                       ";
            // line 51
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "external", [], "any", false, false, false, 51)) {
                // line 52
                yield "                           target=\"_blank\" 
                           rel=\"noopener noreferrer\"
                       ";
            }
            // line 54
            yield ">
                        <i class=\"fas fa-";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 55), "html", null, true);
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "highlight", [], "any", false, false, false, 55)) {
                yield "text-blue-900";
            } else {
                yield "text-yellow-400";
            }
            yield " mr-2\"></i>
                        <span>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 56), "html", null, true);
            yield "</span>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "            </div>
        </div>
    </div>
</nav>

<style>
    /* Styles minimaux sans animations complexes */
    nav {
        position: sticky;
        top: 0;
        z-index: 50;
    }

    /* Transitions simples pour les interactions */
    a, button {
        transition: background-color 0.2s;
    }

    @media (prefers-reduced-motion: reduce) {
        a, button {
            transition: none;
        }
    }
</style>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/navigation/main-nav.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  189 => 59,  180 => 56,  170 => 55,  167 => 54,  162 => 52,  160 => 51,  152 => 50,  147 => 49,  143 => 48,  136 => 43,  131 => 39,  122 => 36,  112 => 35,  109 => 34,  104 => 32,  102 => 31,  94 => 30,  89 => 29,  85 => 28,  82 => 27,  73 => 19,  65 => 13,  61 => 12,  57 => 11,  52 => 9,  48 => 7,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/navigation/main-nav.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/navigation/main-nav.html.twig");
    }
}
