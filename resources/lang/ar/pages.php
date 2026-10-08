<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'الإعدادات',
    'title' => 'إعدادات Crisp',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'اضبط الدردشة المباشرة Crisp لموقعك.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'معرّف الموقع',
            'helper' => 'معرّف موقعك في Crisp (UUID). تجده في Crisp ضمن Settings > Website Settings > Setup & Integrations. اتركه فارغًا لإخفاء الدردشة.',
        ],
        'identify_users' => [
            'label' => 'تعريف المستخدمين المسجّلين',
            'helper' => 'يرسل اسم المستخدم المسجّل وبريده الإلكتروني إلى الدردشة ليعرف موظفوك مع من يتحدثون.',
        ],
        'only_when_open' => [
            'label' => 'فقط خلال ساعات العمل',
            'helper' => 'يخفي الدردشة خارج جدول jeffersongoncalves/laravel-open-hours. يُتجاهل إذا لم تكن الحزمة مثبتة.',
        ],
    ],
];
