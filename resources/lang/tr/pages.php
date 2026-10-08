<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Ayarlar',
    'title' => 'Crisp ayarları',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Siteniz için Crisp canlı sohbetini yapılandırın.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'Web sitesi kimliği',
            'helper' => 'Crisp web sitesi kimliğiniz (bir UUID). Crisp içinde Settings > Website Settings > Setup & Integrations altında bulunur. Sohbeti gizlemek için boş bırakın.',
        ],
        'identify_users' => [
            'label' => 'Oturum açmış kullanıcıları tanımla',
            'helper' => 'Oturum açmış kullanıcının adını ve e-postasını sohbete gönderir; böylece temsilcileriniz kiminle konuştuğunu bilir.',
        ],
        'only_when_open' => [
            'label' => 'Yalnızca çalışma saatlerinde',
            'helper' => 'jeffersongoncalves/laravel-open-hours çalışma saatleri dışında sohbeti gizler. Paket yüklü değilse yok sayılır.',
        ],
    ],
];
