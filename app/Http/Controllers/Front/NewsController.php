<?php

namespace App\Http\Controllers\Front;

use Cache;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $data['homepage_lists_news'] = app('app.action.web.get-list-news')->handle();
        $news = $data['homepage_lists_news']['news'];
        $total = $data['homepage_lists_news']['total'];

        return view('front.news.index', compact('data', 'news', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

        $data['news_detail'] = app('app.action.web.get-detail-news')->handle($id);
        $data['news_category'] = app('app.action.web.get-list-news-category')->handle($id);

        return view('front.news.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
