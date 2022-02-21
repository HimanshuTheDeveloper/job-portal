<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class JobProviderMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::guard('job_provider')->check()){          
            return redirect(route('job-provider.login'));
        }
         return $next($request);
    }
}
