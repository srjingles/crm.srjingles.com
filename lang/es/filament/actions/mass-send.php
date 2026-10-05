<?php

declare(strict_types=1);

return [
    'label' => 'Enviar correo',

    'notifications' => [
        'no_recipients' => [
            'title' => 'No hay destinatarios válidos',
            'body' => 'Ninguna de las personas seleccionadas tiene dirección de correo.',
        ],
        'skipped' => [
            'title' => 'Se han omitido algunos destinatarios',
            'body' => '{1}1 registro seleccionado no tiene dirección de correo y no se ha añadido.|[2,*]:count registros seleccionados no tienen dirección de correo y no se han añadido.',
        ],
    ],
];
