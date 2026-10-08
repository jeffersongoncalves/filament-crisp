<?php

namespace JeffersonGoncalves\Filament\Crisp;

use Filament\View\PanelsRenderHook;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsServiceProvider;

class CrispServiceProvider extends AbstractAnalyticsServiceProvider
{
    protected function packageName(): string
    {
        return 'filament-crisp';
    }

    protected function renderHooks(): array
    {
        return [
            PanelsRenderHook::BODY_END => 'crisp::script',
        ];
    }
}
