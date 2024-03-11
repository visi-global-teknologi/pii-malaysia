<?php

namespace App\Filament\Pages;

use RyanChandler\FilamentProfile\Pages\Profile as BaseProfile;

class Profile extends BaseProfile
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'vendor.filament-profile.filament.pages.profile';
}
