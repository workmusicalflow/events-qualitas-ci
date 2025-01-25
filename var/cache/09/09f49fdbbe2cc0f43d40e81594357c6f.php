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

/* components/head/scripts.html.twig */
class __TwigTemplate_c154006efcc0f6f27ebfb096f5d942a4 extends Template
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
            'page_scripts' => [$this, 'block_page_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<script src=\"https://kit.fontawesome.com/01691af9f6.js\" crossorigin=\"anonymous\"></script>
<script defer src=\"https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js\"></script>

";
        // line 6
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js\"></script>

";
        // line 10
        yield "<script src=\"/js/banner-animations.js\" defer></script>

";
        // line 13
        yield "<script>
    // Configuration Alpine.js
    document.addEventListener('alpine:init', () => {
        Alpine.store('app', {
            menuOpen: false,
            darkMode: localStorage.getItem('darkMode') === 'true',
            toggleDarkMode() {
                this.darkMode = !this.darkMode;
                localStorage.setItem('darkMode', this.darkMode);
                document.documentElement.classList.toggle('dark', this.darkMode);
            }
        });
    });

    // Configuration GSAP globale
    gsap.config({
        nullTargetWarn: false,
        trialWarn: false
    });

    // Utilitaires globaux
    window.APP = {
        debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        },

        isMobile() {
            return window.innerWidth < 768;
        },

        isTablet() {
            return window.innerWidth >= 768 && window.innerWidth < 1024;
        },

        isDesktop() {
            return window.innerWidth >= 1024;
        }
    };

    // Gestion du chargement des images
    document.addEventListener('DOMContentLoaded', () => {
        const images = document.querySelectorAll('img[loading=\"lazy\"]');
        images.forEach(img => {
            img.addEventListener('load', () => {
                img.classList.add('loaded');
            });
        });
    });
</script>

";
        // line 72
        yield from $this->unwrap()->yieldBlock('page_scripts', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/head/scripts.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  117 => 72,  57 => 13,  53 => 10,  48 => 6,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/head/scripts.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/head/scripts.html.twig");
    }
}
