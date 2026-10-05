<?php

declare(strict_types=1);

return [
    'create_workspace' => [
        'label' => 'Crear espacio de trabajo',
        'steps' => [
            'workspace' => 'Espacio de trabajo',
            'attribution' => 'Origen',
            'use_case' => 'Caso de uso',
        ],
        'actions' => [
            'continue' => 'Continuar',
            'get_started' => 'Empezar',
            'cancel' => 'Cancelar',
            'skip' => 'Omitir',
            'back' => 'Atrás',
        ],

        'headings' => [
            'workspace' => 'Crea tu espacio de trabajo',
            'attribution' => '¿Cómo nos has conocido?',
            'attribution_description' => 'Indica dónde conociste Relaticle. Este paso es opcional.',
            'use_case' => 'Ayúdanos a personalizar tu espacio de trabajo',
            'use_case_description' => 'Con Relaticle puedes construir exactamente el CRM que necesitas, por complejo que sea.',
            'use_case_hint' => 'Cuéntanos tu caso de uso para empezar con plantillas, o empieza desde cero.',
        ],
        'form' => [
            'your_name' => [
                'label' => 'Tu nombre',
                'placeholder' => 'Lucía García',
            ],
            'company_logo' => [
                'label' => 'Logotipo de la empresa',
            ],
            'workspace_name' => [
                'label' => 'Nombre de la empresa',
                'placeholder' => 'Escribe el nombre de tu empresa',
            ],
            'workspace_handle' => [
                'label' => 'Identificador del espacio de trabajo',
                'placeholder' => 'mi-espacio',
                'helper_text' => 'Solo se permiten letras minúsculas, números y guiones.',
            ],
            'use_case_label' => '¿Para qué vas a usar Relaticle?',
            'use_case_validation_attribute' => 'caso de uso',
            'use_case_context_label' => 'Elige lo que se aplique a tu caso.',
            'use_case_context_validation_attribute' => 'detalles del caso de uso',
            'other_use_case_label' => '¿Qué vas a gestionar?',
            'other_use_case_placeholder' => 'Candidatos, donantes, compradores mayoristas',
            'other_use_case_validation_attribute' => 'qué vas a gestionar',
            'referral_detail_label' => '¿Qué asistente fue?',
            'referral_prompt_label' => '¿Qué le preguntaste?',
            'referral_prompt_placeholder' => 'Un CRM de código abierto para un equipo comercial pequeño',
            'referral_prompt_validation_attribute' => 'qué preguntaste',
        ],
        'notifications' => [
            'workspace_created' => [
                'title' => 'Espacio de trabajo creado',
                'body' => 'Tu espacio de trabajo ":name" está listo.',
            ],
            'workspace_limit_reached' => [
                'title' => 'Límite de espacios de trabajo alcanzado',
                'body' => 'Ya eres propietario del número máximo de espacios de trabajo. Elimina uno o pide que te inviten a un espacio de trabajo existente.',
            ],
        ],
        'preview' => [
            'company_placeholder' => 'Tu empresa',
        ],
        'validation' => [
            'context_required' => 'Elige al menos una opción para el caso de uso seleccionado.',
            'context_invalid' => 'Una de las opciones elegidas no corresponde al caso de uso seleccionado.',
            'referral_detail_invalid' => 'El asistente elegido no corresponde al origen seleccionado.',
        ],
    ],
];
