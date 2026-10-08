<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Configurações',
    'title' => 'Configurações do Crisp',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Configure o chat ao vivo do Crisp no seu site.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID do site',
            'helper' => 'O ID do site no Crisp (um UUID). Encontre-o em Crisp, em Settings > Website Settings > Setup & Integrations. Deixe vazio para ocultar o chat.',
        ],
        'identify_users' => [
            'label' => 'Identificar usuários conectados',
            'helper' => 'Envia o nome e o e-mail do usuário conectado ao chat, para os atendentes saberem com quem estão falando.',
        ],
        'only_when_open' => [
            'label' => 'Somente no horário de atendimento',
            'helper' => 'Oculta o chat fora do horário definido no jeffersongoncalves/laravel-open-hours. Ignorado quando esse pacote não está instalado.',
        ],
    ],
];
