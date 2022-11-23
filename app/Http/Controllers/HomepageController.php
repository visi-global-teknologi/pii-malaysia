<?php

namespace App\Http\Controllers;

use Cache;
use Illuminate\Http\Request;

class HomepageController extends Controller
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

        $data['homepage_picture_slider'] = app('app.action.web.get-list-homepage-picture-slider')->handle();
        $data['homepage_lists_member'] = app('app.action.web.get-list-member')->handle();
        $data['homepage_lists_emagazine_limit_six'] = app('app.action.web.get-list-emagazine-limit-six')->handle();
        $data['homepage_lists_news_limit_six'] = app('app.action.web.get-list-news-limit-six')->handle();
        // dd($data);

        return view('homepage.index', compact('data'));
    }
}
