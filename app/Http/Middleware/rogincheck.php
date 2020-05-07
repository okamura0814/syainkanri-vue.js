<?php

namespace App\Http\Middleware;

use Closure;

class rogincheck
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
      session_start();
      session_regenerate_id(true);
      if(session()->exists('login')){
        return $next($request);
      }else{
        return response(view ('CompletionPage.login'));
      }
    }
}

// use Illuminate\Support\Facades\Auth;
// class Authenticate
// {
//     public function handle($request, Closure $next)
//     {
//         if (!Auth::check()) { // 非ログインはログインページに飛ばす
//             return redirect('/login');
//         }
//         return $next($request);
//     }
// }
