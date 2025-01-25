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

/* layouts/base.html.twig */
class __TwigTemplate_922473507c46532b03d78a9d3222fabd extends Template
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
            'navigation' => [$this, 'block_navigation'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'page_scripts' => [$this, 'block_page_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    ";
        // line 4
        yield from $this->loadTemplate("components/head/meta.html.twig", "layouts/base.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "    ";
        yield from $this->loadTemplate("components/head/styles.html.twig", "layouts/base.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "    ";
        yield from $this->loadTemplate("components/head/scripts.html.twig", "layouts/base.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "</head>
<body class=\"bg-gray-50\">
    ";
        // line 10
        yield "    ";
        yield from $this->unwrap()->yieldBlock('navigation', $context, $blocks);
        // line 13
        yield "
    ";
        // line 15
        yield "    ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 16
        yield "
    ";
        // line 18
        yield "    ";
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 21
        yield "
    ";
        // line 23
        yield "    ";
        yield from $this->unwrap()->yieldBlock('page_scripts', $context, $blocks);
        // line 24
        yield "</body>
</html>";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "        ";
        yield from $this->loadTemplate("components/navigation/main-nav.html.twig", "layouts/base.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "    ";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "        ";
        yield from $this->loadTemplate("components/footer/main-footer.html.twig", "layouts/base.html.twig", 19)->unwrap()->yield($context);
        // line 20
        yield "    ";
        yield from [];
    }

    // line 23
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
        return "layouts/base.html.twig";
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
        return array (  130 => 23,  125 => 20,  122 => 19,  115 => 18,  105 => 15,  100 => 12,  97 => 11,  90 => 10,  84 => 24,  81 => 23,  78 => 21,  75 => 18,  72 => 16,  69 => 15,  66 => 13,  63 => 10,  59 => 7,  56 => 6,  53 => 5,  51 => 4,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layouts/base.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/layouts/base.html.twig");
    }
}
