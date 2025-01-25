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

/* components/footer/legal.html.twig */
class __TwigTemplate_11a397a676c5b85359f40a05f34811ef extends Template
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
        yield "<div class=\"border-t border-blue-800 pt-8\">
    <div class=\"text-center\">
        ";
        // line 5
        yield "        <nav class=\"mb-6\" aria-label=\"Mentions légales\">
            <ul class=\"flex flex-wrap justify-center space-x-6\">
                <li>
                    <a href=\"/mentions-legales\" 
                       class=\"text-blue-200 hover:text-white text-sm transition-colors inline-flex items-center group\">
                        <i class=\"fas fa-gavel mr-2 group-hover:text-yellow-400 transition-colors\"></i>
                        <span>Mentions légales</span>
                    </a>
                </li>
                <li>
                    <a href=\"/politique-confidentialite\" 
                       class=\"text-blue-200 hover:text-white text-sm transition-colors inline-flex items-center group\">
                        <i class=\"fas fa-shield-alt mr-2 group-hover:text-yellow-400 transition-colors\"></i>
                        <span>Politique de confidentialité</span>
                    </a>
                </li>
                <li>
                    <a href=\"/conditions-utilisation\" 
                       class=\"text-blue-200 hover:text-white text-sm transition-colors inline-flex items-center group\">
                        <i class=\"fas fa-file-contract mr-2 group-hover:text-yellow-400 transition-colors\"></i>
                        <span>Conditions d'utilisation</span>
                    </a>
                </li>
                <li>
                    <a href=\"/cookies\" 
                       class=\"text-blue-200 hover:text-white text-sm transition-colors inline-flex items-center group\">
                        <i class=\"fas fa-cookie-bite mr-2 group-hover:text-yellow-400 transition-colors\"></i>
                        <span>Gestion des cookies</span>
                    </a>
                </li>
            </ul>
        </nav>

        ";
        // line 39
        yield "        <div class=\"text-blue-200 text-sm space-y-2\">
            <p>
                <i class=\"far fa-copyright mr-2\"></i>
                <span>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Africa QSHE Forum.</span>
                <span>Tous droits réservés.</span>
            </p>
            <p>Un événement QUALITAS Côte d'Ivoire SA - RCI ABIDJAN-12081-B-2012</p>
        </div>

        ";
        // line 49
        yield "        <div class=\"mt-6 flex justify-center items-center space-x-4\">
            <img src=\"/images/certifications/iso-9001.png\" 
                 alt=\"Certification ISO 9001\" 
                 class=\"h-12 w-auto grayscale hover:grayscale-0 transition-all duration-300\"
                 loading=\"lazy\">
            <img src=\"/images/certifications/iso-14001.png\" 
                 alt=\"Certification ISO 14001\" 
                 class=\"h-12 w-auto grayscale hover:grayscale-0 transition-all duration-300\"
                 loading=\"lazy\">
        </div>

        ";
        // line 61
        yield "        <div class=\"mt-6 text-xs text-blue-300/60\">
            <p>
                Site optimisé pour les dernières versions des navigateurs
                <span class=\"inline-flex items-center space-x-2 ml-2\">
                    <i class=\"fab fa-chrome\" title=\"Google Chrome\"></i>
                    <i class=\"fab fa-firefox\" title=\"Mozilla Firefox\"></i>
                    <i class=\"fab fa-safari\" title=\"Apple Safari\"></i>
                    <i class=\"fab fa-edge\" title=\"Microsoft Edge\"></i>
                </span>
            </p>
        </div>
    </div>
</div>

";
        // line 76
        yield from $this->unwrap()->yieldBlock('component_styles', $context, $blocks);
        // line 109
        yield "
";
        // line 111
        yield from $this->unwrap()->yieldBlock('component_scripts', $context, $blocks);
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "<style>
    .legal-nav a {
        position: relative;
        padding-bottom: 2px;
    }

    .legal-nav a::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 1px;
        bottom: 0;
        left: 0;
        background-color: currentColor;
        transform: scaleX(0);
        transform-origin: right;
        transition: transform 0.3s ease;
    }

    .legal-nav a:hover::after {
        transform: scaleX(1);
        transform-origin: left;
    }

    @media (prefers-reduced-motion: reduce) {
        .legal-nav a::after,
        img {
            transition: none;
        }
    }
</style>
";
        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 112
        yield "<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Animation des liens au scroll
        gsap.from('nav a', {
            opacity: 0,
            y: 20,
            duration: 0.5,
            stagger: 0.1,
            scrollTrigger: {
                trigger: 'nav',
                start: 'top 90%'
            }
        });

        // Animation des certifications
        gsap.from('.certifications img', {
            opacity: 0,
            scale: 0.8,
            duration: 0.6,
            stagger: 0.2,
            scrollTrigger: {
                trigger: '.certifications',
                start: 'top 90%'
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
        return "components/footer/legal.html.twig";
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
        return array (  186 => 112,  179 => 111,  143 => 77,  136 => 76,  131 => 111,  128 => 109,  126 => 76,  110 => 61,  97 => 49,  88 => 42,  83 => 39,  48 => 5,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/footer/legal.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/footer/legal.html.twig");
    }
}
