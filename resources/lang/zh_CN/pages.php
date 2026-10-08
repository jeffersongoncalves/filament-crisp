<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => '设置',
    'title' => 'Crisp 设置',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => '为你的网站配置 Crisp 在线聊天。',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => '网站 ID',
            'helper' => '你的 Crisp 网站 ID（UUID）。 可在 Crisp 的 Settings > Website Settings > Setup & Integrations 中找到。 留空则隐藏聊天。',
        ],
        'identify_users' => [
            'label' => '识别已登录用户',
            'helper' => '将已登录用户的姓名和邮箱发送到聊天，让客服知道正在与谁交谈。',
        ],
        'only_when_open' => [
            'label' => '仅在营业时间内',
            'helper' => '在 jeffersongoncalves/laravel-open-hours 的营业时间之外隐藏聊天。未安装该包时忽略。',
        ],
    ],
];
