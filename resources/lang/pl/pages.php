<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Ustawienia',
    'title' => 'Ustawienia Crisp',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Skonfiguruj czat na żywo Crisp w swojej witrynie.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID witryny',
            'helper' => 'ID witryny w Crisp (UUID). Znajdziesz go w Crisp w Settings > Website Settings > Setup & Integrations. Pozostaw puste, aby ukryć czat.',
        ],
        'identify_users' => [
            'label' => 'Identyfikuj zalogowanych użytkowników',
            'helper' => 'Wysyła imię i e-mail zalogowanego użytkownika do czatu, aby konsultanci wiedzieli, z kim rozmawiają.',
        ],
        'only_when_open' => [
            'label' => 'Tylko w godzinach otwarcia',
            'helper' => 'Ukrywa czat poza godzinami z jeffersongoncalves/laravel-open-hours. Ignorowane, gdy ten pakiet nie jest zainstalowany.',
        ],
    ],
];
