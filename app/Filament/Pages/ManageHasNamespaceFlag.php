<?php

namespace App\Filament\Pages;

use Domain\Roshan\Filament\HasNamespaceSettings;
use Filament\Pages\SettingsPage;

class ManageHasNamespaceFlag extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = HasNamespaceSettings::class;

    protected function getFormSchema(): array
    {
        return [
            // ...
        ];
    }
}
