<?php

declare(strict_types=1);

return [
    'title' => 'Nuevo correo',
    'title_mass_send' => 'Nuevo envío masivo',
    'opening' => 'Abriendo el editor…',
    'draft' => 'Borrador',
    'quoted' => [
        'hidden' => 'El mensaje original no se ha compartido contigo.',
    ],
    'fields' => [
        'from' => 'De',
        'to' => 'Para',
        'cc' => 'CC',
        'bcc' => 'CCO',
        'subject' => 'Asunto',
        'message' => 'Mensaje',
        'signature_none' => 'Sin firma',
        'signature_name' => 'Nombre de la firma',
        'signature_content' => 'Firma',
        'signature_default' => 'Usar como mi firma predeterminada',
        'template_none' => 'Aún no hay plantillas',
        'template_name' => 'Nombre de la plantilla',
        'template_shared' => 'Compartir con mi espacio de trabajo',
        'subject_placeholder' => 'Añade un asunto',
        'body_placeholder' => 'Escribe tu mensaje…',
        'company_team' => 'Equipo de la empresa',
        'company_team_people' => '{1}1 persona|[2,*]:count personas',
    ],
    'toolbar' => [
        'paragraph' => 'Párrafo',
        'alignment' => 'Alineación',
        'lists' => 'Listas',
    ],

    'mass_send' => [
        'summary' => '{0}Aún no hay destinatarios|{1}Enviando a 1 destinatario|[2,*]Enviando un correo independiente a cada uno de los :count destinatarios',
        'toggle' => 'Envío masivo',
        'send_button' => 'Enviar correos (:count)',
        'add_recipients' => 'Añadir destinatarios',
        'outbox_hint' => 'El tiempo de entrega dependerá de lo que haya en tu bandeja de salida.',
        'view_outbox' => 'Ver bandeja de salida',
        'no_recipients' => 'Añade al menos un destinatario antes de enviar.',
    ],
    'actions' => [
        'send' => 'Enviar correo',
        'attach' => 'Adjuntar archivos',
        'signature' => 'Firma',
        'template' => 'Usar plantilla',
        'create_signature' => 'Nueva firma',
        'create_template' => 'Guardar como plantilla',
        'variable' => 'Insertar variable',
        'remove_recipient' => 'Quitar',
        'download_attachment' => 'Descargar adjunto',
        'remove_attachment' => 'Quitar adjunto',
        'uploading' => 'Subiendo…',
        'expand' => 'Pantalla completa',
        'shrink' => 'Salir de pantalla completa',
        'minimize' => 'Minimizar',
        'restore' => 'Restaurar',
        'close' => 'Cerrar',
        'discard' => 'Descartar borrador',
        'grant_send' => [
            'label' => 'Conceder permiso',
        ],
    ],
    'grant_send' => [
        'heading' => 'Relaticle aún no puede enviar desde :email.',
        'heading_generic' => 'Relaticle aún no puede enviar desde esta cuenta.',
        'description' => 'Concede el permiso de envío para solucionarlo.',
    ],
    'notifications' => [
        'mass_queued' => [
            'title' => 'Envío masivo en cola',
            'body' => '{1}Enviando a 1 destinatario.|[2,*]Enviando a :count destinatarios.',
        ],
        'queued' => ['title' => 'Correo en cola para enviarse'],
        'signature_created' => ['title' => 'Firma creada'],
        'template_created' => ['title' => 'Plantilla guardada'],
        'attachment_too_large' => [
            'title' => 'Algunos archivos son demasiado grandes',
            'body' => 'No adjuntados: :files. Cada archivo debe ocupar menos de :max y todos los adjuntos juntos menos de :total.',
        ],
        'attachment_too_large_for_provider' => 'Cada archivo debe ocupar menos de :max y todos los adjuntos juntos menos de :total tras la codificación.',
        'attachment_unavailable' => [
            'title' => 'No se han podido incluir algunos adjuntos',
            'body' => 'No adjuntados: :files. Descárgalos del correo original y añádelos aquí si aún los necesitas.',
        ],
        'send_attachment_unavailable' => [
            'title' => 'No se han podido incluir algunos adjuntos',
            'body' => 'El correo no se ha enviado. No se han podido descargar estos archivos: :files. Quítalos o vuelve a intentar el envío.',
        ],
        'draft_account_disconnected' => [
            'title' => 'La cuenta original ya no está conectada',
            'body' => 'La cuenta desde la que se escribió este borrador ya no está conectada, así que se ha cambiado a tu cuenta predeterminada. Revisa el remitente antes de enviar.',
        ],
        'draft_saved' => [
            'title' => 'Borrador guardado',
        ],
    ],
    'validation' => [
        'body_required' => 'Escribe un mensaje antes de enviar.',
    ],
];
