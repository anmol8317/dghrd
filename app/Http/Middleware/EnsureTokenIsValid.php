<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->session()->get('auth')){
            return $next($request);
        }else
        {
            return redirect("login")->with('error', 'unauthorised Accesss,please login ');
            //return redirect()->back()->with(['error'=>'Authentication Failed']);
        }

    }


}
