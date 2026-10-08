<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Configuración',
    'title' => 'Configuración de Crisp',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Configura el chat en vivo de Crisp en tu sitio.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID del sitio web',
            'helper' => 'El ID del sitio web en Crisp (un UUID). Encuéntralo en Crisp, en Settings > Website Settings > Setup & Integrations. Déjalo vacío para ocultar el chat.',
        ],
        'identify_users' => [
            'label' => 'Identificar a los usuarios conectados',
            'helper' => 'Envía el nombre y el correo del usuario conectado al chat, para que tus agentes sepan con quién hablan.',
        ],
        'only_when_open' => [
            'label' => 'Solo en horario de atención',
            'helper' => 'Oculta el chat fuera del horario de jeffersongoncalves/laravel-open-hours. Se ignora si ese paquete no está instalado.',
        ],
    ],
];
