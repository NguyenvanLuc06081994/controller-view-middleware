<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Session;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Session::flash('age-error','ban chua du tuoi dung he thong');
        $age = Carbon::parse($request->date)->age;
        if ($age < 18) {
            return back();
        }
        return $next($request);
    }
}
