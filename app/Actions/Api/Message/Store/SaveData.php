<?php

namespace App\Actions\Api\Message\Store;

use Illuminate\Http\Request;

class SaveData
{
    public static function handle(Request $request)
    {
        $message = new \App\Models\Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->phone_number = $request->phone_number;
        $message->subject = $request->subject;
        $message->date = now();
        $message->save();
    }
}
