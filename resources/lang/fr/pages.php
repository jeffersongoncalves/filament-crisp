<?php

return [
    'navigation_label' => 'Crisp',
    'navigation_group' => 'Paramètres',
    'title' => 'Paramètres de Crisp',
    'sections' => [
        'crisp' => [
            'heading' => 'Crisp',
            'description' => 'Configurez le chat en direct Crisp de votre site.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID du site',
            'helper' => 'L\'ID de votre site Crisp (un UUID). Vous le trouverez dans Crisp, sous Settings > Website Settings > Setup & Integrations. Laissez vide pour masquer le chat.',
        ],
        'identify_users' => [
            'label' => 'Identifier les utilisateurs connectés',
            'helper' => 'Envoie le nom et l\'e-mail de l\'utilisateur connecté au chat, pour que vos agents sachent à qui ils parlent.',
        ],
        'only_when_open' => [
            'label' => 'Uniquement pendant les heures d\'ouverture',
            'helper' => 'Masque le chat en dehors des horaires de jeffersongoncalves/laravel-open-hours. Ignoré si ce paquet n\'est pas installé.',
        ],
    ],
];
