<?php

namespace App\Actions\Web\GetListNewsLimitSix;

use Storage;
use App\Models\News;

class Handler
{
    public function handle()
    {
        $result = [];

        $news = News::with(['news_category'])->where('is_enabled', 'yes')->limit(6)->get();
        if ($news->count() > 0) {
            foreach ($news as $item) {
                $result[] = [
                    'id' => $item->id,
                    'title' => $item->title,
                    'date' => $item->date->toFormattedDateString(),
                    'information' => $item->information,
                    'url_image' => $item->image ? Storage::disk('news')->url($item->image) : null,
                    'category' => $item->news_category->name
                ];
            }
        }

        return $result;
    }
}
