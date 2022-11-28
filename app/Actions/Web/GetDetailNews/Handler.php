<?php

namespace App\Actions\Web\GetDetailNews;

use Storage;
use App\Models\News;

class Handler
{
    public function handle($id)
    {
        $result = [];

        $news = News::with(['news_category', 'news_comments'])->where('id', $id)->where('is_enabled', 'yes')->first();
        if ($news) {
            $result = [
                'id' => $news->id,
                'title' => $news->title,
                'date' => $news->date->toFormattedDateString(),
                'url_image' => Storage::disk('news')->url($news->image),
                'information' => $news->information,
                'news_category_id' => $news->news_category_id,
                'news_category_name' => $news->news_category->name
            ];
        }

        return $result;
    }
}
