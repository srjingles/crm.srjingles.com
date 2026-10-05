<?php

declare(strict_types=1);

return [
    'form' => [
        'workspace_name' => [
            'label' => 'Nombre del espacio de trabajo',
        ],
        'workspace_slug' => [
            'label' => 'Slug del espacio de trabajo',
            'helper_text' => 'Solo letras minúsculas, números y guiones.',
        ],
        'emails' => [
            'label' => 'Direcciones de correo',
            'placeholder' => 'nombre@empresa.com, companero@empresa.com',
            'helper' => 'Separa varias direcciones con una coma, un espacio o un salto de línea.',
        ],
        'invite_as' => [
            'label' => 'Invitar como',
        ],
        'role' => [
            'label' => 'Rol',
        ],
        'workspace_logo' => [
            'label' => 'Logotipo del espacio de trabajo',
        ],
    ],

    'sections' => [
        'update_workspace_name' => [
            'title' => 'Nombre del espacio de trabajo',
            'description' => 'El nombre del espacio de trabajo y los datos de su propietario.',
        ],
        'update_workspace_logo' => [
            'title' => 'Logotipo del espacio de trabajo',
            'description' => 'Tu logotipo aparece en el selector de espacios de trabajo, en las invitaciones y en la página para unirse.',
        ],
        'invite_people' => [
            'description' => 'Cada persona recibe un correo con un enlace para unirse a :workspace.',
        ],
        'add_workspace_member' => [
            'title' => 'Invitar a personas',
            'description' => 'Envía una invitación por correo o comparte un enlace para que la gente se una por su cuenta.',
        ],
        'workspace_members' => [
            'title' => 'Miembros',
            'description' => 'Todos los que tienen acceso a este espacio de trabajo, incluidas las personas que aún no han aceptado.',
        ],
        'delete_workspace' => [
            'title' => 'Eliminar espacio de trabajo',
            'description' => 'Programa la eliminación de este espacio de trabajo.',
            'notice' => 'Al eliminar este espacio de trabajo, se programará su borrado definitivo tras un periodo de gracia de 30 días. Puedes cancelar la eliminación en cualquier momento antes de esa fecha. Pasado el periodo de gracia, todos los recursos y datos se borrarán de forma permanente.',
            'scheduled_notice' => 'La eliminación de este espacio de trabajo está programada para el :date.',
        ],
    ],

    'actions' => [
        'save' => 'Guardar',
        'invite_people' => 'Invitar a miembros',
        'send_invitations' => 'Enviar invitaciones',
        'invite_link' => 'Enlace de invitación',
        'close' => 'Cerrar',
        'copy_invite_link' => 'Copiar enlace',
        'rotate_invite_link' => 'Generar un enlace nuevo',
        'disable_invite_link' => 'Desactivar el enlace',
        'enable_invite_link' => 'Activar el enlace',
        'update_workspace_role' => 'Cambiar rol',
        'compare_roles' => 'Comparar roles',
        'compare_roles_help_link' => 'Ver el detalle completo',
        'remove_workspace_member' => 'Quitar',
        'leave_workspace' => 'Salir',
        'resend_workspace_invitation' => 'Reenviar',
        'revoke_workspace_invitation' => 'Revocar',
        'delete_workspace' => 'Eliminar espacio de trabajo',
        'cancel_deletion' => 'Cancelar eliminación',
    ],

    'notifications' => [
        'workspace_invitation_sent' => [
            'success' => 'Invitación enviada.',
        ],
        'workspace_invitation_revoked' => [
            'success' => 'Invitación revocada.',
        ],
        'workspace_member_removed' => [
            'success' => 'Has quitado a este miembro.',
        ],
        'leave_workspace' => [
            'success' => 'Has salido del espacio de trabajo.',
        ],
        'permission_denied' => [
            'cannot_promote_to_admin' => 'Solo el propietario del espacio de trabajo puede conceder o retirar el acceso de administrador.',
            'cannot_remove_workspace_member' => 'No tienes permiso para quitar a este miembro.',
            'cannot_delete_workspace' => 'No tienes permiso para eliminar este espacio de trabajo.',
            'cannot_cancel_workspace_deletion' => 'No tienes permiso para cancelar la eliminación de este espacio de trabajo.',
        ],
        'role_updated' => [
            'success' => 'Rol actualizado.',
        ],
        'invite_link_role_updated' => [
            'success' => 'Quien se una con este enlace tendrá ahora el rol :role.',
        ],
        'invite_link_rotated' => [
            'success' => 'Se ha generado un enlace de invitación nuevo. El anterior ya no funciona.',
        ],
        'invite_link_disabled' => [
            'success' => 'El enlace del espacio de trabajo está desactivado. Invita a la gente por correo.',
        ],
        'invite_link_enabled' => [
            'success' => 'El enlace del espacio de trabajo está activado. Cualquiera que lo abra puede unirse.',
        ],
        'resend_throttled' => 'Espera :seconds segundos antes de reenviar.',
        'some_invites_failed' => [
            'title' => 'No se han podido enviar algunas invitaciones',
        ],
        'invite_rate_limited' => [
            'title' => 'Demasiadas invitaciones enviadas',
            'body' => 'Espera :seconds segundos antes de enviar más invitaciones.',
        ],
    ],

    'validation' => [
        'email_already_invited' => 'Este usuario ya ha sido invitado al espacio de trabajo.',
        'email_already_member' => 'Este usuario ya pertenece al espacio de trabajo.',
        'only_owner_promotes_admins' => 'Solo el propietario del espacio de trabajo puede conceder el rol de administrador.',
        'invite_link_role_cannot_be_admin' => 'El enlace del espacio de trabajo no puede conceder el rol de administrador. Invita a los administradores por correo.',
        'no_valid_emails' => 'Introduce al menos una dirección de correo.',
        'too_many_invites' => 'Puedes invitar a un máximo de :max personas a la vez.',
        'remove_members_before_deleting' => 'Quita a todos los miembros de estos espacios de trabajo, o elimínalos, antes de eliminar tu cuenta: :workspaces',
    ],

    'modals' => [
        'update_workspace_role' => [
            'description' => ':name (:email)',
        ],
        'leave_workspace' => [
            'notice' => '¿Seguro que quieres salir de este espacio de trabajo?',
        ],
        'delete_workspace' => [
            'notice' => 'Se programará la eliminación del espacio de trabajo. Tendrás 30 días para cancelarla antes de que todos los datos se borren de forma permanente.',
        ],
        'rotate_invite_link' => [
            'heading' => '¿Generar un enlace de invitación nuevo?',
            'notice' => 'El enlace actual deja de funcionar al instante. Quien lo tenga todavía, en un chat o en un correo, no podrá unirse.',
        ],
        'disable_invite_link' => [
            'heading' => '¿Desactivar el enlace del espacio de trabajo?',
            'notice' => 'Nadie podrá unirse con el enlace actual mientras esté desactivado. Al volver a activarlo se genera un enlace distinto, así que el antiguo deja de servir.',
        ],
        'cancel_deletion' => [
            'heading' => '¿Cancelar la eliminación del espacio de trabajo?',
            'notice' => 'Se conservarán el espacio de trabajo y todos sus datos.',
        ],
    ],

    'edit_workspace' => 'Ajustes del espacio de trabajo',

    'tabs' => [
        'general' => 'General',
        'members' => 'Miembros',
        'custom_fields' => 'Campos personalizados',
        'email' => 'Correo y calendario',
        'import_history' => 'Historial de importaciones',
        'activity' => 'Actividad',
        'billing' => 'Facturación',
    ],

    'activity' => [
        'system' => 'Sistema',
        'search_placeholder' => 'Buscar por nombre del registro',
        'record_destroyed' => 'Este registro se ha eliminado de forma permanente.',
        'yes' => 'Sí',
        'no' => 'No',
        'columns' => [
            'created_at' => 'Cuándo',
            'causer' => 'Quién',
            'source' => 'Origen',
            'event' => 'Acción',
            'subject_type' => 'Tipo',
            'record' => 'Registro',
            'changes' => 'Cambios',
        ],
        'filters' => [
            'event' => 'Acción',
            'subject_type' => 'Tipo',
            'causer' => 'Quién',
            'source' => 'Origen',
            'from' => 'Desde',
            'until' => 'Hasta',
        ],
        'events' => [
            'created' => 'Creado',
            'updated' => 'Actualizado',
            'deleted' => 'Eliminado',
            'restored' => 'Restaurado',
            'imported' => 'Importado',
            'import_failed' => 'Importación fallida',
        ],
        'types' => [
            'company' => 'Empresa',
            'people' => 'Persona',
            'opportunity' => 'Oportunidad',
            'task' => 'Tarea',
            'note' => 'Nota',
            'custom_field' => 'Campo personalizado',
            'custom_field_option' => 'Opción de campo personalizado',
            'import' => 'Importación',
        ],
        'import_counts' => [
            'created' => ':count creados',
            'updated' => ':count actualizados',
            'skipped' => ':count omitidos',
            'failed' => ':count fallidos',
        ],
        'via_import' => 'Mediante la importación :file',
        'via_source' => 'Mediante :source',
        'empty' => [
            'heading' => 'Aún no hay actividad',
            'description' => 'Aquí aparecerán los cambios que tus miembros hagan en los registros.',
        ],
        'changes_modal' => [
            'trigger' => 'Ver todos los cambios',
            'close' => 'Cerrar',
        ],
        'no_results' => [
            'heading' => 'Nada coincide con estos filtros',
            'description' => 'Prueba con otro término de búsqueda o amplía el rango de fechas.',
            'action' => 'Borrar filtros',
        ],
    ],

    'roles' => [
        'owner' => [
            'label' => 'Propietario',
        ],
        'admin' => [
            'label' => 'Administrador',
            'description' => 'Gestiona miembros, campos personalizados y ajustes de correo. Puede eliminar registros de forma permanente',
        ],
        'member' => [
            'label' => 'Miembro',
            'description' => 'Crea y edita registros, y los envía a la papelera',
        ],
        'viewer' => [
            'label' => 'Lector',
            'description' => 'Lo ve todo y no cambia nada',
        ],
    ],

    'capabilities' => [
        'records' => [
            'view' => ['label' => 'Ver registros'],
            'create' => ['label' => 'Crear registros'],
            'update' => ['label' => 'Actualizar registros'],
            'delete' => ['label' => 'Eliminar y restaurar registros'],
            'force_delete' => ['label' => 'Eliminar registros de forma permanente'],
        ],
        'data' => [
            'import' => ['label' => 'Importar datos'],
            'export' => ['label' => 'Exportar datos'],
        ],
        'members' => [
            'manage' => ['label' => 'Invitar, quitar y cambiar el rol de los miembros'],
            'promote_admin' => ['label' => 'Nombrar administrador a alguien'],
        ],
        'fields' => [
            'manage' => ['label' => 'Gestionar campos personalizados'],
        ],
        'billing' => [
            'manage' => ['label' => 'Gestionar la facturación'],
        ],
        'workspace' => [
            'manage' => ['label' => 'Renombrar o eliminar el espacio de trabajo'],
        ],
        'email' => [
            'manage' => ['label' => 'Gestionar los ajustes de correo del espacio de trabajo'],
        ],
        'activity' => [
            'view' => ['label' => 'Ver el registro de actividad'],
        ],
    ],

    'role_matrix' => [
        'capability_column' => 'Permiso',
        'granted' => 'Incluido',
        'not_granted' => 'No incluido',
        'opens_in_new_tab' => '(se abre en una pestaña nueva)',
    ],

    'table' => [
        'user' => 'Usuario',
        'role' => 'Rol',
        'status' => 'Estado',
        'search_placeholder' => 'Buscar por nombre o correo',
        'invite_pending' => 'Invitación pendiente',
        'invite_expired' => 'Invitación caducada',
        'expires_in' => 'Caduca en :time',
        'expired_ago' => 'Caducó hace :time',
        'expired' => 'Caducada',
        'no_results' => [
            'heading' => 'Nadie coincide con esa búsqueda',
            'description' => 'Prueba con parte de un nombre o con la dirección de correo que invitaste.',
        ],
    ],

    'invitation' => [
        'members' => '{1} 1 persona ya está en este espacio de trabajo|[2,*] :count personas ya están en este espacio de trabajo',
    ],

    'invite_link' => [
        'heading' => 'Enlace de invitación',
        'description' => 'Comparte un solo enlace en lugar de escribir direcciones. Cualquiera que lo abra se une a este espacio de trabajo.',
        'url' => 'Enlace del espacio de trabajo',
        'copied' => 'Enlace copiado.',
        'expires_in' => 'Deja de funcionar en :time. Al generar un enlace nuevo, el plazo vuelve a empezar.',
        'default_role' => 'Las personas se unen como',
        'default_role_helper' => 'Se guarda en cuanto lo eliges. A los administradores se les invita por correo.',
        'lapsed' => [
            'title' => 'Este enlace caducó hace :time',
            'notice' => 'Nadie puede unirse con él. Genera un enlace nuevo para seguir invitando a gente.',
        ],
        'disabled' => [
            'title' => 'El enlace del espacio de trabajo está desactivado',
            'notice' => 'Solo se puede entrar con una invitación por correo. Al activar el enlace se genera uno nuevo.',
        ],
        'join' => [
            'heading' => 'Unirte a :workspace',
            'body' => 'Te unirás con acceso de :role.',
            'joining_as' => 'Te unes como',
            'action' => 'Unirme al espacio de trabajo',
            'decline' => 'Ahora no',
        ],
        'expired' => [
            'heading' => 'Enlace de invitación caducado',
            'body' => 'Este enlace de invitación ha caducado. Pide al propietario del espacio de trabajo que comparta uno nuevo.',
            'action' => 'Ir a mi espacio de trabajo',
        ],
    ],

    'pending_for_user' => [
        'heading' => 'Te han invitado a unirte a :workspace',
        'detail_with_inviter' => ':inviter te ha invitado con acceso de :role.',
        'detail' => 'Te unirás con acceso de :role.',
        'accept' => 'Unirme al espacio de trabajo',
        'decline' => 'Rechazar',
        'declined' => 'Invitación rechazada.',
    ],

    'accept' => [
        'joined' => 'Te has unido al espacio de trabajo :workspace.',
        'already_member' => 'Ya eres miembro de :workspace.',
        'no_longer_valid' => 'Esa invitación ya no es válida. Puede que se haya revocado o que haya caducado.',
        'account_deleting' => 'No puedes aceptar invitaciones mientras tu cuenta tenga una eliminación programada.',
        'workspace_deleting' => 'Este espacio de trabajo tiene una eliminación programada y no admite miembros nuevos.',
        'ready' => [
            'heading' => 'Unirte a :workspace',
            'body_with_inviter' => ':inviter te ha invitado a unirte a :workspace con acceso de :role.',
            'body' => 'Te han invitado a unirte a :workspace con acceso de :role.',
            'action' => 'Unirme a :workspace',
            'decline' => 'Ahora no',
        ],
        'wrong_account' => [
            'heading' => 'Esta invitación es para otra cuenta',
            'body' => 'Esta invitación se envió a :invited, pero has iniciado sesión como :current.',
            'switch' => 'Cerrar sesión y cambiar de cuenta',
            'stay' => 'Ir a mi espacio de trabajo',
        ],
        'expired' => [
            'heading' => 'La invitación ya no es válida',
            'body' => 'Esta invitación ha caducado o ya se ha aceptado.',
            'action' => 'Ir a mi espacio de trabajo',
        ],
    ],
];
