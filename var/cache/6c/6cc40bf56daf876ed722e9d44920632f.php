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

/* components/head/meta.html.twig */
class __TwigTemplate_b664bd43f161e25a2e396c098171c3bd extends Template
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
            'title' => [$this, 'block_title'],
            'meta_description' => [$this, 'block_meta_description'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>";
        // line 3
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
<meta name=\"description\" content=\"";
        // line 4
        yield from $this->unwrap()->yieldBlock('meta_description', $context, $blocks);
        yield "\">
<meta name=\"keywords\" content=\"QSHE, Forum, Afrique, Qualité, Sécurité, Santé, Environnement\">
<meta name=\"author\" content=\"QUALITAS Côte d'Ivoire SA\">

";
        // line 9
        yield "<meta property=\"og:type\" content=\"website\">
<meta property=\"og:url\" content=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "schemeAndHttpHost", [], "any", false, false, false, 10) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "requestUri", [], "any", false, false, false, 10)), "html", null, true);
        yield "\">
<meta property=\"og:title\" content=\"";
        // line 11
        yield from         $this->unwrap()->yieldBlock("title", $context, $blocks);
        yield "\">
<meta property=\"og:description\" content=\"";
        // line 12
        yield from         $this->unwrap()->yieldBlock("meta_description", $context, $blocks);
        yield "\">
<meta property=\"og:image\" content=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "schemeAndHttpHost", [], "any", false, false, false, 13), "html", null, true);
        yield "/images/banner/desktop-banner.jpg\">

";
        // line 16
        yield "<meta name=\"twitter:card\" content=\"summary_large_image\">
<meta name=\"twitter:title\" content=\"";
        // line 17
        yield from         $this->unwrap()->yieldBlock("title", $context, $blocks);
        yield "\">
<meta name=\"twitter:description\" content=\"";
        // line 18
        yield from         $this->unwrap()->yieldBlock("meta_description", $context, $blocks);
        yield "\">
<meta name=\"twitter:image\" content=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "schemeAndHttpHost", [], "any", false, false, false, 19), "html", null, true);
        yield "/images/banner/desktop-banner.jpg\">

";
        // line 22
        yield "<link rel=\"icon\" type=\"image/png\" href=\"/favicon.png\">
<link rel=\"apple-touch-icon\" href=\"/apple-touch-icon.png\">

";
        // line 26
        yield "<meta name=\"theme-color\" content=\"#1e3a8a\">
<meta name=\"mobile-web-app-capable\" content=\"yes\">
<meta name=\"application-name\" content=\"Africa QSHE Forum\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
<meta name=\"apple-mobile-web-app-title\" content=\"Africa QSHE Forum\">";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("title", $context)) ? (Twig\Extension\CoreExtension::default(($context["title"] ?? null), "Africa QSHE Forum")) : ("Africa QSHE Forum")), "html", null, true);
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("description", $context)) ? (Twig\Extension\CoreExtension::default(($context["description"] ?? null), "Le forum international de référence en Afrique pour la Qualité, la Sécurité, la Santé et l'Environnement")) : ("Le forum international de référence en Afrique pour la Qualité, la Sécurité, la Santé et l'Environnement")), "html", null, true);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/head/meta.html.twig";
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
        return array (  121 => 4,  110 => 3,  100 => 26,  95 => 22,  90 => 19,  86 => 18,  82 => 17,  79 => 16,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  59 => 9,  52 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/head/meta.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/components/head/meta.html.twig");
    }
}
