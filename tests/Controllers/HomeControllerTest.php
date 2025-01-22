<?php

namespace Qualitas\AfricaQsheForum\Tests\Controllers;

use PHPUnit\Framework\TestCase;
use Qualitas\AfricaQsheForum\Controllers\HomeController;
use Twig\Environment;

class HomeControllerTest extends TestCase
{
    /** @var Environment&\PHPUnit\Framework\MockObject\MockObject */
    private $twigMock;

    private $controller;

    protected function setUp(): void
    {
        $this->twigMock = $this->createMock(Environment::class);
        $this->controller = new HomeController($this->twigMock);
    }

    public function testIndexRendersHomeTemplateWithCorrectData()
    {
        // Configuration des attentes
        $expectedData = [
            'title' => 'Africa QSHE Forum',
            'description' => 'Bienvenue sur le site officiel du Africa QSHE Forum',
            'menu' => [
                'logo' => '/images/logo.png',
                'items' => [
                    ['label' => 'Programme', 'url' => '/programme'],
                    ['label' => 'Intervenants', 'url' => '/intervenants'],
                    ['label' => 'Devenir exposant', 'url' => 'https://events-qualitas-ci.com/qshe25-b2b/public/'],
                    ['label' => 'Partenaires', 'url' => '/partenaires'],
                    ['label' => 'Badge de participation', 'url' => 'https://events-qualitas-ci.com/formulaire.html'],
                    ['label' => 'Éditions précédentes', 'url' => '/editions-precedentes']
                ]
            ],
            'event' => [
                'date' => '2025',
                'location' => 'Abidjan, Côte d\'Ivoire',
                'description' => 'Le forum international de référence en Afrique pour la Qualité, la Sécurité, la Santé et l\'Environnement'
            ],
            'speakers' => [
                [
                    'name' => 'John Doe',
                    'company' => 'Quality Corp',
                    'position' => 'Directeur QHSE',
                    'photo' => '/images/speakers/john-doe.jpg'
                ],
                // 3 autres intervenants seront ajoutés dynamiquement
            ]
        ];

        // Vérification que render est appelé avec les bons paramètres
        $this->twigMock->expects($this->once())
            ->method('render')
            ->with(
                'home.html.twig',
                $this->callback(function ($data) use ($expectedData) {
                    return $data['title'] === $expectedData['title'] &&
                        $data['description'] === $expectedData['description'] &&
                        isset($data['menu']) &&
                        isset($data['event']) &&
                        isset($data['speakers']);
                })
            );

        // Exécution
        $this->controller->index();
    }
}
