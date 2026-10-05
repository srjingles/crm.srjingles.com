<?php

declare(strict_types=1);

return [
    'columns' => [
        'id' => 'ID',
        'workspace' => 'Espacio de trabajo',
        'account_owner' => 'Responsable de la cuenta',
        'creator' => 'Creado por',
        'creation_source' => 'Origen de creación',
        'created_at' => 'Fecha de creación',
        'updated_at' => 'Última actualización',
        'deleted_at' => 'Fecha de eliminación',
        'company_name' => 'Nombre de la empresa',
        'people_count' => 'Número de personas',
        'opportunities_count' => 'Número de oportunidades',
        'opportunity_name' => 'Nombre de la oportunidad',
        'company' => 'Empresa',
        'contact_person' => 'Persona de contacto',
        'notes_count' => 'Número de notas',
        'tasks_count' => 'Número de tareas',
    ],

    'notifications' => [
        'completed' => [
            'company' => [
                'body' => 'La exportación de empresas ha terminado. Se han exportado :rows.',
                'failed' => 'No se han podido exportar :rows.',
            ],
            'note' => [
                'body' => 'La exportación de notas ha terminado. Se han exportado :rows.',
                'failed' => 'No se han podido exportar :rows.',
            ],
            'opportunity' => [
                'body' => 'La exportación de oportunidades ha terminado. Se han exportado :rows.',
                'failed' => 'No se han podido exportar :rows.',
            ],
            'people' => [
                'body' => 'La exportación de personas ha terminado. Se han exportado :rows.',
                'failed' => 'No se han podido exportar :rows.',
            ],
            'task' => [
                'body' => 'La exportación de tareas ha terminado. Se han exportado :rows.',
                'failed' => 'No se han podido exportar :rows.',
            ],
        ],
    ],
];
