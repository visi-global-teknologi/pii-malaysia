<?php

namespace App\Filament\Resources\HomepagePictureSliderResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\HomepagePictureSliderResource;

class ListHomepagePictureSliders extends ListRecords
{
    protected static string $resource = HomepagePictureSliderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
