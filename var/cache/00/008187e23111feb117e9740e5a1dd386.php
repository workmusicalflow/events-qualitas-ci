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

/* components/navigation/mobile-menu.html.twig */

class __TwigTemplate_6a8ef323edf17a4c9f0a58cf1b18d01e extends Template
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
        yield "<div id=\"mobile-menu\"
     class=\"md:hidden\"
     x-show=\"isOpen\"
     x-transition:enter=\"transition ease-out duration-200\"
     x-transition:enter-start=\"opacity-0 transform scale-95\"
     x-transition:enter-end=\"opacity-100 transform scale-100\"
     x-transition:leave=\"transition ease-in duration-150\"
     x-transition:leave-start=\"opacity-100 transform scale-100\"
     x-transition:leave-end=\"opacity-0 transform scale-95\"
     @click.away=\"isOpen = false\"
     role=\"menu\"
     aria-orientation=\"vertical\"
     aria-labelledby=\"mobile-menu-button\">
    
    <div class=\"py-2 space-y-1 bg-blue-800 rounded-md mt-2 shadow-xl\">
        ";
        // line 18
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            yield "            <div class=\"px-3 py-2\">
                <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 20), "html", null, true);
            yield "\" 
                   class=\"block w-full text-left px-4 py-3 rounded-md transition-colors duration-200 relative ";
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "highlight", [], "any", false, false, false, 21)) {
                yield "bg-yellow-500 text-blue-900 font-bold hover:bg-yellow-400";
            } else {
                yield "text-white hover:bg-blue-700";
            }
            yield "\"
                   ";
            // line 22
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "external", [], "any", false, false, false, 22)) {
                // line 23
                yield "                       target=\"_blank\" 
                       rel=\"noopener noreferrer\"
                       aria-label=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 25), "html", null, true);
                yield " (s'ouvre dans un nouvel onglet)\"
                   ";
            }
            // line 27
            yield "                   role=\"menuitem\">
                    <div class=\"flex items-center justify-between\">
                        <div class=\"flex items-center space-x-3\">
                            <i class=\"fas fa-";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 30), "html", null, true);
            yield " w-6 ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "highlight", [], "any", false, false, false, 30)) {
                yield "text-blue-900";
            }
            yield "\"></i>
                            <span>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 31), "html", null, true);
            yield "</span>
                        </div>
                        ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "external", [], "any", false, false, false, 33)) {
                // line 34
                yield "                            <i class=\"fas fa-external-link-alt text-sm opacity-75\"></i>
                        ";
            }
            // line 36
            yield "                    </div>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "
        ";
        // line 42
        yield "        <div class=\"border-t border-blue-700 my-4\"></div>

        ";
        // line 45
        yield "        <div class=\"px-3 space-y-3\">
            <a href=\"https://events-qualitas-ci.com/formulaire.html\" 
               class=\"block w-full text-center px-4 py-3 bg-yellow-500 hover:bg-yellow-400 text-blue-900 rounded-md font-bold transition-colors duration-200\"
               target=\"_blank\"
               rel=\"noopener noreferrer\">
                <i class=\"fas fa-id-badge mr-2\"></i>
                Badge de participation
            </a>
            <a href=\"https://events-qualitas-ci.com/qshe25-b2b/public/\" 
               class=\"block w-full text-center px-4 py-3 bg-blue-700 hover:bg-blue-600 text-white rounded-md font-bold transition-colors duration-200\"
               target=\"_blank\"
               rel=\"noopener noreferrer\">
                <i class=\"fas fa-handshake mr-2\"></i>
                Devenir Exposant
            </a>
        </div>

        ";
        // line 63
        yield "        <div class=\"px-6 py-4 mt-4 bg-blue-900/50 rounded-b-lg\">
            <div class=\"flex flex-col space-y-2 text-sm text-blue-200\">
                <div class=\"flex items-center space-x-2\">
                    <i class=\"fas fa-calendar-alt text-yellow-400\"></i>
                    <span>Du 8 au 10 mai 2025</span>
                </div>
                <div class=\"flex items-center space-x-2\">
                    <i class=\"fas fa-map-marker-alt text-yellow-400\"></i>
                    <span>Sofitel Abidjan Hôtel Ivoire</span>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 79
        yield from $this->unwrap()->yieldBlock('component_styles', $context, $blocks);
        // line 116
        yield "
";
        // line 118
        yield from $this->unwrap()->yieldBlock('component_scripts', $context, $blocks);
        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 80
        yield "<style>
    #mobile-menu {
        max-height: calc(100vh - 70px);
        overflow-y: auto;
    }

    #mobile-menu::-webkit-scrollbar {
        width: 4px;
    }

    #mobile-menu::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 2px;
    }

    #mobile-menu::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 2px;
    }

    @media (prefers-reduced-motion: reduce) {
        #mobile-menu,
        #mobile-menu * {
            transition: none !important;
        }
    }

    /* Support pour la navigation au clavier sur mobile */
    @media (max-width: 768px) {
        a:focus-visible {
            outline: 2px solid #FCD34D;
            outline-offset: -2px;
        }
    }
</style>
";
        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 119
        yield "<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Gestion de la fermeture avec la touche Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && document.querySelector('#mobile-menu').style.display !== 'none') {
                Alpine.store('isOpen', false);
            }
        });

        // Gestion du focus lors de l'ouverture/fermeture
        const menu = document.querySelector('#mobile-menu');
        const firstFocusable = menu.querySelector('a');
        const lastFocusable = menu.querySelectorAll('a')[menu.querySelectorAll('a').length - 1];

        firstFocusable.addEventListener('keydown', (e) => {
            if (e.key === 'Tab' && e.shiftKey) {
                e.preventDefault();
                lastFocusable.focus();
            }
        });

        lastFocusable.addEventListener('keydown', (e) => {
            if (e.key === 'Tab' && !e.shiftKey) {
                e.preventDefault();
                firstFocusable.focus();
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
        return "components/navigation/mobile-menu.html.twig";
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
        return array(232 => 119,  225 => 118,  185 => 80,  178 => 79,  173 => 118,  170 => 116,  168 => 79,  151 => 63,  132 => 45,  128 => 42,  125 => 40,  116 => 36,  112 => 34,  110 => 33,  105 => 31,  97 => 30,  92 => 27,  87 => 25,  83 => 23,  81 => 22,  73 => 21,  69 => 20,  66 => 19,  61 => 18,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/navigation/mobile-menu.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/navigation/mobile-menu.html.twig");
    }
}
