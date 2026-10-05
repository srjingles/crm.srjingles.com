<?php

declare(strict_types=1);

return [
    'title' => '{1}Correo no enviado|[2,*]:count correos no enviados',
    'retry' => [
        'body_one' => '«:subject» no se ha enviado. Revísalo en la pestaña Fallidos y vuelve a intentarlo.',
        'body_many' => 'Revísalos en la pestaña Fallidos y vuelve a intentarlo.',
        'action' => 'Ver correos fallidos',
    ],
    'reconnect' => [
        'body_one' => '«:subject» no se ha enviado porque hay que volver a conectar su buzón. Vuelve a conectarlo y reintenta el envío desde la pestaña Fallidos.',
        'body_many' => 'Hay que volver a conectar su buzón. Vuelve a conectarlo y reintenta el envío desde la pestaña Fallidos.',
        'action' => 'Volver a conectar la cuenta',
    ],
    'reasons' => [
        'mailbox_needs_reconnect' => 'Hay que volver a conectar el buzón antes de poder enviar este correo.',
    ],
];
