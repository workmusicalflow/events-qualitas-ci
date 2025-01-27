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
                'logo' => '/images/logo/logo-qshe-monochrome.svg',
                'items' => [
                    [
                        'label' => 'Programme',
                        'url' => '/programme',
                        'icon' => 'calendar-alt',
                        'highlight' => true
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
                        'external' => true,
                        'highlight' => true
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
                        'external' => true,
                        'highlight' => true
                    ],
                    [
                        'label' => 'Éditions précédentes',
                        'url' => '/editions-precedentes',
                        'icon' => 'history'
                    ]
                ]
            ],
            'event' => [
                'year' => '2025',
                'dates' => 'Du 08 au 10 Mai 2025',
                'location' => [
                    'venue' => 'Latrille Event',
                    'area' => 'II Plateaux',
                    'city' => 'Abidjan'
                ],
                'presentation' => [
                    'intro' => 'Le forum international de référence en Afrique pour la Qualité, la Sécurité, la Santé et l\'Environnement',
                    'description' => 'Un événement majeur dédié au réseautage, à la promotion d\'outils de management innovants et au développement des investissements en Afrique.',
                    'theme' => [
                        'main' => 'Accélérer la transition écologique pour une Afrique durable et résiliente:',
                        'pillars' => [
                            'innovations',
                            'stratégies',
                            'collaborations'
                        ]
                    ],
                    'programme' => [
                        'Cérémonie d\'ouverture spectaculaire avec performances artistiques et culturelles',
                        'Exposition interactive avec stands des leaders de l\'industrie QSHE',
                        'Panels de discussion avec experts internationaux sur les enjeux actuels',
                        'Sessions de networking structurées pour maximiser les opportunités',
                        'Conférences thématiques sur l\'innovation et les meilleures pratiques',
                        'Cérémonie de remise des Prix QSHE Excellence Awards',
                        'Qualitas Day : journée spéciale dédiée aux certifications et formations'
                    ],
                    'objectif' => 'Valoriser l\'excellence en management QSHE tout en encourageant les opérateurs économiques à améliorer leurs politiques pour une croissance durable et compétitive en Afrique.',
                    'highlights' => [
                        'Plus de 500 participants attendus',
                        '10+ experts internationaux',
                        '15 pays représentés',
                        '40 exposants leaders du secteur'
                    ]
                ]
            ],
            'partners' => [
                'categories' => [
                    'institutionnel' => [
                        'name' => 'Institutionnel',
                        'color' => 'blue',
                        'description' => 'Nos partenaires institutionnels qui soutiennent l\'excellence QSHE',
                        'partners' => [
                            [
                                'name' => 'Ministère de l\'Industrie',
                                'logo' => '/images/partners/institutionnel-0.jpg',
                                'description' => 'Partenaire officiel gouvernemental',
                                'website' => 'https://industrie.gouv.ci',
                                'contribution' => 'Support institutionnel et réglementaire'
                            ]
                        ]
                    ],
                    'diamond' => [
                        'name' => 'Diamond',
                        'color' => 'purple',
                        'description' => 'Nos partenaires premium qui façonnent l\'avenir du QSHE',
                        'partners' => [
                            [
                                'name' => 'Global Certification',
                                'logo' => '/images/partners/diamond-0.jpg',
                                'description' => 'Leader mondial de la certification',
                                'website' => '#',
                                'contribution' => 'Expertise en certification et formation'
                            ]
                        ]
                    ],
                    'gold' => [
                        'name' => 'Gold',
                        'color' => 'yellow',
                        'description' => 'Nos partenaires majeurs engagés pour l\'excellence',
                        'partners' => [
                            [
                                'name' => 'Safety Solutions',
                                'logo' => '/images/partners/gold-0.jpg',
                                'description' => 'Expert en solutions de sécurité',
                                'website' => '#',
                                'contribution' => 'Solutions innovantes en sécurité'
                            ],
                            [
                                'name' => 'Quality Systems',
                                'logo' => '/images/partners/gold-1.jpg',
                                'description' => 'Spécialiste des systèmes qualité',
                                'website' => '#',
                                'contribution' => 'Expertise en management de la qualité'
                            ]
                        ]
                    ],
                    'silver' => [
                        'name' => 'Silver',
                        'color' => 'gray',
                        'description' => 'Nos partenaires clés du développement QSHE',
                        'partners' => [
                            [
                                'name' => 'EcoSolutions Africa',
                                'logo' => '/images/partners/silver-0.jpg',
                                'description' => 'Solutions environnementales',
                                'website' => '#',
                                'contribution' => 'Expertise environnementale'
                            ]
                        ]
                    ],
                    'bronze' => [
                        'name' => 'Bronze',
                        'color' => 'amber',
                        'description' => 'Nos partenaires engagés pour le progrès',
                        'partners' => [
                            [
                                'name' => 'Health & Safety First',
                                'logo' => '/images/partners/bronze-0.jpg',
                                'description' => 'Spécialiste santé et sécurité',
                                'website' => '#',
                                'contribution' => 'Expertise en santé au travail'
                            ]
                        ]
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
                'name' => 'Mathieu VAILLANT',
                'company' => 'Quality Corp',
                'position' => 'Directeur QHSE',
                'photo' => '/images/speakers/mathieu-VAILLANT.jpg',
                'specialty' => 'Management QHSE',
                'social' => [
                    'linkedin' => '#',
                    'twitter' => '#'
                ]
            ],
            [
                'name' => 'Marie MICHELLE',
                'company' => 'Safety First',
                'position' => 'Experte en Sécurité Industrielle',
                'photo' => '/images/speakers/marie-MICHELLE.jpg',
                'specialty' => 'Sécurité',
                'social' => [
                    'linkedin' => '#'
                ]
            ],
            [
                'name' => 'Ahmed Koné',
                'company' => 'Green Africa',
                'position' => 'Responsable Environnement',
                'photo' => '/images/speakers/ahmed-kone.jpg',
                'specialty' => 'Environnement',
                'social' => [
                    'linkedin' => '#',
                    'twitter' => '#'
                ]
            ],
            [
                'name' => 'Pierre SABRI',
                'company' => 'Health Solutions',
                'position' => 'Consultante Santé au Travail',
                'photo' => '/images/speakers/pierre-SABRI.jpg',
                'specialty' => 'Santé',
                'social' => [
                    'linkedin' => '#'
                ]
            ],
            [
                'name' => 'Rodrigue NGONZO',
                'company' => 'ISO Consulting',
                'position' => 'Consultant forestier',
                'photo' => '/images/speakers/rodrigue-NGONZO.jpg',
                'specialty' => 'Audit',
                'social' => [
                    'linkedin' => '#',
                    'twitter' => '#'
                ]
            ],
            [
                'name' => 'Francisca VIUDES',
                'company' => 'SEER Europe',
                'position' => 'Présidente',
                'photo' => '/images/speakers/francisca-VIUDES.jpg',
                'specialty' => 'Certification',
                'social' => [
                    'linkedin' => '#'
                ]
            ]
        ];

        shuffle($allSpeakers);
        return array_slice($allSpeakers, 0, 4);
    }
}