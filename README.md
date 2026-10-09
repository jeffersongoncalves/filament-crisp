<div class="filament-hidden">

![Filament Crisp](https://raw.githubusercontent.com/jeffersongoncalves/filament-crisp/1.x/art/jeffersongoncalves-filament-crisp.png)

</div>

# Filament Crisp

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-crisp.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-crisp)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-crisp/fix-php-code-style-issues.yml?branch=1.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-crisp/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-crisp.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-crisp)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-crisp.svg?style=flat-square)](LICENSE.md)

Filament plugin for [Crisp](https://crisp.chat) — live chat widget for customer support — with a settings page powered by [Spatie Laravel Settings](https://github.com/spatie/laravel-settings). Manage Crisp from the Filament admin panel; the script is injected before `</body>` of every panel page.

Built on top of [jeffersongoncalves/laravel-crisp](https://github.com/jeffersongoncalves/laravel-crisp).

## Compatibility

| Branch | Filament | Package version |
|--------|----------|-----------------|
| 1.x | 3.x | `^1.0` |
| 2.x | 4.x | `^2.0` |
| 3.x | 5.x | `^3.0` |

## Installation

```bash
composer require jeffersongoncalves/filament-crisp:"^1.0"
```

Publish the settings migrations and run them:

```bash
php artisan vendor:publish --tag=crisp-settings-migrations
php artisan migrate
```

## Usage

```php
use JeffersonGoncalves\Filament\Crisp\CrispPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            CrispPlugin::make(),
        ]);
}
```

The plugin registers a **Crisp** settings page and injects the script before `</body>` of every panel page once the settings are complete.

| Field | Label |
|-------|-------|
| `website_id` | Website ID |
| `identify_users` | Identify signed-in users |
| `only_when_open` | Only during opening hours |

### Identify users and opening hours

- **Identify signed-in users** sends the panel user's name and email to Crisp.
- **Only during opening hours** hides the chat while [laravel-open-hours](https://github.com/jeffersongoncalves/laravel-open-hours) says you're closed — pair it with [filament-open-hours](https://github.com/jeffersongoncalves/filament-open-hours) to edit the schedule from the panel.

### Disable the Settings Page

```php
CrispPlugin::make()
    ->settingsPage(false),
```

To render the script outside Filament, add `@include('crisp::script')` to your own layout.

### Navigation group

Put the settings page in one of your panel's own navigation groups (a string or a closure):

```php
CrispPlugin::make()
    ->navigationGroup(fn (): string => __('admin.navigation.settings')),
```

## Requirements

- PHP 8.2 or higher
- Filament 3.x

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
