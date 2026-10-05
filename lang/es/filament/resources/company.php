<?php

declare(strict_types=1);

return [
    // Filament title-cases the singular/plural labels for display contexts
    // (navigation menu, page headings) but injects them raw into the
    // "New :label" create button. Keep lowercase here so the button reads
    // "New company" while titles render as "Company"/"Companies".
    'label' => 'empresa',
    'plural_label' => 'empresas',
    'navigation_label' => 'Empresas',

    'fields' => [
        'name' => [
            'label' => 'Empresa',
        ],
        'account_owner' => [
            'label' => 'Responsable de la cuenta',
        ],
        'account_owner_id' => [
            'label' => 'Responsable de la cuenta',
        ],
        'created_by' => [
            'label' => 'Creado por',
        ],
        'creator' => [
            'label' => 'Creado por',
        ],
        'creation_source' => [
            'label' => 'Origen',
        ],
        'created_at' => [
            'label' => 'Fecha de creación',
        ],
        'updated_at' => [
            'label' => 'Última actualización',
        ],
        'deleted_at' => [
            'label' => 'Fecha de eliminación',
        ],
    ],

    'pages' => [
        'list' => [
            'actions' => [
                'import' => [
                    'label' => 'Importar empresas',
                ],
                'import_export' => [
                    'label' => 'Importar / Exportar',
                ],
            ],
        ],
        'view' => [
            'infolist' => [
                'fields' => [
                    'account_owner' => [
                        'label' => 'Responsable de la cuenta',
                    ],
                ],
            ],
            'activity_log' => [
                'description' => 'Toda la actividad de esta empresa, agrupada por semana.',
            ],
        ],
    ],

    'relation_managers' => [
        'people' => [
            'model_label' => 'persona',
        ],
    ],
];
