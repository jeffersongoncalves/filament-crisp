<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Settings',
    'title' => 'Crisp Settings',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Configure the Crisp live chat widget for your site.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'Website ID',
            'helper' => 'Your Crisp website ID (a UUID). Find it in Crisp under Settings > Website Settings > Setup & Integrations. Leave empty to hide the chat.',
        ],
        'identify_users' => [
            'label' => 'Identify signed-in users',
            'helper' => 'Send the name and email of the signed-in user to the chat, so your agents know who they are talking to.',
        ],
        'only_when_open' => [
            'label' => 'Only during opening hours',
            'helper' => 'Hide the chat outside the schedule of jeffersongoncalves/laravel-open-hours. Ignored when that package is not installed.',
        ],
    ],
];
