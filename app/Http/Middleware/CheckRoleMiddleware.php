<?php

namespace App\Http\Middleware;

use App\Http\Controllers\AuthController;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\CheckLoginMiddleware as Middleware;
class CheckRoleMiddleware
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
        $user = User::find(\auth()->id());
        if(Auth::check() && $user->role == 1)
        {
            return $next($request);
        }
        return redirect()->action([AuthController::class, 'showLogin']);
    }
}
