<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Cache\RateLimiter;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class RateLimitMiddleware
{
    public function handle($request, Closure $next)
    {
        $key = 'data_addition_count_' . $request->ip();
        $maxAdditions = 3;
        $expirationMinutes = 1;

        $additionCount = Cache::remember($key, now()->addMinutes($expirationMinutes), function () {
            return 0;
        });

        if ($additionCount >= $maxAdditions) {
            return redirect()->back()->withErrors(['error' => 'Rate limit exceeded. Try again after 1 minute.']);
        }

        // Increment the data addition count atomically
        $newCount = Cache::increment($key);

        // If incrementing exceeds the limit, add the key with expiration time and reset count
        if ($newCount > $maxAdditions) {
            Cache::add($key, 1, now()->addMinutes($expirationMinutes));

            return redirect()->back()->with(['error' => 'Rate limit exceeded. Try again later.']);

        }

        return $next($request);
    }
}
