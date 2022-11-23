<?php

namespace App\Actions\Web\GetListMember;

use Storage;
use App\Models\Member;

class Handler
{
    public function handle()
    {
        $result = [];

        $members = Member::where('is_active', 'yes')->get();
        if ($members->count() > 0) {
            foreach ($members as $member) {
                $result[] = [
                    'name' => $member->name,
                    'job' => $member->job,
                    'quote' => $member->quote,
                    'url_photo' => $member->photo ? Storage::disk('member')->url($member->photo) : null
                ];
            }
        }

        return $result;
    }
}
