<?php

namespace App\Filament\Pages;

use App\Settings\SiteSettings;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ManageSite extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = SiteSettings::class;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->required(),
            TextInput::make('slogan'),
            FileUpload::make('logo')
                ->avatar()
        ];
    }
}
