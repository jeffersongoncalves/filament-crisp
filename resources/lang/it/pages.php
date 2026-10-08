<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Impostazioni',
    'title' => 'Impostazioni di Crisp',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Configura la chat dal vivo di Crisp per il tuo sito.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID del sito',
            'helper' => 'L\'ID del sito Crisp (un UUID). Lo trovi in Crisp, in Settings > Website Settings > Setup & Integrations. Lascia vuoto per nascondere la chat.',
        ],
        'identify_users' => [
            'label' => 'Identifica gli utenti connessi',
            'helper' => 'Invia nome ed e-mail dell\'utente connesso alla chat, così i tuoi operatori sanno con chi stanno parlando.',
        ],
        'only_when_open' => [
            'label' => 'Solo negli orari di apertura',
            'helper' => 'Nasconde la chat fuori dagli orari di jeffersongoncalves/laravel-open-hours. Ignorato se il pacchetto non è installato.',
        ],
    ],
];
