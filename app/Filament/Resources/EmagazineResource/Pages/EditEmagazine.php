<?php

namespace App\Filament\Resources\EmagazineResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\EmagazineResource;

class EditEmagazine extends EditRecord
{
    protected static string $resource = EmagazineResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
