<?php

declare(strict_types=1);

return [
    'activation' => [
        'heading' => 'Primeros pasos',
        'progress' => ':completed/:total pasos completados',
        'dismiss' => 'Descartar',
        'collapse' => 'Contraer la lista',
        'more_actions' => 'Más acciones',
        'encouragement' => '¡Vamos allá!',
        'invite_members' => 'Invitar a compañeros',
        'sample_data' => 'Este espacio de trabajo incluye registros de ejemplo para que puedas echar un vistazo. Todo lo que añadas convive con ellos.',
        'remove_sample_data' => 'Quitar datos de ejemplo',
        'remove_sample_data_confirm' => '¿Eliminar todos los registros de ejemplo? Tus propios registros se mantienen.',
        'steps' => [
            'first_record' => [
                'label' => 'Añade tu primera persona',
                'description' => 'Pon una persona real en el CRM y lo demás vendrá solo',
            ],
            'sync_email' => [
                'label' => 'Sincroniza tu cuenta de correo',
                'description' => 'Conecta tu cuenta de correo para traer conversaciones y reuniones al CRM',
                'syncing' => 'Sincronizando el correo…',
                'syncing_percent' => 'Sincronizando el correo (:percent%)',
            ],
            'import' => [
                'label' => 'Importa tus registros actuales',
                'description' => 'Trae un CSV de tu hoja de cálculo o de tu CRM anterior',
            ],
            'invite' => [
                'label' => 'Invita a un compañero',
                'description' => 'Un embudo compartido funciona mejor que uno privado',
            ],
            'ask_rela' => [
                'label' => 'Pregunta a Rela por tu embudo',
                'label_empty' => 'Pregunta a Rela cómo empezar',
                'description' => 'Tu asistente puede leer, redactar y actualizar registros por ti',
                'prompt' => '¿Qué hay ahora mismo en mi embudo de ventas?',
                'prompt_empty' => '¿Cómo puedes ayudarme a configurar este espacio de trabajo?',
            ],
        ],
    ],
    'meetings' => [
        'heading' => 'Reuniones',
        'empty' => [
            'title' => 'No hay reuniones',
            'description' => 'Elige otra fecha para planificar o repasar reuniones pasadas.',
            'next_with_meetings' => 'Siguiente día con reuniones',
        ],
        'disconnected' => [
            'title' => 'Convierte reuniones en oportunidades',
            'description' => 'Sincroniza tu calendario para tener el contexto de cada reunión al instante',
        ],
        'date' => [
            'today' => 'Hoy,',
            'tomorrow' => 'Mañana,',
            'yesterday' => 'Ayer,',
            'other' => ':weekday,',
        ],
        'previous_day' => 'Día anterior',
        'next_day' => 'Día siguiente',
        'pick_date' => 'Cambiar fecha, ahora :date',
        'more_actions' => 'Más acciones de la reunión',
        'go_to_today' => 'Ir a hoy',
        'calendar_settings' => 'Ajustes del calendario',
        'open' => 'Abrir reunión',
        'open_named' => 'Abrir :title',
        'expand_participants' => 'Mostrar participantes de :title',
        'collapse_participants' => 'Ocultar participantes de :title',
        'all_day' => 'Todo el día',
        'more_participants' => '+:count',
        'happening_now' => 'Ahora',
        'time_range' => ':start a :end',
        'load_more' => 'Cargar más',
        'syncing' => [
            'title' => 'Sincronizando',
            'title_with_percent' => 'Sincronizando (:percent%)',
            'description_initial' => 'Estamos procesando tu correo y los eventos de tu calendario…',
            'description_update' => 'Buscando correos nuevos y cambios en el calendario…',
            'emails_processed' => '{1}:count correo sincronizado|[2,*]:count correos sincronizados',
            'meetings_processed' => '{1}:count reunión sincronizada|[2,*]:count reuniones sincronizadas',
            'emails_updated' => '{1}:count correo nuevo|[2,*]:count correos nuevos',
            'meetings_updated' => '{1}:count reunión actualizada|[2,*]:count reuniones actualizadas',
        ],
    ],
    'tasks' => [
        'heading' => 'Tareas',
        'view_all' => 'Ver todas',
        'create_action_label' => 'Nueva tarea',
        'complete' => 'Marcar como completada',
        'empty' => [
            'title' => 'Mantén el trabajo al día',
            'description' => 'Crea tareas para ti o para tu equipo y sigue los próximos pasos',
        ],
    ],
];
