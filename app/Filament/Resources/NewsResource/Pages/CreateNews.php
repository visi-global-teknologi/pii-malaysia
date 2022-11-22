<?php

namespace App\Filament\Resources\NewsResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Resources\NewsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;
}
