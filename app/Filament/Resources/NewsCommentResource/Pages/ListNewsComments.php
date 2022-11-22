<?php

namespace App\Filament\Resources\NewsCommentResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\NewsCommentResource;

class ListNewsComments extends ListRecords
{
    protected static string $resource = NewsCommentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
