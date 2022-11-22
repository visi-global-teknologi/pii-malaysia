<?php

namespace App\Filament\Resources\NewsResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Resources\NewsResource;
use Filament\Resources\Pages\ListRecords;

class ListNews extends ListRecords
{
    protected static string $resource = NewsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
