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

/* components/sections/speakers.html.twig */
class __TwigTemplate_ea259b17c27b85f49739eb6c2c84761d extends Template
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
        yield "<section class=\"py-16 bg-gray-50\" 
         x-data=\"{ hoveredSpeaker: null }\"
         x-init=\"() => {
             gsap.from('.speaker-card', {
                 opacity: 0,
                 y: 30,
                 duration: 0.8,
                 stagger: 0.2,
                 scrollTrigger: {
                     trigger: '.speakers-grid',
                     start: 'top 80%'
                 }
             });
         }\">
    <div class=\"container mx-auto px-4\">
        ";
        // line 18
        yield "        <h2 class=\"text-3xl font-bold text-center mb-12 flex items-center justify-center\">
            <i class=\"fas fa-users mr-2 text-blue-900\"></i>
            <span>Nos Intervenants</span>
        </h2>

        ";
        // line 24
        yield "        <div class=\"speakers-grid grid md:grid-cols-2 lg:grid-cols-4 gap-8\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["speakers"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["speaker"]) {
            // line 26
            yield "                <div class=\"speaker-card group relative bg-white rounded-md shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-xl\"
                     x-on:mouseenter=\"hoveredSpeaker = ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 27), "html", null, true);
            yield "\"
                     x-on:mouseleave=\"hoveredSpeaker = null\">
                    ";
            // line 30
            yield "                    <div class=\"relative overflow-hidden aspect-w-4 aspect-h-3\">
                        <img src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "photo", [], "any", false, false, false, 31), "html", null, true);
            yield "\" 
                             alt=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "name", [], "any", false, false, false, 32), "html", null, true);
            yield "\" 
                             class=\"w-full h-48 object-cover transform transition-transform duration-500 group-hover:scale-110\"
                             loading=\"lazy\">
                        
                        ";
            // line 37
            yield "                        <div class=\"absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300\"></div>
                    </div>

                    ";
            // line 41
            yield "                    <div class=\"p-6 relative\">
                        <h3 class=\"font-bold text-xl mb-2 text-blue-900 group-hover:text-blue-700 transition-colors duration-300\">
                            ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "name", [], "any", false, false, false, 43), "html", null, true);
            yield "
                        </h3>
                        <p class=\"text-gray-600 mb-1 flex items-center\">
                            <i class=\"fas fa-briefcase mr-2 text-blue-500\"></i>
                            ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "position", [], "any", false, false, false, 47), "html", null, true);
            yield "
                        </p>
                        <p class=\"text-blue-900 flex items-center\">
                            <i class=\"fas fa-building mr-2 text-blue-500\"></i>
                            ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "company", [], "any", false, false, false, 51), "html", null, true);
            yield "
                        </p>

                        ";
            // line 55
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "specialty", [], "any", true, true, false, 55)) {
                // line 56
                yield "                            <span class=\"absolute top-4 right-4 bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full\">
                                ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "specialty", [], "any", false, false, false, 57), "html", null, true);
                yield "
                            </span>
                        ";
            }
            // line 60
            yield "                    </div>

                    ";
            // line 63
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "social", [], "any", true, true, false, 63)) {
                // line 64
                yield "                        <div class=\"absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-blue-900 to-transparent transform translate-y-full group-hover:translate-y-0 transition-transform duration-300\">
                            <div class=\"flex justify-center space-x-4\">
                                ";
                // line 66
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "social", [], "any", false, true, false, 66), "linkedin", [], "any", true, true, false, 66)) {
                    // line 67
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "social", [], "any", false, false, false, 67), "linkedin", [], "any", false, false, false, 67), "html", null, true);
                    yield "\" 
                                       target=\"_blank\" 
                                       rel=\"noopener noreferrer\"
                                       class=\"text-white hover:text-blue-200 transition-colors duration-200\">
                                        <i class=\"fab fa-linkedin text-lg\"></i>
                                    </a>
                                ";
                }
                // line 74
                yield "                                ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "social", [], "any", false, true, false, 74), "twitter", [], "any", true, true, false, 74)) {
                    // line 75
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "social", [], "any", false, false, false, 75), "twitter", [], "any", false, false, false, 75), "html", null, true);
                    yield "\" 
                                       target=\"_blank\" 
                                       rel=\"noopener noreferrer\"
                                       class=\"text-white hover:text-blue-200 transition-colors duration-200\">
                                        <i class=\"fab fa-twitter text-lg\"></i>
                                    </a>
                                ";
                }
                // line 82
                yield "                            </div>
                        </div>
                    ";
            }
            // line 85
            yield "                </div>
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
        unset($context['_seq'], $context['_key'], $context['speaker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "        </div>

        ";
        // line 90
        yield "        <div class=\"text-center mt-12\">
            <a href=\"/intervenants\" 
               class=\"inline-flex items-center bg-blue-900 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-md transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1\">
                <i class=\"fas fa-users mr-2\"></i>
                <span>Découvrir la liste complète</span>
                <i class=\"fas fa-arrow-right ml-2\"></i>
            </a>
        </div>
    </div>
</section>

";
        // line 102
        yield from $this->unwrap()->yieldBlock('component_styles', $context, $blocks);
        // line 131
        yield "
";
        // line 133
        yield from $this->unwrap()->yieldBlock('component_scripts', $context, $blocks);
        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 103
        yield "<style>
    .speaker-card {
        isolation: isolate;
    }

    .speaker-card::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(45deg, #3b82f6 0%, #1e40af 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }

    .speaker-card:hover::after {
        opacity: 0.1;
    }

    @media (prefers-reduced-motion: reduce) {
        .speaker-card,
        .speaker-card img,
        .speaker-card::after {
            transition: none;
        }
    }
</style>
";
        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        yield "<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Animation des cartes au scroll
        const cards = gsap.utils.toArray('.speaker-card');
        
        cards.forEach((card, i) => {
            gsap.from(card, {
                opacity: 0,
                y: 50,
                rotation: 5,
                duration: 0.8,
                delay: i * 0.1,
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
                }
            });
        });

        // Animation du titre
        gsap.from('h2', {
            opacity: 0,
            y: -30,
            duration: 1,
            scrollTrigger: {
                trigger: 'h2',
                start: 'top 80%'
            }
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
        return "components/sections/speakers.html.twig";
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
        return array (  282 => 134,  275 => 133,  243 => 103,  236 => 102,  231 => 133,  228 => 131,  226 => 102,  213 => 90,  209 => 87,  194 => 85,  189 => 82,  178 => 75,  175 => 74,  164 => 67,  162 => 66,  158 => 64,  155 => 63,  151 => 60,  145 => 57,  142 => 56,  139 => 55,  133 => 51,  126 => 47,  119 => 43,  115 => 41,  110 => 37,  103 => 32,  99 => 31,  96 => 30,  91 => 27,  88 => 26,  71 => 25,  68 => 24,  61 => 18,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/sections/speakers.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/sections/speakers.html.twig");
    }
}
