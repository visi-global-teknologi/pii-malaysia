<?php

namespace App\Actions\Web\GetListHomepagePictureSlider;

use Storage;
use App\Models\HomepagePictureSlider;

class Handler
{
    public function handle()
    {
        $result = [];
        $pictureSlider = HomepagePictureSlider::where('is_enabled', 'yes')->get();

        if ($pictureSlider->count() > 0) {
            foreach ($pictureSlider as $picture) {
                $result[] = Storage::disk('homepage-picture-slider')->url($picture->image);
            }
        }

        return $result;
    }
}
