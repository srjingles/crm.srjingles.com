<?php

declare(strict_types=1);

return [
    'sharing_confirmation' => [
        'heading' => '¿Actualizar el uso compartido de los correos existentes?',
        'description' => 'Se actualizarán todos los correos sincronizados que sigan tu opción predeterminada de compartir. Los correos que cambiaste uno a uno se quedan como están. Nuevo nivel: :tier.',
        'full_access_description' => 'El acceso completo comparte el cuerpo, el asunto y los adjuntos con todo tu espacio de trabajo. Se aplica a todos los correos sincronizados que sigan tu opción predeterminada de compartir. Los correos que cambiaste uno a uno se quedan como están.',
        'full_access_label' => 'Escribe ":phrase" para confirmar',
        'phrase' => 'Lo entiendo',
        'phrase_mismatch' => 'Escribe ":phrase" tal cual para confirmar.',
    ],
    'sharing_preference' => [
        'heading' => 'Mi preferencia para compartir correos',
        'description' => 'Sustituye la opción predeterminada del espacio de trabajo para los correos que sincronizas. Los cambios se aplican a los correos ya sincronizados que sigan tu opción predeterminada. Los correos que cambiaste uno a uno se quedan como están.',
        'tier_label' => 'Nivel de uso compartido predeterminado',
        'use_workspace_default' => 'Usar la opción del espacio de trabajo',
        'workspace_default_description' => 'Sigue lo que haya configurado el espacio de trabajo. Ahora mismo: :tier',
    ],
    'actions' => [
        'save' => 'Guardar',
    ],
    'notifications' => [
        'saved' => 'Ajustes de privacidad del correo guardados.',
    ],
];
