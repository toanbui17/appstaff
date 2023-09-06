<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($this->islogin()){
            $lg = 'middleware auth login';
            echo $lg;
        }else{
            return redirect(route('home.login'));
        }
        return $next($request);
    }

    public function islogin(){
        return true;
    }
}
