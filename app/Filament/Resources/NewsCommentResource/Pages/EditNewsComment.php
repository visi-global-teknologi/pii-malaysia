<?php

namespace App\Filament\Resources\NewsCommentResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\NewsCommentResource;

class EditNewsComment extends EditRecord
{
    protected static string $resource = NewsCommentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
