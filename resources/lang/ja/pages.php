<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => '設定',
    'title' => 'Crisp 設定',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'サイトの Crisp ライブチャットを設定します。',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ウェブサイト ID',
            'helper' => 'Crisp のウェブサイト ID（UUID）。 Crisp の Settings > Website Settings > Setup & Integrations で確認できます。 チャットを非表示にするには空のままにします。',
        ],
        'identify_users' => [
            'label' => 'ログイン中のユーザーを識別',
            'helper' => 'ログイン中のユーザーの名前とメールアドレスをチャットに送信し、担当者が相手を把握できるようにします。',
        ],
        'only_when_open' => [
            'label' => '営業時間中のみ',
            'helper' => 'jeffersongoncalves/laravel-open-hours の営業時間外はチャットを非表示にします。パッケージ未インストール時は無視されます。',
        ],
    ],
];
