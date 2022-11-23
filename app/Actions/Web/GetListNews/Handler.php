<?php

namespace App\Actions\Web\GetListNews;

use Storage;
use App\Models\News;

class Handler
{
    public function handle()
    {
        $result = [];

        $news = News::with(['news_category'])->where('is_enabled', 'yes')->paginate(3);

        if ($news->total() > 0) {
            foreach ($news->items() as $item) {
                $result['items'][] = [
                    'id' => $item->id,
                    'title' => $item->title,
                    'date' => $item->date->toFormattedDateString(),
                    'information' => $item->information,
                    'url_image' => $item->image ? Storage::disk('news')->url($item->image) : null,
                    'category' => $item->news_category->name
                ];
            }
        }

        $result['news'] = $news;
        $result['total'] = $news->total();

        return $result;
    }
}
