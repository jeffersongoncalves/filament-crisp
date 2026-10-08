<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Instellingen',
    'title' => 'Crisp-instellingen',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Configureer de Crisp-livechat voor je site.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'Website-ID',
            'helper' => 'Je Crisp-website-ID (een UUID). Te vinden in Crisp onder Settings > Website Settings > Setup & Integrations. Laat leeg om de chat te verbergen.',
        ],
        'identify_users' => [
            'label' => 'Ingelogde gebruikers identificeren',
            'helper' => 'Stuurt de naam en het e-mailadres van de ingelogde gebruiker naar de chat, zodat je medewerkers weten met wie ze praten.',
        ],
        'only_when_open' => [
            'label' => 'Alleen tijdens openingstijden',
            'helper' => 'Verbergt de chat buiten de openingstijden van jeffersongoncalves/laravel-open-hours. Wordt genegeerd als dat pakket niet is geïnstalleerd.',
        ],
    ],
];
