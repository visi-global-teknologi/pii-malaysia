<?php

namespace App\Actions\Web\GetDetailEmagazine;

use Storage;
use App\Models\Emagazine;

class Handler
{
    public function handle($id)
    {
        $result = [];

        $emagazine = Emagazine::with(['emagazine_category'])->where('id', $id)->where('is_enabled', 'yes')->first();
        if ($emagazine) {
            $result = [
                'id' => $emagazine->id,
                'title' => $emagazine->title,
                'url_image' => Storage::disk('emagazine')->url($emagazine->image),
                'url_file' => $emagazine->url_file,
                'description' => $emagazine->description,
                'emagazine_category_id' => $emagazine->emagazine_category_id,
                'emagazine_category_name' => $emagazine->emagazine_category->name
            ];
        }

        return $result;
    }
}
