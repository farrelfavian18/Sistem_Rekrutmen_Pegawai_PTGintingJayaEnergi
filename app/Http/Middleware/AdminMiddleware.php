<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){

            //admin role == 1
            //user default == 0
            if(Auth::user()->role ==1){
                
                return $next($request);

            }else{
                return redirect('/dashboard')->with('message','Kamu bukan admin akses di tolak!');
            }
            
        }else{
            return redirect('/login')->with('message','Login untuk mendapatkan akses!');
        }
        
    }
}
