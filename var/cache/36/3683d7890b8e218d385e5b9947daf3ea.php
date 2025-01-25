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

/* components/banner/hero.html.twig */

class __TwigTemplate_020ecee5620d4d8a3b0178ddd206f905 extends Template
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
        yield "<header class=\"relative\">
    <div class=\"banner-container\">
        ";
        // line 5
        yield "        <picture>
            <source media=\"(min-width: 1024px)\" srcset=\"/images/banner/desktop-banner.jpg\">
            <source media=\"(min-width: 768px)\" srcset=\"/images/banner/tablette-banner.jpg\">
            <img src=\"/images/banner/mobile-banner.jpg\" 
                 alt=\"Africa QSHE Forum\" 
                 class=\"banner-image\"
                 loading=\"eager\"
                 fetchpriority=\"high\">
        </picture>

        ";
        // line 16
        yield "        <div class=\"banner-overlay\"></div>
        
        ";
        // line 19
        yield "        <div class=\"container mx-auto px-4 h-full flex items-center\">
            <div class=\"max-w-4xl mx-auto text-white text-center relative z-10\">
                ";
        // line 22
        yield "                <div class=\"banner-content space-y-8\">
                    <h1 class=\"banner-title text-4xl md:text-5xl lg:text-6xl font-bold\">
                        ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "
                    </h1>

                    ";
        // line 28
        yield "                    <div class=\"inline-block bg-blue-900/30 backdrop-blur-sm rounded-xl p-4 md:p-6 transform hover:scale-105 transition-transform duration-300\">
                        <div class=\"flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-8\">
                            <time datetime=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "dates", [], "any", false, false, false, 30), "start", [], "any", false, false, false, 30), "html", null, true);
        yield "\" class=\"text-xl md:text-2xl font-bold text-yellow-400\">
                                ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "dates", [], "any", false, false, false, 31), "display", [], "any", false, false, false, 31), "html", null, true);
        yield "
                            </time>
                            <div class=\"hidden md:block w-px h-12 bg-blue-400/30\"></div>
                            <div class=\"text-lg text-blue-200\">
                                ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "location", [], "any", false, false, false, 35), "venue", [], "any", false, false, false, 35), "html", null, true);
        yield "
                            </div>
                        </div>
                    </div>

                    <p class=\"banner-description text-xl md:text-2xl font-light max-w-3xl mx-auto\">
                        ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", false, false, false, 41), "html", null, true);
        yield "
                    </p>

                    ";
        // line 45
        yield "                    <div class=\"grid md:grid-cols-3 gap-4 mt-8\">
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "dates", [], "any", false, false, false, 46), "schedule", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 47
            yield "                            <div class=\"bg-white/10 backdrop-blur-sm rounded-md p-4 transform hover:scale-105 transition-transform duration-300\">
                                <div class=\"text-yellow-400 font-bold mb-2\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, false, 48), "html", null, true);
            yield "</div>
                                <h3 class=\"text-lg font-semibold mb-2\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "title", [], "any", false, false, false, 49), "html", null, true);
            yield "</h3>
                                <ul class=\"text-sm text-blue-200 space-y-1\">
                                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "events", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 52
                yield "                                        <li class=\"flex items-center\">
                                            <i class=\"fas fa-check-circle text-green-400 mr-2\"></i>
                                            <span>";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["event"], "html", null, true);
                yield "</span>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "                                </ul>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "                    </div>

                    <h2 class=\"banner-theme font-semibold text-2xl md:text-3xl text-yellow-400 mt-8\">
                        ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "theme", [], "any", false, false, false, 63), "html", null, true);
        yield "
                    </h2>
                </div>

                ";
        // line 68
        yield "                ";
        yield from $this->loadTemplate("components/banner/event-info.html.twig", "components/banner/hero.html.twig", 68)->unwrap()->yield(CoreExtension::merge($context, ["dates" => CoreExtension::getAttribute(
            $this->env,
            $this->source,         // line 69
            ($context["event"] ?? null),
            "dates",
            [],
            "any",
            false,
            false,
            false,
            69
        ), "location" => CoreExtension::getAttribute(
            $this->env,
            $this->source,         // line 70
            ($context["event"] ?? null),
            "location",
            [],
            "any",
            false,
            false,
            false,
            70
        )]));
        // line 72
        yield "
                ";
        // line 74
        yield "                ";
        yield from $this->loadTemplate("components/banner/cta-button.html.twig", "components/banner/hero.html.twig", 74)->unwrap()->yield($context);
        // line 75
        yield "            </div>
        </div>

        ";
        // line 79
        yield "        <div class=\"absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce hidden md:block\">
            <div class=\"text-white/60 text-sm flex flex-col items-center space-y-2\">
                <span class=\"text-xs uppercase tracking-wider\">Découvrir</span>
                <i class=\"fas fa-chevron-down\"></i>
            </div>
        </div>
    </div>
</header>

";
        // line 89
        yield from $this->unwrap()->yieldBlock('component_styles', $context, $blocks);
        // line 130
        yield "
";
        // line 132
        yield from $this->unwrap()->yieldBlock('component_scripts', $context, $blocks);
        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 90
        yield "<style>
    .banner-title {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .banner-theme {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(-25%);
            animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
        }
        50% {
            transform: translateY(0);
            animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
        }
    }

    .animate-bounce {
        animation: bounce 2s infinite;
    }

    @media (prefers-reduced-motion: reduce) {
        .animate-bounce,
        .transform {
            animation: none;
            transition: none;
        }
    }

    @media (max-width: 768px) {
        .banner-container {
            height: auto;
            min-height: 100vh;
        }
    }
</style>
";
        yield from [];
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 133
        yield "<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Animation des éléments au chargement
        const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

        tl.from('.banner-title', {
            y: 50,
            opacity: 0,
            duration: 1
        })
        .from('.banner-description', {
            y: 30,
            opacity: 0,
            duration: 1
        }, '-=0.5')
        .from('.grid > div', {
            y: 30,
            opacity: 0,
            duration: 0.8,
            stagger: 0.2
        }, '-=0.5')
        .from('.banner-theme', {
            y: 30,
            opacity: 0,
            duration: 1
        }, '-=0.5');

        // Parallaxe au scroll
        gsap.to('.banner-image', {
            y: 100,
            ease: 'none',
            scrollTrigger: {
                trigger: '.banner-container',
                start: 'top top',
                end: 'bottom top',
                scrub: true
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
        return "components/banner/hero.html.twig";
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
        return array(259 => 133,  252 => 132,  208 => 90,  201 => 89,  196 => 132,  193 => 130,  191 => 89,  180 => 79,  175 => 75,  172 => 74,  169 => 72,  167 => 70,  166 => 69,  164 => 68,  157 => 63,  152 => 60,  144 => 57,  135 => 54,  131 => 52,  127 => 51,  122 => 49,  118 => 48,  115 => 47,  111 => 46,  108 => 45,  102 => 41,  93 => 35,  86 => 31,  82 => 30,  78 => 28,  72 => 24,  68 => 22,  64 => 19,  60 => 16,  48 => 5,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/banner/hero.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/banner/hero.html.twig");
    }
}
