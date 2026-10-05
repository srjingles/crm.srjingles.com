<?php

declare(strict_types=1);

return [
    // Lowercase singular/plural so Filament's "New :label" button reads naturally.
    'label' => 'nota',
    'plural_label' => 'notas',
    'navigation_label' => 'Notas',

    'fields' => [
        'title' => [
            'label' => 'Título',
        ],
        'companies' => [
            'label' => 'Empresas',
        ],
        'people' => [
            'label' => 'Personas',
        ],
        'opportunities' => [
            'label' => 'Oportunidades',
        ],
        'creator' => [
            'label' => 'Creada por',
        ],
        'created_at' => [
            'label' => 'Fecha de creación',
        ],
        'updated_at' => [
            'label' => 'Última actualización',
        ],
    ],

    'filters' => [
        'creation_source' => [
            'label' => 'Origen de creación',
        ],
    ],

    'created_periods' => [
        'today' => 'Creadas hoy',
        'this_week' => 'Creadas esta semana',
        'this_month' => 'Creadas este mes',
        'this_year' => 'Creadas este año',
        'earlier' => 'Creadas antes',
    ],

    'cards' => [
        'untitled' => 'Nota sin título',
        'no_content' => 'Esta nota no tiene contenido.',
        'today' => 'Hoy',
        'yesterday' => 'Ayer',
        'deleted' => 'Eliminada',
    ],

    'pages' => [
        'list' => [
            'actions' => [
                'import' => [
                    'label' => 'Importar notas',
                ],
                'import_export' => [
                    'label' => 'Importar / Exportar',
                ],
            ],
        ],
    ],
];
