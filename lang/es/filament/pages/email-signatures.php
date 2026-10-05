<?php

declare(strict_types=1);

return [
    'title' => 'Firmas',
    'heading' => 'Firmas de correo',
    'default_badge' => 'Predeterminada',
    'empty' => 'Aún no hay firmas. Selecciona :action para añadir una.',
    'actions' => [
        'create' => 'Nueva firma',
        'edit' => 'Editar',
        'delete' => 'Eliminar',
    ],
    'fields' => [
        'connected_account' => 'Cuenta de correo',
        'name' => 'Nombre de la firma',
        'content' => 'Contenido de la firma',
        'is_default' => 'Usar como predeterminada en esta cuenta',
    ],
    'notifications' => [
        'created' => 'Firma creada.',
        'updated' => 'Firma actualizada.',
        'deleted' => 'Firma eliminada.',
    ],
];
