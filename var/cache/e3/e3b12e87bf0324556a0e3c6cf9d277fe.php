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

/* home.html.twig */

class __TwigTemplate_b14026a0fd8bb34b44aea4eafcd3b6af extends Template
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

        $this->blocks = [];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css\" rel=\"stylesheet\">
    <link href=\"/css/banner.css\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/01691af9f6.js\" crossorigin=\"anonymous\"></script>
    <script defer src=\"https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js\"></script>
    <script src=\"/js/banner-animations.js\" defer></script>
    <style>
        .map-container {
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
        .theme-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
        }
        .nav-logo {
            display: block;
            height: 50px;
            width: auto;
        }
        .nav-logo img {
            height: 100%;
            width: auto;
            object-fit: contain;
        }
        @media (max-width: 768px) {
            .nav-logo {
                height: 40px;
            }
        }
    </style>
</head>
<body class=\"bg-gray-50\">
    ";
        // line 51
        yield "    <nav class=\"bg-blue-900 text-white\" x-data=\"{ isOpen: false }\">
        <div class=\"container mx-auto px-4\">
            <div class=\"flex justify-between items-center py-4\">
                <a href=\"/\" class=\"nav-logo\">
                    <picture>
                        <source srcset=\"/images/logo/logo-qshe.svg\" type=\"image/svg+xml\">
                        <img src=\"/images/logo/logo-qshe.png\" 
                             alt=\"Logo Africa QSHE Forum\">
                    </picture>
                </a>
                
                ";
        // line 63
        yield "                <button @click=\"isOpen = !isOpen\" class=\"md:hidden\">
                    <i class=\"fas fa-bars text-2xl\"></i>
                </button>

                ";
        // line 68
        yield "                <div class=\"hidden md:flex space-x-6\">
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "items", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 70
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 70), "html", null, true);
            yield "\" class=\"hover:text-blue-200\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 70), "html", null, true);
            yield "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                </div>
            </div>

            ";
        // line 76
        yield "            <div class=\"md:hidden\" x-show=\"isOpen\" @click.away=\"isOpen = false\">
                <div class=\"py-2 space-y-2\">
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "items", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 79
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 79), "html", null, true);
            yield "\" class=\"block hover:text-blue-200 py-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 79), "html", null, true);
            yield "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                </div>
            </div>
        </div>
    </nav>

    ";
        // line 87
        yield "    <header class=\"relative\">
        <div class=\"banner-container\">
            <picture>
                <source media=\"(min-width: 1024px)\" srcset=\"/images/banner/desktop-banner.jpg\">
                <source media=\"(min-width: 768px)\" srcset=\"/images/banner/tablette-banner.jpg\">
                <img src=\"/images/banner/mobile-banner.jpg\" alt=\"Africa QSHE Forum\" class=\"banner-image\">
            </picture>
            <div class=\"banner-overlay\"></div>
            
            <div class=\"container mx-auto px-4 h-full flex items-center\">
                <div class=\"max-w-4xl mx-auto text-white text-center relative z-10\">
                    ";
        // line 99
        yield "                    <div class=\"banner-content\">
                        <h1 class=\"banner-title text-4xl md:text-5xl font-bold\">
                            ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "date", [], "any", false, false, false, 101), "html", null, true);
        yield "
                        </h1>
                        <p class=\"banner-description text-xl font-light\">
                            ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", false, false, false, 104), "html", null, true);
        yield "
                        </p>
                        <h2 class=\"banner-theme font-semibold text-yellow-400\">
                            ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "theme", [], "any", false, false, false, 107), "html", null, true);
        yield "
                        </h2>
                    </div>

                    ";
        // line 112
        yield "                    <div class=\"event-info-box mt-12 p-8 rounded-md\">
                        <div class=\"flex flex-col md:flex-row items-center justify-center space-y-6 md:space-y-0 md:space-x-12\">
                            <div class=\"event-info-item\">
                                <div class=\"info-icon text-yellow-400\">
                                    <i class=\"fas fa-calendar-alt\"></i>
                                </div>
                                <div class=\"text-left\">
                                    <span class=\"block text-sm uppercase tracking-wide text-yellow-200\">Date</span>
                                    <span class=\"font-bold text-lg\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "date", [], "any", false, false, false, 120), "html", null, true);
        yield "</span>
                                </div>
                            </div>
                            <div class=\"event-info-item\">
                                <div class=\"info-icon text-yellow-400\">
                                    <i class=\"fas fa-map-marker-alt\"></i>
                                </div>
                                <div class=\"text-left\">
                                    <span class=\"block text-sm uppercase tracking-wide text-yellow-200\">Lieu</span>
                                    <span class=\"font-bold text-lg\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "location", [], "any", false, false, false, 129), "html", null, true);
        yield "</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 136
        yield "                    <div class=\"mt-12 cta-button\">
                        <a href=\"https://events-qualitas-ci.com/qshe25-b2b/public/\" 
                           class=\"bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-4 px-8 rounded-md inline-flex items-center space-x-2\">
                            <i class=\"fas fa-user-plus\"></i>
                            <span>Devenir Exposant</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    ";
        // line 149
        yield "    <section class=\"py-20 bg-white\">
        <div class=\"container mx-auto px-4\">
            <div class=\"max-w-4xl mx-auto\">
                <div class=\"text-center mb-16\">
                    <p class=\"text-2xl text-gray-700 leading-relaxed mb-8\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "presentation", [], "any", false, false, false, 153), "intro", [], "any", false, false, false, 153), "html", null, true);
        yield "</p>
                    <p class=\"text-xl text-gray-600 mb-12\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "presentation", [], "any", false, false, false, 154), "details", [], "any", false, false, false, 154), "html", null, true);
        yield "</p>
                </div>

                <div class=\"grid md:grid-cols-2 gap-8 mb-16\">
                    <div class=\"bg-blue-50 p-8 rounded-md\">
                        <h3 class=\"text-xl font-bold text-blue-900 mb-6\">
                            <i class=\"fas fa-calendar-check mr-2\"></i>Au programme
                        </h3>
                        <ul class=\"space-y-4\">
                            ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "presentation", [], "any", false, false, false, 163), "programme", [], "any", false, false, false, 163));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 164
            yield "                                <li class=\"flex items-start\">
                                    <i class=\"fas fa-check-circle text-green-500 mt-1 mr-3\"></i>
                                    <span class=\"text-gray-700\">";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
            yield "</span>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "                        </ul>
                    </div>
                    <div class=\"bg-green-50 p-8 rounded-md\">
                        <h3 class=\"text-xl font-bold text-green-900 mb-6\">
                            <i class=\"fas fa-bullseye mr-2\"></i>Notre objectif
                        </h3>
                        <p class=\"text-gray-700 leading-relaxed\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "presentation", [], "any", false, false, false, 175), "objectif", [], "any", false, false, false, 175), "html", null, true);
        yield "</p>
                    </div>
                </div>

                <div class=\"text-center\">
                    <a href=\"https://events-qualitas-ci.com/formulaire.html\" 
                       class=\"bg-blue-900 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-md inline-block\">
                        <i class=\"fas fa-id-badge mr-2\"></i>Générer mon badge de visite
                    </a>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 190
        yield "    <section class=\"py-16 bg-gray-50\">
        <div class=\"container mx-auto px-4\">
            <h2 class=\"text-3xl font-bold text-center mb-12\">
                <i class=\"fas fa-users mr-2\"></i>Nos Intervenants
            </h2>
            <div class=\"grid md:grid-cols-2 lg:grid-cols-4 gap-8\">
                ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["speakers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["speaker"]) {
            // line 197
            yield "                    <div class=\"bg-white rounded-md shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300\">
                        <img src=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "photo", [], "any", false, false, false, 198), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "name", [], "any", false, false, false, 198), "html", null, true);
            yield "\" class=\"w-full h-48 object-cover\">
                        <div class=\"p-6\">
                            <h3 class=\"font-bold text-xl mb-2\">";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "name", [], "any", false, false, false, 200), "html", null, true);
            yield "</h3>
                            <p class=\"text-gray-600 mb-1\">
                                <i class=\"fas fa-briefcase mr-2\"></i>";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "position", [], "any", false, false, false, 202), "html", null, true);
            yield "
                            </p>
                            <p class=\"text-blue-900\">
                                <i class=\"fas fa-building mr-2\"></i>";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["speaker"], "company", [], "any", false, false, false, 205), "html", null, true);
            yield "
                            </p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['speaker'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        yield "            </div>
            <div class=\"text-center mt-12\">
                <a href=\"/intervenants\" class=\"bg-blue-900 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-md inline-block\">
                    <i class=\"fas fa-users mr-2\"></i>Découvrir la liste complète
                </a>
            </div>
        </div>
    </section>

    ";
        // line 220
        yield "    <section class=\"py-16 bg-white\">
        <div class=\"container mx-auto px-4\">
            <h2 class=\"text-3xl font-bold text-center mb-12\">
                <i class=\"fas fa-handshake mr-2\"></i>Nos Partenaires
            </h2>
            <div class=\"grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-items-center mb-12\">
                ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 227
            yield "                    <img src=\"https://via.placeholder.com/200x100?text=Partenaire+";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" 
                         alt=\"Partenaire ";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" 
                         class=\"max-w-[150px] hover:opacity-80 transition-opacity duration-300\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        yield "            </div>
            <div class=\"text-center\">
                <a href=\"https://events-qualitas-ci.com/qshe25-b2b/public/\" 
                   class=\"bg-blue-900 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-md inline-block\">
                    <i class=\"fas fa-handshake mr-2\"></i>Devenir Partenaire (Sponsor)
                </a>
            </div>
        </div>
    </section>

    ";
        // line 242
        yield "    <section class=\"py-16 bg-gray-50\">
        <div class=\"container mx-auto px-4\">
            <h2 class=\"text-3xl font-bold text-center mb-12\">
                <i class=\"fas fa-map-marked-alt mr-2\"></i>Lieu de l'événement
            </h2>
            <div class=\"max-w-4xl mx-auto\">
                <div class=\"bg-white rounded-md shadow-lg overflow-hidden\">
                    <div class=\"map-container\">
                        <iframe 
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254784.89792446525!2d-4.073211346872135!3d5.348666323233466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ea5311959121%3A0x3fe70ddce19221a6!2sAbidjan%2C%20C%C3%B4te%20d&#39;Ivoire!5e0!3m2!1sfr!2sfr!4v1650000000000!5m2!1sfr!2sfr\"
                            allowfullscreen=\"\"
                            loading=\"lazy\"
                            referrerpolicy=\"no-referrer-when-downgrade\">
                        </iframe>
                    </div>
                    <div class=\"p-6 text-center\">
                        <p class=\"text-xl font-bold text-blue-900\">
                            <i class=\"fas fa-map-marker-alt mr-2\"></i>";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "location", [], "any", false, false, false, 259), "html", null, true);
        yield "
                        </p>
                        <p class=\"text-gray-600\">
                            <i class=\"fas fa-calendar-alt mr-2\"></i>";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "date", [], "any", false, false, false, 262), "html", null, true);
        yield "
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 271
        yield "    <footer class=\"bg-blue-900 text-white py-16\">
        <div class=\"container mx-auto px-4\">
            ";
        // line 274
        yield "            <div class=\"grid md:grid-cols-4 gap-8 mb-12\">
                ";
        // line 276
        yield "                <div>
                    <div class=\"h-12 mb-6\">
                        <picture>
                            <source srcset=\"/images/logo/logo-qshe-monochrome.svg\" type=\"image/svg+xml\">
                            <img src=\"/images/logo/logo-qshe-monochrome.png\" 
                                 alt=\"Logo Africa QSHE Forum\" 
                                 class=\"h-full w-auto\">
                        </picture>
                    </div>
                    <p class=\"text-blue-200 mb-4\">";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", false, false, false, 285), "html", null, true);
        yield "</p>
                    <p class=\"text-blue-200\">Un événement organisé par QUALITAS Côte d'Ivoire SA</p>
                </div>

                ";
        // line 290
        yield "                <div>
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
        // line 311
        yield "                <div>
                    <h3 class=\"font-bold text-lg mb-6\">
                        <i class=\"fas fa-address-card mr-2\"></i>Contact
                    </h3>
                    <div class=\"text-blue-200 space-y-3\">
                        <p>
                            <i class=\"fas fa-phone mr-2\"></i>
                            <span class=\"font-semibold\">Fixe :</span> 
                            <a href=\"tel:+22527212416\" class=\"hover:text-white transition-colors\">
                                +225 27 21 24 16 13
                            </a>
                        </p>
                        <p>
                            <i class=\"fas fa-mobile-alt mr-2\"></i>
                            <span class=\"font-semibold\">Mobile :</span>
                            <a href=\"tel:+22507091300\" class=\"hover:text-white transition-colors\">
                                +225 07 09 13 00 12
                            </a>
                        </p>
                        <p>
                            <i class=\"fas fa-envelope mr-2\"></i>
                            <a href=\"mailto:infosqualitas@gmail.com\" class=\"hover:text-white transition-colors\">
                                infosqualitas@gmail.com
                            </a>
                        </p>
                        <p>
                            <i class=\"fas fa-envelope mr-2\"></i>
                            <a href=\"mailto:info@qualitas-ci.com\" class=\"hover:text-white transition-colors\">
                                info@qualitas-ci.com
                            </a>
                        </p>
                    </div>
                </div>

                ";
        // line 346
        yield "                <div>
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
                                </a>
                                <a href=\"#\" class=\"text-blue-200 hover:text-white text-2xl transition-colors\">
                                    <i class=\"fab fa-linkedin\"></i>
                                </a>
                                <a href=\"#\" class=\"text-blue-200 hover:text-white text-2xl transition-colors\">
                                    <i class=\"fab fa-youtube\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 388
        yield "            <div class=\"border-t border-blue-800 pt-8\">
                ";
        // line 390
        yield "                <div class=\"text-center\">
                    <div class=\"flex justify-center space-x-6 mb-4\">
                        <a href=\"#\" class=\"text-blue-200 hover:text-white text-sm transition-colors\">
                            Mentions légales
                        </a>
                        <a href=\"#\" class=\"text-blue-200 hover:text-white text-sm transition-colors\">
                            Politique de confidentialité
                        </a>
                        <a href=\"#\" class=\"text-blue-200 hover:text-white text-sm transition-colors\">
                            Conditions d'utilisation
                        </a>
                    </div>
                    <p class=\"text-blue-200 text-sm\">
                        <i class=\"far fa-copyright mr-2\"></i>";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Africa QSHE Forum. 
                        Tous droits réservés. Un événement QUALITAS Côte d'Ivoire SA.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home.html.twig";
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
        return array(584 => 403,  569 => 390,  566 => 388,  523 => 346,  487 => 311,  465 => 290,  458 => 285,  447 => 276,  444 => 274,  440 => 271,  429 => 262,  423 => 259,  404 => 242,  392 => 231,  383 => 228,  378 => 227,  374 => 226,  366 => 220,  355 => 210,  344 => 205,  338 => 202,  333 => 200,  326 => 198,  323 => 197,  319 => 196,  311 => 190,  294 => 175,  286 => 169,  277 => 166,  273 => 164,  269 => 163,  257 => 154,  253 => 153,  247 => 149,  233 => 136,  224 => 129,  212 => 120,  202 => 112,  195 => 107,  189 => 104,  181 => 101,  177 => 99,  164 => 87,  157 => 81,  146 => 79,  142 => 78,  138 => 76,  133 => 72,  122 => 70,  118 => 69,  115 => 68,  109 => 63,  96 => 51,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home.html.twig", "/Users/ns2poportable/Documents/site-event-qualitas/templates/home.html.twig");
    }
}
