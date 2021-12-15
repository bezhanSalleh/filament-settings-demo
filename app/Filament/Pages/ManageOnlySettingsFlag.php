<?php

namespace App\Filament\Pages;

use App\Settings\OnlyFlagSettings;
use Filament\Pages\SettingsPage;

class ManageOnlySettingsFlag extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = OnlyFlagSettings::class;

    protected function getFormSchema(): array
    {
        return [
            // ...
        ];
    }
}
