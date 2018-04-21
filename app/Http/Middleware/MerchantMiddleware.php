<?php

namespace ITreat\Http\Middleware;

use Closure;

class MerchantMiddleware
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
        if (auth()->user()->isMerchant()) {
            return $next($request);
        }

        return response()->json(['status' => 'error', 'message' => 'Only merchants can make this request.' ], 500);
    }
}
