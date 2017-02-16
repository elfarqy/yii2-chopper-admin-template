<?php

use rmrevin\yii\fontawesome\FA;
use yii\helpers\Html;
use yii\materialicons\MD;

return [
    [
        'icon'  => MD::icon('home'),
        'label' => 'Dashboard',
        'badge' => Html::tag('span', 'New', ['class' => 'label label-primary']),
        'items' => [
            [
                'icon'  => MD::icon('timeline'),
                'label' => 'Charts',
                'url'   => ['/chopper/dashboard/chart'],
                'badge' => Html::tag('span', '4', ['class' => 'label label-warning'])
            ],
            [
                'icon'  => MD::icon('lightbulb-outline'),
                'label' => 'Idea',
                'url'   => ['/chopper/dashboard/idea']
            ],
            [
                'icon'  => MD::icon('dvr'),
                'label' => 'Projects',
                'url'   => ['/chopper/dashboard/project']
            ]
        ]
    ],
    [
        'label' => 'Features'
    ],
    [
        'icon'  => FA::icon('diamond')->fixedWidth(),
        'label' => 'UI Features',
        'items' => [
            [
                'label' => 'Grid System',
                'url'   => ['/chopper/feature/grid'],
            ],
            [
                'label' => 'General Components',
                'url'   => ['/chopper/feature/general-component'],
            ],
            [
                'label' => 'Panels',
                'url'   => ['/chopper/feature/panel'],
            ],
            [
                'label' => 'Buttons',
                'url'   => ['/chopper/feature/button'],
            ],
            [
                'label' => 'Color Library',
                'url'   => ['/chopper/feature/color'],
            ],
            [
                'label' => 'Font Icons',
                'url'   => ['/chopper/feature/font-icon'],
            ],
            [
                'label' => 'Typography',
                'url'   => ['/chopper/feature/typography'],
            ],
            [
                'label' => 'Modals',
                'url'   => ['/chopper/feature/modals'],
            ],
        ]
    ],
    [
        'icon'  => FA::icon('puzzle-piece')->fixedWidth(),
        'label' => 'Components',
        'items' => [
            [
                'label' => 'Bordered Image',
                'url'   => ['/chopper/component/image'],
            ],
            [
                'label' => 'Maps',
                'url'   => ['/chopper/component/map'],
            ],
            [
                'label' => 'Charts',
                'url'   => ['/chopper/component/chart'],
            ]
        ]
    ],
    [
        'icon'  => FA::icon('wpforms')->fixedWidth(),
        'label' => 'Form Stuffs',
        'items' => [
            [
                'label' => 'Bootstrap Form Control',
                'url'   => ['/chopper/form/bootstrap'],
            ],
            [
                'label' => 'Multiple Select Control',
                'url'   => ['/chopper/form/select2'],
            ],

        ]
    ],
    [
        'icon'  => FA::icon('table')->fixedWidth(),
        'label' => 'Tables',
        'items' => [
            [
                'label' => 'Bootstrap Table',
                'url'   => ['/chopper/table/bootstrap'],
            ],
            [
                'label' => 'Datatable',
                'url'   => ['/chopper/table/datatable'],
            ],
        ]
    ],
    [
        'icon'  => MD::icon('view-headline'),
        'label' => 'Sample Nested Menu',
        'items' => [
            [
                'label' => 'Menu Level 2',
                'url'   => '#',
                'items' => [
                    [
                        'label' => 'Menu Level 3',
                        'url'   => '#',
                    ],
                    [
                        'label' => 'Menu Level 3 Too',
                        'url'   => '#',
                        'items' => [
                            [
                                'label' => 'Menu Level 4',
                                'url'   => '#',
                                'items' => [
                                    [
                                        'label' => 'Menu Level 5.1',
                                        'url'   => '#',
                                    ],
                                    [
                                        'label' => 'Menu Level 5.2',
                                        'url'   => '#',
                                    ],
                                    [
                                        'label' => 'Menu Level 5.3',
                                        'url'   => '#',
                                    ],
                                    [
                                        'label' => 'Menu Level 5.4',
                                        'url'   => '#',
                                    ],
                                ]
                            ],
                        ]
                    ],
                ]
            ],
            [
                'label' => 'Also Level 2',
                'url'   => '#',
            ]
        ]
    ],
    [
        'icon'  => '',
        'label' => 'Yii2 Related Things'
    ],
    [
        'icon'  => MD::icon('build'),
        'label' => 'Component Installation',
        'url'   => ['/chopper/yii2/install']
    ],
    [
        'icon'  => MD::icon('view-quilt'),
        'label' => 'Useful Widgets',
        'url'   => ['/chopper/yii2/widgets']
    ],
    [
        'icon'  => '',
        'label' => 'Documentations & Supports'
    ],
    [
        'icon'  => MD::icon('group'),
        'label' => 'Dev Team',
        'url'   => ['/chopper/support/team']
    ],
    [
        'icon'  => MD::icon('live-help'),
        'label' => 'Helps',
        'url'   => ['/chopper/support/help']
    ],
];
