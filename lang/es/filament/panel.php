<?php

declare(strict_types=1);

return [
    'actions' => [
        'delete_record' => 'Eliminar registro',
    ],

    'user_menu' => [
        'profile' => 'Perfil',
        'settings' => 'Ajustes',
    ],

    'settings_layout' => [
        'back_to_app' => 'Volver a la app',
    ],

    'impersonation' => [
        'banner' => 'Sesión iniciada como :name (:email) para dar soporte.',
        'stop' => 'Salir',
    ],

    'navigation_groups' => [
        'tasks' => 'Tareas',
    ],

    'sidebar' => [
        'resize' => 'Cambiar el tamaño de la barra lateral',
    ],

    'payload_too_large' => 'Ese cambio es demasiado grande para guardarlo. Acorta el contenido e inténtalo de nuevo.',

    'selects' => [
        'member_self' => ':name (tú)',
    ],

    'restore_blocked' => [
        'title' => 'No se puede restaurar :record',
        'conflict' => ':value en :field ahora pertenece a :holder.',
        'fix' => ':conflict Cámbialo o quítalo allí y vuelve a restaurar.',
        'bulk_title' => '{1} No se ha restaurado :count registro|[2,*] No se han restaurado :count registros',
        'bulk_line' => ':record: :conflict',
        'conflict_with_unknown_holder' => ':value en :field ahora pertenece a otro registro.',
    ],
];
