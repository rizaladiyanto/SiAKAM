<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->usertype!='user'){
            if(Auth::user()->usertype=='dekan'){
                return redirect('dekan/dashboard');
            }
            if(Auth::user()->usertype=='kaprodi'){
                return redirect('kaprodi/dashboard');
            }
            if(Auth::user()->usertype=='akademik'){
                return redirect('akademik/dashboard');
            }
            if(Auth::user()->usertype=='dosenwali'){
                return redirect('dosenwali/dashboard');
            }
        }
        return $next($request);
    }
}
