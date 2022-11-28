<?php

namespace App\Actions\Web\GetListEmagazineCategoryId;

use Storage;
use App\Models\Emagazine;

class Handler
{
    public function handle($categoryId)
    {
        $result = [];

        $emagazine = Emagazine::whereHas('emagazine_category', function($q) use ($categoryId) {
            $q->where('id', $categoryId);
         })->where('is_enabled', 'yes')->paginate(15);

        if ($emagazine->total() > 0) {
            foreach ($emagazine->items() as $item) {
                $result['items'][] = [
                    'id' => $item->id,
                    'title' => $item->title,
                    'description' => $item->description,
                    'url_file' => $item->url_file,
                    'url_image' => $item->image ? Storage::disk('news')->url($item->image) : null,
                    'category' => $item->emagazine_category->name
                ];
            }
        }

        $result['emagazine'] = $emagazine;
        $result['total'] = $emagazine->total();

        return $result;
    }
}
