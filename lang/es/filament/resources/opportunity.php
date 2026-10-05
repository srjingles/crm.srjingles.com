<?php

declare(strict_types=1);

return [
    // Lowercase singular/plural so Filament's "New :label" button reads naturally.
    'label' => 'oportunidad',
    'plural_label' => 'oportunidades',
    'navigation_label' => 'Oportunidades',

    'fields' => [
        'name' => [
            'label' => 'Oportunidad',
            'placeholder' => 'Escribe el título de la oportunidad',
        ],
        'company_id' => [
            'label' => 'Empresa',
        ],
        'contact_id' => [
            'label' => 'Persona de contacto',
        ],
        'creator' => [
            'label' => 'Creado por',
        ],
        'creation_source' => [
            'label' => 'Origen de creación',
        ],
        'created_at' => [
            'label' => 'Creado el',
        ],
        'updated_at' => [
            'label' => 'Actualizado el',
        ],
        'deleted_at' => [
            'label' => 'Eliminado el',
        ],
    ],

    'pages' => [
        'list' => [
            'actions' => [
                'import' => [
                    'label' => 'Importar oportunidades',
                ],
                'import_export' => [
                    'label' => 'Importar / Exportar',
                ],
            ],
        ],
        'view' => [
            'infolist' => [
                'fields' => [
                    'company' => [
                        'label' => 'Empresa',
                    ],
                    'contact' => [
                        'label' => 'Persona de contacto',
                    ],
                ],
            ],
        ],
    ],
];
