<?php

namespace App\Http\Middleware;

use Cache;
use Closure;
use Illuminate\Http\Request;

class CachingDataSetting
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $setting = \App\Models\Setting::get();
        if ($setting->count() > 0) {
            if (Cache::has('setting')) {
                Cache::forget('setting');
                Cache::put('setting', $setting->toJson());
                return $next($request);
            } else {
                Cache::put('setting', $setting->toJson());
                return $next($request);
            }
        }

        Cache::put('setting', json_encode([]));
        return $next($request);
    }
}
