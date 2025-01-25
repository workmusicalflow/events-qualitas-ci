<?php

namespace Qualitas\AfricaQsheForum\Controllers;

use Twig\Environment;

class HomeController
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index()
    {
        $data = [
            'title' => 'Africa QSHE Forum',
            'description' => 'Bienvenue sur le site officiel du Africa QSHE Forum',
            'menu' => [
                'logo' => '/images/logo/logo-qshe.svg',
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
                'year' => '2025',
                'date' => 'Du 08 au 10 MAI',
                'location' => 'Abidjan, II Plateaux, Latrille Event',
                'theme' => 'Accélérer la transition écologique pour une Afrique durable et résiliente: innovations, stratégies et collaborations',
                'description' => 'Le forum international de référence en Afrique pour la Qualité, la Sécurité, la Santé et l\'Environnement',
                'presentation' => [
                    'intro' => 'Rejoignez-nous pour la nouvelle édition de l\'Africa QSHE Forum, le rendez-vous incontournable des professionnels de la Qualité, Santé, Sécurité au Travail et Environnement en Afrique.',
                    'details' => 'Cette plateforme d\'échange unique rassemble experts, décideurs et innovateurs autour du thème de la transition écologique.',
                    'programme' => [
                        'Conférences inspirantes',
                        'Panels d\'experts',
                        'Sessions de networking',
                        'Partage des meilleures pratiques'
                    ],
                    'objectif' => 'Saisissez cette opportunité de contribuer à la transformation écologique de l\'Afrique tout en développant votre réseau professionnel.'
                ]
            ],
            'speakers' => $this->getRandomSpeakers()
        ];

        echo $this->twig->render('home.html.twig', $data);
    }

    private function getRandomSpeakers()
    {
        $allSpeakers = [
            [
                'name' => 'John Doe',
                'company' => 'Quality Corp',
                'position' => 'Directeur QHSE',
                'photo' => 'https://via.placeholder.com/300x400?text=John+Doe'
            ],
            [
                'name' => 'Marie Dubois',
                'company' => 'Safety First',
                'position' => 'Experte en Sécurité Industrielle',
                'photo' => 'https://via.placeholder.com/300x400?text=Marie+Dubois'
            ],
            [
                'name' => 'Ahmed Koné',
                'company' => 'Green Africa',
                'position' => 'Responsable Environnement',
                'photo' => 'https://via.placeholder.com/300x400?text=Ahmed+Kone'
            ],
            [
                'name' => 'Sarah Johnson',
                'company' => 'Health Solutions',
                'position' => 'Consultante Santé au Travail',
                'photo' => 'https://via.placeholder.com/300x400?text=Sarah+Johnson'
            ],
            [
                'name' => 'Pierre Kouassi',
                'company' => 'ISO Consulting',
                'position' => 'Expert Qualité',
                'photo' => 'https://via.placeholder.com/300x400?text=Pierre+Kouassi'
            ],
            [
                'name' => 'Emma Chen',
                'company' => 'Global Standards',
                'position' => 'Directrice Certification',
                'photo' => 'https://via.placeholder.com/300x400?text=Emma+Chen'
            ]
        ];

        // Mélanger le tableau et prendre 4 intervenants au hasard
        shuffle($allSpeakers);
        return array_slice($allSpeakers, 0, 4);
    }
}
