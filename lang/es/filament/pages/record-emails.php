<?php

declare(strict_types=1);

return [
    'actions' => [
        'manage_sharing' => [
            'label' => 'Compartir',
            'modal_heading' => 'Ajustes de uso compartido',
            'submit' => 'Guardar',
        ],
        'summarize_thread' => [
            'label' => 'Resumir hilo',
            'modal_heading' => 'Resumen del hilo con IA',
            'empty' => 'No hay ningún resumen disponible para este hilo.',
            'generated' => 'Generado :time',
            'copy' => 'Copiar',
            'copied' => 'Copiado',
        ],
        'request_access' => [
            'label' => 'Solicitar acceso',
            'modal_heading' => 'Solicitar acceso',
        ],
        'approve_access_request' => [
            'modal_heading' => 'Aprobar solicitud de acceso',
        ],
        'deny_access_request' => [
            'modal_heading' => 'Denegar solicitud de acceso',
        ],
    ],
    'fields' => [
        'privacy_tier' => [
            'label' => '¿Quién puede ver este correo?',
        ],
        'shares' => [
            'label' => 'Compartir con compañeros concretos',
        ],
        'shared_with' => [
            'label' => 'Compañero',
        ],
        'tier' => [
            'label' => 'Nivel de acceso',
        ],
        'tier_requested' => [
            'label' => 'Nivel de acceso solicitado',
        ],
    ],
    'empty' => [
        'heading' => 'No hay correos',
        'description' => 'Este registro no tiene correos, o puede que estén ocultos por los permisos.',
        'compose' => 'Redactar',
    ],
    'protected' => [
        'heading' => 'No hay nada que mostrar',
        'description' => 'Este registro está protegido. Sus correos y reuniones no se muestran aquí.',
    ],
    'blocked' => [
        'heading' => 'No hay nada que mostrar',
        'description' => 'Este registro está bloqueado. Sus correos y reuniones no se muestran aquí.',
    ],

    'notifications' => [
        'sharing_saved' => [
            'title' => 'Ajustes de uso compartido guardados.',
        ],
        'pending_request' => [
            'title' => 'Ya tienes una solicitud pendiente para este correo.',
        ],
        'access_request_sent' => [
            'title' => 'Solicitud de acceso enviada.',
        ],
        'access_request_approved' => [
            'title' => 'Solicitud de acceso aprobada.',
        ],
        'access_request_denied' => [
            'title' => 'Solicitud de acceso denegada.',
        ],
    ],
];
