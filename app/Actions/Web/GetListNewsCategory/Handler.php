<?php

namespace App\Actions\Web\GetListNewsCategory;

use DB;
use App\Models\News;

class Handler
{
    public function handle()
    {
        $result = [];

        $newsCategory = DB::table('news')
                            ->join('news_categories', 'news.news_category_id', '=', 'news_categories.id')
                            ->select('news_categories.id as category_id', 'news_categories.name as category_name', DB::raw('count(*) as total'))
                            ->groupBy('category_id')
                            ->get();

        if ($newsCategory->count() > 0) {
            foreach ($newsCategory as $item) {
                $result[] = [
                    'id' => $item->category_id,
                    'name' => $item->category_name,
                    'total' => $item->total
                ];
            }
        }

        return $result;
    }
}
