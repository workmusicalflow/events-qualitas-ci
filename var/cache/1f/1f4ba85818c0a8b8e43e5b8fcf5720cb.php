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

/* components/sections/presentation.html.twig */
class __TwigTemplate_9076b3116c7891d573dba35722f4dc5c extends Template
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
            'component_styles' => [$this, 'block_component_styles'],
            'component_scripts' => [$this, 'block_component_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<section class=\"py-20 bg-white\" 
         x-data=\"{ activeTab: 'programme' }\"
         x-init=\"() => {
             gsap.from('.presentation-content', {
                 opacity: 0,
                 y: 30,
                 duration: 1,
                 scrollTrigger: {
                     trigger: '.presentation-content',
                     start: 'top 80%'
                 }
             });
         }\">
    <div class=\"container mx-auto px-4\">
        <div class=\"max-w-4xl mx-auto\">
            ";
        // line 18
        yield "            <div class=\"presentation-content text-center mb-16\">
                <p class=\"text-2xl text-gray-700 leading-relaxed mb-8\">
                    ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "presentation", [], "any", false, false, false, 20), "intro", [], "any", false, false, false, 20), "html", null, true);
        yield "
                </p>
                <p class=\"text-xl text-gray-600 mb-12\">
                    ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "presentation", [], "any", false, false, false, 23), "details", [], "any", false, false, false, 23), "html", null, true);
        yield "
                </p>
            </div>

            ";
        // line 28
        yield "            <div class=\"grid md:grid-cols-2 gap-8 mb-16\">
                ";
        // line 30
        yield "                <div class=\"bg-blue-50 p-8 rounded-md transform hover:scale-[1.02] transition-transform duration-300\"
                     x-show=\"activeTab === 'programme'\"
                     x-transition:enter=\"transition ease-out duration-300\"
                     x-transition:enter-start=\"opacity-0 transform translate-x-4\"
                     x-transition:enter-end=\"opacity-100 transform translate-x-0\">
                    <h3 class=\"text-xl font-bold text-blue-900 mb-6 flex items-center\">
                        <i class=\"fas fa-calendar-check mr-2\"></i>Au programme
                    </h3>
                    <ul class=\"space-y-4\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "presentation", [], "any", false, false, false, 39), "programme", [], "any", false, false, false, 39));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 40
            yield "                            <li class=\"flex items-start animate-fade-in\" style=\"animation-delay: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 40) * 150), "html", null, true);
            yield "ms\">
                                <i class=\"fas fa-check-circle text-green-500 mt-1 mr-3\"></i>
                                <span class=\"text-gray-700\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
            yield "</span>
                            </li>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                    </ul>
                </div>

                ";
        // line 49
        yield "                <div class=\"bg-green-50 p-8 rounded-md transform hover:scale-[1.02] transition-transform duration-300\"
                     x-show=\"activeTab === 'objectif'\"
                     x-transition:enter=\"transition ease-out duration-300\"
                     x-transition:enter-start=\"opacity-0 transform translate-x-4\"
                     x-transition:enter-end=\"opacity-100 transform translate-x-0\">
                    <h3 class=\"text-xl font-bold text-green-900 mb-6 flex items-center\">
                        <i class=\"fas fa-bullseye mr-2\"></i>Notre objectif
                    </h3>
                    <p class=\"text-gray-700 leading-relaxed\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "presentation", [], "any", false, false, false, 57), "objectif", [], "any", false, false, false, 57), "html", null, true);
        yield "</p>
                </div>
            </div>

            ";
        // line 62
        yield "            <div class=\"text-center\">
                <a href=\"https://events-qualitas-ci.com/formulaire.html\" 
                   class=\"inline-flex items-center bg-blue-900 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-md transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1\">
                    <i class=\"fas fa-id-badge mr-2\"></i>
                    <span>Générer mon badge de visite</span>
                </a>
            </div>
        </div>
    </div>
</section>

";
        // line 74
        yield from $this->unwrap()->yieldBlock('component_styles', $context, $blocks);
        // line 100
        yield "
";
        // line 102
        yield from $this->unwrap()->yieldBlock('component_scripts', $context, $blocks);
        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        yield "<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        opacity: 0;
        animation: fadeIn 0.5s ease-out forwards;
    }

    @media (prefers-reduced-motion: reduce) {
        .animate-fade-in {
            animation: none;
            opacity: 1;
        }
    }
</style>
";
        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 103
        yield "<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Animation des éléments au scroll
        gsap.utils.toArray('.presentation-content > *').forEach((elem, i) => {
            gsap.from(elem, {
                opacity: 0,
                y: 20,
                duration: 0.8,
                delay: i * 0.2,
                scrollTrigger: {
                    trigger: elem,
                    start: 'top 80%'
                }
            });
        });
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/sections/presentation.html.twig";
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
        return array (  220 => 103,  213 => 102,  184 => 75,  177 => 74,  172 => 102,  169 => 100,  167 => 74,  154 => 62,  147 => 57,  137 => 49,  132 => 45,  115 => 42,  109 => 40,  92 => 39,  81 => 30,  78 => 28,  71 => 23,  65 => 20,  61 => 18,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/sections/presentation.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/sections/presentation.html.twig");
    }
}
