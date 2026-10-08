<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Crisp\Settings\CrispSettings;
use JeffersonGoncalves\Filament\Crisp\CrispPlugin;
use JeffersonGoncalves\Filament\Crisp\Pages\ManageCrispSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageCrispSettings::class)
        ->and(CrispPlugin::make()->getId())->toBe('filament-crisp');
});

it('uses translated labels', function () {
    expect(ManageCrispSettings::getNavigationLabel())->toBe('Crisp');

    app()->setLocale('pt_BR');

    expect((new ManageCrispSettings)->getTitle())->toBe('Configurações do Crisp');
});

it('saves the settings from the page', function () {
    Livewire::test(ManageCrispSettings::class)
        ->fillForm(['website_id' => '3f2b8c1e-7a4d-4e5f-9b6a-1c2d3e4f5a6b'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect(app(CrispSettings::class)->refresh()->isConfigured())->toBeTrue()
        ->and(app(CrispSettings::class)->refresh()->website_id)->toBe('3f2b8c1e-7a4d-4e5f-9b6a-1c2d3e4f5a6b');
});

it('rejects an invalid value', function () {
    Livewire::test(ManageCrispSettings::class)
        ->fillForm(['website_id' => 'x\'); alert(1); (\''])
        ->call('save')
        ->assertHasFormErrors(['website_id']);
});

it('injects the Crisp script into the panel once configured', function () {
    $settings = app(CrispSettings::class);
    $settings->website_id = '3f2b8c1e-7a4d-4e5f-9b6a-1c2d3e4f5a6b';
    $settings->save();

    expect((string) FilamentView::renderHook(PanelsRenderHook::BODY_END))->toContain('client.crisp.chat');
});
