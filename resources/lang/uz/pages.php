<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Sozlamalar',
    'title' => 'Crisp sozlamalari',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Saytingiz uchun Crisp jonli chatini sozlang.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'Sayt ID',
            'helper' => 'Crisp sayt ID’ingiz (UUID). Crisp ichida Settings > Website Settings > Setup & Integrations bo‘limida topasiz. Chatni yashirish uchun bo‘sh qoldiring.',
        ],
        'identify_users' => [
            'label' => 'Tizimga kirgan foydalanuvchilarni aniqlash',
            'helper' => 'Tizimga kirgan foydalanuvchining ismi va e-pochtasini chatga yuboradi, shunda operatorlar kim bilan gaplashayotganini biladi.',
        ],
        'only_when_open' => [
            'label' => 'Faqat ish vaqtida',
            'helper' => 'jeffersongoncalves/laravel-open-hours jadvalidan tashqarida chatni yashiradi. Paket o‘rnatilmagan bo‘lsa, e’tiborga olinmaydi.',
        ],
    ],
];
