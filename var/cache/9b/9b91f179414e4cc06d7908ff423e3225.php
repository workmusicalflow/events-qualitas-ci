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

/* pages/home.html.twig */
class __TwigTemplate_9505bd1742cb047f9692410cec3cb4ac extends Template
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

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'meta_description' => [$this, 'block_meta_description'],
            'page_styles' => [$this, 'block_page_styles'],
            'navigation' => [$this, 'block_navigation'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'page_scripts' => [$this, 'block_page_scripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/base.html.twig", "pages/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield " - Africa QSHE Forum";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", false, false, false, 5), "html", null, true);
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "<style>
    html {
        scroll-behavior: smooth;
    }

    @media (prefers-reduced-motion: reduce) {
        html {
            scroll-behavior: auto;
        }
    }
</style>
";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        yield from $this->loadTemplate("components/navigation.html.twig", "pages/home.html.twig", 24)->unwrap()->yield($context);
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        // line 30
        yield "    ";
        yield from $this->loadTemplate("components/banner/hero.html.twig", "pages/home.html.twig", 30)->unwrap()->yield(CoreExtension::merge($context, ["title" =>         // line 31
($context["title"] ?? null), "event" =>         // line 32
($context["event"] ?? null)]));
        // line 34
        yield "
    ";
        // line 36
        yield "    ";
        yield from $this->loadTemplate("components/sections/presentation.html.twig", "pages/home.html.twig", 36)->unwrap()->yield(CoreExtension::merge($context, ["event" =>         // line 37
($context["event"] ?? null)]));
        // line 39
        yield "
    ";
        // line 41
        yield "    ";
        yield from $this->loadTemplate("components/sections/speakers.html.twig", "pages/home.html.twig", 41)->unwrap()->yield(CoreExtension::merge($context, ["speakers" =>         // line 42
($context["speakers"] ?? null)]));
        // line 44
        yield "
    ";
        // line 46
        yield "    ";
        yield from $this->loadTemplate("components/sections/partners.html.twig", "pages/home.html.twig", 46)->unwrap()->yield(CoreExtension::merge($context, ["partners" => ((        // line 47
array_key_exists("partners", $context)) ? (Twig\Extension\CoreExtension::default(($context["partners"] ?? null), [])) : ([]))]));
        // line 49
        yield "
    ";
        // line 51
        yield "    ";
        yield from $this->loadTemplate("components/sections/location.html.twig", "pages/home.html.twig", 51)->unwrap()->yield(CoreExtension::merge($context, ["event" =>         // line 52
($context["event"] ?? null)]));
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "    ";
        yield from $this->loadTemplate("components/footer/main-footer.html.twig", "pages/home.html.twig", 58)->unwrap()->yield(CoreExtension::merge($context, ["event" =>         // line 59
($context["event"] ?? null)]));
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield "<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Configuration globale de GSAP
        gsap.config({
            nullTargetWarn: false
        });

        // ScrollTrigger pour les animations au scroll
        ScrollTrigger.batch('[data-animate]', {
            onEnter: batch => gsap.to(batch, {
                opacity: 1,
                y: 0,
                stagger: 0.15,
                duration: 0.8,
                ease: 'power2.out'
            }),
            start: 'top 85%'
        });

        // Gestion du menu sticky
        ScrollTrigger.create({
            trigger: 'nav',
            start: 'top top',
            endTrigger: 'footer',
            end: 'bottom top',
            pin: true,
            pinSpacing: false
        });

        // Gestion des ancres douces
        document.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Initialisation des animations de section
        const sections = document.querySelectorAll('section');
        sections.forEach(section => {
            gsap.from(section.children, {
                opacity: 0,
                y: 30,
                duration: 0.8,
                stagger: 0.2,
                scrollTrigger: {
                    trigger: section,
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
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
        return "pages/home.html.twig";
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
        return array (  182 => 65,  175 => 64,  170 => 59,  168 => 58,  161 => 57,  156 => 52,  154 => 51,  151 => 49,  149 => 47,  147 => 46,  144 => 44,  142 => 42,  140 => 41,  137 => 39,  135 => 37,  133 => 36,  130 => 34,  128 => 32,  127 => 31,  125 => 30,  123 => 29,  116 => 28,  110 => 24,  103 => 23,  87 => 9,  80 => 8,  69 => 5,  57 => 4,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/home.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/pages/home.html.twig");
    }
}
