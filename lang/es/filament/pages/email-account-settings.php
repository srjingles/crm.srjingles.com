<?php

declare(strict_types=1);

return [
    'subheading' => 'Actualiza los permisos y ajustes de tu cuenta.',
    'tabs' => [
        'general' => 'General',
        'sharing' => 'Compartir',
        'blocklist' => 'Lista de bloqueo del buzón',
        'signatures' => 'Firmas',
    ],
    'sharing' => [
        'label' => 'Uso compartido del correo',
        'use_workspace_default' => 'Usar el valor predeterminado del espacio de trabajo',
        'hint' => 'Lo que ve tu espacio de trabajo. Se aplica a todos tus buzones y a los correos ya sincronizados que siguen tu valor predeterminado.',
        'workspace_default_description' => 'Sigue lo que tenga configurado el espacio de trabajo. Ahora mismo: :tier',
    ],
    'blocklist' => [
        'label' => 'Direcciones y dominios bloqueados',
        'emails_label' => 'Direcciones bloqueadas',
        'emails_placeholder' => 'noisy@example.com',
        'emails_after_label' => 'Pulsa Intro para añadir cada dirección.',
        'domains_label' => 'Dominios bloqueados',
        'domains_placeholder' => 'example.com',
        'domains_after_label' => 'Pulsa Intro para añadir cada dominio.',
        'include_subdomains_label' => 'Incluir subdominios',
        'include_subdomains_hint' => 'Oculta también el correo de direcciones como user@mail.example.com cuando bloqueas example.com.',
        'include_subdomains_column' => 'Subdominios',
        'include_subdomains_short' => 'Incluir subdominios',
        'hint' => 'Solo se oculta en este buzón. Las demás cuentas conectadas no se ven afectadas.',
        'add' => 'Añadir a la lista de bloqueo',
        'empty_heading' => 'Aún no hay direcciones ni dominios',
        'empty_description' => 'Los correos de los dominios y direcciones bloqueados no aparecerán en este buzón.',
        'notifications' => [
            'added' => 'Lista de bloqueo actualizada.',
            'deleted' => 'Entrada eliminada de la lista de bloqueo.',
        ],
    ],
    'signatures' => [
        'label' => 'Firmas',
        'hint' => 'Se usan al redactar desde esta cuenta.',
        'add' => 'Añadir firma',
        'empty_heading' => 'Aún no hay firmas',
        'empty_description' => 'Crea una firma para añadirla a los correos que envías desde esta cuenta.',
    ],
    'actions' => [
        'save' => 'Guardar cambios',
    ],
    'notifications' => [
        'saved' => 'Ajustes de la cuenta guardados.',
    ],
];
