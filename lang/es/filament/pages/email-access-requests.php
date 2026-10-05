<?php

declare(strict_types=1);

return [
    'navigation_label' => 'Solicitudes de acceso',
    'tabs' => [
        'aria' => 'Pestañas de solicitudes de acceso',
        'incoming' => 'Recibidas',
        'outgoing' => 'Enviadas',
    ],
    'filters' => [
        'label' => 'Estado',
        'all' => 'Todas',
        'pending' => 'Pendientes',
        'approved' => 'Aprobadas',
        'denied' => 'Denegadas',
    ],
    'columns' => [
        'requested_by' => 'Solicitada por',
        'sent_to' => 'Enviada a',
        'email' => 'Correo',
        'access' => 'Acceso',
        'requested' => 'Solicitada',
    ],
    'search' => [
        'placeholder' => 'Buscar por nombre o asunto…',
    ],
    'request' => [
        'requested_incoming' => 'ha solicitado acceso',
        'requested_outgoing' => 'has solicitado acceso',
        'unknown_user' => 'Usuario desconocido',
        'email_unavailable' => 'El correo asociado ya no está disponible.',
    ],
    'empty' => [
        'filtered_heading' => 'No hay solicitudes con estado :status',
        'filtered_description' => 'Prueba con otro filtro o quita el que está activo.',
        'show_all' => 'Ver todas',
        'incoming_heading' => 'No hay solicitudes recibidas',
        'outgoing_heading' => 'No hay solicitudes enviadas',
        'incoming_description' => 'Cuando alguien pida acceso a uno de tus correos privados, aparecerá aquí.',
        'outgoing_description' => 'Aún no has pedido acceso a ningún correo.',
    ],
    'actions' => [
        'open_email' => 'Abrir correo',
        'approve' => [
            'label' => 'Aprobar',
            'modal_heading' => 'Aprobar solicitud de acceso',
            'modal_description' => '¿Dar acceso a este correo a :name?',
            'modal_submit_label' => 'Aprobar',
        ],
        'deny' => [
            'label' => 'Denegar',
            'modal_heading' => 'Denegar solicitud de acceso',
            'modal_description' => '¿Denegar la solicitud de acceso de :name?',
            'modal_submit_label' => 'Denegar',
        ],
        'cancel' => [
            'label' => 'Cancelar solicitud',
            'modal_heading' => 'Cancelar solicitud de acceso',
            'modal_description' => '¿Retirar tu solicitud de acceso al correo de :name?',
            'modal_submit_label' => 'Cancelar solicitud',
        ],
        'fallback_user' => 'este usuario',
    ],
    'notifications' => [
        'approved' => 'Solicitud de acceso aprobada.',
        'denied' => 'Solicitud de acceso denegada.',
        'cancelled' => 'Solicitud de acceso cancelada.',
    ],
];
