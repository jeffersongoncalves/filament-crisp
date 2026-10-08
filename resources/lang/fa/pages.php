<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'تنظیمات',
    'title' => 'تنظیمات Crisp',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'گفتگوی زنده Crisp را برای سایت خود پیکربندی کنید.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'شناسه وب‌سایت',
            'helper' => 'شناسه وب‌سایت شما در Crisp (یک UUID). آن را در Crisp در بخش Settings > Website Settings > Setup & Integrations پیدا کنید. برای پنهان کردن گفتگو خالی بگذارید.',
        ],
        'identify_users' => [
            'label' => 'شناسایی کاربران واردشده',
            'helper' => 'نام و ایمیل کاربر واردشده را به گفتگو می‌فرستد تا کارشناسان بدانند با چه کسی صحبت می‌کنند.',
        ],
        'only_when_open' => [
            'label' => 'فقط در ساعات کاری',
            'helper' => 'گفتگو را خارج از برنامه jeffersongoncalves/laravel-open-hours پنهان می‌کند. اگر این بسته نصب نباشد نادیده گرفته می‌شود.',
        ],
    ],
];
