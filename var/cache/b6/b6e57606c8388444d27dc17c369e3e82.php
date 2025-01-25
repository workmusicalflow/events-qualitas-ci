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

/* components/head/styles.html.twig */
class __TwigTemplate_9b0765219014eec6af416413df5b1683 extends Template
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
            'page_styles' => [$this, 'block_page_styles'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<link href=\"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css\" rel=\"stylesheet\">

";
        // line 5
        yield "<link href=\"/css/banner.css\" rel=\"stylesheet\">

";
        // line 8
        yield "<style>
    ";
        // line 10
        yield "    .map-container {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
    }
    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    ";
        // line 26
        yield "    .theme-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
    }

    ";
        // line 31
        yield "    .nav-logo {
        display: block;
        height: 50px;
        width: auto;
    }
    .nav-logo img {
        height: 100%;
        width: auto;
        object-fit: contain;
    }

    ";
        // line 43
        yield "    .transition-all {
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 300ms;
    }

    ";
        // line 50
        yield "    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
    }

    ";
        // line 63
        yield "    @media (max-width: 768px) {
        .nav-logo {
            height: 40px;
        }
    }

    ";
        // line 70
        yield "    @media print {
        .no-print {
            display: none !important;
        }
        .print-break-inside {
            break-inside: avoid;
        }
    }
</style>

";
        // line 81
        yield from $this->unwrap()->yieldBlock('page_styles', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/head/styles.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  132 => 81,  120 => 70,  112 => 63,  98 => 50,  90 => 43,  77 => 31,  71 => 26,  54 => 10,  51 => 8,  47 => 5,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/head/styles.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/head/styles.html.twig");
    }
}
