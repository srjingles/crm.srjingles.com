<?php

declare(strict_types=1);

return [
    // `:key` is replaced with the trigger character, rendered as a key cap.
    'placeholder' => 'Escribe :key para insertar un encabezado, una lista o una imagen',

    'limit_reached' => 'Este campo está lleno. Borra parte del contenido para seguir escribiendo.',

    'selection_toolbar' => [
        'text_style' => 'Estilo de texto',
    ],

    'slash_menu' => [
        'no_results' => 'Ningún bloque coincide con ":query"',

        'groups' => [
            'text' => 'Texto',
            'lists' => 'Listas',
            'insert' => 'Insertar',
        ],

        'items' => [
            'h1' => [
                'label' => 'Encabezado 1',
                'description' => 'Encabezado de sección grande',
            ],
            'h2' => [
                'label' => 'Encabezado 2',
                'description' => 'Encabezado de sección mediano',
            ],
            'h3' => [
                'label' => 'Encabezado 3',
                'description' => 'Encabezado de sección pequeño',
            ],
            'paragraph' => [
                'label' => 'Texto',
                'description' => 'Empieza a escribir con texto normal',
            ],
            'bulletList' => [
                'label' => 'Lista con viñetas',
                'description' => 'Crea una lista sencilla con viñetas',
            ],
            'orderedList' => [
                'label' => 'Lista numerada',
                'description' => 'Crea una lista con numeración',
            ],
            'blockquote' => [
                'label' => 'Cita',
                'description' => 'Destaca un fragmento',
            ],
            'codeBlock' => [
                'label' => 'Código',
                'description' => 'Inserta un fragmento de código',
            ],
            'table' => [
                'label' => 'Tabla',
                'description' => 'Organiza datos en filas',
            ],
            'details' => [
                'label' => 'Desplegable',
                'description' => 'Oculta detalles tras un resumen',
            ],
            'horizontalRule' => [
                'label' => 'Separador',
                'description' => 'Separa secciones con una línea',
            ],
            'attachFiles' => [
                'label' => 'Imagen',
                'description' => 'Sube una imagen',
            ],
        ],
    ],
];
