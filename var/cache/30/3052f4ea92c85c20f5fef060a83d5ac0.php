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

/* components/banner/event-info.html.twig */
class __TwigTemplate_a50653df6b21659a8ea236f931af5656 extends Template
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
        yield "<div class=\"event-info-box mt-12 p-8 rounded-xl backdrop-blur-md bg-gradient-to-br from-blue-900/40 to-blue-800/40 border border-white/10\">
    <div class=\"grid md:grid-cols-2 gap-8\">
        ";
        // line 5
        yield "        <div class=\"space-y-4\">
            <div class=\"flex items-start space-x-4\">
                <div class=\"info-icon text-yellow-400 bg-white/10 rounded-full p-4 flex-shrink-0\">
                    <i class=\"fas fa-calendar-alt text-2xl\"></i>
                </div>
                <div class=\"flex-grow\">
                    <h3 class=\"text-lg font-semibold text-white mb-2\">Programme</h3>
                    <div class=\"space-y-3\">
                        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["dates"] ?? null), "schedule", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 14
            yield "                            <div class=\"text-blue-200\">
                                <div class=\"flex items-center\">
                                    <time datetime=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "date", [], "any", false, false, false, 16), "html", null, true);
            yield "\" class=\"font-medium text-yellow-400\">
                                        ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "date", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
            yield "
                                    </time>
                                </div>
                                <div class=\"ml-4 mt-1\">
                                    <div class=\"text-sm font-medium\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "title", [], "any", false, false, false, 21), "html", null, true);
            yield "</div>
                                    <div class=\"text-xs text-blue-300 mt-1\">
                                        ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["day"], "events", [], "any", false, false, false, 23)), "html", null, true);
            yield "...
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "                    </div>
                </div>
            </div>
        </div>

        ";
        // line 34
        yield "        <div class=\"space-y-4\">
            <div class=\"flex items-start space-x-4\">
                <div class=\"info-icon text-yellow-400 bg-white/10 rounded-full p-4 flex-shrink-0\">
                    <i class=\"fas fa-map-marker-alt text-2xl\"></i>
                </div>
                <div class=\"flex-grow\">
                    <h3 class=\"text-lg font-semibold text-white mb-2\">Lieu</h3>
                    <div class=\"space-y-2\">
                        <div class=\"text-yellow-400 font-medium\">
                            ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "venue", [], "any", false, false, false, 43), "html", null, true);
        yield "
                        </div>
                        <div class=\"text-blue-200\">
                            ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "address", [], "any", false, false, false, 46), "html", null, true);
        yield "
                        </div>
                        <div class=\"text-blue-200\">
                            ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 49), "html", null, true);
        yield "
                        </div>
                        <a href=\"https://www.google.com/maps?q=";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "coordinates", [], "any", false, false, false, 51), "lat", [], "any", false, false, false, 51), "html", null, true);
        yield ",";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "coordinates", [], "any", false, false, false, 51), "lng", [], "any", false, false, false, 51), "html", null, true);
        yield "\"
                           target=\"_blank\"
                           rel=\"noopener noreferrer\"
                           class=\"inline-flex items-center text-sm text-blue-300 hover:text-white transition-colors mt-2\">
                            <i class=\"fas fa-directions mr-2\"></i>
                            <span>Itinéraire</span>
                            <i class=\"fas fa-external-link-alt ml-1 text-xs\"></i>
                        </a>
                    </div>
                </div>
            </div>

            ";
        // line 64
        yield "            <div class=\"mt-4 pt-4 border-t border-white/10\">
                <div class=\"flex items-center justify-between text-sm\">
                    <div class=\"flex items-center text-blue-200\">
                        <i class=\"fas fa-clock mr-2\"></i>
                        <span>08:30 - 17:30</span>
                    </div>
                    <div class=\"flex items-center text-blue-200\">
                        <i class=\"fas fa-users mr-2\"></i>
                        <span>500+ participants</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 81
        yield from $this->unwrap()->yieldBlock('component_styles', $context, $blocks);
        // line 115
        yield "
";
        // line 117
        yield from $this->unwrap()->yieldBlock('component_scripts', $context, $blocks);
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "<style>
    .info-icon {
        transition: all 0.3s ease;
    }

    .info-icon:hover {
        transform: scale(1.1);
        background-color: rgba(255, 255, 255, 0.2);
    }

    .event-info-box {
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .event-info-box:hover {
        transform: translateY(-2px);
    }

    @media (prefers-reduced-motion: reduce) {
        .info-icon,
        .event-info-box {
            transition: none;
        }
    }

    @media (max-width: 768px) {
        .event-info-box {
            padding: 1.5rem;
        }
    }
</style>
";
        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 118
        yield "<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Animation des icônes
        const icons = document.querySelectorAll('.info-icon');
        icons.forEach(icon => {
            gsap.from(icon, {
                rotate: 360,
                opacity: 0,
                duration: 1,
                scrollTrigger: {
                    trigger: icon,
                    start: 'top 80%'
                }
            });
        });

        // Animation des informations
        const infos = document.querySelectorAll('.event-info-box > div > div');
        gsap.from(infos, {
            y: 30,
            opacity: 0,
            duration: 0.8,
            stagger: 0.2,
            scrollTrigger: {
                trigger: '.event-info-box',
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
        return "components/banner/event-info.html.twig";
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
        return array (  224 => 118,  217 => 117,  180 => 82,  173 => 81,  168 => 117,  165 => 115,  163 => 81,  145 => 64,  128 => 51,  123 => 49,  117 => 46,  111 => 43,  100 => 34,  93 => 28,  82 => 23,  77 => 21,  70 => 17,  66 => 16,  62 => 14,  58 => 13,  48 => 5,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/banner/event-info.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/banner/event-info.html.twig");
    }
}
