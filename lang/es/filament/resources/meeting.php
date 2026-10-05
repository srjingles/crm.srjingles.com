<?php

declare(strict_types=1);

return [
    'navigation_label' => 'Reuniones',
    'view' => [
        'heading' => 'Reunión',
    ],
    'time' => [
        'all_day' => 'Todo el día',
    ],
    'sections' => [
        'participants' => [
            'heading' => 'Participantes',
            'empty' => 'Sin participantes',
        ],
        'linked_records' => [
            'heading' => 'Registros vinculados',
            'empty' => [
                'heading' => 'No hay registros vinculados',
                'description' => 'Vincula personas, empresas u oportunidades a esta reunión.',
            ],
        ],
        'description' => [
            'heading' => 'Descripción',
        ],
    ],
    'attendees' => [
        'host' => 'Anfitrión',
        'guest' => 'Invitado',
        'show_more' => 'Ver más',
        'show_less' => 'Ver menos',
    ],
    'actions' => [
        'link_records' => [
            'label' => 'Vincular registros',
        ],
        'rsvp' => [
            'label' => 'Responder',
            'accepted' => [
                'label' => 'Aceptar',
            ],
            'tentative' => [
                'label' => 'Quizás',
            ],
            'declined' => [
                'label' => 'Rechazar',
                'heading' => '¿Rechazar esta reunión?',
                'description' => 'Tu calendario se actualiza como rechazada. La reunión sigue en el calendario del resto de invitados.',
            ],
        ],
    ],
    'linked_record_types' => [
        'people' => 'Persona',
        'companies' => 'Empresa',
        'opportunities' => 'Oportunidad',
    ],
    'fields' => [
        'record_type' => [
            'label' => 'Tipo',
        ],
        'record' => [
            'label' => 'Registro',
        ],
        'organizer' => [
            'label' => 'Organizador',
        ],
        'email_address' => [
            'label' => 'Correo',
        ],
        'html_link' => [
            'label' => 'Abrir en el calendario',
        ],
    ],

    'columns' => [
        'starts_at' => [
            'label' => 'Hora',
        ],
        'organizer_name' => [
            'label' => 'Organizador',
        ],
        'attendees_count' => [
            'label' => 'Asistentes',
        ],
        'people_count' => [
            'label' => 'Personas',
        ],
        'companies_count' => [
            'label' => 'Empresas',
        ],
        'opportunities_count' => [
            'label' => 'Oportunidades',
        ],
        'response_status' => [
            'label' => 'Mi respuesta',
        ],
    ],

    'filters' => [
        'response_status' => [
            'label' => 'Mi respuesta',
        ],
    ],

    'notifications' => [
        'rsvp' => [
            'accepted' => [
                'title' => 'Invitación aceptada. Tu calendario está actualizado.',
            ],
            'tentative' => [
                'title' => 'Marcada como quizás. Tu calendario está actualizado.',
            ],
            'declined' => [
                'title' => 'Invitación rechazada. Tu calendario está actualizado.',
            ],
            'failed' => [
                'title' => 'No se ha podido actualizar tu respuesta.',
                'body' => 'Vuelve a conectar el buzón e inténtalo de nuevo.',
            ],
            'not_synced' => [
                'title' => 'No se ha podido actualizar tu respuesta.',
                'body' => 'Esta reunión aún no aparece en tu calendario. Inténtalo de nuevo en un momento.',
            ],
        ],
    ],

    'empty_state' => [
        'heading' => 'Aún no hay reuniones',
        'description' => 'Aquí aparecen las reuniones de tu calendario sincronizado.',
    ],
];
