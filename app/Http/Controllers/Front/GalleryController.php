<?php

namespace App\Http\Controllers\Front;

use Cache;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $data = [];

        if (Cache::has('setting')) {
            $settingCache = Cache::get('setting');
            $settingArray = json_decode($settingCache, true);
            if (count($settingArray) > 0) {
                foreach ($settingArray as $key => $value) {
                    $data['homepage_lists_contact'][$value['key']] = $value['value'];
                }
            }
        }

        $data['list_gallery'] = app('app.action.web.get-list-gallery')->handle();

        return view('front.gallery.index', compact('data'));
    }
}
