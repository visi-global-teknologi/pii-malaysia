<?php

namespace App\Actions\Api\News\Comment\Store;

use Illuminate\Http\Request;

class ValidateRequest
{
    public static function handle(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'comment' => 'required|max:250',
            'website' => 'required|url',
            'news_id' => 'required|exists:news,id',
        ]);
    }
}
