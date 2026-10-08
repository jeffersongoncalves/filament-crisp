<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Einstellungen',
    'title' => 'Crisp-Einstellungen',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Konfigurieren Sie den Crisp-Live-Chat für Ihre Website.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'Website-ID',
            'helper' => 'Ihre Crisp-Website-ID (eine UUID). Zu finden in Crisp unter Settings > Website Settings > Setup & Integrations. Leer lassen, um den Chat auszublenden.',
        ],
        'identify_users' => [
            'label' => 'Angemeldete Benutzer identifizieren',
            'helper' => 'Übermittelt Name und E-Mail des angemeldeten Benutzers an den Chat, damit Ihre Mitarbeiter wissen, mit wem sie sprechen.',
        ],
        'only_when_open' => [
            'label' => 'Nur während der Öffnungszeiten',
            'helper' => 'Blendet den Chat außerhalb der Zeiten aus jeffersongoncalves/laravel-open-hours aus. Wird ignoriert, wenn das Paket nicht installiert ist.',
        ],
    ],
];
