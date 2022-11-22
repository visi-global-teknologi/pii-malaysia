<?php

namespace App\Filament\Resources\EmagazineCategoryResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\EmagazineCategoryResource;

class ListEmagazineCategories extends ListRecords
{
    protected static string $resource = EmagazineCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
