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

/* components/sections/location.html.twig */

class __TwigTemplate_69598b2a9794b5c270a4c0d113799172 extends Template
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
         x-data=\"{ showMapDetails: false }\"
         x-init=\"() => {
             gsap.from('.location-content', {
                 opacity: 0,
                 y: 30,
                 duration: 0.8,
                 scrollTrigger: {
                     trigger: '.location-content',
                     start: 'top 80%'
                 }
             });
         }\">
    <div class=\"container mx-auto px-4\">
        ";
        // line 17
        yield "        <h2 class=\"text-3xl font-bold text-center mb-12\">
            <i class=\"fas fa-map-marked-alt mr-2 text-blue-900\"></i>
            <span>Lieu de l'événement</span>
        </h2>

        <div class=\"max-w-4xl mx-auto location-content\">
            <div class=\"bg-white rounded-md shadow-lg overflow-hidden\">
                ";
        // line 25
        yield "                <div class=\"relative\">
                    <div class=\"map-container\">
                        <iframe 
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254784.89792446525!2d-4.073211346872135!3d5.348666323233466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ea5311959121%3A0x3fe70ddce19221a6!2sAbidjan%2C%20C%C3%B4te%20d&#39;Ivoire!5e0!3m2!1sfr!2sfr!4v1650000000000!5m2!1sfr!2sfr\"
                            allowfullscreen=\"\"
                            loading=\"lazy\"
                            referrerpolicy=\"no-referrer-when-downgrade\"
                            class=\"w-full h-full absolute inset-0 transition-opacity duration-300\"
                            :class=\"{ 'opacity-50': showMapDetails }\">
                        </iframe>

                        ";
        // line 37
        yield "                        <div class=\"absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 transition-opacity duration-300 hover:opacity-100\"
                             @mouseenter=\"showMapDetails = true\"
                             @mouseleave=\"showMapDetails = false\">
                            <div class=\"absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full transition-transform duration-300\"
                                 :class=\"{ 'translate-y-0': showMapDetails }\">
                                <div class=\"flex items-center space-x-4\">
                                    <i class=\"fas fa-directions text-2xl text-yellow-400\"></i>
                                    <div>
                                        <h3 class=\"font-bold text-lg\">Comment s'y rendre ?</h3>
                                        <p class=\"text-sm text-gray-200\">Cliquez sur la carte pour obtenir l'itinéraire</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 55
        yield "                <div class=\"p-6 bg-white\">
                    <div class=\"grid md:grid-cols-2 gap-6\">
                        ";
        // line 58
        yield "                        <div class=\"space-y-4\">
                            <div class=\"flex items-start space-x-3\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-map-marker-alt text-xl text-blue-900\"></i>
                                </div>
                                <div>
                                    <h3 class=\"font-bold text-lg text-blue-900\">Adresse</h3>
                                    <p class=\"text-gray-600\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "location", [], "any", false, false, false, 65), "html", null, true);
        yield "</p>
                                    <a href=\"https://goo.gl/maps/votre-lien-google-maps\" 
                                       target=\"_blank\" 
                                       rel=\"noopener noreferrer\"
                                       class=\"text-blue-600 hover:text-blue-800 text-sm inline-flex items-center mt-2\">
                                        <span>Voir sur Google Maps</span>
                                        <i class=\"fas fa-external-link-alt ml-1\"></i>
                                    </a>
                                </div>
                            </div>

                            <div class=\"flex items-start space-x-3\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-calendar-alt text-xl text-blue-900\"></i>
                                </div>
                                <div>
                                    <h3 class=\"font-bold text-lg text-blue-900\">Date</h3>
                                    <p class=\"text-gray-600\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "date", [], "any", false, false, false, 82), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>

                        ";
        // line 88
        yield "                        <div class=\"space-y-4\">
                            <div class=\"flex items-start space-x-3\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-parking text-xl text-blue-900\"></i>
                                </div>
                                <div>
                                    <h3 class=\"font-bold text-lg text-blue-900\">Parking</h3>
                                    <p class=\"text-gray-600\">Parking gratuit disponible sur place</p>
                                </div>
                            </div>

                            <div class=\"flex items-start space-x-3\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-bus text-xl text-blue-900\"></i>
                                </div>
                                <div>
                                    <h3 class=\"font-bold text-lg text-blue-900\">Accès</h3>
                                    <p class=\"text-gray-600\">Transport en commun à proximité</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 113
        yield "                <div class=\"px-6 py-4 bg-gray-50 border-t border-gray-100\">
                    <div class=\"flex flex-wrap justify-center gap-4\">
                        <a href=\"#\" 
                           class=\"inline-flex items-center px-4 py-2 bg-blue-900 text-white rounded-md hover:bg-blue-800 transition-colors duration-300\">
                            <i class=\"fas fa-download mr-2\"></i>
                            <span>Télécharger le plan d'accès</span>
                        </a>
                        <a href=\"#\" 
                           class=\"inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition-colors duration-300\">
                            <i class=\"fas fa-hotel mr-2\"></i>
                            <span>Hébergements à proximité</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 133
        yield from $this->unwrap()->yieldBlock('component_styles', $context, $blocks);
        // line 160
        yield "
";
        // line 162
        yield from $this->unwrap()->yieldBlock('component_scripts', $context, $blocks);
        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        yield "<style>
    .map-container {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
    }

    .map-container iframe {
        border: 0;
        filter: grayscale(0.3) contrast(1.1);
        transition: all 0.3s ease;
    }

    .map-container:hover iframe {
        filter: grayscale(0) contrast(1);
    }

    @media (prefers-reduced-motion: reduce) {
        .map-container iframe,
        .map-container .overlay {
            transition: none;
        }
    }
</style>
";
        yield from [];
    }

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 163
        yield "<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Animation des éléments d'information
        gsap.utils.toArray('.location-content .flex').forEach((elem, i) => {
            gsap.from(elem, {
                opacity: 0,
                x: i % 2 === 0 ? -30 : 30,
                duration: 0.8,
                delay: i * 0.2,
                scrollTrigger: {
                    trigger: elem,
                    start: 'top 80%'
                }
            });
        });

        // Animation des boutons
        gsap.from('.location-content .flex-wrap a', {
            opacity: 0,
            y: 20,
            duration: 0.6,
            stagger: 0.2,
            scrollTrigger: {
                trigger: '.location-content .flex-wrap',
                start: 'top 85%'
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
        return "components/sections/location.html.twig";
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
        return array(243 => 163,  236 => 162,  206 => 134,  199 => 133,  194 => 162,  191 => 160,  189 => 133,  168 => 113,  142 => 88,  134 => 82,  114 => 65,  105 => 58,  101 => 55,  82 => 37,  69 => 25,  60 => 17,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/sections/location.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/sections/location.html.twig");
    }
}
