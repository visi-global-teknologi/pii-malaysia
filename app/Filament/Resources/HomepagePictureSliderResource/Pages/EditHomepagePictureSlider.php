<?php

namespace App\Filament\Resources\HomepagePictureSliderResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\HomepagePictureSliderResource;

class EditHomepagePictureSlider extends EditRecord
{
    protected static string $resource = HomepagePictureSliderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
