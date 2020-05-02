<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;

class LangSet
{
    public function handle($request, Closure $next)
    {
        if (!empty(session('lang'))) {
            \App::setLocale(session('lang'));
        }
        return $next($request);
    }
}
