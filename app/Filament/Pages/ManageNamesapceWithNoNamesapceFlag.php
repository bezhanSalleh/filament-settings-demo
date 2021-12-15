<?php

namespace App\Filament\Pages;

use App\Settings\NoNFlagSettings;
use Filament\Pages\SettingsPage;

class ManageNamesapceWithNoNamesapceFlag extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = NoNFlagSettings::class;

    protected function getFormSchema(): array
    {
        return [
            // ...
        ];
    }
}
