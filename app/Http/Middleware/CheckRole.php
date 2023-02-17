<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckRole
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
       $user = Auth::user();

        if ($user->Role('chef')) {
            return $next($request);

        }return redirect('home')->with('error', 'You do not have the necessary permissions to access this page.');


 if ($user && $user->Role('chef')) {
            return redirect('home')->with('error', 'You do not have the necessary permissions to access this page.');
        }


    }
}
