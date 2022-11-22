<?php

namespace App\Actions\Api\Message\Store;

use Illuminate\Http\Request;

class Handler
{
    public function handle(Request $request)
    {
        try {
            ValidateRequest::handle($request);
            SaveData::handle($request);
            return response()->api(true, 'Successfully sent the message', [], 200);
        } catch (\Exception $e) {
            $message = $e->getMessage();
            return abort(400, $message);
        }
    }
}
