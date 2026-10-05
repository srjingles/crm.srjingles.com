<?php

declare(strict_types=1);

return [
    'title' => 'Bandeja de salida',
    'columns' => [
        'recipients' => 'Destinatarios',
        'scheduled_for' => 'Programado para',
        'type' => 'Tipo',
    ],
    'priorities' => [
        'priority' => 'Correo individual',
        'bulk' => 'Envío masivo',
    ],
    'batch_statuses' => [
        'queued' => 'En cola',
        'sending' => 'Enviando',
        'completed' => 'Completado',
        'partial_failure' => 'Fallo parcial',
    ],
    'tabs' => [
        'queued' => 'En cola',
        'scheduled' => 'Programados',
        'sending' => 'Enviando',
        'failed' => 'Fallidos',
        'sent' => 'Enviados en las últimas 24 horas',
    ],
    'actions' => [
        'reschedule_field' => 'Enviar el',
        'bulk_cancel' => 'Cancelar seleccionados',
    ],
    'notifications' => [
        'cancelled' => 'Cancelado',
        'rescheduled' => 'Reprogramado',
        'retry_queued' => 'Reintento en cola',
        'bulk_cancelled' => '{1}1 correo cancelado|[2,*]:count correos cancelados',
        'bulk_cancelled_with_skipped' => 'Cancelados :cancelled, omitidos :skipped que ya se estaban enviando',
    ],
];
