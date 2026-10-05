<?php

declare(strict_types=1);

return [
    'navigation_label' => 'Plantillas',
    'fields' => [
        'body_html' => [
            'label' => 'Cuerpo',
        ],
        'is_shared' => [
            'label' => 'Compartir con el espacio de trabajo',
            'helper_text' => 'Todos los miembros de tu espacio de trabajo pueden usar esta plantilla.',
        ],
    ],

    'columns' => [
        'subject' => [
            'placeholder' => '—',
        ],
        'is_shared' => [
            'label' => 'Compartida',
        ],
        'creator' => [
            'label' => 'Creada por',
            'placeholder' => '—',
        ],
        'created_at' => [
            'label' => 'Creada',
        ],
    ],

    'empty' => [
        'heading' => 'No hay plantillas',
        'description' => 'Guarda un mensaje que envíes a menudo para reutilizarlo.',
    ],

    'actions' => [
        'create' => [
            'label' => 'Nueva plantilla',
        ],
        'edit' => [
            'label' => 'Editar plantilla',
        ],
        'delete' => [
            'label' => 'Eliminar',
        ],
    ],
];
