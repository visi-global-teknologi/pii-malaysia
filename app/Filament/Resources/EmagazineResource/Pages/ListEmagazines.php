<?php

namespace App\Filament\Resources\EmagazineResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\EmagazineResource;

class ListEmagazines extends ListRecords
{
    protected static string $resource = EmagazineResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
