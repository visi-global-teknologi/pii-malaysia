<?php

namespace App\Filament\Resources\NewsCommentResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\NewsCommentResource;

class CreateNewsComment extends CreateRecord
{
    protected static string $resource = NewsCommentResource::class;
}
