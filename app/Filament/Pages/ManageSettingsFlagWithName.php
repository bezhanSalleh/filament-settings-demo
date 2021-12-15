<?php

namespace App\Filament\Pages;

use App\Settings\WithNameFlagSettings;
use Filament\Pages\SettingsPage;

class ManageSettingsFlagWithName extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = WithNameFlagSettings::class;

    protected function getFormSchema(): array
    {
        return [
            // ...
        ];
    }
}
