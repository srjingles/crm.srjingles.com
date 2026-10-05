<?php

declare(strict_types=1);

return [
    'title' => 'Privacidad del espacio de trabajo',
    'navigation_label' => 'Privacidad del espacio de trabajo',
    'tabs' => [
        'aria' => 'Ajustes de correo del espacio de trabajo',
        'visibility' => 'Visibilidad del correo',
        'sharing' => 'Compartir',
        'record_creation' => 'Creación de registros',
    ],
    'actions' => [
        'save' => 'Guardar',
    ],
    'workspace_default' => [
        'heading' => 'Nivel de compartición predeterminado del espacio de trabajo',
        'description' => 'Se aplica a los correos sincronizados de los miembros que siguen el valor predeterminado del espacio de trabajo. Los correos existentes se actualizan al guardar, salvo los que un miembro haya cambiado de forma individual.',
        'tier_label' => 'Nivel de compartición predeterminado para las cuentas de correo conectadas',
    ],
    'visibility' => [
        'heading' => 'Visibilidad del correo',
        'description' => 'Oculta en todo Relaticle los correos y eventos de calendario en los que participan ciertos contactos.',
        'add' => 'Añadir direcciones',
        'edit_enforcement' => 'Cambiar nivel de aplicación',
        'search_placeholder' => 'Buscar direcciones o dominios',
        'empty_heading' => 'Aún no hay direcciones personalizadas',
        'empty_hint' => 'Los valores predeterminados del sistema de arriba se aplican siempre. Añade direcciones o dominios personalizados cuando necesites más cobertura.',
        'emails_label' => 'Direcciones de correo',
        'emails_placeholder' => 'p. ej. legal@acme.com',
        'emails_after_label' => 'Pulsa Intro para añadir cada dirección.',
        'domains_label' => 'Dominios',
        'domains_placeholder' => 'p. ej. acme.com',
        'domains_after_label' => 'Pulsa Intro para añadir cada dominio.',
        'include_subdomains_label' => 'Incluir subdominios',
        'include_subdomains_hint' => 'Oculta también el correo de direcciones como user@mail.example.com al añadir example.com.',
        'include_subdomains_short' => 'Incluir subdominios',
        'enforcement' => [
            'protected' => [
                'label' => 'Protegido',
                'description' => 'Se oculta solo cuando todos los participantes del correo o del evento están protegidos o bloqueados.',
            ],
            'blocked' => [
                'label' => 'Bloqueado',
                'description' => 'Se oculta siempre que este contacto participa en el correo o el evento.',
            ],
        ],
        'notifications' => [
            'added' => 'Visibilidad del correo actualizada.',
            'updated' => 'Nivel de aplicación actualizado.',
            'deleted' => 'Entrada de visibilidad eliminada.',
        ],
        'table' => [
            'address' => 'Correo / Dominio',
            'subdomains' => 'Subdominios',
            'enforcement' => 'Nivel de aplicación',
            'updated' => 'Última actualización',
            'added_by' => 'Añadido por',
            'actions' => 'Acciones',
            'members_row' => 'Direcciones de correo de los miembros del espacio de trabajo',
            'system_default' => 'Predeterminado del sistema',
            'unknown_user' => 'Desconocido',
        ],
    ],
    'blocklist' => [
        'heading' => 'Lista de bloqueo del espacio de trabajo',
        'description' => 'Los correos de estas direcciones y dominios se ocultan en todos los buzones conectados de este espacio de trabajo.',
        'add' => 'Añadir a la lista de bloqueo',
        'empty_heading' => 'Aún no hay direcciones ni dominios',
        'empty_description' => 'Los correos de los dominios y direcciones bloqueados no aparecerán en Relaticle en ningún buzón de este espacio de trabajo.',
        'emails_label' => 'Direcciones bloqueadas',
        'emails_placeholder' => 'noisy@example.com',
        'emails_after_label' => 'Pulsa Intro para añadir cada dirección.',
        'domains_label' => 'Dominios bloqueados',
        'domains_placeholder' => 'example.com',
        'domains_after_label' => 'Pulsa Intro para añadir cada dominio.',
        'notifications' => [
            'added' => 'Lista de bloqueo actualizada.',
            'deleted' => 'Entrada de la lista de bloqueo eliminada.',
        ],
        'table' => [
            'address' => 'Correo / Dominio',
            'type' => 'Tipo',
            'added_by' => 'Añadido por',
            'actions' => 'Acciones',
            'unknown_user' => 'Desconocido',
        ],
    ],
    'record_creation' => [
        'heading' => 'Creación automática de registros',
        'description' => 'Se aplica a todos los buzones y calendarios conectados del espacio de trabajo. Cambiar este ajuste solo afecta a los correos y eventos que se sincronicen a partir de ahora.',
        'recommended' => 'Recomendado',
        'modes' => [
            'all' => [
                'label' => 'Todos los contactos',
                'description' => 'Se crearán registros para todas las personas que aparezcan en los correos y eventos de calendario de los miembros de tu espacio de trabajo.',
            ],
            'selective' => [
                'label' => 'Creación selectiva',
                'description' => 'Solo se crearán registros para las personas que reciban correos de los miembros de tu espacio de trabajo o aparezcan en sus eventos de calendario.',
            ],
            'none' => [
                'label' => 'Ninguno',
                'description' => 'No se crearán registros automáticamente. Los correos y eventos de calendario se seguirán vinculando a los registros creados a mano.',
            ],
        ],
        'companies' => [
            'label' => 'Crear empresas automáticamente',
            'description' => 'Si está activado, se crea una empresa a partir del dominio del correo de una persona. Sigue el ajuste de contactos de arriba. No está disponible cuando la creación de registros es Ninguno.',
        ],
    ],
    'tiers' => [
        'private' => [
            'label' => 'Privado',
            'description' => 'No se comparte nada. Solo tú puedes ver estos correos.',
        ],
        'metadata_only' => [
            'label' => 'Solo metadatos',
            'description' => 'Tu espacio de trabajo ve los participantes y la fecha y hora.',
        ],
        'subject' => [
            'label' => 'Asunto y metadatos',
            'description' => 'Tu espacio de trabajo ve el asunto, los participantes y la fecha y hora.',
        ],
        'full' => [
            'label' => 'Acceso completo',
            'description' => 'Tu espacio de trabajo ve el cuerpo, el asunto y los adjuntos.',
        ],
    ],
    'notifications' => [
        'saved' => 'Ajustes de privacidad guardados.',
    ],
];
