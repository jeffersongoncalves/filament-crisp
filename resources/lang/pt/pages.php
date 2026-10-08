<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Definições',
    'title' => 'Definições do Crisp',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Configure o chat em direto do Crisp no seu site.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID do site',
            'helper' => 'O ID do site no Crisp (um UUID). Encontre-o em Crisp, em Settings > Website Settings > Setup & Integrations. Deixe vazio para ocultar o chat.',
        ],
        'identify_users' => [
            'label' => 'Identificar utilizadores autenticados',
            'helper' => 'Envia o nome e o e-mail do utilizador autenticado para o chat, para os agentes saberem com quem estão a falar.',
        ],
        'only_when_open' => [
            'label' => 'Apenas no horário de atendimento',
            'helper' => 'Oculta o chat fora do horário definido no jeffersongoncalves/laravel-open-hours. Ignorado quando esse pacote não está instalado.',
        ],
    ],
];
