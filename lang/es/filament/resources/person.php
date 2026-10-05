<?php

declare(strict_types=1);

return [
    // Lowercase singular/plural so Filament's "New :label" button reads naturally.
    'label' => 'persona',
    'plural_label' => 'personas',
    'navigation_label' => 'Personas',

    'fields' => [
        'name' => [
            'label' => 'Persona',
        ],
        'company' => [
            'label' => 'Empresa',
        ],
        'company_id' => [
            'label' => 'Empresa',
        ],
        'account_owner_id' => [
            'label' => 'Responsable de la cuenta',
        ],
        'creator' => [
            'label' => 'Creado por',
        ],
        'creation_source' => [
            'label' => 'Origen de creación',
        ],
        'created_at' => [
            'label' => 'Fecha de creación',
        ],
        'updated_at' => [
            'label' => 'Fecha de actualización',
        ],
        'deleted_at' => [
            'label' => 'Fecha de eliminación',
        ],
    ],

    'pages' => [
        'list' => [
            'actions' => [
                'import' => [
                    'label' => 'Importar personas',
                ],
                'import_export' => [
                    'label' => 'Importar / Exportar',
                ],
                'create_company' => [
                    'label' => 'Crear empresa',
                ],
            ],
        ],
        'view' => [
            'infolist' => [
                'fields' => [
                    'company' => [
                        'label' => 'Empresa',
                    ],
                ],
            ],
        ],
    ],
];
