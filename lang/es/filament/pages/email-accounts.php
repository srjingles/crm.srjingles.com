<?php

declare(strict_types=1);

return [
    'title' => 'Cuentas de correo y calendario',
    'navigation_label' => 'Cuentas',
    'subheading' => 'Gestiona y sincroniza tus cuentas de correo y calendario para tenerlo todo en orden.',
    'actions' => [
        'connect_gmail' => 'Conectar cuenta de Google',
        'connect_azure' => 'Conectar cuenta de Microsoft',
        'manage' => 'Gestionar',
        'edit_settings' => 'Editar ajustes',
        'reconnect' => 'Volver a conectar',
        'set_default' => 'Establecer como predeterminada',
        'retry_sync' => 'Reintentar sincronización',
        'disconnect' => 'Desconectar cuenta',
        'sync_calendar' => [
            'enable_label' => 'Sincronizar calendario',
            'disable_label' => 'Desactivar sincronización del calendario',
            'enable_heading' => 'Activar sincronización del calendario',
            'disable_heading' => 'Desactivar sincronización del calendario',
            'disable_description' => 'Se dejarán de sincronizar los eventos del calendario de esta cuenta.',
            'enable_description' => 'Te redirigiremos a :provider para que concedas acceso al calendario.',
            'fallback_provider' => 'el proveedor',
        ],
        'sync_calendar_now' => 'Sincronizar ahora',
        'reimport_history' => [
            'label' => 'Volver a importar historial',
            'heading' => '¿Volver a importar el historial de la cuenta?',
            'description' => 'El correo y los eventos ya sincronizados se mantienen en Relaticle. Crearemos las personas y empresas que falten según el ajuste actual de creación de registros del espacio de trabajo, e importaremos los mensajes que aún no estén guardados. En un buzón grande puede tardar un rato.',
        ],
        'retry_failed_import' => [
            'label' => 'Reintentar',
        ],
    ],
    'settings' => [
        'sync_inbox' => [
            'label' => 'Sincronizar bandeja de entrada',
            'helper_text' => 'Trae a Relaticle los correos que recibes.',
        ],
        'sync_sent' => [
            'label' => 'Sincronizar enviados',
            'helper_text' => 'Trae a Relaticle los correos que envías desde esta cuenta.',
        ],
        'hourly_send_limit' => [
            'label' => 'Límite de envíos por hora',
            'placeholder' => 'Predeterminado: :default',
            'helper_text' => 'Déjalo en blanco para usar el valor predeterminado del espacio de trabajo.',
        ],
        'daily_send_limit' => [
            'label' => 'Límite de envíos diario',
            'placeholder' => 'Predeterminado: :default',
            'helper_text' => 'Déjalo en blanco para usar el valor predeterminado del espacio de trabajo.',
        ],
        'modal_heading' => 'Ajustes de la cuenta',
        'submit_label' => 'Guardar',
    ],
    'notifications' => [
        'connected' => [
            'title' => 'Cuenta conectada.',
            'body' => 'Los correos y las reuniones irán apareciendo a medida que avance la importación.',
        ],
        'calendar_sync_queued' => [
            'title' => 'Sincronización del calendario iniciada.',
            'body' => 'Tus reuniones se actualizarán en esta página cuando termine la sincronización.',
        ],
        'disconnected' => [
            'title' => 'Cuenta desconectada.',
            'body' => 'Se han eliminado la cuenta y sus firmas.',
        ],
        'default_set' => [
            'title' => 'Cuenta predeterminada actualizada.',
            'body' => ':email es ahora tu cuenta de envío predeterminada.',
        ],
        'reimport_queued' => [
            'title' => 'Importación del historial en cola.',
            'body' => 'Las personas y empresas irán apareciendo a medida que avance la importación. Puedes seguir usando Relaticle.',
        ],
        'sync_retry_queued' => [
            'title' => 'Reintento de sincronización en cola.',
            'body' => 'Estamos recuperando lo que no se pudo guardar. Esta página se actualiza cuando termina.',
        ],
        'retry_failed_import_queued' => [
            'title' => 'Reintento en cola.',
            'body' => 'Estamos reintentando los mensajes que no se pudieron importar. Esta página se actualiza cuando terminan.',
        ],
        'retry_failed_import_unavailable' => [
            'title' => 'Reintento no disponible',
            'body' => 'Esta importación no tiene importaciones fallidas que reintentar.',
        ],
    ],
    'default_badge' => 'Predeterminada',
    'sections' => [
        'connected' => [
            'heading' => 'Cuentas conectadas',
            'description' => 'Consulta cómo tratamos tus datos en nuestra <a href=":url" target="_blank" class="underline">Política de privacidad</a>.',
        ],
    ],
    'synced_at' => 'Sincronizado :time',
    'in_sync' => 'Sincronizado',
    'sync_error' => [
        'badge' => 'Problema de sincronización',
        'heading' => 'Algunos elementos no se pudieron sincronizar',
    ],
    'importing' => 'Sincronizando',
    'importing_percent' => ':percent%',
    'importing_count' => '{1}:count correo|[2,*]:count correos',
    'statuses' => [
        'active' => 'Activa',
        'error' => 'Problema de sincronización',
        'disconnected' => 'Desconectada',
        'reauth_required' => 'Hay que volver a conectar',
    ],
    'history_import' => [
        'processed' => ':processed de :total procesados',
        'successful_jobs' => ':count importados correctamente',
    ],
    'history_import_failure' => [
        'max_attempts' => 'Este mensaje no se pudo guardar tras varios intentos. Usa Reintentar arriba. Si sigue fallando, espera unos minutos y vuelve a intentarlo.',
    ],
    'capabilities' => [
        'email' => 'Correo',
        'calendar' => 'Calendario',
    ],
    'not_connected' => [
        'inbox' => [
            'heading' => 'Envía correos desde Relaticle',
            'description' => 'Conecta tu cuenta de correo para leer y responder sin salir de Relaticle. Además tendrás envíos masivos, plantillas y archivos adjuntos.',
        ],
        'record' => [
            'heading' => 'Ten los correos en el registro',
            'description' => 'Conecta tu cuenta de correo para ver todas las conversaciones con este registro y responder con un clic.',
        ],
        'meetings' => [
            'heading' => 'Ve tus reuniones en Relaticle',
            'description' => 'Conecta tu cuenta para seguir tus reuniones junto a tus registros del CRM.',
        ],
    ],
];
