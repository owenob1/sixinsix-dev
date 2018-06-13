<?php
namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminAuth {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( Auth::check() && Auth::user()->isRole('admin') == true )
        {
                return $next($request);

        }

        return redirect()->route('platform.pages.dashboard');
    }
}