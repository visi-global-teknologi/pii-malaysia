<?php

namespace App\Actions\Api\Message\Store;

use LVR\Phone\Phone;
use Illuminate\Http\Request;

class ValidateRequest
{
    public static function handle(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'message' => 'required|max:500',
            'phone_number' => 'required|max:50',
            'subject' => 'required|max:50',
        ]);

        $request->validate([
            'phone_number' => [new Phone],
        ]);
    }
}
