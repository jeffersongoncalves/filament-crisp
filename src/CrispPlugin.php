<?php

namespace JeffersonGoncalves\Filament\Crisp;

use JeffersonGoncalves\Filament\Crisp\Pages\ManageCrispSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class CrispPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-crisp';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageCrispSettings::class;
    }
}
