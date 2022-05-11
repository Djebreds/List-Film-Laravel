<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param string|null ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if ($user = Auth::user()) {
                    if ($user->role == User::ROLE_USER) {
//                        return redirect()->back(); // it will loop
                        return redirect()->intended(route('landing-page'));
                    } else if ($user->role == User::ROLE_ADMIN) {
                        return redirect()->intended(route('dashboard'));
                    }
                }
                return redirect(RouteServiceProvider::HOME);
//                return redirect()->back();
            }
        }

        return $next($request);
    }
}
