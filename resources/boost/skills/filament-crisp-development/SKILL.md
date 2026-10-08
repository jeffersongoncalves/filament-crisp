---
name: filament-crisp-development
description: Build and work with the Filament Crisp plugin — settings page and script injection in Filament panels.
---

# Filament Crisp Development

## When to use this skill

- Adding or changing the Crisp integration of a Filament panel
- Customizing the Crisp settings page
- Debugging a missing Crisp script in a panel

## Package Overview

- **Package**: `jeffersongoncalves/filament-crisp` (branch `2.x`)
- **Namespace**: `JeffersonGoncalves\Filament\Crisp`
- **Dependencies**: `jeffersongoncalves/filament-analytics-core:^2.0`, `jeffersongoncalves/laravel-crisp:^1.0`

## Setup

```php
use JeffersonGoncalves\Filament\Crisp\CrispPlugin;

$panel->plugins([
    CrispPlugin::make(),                        // settings page + script injection
    // CrispPlugin::make()->settingsPage(false), // script injection only
]);
```

```bash
php artisan vendor:publish --tag=crisp-settings-migrations
php artisan migrate
```

## Settings Fields

| Field | Component |
|-------|-----------|
| `website_id` | TextInput |
| `identify_users` | Toggle |
| `only_when_open` | Toggle |

## Troubleshooting

- **Script missing**: the settings are incomplete — `app(\JeffersonGoncalves\Crisp\Settings\CrispSettings::class)->isConfigured()`.
- **Settings page errors**: the `crisp` settings group is missing — publish and run the migrations.
