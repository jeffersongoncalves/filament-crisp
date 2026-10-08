<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Настройки',
    'title' => 'Настройки Crisp',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Настройте онлайн-чат Crisp для вашего сайта.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID сайта',
            'helper' => 'ID сайта в Crisp (UUID). Его можно найти в Crisp в разделе Settings > Website Settings > Setup & Integrations. Оставьте пустым, чтобы скрыть чат.',
        ],
        'identify_users' => [
            'label' => 'Идентифицировать вошедших пользователей',
            'helper' => 'Передаёт в чат имя и e-mail вошедшего пользователя, чтобы операторы знали, с кем говорят.',
        ],
        'only_when_open' => [
            'label' => 'Только в рабочие часы',
            'helper' => 'Скрывает чат вне расписания jeffersongoncalves/laravel-open-hours. Игнорируется, если пакет не установлен.',
        ],
    ],
];
