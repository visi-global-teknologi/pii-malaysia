<?php

namespace App\Http\Controllers\Front;

use Cache;
use Illuminate\Http\Request;
use MehrIt\HtmlCleaner\HtmlCleaner;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $data = [];

        if (Cache::has('setting')) {
            $settingCache = Cache::get('setting');
            $settingArray = json_decode($settingCache, true);
            if (count($settingArray) > 0) {
                foreach ($settingArray as $key => $value) {
                    if ($value['key'] == 'contact_gmaps') {
                        $removeTagHtml = strip_tags($value['value']);
                        $data['homepage_lists_contact'][$value['key']] = $removeTagHtml;
                    } else {
                        $data['homepage_lists_contact'][$value['key']] = $value['value'];
                    }
                }
            }
        }

        return view('front.contact.index', compact('data'));
    }
}
