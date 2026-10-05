<?php

declare(strict_types=1);

return [
    'navigation_label' => 'Correos',
    'account_filter' => [
        'label' => 'Cuenta',
    ],
    'tabs' => [
        'drafts' => 'Borradores',
        'outbox' => 'Bandeja de salida',
        'failed' => 'Fallidos',
        'templates' => 'Plantillas',
    ],
    'drafts' => [
        'columns' => [
            'subject' => 'Borrador',
            'last_edited' => 'Última edición',
        ],
        'actions' => [
            'open' => 'Seguir escribiendo',
            'delete' => 'Eliminar borrador',
            'delete_selected' => 'Eliminar borradores',
        ],
        'empty' => [
            'heading' => 'No hay borradores',
            'description' => 'Aquí se guardan los mensajes que cierras sin enviar.',
        ],
        'notifications' => [
            'deleted' => 'Borrador eliminado',
            'bulk_deleted' => '{1}1 borrador eliminado|[2,*]:count borradores eliminados',
        ],
    ],
    'outbox' => [
        'empty' => [
            'heading' => 'No hay correos en la bandeja de salida',
            'description' => 'Los correos en cola y programados aparecen aquí hasta que se envían.',
        ],
    ],
    'failed' => [
        'empty' => [
            'heading' => 'No hay correos fallidos',
            'description' => 'Aquí aparecerán los correos que no se hayan podido entregar.',
        ],
    ],
    'search' => [
        'placeholder' => 'Buscar correos…',
        'clear' => 'Borrar búsqueda',
    ],
    'subject' => [
        'none' => '(sin asunto)',
        'hidden' => '(asunto oculto)',
    ],
    'pagination' => [
        'previous' => 'Anterior',
        'next' => 'Siguiente',
        'range' => ':first–:last de :total',
    ],
    'list_empty' => [
        'no_results' => 'No hay resultados para ":search"',
        'all' => 'No hay correos',
        'sent' => 'No hay correos enviados',
        'inbox' => 'No hay correos recibidos',
    ],
    'list_row' => [
        'via' => 'vía :name',
        'via_mailboxes' => '{1}vía 1 buzón|[2,*]vía :count buzones',
        'access_granted_via' => 'Acceso concedido vía',
        'timestamp_yesterday' => 'Ayer, :time',
        'request_access' => 'Solicitar acceso a :name',
        'requested' => 'Solicitado',
        'opening' => 'Abriendo…',
    ],
    'pending_access' => [
        'heading' => '{1}1 solicitud de acceso pendiente|[2,*]:count solicitudes de acceso pendientes',
        'unknown_user' => 'Usuario desconocido',
        'approve' => 'Aprobar',
        'deny' => 'Denegar',
    ],
    'compose' => [
        'label' => 'Redactar',
        'notifications' => [
            'queued' => [
                'title' => 'Correo en cola',
                'body' => 'Tu correo se está enviando.',
            ],
        ],
    ],
    'privacy_gate' => [
        'metadata_only' => [
            'heading' => 'El cuerpo y el asunto del correo están restringidos',
            'description' => 'Puedes ver los participantes y la fecha. Solicita acceso para ver el asunto y el cuerpo.',
        ],
        'subject_only' => [
            'heading' => 'El cuerpo del correo está restringido',
            'description' => 'Puedes ver el asunto. El cuerpo completo está oculto. Solicita acceso para ver más.',
        ],
        'private' => [
            'heading' => 'Este correo es privado',
            'description' => 'Solo el propietario del correo puede ver este contenido.',
        ],
        'request_hint' => 'Selecciona :action arriba para pedir más acceso.',
        'request_pending' => 'Tu solicitud de acceso está pendiente.',
    ],
    'reader' => [
        'heading' => 'Ver correo',
        'internal' => 'Correo interno. Solo los miembros del espacio de trabajo pueden verlo.',
        'unknown_sender' => '(remitente desconocido)',
        'no_body' => '(mensaje sin cuerpo)',
        'attachments' => [
            'unnamed' => 'Archivo sin nombre',
            'processing' => 'procesando…',
        ],
    ],
    'back_to_list' => 'Volver a la lista',
    'recipients' => [
        'from' => 'De',
        'to' => 'para',
        'to_heading' => 'Para',
        'cc' => 'cc',
        'cc_heading' => 'Cc',
        'more' => '{1}y 1 más|[2,*]y :count más',
        'details' => 'Remitente y destinatarios',
    ],
    'row_actions' => [
        'label' => 'Acciones del correo',
    ],
    'mark_all_read' => [
        'label' => 'Marcar todo como leído',
    ],
    'reply_forward' => [
        'modal_headings' => [
            'reply_all' => 'Responder a todos',
            'forward' => 'Reenviar',
            'reply' => 'Responder',
        ],
        'notifications' => [
            'queued' => [
                'title' => 'Correo en cola',
            ],
        ],
    ],
    'sharing' => [
        'label' => 'Compartir',
        'modal_heading' => 'Ajustes de uso compartido',
        'fields' => [
            'privacy_tier' => [
                'label' => '¿Quién puede ver este correo?',
            ],
            'shares' => [
                'label' => 'Compartir con compañeros concretos',
                'description' => 'Da a personas concretas más acceso del que permite el ajuste anterior.',
                'add_action_label' => 'Añadir compañero',
                'new_item' => 'Nuevo compañero',
            ],
            'shared_with' => [
                'label' => 'Compañero',
                'placeholder' => 'Elige un compañero…',
            ],
            'tier' => [
                'label' => 'Nivel de acceso',
            ],
        ],
        'notifications' => [
            'saved' => [
                'title' => 'Ajustes de uso compartido guardados.',
            ],
        ],
    ],
    'request_access' => [
        'label' => 'Solicitar acceso',
        'fields' => [
            'tier_requested' => [
                'label' => 'Nivel de acceso solicitado',
            ],
        ],
        'notifications' => [
            'pending' => [
                'title' => 'Ya tienes una solicitud pendiente para este correo.',
            ],
            'sent' => [
                'title' => 'Solicitud de acceso enviada.',
            ],
        ],
    ],
    'compose_form' => [
        'signature' => [
            'label' => 'Firma',
        ],
    ],
];
