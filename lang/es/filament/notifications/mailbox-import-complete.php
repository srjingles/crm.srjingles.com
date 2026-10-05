<?php

declare(strict_types=1);

return [
    'title' => 'Importación completada',
    'title_with_issues' => 'Importación terminada con incidencias',
    'body' => 'Importación completada: :imported.',
    'body_with_issues' => 'Importación terminada con incidencias: :imported. :failures',
    'imported_emails' => '{0}:count correos|{1}:count correo|[2,*]:count correos',
    'imported_calendar_events' => '{0}:count eventos de calendario|{1}:count evento de calendario|[2,*]:count eventos de calendario',
    'imported_with_calendar' => ':emails y :events',
    'imported_without_calendar' => ':emails',
    'failed_messages' => '{1}No se ha podido importar :count mensaje|[2,*]No se han podido importar :count mensajes',
    'failed_calendar_events' => '{1}No se ha podido importar :count evento de calendario|[2,*]No se han podido importar :count eventos de calendario',
    'calendar_did_not_finish' => 'La importación del calendario no ha terminado.',
    'retry_success' => [
        'title' => 'Reintento de importación completado',
        'body' => 'Se han importado los mensajes que faltaban de :email. Ya hay :imported en Relaticle.',
    ],
    'actions' => [
        'retry' => 'Reintentar',
    ],
    'retry' => [
        'queued' => [
            'title' => 'Reintento en cola.',
            'body' => 'Estamos reintentando lo que no se pudo importar. Te avisaremos cuando termine.',
        ],
        'unavailable' => [
            'title' => 'Reintento no disponible',
            'body' => 'No hay importaciones fallidas que reintentar en esta importación.',
        ],
    ],
    'mail' => [
        'subject' => 'La importación de tu buzón ha terminado',
        'subject_with_issues' => 'La importación de tu buzón ha terminado con incidencias',
        'retry_subject' => 'El reintento de importación de tu buzón ha salido bien',
        'greeting' => 'Hola, :name:',
        'line' => 'Importación completada: :imported importados desde :email. El correo nuevo se seguirá sincronizando automáticamente.',
        'line_with_issues' => 'Importación terminada con incidencias: :imported importados desde :email. :failures',
        'retry_line' => 'Hemos importado los mensajes que faltaban de :email. Ya hay :imported en Relaticle.',
    ],
];
