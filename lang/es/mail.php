<?php

declare(strict_types=1);

return [
    'fallback_link' => 'Si el botón no funciona, copia este enlace en tu navegador:',

    'footer' => [
        'settings' => 'Ajustes de notificaciones',
        'unsubscribe' => 'Darse de baja del resumen diario',
        'copyright' => '© :year :company',
        'reason' => [
            'owner' => 'Recibes este correo porque eres el propietario del espacio de trabajo :workspace.',
            'member' => 'Recibes este correo porque eres miembro de :workspace.',
            'former_member' => 'Recibes este correo porque eras miembro de :workspace.',
            'digest' => 'Recibes este correo porque activaste el resumen diario.',
            'assignee' => 'Recibes este correo porque te asignaron una tarea en :workspace.',
            'invitee' => 'Recibes este correo porque se invitó a :email a :workspace.',
            'contact' => 'Recibes este correo porque alguien envió el formulario de contacto.',
            'account' => 'Recibes este correo por una solicitud en tu cuenta de :company.',
            'onboarding' => 'Recibes este correo porque creaste un espacio de trabajo en :company.',
        ],
    ],

    'unsubscribe' => [
        'title' => 'Darse de baja',
        'heading' => '¿Dejar de recibir el resumen diario?',
        'body' => 'Dejarás de recibir el resumen matutino de tareas en :email. Puedes volver a activarlo en los ajustes de notificaciones.',
        'confirm' => 'Darme de baja',
        'done_heading' => 'Te has dado de baja',
        'done_body' => 'El resumen diario está desactivado para :email.',
        'settings' => 'Ajustes de notificaciones',
    ],

    'trial_ending' => [
        'subject' => 'Tu prueba de Pro termina en 3 días',
        'preheader' => 'Conserva todos los modelos de IA y 2000 créditos por un precio único',
        'heading' => 'Quedan 3 días de Pro para :workspace',
        'ends_on' => 'Tu prueba de Pro de 14 días termina el :date.',
        'keeps' => 'Con Pro conservas todos los modelos de IA, 2000 créditos al mes y límites de uso más altos.',
        'flat_price' => 'No se paga por usuario. Un precio único cubre todo el espacio de trabajo.',
        'grandfathered' => 'Si no haces nada, :workspace vuelve a su plan Cloud Free heredado. Tus datos no se tocan.',
        'paused' => 'Si no haces nada, el acceso a Cloud se pausa cuando termine la prueba. Tus datos se conservan y puedes suscribirte cuando quieras para seguir donde lo dejaste.',
        'cta' => 'Seguir con Pro',
    ],

    'pro_ended' => [
        'trial_ended' => [
            'subject' => 'Tu prueba de Pro ha terminado',
            'heading' => 'Tu prueba de Pro para :workspace ha terminado',
        ],
        'subscription_ended' => [
            'subject' => 'Tu suscripción a Cloud Pro ha terminado',
            'heading' => 'Cloud Pro para :workspace ha terminado',
        ],
        'preheader' => 'Tus registros están a salvo. Suscríbete para reabrir el espacio de trabajo.',
        'preheader_grandfathered' => 'Tu espacio de trabajo vuelve a su plan Cloud Free.',
        'paused' => 'El acceso a Cloud para :workspace está en pausa. Tus registros están a salvo y no se ha eliminado nada.',
        'restore' => 'Suscríbete a Cloud Pro para reabrir la aplicación, la API REST, el servidor MCP y el asistente de IA justo donde lo dejaste.',
        'grandfathered' => ':workspace vuelve a su plan Cloud Free heredado. Tus datos no se tocan y puedes volver a Pro cuando quieras.',
        'cta' => 'Suscribirme a Pro',
        'cta_grandfathered' => 'Pasar a Pro',
    ],

    'setup_nudge' => [
        'subject' => 'Tu espacio de trabajo te espera',
        'preheader' => 'Un paso pone en marcha :workspace: :step',
        'heading' => ':name, :workspace está listo para tus propios registros',
        'step' => 'Siguiente paso: :step.',
        'cta' => 'Continuar en :assistant',
    ],

    'task_assigned' => [
        'subject' => 'Nueva tarea: :title',
        'preheader' => 'Te la han asignado en :workspace',
        'preheader_without_workspace' => 'Te han asignado una tarea',
        'heading' => 'Tienes una tarea nueva',
        'workspace_label' => 'Espacio de trabajo',
        'cta' => 'Ver tarea',
    ],

    'task_digest' => [
        'subject' => 'Tus tareas para el :date',
        'preheader' => ':overdue vencidas, :due para hoy',
        'heading' => 'Tareas de hoy, :name',
        'overdue' => 'Vencidas',
        'due_today' => 'Para hoy',
        'due' => 'Vence el :date',
        'cta' => 'Ver todas mis tareas',
    ],

    'workspace_invitation' => [
        'subject' => ':inviter te ha invitado a :workspace',
        'subject_without_inviter' => 'Te han invitado a :workspace',
        'preheader' => 'Únete a :workspace en Relaticle como :role',
        'heading' => 'Únete a :workspace',
        'line_with_inviter' => ':inviter te ha invitado al espacio de trabajo :workspace en Relaticle con acceso de :role.',
        'line' => 'Te han invitado al espacio de trabajo :workspace en Relaticle con acceso de :role.',
        'expiry' => 'Esta invitación caduca :expiry.',
        'ignore' => '¿No te lo esperabas? Ignora este correo.',
        'cta' => 'Aceptar invitación',
    ],

    'workspace_deletion_scheduled' => [
        'subject' => 'Se ha programado la eliminación de :workspace',
        'preheader' => 'Se elimina el :date. Puedes cancelarlo antes',
        'heading' => ':workspace se eliminará el :date',
        'removes' => 'Después de esa fecha se eliminan las personas, empresas, tareas, oportunidades, notas y el resto de registros de :workspace.',
        'cancel' => 'Puedes cancelarlo desde los ajustes del espacio de trabajo en cualquier momento antes de esa fecha.',
        'cta' => 'Cancelar eliminación',
    ],

    'workspace_deletion_reminder' => [
        'subject' => ':workspace se elimina en :days día|:workspace se elimina en :days días',
        'preheader' => 'Último aviso antes del :date',
        'heading' => 'Queda :days día para que se elimine :workspace|Quedan :days días para que se elimine :workspace',
        'final' => 'Este es el último aviso. Todo lo que hay en :workspace se elimina después del :date.',
        'cancel' => 'Puedes cancelarlo desde los ajustes del espacio de trabajo en cualquier momento antes de esa fecha.',
        'cta' => 'Cancelar eliminación',
    ],

    'workspace_deletion_cancelled' => [
        'subject' => 'Eliminación de :workspace cancelada',
        'preheader' => 'Tus datos están a salvo',
        'heading' => ':workspace se queda',
        'body' => 'Se ha cancelado la eliminación programada de :workspace. No se ha eliminado nada.',
        'cta' => 'Abrir :workspace',
    ],

    'workspace_member_removed' => [
        'subject' => 'Te han quitado de :workspace',
        'preheader' => 'Ya no tienes acceso a este espacio de trabajo',
        'heading' => 'Te han quitado de :workspace',
        'body' => 'Tu acceso a :workspace y a sus registros ha terminado. Tus otros espacios de trabajo no se ven afectados.',
        'cta' => 'Abrir Relaticle',
    ],

    'account_deletion_scheduled' => [
        'subject' => 'Se ha programado la eliminación de tu cuenta',
        'preheader' => 'Se elimina el :date. Inicia sesión para cancelarlo',
        'heading' => 'Tu cuenta se eliminará el :date',
        'removes' => 'Después de esa fecha se eliminan tu perfil y todos los espacios de trabajo de los que eres propietario.',
        'cancel' => '¿Has cambiado de idea? Inicia sesión antes de esa fecha y la eliminación se cancela.',
        'cta' => 'Conservar mi cuenta',
    ],

    'account_deletion_reminder' => [
        'subject' => 'Tu cuenta se elimina en :days día|Tu cuenta se elimina en :days días',
        'preheader' => 'Último aviso antes del :date',
        'heading' => 'Queda :days día para que se elimine tu cuenta|Quedan :days días para que se elimine tu cuenta',
        'final' => 'Este es el último aviso. Tu cuenta y sus datos se eliminan después del :date.',
        'cancel' => 'Inicia sesión antes de esa fecha y la eliminación se cancela.',
        'cta' => 'Conservar mi cuenta',
    ],

    'account_deletion_cancelled' => [
        'subject' => 'Tu cuenta se queda',
        'preheader' => 'Eliminación cancelada, datos intactos',
        'heading' => 'Bienvenido de nuevo, :name',
        'body' => 'Se ha cancelado la eliminación programada de tu cuenta. No se ha eliminado nada.',
        'cta' => 'Abrir Relaticle',
    ],

    'verify_email' => [
        'subject' => 'Verifica tu correo',
        'preheader' => 'Un clic y terminas el registro',
        'heading' => 'Verifica tu dirección de correo',
        'body' => 'Confirma esta dirección para terminar de configurar tu cuenta de Relaticle.',
        'ignore' => '¿No te has registrado? Ignora este correo.',
        'cta' => 'Verificar correo',
    ],

    'verify_email_change' => [
        'subject' => 'Confirma tu nuevo correo',
        'preheader' => 'Confirma :email para completar el cambio',
        'heading' => 'Confirma :email',
        'body' => 'Has pedido usar :email en tu cuenta de :company. Confírmalo para completar el cambio. Este enlace caduca en :count minutos.',
        'ignore' => '¿No lo has pedido tú? Ignora este correo y tu dirección actual se mantiene.',
        'cta' => 'Confirmar nuevo correo',
    ],

    'email_code' => [
        'expires' => 'Este código caduca en :count minutos.',
        'browser_hint' => 'Introduce este código en la pestaña del navegador donde empezaste.',
        'latest_only' => 'Solo funciona el último código que pediste.',
        'unsolicited' => '¿No lo has pedido tú? Puedes ignorar este correo.',
        'purposes' => [
            'signup' => [
                'subject' => 'Tu código de registro de Relaticle',
                'preheader' => 'Usa este código para terminar de crear tu cuenta',
                'heading' => 'Confirma tu dirección de correo',
                'body' => 'Introduce este código para terminar de crear tu cuenta de Relaticle.',
            ],
            'verify_email' => [
                'subject' => 'Tu código de verificación de Relaticle',
                'preheader' => 'Usa este código para verificar tu correo',
                'heading' => 'Confirma tu dirección de correo',
                'body' => 'Introduce este código para verificar el correo de tu cuenta de Relaticle.',
            ],
            'sign_in' => [
                'subject' => 'Tu código de inicio de sesión de Relaticle',
                'preheader' => 'Usa este código para iniciar sesión',
                'heading' => 'Confirma que eres tú',
                'body' => 'Introduce este código para iniciar sesión en tu cuenta de Relaticle.',
            ],
            'confirm_identity' => [
                'subject' => 'Tu código de confirmación de Relaticle',
                'preheader' => 'Usa este código para continuar',
                'heading' => 'Confirma tu identidad',
                'body' => 'Introduce este código para continuar con tu cuenta de Relaticle.',
            ],
            'change_email' => [
                'subject' => 'Tu código de cambio de correo de Relaticle',
                'preheader' => 'Usa este código para confirmar tu nuevo correo',
                'heading' => 'Confirma tu nuevo correo',
                'body' => 'Introduce este código para terminar de cambiar el correo de tu cuenta de Relaticle.',
            ],
            'enable_email_sign_in' => [
                'subject' => 'Tu código de inicio de sesión por correo de Relaticle',
                'preheader' => 'Usa este código para activar el inicio de sesión por correo',
                'heading' => 'Confirma tu dirección de correo',
                'body' => 'Introduce este código para activar el inicio de sesión por correo en tu cuenta de Relaticle.',
            ],
        ],
    ],

    'email_change_notice' => [
        'subject' => 'Solicitud de cambio de correo',
        'preheader' => '¿Has sido tú? Si no, bloquéalo',
        'heading' => 'Alguien ha pedido cambiar tu correo a :email',
        'body' => 'Alguien con la sesión iniciada en tu cuenta ha pedido cambiar su correo. Cuando se confirme :email, pasará a ser la dirección de tu cuenta.',
        'block' => 'Si no has sido tú, bloquea el cambio ahora, cierra sesión en las demás sesiones y cambia tu contraseña.',
        'cta' => 'Bloquear este cambio',
    ],

    'reset_password' => [
        'subject' => 'Restablece tu contraseña',
        'preheader' => 'Este enlace caduca en :count minutos',
        'heading' => 'Restablece tu contraseña',
        'body' => 'Elige una nueva contraseña para tu cuenta de Relaticle. Este enlace caduca en :count minutos.',
        'ignore' => '¿No has pedido restablecerla? Ignora este correo y tu contraseña se mantiene.',
        'cta' => 'Restablecer contraseña',
    ],

    'contact_submission' => [
        'subject' => 'Nuevo mensaje de contacto: :name',
        'preheader' => ':company, :email',
        'preheader_without_company' => ':email',
        'heading' => 'Nuevo mensaje del formulario de contacto',
        'name' => 'Nombre',
        'email' => 'Correo',
        'company' => 'Empresa',
        'cta' => 'Responder a :name',
    ],
];
