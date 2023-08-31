<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthStaff
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ): Response
    {
        
        if($this->islogin()){
            $ad = 'toan bui auth staff login';
            echo $ad;
            //return redirect(route('home',['ad'=>$ad]));
        }else{
            return redirect(route('home.login'));
        }
        return $next($request);
    }

    public function islogin(){
        return true;
    }
}
