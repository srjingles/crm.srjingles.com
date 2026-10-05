<?php

declare(strict_types=1);

return [
    // Lowercase singular/plural so Filament's "New :label" button reads naturally.
    'label' => 'tarea',
    'plural_label' => 'tareas',
    'navigation_label' => 'Tareas',

    'fields' => [
        'assignees' => [
            'label' => 'Asignados',
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
            'label' => 'Creado por',
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

    'filters' => [
        'assigned_to_me' => [
            'label' => 'Asignadas a mí',
        ],
        'creation_source' => [
            'label' => 'Origen',
        ],
    ],

    'pages' => [
        'list' => [
            'actions' => [
                'import' => [
                    'label' => 'Importar tareas',
                ],
                'import_export' => [
                    'label' => 'Importar / Exportar',
                ],
            ],
        ],
    ],
];
