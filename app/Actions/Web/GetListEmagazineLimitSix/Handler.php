<?php

namespace App\Actions\Web\GetListEmagazineLimitSix;

use Storage;
use App\Models\Emagazine;

class Handler
{
    public function handle()
    {
        $result = [];

        $emagazines = Emagazine::where('is_enabled', 'yes')->limit(6)->get();
        if ($emagazines->count() > 0) {
            foreach ($emagazines as $magazine) {
                $result[] = [
                    'id' => $magazine->id,
                    'title' => $magazine->title,
                    'description' => $magazine->description,
                    'url_image_emagazine' => $magazine->image ? Storage::disk('emagazine')->url($magazine->image) : null
                ];
            }
        }

        return $result;
    }
}
