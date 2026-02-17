<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = session('app_locale')
            ?? $request->cookie('app_locale')
            ?? 'ro';

        if (!in_array($locale, ['ro', 'en'])) {
            $locale = 'ro';
        }

        App::setLocale($locale);

        return $next($request);
    }
}

