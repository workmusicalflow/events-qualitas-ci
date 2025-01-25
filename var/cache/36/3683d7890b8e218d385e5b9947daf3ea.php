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

/* components/banner/hero.html.twig */
class __TwigTemplate_020ecee5620d4d8a3b0178ddd206f905 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<section class=\"hero-banner\">
    <div class=\"hero-content\">
        <h1>Africa QSHE Forum 2025</h1>
        <h2>Accélérer la transition écologique pour une Afrique durable et résiliente</h2>
        <p>Du 08 au 10 MAI 2025 - Abidjan, II Plateaux, Latrille Event</p>
        <a href=\"/programme\" class=\"btn btn-primary\">Voir le programme</a>
    </div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/banner/hero.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/banner/hero.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/banner/hero.html.twig");
    }
}
