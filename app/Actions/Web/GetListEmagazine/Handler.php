<?php

namespace App\Actions\Web\GetListEmagazine;

use Storage;
use App\Models\Emagazine;

class Handler
{
    public function handle()
    {
        $result = [];

        $emagazine = Emagazine::with(['emagazine_category'])->where('is_enabled', 'yes')->paginate(15);

        if ($emagazine->total() > 0) {
            foreach ($emagazine->items() as $item) {
                $result['items'][] = [
                    'id' => $item->id,
                    'title' => $item->title,
                    'description' => $item->description,
                    'url_file' => $item->url_file,
                    'url_image' => $item->image ? Storage::disk('emagazine')->url($item->image) : null,
                    'category' => $item->emagazine_category->name
                ];
            }
        }

        $result['emagazine'] = $emagazine;
        $result['total'] = $emagazine->total();

        return $result;
    }
}
