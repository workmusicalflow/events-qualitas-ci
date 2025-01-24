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
                'logo' => [
                    'svg' => '/images/logo/logo-qshe.svg',
                    'png' => '/images/logo/logo-qshe.png',
                    'alt' => 'Logo Africa QSHE Forum'
                ],
                'items' => [
                    [
                        'label' => 'Programme',
                        'url' => '/programme',
                        'icon' => 'calendar-alt'
                    ],
                    [
                        'label' => 'Intervenants',
                        'url' => '/intervenants',
                        'icon' => 'users'
                    ],
                    [
                        'label' => 'Devenir exposant',
                        'url' => 'https://events-qualitas-ci.com/qshe25-b2b/public/',
                        'icon' => 'store',
                        'external' => true
                    ],
                    [
                        'label' => 'Partenaires',
                        'url' => '/partenaires',
                        'icon' => 'handshake'
                    ],
                    [
                        'label' => 'Badge de participation',
                        'url' => 'https://events-qualitas-ci.com/formulaire.html',
                        'icon' => 'id-badge',
                        'external' => true
                    ],
                    [
                        'label' => 'Éditions précédentes',
                        'url' => '/editions-precedentes',
                        'icon' => 'history'
                    ]
                ]
            ],
            'event' => [
                'date' => '2025',
                'location' => 'Abidjan, Côte d\'Ivoire',
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
                ],
                'logos' => [
                    'header' => [
                        'svg' => '/images/logo/logo-qshe.svg',
                        'png' => '/images/logo/logo-qshe.png',
                        'alt' => 'Logo Africa QSHE Forum'
                    ],
                    'footer' => [
                        'svg' => '/images/logo/logo-qshe-monochrome.svg',
                        'png' => '/images/logo/logo-qshe-monochrome.png',
                        'alt' => 'Logo Africa QSHE Forum - Version monochrome'
                    ]
                ]
            ],
            'speakers' => $this->getRandomSpeakers()
        ];

        echo $this->twig->render('pages/home.html.twig', $data);
    }

    private function getRandomSpeakers()
    {
        $allSpeakers = [
            [
                'name' => 'John Doe',
                'company' => 'Quality Corp',
                'position' => 'Directeur QHSE',
                'photo' => 'https://via.placeholder.com/300x400?text=John+Doe',
                'specialty' => 'Management QHSE',
                'social' => [
                    'linkedin' => '#',
                    'twitter' => '#'
                ]
            ],
            [
                'name' => 'Marie Dubois',
                'company' => 'Safety First',
                'position' => 'Experte en Sécurité Industrielle',
                'photo' => 'https://via.placeholder.com/300x400?text=Marie+Dubois',
                'specialty' => 'Sécurité',
                'social' => [
                    'linkedin' => '#'
                ]
            ],
            [
                'name' => 'Ahmed Koné',
                'company' => 'Green Africa',
                'position' => 'Responsable Environnement',
                'photo' => 'https://via.placeholder.com/300x400?text=Ahmed+Kone',
                'specialty' => 'Environnement',
                'social' => [
                    'linkedin' => '#',
                    'twitter' => '#'
                ]
            ],
            [
                'name' => 'Sarah Johnson',
                'company' => 'Health Solutions',
                'position' => 'Consultante Santé au Travail',
                'photo' => 'https://via.placeholder.com/300x400?text=Sarah+Johnson',
                'specialty' => 'Santé',
                'social' => [
                    'linkedin' => '#'
                ]
            ],
            [
                'name' => 'Pierre Kouassi',
                'company' => 'ISO Consulting',
                'position' => 'Expert Qualité',
                'photo' => 'https://via.placeholder.com/300x400?text=Pierre+Kouassi',
                'specialty' => 'Qualité',
                'social' => [
                    'linkedin' => '#',
                    'twitter' => '#'
                ]
            ],
            [
                'name' => 'Emma Chen',
                'company' => 'Global Standards',
                'position' => 'Directrice Certification',
                'photo' => 'https://via.placeholder.com/300x400?text=Emma+Chen',
                'specialty' => 'Certification',
                'social' => [
                    'linkedin' => '#'
                ]
            ]
        ];

        // Mélanger le tableau et prendre 4 intervenants au hasard
        shuffle($allSpeakers);
        return array_slice($allSpeakers, 0, 4);
    }
}
