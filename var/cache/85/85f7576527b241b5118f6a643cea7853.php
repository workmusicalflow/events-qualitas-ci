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

/* components/footer/main-footer.html.twig */
class __TwigTemplate_0d882419e68587291c670cdbfa0812d4 extends Template
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
            'component_scripts' => [$this, 'block_component_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<footer class=\"bg-blue-900 text-white py-16\">
    <div class=\"container mx-auto px-4\">
        ";
        // line 5
        yield "        <div class=\"grid md:grid-cols-4 gap-8 mb-12\">
            ";
        // line 7
        yield "            <div>
                <div class=\"h-12 mb-6\">
                    <picture>
                        <source srcset=\"/images/logo/logo-qshe-monochrome.svg\" type=\"image/svg+xml\">
                        <img src=\"/images/logo/logo-qshe-monochrome.png\" 
                             alt=\"Logo Africa QSHE Forum\" 
                             class=\"h-full w-auto\"
                             loading=\"lazy\">
                    </picture>
                </div>
                <p class=\"text-blue-200 mb-4\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
                <p class=\"text-blue-200\">Un événement organisé par QUALITAS Côte d'Ivoire SA</p>
            </div>

            ";
        // line 22
        yield "            <div>
                <h3 class=\"font-bold text-lg mb-6\">
                    <i class=\"fas fa-building mr-2\"></i>Siège Social
                </h3>
                <div class=\"text-blue-200 space-y-3\">
                    <p>
                        <i class=\"fas fa-map-marker-alt mr-2\"></i>
                        Abidjan Biétry, Immeuble le Home
                    </p>
                    <p>
                        <i class=\"fas fa-mailbox mr-2\"></i>
                        18 BP 1646 Abidjan 18
                    </p>
                    <p>
                        <i class=\"fas fa-globe-africa mr-2\"></i>
                        Côte d'Ivoire
                    </p>
                </div>
            </div>

            ";
        // line 43
        yield "            ";
        yield from $this->loadTemplate("components/footer/contact-info.html.twig", "components/footer/main-footer.html.twig", 43)->unwrap()->yield($context);
        // line 44
        yield "
            ";
        // line 46
        yield "            <div>
                <h3 class=\"font-bold text-lg mb-6\">
                    <i class=\"fas fa-link mr-2\"></i>Liens Utiles
                </h3>
                <div class=\"text-blue-200 space-y-3\">
                    <p>
                        <i class=\"fas fa-globe mr-2\"></i>
                        <a href=\"https://www.qualitas-ci.com\" 
                           target=\"_blank\" 
                           rel=\"noopener noreferrer\"
                           class=\"hover:text-white transition-colors\">
                            www.qualitas-ci.com
                        </a>
                    </p>
                    <p>
                        <i class=\"fas fa-tv mr-2\"></i>
                        <a href=\"https://www.qualitas.tv\" 
                           target=\"_blank\" 
                           rel=\"noopener noreferrer\"
                           class=\"hover:text-white transition-colors\">
                            www.qualitas.tv
                        </a>
                    </p>
                    <div class=\"pt-4\">
                        <h4 class=\"font-semibold mb-3\">Suivez-nous</h4>
                        <div class=\"flex space-x-4\">
                            <a href=\"#\" class=\"text-blue-200 hover:text-white text-2xl transition-colors\">
                                <i class=\"fab fa-facebook\"></i>
                                <span class=\"sr-only\">Facebook</span>
                            </a>
                            <a href=\"#\" class=\"text-blue-200 hover:text-white text-2xl transition-colors\">
                                <i class=\"fab fa-linkedin\"></i>
                                <span class=\"sr-only\">LinkedIn</span>
                            </a>
                            <a href=\"#\" class=\"text-blue-200 hover:text-white text-2xl transition-colors\">
                                <i class=\"fab fa-youtube\"></i>
                                <span class=\"sr-only\">YouTube</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 91
        yield "        ";
        yield from $this->loadTemplate("components/footer/legal.html.twig", "components/footer/main-footer.html.twig", 91)->unwrap()->yield($context);
        // line 92
        yield "    </div>

    ";
        // line 95
        yield "    <button id=\"backToTop\" 
            class=\"fixed bottom-8 right-8 bg-blue-800 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-blue-700\"
            aria-label=\"Retour en haut de la page\">
        <i class=\"fas fa-arrow-up\"></i>
    </button>
</footer>

";
        // line 103
        yield from $this->unwrap()->yieldBlock('component_scripts', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 104
        yield "<script>
    document.addEventListener('DOMContentLoaded', () => {
        const backToTop = document.getElementById('backToTop');
        
        // Gestion du bouton retour en haut
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTop.classList.remove('opacity-0', 'invisible');
                backToTop.classList.add('opacity-100', 'visible');
            } else {
                backToTop.classList.add('opacity-0', 'invisible');
                backToTop.classList.remove('opacity-100', 'visible');
            }
        });

        // Animation du scroll
        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Animation des liens au survol
        const links = document.querySelectorAll('footer a');
        links.forEach(link => {
            link.addEventListener('mouseenter', () => {
                gsap.to(link, {
                    scale: 1.05,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });

            link.addEventListener('mouseleave', () => {
                gsap.to(link, {
                    scale: 1,
                    duration: 0.3,
                    ease: 'power2.in'
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
        return "components/footer/main-footer.html.twig";
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
        return array (  170 => 104,  159 => 103,  150 => 95,  146 => 92,  143 => 91,  97 => 46,  94 => 44,  91 => 43,  69 => 22,  62 => 17,  50 => 7,  47 => 5,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/footer/main-footer.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/footer/main-footer.html.twig");
    }
}
