<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'सेटिंग्स',
    'title' => 'Crisp सेटिंग्स',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'अपनी साइट के लिए Crisp लाइव चैट कॉन्फ़िगर करें।',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'वेबसाइट ID',
            'helper' => 'आपकी Crisp वेबसाइट ID (एक UUID)। इसे Crisp में Settings > Website Settings > Setup & Integrations में पाएँ। चैट छिपाने के लिए खाली छोड़ें।',
        ],
        'identify_users' => [
            'label' => 'साइन-इन उपयोगकर्ताओं की पहचान करें',
            'helper' => 'साइन-इन उपयोगकर्ता का नाम और ईमेल चैट को भेजता है, ताकि आपके एजेंट जानें कि वे किससे बात कर रहे हैं।',
        ],
        'only_when_open' => [
            'label' => 'केवल कार्य समय में',
            'helper' => 'jeffersongoncalves/laravel-open-hours के समय के बाहर चैट छिपाता है। पैकेज इंस्टॉल न होने पर अनदेखा किया जाता है।',
        ],
    ],
];
