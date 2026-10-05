<?php

declare(strict_types=1);

return [
    'actions' => [
        'compose' => [
            'label' => 'Redactar',
            'tooltip' => 'Atajo de teclado: C',
        ],
        'compose_email' => [
            'label' => 'Redactar correo',
        ],
        'undo' => [
            'label' => 'Deshacer',
        ],
    ],
    'notifications' => [
        'queued' => [
            'title' => 'Correo en cola',
            'body' => 'Tu correo se está enviando.',
        ],
        'cancelled' => [
            'title' => 'Envío cancelado',
        ],
        'too_late' => [
            'title' => 'Demasiado tarde, el correo ya se ha enviado',
        ],
    ],
    'fields' => [
        'template' => [
            'label' => 'Plantilla',
            'placeholder' => 'Aplicar una plantilla…',
        ],
        'body' => [
            'label' => 'Cuerpo',
        ],
        'scheduled_for' => [
            'label' => 'Enviar el',
            'helper_text' => 'Déjalo en blanco para enviarlo con 5 segundos para deshacer.',
        ],
        'signature' => [
            'label' => 'Firma',
            'placeholder' => 'Sin firma',
        ],
    ],
    'sections' => [
        'settings' => [
            'description' => 'Opciones de privacidad, programación y firma de este correo.',
        ],
    ],
];
