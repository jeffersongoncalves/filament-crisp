<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Налаштування',
    'title' => 'Налаштування Crisp',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Налаштуйте онлайн-чат Crisp для вашого сайту.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID сайту',
            'helper' => 'ID сайту в Crisp (UUID). Його можна знайти в Crisp у розділі Settings > Website Settings > Setup & Integrations. Залиште порожнім, щоб приховати чат.',
        ],
        'identify_users' => [
            'label' => 'Ідентифікувати користувачів, що увійшли',
            'helper' => 'Передає в чат ім’я та e-mail користувача, що увійшов, щоб оператори знали, з ким говорять.',
        ],
        'only_when_open' => [
            'label' => 'Лише в робочі години',
            'helper' => 'Приховує чат поза розкладом jeffersongoncalves/laravel-open-hours. Ігнорується, якщо пакет не встановлено.',
        ],
    ],
];
