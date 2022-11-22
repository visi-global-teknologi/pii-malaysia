<?php

namespace App\Actions\Api\News\Comment\Store;

use Illuminate\Http\Request;

class Handler
{
    public function handle(Request $request)
    {
        try {
            ValidateRequest::handle($request);
            SaveData::handle($request);
            return response()->api(true, 'Successfully post comment', [], 200);
        } catch (\Exception $e) {
            $message = $e->getMessage();
            return abort(400, $message);
        }
    }
}
