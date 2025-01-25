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

/* components/sections/partners.html.twig */
class __TwigTemplate_0f29044a92b9b4c9f952373e710185f2 extends Template
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
        yield "<section class=\"py-16 bg-white\"
         x-data=\"{ activeCategory: 'all' }\"
         x-init=\"() => {
             gsap.from('.partner-logo', {
                 opacity: 0,
                 scale: 0.8,
                 duration: 0.8,
                 stagger: 0.1,
                 ease: 'back.out(1.7)',
                 scrollTrigger: {
                     trigger: '.partners-grid',
                     start: 'top 80%'
                 }
             });
         }\">
    <div class=\"container mx-auto px-4\">
        ";
        // line 19
        yield "        <h2 class=\"text-3xl font-bold text-center mb-8\">
            <i class=\"fas fa-handshake mr-2 text-blue-900\"></i>
            <span>Nos Partenaires</span>
        </h2>

        ";
        // line 25
        yield "        <p class=\"text-center text-gray-600 max-w-2xl mx-auto mb-12\">
            Découvrez les entreprises et organisations qui nous accompagnent dans cette aventure 
            et contribuent au succès de l'Africa QSHE Forum.
        </p>

        ";
        // line 31
        yield "        <div class=\"flex flex-wrap justify-center gap-4 mb-12\">
            <button @click=\"activeCategory = 'all'\"
                    :class=\"{ 'bg-blue-900 text-white': activeCategory === 'all', 'bg-gray-100 text-gray-700 hover:bg-gray-200': activeCategory !== 'all' }\"
                    class=\"px-4 py-2 rounded-full font-medium transition-colors duration-300\">
                Tous les partenaires
            </button>
            <button @click=\"activeCategory = 'platinum'\"
                    :class=\"{ 'bg-blue-900 text-white': activeCategory === 'platinum', 'bg-gray-100 text-gray-700 hover:bg-gray-200': activeCategory !== 'platinum' }\"
                    class=\"px-4 py-2 rounded-full font-medium transition-colors duration-300\">
                Platinum
            </button>
            <button @click=\"activeCategory = 'gold'\"
                    :class=\"{ 'bg-blue-900 text-white': activeCategory === 'gold', 'bg-gray-100 text-gray-700 hover:bg-gray-200': activeCategory !== 'gold' }\"
                    class=\"px-4 py-2 rounded-full font-medium transition-colors duration-300\">
                Gold
            </button>
            <button @click=\"activeCategory = 'silver'\"
                    :class=\"{ 'bg-blue-900 text-white': activeCategory === 'silver', 'bg-gray-100 text-gray-700 hover:bg-gray-200': activeCategory !== 'silver' }\"
                    class=\"px-4 py-2 rounded-full font-medium transition-colors duration-300\">
                Silver
            </button>
        </div>

        ";
        // line 55
        yield "        <div class=\"partners-grid grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-items-center mb-12\">
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("partners", $context)) ? (Twig\Extension\CoreExtension::default(($context["partners"] ?? null), [])) : ([])));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 57
            yield "                <div class=\"partner-logo group relative\"
                     x-show=\"activeCategory === 'all' || activeCategory === '";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "category", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "category", [], "any", false, false, false, 58), "all")) : ("all")), "html", null, true);
            yield "'\">
                    <a href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "url", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 59), "#")) : ("#")), "html", null, true);
            yield "\" 
                       class=\"block relative overflow-hidden rounded-md bg-white p-6 shadow-md hover:shadow-xl transition-shadow duration-300\"
                       ";
            // line 61
            if (CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "url", [], "any", true, true, false, 61)) {
                // line 62
                yield "                           target=\"_blank\" 
                           rel=\"noopener noreferrer\"
                       ";
            }
            // line 64
            yield ">
                        ";
            // line 66
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "logo", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "logo", [], "any", false, false, false, 66), ("https://via.placeholder.com/200x100?text=Partenaire+" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 66)))) : (("https://via.placeholder.com/200x100?text=Partenaire+" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 66)))), "html", null, true);
            yield "\" 
                             alt=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "name", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 67), ("Partenaire " . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 67)))) : (("Partenaire " . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 67)))), "html", null, true);
            yield "\" 
                             class=\"max-w-[150px] w-full h-auto transform transition-transform duration-300 group-hover:scale-110\"
                             loading=\"lazy\">
                        
                        ";
            // line 72
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "category", [], "any", true, true, false, 72)) {
                // line 73
                yield "                            <div class=\"absolute top-2 right-2\">
                                ";
                // line 74
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "category", [], "any", false, false, false, 74) == "platinum")) {
                    // line 75
                    yield "                                    <span class=\"bg-gradient-to-r from-gray-300 to-gray-100 text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded-full\">
                                        Platinum
                                    </span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 78
$context["partner"], "category", [], "any", false, false, false, 78) == "gold")) {
                    // line 79
                    yield "                                    <span class=\"bg-gradient-to-r from-yellow-400 to-yellow-300 text-yellow-900 text-xs font-semibold px-2.5 py-0.5 rounded-full\">
                                        Gold
                                    </span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 82
$context["partner"], "category", [], "any", false, false, false, 82) == "silver")) {
                    // line 83
                    yield "                                    <span class=\"bg-gradient-to-r from-gray-400 to-gray-300 text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded-full\">
                                        Silver
                                    </span>
                                ";
                }
                // line 87
                yield "                            </div>
                        ";
            }
            // line 89
            yield "                    </a>
                </div>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 92
            yield "                ";
            // line 93
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 94
                yield "                    <div class=\"partner-logo\">
                        <div class=\"bg-white p-6 rounded-md shadow-md hover:shadow-xl transition-shadow duration-300\">
                            <img src=\"https://via.placeholder.com/200x100?text=Partenaire+";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" 
                                 alt=\"Partenaire ";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" 
                                 class=\"max-w-[150px] hover:opacity-80 transition-opacity duration-300\">
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['partner'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "        </div>

        ";
        // line 106
        yield "        <div class=\"text-center\">
            <a href=\"https://events-qualitas-ci.com/qshe25-b2b/public/\" 
               class=\"inline-flex items-center bg-blue-900 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-md transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1\"
               target=\"_blank\"
               rel=\"noopener noreferrer\">
                <i class=\"fas fa-handshake mr-2\"></i>
                <span>Devenir Partenaire (Sponsor)</span>
            </a>
        </div>
    </div>
</section>

";
        // line 119
        yield from $this->unwrap()->yieldBlock('component_styles', $context, $blocks);
        // line 148
        yield "
";
        // line 150
        yield from $this->unwrap()->yieldBlock('component_scripts', $context, $blocks);
        yield from [];
    }

    // line 119
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 120
        yield "<style>
    .partner-logo {
        perspective: 1000px;
    }

    .partner-logo a {
        transform-style: preserve-3d;
        backface-visibility: hidden;
    }

    .partner-logo img {
        filter: grayscale(100%);
        opacity: 0.8;
        transition: all 0.3s ease;
    }

    .partner-logo:hover img {
        filter: grayscale(0%);
        opacity: 1;
    }

    @media (prefers-reduced-motion: reduce) {
        .partner-logo img {
            transition: none;
        }
    }
</style>
";
        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 151
        yield "<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Animation des logos au scroll
        const logos = gsap.utils.toArray('.partner-logo');
        
        logos.forEach((logo, i) => {
            gsap.from(logo, {
                opacity: 0,
                y: 30,
                rotation: gsap.utils.random(-10, 10),
                duration: 0.8,
                delay: i * 0.1,
                scrollTrigger: {
                    trigger: logo,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
                }
            });
        });

        // Animation des filtres
        const filters = document.querySelectorAll('[x-data] button');
        filters.forEach(filter => {
            filter.addEventListener('click', () => {
                gsap.from('.partner-logo:not([style*=\"display: none\"])', {
                    scale: 0.8,
                    opacity: 0,
                    duration: 0.5,
                    stagger: 0.05,
                    ease: 'back.out(1.7)'
                });
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
        return "components/sections/partners.html.twig";
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
        return array (  309 => 151,  302 => 150,  270 => 120,  263 => 119,  258 => 150,  255 => 148,  253 => 119,  239 => 106,  235 => 103,  229 => 102,  218 => 97,  214 => 96,  210 => 94,  205 => 93,  203 => 92,  188 => 89,  184 => 87,  178 => 83,  176 => 82,  171 => 79,  169 => 78,  164 => 75,  162 => 74,  159 => 73,  156 => 72,  149 => 67,  144 => 66,  141 => 64,  136 => 62,  134 => 61,  129 => 59,  125 => 58,  122 => 57,  104 => 56,  101 => 55,  76 => 31,  69 => 25,  62 => 19,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/sections/partners.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/sections/partners.html.twig");
    }
}
