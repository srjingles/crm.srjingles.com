<?php

declare(strict_types=1);

return [
    'logo' => [
        'description' => 'PNG, JPEG o WebP, hasta :max.',
        'upload' => 'Subir',
        'replace' => 'Reemplazar',
        'remove' => 'Quitar',
        'failed' => 'No se ha podido subir. Inténtalo de nuevo.',
    ],
    'errors' => [
        'busy' => 'La subida se está procesando. Inténtalo de nuevo en breve.',
        'too_large' => 'El archivo supera los :max MB.',
        'mime_not_allowed' => 'No se aceptan archivos de tipo :mime. Permitidos: :allowed.',
        'extension_missing' => 'Añade una extensión al nombre del archivo. Permitidas: :allowed.',
        'unreachable' => 'No se ha podido obtener la URL.',
        'url_not_allowed' => 'Solo se pueden obtener URL https públicas en el puerto 443.',
        'not_found' => 'No se ha encontrado la subida o ha caducado.',
        'rate_limited' => 'Has alcanzado el límite de subidas: 60 por hora por espacio de trabajo. Inténtalo más tarde.',
        'invalid_base64' => 'No se ha podido decodificar el contenido base64.',
        'no_source' => 'Indica exactamente uno de estos: source_url, base64 con filename, o upload_id.',
        'invalid_retention' => 'El periodo de retención debe ser de al menos una hora.',
    ],
];
