<?php

namespace App\Actions\Web\GetListGallery;

use Storage;
use App\Models\Gallery;

class Handler
{
    public function handle()
    {
        $result = [];

        $galleries = Gallery::where('is_enabled', 'yes')->get();
        if ($galleries->count() > 0) {
            foreach ($galleries as $item) {
                $result[] = [
                    'id' => $item->id,
                    'url_image' => $item->image ? Storage::disk('gallery')->url($item->image) : null,
                ];
            }
        }

        return $result;
    }
}
