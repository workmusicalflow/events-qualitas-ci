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

/* components/banner/cta-button.html.twig */
class __TwigTemplate_32cbee5720c13dd4c9b26f09e04c22ae extends Template
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
        yield "<div class=\"mt-12 cta-button-container\">
    <div class=\"relative inline-block group\">
        ";
        // line 5
        yield "        <a href=\"https://events-qualitas-ci.com/qshe25-b2b/public/\" 
           class=\"cta-button relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-blue-900 bg-yellow-500 rounded-xl transform transition-all duration-300 hover:scale-105 hover:shadow-xl\"
           target=\"_blank\"
           rel=\"noopener noreferrer\">
            ";
        // line 10
        yield "            <div class=\"flex items-center space-x-3\">
                <i class=\"fas fa-user-plus text-xl transform group-hover:rotate-12 transition-transform duration-300\"></i>
                <span>Devenir Exposant</span>
            </div>

            ";
        // line 16
        yield "            <div class=\"absolute -top-3 -right-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full transform rotate-12 group-hover:rotate-0 transition-transform duration-300\">
                Places limitées
            </div>
        </a>

        ";
        // line 22
        yield "        <div class=\"absolute inset-0 rounded-xl overflow-hidden\">
            <div class=\"absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent skew-x-[-25deg] translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000\"></div>
        </div>

        ";
        // line 27
        yield "        <div class=\"absolute -inset-1 bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 rounded-xl blur opacity-30 group-hover:opacity-50 transition-opacity duration-300 -z-10\"></div>
    </div>

    ";
        // line 31
        yield "    <p class=\"mt-4 text-sm text-blue-200\">
        <i class=\"fas fa-info-circle mr-2\"></i>
        Réservez votre stand avant le 31 mars 2025
    </p>
</div>

";
        // line 38
        yield from $this->unwrap()->yieldBlock('component_styles', $context, $blocks);
        // line 93
        yield "
";
        // line 95
        yield from $this->unwrap()->yieldBlock('component_scripts', $context, $blocks);
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "<style>
    .cta-button {
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .cta-button::before {
        content: '';
        position: absolute;
        inset: -3px;
        background: linear-gradient(45deg, #fbbf24, #f59e0b);
        border-radius: inherit;
        -webkit-mask: 
            linear-gradient(#fff 0 0) content-box, 
            linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .cta-button:hover::before {
        opacity: 1;
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }

    .cta-button-container {
        animation: pulse 3s infinite;
    }

    .cta-button-container:hover {
        animation-play-state: paused;
    }

    @media (prefers-reduced-motion: reduce) {
        .cta-button-container {
            animation: none;
        }

        .cta-button,
        .cta-button::before,
        .group-hover .fas {
            transition: none;
        }
    }
</style>
";
        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 96
        yield "<script>
    document.addEventListener('DOMContentLoaded', () => {
        const button = document.querySelector('.cta-button');
        
        // Animation au survol
        button.addEventListener('mouseenter', () => {
            gsap.to(button.querySelector('.fas'), {
                rotate: 12,
                scale: 1.2,
                duration: 0.3,
                ease: 'back.out(1.7)'
            });
        });

        button.addEventListener('mouseleave', () => {
            gsap.to(button.querySelector('.fas'), {
                rotate: 0,
                scale: 1,
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        // Animation initiale
        gsap.from(button, {
            y: 30,
            opacity: 0,
            duration: 1,
            delay: 1.5,
            ease: 'elastic.out(1, 0.5)'
        });

        // Effet de particules (optionnel)
        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            const particles = document.createElement('div');
            particles.className = 'absolute inset-0 pointer-events-none';
            button.appendChild(particles);

            for (let i = 0; i < 10; i++) {
                const particle = document.createElement('div');
                particle.className = 'absolute w-1 h-1 bg-yellow-300 rounded-full';
                particles.appendChild(particle);

                gsap.set(particle, {
                    x: 'random(0, 100%)',
                    y: 'random(0, 100%)',
                    scale: 0
                });

                gsap.to(particle, {
                    y: 'random(-20, 20)',
                    x: 'random(-20, 20)',
                    scale: 'random(0.5, 1.5)',
                    duration: 'random(1, 2)',
                    repeat: -1,
                    yoyo: true,
                    ease: 'power1.inOut'
                });
            }
        }
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
        return "components/banner/cta-button.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  169 => 96,  162 => 95,  104 => 39,  97 => 38,  92 => 95,  89 => 93,  87 => 38,  79 => 31,  74 => 27,  68 => 22,  61 => 16,  54 => 10,  48 => 5,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/banner/cta-button.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/banner/cta-button.html.twig");
    }
}
