<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class FrontLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $localeHeader = $request->header('locale');
        $localeRequest = $request->get('locale');
        if ($localeRequest && !App::isLocale($localeRequest)) {
            App::setLocale($localeRequest);
        } else if ($localeHeader && !App::isLocale($localeHeader)) {
            App::setLocale($localeHeader);
        }
        return $next($request);
    }
}
