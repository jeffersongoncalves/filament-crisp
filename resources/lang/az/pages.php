<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Parametrlər',
    'title' => 'Crisp parametrləri',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Saytınız üçün Crisp canlı çatını tənzimləyin.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'Sayt ID',
            'helper' => 'Crisp sayt ID-niz (UUID). Crisp daxilində Settings > Website Settings > Setup & Integrations bölməsində tapılır. Çatı gizlətmək üçün boş buraxın.',
        ],
        'identify_users' => [
            'label' => 'Daxil olmuş istifadəçiləri tanı',
            'helper' => 'Daxil olmuş istifadəçinin adını və e-poçtunu çata göndərir ki, operatorlarınız kiminlə danışdıqlarını bilsin.',
        ],
        'only_when_open' => [
            'label' => 'Yalnız iş saatlarında',
            'helper' => 'jeffersongoncalves/laravel-open-hours cədvəlindən kənarda çatı gizlədir. Paket quraşdırılmayıbsa nəzərə alınmır.',
        ],
    ],
];
