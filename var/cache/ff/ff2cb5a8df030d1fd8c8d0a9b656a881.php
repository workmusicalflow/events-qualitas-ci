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

/* components/footer/contact-info.html.twig */
class __TwigTemplate_c550bee7cc4483857f6a2b9c5fa6ecd0 extends Template
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
        yield "<div class=\"contact-info\">
    <h3 class=\"font-bold text-lg mb-6\">
        <i class=\"fas fa-address-card mr-2\"></i>Contact
    </h3>
    <div class=\"text-blue-200 space-y-3\">
        ";
        // line 8
        yield "        <div class=\"group\">
            <p>
                <i class=\"fas fa-phone mr-2 group-hover:text-yellow-400 transition-colors\"></i>
                <span class=\"font-semibold\">Fixe :</span> 
                <a href=\"tel:+22527212416\" 
                   class=\"hover:text-white transition-colors inline-flex items-center\">
                    <span>+225 27 21 24 16 13</span>
                    <i class=\"fas fa-phone-volume ml-2 opacity-0 group-hover:opacity-100 transition-opacity\"></i>
                </a>
            </p>
        </div>

        ";
        // line 21
        yield "        <div class=\"group\">
            <p>
                <i class=\"fas fa-mobile-alt mr-2 group-hover:text-yellow-400 transition-colors\"></i>
                <span class=\"font-semibold\">Mobile :</span>
                <a href=\"tel:+22507091300\" 
                   class=\"hover:text-white transition-colors inline-flex items-center\">
                    <span>+225 07 09 13 00 12</span>
                    <i class=\"fas fa-phone-volume ml-2 opacity-0 group-hover:opacity-100 transition-opacity\"></i>
                </a>
            </p>
        </div>

        ";
        // line 34
        yield "        <div class=\"group\">
            <p>
                <i class=\"fas fa-envelope mr-2 group-hover:text-yellow-400 transition-colors\"></i>
                <a href=\"mailto:infosqualitas@gmail.com\" 
                   class=\"hover:text-white transition-colors inline-flex items-center\">
                    <span>infosqualitas@gmail.com</span>
                    <i class=\"fas fa-paper-plane ml-2 opacity-0 group-hover:opacity-100 transition-opacity\"></i>
                </a>
            </p>
        </div>

        ";
        // line 46
        yield "        <div class=\"group\">
            <p>
                <i class=\"fas fa-envelope mr-2 group-hover:text-yellow-400 transition-colors\"></i>
                <a href=\"mailto:info@qualitas-ci.com\" 
                   class=\"hover:text-white transition-colors inline-flex items-center\">
                    <span>info@qualitas-ci.com</span>
                    <i class=\"fas fa-paper-plane ml-2 opacity-0 group-hover:opacity-100 transition-opacity\"></i>
                </a>
            </p>
        </div>

        ";
        // line 58
        yield "        <div class=\"mt-6 pt-4 border-t border-blue-800\">
            <h4 class=\"font-semibold mb-2 flex items-center\">
                <i class=\"fas fa-clock mr-2 text-yellow-400\"></i>
                Horaires
            </h4>
            <p class=\"text-sm\">
                Lundi - Vendredi : 8h00 - 18h00<br>
                Samedi : 9h00 - 13h00
            </p>
        </div>
    </div>
</div>

";
        // line 72
        yield from $this->unwrap()->yieldBlock('component_styles', $context, $blocks);
        // line 103
        yield "
";
        // line 105
        yield from $this->unwrap()->yieldBlock('component_scripts', $context, $blocks);
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "<style>
    .contact-info a {
        position: relative;
    }

    .contact-info a::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 1px;
        bottom: -2px;
        left: 0;
        background-color: currentColor;
        transform: scaleX(0);
        transform-origin: right;
        transition: transform 0.3s ease;
    }

    .contact-info a:hover::after {
        transform: scaleX(1);
        transform-origin: left;
    }

    @media (prefers-reduced-motion: reduce) {
        .contact-info a::after {
            transition: none;
        }
    }
</style>
";
        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 106
        yield "<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Animation des icônes au survol
        const contactGroups = document.querySelectorAll('.contact-info .group');
        
        contactGroups.forEach(group => {
            const icon = group.querySelector('i:first-child');
            
            group.addEventListener('mouseenter', () => {
                gsap.to(icon, {
                    scale: 1.2,
                    duration: 0.3,
                    ease: 'back.out(1.7)'
                });
            });

            group.addEventListener('mouseleave', () => {
                gsap.to(icon, {
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
        return "components/footer/contact-info.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  178 => 106,  171 => 105,  137 => 73,  130 => 72,  125 => 105,  122 => 103,  120 => 72,  105 => 58,  92 => 46,  79 => 34,  65 => 21,  51 => 8,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/footer/contact-info.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/footer/contact-info.html.twig");
    }
}
