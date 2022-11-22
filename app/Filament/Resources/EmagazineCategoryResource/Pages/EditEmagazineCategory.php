<?php

namespace App\Filament\Resources\EmagazineCategoryResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\EmagazineCategoryResource;

class EditEmagazineCategory extends EditRecord
{
    protected static string $resource = EmagazineCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
