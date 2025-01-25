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

/* components/navigation.html.twig */
class __TwigTemplate_ce99881c0603bafa22f2452ba3ad6a56 extends Template
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
        // line 1
        yield "<nav class=\"fixed top-0 left-0 w-full bg-blue-900 shadow-lg z-50\">
    <div class=\"container mx-auto px-4\">
        <div class=\"flex items-center justify-between h-16\">
            <!-- Logo -->
            <a href=\"/\" class=\"flex items-center\">
                <img src=\"/images/logo/logo-qshe.svg\" 
                     alt=\"Logo Africa QSHE Forum\" 
                     class=\"h-10 w-auto\">
            </a>

            <!-- Menu Desktop -->
            <div class=\"hidden md:flex space-x-8\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "items", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 14), "html", null, true);
            yield "\" 
                       class=\"text-white hover:text-blue-200 font-medium transition-colors duration-200\">
                        ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 16), "html", null, true);
            yield "
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "            </div>

            <!-- Menu Mobile -->
            <div class=\"md:hidden\">
                <button @click=\"isOpen = !isOpen\" 
                        class=\"text-white hover:text-blue-200 focus:outline-none\">
                    <i class=\"fas fa-bars text-2xl\"></i>
                </button>
            </div>
        </div>

        <!-- Menu Mobile Dropdown -->
        <div class=\"md:hidden\" x-show=\"isOpen\" @click.away=\"isOpen = false\">
            <div class=\"px-2 pt-2 pb-3 space-y-1\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "items", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 34), "html", null, true);
            yield "\" 
                       class=\"block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-blue-800\">
                        ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 36), "html", null, true);
            yield "
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "            </div>
        </div>
    </div>
</nav>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/navigation.html.twig";
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
        return array (  110 => 39,  101 => 36,  95 => 34,  91 => 33,  75 => 19,  66 => 16,  60 => 14,  56 => 13,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/navigation.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/navigation.html.twig");
    }
}
