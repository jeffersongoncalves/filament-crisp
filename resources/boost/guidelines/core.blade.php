## Filament Crisp

Filament plugin for Crisp with a settings page powered by Spatie Laravel Settings. The script is injected at `PanelsRenderHook::BODY_END` of every panel page once the settings are complete.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-crisp:"^3.0"
php artisan vendor:publish --tag=crisp-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\Crisp\CrispPlugin;

$panel->plugins([
    CrispPlugin::make(),
]);
</code-snippet>
@endverbatim

### Architecture
- `CrispPlugin` extends `JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin` and registers `ManageCrispSettings` (disable with `->settingsPage(false)`)
- `CrispServiceProvider` extends `AbstractAnalyticsServiceProvider` and injects the `crisp::script` view from `jeffersongoncalves/laravel-crisp`
- `ManageCrispSettings` is a `SettingsPage` bound to `JeffersonGoncalves\Crisp\Settings\CrispSettings`
- Translations live under `filament-crisp::pages.*`
