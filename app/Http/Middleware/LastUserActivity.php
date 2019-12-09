<?php

namespace App\Http\Middleware;

use Closure;
use Cache;
use Carbon\Carbon;

class LastUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if ($request -> sesion()->exists('userid')){
        //     $userid = $request -> sesion() -> get('userid');
        //     $expiresAt = Carbon::now() -> addMinutes(2);
        //     Cache::put('user-is-online-'.$userid, true,$expiresAt);
        // }
        return $next($request);
    }
}
