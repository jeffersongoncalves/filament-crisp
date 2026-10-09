<?php

namespace JeffersonGoncalves\Filament\Crisp\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use JeffersonGoncalves\Crisp\Settings\CrispSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class ManageCrispSettings extends SettingsPage
{
    protected static string $settings = CrispSettings::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function getNavigationLabel(): string
    {
        return __('filament-crisp::pages.navigation_label');
    }

    public static function getNavigationGroup(): string|\UnitEnum|null
    {
        return AbstractAnalyticsPlugin::navigationGroupFor('filament-crisp') ?? __('filament-crisp::pages.navigation_group');
    }

    public function getTitle(): string
    {
        return __('filament-crisp::pages.title');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->schema([
                Section::make(__('filament-crisp::pages.sections.crisp.heading'))
                    ->description(__('filament-crisp::pages.sections.crisp.description'))
                    ->schema([
                        TextInput::make('website_id')
                            ->label(__('filament-crisp::pages.fields.website_id.label'))
                            ->helperText(__('filament-crisp::pages.fields.website_id.helper'))
                            ->placeholder('00000000-0000-0000-0000-000000000000')
                            ->regex('/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/i')
                            ->maxLength(36)
                            ->nullable(),
                        Toggle::make('identify_users')
                            ->label(__('filament-crisp::pages.fields.identify_users.label'))
                            ->helperText(__('filament-crisp::pages.fields.identify_users.helper')),
                        Toggle::make('only_when_open')
                            ->label(__('filament-crisp::pages.fields.only_when_open.label'))
                            ->helperText(__('filament-crisp::pages.fields.only_when_open.helper')),
                    ]),
            ]);
    }
}
