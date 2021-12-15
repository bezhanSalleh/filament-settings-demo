<?php

namespace App\Filament\Pages;

use App\Settings\YourSettingsClass;
use Filament\Pages\SettingsPage;

class ManageNoSettingsClassName extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = YourSettingsClass::class;

    protected function getFormSchema(): array
    {
        return [
            // ...
        ];
    }
}
