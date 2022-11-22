<?php

namespace App\Actions\Api\News\Comment\Store;

use Illuminate\Http\Request;

class SaveData
{
    public static function handle(Request $request)
    {
        $newsComment = new \App\Models\NewsComment;
        $newsComment->name = $request->name;
        $newsComment->email = $request->email;
        $newsComment->website = $request->website;
        $newsComment->news_id = $request->news_id;
        $newsComment->comment = $request->comment;
        $newsComment->datetime = now();
        $newsComment->is_read = 'no';
        $newsComment->save();
    }
}
